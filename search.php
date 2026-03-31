<?php

/**
 * Search Results Template
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<?php ssc_breadcrumbs(); ?>

<div class="container ssc-content-area">

    <header class="ssc-search__header">
        <h1 class="ssc-search__title">
            <?php
            /* translators: %s: search query */
            printf(esc_html__('Search Results for: %s', 'seoservicecanada'), '<span>' . get_search_query() . '</span>');
            ?>
        </h1>
    </header>

    <div class="row">
        <div class="col-lg-8">

            <?php if (have_posts()) : ?>

                <div class="ssc-posts-list">
                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('ssc-post-card ssc-post-card--horizontal'); ?>>
                            <div class="ssc-post-card__content">
                                <h2 class="ssc-post-card__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="ssc-post-card__meta">
                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                        <?php echo esc_html(get_the_date()); ?>
                                    </time>
                                    <span><?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?></span>
                                </div>
                                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>

                <nav class="ssc-pagination" aria-label="<?php esc_attr_e('Search Results Navigation', 'seoservicecanada'); ?>">
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
                    <h2><?php esc_html_e('No results found.', 'seoservicecanada'); ?></h2>
                    <p><?php esc_html_e('Try different keywords or browse our services below.', 'seoservicecanada'); ?></p>
                    <?php get_search_form(); ?>
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
