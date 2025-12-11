<?php
/**
 * Template Name: Terms of Service
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
        <h1>Terms of Service</h1>
        <p class="hero-subtitle" style="font-size: 1rem; max-width: 600px;">
            Last updated: <?php echo date('F j, Y'); ?>
        </p>
    </div>
</section>

<!-- Content -->
<section class="services" style="padding: 4rem 0;">
    <div class="container">
        <article class="legal-content" style="max-width: 800px; margin: 0 auto; color: var(--color-zinc-300); line-height: 1.8;">
            
            <h2>Agreement to Terms</h2>
            <p>By accessing or using the HyattLabs website and services, you agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our website or services.</p>
            
            <h2>Description of Services</h2>
            <p>HyattLabs provides independent digital marketing auditing and consulting services, including but not limited to:</p>
            <ul>
                <li>Google Ads and PPC audits</li>
                <li>Search Engine Optimization (SEO) audits</li>
                <li>Answer Engine Optimization (AEO) assessments</li>
                <li>CTV and Programmatic advertising reviews</li>
                <li>Agency fee analysis and benchmarking</li>
                <li>Data integrity and attribution audits</li>
            </ul>
            
            <h2>Engagement Terms</h2>
            <p>Specific terms for consulting engagements will be outlined in a separate Statement of Work (SOW) or engagement letter, which will include:</p>
            <ul>
                <li>Scope of services</li>
                <li>Deliverables and timelines</li>
                <li>Fees and payment terms</li>
                <li>Confidentiality provisions</li>
            </ul>
            
            <h2>Intellectual Property</h2>
            <p>All content on this website, including text, graphics, logos, and images, is the property of HyattLabs or its content suppliers and is protected by intellectual property laws. You may not reproduce, distribute, or create derivative works without our express written permission.</p>
            
            <h2>Client Responsibilities</h2>
            <p>When engaging our services, you agree to:</p>
            <ul>
                <li>Provide accurate and complete information</li>
                <li>Grant necessary access to accounts and platforms for audit purposes</li>
                <li>Respond to requests for information in a timely manner</li>
                <li>Use our deliverables for your internal business purposes only</li>
            </ul>
            
            <h2>Confidentiality</h2>
            <p>We maintain strict confidentiality regarding all client information, data, and audit findings. We will not disclose your information to third parties without your consent, except as required by law. Specific confidentiality terms will be outlined in our engagement agreements.</p>
            
            <h2>Independence</h2>
            <p>HyattLabs operates independently and does not:</p>
            <ul>
                <li>Accept referral fees from agencies or vendors</li>
                <li>Maintain partnerships that could create conflicts of interest</li>
                <li>Provide ongoing management services that could compromise objectivity</li>
            </ul>
            
            <h2>Limitation of Liability</h2>
            <p>Our audit findings and recommendations are based on the information available to us at the time of the engagement. While we strive for accuracy, we cannot guarantee specific outcomes or results from implementing our recommendations.</p>
            <p>To the maximum extent permitted by law, HyattLabs shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from your use of our services.</p>
            
            <h2>Disclaimer of Warranties</h2>
            <p>Our website and services are provided "as is" without warranties of any kind, either express or implied. We do not warrant that our website will be uninterrupted, error-free, or free of viruses or other harmful components.</p>
            
            <h2>Indemnification</h2>
            <p>You agree to indemnify and hold harmless HyattLabs and its officers, directors, employees, and agents from any claims, damages, losses, or expenses arising from your use of our services or violation of these terms.</p>
            
            <h2>Governing Law</h2>
            <p>These Terms of Service shall be governed by and construed in accordance with the laws of the United States, without regard to conflict of law principles.</p>
            
            <h2>Changes to Terms</h2>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting to this website. Your continued use of our services after changes constitutes acceptance of the modified terms.</p>
            
            <h2>Severability</h2>
            <p>If any provision of these terms is found to be unenforceable, the remaining provisions will continue in full force and effect.</p>
            
            <h2>Contact Information</h2>
            <p>For questions about these Terms of Service, please contact us at:</p>
            <p>
                <?php $contact_email = hyatt_get_option('hyatt_social_email', 'brian@hyattlabs.com'); ?>
                <strong>HyattLabs</strong><br>
                Email: <a href="mailto:<?php echo esc_attr($contact_email); ?>" style="color: var(--color-blue-400);"><?php echo esc_html($contact_email); ?></a>
            </p>
            
        </article>
    </div>
</section>

<?php get_footer(); ?>
