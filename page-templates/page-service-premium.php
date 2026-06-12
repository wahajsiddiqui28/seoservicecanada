<?php
/**
 * Template Name: Service Page — Premium
 * Template Post Type: page
 *
 * Premium SEO service page. Auto-selects content based on the
 * WordPress page slug (e.g. 'ecommerce-seo-services').
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

// Load the service content data file (defensive).
$ssc_data_file = SSC_THEME_DIR . '/inc/service-pages-data.php';
if (file_exists($ssc_data_file)) {
    require_once $ssc_data_file;
}

// Determine which service from page slug.
$data = null;
if (function_exists('ssc_get_service_page_data')) {
    $page_slug = get_post_field('post_name', get_queried_object_id());
    $data = ssc_get_service_page_data($page_slug);
}

// Safety: if data still empty, show fallback and exit early.
if (!is_array($data)) {
    get_header();
    echo '<div class="container py-5"><h2>Service content not found.</h2><p>Available service slugs: <code>ecommerce-seo-services</code>, <code>local-seo-services</code>, <code>shopify-seo-services</code>, <code>seo-consulting-services</code>, <code>dental-seo-services</code>, <code>on-page-seo-services</code>.</p></div>';
    get_footer();
    return;
}

get_header();

$accent      = $data['accent'];
$accent_dark = $data['accent_dark'];
$svc_name    = $data['name'];

/* ── Service card icon SVGs (cycled) ───────────────────────────────────── */
$service_icons = array(
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="12" cy="12" r="4"></circle><line x1="3" y1="9" x2="21" y2="9"></line></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20V10"></path><path d="M18 20V4"></path><path d="M6 20v-4"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>',
);
?>

<style>
:root {
    --pp-accent: <?php echo esc_attr($accent); ?>;
    --pp-accent-dark: <?php echo esc_attr($accent_dark); ?>;
}
</style>

<!-- =============================================
     HERO SECTION (2-col: content + form)
============================================= -->
<section class="pp-hero pp-hero--split">
    <div class="pp-hero__bg-overlay"></div>
    <div class="pp-hero__bg-grid"></div>
    <div class="pp-hero__orb pp-hero__orb--accent"></div>
    <div class="pp-hero__orb pp-hero__orb--blue"></div>

    <div class="container position-relative z-2 py-5">
        <div class="row align-items-center g-5">

            <!-- LEFT: Content -->
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb pp-breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/seo-services/')); ?>">SEO Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($svc_name); ?></li>
                    </ol>
                </nav>

                <h1 class="pp-hero__title pp-hero__title--left">
                    <?php echo esc_html($data['hero_heading']); ?>
                </h1>

                <div class="pp-hero__intro pp-hero__intro--left">
                    <?php foreach ($data['hero_paragraphs'] as $i => $p) : ?>
                        <p<?php echo $i === count($data['hero_paragraphs']) - 1 ? ' class="pp-hero__intro-last"' : ''; ?>><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>

                <div class="pp-hero__cta-row pp-hero__cta-row--left">
                    <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        Get Your SEO Audit
                    </a>
                </div>
            </div>

            <!-- RIGHT: Audit Form -->
            <div class="col-lg-5">
                <div class="pp-hero__form-wrap">
                    <?php get_template_part('template-parts/global/audit-form'); ?>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- =============================================
     ABOUT / WHY SECTION
============================================= -->
<section class="pp-section pp-why">
    <div class="container">
        <div class="row align-items-start g-5">
            <div class="col-lg-5">
                <span class="pp-section__label">01</span>
                <h2 class="pp-section__title pp-section__title--dark">
                    <?php echo esc_html($data['about_heading']); ?>
                </h2>
                <div class="pp-why__accent-line"></div>
            </div>
            <div class="col-lg-7">
                <div class="pp-why__content">
                    <?php foreach ($data['about_paragraphs'] as $p) : ?>
                        <p class="pp-why__para"><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- =============================================
     SERVICES SECTION
============================================= -->
<section class="pp-section pp-services">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label pp-section__label--light">02</span>
            <h2 class="pp-section__title pp-section__title--light">
                <?php echo esc_html($data['services_heading']); ?>
            </h2>
            <?php if (!empty($data['services_intro'])) : ?>
                <p class="pp-section__lead pp-section__lead--light mx-auto">
                    <?php echo esc_html($data['services_intro']); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="row g-4">
            <?php foreach ($data['services'] as $i => $svc) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="pp-service-card">
                        <div class="pp-service-card__head">
                            <div class="pp-service-card__icon"><?php echo $service_icons[$i % count($service_icons)]; ?></div>
                            <span class="pp-service-card__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        </div>
                        <h3 class="pp-service-card__title"><?php echo esc_html($svc['title']); ?></h3>
                        <p class="pp-service-card__desc"><?php echo esc_html($svc['desc']); ?></p>
                        <div class="pp-service-card__glow"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- =============================================
     WHY CHOOSE US SECTION
============================================= -->
<section class="pp-section pp-choose">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">03</span>
            <h2 class="pp-section__title pp-section__title--dark">
                <?php echo esc_html($data['choose_heading']); ?>
            </h2>
            <?php if (!empty($data['choose_intro'])) : ?>
                <p class="pp-section__lead mx-auto">
                    <?php echo esc_html($data['choose_intro']); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($data['choose_items'] as $i => $item) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="pp-choose-card">
                        <div class="pp-choose-card__num-badge">
                            <?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?>
                        </div>
                        <h3 class="pp-choose-card__title"><?php echo esc_html($item['title']); ?></h3>
                        <p class="pp-choose-card__desc"><?php echo esc_html($item['desc']); ?></p>
                        <svg class="pp-choose-card__check" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- =============================================
     TEAM / SPECIALISTS SECTION
============================================= -->
<section class="pp-section pp-team">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">04</span>
            <h2 class="pp-section__title pp-section__title--dark">
                <?php echo esc_html($data['team_heading']); ?>
            </h2>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($data['team'] as $member) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="pp-team-card">
                        <div class="pp-team-card__img-wrap">
                            <img src="<?php echo SSC_THEME_URI; ?>/assets/images/our-team/<?php echo esc_attr($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>" loading="lazy">
                            <div class="pp-team-card__img-overlay"></div>
                        </div>
                        <div class="pp-team-card__body">
                            <h3 class="pp-team-card__name"><?php echo esc_html($member['name']); ?></h3>
                            <span class="pp-team-card__role"><?php echo esc_html($member['role']); ?></span>
                            <p class="pp-team-card__desc"><?php echo esc_html($member['desc']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-5">
            <a href="<?php echo esc_url(home_url('/our-team/')); ?>" id="cta-team-page-btn" class="pp-btn pp-btn--outline">
                Meet the Full Team
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>


<!-- =============================================
     PROCESS SECTION
============================================= -->
<section class="pp-section pp-process">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label pp-section__label--light">05</span>
            <h2 class="pp-section__title pp-section__title--light">
                <?php echo esc_html($data['process_heading']); ?>
            </h2>
        </div>

        <div class="pp-process__timeline">
            <?php foreach ($data['process_steps'] as $i => $step) : ?>
                <div class="pp-process__step">
                    <div class="pp-process__step-marker">
                        <span><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    </div>
                    <div class="pp-process__step-body">
                        <h3 class="pp-process__step-title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="pp-process__step-desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<?php if (!empty($data['list_heading']) && !empty($data['list_items'])) : ?>
<!-- =============================================
     LIST SECTION (platforms / industries / audiences)
============================================= -->
<section class="pp-section pp-listgrid">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">06</span>
            <h2 class="pp-section__title pp-section__title--dark">
                <?php echo esc_html($data['list_heading']); ?>
            </h2>
        </div>

        <div class="pp-listgrid__grid">
            <?php foreach ($data['list_items'] as $item) : ?>
                <div class="pp-industry-pill">
                    <span class="pp-industry-pill__icon">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span><?php echo esc_html($item); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- =============================================
     FAQ SECTION
============================================= -->
<section class="pp-section pp-faq">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <span class="pp-section__label">07</span>
                <h2 class="pp-section__title pp-section__title--dark">
                    <?php echo esc_html($data['faq_heading']); ?>
                </h2>
                <div class="pp-why__accent-line"></div>
            </div>
            <div class="col-lg-8">
                <div class="pp-faq__list">
                    <?php foreach ($data['faqs'] as $i => $faq) : ?>
                        <details class="pp-faq__item" <?php echo $i === 0 ? 'open' : ''; ?>>
                            <summary class="pp-faq__q">
                                <span><?php echo esc_html($faq['q']); ?></span>
                                <span class="pp-faq__icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </span>
                            </summary>
                            <div class="pp-faq__a">
                                <p><?php echo esc_html($faq['a']); ?></p>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- =============================================
     FINAL CTA SECTION
============================================= -->
<section class="pp-final-cta" id="contact">
    <div class="pp-final-cta__bg-grid"></div>
    <div class="pp-final-cta__orb pp-final-cta__orb--1"></div>
    <div class="pp-final-cta__orb pp-final-cta__orb--2"></div>

    <div class="container position-relative z-2">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="pp-final-cta__title">
                    <?php echo esc_html($data['cta_heading']); ?>
                </h2>
                <div class="pp-final-cta__paras">
                    <?php foreach ($data['cta_paragraphs'] as $i => $p) : ?>
                        <p<?php echo $i === count($data['cta_paragraphs']) - 1 ? ' class="pp-final-cta__last-line"' : ''; ?>><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>

                <div class="pp-final-cta__buttons">
                    <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary pp-btn--lg">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        Get Your SEO Audit
                    </a>
                    <a href="tel:+17802009020" id="cta-phone-btn" class="pp-btn pp-btn--white">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        Call Us: +1 (780) 200-9020
                    </a>
                    <a href="https://wa.me/16469165108" id="cta-whatsapp-btn" class="pp-btn pp-btn--whatsapp">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        Chat on WhatsApp
                    </a>
                    <a href="#contact" id="cta-contact-form-btn" class="pp-btn pp-btn--ghost-light">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        Send Us a Message
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
/* =============================================
   PREMIUM SERVICE PAGE STYLES
   (shared design language with premium province pages —
   accent color driven by --pp-accent set per-page above)
============================================= */

/* ---- Shared ---- */
.pp-section { padding: 100px 0; position: relative; }

.pp-section__label {
    display: inline-block;
    font-size: .72rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .22em;
    color: var(--pp-accent);
    background: color-mix(in srgb, var(--pp-accent) 10%, transparent);
    padding: 7px 18px;
    border-radius: 50px;
    margin-bottom: 24px;
    border: 1px solid color-mix(in srgb, var(--pp-accent) 22%, transparent);
}
.pp-section__label--light {
    color: #fff;
    background: rgba(255,255,255,.1);
    border-color: rgba(255,255,255,.2);
}
.pp-section__title {
    font-size: clamp(1.9rem, 3.5vw, 2.8rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.02em;
    margin-bottom: 22px;
}
.pp-section__title--dark { color: var(--ssc-dark); }
.pp-section__title--light { color: #fff; }
.pp-section__lead {
    font-size: 1.05rem;
    color: var(--ssc-gray-500);
    line-height: 1.7;
    max-width: 720px;
}
.pp-section__lead--light { color: rgba(255,255,255,.7); }

/* ---- Buttons ---- */
.pp-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 28px;
    border-radius: 50px;
    font-size: .9rem;
    font-weight: 800;
    text-decoration: none;
    transition: all .3s cubic-bezier(.2,.7,.3,1);
    border: 2px solid transparent;
    white-space: nowrap;
}
.pp-btn--lg { padding: 16px 32px; font-size: .95rem; }
.pp-btn--primary {
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff;
    box-shadow: 0 8px 24px color-mix(in srgb, var(--pp-accent) 35%, transparent);
}
.pp-btn--primary:hover {
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 14px 32px color-mix(in srgb, var(--pp-accent) 45%, transparent);
}
.pp-btn--white {
    background: #fff;
    color: var(--pp-accent-dark);
}
.pp-btn--white:hover { color: var(--pp-accent-dark); transform: translateY(-2px); box-shadow: 0 14px 32px rgba(0,0,0,.2); }
.pp-btn--whatsapp {
    background: #25D366;
    color: #fff;
}
.pp-btn--whatsapp:hover { background: #1ea957; color: #fff; transform: translateY(-2px); }
.pp-btn--ghost-light {
    background: rgba(255,255,255,.1);
    color: #fff;
    border-color: rgba(255,255,255,.25);
}
.pp-btn--ghost-light:hover { background: rgba(255,255,255,.2); color: #fff; }
.pp-btn--outline {
    background: transparent;
    color: var(--pp-accent);
    border-color: var(--pp-accent);
}
.pp-btn--outline:hover { background: var(--pp-accent); color: #fff; }

/* =============================================
   HERO
============================================= */
.pp-hero {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #0a0e2e 0%, #1a1138 60%, var(--pp-accent-dark) 130%);
    padding: 80px 0 100px;
    color: #fff;
}
.pp-hero--split { padding: 70px 0 90px; }
.pp-hero__bg-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(10,14,46,.85) 0%, rgba(26,17,56,.8) 50%, color-mix(in srgb, var(--pp-accent-dark) 60%, transparent) 100%);
    pointer-events: none;
}
.pp-hero__bg-grid {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
    background-size: 56px 56px;
    pointer-events: none;
}
.pp-hero__title--left { text-align: left; margin-left: 0; margin-right: 0; }
.pp-hero__intro--left { margin-left: 0; margin-right: 0; }
.pp-hero__intro--left p { text-align: left; }
.pp-hero__cta-row--left { justify-content: flex-start; margin-bottom: 0; }

.pp-hero__form-wrap {
    position: relative;
    z-index: 5;
}
.pp-hero__form-wrap .ssc-audit-form-card {
    border-radius: 20px !important;
    box-shadow: 0 30px 80px rgba(0,0,0,.4) !important;
    padding: 32px !important;
}
.pp-hero__form-wrap .ssc-audit-form-card h3 {
    font-size: 1.4rem !important;
    color: var(--ssc-dark) !important;
}

.pp-hero__orb { position: absolute; border-radius: 50%; filter: blur(110px); pointer-events: none; }
.pp-hero__orb--accent {
    width: 500px; height: 500px;
    background: radial-gradient(circle, var(--pp-accent), transparent);
    top: -150px; right: -100px; opacity: .4;
}
.pp-hero__orb--blue {
    width: 600px; height: 600px;
    background: radial-gradient(circle, #4f46e5, transparent);
    bottom: -200px; left: -150px; opacity: .3;
}

.pp-breadcrumb { margin: 0; padding: 0; }
.pp-breadcrumb .breadcrumb-item a { color: rgba(255,255,255,.6); text-decoration: none; font-size: .85rem; }
.pp-breadcrumb .breadcrumb-item a:hover { color: #fff; }
.pp-breadcrumb .breadcrumb-item.active { color: rgba(255,255,255,.5); font-size: .85rem; }
.pp-breadcrumb .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,.3); }

.pp-hero__title {
    font-size: clamp(1.8rem, 4vw, 3rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -0.025em;
    color: #fff;
    margin-bottom: 28px;
}
.pp-hero__intro p {
    color: rgba(255,255,255,.78);
    font-size: 1.02rem;
    line-height: 1.75;
    margin-bottom: 16px;
}
.pp-hero__intro-last {
    color: #fff !important;
    font-weight: 600;
    font-size: 1.08rem !important;
}
.pp-hero__cta-row {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
}

/* =============================================
   ABOUT / WHY
============================================= */
.pp-why { background: #fff; }
.pp-why__accent-line {
    width: 56px;
    height: 4px;
    background: linear-gradient(90deg, var(--pp-accent), var(--pp-accent-dark));
    border-radius: 4px;
    margin-bottom: 28px;
}
.pp-why__content { padding-top: 8px; }
.pp-why__para {
    font-size: 1.04rem;
    line-height: 1.85;
    color: var(--ssc-gray-700);
    margin-bottom: 22px;
}
.pp-why__para:first-letter { font-weight: 700; color: var(--ssc-dark); }

/* =============================================
   SERVICES
============================================= */
.pp-services {
    background: linear-gradient(135deg, #0a0e2e 0%, #1a1138 100%);
    color: #fff;
    position: relative;
}
.pp-services::before {
    content: '';
    position: absolute; inset: 0;
    background-image: radial-gradient(rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 36px 36px;
    pointer-events: none;
}
.pp-services .container { position: relative; z-index: 2; }

.pp-service-card {
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 20px;
    padding: 32px 28px;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: transform .4s cubic-bezier(.2,.7,.3,1), border-color .3s ease, background .3s ease;
}
.pp-service-card:hover {
    transform: translateY(-8px);
    border-color: color-mix(in srgb, var(--pp-accent) 60%, transparent);
    background: rgba(255,255,255,.07);
}
.pp-service-card__head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    margin-bottom: 22px;
}
.pp-service-card__icon {
    width: 60px; height: 60px;
    background: color-mix(in srgb, var(--pp-accent) 18%, transparent);
    border: 1px solid color-mix(in srgb, var(--pp-accent) 35%, transparent);
    border-radius: 16px;
    display: flex; align-items: center; justify-content: center;
    color: var(--pp-accent);
    flex-shrink: 0;
}
.pp-service-card__num {
    font-size: 2.6rem;
    font-weight: 900;
    color: rgba(255,255,255,.08);
    line-height: 1;
    font-variant-numeric: tabular-nums;
}
.pp-service-card__title {
    font-size: 1.2rem;
    font-weight: 800;
    color: #fff;
    margin-bottom: 14px;
    line-height: 1.3;
}
.pp-service-card__desc {
    font-size: .92rem;
    color: rgba(255,255,255,.65);
    line-height: 1.75;
    margin: 0;
}
.pp-service-card__glow {
    position: absolute;
    bottom: -50px; right: -50px;
    width: 140px; height: 140px;
    background: radial-gradient(circle, var(--pp-accent), transparent 70%);
    opacity: 0;
    transition: opacity .5s ease;
    pointer-events: none;
}
.pp-service-card:hover .pp-service-card__glow { opacity: .25; }

/* =============================================
   WHY CHOOSE US
============================================= */
.pp-choose { background: #f8fafc; }

.pp-choose-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 18px;
    padding: 34px 28px 28px;
    height: 100%;
    position: relative;
    transition: transform .35s ease, box-shadow .35s ease, border-color .3s ease;
}
.pp-choose-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(15, 23, 42, .08);
    border-color: color-mix(in srgb, var(--pp-accent) 30%, transparent);
}
.pp-choose-card__num-badge {
    position: absolute;
    top: -16px; left: 28px;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff;
    font-size: .8rem;
    font-weight: 900;
    padding: 6px 14px;
    border-radius: 50px;
    box-shadow: 0 8px 18px color-mix(in srgb, var(--pp-accent) 35%, transparent);
    letter-spacing: .08em;
}
.pp-choose-card__title {
    font-size: 1.15rem;
    font-weight: 800;
    color: var(--ssc-dark);
    margin-bottom: 12px;
    margin-top: 6px;
    padding-right: 32px;
}
.pp-choose-card__desc {
    font-size: .92rem;
    color: var(--ssc-gray-500);
    line-height: 1.75;
    margin: 0;
}
.pp-choose-card__check {
    position: absolute;
    top: 28px; right: 24px;
    color: color-mix(in srgb, var(--pp-accent) 30%, transparent);
    transition: color .3s ease;
}
.pp-choose-card:hover .pp-choose-card__check { color: var(--pp-accent); }

/* =============================================
   TEAM
============================================= */
.pp-team { background: #fff; }

.pp-team-card {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 22px;
    overflow: hidden;
    height: 100%;
    transition: transform .4s cubic-bezier(.2,.7,.3,1), box-shadow .4s ease;
}
.pp-team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(15, 23, 42, .12);
}
.pp-team-card__img-wrap {
    position: relative;
    aspect-ratio: 3 / 3;
    overflow: hidden;
    background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
}
.pp-team-card__img-wrap img {
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform .6s cubic-bezier(.2,.7,.3,1);
}
.pp-team-card:hover .pp-team-card__img-wrap img { transform: scale(1.06); }
.pp-team-card__img-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, transparent 50%, rgba(15,23,42,.45) 100%);
    pointer-events: none;
}
.pp-team-card__body { padding: 26px 26px 28px; }
.pp-team-card__name {
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--ssc-dark);
    margin: 0 0 4px;
}
.pp-team-card__role {
    display: inline-block;
    font-size: .75rem;
    font-weight: 700;
    color: var(--pp-accent);
    text-transform: uppercase;
    letter-spacing: .12em;
    margin-bottom: 14px;
}
.pp-team-card__desc {
    font-size: .9rem;
    color: var(--ssc-gray-500);
    line-height: 1.7;
    margin: 0;
}

/* =============================================
   PROCESS
============================================= */
.pp-process {
    background: linear-gradient(135deg, #0a0e2e 0%, #1a1138 100%);
    color: #fff;
    position: relative;
}
.pp-process::before {
    content: '';
    position: absolute; inset: 0;
    background-image: radial-gradient(rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 36px 36px;
    pointer-events: none;
}
.pp-process .container { position: relative; z-index: 2; }

.pp-process__timeline {
    max-width: 880px;
    margin: 0 auto;
    position: relative;
}
.pp-process__timeline::before {
    content: '';
    position: absolute;
    top: 0; bottom: 0;
    left: 35px;
    width: 2px;
    background: linear-gradient(180deg, var(--pp-accent), color-mix(in srgb, var(--pp-accent) 30%, transparent), transparent);
}
.pp-process__step {
    display: flex;
    gap: 28px;
    margin-bottom: 36px;
    align-items: flex-start;
    position: relative;
}
.pp-process__step:last-child { margin-bottom: 0; }
.pp-process__step-marker {
    width: 72px; height: 72px;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    border-radius: 18px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 12px 28px color-mix(in srgb, var(--pp-accent) 40%, transparent);
    position: relative;
    z-index: 2;
    border: 4px solid #0a0e2e;
}
.pp-process__step-marker span {
    font-size: 1.4rem;
    font-weight: 900;
    color: #fff;
    font-variant-numeric: tabular-nums;
}
.pp-process__step-body {
    flex: 1;
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 16px;
    padding: 22px 26px;
    transition: background .3s ease, border-color .3s ease;
}
.pp-process__step:hover .pp-process__step-body {
    background: rgba(255,255,255,.07);
    border-color: color-mix(in srgb, var(--pp-accent) 35%, transparent);
}
.pp-process__step-title {
    font-size: 1.15rem;
    font-weight: 800;
    color: #fff;
    margin-bottom: 8px;
}
.pp-process__step-desc {
    font-size: .94rem;
    color: rgba(255,255,255,.7);
    line-height: 1.75;
    margin: 0;
}

/* =============================================
   LIST GRID (platforms / industries / audiences)
============================================= */
.pp-listgrid { background: #fff; }
.pp-listgrid__grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    max-width: 880px;
    margin: 0 auto;
}
.pp-industry-pill {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 14px 18px;
    font-size: .92rem;
    font-weight: 600;
    color: var(--ssc-gray-700);
    transition: all .3s ease;
}
.pp-industry-pill:hover {
    background: color-mix(in srgb, var(--pp-accent) 8%, #fff);
    border-color: color-mix(in srgb, var(--pp-accent) 35%, transparent);
    transform: translateX(4px);
}
.pp-industry-pill__icon {
    width: 26px; height: 26px;
    background: color-mix(in srgb, var(--pp-accent) 15%, transparent);
    color: var(--pp-accent);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
}

/* =============================================
   FAQ
============================================= */
.pp-faq { background: #f8fafc; }
.pp-faq__list { display: flex; flex-direction: column; gap: 12px; }
.pp-faq__item {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 14px;
    overflow: hidden;
    transition: border-color .3s ease, background .3s ease;
}
.pp-faq__item[open] {
    background: #fff;
    border-color: color-mix(in srgb, var(--pp-accent) 40%, transparent);
    box-shadow: 0 8px 24px rgba(15,23,42,.05);
}
.pp-faq__q {
    cursor: pointer;
    list-style: none;
    padding: 22px 26px;
    font-size: 1rem;
    font-weight: 700;
    color: var(--ssc-dark);
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
}
.pp-faq__q::-webkit-details-marker { display: none; }
.pp-faq__icon {
    width: 32px; height: 32px;
    background: color-mix(in srgb, var(--pp-accent) 12%, transparent);
    color: var(--pp-accent);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    transition: transform .35s ease;
}
.pp-faq__item[open] .pp-faq__icon { transform: rotate(180deg); }
.pp-faq__a {
    padding: 0 26px 24px;
    border-top: 1px solid #f0f0f0;
    padding-top: 18px;
}
.pp-faq__a p {
    font-size: .94rem;
    color: var(--ssc-gray-600);
    line-height: 1.8;
    margin: 0;
}

/* =============================================
   FINAL CTA
============================================= */
.pp-final-cta {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, var(--pp-accent-dark) 0%, #0a0e2e 50%, var(--pp-accent) 130%);
    padding: 100px 0 110px;
    color: #fff;
}
.pp-final-cta__bg-grid {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 50px 50px;
    pointer-events: none;
}
.pp-final-cta__orb { position: absolute; border-radius: 50%; filter: blur(110px); pointer-events: none; }
.pp-final-cta__orb--1 {
    width: 500px; height: 500px;
    background: radial-gradient(circle, var(--pp-accent), transparent);
    top: -200px; left: -100px; opacity: .35;
}
.pp-final-cta__orb--2 {
    width: 500px; height: 500px;
    background: radial-gradient(circle, #4f46e5, transparent);
    bottom: -200px; right: -100px; opacity: .3;
}
.pp-final-cta__title {
    font-size: clamp(2rem, 4.5vw, 3.4rem);
    font-weight: 800;
    color: #fff;
    line-height: 1.15;
    letter-spacing: -0.025em;
    margin-bottom: 30px;
    max-width: 900px;
    margin-left: auto; margin-right: auto;
}
.pp-final-cta__paras {
    max-width: 780px;
    margin: 0 auto 44px;
}
.pp-final-cta__paras p {
    color: rgba(255,255,255,.78);
    font-size: 1.05rem;
    line-height: 1.75;
    margin-bottom: 16px;
}
.pp-final-cta__last-line {
    color: #fff !important;
    font-weight: 600 !important;
}
.pp-final-cta__buttons {
    display: flex;
    gap: 14px;
    justify-content: center;
    flex-wrap: wrap;
}

/* =============================================
   RESPONSIVE
============================================= */
@media (max-width: 992px) {
    .pp-section { padding: 70px 0; }
    .pp-listgrid__grid { grid-template-columns: 1fr; }
    .pp-hero__title--left { text-align: center; }
    .pp-hero__intro--left p { text-align: center; }
    .pp-hero__cta-row--left { justify-content: center; }
    .pp-hero__form-wrap { margin-top: 30px; }
}
@media (max-width: 768px) {
    .pp-hero { padding: 60px 0 80px; }
    .pp-process__timeline::before { left: 24px; }
    .pp-process__step-marker { width: 50px; height: 50px; border-radius: 14px; }
    .pp-process__step-marker span { font-size: 1rem; }
    .pp-process__step { gap: 16px; }
    .pp-final-cta { padding: 70px 0 80px; }
}
@media (max-width: 480px) {
    .pp-hero__cta-row .pp-btn,
    .pp-final-cta__buttons .pp-btn { width: 100%; justify-content: center; }
}
@media (prefers-reduced-motion: reduce) {
    .pp-service-card, .pp-choose-card, .pp-team-card,
    .pp-industry-pill, .pp-btn { transition: none; animation: none; }
}
</style>

<?php get_footer(); ?>
