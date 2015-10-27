<?php

/**
 * pgb-child functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'pgb_child_enqueue_styles' );
function pgb_child_enqueue_styles() {
    wp_enqueue_style( 'pgb', get_template_directory_uri() . '/style.css' );
}

/**
 * remove the add_action( 'pgb_block_masthead', 'pgb_load_block_masthead' );
 */
add_action( 'init', 'pgb_child_no_header_init' );
function pgb_child_no_header_init() {
  remove_action( 'pgb_block_masthead', 'pgb_load_block_masthead' );
}
