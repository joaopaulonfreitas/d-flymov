<?php
// https://developer.wordpress.org/themes/basics/including-css-javascript/
wp_enqueue_style( 'style', get_stylesheet_uri() );


add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
    add_action( 'init', 'add_support_to_pages' );
}

function add_support_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}