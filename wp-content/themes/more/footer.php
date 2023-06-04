<footer class="bg-black text-secondary">
    <div class="container mx-auto py-4">
        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-xl">Trading</h3>
                    <?php
                    $args = array(
                        'menu' => '3',
                        'container' => '',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-xl">Affiliate</h3>
                    <?php
                    $args = array(
                        'menu' => '4',
                        'container' => '',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-xl">Help</h3>
                    <?php
                    $args = array(
                        'menu' => '5',
                        'container' => '',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-xl">Learn</h3>

                    <?php
                    $args = array(
                        'menu' => '6',
                        'container' => '',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-xl">About</h3>

                    <?php
                    $args = array(
                        'menu' => '7',
                        'container' => '',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="flex flex-col text-white">
                    <h3 class="text-primary text-xl">Resources</h3>

                    <?php
                    $args = array(
                        'menu' => '8',
                        'container' => '',
                        'depth' => 1,
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
        <div class="social-icons flex justify-center my-13">
            <a href="#" class="mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook"></a>
            <a href="#" class="mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.svg" alt="Twitter"></a>
            <a href="#" class="mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram"></a>
            <a href="#" class="mx-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="Linkedin"></a>
        </div>
        <div class="disclosure text-white text-m mt-4 font-normal leading-9">
            <p>RISK DISCLOSURE:*The services and information provided by The Bored Traders Club are not directed at citizens or residents in the USA. Additionally, they are not intended for distribution to or used by any individual in any jurisdiction where such distribution would be contrary to local law or regulation.</p>
        </div>

        <div class="horizontal-links mt-4 justify-center flex flex-row text-primary">
            <?php
            $args = array(
                'menu' => '9',
                'container' => '',
                'menu_class' => 'flex text-m flex-row space-x-4',
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