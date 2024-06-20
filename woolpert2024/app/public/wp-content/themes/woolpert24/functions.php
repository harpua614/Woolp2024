<?php
function w24_add_scripts_styles() {
wp_register_style( 'w24-bootstrap-style',
get_template_directory_uri() . '/assets/dist/css/main
.css');
wp_register_script( 'w24-bootstrap-script', 
get_template_directory_uri() . '/assets/dist/js/main.
js', array(), '0.1', true );

wp_enqueue_style( 'w24-bootstrap-style');
wp_enqueue_script( 'w24-bootstrap-script');
}

add_action( 'wp_enqueue_scripts', 'w24_add_scripts_styles');