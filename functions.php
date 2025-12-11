<?php
/**
 * HyattLabs Theme Functions
 *
 * @package HyattLabs
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
        'primary' => __('Primary Menu', 'hyattlabs'),
        'footer'  => __('Footer Menu', 'hyattlabs'),
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
        'nonce'   => wp_create_nonce('hyatt_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'hyatt_enqueue_scripts');

/**
 * Theme Customizer Settings
 */
function hyatt_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hyatt_hero_settings', array(
        'title'    => __('Hero Section', 'hyattlabs'),
        'priority' => 31,
    ));
    
    $wp_customize->add_setting('hyatt_hero_title', array(
        'default'           => 'The Truth Behind Your Digital Investment.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hyatt_hero_title', array(
        'label'   => __('Hero Title', 'hyattlabs'),
        'section' => 'hyatt_hero_settings',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hyatt_hero_subtitle', array(
        'default'           => 'Agencies report data. We reveal the truth.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('hyatt_hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'hyattlabs'),
        'section' => 'hyatt_hero_settings',
        'type'    => 'textarea',
    ));
    
    // Stats Section
    $wp_customize->add_section('hyatt_stats_settings', array(
        'title'    => __('Stats Section', 'hyattlabs'),
        'priority' => 32,
    ));
    
    $stats = array(
        'ad_spend'     => array('label' => 'Ad Spend Audited', 'default' => '$15M+'),
        'waste'        => array('label' => 'Avg. Waste Identified', 'default' => '40%'),
        'agencies'     => array('label' => 'Agencies Reviewed', 'default' => '45+'),
        'independent'  => array('label' => 'Independent', 'default' => '100%'),
    );
    
    foreach ($stats as $key => $stat) {
        $wp_customize->add_setting("hyatt_stat_{$key}", array(
            'default'           => $stat['default'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        
        $wp_customize->add_control("hyatt_stat_{$key}", array(
            'label'   => $stat['label'],
            'section' => 'hyatt_stats_settings',
            'type'    => 'text',
        ));
    }
    
    // Social Links
    $wp_customize->add_section('hyatt_social_settings', array(
        'title'    => __('Social Links', 'hyattlabs'),
        'priority' => 33,
    ));
    
    $social = array('linkedin', 'twitter', 'email');
    
    foreach ($social as $platform) {
        $wp_customize->add_setting("hyatt_social_{$platform}", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control("hyatt_social_{$platform}", array(
            'label'   => ucfirst($platform) . ' URL',
            'section' => 'hyatt_social_settings',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'hyatt_customize_register');

/**
 * Contact Form Handler
 */
function hyatt_contact_form_handler() {
    if (!wp_verify_nonce($_POST['nonce'], 'hyatt_nonce')) {
        wp_send_json_error('Invalid nonce');
    }
    
    $website = sanitize_text_field($_POST['website']);
    $spend   = sanitize_text_field($_POST['spend']);
    $focus   = isset($_POST['focus']) ? array_map('sanitize_text_field', $_POST['focus']) : array();
    $focus_list = !empty($focus) ? implode(', ', $focus) : 'None selected';
    $message = sanitize_textarea_field($_POST['message']);
    
    // Contact form recipient
    $to = hyatt_get_option('hyatt_social_email', 'brian@hyattlabs.com');
    $subject = 'New Audit Request from ' . $website;
    
    $body = "New audit request received:\n\n";
    $body .= "Website: {$website}\n";
    $body .= "Monthly Spend: {$spend}\n";
    $body .= "Focus Areas: {$focus_list}\n";
    $body .= "Expected Outcome: {$message}\n";
    
    $headers = array('Content-Type: text/plain; charset=UTF-8');
    
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        wp_send_json_success('Request submitted successfully');
    } else {
        wp_send_json_error('Failed to send request');
    }
}
add_action('wp_ajax_hyatt_contact_form', 'hyatt_contact_form_handler');
add_action('wp_ajax_nopriv_hyatt_contact_form', 'hyatt_contact_form_handler');

/**
 * Custom Walker for Navigation
 */
class Hyatt_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        
        $output .= '<a href="' . esc_attr($item->url) . '" class="nav-link ' . esc_attr($class_names) . '">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
    
    public function end_el(&$output, $item, $depth = 0, $args = null) {
        // No closing tag needed
    }
}

/**
 * Get theme option helper
 */
function hyatt_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * Add Schema.org Structured Data
 */
function hyatt_add_schema_markup() {
    $site_name = get_bloginfo('name');
    $site_url = home_url('/');
    $site_description = get_bloginfo('description');
    $logo_url = get_template_directory_uri() . '/assets/images/hyattlabs-logo.png';
    
    // Organization Schema
    $organization_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        '@id' => $site_url . '#organization',
        'name' => 'HyattLabs',
        'alternateName' => 'Hyatt Companies, L.L.C.',
        'url' => $site_url,
        'logo' => array(
            '@type' => 'ImageObject',
            'url' => $logo_url,
            'width' => 512,
            'height' => 512
        ),
        'description' => 'Independent digital marketing auditing and consulting services. We provide Google Ads audits, SEO audits, AEO strategy, CTV/Programmatic reviews, and agency fee analysis.',
        'email' => hyatt_get_option('hyatt_social_email', 'brian@hyattlabs.com'),
        'foundingDate' => '2024',
        'priceRange' => '$$$$',
        'areaServed' => array(
            '@type' => 'Country',
            'name' => 'United States'
        ),
        'serviceType' => array(
            'Digital Marketing Audit',
            'Google Ads Audit',
            'SEO Audit',
            'Answer Engine Optimization',
            'Agency Fee Analysis',
            'CTV Advertising Audit',
            'Programmatic Advertising Audit'
        ),
        'knowsAbout' => array(
            'Digital Marketing',
            'Google Ads',
            'Search Engine Optimization',
            'Answer Engine Optimization',
            'Connected TV Advertising',
            'Programmatic Advertising',
            'IP Targeting',
            'Marketing Analytics',
            'Agency Management'
        ),
        'sameAs' => array(
            esc_url(hyatt_get_option('hyatt_social_linkedin', '')),
            esc_url(hyatt_get_option('hyatt_social_twitter', ''))
        )
    );
    
    // Remove empty sameAs entries
    $organization_schema['sameAs'] = array_filter($organization_schema['sameAs'], function($url) {
        return !empty($url) && $url !== '#';
    });
    
    // WebSite Schema
    $website_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => $site_url . '#website',
        'name' => $site_name,
        'url' => $site_url,
        'description' => $site_description,
        'publisher' => array(
            '@id' => $site_url . '#organization'
        ),
        'potentialAction' => array(
            '@type' => 'SearchAction',
            'target' => $site_url . '?s={search_term_string}',
            'query-input' => 'required name=search_term_string'
        )
    );
    
    // WebPage Schema (varies by page)
    $page_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        '@id' => get_permalink() . '#webpage',
        'url' => get_permalink(),
        'name' => wp_get_document_title(),
        'isPartOf' => array(
            '@id' => $site_url . '#website'
        ),
        'about' => array(
            '@id' => $site_url . '#organization'
        ),
        'datePublished' => get_the_date('c'),
        'dateModified' => get_the_modified_date('c'),
        'inLanguage' => get_locale()
    );
    
    // Add breadcrumb schema
    $breadcrumb_schema = hyatt_get_breadcrumb_schema();
    
    // Services Schema (for homepage and services pages)
    $services_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        '@id' => $site_url . '#services',
        'name' => 'Digital Marketing Audit Services',
        'description' => 'Comprehensive digital marketing auditing services for brands seeking transparency and accountability.',
        'numberOfItems' => 6,
        'itemListElement' => array(
            array(
                '@type' => 'Service',
                'position' => 1,
                'name' => 'AEO & Entity Audits',
                'description' => 'Audit your Knowledge Graph and Schema implementation to ensure AI models and answer engines see your brand correctly.',
                'provider' => array('@id' => $site_url . '#organization'),
                'serviceType' => 'Answer Engine Optimization Audit'
            ),
            array(
                '@type' => 'Service',
                'position' => 2,
                'name' => 'Google Ads Governance',
                'description' => 'Deep-dive audit into agency account structure, identifying wasted spend, poor bidding strategies, and lack of oversight.',
                'provider' => array('@id' => $site_url . '#organization'),
                'serviceType' => 'PPC Audit'
            ),
            array(
                '@type' => 'Service',
                'position' => 3,
                'name' => 'CTV & Programmatic Review',
                'description' => 'Auditing transparency in CTV buys and programmatic advertising. Verify premium network placement through log file analysis.',
                'provider' => array('@id' => $site_url . '#organization'),
                'serviceType' => 'Programmatic Advertising Audit'
            ),
            array(
                '@type' => 'Service',
                'position' => 4,
                'name' => 'Agency Fee Analysis',
                'description' => 'Benchmark current agency retainers and percentage of spend fees against industry standards.',
                'provider' => array('@id' => $site_url . '#organization'),
                'serviceType' => 'Agency Fee Benchmarking'
            ),
            array(
                '@type' => 'Service',
                'position' => 5,
                'name' => 'Technical SEO Audits',
                'description' => 'Independent verification of site health including crawl depth, Core Web Vitals, and indexing issues.',
                'provider' => array('@id' => $site_url . '#organization'),
                'serviceType' => 'SEO Audit'
            ),
            array(
                '@type' => 'Service',
                'position' => 6,
                'name' => 'Data Integrity & Attribution',
                'description' => 'Audit GTM and GA4 setup to ensure conversion data accuracy and proper attribution modeling.',
                'provider' => array('@id' => $site_url . '#organization'),
                'serviceType' => 'Analytics Audit'
            )
        )
    );
    
    // Output schemas
    echo '<script type="application/ld+json">' . wp_json_encode($organization_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    echo '<script type="application/ld+json">' . wp_json_encode($website_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    echo '<script type="application/ld+json">' . wp_json_encode($page_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    
    if (!empty($breadcrumb_schema)) {
        echo '<script type="application/ld+json">' . wp_json_encode($breadcrumb_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
    
    // Add services schema on homepage and audit services page
    if (is_front_page() || is_page_template('page-audit-services.php')) {
        echo '<script type="application/ld+json">' . wp_json_encode($services_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
    
    // Add FAQ Schema for AEO page
    if (is_page_template('page-aeo-strategy.php')) {
        $faq_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type' => 'Question',
                    'name' => 'What is Answer Engine Optimization (AEO)?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Answer Engine Optimization is the practice of optimizing your brand\'s digital presence to be understood and cited by AI systems like ChatGPT, Perplexity, and Google\'s AI Overviews. Unlike traditional SEO which focuses on ranking in search results, AEO focuses on being the source of AI-generated answers.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'How is AEO different from SEO?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'While SEO focuses on ranking in search engine results pages and driving clicks, AEO focuses on being cited as the authoritative source in AI-generated answers. SEO targets search engines, while AEO targets AI systems. The goal of SEO is click-through rate, while AEO aims for AI mentions and citations.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'Why does AEO matter for businesses?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'With over 1 billion weekly active users on ChatGPT alone and 40% of Gen Z preferring AI tools over traditional search, AEO is critical for brand visibility. AI gives answers directly without requiring clicks, so your brand either is or isn\'t mentioned in responses to relevant queries.'
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
    
    // Add Article Schema for blog posts
    if (is_single() && get_post_type() === 'post') {
        $article_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => get_the_title(),
            'description' => has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30, '...'),
            'image' => has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'full') : $site_url . '/wp-content/themes/hyatt-theme/assets/images/hero-background.jpg',
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'author' => array(
                '@type' => 'Person',
                'name' => get_the_author(),
                'url' => get_author_posts_url(get_the_author_meta('ID'))
            ),
            'publisher' => array(
                '@id' => $site_url . '#organization'
            ),
            'mainEntityOfPage' => array(
                '@type' => 'WebPage',
                '@id' => get_permalink()
            )
        );
        
        // Add article section/category if available
        $categories = get_the_category();
        if (!empty($categories)) {
            $article_schema['articleSection'] = $categories[0]->name;
        }
        
        // Add keywords from tags
        $tags = get_the_tags();
        if ($tags) {
            $article_schema['keywords'] = implode(', ', wp_list_pluck($tags, 'name'));
        }
        
        echo '<script type="application/ld+json">' . wp_json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
    
    // Add Blog schema for blog index
    if (is_home()) {
        $blog_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Blog',
            'name' => 'HyattLabs Insights & Analysis',
            'description' => 'Expert insights on digital marketing auditing, agency accountability, Google Ads optimization, SEO strategy, and the evolving landscape of AEO and paid media.',
            'url' => get_permalink(get_option('page_for_posts')),
            'publisher' => array(
                '@id' => $site_url . '#organization'
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode($blog_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'hyatt_add_schema_markup', 5);

/**
 * Generate Breadcrumb Schema
 */
function hyatt_get_breadcrumb_schema() {
    $breadcrumbs = array();
    $position = 1;
    
    // Home
    $breadcrumbs[] = array(
        '@type' => 'ListItem',
        'position' => $position++,
        'name' => 'Home',
        'item' => home_url('/')
    );
    
    // Add current page for non-homepage
    if (!is_front_page()) {
        $breadcrumbs[] = array(
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => wp_get_document_title(),
            'item' => get_permalink()
        );
    }
    
    if (count($breadcrumbs) > 1) {
        return array(
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumbs
        );
    }
    
    return null;
}

/**
 * Add Schema meta tags to head
 */
function hyatt_add_meta_tags() {
    $title = '';
    $description = '';
    
    if (is_front_page()) {
        $title = 'Independent Digital Marketing Audits | HyattLabs';
        $description = 'Is your agency wasting your ad spend? Get an independent audit of your Google Ads, SEO, CTV, and agency fees. We reveal the truth behind your digital investment.';
    } elseif (is_page_template('page-audit-services.php')) {
        $title = 'Digital Marketing Audit Services | Google Ads, SEO, CTV & More';
        $description = 'Comprehensive audits for Google Ads, SEO, CTV/Programmatic, and agency fees. Expose wasted spend and hold your agency accountable. Request your confidential audit today.';
    } elseif (is_page_template('page-aeo-strategy.php')) {
        $title = 'Answer Engine Optimization (AEO) | Is Your Brand Visible to AI?';
        $description = 'ChatGPT and AI search are changing everything. Is your brand being recommended? Our AEO audits ensure AI systems see and cite your business correctly.';
    } elseif (is_page_template('page-fee-analysis.php')) {
        $title = 'Agency Fee Analysis | Are You Overpaying Your Marketing Agency?';
        $description = 'Benchmark your agency fees against industry standards. Most companies overpay by 15-30%. Get a confidential fee analysis and negotiation playbook.';
    } elseif (is_page_template('page-methodology.php')) {
        $title = 'Our Audit Methodology | Independent, Transparent, Actionable';
        $description = 'No agency relationships. No referral fees. Just the truth about your digital marketing performance. Learn how our independent audits deliver real accountability.';
    } elseif (is_page_template('page-privacy-policy.php')) {
        $title = 'Privacy Policy | HyattLabs';
        $description = 'Learn how HyattLabs collects, uses, and protects your personal information. We are committed to safeguarding your privacy.';
    } elseif (is_page_template('page-terms-of-service.php')) {
        $title = 'Terms of Service | HyattLabs';
        $description = 'Terms and conditions for using HyattLabs\'s website and digital marketing audit services.';
    } elseif (is_home() || is_category() || is_tag() || is_author()) {
        $title = 'Insights & Analysis | Digital Marketing Audit Blog | HyattLabs';
        $description = 'Expert insights on digital marketing auditing, agency accountability, Google Ads optimization, SEO strategy, and the evolving landscape of AEO and paid media.';
        if (is_category()) {
            $title = single_cat_title('', false) . ' | HyattLabs Blog';
            $description = category_description() ?: $description;
        } elseif (is_tag()) {
            $title = single_tag_title('', false) . ' | HyattLabs Blog';
            $description = tag_description() ?: $description;
        }
    } elseif (is_single()) {
        $title = get_the_title() . ' | HyattLabs';
        $description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30, '...');
    } elseif (is_404()) {
        $title = 'Page Not Found | HyattLabs';
        $description = 'The page you\'re looking for doesn\'t exist. Return to our homepage to learn about our independent digital marketing audit services.';
    } else {
        $title = wp_get_document_title();
        $description = get_bloginfo('description');
    }
    
    // Output meta description
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    
    // Open Graph tags
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";
    echo '<meta property="og:site_name" content="HyattLabs">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:image" content="' . esc_url(get_template_directory_uri() . '/assets/images/hero-background.jpg') . '">' . "\n";
    echo '<meta property="og:locale" content="en_US">' . "\n";
    
    // Twitter Card tags
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url(get_template_directory_uri() . '/assets/images/hero-background.jpg') . '">' . "\n";
    
    // Additional SEO meta tags
    echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">' . "\n";
    echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">' . "\n";
}
add_action('wp_head', 'hyatt_add_meta_tags', 1);

/**
 * Custom document title for SEO
 */
function hyatt_custom_document_title($title) {
    if (is_front_page()) {
        return 'Independent Digital Marketing Audits | HyattLabs';
    } elseif (is_page_template('page-audit-services.php')) {
        return 'Digital Marketing Audit Services | Google Ads, SEO, CTV & More';
    } elseif (is_page_template('page-aeo-strategy.php')) {
        return 'Answer Engine Optimization (AEO) | Is Your Brand Visible to AI?';
    } elseif (is_page_template('page-fee-analysis.php')) {
        return 'Agency Fee Analysis | Are You Overpaying Your Marketing Agency?';
    } elseif (is_page_template('page-methodology.php')) {
        return 'Our Audit Methodology | Independent, Transparent, Actionable';
    } elseif (is_page_template('page-privacy-policy.php')) {
        return 'Privacy Policy | HyattLabs';
    } elseif (is_page_template('page-terms-of-service.php')) {
        return 'Terms of Service | HyattLabs';
    } elseif (is_home()) {
        return 'Insights & Analysis | Digital Marketing Audit Blog | HyattLabs';
    } elseif (is_category()) {
        return single_cat_title('', false) . ' | HyattLabs Blog';
    } elseif (is_tag()) {
        return single_tag_title('', false) . ' | HyattLabs Blog';
    } elseif (is_single()) {
        return get_the_title() . ' | HyattLabs';
    } elseif (is_404()) {
        return 'Page Not Found | HyattLabs';
    }
    return $title;
}
add_filter('pre_get_document_title', 'hyatt_custom_document_title');

/**
 * ============================================
 * PAGE CONTENT META BOXES
 * Allows editing page content from the dashboard
 * ============================================
 */

/**
 * Register Meta Boxes for Page Templates
 */
function hyatt_register_meta_boxes() {
    // Homepage meta box
    add_meta_box(
        'hyatt_homepage_content',
        'Homepage Content',
        'hyatt_homepage_meta_box_callback',
        'page',
        'normal',
        'high'
    );
    
    // Methodology page meta box
    add_meta_box(
        'hyatt_methodology_content',
        'Methodology Page Content',
        'hyatt_methodology_meta_box_callback',
        'page',
        'normal',
        'high'
    );
    
    // Audit Services page meta box
    add_meta_box(
        'hyatt_audit_services_content',
        'Audit Services Page Content',
        'hyatt_audit_services_meta_box_callback',
        'page',
        'normal',
        'high'
    );
    
    // AEO Strategy page meta box
    add_meta_box(
        'hyatt_aeo_content',
        'AEO Strategy Page Content',
        'hyatt_aeo_meta_box_callback',
        'page',
        'normal',
        'high'
    );
    
    // Fee Analysis page meta box
    add_meta_box(
        'hyatt_fee_analysis_content',
        'Fee Analysis Page Content',
        'hyatt_fee_analysis_meta_box_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'hyatt_register_meta_boxes');

/**
 * Homepage Meta Box Callback
 */
function hyatt_homepage_meta_box_callback($post) {
    // Only show for pages using the default template (front page)
    $template = get_page_template_slug($post->ID);
    if ($template !== '' && $template !== 'index.php') {
        echo '<p style="color: #666;">This meta box is for the homepage only. Select the appropriate template for this page.</p>';
        return;
    }
    
    wp_nonce_field('hyatt_save_meta_boxes', 'hyatt_meta_nonce');
    
    // Get saved values with defaults
    $hero_title = get_post_meta($post->ID, '_hyatt_hero_title', true) ?: 'The Truth Behind Your Digital Investment.';
    $hero_subtitle = get_post_meta($post->ID, '_hyatt_hero_subtitle', true) ?: 'Agencies report data. We reveal the truth. As your independent digital detectives, we decode the jargon, verify the spend, and translate complex reports into the radical transparency you need to lead with confidence.';
    $services_intro = get_post_meta($post->ID, '_hyatt_services_intro', true) ?: 'Blind trust costs millions. HyattLabs provides independent auditing for brands who need to verify their agency\'s performance and fee structures.';
    $contact_title = get_post_meta($post->ID, '_hyatt_contact_title', true) ?: 'Verify Your Agency\'s Performance.';
    $contact_subtitle = get_post_meta($post->ID, '_hyatt_contact_subtitle', true) ?: 'Fill out the form below to request a fee and performance review.';
    
    ?>
    <style>
        .hyatt-meta-field { margin-bottom: 20px; }
        .hyatt-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1d2327; }
        .hyatt-meta-field input[type="text"],
        .hyatt-meta-field textarea { width: 100%; padding: 8px; border: 1px solid #8c8f94; border-radius: 4px; }
        .hyatt-meta-field textarea { min-height: 100px; }
        .hyatt-meta-field .description { font-size: 13px; color: #646970; margin-top: 4px; }
        .hyatt-section-title { font-size: 16px; font-weight: 700; color: #1d2327; margin: 25px 0 15px; padding-bottom: 8px; border-bottom: 2px solid #2271b1; }
        .hyatt-section-title:first-child { margin-top: 0; }
    </style>
    
    <h3 class="hyatt-section-title">Hero Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_hero_title">Hero Title</label>
        <input type="text" id="hyatt_hero_title" name="hyatt_hero_title" value="<?php echo esc_attr($hero_title); ?>">
        <p class="description">Main headline on the homepage</p>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_hero_subtitle">Hero Subtitle</label>
        <textarea id="hyatt_hero_subtitle" name="hyatt_hero_subtitle"><?php echo esc_textarea($hero_subtitle); ?></textarea>
        <p class="description">Supporting text below the headline</p>
    </div>
    
    <h3 class="hyatt-section-title">Services Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_services_intro">Services Introduction</label>
        <textarea id="hyatt_services_intro" name="hyatt_services_intro"><?php echo esc_textarea($services_intro); ?></textarea>
        <p class="description">Introduction text in the Strategic Governance card</p>
    </div>
    
    <h3 class="hyatt-section-title">Contact Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_contact_title">Contact Section Title</label>
        <input type="text" id="hyatt_contact_title" name="hyatt_contact_title" value="<?php echo esc_attr($contact_title); ?>">
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_contact_subtitle">Contact Section Subtitle</label>
        <textarea id="hyatt_contact_subtitle" name="hyatt_contact_subtitle"><?php echo esc_textarea($contact_subtitle); ?></textarea>
    </div>
    <?php
}

/**
 * Methodology Page Meta Box Callback
 */
function hyatt_methodology_meta_box_callback($post) {
    $template = get_page_template_slug($post->ID);
    if ($template !== 'page-methodology.php') {
        echo '<p style="color: #666;">This meta box is for the Methodology page template. Select "Methodology" from the Template dropdown.</p>';
        return;
    }
    
    wp_nonce_field('hyatt_save_meta_boxes', 'hyatt_meta_nonce');
    
    // Get saved values with defaults
    $hero_subtitle = get_post_meta($post->ID, '_hyatt_meth_hero_subtitle', true) ?: 'Rigorous, independent, and built on radical transparency. Here\'s how we approach every engagement.';
    $principle_1 = get_post_meta($post->ID, '_hyatt_meth_principle_1', true) ?: 'We never accept kickbacks or referral fees. We can refer trusted agencies, but our only incentive is finding the truth.';
    $principle_2 = get_post_meta($post->ID, '_hyatt_meth_principle_2', true) ?: 'We show our work. Every finding is documented with evidence, methodology, and clear reasoning.';
    $principle_3 = get_post_meta($post->ID, '_hyatt_meth_principle_3', true) ?: 'We verify everything. Assumptions are identified. Estimates include confidence levels and ranges.';
    $principle_4 = get_post_meta($post->ID, '_hyatt_meth_principle_4', true) ?: 'Findings without recommendations are useless. Every issue includes prioritized, practical next steps.';
    $dont_do_1 = get_post_meta($post->ID, '_hyatt_meth_dont_1', true) ?: 'We can refer you to agencies we trust, but we never accept kickbacks or referral fees. Our recommendations are always unbiased.';
    $dont_do_2 = get_post_meta($post->ID, '_hyatt_meth_dont_2', true) ?: 'We don\'t run ads or marketing campaigns for our consulting clients. Managing accounts would compromise our objectivity as auditors.';
    $dont_do_3 = get_post_meta($post->ID, '_hyatt_meth_dont_3', true) ?: 'No tool partnerships, no preferred vendors, no hidden incentives. Our software and platform recommendations are 100% merit-based.';
    
    ?>
    <style>
        .hyatt-meta-field { margin-bottom: 20px; }
        .hyatt-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1d2327; }
        .hyatt-meta-field input[type="text"],
        .hyatt-meta-field textarea { width: 100%; padding: 8px; border: 1px solid #8c8f94; border-radius: 4px; }
        .hyatt-meta-field textarea { min-height: 80px; }
        .hyatt-meta-field .description { font-size: 13px; color: #646970; margin-top: 4px; }
        .hyatt-section-title { font-size: 16px; font-weight: 700; color: #1d2327; margin: 25px 0 15px; padding-bottom: 8px; border-bottom: 2px solid #2271b1; }
    </style>
    
    <h3 class="hyatt-section-title">Hero Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_hero_subtitle">Hero Subtitle</label>
        <textarea id="hyatt_meth_hero_subtitle" name="hyatt_meth_hero_subtitle"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </div>
    
    <h3 class="hyatt-section-title">Guiding Principles</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_principle_1">Independence</label>
        <textarea id="hyatt_meth_principle_1" name="hyatt_meth_principle_1"><?php echo esc_textarea($principle_1); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_principle_2">Transparency</label>
        <textarea id="hyatt_meth_principle_2" name="hyatt_meth_principle_2"><?php echo esc_textarea($principle_2); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_principle_3">Accuracy</label>
        <textarea id="hyatt_meth_principle_3" name="hyatt_meth_principle_3"><?php echo esc_textarea($principle_3); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_principle_4">Actionability</label>
        <textarea id="hyatt_meth_principle_4" name="hyatt_meth_principle_4"><?php echo esc_textarea($principle_4); ?></textarea>
    </div>
    
    <h3 class="hyatt-section-title">What We Don't Do</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_dont_1">No Kickbacks or Referral Fees</label>
        <textarea id="hyatt_meth_dont_1" name="hyatt_meth_dont_1"><?php echo esc_textarea($dont_do_1); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_dont_2">No Campaign Management</label>
        <textarea id="hyatt_meth_dont_2" name="hyatt_meth_dont_2"><?php echo esc_textarea($dont_do_2); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_meth_dont_3">No Vendor Partnerships</label>
        <textarea id="hyatt_meth_dont_3" name="hyatt_meth_dont_3"><?php echo esc_textarea($dont_do_3); ?></textarea>
    </div>
    <?php
}

/**
 * Audit Services Page Meta Box Callback
 */
function hyatt_audit_services_meta_box_callback($post) {
    $template = get_page_template_slug($post->ID);
    if ($template !== 'page-audit-services.php') {
        echo '<p style="color: #666;">This meta box is for the Audit Services page template. Select "Audit Services" from the Template dropdown.</p>';
        return;
    }
    
    wp_nonce_field('hyatt_save_meta_boxes', 'hyatt_meta_nonce');
    
    $hero_subtitle = get_post_meta($post->ID, '_hyatt_audit_hero_subtitle', true) ?: 'Comprehensive auditing services designed to uncover the truth about your digital marketing performance.';
    $service_1 = get_post_meta($post->ID, '_hyatt_audit_service_1', true) ?: 'A comprehensive review of your Google Ads account structure, bidding strategies, keyword targeting, and budget allocation. We identify wasted spend and missed opportunities.';
    $service_2 = get_post_meta($post->ID, '_hyatt_audit_service_2', true) ?: 'Deep analysis of your site architecture, Core Web Vitals, indexation status, internal linking, and schema implementation. We find what your current team may have missed.';
    $service_3 = get_post_meta($post->ID, '_hyatt_audit_service_3', true) ?: 'Verification of your CTV and programmatic buys through log-level data analysis. We ensure you\'re getting premium inventory, not cheap remnant placements.';
    $service_4 = get_post_meta($post->ID, '_hyatt_audit_service_4', true) ?: 'Validation of your IP targeting campaigns including match rates, delivery verification, and audience quality. We ensure your ads reach the right business decision-makers.';
    $service_5 = get_post_meta($post->ID, '_hyatt_audit_service_5', true) ?: 'Assessment of your brand\'s visibility to AI systems like ChatGPT, Perplexity, and Google AI Overviews. We audit your Knowledge Graph presence and entity optimization.';
    $service_6 = get_post_meta($post->ID, '_hyatt_audit_service_6', true) ?: 'Audit of your GTM container, GA4 configuration, and conversion tracking setup. We ensure you\'re making decisions based on accurate, reliable data.';
    
    ?>
    <style>
        .hyatt-meta-field { margin-bottom: 20px; }
        .hyatt-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1d2327; }
        .hyatt-meta-field textarea { width: 100%; padding: 8px; border: 1px solid #8c8f94; border-radius: 4px; min-height: 80px; }
        .hyatt-meta-field .description { font-size: 13px; color: #646970; margin-top: 4px; }
        .hyatt-section-title { font-size: 16px; font-weight: 700; color: #1d2327; margin: 25px 0 15px; padding-bottom: 8px; border-bottom: 2px solid #2271b1; }
    </style>
    
    <h3 class="hyatt-section-title">Hero Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_audit_hero_subtitle">Hero Subtitle</label>
        <textarea id="hyatt_audit_hero_subtitle" name="hyatt_audit_hero_subtitle"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </div>
    
    <h3 class="hyatt-section-title">Service Descriptions</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_audit_service_1">Google Ads Audit</label>
        <textarea id="hyatt_audit_service_1" name="hyatt_audit_service_1"><?php echo esc_textarea($service_1); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_audit_service_2">Technical SEO Audit</label>
        <textarea id="hyatt_audit_service_2" name="hyatt_audit_service_2"><?php echo esc_textarea($service_2); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_audit_service_3">CTV & Programmatic Audit</label>
        <textarea id="hyatt_audit_service_3" name="hyatt_audit_service_3"><?php echo esc_textarea($service_3); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_audit_service_4">IP Targeting Audit</label>
        <textarea id="hyatt_audit_service_4" name="hyatt_audit_service_4"><?php echo esc_textarea($service_4); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_audit_service_5">AEO Readiness Audit</label>
        <textarea id="hyatt_audit_service_5" name="hyatt_audit_service_5"><?php echo esc_textarea($service_5); ?></textarea>
    </div>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_audit_service_6">Data & Attribution Audit</label>
        <textarea id="hyatt_audit_service_6" name="hyatt_audit_service_6"><?php echo esc_textarea($service_6); ?></textarea>
    </div>
    <?php
}

/**
 * AEO Strategy Page Meta Box Callback
 */
function hyatt_aeo_meta_box_callback($post) {
    $template = get_page_template_slug($post->ID);
    if ($template !== 'page-aeo-strategy.php') {
        echo '<p style="color: #666;">This meta box is for the AEO Strategy page template. Select "AEO Strategy" from the Template dropdown.</p>';
        return;
    }
    
    wp_nonce_field('hyatt_save_meta_boxes', 'hyatt_meta_nonce');
    
    $hero_subtitle = get_post_meta($post->ID, '_hyatt_aeo_hero_subtitle', true) ?: 'The landscape is shifting. AI-powered answer engines are changing how people find information—and your brand needs to be ready.';
    $what_is_aeo = get_post_meta($post->ID, '_hyatt_aeo_what_is', true) ?: 'Answer Engine Optimization is the practice of optimizing your brand\'s digital presence to be understood and cited by AI systems—ChatGPT, Perplexity, Google\'s AI Overviews, and the growing ecosystem of AI-powered search tools.';
    
    ?>
    <style>
        .hyatt-meta-field { margin-bottom: 20px; }
        .hyatt-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1d2327; }
        .hyatt-meta-field textarea { width: 100%; padding: 8px; border: 1px solid #8c8f94; border-radius: 4px; min-height: 100px; }
        .hyatt-meta-field .description { font-size: 13px; color: #646970; margin-top: 4px; }
        .hyatt-section-title { font-size: 16px; font-weight: 700; color: #1d2327; margin: 25px 0 15px; padding-bottom: 8px; border-bottom: 2px solid #2271b1; }
    </style>
    
    <h3 class="hyatt-section-title">Hero Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_aeo_hero_subtitle">Hero Subtitle</label>
        <textarea id="hyatt_aeo_hero_subtitle" name="hyatt_aeo_hero_subtitle"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </div>
    
    <h3 class="hyatt-section-title">What is AEO Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_aeo_what_is">What is AEO Description</label>
        <textarea id="hyatt_aeo_what_is" name="hyatt_aeo_what_is"><?php echo esc_textarea($what_is_aeo); ?></textarea>
    </div>
    <?php
}

/**
 * Fee Analysis Page Meta Box Callback
 */
function hyatt_fee_analysis_meta_box_callback($post) {
    $template = get_page_template_slug($post->ID);
    if ($template !== 'page-fee-analysis.php') {
        echo '<p style="color: #666;">This meta box is for the Fee Analysis page template. Select "Fee Analysis" from the Template dropdown.</p>';
        return;
    }
    
    wp_nonce_field('hyatt_save_meta_boxes', 'hyatt_meta_nonce');
    
    $hero_subtitle = get_post_meta($post->ID, '_hyatt_fee_hero_subtitle', true) ?: 'Most companies overpay their agencies by 15-30%. Our independent analysis reveals whether your fees align with industry standards.';
    $problem_text = get_post_meta($post->ID, '_hyatt_fee_problem', true) ?: 'Agency fee structures are intentionally complex. Percentage of spend, retainers, platform fees, management fees—it all adds up. Without an independent benchmark, you have no way to know if you\'re getting fair value.';
    
    ?>
    <style>
        .hyatt-meta-field { margin-bottom: 20px; }
        .hyatt-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; color: #1d2327; }
        .hyatt-meta-field textarea { width: 100%; padding: 8px; border: 1px solid #8c8f94; border-radius: 4px; min-height: 100px; }
        .hyatt-meta-field .description { font-size: 13px; color: #646970; margin-top: 4px; }
        .hyatt-section-title { font-size: 16px; font-weight: 700; color: #1d2327; margin: 25px 0 15px; padding-bottom: 8px; border-bottom: 2px solid #2271b1; }
    </style>
    
    <h3 class="hyatt-section-title">Hero Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_fee_hero_subtitle">Hero Subtitle</label>
        <textarea id="hyatt_fee_hero_subtitle" name="hyatt_fee_hero_subtitle"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </div>
    
    <h3 class="hyatt-section-title">The Problem Section</h3>
    
    <div class="hyatt-meta-field">
        <label for="hyatt_fee_problem">Problem Description</label>
        <textarea id="hyatt_fee_problem" name="hyatt_fee_problem"><?php echo esc_textarea($problem_text); ?></textarea>
    </div>
    <?php
}

/**
 * Save Meta Box Data
 */
function hyatt_save_meta_boxes($post_id) {
    // Security checks
    if (!isset($_POST['hyatt_meta_nonce']) || !wp_verify_nonce($_POST['hyatt_meta_nonce'], 'hyatt_save_meta_boxes')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Homepage fields
    $homepage_fields = array(
        'hyatt_hero_title' => '_hyatt_hero_title',
        'hyatt_hero_subtitle' => '_hyatt_hero_subtitle',
        'hyatt_services_intro' => '_hyatt_services_intro',
        'hyatt_contact_title' => '_hyatt_contact_title',
        'hyatt_contact_subtitle' => '_hyatt_contact_subtitle',
    );
    
    // Methodology fields
    $methodology_fields = array(
        'hyatt_meth_hero_subtitle' => '_hyatt_meth_hero_subtitle',
        'hyatt_meth_principle_1' => '_hyatt_meth_principle_1',
        'hyatt_meth_principle_2' => '_hyatt_meth_principle_2',
        'hyatt_meth_principle_3' => '_hyatt_meth_principle_3',
        'hyatt_meth_principle_4' => '_hyatt_meth_principle_4',
        'hyatt_meth_dont_1' => '_hyatt_meth_dont_1',
        'hyatt_meth_dont_2' => '_hyatt_meth_dont_2',
        'hyatt_meth_dont_3' => '_hyatt_meth_dont_3',
    );
    
    // Audit Services fields
    $audit_fields = array(
        'hyatt_audit_hero_subtitle' => '_hyatt_audit_hero_subtitle',
        'hyatt_audit_service_1' => '_hyatt_audit_service_1',
        'hyatt_audit_service_2' => '_hyatt_audit_service_2',
        'hyatt_audit_service_3' => '_hyatt_audit_service_3',
        'hyatt_audit_service_4' => '_hyatt_audit_service_4',
        'hyatt_audit_service_5' => '_hyatt_audit_service_5',
        'hyatt_audit_service_6' => '_hyatt_audit_service_6',
    );
    
    // AEO fields
    $aeo_fields = array(
        'hyatt_aeo_hero_subtitle' => '_hyatt_aeo_hero_subtitle',
        'hyatt_aeo_what_is' => '_hyatt_aeo_what_is',
    );
    
    // Fee Analysis fields
    $fee_fields = array(
        'hyatt_fee_hero_subtitle' => '_hyatt_fee_hero_subtitle',
        'hyatt_fee_problem' => '_hyatt_fee_problem',
    );
    
    // Combine all fields
    $all_fields = array_merge($homepage_fields, $methodology_fields, $audit_fields, $aeo_fields, $fee_fields);
    
    // Save each field
    foreach ($all_fields as $post_field => $meta_key) {
        if (isset($_POST[$post_field])) {
            update_post_meta($post_id, $meta_key, sanitize_textarea_field($_POST[$post_field]));
        }
    }
}
add_action('save_post', 'hyatt_save_meta_boxes');

/**
 * Helper function to get page meta with default fallback
 */
function hyatt_get_page_meta($key, $default = '') {
    global $post;
    if (!$post) return $default;
    
    $value = get_post_meta($post->ID, $key, true);
    return !empty($value) ? $value : $default;
}
