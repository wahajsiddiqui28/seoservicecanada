<?php

/**
 * Custom Fields / Meta Boxes for page sections.
 *
 * These provide a native WordPress way to control which sections appear
 * on Service and Location pages. If ACF or similar is installed, these
 * can be replaced or extended.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Register custom meta boxes.
 */
function ssc_register_meta_boxes()
{
    add_meta_box(
        'ssc_page_sections',
        esc_html__('Page Sections', 'seoservicecanada'),
        'ssc_page_sections_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ssc_seo_meta',
        esc_html__('SEO Settings', 'seoservicecanada'),
        'ssc_seo_meta_callback',
        'page',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'ssc_register_meta_boxes');

/**
 * Page Sections meta box callback.
 *
 * @param WP_Post $post Current post object.
 */
function ssc_page_sections_callback($post)
{
    wp_nonce_field('ssc_save_sections', 'ssc_sections_nonce');

    $sections = array(
        'hero'           => esc_html__('Hero Section', 'seoservicecanada'),
        'services'       => esc_html__('Services Section', 'seoservicecanada'),
        'benefits'       => esc_html__('Benefits Section', 'seoservicecanada'),
        'process'        => esc_html__('Process Section', 'seoservicecanada'),
        'faq'            => esc_html__('FAQ Section', 'seoservicecanada'),
        'cta'            => esc_html__('CTA Section', 'seoservicecanada'),
        'testimonials'   => esc_html__('Testimonials Section', 'seoservicecanada'),
        'case_studies'   => esc_html__('Case Studies Section', 'seoservicecanada'),
        'locations'      => esc_html__('Locations Section', 'seoservicecanada'),
        'internal_links' => esc_html__('Internal Links Section', 'seoservicecanada'),
    );

    $active = get_post_meta($post->ID, '_ssc_active_sections', true);
    if (! is_array($active)) {
        $active = array();
    }

    echo '<p>' . esc_html__('Select which sections to display on this page:', 'seoservicecanada') . '</p>';
    echo '<div style="display:grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">';

    foreach ($sections as $key => $label) {
        $checked = in_array($key, $active, true) ? 'checked' : '';
        echo '<label style="display:flex; align-items:center; gap:6px; padding:4px;">';
        echo '<input type="checkbox" name="ssc_sections[]" value="' . esc_attr($key) . '" ' . $checked . '>';
        echo esc_html($label);
        echo '</label>';
    }

    echo '</div>';
}

/**
 * SEO meta box callback.
 *
 * @param WP_Post $post Current post object.
 */
function ssc_seo_meta_callback($post)
{
    wp_nonce_field('ssc_save_seo_meta', 'ssc_seo_nonce');

    $subtitle = get_post_meta($post->ID, '_ssc_subtitle', true);
    $city     = get_post_meta($post->ID, '_ssc_location_city', true);
    $province = get_post_meta($post->ID, '_ssc_location_province', true);

    echo '<table class="form-table">';

    echo '<tr><th><label for="ssc_subtitle">' . esc_html__('Page Subtitle', 'seoservicecanada') . '</label></th>';
    echo '<td><input type="text" id="ssc_subtitle" name="ssc_subtitle" value="' . esc_attr($subtitle) . '" class="widefat"></td></tr>';

    echo '<tr><th><label for="ssc_city">' . esc_html__('City (Location Pages)', 'seoservicecanada') . '</label></th>';
    echo '<td><input type="text" id="ssc_city" name="ssc_city" value="' . esc_attr($city) . '" class="widefat"></td></tr>';

    echo '<tr><th><label for="ssc_province">' . esc_html__('Province', 'seoservicecanada') . '</label></th>';
    echo '<td><input type="text" id="ssc_province" name="ssc_province" value="' . esc_attr($province) . '" class="widefat"></td></tr>';

    echo '</table>';
}

/**
 * Save meta box data.
 *
 * @param int $post_id Post ID.
 */
function ssc_save_meta_boxes($post_id)
{
    // Bail on autosave.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permission.
    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save sections.
    if (isset($_POST['ssc_sections_nonce']) && wp_verify_nonce($_POST['ssc_sections_nonce'], 'ssc_save_sections')) {
        $sections = isset($_POST['ssc_sections']) ? array_map('sanitize_text_field', $_POST['ssc_sections']) : array();
        update_post_meta($post_id, '_ssc_active_sections', $sections);
    }

    // Save SEO meta.
    if (isset($_POST['ssc_seo_nonce']) && wp_verify_nonce($_POST['ssc_seo_nonce'], 'ssc_save_seo_meta')) {
        if (isset($_POST['ssc_subtitle'])) {
            update_post_meta($post_id, '_ssc_subtitle', sanitize_text_field($_POST['ssc_subtitle']));
        }
        if (isset($_POST['ssc_city'])) {
            update_post_meta($post_id, '_ssc_location_city', sanitize_text_field($_POST['ssc_city']));
        }
        if (isset($_POST['ssc_province'])) {
            update_post_meta($post_id, '_ssc_location_province', sanitize_text_field($_POST['ssc_province']));
        }
    }
}
add_action('save_post', 'ssc_save_meta_boxes');

/**
 * Helper: Check if a section is active for the current page.
 *
 * @param string $section Section key.
 * @param int    $post_id Optional post ID.
 * @return bool
 */
function ssc_is_section_active($section, $post_id = 0)
{
    if (! $post_id) {
        $post_id = get_the_ID();
    }
    $active = get_post_meta($post_id, '_ssc_active_sections', true);
    if (! is_array($active)) {
        return false;
    }
    return in_array($section, $active, true);
}
