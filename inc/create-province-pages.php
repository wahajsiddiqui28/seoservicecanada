<?php
/**
 * One-time script to create all 10 Province SEO Pages automatically.
 * Run once via: yoursite.com/?ssc_create_provinces=1
 * After pages are created, this script does nothing on repeat visits.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

function ssc_auto_create_province_pages() {
    if (!isset($_GET['ssc_create_provinces']) || $_GET['ssc_create_provinces'] !== '1') {
        return;
    }

    if (!current_user_can('manage_options')) {
        wp_die('You do not have permission to do this.');
    }

    $provinces = array(
        'ontario' => array(
            'title' => 'SEO Services in Ontario',
            'slug'  => 'seo-services-ontario',
        ),
        'british-columbia' => array(
            'title' => 'SEO Services in British Columbia',
            'slug'  => 'seo-services-british-columbia',
        ),
        'alberta' => array(
            'title' => 'SEO Services in Alberta',
            'slug'  => 'seo-services-alberta',
        ),
        'quebec' => array(
            'title' => 'SEO Services in Quebec',
            'slug'  => 'seo-services-quebec',
        ),
        'saskatchewan' => array(
            'title' => 'SEO Services in Saskatchewan',
            'slug'  => 'seo-services-saskatchewan',
        ),
        'manitoba' => array(
            'title' => 'SEO Services in Manitoba',
            'slug'  => 'seo-services-manitoba',
        ),
        'nova-scotia' => array(
            'title' => 'SEO Services in Nova Scotia',
            'slug'  => 'seo-services-nova-scotia',
        ),
        'new-brunswick' => array(
            'title' => 'SEO Services in New Brunswick',
            'slug'  => 'seo-services-new-brunswick',
        ),
        'newfoundland-and-labrador' => array(
            'title' => 'SEO Services in Newfoundland and Labrador',
            'slug'  => 'seo-services-newfoundland-and-labrador',
        ),
        'prince-edward-island' => array(
            'title' => 'SEO Services in Prince Edward Island',
            'slug'  => 'seo-services-prince-edward-island',
        ),
    );

    $created = array();
    $skipped = array();

    foreach ($provinces as $key => $info) {
        // Check if page with this slug already exists
        $existing = get_page_by_path($info['slug']);
        if ($existing) {
            $skipped[] = $info['title'] . ' (already exists)';
            continue;
        }

        $page_id = wp_insert_post(array(
            'post_title'   => $info['title'],
            'post_name'    => $info['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ));

        if (!is_wp_error($page_id)) {
            // Set the page template
            update_post_meta($page_id, '_wp_page_template', 'page-templates/page-province-seo.php');
            // Set the province key
            update_post_meta($page_id, '_ssc_province_key', $key);

            // Get province data for SEO meta description
            $prov_data = ssc_get_province_data($key);
            if ($prov_data && !empty($prov_data['meta_description'])) {
                update_post_meta($page_id, '_ssc_subtitle', 'Grow Your Business with Local SEO');
            }

            $created[] = $info['title'] . ' → /' . $info['slug'] . '/';
        }
    }

    // Show results
    $html = '<div style="max-width:700px;margin:60px auto;font-family:Space Grotesk,sans-serif;padding:20px;">';
    $html .= '<h1 style="color:#302e9d;">Province Pages Created!</h1>';

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

    wp_die($html, 'Province Pages Created');
}
add_action('template_redirect', 'ssc_auto_create_province_pages');
