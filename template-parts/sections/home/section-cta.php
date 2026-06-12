<?php

/**
 * Section: CTA (Call to Action)
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}
?>

<section class="ssc-section ssc-cta" aria-labelledby="cta-heading">
    <div class="container">
        <div class="ssc-cta__content text-center">
            <h2 id="cta-heading" class="ssc-cta__title">
                <?php esc_html_e('Ready to Grow Your Business?', 'seoservicecanada'); ?>
            </h2>
            <p class="ssc-cta__text">
                <?php esc_html_e('Get a free SEO consultation and discover how we can help your business rank higher in Canadian search results.', 'seoservicecanada'); ?>
            </p>
            <div class="ssc-cta__actions">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn ssc-btn-primary btn-lg">
                    <?php esc_html_e('Get Your Free Quote', 'seoservicecanada'); ?>
                </a>
                <a href="tel:<?php echo esc_attr(SSC_PHONE_RAW); ?>" class="btn ssc-btn-outline btn-lg">
                    <?php esc_html_e('Call Us Today', 'seoservicecanada'); ?>
                </a>
            </div>
        </div>
    </div>
</section>