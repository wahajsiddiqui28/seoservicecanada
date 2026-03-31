<?php

/**
 * Section: FAQ
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

$faqs = array(
        array(
        'q' => 'What are SEO services and how do they work?',
        'a' => 'SEO services involve optimizing a website to improve its visibility in search engines like Google. This includes keyword research, on-page optimization, technical improvements, content development, and link building to help businesses attract more organic traffic.'
    ),
        array(
        'q' => 'Why are SEO services important for businesses in Canada?',
        'a' => 'SEO helps businesses in Canada increase their online visibility and reach potential customers searching for products or services on Google. With effective SEO strategies, companies can generate consistent website traffic and long-term leads without relying solely on paid advertising.'
    ),
        array(
        'q' => 'How long does it take to see results from SEO?',
        'a' => 'SEO is a long-term digital marketing strategy. Many businesses start seeing noticeable improvements in rankings and traffic within 3 to 6 months, depending on competition, industry, and the current condition of the website.'
    ),
        array(
        'q' => 'What is included in professional SEO services?',
        'a' => 'Professional SEO services typically include SEO audits, keyword research, on-page optimization, technical SEO, content creation, off-page SEO, link building, local SEO optimization, and ongoing performance monitoring.'
    ),
        array(
        'q' => 'Do you offer local SEO services in Canada?',
        'a' => 'Yes. Local SEO services help businesses appear in Google Maps and location-based search results. This includes optimizing your Google Business Profile, building local citations, and improving location signals to attract nearby customers.'
    ),
        array(
        'q' => 'Can SEO help small businesses grow?',
        'a' => 'Yes. SEO is one of the most effective digital marketing strategies for small businesses because it helps attract targeted traffic from people actively searching for relevant products or services online.'
    ),
        array(
        'q' => 'What is the difference between on-page SEO and off-page SEO?',
        'a' => 'On-page SEO focuses on optimizing elements within your website such as content, keywords, meta tags, and page structure. Off-page SEO involves external factors like backlinks and brand mentions that help build your website’s authority and credibility.'
    ),
        array(
        'q' => 'How do you measure the success of an SEO campaign?',
        'a' => 'SEO success is measured through key performance indicators such as keyword rankings, organic traffic growth, website engagement, lead generation, and conversions.'
    ),
        array(
        'q' => 'Do I need SEO if I already run paid ads?',
        'a' => 'Yes. SEO and paid advertising work best together. While paid ads generate immediate traffic, SEO builds long-term organic visibility that can continue generating leads even without ongoing ad spending.'
    ),
        array(
        'q' => 'How can I get started with your SEO services?',
        'a' => 'Getting started is simple. Request a free SEO audit or consultation, and our team will analyze your website, identify opportunities, and recommend a strategy to improve your search rankings and online growth.'
    )
);
?>

<section class="ssc-section ssc-section--alt position-relative overflow-hidden" id="faq">
    <!-- Subtle Background Accent -->
    <div class="ssc-hero__gradient opacity-10"></div>

    <div class="container position-relative z-index-2">
        <div class="ssc-section__header text-center mb-5">
            <span class="ssc-badge px-3 py-1 mb-3 d-inline-block rounded-pill ssc-glass shadow-sm" style="color: var(--ssc-primary); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem;">
                Common Questions
            </span>
            <h2 class="ssc-section__title display-5 fw-bold mb-4">SEO <span class="text-primary">Intelligence</span> FAQ</h2>
            <p class="ssc-section__subtitle mx-auto">Everything you need to know about scaling your organic visibility and dominating search results in Canada.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion ssc-accordion-premium" id="sscHomepageFaq">
                    <?php foreach ($faqs as $i => $faq): ?>
                        <div class="accordion-item ssc-faq-item position-relative mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                            <h2 class="accordion-header" id="heading-<?php echo $i; ?>">
                                <button class="accordion-button ssc-faq-button fw-bold py-4 px-4 <?php echo $i === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>" aria-controls="collapse-<?php echo $i; ?>">
                                    <span class="me-3 text-primary opacity-50"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?>.</span>
                                    <?php echo esc_html($faq['q']); ?>
                                </button>
                            </h2>
                            <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>" aria-labelledby="heading-<?php echo $i; ?>" data-bs-parent="#sscHomepageFaq">
                                <div class="accordion-body ssc-faq-body py-4 px-4 pt-0 text-muted">
                                    <div class="ps-5 border-start border-primary border-2">
                                        <?php echo wp_kses_post($faq['a']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <p class="mb-4 fw-medium text-muted">Didn't find what you were looking for?</p>
                <a href="#contact" class="btn ssc-btn-outline-primary rounded-pill px-5">Contact Our Experts →</a>
            </div>
        </div>
    </div>
</section>