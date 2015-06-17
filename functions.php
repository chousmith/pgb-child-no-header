<?php

/**
 * pgb-child-no-header functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'pgb_child_enqueue_styles' );
function pgb_child_enqueue_styles() {
  wp_enqueue_style( 'pgb', get_template_directory_uri() . '/style.css' );
}

/* no header */
add_action('pgb_block_header', 'pgb_child_no_header', 1);
function pgb_child_no_header() {
  remove_action('pgb_block_header', 'pgb_load_block_header');
}