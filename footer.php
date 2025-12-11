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
            HYATT<span class="logo-accent">LABS</span>
        </a>
        
        <div class="footer-legal">
            <div class="footer-copyright">
                &copy; <?php echo date('Y'); ?> HYATTLABS. Hyatt Companies, L.L.C.
            </div>
            <div class="footer-legal-links">
                <?php
                $privacy_page = get_page_by_path('privacy-policy');
                $terms_page = get_page_by_path('terms-of-service');
                ?>
                <?php if ($privacy_page) : ?>
                    <a href="<?php echo esc_url(get_permalink($privacy_page)); ?>" class="footer-legal-link">Privacy Policy</a>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="footer-legal-link">Privacy Policy</a>
                <?php endif; ?>
                <span class="footer-legal-divider">|</span>
                <?php if ($terms_page) : ?>
                    <a href="<?php echo esc_url(get_permalink($terms_page)); ?>" class="footer-legal-link">Terms of Service</a>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>" class="footer-legal-link">Terms of Service</a>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="footer-links">
            <?php 
            $linkedin = hyatt_get_option('hyatt_social_linkedin', '');
            $twitter = hyatt_get_option('hyatt_social_twitter', '');
            $email = hyatt_get_option('hyatt_social_email', 'info@hyattlabs.com');
            ?>
            <?php if (!empty($linkedin) && $linkedin !== '#') : ?>
                <a href="<?php echo esc_url($linkedin); ?>" class="footer-link" target="_blank" rel="noopener">LinkedIn</a>
            <?php endif; ?>
            <?php if (!empty($twitter) && $twitter !== '#') : ?>
                <a href="<?php echo esc_url($twitter); ?>" class="footer-link" target="_blank" rel="noopener">Twitter</a>
            <?php endif; ?>
            <?php if (!empty($email)) : ?>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="footer-link">Email</a>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
