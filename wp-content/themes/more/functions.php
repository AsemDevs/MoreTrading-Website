<?php
// functions.php

// This function will enable support for Post Thumbnails on Posts and Pages.
add_theme_support( 'post-thumbnails' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );
  