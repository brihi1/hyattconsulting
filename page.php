<?php
/**
 * Standard Page Template
 *
 * @package Hyatt_Consulting
 */

get_header();
?>

<section class="hero page-hero">
    <div class="hero-bg">
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
    </div>
    
    <div class="container hero-content" style="text-align: center;">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="services" style="padding: 4rem 0;">
    <div class="container">
        <article class="entry-content">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </article>
    </div>
</section>

<?php get_footer(); ?>
