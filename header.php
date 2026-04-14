<?php

/**
 * Header Template
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="ssc-global-actions">
        <a href="#audit" class="ssc-btn-audit">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            Get SEO Audit
        </a>
        <a href="tel:<?php echo esc_attr(SSC_PHONE_RAW); ?>" class="ssc-btn-phone-global">
            <span class="icon-box">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </span>
            <?php echo esc_html(SSC_PHONE); ?>
        </a>
        <a href="https://wa.me/16469165108" class="ssc-btn-whatsapp-global">
            <span class="icon-box">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 1 1-7.6-11.4 8.28 8.28 0 0 1 3.3.7l4.3-1.2-1.2 4.3a8.1 8.1 0 0 1 2.1 3.8z"></path></svg>
            </span>
            Chat on WhatsApp
        </a>
    </div>

    <a class="skip-link screen-reader-text" href="#main-content">
        <?php esc_html_e('Skip to content', 'seoservicecanada'); ?>
    </a>

    <div class="ssc-top-bar d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="ssc-top-bar__left">
                    <span class="ssc-top-bar__promo">Limited Offer</span>
                    <span class="text-white-50">Get a Free 30-Minute SEO consultation today!</span>
                </div>
                <div class="ssc-top-bar__right d-flex gap-4">
                    <a href="mailto:<?php echo esc_attr(SSC_EMAIL); ?>">
                        <span class="ssc-top-bar__icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </span>
                        <?php echo esc_html(SSC_EMAIL); ?>
                    </a>
                    <a href="tel:<?php echo esc_attr(SSC_PHONE_RAW); ?>">
                        <span class="ssc-top-bar__icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </span>
                        <?php echo esc_html(SSC_PHONE); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header id="site-header" class="ssc-header sticky-top" role="banner">
        <nav class="navbar navbar-expand-lg ssc-navbar py-2" aria-label="<?php esc_attr_e('Main Navigation', 'seoservicecanada'); ?>">
            <div class="container">

                <!-- Site Logo -->
                <a class="navbar-brand ssc-logo py-0" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<div class="ssc-logo-img-wrapper">';
                        echo '<img src="' . SSC_THEME_URI . '/assets/images/logo/logo.jpeg" alt="SEO Service Canada Logo" class="img-fluid" style="height: 75px; width: auto; object-fit: contain;">';
                        echo '</div>';
                    }
                    ?>
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                    aria-controls="primaryNav" aria-expanded="false"
                    aria-label="<?php esc_attr_e('Toggle navigation', 'seoservicecanada'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="primaryNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav ms-auto align-items-lg-center gap-lg-2',
                        'fallback_cb'    => 'ssc_fallback_menu',
                        'depth'          => 2,
                        'walker'         => new SSC_Bootstrap_Nav_Walker(),
                    ));
                    ?>
                    <div class="ms-lg-5 mt-3 mt-lg-0">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-btn-cta-header text-decoration-none">
                            <?php esc_html_e('Get a Quote', 'seoservicecanada'); ?>
                        </a>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <main id="main-content" class="ssc-main" role="main">