<?php

/**
 * Section: Hero
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<section class="ssc-hero position-relative overflow-hidden" aria-label="<?php esc_attr_e('SEO Services Canada', 'seoservicecanada'); ?>">

    <!-- Modern Background Layers -->
    <div class="ssc-hero__bg-image" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-seo.png');"></div>
    <div class="ssc-hero__gradient"></div>

    <!-- Animated Background Shapes -->
    <div class="ssc-hero__shapes">
        <div class="ssc-shape ssc-shape-1">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="var(--ssc-primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" opacity="0.1">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </div>
        <div class="ssc-shape ssc-shape-2">
            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="var(--ssc-accent)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" opacity="0.1">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
            </svg>
        </div>
        <div class="ssc-shape ssc-shape-3">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--ssc-primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" opacity="0.1">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
        </div>
    </div>

    <div class="container position-relative z-index-2">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="ssc-hero__content pe-lg-4">
                    <h1 class="ssc-hero__title">
                        <span class="ssc-text-gradient">SEO Services Canada</span><br>
                        That Drive Real 
                        <span class="ssc-rotating-wrapper">
                            <span class="ssc-rotating-text">
                                <span class="ssc-rotating-text__item">Traffic</span>
                                <span class="ssc-rotating-text__item">Leads</span>
                                <span class="ssc-rotating-text__item">Business Growth</span>
                            </span>
                        </span>
                    </h1>
                    <p class="ssc-hero__subtitle">Looking to rank higher on Google and attract more customers? Our expert SEO services in Canada help businesses increase organic traffic, improve search rankings, and generate qualified leads through data-driven SEO strategies.</p>



                    



                    <div class="ssc-hero__grid">
                        <!-- Card 1 -->
                        <div class="ssc-hero-card">
                            <div class="ssc-hero-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                            </div>
                            <span class="ssc-hero-card__text">Proven SEO strategies that improve Google rankings</span>
                        </div>
                        <!-- Card 2 -->
                        <div class="ssc-hero-card">
                            <div class="ssc-hero-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                            </div>
                            <span class="ssc-hero-card__text">Custom SEO campaigns tailored to your business goals</span>
                        </div>
                        <!-- Card 3 -->
                        <div class="ssc-hero-card">
                            <div class="ssc-hero-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20V10"></path><path d="M18 20V4"></path><path d="M6 20v-4"></path></svg>
                            </div>
                            <span class="ssc-hero-card__text">Transparent reporting and measurable growth</span>
                        </div>
                        <!-- Card 4 -->
                        <div class="ssc-hero-card">
                            <div class="ssc-hero-card__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <span class="ssc-hero-card__text">Trusted by businesses across Canada</span>
                        </div>
                    </div>  
                    <p class="ssc-hero__subtitle">Trusted by growing businesses across Toronto, Vancouver, Calgary, Montreal, and throughout Canada.</p>
                    <div class="ssc-hero__actions d-flex flex-wrap gap-3">
                        <a href="#audit" class="btn ssc-btn-primary">Get Your Free SEO Audit</a>
                        <a href="#contact" class="btn ssc-btn-outline">Book a Free Consultation</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <!-- Interactive Animation Visuals: Dashboard to Terminal Loop -->
                <div class="ssc-hero-animation-wrapper w-100 position-relative" style="height: 520px; perspective: 1500px;">

                    <!-- 1. The SEO Dashboard (Visible first) -->
                    <div class="ssc-dashboard ssc-glass shadow-xl rounded-4 overflow-hidden position-absolute w-100 h-100">
                        <div class="ssc-dash-header px-4 py-4 border-bottom bg-white/40">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="ssc-dash-title fw-bold text-dark d-flex align-items-center gap-2 fs-5">
                                    <span class="ssc-dash-icon bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 20V10M18 20V4M6 20v-4" />
                                        </svg>
                                    </span>
                                    <span>Search Performance</span>
                                </div>
                                <div class="ssc-live-indicator d-flex align-items-center gap-2 px-3 py-1 bg-secondary-subtle rounded-pill">
                                    <span class="ssc-pulse-dot bg-secondary rounded-circle" style="width: 8px; height: 8px;"></span>
                                    <span class="text-secondary fw-bold small text-uppercase" style="letter-spacing: 0.05em;">Live</span>
                                </div>
                            </div>
                            
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="ssc-stat-small p-3 rounded-3 bg-white/50 border border-white">
                                        <span class="text-uppercase text-muted fw-bold d-block mb-1" style="font-size: 0.65rem;">Total Impressions</span>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <strong class="text-dark fs-3">1.4M</strong>
                                            <span class="text-secondary small fw-bold">+18.2% ⬆</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="ssc-stat-small p-3 rounded-3 bg-white/50 border border-white">
                                        <span class="text-uppercase text-muted fw-bold d-block mb-1" style="font-size: 0.65rem;">Organic Clicks</span>
                                        <div class="d-flex align-items-baseline gap-2">
                                            <strong class="text-secondary fs-3">94.2K</strong>
                                            <span class="text-secondary small fw-bold">+24.5% ⬆</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="ssc-dash-body p-4 w-100" style="height: 280px;">
                            <div class="ssc-chart-grid-bg position-absolute inset-0 p-4" style="z-index: 0; opacity: 0.4;">
                                <div class="h-100 w-100" style="background-image: linear-gradient(0deg, #e2e8f0 1px, transparent 1px), linear-gradient(90deg, #e2e8f0 1px, transparent 1px); background-size: 40px 40px;"></div>
                            </div>
                            
                            <svg class="ssc-chart-svg w-100 h-100 overflow-visible position-relative" style="z-index: 1;" viewBox="0 0 500 220" preserveAspectRatio="none">
                                <defs>
                                    <linearGradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
                                        <stop offset="0%" stop-color="#bf2021" stop-opacity="0.3" />
                                        <stop offset="100%" stop-color="#bf2021" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                                
                                <!-- Previous Period (Dashed) -->
                                <path class="ssc-chart-line-prev" d="M0,180 C50,180 100,190 150,160 C200,130 250,150 300,120 C350,90 400,100 450,80 500,60" fill="none" stroke="#94a3b8" stroke-width="2" stroke-dasharray="8,4" />
                                
                                <!-- Current Period (Smooth Curve) -->
                                <path class="ssc-chart-line" d="M0,170 C50,150 100,180 150,100 C200,80 250,120 300,60 C350,20 400,60 450,10 500,30" fill="none" stroke="#bf2021" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                
                                <path class="ssc-chart-area" d="M0,170 C50,150 100,180 150,100 C200,80 250,120 300,60 C350,20 400,60 450,10 500,30 V220 H0 Z" fill="url(#chartGradient)" />
                                
                                <!-- Performance Markers -->
                                <circle class="ssc-chart-point" cx="150" cy="100" r="6" fill="#fff" stroke="#bf2021" stroke-width="3" />
                                <circle class="ssc-chart-point" cx="300" cy="60" r="6" fill="#fff" stroke="#bf2021" stroke-width="3" />
                                <circle class="ssc-chart-point" cx="450" cy="10" r="6" fill="#fff" stroke="#bf2021" stroke-width="3" />
                                
                                <g class="ssc-chart-tooltip">
                                    <rect x="410" y="-35" width="80" height="30" rx="4" fill="#0f172a" />
                                    <text x="450" y="-15" fill="#fff" font-size="14" font-weight="bold" font-family="Space Grotesk, sans-serif" text-anchor="middle">+142%</text>
                                    <polygon points="445,-5 455,-5 450,2" fill="#0f172a" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <!-- 2. The Coding Terminal (Slides in second) -->
                    <div class="ssc-terminal ssc-glass-dark shadow-2xl rounded-4 overflow-hidden position-absolute w-100 h-100">
                        <div class="ssc-terminal-header d-flex align-items-center px-4 py-3 border-bottom border-white/10" style="background: rgba(15, 23, 42, 0.6);">
                            <div class="d-flex gap-2">
                                <span style="width: 12px; height: 12px; border-radius: 50%; background: #ff5f57;"></span>
                                <span style="width: 12px; height: 12px; border-radius: 50%; background: #febc2e;"></span>
                                <span style="width: 12px; height: 12px; border-radius: 50%; background: #28c840;"></span>
                            </div>
                            <span class="ssc-term-title ms-4 text-white/40 small" style="font-family: 'Fira Code', monospace; letter-spacing: 0.1em;">~/seo-optimizer — bash</span>
                        </div>
                        
                        <div class="ssc-terminal-body p-4 text-white" style="font-family: 'Fira Code', monospace; font-size: 0.9rem; line-height: 1.6;">
                            <div class="row h-100">
                                <div class="col-8 border-end border-white/10 pe-4">
                                    <div class="ssc-typewriter-line mb-3">
                                        <span class="text-success fw-bold">seocanada$</span> scan --targets site_url
                                    </div>
                                    <div class="ssc-typewriter-line ssc-delay-1 mb-2">
                                        <div class="d-flex justify-content-between mb-1 small text-white/60">
                                            <span>Analyzing Core Web Vitals...</span>
                                            <span>85%</span>
                                        </div>
                                        <div class="ssc-progress-bar rounded-pill overflow-hidden bg-white/10" style="height: 6px;">
                                            <div class="ssc-progress-fill bg-success h-100" style="width: 0;"></div>
                                        </div>
                                    </div>
                                    <div class="ssc-typewriter-line ssc-delay-2 mb-3">
                                        <span class="text-info fw-bold">[INFO]</span> 24 critical issues resolved
                                        <br><span class="text-info fw-bold">[INFO]</span> Keyword density optimized
                                    </div>
                                    <div class="ssc-typewriter-line ssc-delay-3">
                                        <span class="text-success fw-bold">seocanada$</span> rank --now
                                        <br><span class="text-warning">System:</span> Calculating growth potential... <span class="ssc-cursor d-inline-block bg-white" style="width: 8px; height: 15px; vertical-align: middle;"></span>
                                    </div>
                                </div>
                                <div class="col-4 ps-4 d-none d-md-block">
                                    <div class="ssc-status-board">
                                        <div class="text-white/30 text-uppercase fw-bold mb-3" style="font-size: 0.6rem;">System Status</div>
                                        <div class="mb-3">
                                            <div class="small mb-1 text-white/70">Performance</div>
                                            <div class="text-success fw-bold">98/100</div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="small mb-1 text-white/70">Accessibility</div>
                                            <div class="text-info fw-bold">100/100</div>
                                        </div>
                                        <div>
                                            <div class="small mb-1 text-white/70">SEO Grade</div>
                                            <div class="text-primary fw-bold">A+</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>