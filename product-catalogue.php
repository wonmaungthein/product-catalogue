<?php

/* Plugin Name: Product Catalogue
Plugin URI: https://wordpress.org/plugins/product-catalogue/
Description: Creates a catalogue to display your lovely products
Version: 0.1.0
Author: Etza
Author URI: http://panditita.com
Text Domain: health-check
Domain Path: /languages
*/

add_action('wp_head', function(){
    echo '<script> alert("Welcome to my site!") </script>';
});

add_action('init', function () {
    register_post_type('people', [
        'labels' => [
            'name' => __('People'),
            'singular_name' => __('Person'),
        ],
        'public' => true,
        'has_archive' => true,
    ]);
});