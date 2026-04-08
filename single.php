<?php

/**
 * Single Post Template — Premium magazine layout.
 *
 * @package SeoServiceCanada
 * @since   1.0.0
 */

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Reading progress bar -->
        <div class="ssc-reading-progress" aria-hidden="true">
            <div class="ssc-reading-progress__bar"></div>
        </div>

        <article id="post-<?php the_ID(); ?>" <?php post_class('ssc-single'); ?> itemscope itemtype="https://schema.org/BlogPosting">

            <!-- Hero (gradient, no background image) -->
            <header class="ssc-single__hero">
                <div class="ssc-single__hero-overlay" aria-hidden="true"></div>

                <div class="container">
                    <nav class="ssc-single__breadcrumbs" aria-label="<?php esc_attr_e('Breadcrumb', 'seoservicecanada'); ?>">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'seoservicecanada'); ?></a>
                        <span aria-hidden="true">/</span>
                        <?php
                        $blog_id = (int) get_option('page_for_posts');
                        if ($blog_id) :
                        ?>
                            <a href="<?php echo esc_url(get_permalink($blog_id)); ?>"><?php echo esc_html(get_the_title($blog_id)); ?></a>
                            <span aria-hidden="true">/</span>
                        <?php endif; ?>
                        <span class="ssc-single__breadcrumbs-current"><?php the_title(); ?></span>
                    </nav>

                    <div class="ssc-single__hero-inner">
                        <?php
                        $cats = get_the_category();
                        if (!empty($cats)) :
                        ?>
                            <div class="ssc-single__categories-top">
                                <?php foreach ($cats as $cat) : ?>
                                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" rel="tag">
                                        <?php echo esc_html($cat->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <h1 class="ssc-single__title" itemprop="headline"><?php the_title(); ?></h1>

                        <?php if (get_the_excerpt()) : ?>
                            <p class="ssc-single__lede"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28, '…')); ?></p>
                        <?php endif; ?>

                        <div class="ssc-single__meta">
                            <span class="ssc-single__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                <span class="ssc-single__avatar"><?php echo get_avatar(get_the_author_meta('ID'), 44); ?></span>
                                <span class="ssc-single__author-info">
                                    <small><?php esc_html_e('Written by', 'seoservicecanada'); ?></small>
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" itemprop="name" rel="author">
                                        <?php the_author(); ?>
                                    </a>
                                </span>
                            </span>
                            <span class="ssc-single__meta-divider" aria-hidden="true"></span>
                            <span class="ssc-single__meta-block">
                                <small><?php esc_html_e('Published', 'seoservicecanada'); ?></small>
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" itemprop="datePublished">
                                    <?php echo esc_html(get_the_date('M j, Y')); ?>
                                </time>
                            </span>
                            <span class="ssc-single__meta-divider" aria-hidden="true"></span>
                            <span class="ssc-single__meta-block">
                                <small><?php esc_html_e('Reading Time', 'seoservicecanada'); ?></small>
                                <span><?php printf(esc_html__('%d min read', 'seoservicecanada'), ssc_reading_time()); ?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <figure class="ssc-single__featured" itemprop="image">
                    <div class="container">
                        <div class="ssc-single__featured-inner">
                            <?php the_post_thumbnail('ssc-hero', array(
                                'loading'  => 'eager',
                                'decoding' => 'async',
                                'alt'      => esc_attr(get_the_title()),
                            )); ?>
                        </div>
                    </div>
                </figure>
            <?php endif; ?>

            <!-- Body wrap with floating share + content -->
            <div class="ssc-single__body">
                <div class="container">
                    <div class="ssc-single__layout">

                        <!-- Floating share rail (desktop only) -->
                        <aside class="ssc-share-rail" aria-label="<?php esc_attr_e('Share this article', 'seoservicecanada'); ?>">
                            <span class="ssc-share-rail__label"><?php esc_html_e('Share', 'seoservicecanada'); ?></span>
                            <a class="ssc-share-rail__btn" target="_blank" rel="noopener" title="Share on Twitter" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a class="ssc-share-rail__btn" target="_blank" rel="noopener" title="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 12.07C22 6.51 17.52 2 12 2S2 6.51 2 12.07c0 5.02 3.66 9.18 8.44 9.93v-7.03H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.77-3.89 1.09 0 2.24.19 2.24.19v2.47H15.2c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33V22c4.78-.75 8.43-4.91 8.43-9.93z"/></svg>
                            </a>
                            <a class="ssc-share-rail__btn" target="_blank" rel="noopener" title="Share on LinkedIn" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.95v5.66H9.34V9h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46zM5.34 7.43a2.06 2.06 0 11.01-4.13 2.06 2.06 0 010 4.13zM7.12 20.45H3.56V9h3.56zM22.22 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.72V1.72C24 .77 23.2 0 22.22 0z"/></svg>
                            </a>
                            <button type="button" class="ssc-share-rail__btn ssc-share-rail__copy" title="<?php esc_attr_e('Copy link', 'seoservicecanada'); ?>" data-url="<?php echo esc_url(get_permalink()); ?>">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                            </button>
                        </aside>

                        <div class="ssc-single__main">
                            <div class="ssc-single__content entry-content" itemprop="articleBody">
                                <?php the_content(); ?>
                            </div>

                            <footer class="ssc-single__footer">
                                <?php
                                $tags = get_the_tags();
                                if ($tags) :
                                ?>
                                    <div class="ssc-single__tags">
                                        <strong><?php esc_html_e('Tagged:', 'seoservicecanada'); ?></strong>
                                        <?php foreach ($tags as $tag) : ?>
                                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" rel="tag">
                                                #<?php echo esc_html($tag->name); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="ssc-single__share-mobile">
                                    <strong><?php esc_html_e('Share this article:', 'seoservicecanada'); ?></strong>
                                    <div class="ssc-single__share-mobile-row">
                                        <a class="ssc-share-btn" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>">Twitter</a>
                                        <a class="ssc-share-btn" target="_blank" rel="noopener" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>">Facebook</a>
                                        <a class="ssc-share-btn" target="_blank" rel="noopener" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>">LinkedIn</a>
                                    </div>
                                </div>
                            </footer>

                            <!-- Author bio card -->
                            <div class="ssc-author-card">
                                <div class="ssc-author-card__avatar">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 96); ?>
                                </div>
                                <div class="ssc-author-card__info">
                                    <small><?php esc_html_e('Written by', 'seoservicecanada'); ?></small>
                                    <h3>
                                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                            <?php the_author(); ?>
                                        </a>
                                    </h3>
                                    <?php $bio = get_the_author_meta('description'); ?>
                                    <?php if ($bio) : ?>
                                        <p><?php echo esc_html($bio); ?></p>
                                    <?php else : ?>
                                        <p><?php esc_html_e('SEO strategist helping Canadian businesses grow their organic traffic and dominate Google search results.', 'seoservicecanada'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>

                        <!-- Sticky Table of Contents (right sidebar) -->
                        <aside class="ssc-toc-wrap">
                            <nav class="ssc-toc" aria-label="<?php esc_attr_e('Table of Contents', 'seoservicecanada'); ?>" hidden>
                                <button type="button" class="ssc-toc__toggle" aria-expanded="true" aria-controls="ssc-toc-list">
                                    <span class="ssc-toc__title">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                                        <?php esc_html_e('On this page', 'seoservicecanada'); ?>
                                    </span>
                                    <svg class="ssc-toc__chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                                </button>
                                <ol class="ssc-toc__list" id="ssc-toc-list"></ol>
                            </nav>
                        </aside>
                    </div>
                </div>
            </div>

            <!-- Related posts (full-width section) -->
            <?php
            $related_cats = wp_get_post_categories(get_the_ID());
            $related_args = array(
                'post_type'           => 'post',
                'posts_per_page'      => 3,
                'post__not_in'        => array(get_the_ID()),
                'ignore_sticky_posts' => 1,
                'orderby'             => 'rand',
            );
            if (!empty($related_cats)) {
                $related_args['category__in'] = $related_cats;
            }
            $related_query = new WP_Query($related_args);
            if ($related_query->have_posts()) :
            ?>
                <section class="ssc-single__related-section" aria-label="<?php esc_attr_e('Related Articles', 'seoservicecanada'); ?>">
                    <div class="container">
                        <div class="ssc-section-label ssc-section-label--center">
                            <span><?php esc_html_e('Keep Reading', 'seoservicecanada'); ?></span>
                        </div>
                        <h2 class="ssc-related-title"><?php esc_html_e('You might also enjoy', 'seoservicecanada'); ?></h2>

                        <div class="ssc-related-grid">
                            <?php while ($related_query->have_posts()) : $related_query->the_post();
                                $r_cats = get_the_category();
                                $r_cat  = !empty($r_cats) ? $r_cats[0]->name : '';
                            ?>
                                <article class="ssc-blog-card">
                                    <a href="<?php the_permalink(); ?>" class="ssc-blog-card__image" tabindex="-1" aria-hidden="true">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('ssc-card', array(
                                                'loading'  => 'lazy',
                                                'decoding' => 'async',
                                            )); ?>
                                        <?php else : ?>
                                            <div class="ssc-blog-card__placeholder" role="presentation"></div>
                                        <?php endif; ?>
                                        <?php if ($r_cat) : ?>
                                            <span class="ssc-blog-card__category"><?php echo esc_html($r_cat); ?></span>
                                        <?php endif; ?>
                                    </a>
                                    <div class="ssc-blog-card__body">
                                        <div class="ssc-blog-card__meta">
                                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                                <?php echo esc_html(get_the_date('M j, Y')); ?>
                                            </time>
                                            <span class="ssc-meta-dot" aria-hidden="true"></span>
                                            <span><?php printf(esc_html__('%d min read', 'seoservicecanada'), ssc_reading_time()); ?></span>
                                        </div>
                                        <h3 class="ssc-blog-card__title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <p class="ssc-blog-card__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 18, '…')); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="ssc-blog-card__link">
                                            <?php esc_html_e('Read', 'seoservicecanada'); ?>
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <!-- Post navigation -->
            <div class="container">
                <?php
                the_post_navigation(array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous Article', 'seoservicecanada') . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__('Next Article', 'seoservicecanada') . '</span> <span class="nav-title">%title</span>',
                ));
                ?>
            </div>

        </article>

<?php endwhile;
endif; ?>

<script>
(function() {
    // Build Table of Contents from h2 headings inside content
    var toc = document.querySelector('.ssc-toc');
    var tocList = document.getElementById('ssc-toc-list');
    var contentEl = document.querySelector('.ssc-single__content');
    if (toc && tocList && contentEl) {
        var headings = contentEl.querySelectorAll('h2');
        if (headings.length >= 2) {
            headings.forEach(function(h, i) {
                if (!h.id) {
                    h.id = 'section-' + (i + 1) + '-' + (h.textContent || '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').slice(0, 50);
                }
                var li = document.createElement('li');
                var a = document.createElement('a');
                a.href = '#' + h.id;
                a.textContent = h.textContent;
                a.className = 'ssc-toc__link';
                a.addEventListener('click', function(ev) {
                    ev.preventDefault();
                    var target = document.getElementById(h.id);
                    if (target) {
                        var top = target.getBoundingClientRect().top + window.pageYOffset - 90;
                        window.scrollTo({ top: top, behavior: 'smooth' });
                        history.pushState(null, '', '#' + h.id);
                    }
                });
                li.appendChild(a);
                tocList.appendChild(li);
            });
            toc.hidden = false;

            // Toggle collapse
            var toggle = toc.querySelector('.ssc-toc__toggle');
            if (toggle) {
                toggle.addEventListener('click', function() {
                    var open = toggle.getAttribute('aria-expanded') === 'true';
                    toggle.setAttribute('aria-expanded', !open);
                    toc.classList.toggle('is-collapsed', open);
                });
            }

            // Active link highlight on scroll
            var links = tocList.querySelectorAll('.ssc-toc__link');
            var updateActive = function() {
                var scrollPos = window.pageYOffset + 120;
                var current = null;
                headings.forEach(function(h) {
                    if (h.offsetTop <= scrollPos) current = h.id;
                });
                links.forEach(function(l) {
                    l.classList.toggle('is-active', l.getAttribute('href') === '#' + current);
                });
            };
            window.addEventListener('scroll', updateActive, { passive: true });
            updateActive();
        }
    }

    // Reading progress bar
    var bar = document.querySelector('.ssc-reading-progress__bar');
    var article = document.querySelector('.ssc-single__content');
    if (bar && article) {
        var update = function() {
            var rect = article.getBoundingClientRect();
            var total = article.offsetHeight - window.innerHeight;
            var scrolled = -rect.top;
            var pct = Math.max(0, Math.min(100, (scrolled / total) * 100));
            bar.style.width = pct + '%';
        };
        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', update);
        update();
    }

    // Copy link button
    var copyBtn = document.querySelector('.ssc-share-rail__copy');
    if (copyBtn) {
        copyBtn.addEventListener('click', function() {
            var url = this.getAttribute('data-url');
            if (navigator.clipboard) {
                navigator.clipboard.writeText(url).then(function() {
                    copyBtn.classList.add('is-copied');
                    setTimeout(function() { copyBtn.classList.remove('is-copied'); }, 1500);
                });
            }
        });
    }
})();
</script>

<?php
get_footer();
