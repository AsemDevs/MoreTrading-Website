<?php get_header(); ?>

<div id="primary" class="container">
    <main id="main" class="site-main" role="main">
        <?php
            // Include the page content template.
            get_template_part( 'template-parts/hero', 'section' );
            get_template_part( 'template-parts/ourTools', 'section' );
            // End of the loop.
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>
