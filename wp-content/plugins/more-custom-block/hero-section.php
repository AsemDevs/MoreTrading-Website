<?php
/**
 * Plugin Name: More Custom Block
 * Author: Asem Abdou
 * Version: 1.0.0
 */

function more_custom_block_register_block() {
    wp_register_script(
        'more-custom-block',
        plugins_url( 'block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-editor' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
    );

    register_block_type( 'more-custom-block/more', array(
        'editor_script' => 'more-custom-block',
    ) );
}

add_action( 'init', 'more_custom_block_register_block' );
