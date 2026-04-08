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

    <?php if (have_posts()) : ?>

        <div class="ssc-blog-grid">
            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('ssc-blog-card'); ?>>

                    <a href="<?php the_permalink(); ?>" class="ssc-blog-card__image" aria-hidden="true" tabindex="-1">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('ssc-card', array(
                                'loading'  => 'lazy',
                                'decoding' => 'async',
                            )); ?>
                        <?php else : ?>
                            <div class="ssc-blog-card__placeholder" role="presentation"></div>
                        <?php endif; ?>

                        <?php
                        $cats = get_the_category();
                        if (!empty($cats)) :
                        ?>
                            <span class="ssc-blog-card__category"><?php echo esc_html($cats[0]->name); ?></span>
                        <?php endif; ?>
                    </a>

                    <div class="ssc-blog-card__body">
                        <div class="ssc-blog-card__meta">
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo esc_html(get_the_date()); ?>
                            </time>
                            <span class="ssc-blog-card__dot" aria-hidden="true">&bull;</span>
                            <span><?php printf(esc_html__('%d min read', 'seoservicecanada'), ssc_reading_time()); ?></span>
                        </div>

                        <h2 class="ssc-blog-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="ssc-blog-card__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22, '…')); ?></p>

                        <a href="<?php the_permalink(); ?>" class="ssc-blog-card__link">
                            <?php esc_html_e('Read Article', 'seoservicecanada'); ?>
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

<?php
get_footer();
