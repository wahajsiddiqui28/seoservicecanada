<?php

/**
 * Helper Functions
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Get a custom field value (sanitized).
 *
 * @param string $key     The meta key.
 * @param int    $post_id Optional post ID. Defaults to current post.
 * @return string Sanitized meta value.
 */
function ssc_get_field($key, $post_id = 0)
{
    if (! $post_id) {
        $post_id = get_the_ID();
    }
    $value = get_post_meta($post_id, $key, true);
    return sanitize_text_field($value);
}

/**
 * Get a custom field value allowing HTML (sanitized with wp_kses_post).
 *
 * @param string $key     The meta key.
 * @param int    $post_id Optional post ID.
 * @return string Sanitized HTML value.
 */
function ssc_get_field_html($key, $post_id = 0)
{
    if (! $post_id) {
        $post_id = get_the_ID();
    }
    $value = get_post_meta($post_id, $key, true);
    return wp_kses_post($value);
}

/**
 * Output breadcrumbs with Schema.org markup.
 */
function ssc_breadcrumbs()
{
    if (is_front_page()) {
        return;
    }

    $items = array();

    // Home.
    $items[] = array(
        'name' => esc_html__('Home', 'seoservicecanada'),
        'url'  => esc_url(home_url('/')),
    );

    if (is_page()) {
        // Check for parent pages.
        $ancestors = get_post_ancestors(get_the_ID());
        if ($ancestors) {
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor_id) {
                $items[] = array(
                    'name' => esc_html(get_the_title($ancestor_id)),
                    'url'  => esc_url(get_permalink($ancestor_id)),
                );
            }
        }
        $items[] = array(
            'name' => esc_html(get_the_title()),
            'url'  => '',
        );
    } elseif (is_single()) {
        $categories = get_the_category();
        if ($categories) {
            $cat = $categories[0];
            $items[] = array(
                'name' => esc_html($cat->name),
                'url'  => esc_url(get_category_link($cat->term_id)),
            );
        }
        $items[] = array(
            'name' => esc_html(get_the_title()),
            'url'  => '',
        );
    } elseif (is_archive()) {
        $items[] = array(
            'name' => esc_html(get_the_archive_title()),
            'url'  => '',
        );
    } elseif (is_search()) {
        /* translators: %s: search query */
        $items[] = array(
            'name' => sprintf(esc_html__('Search: %s', 'seoservicecanada'), get_search_query()),
            'url'  => '',
        );
    } elseif (is_404()) {
        $items[] = array(
            'name' => esc_html__('Page Not Found', 'seoservicecanada'),
            'url'  => '',
        );
    }

    if (empty($items)) {
        return;
    }

    echo '<nav class="ssc-breadcrumbs" aria-label="' . esc_attr__('Breadcrumb', 'seoservicecanada') . '">';
    echo '<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';

    $position = 1;
    $total    = count($items);

    foreach ($items as $item) {
        $is_last = ($position === $total);

        echo '<li class="breadcrumb-item' . ($is_last ? ' active' : '') . '" ';
        echo 'itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';

        if (! $is_last && ! empty($item['url'])) {
            echo '<a href="' . esc_url($item['url']) . '" itemprop="item">';
            echo '<span itemprop="name">' . esc_html($item['name']) . '</span>';
            echo '</a>';
        } else {
            echo '<span itemprop="name">' . esc_html($item['name']) . '</span>';
        }

        echo '<meta itemprop="position" content="' . absint($position) . '">';
        echo '</li>';

        $position++;
    }

    echo '</ol>';
    echo '</nav>';
}

/**
 * Generate a responsive image with lazy loading.
 *
 * @param int    $image_id  Attachment ID.
 * @param string $size      Image size.
 * @param string $class     CSS classes.
 * @param string $alt       Alt text override.
 * @return string Image HTML.
 */
function ssc_lazy_image($image_id, $size = 'large', $class = '', $alt = '')
{
    if (! $image_id) {
        return '';
    }

    if (empty($alt)) {
        $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
    }

    return wp_get_attachment_image($image_id, $size, false, array(
        'class'    => esc_attr($class),
        'loading'  => 'lazy',
        'decoding' => 'async',
        'alt'      => esc_attr($alt),
    ));
}

/**
 * Get estimated reading time for a post.
 *
 * @param int $post_id Optional post ID.
 * @return int Minutes to read.
 */
function ssc_reading_time($post_id = 0)
{
    if (! $post_id) {
        $post_id = get_the_ID();
    }
    $content    = get_post_field('post_content', $post_id);
    $word_count = str_word_count(wp_strip_all_tags($content));
    $minutes    = max(1, ceil($word_count / 200));
    return $minutes;
}

/**
 * Truncate text to a given number of words.
 *
 * @param string $text  Text to truncate.
 * @param int    $limit Word limit.
 * @return string Truncated text.
 */
function ssc_truncate_words($text, $limit = 20)
{
    return wp_trim_words($text, $limit, '&hellip;');
}
