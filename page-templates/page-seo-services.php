<?php

/**
 * Template Name: SEO Services Page
 * Template Post Type: page
 *
 * Full SEO Services listing page with cards grid layout.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<!-- =============================================
     HERO SECTION
============================================= -->
<section class="ssc-services-page-hero position-relative overflow-hidden">
    <div class="ssc-services-page-hero__bg-grid"></div>
    <div class="ssc-services-page-hero__orb ssc-services-page-hero__orb--blue"></div>
    <div class="ssc-services-page-hero__orb ssc-services-page-hero__orb--red"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center min-vh-40 py-5">
            <div class="col-lg-8 mx-auto text-center">

                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb justify-content-center ssc-breadcrumb-list">
                        <li class="breadcrumb-item">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">SEO Services</li>
                    </ol>
                </nav>

                <span class="ssc-services-page-badge mb-4 d-inline-block">
                    🇨🇦 Canada's #1 SEO Agency
                </span>

                <h1 class="ssc-services-page-hero__title mb-4">
                    Complete <span class="ssc-text-gradient">SEO Services</span><br>
                    to Dominate Google
                </h1>

                <p class="ssc-services-page-hero__subtitle mb-5">
                    From technical audits to content strategy — we offer end-to-end SEO solutions that turn search visibility into real revenue for Canadian businesses.
                </p>

                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="#seo-services-grid" class="ssc-btn-primary text-decoration-none px-5 py-3 rounded-pill fw-bold">
                        Explore All Services
                        <svg class="ms-2" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="#audit" class="ssc-btn-outline-primary text-decoration-none px-5 py-3 rounded-pill fw-bold">
                        Get Free SEO Audit
                    </a>
                </div>

                <!-- Quick Stats Bar -->
                <div class="ssc-services-page-stats mt-5">
                    <div class="ssc-services-page-stats__item">
                        <span class="ssc-services-page-stats__number">500+</span>
                        <span class="ssc-services-page-stats__label">Projects Delivered</span>
                    </div>
                    <div class="ssc-services-page-stats__divider"></div>
                    <div class="ssc-services-page-stats__item">
                        <span class="ssc-services-page-stats__number">14</span>
                        <span class="ssc-services-page-stats__label">SEO Services</span>
                    </div>
                    <div class="ssc-services-page-stats__divider"></div>
                    <div class="ssc-services-page-stats__item">
                        <span class="ssc-services-page-stats__number">98%</span>
                        <span class="ssc-services-page-stats__label">Client Retention</span>
                    </div>
                    <div class="ssc-services-page-stats__divider"></div>
                    <div class="ssc-services-page-stats__item">
                        <span class="ssc-services-page-stats__number">10+</span>
                        <span class="ssc-services-page-stats__label">Years Experience</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- =============================================
     SERVICES GRID
============================================= -->
<section id="seo-services-grid" class="ssc-services-full-grid py-6">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-5 pb-2">
            <span class="ssc-section-label mb-3 d-inline-block">What We Do</span>
            <h2 class="ssc-services-full-grid__heading mb-3">
                All SEO Services <span class="ssc-text-gradient">Under One Roof</span>
            </h2>
            <p class="ssc-services-full-grid__subheading mx-auto">
                Every service is data-driven, transparently reported, and tailored to your business goals. No cookie-cutter packages — just strategies that get results.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4" id="services-cards-row">

            <!-- 01 SEO Audit & Strategy -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="audit">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--blue">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </div>
                        <span class="ssc-svc-card__number">01</span>
                    </div>
                    <h3 class="ssc-svc-card__title">SEO Audit & Strategy</h3>
                    <p class="ssc-svc-card__desc">We begin with a comprehensive SEO audit to uncover technical issues, content gaps, and competitor opportunities — then build a custom strategy aligned with your goals.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Full technical site audit</li>
                        <li>Competitor gap analysis</li>
                        <li>Custom 90-day SEO roadmap</li>
                        <li>Priority action list</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 02 Keyword Research -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="keyword">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--red">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">02</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Keyword Research</h3>
                    <p class="ssc-svc-card__desc">We identify the highest-value search terms your audience uses, so your site targets keywords that bring relevant traffic, qualified leads, and real conversions.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Search volume & intent analysis</li>
                        <li>Long-tail keyword mapping</li>
                        <li>Seasonal trend analysis</li>
                        <li>Competitor keyword gaps</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 03 On-Page SEO -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="onpage">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--green">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        </div>
                        <span class="ssc-svc-card__number">03</span>
                    </div>
                    <h3 class="ssc-svc-card__title">On-Page SEO</h3>
                    <p class="ssc-svc-card__desc">We optimize every element on your pages — titles, meta descriptions, headings, schema, internal links, and content — to maximize relevance and improve search rankings.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Title & meta optimization</li>
                        <li>Heading structure (H1–H6)</li>
                        <li>Schema markup implementation</li>
                        <li>Internal linking strategy</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 04 Technical SEO -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="technical">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--purple">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <span class="ssc-svc-card__number">04</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Technical SEO</h3>
                    <p class="ssc-svc-card__desc">We fix the hidden issues that stop Google from properly crawling and ranking your site — from site speed and Core Web Vitals to crawl errors and indexing problems.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Core Web Vitals optimization</li>
                        <li>Crawlability & indexing fixes</li>
                        <li>Site speed improvements</li>
                        <li>Mobile usability audit</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 05 Local SEO -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card ssc-svc-card--featured" data-service="local">
                    <div class="ssc-svc-card__featured-badge">Most Popular</div>
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--orange">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <span class="ssc-svc-card__number">05</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Local SEO</h3>
                    <p class="ssc-svc-card__desc">We help Canadian businesses rank in local searches and Google Maps. From Google Business Profile optimization to local citation building — we get you found in your city.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Google Business Profile optimization</li>
                        <li>Local citation building</li>
                        <li>Review generation strategy</li>
                        <li>Location page SEO</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 06 Link Building -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="linkbuilding">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--teal">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">06</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Link Building</h3>
                    <p class="ssc-svc-card__desc">We secure high-quality backlinks from authoritative, relevant websites to boost your domain strength, improve rankings, and build lasting organic visibility.</p>
                    <ul class="ssc-svc-card__features">
                        <li>White-hat outreach campaigns</li>
                        <li>Guest post placements</li>
                        <li>Niche-relevant backlinks</li>
                        <li>Toxic link disavow</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 07 SEO Content Writing -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="content-writing">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--blue">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">07</span>
                    </div>
                    <h3 class="ssc-svc-card__title">SEO Content Writing</h3>
                    <p class="ssc-svc-card__desc">We create high-quality, search-optimized content — service pages, blog articles, landing pages — that ranks for the right keywords and converts visitors into customers.</p>
                    <ul class="ssc-svc-card__features">
                        <li>SEO-optimized blog posts</li>
                        <li>Service & location pages</li>
                        <li>Content cluster strategy</li>
                        <li>E-E-A-T content framework</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 08 Content Optimization -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="content-opt">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--red">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">08</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Content Optimization</h3>
                    <p class="ssc-svc-card__desc">We improve your existing content to match current search intent, boost topical authority, and help underperforming pages climb to page one.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Content refresh & rewrite</li>
                        <li>Search intent alignment</li>
                        <li>Keyword density tuning</li>
                        <li>Featured snippet targeting</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 09 E-Commerce SEO -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="ecommerce">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--green">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">09</span>
                    </div>
                    <h3 class="ssc-svc-card__title">E-Commerce SEO</h3>
                    <p class="ssc-svc-card__desc">We optimize online stores for organic search — from product page SEO and category structure to schema markup and shopping feed optimization for Shopify, WooCommerce, and more.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Product & category page SEO</li>
                        <li>Product schema markup</li>
                        <li>Shopify & WooCommerce SEO</li>
                        <li>Shopping feed optimization</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 10 Off-Page SEO -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="offpage">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--purple">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">10</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Off-Page SEO</h3>
                    <p class="ssc-svc-card__desc">We build your website's authority and reputation beyond your domain — through strategic digital PR, brand mentions, and high-quality external signals that Google trusts.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Digital PR campaigns</li>
                        <li>Brand mention tracking</li>
                        <li>Influencer outreach</li>
                        <li>Domain authority growth</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 11 Enterprise SEO -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="enterprise">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--orange">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">11</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Enterprise SEO</h3>
                    <p class="ssc-svc-card__desc">Scalable SEO solutions for large organizations with complex websites, multiple locations, or national reach. We manage large-scale campaigns with precision and full transparency.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Large-scale site architecture</li>
                        <li>Multi-location SEO</li>
                        <li>Dedicated account management</li>
                        <li>Custom KPI dashboards</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 12 Google Ads / PPC -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="ppc">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--teal">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <span class="ssc-svc-card__number">12</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Google Ads / PPC</h3>
                    <p class="ssc-svc-card__desc">We manage high-ROI Google Ads campaigns that complement your organic SEO. Targeting the right keywords, audiences, and devices to maximize every ad dollar spent.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Search & display campaigns</li>
                        <li>Landing page optimization</li>
                        <li>Bid strategy management</li>
                        <li>Conversion tracking setup</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 13 Reputation Management -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="reputation">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--blue">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        </div>
                        <span class="ssc-svc-card__number">13</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Reputation Management</h3>
                    <p class="ssc-svc-card__desc">We monitor, protect, and improve your brand's online reputation — managing reviews, suppressing negative content, and building a trustworthy digital presence.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Review monitoring & response</li>
                        <li>Negative content suppression</li>
                        <li>Brand SERP management</li>
                        <li>Review generation campaigns</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 14 Performance Tracking & Reporting -->
            <div class="col-xl-4 col-md-6">
                <div class="ssc-svc-card" data-service="reporting">
                    <div class="ssc-svc-card__top">
                        <div class="ssc-svc-card__icon-wrap ssc-svc-card__icon-wrap--red">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        </div>
                        <span class="ssc-svc-card__number">14</span>
                    </div>
                    <h3 class="ssc-svc-card__title">Performance Tracking & Reporting</h3>
                    <p class="ssc-svc-card__desc">We provide transparent monthly reports with rankings, traffic data, conversions, and campaign insights — so you always know exactly what your SEO investment is delivering.</p>
                    <ul class="ssc-svc-card__features">
                        <li>Monthly ranking reports</li>
                        <li>Google Analytics 4 setup</li>
                        <li>Search Console monitoring</li>
                        <li>Custom KPI dashboards</li>
                    </ul>
                    <div class="ssc-svc-card__footer">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-svc-card__cta">
                            Get Started
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div><!-- /row -->

    </div>
</section>


<!-- =============================================
     WHY CHOOSE US STRIP
============================================= -->
<section class="ssc-services-why py-5">
    <div class="container">
        <div class="ssc-services-why__inner">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4">
                    <h2 class="ssc-services-why__heading mb-3">Why Businesses Across Canada Choose Us</h2>
                    <p class="ssc-services-why__sub opacity-75 mb-0">We combine deep SEO expertise with transparent communication and measurable results.</p>
                </div>
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="ssc-services-why__pill">
                                <div class="ssc-services-why__pill-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>No long-term lock-in contracts</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ssc-services-why__pill">
                                <div class="ssc-services-why__pill-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>Transparent monthly reporting</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ssc-services-why__pill">
                                <div class="ssc-services-why__pill-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>Dedicated SEO strategist per client</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ssc-services-why__pill">
                                <div class="ssc-services-why__pill-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>100% white-hat SEO techniques</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ssc-services-why__pill">
                                <div class="ssc-services-why__pill-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>Canada-focused local expertise</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ssc-services-why__pill">
                                <div class="ssc-services-why__pill-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>Results-first, data-driven approach</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- =============================================
     AUDIT FORM CTA
============================================= -->
<?php get_template_part('template-parts/global/audit', 'form'); ?>


<!-- =============================================
     PAGE-SPECIFIC STYLES
============================================= -->
<style>
/* ---- Hero ---- */
.ssc-services-page-hero {
    background: linear-gradient(135deg, var(--ssc-primary-dark) 0%, var(--ssc-primary) 60%, #3b1fa3 100%);
    padding: 100px 0 80px;
    color: #fff;
}
.ssc-services-page-hero__bg-grid {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 48px 48px;
    pointer-events: none;
}
.ssc-services-page-hero__orb {
    position: absolute; border-radius: 50%; pointer-events: none; filter: blur(80px); opacity: .25;
}
.ssc-services-page-hero__orb--blue {
    width: 500px; height: 500px;
    background: radial-gradient(circle, #4f8ef7, transparent);
    top: -150px; right: -100px;
}
.ssc-services-page-hero__orb--red {
    width: 400px; height: 400px;
    background: radial-gradient(circle, var(--ssc-secondary), transparent);
    bottom: -100px; left: -80px;
}
.ssc-services-page-badge {
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.25);
    color: #fff;
    padding: 6px 20px;
    border-radius: 50px;
    font-size: .8rem;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    backdrop-filter: blur(6px);
}
.ssc-services-page-hero__title {
    font-size: clamp(2.2rem, 5vw, 3.6rem);
    font-weight: 800;
    line-height: 1.15;
    color: #fff;
}
.ssc-text-gradient {
    background: linear-gradient(90deg, #7dd3fc, #c084fc);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.ssc-services-page-hero__subtitle {
    font-size: 1.15rem;
    color: rgba(255,255,255,.8);
    max-width: 620px;
    margin-left: auto; margin-right: auto;
    line-height: 1.7;
}
.ssc-btn-outline-primary {
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    color: #fff;
    transition: all .3s ease;
}
.ssc-btn-outline-primary:hover {
    background: rgba(255,255,255,.12);
    border-color: #fff;
    color: #fff;
}

/* Stats bar */
.ssc-services-page-stats {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 0;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 16px;
    padding: 20px 40px;
    backdrop-filter: blur(8px);
}
.ssc-services-page-stats__item {
    display: flex; flex-direction: column; align-items: center; padding: 0 32px;
}
.ssc-services-page-stats__number {
    font-size: 1.9rem; font-weight: 800; color: #fff; line-height: 1;
}
.ssc-services-page-stats__label {
    font-size: .75rem; color: rgba(255,255,255,.65); margin-top: 4px; white-space: nowrap;
}
.ssc-services-page-stats__divider {
    width: 1px; height: 40px; background: rgba(255,255,255,.2);
}

/* ---- Grid Section ---- */
.ssc-services-full-grid { background: var(--ssc-bg-light); }
.py-6 { padding-top: 90px !important; padding-bottom: 90px !important; }
.ssc-section-label {
    font-size: .72rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .18em;
    color: var(--ssc-secondary);
    background: var(--ssc-secondary-subtle);
    padding: 6px 18px;
    border-radius: 50px;
}
.ssc-services-full-grid__heading {
    font-size: clamp(1.8rem, 3.5vw, 2.8rem);
    font-weight: 800;
    color: var(--ssc-dark);
    line-height: 1.2;
}
.ssc-services-full-grid__subheading {
    font-size: 1.05rem;
    color: var(--ssc-gray-500);
    max-width: 640px;
    line-height: 1.7;
}

/* ---- Service Card ---- */
.ssc-svc-card {
    background: #fff;
    border-radius: 20px;
    padding: 32px;
    border: 1px solid var(--ssc-gray-200);
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    overflow: hidden;
    transition: transform .35s cubic-bezier(.2,.7,.3,1), box-shadow .35s ease, border-color .3s ease;
}
.ssc-svc-card::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--ssc-primary), var(--ssc-secondary));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .4s ease;
    border-radius: 0 0 20px 20px;
}
.ssc-svc-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 24px 60px rgba(48, 46, 157, .14);
    border-color: rgba(48, 46, 157, .2);
}
.ssc-svc-card:hover::after { transform: scaleX(1); }

/* Featured card */
.ssc-svc-card--featured {
    border: 2px solid var(--ssc-primary);
    background: linear-gradient(135deg, #fafbff 0%, #fff 100%);
}
.ssc-svc-card__featured-badge {
    position: absolute; top: 18px; right: 18px;
    background: var(--ssc-primary);
    color: #fff;
    font-size: .68rem;
    font-weight: 800;
    padding: 4px 12px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: .08em;
}

.ssc-svc-card__top {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 20px;
}
.ssc-svc-card__icon-wrap {
    width: 58px; height: 58px;
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}
.ssc-svc-card__icon-wrap--blue   { background: #eff6ff; color: #2563eb; }
.ssc-svc-card__icon-wrap--red    { background: var(--ssc-secondary-subtle); color: var(--ssc-secondary); }
.ssc-svc-card__icon-wrap--green  { background: #f0fdf4; color: #16a34a; }
.ssc-svc-card__icon-wrap--purple { background: #faf5ff; color: #7c3aed; }
.ssc-svc-card__icon-wrap--orange { background: #fff7ed; color: #ea580c; }
.ssc-svc-card__icon-wrap--teal   { background: #f0fdfa; color: #0d9488; }

.ssc-svc-card__number {
    font-size: 2.8rem;
    font-weight: 900;
    color: var(--ssc-gray-200);
    line-height: 1;
    font-variant-numeric: tabular-nums;
}
.ssc-svc-card__title {
    font-size: 1.2rem;
    font-weight: 800;
    color: var(--ssc-dark);
    margin-bottom: 12px;
    line-height: 1.3;
}
.ssc-svc-card__desc {
    font-size: .93rem;
    color: var(--ssc-gray-500);
    line-height: 1.7;
    margin-bottom: 20px;
    flex-grow: 1;
}
.ssc-svc-card__features {
    list-style: none;
    padding: 0; margin: 0 0 24px;
    display: flex; flex-direction: column; gap: 8px;
}
.ssc-svc-card__features li {
    font-size: .88rem;
    color: var(--ssc-gray-600);
    padding-left: 22px;
    position: relative;
}
.ssc-svc-card__features li::before {
    content: '';
    position: absolute; left: 0; top: 6px;
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--ssc-primary);
}
.ssc-svc-card__footer { margin-top: auto; }
.ssc-svc-card__cta {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: .88rem;
    font-weight: 800;
    color: var(--ssc-primary);
    text-decoration: none;
    padding: 10px 22px;
    border: 2px solid var(--ssc-primary);
    border-radius: 50px;
    transition: all .3s ease;
}
.ssc-svc-card__cta:hover {
    background: var(--ssc-primary);
    color: #fff;
}
.ssc-svc-card__cta svg { transition: transform .3s ease; }
.ssc-svc-card__cta:hover svg { transform: translateX(4px); }

/* ---- Why Choose Strip ---- */
.ssc-services-why { background: #fff; }
.ssc-services-why__inner {
    background: linear-gradient(135deg, var(--ssc-primary-dark) 0%, var(--ssc-primary) 100%);
    border-radius: 28px;
    padding: 60px 50px;
    color: #fff;
}
.ssc-services-why__heading {
    font-size: 1.8rem;
    font-weight: 800;
    color: #fff;
    line-height: 1.3;
}
.ssc-services-why__pill {
    display: flex;
    align-items: center;
    gap: 12px;
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 12px;
    padding: 14px 18px;
    font-size: .9rem;
    color: rgba(255,255,255,.9);
    transition: background .3s ease;
}
.ssc-services-why__pill:hover { background: rgba(255,255,255,.18); }
.ssc-services-why__pill-icon {
    width: 34px; height: 34px; flex-shrink: 0;
    background: rgba(255,255,255,.15);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    color: #7dd3fc;
}

/* ---- Breadcrumb ---- */
.ssc-breadcrumb-list { margin: 0; padding: 0; }
.ssc-breadcrumb-list .breadcrumb-item a { color: rgba(255,255,255,.7); text-decoration: none; font-size: .85rem; }
.ssc-breadcrumb-list .breadcrumb-item a:hover { color: #fff; }
.ssc-breadcrumb-list .breadcrumb-item.active { color: rgba(255,255,255,.5); font-size: .85rem; }
.ssc-breadcrumb-list .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,.4); }

/* ---- Responsive ---- */
@media (max-width: 768px) {
    .ssc-services-page-hero { padding: 70px 0 60px; }
    .ssc-services-page-stats { padding: 18px 20px; gap: 8px; }
    .ssc-services-page-stats__item { padding: 0 14px; }
    .ssc-services-page-stats__number { font-size: 1.4rem; }
    .ssc-services-why__inner { padding: 36px 24px; }
    .ssc-svc-card { padding: 24px 20px; }
}
@media (max-width: 480px) {
    .ssc-services-page-stats { flex-direction: column; gap: 12px; }
    .ssc-services-page-stats__divider { width: 40px; height: 1px; }
}
</style>

<?php get_footer(); ?>
