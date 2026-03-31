<?php

/**
 * Section: Testimonials
 *
 * Client testimonials / social proof.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

$testimonials = array(
    array(
        'quote'   => __('SEO Service Canada helped us achieve first-page rankings within 4 months. Our organic traffic increased by 250%.', 'seoservicecanada'),
        'name'    => __('Client Name', 'seoservicecanada'),
        'role'    => __('CEO, Example Company', 'seoservicecanada'),
        'rating'  => 5,
    ),
    array(
        'quote'   => __('Professional team that delivers real results. Our local SEO presence has never been stronger.', 'seoservicecanada'),
        'name'    => __('Client Name', 'seoservicecanada'),
        'role'    => __('Marketing Director, Example Corp', 'seoservicecanada'),
        'rating'  => 5,
    ),
    array(
        'quote'   => __('The best SEO investment we have made. Transparent reporting and consistent growth in our search visibility.', 'seoservicecanada'),
        'name'    => __('Client Name', 'seoservicecanada'),
        'role'    => __('Owner, Example Business', 'seoservicecanada'),
        'rating'  => 5,
    ),
);
?>

<section class="ssc-section ssc-section--alt ssc-testimonials" aria-labelledby="testimonials-heading">
    <div class="container">

        <div class="ssc-section__header text-center">
            <h2 id="testimonials-heading" class="ssc-section__title"><?php esc_html_e('What Our Clients Say', 'seoservicecanada'); ?></h2>
            <p class="ssc-section__subtitle"><?php esc_html_e('Trusted by businesses across Canada.', 'seoservicecanada'); ?></p>
        </div>

        <div class="row g-4">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="ssc-testimonial-card" itemscope itemtype="https://schema.org/Review">

                        <div class="ssc-testimonial-card__rating" aria-label="<?php echo esc_attr($testimonial['rating'] . ' out of 5 stars'); ?>">
                            <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                <span aria-hidden="true">★</span>
                            <?php endfor; ?>
                        </div>

                        <blockquote class="ssc-testimonial-card__quote" itemprop="reviewBody">
                            <?php echo esc_html($testimonial['quote']); ?>
                        </blockquote>

                        <div class="ssc-testimonial-card__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <strong itemprop="name"><?php echo esc_html($testimonial['name']); ?></strong>
                            <span><?php echo esc_html($testimonial['role']); ?></span>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>