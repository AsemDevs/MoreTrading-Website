<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header class="container mx-auto ">
        <div class="px-6 py-3 flex justify-between items-center">
            <div>
                <a href="<?php echo site_url(); ?>" class="text-xl font-semibold text-gray-800">More</a>
            </div>
            <div class="flex items-center">
                <nav class="nav-menu hidden md:flex space-x-10 mr-4">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container' => false,
                        'menu_class' => 'flex space-x-10 list-none',
                        'fallback_cb' => false // Stops WordPress from generating its own list in case the menu does not exist
                    )); ?>
                </nav>
                <div class="flex items-center space-x-3 ">
                    <a href="#" class="py-2 px-4 font-medium text-white rounded bg-primary hover:bg-gray-700">Log in</a>
                    <a href="#" class="py-2 px-4 font-medium text-white bg-primary rounded hover:bg-gray-700">Sign Up</a>
                </div>
            </div>
            <div class="flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="toggle-menu text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1zm0 6a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1zm1 6a1 1 0 100 2h14a1 1 0 100-2H5z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>