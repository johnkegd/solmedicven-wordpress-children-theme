<?php

/**s
 * functions.php
 * @package WordPress
 * @subpackage Machic
 * @since Machic 1.0
 * 
 */

add_action( 'wp_enqueue_scripts', 'machic_enqueue_styles', 99 );
function machic_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

?>