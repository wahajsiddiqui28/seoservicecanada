<?php

/**
 * Section: Audit CTA
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="ssc-section ssc-audit-section position-relative overflow-hidden py-5" id="audit">
    <!-- Decorative background elements -->
    <div class="ssc-service-blob" style="top: -10%; right: -5%; opacity: 0.15;"></div>
    <div class="ssc-service-blob" style="bottom: -15%; left: -10%; opacity: 0.1;"></div>

    <div class="container position-relative z-index-2">
        <div class="row align-items-center g-5">
            <!-- Content Side -->
            <div class="col-lg-7">
                <div class="ssc-audit-content pe-lg-5">
                    <span class="ssc-badge px-4 py-2 mb-4 d-inline-block rounded-pill ssc-glass shadow-sm" style="color: var(--ssc-secondary); background: var(--ssc-secondary-subtle); border-color: rgba(191, 32, 33, 0.1); font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; font-size: 0.75rem;">
                        Limited Free Offer
                    </span>
                    <h2 class="ssc-section__title display-5 fw-bold mb-4">Free SEO Audit for Your Website: <span class="text-secondary">Discover Your Website’s SEO Opportunities</span></h2>
                    <p class="lead text-muted mb-5" style="line-height: 1.8;">Get a free SEO audit and uncover the issues preventing your website from ranking higher on Google. Our experts will analyze your site and provide actionable insights to improve visibility, traffic, and conversions.</p>

                    <div class="ssc-audit-highlights ssc-glass p-5 rounded-4 border-0 shadow-lg position-relative overflow-hidden">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <h3 class="h5 fw-bold mb-4 text-dark">What You’ll Receive</h3>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-center gap-3">
                                <span class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; flex-shrink: 0;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-dark">Website SEO health analysis</span>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <span class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; flex-shrink: 0;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-dark">Keyword ranking opportunities</span>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <span class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; flex-shrink: 0;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-dark">Technical SEO issue report</span>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <span class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; flex-shrink: 0;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-dark">Competitor SEO insights</span>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <span class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px; flex-shrink: 0;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span class="fw-bold text-dark">Recommendations to improve rankings</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Form Side -->
            <div class="col-lg-5">
                <?php ssc_audit_form(); ?>
            </div>
        </div>
    </div>
</section>
