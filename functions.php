<?php

/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function machic_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'machic-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('machic-style'),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style(
        'machic-child-style',
        get_stylesheet_directory_uri() . '/custom.css',
        array('machic-style'),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'machic_child_enqueue_styles', 99);
