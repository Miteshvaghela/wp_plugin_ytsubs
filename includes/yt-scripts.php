<?php 

function add_yt_scripts(){

    wp_enqueue_script( 'yt_subs', plugins_url().'/ytsubs/js/yt_main_script.js');

    wp_enqueue_style( 'yt_subs', plugins_url().'/ytsubs/css/yt_main_style.css');

    wp_register_script( 'yt_subs_google', 'https://apis.google.com/js/platform.js');

    wp_enqueue_script( 'yt_subs_google' );

}

add_action('wp_enqueue_scripts','add_yt_scripts');