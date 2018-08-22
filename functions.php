<?php

function theme_name_scripts(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery-slim', get_stylesheet_directory_uri() . '/assets/js/jquery-3.2.1.slim.min.js', array(), '3.2.1');
    wp_enqueue_script('bootstrap.min', get_stylesheet_directory_uri(). '/assets/js/bootstrap.min.js');

    wp_enqueue_style('bootstrap.min', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('my_local_fonts', get_stylesheet_directory_uri() . '/assets/css/my_local_fonts.css');
    wp_enqueue_style('font-awesome-4.7.0', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');

