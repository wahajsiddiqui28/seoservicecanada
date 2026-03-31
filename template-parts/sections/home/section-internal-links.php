<?php

/**
 * Section: Internal Links
 *
 * Cross-links to services, locations, and blog posts for SEO authority.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<section class="ssc-section ssc-section--alt ssc-internal-links" aria-label="<?php esc_attr_e('Related Pages', 'seoservicecanada'); ?>">
    <div class="container">

        <!-- Related Services -->
        <?php ssc_render_related_services(6); ?>

        <!-- Related Locations -->
        <?php ssc_render_related_locations(12); ?>

        <!-- Related Blog Posts -->
        <?php ssc_render_related_posts(3); ?>

    </div>
</section>