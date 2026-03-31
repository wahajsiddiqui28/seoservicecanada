<?php

/**
 * Index Template — fallback for all views.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<div class="container ssc-content-area">
    <div class="row">
        <div class="col-lg-8">

            <?php if (have_posts()) : ?>

                <div class="ssc-posts-list">
                    <?php while (have_posts()) : the_post(); ?>

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
                                <header>
                                    <h2 class="ssc-post-card__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="ssc-post-card__meta">
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                            <?php echo esc_html(get_the_date()); ?>
                                        </time>
                                        <span class="ssc-post-card__reading-time">
                                            <?php
                                            /* translators: %d: number of minutes */
                                            printf(esc_html__('%d min read', 'seoservicecanada'), ssc_reading_time());
                                            ?>
                                        </span>
                                    </div>
                                </header>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                                <a href="<?php the_permalink(); ?>" class="ssc-read-more">
                                    <?php esc_html_e('Read More', 'seoservicecanada'); ?>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
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
                    <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for.', 'seoservicecanada'); ?></p>
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
