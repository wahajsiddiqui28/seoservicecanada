<?php

/**
 * Default Page Template
 *
 * Used for static pages like About, Contact, etc.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<?php ssc_breadcrumbs(); ?>

<div class="container ssc-content-area">
    <div class="row">
        <div class="col-lg-8 mx-auto">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article id="page-<?php the_ID(); ?>" <?php post_class('ssc-page'); ?>>

                        <header class="ssc-page__header">
                            <h1 class="ssc-page__title"><?php the_title(); ?></h1>
                            <?php
                            $subtitle = ssc_get_field('_ssc_subtitle');
                            if ($subtitle) :
                            ?>
                                <p class="ssc-page__subtitle"><?php echo esc_html($subtitle); ?></p>
                            <?php endif; ?>
                        </header>

                        <div class="ssc-page__content entry-content">
                            <?php the_content(); ?>
                        </div>

                    </article>

            <?php endwhile;
            endif; ?>

        </div>
    </div>
</div>

<?php
get_footer();
