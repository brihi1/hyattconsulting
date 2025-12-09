<?php
/**
 * 404 Error Page Template
 *
 * @package Hyatt_Consulting
 */

get_header();
?>

<section class="hero" style="min-height: 60vh;">
    <div class="hero-bg">
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
    </div>
    
    <div class="container hero-content" style="text-align: center;">
        <h1 style="font-size: 8rem; margin-bottom: 1rem;">
            <span class="gradient-text">404</span>
        </h1>
        <p class="hero-subtitle">
            The page you're looking for doesn't exist or has been moved.
        </p>
        <div class="hero-buttons" style="justify-content: center; margin-top: 2rem;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">
                Return Home
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
