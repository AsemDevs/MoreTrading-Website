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
    <header class="px-4 lg:px-0 lg:container mx-auto">
        <div class="py-3 flex justify-between align-center">
            <div>
                <a href="<?php echo site_url(); ?>" class="font-semibold text-gray-800 flex items-center">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg' ?>" alt="More Logo" class="w-22 h-auto mr-2" />
                    <span class="hidden sm:inline logo">MORE</span> <!-- Hide 'MORE' text on smaller screens -->
                </a>
            </div>
            <div class="flex lg:pr-4 items:start md:items-center sm:justify-center lg:justify-end flex-wrap">
            <nav id="menu" class="nav-menu hidden lg:flex space-x-10 mr-8 text-secondary">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'flex flex-col sm:flex-row space-y-4 sm:space-x-8 sm:space-y-0 list-none',
                        'fallback_cb' => false, // Stops WordPress from generating its own list in case the menu does not exist
                        'walker' => new Tailwind_Walker_Nav_Menu()
                    ));
                    ?>
                </nav>

                <!-- Mobile Menu -->
                <nav id="menu-mobile" class="nav-menu-mobile flex lg:hidden">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'flex flex-col w-full list-none',
                        'fallback_cb' => false,
                        'walker' => new Tailwind_Walker_Nav_Menu()
                    ));
                    ?>
                </nav>
                <div class="flex items-center space-x-3 loginreg">
                    <?php wp_loginout(home_url()); ?>
                    <a href="<?php echo wp_registration_url(); ?>" class="font-medium text-white text-sm md:text-m bg-primary rounded hover:bg-gray-700 px-3 md:px-7 py-0 md:py-2">Sign Up</a>
                </div>
            </div>
            <div class="flex lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="toggle-menu text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600 lg:hidden" id="menu-toggle" aria-label="toggle menu">
                    <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.75 14.3975C11.75 13.88 12.17 13.46 12.6875 13.46H24.5625C25.08 13.46 25.5 13.88 25.5 14.3975C25.5 14.915 25.08 15.335 24.5625 15.335H12.6875C12.17 15.335 11.75 14.915 11.75 14.3975ZM0.5 8.14746C0.5 7.62996 0.92 7.20996 1.4375 7.20996H24.5625C25.08 7.20996 25.5 7.62996 25.5 8.14746C25.5 8.66496 25.08 9.08496 24.5625 9.08496H1.4375C0.92 9.08496 0.5 8.66496 0.5 8.14746ZM5.5 1.89746C5.5 1.37996 5.92 0.959961 6.4375 0.959961H24.5625C25.08 0.959961 25.5 1.37996 25.5 1.89746C25.5 2.41496 25.08 2.83496 24.5625 2.83496H6.4375C5.92 2.83496 5.5 2.41496 5.5 1.89746Z" fill="black" />
                    </svg>

                </button>
            </div>
        </div>
    </header>
