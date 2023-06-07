<footer class="bg-black text-secondary px-4 sm:px-0">
    <div class="container mx-auto pb-20 sm:pb-8 pt-5 sm:pt-2">
        <div class="sm:flex sm:mt-8">
            <div class="sm:mt-0 sm:w-full sm:px-8 flex flex-col lg:flex-row justify-between">
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-lg sm:text-xl">Trading
                        <span class="down-arrow"></span>
                    </h3>

                    <?php
                    $args = array(
                        'theme_location' => 'trading-menu',
                        'container' => '',
                        'menu_class' => 'ml-4 sm:ml-0 hidden lg:block',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);

                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-lg sm:text-xl">Affiliate
                        <span class="down-arrow"></span>
                    </h3>
                    <?php
                    $args = array(
                        'theme_location' => 'affiliate-menu',
                        'container' => '',
                        'menu_class' => 'ml-4 sm:ml-0 hidden lg:block',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-lg sm:text-xl">Help
                        <span class="down-arrow"></span>
                    </h3>
                    <?php
                    $args = array(
                        'theme_location' => 'help-menu',
                        'container' => '',
                        'menu_class' => 'ml-4 sm:ml-0 hidden lg:block',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-lg sm:text-xl">Learn
                        <span class="down-arrow"></span>
                    </h3>

                    <?php
                    $args = array(
                        'theme_location' => 'learn-menu',
                        'container' => '',
                        'menu_class' => 'ml-4 sm:ml-0 hidden lg:block',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-lg sm:text-xl">About
                        <span class="down-arrow"></span>
                    </h3>

                    <?php
                    $args = array(
                        'theme_location' => 'about-menu',
                        'container' => '',
                        'menu_class' => 'ml-4 sm:ml-0 hidden lg:block',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-lg sm:text-xl">Resources
                        <span class="down-arrow"></span>
                    </h3>

                    <?php
                    $args = array(
                        'theme_location' => 'resources-menu',
                        'container' => '',
                        'menu_class' => 'ml-4 sm:ml-0 hidden lg:block',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
        <div class="social-icons flex justify-center my-13">
            <a href="#" class="mx-2 hover:brightness-125"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram"></a>
            <a href="#" class="mx-2 hover:brightness-125"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Twitter"></a>
            <a href="#" class="mx-2 hover:brightness-125"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook"></a>
            <a href="#" class="mx-2 hover:brightness-125"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="Linkedin"></a>
        </div>
        <div class="disclosure mt-4 font-normal leading-9">
            <p class="text-white text-sm sm:text-m sm:px-4">RISK DISCLOSURE:*The services and information provided by The Bored Traders Club are not directed at citizens or residents in the USA. Additionally, they are not intended for distribution to or used by any individual in any jurisdiction where such distribution would be contrary to local law or regulation.</p>
        </div>

        <div class="horizontal-links mt-4 justify-center flex flex-row text-primary">
            <?php
            $args = array(
                'theme_location' => 'legal-menu',
                'container' => '',
                'menu_class' => 'flex text-m flex-col sm:flex-row space-x-0 sm:space-x-4 text-center',
                'depth' => 1,
            );
            wp_nav_menu($args);
            ?>
        </div>


    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>