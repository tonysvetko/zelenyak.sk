module.exports = {
    theme: {
        container: {
            center: true,
            padding: '2rem'
        },
        extend: {},
        fontFamily: {
            'sans': 'Montserrat, sans-serif',
        }
    },

    variants: {},

    plugins: [
        require('tailwindcss-grid')({
                grids: [1, 2, 3, 4],
                gaps: {
                    0: '0',
                    4: '1rem',
                    8: '2rem',
            },
            autoMinWidths: {
                '16': '4rem',
                '24': '6rem',
                '300px': '300px',
            },
            variants: ['responsive'],
        })
    ]
}
