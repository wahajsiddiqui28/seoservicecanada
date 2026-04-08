/**
 * SEO Service Canada — Theme JavaScript
 *
 * Lightweight, vanilla JS only. No jQuery dependency.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

(function () {
    'use strict';

    /**
     * Sticky header on scroll.
     */
    function initStickyHeader() {
        const header = document.getElementById('site-header');
        if (!header) return;

        let lastScroll = 0;
        const scrollThreshold = 80;

        window.addEventListener('scroll', function () {
            const currentScroll = window.pageYOffset;

            if (currentScroll > scrollThreshold) {
                header.classList.add('ssc-header--scrolled');
            } else {
                header.classList.remove('ssc-header--scrolled');
            }

            lastScroll = currentScroll;
        }, { passive: true });
    }

    /**
     * Smooth scroll for anchor links.
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (!target) return;

                e.preventDefault();
                const headerHeight = document.getElementById('site-header')?.offsetHeight || 0;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth',
                });
            });
        });
    }

    /**
     * Animate elements on scroll (intersection observer).
     */
    function initScrollAnimations() {
        if (!('IntersectionObserver' in window)) return;

        const elements = document.querySelectorAll('.ssc-service-card, .ssc-benefit-card, .ssc-process-step, .ssc-testimonial-card, .ssc-case-card, .ssc-location-card');

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ssc-animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px',
        });

        elements.forEach(function (el) {
            observer.observe(el);
        });
    }

    /**
     * Back to top button.
     */
    function initBackToTop() {
        const btn = document.createElement('button');
        btn.className = 'ssc-back-to-top';
        btn.setAttribute('aria-label', 'Back to top');
        btn.innerHTML = '↑';
        document.body.appendChild(btn);

        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 400) {
                btn.classList.add('ssc-back-to-top--visible');
            } else {
                btn.classList.remove('ssc-back-to-top--visible');
            }
        }, { passive: true });

        btn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /**
     * Contact form progress bar — fills as user completes fields.
     */
    function initContactFormProgress() {
        var form = document.getElementById('sscContactForm');
        var bar = document.getElementById('contactFormProgress');
        if (!form || !bar) return;

        var fields = form.querySelectorAll('input[required], textarea[required], select[required]');
        var allFields = form.querySelectorAll('input, textarea, select');

        function updateProgress() {
            var filled = 0;
            allFields.forEach(function (field) {
                if (field.value && field.value.trim() !== '' && !field.disabled) {
                    filled++;
                }
            });
            var percent = Math.round((filled / allFields.length) * 100);
            bar.style.width = percent + '%';
        }

        allFields.forEach(function (field) {
            field.addEventListener('input', updateProgress);
            field.addEventListener('change', updateProgress);
        });
    }

    /**
     * Initialize everything on DOM ready.
     */
    document.addEventListener('DOMContentLoaded', function () {
        initStickyHeader();
        initSmoothScroll();
        initScrollAnimations();
        initBackToTop();
        initContactFormProgress();
    });

})();
