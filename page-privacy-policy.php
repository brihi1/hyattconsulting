<?php
/**
 * Template Name: Privacy Policy
 *
 * @package HyattLabs
 */

get_header();
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 40vh; padding-top: 10rem; padding-bottom: 3rem;">
    <div class="hero-bg">
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
    </div>
    
    <div class="container hero-content" style="text-align: center;">
        <h1>Privacy Policy</h1>
        <p class="hero-subtitle" style="font-size: 1rem; max-width: 600px;">
            Last updated: <?php echo date('F j, Y'); ?>
        </p>
    </div>
</section>

<!-- Content -->
<section class="services" style="padding: 4rem 0;">
    <div class="container">
        <article class="legal-content" style="max-width: 800px; margin: 0 auto; color: var(--color-zinc-300); line-height: 1.8;">
            
            <h2>Introduction</h2>
            <p>HyattLabs ("we," "our," or "us") respects your privacy and is committed to protecting your personal data. This privacy policy explains how we collect, use, and safeguard your information when you visit our website or use our services.</p>
            
            <h2>Information We Collect</h2>
            <p>We collect information you provide directly to us, including:</p>
            <ul>
                <li><strong>Contact Information:</strong> Name, email address, phone number, and company name when you fill out our contact form or request an audit.</li>
                <li><strong>Business Information:</strong> Website URL, monthly advertising spend, and information about your marketing challenges.</li>
                <li><strong>Communications:</strong> Any messages, feedback, or other communications you send to us.</li>
            </ul>
            
            <p>We also automatically collect certain information when you visit our website:</p>
            <ul>
                <li><strong>Log Data:</strong> IP address, browser type, operating system, referring URLs, and pages viewed.</li>
                <li><strong>Cookies:</strong> We use cookies and similar technologies to enhance your experience and analyze site traffic.</li>
            </ul>
            
            <h2>How We Use Your Information</h2>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Respond to your inquiries and provide our auditing services</li>
                <li>Send you relevant information about our services</li>
                <li>Improve our website and services</li>
                <li>Comply with legal obligations</li>
                <li>Protect against fraudulent or illegal activity</li>
            </ul>
            
            <h2>Information Sharing</h2>
            <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
            <ul>
                <li><strong>Service Providers:</strong> With trusted third parties who assist us in operating our website and conducting our business (e.g., email services, hosting providers).</li>
                <li><strong>Legal Requirements:</strong> When required by law or to protect our rights and safety.</li>
                <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets.</li>
            </ul>
            
            <h2>Data Security</h2>
            <p>We implement appropriate technical and organizational measures to protect your personal data against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet is 100% secure.</p>
            
            <h2>Your Rights</h2>
            <p>Depending on your location, you may have the following rights regarding your personal data:</p>
            <ul>
                <li>Access and receive a copy of your data</li>
                <li>Rectify inaccurate or incomplete data</li>
                <li>Request deletion of your data</li>
                <li>Object to or restrict processing of your data</li>
                <li>Data portability</li>
                <li>Withdraw consent at any time</li>
            </ul>
            
            <h2>California Privacy Rights (CCPA)</h2>
            <p>California residents have additional rights under the California Consumer Privacy Act (CCPA), including the right to know what personal information we collect, request deletion, and opt-out of the sale of personal information. We do not sell personal information.</p>
            
            <h2>Cookies</h2>
            <p>We use cookies to improve your browsing experience. You can control cookies through your browser settings. Disabling cookies may affect the functionality of our website.</p>
            
            <h2>Third-Party Links</h2>
            <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.</p>
            
            <h2>Children's Privacy</h2>
            <p>Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children.</p>
            
            <h2>Changes to This Policy</h2>
            <p>We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last updated" date.</p>
            
            <h2>Contact Us</h2>
            <p>If you have any questions about this privacy policy or our data practices, please contact us at:</p>
            <p>
                <?php $contact_email = hyatt_get_option('hyatt_social_email', 'brian@hyattlabs.com'); ?>
                <strong>HyattLabs</strong><br>
                Email: <a href="mailto:<?php echo esc_attr($contact_email); ?>" style="color: var(--color-blue-400);"><?php echo esc_html($contact_email); ?></a>
            </p>
            
        </article>
    </div>
</section>

<?php get_footer(); ?>
