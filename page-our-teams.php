<?php

/**
 * Template Name: Our Teams
 *
 * @package seoservicecanada
 */

get_header();
?>

<style>
    :root {
        --primary: #FF3B5C;
        --primary-dark: #BF0A30;
        --accent: #6C63FF;
        --teams-bg-dark: #050505;
        --card-bg: rgba(20, 20, 20, 0.6);
        --card-border: rgba(255, 255, 255, 0.08);
        --text-main: #ffffff;
        --text-muted: #a1a1aa;
    }

    /* Scope styles to the teams page to avoid breaking the global theme */
    .our-teams-page-wrapper {
        font-family: 'Inter', sans-serif;
        background-color: var(--teams-bg-dark);
        color: var(--text-main);
        overflow-x: hidden;
        min-height: 100vh;
        position: relative;
    }

    .our-teams-page-wrapper h1,
    .our-teams-page-wrapper h2,
    .our-teams-page-wrapper h3,
    .our-teams-page-wrapper .role-badge {
        font-family: 'Space Grotesk', sans-serif;
    }

    /* --- Dynamic Background --- */
    .ambient-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background: var(--teams-bg-dark);
        overflow: hidden;
    }

    .ambient-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
        opacity: 0.4;
        animation: floatOrb 20s infinite alternate;
    }

    .orb-1 {
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, var(--primary-dark), transparent);
        top: -10%;
        left: -10%;
    }

    .orb-2 {
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, #1a1a40, transparent);
        bottom: -10%;
        right: -10%;
        animation-delay: -5s;
    }

    .noise-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
        z-index: 1;
        opacity: 0.07;
        pointer-events: none;
    }

    @keyframes floatOrb {
        0% {
            transform: translate(0, 0) scale(1);
        }

        100% {
            transform: translate(50px, 50px) scale(1.1);
        }
    }

    /* --- Section Header --- */
    .team-section {
        padding: 100px 5%;
        max-width: 1600px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .section-header {
        text-align: center;
        margin-bottom: 80px;
        position: relative;
    }

    .pill-label {
        display: inline-flex;
        align-items: center;
        padding: 8px 20px;
        background: rgba(255, 59, 92, 0.1);
        border: 1px solid rgba(255, 59, 92, 0.3);
        border-radius: 100px;
        color: var(--primary);
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px;
        backdrop-filter: blur(5px);
    }

    .section-header h1 {
        font-size: clamp(2.5rem, 5vw, 4.5rem);
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 20px;
        background: linear-gradient(180deg, #BF0A30 0%, #002868 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-header p {
        font-size: 1.2rem;
        color: var(--text-muted);
        max-width: 600px;
        margin: 0 auto;
    }

    /* --- Grid Layout --- */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 30px;
        padding-bottom: 50px;
    }

    /* --- Card Design --- */
    .team-grid .card {
        background: #000000;
        border: 3px solid #BF0A30;
        border-radius: 24px;
        padding: 35px;
        position: relative;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        backdrop-filter: blur(20px);
    }

    .team-grid .card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
        transition: 0.5s;
        pointer-events: none;
    }

    .team-grid .card:hover::before {
        left: 100%;
    }

    .team-grid .card:hover {
        transform: translateY(-10px);
        border-color: rgba(255, 59, 92, 0.4);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(191, 10, 48, 0.1);
    }

    .card-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 25px;
    }

    .image-container {
        width: 140px;
        height: 180px;
        border-radius: 20px;
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.1);
        position: relative;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-grid .card:hover .image-container img {
        transform: scale(1.1);
    }

    .social-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #BF0A30;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }

    .social-btn:hover {
        background: var(--primary);
        border-color: var(--primary);
        transform: rotate(360deg);
    }

    .card-body {
        flex-grow: 1;
    }

    .name {
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 8px;
    }

    .role-badge {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #4ade80;
        background: rgba(74, 222, 128, 0.1);
        padding: 6px 12px;
        border-radius: 6px;
        margin-bottom: 15px;
    }

    .bio {
        font-size: 0.95rem;
        line-height: 1.6;
        color: var(--text-muted);
        margin-bottom: 20px;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .team-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Add Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

<div class="our-teams-page-wrapper">
    <div class="ambient-bg">
        <div class="ambient-orb orb-1"></div>
        <div class="ambient-orb orb-2"></div>
        <div class="noise-overlay"></div>
    </div>

    <section class="team-section">
        <div class="section-header">
            <div class="pill-label">Our Leadership</div>
            <h1>SEO Specialists<br>Canada Team</h1>
            <p>Architects of digital growth. We blend technical precision with creative strategy to dominate search rankings.</p>
        </div>

        <!-- First Row: Tauqeer, Hassan, Maaz -->
        <div class="team-grid">
            <!-- Tauqeer Ahmed -->
            <div class="card">
                <div class="card-header">
                    <div class="image-container">
                        <img decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-team/tauqeer-bhai.jpg' ); ?>" alt="Tauqeer Ahmed">
                    </div>
                    <a href="https://www.linkedin.com/in/tauqeer-ahmed-a7559b298/" class="social-btn" target="_blank" rel="noopener">in</a>
                </div>
                <div class="card-body">
                    <h3 class="name">Tauqeer Ahmed</h3>
                    <p class="bio">Leading SEO Specialist with extensive experience in administration, operations, and digital marketing. Focused on driving sustainable growth and delivering outstanding results.</p>
                </div>
            </div>

            <!-- Hassan Abid -->
            <div class="card">
                <div class="card-header">
                    <div class="image-container">
                        <img decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-team/hassan-bhai.webp' ); ?>" alt="Hassan Abid" style="object-position: top;">
                    </div>
                    <a href="https://www.linkedin.com/in/hassan-abid-705a7612b/" class="social-btn" target="_blank" rel="noopener">in</a>
                </div>
                <div class="card-body">
                    <h3 class="name">Hassan Abid</h3>
                    <p class="bio">Accomplished SEO Specialist recognized for expertise in enhancing online visibility and driving sustainable organic growth through data-driven strategies.</p>
                </div>
            </div>

            <!-- Maaz Ahmed -->
            <div class="card">
                <div class="card-header">
                    <div class="image-container">
                        <img decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-team/maaz-ahmed.webp' ); ?>" alt="Maaz Ahmed">
                    </div>
                    <a href="https://www.linkedin.com/in/maazahmed11479/" class="social-btn" target="_blank" rel="noopener">in</a>
                </div>
                <div class="card-body">
                    <h3 class="name">Maaz Ahmed</h3>
                    <p class="bio">Highly experienced SEO expert with 6+ years in digital marketing. Specializing in technical SEO, e-commerce strategies, and programmatic SEO architecture.</p>
                </div>
            </div>
        </div>

        <!-- Second Row: Tim, Aamna, Wahaj -->
        <div class="team-grid">
            <!-- Tim Burklew -->
            <div class="card">
                <div class="card-header">
                    <div class="image-container">
                        <img decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-team/nooruddin-farishta.jpeg' ); ?>" alt="Nooruddin Farishta">
                    </div>
                    <a href="#" class="social-btn">in</a>
                </div>
                <div class="card-body">
                    <h3 class="name">Nooruddin Farishta</h3>
                    <div class="role-badge" style="background: rgba(255, 59, 92, 0.15); color: #FF3B5C;">Head of Marketing & Sales Canada</div>
                    <p class="bio">Nooruddin Farishta is a seasoned marketing and sales professional with extensive experience in administration, operations, and digital marketing. He is dedicated to driving sustainable growth through strategic planning, efficient execution, and data-driven decision-making. With a strong focus on delivering outstanding results, he consistently enhances business performance and builds long-term value for organizations.</p>
                    <!--<p class="bio"> With a past in professional golf, he applies vision, energy, and perseverance to every venture. Tim leverages data-driven SEO, content strategies, and paid media to drive business growth. </p>-->
                </div>
            </div>

            <!-- Aamna Tauqeer -->
            <div class="card">
                <div class="card-header">
                    <div class="image-container" style="background: #222; display: flex; align-items: center; justify-content: center;">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <a href="#" class="social-btn">in</a>
                </div>
                <div class="card-body">
                    <h3 class="name">Aamna Tauqeer</h3>
                    <div class="role-badge" style="color:#d4a5ff; background:rgba(212, 165, 255, 0.1);">Head of Design</div>
                    <p class="bio">Directing visual strategy with 5 years of experience, fusing high-impact design with strategic digital optimization for maximum brand visibility.</p>
                </div>
            </div>

            <!-- Wahaj Siddiqui -->
            <div class="card">
                <div class="card-header">
                    <div class="image-container">
                        <img decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-team/profile-pic.webp' ); ?>" alt="Wahaj Siddiqui">
                    </div>
                    <a href="https://www.linkedin.com/in/wahaj-siddiqui-mr-coder-51067321a/" class="social-btn" target="_blank" rel="noopener">in</a>
                </div>
                <div class="card-body">
                    <h3 class="name">Wahaj Siddiqui</h3>
                    <div class="role-badge" style="color:#60a5fa; background:rgba(96, 165, 250, 0.1);">Head of Development Department</div>
                    <p class="bio">Expert web developer with 7+ years of experience building fast, SEO-optimized, and API-integrated websites that deliver outstanding user experiences.</p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();