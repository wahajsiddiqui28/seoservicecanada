<?php

/**
 * Section: Service Areas — Canada Locations
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

$provinces = array(
    array(
        'name'   => 'Ontario',
        'abbr'   => 'ON',
        'color'  => '#302e9d',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
        'slug'   => 'ontario',
        'cities' => array('Toronto','Ottawa','Mississauga','Brampton','Hamilton','London','Markham','Vaughan','Kitchener','Windsor','Barrie','Sudbury','Thunder Bay','Kingston','Guelph','Oshawa','St. Catharines','North York','Scarborough','Etobicoke'),
    ),
    array(
        'name'   => 'British Columbia',
        'abbr'   => 'BC',
        'color'  => '#0e7c61',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l4-8 4 5 3-3 4 6"/><path d="M2 20h20"/></svg>',
        'slug'   => 'british-columbia',
        'cities' => array('Vancouver','Surrey','Burnaby','Richmond','Kelowna','Abbotsford','Victoria','Langley','Coquitlam','Kamloops','Prince George','Nanaimo','Chilliwack','Maple Ridge','New Westminster'),
    ),
    array(
        'name'   => 'Alberta',
        'abbr'   => 'AB',
        'color'  => '#c2410c',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
        'slug'   => 'alberta',
        'cities' => array('Calgary','Edmonton','Red Deer','Lethbridge','St. Albert','Medicine Hat','Grande Prairie','Airdrie','Spruce Grove','Fort McMurray','Leduc','Sherwood Park'),
    ),
    array(
        'name'   => 'Quebec',
        'abbr'   => 'QC',
        'color'  => '#1d4ed8',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
        'slug'   => 'quebec',
        'cities' => array('Montreal','Quebec City','Laval','Longueuil','Gatineau','Sherbrooke','Saguenay','Levis','Trois-Rivieres','Terrebonne','Repentigny'),
    ),
    array(
        'name'   => 'Saskatchewan',
        'abbr'   => 'SK',
        'color'  => '#b45309',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>',
        'slug'   => 'saskatchewan',
        'cities' => array('Saskatoon','Regina','Prince Albert','Moose Jaw','Swift Current','Yorkton','North Battleford','Estevan','Weyburn','Lloydminster','Martensville','Warman'),
    ),
    array(
        'name'   => 'Manitoba',
        'abbr'   => 'MB',
        'color'  => '#7c3aed',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
        'slug'   => 'manitoba',
        'cities' => array('Winnipeg','Brandon','Steinbach','Thompson','Portage la Prairie','Winkler','Selkirk','Morden','Dauphin','Flin Flon','The Pas'),
    ),
    array(
        'name'   => 'Nova Scotia',
        'abbr'   => 'NS',
        'color'  => '#0369a1',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
        'slug'   => 'nova-scotia',
        'cities' => array('Halifax','Dartmouth','Sydney','Truro','New Glasgow','Bridgewater','Amherst','Yarmouth','Antigonish','Windsor','Wolfville'),
    ),
    array(
        'name'   => 'New Brunswick',
        'abbr'   => 'NB',
        'color'  => '#15803d',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
        'slug'   => 'new-brunswick',
        'cities' => array('Moncton','Saint John','Fredericton','Dieppe','Bathurst','Miramichi','Riverview','Edmundston','Campbellton','Sussex','Sackville'),
    ),
    array(
        'name'   => 'Newfoundland & Labrador',
        'abbr'   => 'NL',
        'color'  => '#0891b2',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'slug'   => 'newfoundland-and-labrador',
        'cities' => array("St. John's",'Mount Pearl','Corner Brook','Conception Bay South','Grand Falls-Windsor','Gander','Happy Valley-Goose Bay','Labrador City','Carbonear','Stephenville'),
    ),
    array(
        'name'   => 'Prince Edward Island',
        'abbr'   => 'PEI',
        'color'  => '#dc2626',
        'icon'   => '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'slug'   => 'prince-edward-island',
        'cities' => array('Charlottetown','Summerside','Stratford','Cornwall','Montague','Kensington','Souris','Alberton','Georgetown'),
    ),
);

$total_cities = array_sum(array_map(fn($p) => count($p['cities']), $provinces));
?>

<!-- =============================================
     LOCATIONS SECTION
============================================= -->
<section class="ssc-locations-section" id="service-areas" aria-labelledby="locations-heading">

    <div class="ssc-loc-bg-map" aria-hidden="true"></div>
    <div class="ssc-loc-orb ssc-loc-orb--1" aria-hidden="true"></div>
    <div class="ssc-loc-orb ssc-loc-orb--2" aria-hidden="true"></div>

    <div class="container position-relative z-2">

        <!-- Section Header -->
        <div class="ssc-loc-header text-center">
            <span class="ssc-loc-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Serving All of Canada
            </span>
            <h2 id="locations-heading" class="ssc-loc-title">
                SEO Services Across<br>
                <span class="ssc-loc-title-gradient">Every Province &amp; City</span>
            </h2>
            <p class="ssc-loc-subtitle">
                From coast to coast — we deliver high-performance SEO strategies to businesses in every major Canadian city and province. Your location is our expertise.
            </p>

            <!-- Coverage Stats -->
            <div class="ssc-loc-stats">
                <div class="ssc-loc-stat">
                    <span class="ssc-loc-stat__num">10</span>
                    <span class="ssc-loc-stat__label">Provinces</span>
                </div>
                <div class="ssc-loc-stat__sep"></div>
                <div class="ssc-loc-stat">
                    <span class="ssc-loc-stat__num"><?php echo $total_cities; ?>+</span>
                    <span class="ssc-loc-stat__label">Cities Covered</span>
                </div>
                <div class="ssc-loc-stat__sep"></div>
                <div class="ssc-loc-stat">
                    <span class="ssc-loc-stat__num">CA</span>
                    <span class="ssc-loc-stat__label">100% Canadian</span>
                </div>
            </div>
        </div>

        <!-- Province Cards Grid -->
        <div class="ssc-loc-grid">
            <?php foreach ($provinces as $province) :
                $show_cities = array_slice($province['cities'], 0, 8);
                $remaining   = count($province['cities']) - count($show_cities);
            ?>
            <div class="ssc-loc-card" style="--loc-accent: <?php echo esc_attr($province['color']); ?>;">

                <!-- Card Header -->
                <div class="ssc-loc-card__head">
                    <div class="ssc-loc-card__icon">
                        <?php echo $province['icon']; ?>
                    </div>
                    <div class="ssc-loc-card__info">
                        <h3 class="ssc-loc-card__province"><?php echo esc_html($province['name']); ?></h3>
                        <span class="ssc-loc-card__abbr"><?php echo esc_html($province['abbr']); ?></span>
                    </div>
                    <div class="ssc-loc-card__count">
                        <span><?php echo count($province['cities']); ?></span>
                        <small>Cities</small>
                    </div>
                </div>

                <!-- Cities Tags -->
                <div class="ssc-loc-card__cities">
                    <?php foreach ($show_cities as $city) : ?>
                        <span class="ssc-loc-city-tag">
                            <svg width="8" height="8" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
                            <?php echo esc_html($city); ?>
                        </span>
                    <?php endforeach; ?>
                    <?php if ($remaining > 0) : ?>
                        <span class="ssc-loc-city-more">+<?php echo $remaining; ?> more</span>
                    <?php endif; ?>
                </div>

                <!-- Card Footer -->
                <div class="ssc-loc-card__foot">
                    <a href="<?php echo esc_url(home_url('/seo-services-' . $province['slug'] . '/')); ?>" class="ssc-loc-card__link">
                        SEO in <?php echo esc_html($province['abbr']); ?>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>

                <div class="ssc-loc-card__accent-line"></div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom CTA -->
        <div class="ssc-loc-cta-wrap text-center">
            <p class="ssc-loc-cta-text">Don't see your city? We serve businesses <strong>nationwide</strong> — reach out and we'll build a strategy for your market.</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-btn-primary text-decoration-none px-5 py-3 rounded-pill fw-bold d-inline-flex align-items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Check Your City
            </a>
        </div>

    </div>
</section>

<style>
/* =============================================
   LOCATIONS SECTION STYLES
============================================= */
.ssc-locations-section {
    position: relative;
    background: #0b0f2e;
    padding: 100px 0 90px;
    overflow: hidden;
}
.ssc-loc-bg-map {
    position: absolute; inset: 0;
    background-image: radial-gradient(rgba(255,255,255,.06) 1px, transparent 1px);
    background-size: 32px 32px;
    pointer-events: none;
}
.ssc-loc-orb {
    position: absolute; border-radius: 50%;
    pointer-events: none; filter: blur(100px);
}
.ssc-loc-orb--1 {
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(48,46,157,.5), transparent);
    top: -200px; left: -150px; opacity: .6;
}
.ssc-loc-orb--2 {
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(191,32,33,.35), transparent);
    bottom: -150px; right: -100px; opacity: .5;
}

/* ---- Header ---- */
.ssc-loc-header { margin-bottom: 60px; }
.ssc-loc-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.18);
    color: rgba(255,255,255,.9);
    padding: 7px 20px; border-radius: 50px;
    font-size: .75rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: .12em;
    margin-bottom: 28px; backdrop-filter: blur(6px);
}
.ssc-loc-title {
    font-size: clamp(2rem, 4.5vw, 3.2rem);
    font-weight: 800; color: #fff;
    line-height: 1.2; margin-bottom: 20px;
}
.ssc-loc-title-gradient {
    background: linear-gradient(90deg, #93c5fd, #c4b5fd, #f9a8d4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.ssc-loc-subtitle {
    font-size: 1.05rem; color: rgba(255,255,255,.6);
    max-width: 580px; margin: 0 auto 36px; line-height: 1.7;
}

/* Stats row */
.ssc-loc-stats {
    display: inline-flex; align-items: center;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 14px; padding: 14px 36px;
    backdrop-filter: blur(8px);
}
.ssc-loc-stat { display: flex; flex-direction: column; align-items: center; padding: 0 28px; }
.ssc-loc-stat__num { font-size: 1.7rem; font-weight: 900; color: #fff; line-height: 1; }
.ssc-loc-stat__label { font-size: .7rem; color: rgba(255,255,255,.5); margin-top: 4px; text-transform: uppercase; letter-spacing: .08em; }
.ssc-loc-stat__sep { width: 1px; height: 36px; background: rgba(255,255,255,.15); }

/* ---- Province Cards Grid ---- */
.ssc-loc-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px; margin-bottom: 60px;
}

/* ---- Province Card ---- */
.ssc-loc-card {
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 20px; padding: 28px 24px 24px;
    display: flex; flex-direction: column; gap: 16px;
    position: relative; overflow: hidden;
    transition: transform .35s cubic-bezier(.2,.7,.3,1), border-color .3s ease, background .3s ease;
}
.ssc-loc-card:hover {
    transform: translateY(-6px);
    border-color: var(--loc-accent, rgba(255,255,255,.3));
    background: rgba(255,255,255,.07);
}
.ssc-loc-card__accent-line {
    position: absolute; top: 0; left: 0; right: 0; height: 3px;
    background: var(--loc-accent, #302e9d);
    transform: scaleX(0); transform-origin: left;
    transition: transform .4s ease;
    border-radius: 20px 20px 0 0;
}
.ssc-loc-card:hover .ssc-loc-card__accent-line { transform: scaleX(1); }
.ssc-loc-card::before {
    content: ''; position: absolute; inset: 0; border-radius: 20px;
    background: radial-gradient(circle at 30% 0%, var(--loc-accent, #302e9d), transparent 70%);
    opacity: 0; transition: opacity .4s ease; pointer-events: none;
}
.ssc-loc-card:hover::before { opacity: .08; }

/* Card Head */
.ssc-loc-card__head { display: flex; align-items: center; gap: 12px; }
.ssc-loc-card__icon {
    width: 46px; height: 46px; flex-shrink: 0;
    background: rgba(255,255,255,.07);
    border: 1px solid rgba(255,255,255,.12);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    color: var(--loc-accent, #7dd3fc);
    transition: background .3s ease, border-color .3s ease;
}
.ssc-loc-card:hover .ssc-loc-card__icon {
    background: color-mix(in srgb, var(--loc-accent) 18%, transparent);
    border-color: color-mix(in srgb, var(--loc-accent) 40%, transparent);
}
.ssc-loc-card__info { flex: 1; min-width: 0; }
.ssc-loc-card__province {
    font-size: .95rem; font-weight: 800; color: #fff;
    margin: 0; line-height: 1.2;
    white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
}
.ssc-loc-card__abbr {
    font-size: .7rem; font-weight: 700;
    color: var(--loc-accent, rgba(255,255,255,.5));
    text-transform: uppercase; letter-spacing: .1em;
}
.ssc-loc-card__count { text-align: center; flex-shrink: 0; }
.ssc-loc-card__count span { display: block; font-size: 1.3rem; font-weight: 900; color: #fff; line-height: 1; }
.ssc-loc-card__count small { font-size: .62rem; color: rgba(255,255,255,.4); text-transform: uppercase; letter-spacing: .06em; }

/* Cities tags */
.ssc-loc-card__cities { display: flex; flex-wrap: wrap; gap: 6px; flex: 1; }
.ssc-loc-city-tag {
    display: inline-flex; align-items: center; gap: 4px;
    background: rgba(255,255,255,.06);
    border: 1px solid rgba(255,255,255,.1);
    color: rgba(255,255,255,.75);
    font-size: .72rem; padding: 4px 10px;
    border-radius: 50px; transition: all .25s ease;
}
.ssc-loc-city-tag svg { color: var(--loc-accent, #7dd3fc); opacity: .8; }
.ssc-loc-card:hover .ssc-loc-city-tag { background: rgba(255,255,255,.09); color: rgba(255,255,255,.9); }
.ssc-loc-city-more {
    display: inline-flex; align-items: center;
    background: color-mix(in srgb, var(--loc-accent) 15%, transparent);
    border: 1px solid color-mix(in srgb, var(--loc-accent) 35%, transparent);
    color: var(--loc-accent, #fff);
    font-size: .72rem; font-weight: 700;
    padding: 4px 10px; border-radius: 50px;
}

/* Card Footer */
.ssc-loc-card__foot { margin-top: auto; }
.ssc-loc-card__link {
    display: inline-flex; align-items: center; gap: 6px;
    font-size: .8rem; font-weight: 800;
    color: var(--loc-accent, #7dd3fc); text-decoration: none;
    padding: 8px 18px;
    border: 1.5px solid color-mix(in srgb, var(--loc-accent) 40%, transparent);
    border-radius: 50px; transition: all .3s ease;
    background: color-mix(in srgb, var(--loc-accent) 8%, transparent);
}
.ssc-loc-card__link:hover { background: var(--loc-accent); border-color: var(--loc-accent); color: #fff; }
.ssc-loc-card__link svg { transition: transform .3s ease; }
.ssc-loc-card__link:hover svg { transform: translateX(4px); }

/* ---- Bottom CTA ---- */
.ssc-loc-cta-wrap { border-top: 1px solid rgba(255,255,255,.1); padding-top: 48px; }
.ssc-loc-cta-text { color: rgba(255,255,255,.6); font-size: 1rem; margin-bottom: 24px; }
.ssc-loc-cta-text strong { color: rgba(255,255,255,.9); }

/* ---- Responsive ---- */
@media (max-width: 1200px) { .ssc-loc-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 900px) {
    .ssc-loc-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; }
    .ssc-locations-section { padding: 70px 0 60px; }
}
@media (max-width: 580px) {
    .ssc-loc-grid { grid-template-columns: 1fr; }
    .ssc-loc-stats { padding: 14px 20px; flex-wrap: wrap; gap: 16px; }
    .ssc-loc-stat { padding: 0 16px; }
    .ssc-loc-stat__sep { display: none; }
}
@media (prefers-reduced-motion: reduce) {
    .ssc-loc-card, .ssc-loc-card__accent-line { transition: none; }
}
</style>
