<?php

/**
 * Services Mega Menu — Header Dropdown
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// Canadian Provinces — Map slug to display name. Only those that have a
// published premium province page get real links. Others stay as '#'.
$ssc_provinces_with_pages = array(
    'alberta'                  => 'Alberta',
    'ontario'                  => 'Ontario',
    'british-columbia'         => 'British Columbia',
    'nova-scotia'              => 'Nova Scotia',
    'new-brunswick'            => 'New Brunswick',
    'saskatchewan'             => 'Saskatchewan',
);
$ssc_provinces_pending = array(
    'Quebec',
    'Manitoba',
    'Newfoundland & Labrador',
    'Prince Edward Island',
);

// Helper to get province URL.
$ssc_get_prov_url = function ($slug) use ($ssc_provinces_with_pages) {
    return isset($ssc_provinces_with_pages[$slug])
        ? home_url('/' . $slug . '-seo-services/')
        : '#';
};

// Helper to get premium service page URL (pages live under /seo-services/).
$ssc_svc_url = function ($slug) {
    return home_url('/seo-services/' . $slug . '/');
};
?>

<!-- FontAwesome for mega menu icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="all">

<li class="nav-item ssc-mm-parent">
    <a class="nav-link ssc-mm-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Services
        <svg class="ssc-mm-chev" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </a>

    <!-- =====================================================
         MEGA MENU PANEL
    ======================================================== -->
    <div class="ssc-mm" id="services-mega-menu" aria-hidden="true">
        <div class="ssc-mm__inner">
            <div class="ssc-mm__layout">

                <!-- ===== LEFT SIDEBAR — TABS ===== -->
                <div class="ssc-mm__sidebar">
                    <h5 class="ssc-mm__sidebar-title">Solutions</h5>
                    <div class="ssc-mm__tabs">

                        <button class="ssc-mm__tab active" data-target="seo-audits">
                            <span class="ssc-mm__tab-icon"><i class="fas fa-search"></i></span>
                            <span class="ssc-mm__tab-text">
                                <span class="ssc-mm__tab-label">SEO Audits</span>
                                <small class="ssc-mm__tab-sub">Technical Analysis</small>
                            </span>
                            <i class="fas fa-chevron-right ssc-mm__tab-arrow"></i>
                        </button>

                        <button class="ssc-mm__tab" data-target="core-seo">
                            <span class="ssc-mm__tab-icon"><i class="fas fa-bullhorn"></i></span>
                            <span class="ssc-mm__tab-text">
                                <span class="ssc-mm__tab-label">Core SEO</span>
                                <small class="ssc-mm__tab-sub">Base Strategies</small>
                            </span>
                            <i class="fas fa-chevron-right ssc-mm__tab-arrow"></i>
                        </button>

                        <button class="ssc-mm__tab" data-target="business-seo">
                            <span class="ssc-mm__tab-icon"><i class="fas fa-briefcase"></i></span>
                            <span class="ssc-mm__tab-text">
                                <span class="ssc-mm__tab-label">Business Type SEO</span>
                                <small class="ssc-mm__tab-sub">Niche Businesses</small>
                            </span>
                            <i class="fas fa-chevron-right ssc-mm__tab-arrow"></i>
                        </button>

                        <button class="ssc-mm__tab" data-target="industry-seo">
                            <span class="ssc-mm__tab-icon"><i class="fas fa-industry"></i></span>
                            <span class="ssc-mm__tab-text">
                                <span class="ssc-mm__tab-label">Industry SEO</span>
                                <small class="ssc-mm__tab-sub">Specialized Niches</small>
                            </span>
                            <i class="fas fa-chevron-right ssc-mm__tab-arrow"></i>
                        </button>

                        <button class="ssc-mm__tab" data-target="outsource-seo">
                            <span class="ssc-mm__tab-icon"><i class="fas fa-handshake"></i></span>
                            <span class="ssc-mm__tab-text">
                                <span class="ssc-mm__tab-label">Outsource SEO Services</span>
                                <small class="ssc-mm__tab-sub">White Label Solutions</small>
                            </span>
                            <i class="fas fa-chevron-right ssc-mm__tab-arrow"></i>
                        </button>

                        <button class="ssc-mm__tab" data-target="specialized-seo">
                            <span class="ssc-mm__tab-icon"><i class="fas fa-star"></i></span>
                            <span class="ssc-mm__tab-text">
                                <span class="ssc-mm__tab-label">Specialized SEO</span>
                                <small class="ssc-mm__tab-sub">AI, Health, Niche Focus</small>
                            </span>
                            <i class="fas fa-chevron-right ssc-mm__tab-arrow"></i>
                        </button>

                        <button class="ssc-mm__tab" data-target="areas-seo">
                            <span class="ssc-mm__tab-icon"><i class="fas fa-map-marker-alt"></i></span>
                            <span class="ssc-mm__tab-text">
                                <span class="ssc-mm__tab-label">Areas</span>
                                <small class="ssc-mm__tab-sub">Canada-Wide Coverage</small>
                            </span>
                            <i class="fas fa-chevron-right ssc-mm__tab-arrow"></i>
                        </button>

                    </div>
                </div>

                <!-- ===== RIGHT CONTENT AREA ===== -->
                <div class="ssc-mm__content">

                    <!-- SEO Audits Panel -->
                    <div class="ssc-mm__panel active" id="seo-audits">
                        <h4 class="ssc-mm__panel-title"><i class="fas fa-search ssc-mm__panel-title-icon"></i>Comprehensive SEO Audits</h4>
                        <div class="row g-4">
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Analysis Audits</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-file-invoice"></i>Complete SEO Audit</a></li>
                                    <li><a href="#"><i class="fas fa-pen-nib"></i>Content Audit</a></li>
                                    <li><a href="#"><i class="fas fa-chart-line"></i>Performance Review</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">On/Off Page Audits</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="<?php echo esc_url($ssc_svc_url('on-page-seo-services')); ?>"><i class="fas fa-file-alt"></i>On-Page SEO Audit</a></li>
                                    <li><a href="#"><i class="fas fa-external-link-alt"></i>Off-Page SEO Audit</a></li>
                                    <li><a href="#"><i class="fas fa-link"></i>Backlink Checkup</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Technical &amp; AI</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-cogs"></i>Technical SEO Audit</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('shopify-seo-services')); ?>"><i class="fab fa-shopify"></i>Shopify Technical Audit</a></li>
                                    <li><a href="#"><i class="fas fa-robot"></i>AI SEO Scan</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row g-4 mt-2 pt-3 border-top">
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Local &amp; Competitive</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="<?php echo esc_url($ssc_svc_url('local-seo-services')); ?>"><i class="fas fa-map-marked-alt"></i>Local SEO Audit</a></li>
                                    <li><a href="#"><i class="fas fa-users-cog"></i>Competitor Scan</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-8 d-flex align-items-center">
                                <div class="ssc-mm__pro-tip">
                                    <div class="ssc-mm__pro-tip-icon"><i class="fas fa-lightbulb"></i></div>
                                    <div>
                                        <p class="mb-0"><strong>Pro Tip:</strong> 80% of technical ranking issues are hidden. Start with a Complete Audit today.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Core SEO Panel -->
                    <div class="ssc-mm__panel" id="core-seo">
                        <h4 class="ssc-mm__panel-title"><i class="fas fa-bullhorn ssc-mm__panel-title-icon"></i>Core SEO Services</h4>
                        <div class="row g-4">
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">On-Site Mastery</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="<?php echo esc_url($ssc_svc_url('on-page-seo-services')); ?>"><i class="fas fa-laptop"></i>On-Page SEO</a></li>
                                    <li><a href="#"><i class="fas fa-keyboard"></i>Content Writing</a></li>
                                    <li><a href="#"><i class="fas fa-tags"></i>Metadata Optimization</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('seo-consulting-services')); ?>"><i class="fas fa-user-tie"></i>SEO Consulting Services</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Technical SEO</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-tools"></i>Site Infrastructure</a></li>
                                    <li><a href="#"><i class="fas fa-code"></i>Programmatic SEO</a></li>
                                    <li><a href="#"><i class="fas fa-sitemap"></i>Architecture Setup</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Authority Building</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-link"></i>Off-Page / Links</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('local-seo-services')); ?>"><i class="fas fa-map-marker-alt"></i>Local Maps SEO</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('local-seo-services')); ?>"><i class="fas fa-map-marked-alt"></i>Local SEO Services</a></li>
                                    <li><a href="#"><i class="fas fa-pen-fancy"></i>SEO Content Creation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Business Type SEO Panel -->
                    <div class="ssc-mm__panel" id="business-seo">
                        <h4 class="ssc-mm__panel-title"><i class="fas fa-briefcase ssc-mm__panel-title-icon"></i>Business Type SEO</h4>
                        <div class="row g-4">
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Food &amp; Retail</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-utensils"></i>Restaurant SEO</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('ecommerce-seo-services')); ?>"><i class="fas fa-shopping-cart"></i>E-Commerce SEO</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('shopify-seo-services')); ?>"><i class="fab fa-shopify"></i>Shopify SEO</a></li>
                                    <li><a href="#"><i class="fas fa-gem"></i>Jewelry SEO</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Fashion &amp; Beauty</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-tshirt"></i>Fashion SEO</a></li>
                                    <li><a href="#"><i class="fas fa-magic"></i>Beauty SEO</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Tech &amp; AI</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-robot"></i>AI SEO</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Industry SEO Panel -->
                    <div class="ssc-mm__panel" id="industry-seo">
                        <h4 class="ssc-mm__panel-title"><i class="fas fa-industry ssc-mm__panel-title-icon"></i>Industry Specialists</h4>
                        <div class="row g-4 row-cols-1 row-cols-lg-4">
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Professional</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-gavel"></i>Lawyer SEO</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('dental-seo-services')); ?>"><i class="fas fa-tooth"></i>Dental SEO</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('seo-consulting-services')); ?>"><i class="fas fa-user-tie"></i>SEO Consulting</a></li>
                                </ul>
                            </div>
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Real Estate</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-home"></i>Real Estate SEO</a></li>
                                    <li><a href="#"><i class="fas fa-building"></i>Property Developers</a></li>
                                    <li><a href="#"><i class="fas fa-hand-holding-usd"></i>Real Estate Investors</a></li>
                                </ul>
                            </div>
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Retail &amp; Food</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-utensils"></i>Restaurant</a></li>
                                    <li><a href="<?php echo esc_url($ssc_svc_url('ecommerce-seo-services')); ?>"><i class="fas fa-shopping-bag"></i>E-commerce</a></li>
                                    <li><a href="#"><i class="fas fa-gem"></i>Jewelry</a></li>
                                </ul>
                            </div>
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Lifestyle &amp; Tech</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-tshirt"></i>Fashion</a></li>
                                    <li><a href="#"><i class="fas fa-magic"></i>Beauty</a></li>
                                    <li><a href="#"><i class="fas fa-robot"></i>AI SEO</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Outsource SEO Panel -->
                    <div class="ssc-mm__panel" id="outsource-seo">
                        <h4 class="ssc-mm__panel-title"><i class="fas fa-handshake ssc-mm__panel-title-icon"></i>White Label SEO Services</h4>
                        <div class="row g-4 row-cols-1 row-cols-lg-3">
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Outsourcing</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-handshake"></i>Outsource SEO Services</a></li>
                                    <li><a href="#"><i class="fas fa-link"></i>Link Building for Agencies</a></li>
                                    <li><a href="#"><i class="fas fa-cloud"></i>Link Building for SaaS</a></li>
                                </ul>
                            </div>
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">White Label SEO</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-tags"></i>White Label SEO for Agencies</a></li>
                                    <li><a href="#"><i class="fas fa-map-marker-alt"></i>White Label Local SEO</a></li>
                                    <li><a href="#"><i class="fas fa-clipboard-check"></i>White Label SEO Audit</a></li>
                                </ul>
                            </div>
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Specialized White Label</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-mountain"></i>White Label SEO Canada</a></li>
                                    <li><a href="#"><i class="fab fa-wordpress"></i>White Label WordPress SEO</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Specialized SEO Panel -->
                    <div class="ssc-mm__panel" id="specialized-seo">
                        <h4 class="ssc-mm__panel-title"><i class="fas fa-star ssc-mm__panel-title-icon"></i>Specialized SEO Services</h4>
                        <div class="row g-4 row-cols-1 row-cols-lg-3">
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">AI Search Optimization</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-magic"></i>AI Overview Services</a></li>
                                    <li><a href="#"><i class="fas fa-comments"></i>ChatGPT SEO</a></li>
                                    <li><a href="#"><i class="fas fa-bookmark"></i>Perplexity SEO</a></li>
                                    <li><a href="#"><i class="fas fa-globe-americas"></i>Multilingual SEO</a></li>
                                </ul>
                            </div>
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Home Services &amp; Trades</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-wrench"></i>Auto Repair SEO</a></li>
                                    <li><a href="#"><i class="fas fa-broom"></i>Cleaning Services SEO</a></li>
                                    <li><a href="#"><i class="fas fa-bolt"></i>Glass Company SEO</a></li>
                                    <li><a href="#"><i class="fas fa-stairs"></i>Flooring Company SEO</a></li>
                                    <li><a href="#"><i class="fas fa-water"></i>Pool Service SEO</a></li>
                                    <li><a href="#"><i class="fas fa-print"></i>Printing Company SEO</a></li>
                                    <li><a href="#"><i class="fas fa-warehouse"></i>Garage Door SEO</a></li>
                                    <li><a href="#"><i class="fas fa-truck"></i>Truck Company SEO</a></li>
                                    <li><a href="#"><i class="fas fa-hammer"></i>Roofing Company SEO</a></li>
                                </ul>
                            </div>
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Healthcare &amp; Industry</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="#"><i class="fas fa-heart"></i>Health and Wellness SEO</a></li>
                                    <li><a href="#"><i class="fas fa-house-medical"></i>Nursing Homes SEO</a></li>
                                    <li><a href="#"><i class="fas fa-hammer"></i>SEO For Remodelers</a></li>
                                    <li><a href="#"><i class="fas fa-plane"></i>Travel Company SEO</a></li>
                                    <li><a href="#"><i class="fas fa-baby"></i>Day Care SEO</a></li>
                                    <li><a href="#"><i class="fas fa-hotel"></i>SEO for Hotels</a></li>
                                    <li><a href="#"><i class="fas fa-graduation-cap"></i>SEO for Schools</a></li>
                                    <li><a href="#"><i class="fas fa-store"></i>Brick &amp; Mortar SEO</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- ===== AREAS PANEL — CANADIAN PROVINCES ===== -->
                    <div class="ssc-mm__panel" id="areas-seo">
                        <h4 class="ssc-mm__panel-title"><i class="fas fa-map-marker-alt ssc-mm__panel-title-icon"></i>SEO Services Across Canada</h4>
                        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">

                            <!-- Central Canada -->
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Central Canada</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="<?php echo esc_url($ssc_get_prov_url('ontario')); ?>"><i class="fas fa-map-pin"></i>Ontario</a></li>
                                    <li><a href="#"><i class="fas fa-map-pin"></i>Quebec</a></li>
                                </ul>
                            </div>

                            <!-- Prairie Provinces -->
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Prairie Provinces</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="<?php echo esc_url($ssc_get_prov_url('alberta')); ?>"><i class="fas fa-map-pin"></i>Alberta</a></li>
                                    <li><a href="<?php echo esc_url($ssc_get_prov_url('saskatchewan')); ?>"><i class="fas fa-map-pin"></i>Saskatchewan</a></li>
                                    <li><a href="#"><i class="fas fa-map-pin"></i>Manitoba</a></li>
                                </ul>
                            </div>

                            <!-- West Coast -->
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">West Coast</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="<?php echo esc_url($ssc_get_prov_url('british-columbia')); ?>"><i class="fas fa-map-pin"></i>British Columbia</a></li>
                                </ul>
                            </div>

                            <!-- Atlantic Canada -->
                            <div class="col ssc-mm__group">
                                <h6 class="ssc-mm__group-title">Atlantic Canada</h6>
                                <ul class="ssc-mm__list">
                                    <li><a href="<?php echo esc_url($ssc_get_prov_url('nova-scotia')); ?>"><i class="fas fa-map-pin"></i>Nova Scotia</a></li>
                                    <li><a href="<?php echo esc_url($ssc_get_prov_url('new-brunswick')); ?>"><i class="fas fa-map-pin"></i>New Brunswick</a></li>
                                    <li><a href="#"><i class="fas fa-map-pin"></i>Newfoundland &amp; Labrador</a></li>
                                    <li><a href="#"><i class="fas fa-map-pin"></i>Prince Edward Island</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- ===== FOOTER BAR ===== -->
            <div class="ssc-mm__footer">
                <p class="ssc-mm__footer-text"><i class="fas fa-shield-alt"></i>Data-Driven SEO Strategies for Canadian Businesses</p>
                <a href="#" class="ssc-mm__footer-cta">Explore Case Studies</a>
            </div>

        </div>
    </div>
</li>

<style>
/* =============================================
   SERVICES MEGA MENU — Theme: Blue + Red
============================================= */
.ssc-mm-parent {
    position: static;
}

/* The toggle link in nav */
.ssc-mm-toggle {
    display: inline-flex !important;
    align-items: center;
    gap: 6px;
}
.ssc-mm-chev {
    transition: transform .25s ease;
}
.ssc-mm-parent:hover .ssc-mm-chev,
.ssc-mm-parent.is-open .ssc-mm-chev {
    transform: rotate(180deg);
}

/* Mega menu container */
.ssc-mm {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
    margin: 0 auto;
    padding: 0 16px;
    z-index: 1050;
    opacity: 0;
    visibility: hidden;
    transform: translateY(8px);
    pointer-events: none;
    transition: opacity .25s ease, transform .25s ease, visibility .25s;
}

/* Invisible hover bridge — catches mouse moving from Services to mega menu */
.ssc-mm::before {
    content: '';
    position: absolute;
    top: -20px;
    left: 0;
    right: 0;
    height: 24px;
    background: transparent;
}

.ssc-mm-parent.is-open > .ssc-mm {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    pointer-events: auto;
}

.ssc-mm__inner {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 20px;
    box-shadow: 0 30px 80px rgba(48, 46, 157, 0.15);
    overflow: hidden;
    max-height: 60vh;
    max-width: 1280px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
}

.ssc-mm__layout {
    display: flex;
    flex: 1;
    min-height: 0;
}

/* ===== LEFT SIDEBAR ===== */
.ssc-mm__sidebar {
    width: 290px;
    min-width: 290px;
    background: linear-gradient(180deg, #f8fafc 0%, #f1f3f9 100%);
    border-right: 1px solid #eef0f6;
    padding: 24px 18px;
    overflow-y: auto;
}
.ssc-mm__sidebar-title {
    font-size: 0.72rem;
    font-weight: 800;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 0.18em;
    margin: 0 0 18px 8px;
}
.ssc-mm__tabs {
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.ssc-mm__tab {
    display: flex;
    align-items: center;
    gap: 12px;
    width: 100%;
    text-align: left;
    background: transparent;
    border: 1px solid transparent;
    border-radius: 12px;
    padding: 12px 14px;
    cursor: pointer;
    transition: all .25s ease;
    position: relative;
}
.ssc-mm__tab:hover {
    background: #fff;
    border-color: #e9ecef;
}
.ssc-mm__tab.active {
    background: #fff;
    border-color: rgba(48, 46, 157, 0.15);
    box-shadow: 0 4px 12px rgba(48, 46, 157, 0.06);
}
.ssc-mm__tab-icon {
    width: 38px;
    height: 38px;
    flex-shrink: 0;
    background: linear-gradient(135deg, #bf2021 0%, #d63839 100%);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85rem;
    box-shadow: 0 4px 10px rgba(191, 32, 33, 0.25);
}
.ssc-mm__tab-text {
    flex: 1;
    min-width: 0;
}
.ssc-mm__tab-label {
    display: block;
    font-size: 0.88rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1.2;
}
.ssc-mm__tab-sub {
    display: block;
    font-size: 0.7rem;
    color: #94a3b8;
    margin-top: 2px;
    font-weight: 500;
}
.ssc-mm__tab-arrow {
    font-size: 0.7rem;
    color: #cbd5e1;
    transition: transform .25s ease, color .25s ease;
}
.ssc-mm__tab.active .ssc-mm__tab-arrow {
    color: #302e9d;
    transform: translateX(2px);
}

/* ===== RIGHT CONTENT ===== */
.ssc-mm__content {
    flex: 1;
    padding: 28px 32px;
    overflow-y: auto;
    background: #fff;
}
.ssc-mm__panel {
    display: none;
    animation: ssc-mm-fade-in .3s ease;
}
.ssc-mm__panel.active {
    display: block;
}
@keyframes ssc-mm-fade-in {
    from { opacity: 0; transform: translateY(6px); }
    to { opacity: 1; transform: translateY(0); }
}
.ssc-mm__panel-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #302e9d;
    margin: 0 0 22px;
    padding-bottom: 14px;
    border-bottom: 1px solid #eef0f6;
    display: flex;
    align-items: center;
    gap: 10px;
}
.ssc-mm__panel-title-icon {
    color: #bf2021;
    font-size: 1rem;
}

.ssc-mm__group-title {
    font-size: 0.7rem;
    font-weight: 800;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin: 0 0 12px;
}

.ssc-mm__list {
    list-style: none;
    padding: 0;
    margin: 0;
}
.ssc-mm__list li {
    margin-bottom: 4px;
}
.ssc-mm__list a {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 10px;
    border-radius: 8px;
    font-size: 0.88rem;
    font-weight: 500;
    color: #334155;
    text-decoration: none;
    transition: all .2s ease;
    line-height: 1.3;
}
.ssc-mm__list a i {
    width: 18px;
    text-align: center;
    color: #bf2021;
    font-size: 0.8rem;
    flex-shrink: 0;
    transition: transform .25s ease;
}
.ssc-mm__list a:hover {
    background: linear-gradient(135deg, rgba(48, 46, 157, 0.05) 0%, rgba(191, 32, 33, 0.04) 100%);
    color: #302e9d;
    transform: translateX(3px);
}
.ssc-mm__list a:hover i {
    color: #302e9d;
    transform: scale(1.15);
}

/* Pro Tip */
.ssc-mm__pro-tip {
    display: flex;
    align-items: center;
    gap: 14px;
    background: linear-gradient(135deg, rgba(191, 32, 33, 0.05) 0%, rgba(48, 46, 157, 0.04) 100%);
    border: 1px solid rgba(191, 32, 33, 0.12);
    border-radius: 12px;
    padding: 14px 18px;
    width: 100%;
}
.ssc-mm__pro-tip-icon {
    width: 40px;
    height: 40px;
    background: rgba(191, 32, 33, 0.12);
    color: #bf2021;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.ssc-mm__pro-tip p {
    font-size: 0.85rem;
    color: #64748b;
}

/* ===== FOOTER ===== */
.ssc-mm__footer {
    background: #f8fafc;
    border-top: 1px solid #eef0f6;
    padding: 14px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
}
.ssc-mm__footer-text {
    margin: 0;
    font-size: 0.82rem;
    color: #64748b;
    font-weight: 500;
}
.ssc-mm__footer-text i {
    color: #bf2021;
    margin-right: 8px;
}
.ssc-mm__footer-cta {
    background: transparent;
    border: 1.5px solid #1e293b;
    color: #1e293b;
    padding: 7px 22px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 800;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    transition: all .25s ease;
}
.ssc-mm__footer-cta:hover {
    background: #302e9d;
    border-color: #302e9d;
    color: #fff;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1199.98px) {
    .ssc-mm__sidebar {
        width: 240px;
        min-width: 240px;
    }
    .ssc-mm__tab-sub {
        display: none;
    }
}
@media (max-width: 991.98px) {
    .ssc-mm {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        pointer-events: auto;
        padding: 0;
        margin-top: 8px;
        display: none;
    }
    .ssc-mm-parent.is-open > .ssc-mm {
        display: block;
    }
    .ssc-mm__inner {
        max-height: 50vh;
        border-radius: 14px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    }
    .ssc-mm__layout {
        flex-direction: column;
    }
    .ssc-mm__sidebar {
        width: 100%;
        min-width: 0;
        border-right: 0;
        border-bottom: 1px solid #eef0f6;
    }
    .ssc-mm__tabs {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 6px;
    }
    .ssc-mm__tab {
        flex: 0 0 auto;
    }
    .ssc-mm__tab-text {
        display: none;
    }
    .ssc-mm__tab.active .ssc-mm__tab-text {
        display: block;
    }
    .ssc-mm__content {
        padding: 18px 20px;
    }
    .ssc-mm__footer {
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }
}
</style>

<script>
(function () {
    'use strict';
    document.addEventListener('DOMContentLoaded', function () {

        var mmParent = document.querySelector('.ssc-mm-parent');
        var mmToggle = document.querySelector('.ssc-mm-toggle');
        var mmPanel  = document.querySelector('.ssc-mm');

        if (!mmParent || !mmPanel) return;

        var closeTimer  = null;
        var openTimer   = null;
        var CLOSE_DELAY = 250; // ms — gives user time to move mouse
        var OPEN_DELAY  = 80;  // ms — small delay to avoid accidental opens

        function isDesktop() {
            return window.innerWidth > 991.98;
        }

        function openMenu() {
            clearTimeout(closeTimer);
            clearTimeout(openTimer);
            openTimer = setTimeout(function () {
                mmParent.classList.add('is-open');
                mmToggle.setAttribute('aria-expanded', 'true');
            }, OPEN_DELAY);
        }

        function closeMenu() {
            clearTimeout(openTimer);
            clearTimeout(closeTimer);
            closeTimer = setTimeout(function () {
                mmParent.classList.remove('is-open');
                mmToggle.setAttribute('aria-expanded', 'false');
            }, CLOSE_DELAY);
        }

        function cancelClose() {
            clearTimeout(closeTimer);
        }

        // ===== DESKTOP HOVER LOGIC =====
        // Open when entering Services link or mega menu panel
        mmParent.addEventListener('mouseenter', function () {
            if (isDesktop()) openMenu();
        });

        // Close when leaving Services link area (with delay)
        mmParent.addEventListener('mouseleave', function () {
            if (isDesktop()) closeMenu();
        });

        // Keep open if mouse enters the mega menu itself
        mmPanel.addEventListener('mouseenter', function () {
            if (isDesktop()) cancelClose();
        });

        // Close when leaving the mega menu
        mmPanel.addEventListener('mouseleave', function () {
            if (isDesktop()) closeMenu();
        });

        // ===== MOBILE / CLICK TOGGLE =====
        mmToggle.addEventListener('click', function (e) {
            e.preventDefault();
            if (!isDesktop()) {
                mmParent.classList.toggle('is-open');
                var expanded = mmParent.classList.contains('is-open');
                mmToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
            }
        });

        // Click outside closes (mobile + safety net)
        document.addEventListener('click', function (e) {
            if (!mmParent.contains(e.target)) {
                mmParent.classList.remove('is-open');
                mmToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Escape key closes
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                mmParent.classList.remove('is-open');
                mmToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // ===== TAB SWITCHING WITHIN MEGA MENU =====
        var tabs   = mmPanel.querySelectorAll('.ssc-mm__tab');
        var panels = mmPanel.querySelectorAll('.ssc-mm__panel');

        tabs.forEach(function (tab) {
            var activate = function () {
                var target = tab.getAttribute('data-target');
                tabs.forEach(function (t) { t.classList.remove('active'); });
                panels.forEach(function (p) { p.classList.remove('active'); });
                tab.classList.add('active');
                var targetPanel = document.getElementById(target);
                if (targetPanel) targetPanel.classList.add('active');
            };

            tab.addEventListener('mouseenter', activate);
            tab.addEventListener('click', function (e) {
                e.preventDefault();
                activate();
            });
        });
    });
})();
</script>
