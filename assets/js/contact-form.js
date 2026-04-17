/**
 * SEO Service Canada — Contact Form AJAX Handler
 *
 * Handles contact page form submission via AJAX with
 * loading state, progress bar, success/error messages.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('sscContactForm');
        if (!form) return;

        var formCard = form.closest('.ssc-contact-form-card');
        var progressBar = document.getElementById('contactFormProgress');
        var allFields = form.querySelectorAll('input, textarea, select');

        // Update progress bar as user fills fields
        function updateProgress() {
            if (!progressBar) return;
            var filled = 0;
            var total = 0;
            allFields.forEach(function (field) {
                if (field.type === 'hidden') return;
                total++;
                if (field.value && field.value.trim() !== '' && field.value !== field.querySelector && !field.disabled) {
                    // For select, check if not the default disabled option
                    if (field.tagName === 'SELECT') {
                        if (field.selectedIndex > 0) filled++;
                    } else {
                        filled++;
                    }
                }
            });
            var percent = total > 0 ? Math.round((filled / total) * 100) : 0;
            progressBar.style.width = percent + '%';
        }

        allFields.forEach(function (field) {
            field.addEventListener('input', updateProgress);
            field.addEventListener('change', updateProgress);
        });

        // Handle form submission
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            var submitBtn = form.querySelector('button[type="submit"]');
            var btnTextEl = submitBtn.querySelector('.ssc-contact-submit-btn__text');
            var btnIconEl = submitBtn.querySelector('.ssc-contact-submit-btn__icon');
            var originalText = btnTextEl ? btnTextEl.textContent : 'Send Message';

            // Disable button + loading state
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';
            if (btnTextEl) btnTextEl.textContent = 'Sending...';
            if (btnIconEl) btnIconEl.innerHTML = '<span class="ssc-spinner"></span>';

            // Remove any existing messages
            var existingMsg = formCard ? formCard.querySelector('.ssc-form-message') : null;
            if (existingMsg) existingMsg.remove();

            // Collect form data
            var formData = new FormData();
            formData.append('action', 'ssc_handle_contact_form');
            formData.append('nonce', sscContactForm.nonce);
            formData.append('ssc_name', form.querySelector('[name="ssc_name"]').value);
            formData.append('ssc_email', form.querySelector('[name="ssc_email"]').value);
            formData.append('ssc_phone', form.querySelector('[name="ssc_phone"]') ? form.querySelector('[name="ssc_phone"]').value : '');
            formData.append('ssc_website', form.querySelector('[name="ssc_website"]') ? form.querySelector('[name="ssc_website"]').value : '');
            formData.append('ssc_service', form.querySelector('[name="ssc_service"]') ? form.querySelector('[name="ssc_service"]').value : '');
            formData.append('ssc_message', form.querySelector('[name="ssc_message"]').value);
            formData.append('page_url', window.location.href);
            formData.append('page_title', document.title);

            // Send AJAX
            fetch(sscContactForm.ajaxurl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                var msgDiv = document.createElement('div');
                msgDiv.className = 'ssc-form-message';

                if (data.success) {
                    msgDiv.classList.add('ssc-form-message--success');
                    msgDiv.innerHTML = '<div class="ssc-form-message__icon">&#10003;</div>' +
                        '<h4>Message Sent Successfully!</h4>' +
                        '<p>' + data.data.message + '</p>';
                    form.reset();
                    if (progressBar) progressBar.style.width = '0%';
                } else {
                    msgDiv.classList.add('ssc-form-message--error');
                    msgDiv.innerHTML = '<div class="ssc-form-message__icon">&#10007;</div>' +
                        '<p>' + (data.data ? data.data.message : 'Something went wrong. Please try again.') + '</p>';
                }

                // Insert message before form
                form.parentNode.insertBefore(msgDiv, form);

                // Scroll to message
                msgDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });

                // Auto-hide success after 10 seconds
                if (data.success) {
                    setTimeout(function () {
                        msgDiv.style.opacity = '0';
                        msgDiv.style.transform = 'translateY(-10px)';
                        setTimeout(function () { msgDiv.remove(); }, 400);
                    }, 10000);
                }
            })
            .catch(function () {
                var msgDiv = document.createElement('div');
                msgDiv.className = 'ssc-form-message ssc-form-message--error';
                msgDiv.innerHTML = '<div class="ssc-form-message__icon">&#10007;</div>' +
                    '<p>Network error. Please check your connection and try again.</p>';
                form.parentNode.insertBefore(msgDiv, form);
            })
            .finally(function () {
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                if (btnTextEl) btnTextEl.textContent = originalText;
                if (btnIconEl) {
                    btnIconEl.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>';
                }
            });
        });
    });

})();
