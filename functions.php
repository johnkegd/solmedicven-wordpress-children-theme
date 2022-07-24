<?php

/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function machic_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
function custom_libraries_activations_scripts()
{
    wp_enqueue_script(
        'custom-libraries-init-scripts',
        get_stylesheet_directory_uri() . '/js/custom-libraries-init.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'custom-libraries-init-scripts',
        get_stylesheet_directory_uri() . '/js/custom-machic.js',
        array(),
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'machic_child_enqueue_styles', 99);
add_action('wp_enqueue_scripts', 'custom_libraries_activations_scripts');
