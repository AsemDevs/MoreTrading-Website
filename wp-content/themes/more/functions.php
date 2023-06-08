<?php
// functions.php

// This function will enable support for Post Thumbnails on Posts and Pages.
add_theme_support('post-thumbnails');

function theme_enqueue_styles()
{
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/output.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'trading-menu' => __('Trading Menu'),
            'affiliate-menu' => __('Affiliate Menu'),
            'help-menu' => __('Help Menu'),
            'learn-menu' => __('Learn Menu'),
            'about-menu' => __('About Menu'),
            'resources-menu' => __('Resources Menu'),
            'legal-menu' => __('Legal Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

class Tailwind_Walker_Nav_Menu extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"submenu lg:absolute lg:hidden lg:group-hover:block sm:text-sm lg:mt-0 lg:w-64 lg:rounded-md lg:shadow-lg lg:ring-1 lg:ring-black lg:ring-opacity-5 focus:outline-none\">\n";
    }

}
