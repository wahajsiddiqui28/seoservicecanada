<?php

/**
 * Section: About
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="ssc-section ssc-about-section position-relative" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="ssc-about__content">
                    <span class="ssc-badge px-3 py-1 mb-3 d-inline-block rounded-pill ssc-glass shadow-sm" style="color: var(--ssc-secondary); background: var(--ssc-secondary-subtle); border: 1px solid rgba(191, 32, 33, 0.1); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem;">
                        About
                    </span>
                    <h2 class="ssc-section__title mb-4" style="line-height: 1.2;"> About SEO Service  <span class="text-secondary">Canada</span></h2>
                    <h5>Helping Canadian Businesses Grow Through Smarter SEO</h5>
                    <p class="lead mb-4">At SEO Service Canada, we help businesses improve their search visibility and turn organic traffic into real leads and customers. Our team focuses on practical SEO strategies that combine technical optimization, targeted content, and authority building.</p>
                    <p class="lead mb-4">Instead of using a one-size-fits-all approach, we analyze each business, its market, and competitors to develop strategies that support long-term growth in search results.</p>
                    <p class="lead mb-4">Our goal is simple: help businesses across Canada achieve better rankings, stronger online presence, and sustainable digital growth.</p>
                    
                    

                    <div class="ssc-about__actions pt-3">
                        <a href="#contact" class="ssc-btn-primary px-4 py-2 text-decoration-none rounded shadow-sm d-inline-block">Read Our Full Story</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ssc-about__visual position-relative ps-lg-4">
                    <!-- Accent Decoration -->
                    <div class="ssc-about__accent ssc-radius-2xl position-absolute bg-secondary-subtle opacity-50" style="top: -20px; left: -20px; width: 150px; height: 150px; z-index: -1;"></div>
                    
                    <div class="ssc-image-box shadow-xl ssc-radius-xl overflow-hidden bg-white p-3">
                        <img src="<?php echo SSC_THEME_URI; ?>/assets/images/about-growth.png" alt="SEO Service Canada Growth" class="img-fluid ssc-radius-lg">
                    </div>
                    
                    <!-- Floating Stat Card -->
                    <div class="ssc-floating-card ssc-glass p-3 rounded shadow-lg position-absolute d-none d-md-block" style="bottom: -15px; right: -25px; max-width: 180px;">
                        <div class="d-flex align-items-center gap-2 mb-2">
                             <span class="text-success fs-4 fw-bold">+92%</span>
                             <span class="text-muted small">Visibility</span>
                        </div>
                        <p class="small mb-0 text-muted" style="font-size: 0.7rem;">Average client growth in the first 6 months.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>