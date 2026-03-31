<?php

/**
 * Single Post Template
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<?php ssc_breadcrumbs(); ?>

<div class="container ssc-content-area">
    <div class="row">
        <div class="col-lg-8">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('ssc-single'); ?> itemscope itemtype="https://schema.org/BlogPosting">

                        <header class="ssc-single__header">
                            <h1 class="ssc-single__title" itemprop="headline"><?php the_title(); ?></h1>

                            <div class="ssc-single__meta">
                                <span class="ssc-single__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <?php esc_html_e('By', 'seoservicecanada'); ?>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" itemprop="name" rel="author">
                                        <?php the_author(); ?>
                                    </a>
                                </span>
                                <time class="ssc-single__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>" itemprop="datePublished">
                                    <?php echo esc_html(get_the_date()); ?>
                                </time>
                                <span class="ssc-single__reading-time">
                                    <?php
                                    /* translators: %d: number of minutes */
                                    printf(esc_html__('%d min read', 'seoservicecanada'), ssc_reading_time());
                                    ?>
                                </span>
                            </div>

                            <?php if (has_post_thumbnail()) : ?>
                                <figure class="ssc-single__featured-image" itemprop="image">
                                    <?php the_post_thumbnail('ssc-hero', array(
                                        'loading'  => 'eager',
                                        'decoding' => 'async',
                                    )); ?>
                                </figure>
                            <?php endif; ?>
                        </header>

                        <div class="ssc-single__content entry-content" itemprop="articleBody">
                            <?php the_content(); ?>
                        </div>

                        <footer class="ssc-single__footer">
                            <?php
                            $categories = get_the_category();
                            if ($categories) :
                            ?>
                                <div class="ssc-single__categories">
                                    <strong><?php esc_html_e('Categories:', 'seoservicecanada'); ?></strong>
                                    <?php foreach ($categories as $cat) : ?>
                                        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" rel="tag">
                                            <?php echo esc_html($cat->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php
                            $tags = get_the_tags();
                            if ($tags) :
                            ?>
                                <div class="ssc-single__tags">
                                    <strong><?php esc_html_e('Tags:', 'seoservicecanada'); ?></strong>
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" rel="tag">
                                            <?php echo esc_html($tag->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </footer>

                        <!-- Related Posts -->
                        <section class="ssc-single__related" aria-label="<?php esc_attr_e('Related Articles', 'seoservicecanada'); ?>">
                            <?php ssc_render_related_posts(3); ?>
                        </section>

                    </article>

                    <?php
                    // Post navigation.
                    the_post_navigation(array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'seoservicecanada') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'seoservicecanada') . '</span> <span class="nav-title">%title</span>',
                    ));
                    ?>

            <?php endwhile;
            endif; ?>

        </div>

        <aside class="col-lg-4 ssc-sidebar" role="complementary">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<?php
get_footer();
