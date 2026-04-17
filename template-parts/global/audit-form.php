<?php

/**
 * Global Reusable Audit Form Card
 *
 * Usage: <?php ssc_audit_form(); ?>
 * Or:    <?php get_template_part('template-parts/global/audit-form'); ?>
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<div class="ssc-audit-form-card p-5 rounded-5 shadow-2xl position-relative bg-white">
    <!-- Unique Floating Badge -->
    <div class="ssc-floating-badge-form shadow-lg">
        <span class="ssc-dot"></span>
        AI Optimizer Active
    </div>

    <!-- Interactive Progress Bar -->
    <div class="ssc-form-progress-container">
        <div class="ssc-form-progress-bar"></div>
    </div>

    <div class="mb-5">
        <h3 class="h3 fw-bold mb-2 text-dark">Request Your Free SEO Audit</h3>
        <p class="text-muted small">Fill out the form below and our SEO specialists will review your website and provide a personalized SEO report.</p>
    </div>

    <form action="#" method="POST" class="ssc-audit-ajax-form row g-4">
        <div class="col-md-6">
            <div class="ssc-form-group-unique">
                <label for="audit_name" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Name</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </span>
                <input type="text" id="audit_name" name="name" class="form-control rounded-4" placeholder="Your Full Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ssc-form-group-unique">
                <label for="audit_email" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Email Address</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </span>
                <input type="email" id="audit_email" name="email" class="form-control rounded-4" placeholder="your@email.com" required>
            </div>
        </div>
        <div class="col-12">
            <div class="ssc-form-group-unique">
                <label for="audit_url" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Website URL</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </span>
                <input type="url" id="audit_url" name="url" class="form-control rounded-4" placeholder="example.com" required>
            </div>
        </div>
        <div class="col-12">
            <div class="ssc-form-group-unique">
                <label for="audit_phone" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Phone Number (Optional)</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l2.19-2.19a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </span>
                <input type="tel" id="audit_phone" name="phone" class="form-control rounded-4" placeholder="+1 (000) 000-0000">
            </div>
        </div>
        <div class="col-12 pt-2">
            <button type="submit" class="btn btn-primary w-100 py-3 rounded-4 shadow-lg border-0 fw-bold" style="font-size: 1rem; letter-spacing: 0.02em; background: var(--ssc-primary);">
                Get My Free SEO Audit →
            </button>
            <p class="text-center mt-4 mb-0 small text-muted opacity-75" style="font-size: 0.75rem;">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-1"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                High-priority review. Average response time: <span class="fw-bold">24 Hours</span>
            </p>
        </div>
    </form>
</div>
