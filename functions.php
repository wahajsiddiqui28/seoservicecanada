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
 * Global contact details — change here, updates everywhere.
 */
define('SSC_PHONE', '+1 (780) 200-9020');
define('SSC_PHONE_RAW', '+17802009020');
define('SSC_EMAIL', 'info@seoservicecanada.com');
define('SSC_WHATSAPP', '17802009020');
define('SSC_ADDRESS', '2380 Kelly Circle SW Edmonton, Alberta T6W4G3 Canada');

/**
 * Include theme setup files.
 */
require_once SSC_THEME_DIR . '/inc/theme-setup.php';
require_once SSC_THEME_DIR . '/inc/enqueue.php';
require_once SSC_THEME_DIR . '/inc/helpers.php';
require_once SSC_THEME_DIR . '/inc/seo-functions.php';
require_once SSC_THEME_DIR . '/inc/custom-fields.php';
require_once SSC_THEME_DIR . '/inc/internal-linking.php';
require_once SSC_THEME_DIR . '/inc/province-data.php';
require_once SSC_THEME_DIR . '/inc/create-province-pages.php';
require_once SSC_THEME_DIR . '/inc/form-handler.php';

/**
 * Include template parts with classes.
 */
require_once SSC_THEME_DIR . '/template-parts/header/navigation.php';
