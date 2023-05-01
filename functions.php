<?php

/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function machic_child_enqueue_styles()
{
    //wp_enqueue_style('child-custom', get_template_directory_uri() . '/style.css', null, null);
    // wp_enqueue_style('child-missed', get_template_directory_uri() . '/elementor.css', null, null);
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
}

add_action('wp_enqueue_scripts', 'machic_child_enqueue_styles');
add_action('wp_enqueue_scripts', 'custom_libraries_activations_scripts');