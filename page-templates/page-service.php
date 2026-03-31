<?php

/**
 * Template Name: Service Page
 * Template Post Type: page
 *
 * Reusable template for ALL service pages (Local SEO, Technical SEO, etc.).
 * Sections are toggled via the "Page Sections" meta box in wp-admin.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<?php ssc_breadcrumbs(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Hero Section (always shown on service pages) -->
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

        <!-- Conditional Sections (controlled by meta box) -->
        <?php if (ssc_is_section_active('services')) : ?>
            <?php get_template_part('template-parts/sections/section', 'services'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('benefits')) : ?>
            <?php get_template_part('template-parts/sections/section', 'benefits'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('process')) : ?>
            <?php get_template_part('template-parts/sections/section', 'process'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('case_studies')) : ?>
            <?php get_template_part('template-parts/sections/section', 'case-studies'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('testimonials')) : ?>
            <?php get_template_part('template-parts/sections/section', 'testimonials'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('faq')) : ?>
            <?php get_template_part('template-parts/sections/section', 'faq'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('locations')) : ?>
            <?php get_template_part('template-parts/sections/section', 'locations'); ?>
        <?php endif; ?>

        <?php if (ssc_is_section_active('internal_links')) : ?>
            <?php get_template_part('template-parts/sections/section', 'internal-links'); ?>
        <?php endif; ?>

        <!-- CTA Section (always shown on service pages) -->
        <?php get_template_part('template-parts/sections/section', 'cta'); ?>

<?php endwhile;
endif; ?>

<?php
get_footer();
