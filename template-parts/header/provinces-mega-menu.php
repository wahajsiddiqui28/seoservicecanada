<?php

/**
 * Provinces Mega Menu — Header Dropdown
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

// All 10 Canadian provinces grouped by region.
$ssc_provinces_data = array(
    'Central Canada' => array(
        array('name' => 'Ontario',          'abbr' => 'ON',  'slug' => 'ontario',                    'cities' => 20, 'color' => '#302e9d', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>', 'has_page' => true),
        array('name' => 'Quebec',           'abbr' => 'QC',  'slug' => 'quebec',                     'cities' => 11, 'color' => '#1d4ed8', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>', 'has_page' => false),
    ),
    'Prairie Provinces' => array(
        array('name' => 'Alberta',          'abbr' => 'AB',  'slug' => 'alberta',                    'cities' => 12, 'color' => '#c2410c', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>', 'has_page' => true),
        array('name' => 'Saskatchewan',     'abbr' => 'SK',  'slug' => 'saskatchewan',               'cities' => 12, 'color' => '#b45309', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>', 'has_page' => true),
        array('name' => 'Manitoba',         'abbr' => 'MB',  'slug' => 'manitoba',                   'cities' => 11, 'color' => '#7c3aed', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>', 'has_page' => false),
    ),
    'West Coast' => array(
        array('name' => 'British Columbia', 'abbr' => 'BC',  'slug' => 'british-columbia',           'cities' => 15, 'color' => '#0e7c61', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l4-8 4 5 3-3 4 6"/><path d="M2 20h20"/></svg>', 'has_page' => true),
    ),
    'Atlantic Canada' => array(
        array('name' => 'Nova Scotia',          'abbr' => 'NS',  'slug' => 'nova-scotia',                'cities' => 11, 'color' => '#0369a1', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>', 'has_page' => true),
        array('name' => 'New Brunswick',        'abbr' => 'NB',  'slug' => 'new-brunswick',              'cities' => 11, 'color' => '#15803d', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>', 'has_page' => true),
        array('name' => 'Newfoundland & Labrador', 'abbr' => 'NL', 'slug' => 'newfoundland-and-labrador', 'cities' => 10, 'color' => '#0891b2', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2v20"/></svg>', 'has_page' => false),
        array('name' => 'Prince Edward Island', 'abbr' => 'PEI', 'slug' => 'prince-edward-island',       'cities' => 9,  'color' => '#dc2626', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>', 'has_page' => false),
    ),
);

// Total stats
$total_provinces = 0;
$total_cities    = 0;
$total_pages     = 0;
foreach ($ssc_provinces_data as $region) {
    foreach ($region as $prov) {
        $total_provinces++;
        $total_cities += $prov['cities'];
        if ($prov['has_page']) $total_pages++;
    }
}
?>

<li class="nav-item ssc-pm-parent">
    <a class="nav-link ssc-pm-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Provinces
        <svg class="ssc-pm-chev" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
    </a>

    <!-- =====================================================
         PROVINCES MEGA MENU PANEL
    ======================================================== -->
    <div class="ssc-pm" id="provinces-mega-menu" aria-hidden="true">
        <div class="ssc-pm__inner">

            <!-- ===== HEADER ===== -->
            <div class="ssc-pm__header">
                <div class="ssc-pm__header-left">
                    <div class="ssc-pm__header-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div>
                        <h4 class="ssc-pm__header-title">SEO Services Across Canada</h4>
                        <p class="ssc-pm__header-sub">From coast to coast — we serve every province</p>
                    </div>
                </div>
                <div class="ssc-pm__header-stats">
                    <div class="ssc-pm__stat">
                        <span class="ssc-pm__stat-num"><?php echo $total_provinces; ?></span>
                        <span class="ssc-pm__stat-label">Provinces</span>
                    </div>
                    <div class="ssc-pm__stat-divider"></div>
                    <div class="ssc-pm__stat">
                        <span class="ssc-pm__stat-num"><?php echo $total_cities; ?>+</span>
                        <span class="ssc-pm__stat-label">Cities</span>
                    </div>
                    <div class="ssc-pm__stat-divider"></div>
                    <div class="ssc-pm__stat">
                        <span class="ssc-pm__stat-num">CA</span>
                        <span class="ssc-pm__stat-label">Canadian</span>
                    </div>
                </div>
            </div>

            <!-- ===== REGIONS GRID ===== -->
            <div class="ssc-pm__content">
                <div class="ssc-pm__regions">

                    <?php foreach ($ssc_provinces_data as $region_name => $provinces) : ?>
                        <div class="ssc-pm__region">
                            <h6 class="ssc-pm__region-title">
                                <span class="ssc-pm__region-dot"></span>
                                <?php echo esc_html($region_name); ?>
                            </h6>
                            <div class="ssc-pm__province-list">
                                <?php foreach ($provinces as $prov) :
                                    $url = $prov['has_page']
                                        ? home_url('/' . $prov['slug'] . '-seo-services/')
                                        : '#';
                                ?>
                                    <a href="<?php echo esc_url($url); ?>" class="ssc-pm__province-card" style="--prov-accent: <?php echo esc_attr($prov['color']); ?>;" <?php echo !$prov['has_page'] ? 'data-coming-soon="true"' : ''; ?>>
                                        <div class="ssc-pm__province-icon">
                                            <?php echo $prov['icon']; ?>
                                        </div>
                                        <div class="ssc-pm__province-info">
                                            <div class="ssc-pm__province-name">
                                                <?php echo esc_html($prov['name']); ?>
                                                <span class="ssc-pm__province-abbr"><?php echo esc_html($prov['abbr']); ?></span>
                                            </div>
                                            <div class="ssc-pm__province-meta">
                                                <svg width="11" height="11" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
                                                <?php echo $prov['cities']; ?> cities
                                                <?php if (!$prov['has_page']) : ?>
                                                    <span class="ssc-pm__coming-soon">Coming Soon</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="ssc-pm__province-arrow">
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>

            <!-- ===== FOOTER ===== -->
            <div class="ssc-pm__footer">
                <p class="ssc-pm__footer-text">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Don't see your city? We serve businesses <strong>nationwide</strong>
                </p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="ssc-pm__footer-cta">
                    Contact Us
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

        </div>
    </div>
</li>

<style>
/* =============================================
   PROVINCES MEGA MENU — Theme: Blue + Red
============================================= */
.ssc-pm-parent {
    position: static;
}

.ssc-pm-toggle {
    display: inline-flex !important;
    align-items: center;
    gap: 6px;
}
.ssc-pm-chev {
    transition: transform .25s ease;
}
.ssc-pm-parent:hover .ssc-pm-chev,
.ssc-pm-parent.is-open .ssc-pm-chev {
    transform: rotate(180deg);
}

/* Mega menu container */
.ssc-pm {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
    margin: 0 auto;
    padding: 0 16px;
    z-index: 1050;
    opacity: 0;
    visibility: hidden;
    transform: translateY(8px);
    pointer-events: none;
    transition: opacity .25s ease, transform .25s ease, visibility .25s;
}

/* Invisible hover bridge */
.ssc-pm::before {
    content: '';
    position: absolute;
    top: -20px;
    left: 0;
    right: 0;
    height: 24px;
    background: transparent;
}

.ssc-pm-parent.is-open > .ssc-pm {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    pointer-events: auto;
}

.ssc-pm__inner {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 20px;
    box-shadow: 0 30px 80px rgba(48, 46, 157, 0.15);
    overflow: hidden;
    max-width: 1280px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    max-height: 85vh;
}

/* ===== HEADER ===== */
.ssc-pm__header {
    background: linear-gradient(135deg, #302e9d 0%, #1e1b4b 50%, #bf2021 130%);
    color: #fff;
    padding: 22px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    position: relative;
    overflow: hidden;
}
.ssc-pm__header::before {
    content: '';
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.04) 1px, transparent 1px);
    background-size: 32px 32px;
    pointer-events: none;
}
.ssc-pm__header-left {
    display: flex;
    align-items: center;
    gap: 16px;
    position: relative;
    z-index: 1;
}
.ssc-pm__header-icon {
    width: 50px;
    height: 50px;
    background: rgba(255,255,255,.15);
    border: 1px solid rgba(255,255,255,.25);
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(8px);
    flex-shrink: 0;
}
.ssc-pm__header-title {
    font-size: 1.15rem;
    font-weight: 800;
    color: #fff;
    margin: 0 0 2px;
    line-height: 1.2;
    letter-spacing: -0.01em;
}
.ssc-pm__header-sub {
    font-size: 0.78rem;
    color: rgba(255,255,255,.7);
    margin: 0;
    font-weight: 500;
}

/* Stats */
.ssc-pm__header-stats {
    display: flex;
    align-items: center;
    background: rgba(255,255,255,.08);
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 12px;
    padding: 10px 18px;
    backdrop-filter: blur(8px);
    position: relative;
    z-index: 1;
    flex-shrink: 0;
}
.ssc-pm__stat {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 16px;
}
.ssc-pm__stat-num {
    font-size: 1.1rem;
    font-weight: 900;
    color: #fff;
    line-height: 1;
}
.ssc-pm__stat-label {
    font-size: 0.62rem;
    color: rgba(255,255,255,.6);
    margin-top: 3px;
    text-transform: uppercase;
    letter-spacing: 0.08em;
}
.ssc-pm__stat-divider {
    width: 1px;
    height: 26px;
    background: rgba(255,255,255,.2);
}

/* ===== CONTENT ===== */
.ssc-pm__content {
    padding: 24px 28px;
    overflow-y: auto;
    flex: 1;
}
.ssc-pm__regions {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
}
.ssc-pm__region {
    display: flex;
    flex-direction: column;
}
.ssc-pm__region-title {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.7rem;
    font-weight: 800;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.16em;
    margin: 0 0 14px;
    padding-bottom: 10px;
    border-bottom: 2px solid #f1f5f9;
}
.ssc-pm__region-dot {
    width: 6px;
    height: 6px;
    background: linear-gradient(135deg, #302e9d, #bf2021);
    border-radius: 50%;
}
.ssc-pm__province-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

/* Province Card */
.ssc-pm__province-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 14px;
    background: #fafbfc;
    border: 1px solid #eef0f4;
    border-radius: 12px;
    text-decoration: none;
    color: inherit;
    transition: all .25s ease;
    position: relative;
    overflow: hidden;
}
.ssc-pm__province-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 3px;
    background: var(--prov-accent, #302e9d);
    opacity: 0;
    transition: opacity .25s ease;
}
.ssc-pm__province-card:hover {
    background: #fff;
    border-color: var(--prov-accent, #302e9d);
    transform: translateX(2px);
    box-shadow: 0 8px 20px color-mix(in srgb, var(--prov-accent, #302e9d) 14%, transparent);
    color: inherit;
}
.ssc-pm__province-card:hover::before {
    opacity: 1;
}

/* Coming Soon Style */
.ssc-pm__province-card[data-coming-soon="true"] {
    opacity: 0.65;
}
.ssc-pm__province-card[data-coming-soon="true"]:hover {
    opacity: 1;
}

/* Province Icon */
.ssc-pm__province-icon {
    width: 36px;
    height: 36px;
    background: color-mix(in srgb, var(--prov-accent, #302e9d) 12%, transparent);
    color: var(--prov-accent, #302e9d);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all .25s ease;
}
.ssc-pm__province-icon svg {
    width: 18px;
    height: 18px;
}
.ssc-pm__province-card:hover .ssc-pm__province-icon {
    background: var(--prov-accent, #302e9d);
    color: #fff;
    transform: scale(1.08);
}

/* Province Info */
.ssc-pm__province-info {
    flex: 1;
    min-width: 0;
}
.ssc-pm__province-name {
    font-size: 0.85rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1.2;
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
}
.ssc-pm__province-abbr {
    font-size: 0.6rem;
    font-weight: 800;
    color: var(--prov-accent, #302e9d);
    background: color-mix(in srgb, var(--prov-accent, #302e9d) 12%, transparent);
    padding: 2px 6px;
    border-radius: 4px;
    letter-spacing: 0.05em;
}
.ssc-pm__province-meta {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 0.7rem;
    color: #94a3b8;
    margin-top: 4px;
    font-weight: 500;
}
.ssc-pm__province-meta svg {
    color: var(--prov-accent, #302e9d);
    opacity: 0.7;
    flex-shrink: 0;
}
.ssc-pm__coming-soon {
    margin-left: 6px;
    font-size: 0.58rem;
    font-weight: 800;
    color: #bf2021;
    background: rgba(191, 32, 33, 0.08);
    padding: 2px 7px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Arrow */
.ssc-pm__province-arrow {
    color: var(--prov-accent, #302e9d);
    opacity: 0;
    transform: translateX(-6px);
    transition: all .25s ease;
    flex-shrink: 0;
}
.ssc-pm__province-card:hover .ssc-pm__province-arrow {
    opacity: 1;
    transform: translateX(0);
}

/* ===== FOOTER ===== */
.ssc-pm__footer {
    background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    border-top: 1px solid #eef0f6;
    padding: 14px 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
}
.ssc-pm__footer-text {
    margin: 0;
    font-size: 0.82rem;
    color: #64748b;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 8px;
}
.ssc-pm__footer-text svg {
    color: #bf2021;
}
.ssc-pm__footer-text strong {
    color: #1e293b;
}
.ssc-pm__footer-cta {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: linear-gradient(135deg, #302e9d 0%, #1e1b4b 100%);
    color: #fff;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.78rem;
    font-weight: 800;
    text-decoration: none;
    transition: all .25s ease;
    box-shadow: 0 4px 12px rgba(48, 46, 157, 0.25);
}
.ssc-pm__footer-cta:hover {
    background: linear-gradient(135deg, #bf2021 0%, #a31514 100%);
    color: #fff;
    transform: translateY(-1px);
    box-shadow: 0 8px 18px rgba(191, 32, 33, 0.3);
}
.ssc-pm__footer-cta svg {
    transition: transform .25s ease;
}
.ssc-pm__footer-cta:hover svg {
    transform: translateX(3px);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1199.98px) {
    .ssc-pm__regions {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 991.98px) {
    .ssc-pm {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        pointer-events: auto;
        padding: 0;
        margin-top: 8px;
        display: none;
    }
    .ssc-pm-parent.is-open > .ssc-pm {
        display: block;
    }
    .ssc-pm__inner {
        max-height: 70vh;
        border-radius: 14px;
    }
    .ssc-pm__header {
        flex-direction: column;
        text-align: center;
        padding: 18px 20px;
    }
    .ssc-pm__header-stats {
        width: 100%;
        justify-content: space-around;
    }
    .ssc-pm__content {
        padding: 18px 20px;
    }
    .ssc-pm__regions {
        grid-template-columns: 1fr;
        gap: 18px;
    }
    .ssc-pm__footer {
        flex-direction: column;
        gap: 12px;
        text-align: center;
    }
}
</style>

<script>
(function () {
    'use strict';
    document.addEventListener('DOMContentLoaded', function () {

        var pmParent = document.querySelector('.ssc-pm-parent');
        var pmToggle = document.querySelector('.ssc-pm-toggle');
        var pmPanel  = document.querySelector('.ssc-pm');

        if (!pmParent || !pmPanel) return;

        var closeTimer  = null;
        var openTimer   = null;
        var CLOSE_DELAY = 250;
        var OPEN_DELAY  = 80;

        function isDesktop() {
            return window.innerWidth > 991.98;
        }

        function openMenu() {
            clearTimeout(closeTimer);
            clearTimeout(openTimer);
            openTimer = setTimeout(function () {
                pmParent.classList.add('is-open');
                pmToggle.setAttribute('aria-expanded', 'true');
            }, OPEN_DELAY);
        }

        function closeMenu() {
            clearTimeout(openTimer);
            clearTimeout(closeTimer);
            closeTimer = setTimeout(function () {
                pmParent.classList.remove('is-open');
                pmToggle.setAttribute('aria-expanded', 'false');
            }, CLOSE_DELAY);
        }

        function cancelClose() {
            clearTimeout(closeTimer);
        }

        // Desktop hover
        pmParent.addEventListener('mouseenter', function () {
            if (isDesktop()) openMenu();
        });
        pmParent.addEventListener('mouseleave', function () {
            if (isDesktop()) closeMenu();
        });
        pmPanel.addEventListener('mouseenter', function () {
            if (isDesktop()) cancelClose();
        });
        pmPanel.addEventListener('mouseleave', function () {
            if (isDesktop()) closeMenu();
        });

        // Mobile click toggle
        pmToggle.addEventListener('click', function (e) {
            e.preventDefault();
            if (!isDesktop()) {
                pmParent.classList.toggle('is-open');
                var expanded = pmParent.classList.contains('is-open');
                pmToggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
            }
        });

        // Click outside closes
        document.addEventListener('click', function (e) {
            if (!pmParent.contains(e.target)) {
                pmParent.classList.remove('is-open');
                pmToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Escape key closes
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                pmParent.classList.remove('is-open');
                pmToggle.setAttribute('aria-expanded', 'false');
            }
        });
    });
})();
</script>
