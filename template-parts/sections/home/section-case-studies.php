<?php

/**
 * Section: Case Studies
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

$case_studies = array(
    array(
        'title'    => __('E-commerce SEO Success', 'seoservicecanada'),
        'metric'   => '320%',
        'label'    => __('Organic Traffic Increase', 'seoservicecanada'),
        'desc'     => __('Helped an online retailer triple their organic traffic through technical SEO and content strategy.', 'seoservicecanada'),
    ),
    array(
        'title'    => __('Local Business Growth', 'seoservicecanada'),
        'metric'   => '#1',
        'label'    => __('Google Map Pack Position', 'seoservicecanada'),
        'desc'     => __('Achieved top local search positions for a multi-location service business.', 'seoservicecanada'),
    ),
    array(
        'title'    => __('B2B Lead Generation', 'seoservicecanada'),
        'metric'   => '5x',
        'label'    => __('More Qualified Leads', 'seoservicecanada'),
        'desc'     => __('Increased qualified leads by 5x through targeted keyword strategy and content marketing.', 'seoservicecanada'),
    ),
);
?>

<section class="ssc-section ssc-case-studies" aria-labelledby="case-studies-heading">
    <div class="container">

        <div class="ssc-section__header text-center">
            <h2 id="case-studies-heading" class="ssc-section__title"><?php esc_html_e('Case Studies', 'seoservicecanada'); ?></h2>
            <p class="ssc-section__subtitle"><?php esc_html_e('Real results from real clients.', 'seoservicecanada'); ?></p>
        </div>

        <div class="row g-4">
            <?php foreach ($case_studies as $study) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="ssc-case-card">
                        <div class="ssc-case-card__metric">
                            <span class="ssc-case-card__number"><?php echo esc_html($study['metric']); ?></span>
                            <span class="ssc-case-card__label"><?php echo esc_html($study['label']); ?></span>
                        </div>
                        <h3 class="ssc-case-card__title"><?php echo esc_html($study['title']); ?></h3>
                        <p class="ssc-case-card__desc"><?php echo esc_html($study['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>