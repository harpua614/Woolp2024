<?php

if( function_exists('acf_add_options_page') ) {

acf_add_options_page(array(
    'page_title'    => 'Woolpert24 Settings',
    'menu_title'    => 'Woolpert24 Settings',
    'menu_slug'     => 'woolpert24-settings',
    'capability'    => 'edit_posts',
    'redirect'      => false,
    'icon_url'      => 'dashicons-admin-settings'
));
}