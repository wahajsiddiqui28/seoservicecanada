<?php

/**
 * SEO Functions — Schema markup, meta tags, structured data.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

/**
 * Output JSON-LD Organization schema on every page.
 */
function ssc_schema_organization()
{
    $schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'Organization',
        'name'        => get_bloginfo('name'),
        'url'         => esc_url(home_url('/')),
        'description' => get_bloginfo('description'),
        'logo'        => esc_url(ssc_get_logo_url()),
        'sameAs'      => array(),
        'contactPoint' => array(
            '@type'             => 'ContactPoint',
            'contactType'       => 'customer service',
            'availableLanguage' => array('English', 'French'),
        ),
    );

    ssc_output_jsonld($schema);
}
add_action('wp_head', 'ssc_schema_organization', 1);

/**
 * Output JSON-LD for Service pages.
 */
function ssc_schema_service()
{
    if (! is_page_template('page-templates/page-service.php')) {
        return;
    }

    $schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        'name'        => esc_html(get_the_title()),
        'description' => esc_html(get_the_excerpt()),
        'url'         => esc_url(get_permalink()),
        'provider'    => array(
            '@type' => 'Organization',
            'name'  => get_bloginfo('name'),
            'url'   => esc_url(home_url('/')),
        ),
        'areaServed'  => array(
            '@type' => 'Country',
            'name'  => 'Canada',
        ),
    );

    ssc_output_jsonld($schema);
}
add_action('wp_head', 'ssc_schema_service', 2);

/**
 * Output JSON-LD for Location pages — LocalBusiness schema.
 */
function ssc_schema_location()
{
    if (! is_page_template('page-templates/page-location.php')) {
        return;
    }

    $city = ssc_get_field('_ssc_location_city');

    $schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'LocalBusiness',
        'name'        => get_bloginfo('name') . ' — ' . esc_html($city),
        'description' => esc_html(get_the_excerpt()),
        'url'         => esc_url(get_permalink()),
        'address'     => array(
            '@type'           => 'PostalAddress',
            'addressLocality' => esc_html($city),
            'addressCountry'  => 'CA',
        ),
    );

    ssc_output_jsonld($schema);
}
add_action('wp_head', 'ssc_schema_location', 2);

/**
 * Output JSON-LD for pages with FAQ section.
 */
function ssc_schema_faq()
{
    if (! is_page()) {
        return;
    }

    $faq_data = get_post_meta(get_the_ID(), '_ssc_faq_items', true);

    if (empty($faq_data) || ! is_array($faq_data)) {
        return;
    }

    $faq_entities = array();
    foreach ($faq_data as $faq) {
        if (! empty($faq['question']) && ! empty($faq['answer'])) {
            $faq_entities[] = array(
                '@type'          => 'Question',
                'name'           => esc_html($faq['question']),
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text'  => wp_kses_post($faq['answer']),
                ),
            );
        }
    }

    if (empty($faq_entities)) {
        return;
    }

    $schema = array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $faq_entities,
    );

    ssc_output_jsonld($schema);
}
add_action('wp_head', 'ssc_schema_faq', 3);

/**
 * Output a JSON-LD script tag.
 *
 * @param array $data Schema data array.
 */
function ssc_output_jsonld($data)
{
    if (empty($data)) {
        return;
    }
    echo '<script type="application/ld+json">' . wp_json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
}

/**
 * Get the site logo URL.
 *
 * @return string Logo URL or empty string.
 */
function ssc_get_logo_url()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        $logo = wp_get_attachment_image_url($custom_logo_id, 'full');
        return $logo ? $logo : '';
    }
    return '';
}

/**
 * Add Open Graph meta tags (basic — for sites without Yoast/RankMath).
 */
function ssc_open_graph_tags()
{
    // Skip if an SEO plugin is active.
    if (defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION')) {
        return;
    }

    $title       = wp_get_document_title();
    $description = get_bloginfo('description');
    $url         = esc_url(get_permalink());
    $image       = '';

    if (is_singular() && has_post_thumbnail()) {
        $description = get_the_excerpt();
        $image       = get_the_post_thumbnail_url(get_the_ID(), 'large');
    }

    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:locale" content="en_CA">' . "\n";

    if ($image) {
        echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    }
}
add_action('wp_head', 'ssc_open_graph_tags', 5);

/**
 * Add canonical URL if no SEO plugin is active.
 */
function ssc_canonical_url()
{
    if (defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION')) {
        return;
    }

    if (is_singular()) {
        echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">' . "\n";
    } elseif (is_home() || is_front_page()) {
        echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '">' . "\n";
    }
}
add_action('wp_head', 'ssc_canonical_url', 1);
