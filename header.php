<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('min-h-screen bg-black text-zinc-200'); ?>>
<?php wp_body_open(); ?>

<nav class="navbar">
    <div class="container navbar-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 32px; height: 32px; color: var(--color-blue-500);">
                <path d="M50 5L93.3013 30V80L50 105L6.69873 80V30L50 5Z" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33 35V75" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
                <path d="M67 35V75" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
                <path d="M33 55H67" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
            </svg>
            HYATT <span class="logo-accent">CONSULTING</span>
        </a>
        
        <div class="nav-links">
            <?php if (has_nav_menu('primary')) : ?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'walker'         => new Hyatt_Nav_Walker(),
                ));
                ?>
            <?php else : ?>
                <a href="#audit-services" class="nav-link">Audit Services</a>
                <a href="#aeo-strategy" class="nav-link">AEO Strategy</a>
                <a href="#fee-analysis" class="nav-link">Fee Analysis</a>
                <a href="#methodology" class="nav-link">Methodology</a>
            <?php endif; ?>
            
            <a href="#contact" class="nav-cta">Book an Audit</a>
        </div>
        
        <button class="mobile-menu-btn" id="mobile-menu-toggle" aria-label="Toggle menu">
            <svg id="menu-icon-open" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
            <svg id="menu-icon-close" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display: none;">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
    
    <div class="mobile-menu" id="mobile-menu">
        <?php if (has_nav_menu('primary')) : ?>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '%3$s',
            ));
            ?>
        <?php else : ?>
            <a href="#audit-services">Audit Services</a>
            <a href="#aeo-strategy">AEO Strategy</a>
            <a href="#fee-analysis">Fee Analysis</a>
            <a href="#methodology">Methodology</a>
        <?php endif; ?>
        <a href="#contact" class="nav-cta">Book an Audit</a>
    </div>
</nav>

<main>
