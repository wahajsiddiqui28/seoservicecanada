<?php

/**
 * Template Name: Province SEO Page
 * Template Post Type: page
 *
 * Premium template for province-level SEO landing pages.
 * 3 layout variants (a, b, c) for unique pages per province.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

/* ── Resolve province data ─────────────────────────────────────────────── */
$province_key = get_post_meta(get_the_ID(), '_ssc_province_key', true);

if (!$province_key) {
    $slug = get_post_field('post_name', get_the_ID());
    foreach (array('seo-services-in-', 'seo-services-', 'seo-') as $pfx) {
        if (strpos($slug, $pfx) === 0) {
            $province_key = substr($slug, strlen($pfx));
            break;
        }
    }
    if (!$province_key) {
        $province_key = $slug;
    }
}

$prov = ssc_get_province_data($province_key);

if (!$prov) {
    get_template_part('404');
    get_footer();
    return;
}

$name        = esc_html($prov['name']);
$contact_url = esc_url(home_url('/contact/'));
$layout      = isset($prov['layout']) ? $prov['layout'] : 'a';
$accent      = isset($prov['accent']) ? $prov['accent'] : '#302e9d';
$theme_uri   = esc_url(get_template_directory_uri());

/* ── Service icon SVGs ─────────────────────────────────────────────────── */
$service_icons = array(
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>',
);

/* ── Choose icons ──────────────────────────────────────────────────────── */
$choose_icons = array(
    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path></svg>',
    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20V10"></path><path d="M18 20V4"></path><path d="M6 20v-4"></path></svg>',
    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>',
    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>',
    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>',
    '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
);

/* ── Chevron SVG for breadcrumb ────────────────────────────────────────── */
$chevron = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>';
?>

<!-- ====================================================================
     PROVINCE PAGE WRAPPER — Layout <?php echo strtoupper($layout); ?>

     ==================================================================== -->
<div class="ssc-prov ssc-prov--<?php echo esc_attr($layout); ?>" style="--prov-accent: <?php echo esc_attr($accent); ?>;">

<!-- ====================================================================
     HERO SECTION
     ==================================================================== -->
<section class="ssc-prov-hero">
    <div class="ssc-prov-hero__bg">
        <!-- Background Image — Replace src with your province image -->
        <img class="ssc-prov-hero__bg-img" src="<?php echo $theme_uri; ?>/assets/images/provinces/<?php echo esc_attr($province_key); ?>-hero.jpg" alt="SEO Services in <?php echo $name; ?>" onerror="this.style.display='none'">
        <div class="ssc-prov-hero__overlay"></div>
        <div class="ssc-prov-hero__pattern"></div>
        <div class="ssc-prov-hero__blob ssc-prov-hero__blob--1"></div>
        <div class="ssc-prov-hero__blob ssc-prov-hero__blob--2"></div>
        <div class="ssc-prov-hero__blob ssc-prov-hero__blob--3"></div>
    </div>

    <?php if ($layout === 'b') : ?>
    <!-- Layout B: Split hero — text left, image right -->
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <nav class="ssc-prov-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        Home
                    </a>
                    <?php echo $chevron; ?>
                    <a href="<?php echo esc_url(home_url('/locations/')); ?>">Locations</a>
                    <?php echo $chevron; ?>
                    <span aria-current="page"><?php echo $name; ?></span>
                </nav>
                <h1 class="ssc-prov-hero__title ssc-prov-hero__title--left">
                    SEO Services in <br><span class="ssc-prov-hero__title-accent"><?php echo $name; ?></span>
                </h1>
                <p class="ssc-prov-hero__subtitle ssc-prov-hero__subtitle--left">Grow Your Business with Local SEO</p>
                <p class="ssc-prov-hero__intro ssc-prov-hero__intro--left"><?php echo esc_html($prov['hero_intro']); ?></p>
                <div class="ssc-prov-hero__actions ssc-prov-hero__actions--left">
                    <a href="<?php echo $contact_url; ?>" class="btn ssc-btn-primary ssc-prov-btn--glow">
                        <?php echo esc_html($prov['hero_cta']); ?>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div class="ssc-prov-hero__image-card">
                    <!-- Replace src with your province image -->
                    <img src="<?php echo $theme_uri; ?>/assets/images/provinces/<?php echo esc_attr($province_key); ?>-side.jpg" alt="<?php echo $name; ?> SEO" onerror="this.closest('.ssc-prov-hero__image-card').style.display='none'">
                </div>
            </div>
        </div>
    </div>

    <?php elseif ($layout === 'c') : ?>
    <!-- Layout C: Bold hero — large title with background emphasis -->
    <div class="container position-relative">
        <nav class="ssc-prov-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Home
            </a>
            <?php echo $chevron; ?>
            <a href="<?php echo esc_url(home_url('/locations/')); ?>">Locations</a>
            <?php echo $chevron; ?>
            <span aria-current="page"><?php echo $name; ?></span>
        </nav>
        <p class="ssc-prov-hero__kicker">SEO Services in</p>
        <h1 class="ssc-prov-hero__title ssc-prov-hero__title--bold">
            <?php echo $name; ?>
        </h1>
        <p class="ssc-prov-hero__subtitle">Grow Your Business with Local SEO</p>
        <p class="ssc-prov-hero__intro"><?php echo esc_html($prov['hero_intro']); ?></p>
        <div class="ssc-prov-hero__actions">
            <a href="<?php echo $contact_url; ?>" class="btn ssc-btn-primary ssc-prov-btn--glow">
                <?php echo esc_html($prov['hero_cta']); ?>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="tel:<?php echo esc_attr(SSC_PHONE_RAW); ?>" class="btn ssc-prov-btn--phone">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <?php echo esc_html(SSC_PHONE); ?>
            </a>
        </div>
    </div>

    <?php else : ?>
    <!-- Layout A: Centered hero (default) -->
    <div class="container position-relative">
        <nav class="ssc-prov-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Home
            </a>
            <?php echo $chevron; ?>
            <a href="<?php echo esc_url(home_url('/locations/')); ?>">Locations</a>
            <?php echo $chevron; ?>
            <span aria-current="page"><?php echo $name; ?></span>
        </nav>
        <h1 class="ssc-prov-hero__title">
            SEO Services in <span class="ssc-prov-hero__title-accent"><?php echo $name; ?></span>
        </h1>
        <p class="ssc-prov-hero__subtitle">Grow Your Business with Local SEO</p>
        <p class="ssc-prov-hero__intro"><?php echo esc_html($prov['hero_intro']); ?></p>
        <div class="ssc-prov-hero__actions">
            <a href="<?php echo $contact_url; ?>" class="btn ssc-btn-primary ssc-prov-btn--glow">
                <?php echo esc_html($prov['hero_cta']); ?>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
    <?php endif; ?>
</section>

<!-- ====================================================================
     IMAGE SHOWCASE — Replace src with your province images
     ==================================================================== -->
<section class="ssc-prov-showcase">
    <div class="container">
        <div class="ssc-prov-showcase__grid ssc-prov-showcase__grid--<?php echo esc_attr($layout); ?>">
            <div class="ssc-prov-showcase__item ssc-prov-showcase__item--main">
                <img src="<?php echo $theme_uri; ?>/assets/images/provinces/<?php echo esc_attr($province_key); ?>-1.jpg" alt="SEO Services in <?php echo $name; ?>" onerror="this.closest('.ssc-prov-showcase').style.display='none'">
            </div>
            <div class="ssc-prov-showcase__item">
                <img src="<?php echo $theme_uri; ?>/assets/images/provinces/<?php echo esc_attr($province_key); ?>-2.jpg" alt="<?php echo $name; ?> Business Growth" onerror="this.style.display='none'">
            </div>
            <div class="ssc-prov-showcase__item">
                <img src="<?php echo $theme_uri; ?>/assets/images/provinces/<?php echo esc_attr($province_key); ?>-3.jpg" alt="<?php echo $name; ?> Local SEO" onerror="this.style.display='none'">
            </div>
        </div>
    </div>
</section>

<!-- ====================================================================
     WHY SEO MATTERS
     ==================================================================== -->
<section class="ssc-prov-section ssc-prov-section--alt" id="why-seo">
    <div class="container">
        <div class="ssc-prov-section__header">
            <span class="ssc-prov-section__badge">Why It Matters</span>
            <h2 class="ssc-prov-section__title"><?php echo esc_html($prov['why_title']); ?></h2>
        </div>
        <div class="ssc-prov-why__content">
            <?php foreach ($prov['why_paragraphs'] as $para) : ?>
                <p><?php echo esc_html($para); ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====================================================================
     OUR SEO SERVICES
     ==================================================================== -->
<section class="ssc-prov-section" id="services">
    <div class="container">
        <div class="ssc-prov-section__header">
            <span class="ssc-prov-section__badge">What We Do</span>
            <h2 class="ssc-prov-section__title"><?php echo esc_html($prov['services_title']); ?></h2>
        </div>
        <div class="ssc-prov-services__grid">
            <?php foreach ($prov['services'] as $i => $service) : ?>
                <div class="ssc-prov-service-card">
                    <div class="ssc-prov-service-card__icon">
                        <?php echo $service_icons[$i]; ?>
                    </div>
                    <h3 class="ssc-prov-service-card__title"><?php echo esc_html($service['title']); ?></h3>
                    <p class="ssc-prov-service-card__desc"><?php echo esc_html($service['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====================================================================
     WHY CHOOSE US
     ==================================================================== -->
<section class="ssc-prov-section ssc-prov-section--gradient" id="why-choose">
    <div class="container">
        <div class="ssc-prov-section__header ssc-prov-section__header--light">
            <span class="ssc-prov-section__badge ssc-prov-section__badge--light">Why Us</span>
            <h2 class="ssc-prov-section__title"><?php echo esc_html($prov['choose_title']); ?></h2>
        </div>
        <div class="ssc-prov-choose__grid">
            <?php foreach ($prov['choose_items'] as $i => $item) : ?>
                <div class="ssc-prov-choose-card">
                    <div class="ssc-prov-choose-card__icon">
                        <?php echo $choose_icons[$i]; ?>
                    </div>
                    <div class="ssc-prov-choose-card__body">
                        <h3 class="ssc-prov-choose-card__title"><?php echo esc_html($item['title']); ?></h3>
                        <p class="ssc-prov-choose-card__desc"><?php echo esc_html($item['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="ssc-prov-choose__cta">
            <a href="<?php echo $contact_url; ?>" class="btn ssc-btn-primary ssc-prov-btn--glow">
                <?php echo esc_html($prov['choose_cta']); ?>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<!-- ====================================================================
     OUR PROCESS
     ==================================================================== -->
<section class="ssc-prov-section" id="process">
    <div class="container">
        <div class="ssc-prov-section__header">
            <span class="ssc-prov-section__badge">How We Work</span>
            <h2 class="ssc-prov-section__title"><?php echo esc_html($prov['process_title']); ?></h2>
        </div>
        <div class="ssc-prov-process__timeline">
            <?php foreach ($prov['process_steps'] as $i => $step) : ?>
                <div class="ssc-prov-process-step">
                    <div class="ssc-prov-process-step__number">
                        <span><?php echo $i + 1; ?></span>
                    </div>
                    <div class="ssc-prov-process-step__connector"></div>
                    <div class="ssc-prov-process-step__body">
                        <h3 class="ssc-prov-process-step__title"><?php echo esc_html($step['title']); ?></h3>
                        <p class="ssc-prov-process-step__desc"><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====================================================================
     INDUSTRIES WE SERVE
     ==================================================================== -->
<section class="ssc-prov-section ssc-prov-section--alt" id="industries">
    <div class="container">
        <div class="ssc-prov-section__header">
            <span class="ssc-prov-section__badge">Industries</span>
            <h2 class="ssc-prov-section__title"><?php echo esc_html($prov['industries_title']); ?></h2>
        </div>
        <div class="ssc-prov-industries__grid">
            <?php foreach ($prov['industries'] as $industry) : ?>
                <div class="ssc-prov-industry-tag">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <?php echo esc_html($industry); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====================================================================
     CITIES WE SERVE
     ==================================================================== -->
<section class="ssc-prov-section" id="cities">
    <div class="container">
        <div class="ssc-prov-section__header">
            <span class="ssc-prov-section__badge">Service Areas</span>
            <h2 class="ssc-prov-section__title"><?php echo esc_html($prov['cities_title']); ?></h2>
            <p class="ssc-prov-section__subtitle"><?php echo esc_html($prov['cities_intro']); ?></p>
        </div>
        <div class="ssc-prov-cities__grid">
            <?php foreach ($prov['cities'] as $city) : ?>
                <div class="ssc-prov-city-card">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span><?php echo esc_html($city); ?></span>
                    <svg class="ssc-prov-city-card__arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====================================================================
     FAQ
     ==================================================================== -->
<section class="ssc-prov-section ssc-prov-section--alt" id="faq">
    <div class="container">
        <div class="ssc-prov-section__header">
            <span class="ssc-prov-section__badge">FAQ</span>
            <h2 class="ssc-prov-section__title"><?php echo esc_html($prov['faq_title']); ?></h2>
        </div>
        <div class="ssc-prov-faq__list">
            <?php foreach ($prov['faqs'] as $i => $faq) : ?>
                <div class="ssc-prov-faq-item<?php echo $i === 0 ? ' ssc-prov-faq-item--open' : ''; ?>">
                    <button class="ssc-prov-faq-item__trigger" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>" onclick="sscProvToggleFaq(this)">
                        <span class="ssc-prov-faq-item__question"><?php echo esc_html($faq['q']); ?></span>
                        <span class="ssc-prov-faq-item__icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        </span>
                    </button>
                    <div class="ssc-prov-faq-item__answer" <?php echo $i === 0 ? 'style="max-height:500px"' : ''; ?>>
                        <div class="ssc-prov-faq-item__answer-inner">
                            <p><?php echo esc_html($faq['a']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ====================================================================
     FINAL CTA
     ==================================================================== -->
<section class="ssc-prov-cta">
    <div class="ssc-prov-cta__bg">
        <!-- Background Image — Replace src with your CTA background -->
        <img class="ssc-prov-cta__bg-img" src="<?php echo $theme_uri; ?>/assets/images/provinces/<?php echo esc_attr($province_key); ?>-cta.jpg" alt="" onerror="this.style.display='none'">
        <div class="ssc-prov-cta__overlay"></div>
        <div class="ssc-prov-cta__blob ssc-prov-cta__blob--1"></div>
        <div class="ssc-prov-cta__blob ssc-prov-cta__blob--2"></div>
    </div>
    <div class="container position-relative">
        <h2 class="ssc-prov-cta__title"><?php echo esc_html($prov['cta_title']); ?></h2>
        <p class="ssc-prov-cta__text"><?php echo esc_html($prov['cta_text']); ?></p>
        <p class="ssc-prov-cta__line"><?php echo esc_html($prov['cta_line']); ?></p>
        <div class="ssc-prov-cta__actions">
            <a href="<?php echo $contact_url; ?>" class="btn ssc-btn-primary ssc-prov-btn--glow ssc-prov-btn--lg">
                Contact Us
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="tel:<?php echo esc_attr(SSC_PHONE_RAW); ?>" class="btn ssc-prov-btn--phone">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <?php echo esc_html(SSC_PHONE); ?>
            </a>
        </div>
    </div>
</section>

</div><!-- /.ssc-prov -->

<!-- ====================================================================
     FAQ TOGGLE SCRIPT
     ==================================================================== -->
<script>
function sscProvToggleFaq(btn) {
    var item = btn.closest('.ssc-prov-faq-item');
    var answer = item.querySelector('.ssc-prov-faq-item__answer');
    var inner = answer.querySelector('.ssc-prov-faq-item__answer-inner');
    var isOpen = item.classList.contains('ssc-prov-faq-item--open');

    document.querySelectorAll('.ssc-prov-faq-item--open').forEach(function(el) {
        el.classList.remove('ssc-prov-faq-item--open');
        el.querySelector('.ssc-prov-faq-item__trigger').setAttribute('aria-expanded', 'false');
        el.querySelector('.ssc-prov-faq-item__answer').style.maxHeight = null;
    });

    if (!isOpen) {
        item.classList.add('ssc-prov-faq-item--open');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = inner.scrollHeight + 40 + 'px';
    }
}
</script>

<?php get_footer(); ?>
