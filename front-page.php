<?php

/**
 * Front Page Template — Homepage
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<!-- Hero Section -->
<?php get_template_part('template-parts/sections/home/section', 'hero'); ?>

<!-- About Section -->
<?php get_template_part('template-parts/sections/home/section', 'about'); ?>

<!-- Trust & Growth Section -->
<?php get_template_part('template-parts/sections/home/section', 'trust'); ?>

<!-- Why Choose Us Section -->
<?php get_template_part('template-parts/sections/home/section', 'why-choose'); ?>

<!-- Our SEO Services Section -->
<?php get_template_part('template-parts/sections/home/section', 'our-services'); ?>

<!-- Process Section -->
<?php get_template_part('template-parts/sections/home/section', 'process'); ?>

<!-- Audit CTA Section -->
<?php get_template_part('template-parts/sections/home/section', 'audit-cta'); ?>

<!-- Industries Section -->
<?php get_template_part('template-parts/sections/home/section', 'industries'); ?>

<!-- FAQ Section -->
<?php get_template_part('template-parts/sections/home/section', 'faq'); ?>

<!-- Final CTA Section -->
<?php get_template_part('template-parts/sections/home/section', 'final-cta'); ?>

<?php
get_footer();
