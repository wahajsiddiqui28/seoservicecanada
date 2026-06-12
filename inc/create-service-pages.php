<?php
/**
 * One-time script to create the 6 premium SEO Service Pages automatically
 * under the /seo-services/ parent page.
 *
 * Run once via: yoursite.com/?ssc_create_service_pages=1
 * Already-existing pages are skipped on repeat visits.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

function ssc_auto_create_service_pages() {
    if (!isset($_GET['ssc_create_service_pages']) || $_GET['ssc_create_service_pages'] !== '1') {
        return;
    }

    if (!current_user_can('manage_options')) {
        wp_die('You do not have permission to do this.');
    }

    // Ensure the /seo-services/ parent page exists.
    $parent = get_page_by_path('seo-services');
    if ($parent) {
        $parent_id = $parent->ID;
    } else {
        $parent_id = wp_insert_post(array(
            'post_title'   => 'SEO Services',
            'post_name'    => 'seo-services',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ));
        if (!is_wp_error($parent_id)) {
            update_post_meta($parent_id, '_wp_page_template', 'page-templates/page-seo-services.php');
        } else {
            wp_die('Could not create the SEO Services parent page.');
        }
    }

    $pages = array(
        'ecommerce-seo-services'  => 'Ecommerce SEO Services',
        'local-seo-services'      => 'Local SEO Services',
        'shopify-seo-services'    => 'Shopify SEO Services',
        'seo-consulting-services' => 'SEO Consulting Services',
        'dental-seo-services'     => 'Dental SEO Services',
        'on-page-seo-services'    => 'On-Page SEO Services',
    );

    $created = array();
    $skipped = array();

    foreach ($pages as $slug => $title) {
        // Check if a child page with this slug already exists.
        $existing = get_page_by_path('seo-services/' . $slug);
        if (!$existing) {
            // Also catch the page if it exists at top level with the same slug.
            $existing = get_page_by_path($slug);
        }

        if ($existing) {
            // Make sure it uses the premium template and correct parent.
            update_post_meta($existing->ID, '_wp_page_template', 'page-templates/page-service-premium.php');
            if ((int) $existing->post_parent !== (int) $parent_id) {
                wp_update_post(array('ID' => $existing->ID, 'post_parent' => $parent_id));
            }
            $skipped[] = $title . ' (already exists — template/parent verified)';
            continue;
        }

        $page_id = wp_insert_post(array(
            'post_title'   => $title,
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_parent'  => $parent_id,
            'post_content' => '',
        ));

        if (!is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', 'page-templates/page-service-premium.php');
            $created[] = $title . ' → /seo-services/' . $slug . '/';
        }
    }

    // Refresh permalinks so the new nested URLs resolve.
    flush_rewrite_rules();

    // Show results.
    $html = '<div style="max-width:700px;margin:60px auto;font-family:Space Grotesk,sans-serif;padding:20px;">';
    $html .= '<h1 style="color:#302e9d;">Service Pages Created!</h1>';

    if (!empty($created)) {
        $html .= '<h3 style="color:#10b981;">Created (' . count($created) . '):</h3><ul>';
        foreach ($created as $c) {
            $html .= '<li style="padding:4px 0;">' . esc_html($c) . '</li>';
        }
        $html .= '</ul>';
    }

    if (!empty($skipped)) {
        $html .= '<h3 style="color:#f59e0b;">Skipped (' . count($skipped) . '):</h3><ul>';
        foreach ($skipped as $s) {
            $html .= '<li style="padding:4px 0;">' . esc_html($s) . '</li>';
        }
        $html .= '</ul>';
    }

    $html .= '<br><a href="' . esc_url(admin_url('edit.php?post_type=page')) . '" style="display:inline-block;padding:12px 24px;background:linear-gradient(135deg,#302e9d,#bf2021);color:#fff;text-decoration:none;border-radius:8px;font-weight:600;">View All Pages</a>';
    $html .= '</div>';

    wp_die($html, 'Service Pages Created');
}
add_action('template_redirect', 'ssc_auto_create_service_pages');
