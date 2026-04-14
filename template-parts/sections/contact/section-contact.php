<?php

/**
 * Section: Contact Page — Hero + Form + Info
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Contact Hero -->
<section class="ssc-contact-hero position-relative overflow-hidden">
    <div class="ssc-contact-hero__gradient"></div>
    <div class="ssc-contact-hero__shapes">
        <div class="ssc-contact-shape ssc-contact-shape--1"></div>
        <div class="ssc-contact-shape ssc-contact-shape--2"></div>
        <div class="ssc-contact-shape ssc-contact-shape--3"></div>
    </div>
    <div class="container position-relative z-index-2">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="ssc-badge px-4 py-2 mb-4 d-inline-block rounded-pill" style="color: var(--ssc-secondary); background: var(--ssc-secondary-subtle); border: 1px solid rgba(191, 32, 33, 0.1); font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; font-size: 0.75rem;">
                    Get In Touch
                </span>
                <h1 class="ssc-contact-hero__title display-4 fw-bold mb-4">
                    Let's <span class="ssc-text-gradient">Grow Your Business</span> Together
                </h1>
                <p class="ssc-contact-hero__subtitle lead mx-auto" style="max-width: 600px;">
                    Have a question or ready to start your SEO journey? Reach out and our team will get back to you within 24 hours.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Main Section -->
<section class="ssc-contact-main position-relative">
    <div class="container">
        <div class="row g-5">

            <!-- Contact Form Column -->
            <div class="col-lg-7">
                <div class="ssc-contact-form-card">
                    <!-- Form Progress Indicator -->
                    <div class="ssc-contact-form-progress">
                        <div class="ssc-contact-form-progress__bar" id="contactFormProgress"></div>
                    </div>

                    <div class="ssc-contact-form-card__header">
                        <h2 class="h3 fw-bold mb-2">Send Us a Message</h2>
                        <p class="text-muted mb-0">Fill out the form below and we'll respond promptly.</p>
                    </div>

                    <form id="sscContactForm" class="ssc-contact-form" method="POST" action="#">
                        <?php wp_nonce_field('ssc_contact_form', 'ssc_contact_nonce'); ?>

                        <div class="row g-4">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="ssc-form-field">
                                    <label for="ssc_name" class="ssc-form-field__label">
                                        Full Name <span class="text-danger">*</span>
                                    </label>
                                    <div class="ssc-form-field__input-wrap">
                                        <span class="ssc-form-field__icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                        <input type="text" id="ssc_name" name="ssc_name" class="ssc-form-field__input" placeholder="John Doe" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="ssc-form-field">
                                    <label for="ssc_email" class="ssc-form-field__label">
                                        Email Address <span class="text-danger">*</span>
                                    </label>
                                    <div class="ssc-form-field__input-wrap">
                                        <span class="ssc-form-field__icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        </span>
                                        <input type="email" id="ssc_email" name="ssc_email" class="ssc-form-field__input" placeholder="you@example.com" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <div class="ssc-form-field">
                                    <label for="ssc_phone" class="ssc-form-field__label">
                                        Phone Number
                                    </label>
                                    <div class="ssc-form-field__input-wrap">
                                        <span class="ssc-form-field__icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </span>
                                        <input type="tel" id="ssc_phone" name="ssc_phone" class="ssc-form-field__input" placeholder="+1 (000) 000-0000">
                                    </div>
                                </div>
                            </div>

                            <!-- Website URL -->
                            <div class="col-md-6">
                                <div class="ssc-form-field">
                                    <label for="ssc_website" class="ssc-form-field__label">
                                        Website URL
                                    </label>
                                    <div class="ssc-form-field__input-wrap">
                                        <span class="ssc-form-field__icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        </span>
                                        <input type="url" id="ssc_website" name="ssc_website" class="ssc-form-field__input" placeholder="https://yourwebsite.com">
                                    </div>
                                </div>
                            </div>

                            <!-- Service Interest -->
                            <div class="col-12">
                                <div class="ssc-form-field">
                                    <label for="ssc_service" class="ssc-form-field__label">
                                        Service You're Interested In
                                    </label>
                                    <div class="ssc-form-field__input-wrap">
                                        <span class="ssc-form-field__icon">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </span>
                                        <select id="ssc_service" name="ssc_service" class="ssc-form-field__input ssc-form-field__select">
                                            <option value="" selected disabled>Select a service...</option>
                                            <option value="seo-audit">SEO Audit & Strategy</option>
                                            <option value="keyword-research">Keyword Research</option>
                                            <option value="on-page-seo">On-Page SEO</option>
                                            <option value="technical-seo">Technical SEO</option>
                                            <option value="content-writing">SEO Content Writing</option>
                                            <option value="link-building">Link Building</option>
                                            <option value="local-seo">Local SEO</option>
                                            <option value="off-page-seo">Off-Page SEO</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="ssc-form-field">
                                    <label for="ssc_message" class="ssc-form-field__label">
                                        Your Message <span class="text-danger">*</span>
                                    </label>
                                    <div class="ssc-form-field__input-wrap ssc-form-field__input-wrap--textarea">
                                        <span class="ssc-form-field__icon ssc-form-field__icon--textarea">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                        </span>
                                        <textarea id="ssc_message" name="ssc_message" class="ssc-form-field__input ssc-form-field__textarea" rows="5" placeholder="Tell us about your project, goals, or any questions..." required></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <button type="submit" class="ssc-contact-submit-btn w-100">
                                    <span class="ssc-contact-submit-btn__text">Send Message</span>
                                    <span class="ssc-contact-submit-btn__icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                    </span>
                                </button>
                                <p class="text-center mt-3 mb-0 small text-muted">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-1"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    Your information is secure and will never be shared.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info Column -->
            <div class="col-lg-5">
                <!-- Contact Info Card -->
                <div class="ssc-contact-info-card mb-4">
                    <h3 class="h4 fw-bold mb-4">Contact Details</h3>

                    <div class="ssc-contact-info-item">
                        <div class="ssc-contact-info-item__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="ssc-contact-info-item__content">
                            <span class="ssc-contact-info-item__label">Phone</span>
                            <a href="tel:<?php echo esc_attr(SSC_PHONE_RAW); ?>" class="ssc-contact-info-item__value"><?php echo esc_html(SSC_PHONE); ?></a>
                            <span class="ssc-contact-info-item__note">Mon - Fri, 9AM - 5PM EST</span>
                        </div>
                    </div>

                    <div class="ssc-contact-info-item">
                        <div class="ssc-contact-info-item__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="ssc-contact-info-item__content">
                            <span class="ssc-contact-info-item__label">Email</span>
                            <a href="mailto:<?php echo esc_attr(SSC_EMAIL); ?>" class="ssc-contact-info-item__value"><?php echo esc_html(SSC_EMAIL); ?></a>
                            <span class="ssc-contact-info-item__note">We respond within 24 hours</span>
                        </div>
                    </div>

                    <div class="ssc-contact-info-item">
                        <div class="ssc-contact-info-item__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="ssc-contact-info-item__content">
                            <span class="ssc-contact-info-item__label">Office</span>
                            <span class="ssc-contact-info-item__value">123 SEO Street, Toronto, ON, Canada</span>
                            <!-- <span class="ssc-contact-info-item__note">Toronto, ON M5A 1B1, Canada</span> -->
                        </div>
                    </div>

                    <div class="ssc-contact-info-item ssc-contact-info-item--last">
                        <div class="ssc-contact-info-item__icon ssc-contact-info-item__icon--whatsapp">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 1 1-7.6-11.4 8.28 8.28 0 0 1 3.3.7l4.3-1.2-1.2 4.3a8.1 8.1 0 0 1 2.1 3.8z"></path></svg>
                        </div>
                        <div class="ssc-contact-info-item__content">
                            <span class="ssc-contact-info-item__label">WhatsApp</span>
                            <a href="https://wa.me/16469165108" class="ssc-contact-info-item__value" target="_blank" rel="noopener noreferrer">Chat with us instantly</a>
                            <span class="ssc-contact-info-item__note">Quick responses available</span>
                        </div>
                    </div>
                </div>

                <!-- Map Card -->
                <div class="ssc-contact-map-card">
                    <div class="ssc-contact-map-card__header">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span class="fw-bold">Our Location</span>
                    </div>
                    <div class="ssc-contact-map-card__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.7262402120017!2d-79.3871279845012!3d43.65322677912389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb7c0e8a719f%3A0x6a0c5c7d2e4b3c7!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sin!4v1678888888888!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" title="SEO Service Canada Office Location"></iframe>
                    </div>
                </div>

                <!-- Quick CTA -->
                <div class="ssc-contact-quick-cta">
                    <div class="ssc-contact-quick-cta__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <div>
                        <h4 class="h6 fw-bold mb-1 text-white">Want a Free SEO Audit?</h4>
                        <p class="small mb-3 opacity-75">Get a detailed report of your website's SEO health.</p>
                        <a href="<?php echo esc_url(home_url('/#audit')); ?>" class="ssc-contact-quick-cta__btn">
                            Request Free Audit
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
