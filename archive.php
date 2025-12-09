<?php
/**
 * Archive Template (Categories, Tags, Date Archives)
 *
 * @package Hyatt_Consulting
 */

get_header();
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 45vh;">
    <div class="hero-bg">
        <img 
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg.jpg" 
            alt="Abstract digital data visualization with blue and orange particle waves representing marketing analytics" 
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>
    
    <div class="container hero-content" style="text-align: center;">
        <?php if (is_category()) : ?>
        <p class="hero-eyebrow">Category</p>
        <h1><?php single_cat_title(); ?></h1>
        <?php if (category_description()) : ?>
        <p class="hero-subtitle"><?php echo category_description(); ?></p>
        <?php endif; ?>
        
        <?php elseif (is_tag()) : ?>
        <p class="hero-eyebrow">Topic</p>
        <h1><?php single_tag_title(); ?></h1>
        <?php if (tag_description()) : ?>
        <p class="hero-subtitle"><?php echo tag_description(); ?></p>
        <?php endif; ?>
        
        <?php elseif (is_author()) : ?>
        <p class="hero-eyebrow">Author</p>
        <h1><?php the_author(); ?></h1>
        <?php if (get_the_author_meta('description')) : ?>
        <p class="hero-subtitle"><?php echo get_the_author_meta('description'); ?></p>
        <?php endif; ?>
        
        <?php elseif (is_date()) : ?>
        <p class="hero-eyebrow">Archive</p>
        <h1>
            <?php
            if (is_day()) {
                echo get_the_date();
            } elseif (is_month()) {
                echo get_the_date('F Y');
            } elseif (is_year()) {
                echo get_the_date('Y');
            }
            ?>
        </h1>
        
        <?php else : ?>
        <h1>Archive</h1>
        <?php endif; ?>
    </div>
</section>

<!-- Archive Posts -->
<section class="services" style="padding: 5rem 0;">
    <div class="container">
        
        <?php if (have_posts()) : ?>
        
        <div class="blog-grid">
            <?php while (have_posts()) : the_post(); ?>
            
            <article class="blog-card">
                <a href="<?php the_permalink(); ?>" class="blog-card-inner">
                    <div class="blog-card-border"></div>
                    
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-card-image">
                        <?php the_post_thumbnail('medium_large', array('alt' => get_the_title())); ?>
                    </div>
                    <?php else : ?>
                    <div class="blog-card-image blog-card-image-placeholder">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <?php endif; ?>
                    
                    <div class="blog-card-content">
                        <div class="blog-card-meta">
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date('M j, Y'); ?>
                            </time>
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) :
                            ?>
                            <span class="blog-card-category"><?php echo esc_html($categories[0]->name); ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <h2 class="blog-card-title"><?php the_title(); ?></h2>
                        
                        <p class="blog-card-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                        </p>
                        
                        <span class="blog-card-link">
                            Read Article
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </span>
                    </div>
                </a>
            </article>
            
            <?php endwhile; ?>
        </div>
        
        <!-- Pagination -->
        <div class="blog-pagination">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous',
                'next_text' => 'Next <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>',
            ));
            ?>
        </div>
        
        <?php else : ?>
        
        <div style="text-align: center; padding: 4rem 0;">
            <div style="width: 80px; height: 80px; background: rgba(59, 130, 246, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--color-blue-400)" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>
            <h2 style="color: var(--color-white); font-size: 1.5rem; margin-bottom: 1rem;">No Posts Found</h2>
            <p style="color: var(--color-zinc-400); margin-bottom: 2rem;">No articles match this criteria.</p>
            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn-primary" style="display: inline-flex;">
                View All Articles
            </a>
        </div>
        
        <?php endif; ?>
        
    </div>
</section>

<?php get_footer(); ?>
