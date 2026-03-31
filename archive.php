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

<div class="container ssc-content-area">

    <header class="ssc-archive__header">
        <h1 class="ssc-archive__title"><?php the_archive_title(); ?></h1>
        <?php the_archive_description('<div class="ssc-archive__description">', '</div>'); ?>
    </header>

    <div class="row">
        <div class="col-lg-8">

            <?php if (have_posts()) : ?>

                <div class="ssc-posts-grid row g-4">
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-6">
                            <article id="post-<?php the_ID(); ?>" <?php post_class('ssc-post-card'); ?>>

                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="ssc-post-card__image">
                                        <?php the_post_thumbnail('ssc-card', array(
                                            'loading'  => 'lazy',
                                            'decoding' => 'async',
                                        )); ?>
                                    </a>
                                <?php endif; ?>

                                <div class="ssc-post-card__content">
                                    <h2 class="ssc-post-card__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="ssc-post-card__meta">
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date()); ?>
                                        </time>
                                    </div>
                                    <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                </div>

                            </article>
                        </div>

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

        <aside class="col-lg-4 ssc-sidebar" role="complementary">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<?php
get_footer();
