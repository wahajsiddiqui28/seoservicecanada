<?php

/**
 * SEO Service Canada Theme Functions
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Prevent direct access.
}

/**
 * Define theme constants.
 */
define('SSC_THEME_VERSION', '1.0.0');
define('SSC_THEME_DIR', get_template_directory());
define('SSC_THEME_URI', get_template_directory_uri());

/**
 * Include theme setup files.
 */
require_once SSC_THEME_DIR . '/inc/theme-setup.php';
require_once SSC_THEME_DIR . '/inc/enqueue.php';
require_once SSC_THEME_DIR . '/inc/helpers.php';
require_once SSC_THEME_DIR . '/inc/seo-functions.php';
require_once SSC_THEME_DIR . '/inc/custom-fields.php';
require_once SSC_THEME_DIR . '/inc/internal-linking.php';

/**
 * Include template parts with classes.
 */
require_once SSC_THEME_DIR . '/template-parts/header/navigation.php';
