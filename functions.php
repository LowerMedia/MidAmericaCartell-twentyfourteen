<?php

function childtheme_scripts() {

//wp_dequeue_script( 'twentytwelve-navigation' );

//wp_enqueue_script( 'primary-mobile', get_stylesheet_directory_uri() . '/navigation.js', array(), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'childtheme_scripts' );