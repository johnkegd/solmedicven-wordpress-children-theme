<?php

/**
 * header.php
 * @package WordPress
 * @subpackage Machic
 * @since Machic 1.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KWKCN35');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWKCN35" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>

    <?php if (get_theme_mod('machic_preloader')) { ?>
        <div class="site-loading">
            <div class="preloading">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
    <?php } ?>

    <?php get_template_part('includes/header/models/canvas-menu'); ?>

    <?php machic_do_action('machic_before_main_header'); ?>

    <?php if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) { ?>
        <?php
        /**
         * Hook: machic_main_header
         *
         * @hooked machic_main_header_function - 10
         */
        do_action('machic_main_header');

        ?>
    <?php } ?>

    <?php machic_do_action('machic_after_main_header'); ?>

    <main id="main" class="site-primary">
        <div class="site-content">