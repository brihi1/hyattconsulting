<?php
/**
 * Front Page Template
 *
 * @package Hyatt_Consulting
 */

get_header();

// Get homepage meta values
$home_id = get_option('page_on_front');
$hero_headline = get_post_meta($home_id, '_hyatt_hero_headline', true);
$hero_subtitle = get_post_meta($home_id, '_hyatt_hero_subtitle', true);
$methodology_title = get_post_meta($home_id, '_hyatt_methodology_title', true);
$methodology_description = get_post_meta($home_id, '_hyatt_methodology_description', true);

// Defaults
if (empty($hero_headline)) $hero_headline = 'The Truth Behind Your Digital Investment.';
if (empty($hero_subtitle)) $hero_subtitle = 'Agencies report data. We reveal the truth. As your <span class="hero-subtitle-highlight">independent digital detectives</span>, we decode the jargon, verify the spend, and translate complex reports into the radical transparency you need to lead with confidence.';
if (empty($methodology_title)) $methodology_title = 'Our Methodology';
if (empty($methodology_description)) $methodology_description = 'A systematic approach to uncovering the truth behind your digital marketing performance.';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg">
        <img 
            src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?q=80&w=2070&auto=format&fit=crop" 
            alt="Digital Background" 
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
        <div class="hero-glow hero-glow-1 animate-pulse"></div>
        <div class="hero-glow hero-glow-2"></div>
    </div>
    
    <div class="container hero-content">
        <div class="hero-grid">
            <div>
                <h1>
                    <?php 
                    $headline_parts = explode(' ', $hero_headline);
                    $first_part = array_slice($headline_parts, 0, 3);
                    $second_part = array_slice($headline_parts, 3);
                    echo esc_html(implode(' ', $first_part)); 
                    ?> <br>
                    <span class="gradient-text animate-gradient-x"><?php echo esc_html(implode(' ', $second_part)); ?></span>
                </h1>
                <p class="hero-subtitle">
                    <?php echo wp_kses($hero_subtitle, array('span' => array('class' => array()))); ?>
                </p>
                
                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary">
                        Start Audit 
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="#methodology" class="btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 11 14 15 10"></polyline>
                        </svg>
                        Methodology
                    </a>
                </div>
                
                <div class="hero-badges">
                    <span class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Radical Transparency
                    </span>
                    <span class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        100% Independent
                    </span>
                    <span class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        No Kickbacks
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-value gradient-text"><?php echo esc_html(hyatt_get_option('hyatt_stat_1_value', '$15M+')); ?></div>
                <div class="stat-label"><?php echo esc_html(hyatt_get_option('hyatt_stat_1_label', 'Ad Spend Audited')); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-value gradient-text"><?php echo esc_html(hyatt_get_option('hyatt_stat_2_value', '40%')); ?></div>
                <div class="stat-label"><?php echo esc_html(hyatt_get_option('hyatt_stat_2_label', 'Avg. Waste Found')); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-value gradient-text"><?php echo esc_html(hyatt_get_option('hyatt_stat_3_value', '100+')); ?></div>
                <div class="stat-label"><?php echo esc_html(hyatt_get_option('hyatt_stat_3_label', 'Audits Completed')); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-value gradient-text"><?php echo esc_html(hyatt_get_option('hyatt_stat_4_value', '15+')); ?></div>
                <div class="stat-label"><?php echo esc_html(hyatt_get_option('hyatt_stat_4_label', 'Years Experience')); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section id="methodology" class="methodology">
    <div class="container">
        <span class="section-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            Independent Analysis
        </span>
        <h2 class="section-title"><?php echo esc_html($methodology_title); ?></h2>
        <p class="section-description"><?php echo esc_html($methodology_description); ?></p>
        
        <div class="methodology-grid">
            <div class="method-card">
                <div class="method-icon" style="background: rgba(59, 130, 246, 0.1); border: 1px solid rgba(59, 130, 246, 0.2);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h3>Deep Investigation</h3>
                <p>We dig into the data your agency should be showing you but isn't.</p>
            </div>
            
            <div class="method-card">
                <div class="method-icon" style="background: rgba(99, 102, 241, 0.1); border: 1px solid rgba(99, 102, 241, 0.2);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                </div>
                <h3>Clear Reporting</h3>
                <p>No jargon. Plain-language findings with actionable recommendations.</p>
            </div>
            
            <div class="method-card">
                <div class="method-icon" style="background: rgba(124, 58, 237, 0.1); border: 1px solid rgba(124, 58, 237, 0.2);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <polyline points="9 12 11 14 15 10"></polyline>
                    </svg>
                </div>
                <h3>Total Independence</h3>
                <p>We never accept kickbacks or referral fees. Our only client is you.</p>
            </div>
            
            <div class="method-card">
                <div class="method-icon" style="background: rgba(236, 72, 153, 0.1); border: 1px solid rgba(236, 72, 153, 0.2);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                </div>
                <h3>Measurable Impact</h3>
                <p>Concrete findings you can use to improve ROI immediately.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services">
    <div class="container">
        <span class="section-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
            </svg>
            Audit Services
        </span>
        <h2 class="section-title">Comprehensive Digital Audits</h2>
        <p class="section-description">Expert analysis across all major digital marketing channels.</p>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(99, 102, 241, 0.1)); border: 1px solid rgba(59, 130, 246, 0.2);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </div>
                <h3>Google Ads Governance</h3>
                <p>Complete account structure review, spend analysis, and optimization opportunities.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(124, 58, 237, 0.1)); border: 1px solid rgba(99, 102, 241, 0.2);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h3>SEO & Entity Audit</h3>
                <p>Technical SEO review, content analysis, and entity optimization strategy.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(236, 72, 153, 0.1)); border: 1px solid rgba(124, 58, 237, 0.2);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                </div>
                <h3>CTV & Programmatic Review</h3>
                <p>Connected TV and programmatic ad buy analysis for transparency and efficiency.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, rgba(236, 72, 153, 0.1), rgba(244, 114, 182, 0.1)); border: 1px solid rgba(236, 72, 153, 0.2);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <h3>Agency Fee Analysis</h3>
                <p>Benchmark your agency fees against industry standards and contracts.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(59, 130, 246, 0.1)); border: 1px solid rgba(34, 197, 94, 0.2);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                    </svg>
                </div>
                <h3>Technical SEO Audit</h3>
                <p>Site architecture, crawlability, indexation, and Core Web Vitals analysis.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon" style="background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(236, 72, 153, 0.1)); border: 1px solid rgba(245, 158, 11, 0.2);">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                </div>
                <h3>Data & Attribution</h3>
                <p>Analytics setup review, attribution modeling, and data integrity verification.</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <span class="section-badge">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
            Get Started
        </span>
        <h2 class="section-title">Ready for Radical Transparency?</h2>
        <p class="section-description">Tell us about your situation and we'll show you what's really happening with your digital marketing.</p>
        
        <div class="contact-grid">
            <div class="contact-form">
                <form id="contact-form">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label>Areas of Interest</label>
                        <div class="form-checkbox-group">
                            <label class="form-checkbox-label">
                                <input type="checkbox" name="services[]" value="Google Ads">
                                <span>Google Ads</span>
                            </label>
                            <label class="form-checkbox-label">
                                <input type="checkbox" name="services[]" value="SEO">
                                <span>SEO</span>
                            </label>
                            <label class="form-checkbox-label">
                                <input type="checkbox" name="services[]" value="CTV/Programmatic">
                                <span>CTV/Programmatic</span>
                            </label>
                            <label class="form-checkbox-label">
                                <input type="checkbox" name="services[]" value="Agency Fees">
                                <span>Agency Fees</span>
                            </label>
                            <label class="form-checkbox-label">
                                <input type="checkbox" name="services[]" value="Data/Attribution">
                                <span>Data/Attribution</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Tell us about your situation</label>
                        <textarea id="message" name="message" placeholder="What questions do you have about your current digital marketing performance?"></textarea>
                    </div>
                    
                    <button type="submit" class="form-submit">
                        Request Consultation
                    </button>
                    
                    <div id="form-message" class="form-message" style="display: none;"></div>
                </form>
            </div>
            
            <div class="contact-info">
                <h3>Why Work With Us?</h3>
                <p>We're not here to sell you services or take over your marketing. We're here to give you the truth about what's happening with your current investment, so you can make informed decisions.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>100% Independent - No conflicts of interest</span>
                    </div>
                    <div class="contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Plain-language reporting you can understand</span>
                    </div>
                    <div class="contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Actionable recommendations, not just data</span>
                    </div>
                    <div class="contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>15+ years of digital marketing expertise</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
