<article id="post-<?php the_ID(); ?>" <?php post_class('flex flex-col bg-white rounded-lg shadow-lg overflow-hidden'); ?>>

    <header class="flex items-center justify-center p-6">
        <div class="text-lg leading-6 font-medium text-gray-900">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
    </header>

    <div class="entry-content flex-grow p-6">
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'theme-slug' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer bg-gray-50 px-6 py-4">
            <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Edit <span class="screen-reader-text">%s</span>', 'theme-slug' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
    
</article><!-- #post-<?php the_ID(); ?> -->
