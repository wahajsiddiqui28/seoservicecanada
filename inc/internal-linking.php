<?php

/**
 * Internal Linking System
 *
 * Provides functions for cross-linking between service pages,
 * location pages, and blog posts to support SEO authority building.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Get related service pages.
 *
 * Retrieves pages using the Service page template, excluding current page.
 *
 * @param int $limit  Number of pages to return.
 * @param int $exclude Post ID to exclude.
 * @return WP_Post[] Array of post objects.
 */
function ssc_get_related_services($limit = 6, $exclude = 0)
{
    if (! $exclude) {
        $exclude = get_the_ID();
    }

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => $limit,
        'post__not_in'   => array($exclude),
        'meta_query'     => array(
            array(
                'key'   => '_wp_page_template',
                'value' => 'page-templates/page-service.php',
            ),
        ),
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'no_found_rows'  => true,
    );

    return get_posts($args);
}

/**
 * Get related location pages.
 *
 * @param int $limit  Number of pages to return.
 * @param int $exclude Post ID to exclude.
 * @return WP_Post[] Array of post objects.
 */
function ssc_get_related_locations($limit = 12, $exclude = 0)
{
    if (! $exclude) {
        $exclude = get_the_ID();
    }

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => $limit,
        'post__not_in'   => array($exclude),
        'meta_query'     => array(
            array(
                'key'   => '_wp_page_template',
                'value' => 'page-templates/page-location.php',
            ),
        ),
        'orderby'        => 'title',
        'order'          => 'ASC',
        'no_found_rows'  => true,
    );

    return get_posts($args);
}

/**
 * Get recent blog posts related to a service or topic.
 *
 * @param int    $limit    Number of posts.
 * @param string $category Category slug (optional).
 * @return WP_Post[] Array of post objects.
 */
function ssc_get_related_posts($limit = 3, $category = '')
{
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => $limit,
        'post_status'    => 'publish',
        'no_found_rows'  => true,
    );

    if ($category) {
        $args['category_name'] = sanitize_title($category);
    }

    return get_posts($args);
}

/**
 * Render a related services list.
 *
 * @param int $limit Number of services to show.
 */
function ssc_render_related_services($limit = 6)
{
    $services = ssc_get_related_services($limit);

    if (empty($services)) {
        return;
    }

    echo '<div class="ssc-related-services">';
    echo '<h3>' . esc_html__('Our Services', 'seoservicecanada') . '</h3>';
    echo '<div class="row g-3">';

    foreach ($services as $service) {
        echo '<div class="col-md-4 col-sm-6">';
        echo '<a href="' . esc_url(get_permalink($service->ID)) . '" class="ssc-link-card">';
        echo '<span>' . esc_html(get_the_title($service->ID)) . '</span>';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>';
        echo '</a>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
}

/**
 * Render a related locations grid.
 *
 * @param int $limit Number of locations to show.
 */
function ssc_render_related_locations($limit = 12)
{
    $locations = ssc_get_related_locations($limit);

    if (empty($locations)) {
        return;
    }

    echo '<div class="ssc-related-locations">';
    echo '<h3>' . esc_html__('Service Locations', 'seoservicecanada') . '</h3>';
    echo '<div class="row g-2">';

    foreach ($locations as $location) {
        $city = ssc_get_field('_ssc_location_city', $location->ID);
        $display = $city ? $city : get_the_title($location->ID);

        echo '<div class="col-lg-3 col-md-4 col-sm-6">';
        echo '<a href="' . esc_url(get_permalink($location->ID)) . '" class="ssc-location-link">';
        echo esc_html($display);
        echo '</a>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
}

/**
 * Render a related blog posts section.
 *
 * @param int    $limit    Number of posts.
 * @param string $category Category slug.
 */
function ssc_render_related_posts($limit = 3, $category = '')
{
    $posts = ssc_get_related_posts($limit, $category);

    if (empty($posts)) {
        return;
    }

    echo '<div class="ssc-related-posts">';
    echo '<h3>' . esc_html__('Related Articles', 'seoservicecanada') . '</h3>';
    echo '<div class="row g-4">';

    foreach ($posts as $post_item) {
        echo '<div class="col-md-4">';
        echo '<article class="ssc-post-card">';

        if (has_post_thumbnail($post_item->ID)) {
            echo '<a href="' . esc_url(get_permalink($post_item->ID)) . '" class="ssc-post-card__image">';
            echo get_the_post_thumbnail($post_item->ID, 'ssc-card', array(
                'loading'  => 'lazy',
                'decoding' => 'async',
            ));
            echo '</a>';
        }

        echo '<div class="ssc-post-card__content">';
        echo '<h4><a href="' . esc_url(get_permalink($post_item->ID)) . '">' . esc_html(get_the_title($post_item->ID)) . '</a></h4>';
        echo '<p>' . esc_html(ssc_truncate_words(get_the_excerpt($post_item->ID), 15)) . '</p>';
        echo '</div>';

        echo '</article>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
}
