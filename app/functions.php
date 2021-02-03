<?php

function css($file) {
    $time = filemtime(base_path('public/css/'.$file));
    return '/css/'.$file.'?'.$time;
}