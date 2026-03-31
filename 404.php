<?php

/**
 * 404 Error Page Template
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<section class="ssc-404" aria-label="<?php esc_attr_e('Page Not Found', 'seoservicecanada'); ?>">
    <div class="container">
        <div class="ssc-404__content text-center">

            <h1 class="ssc-404__title">404</h1>
            <h2 class="ssc-404__subtitle"><?php esc_html_e('Page Not Found', 'seoservicecanada'); ?></h2>
            <p class="ssc-404__text">
                <?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'seoservicecanada'); ?>
            </p>

            <div class="ssc-404__search">
                <?php get_search_form(); ?>
            </div>

            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn ssc-btn-primary">
                <?php esc_html_e('Back to Home', 'seoservicecanada'); ?>
            </a>

            <!-- Suggest popular pages -->
            <div class="ssc-404__suggestions">
                <h3><?php esc_html_e('Popular Pages', 'seoservicecanada'); ?></h3>
                <?php ssc_render_related_services(6); ?>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
