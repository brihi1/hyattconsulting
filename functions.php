<?php
/**
 * Hyatt Consulting Theme Functions
 *
 * @package Hyatt_Consulting
 * @version 2.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function hyatt_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hyatt-consulting'),
        'footer'  => __('Footer Menu', 'hyatt-consulting'),
    ));
}
add_action('after_setup_theme', 'hyatt_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function hyatt_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'hyatt-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Google Fonts (Inter)
    wp_enqueue_style(
        'hyatt-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap',
        array(),
        null
    );
    
    // Main JavaScript
    wp_enqueue_script(
        'hyatt-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('hyatt-main', 'hyattAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('hyatt_contact_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'hyatt_enqueue_scripts');

/**
 * Helper function to get theme options
 */
function hyatt_get_option($option_name, $default = '') {
    return get_theme_mod($option_name, $default);
}

/**
 * Customizer Settings
 */
function hyatt_customize_register($wp_customize) {
    // Stats Section
    $wp_customize->add_section('hyatt_stats_section', array(
        'title'    => __('Stats Section', 'hyatt-consulting'),
        'priority' => 30,
    ));
    
    // Stat 1
    $wp_customize->add_setting('hyatt_stat_1_value', array('default' => '$15M+', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_setting('hyatt_stat_1_label', array('default' => 'Ad Spend Audited', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('hyatt_stat_1_value', array('label' => 'Stat 1 Value', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    $wp_customize->add_control('hyatt_stat_1_label', array('label' => 'Stat 1 Label', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    
    // Stat 2
    $wp_customize->add_setting('hyatt_stat_2_value', array('default' => '40%', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_setting('hyatt_stat_2_label', array('default' => 'Avg. Waste Found', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('hyatt_stat_2_value', array('label' => 'Stat 2 Value', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    $wp_customize->add_control('hyatt_stat_2_label', array('label' => 'Stat 2 Label', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    
    // Stat 3
    $wp_customize->add_setting('hyatt_stat_3_value', array('default' => '100+', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_setting('hyatt_stat_3_label', array('default' => 'Audits Completed', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('hyatt_stat_3_value', array('label' => 'Stat 3 Value', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    $wp_customize->add_control('hyatt_stat_3_label', array('label' => 'Stat 3 Label', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    
    // Stat 4
    $wp_customize->add_setting('hyatt_stat_4_value', array('default' => '15+', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_setting('hyatt_stat_4_label', array('default' => 'Years Experience', 'sanitize_callback' => 'sanitize_text_field'));
    $wp_customize->add_control('hyatt_stat_4_value', array('label' => 'Stat 4 Value', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    $wp_customize->add_control('hyatt_stat_4_label', array('label' => 'Stat 4 Label', 'section' => 'hyatt_stats_section', 'type' => 'text'));
    
    // Social Links Section
    $wp_customize->add_section('hyatt_social_section', array(
        'title'    => __('Social Links', 'hyatt-consulting'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('hyatt_social_linkedin', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_setting('hyatt_social_twitter', array('default' => '', 'sanitize_callback' => 'esc_url_raw'));
    $wp_customize->add_setting('hyatt_social_email', array('default' => '', 'sanitize_callback' => 'sanitize_email'));
    
    $wp_customize->add_control('hyatt_social_linkedin', array('label' => 'LinkedIn URL', 'section' => 'hyatt_social_section', 'type' => 'url'));
    $wp_customize->add_control('hyatt_social_twitter', array('label' => 'Twitter URL', 'section' => 'hyatt_social_section', 'type' => 'url'));
    $wp_customize->add_control('hyatt_social_email', array('label' => 'Contact Email', 'section' => 'hyatt_social_section', 'type' => 'email'));
}
add_action('customize_register', 'hyatt_customize_register');

/**
 * Contact Form Handler
 */
function hyatt_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'hyatt_contact_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed.'));
    }
    
    // Sanitize inputs
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $company = isset($_POST['company']) ? sanitize_text_field($_POST['company']) : '';
    $services = isset($_POST['services']) ? array_map('sanitize_text_field', (array)$_POST['services']) : array();
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';
    
    // Validate required fields
    if (empty($name) || empty($email)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
    }
    
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }
    
    // Prepare email
    $to = hyatt_get_option('hyatt_social_email', get_option('admin_email'));
    $subject = 'New Audit Inquiry from ' . $name;
    
    $body = "New inquiry from Hyatt Consulting website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Company: $company\n";
    $body .= "Services of Interest: " . implode(', ', $services) . "\n";
    $body .= "Message:\n$message\n";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! Your inquiry has been sent. We\'ll be in touch soon.'));
    } else {
        wp_send_json_error(array('message' => 'There was an error sending your message. Please try again.'));
    }
}
add_action('wp_ajax_hyatt_contact', 'hyatt_handle_contact_form');
add_action('wp_ajax_nopriv_hyatt_contact', 'hyatt_handle_contact_form');

/**
 * Create Default Pages on Theme Activation
 */
function hyatt_create_default_pages() {
    // Homepage
    if (!get_page_by_path('home')) {
        wp_insert_post(array(
            'post_title'   => 'Home',
            'post_name'    => 'home',
            'post_content' => '',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
    }
    
    // Privacy Policy
    if (!get_page_by_path('privacy-policy')) {
        $privacy_content = '<h2>Information We Collect</h2>
<p>We collect information you provide directly to us, such as when you fill out a contact form, request a consultation, or communicate with us via email.</p>

<h2>How We Use Your Information</h2>
<p>We use the information we collect to provide, maintain, and improve our services, to communicate with you, and to respond to your inquiries.</p>

<h2>Information Sharing</h2>
<p>We do not sell, trade, or otherwise transfer your personally identifiable information to third parties without your consent, except as required by law.</p>

<h2>Data Security</h2>
<p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>

<h2>Contact Us</h2>
<p>If you have questions about this Privacy Policy, please contact us at <a href="mailto:brian@hyattlabs.com">brian@hyattlabs.com</a>.</p>

<p><em>Last updated: ' . date('F j, Y') . '</em></p>';
        
        wp_insert_post(array(
            'post_title'   => 'Privacy Policy',
            'post_name'    => 'privacy-policy',
            'post_content' => $privacy_content,
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
    }
    
    // Terms of Service
    if (!get_page_by_path('terms-of-service')) {
        $terms_content = '<h2>Acceptance of Terms</h2>
<p>By accessing and using this website, you accept and agree to be bound by the terms and provisions of this agreement.</p>

<h2>Services</h2>
<p>Hyatt Consulting provides independent digital marketing audit services. Our services are advisory in nature and do not constitute financial, legal, or professional advice.</p>

<h2>Confidentiality</h2>
<p>We treat all client information as confidential and will not disclose your business information to third parties without your consent.</p>

<h2>Limitation of Liability</h2>
<p>Hyatt Consulting shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>

<h2>Changes to Terms</h2>
<p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting to this website.</p>

<h2>Contact Us</h2>
<p>For questions about these Terms of Service, please contact us at <a href="mailto:brian@hyattlabs.com">brian@hyattlabs.com</a>.</p>

<p><em>Last updated: ' . date('F j, Y') . '</em></p>';
        
        wp_insert_post(array(
            'post_title'   => 'Terms of Service',
            'post_name'    => 'terms-of-service',
            'post_content' => $terms_content,
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
    }
    
    // Cookie Policy
    if (!get_page_by_path('cookie-policy')) {
        $cookie_content = '<h2>What Are Cookies</h2>
<p>Cookies are small text files that are placed on your computer or mobile device when you visit a website. They are widely used to make websites work more efficiently and provide information to website owners.</p>

<h2>How We Use Cookies</h2>
<p>Hyatt Consulting uses cookies for the following purposes:</p>

<h3>Essential Cookies</h3>
<p>These cookies are necessary for the website to function properly. They enable basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies.</p>

<h3>Analytics Cookies</h3>
<p>We use analytics cookies to understand how visitors interact with our website. This helps us improve our website and services. These cookies collect information anonymously.</p>

<h3>Functional Cookies</h3>
<p>These cookies allow the website to remember choices you make (such as your preferred language or region) and provide enhanced, more personal features.</p>

<h2>Third-Party Cookies</h2>
<p>We may use third-party services that set their own cookies, including:</p>
<ul>
<li><strong>Google Analytics</strong> - for website analytics and performance monitoring</li>
<li><strong>Google Calendar</strong> - for appointment scheduling functionality</li>
</ul>

<h2>Managing Cookies</h2>
<p>Most web browsers allow you to control cookies through their settings. You can:</p>
<ul>
<li>View what cookies are stored on your device</li>
<li>Delete all or specific cookies</li>
<li>Block cookies from being set</li>
<li>Set your browser to notify you when a cookie is being set</li>
</ul>
<p>Please note that blocking or deleting cookies may impact your experience on our website and limit certain functionality.</p>

<h2>Browser-Specific Instructions</h2>
<ul>
<li><strong>Chrome:</strong> Settings → Privacy and Security → Cookies and other site data</li>
<li><strong>Firefox:</strong> Options → Privacy & Security → Cookies and Site Data</li>
<li><strong>Safari:</strong> Preferences → Privacy → Manage Website Data</li>
<li><strong>Edge:</strong> Settings → Cookies and site permissions → Cookies and site data</li>
</ul>

<h2>Updates to This Policy</h2>
<p>We may update this Cookie Policy from time to time. Any changes will be posted on this page with an updated revision date.</p>

<h2>Contact Us</h2>
<p>If you have questions about our use of cookies, please contact us at <a href="mailto:brian@hyattlabs.com">brian@hyattlabs.com</a>.</p>

<p><em>Last updated: ' . date('F j, Y') . '</em></p>';

        wp_insert_post(array(
            'post_title'   => 'Cookie Policy',
            'post_name'    => 'cookie-policy',
            'post_content' => $cookie_content,
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
    }
    
    // Set homepage as front page
    $home = get_page_by_path('home');
    if ($home) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home->ID);
    }
}
add_action('after_switch_theme', 'hyatt_create_default_pages');

/**
 * Homepage Meta Boxes
 */
function hyatt_add_homepage_meta_boxes() {
    $home = get_page_by_path('home');
    if ($home) {
        add_meta_box(
            'hyatt_hero_settings',
            'Hero Section',
            'hyatt_hero_meta_box_callback',
            'page',
            'normal',
            'high'
        );
        
        add_meta_box(
            'hyatt_methodology_settings',
            'Methodology Section',
            'hyatt_methodology_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'hyatt_add_homepage_meta_boxes');

function hyatt_hero_meta_box_callback($post) {
    wp_nonce_field('hyatt_save_meta', 'hyatt_meta_nonce');
    
    $headline = get_post_meta($post->ID, '_hyatt_hero_headline', true);
    $subtitle = get_post_meta($post->ID, '_hyatt_hero_subtitle', true);
    
    if (empty($headline)) {
        $headline = 'The Truth Behind Your Digital Investment.';
    }
    if (empty($subtitle)) {
        $subtitle = 'Agencies report data. We reveal the truth. As your independent digital detectives, we decode the jargon, verify the spend, and translate complex reports into the radical transparency you need to lead with confidence.';
    }
    ?>
    <p>
        <label for="hyatt_hero_headline"><strong>Hero Headline:</strong></label><br>
        <input type="text" id="hyatt_hero_headline" name="hyatt_hero_headline" value="<?php echo esc_attr($headline); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="hyatt_hero_subtitle"><strong>Hero Subtitle:</strong></label><br>
        <textarea id="hyatt_hero_subtitle" name="hyatt_hero_subtitle" rows="3" style="width: 100%;"><?php echo esc_textarea($subtitle); ?></textarea>
    </p>
    <?php
}

function hyatt_methodology_meta_box_callback($post) {
    $title = get_post_meta($post->ID, '_hyatt_methodology_title', true);
    $description = get_post_meta($post->ID, '_hyatt_methodology_description', true);
    
    if (empty($title)) {
        $title = 'Our Methodology';
    }
    if (empty($description)) {
        $description = 'A systematic approach to uncovering the truth behind your digital marketing performance.';
    }
    ?>
    <p>
        <label for="hyatt_methodology_title"><strong>Section Title:</strong></label><br>
        <input type="text" id="hyatt_methodology_title" name="hyatt_methodology_title" value="<?php echo esc_attr($title); ?>" style="width: 100%;">
    </p>
    <p>
        <label for="hyatt_methodology_description"><strong>Section Description:</strong></label><br>
        <textarea id="hyatt_methodology_description" name="hyatt_methodology_description" rows="2" style="width: 100%;"><?php echo esc_textarea($description); ?></textarea>
    </p>
    <?php
}

function hyatt_save_homepage_meta($post_id) {
    if (!isset($_POST['hyatt_meta_nonce']) || !wp_verify_nonce($_POST['hyatt_meta_nonce'], 'hyatt_save_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $fields = array(
        'hyatt_hero_headline',
        'hyatt_hero_subtitle',
        'hyatt_methodology_title',
        'hyatt_methodology_description',
    );
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'hyatt_save_homepage_meta');

/**
 * Add Schema Markup
 */
function hyatt_add_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'ProfessionalService',
            'name' => 'Hyatt Consulting',
            'description' => 'Independent digital marketing audit consultancy providing radical transparency for your digital investments.',
            'url' => home_url('/'),
            'serviceType' => array(
                'Digital Marketing Audit',
                'Google Ads Audit',
                'SEO Audit',
                'Agency Fee Analysis',
            ),
            'areaServed' => 'United States',
        );
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES) . '</script>';
    }
}
add_action('wp_head', 'hyatt_add_schema_markup');
