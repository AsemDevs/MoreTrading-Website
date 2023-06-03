<?php
// functions.php

// This function will enable support for Post Thumbnails on Posts and Pages.
add_theme_support('post-thumbnails');

function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function enqueue_custom_fonts() {
    // Preconnect to Google Fonts URLs
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

    // Enqueue Google Fonts CSS
    wp_enqueue_style( 'custom-fonts', 'https://fonts.googleapis.com/css2?family=Dongle&display=swap' );
}
add_action( 'wp_head', 'enqueue_custom_fonts' );

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'register_my_menus');
