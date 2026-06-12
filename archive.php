<?php

/**
 * Archive Template — Blog archive, category, tag views.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<?php ssc_breadcrumbs(); ?>

<section class="ssc-blog-hero ssc-blog-hero--compact">
    <div class="ssc-blog-hero__bg" aria-hidden="true">
        <span class="ssc-blob ssc-blob--1"></span>
        <span class="ssc-blob ssc-blob--2"></span>
    </div>
    <div class="container">
        <div class="ssc-blog-hero__content">
            <span class="ssc-blog-hero__eyebrow">
                <span class="ssc-blog-hero__dot"></span>
                <?php esc_html_e('Archive', 'seoservicecanada'); ?>
            </span>
            <h1 class="ssc-blog-hero__title"><?php the_archive_title(); ?><span class="ssc-blog-hero__title-accent">.</span></h1>
            <?php the_archive_description('<p class="ssc-blog-hero__subtitle">', '</p>'); ?>
        </div>
    </div>
    <div class="ssc-blog-hero__divider" aria-hidden="true">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none">
            <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z" fill="#ffffff" />
        </svg>
    </div>
</section>

<div class="container ssc-blog-wrap">

    <?php if (have_posts()) : ?>

        <div class="ssc-blog-grid">
            <?php while (have_posts()) : the_post();
                $cats     = get_the_category();
                $cat_name = !empty($cats) ? $cats[0]->name : '';
            ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('ssc-blog-card'); ?>>
                    <a href="<?php the_permalink(); ?>" class="ssc-blog-card__image" tabindex="-1" aria-hidden="true">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('ssc-card', array(
                                'loading'  => 'lazy',
                                'decoding' => 'async',
                            )); ?>
                        <?php else : ?>
                            <div class="ssc-blog-card__placeholder" role="presentation"></div>
                        <?php endif; ?>
                        <?php if ($cat_name) : ?>
                            <span class="ssc-blog-card__category"><?php echo esc_html($cat_name); ?></span>
                        <?php endif; ?>
                        <span class="ssc-blog-card__overlay" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </span>
                    </a>

                    <div class="ssc-blog-card__body">
                        <div class="ssc-blog-card__meta">
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo esc_html(get_the_date('M j, Y')); ?>
                            </time>
                            <span class="ssc-meta-dot" aria-hidden="true"></span>
                            <span><?php printf(esc_html__('%d min read', 'seoservicecanada'), ssc_reading_time()); ?></span>
                        </div>

                        <h2 class="ssc-blog-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="ssc-blog-card__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20, '…')); ?></p>

                        <div class="ssc-blog-card__footer">
                            <span class="ssc-blog-card__author">
                                <?php echo get_avatar(get_the_author_meta('ID'), 28); ?>
                                <?php the_author(); ?>
                            </span>
                            <a href="<?php the_permalink(); ?>" class="ssc-blog-card__link">
                                <?php esc_html_e('Read', 'seoservicecanada'); ?>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>

        <nav class="ssc-pagination" aria-label="<?php esc_attr_e('Posts Navigation', 'seoservicecanada'); ?>">
            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => esc_html__('&laquo; Previous', 'seoservicecanada'),
                'next_text' => esc_html__('Next &raquo;', 'seoservicecanada'),
            ));
            ?>
        </nav>

    <?php else : ?>

        <div class="ssc-no-results">
            <h2><?php esc_html_e('No posts found.', 'seoservicecanada'); ?></h2>
        </div>

    <?php endif; ?>

</div>

<?php
get_footer();
