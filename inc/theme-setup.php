<?php

/**
 * Theme Setup — registers theme support, menus, widget areas.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ssc_theme_setup()
{

    // Make the theme translation-ready.
    load_theme_textdomain('seoservicecanada', SSC_THEME_DIR . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable featured images on posts and pages.
    add_theme_support('post-thumbnails');

    // Custom image sizes for performance.
    add_image_size('ssc-hero', 1920, 800, true);
    add_image_size('ssc-card', 600, 400, true);
    add_image_size('ssc-thumbnail', 300, 200, true);

    // Register navigation menus.
    register_nav_menus(array(
        'primary'   => esc_html__('Primary Menu', 'seoservicecanada'),
        'footer'    => esc_html__('Footer Menu', 'seoservicecanada'),
        'services'  => esc_html__('Services Menu', 'seoservicecanada'),
    ));

    // HTML5 support for search form, comment form, etc.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    // Remove default block patterns.
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'ssc_theme_setup');

/**
 * Register widget areas.
 */
function ssc_widgets_init()
{

    register_sidebar(array(
        'name'          => esc_html__('Blog Sidebar', 'seoservicecanada'),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__('Widgets for the blog sidebar.', 'seoservicecanada'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Column 1', 'seoservicecanada'),
        'id'            => 'footer-1',
        'description'   => esc_html__('First footer widget area.', 'seoservicecanada'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Column 2', 'seoservicecanada'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Second footer widget area.', 'seoservicecanada'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Column 3', 'seoservicecanada'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Third footer widget area.', 'seoservicecanada'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Column 4', 'seoservicecanada'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Fourth footer widget area.', 'seoservicecanada'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'ssc_widgets_init');

/**
 * Custom excerpt length.
 */
function ssc_excerpt_length($length)
{
    return 25;
}
add_filter('excerpt_length', 'ssc_excerpt_length');

/**
 * Custom excerpt more indicator.
 */
function ssc_excerpt_more($more)
{
    return '&hellip;';
}
add_filter('excerpt_more', 'ssc_excerpt_more');
