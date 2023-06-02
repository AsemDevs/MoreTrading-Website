<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header class="bg-white">
        <div class="container mx-auto px-6 py-3 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div>
                    <a href="<?php echo site_url(); ?>" class="text-xl font-semibold text-gray-800">More</a>
                </div>

                <div class="flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1zm0 6a1 1 0 011-1h14a1 1 0 110 2H5a1 1 0 01-1-1zm1 6a1 1 0 100 2h14a1 1 0 100-2H5z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <nav class="hidden md:flex space-x-10">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'flex space-x-10 list-none',
                    'fallback_cb' => false // Stops WordPress from generating its own list in case the menu does not exist
                )); ?>
            </nav>

        </div>
    </header>