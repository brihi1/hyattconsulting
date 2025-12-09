<?php
/**
 * Archive Template (Categories, Tags, Dates)
 *
 * @package Hyatt_Consulting
 */

get_header();
?>

<section class="hero page-hero">
    <div class="hero-bg">
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>

    <div class="container hero-content" style="text-align: center;">
        <h1>
            <?php
            if (is_category()) {
                single_cat_title();
            } elseif (is_tag()) {
                single_tag_title();
            } elseif (is_author()) {
                printf(__('Author: %s', 'hyatt-consulting'), get_the_author());
            } elseif (is_date()) {
                if (is_day()) {
                    printf(__('Daily Archives: %s', 'hyatt-consulting'), get_the_date());
                } elseif (is_month()) {
                    printf(__('Monthly Archives: %s', 'hyatt-consulting'), get_the_date('F Y'));
                } elseif (is_year()) {
                    printf(__('Yearly Archives: %s', 'hyatt-consulting'), get_the_date('Y'));
                }
            } else {
                _e('Archives', 'hyatt-consulting');
            }
            ?>
        </h1>
        <?php
        if (is_category() && category_description()) {
            echo '<p class="hero-subtitle">' . wp_kses_post(category_description()) . '</p>';
        } elseif (is_tag() && tag_description()) {
            echo '<p class="hero-subtitle">' . wp_kses_post(tag_description()) . '</p>';
        }
        ?>
    </div>
</section>

<section class="blog-listing">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="blog-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="blog-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-card-image">
                                <?php the_post_thumbnail('medium_large'); ?>
                            </a>
                        <?php endif; ?>

                        <div class="blog-card-content">
                            <div class="blog-card-meta">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date('M j, Y'); ?>
                                </time>
                                <?php
                                $categories = get_the_category();
                                if ($categories && !is_category()) :
                                    ?>
                                    <span class="blog-meta-divider">•</span>
                                    <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="blog-card-category">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <h2 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="blog-card-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="blog-card-link">
                                Read More
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="blog-pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => sprintf(
                        '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg> %s',
                        __('Previous', 'hyatt-consulting')
                    ),
                    'next_text' => sprintf(
                        '%s <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                        __('Next', 'hyatt-consulting')
                    ),
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="blog-no-posts">
                <p><?php _e('No posts found in this archive.', 'hyatt-consulting'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
