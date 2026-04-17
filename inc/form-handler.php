<?php

/**
 * Form Handler - SMTP Configuration and AJAX Submission
 *
 * Handles the global audit form via AJAX, sends a premium
 * HTML email to the team with all lead details.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configure SMTP for seoservicecanada.com
 */
function ssc_configure_smtp($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'business97.web-hosting.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 465;
    $phpmailer->Username   = 'info@seoservicecanada.com';
    $phpmailer->Password   = 'SEOservicecanada@2025';
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->From       = 'info@seoservicecanada.com';
    $phpmailer->FromName   = 'SEO Service Canada - Leads';
}
add_action('phpmailer_init', 'ssc_configure_smtp');

/**
 * Enqueue audit form script and localize AJAX data.
 */
function ssc_enqueue_audit_form_script()
{
    wp_enqueue_script(
        'ssc-audit-form',
        SSC_THEME_URI . '/assets/js/audit-form.js',
        array(),
        SSC_THEME_VERSION,
        array('in_footer' => true, 'strategy' => 'defer')
    );

    wp_localize_script('ssc-audit-form', 'sscAuditForm', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('ssc_audit_form_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'ssc_enqueue_audit_form_script');

/**
 * AJAX Handler for Audit Form
 */
function ssc_handle_audit_form()
{
    // Security Check
    check_ajax_referer('ssc_audit_form_nonce', 'nonce');

    // Sanitize Form Data
    $name       = sanitize_text_field($_POST['audit_name']);
    $email      = sanitize_email($_POST['audit_email']);
    $website    = isset($_POST['audit_url']) ? esc_url_raw($_POST['audit_url']) : 'Not provided';
    $phone      = isset($_POST['audit_phone']) ? sanitize_text_field($_POST['audit_phone']) : 'Not provided';
    $page_url   = isset($_POST['page_url']) ? esc_url($_POST['page_url']) : 'Unknown';
    $page_title = isset($_POST['page_title']) ? sanitize_text_field($_POST['page_title']) : 'Unknown Page';

    // Validate required fields
    if (empty($name) || empty($email) || empty($website)) {
        wp_send_json_error(array('message' => 'Please fill all required fields.'));
    }

    // Email Recipients
    $to = array(
        'info@seospecialistusa.com',
        'takiseo.specialist@gmail.com',
        'maaz.ah2001@gmail.com',
        'hassanabidseo@gmail.com',
        'seospecialistinusa@gmail.com'
    );

    $subject = 'New SEO Audit Request: ' . $name . ' — ' . $page_title;

    // Prepare escaped values
    $logo_url       = SSC_THEME_URI . '/assets/images/logo/logo.jpeg';
    $current_year   = date('Y');
    $esc_logo       = esc_url($logo_url);
    $esc_name       = esc_html($name);
    $esc_email      = esc_html($email);
    $esc_phone      = esc_html($phone);
    $esc_website    = esc_html($website);
    $esc_page_title = esc_html($page_title);
    $esc_page_url   = esc_url($page_url);
    $submission_date = date('F j, Y \a\t g:i A');

    // Premium HTML Email Template — SEO Service Canada Brand
    $email_body = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

        body {
            font-family: 'Inter', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f0f2f8;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }
        .email-wrapper {
            width: 100%;
            background-color: #f0f2f8;
            padding: 40px 15px;
        }
        .email-container {
            max-width: 620px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 25px 80px rgba(48, 46, 157, 0.12);
        }

        /* Top gradient accent bar */
        .top-accent {
            height: 6px;
            background: linear-gradient(90deg, #302e9d 0%, #bf2021 50%, #302e9d 100%);
        }

        /* Header */
        .email-header {
            padding: 40px 40px 25px;
            text-align: center;
            background: linear-gradient(135deg, #302e9d 0%, #1e1c6e 100%);
            position: relative;
        }
        .email-header::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 40px;
            background: #ffffff;
            border-radius: 28px 28px 0 0;
        }
        .email-header img {
            max-width: 180px;
            height: auto;
            border-radius: 12px;
        }
        .header-tagline {
            color: rgba(255,255,255,0.7);
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 600;
            margin-top: 12px;
            display: block;
        }

        /* Hero Section */
        .hero-section {
            padding: 15px 40px 35px;
            text-align: center;
        }
        .hero-badge {
            display: inline-block;
            background: linear-gradient(135deg, rgba(191,32,33,0.08) 0%, rgba(48,46,157,0.08) 100%);
            color: #bf2021;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            margin-bottom: 18px;
            border: 1px solid rgba(191,32,33,0.12);
        }
        .main-title {
            color: #302e9d;
            font-size: 30px;
            font-weight: 900;
            margin: 0 0 8px 0;
            line-height: 1.15;
            letter-spacing: -0.5px;
        }
        .sub-title {
            color: #64748b;
            font-size: 14px;
            margin: 0 0 10px 0;
            font-weight: 400;
            line-height: 1.6;
        }
        .submission-time {
            color: #94a3b8;
            font-size: 11px;
            font-weight: 500;
        }

        /* Content */
        .content-body {
            padding: 0 40px 40px;
        }

        /* Lead Details Card */
        .leads-card {
            background: linear-gradient(135deg, #f8f9ff 0%, #fdf8f8 100%);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid #eef0f6;
        }
        .leads-card-title {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            color: #302e9d;
            font-weight: 800;
            margin: 0 0 20px 0;
            padding-bottom: 15px;
            border-bottom: 2px solid rgba(48,46,157,0.08);
        }
        .lead-row {
            padding: 14px 0;
            border-bottom: 1px solid rgba(48,46,157,0.06);
            display: flex;
        }
        .lead-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .lead-icon {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, #302e9d 0%, #4644c9 100%);
            border-radius: 12px;
            display: inline-block;
            text-align: center;
            line-height: 38px;
            margin-right: 15px;
            flex-shrink: 0;
            font-size: 16px;
        }
        .lead-details {
            flex: 1;
        }
        .lead-label {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: #94a3b8;
            font-weight: 700;
            margin-bottom: 4px;
            display: block;
        }
        .lead-value {
            font-size: 15px;
            color: #0f172a;
            font-weight: 700;
            display: block;
            word-break: break-word;
        }
        .lead-value a {
            color: #302e9d;
            text-decoration: none;
            font-weight: 700;
        }

        /* Page Info */
        .page-info {
            margin-top: 30px;
            text-align: center;
            padding: 18px;
            background: linear-gradient(135deg, #302e9d 0%, #1e1c6e 100%);
            border-radius: 14px;
            color: #ffffff;
            font-size: 12px;
        }
        .page-info strong {
            display: block;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            opacity: 0.6;
            margin-bottom: 8px;
        }
        .page-info a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            border-bottom: 1px solid rgba(255,255,255,0.3);
            padding-bottom: 2px;
        }

        /* Quick Actions */
        .quick-actions {
            margin-top: 25px;
            text-align: center;
        }
        .action-btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 5px;
        }
        .action-btn-primary {
            background: linear-gradient(135deg, #bf2021 0%, #d4393a 100%);
            color: #ffffff;
        }
        .action-btn-secondary {
            background: #f1f5f9;
            color: #302e9d;
        }

        /* Footer */
        .email-footer {
            background: linear-gradient(135deg, #0f172a 0%, #1a1440 100%);
            padding: 40px;
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
        }
        .footer-brand {
            color: #ffffff;
            font-size: 18px;
            font-weight: 900;
            margin-bottom: 4px;
            display: block;
            letter-spacing: -0.3px;
        }
        .footer-tagline {
            color: #bf2021;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            display: block;
            margin-bottom: 15px;
        }
        .footer-links {
            margin: 20px 0;
        }
        .footer-links a {
            color: #bf2021;
            text-decoration: none;
            font-weight: 700;
            margin: 0 12px;
            font-size: 12px;
        }
        .footer-contact {
            margin-top: 15px;
            color: #64748b;
            font-size: 11px;
            line-height: 1.8;
        }
        .footer-contact a {
            color: #94a3b8;
            text-decoration: none;
        }

        @media only screen and (max-width: 480px) {
            .email-container { border-radius: 0; }
            .content-body, .hero-section { padding-left: 25px; padding-right: 25px; }
            .main-title { font-size: 24px; }
            .lead-row { display: block; }
            .lead-icon { margin-bottom: 8px; }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">
            <!-- Top Gradient Accent -->
            <div class="top-accent"></div>

            <!-- Header with Logo -->
            <div class="email-header">
                <img src="{$esc_logo}" alt="SEO Service Canada">
                <span class="header-tagline">Canada's Premier SEO Agency</span>
            </div>

            <!-- Hero Section -->
            <div class="hero-section">
                <span class="hero-badge">New SEO Audit Request</span>
                <h1 class="main-title">New Lead Received!</h1>
                <p class="sub-title">A potential client wants to grow their business with SEO. Here are their details.</p>
                <span class="submission-time">Submitted on {$submission_date}</span>
            </div>

            <!-- Lead Details -->
            <div class="content-body">
                <div class="leads-card">
                    <p class="leads-card-title">Lead Information</p>

                    <div class="lead-row">
                        <span class="lead-icon">&#128100;</span>
                        <span class="lead-details">
                            <span class="lead-label">Full Name</span>
                            <span class="lead-value">{$esc_name}</span>
                        </span>
                    </div>

                    <div class="lead-row">
                        <span class="lead-icon">&#9993;</span>
                        <span class="lead-details">
                            <span class="lead-label">Email Address</span>
                            <span class="lead-value"><a href="mailto:{$esc_email}">{$esc_email}</a></span>
                        </span>
                    </div>

                    <div class="lead-row">
                        <span class="lead-icon">&#127760;</span>
                        <span class="lead-details">
                            <span class="lead-label">Website URL</span>
                            <span class="lead-value"><a href="{$esc_website}">{$esc_website}</a></span>
                        </span>
                    </div>

                    <div class="lead-row">
                        <span class="lead-icon">&#128222;</span>
                        <span class="lead-details">
                            <span class="lead-label">Phone Number</span>
                            <span class="lead-value">{$esc_phone}</span>
                        </span>
                    </div>

                    <div class="lead-row">
                        <span class="lead-icon">&#128196;</span>
                        <span class="lead-details">
                            <span class="lead-label">Submitted From Page</span>
                            <span class="lead-value">{$esc_page_title}</span>
                        </span>
                    </div>
                </div>

                <!-- Page Source Info -->
                <div class="page-info">
                    <strong>Source Page</strong>
                    <a href="{$esc_page_url}">{$esc_page_url}</a>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions">
                    <a href="mailto:{$esc_email}" class="action-btn action-btn-primary">Reply to Lead</a>
                    <a href="tel:{$esc_phone}" class="action-btn action-btn-secondary">Call Now</a>
                </div>
            </div>

            <!-- Footer -->
            <div class="email-footer">
                <span class="footer-brand">SEO Service Canada</span>
                <span class="footer-tagline">Data-Driven SEO for Canadian Businesses</span>
                <div class="footer-links">
                    <a href="https://seoservicecanada.com">Website</a>
                    <a href="https://seoservicecanada.com/contact">Contact</a>
                </div>
                <div class="footer-contact">
                    <a href="mailto:info@seoservicecanada.com">info@seoservicecanada.com</a> &bull; <a href="tel:+17802009020">+1 (780) 200-9020</a><br>
                    2380 Kelly Circle SW, Edmonton, Alberta, Canada
                </div>
                <p style="opacity:0.4; font-size:10px; margin-top:20px;">&copy; {$current_year} SEO Service Canada. Confidential Lead Information.</p>
            </div>
        </div>
    </div>
</body>
</html>
HTML;

    $headers = array('Content-Type: text/html; charset=UTF-8');

    // Error logging for debugging
    global $ssc_mail_errors;
    $ssc_mail_errors = array();

    add_action('wp_mail_failed', function ($error) {
        global $ssc_mail_errors;
        $ssc_mail_errors[] = $error->get_error_message();
    });

    // Send Email
    $sent = wp_mail($to, $subject, $email_body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! Your SEO audit request has been submitted. Our team will review your website and contact you within 24 hours.'));
    } else {
        $error_msg = !empty($ssc_mail_errors) ? implode(' | ', $ssc_mail_errors) : 'Unknown mail error.';
        wp_send_json_error(array('message' => 'Mail Error: ' . $error_msg));
    }
}
add_action('wp_ajax_ssc_handle_audit_form', 'ssc_handle_audit_form');
add_action('wp_ajax_nopriv_ssc_handle_audit_form', 'ssc_handle_audit_form');
