<?php
/**
 * Single Post Template
 *
 * @package Hyatt_Consulting
 */

get_header();
?>

<?php while (have_posts()) : the_post(); ?>

<!-- Post Hero -->
<section class="hero page-hero">
    <div class="hero-bg">
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>

    <div class="container hero-content" style="text-align: center;">
        <div class="post-meta-header">
            <time datetime="<?php echo get_the_date('c'); ?>" class="post-date">
                <?php echo get_the_date('F j, Y'); ?>
            </time>
            <?php
            $categories = get_the_category();
            if ($categories) :
                ?>
                <span class="post-category-divider">•</span>
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="post-category">
                        <?php echo esc_html($category->name); ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<!-- Post Content -->
<section class="blog-content">
    <div class="container">
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <article class="entry-content">
            <?php the_content(); ?>
        </article>

        <!-- Post Footer -->
        <footer class="post-footer">
            <?php
            $tags = get_the_tags();
            if ($tags) :
                ?>
                <div class="post-tags">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                    </svg>
                    <?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="post-tag">
                            <?php echo esc_html($tag->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </footer>

        <!-- Post Navigation -->
        <nav class="post-navigation">
            <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
            ?>

            <?php if ($prev_post) : ?>
                <div class="post-nav-item post-nav-prev">
                    <span class="post-nav-label">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        Previous Post
                    </span>
                    <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="post-nav-title">
                        <?php echo esc_html($prev_post->post_title); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ($next_post) : ?>
                <div class="post-nav-item post-nav-next">
                    <span class="post-nav-label">
                        Next Post
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </span>
                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="post-nav-title">
                        <?php echo esc_html($next_post->post_title); ?>
                    </a>
                </div>
            <?php endif; ?>
        </nav>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
