<?php function simpleThm_enqueue_style() {
    wp_enqueue_style( 'simpleThm-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'simpleThm_enqueue_style' );?>