<?php

/**
 * Section: Locations
 *
 * Displays a grid of location links for Canadian cities.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

// Try to get actual location pages.
$location_pages = ssc_get_related_locations(20, 0);

// Fallback placeholder locations if no location pages exist yet.
$placeholder_cities = array(
    'Toronto',
    'Vancouver',
    'Montreal',
    'Calgary',
    'Ottawa',
    'Edmonton',
    'Winnipeg',
    'Quebec City',
    'Hamilton',
    'Kitchener',
    'London',
    'Victoria',
    'Halifax',
    'Oshawa',
    'Windsor',
    'Saskatoon',
    'Regina',
    'St. John\'s',
    'Barrie',
    'Kelowna',
);
?>

<section class="ssc-section ssc-locations" aria-labelledby="locations-heading">
    <div class="container">

        <div class="ssc-section__header text-center">
            <h2 id="locations-heading" class="ssc-section__title"><?php esc_html_e('SEO Services Across Canada', 'seoservicecanada'); ?></h2>
            <p class="ssc-section__subtitle"><?php esc_html_e('We serve businesses in every major Canadian city.', 'seoservicecanada'); ?></p>
        </div>

        <div class="row g-3">
            <?php if (! empty($location_pages)) : ?>
                <?php foreach ($location_pages as $location) :
                    $city = ssc_get_field('_ssc_location_city', $location->ID);
                    $display = $city ? $city : get_the_title($location->ID);
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href="<?php echo esc_url(get_permalink($location->ID)); ?>" class="ssc-location-card">
                            <span class="ssc-location-card__icon" aria-hidden="true">📍</span>
                            <span class="ssc-location-card__city"><?php echo esc_html($display); ?></span>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <?php foreach ($placeholder_cities as $city) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="ssc-location-card">
                            <span class="ssc-location-card__icon" aria-hidden="true">📍</span>
                            <span class="ssc-location-card__city"><?php echo esc_html($city); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>