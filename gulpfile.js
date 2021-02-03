const gulp = require('gulp');
const postCss = require('gulp-postcss');
const postCssImport = require('postcss-import');
const postCssNested = require('postcss-nested');
const tailwindCss = require('tailwindcss');
const cssnano = require('cssnano');
const rename = require('gulp-rename');

const purge = require('@fullhuman/postcss-purgecss')({
    content: ['./resources/views/**/*.php'],
    defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
});

function css() {
    return gulp.src('./resources/pcss/app.pcss')
        .pipe(postCss([
            postCssImport,
            postCssNested,
            tailwindCss
        ]))
        .pipe(rename({
            suffix: '.min',
            extname: '.css',
        }))
        .pipe(gulp.dest('./public/css/'))
}

function watchCss() {
    return gulp.watch([
        'resources/css/**/*.css',
        'tailwind.config.js'
    ], css);
}

function compileForProduction() {
    return gulp.src('./resources/pcss/app.pcss')
        .pipe(postCss([
            postCssImport,
            postCssNested,
            tailwindCss,
            purge,
            cssnano
        ]))
        .pipe(rename({
            suffix: '.min',
            extname: '.css',
        }))
        .pipe(gulp.dest('./public/css/'));
}




exports.css = css;
exports.watch = gulp.series(css, watchCss);
exports.prod = compileForProduction;