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
                            <span>123 SEO Street, Toronto, ON, <br>Canada</span>
                        </li>
                        <li class="d-flex gap-3 mb-3">
                            <span class="text-secondary mt-1">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </span>
                            <a href="mailto:info@seoservicecanada.com">info@seoservicecanada.com</a>
                        </li>
                        <li class="d-flex gap-3">
                            <span class="text-secondary mt-1">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </span>
                            <a href="tel:+15550000000">+1 (555) 000-0000</a>
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