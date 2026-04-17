/**
 * SEO Service Canada — Audit Form AJAX Handler
 *
 * Handles form submission via AJAX with loading state,
 * success animation, and error handling.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

(function () {
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {
        // Get all audit forms on the page (could be multiple via ssc_audit_form())
        var forms = document.querySelectorAll('.ssc-audit-form-card form');

        forms.forEach(function (form) {
            // Progress bar for this form
            var card = form.closest('.ssc-audit-form-card');
            var progressBar = card ? card.querySelector('.ssc-form-progress-bar') : null;
            var allFields = form.querySelectorAll('input');

            // Update progress bar as user fills fields
            function updateProgress() {
                if (!progressBar) return;
                var filled = 0;
                allFields.forEach(function (field) {
                    if (field.value && field.value.trim() !== '') {
                        filled++;
                    }
                });
                var percent = Math.round((filled / allFields.length) * 100);
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
                var originalBtnText = submitBtn.innerHTML;

                // Disable button and show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="ssc-spinner"></span> Sending...';
                submitBtn.style.opacity = '0.7';

                // Remove previous messages
                var existingMsg = card.querySelector('.ssc-form-message');
                if (existingMsg) existingMsg.remove();

                // Collect form data
                var formData = new FormData();
                formData.append('action', 'ssc_handle_audit_form');
                formData.append('nonce', sscAuditForm.nonce);
                formData.append('audit_name', form.querySelector('[name="name"]').value);
                formData.append('audit_email', form.querySelector('[name="email"]').value);
                formData.append('audit_url', form.querySelector('[name="url"]').value);
                formData.append('audit_phone', form.querySelector('[name="phone"]') ? form.querySelector('[name="phone"]').value : '');
                formData.append('page_url', window.location.href);
                formData.append('page_title', document.title);

                // Send AJAX request
                fetch(sscAuditForm.ajaxurl, {
                    method: 'POST',
                    body: formData,
                    credentials: 'same-origin'
                })
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    // Create message element
                    var msgDiv = document.createElement('div');
                    msgDiv.className = 'ssc-form-message';

                    if (data.success) {
                        // Success
                        msgDiv.classList.add('ssc-form-message--success');
                        msgDiv.innerHTML = '<div class="ssc-form-message__icon">&#10003;</div>' +
                            '<h4>Audit Request Submitted!</h4>' +
                            '<p>' + data.data.message + '</p>';
                        form.reset();
                        if (progressBar) progressBar.style.width = '0%';
                    } else {
                        // Error from server
                        msgDiv.classList.add('ssc-form-message--error');
                        msgDiv.innerHTML = '<div class="ssc-form-message__icon">&#10007;</div>' +
                            '<p>' + (data.data ? data.data.message : 'Something went wrong. Please try again.') + '</p>';
                    }

                    // Insert message before form
                    form.parentNode.insertBefore(msgDiv, form);

                    // Auto-hide success message after 8 seconds
                    if (data.success) {
                        setTimeout(function () {
                            msgDiv.style.opacity = '0';
                            msgDiv.style.transform = 'translateY(-10px)';
                            setTimeout(function () { msgDiv.remove(); }, 400);
                        }, 8000);
                    }
                })
                .catch(function (error) {
                    var msgDiv = document.createElement('div');
                    msgDiv.className = 'ssc-form-message ssc-form-message--error';
                    msgDiv.innerHTML = '<div class="ssc-form-message__icon">&#10007;</div>' +
                        '<p>Network error. Please check your connection and try again.</p>';
                    form.parentNode.insertBefore(msgDiv, form);
                })
                .finally(function () {
                    // Restore button
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.style.opacity = '1';
                });
            });
        });
    });

})();
