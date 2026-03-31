<?php

/**
 * Template Name: Location Page
 * Template Post Type: page
 *
 * Reusable template for ALL location pages (Toronto, Vancouver, etc.).
 * Sections are toggled via the "Page Sections" meta box in wp-admin.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<?php ssc_breadcrumbs(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        $city     = ssc_get_field('_ssc_location_city');
        $province = ssc_get_field('_ssc_location_province');
        ?>

        <!-- Hero Section -->
        <?php get_template_part('template-parts/sections/section', 'hero'); ?>

        <!-- Page Content -->
        <?php if (get_the_content()) : ?>
            <section class="ssc-section ssc-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Conditional Sections -->
        <?php if (ssc_is_section_active('services')) : ?>
            <?php get_template_part('template-parts/sections/section', 'services'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('benefits')) : ?>
            <?php get_template_part('template-parts/sections/section', 'benefits'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('process')) : ?>
            <?php get_template_part('template-parts/sections/section', 'process'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('testimonials')) : ?>
            <?php get_template_part('template-parts/sections/section', 'testimonials'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('faq')) : ?>
            <?php get_template_part('template-parts/sections/section', 'faq'); ?>
        <?php endif; ?>

        <!-- Related Services -->
        <section class="ssc-section ssc-section--alt" aria-label="<?php esc_attr_e('Our Services', 'seoservicecanada'); ?>">
            <div class="container">
                <?php ssc_render_related_services(6); ?>
            </div>
        </section>

        <!-- Other Locations -->
        <?php if (ssc_is_section_active('locations')) : ?>
            <?php get_template_part('template-parts/sections/section', 'locations'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('internal_links')) : ?>
            <?php get_template_part('template-parts/sections/section', 'internal-links'); ?>
        <?php endif; ?>

        <!-- CTA Section -->
        <?php get_template_part('template-parts/sections/section', 'cta'); ?>

<?php endwhile;
endif; ?>

<?php
get_footer();
