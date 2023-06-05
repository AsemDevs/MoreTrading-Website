<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header class="container mx-auto">
        <div class="py-3 flex justify-between items-center">
            <div>
                <a href="<?php echo site_url(); ?>" class="font-semibold text-gray-800 flex items-center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="More Logo" class="w-22 h-auto mr-2" />
                    <span class="hidden md:inline">MORE</span> <!-- Hide 'MORE' text on smaller screens -->
                </a>
            </div>
            <div class="flex items-center">
                <nav id="menu" class="nav-menu hidden md:flex space-x-10 mr-4 text-secondary">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'flex flex-col md:flex-row space-x-10 list-none',
                        'fallback_cb' => false, // Stops WordPress from generating its own list in case the menu does not exist
                        'walker' => new Tailwind_Walker_Nav_Menu()
                    ));
                    ?>
                </nav>

                <!-- Mobile Menu -->
                <nav id="menu-mobile" class="nav-menu-mobile hidden md:hidden">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'flex flex-col list-none',
                        'fallback_cb' => false,
                        'walker' => new Tailwind_Walker_Nav_Menu()
                    ));
                    ?>
                </nav>
                <div class="flex items-center space-x-3 loginreg">
                    <a href="#" class="font-medium text-white text-sm md:text-m rounded bg-primary hover:bg-gray-700 px-3 md:px-7 py-0 md:py-2">Log in</a>
                    <a href="#" class="font-medium text-white text-sm md:text-m bg-primary rounded hover:bg-gray-700 px-3 md:px-7 py-0 md:py-2">Sign Up</a>
                </div>
            </div>
            <div class="flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="toggle-menu text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 md:hidden" id="menu-toggle" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1zm0 6a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1zm1 6a1 1 0 100 2h14a1 1 0 100-2H5z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>