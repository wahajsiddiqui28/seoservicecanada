<?php

/**
 * Footer Template
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
</main><!-- #main-content -->



<style>
/* ============ Strategic Partners Marquee ============ */
.strategic-partners-section{
    background: radial-gradient(circle at top right, rgba(0,106,172,.03), transparent),
        radial-gradient(circle at bottom left, rgba(140,198,63,.03), transparent),
        #fcfdfe;
}
.sp-bg-grid{
    position:absolute;inset:0;
    background-image:linear-gradient(rgba(0,40,104,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(0,40,104,.03) 1px,transparent 1px);
    background-size:54px 54px;opacity:.7;pointer-events:none;
}

.sp-marquee{width:100%;overflow:hidden;margin-top:34px;}
.sp-track{
    display:flex;flex-wrap:nowrap;gap:24px;width:max-content;
    padding:14px 24px;
    animation:sp-scroll 42s linear infinite;will-change:transform;
}
.sp-marquee:hover .sp-track{animation-play-state:paused;}
@keyframes sp-scroll{ from{transform:translateX(0);} to{transform:translateX(-50%);} }

.sp-fade{position:absolute;top:0;bottom:0;width:100px;z-index:3;pointer-events:none;}
.sp-fade-left{left:0;background:linear-gradient(90deg,#fcfdfe 0%,transparent 100%);}
.sp-fade-right{right:0;background:linear-gradient(270deg,#fcfdfe 0%,transparent 100%);}

/* Card */
.sp-card{
    flex:0 0 360px;width:360px;
    background:#fff;border-radius:20px;padding:34px 30px;
    border:1px solid #e9eef5;box-shadow:0 8px 24px rgba(0,48,80,.06);
    position:relative;overflow:hidden;
    transition:transform .4s cubic-bezier(.2,.7,.3,1), box-shadow .4s ease, border-color .4s ease;
}
.sp-card::before{
    content:'';position:absolute;top:0;left:0;width:100%;height:4px;
    background:linear-gradient(90deg,#002868,#BF0A30);
    transform:scaleX(0);transform-origin:left;transition:transform .45s ease;
}
.sp-card:hover{transform:translateY(-10px);box-shadow:0 34px 60px rgba(0,48,80,.16);border-color:#dbe4f0;}
.sp-card:hover::before{transform:scaleX(1);}

.sp-logo-wrap{
    height:96px;width:100%;
    display:flex;align-items:center;justify-content:flex-start;
    background:#f8fafc;border:1px solid #eef2f7;border-radius:14px;
    padding:14px 18px;margin-bottom:22px;
    transition:all .4s ease;
}
.sp-card:hover .sp-logo-wrap{background:#fff;border-color:rgba(0,40,104,.18);box-shadow:0 10px 24px rgba(0,40,104,.08);}
.sp-logo-wrap img{max-height:100%;max-width:80%;object-fit:contain;transition:transform .4s ease;}
.sp-card:hover .sp-logo-wrap img{transform:scale(1.05);}

.sp-name{font-size:1.25rem;font-weight:800;color:#002868;margin:0 0 12px;transition:color .25s ease;}
.sp-card:hover .sp-name{color:#BF0A30;}
.sp-desc{
    color:#5b6678;font-size:.9rem;line-height:1.7;margin:0 0 18px;
    display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden;
}
.sp-link{
    display:inline-flex;align-items:center;gap:8px;
    color:#002868;font-weight:700;font-size:.78rem;text-transform:uppercase;letter-spacing:.08em;
    text-decoration:none;transition:all .3s ease;
}
.sp-link i{transition:transform .3s ease;font-size:.75rem;}
.sp-card:hover .sp-link{color:#BF0A30;}
.sp-card:hover .sp-link i{transform:translateX(5px);}

@media (max-width:768px){
    .sp-card{flex:0 0 300px;width:300px;padding:28px 24px;}
    .sp-track{animation-duration:34s;}
    .sp-fade{width:40px;}
}
@media (prefers-reduced-motion: reduce){
    .sp-track{animation:none;overflow-x:auto;}
}
</style>
<!-- Our Strategic Partners End -->


<section class="strategic-partners-section position-relative overflow-hidden py-5">
    <div class="sp-bg-grid"></div>
    <div class="stats-glow-orb" style="top: -10%; right: -5%; opacity: 0.15; background: radial-gradient(circle, var(--primary-blue), transparent);"></div>
    <div class="stats-glow-orb" style="bottom: -10%; left: -5%; opacity: 0.15; background: radial-gradient(circle, var(--accent-green), transparent);"></div>

    <div class="container position-relative z-2 py-lg-4">
        <!-- Section Header -->
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <span class="d-inline-block py-1 px-3 rounded-pill bg-light-blue text-primary fw-bold text-uppercase ls-2 mb-3" style="font-size: 11px; letter-spacing: 2px;">Our Ecosystem</span>
                <h2 class="display-5 fw-bold text-dark mb-4">Strategic Partnerships for <br><span class="text-primary">Global Excellence</span></h2>
                <div class="mx-auto bg-primary mb-4" style="width: 60px; height: 3px; border-radius: 2px;"></div>
                <p class="lead text-muted mx-auto mb-0" style="max-width: 850px; font-size: 1.15rem; line-height: 1.7;">
                    We collaborate with industry-leading specialists to deliver high-impact results. Through these trusted alliances, we expand our technical reach and ensure your project benefits from world-class expertise at every scale.
                </p>
            </div>
        </div>
    </div>

    <!-- Full-width Partners Marquee -->
    <div class="sp-marquee position-relative">
        <div class="sp-track">
                <div class="sp-card">
        <div class="sp-logo-wrap">
            <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/our-strategic-partners/Pakistan-logo.webp" alt="SEO Specialist Pakistan Logo" loading="lazy" decoding="async">
        </div>
        <h3 class="sp-name">SEO Specialist Pakistan</h3>
        <p class="sp-desc">A full-service power-house supporting regional and international clients. This collaboration scales our operational efficiency while maintaining the highest quality standards for strategy and content optimization.</p>
    </div>
    <div class="sp-card">
        <div class="sp-logo-wrap">
            <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/our-strategic-partners/Logo-onlinewebsiteonline.png" alt="Online Website Tools Logo" loading="lazy" decoding="async">
        </div>
        <h3 class="sp-name">Online Website Tools</h3>
        <p class="sp-desc">Driving productivity through built-for-purpose digital solutions. Our alliance provides access to specialized tools that streamline routine tasks and optimize workflows for both internal teams and our clients.</p>
    </div>
    <div class="sp-card">
        <div class="sp-logo-wrap">
            <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/logo/seospecialistusa-logo.jpg" alt="SEO Specialist USA Logo" loading="lazy" decoding="async">
        </div>
        <h3 class="sp-name">SEO Specialist USA</h3>
        <p class="sp-desc">
            A leading SEO and digital growth partner dedicated to helping businesses dominate search results. Our expertise spans Technical SEO, Local SEO, Content Strategy, Link Building, and Conversion Optimization, empowering brands to increase visibility, attract qualified leads, and achieve long-term online success.
        </p>
    </div>
    <div class="sp-card">
        <div class="sp-logo-wrap">
            <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/our-strategic-partners/header-logo-coalition-technologies.png" alt="Coalition Technologies Logo" loading="lazy" decoding="async">
        </div>
        <h3 class="sp-name">Coalition Technologies</h3>
        <p class="sp-desc">A world-class SEO, PPC, and web design powerhouse. Through this collaboration we tap into advanced data-driven strategies and enterprise-grade resources that elevate campaign performance and deliver measurable growth at scale.</p>
    </div>
                <div class="sp-card">
        <div class="sp-logo-wrap">
            <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/our-strategic-partners/Pakistan-logo.webp" alt="SEO Specialist Pakistan Logo" loading="lazy" decoding="async">
        </div>
        <h3 class="sp-name">SEO Specialist Pakistan</h3>
        <p class="sp-desc">A full-service power-house supporting regional and international clients. This collaboration scales our operational efficiency while maintaining the highest quality standards for strategy and content optimization.</p>
    </div>
    <div class="sp-card">
        <div class="sp-logo-wrap">
            <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/our-strategic-partners/Logo-onlinewebsiteonline.png" alt="Online Website Tools Logo" loading="lazy" decoding="async">
        </div>
        <h3 class="sp-name">Online Website Tools</h3>
        <p class="sp-desc">Driving productivity through built-for-purpose digital solutions. Our alliance provides access to specialized tools that streamline routine tasks and optimize workflows for both internal teams and our clients.</p>
    </div>
    <!--<div class="sp-card">-->
    <!--    <div class="sp-logo-wrap">-->
    <!--        <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/our-strategic-partners/seoservicecanada.jpeg" alt="SEO Service Canada Logo" loading="lazy" decoding="async">-->
    <!--    </div>-->
    <!--    <h3 class="sp-name">SEO Service Canada</h3>-->
    <!--    <p class="sp-desc">Our trusted Canadian partner extending high-performance search expertise across North American markets. This alliance strengthens our regional reach with localized strategy, technical precision, and proven ranking results for Canadian businesses.</p>-->
    <!--</div>-->
    <div class="sp-card">
        <div class="sp-logo-wrap">
            <img src="https://www.seospecialistusa.com/wp-content/themes/seospecialistusa/assets/images/our-strategic-partners/header-logo-coalition-technologies.png" alt="Coalition Technologies Logo" loading="lazy" decoding="async">
        </div>
        <h3 class="sp-name">Coalition Technologies</h3>
        <p class="sp-desc">A world-class SEO, PPC, and web design powerhouse. Through this collaboration we tap into advanced data-driven strategies and enterprise-grade resources that elevate campaign performance and deliver measurable growth at scale.</p>
    </div>
        </div>
        <div class="sp-fade sp-fade-left"></div>
        <div class="sp-fade sp-fade-right"></div>
    </div>
</section>

<footer id="site-footer" class="ssc-footer" role="contentinfo">

    <!-- Footer Main -->
    <div class="ssc-footer__main">
        <div class="container">
            <div class="row g-5">

                <!-- Company Info -->
                <div class="col-lg-4 col-md-6">
                    <div class="ssc-footer__brand">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="ssc-footer__logo d-flex align-items-center mb-4">
                            <div class="ssc-footer__logo-img-wrap">
                                <img src="<?php echo SSC_THEME_URI; ?>/assets/images/logo/logo.jpeg" alt="SEO Service Canada Logo" class="img-fluid" style="height: 60px; object-fit: contain;">
                            </div>
                        </a>
                        <p class="ssc-footer__description">
                            Empowering Canadian businesses with data-driven SEO strategies and cutting-edge web development. We don't just drive traffic; we drive growth.
                        </p>
                        <div class="ssc-footer__social">
                            <a href="#" class="ssc-social-link" aria-label="Facebook">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </a>
                            <a href="#" class="ssc-social-link" aria-label="LinkedIn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                            <a href="#" class="ssc-social-link" aria-label="Twitter">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Footer Column 2 — Services -->
                <div class="col-lg-2 col-md-6">
                    <h4 class="ssc-footer__title"><?php esc_html_e('Services', 'seoservicecanada'); ?></h4>
                    <ul class="ssc-footer__links">
                        <li><a href="#services"><?php esc_html_e('SEO Audit', 'seoservicecanada'); ?></a></li>
                        <li><a href="#services"><?php esc_html_e('Keyword Research', 'seoservicecanada'); ?></a></li>
                        <li><a href="#services"><?php esc_html_e('On-Page SEO', 'seoservicecanada'); ?></a></li>
                        <li><a href="#services"><?php esc_html_e('Content Marketing', 'seoservicecanada'); ?></a></li>
                        <li><a href="#services"><?php esc_html_e('Local SEO', 'seoservicecanada'); ?></a></li>
                    </ul>
                </div>

                <!-- Footer Column 3 — Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h4 class="ssc-footer__title"><?php esc_html_e('Quick Links', 'seoservicecanada'); ?></h4>
                    <ul class="ssc-footer__links">
                        <li><a href="#about"><?php esc_html_e('About Us', 'seoservicecanada'); ?></a></li>
                        <li><a href="#benefits"><?php esc_html_e('Why Choose Us', 'seoservicecanada'); ?></a></li>
                        <li><a href="#process"><?php esc_html_e('Our Process', 'seoservicecanada'); ?></a></li>
                        <li><a href="#faq"><?php esc_html_e('FAQs', 'seoservicecanada'); ?></a></li>
                        <li><a href="#contact"><?php esc_html_e('Get a Quote', 'seoservicecanada'); ?></a></li>
                    </ul>
                </div>

                <!-- Footer Column 4 — Contact -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="ssc-footer__title"><?php esc_html_e('Contact Us', 'seoservicecanada'); ?></h4>
                    <ul class="ssc-footer__links ssc-footer__contact-info">
                        <li class="d-flex gap-3 mb-3">
                            <span class="text-secondary mt-1">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </span>
                            <span>2380 Kelly Circle SW Edmonton, Alberta <br>T6W4G3 Canada</span>
                        </li>
                        <li class="d-flex gap-3 mb-3">
                            <span class="text-secondary mt-1">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </span>
                            <a href="mailto:<?php echo esc_attr(SSC_EMAIL); ?>"><?php echo esc_html(SSC_EMAIL); ?></a>
                        </li>
                        <li class="d-flex gap-3">
                            <span class="text-secondary mt-1">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </span>
                            <a href="tel:<?php echo esc_attr(SSC_PHONE_RAW); ?>"><?php echo esc_html(SSC_PHONE); ?></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="ssc-footer__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="ssc-footer__copyright">
                        &copy; <?php echo esc_html(date('Y')); ?> <span class="text-white fw-bold"><?php echo esc_html(get_bloginfo('name')); ?></span>.
                        <?php esc_html_e('All rights reserved.', 'seoservicecanada'); ?>
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="ssc-footer__credit">
                        <?php esc_html_e('Designed for SEO dominance across Canada', 'seoservicecanada'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>