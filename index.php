<?php
/**
 * Main Template / Blog Index
 *
 * This is the fallback template and also used for blog posts listings.
 *
 * @package HyattLabs
 */

get_header();

// Get editable content from meta boxes
$hero_title = hyatt_get_page_meta('_hyatt_hero_title', 'The Truth Behind Your Digital Investment.');
$hero_subtitle = hyatt_get_page_meta('_hyatt_hero_subtitle', 'Agencies report data. We reveal the truth. As your independent digital detectives, we decode the jargon, verify the spend, and translate complex reports into the radical transparency you need to lead with confidence.');
$services_intro = hyatt_get_page_meta('_hyatt_services_intro', 'Blind trust costs millions. HyattLabs provides independent auditing for brands who need to verify their agency\'s performance and fee structures.');
$contact_title = hyatt_get_page_meta('_hyatt_contact_title', 'Verify Your Agency\'s Performance.');
$contact_subtitle = hyatt_get_page_meta('_hyatt_contact_subtitle', 'Fill out the form below to request a fee and performance review.');
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg">
        <img 
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-background.jpg" 
            alt="Abstract digital data visualization with blue and orange particle waves representing marketing analytics" 
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
                    // Split title at period or line break for styling
                    $title_parts = preg_split('/(?<=\.)\s*|\n/', $hero_title, 2);
                    echo esc_html($title_parts[0]);
                    if (isset($title_parts[1])) {
                        echo '<br><span class="gradient-text animate-gradient-x">' . esc_html($title_parts[1]) . '</span>';
                    }
                    ?>
                </h1>
                <p class="hero-subtitle">
                    <?php echo wp_kses_post($hero_subtitle); ?>
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
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Communication Decoded
                    </span>
                    <span class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Wasted Spend Recovered
                    </span>
                </div>
            </div>
            
            <!-- Hero HUD Card -->
            <div class="hero-hud">
                <div class="hero-hud-glow animate-pulse"></div>
                <div class="hero-hud-card">
                    <div class="hud-header">
                        <div class="hud-status">
                            <span class="hud-status-dot"></span>
                            AUDIT_FINDINGS_V.2.0
                        </div>
                        <div class="hud-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    
                    <div class="hud-metrics">
                        <div class="hud-metric">
                            <div class="hud-metric-left">
                                <div class="hud-metric-icon blue">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </div>
                                <div>
                                    <div class="hud-metric-title">Wasted Spend</div>
                                    <div class="hud-metric-subtitle">PPC & Social Audit</div>
                                </div>
                            </div>
                            <div class="hud-metric-value blue">$42k/mo</div>
                        </div>
                        
                        <div class="hud-metric">
                            <div class="hud-metric-left">
                                <div class="hud-metric-icon indigo">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                </div>
                                <div>
                                    <div class="hud-metric-title">AEO Compliance</div>
                                    <div class="hud-metric-subtitle">Entity Data Status</div>
                                </div>
                            </div>
                            <div class="hud-metric-value indigo">Incomplete</div>
                        </div>
                        
                        <div class="hud-metric">
                            <div class="hud-metric-left">
                                <div class="hud-metric-icon white">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                    </svg>
                                </div>
                                <div>
                                    <div class="hud-metric-title">Fee Review</div>
                                    <div class="hud-metric-subtitle">vs. Benchmarks</div>
                                </div>
                            </div>
                            <div class="hud-metric-value white">+15% High</div>
                        </div>
                        
                        <div class="hud-graph">
                            <div class="hud-graph-label">POTENTIAL_SAVINGS</div>
                            <div class="hud-graph-bars">
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 60%"></div></div>
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 55%"></div></div>
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 70%"></div></div>
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 40%"></div></div>
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 45%"></div></div>
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 30%"></div></div>
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 25%"></div></div>
                                <div class="hud-graph-bar"><div class="hud-graph-bar-fill" style="height: 20%"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="audit-services">
    <div class="services-bg bg-grid-pattern"></div>
    
    <div class="container">
        <div class="services-header">
            <div class="services-header-left">
                <h2>Strategic <span class="gradient-text-blue">Governance</span></h2>
                <p><?php echo esc_html($services_intro); ?></p>
            </div>
            <button class="services-header-link">
                View Audit Methodology
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z"></path>
                    <path d="M13 13l6 6"></path>
                </svg>
            </button>
        </div>
        
        <div class="services-grid">
            <!-- Service Card 1 -->
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <span class="service-card-tag">Critical</span>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
                <h3>AEO & Entity Audits</h3>
                <p>Is your brand ready for Answer Engines? I audit your Knowledge Graph and Schema implementation to ensure AI models see you correctly.</p>
                <span class="service-card-link">
                    Explore Audit
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
            </div>
            
            <!-- Service Card 2 -->
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h3>Google Ads Governance</h3>
                <p>A deep-dive audit into your agency's account structure. Identifying wasted spend, poor bidding strategies, and lack of oversight.</p>
                <span class="service-card-link">
                    Explore Audit
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
            </div>
            
            <!-- Service Card 3 -->
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <span class="service-card-tag">Transparency</span>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg>
                </div>
                <h3>CTV & Programmatic Review</h3>
                <p>Auditing transparency in your CTV buys. Are you appearing on premium networks or cheap inventory? We verify the log files.</p>
                <span class="service-card-link">
                    Explore Audit
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
            </div>
            
            <!-- Service Card 4 -->
            <div class="service-card" id="fee-analysis">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                </div>
                <h3>Agency Fee Analysis</h3>
                <p>Are you overpaying? I benchmark your current agency retainers and % of spend fees against industry standards.</p>
                <span class="service-card-link">
                    Explore Audit
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
            </div>
            
            <!-- Service Card 5 -->
            <div class="service-card" id="aeo-strategy">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                </div>
                <h3>Technical SEO Audits</h3>
                <p>Independent verification of your site's health. Crawl depth, Core Web Vitals, and indexing issues your team might have missed.</p>
                <span class="service-card-link">
                    Explore Audit
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
            </div>
            
            <!-- Service Card 6 -->
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                    </svg>
                </div>
                <h3>Data Integrity & Attribution</h3>
                <p>Is your conversion data real? I audit your GTM and GA4 setup to ensure you aren't optimizing toward broken signals.</p>
                <span class="service-card-link">
                    Explore Audit
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="stats-bg"></div>
    
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-value"><?php echo esc_html(hyatt_get_option('hyatt_stat_ad_spend', '$15M')); ?><span class="accent-blue">+</span></div>
                <div class="stat-label">Ad Spend Audited</div>
            </div>
            <div class="stat-item">
                <div class="stat-value"><?php echo esc_html(hyatt_get_option('hyatt_stat_waste', '40')); ?><span class="accent-indigo">%</span></div>
                <div class="stat-label">Avg. Waste Identified</div>
            </div>
            <div class="stat-item">
                <div class="stat-value"><?php echo esc_html(hyatt_get_option('hyatt_stat_agencies', '45')); ?><span class="accent-white">+</span></div>
                <div class="stat-label">Agencies Reviewed</div>
            </div>
            <div class="stat-item">
                <div class="stat-value"><?php echo esc_html(hyatt_get_option('hyatt_stat_independent', '100')); ?><span class="accent-white">%</span></div>
                <div class="stat-label">Independent</div>
            </div>
        </div>
    </div>
</section>

<!-- Lead Form Section -->
<section class="lead-form-section" id="contact">
    <div class="container lead-form-wrapper">
        <div class="lead-form-card">
            <div class="lead-form-border-top"></div>
            <div class="lead-form-glow"></div>
            
            <div class="lead-form-header">
                <h2>
                    <?php echo wp_kses_post($contact_title); ?>
                </h2>
                <p><?php echo esc_html($contact_subtitle); ?></p>
            </div>
            
            <form class="lead-form" id="audit-form">
                <div class="lead-form-row">
                    <div class="lead-form-group">
                        <label class="lead-form-label">Website URL</label>
                        <input type="text" name="website" class="lead-form-input" placeholder="example.com or https://example.com" required>
                    </div>
                    <div class="lead-form-group">
                        <label class="lead-form-label">Current Monthly Spend (To Audit)</label>
                        <select name="spend" class="lead-form-select" required>
                            <option value="less-5k">Less than $5,000</option>
                            <option value="5k-20k">$5,000 - $20,000</option>
                            <option value="20k-50k">$20,000 - $50,000</option>
                            <option value="50k-plus">$50,000+</option>
                        </select>
                    </div>
                </div>
                
                <div class="lead-form-group">
                    <label class="lead-form-label">Audit Focus Area (select all that apply)</label>
                    <div class="lead-form-radio-group">
                        <label class="lead-form-radio">
                            <input type="checkbox" name="focus[]" value="agency-fees">
                            <span class="lead-form-radio-label">Agency Fees</span>
                        </label>
                        <label class="lead-form-radio">
                            <input type="checkbox" name="focus[]" value="google-ads">
                            <span class="lead-form-radio-label">Google Ads</span>
                        </label>
                        <label class="lead-form-radio">
                            <input type="checkbox" name="focus[]" value="aeo-seo">
                            <span class="lead-form-radio-label">AEO/SEO</span>
                        </label>
                        <label class="lead-form-radio">
                            <input type="checkbox" name="focus[]" value="social-spend">
                            <span class="lead-form-radio-label">Social Spend</span>
                        </label>
                    </div>
                </div>
                
                <div class="lead-form-group">
                    <label class="lead-form-label">What outcome are you expecting?</label>
                    <textarea name="message" class="lead-form-textarea" placeholder="Tell us about your goals and what you hope to achieve..."></textarea>
                </div>
                
                <button type="submit" class="lead-form-submit">
                    Request Confidential Audit
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
