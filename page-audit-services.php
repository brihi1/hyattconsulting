<?php
/**
 * Template Name: Audit Services
 *
 * @package Hyatt_Consulting
 */

get_header();

// Get editable content from meta boxes
$hero_subtitle = hyatt_get_page_meta('_hyatt_audit_hero_subtitle', 'Comprehensive auditing services designed to uncover the truth about your digital marketing performance.');
$service_1 = hyatt_get_page_meta('_hyatt_audit_service_1', 'A comprehensive review of your Google Ads account structure, bidding strategies, keyword targeting, and budget allocation. We identify wasted spend and missed opportunities.');
$service_2 = hyatt_get_page_meta('_hyatt_audit_service_2', 'Deep analysis of your site architecture, Core Web Vitals, indexation status, internal linking, and schema implementation. We find what your current team may have missed.');
$service_3 = hyatt_get_page_meta('_hyatt_audit_service_3', 'Verification of your CTV and programmatic buys through log-level data analysis. We ensure you\'re getting premium inventory, not cheap remnant placements.');
$service_4 = hyatt_get_page_meta('_hyatt_audit_service_4', 'Validation of your IP targeting campaigns including match rates, delivery verification, and audience quality. We ensure your ads reach the right business decision-makers.');
$service_5 = hyatt_get_page_meta('_hyatt_audit_service_5', 'Assessment of your brand\'s visibility to AI systems like ChatGPT, Perplexity, and Google AI Overviews. We audit your Knowledge Graph presence and entity optimization.');
$service_6 = hyatt_get_page_meta('_hyatt_audit_service_6', 'Audit of your GTM container, GA4 configuration, and conversion tracking setup. We ensure you\'re making decisions based on accurate, reliable data.');
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 60vh;">
    <div class="hero-bg">
        <img 
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg.jpg" 
            alt="Abstract digital data visualization with blue and orange particle waves representing marketing analytics" 
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>
    
    <div class="container hero-content" style="text-align: center;">
        <h1>
            Comprehensive <br>
            <span class="gradient-text">Audit Services</span>
        </h1>
        <p class="hero-subtitle">
            <?php echo esc_html($hero_subtitle); ?>
        </p>
    </div>
</section>

<!-- Services Overview -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div class="services-header" style="margin-bottom: 4rem;">
            <div class="services-header-left" style="max-width: 100%;">
                <h2>What We <span class="gradient-text-blue">Audit</span></h2>
                <p style="max-width: 800px;">Every audit is customized to your specific situation, but our core methodology covers these critical areas where we consistently find waste, mismanagement, and opportunities for improvement.</p>
            </div>
        </div>
        
        <!-- Detailed Service Cards -->
        <div class="services-grid" style="gap: 2rem;">
            
            <!-- Google Ads Audit -->
            <div class="service-card" style="grid-column: span 1;">
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
                <h3>Google Ads Audit</h3>
                <p>Deep-dive analysis of account structure, bidding strategies, keyword quality, ad copy effectiveness, and landing page alignment. We identify wasted spend and missed opportunities.</p>
                <ul style="margin-top: 1rem; color: var(--color-zinc-400); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Account structure review</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Negative keyword analysis</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Bid strategy optimization</li>
                    <li style="padding: 0.5rem 0;">✓ Quality Score improvements</li>
                </ul>
            </div>
            
            <!-- SEO Audit -->
            <div class="service-card" style="grid-column: span 1;">
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
                <h3>Technical SEO Audit</h3>
                <p>Comprehensive crawl analysis, Core Web Vitals assessment, indexation review, and technical health check. We find what your agency might have missed.</p>
                <ul style="margin-top: 1rem; color: var(--color-zinc-400); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Site architecture analysis</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Core Web Vitals review</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Indexation & crawl issues</li>
                    <li style="padding: 0.5rem 0;">✓ Schema markup validation</li>
                </ul>
            </div>
            
            <!-- CTV/Programmatic Audit -->
            <div class="service-card" style="grid-column: span 1;">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <span class="service-card-tag">High Value</span>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg>
                </div>
                <h3>CTV & Programmatic Audit</h3>
                <p>Log-level analysis of your programmatic and CTV buys. We verify you're actually appearing on premium inventory, not remnant placements disguised as premium.</p>
                <ul style="margin-top: 1rem; color: var(--color-zinc-400); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Placement verification</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Viewability analysis</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Brand safety review</li>
                    <li style="padding: 0.5rem 0;">✓ Fraud detection</li>
                </ul>
            </div>
            
            <!-- IP Targeting Audit -->
            <div class="service-card" style="grid-column: span 1;">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                </div>
                <h3>IP Targeting Audit</h3>
                <p>Verification of IP targeting accuracy, list quality assessment, and delivery confirmation. Ensure your B2B campaigns are actually reaching decision-makers.</p>
                <ul style="margin-top: 1rem; color: var(--color-zinc-400); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Target list validation</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Delivery verification</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Match rate analysis</li>
                    <li style="padding: 0.5rem 0;">✓ Attribution review</li>
                </ul>
            </div>
            
            <!-- AEO Audit -->
            <div class="service-card" style="grid-column: span 1;">
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
                <h3>AEO Readiness Audit</h3>
                <p>Is your brand visible to AI? We audit your Knowledge Graph presence, entity data, and structured data to ensure answer engines understand who you are.</p>
                <ul style="margin-top: 1rem; color: var(--color-zinc-400); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Knowledge Graph analysis</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Entity disambiguation</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Structured data audit</li>
                    <li style="padding: 0.5rem 0;">✓ AI visibility scoring</li>
                </ul>
            </div>
            
            <!-- Data & Attribution Audit -->
            <div class="service-card" style="grid-column: span 1;">
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
                <h3>Data & Attribution Audit</h3>
                <p>Is your conversion data trustworthy? We audit your GTM implementation, GA4 setup, and attribution models to ensure you're optimizing toward real results.</p>
                <ul style="margin-top: 1rem; color: var(--color-zinc-400); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ GTM container audit</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ GA4 configuration review</li>
                    <li style="padding: 0.5rem 0; border-bottom: 1px solid rgba(255,255,255,0.05);">✓ Conversion tracking validation</li>
                    <li style="padding: 0.5rem 0;">✓ Attribution model analysis</li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">Our Audit <span class="gradient-text-blue">Process</span></h2>
            <p style="color: var(--color-zinc-400); max-width: 600px; margin: 0 auto;">A systematic approach that delivers actionable insights, not just another PDF that collects dust.</p>
        </div>
        
        <div class="stats-grid" style="grid-template-columns: repeat(4, 1fr);">
            <div class="stat-item" style="text-align: center;">
                <div class="stat-value" style="font-size: 3rem;">01</div>
                <div style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Discovery</div>
                <div class="stat-label" style="text-transform: none; letter-spacing: normal;">We gather access to your accounts and understand your business goals.</div>
            </div>
            <div class="stat-item" style="text-align: center;">
                <div class="stat-value" style="font-size: 3rem;">02</div>
                <div style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Analysis</div>
                <div class="stat-label" style="text-transform: none; letter-spacing: normal;">Deep-dive into data, looking for waste, errors, and opportunities.</div>
            </div>
            <div class="stat-item" style="text-align: center;">
                <div class="stat-value" style="font-size: 3rem;">03</div>
                <div style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Report</div>
                <div class="stat-label" style="text-transform: none; letter-spacing: normal;">Clear findings with prioritized recommendations and dollar impact.</div>
            </div>
            <div class="stat-item" style="text-align: center;">
                <div class="stat-value" style="font-size: 3rem;">04</div>
                <div style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Review</div>
                <div class="stat-label" style="text-transform: none; letter-spacing: normal;">Live walkthrough to answer questions and plan next steps.</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="lead-form-section" id="contact">
    <div class="container lead-form-wrapper">
        <div class="lead-form-card">
            <div class="lead-form-border-top"></div>
            <div class="lead-form-glow"></div>
            
            <div class="lead-form-header">
                <h2>
                    Ready for <span class="gradient-text-blue-indigo">Clarity</span>?
                </h2>
                <p>Request your confidential audit today. We'll identify what's working, what's wasting money, and what to do about it.</p>
            </div>
            
            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn-primary" style="display: inline-flex;">
                    Request an Audit
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
