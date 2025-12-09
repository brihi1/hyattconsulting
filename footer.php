</main>

<footer class="footer">
    <div class="container footer-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 32px; height: 32px; color: var(--color-blue-500);">
                <path d="M50 5L93.3013 30V80L50 105L6.69873 80V30L50 5Z" stroke="currentColor" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33 35V75" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
                <path d="M67 35V75" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
                <path d="M33 55H67" stroke="currentColor" stroke-width="8" stroke-linecap="round" />
            </svg>
            HYATT <span class="logo-accent">CONSULTING</span>
        </a>
        
        <div class="footer-legal">
            <div class="footer-copyright">
                &copy; <?php echo date('Y'); ?> HYATT CONSULTING. Hyatt Companies, L.L.C.
            </div>
            <div class="footer-legal-links">
                <?php
                $privacy_page = get_page_by_path('privacy-policy');
                $terms_page = get_page_by_path('terms-of-service');
                $cookie_page = get_page_by_path('cookie-policy');
                ?>
                <?php if ($privacy_page) : ?>
                    <a href="<?php echo get_permalink($privacy_page); ?>" class="footer-legal-link">Privacy Policy</a>
                    <span class="footer-separator">|</span>
                <?php endif; ?>
                <?php if ($terms_page) : ?>
                    <a href="<?php echo get_permalink($terms_page); ?>" class="footer-legal-link">Terms of Service</a>
                    <?php if ($cookie_page) : ?><span class="footer-separator">|</span><?php endif; ?>
                <?php endif; ?>
                <?php if ($cookie_page) : ?>
                    <a href="<?php echo get_permalink($cookie_page); ?>" class="footer-legal-link">Cookie Policy</a>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="footer-links">
            <?php
            $linkedin = hyatt_get_option('hyatt_social_linkedin', '');
            $twitter = hyatt_get_option('hyatt_social_twitter', '');
            $email = hyatt_get_option('hyatt_social_email', get_option('admin_email'));
            ?>
            <?php if ($linkedin) : ?>
                <a href="<?php echo esc_url($linkedin); ?>" class="footer-link" target="_blank" rel="noopener">LinkedIn</a>
            <?php endif; ?>
            <?php if ($twitter) : ?>
                <a href="<?php echo esc_url($twitter); ?>" class="footer-link" target="_blank" rel="noopener">Twitter</a>
            <?php endif; ?>
            <?php if ($email) : ?>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="footer-link">Email</a>
            <?php endif; ?>
        </div>
    </div>
</footer>

<!-- Cookie Consent Banner -->
<?php $cookie_page = get_page_by_path('cookie-policy'); ?>
<div id="cookie-consent-banner" class="cookie-banner" style="display: none;">
    <div class="cookie-banner-content">
        <p>We use cookies to enhance your experience. By continuing to visit this site, you agree to our use of cookies.</p>
        <div class="cookie-banner-actions">
            <a href="<?php echo $cookie_page ? esc_url(get_permalink($cookie_page)) : '#'; ?>" class="cookie-learn-more">Learn More</a>
            <button id="cookie-accept-btn" class="cookie-accept-btn">Accept</button>
        </div>
    </div>
</div>

<script>
(function() {
    var banner = document.getElementById('cookie-consent-banner');
    var acceptBtn = document.getElementById('cookie-accept-btn');
    
    if (banner && acceptBtn) {
        // Check if user already accepted cookies
        if (!localStorage.getItem('cookieConsent')) {
            banner.style.display = 'block';
        }
        
        acceptBtn.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'accepted');
            banner.style.display = 'none';
        });
    }
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
