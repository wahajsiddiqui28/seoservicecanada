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

// Available services for the multi-select.
$ssc_audit_services = array(
    'Search Engine Optimization (SEO)',
    'Pay-per Click (PPC)',
    'Social Media Marketing',
    'Website Design & Development',
    'SEO Audit',
);
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

        <!-- 1. Name -->
        <div class="col-md-6">
            <div class="ssc-form-group-unique">
                <label for="audit_name" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Name</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </span>
                <input type="text" id="audit_name" name="name" class="form-control rounded-4" placeholder="Enter Your Name" required>
            </div>
        </div>

        <!-- 2. Phone -->
        <div class="col-md-6">
            <div class="ssc-form-group-unique">
                <label for="audit_phone" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Phone</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l2.19-2.19a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </span>
                <input type="tel" id="audit_phone" name="phone" class="form-control rounded-4" placeholder="Your Phone" required>
            </div>
        </div>

        <!-- 3. Email -->
        <div class="col-md-6">
            <div class="ssc-form-group-unique">
                <label for="audit_email" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Email</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                </span>
                <input type="email" id="audit_email" name="email" class="form-control rounded-4" placeholder="Email" required>
            </div>
        </div>

        <!-- 4. Website URL -->
        <div class="col-md-6">
            <div class="ssc-form-group-unique">
                <label for="audit_url" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1" style="font-size: 0.7rem;">Website URL</label>
                <span class="ssc-form-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                </span>
                <input type="url" id="audit_url" name="url" class="form-control rounded-4" placeholder="Enter Your Website URL" required>
            </div>
        </div>

        <!-- 5. Select a Service (Multi-Select with Checkboxes) -->
        <div class="col-12">
            <label for="audit_service_trigger" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1 mb-2" style="font-size: 0.7rem;">Select a Service</label>
            <div class="ssc-multiselect" data-multiselect>
                <button type="button" id="audit_service_trigger" class="ssc-multiselect__trigger" aria-haspopup="listbox" aria-expanded="false">
                    <span class="ssc-multiselect__trigger-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                    </span>
                    <span class="ssc-multiselect__trigger-text" data-placeholder="Select a Service">Select a Service</span>
                    <svg class="ssc-multiselect__chevron" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </button>

                <div class="ssc-multiselect__panel" role="listbox" aria-multiselectable="true">
                    <?php foreach ($ssc_audit_services as $i => $service) :
                        $sid = 'audit_service_' . $i;
                    ?>
                        <label class="ssc-multiselect__option" for="<?php echo esc_attr($sid); ?>">
                            <input type="checkbox" id="<?php echo esc_attr($sid); ?>" name="services[]" value="<?php echo esc_attr($service); ?>" class="ssc-multiselect__checkbox">
                            <span class="ssc-multiselect__checkbox-visual">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span class="ssc-multiselect__option-label"><?php echo esc_html($service); ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- 6. Message -->
        <div class="col-12">
            <label for="audit_message" class="form-label fw-bold text-dark small text-uppercase letter-spacing-1 mb-2" style="font-size: 0.7rem;">Message</label>
            <div class="ssc-textarea-wrap">
                <span class="ssc-textarea-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                </span>
                <textarea id="audit_message" name="message" class="form-control rounded-4 ssc-textarea-input" placeholder="Enter Your Message" rows="4"></textarea>
            </div>
        </div>

        <!-- Submit Button -->
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

<style>
/* =============================================
   MULTI-SELECT DROPDOWN (Services)
============================================= */
.ssc-multiselect {
    position: relative;
    width: 100%;
}
.ssc-multiselect__trigger {
    width: 100%;
    background: #fff;
    border: 1.5px solid #e5e7eb;
    border-radius: 14px;
    padding: 14px 44px 14px 46px;
    text-align: left;
    font-size: 0.95rem;
    color: #0f172a;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
    transition: border-color .25s ease, box-shadow .25s ease;
    min-height: 52px;
}
.ssc-multiselect__trigger:hover { border-color: #c7cbd6; }
.ssc-multiselect__trigger:focus,
.ssc-multiselect.is-open .ssc-multiselect__trigger {
    outline: none;
    border-color: var(--ssc-primary, #302e9d);
    box-shadow: 0 0 0 4px rgba(48,46,157,.08);
}
.ssc-multiselect__trigger-icon {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
    pointer-events: none;
    display: flex;
}
.ssc-multiselect__trigger-text {
    flex: 1;
    color: #0f172a;
    font-weight: 600;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.ssc-multiselect__trigger-text:empty,
.ssc-multiselect__trigger-text.is-placeholder {
    color: #94a3b8;
    font-weight: 400;
}
.ssc-multiselect__chevron {
    color: #94a3b8;
    transition: transform .3s ease;
    flex-shrink: 0;
}
.ssc-multiselect.is-open .ssc-multiselect__chevron { transform: rotate(180deg); }

/* Dropdown panel */
.ssc-multiselect__panel {
    position: absolute;
    top: calc(100% + 8px);
    left: 0; right: 0;
    background: #fff;
    border: 1.5px solid #e5e7eb;
    border-radius: 14px;
    box-shadow: 0 20px 40px rgba(15,23,42,.12);
    z-index: 50;
    max-height: 280px;
    overflow-y: auto;
    padding: 8px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-8px);
    transition: opacity .2s ease, transform .2s ease, visibility .2s;
}
.ssc-multiselect.is-open .ssc-multiselect__panel {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Option */
.ssc-multiselect__option {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 11px 14px;
    border-radius: 10px;
    cursor: pointer;
    transition: background .2s ease;
    margin: 0;
}
.ssc-multiselect__option:hover { background: #f8fafc; }
.ssc-multiselect__checkbox {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}
.ssc-multiselect__checkbox-visual {
    width: 20px; height: 20px;
    border: 2px solid #d1d5db;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    flex-shrink: 0;
    transition: all .2s ease;
}
.ssc-multiselect__checkbox-visual svg {
    opacity: 0;
    transition: opacity .2s ease;
}
.ssc-multiselect__checkbox:checked ~ .ssc-multiselect__checkbox-visual {
    background: var(--ssc-primary, #302e9d);
    border-color: var(--ssc-primary, #302e9d);
}
.ssc-multiselect__checkbox:checked ~ .ssc-multiselect__checkbox-visual svg { opacity: 1; }
.ssc-multiselect__option-label {
    font-size: 0.92rem;
    color: #334155;
    font-weight: 500;
}
.ssc-multiselect__option:has(.ssc-multiselect__checkbox:checked) {
    background: rgba(48,46,157,.05);
}
.ssc-multiselect__option:has(.ssc-multiselect__checkbox:checked) .ssc-multiselect__option-label {
    color: var(--ssc-primary, #302e9d);
    font-weight: 700;
}

/* Scrollbar */
.ssc-multiselect__panel::-webkit-scrollbar { width: 6px; }
.ssc-multiselect__panel::-webkit-scrollbar-track { background: transparent; }
.ssc-multiselect__panel::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 3px; }

/* =============================================
   TEXTAREA (Message)
============================================= */
.ssc-textarea-wrap {
    position: relative;
}
.ssc-textarea-icon {
    position: absolute;
    top: 16px;
    left: 16px;
    color: #94a3b8;
    pointer-events: none;
    display: flex;
    z-index: 1;
}
.ssc-textarea-input {
    padding: 14px 16px 14px 46px !important;
    border: 1.5px solid #e5e7eb !important;
    resize: vertical;
    min-height: 120px;
    font-size: 0.95rem;
    line-height: 1.6;
    transition: border-color .25s ease, box-shadow .25s ease;
}
.ssc-textarea-input:focus {
    outline: none;
    border-color: var(--ssc-primary, #302e9d) !important;
    box-shadow: 0 0 0 4px rgba(48,46,157,.08) !important;
}
</style>

<script>
(function() {
    'use strict';
    document.addEventListener('DOMContentLoaded', function() {
        var multiselects = document.querySelectorAll('[data-multiselect]');
        multiselects.forEach(function(ms) {
            var trigger = ms.querySelector('.ssc-multiselect__trigger');
            var triggerText = ms.querySelector('.ssc-multiselect__trigger-text');
            var panel = ms.querySelector('.ssc-multiselect__panel');
            var checkboxes = ms.querySelectorAll('.ssc-multiselect__checkbox');
            var placeholder = triggerText.getAttribute('data-placeholder') || 'Select';

            // Toggle dropdown
            trigger.addEventListener('click', function(e) {
                e.stopPropagation();
                var isOpen = ms.classList.toggle('is-open');
                trigger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });

            // Close on outside click
            document.addEventListener('click', function(e) {
                if (!ms.contains(e.target)) {
                    ms.classList.remove('is-open');
                    trigger.setAttribute('aria-expanded', 'false');
                }
            });

            // Close on Escape
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    ms.classList.remove('is-open');
                    trigger.setAttribute('aria-expanded', 'false');
                }
            });

            // Update trigger text on checkbox change
            function updateLabel() {
                var selected = [];
                checkboxes.forEach(function(cb) {
                    if (cb.checked) selected.push(cb.value);
                });
                if (selected.length === 0) {
                    triggerText.textContent = placeholder;
                    triggerText.classList.add('is-placeholder');
                } else if (selected.length === 1) {
                    triggerText.textContent = selected[0];
                    triggerText.classList.remove('is-placeholder');
                } else {
                    triggerText.textContent = selected.length + ' services selected';
                    triggerText.classList.remove('is-placeholder');
                }
            }

            checkboxes.forEach(function(cb) {
                cb.addEventListener('change', updateLabel);
            });
            updateLabel();
        });
    });
})();
</script>
