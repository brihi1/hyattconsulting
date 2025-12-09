<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <?php if (has_site_icon()) : ?>
        <?php wp_site_icon(); ?>
    <?php else : ?>
        <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg">
    <?php endif; ?>
    
    <!-- Google Calendar Appointment Scheduling -->
    <link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
    <script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar">
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50 5L93.3013 30V80L50 105L6.69873 80V30L50 5Z" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33 35V75" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
                <path d="M67 35V75" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
                <path d="M33 55H67" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
            </svg>
            HYATT <span class="logo-accent">CONSULTING</span>
        </a>
        
        <!-- Desktop Navigation -->
        <div class="nav-links">
            <?php if (has_nav_menu('primary')) : ?>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'fallback_cb' => false,
                ));
                ?>
            <?php else : ?>
                <a href="#methodology">Methodology</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
            <?php endif; ?>
            
            <!-- Google Calendar Scheduling Button (Desktop) -->
            <span class="gcal-booking-btn nav-cta-wrapper"></span>
        </div>
        
        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    
    <!-- Mobile Navigation -->
    <div class="mobile-nav">
        <?php if (has_nav_menu('primary')) : ?>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'items_wrap' => '%3$s',
                'fallback_cb' => false,
            ));
            ?>
        <?php else : ?>
            <a href="#methodology">Methodology</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        <?php endif; ?>
        
        <!-- Google Calendar Scheduling Button (Mobile) -->
        <span class="gcal-booking-btn-mobile nav-cta-wrapper"></span>
    </div>
</nav>

<!-- Initialize Google Calendar Buttons -->
<script>
(function() {
    function initCalendarButtons() {
        if (typeof calendar === 'undefined' || !calendar.schedulingButton) {
            setTimeout(initCalendarButtons, 100);
            return;
        }
        
        // Desktop button
        var desktopTarget = document.querySelector('.gcal-booking-btn');
        if (desktopTarget) {
            calendar.schedulingButton.load({
                url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ0KQr38tBXElPuu4iVDtMhm2zH-ha0sF8-1IwRJU8v11J4gj_gw4xXJFoP1xbIOyGLAjAR90K6u?gv=true',
                color: '#039BE5',
                label: 'Book an Audit',
                target: desktopTarget,
            });
        }
        
        // Mobile button
        var mobileTarget = document.querySelector('.gcal-booking-btn-mobile');
        if (mobileTarget) {
            calendar.schedulingButton.load({
                url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ0KQr38tBXElPuu4iVDtMhm2zH-ha0sF8-1IwRJU8v11J4gj_gw4xXJFoP1xbIOyGLAjAR90K6u?gv=true',
                color: '#039BE5',
                label: 'Book an Audit',
                target: mobileTarget,
            });
        }
    }
    
    if (document.readyState === 'complete') {
        initCalendarButtons();
    } else {
        window.addEventListener('load', initCalendarButtons);
    }
})();
</script>

<main>
