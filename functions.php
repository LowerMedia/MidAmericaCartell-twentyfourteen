<?php
// Load Google Web Fonts
function load_google_fonts() {
    wp_register_style('gfraleway','http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&subset=latin');
    wp_enqueue_style('gfraleway');
}
add_action('wp_enqueue_scripts','load_google_fonts');