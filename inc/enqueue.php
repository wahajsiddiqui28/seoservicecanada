<?php

/**
 * Enqueue Scripts & Styles
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue front-end styles and scripts.
 */
function ssc_enqueue_assets()
{

    // Bootstrap 5.3 CSS (grid + utilities only for lighter payload).
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Theme main stylesheet.
    wp_enqueue_style(
        'ssc-theme',
        SSC_THEME_URI . '/assets/css/theme.css',
        array('bootstrap'),
        SSC_THEME_VERSION
    );

    // Theme main JavaScript — loaded in footer, deferred.
    wp_enqueue_script(
        'ssc-theme',
        SSC_THEME_URI . '/assets/js/theme.js',
        array(),
        SSC_THEME_VERSION,
        array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )
    );

    // Bootstrap JS bundle (includes Popper) — for navbar toggle + accordion.
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        array(
            'in_footer' => true,
            'strategy'  => 'defer',
        )
    );

    // Dequeue block library CSS on front-end if not using Gutenberg.
    if (! is_admin()) {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('wc-blocks-style');
        wp_dequeue_style('global-styles');
    }
}
add_action('wp_enqueue_scripts', 'ssc_enqueue_assets');

/**
 * Add resource hints for performance (preconnect to CDN).
 */
function ssc_resource_hints($urls, $relation_type)
{
    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href'        => 'https://cdn.jsdelivr.net',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href'        => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'ssc_resource_hints', 10, 2);

/**
 * Remove unnecessary WordPress head items for performance.
 */
function ssc_cleanup_head()
{
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('after_setup_theme', 'ssc_cleanup_head');

/**
 * Disable WordPress emojis completely.
 */
function ssc_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'ssc_disable_emojis');
