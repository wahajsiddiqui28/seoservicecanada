<?php
/**
 * Template Name: Service Page — Premium
 * Template Post Type: page
 *
 * Premium SEO service page. Auto-selects content AND a unique layout
 * (a–f) based on the WordPress page slug.
 *
 *   a — Ecommerce  : dark split hero, dark 3-col service grid, vertical timeline
 *   b — Local      : light airy hero, zigzag service rows, horizontal process
 *   c — Shopify    : reversed split hero (form left), light 2-col cards, center zigzag timeline
 *   d — Consulting : editorial centered hero, magazine numbered services, form band
 *   e — Dental     : rounded floating hero card, soft pastel cards, dotted process
 *   f — On-Page    : full-width dark hero + overlapping form, accent-bar cards, compact steps
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
$L           = isset($data['layout']) ? $data['layout'] : 'a';

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

$audit_icon = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>';
$check_icon = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>';
?>

<style>
:root {
    --pp-accent: <?php echo esc_attr($accent); ?>;
    --pp-accent-dark: <?php echo esc_attr($accent_dark); ?>;
}
</style>

<div class="svc svc--<?php echo esc_attr($L); ?>">

<?php /* ====================================================================
     HERO — six structural variants
==================================================================== */ ?>

<?php if ($L === 'a') : ?>
<!-- HERO A: dark split, form right -->
<section class="pp-hero pp-hero--split">
    <div class="pp-hero__bg-overlay"></div>
    <div class="pp-hero__bg-grid"></div>
    <div class="pp-hero__orb pp-hero__orb--accent"></div>
    <div class="pp-hero__orb pp-hero__orb--blue"></div>
    <div class="container position-relative z-2 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb pp-breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/seo-services/')); ?>">SEO Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($svc_name); ?></li>
                    </ol>
                </nav>
                <h1 class="pp-hero__title pp-hero__title--left"><?php echo esc_html($data['hero_heading']); ?></h1>
                <div class="pp-hero__intro pp-hero__intro--left">
                    <?php foreach ($data['hero_paragraphs'] as $i => $p) : ?>
                        <p<?php echo $i === count($data['hero_paragraphs']) - 1 ? ' class="pp-hero__intro-last"' : ''; ?>><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="pp-hero__cta-row pp-hero__cta-row--left">
                    <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary"><?php echo $audit_icon; ?> Get Your SEO Audit</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="pp-hero__form-wrap"><?php get_template_part('template-parts/global/audit-form'); ?></div>
            </div>
        </div>
    </div>
</section>

<?php elseif ($L === 'b') : ?>
<!-- HERO B: light & airy, form right in bordered card -->
<section class="svc-hero-b">
    <div class="svc-hero-b__blob svc-hero-b__blob--1"></div>
    <div class="svc-hero-b__blob svc-hero-b__blob--2"></div>
    <div class="container position-relative z-2">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb svc-breadcrumb-dark mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/seo-services/')); ?>">SEO Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($svc_name); ?></li>
                    </ol>
                </nav>
                <h1 class="svc-hero-b__title"><?php echo esc_html($data['hero_heading']); ?></h1>
                <div class="svc-hero-b__rule"></div>
                <div class="svc-hero-b__intro">
                    <?php foreach ($data['hero_paragraphs'] as $i => $p) : ?>
                        <p<?php echo $i === count($data['hero_paragraphs']) - 1 ? ' class="svc-hero-b__intro-last"' : ''; ?>><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>
                <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary"><?php echo $audit_icon; ?> Get Your SEO Audit</a>
            </div>
            <div class="col-lg-5">
                <div class="svc-hero-b__form"><?php get_template_part('template-parts/global/audit-form'); ?></div>
            </div>
        </div>
    </div>
</section>

<?php elseif ($L === 'c') : ?>
<!-- HERO C: dark split reversed — form LEFT, content right, angled base -->
<section class="svc-hero-c">
    <div class="pp-hero__bg-grid"></div>
    <div class="svc-hero-c__glow"></div>
    <div class="container position-relative z-2 py-5">
        <div class="row align-items-center g-5 flex-lg-row-reverse">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb pp-breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/seo-services/')); ?>">SEO Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($svc_name); ?></li>
                    </ol>
                </nav>
                <h1 class="pp-hero__title pp-hero__title--left"><?php echo esc_html($data['hero_heading']); ?></h1>
                <div class="pp-hero__intro pp-hero__intro--left">
                    <?php foreach ($data['hero_paragraphs'] as $i => $p) : ?>
                        <p<?php echo $i === count($data['hero_paragraphs']) - 1 ? ' class="pp-hero__intro-last"' : ''; ?>><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>
                <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary"><?php echo $audit_icon; ?> Get Your SEO Audit</a>
            </div>
            <div class="col-lg-5">
                <div class="pp-hero__form-wrap svc-hero-c__form"><?php get_template_part('template-parts/global/audit-form'); ?></div>
            </div>
        </div>
    </div>
</section>

<?php elseif ($L === 'd') : ?>
<!-- HERO D: editorial centered, no form (form band appears later) -->
<section class="svc-hero-d">
    <div class="container">
        <nav aria-label="breadcrumb" class="mb-4 d-flex justify-content-center">
            <ol class="breadcrumb svc-breadcrumb-dark mb-0">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/seo-services/')); ?>">SEO Services</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($svc_name); ?></li>
            </ol>
        </nav>
        <h1 class="svc-hero-d__title"><?php echo esc_html($data['hero_heading']); ?></h1>
        <div class="svc-hero-d__rule"></div>
        <div class="svc-hero-d__intro">
            <?php foreach ($data['hero_paragraphs'] as $i => $p) : ?>
                <p<?php echo $i === count($data['hero_paragraphs']) - 1 ? ' class="svc-hero-d__intro-last"' : ''; ?>><?php echo esc_html($p); ?></p>
            <?php endforeach; ?>
        </div>
        <div class="text-center">
            <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary pp-btn--lg"><?php echo $audit_icon; ?> Get Your SEO Audit</a>
        </div>
    </div>
</section>

<?php elseif ($L === 'e') : ?>
<!-- HERO E: floating rounded gradient card -->
<section class="svc-hero-e">
    <div class="container">
        <div class="svc-hero-e__card">
            <div class="pp-hero__bg-grid"></div>
            <div class="svc-hero-e__orb"></div>
            <div class="row align-items-center g-5 position-relative z-2">
                <div class="col-lg-7">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb pp-breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/seo-services/')); ?>">SEO Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($svc_name); ?></li>
                        </ol>
                    </nav>
                    <h1 class="pp-hero__title pp-hero__title--left svc-hero-e__title"><?php echo esc_html($data['hero_heading']); ?></h1>
                    <div class="pp-hero__intro pp-hero__intro--left">
                        <?php foreach ($data['hero_paragraphs'] as $i => $p) : ?>
                            <p<?php echo $i === count($data['hero_paragraphs']) - 1 ? ' class="pp-hero__intro-last"' : ''; ?>><?php echo esc_html($p); ?></p>
                        <?php endforeach; ?>
                    </div>
                    <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--white"><?php echo $audit_icon; ?> Get Your SEO Audit</a>
                </div>
                <div class="col-lg-5">
                    <div class="pp-hero__form-wrap"><?php get_template_part('template-parts/global/audit-form'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php else : ?>
<!-- HERO F: full-width dark split — content left, form right -->
<section class="svc-hero-f">
    <div class="pp-hero__bg-grid"></div>
    <div class="svc-hero-f__topbar"></div>
    <div class="container position-relative z-2">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb pp-breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/seo-services/')); ?>">SEO Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html($svc_name); ?></li>
                    </ol>
                </nav>
                <h1 class="svc-hero-f__title"><?php echo esc_html($data['hero_heading']); ?></h1>
                <div class="svc-hero-f__intro">
                    <?php foreach ($data['hero_paragraphs'] as $i => $p) : ?>
                        <p<?php echo $i === count($data['hero_paragraphs']) - 1 ? ' class="pp-hero__intro-last"' : ''; ?>><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>
                <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary"><?php echo $audit_icon; ?> Get Your SEO Audit</a>
            </div>
            <div class="col-lg-5">
                <div class="pp-hero__form-wrap svc-hero-f__form"><?php get_template_part('template-parts/global/audit-form'); ?></div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php /* ====================================================================
     ABOUT / WHY SECTION
==================================================================== */ ?>
<?php if ($L === 'd') : ?>
<section class="pp-section svc-about-d">
    <div class="container">
        <div class="svc-about-d__inner">
            <span class="pp-section__label">01</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['about_heading']); ?></h2>
            <div class="svc-about-d__rule"></div>
            <?php foreach ($data['about_paragraphs'] as $p) : ?>
                <p class="svc-about-d__para"><?php echo esc_html($p); ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php else : ?>
<section class="pp-section pp-why">
    <div class="container">
        <div class="row align-items-start g-5<?php echo $L === 'c' ? ' flex-lg-row-reverse' : ''; ?>">
            <div class="col-lg-5">
                <span class="pp-section__label">01</span>
                <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['about_heading']); ?></h2>
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
<?php endif; ?>


<?php if ($L === 'd') : ?>
<!-- FORM BAND (layout D only) -->
<section class="svc-form-band" id="audit-band">
    <div class="pp-hero__bg-grid"></div>
    <div class="container position-relative z-2">
        <div class="svc-form-band__inner"><?php get_template_part('template-parts/global/audit-form'); ?></div>
    </div>
</section>
<?php endif; ?>


<?php /* ====================================================================
     SERVICES SECTION — six variants
==================================================================== */ ?>

<?php if ($L === 'a') : ?>
<!-- SERVICES A: dark 3-col grid -->
<section class="pp-section pp-services">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label pp-section__label--light">02</span>
            <h2 class="pp-section__title pp-section__title--light"><?php echo esc_html($data['services_heading']); ?></h2>
            <?php if (!empty($data['services_intro'])) : ?>
                <p class="pp-section__lead pp-section__lead--light mx-auto"><?php echo esc_html($data['services_intro']); ?></p>
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

<?php elseif ($L === 'b') : ?>
<!-- SERVICES B: zigzag alternating rows, light -->
<section class="pp-section svc-services-b">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">02</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['services_heading']); ?></h2>
            <?php if (!empty($data['services_intro'])) : ?>
                <p class="pp-section__lead mx-auto"><?php echo esc_html($data['services_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="svc-zigzag">
            <?php foreach ($data['services'] as $i => $svc) : ?>
                <div class="svc-zigrow<?php echo $i % 2 ? ' svc-zigrow--alt' : ''; ?>">
                    <div class="svc-zigrow__visual">
                        <div class="svc-zigrow__icon"><?php echo $service_icons[$i % count($service_icons)]; ?></div>
                        <span class="svc-zigrow__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    </div>
                    <div class="svc-zigrow__body">
                        <h3 class="svc-zigrow__title"><?php echo esc_html($svc['title']); ?></h3>
                        <p class="svc-zigrow__desc"><?php echo esc_html($svc['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'c') : ?>
<!-- SERVICES C: light 2-col bordered cards -->
<section class="pp-section svc-services-c">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">02</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['services_heading']); ?></h2>
            <?php if (!empty($data['services_intro'])) : ?>
                <p class="pp-section__lead mx-auto"><?php echo esc_html($data['services_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row g-4">
            <?php foreach ($data['services'] as $i => $svc) : ?>
                <div class="col-lg-6">
                    <div class="svc-card-c">
                        <div class="svc-card-c__head">
                            <div class="svc-card-c__icon"><?php echo $service_icons[$i % count($service_icons)]; ?></div>
                            <h3 class="svc-card-c__title"><?php echo esc_html($svc['title']); ?></h3>
                        </div>
                        <p class="svc-card-c__desc"><?php echo esc_html($svc['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'd') : ?>
<!-- SERVICES D: magazine numbered stack -->
<section class="pp-section svc-services-d">
    <div class="container">
        <div class="svc-services-d__head">
            <span class="pp-section__label">02</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['services_heading']); ?></h2>
            <?php if (!empty($data['services_intro'])) : ?>
                <p class="pp-section__lead"><?php echo esc_html($data['services_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="svc-mag">
            <?php foreach ($data['services'] as $i => $svc) : ?>
                <div class="svc-mag__item">
                    <span class="svc-mag__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    <div class="svc-mag__body">
                        <h3 class="svc-mag__title"><?php echo esc_html($svc['title']); ?></h3>
                        <p class="svc-mag__desc"><?php echo esc_html($svc['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'e') : ?>
<!-- SERVICES E: soft rounded cards with top accent bar -->
<section class="pp-section svc-services-e">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">02</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['services_heading']); ?></h2>
            <?php if (!empty($data['services_intro'])) : ?>
                <p class="pp-section__lead mx-auto"><?php echo esc_html($data['services_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row g-4">
            <?php foreach ($data['services'] as $i => $svc) : ?>
                <div class="col-lg-6">
                    <div class="svc-card-e">
                        <div class="svc-card-e__bar"></div>
                        <div class="svc-card-e__icon"><?php echo $service_icons[$i % count($service_icons)]; ?></div>
                        <h3 class="svc-card-e__title"><?php echo esc_html($svc['title']); ?></h3>
                        <p class="svc-card-e__desc"><?php echo esc_html($svc['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php else : ?>
<!-- SERVICES F: dark compact grid with left accent bars -->
<section class="pp-section svc-services-f">
    <div class="container">
        <div class="mb-5">
            <span class="pp-section__label pp-section__label--light">02</span>
            <h2 class="pp-section__title pp-section__title--light"><?php echo esc_html($data['services_heading']); ?></h2>
            <?php if (!empty($data['services_intro'])) : ?>
                <p class="pp-section__lead pp-section__lead--light"><?php echo esc_html($data['services_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row g-4">
            <?php foreach ($data['services'] as $i => $svc) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="svc-card-f">
                        <span class="svc-card-f__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?>.</span>
                        <h3 class="svc-card-f__title"><?php echo esc_html($svc['title']); ?></h3>
                        <p class="svc-card-f__desc"><?php echo esc_html($svc['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php /* ====================================================================
     WHY CHOOSE US — six variants
==================================================================== */ ?>

<?php if ($L === 'a') : ?>
<!-- CHOOSE A: floating badge cards -->
<section class="pp-section pp-choose">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">03</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['choose_heading']); ?></h2>
            <?php if (!empty($data['choose_intro'])) : ?>
                <p class="pp-section__lead mx-auto"><?php echo esc_html($data['choose_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($data['choose_items'] as $i => $item) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="pp-choose-card">
                        <div class="pp-choose-card__num-badge"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
                        <h3 class="pp-choose-card__title"><?php echo esc_html($item['title']); ?></h3>
                        <p class="pp-choose-card__desc"><?php echo esc_html($item['desc']); ?></p>
                        <svg class="pp-choose-card__check" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'b') : ?>
<!-- CHOOSE B: horizontal stripe rows -->
<section class="pp-section svc-choose-b">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">03</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['choose_heading']); ?></h2>
            <?php if (!empty($data['choose_intro'])) : ?>
                <p class="pp-section__lead mx-auto"><?php echo esc_html($data['choose_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="svc-stripes">
            <?php foreach ($data['choose_items'] as $i => $item) : ?>
                <div class="svc-stripe">
                    <span class="svc-stripe__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    <div class="svc-stripe__body">
                        <h3 class="svc-stripe__title"><?php echo esc_html($item['title']); ?></h3>
                        <p class="svc-stripe__desc"><?php echo esc_html($item['desc']); ?></p>
                    </div>
                    <span class="svc-stripe__check"><?php echo $check_icon; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'c') : ?>
<!-- CHOOSE C: checklist 2-col grid -->
<section class="pp-section svc-choose-c">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">03</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['choose_heading']); ?></h2>
            <?php if (!empty($data['choose_intro'])) : ?>
                <p class="pp-section__lead mx-auto"><?php echo esc_html($data['choose_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($data['choose_items'] as $item) : ?>
                <div class="col-lg-6">
                    <div class="svc-checkitem">
                        <span class="svc-checkitem__icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </span>
                        <div>
                            <h3 class="svc-checkitem__title"><?php echo esc_html($item['title']); ?></h3>
                            <p class="svc-checkitem__desc"><?php echo esc_html($item['desc']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'd') : ?>
<!-- CHOOSE D: editorial centered list -->
<section class="pp-section svc-choose-d">
    <div class="container">
        <div class="svc-choose-d__inner">
            <span class="pp-section__label">03</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['choose_heading']); ?></h2>
            <?php if (!empty($data['choose_intro'])) : ?>
                <p class="pp-section__lead mx-auto mb-5"><?php echo esc_html($data['choose_intro']); ?></p>
            <?php endif; ?>
            <?php foreach ($data['choose_items'] as $item) : ?>
                <div class="svc-choose-d__item">
                    <h3 class="svc-choose-d__title"><?php echo esc_html($item['title']); ?></h3>
                    <p class="svc-choose-d__desc"><?php echo esc_html($item['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'e') : ?>
<!-- CHOOSE E: soft pastel rounded cards -->
<section class="pp-section svc-choose-e">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">03</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['choose_heading']); ?></h2>
            <?php if (!empty($data['choose_intro'])) : ?>
                <p class="pp-section__lead mx-auto"><?php echo esc_html($data['choose_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($data['choose_items'] as $item) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="svc-pastel">
                        <span class="svc-pastel__icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </span>
                        <h3 class="svc-pastel__title"><?php echo esc_html($item['title']); ?></h3>
                        <p class="svc-pastel__desc"><?php echo esc_html($item['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php else : ?>
<!-- CHOOSE F: thick left-border panels -->
<section class="pp-section svc-choose-f">
    <div class="container">
        <div class="mb-5">
            <span class="pp-section__label">03</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['choose_heading']); ?></h2>
            <?php if (!empty($data['choose_intro'])) : ?>
                <p class="pp-section__lead"><?php echo esc_html($data['choose_intro']); ?></p>
            <?php endif; ?>
        </div>
        <div class="row g-4">
            <?php foreach ($data['choose_items'] as $i => $item) : ?>
                <div class="col-lg-6">
                    <div class="svc-panel-f">
                        <span class="svc-panel-f__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        <h3 class="svc-panel-f__title"><?php echo esc_html($item['title']); ?></h3>
                        <p class="svc-panel-f__desc"><?php echo esc_html($item['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php /* ====================================================================
     TEAM — shared markup, per-layout styling
==================================================================== */ ?>
<section class="pp-section pp-team">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">04</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['team_heading']); ?></h2>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($data['team'] as $member) : ?>
                <div class="<?php echo in_array($L, array('b', 'd'), true) ? 'col-lg-6' : 'col-lg-4 col-md-6'; ?>">
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


<?php /* ====================================================================
     PROCESS — six variants
==================================================================== */ ?>

<?php if ($L === 'a') : ?>
<!-- PROCESS A: dark vertical timeline -->
<section class="pp-section pp-process">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label pp-section__label--light">05</span>
            <h2 class="pp-section__title pp-section__title--light"><?php echo esc_html($data['process_heading']); ?></h2>
        </div>
        <div class="pp-process__timeline">
            <?php foreach ($data['process_steps'] as $i => $step) : ?>
                <div class="pp-process__step">
                    <div class="pp-process__step-marker"><span><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span></div>
                    <div class="pp-process__step-body">
                        <h3 class="pp-process__step-title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="pp-process__step-desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'b') : ?>
<!-- PROCESS B: horizontal 5-card row, light -->
<section class="pp-section svc-proc-b-wrap">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">05</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['process_heading']); ?></h2>
        </div>
        <div class="svc-proc-b">
            <?php foreach ($data['process_steps'] as $i => $step) : ?>
                <div class="svc-proc-b__step">
                    <div class="svc-proc-b__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
                    <h3 class="svc-proc-b__title"><?php echo esc_html($step['title']); ?></h3>
                    <p class="svc-proc-b__desc"><?php echo esc_html($step['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'c') : ?>
<!-- PROCESS C: dark center zigzag timeline -->
<section class="pp-section svc-proc-c-wrap">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label pp-section__label--light">05</span>
            <h2 class="pp-section__title pp-section__title--light"><?php echo esc_html($data['process_heading']); ?></h2>
        </div>
        <div class="svc-proc-c">
            <?php foreach ($data['process_steps'] as $i => $step) : ?>
                <div class="svc-proc-c__row<?php echo $i % 2 ? ' is-right' : ''; ?>">
                    <div class="svc-proc-c__card">
                        <span class="svc-proc-c__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                        <h3 class="svc-proc-c__title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="svc-proc-c__desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'd') : ?>
<!-- PROCESS D: editorial numbered stack, light -->
<section class="pp-section svc-proc-d-wrap">
    <div class="container">
        <div class="svc-proc-d__head">
            <span class="pp-section__label">05</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['process_heading']); ?></h2>
        </div>
        <div class="svc-proc-d">
            <?php foreach ($data['process_steps'] as $i => $step) : ?>
                <div class="svc-proc-d__item">
                    <span class="svc-proc-d__num"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    <div>
                        <h3 class="svc-proc-d__title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="svc-proc-d__desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php elseif ($L === 'e') : ?>
<!-- PROCESS E: dotted connector cards, light -->
<section class="pp-section svc-proc-e-wrap">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">05</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['process_heading']); ?></h2>
        </div>
        <div class="svc-proc-e">
            <?php foreach ($data['process_steps'] as $i => $step) : ?>
                <div class="svc-proc-e__step">
                    <div class="svc-proc-e__marker"><span><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span></div>
                    <div class="svc-proc-e__card">
                        <h3 class="svc-proc-e__title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="svc-proc-e__desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php else : ?>
<!-- PROCESS F: dark compact steps -->
<section class="pp-section svc-proc-f-wrap">
    <div class="container">
        <div class="mb-5">
            <span class="pp-section__label pp-section__label--light">05</span>
            <h2 class="pp-section__title pp-section__title--light"><?php echo esc_html($data['process_heading']); ?></h2>
        </div>
        <div class="svc-proc-f">
            <?php foreach ($data['process_steps'] as $i => $step) : ?>
                <div class="svc-proc-f__step">
                    <span class="svc-proc-f__marker"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    <div class="svc-proc-f__body">
                        <h3 class="svc-proc-f__title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="svc-proc-f__desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php if (!empty($data['list_heading']) && !empty($data['list_items'])) : ?>
<?php /* ====================================================================
     LIST SECTION — shared markup, per-layout styling
==================================================================== */ ?>
<section class="pp-section pp-listgrid">
    <div class="container">
        <div class="text-center mb-5">
            <span class="pp-section__label">06</span>
            <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['list_heading']); ?></h2>
        </div>
        <div class="pp-listgrid__grid">
            <?php foreach ($data['list_items'] as $item) : ?>
                <div class="pp-industry-pill">
                    <span class="pp-industry-pill__icon"><?php echo $check_icon; ?></span>
                    <span><?php echo esc_html($item); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php /* ====================================================================
     FAQ — side layout (a, c, f) / centered layout (b, d, e)
==================================================================== */ ?>
<?php $faq_centered = in_array($L, array('b', 'd', 'e'), true); ?>
<section class="pp-section pp-faq">
    <div class="container">
        <?php if ($faq_centered) : ?>
            <div class="text-center mb-5">
                <span class="pp-section__label">07</span>
                <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['faq_heading']); ?></h2>
            </div>
            <div class="pp-faq__list pp-faq__list--centered">
                <?php foreach ($data['faqs'] as $i => $faq) : ?>
                    <details class="pp-faq__item" <?php echo $i === 0 ? 'open' : ''; ?>>
                        <summary class="pp-faq__q">
                            <span><?php echo esc_html($faq['q']); ?></span>
                            <span class="pp-faq__icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                            </span>
                        </summary>
                        <div class="pp-faq__a"><p><?php echo esc_html($faq['a']); ?></p></div>
                    </details>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="row g-5">
                <div class="col-lg-4">
                    <span class="pp-section__label">07</span>
                    <h2 class="pp-section__title pp-section__title--dark"><?php echo esc_html($data['faq_heading']); ?></h2>
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
                                <div class="pp-faq__a"><p><?php echo esc_html($faq['a']); ?></p></div>
                            </details>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>


<?php /* ====================================================================
     FINAL CTA — shared markup, per-layout styling
==================================================================== */ ?>
<section class="pp-final-cta" id="contact">
    <div class="pp-final-cta__bg-grid"></div>
    <div class="pp-final-cta__orb pp-final-cta__orb--1"></div>
    <div class="pp-final-cta__orb pp-final-cta__orb--2"></div>
    <div class="container position-relative z-2">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="pp-final-cta__title"><?php echo esc_html($data['cta_heading']); ?></h2>
                <div class="pp-final-cta__paras">
                    <?php foreach ($data['cta_paragraphs'] as $i => $p) : ?>
                        <p<?php echo $i === count($data['cta_paragraphs']) - 1 ? ' class="pp-final-cta__last-line"' : ''; ?>><?php echo esc_html($p); ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="pp-final-cta__buttons">
                    <a href="#audit" id="cta-audit-btn" class="pp-btn pp-btn--primary pp-btn--lg"><?php echo $audit_icon; ?> Get Your SEO Audit</a>
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

</div><!-- /.svc -->


<style>
/* =============================================
   PREMIUM SERVICE PAGE — SHARED CORE
============================================= */
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
.pp-section__label--light { color: #fff; background: rgba(255,255,255,.1); border-color: rgba(255,255,255,.2); }
.pp-section__title {
    font-size: clamp(1.9rem, 3.5vw, 2.8rem);
    font-weight: 800;
    line-height: 1.18;
    letter-spacing: -0.02em;
    margin-bottom: 22px;
}
.pp-section__title--dark { color: var(--ssc-dark); }
.pp-section__title--light { color: #fff; }
.pp-section__lead { font-size: 1.05rem; color: var(--ssc-gray-500); line-height: 1.7; max-width: 720px; }
.pp-section__lead--light { color: rgba(255,255,255,.7); }

/* ---- Buttons ---- */
.pp-btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 14px 28px; border-radius: 50px;
    font-size: .9rem; font-weight: 800; text-decoration: none;
    transition: all .3s cubic-bezier(.2,.7,.3,1);
    border: 2px solid transparent; white-space: nowrap;
}
.pp-btn--lg { padding: 16px 32px; font-size: .95rem; }
.pp-btn--primary {
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff;
    box-shadow: 0 8px 24px color-mix(in srgb, var(--pp-accent) 35%, transparent);
}
.pp-btn--primary:hover { color: #fff; transform: translateY(-2px); box-shadow: 0 14px 32px color-mix(in srgb, var(--pp-accent) 45%, transparent); }
.pp-btn--white { background: #fff; color: var(--pp-accent-dark); }
.pp-btn--white:hover { color: var(--pp-accent-dark); transform: translateY(-2px); box-shadow: 0 14px 32px rgba(0,0,0,.2); }
.pp-btn--whatsapp { background: #25D366; color: #fff; }
.pp-btn--whatsapp:hover { background: #1ea957; color: #fff; transform: translateY(-2px); }
.pp-btn--ghost-light { background: rgba(255,255,255,.1); color: #fff; border-color: rgba(255,255,255,.25); }
.pp-btn--ghost-light:hover { background: rgba(255,255,255,.2); color: #fff; }
.pp-btn--outline { background: transparent; color: var(--pp-accent); border-color: var(--pp-accent); }
.pp-btn--outline:hover { background: var(--pp-accent); color: #fff; }

/* ---- Breadcrumbs ---- */
.pp-breadcrumb { margin: 0; padding: 0; }
.pp-breadcrumb .breadcrumb-item a { color: rgba(255,255,255,.6); text-decoration: none; font-size: .85rem; }
.pp-breadcrumb .breadcrumb-item a:hover { color: #fff; }
.pp-breadcrumb .breadcrumb-item.active { color: rgba(255,255,255,.5); font-size: .85rem; }
.pp-breadcrumb .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,.3); }
.svc-breadcrumb-dark { margin: 0; padding: 0; }
.svc-breadcrumb-dark .breadcrumb-item a { color: var(--ssc-gray-500); text-decoration: none; font-size: .85rem; }
.svc-breadcrumb-dark .breadcrumb-item a:hover { color: var(--pp-accent); }
.svc-breadcrumb-dark .breadcrumb-item.active { color: var(--pp-accent); font-size: .85rem; font-weight: 600; }

/* ---- Shared hero atoms ---- */
.pp-hero__bg-grid {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
    background-size: 56px 56px;
    pointer-events: none;
}
.pp-hero__title {
    font-size: clamp(1.8rem, 4vw, 3rem);
    font-weight: 800; line-height: 1.15; letter-spacing: -0.025em;
    color: #fff; margin-bottom: 28px;
}
.pp-hero__title--left { text-align: left; }
.pp-hero__intro p { color: rgba(255,255,255,.78); font-size: 1.02rem; line-height: 1.75; margin-bottom: 16px; }
.pp-hero__intro--left p { text-align: left; }
.pp-hero__intro-last { color: #fff !important; font-weight: 600; font-size: 1.08rem !important; }
.pp-hero__cta-row { display: flex; gap: 14px; flex-wrap: wrap; }
.pp-hero__cta-row--left { justify-content: flex-start; }
.pp-hero__form-wrap { position: relative; z-index: 5; }
.pp-hero__form-wrap .ssc-audit-form-card {
    border-radius: 20px !important;
    box-shadow: 0 30px 80px rgba(0,0,0,.4) !important;
    padding: 32px !important;
}
.pp-hero__form-wrap .ssc-audit-form-card h3 { font-size: 1.4rem !important; color: var(--ssc-dark) !important; }

/* =============================================
   HERO A — dark split (Ecommerce)
============================================= */
.pp-hero {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #0a0e2e 0%, #1a1138 60%, var(--pp-accent-dark) 130%);
    padding: 70px 0 90px; color: #fff;
}
.pp-hero__bg-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(10,14,46,.85) 0%, rgba(26,17,56,.8) 50%, color-mix(in srgb, var(--pp-accent-dark) 60%, transparent) 100%);
    pointer-events: none;
}
.pp-hero__orb { position: absolute; border-radius: 50%; filter: blur(110px); pointer-events: none; }
.pp-hero__orb--accent { width: 500px; height: 500px; background: radial-gradient(circle, var(--pp-accent), transparent); top: -150px; right: -100px; opacity: .4; }
.pp-hero__orb--blue { width: 600px; height: 600px; background: radial-gradient(circle, #4f46e5, transparent); bottom: -200px; left: -150px; opacity: .3; }

/* =============================================
   HERO B — light & airy (Local)
============================================= */
.svc-hero-b {
    position: relative; overflow: hidden;
    background: linear-gradient(180deg, color-mix(in srgb, var(--pp-accent) 9%, #fff) 0%, #fff 100%);
    padding: 80px 0 90px;
}
.svc-hero-b__blob { position: absolute; border-radius: 50%; filter: blur(90px); pointer-events: none; }
.svc-hero-b__blob--1 { width: 420px; height: 420px; background: color-mix(in srgb, var(--pp-accent) 22%, transparent); top: -160px; right: -120px; }
.svc-hero-b__blob--2 { width: 360px; height: 360px; background: color-mix(in srgb, var(--pp-accent) 14%, transparent); bottom: -140px; left: -100px; }
.svc-hero-b__title {
    font-size: clamp(1.8rem, 4vw, 3rem);
    font-weight: 800; line-height: 1.15; letter-spacing: -0.025em;
    color: var(--ssc-dark); margin-bottom: 20px;
}
.svc-hero-b__rule {
    width: 90px; height: 5px; border-radius: 5px;
    background: linear-gradient(90deg, var(--pp-accent), var(--pp-accent-dark));
    margin-bottom: 26px;
}
.svc-hero-b__intro p { color: var(--ssc-gray-700); font-size: 1.02rem; line-height: 1.78; margin-bottom: 16px; }
.svc-hero-b__intro-last { color: var(--ssc-dark) !important; font-weight: 600; font-size: 1.08rem !important; }
.svc-hero-b__intro { margin-bottom: 30px; }
.svc-hero-b__form .ssc-audit-form-card {
    border: 1px solid color-mix(in srgb, var(--pp-accent) 25%, transparent) !important;
    border-radius: 22px !important;
    box-shadow: 0 24px 60px color-mix(in srgb, var(--pp-accent) 16%, transparent) !important;
    padding: 32px !important;
}

/* =============================================
   HERO C — reversed split, angled base (Shopify)
============================================= */
.svc-hero-c {
    position: relative; overflow: hidden;
    background:
        radial-gradient(900px 500px at 85% -10%, color-mix(in srgb, var(--pp-accent) 35%, transparent), transparent 60%),
        linear-gradient(150deg, #051b10 0%, #0a0e2e 70%);
    padding: 70px 0 130px; color: #fff;
    clip-path: polygon(0 0, 100% 0, 100% calc(100% - 60px), 0 100%);
}
.svc-hero-c__glow {
    position: absolute; width: 560px; height: 560px; border-radius: 50%;
    background: radial-gradient(circle, var(--pp-accent), transparent 70%);
    filter: blur(120px); opacity: .35; bottom: -220px; right: -140px; pointer-events: none;
}
.svc-hero-c__form .ssc-audit-form-card {
    border-top: 6px solid var(--pp-accent) !important;
}

/* =============================================
   HERO D — editorial centered (Consulting)
============================================= */
.svc-hero-d {
    background: #fff;
    border-top: 6px solid var(--pp-accent);
    padding: 90px 0 80px;
}
.svc-hero-d__title {
    font-size: clamp(2rem, 4.4vw, 3.3rem);
    font-weight: 800; line-height: 1.13; letter-spacing: -0.028em;
    color: var(--ssc-dark);
    text-align: center;
    max-width: 980px; margin: 0 auto 28px;
}
.svc-hero-d__rule {
    width: 70px; height: 4px; border-radius: 4px;
    background: linear-gradient(90deg, var(--pp-accent), var(--pp-accent-dark));
    margin: 0 auto 32px;
}
.svc-hero-d__intro { max-width: 780px; margin: 0 auto 36px; }
.svc-hero-d__intro p { color: var(--ssc-gray-700); font-size: 1.05rem; line-height: 1.8; margin-bottom: 16px; text-align: center; }
.svc-hero-d__intro-last { color: var(--ssc-dark) !important; font-weight: 600; font-size: 1.1rem !important; }

/* Form band (layout D) */
.svc-form-band {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, var(--pp-accent-dark) 0%, #0a0e2e 90%);
    padding: 90px 0;
}
.svc-form-band__inner { max-width: 740px; margin: 0 auto; position: relative; z-index: 2; }
.svc-form-band__inner .ssc-audit-form-card {
    border-radius: 22px !important;
    box-shadow: 0 30px 80px rgba(0,0,0,.45) !important;
    padding: 36px !important;
}

/* =============================================
   HERO E — floating rounded card (Dental)
============================================= */
.svc-hero-e { background: #f0f9fb; padding: 50px 0 70px; }
.svc-hero-e__card {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, #042f3c 0%, #0a0e2e 55%, var(--pp-accent-dark) 140%);
    border-radius: 36px;
    padding: 60px 56px;
    color: #fff;
    box-shadow: 0 40px 90px color-mix(in srgb, var(--pp-accent) 25%, transparent);
}
.svc-hero-e__orb {
    position: absolute; width: 480px; height: 480px; border-radius: 50%;
    background: radial-gradient(circle, var(--pp-accent), transparent 70%);
    filter: blur(110px); opacity: .45; top: -180px; right: -120px; pointer-events: none;
}
.svc-hero-e__title { font-size: clamp(1.7rem, 3.6vw, 2.7rem); }

/* =============================================
   HERO F — full-width dark + overlap form (On-Page)
============================================= */
.svc-hero-f {
    position: relative; overflow: hidden;
    background: linear-gradient(120deg, #16060a 0%, #0a0e2e 75%);
    padding: 70px 0 90px;
    color: #fff;
}
.svc-hero-f__topbar {
    position: absolute; top: 0; left: 0; right: 0; height: 6px;
    background: linear-gradient(90deg, var(--pp-accent), var(--pp-accent-dark), transparent);
}
.svc-hero-f__title {
    font-size: clamp(1.9rem, 4.2vw, 3.1rem);
    font-weight: 800; line-height: 1.14; letter-spacing: -0.025em;
    color: #fff; margin-bottom: 28px;
}
.svc-hero-f__intro { margin-bottom: 32px; }
.svc-hero-f__intro p { color: rgba(255,255,255,.78); font-size: 1.02rem; line-height: 1.75; margin-bottom: 16px; }
.svc-hero-f__form .ssc-audit-form-card { border-top: 6px solid var(--pp-accent) !important; }

/* =============================================
   ABOUT
============================================= */
.pp-why { background: #fff; }
.svc--f .pp-why { background: #fff; padding-top: 70px; }
.pp-why__accent-line {
    width: 56px; height: 4px;
    background: linear-gradient(90deg, var(--pp-accent), var(--pp-accent-dark));
    border-radius: 4px; margin-bottom: 28px;
}
.pp-why__content { padding-top: 8px; }
.pp-why__para { font-size: 1.04rem; line-height: 1.85; color: var(--ssc-gray-700); margin-bottom: 22px; }
.pp-why__para:first-letter { font-weight: 700; color: var(--ssc-dark); }
/* layout b: tinted about */
.svc--b .pp-why { background: #f6fbf9; }
/* layout c: paragraphs framed with accent edge */
.svc--c .pp-why__content { border-left: 4px solid color-mix(in srgb, var(--pp-accent) 45%, transparent); padding-left: 28px; }
/* layout e: rounded tinted about */
.svc--e .pp-why { background: #fff; }
.svc--e .pp-why__content { background: #f0f9fb; border-radius: 24px; padding: 34px 36px; }
/* About D (centered editorial) */
.svc-about-d { background: #f8f8fc; }
.svc-about-d__inner { max-width: 820px; margin: 0 auto; text-align: center; }
.svc-about-d__rule { width: 56px; height: 4px; border-radius: 4px; background: linear-gradient(90deg, var(--pp-accent), var(--pp-accent-dark)); margin: 0 auto 30px; }
.svc-about-d__para { font-size: 1.05rem; line-height: 1.85; color: var(--ssc-gray-700); margin-bottom: 22px; text-align: left; }

/* =============================================
   SERVICES A — dark grid
============================================= */
.pp-services {
    background: linear-gradient(135deg, #0a0e2e 0%, #1a1138 100%);
    color: #fff; position: relative;
}
.pp-services::before {
    content: ''; position: absolute; inset: 0;
    background-image: radial-gradient(rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 36px 36px; pointer-events: none;
}
.pp-services .container { position: relative; z-index: 2; }
.pp-service-card {
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 20px; padding: 32px 28px; height: 100%;
    position: relative; overflow: hidden;
    transition: transform .4s cubic-bezier(.2,.7,.3,1), border-color .3s ease, background .3s ease;
}
.pp-service-card:hover { transform: translateY(-8px); border-color: color-mix(in srgb, var(--pp-accent) 60%, transparent); background: rgba(255,255,255,.07); }
.pp-service-card__head { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 22px; }
.pp-service-card__icon {
    width: 60px; height: 60px;
    background: color-mix(in srgb, var(--pp-accent) 18%, transparent);
    border: 1px solid color-mix(in srgb, var(--pp-accent) 35%, transparent);
    border-radius: 16px; display: flex; align-items: center; justify-content: center;
    color: var(--pp-accent); flex-shrink: 0;
}
.pp-service-card__num { font-size: 2.6rem; font-weight: 900; color: rgba(255,255,255,.08); line-height: 1; font-variant-numeric: tabular-nums; }
.pp-service-card__title { font-size: 1.2rem; font-weight: 800; color: #fff; margin-bottom: 14px; line-height: 1.3; }
.pp-service-card__desc { font-size: .92rem; color: rgba(255,255,255,.65); line-height: 1.75; margin: 0; }
.pp-service-card__glow {
    position: absolute; bottom: -50px; right: -50px; width: 140px; height: 140px;
    background: radial-gradient(circle, var(--pp-accent), transparent 70%);
    opacity: 0; transition: opacity .5s ease; pointer-events: none;
}
.pp-service-card:hover .pp-service-card__glow { opacity: .25; }

/* =============================================
   SERVICES B — zigzag rows
============================================= */
.svc-services-b { background: #fff; }
.svc-zigzag { max-width: 1000px; margin: 0 auto; display: flex; flex-direction: column; gap: 28px; }
.svc-zigrow {
    display: flex; align-items: center; gap: 40px;
    background: #f6fbf9;
    border: 1px solid color-mix(in srgb, var(--pp-accent) 16%, transparent);
    border-radius: 24px; padding: 36px 40px;
    transition: transform .35s ease, box-shadow .35s ease;
}
.svc-zigrow:hover { transform: translateY(-4px); box-shadow: 0 18px 44px color-mix(in srgb, var(--pp-accent) 14%, transparent); }
.svc-zigrow--alt { flex-direction: row-reverse; background: #fff; border-style: dashed; }
.svc-zigrow__visual { position: relative; flex-shrink: 0; }
.svc-zigrow__icon {
    width: 96px; height: 96px; border-radius: 26px;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff; display: flex; align-items: center; justify-content: center;
    box-shadow: 0 14px 32px color-mix(in srgb, var(--pp-accent) 35%, transparent);
}
.svc-zigrow__icon svg { width: 40px; height: 40px; }
.svc-zigrow__num {
    position: absolute; top: -12px; right: -12px;
    background: #fff; color: var(--pp-accent);
    border: 2px solid var(--pp-accent);
    font-size: .75rem; font-weight: 900;
    width: 34px; height: 34px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
}
.svc-zigrow__title { font-size: 1.3rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 10px; }
.svc-zigrow__desc { font-size: .96rem; color: var(--ssc-gray-500); line-height: 1.78; margin: 0; }

/* =============================================
   SERVICES C — light 2-col cards
============================================= */
.svc-services-c { background: #f8fafc; }
.svc-card-c {
    background: #fff; border: 1px solid #e5e7eb; border-radius: 18px;
    padding: 32px 30px; height: 100%;
    border-bottom: 4px solid color-mix(in srgb, var(--pp-accent) 50%, transparent);
    transition: transform .35s ease, box-shadow .35s ease, border-color .3s ease;
}
.svc-card-c:hover { transform: translateY(-6px); box-shadow: 0 20px 44px rgba(15,23,42,.09); border-bottom-color: var(--pp-accent); }
.svc-card-c__head { display: flex; align-items: center; gap: 18px; margin-bottom: 16px; }
.svc-card-c__icon {
    width: 54px; height: 54px; border-radius: 14px; flex-shrink: 0;
    background: color-mix(in srgb, var(--pp-accent) 12%, transparent);
    color: var(--pp-accent);
    display: flex; align-items: center; justify-content: center;
}
.svc-card-c__title { font-size: 1.18rem; font-weight: 800; color: var(--ssc-dark); margin: 0; line-height: 1.3; }
.svc-card-c__desc { font-size: .93rem; color: var(--ssc-gray-500); line-height: 1.78; margin: 0; }

/* =============================================
   SERVICES D — magazine numbered stack
============================================= */
.svc-services-d { background: #fff; }
.svc-services-d__head { max-width: 880px; margin: 0 auto 40px; }
.svc-mag { max-width: 880px; margin: 0 auto; }
.svc-mag__item {
    display: flex; gap: 36px; align-items: flex-start;
    padding: 38px 0;
    border-top: 1px solid #e5e7eb;
}
.svc-mag__item:last-child { border-bottom: 1px solid #e5e7eb; }
.svc-mag__num {
    font-size: 3rem; font-weight: 900; line-height: 1;
    color: color-mix(in srgb, var(--pp-accent) 30%, transparent);
    font-variant-numeric: tabular-nums;
    flex-shrink: 0; min-width: 86px;
}
.svc-mag__title { font-size: 1.3rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 12px; }
.svc-mag__desc { font-size: .98rem; color: var(--ssc-gray-600); line-height: 1.8; margin: 0; }
.svc-mag__item:hover .svc-mag__num { color: var(--pp-accent); transition: color .3s ease; }

/* =============================================
   SERVICES E — soft rounded cards w/ top bar
============================================= */
.svc-services-e { background: #f0f9fb; }
.svc-card-e {
    position: relative; overflow: hidden;
    background: #fff; border-radius: 26px;
    padding: 38px 32px 32px; height: 100%;
    box-shadow: 0 10px 30px rgba(8,145,178,.07);
    transition: transform .35s ease, box-shadow .35s ease;
}
.svc-card-e:hover { transform: translateY(-6px); box-shadow: 0 24px 50px color-mix(in srgb, var(--pp-accent) 18%, transparent); }
.svc-card-e__bar {
    position: absolute; top: 0; left: 0; right: 0; height: 6px;
    background: linear-gradient(90deg, var(--pp-accent), var(--pp-accent-dark));
}
.svc-card-e__icon {
    width: 62px; height: 62px; border-radius: 50%;
    background: color-mix(in srgb, var(--pp-accent) 12%, transparent);
    color: var(--pp-accent);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
}
.svc-card-e__title { font-size: 1.2rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 12px; }
.svc-card-e__desc { font-size: .93rem; color: var(--ssc-gray-500); line-height: 1.78; margin: 0; }

/* =============================================
   SERVICES F — dark compact accent-bar grid
============================================= */
.svc-services-f {
    background: linear-gradient(120deg, #16060a 0%, #0a0e2e 80%);
    color: #fff; position: relative;
}
.svc-services-f::before {
    content: ''; position: absolute; inset: 0;
    background-image: radial-gradient(rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 36px 36px; pointer-events: none;
}
.svc-services-f .container { position: relative; z-index: 2; }
.svc-card-f {
    background: rgba(255,255,255,.04);
    border-left: 3px solid var(--pp-accent);
    border-radius: 6px 16px 16px 6px;
    padding: 28px 26px; height: 100%;
    transition: background .3s ease, transform .3s ease;
}
.svc-card-f:hover { background: rgba(255,255,255,.08); transform: translateX(4px); }
.svc-card-f__num { font-size: .85rem; font-weight: 900; color: var(--pp-accent); letter-spacing: .1em; display: block; margin-bottom: 12px; font-variant-numeric: tabular-nums; }
.svc-card-f__title { font-size: 1.12rem; font-weight: 800; color: #fff; margin-bottom: 12px; line-height: 1.3; }
.svc-card-f__desc { font-size: .9rem; color: rgba(255,255,255,.62); line-height: 1.75; margin: 0; }

/* =============================================
   CHOOSE A — floating badge cards
============================================= */
.pp-choose { background: #f8fafc; }
.pp-choose-card {
    background: #fff; border: 1px solid #e5e7eb; border-radius: 18px;
    padding: 34px 28px 28px; height: 100%; position: relative;
    transition: transform .35s ease, box-shadow .35s ease, border-color .3s ease;
}
.pp-choose-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px rgba(15, 23, 42, .08); border-color: color-mix(in srgb, var(--pp-accent) 30%, transparent); }
.pp-choose-card__num-badge {
    position: absolute; top: -16px; left: 28px;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff; font-size: .8rem; font-weight: 900;
    padding: 6px 14px; border-radius: 50px;
    box-shadow: 0 8px 18px color-mix(in srgb, var(--pp-accent) 35%, transparent);
    letter-spacing: .08em;
}
.pp-choose-card__title { font-size: 1.15rem; font-weight: 800; color: var(--ssc-dark); margin: 6px 0 12px; padding-right: 32px; }
.pp-choose-card__desc { font-size: .92rem; color: var(--ssc-gray-500); line-height: 1.75; margin: 0; }
.pp-choose-card__check { position: absolute; top: 28px; right: 24px; color: color-mix(in srgb, var(--pp-accent) 30%, transparent); transition: color .3s ease; }
.pp-choose-card:hover .pp-choose-card__check { color: var(--pp-accent); }

/* =============================================
   CHOOSE B — stripe rows
============================================= */
.svc-choose-b { background: #fff; }
.svc-stripes { max-width: 920px; margin: 0 auto; display: flex; flex-direction: column; gap: 14px; }
.svc-stripe {
    display: flex; align-items: center; gap: 26px;
    background: #f6fbf9;
    border: 1px solid color-mix(in srgb, var(--pp-accent) 14%, transparent);
    border-radius: 16px; padding: 24px 28px;
    transition: transform .3s ease, border-color .3s ease;
}
.svc-stripe:hover { transform: translateX(6px); border-color: var(--pp-accent); }
.svc-stripe__num {
    width: 52px; height: 52px; border-radius: 50%; flex-shrink: 0;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff; font-weight: 900; font-size: .95rem;
    display: flex; align-items: center; justify-content: center;
}
.svc-stripe__title { font-size: 1.1rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 6px; }
.svc-stripe__desc { font-size: .92rem; color: var(--ssc-gray-500); line-height: 1.7; margin: 0; }
.svc-stripe__check {
    margin-left: auto; flex-shrink: 0;
    width: 34px; height: 34px; border-radius: 50%;
    background: color-mix(in srgb, var(--pp-accent) 12%, transparent);
    color: var(--pp-accent);
    display: flex; align-items: center; justify-content: center;
}

/* =============================================
   CHOOSE C — checklist grid
============================================= */
.svc-choose-c { background: #fff; }
.svc-checkitem {
    display: flex; gap: 20px; align-items: flex-start;
    padding: 26px 28px; height: 100%;
    background: #f8fafc; border-radius: 16px;
    border: 1px solid #e5e7eb;
    transition: border-color .3s ease, background .3s ease;
}
.svc-checkitem:hover { border-color: var(--pp-accent); background: color-mix(in srgb, var(--pp-accent) 5%, #fff); }
.svc-checkitem__icon {
    width: 44px; height: 44px; border-radius: 12px; flex-shrink: 0;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff; display: flex; align-items: center; justify-content: center;
    box-shadow: 0 8px 20px color-mix(in srgb, var(--pp-accent) 30%, transparent);
}
.svc-checkitem__title { font-size: 1.1rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 8px; }
.svc-checkitem__desc { font-size: .92rem; color: var(--ssc-gray-500); line-height: 1.72; margin: 0; }

/* =============================================
   CHOOSE D — editorial centered list
============================================= */
.svc-choose-d { background: #fff; }
.svc-choose-d__inner { max-width: 760px; margin: 0 auto; text-align: center; }
.svc-choose-d__item { padding: 30px 0; border-top: 1px solid #e5e7eb; }
.svc-choose-d__item:last-child { border-bottom: 1px solid #e5e7eb; }
.svc-choose-d__title { font-size: 1.25rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 12px; position: relative; display: inline-block; }
.svc-choose-d__title::after {
    content: ''; display: block; width: 38px; height: 3px; border-radius: 3px;
    background: var(--pp-accent); margin: 10px auto 0;
}
.svc-choose-d__desc { font-size: .98rem; color: var(--ssc-gray-600); line-height: 1.8; margin: 0; }

/* =============================================
   CHOOSE E — pastel cards
============================================= */
.svc-choose-e { background: #fff; }
.svc-pastel {
    background: color-mix(in srgb, var(--pp-accent) 7%, #fff);
    border: 1px solid color-mix(in srgb, var(--pp-accent) 18%, transparent);
    border-radius: 24px; padding: 32px 28px; height: 100%;
    text-align: center;
    transition: transform .35s ease, box-shadow .35s ease;
}
.svc-pastel:hover { transform: translateY(-6px); box-shadow: 0 18px 40px color-mix(in srgb, var(--pp-accent) 16%, transparent); }
.svc-pastel__icon {
    width: 50px; height: 50px; border-radius: 50%;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff; display: inline-flex; align-items: center; justify-content: center;
    margin-bottom: 18px;
}
.svc-pastel__title { font-size: 1.12rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 12px; }
.svc-pastel__desc { font-size: .92rem; color: var(--ssc-gray-600); line-height: 1.74; margin: 0; }

/* =============================================
   CHOOSE F — left-border panels
============================================= */
.svc-choose-f { background: #f8fafc; }
.svc-panel-f {
    background: #fff;
    border-left: 6px solid var(--pp-accent);
    border-radius: 8px 18px 18px 8px;
    padding: 30px 30px 26px; height: 100%;
    box-shadow: 0 8px 24px rgba(15,23,42,.05);
    position: relative;
    transition: transform .3s ease, box-shadow .3s ease;
}
.svc-panel-f:hover { transform: translateY(-5px); box-shadow: 0 18px 40px rgba(15,23,42,.1); }
.svc-panel-f__num {
    position: absolute; top: 22px; right: 26px;
    font-size: 1.6rem; font-weight: 900;
    color: color-mix(in srgb, var(--pp-accent) 22%, transparent);
    font-variant-numeric: tabular-nums;
}
.svc-panel-f__title { font-size: 1.12rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 12px; padding-right: 60px; }
.svc-panel-f__desc { font-size: .92rem; color: var(--ssc-gray-500); line-height: 1.74; margin: 0; }

/* =============================================
   TEAM — base + per-layout variants
============================================= */
.pp-team { background: #fff; }
.svc--b .pp-team, .svc--e .pp-team { background: #fff; }
.pp-team-card {
    background: #fff; border: 1px solid #e5e7eb; border-radius: 22px;
    overflow: hidden; height: 100%;
    transition: transform .4s cubic-bezier(.2,.7,.3,1), box-shadow .4s ease;
}
.pp-team-card:hover { transform: translateY(-10px); box-shadow: 0 30px 60px rgba(15, 23, 42, .12); }
.pp-team-card__img-wrap { position: relative; aspect-ratio: 1 / 1; overflow: hidden; background: linear-gradient(135deg, #f3f4f6, #e5e7eb); }
.pp-team-card__img-wrap img { width: 100%; height: 100%; object-fit: cover; transition: transform .6s cubic-bezier(.2,.7,.3,1); }
.pp-team-card:hover .pp-team-card__img-wrap img { transform: scale(1.06); }
.pp-team-card__img-overlay { position: absolute; inset: 0; background: linear-gradient(to bottom, transparent 50%, rgba(15,23,42,.45) 100%); pointer-events: none; }
.pp-team-card__body { padding: 26px 26px 28px; }
.pp-team-card__name { font-size: 1.25rem; font-weight: 800; color: var(--ssc-dark); margin: 0 0 4px; }
.pp-team-card__role { display: inline-block; font-size: .75rem; font-weight: 700; color: var(--pp-accent); text-transform: uppercase; letter-spacing: .12em; margin-bottom: 14px; }
.pp-team-card__desc { font-size: .9rem; color: var(--ssc-gray-500); line-height: 1.7; margin: 0; }

/* B/D — horizontal team cards */
.svc--b .pp-team-card, .svc--d .pp-team-card { display: flex; align-items: stretch; }
.svc--b .pp-team-card__img-wrap, .svc--d .pp-team-card__img-wrap { width: 42%; flex-shrink: 0; aspect-ratio: auto; min-height: 240px; }
.svc--b .pp-team-card__img-overlay, .svc--d .pp-team-card__img-overlay { background: linear-gradient(to right, transparent 60%, rgba(15,23,42,.18) 100%); }
.svc--b .pp-team-card__body, .svc--d .pp-team-card__body { display: flex; flex-direction: column; justify-content: center; }
/* C — circle avatars */
.svc--c .pp-team-card { text-align: center; border: none; box-shadow: 0 10px 30px rgba(15,23,42,.06); }
.svc--c .pp-team-card__img-wrap {
    width: 180px; height: 180px; aspect-ratio: auto;
    border-radius: 50%; margin: 32px auto 0;
    border: 5px solid color-mix(in srgb, var(--pp-accent) 30%, transparent);
}
.svc--c .pp-team-card__img-overlay { display: none; }
/* E — extra rounded */
.svc--e .pp-team-card { border-radius: 30px; border-color: color-mix(in srgb, var(--pp-accent) 20%, transparent); }
/* F — grayscale to colour */
.svc--f .pp-team-card { border-radius: 12px; }
.svc--f .pp-team-card__img-wrap img { filter: grayscale(60%); }
.svc--f .pp-team-card:hover .pp-team-card__img-wrap img { filter: grayscale(0); }

/* =============================================
   PROCESS A — dark vertical timeline
============================================= */
.pp-process {
    background: linear-gradient(135deg, #0a0e2e 0%, #1a1138 100%);
    color: #fff; position: relative;
}
.pp-process::before {
    content: ''; position: absolute; inset: 0;
    background-image: radial-gradient(rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 36px 36px; pointer-events: none;
}
.pp-process .container { position: relative; z-index: 2; }
.pp-process__timeline { max-width: 880px; margin: 0 auto; position: relative; }
.pp-process__timeline::before {
    content: ''; position: absolute; top: 0; bottom: 0; left: 35px; width: 2px;
    background: linear-gradient(180deg, var(--pp-accent), color-mix(in srgb, var(--pp-accent) 30%, transparent), transparent);
}
.pp-process__step { display: flex; gap: 28px; margin-bottom: 36px; align-items: flex-start; position: relative; }
.pp-process__step:last-child { margin-bottom: 0; }
.pp-process__step-marker {
    width: 72px; height: 72px;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    border-radius: 18px; display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; box-shadow: 0 12px 28px color-mix(in srgb, var(--pp-accent) 40%, transparent);
    position: relative; z-index: 2; border: 4px solid #0a0e2e;
}
.pp-process__step-marker span { font-size: 1.4rem; font-weight: 900; color: #fff; font-variant-numeric: tabular-nums; }
.pp-process__step-body {
    flex: 1; background: rgba(255,255,255,.04);
    border: 1px solid rgba(255,255,255,.1); border-radius: 16px; padding: 22px 26px;
    transition: background .3s ease, border-color .3s ease;
}
.pp-process__step:hover .pp-process__step-body { background: rgba(255,255,255,.07); border-color: color-mix(in srgb, var(--pp-accent) 35%, transparent); }
.pp-process__step-title { font-size: 1.15rem; font-weight: 800; color: #fff; margin-bottom: 8px; }
.pp-process__step-desc { font-size: .94rem; color: rgba(255,255,255,.7); line-height: 1.75; margin: 0; }

/* =============================================
   PROCESS B — horizontal cards
============================================= */
.svc-proc-b-wrap { background: #f6fbf9; }
.svc-proc-b { display: grid; grid-template-columns: repeat(5, 1fr); gap: 18px; position: relative; }
.svc-proc-b::before {
    content: ''; position: absolute; top: 26px; left: 6%; right: 6%; height: 3px;
    background: linear-gradient(90deg, var(--pp-accent), color-mix(in srgb, var(--pp-accent) 25%, transparent));
    border-radius: 3px; z-index: 0;
}
.svc-proc-b__step {
    position: relative; z-index: 1;
    background: #fff; border: 1px solid #e5e7eb; border-radius: 18px;
    padding: 0 20px 24px; text-align: center;
    transition: transform .3s ease, box-shadow .3s ease;
}
.svc-proc-b__step:hover { transform: translateY(-6px); box-shadow: 0 16px 36px color-mix(in srgb, var(--pp-accent) 14%, transparent); }
.svc-proc-b__num {
    width: 52px; height: 52px; border-radius: 50%;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff; font-weight: 900;
    display: flex; align-items: center; justify-content: center;
    margin: -26px auto 16px;
    border: 4px solid #f6fbf9;
    box-shadow: 0 8px 20px color-mix(in srgb, var(--pp-accent) 30%, transparent);
}
.svc-proc-b__title { font-size: 1rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 10px; }
.svc-proc-b__desc { font-size: .82rem; color: var(--ssc-gray-500); line-height: 1.65; margin: 0; }

/* =============================================
   PROCESS C — dark center zigzag
============================================= */
.svc-proc-c-wrap {
    background:
        radial-gradient(700px 400px at 15% 110%, color-mix(in srgb, var(--pp-accent) 28%, transparent), transparent 60%),
        linear-gradient(150deg, #051b10 0%, #0a0e2e 70%);
    color: #fff;
}
.svc-proc-c { position: relative; max-width: 980px; margin: 0 auto; }
.svc-proc-c::before {
    content: ''; position: absolute; top: 0; bottom: 0; left: 50%; width: 2px;
    transform: translateX(-50%);
    background: linear-gradient(180deg, var(--pp-accent), color-mix(in srgb, var(--pp-accent) 25%, transparent));
}
.svc-proc-c__row { width: 50%; padding-right: 44px; margin-bottom: 32px; position: relative; }
.svc-proc-c__row.is-right { margin-left: 50%; padding-right: 0; padding-left: 44px; }
.svc-proc-c__row::after {
    content: ''; position: absolute; top: 28px; right: -8px;
    width: 16px; height: 16px; border-radius: 50%;
    background: var(--pp-accent);
    box-shadow: 0 0 0 5px color-mix(in srgb, var(--pp-accent) 25%, transparent);
}
.svc-proc-c__row.is-right::after { right: auto; left: -8px; }
.svc-proc-c__card {
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 18px; padding: 26px 28px;
    transition: background .3s ease, border-color .3s ease;
}
.svc-proc-c__card:hover { background: rgba(255,255,255,.09); border-color: color-mix(in srgb, var(--pp-accent) 45%, transparent); }
.svc-proc-c__num { font-size: .8rem; font-weight: 900; color: var(--pp-accent); letter-spacing: .14em; display: block; margin-bottom: 10px; }
.svc-proc-c__title { font-size: 1.12rem; font-weight: 800; color: #fff; margin-bottom: 8px; }
.svc-proc-c__desc { font-size: .9rem; color: rgba(255,255,255,.68); line-height: 1.72; margin: 0; }

/* =============================================
   PROCESS D — editorial stack
============================================= */
.svc-proc-d-wrap { background: #f8f8fc; }
.svc-proc-d__head { max-width: 820px; margin: 0 auto 30px; }
.svc-proc-d { max-width: 820px; margin: 0 auto; }
.svc-proc-d__item { display: flex; gap: 30px; align-items: flex-start; padding: 32px 0; border-top: 1px solid #e2e2ee; }
.svc-proc-d__item:last-child { border-bottom: 1px solid #e2e2ee; }
.svc-proc-d__num {
    font-size: 2.6rem; font-weight: 900; line-height: 1;
    color: color-mix(in srgb, var(--pp-accent) 35%, transparent);
    font-variant-numeric: tabular-nums; flex-shrink: 0; min-width: 70px;
}
.svc-proc-d__item:hover .svc-proc-d__num { color: var(--pp-accent); transition: color .3s ease; }
.svc-proc-d__title { font-size: 1.2rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 10px; }
.svc-proc-d__desc { font-size: .96rem; color: var(--ssc-gray-600); line-height: 1.78; margin: 0; }

/* =============================================
   PROCESS E — dotted connector cards
============================================= */
.svc-proc-e-wrap { background: #f0f9fb; }
.svc-proc-e { max-width: 860px; margin: 0 auto; position: relative; padding-left: 8px; }
.svc-proc-e::before {
    content: ''; position: absolute; top: 10px; bottom: 10px; left: 33px;
    border-left: 3px dotted color-mix(in srgb, var(--pp-accent) 50%, transparent);
}
.svc-proc-e__step { display: flex; gap: 26px; align-items: flex-start; margin-bottom: 28px; position: relative; }
.svc-proc-e__step:last-child { margin-bottom: 0; }
.svc-proc-e__marker {
    width: 54px; height: 54px; border-radius: 50%;
    background: linear-gradient(135deg, var(--pp-accent), var(--pp-accent-dark));
    color: #fff; display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; z-index: 2; position: relative;
    border: 4px solid #f0f9fb;
    box-shadow: 0 10px 24px color-mix(in srgb, var(--pp-accent) 30%, transparent);
}
.svc-proc-e__marker span { font-size: .95rem; font-weight: 900; }
.svc-proc-e__card {
    flex: 1; background: #fff; border-radius: 22px; padding: 24px 28px;
    box-shadow: 0 8px 24px rgba(8,145,178,.07);
    transition: transform .3s ease, box-shadow .3s ease;
}
.svc-proc-e__step:hover .svc-proc-e__card { transform: translateX(6px); box-shadow: 0 16px 36px color-mix(in srgb, var(--pp-accent) 16%, transparent); }
.svc-proc-e__title { font-size: 1.12rem; font-weight: 800; color: var(--ssc-dark); margin-bottom: 8px; }
.svc-proc-e__desc { font-size: .93rem; color: var(--ssc-gray-500); line-height: 1.74; margin: 0; }

/* =============================================
   PROCESS F — dark compact steps
============================================= */
.svc-proc-f-wrap {
    background: linear-gradient(120deg, #16060a 0%, #0a0e2e 80%);
    color: #fff;
}
.svc-proc-f { max-width: 860px; }
.svc-proc-f__step {
    display: flex; gap: 22px; align-items: flex-start;
    padding: 26px 0; border-bottom: 1px solid rgba(255,255,255,.1);
}
.svc-proc-f__step:last-child { border-bottom: none; }
.svc-proc-f__marker {
    width: 44px; height: 44px; border-radius: 10px; flex-shrink: 0;
    background: color-mix(in srgb, var(--pp-accent) 22%, transparent);
    border: 1px solid color-mix(in srgb, var(--pp-accent) 45%, transparent);
    color: var(--pp-accent); font-weight: 900; font-size: .9rem;
    display: flex; align-items: center; justify-content: center;
    font-variant-numeric: tabular-nums;
}
.svc-proc-f__title { font-size: 1.12rem; font-weight: 800; color: #fff; margin-bottom: 8px; }
.svc-proc-f__desc { font-size: .92rem; color: rgba(255,255,255,.65); line-height: 1.74; margin: 0; }

/* =============================================
   LIST GRID — base + per-layout variants
============================================= */
.pp-listgrid { background: #fff; }
.pp-listgrid__grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; max-width: 880px; margin: 0 auto; }
.pp-industry-pill {
    display: flex; align-items: center; gap: 12px;
    background: #f8fafc; border: 1px solid #e5e7eb; border-radius: 12px;
    padding: 14px 18px; font-size: .92rem; font-weight: 600; color: var(--ssc-gray-700);
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
    color: var(--pp-accent); border-radius: 8px;
    display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
/* B — centered rounded chips */
.svc--b .pp-listgrid { background: #f6fbf9; }
.svc--b .pp-listgrid__grid { display: flex; flex-wrap: wrap; justify-content: center; max-width: 980px; }
.svc--b .pp-industry-pill { border-radius: 50px; background: #fff; }
/* C — 3 columns */
.svc--c .pp-listgrid__grid { grid-template-columns: repeat(3, 1fr); max-width: 1080px; }
/* D — single centered column */
.svc--d .pp-listgrid { background: #f8f8fc; }
.svc--d .pp-listgrid__grid { grid-template-columns: 1fr; max-width: 640px; }
/* E — tinted rounded pills */
.svc--e .pp-industry-pill { border-radius: 50px; background: color-mix(in srgb, var(--pp-accent) 7%, #fff); border-color: color-mix(in srgb, var(--pp-accent) 20%, transparent); }

/* =============================================
   FAQ — base + per-layout variants
============================================= */
.pp-faq { background: #f8fafc; }
.svc--d .pp-faq, .svc--b .pp-faq { background: #fff; }
.pp-faq__list { display: flex; flex-direction: column; gap: 12px; }
.pp-faq__list--centered { max-width: 840px; margin: 0 auto; }
.pp-faq__item {
    background: #fff; border: 1px solid #e5e7eb; border-radius: 14px;
    overflow: hidden; transition: border-color .3s ease, background .3s ease;
}
.pp-faq__item[open] { border-color: color-mix(in srgb, var(--pp-accent) 40%, transparent); box-shadow: 0 8px 24px rgba(15,23,42,.05); }
.pp-faq__q {
    cursor: pointer; list-style: none; padding: 22px 26px;
    font-size: 1rem; font-weight: 700; color: var(--ssc-dark);
    display: flex; justify-content: space-between; align-items: center; gap: 16px;
}
.pp-faq__q::-webkit-details-marker { display: none; }
.pp-faq__icon {
    width: 32px; height: 32px;
    background: color-mix(in srgb, var(--pp-accent) 12%, transparent);
    color: var(--pp-accent); border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; transition: transform .35s ease;
}
.pp-faq__item[open] .pp-faq__icon { transform: rotate(180deg); }
.pp-faq__a { padding: 18px 26px 24px; border-top: 1px solid #f0f0f0; }
.pp-faq__a p { font-size: .94rem; color: var(--ssc-gray-600); line-height: 1.8; margin: 0; }
/* D — minimal divider style */
.svc--d .pp-faq__item { border: none; border-radius: 0; border-bottom: 1px solid #e5e7eb; background: transparent; }
.svc--d .pp-faq__item[open] { box-shadow: none; border-bottom-color: var(--pp-accent); }
.svc--d .pp-faq__q { padding-left: 0; padding-right: 0; }
.svc--d .pp-faq__a { padding-left: 0; padding-right: 0; border-top: none; }
/* E — rounded soft */
.svc--e .pp-faq { background: #f0f9fb; }
.svc--e .pp-faq__item { border-radius: 22px; border-color: transparent; box-shadow: 0 6px 18px rgba(8,145,178,.06); }
/* F — bold bordered */
.svc--f .pp-faq__item { border-width: 2px; border-radius: 8px; }
.svc--f .pp-faq__item[open] { border-color: var(--pp-accent); }

/* =============================================
   FINAL CTA — base + per-layout variants
============================================= */
.pp-final-cta {
    position: relative; overflow: hidden;
    background: linear-gradient(135deg, var(--pp-accent-dark) 0%, #0a0e2e 50%, var(--pp-accent) 130%);
    padding: 100px 0 110px; color: #fff;
}
.pp-final-cta__bg-grid {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 50px 50px; pointer-events: none;
}
.pp-final-cta__orb { position: absolute; border-radius: 50%; filter: blur(110px); pointer-events: none; }
.pp-final-cta__orb--1 { width: 500px; height: 500px; background: radial-gradient(circle, var(--pp-accent), transparent); top: -200px; left: -100px; opacity: .35; }
.pp-final-cta__orb--2 { width: 500px; height: 500px; background: radial-gradient(circle, #4f46e5, transparent); bottom: -200px; right: -100px; opacity: .3; }
.pp-final-cta__title {
    font-size: clamp(2rem, 4.5vw, 3.4rem);
    font-weight: 800; color: #fff; line-height: 1.15; letter-spacing: -0.025em;
    margin-bottom: 30px; max-width: 900px; margin-left: auto; margin-right: auto;
}
.pp-final-cta__paras { max-width: 780px; margin: 0 auto 44px; }
.pp-final-cta__paras p { color: rgba(255,255,255,.78); font-size: 1.05rem; line-height: 1.75; margin-bottom: 16px; }
.pp-final-cta__last-line { color: #fff !important; font-weight: 600 !important; }
.pp-final-cta__buttons { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
/* B/E — boxed rounded CTA */
.svc--b .pp-final-cta, .svc--e .pp-final-cta {
    border-radius: 36px;
    margin: 0 30px 70px;
}
/* C — angled top */
.svc--c .pp-final-cta { clip-path: polygon(0 60px, 100% 0, 100% 100%, 0 100%); padding-top: 140px; }
/* D — deep solid */
.svc--d .pp-final-cta { background: linear-gradient(180deg, #0a0e2e 0%, var(--pp-accent-dark) 160%); }
/* F — straight bold */
.svc--f .pp-final-cta { background: linear-gradient(120deg, #16060a 0%, var(--pp-accent-dark) 130%); }

/* =============================================
   RESPONSIVE
============================================= */
@media (max-width: 992px) {
    .pp-section { padding: 70px 0; }
    .pp-hero__title--left, .pp-hero__intro--left p { text-align: center; }
    .pp-hero__cta-row--left { justify-content: center; }
    .pp-hero__form-wrap, .svc-hero-b__form { margin-top: 30px; }
    .svc-hero-b__title { text-align: center; }
    .svc-hero-b__rule { margin-left: auto; margin-right: auto; }
    .svc-hero-b__intro p { text-align: center; }
    .svc-hero-b { text-align: center; }
    .svc-hero-e__card { padding: 44px 28px; }
    .svc-proc-b { grid-template-columns: 1fr; gap: 40px; }
    .svc-proc-b::before { display: none; }
    .svc-proc-c::before { left: 18px; transform: none; }
    .svc-proc-c__row, .svc-proc-c__row.is-right { width: 100%; margin-left: 0; padding: 0 0 0 48px; }
    .svc-proc-c__row::after, .svc-proc-c__row.is-right::after { left: 10px; right: auto; }
    .svc-zigrow, .svc-zigrow--alt { flex-direction: column; text-align: center; padding: 30px 24px; gap: 24px; }
    .svc--c .pp-listgrid__grid { grid-template-columns: repeat(2, 1fr); }
    .svc--b .pp-final-cta, .svc--e .pp-final-cta { margin: 0 14px 50px; border-radius: 26px; }
}
@media (max-width: 768px) {
    .pp-hero { padding: 60px 0 80px; }
    .svc-hero-f { padding: 60px 0 70px; }
    .pp-listgrid__grid { grid-template-columns: 1fr; }
    .pp-process__timeline::before { left: 24px; }
    .pp-process__step-marker { width: 50px; height: 50px; border-radius: 14px; }
    .pp-process__step-marker span { font-size: 1rem; }
    .pp-process__step { gap: 16px; }
    .svc--b .pp-team-card, .svc--d .pp-team-card { flex-direction: column; }
    .svc--b .pp-team-card__img-wrap, .svc--d .pp-team-card__img-wrap { width: 100%; aspect-ratio: 1 / 1; }
    .svc-mag__item, .svc-proc-d__item { flex-direction: column; gap: 12px; }
    .svc-stripe { flex-direction: column; text-align: center; }
    .svc-stripe__check { margin: 0 auto; }
    .pp-final-cta { padding: 70px 0 80px; }
}
@media (max-width: 480px) {
    .pp-hero__cta-row .pp-btn, .pp-final-cta__buttons .pp-btn { width: 100%; justify-content: center; }
}
@media (prefers-reduced-motion: reduce) {
    .pp-service-card, .pp-choose-card, .pp-team-card, .pp-industry-pill, .pp-btn,
    .svc-zigrow, .svc-card-c, .svc-card-e, .svc-card-f, .svc-stripe, .svc-checkitem,
    .svc-pastel, .svc-panel-f, .svc-proc-b__step, .svc-proc-e__card { transition: none; animation: none; }
}
</style>

<?php get_footer(); ?>
