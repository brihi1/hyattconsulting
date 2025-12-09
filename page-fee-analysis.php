<?php
/**
 * Template Name: Fee Analysis
 *
 * @package Hyatt_Consulting
 */

get_header();

// Get editable content from meta boxes
$hero_subtitle = hyatt_get_page_meta('_hyatt_fee_hero_subtitle', 'Most companies overpay their agencies by 15-30%. Our independent analysis reveals whether your fees align with industry standards.');
$problem_text = hyatt_get_page_meta('_hyatt_fee_problem', 'Agency fee structures are intentionally complex. Percentage of spend, retainers, platform fees, management fees—it all adds up. Without an independent benchmark, you have no way to know if you\'re getting fair value.');
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
            Agency Fee <br>
            <span class="gradient-text">Analysis</span>
        </h1>
        <p class="hero-subtitle">
            <?php echo esc_html($hero_subtitle); ?>
        </p>
    </div>
</section>

<!-- The Problem -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div>
                <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1.5rem;">
                    The <span class="gradient-text-blue">Problem</span>
                </h2>
                <p style="color: var(--color-zinc-300); font-size: 1.125rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    <?php echo esc_html($problem_text); ?>
                </p>
                <p style="color: var(--color-zinc-400); line-height: 1.8; margin-bottom: 1.5rem;">
                    Most companies have no idea if their agency fees are competitive. They signed a contract years ago, and annual increases have compounded without anyone asking: <em>"Is this still a fair deal?"</em>
                </p>
                <p style="color: var(--color-zinc-400); line-height: 1.8;">
                    That's where we come in. With access to benchmark data across industries and agency types, we can tell you exactly where you stand.
                </p>
            </div>
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem;">
                <h3 style="color: var(--color-white); font-size: 1.25rem; margin-bottom: 1.5rem;">Common Fee Red Flags</h3>
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <div style="display: flex; align-items: flex-start; gap: 1rem; padding: 1rem; background: rgba(239, 68, 68, 0.1); border-radius: 0.5rem; border: 1px solid rgba(239, 68, 68, 0.2);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <div>
                            <div style="color: var(--color-white); font-weight: 600; margin-bottom: 0.25rem;">% of Spend Above 15%</div>
                            <div style="color: var(--color-zinc-400); font-size: 0.875rem;">Industry standard is 10-15% for most verticals</div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 1rem; padding: 1rem; background: rgba(239, 68, 68, 0.1); border-radius: 0.5rem; border: 1px solid rgba(239, 68, 68, 0.2);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <div>
                            <div style="color: var(--color-white); font-weight: 600; margin-bottom: 0.25rem;">Hidden Platform Markups</div>
                            <div style="color: var(--color-zinc-400); font-size: 0.875rem;">Some agencies add 20-30% to third-party tool costs</div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 1rem; padding: 1rem; background: rgba(239, 68, 68, 0.1); border-radius: 0.5rem; border: 1px solid rgba(239, 68, 68, 0.2);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <div>
                            <div style="color: var(--color-white); font-weight: 600; margin-bottom: 0.25rem;">No Fee Tiers at Scale</div>
                            <div style="color: var(--color-zinc-400); font-size: 0.875rem;">Your % should decrease as spend increases</div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 1rem; padding: 1rem; background: rgba(239, 68, 68, 0.1); border-radius: 0.5rem; border: 1px solid rgba(239, 68, 68, 0.2);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <div>
                            <div style="color: var(--color-white); font-weight: 600; margin-bottom: 0.25rem;">Vague Scope of Work</div>
                            <div style="color: var(--color-zinc-400); font-size: 0.875rem;">Unclear deliverables = unlimited upselling</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Analyze -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                What We <span class="gradient-text-blue">Analyze</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                A comprehensive review of every cost component to give you complete visibility into your agency spend.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                        <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                </div>
                <h3>Retainer Fees</h3>
                <p>Monthly management fees compared against market rates for your industry, spend level, and service scope.</p>
            </div>
            
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <h3>% of Spend Fees</h3>
                <p>Analysis of percentage-based fees and whether they're competitive at your current and projected spend levels.</p>
            </div>
            
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v20M2 12h20"></path>
                    </svg>
                </div>
                <h3>Technology Costs</h3>
                <p>Review of platform fees, tool markups, and technology costs to identify pass-through vs. profit centers.</p>
            </div>
            
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
                <h3>Performance Bonuses</h3>
                <p>Evaluation of bonus structures to ensure they're tied to meaningful KPIs and achievable thresholds.</p>
            </div>
            
            <div class="service-card">
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
                <h3>Scope of Work</h3>
                <p>Comparison of stated deliverables against actual output and industry norms for similar engagements.</p>
            </div>
            
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3>Contract Terms</h3>
                <p>Review of termination clauses, auto-renewals, rate increase provisions, and ownership rights.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benchmark Data -->
<section class="services" style="padding: 6rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Industry <span class="gradient-text-blue">Benchmarks</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                We maintain current benchmark data across agency types and spend levels. Here's a general overview.
            </p>
        </div>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; overflow: hidden;">
                <!-- Table Header -->
                <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; padding: 1rem 1.5rem; background: rgba(59, 130, 246, 0.1); border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="color: var(--color-white); font-weight: 700; font-size: 0.875rem;">Service Type</div>
                    <div style="color: var(--color-white); font-weight: 700; font-size: 0.875rem; text-align: center;">Low</div>
                    <div style="color: var(--color-white); font-weight: 700; font-size: 0.875rem; text-align: center;">Typical</div>
                    <div style="color: var(--color-white); font-weight: 700; font-size: 0.875rem; text-align: center;">High</div>
                </div>
                
                <!-- Table Rows -->
                <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; padding: 1rem 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="color: var(--color-zinc-300);">PPC Management (% of spend)</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">8%</div>
                    <div style="color: var(--color-blue-400); text-align: center; font-weight: 600;">10-15%</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">20%+</div>
                </div>
                <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; padding: 1rem 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="color: var(--color-zinc-300);">SEO Retainer (monthly)</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">$2,500</div>
                    <div style="color: var(--color-blue-400); text-align: center; font-weight: 600;">$5-10K</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">$25K+</div>
                </div>
                <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; padding: 1rem 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="color: var(--color-zinc-300);">Social Media Management</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">$2,000</div>
                    <div style="color: var(--color-blue-400); text-align: center; font-weight: 600;">$4-8K</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">$15K+</div>
                </div>
                <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; padding: 1rem 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="color: var(--color-zinc-300);">Programmatic (% of spend)</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">10%</div>
                    <div style="color: var(--color-blue-400); text-align: center; font-weight: 600;">15-20%</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">30%+</div>
                </div>
                <div style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; padding: 1rem 1.5rem;">
                    <div style="color: var(--color-zinc-300);">Full-Service Retainer</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">$10K</div>
                    <div style="color: var(--color-blue-400); text-align: center; font-weight: 600;">$15-30K</div>
                    <div style="color: var(--color-zinc-400); text-align: center;">$75K+</div>
                </div>
            </div>
            
            <p style="color: var(--color-zinc-500); font-size: 0.875rem; text-align: center; margin-top: 1.5rem;">
                * Benchmarks vary significantly by industry, geography, and scope. Contact us for specific comparisons.
            </p>
        </div>
    </div>
</section>

<!-- Deliverables -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                What You <span class="gradient-text-blue">Receive</span>
            </h2>
        </div>
        
        <div class="stats-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="stat-item" style="text-align: center; border-right: 1px solid rgba(255,255,255,0.05);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                    </svg>
                </div>
                <div style="color: var(--color-white); font-weight: 700; font-size: 1.25rem; margin-bottom: 0.5rem;">Fee Analysis Report</div>
                <div style="color: var(--color-zinc-400); font-size: 0.875rem; line-height: 1.6;">Line-by-line breakdown of your current fees with benchmark comparisons and savings opportunities.</div>
            </div>
            <div class="stat-item" style="text-align: center; border-right: 1px solid rgba(255,255,255,0.05);">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                </div>
                <div style="color: var(--color-white); font-weight: 700; font-size: 1.25rem; margin-bottom: 0.5rem;">Negotiation Playbook</div>
                <div style="color: var(--color-zinc-400); font-size: 0.875rem; line-height: 1.6;">Specific talking points and data to use in your next agency negotiation or RFP.</div>
            </div>
            <div class="stat-item" style="text-align: center;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <div style="color: var(--color-white); font-weight: 700; font-size: 1.25rem; margin-bottom: 0.5rem;">Executive Briefing</div>
                <div style="color: var(--color-zinc-400); font-size: 0.875rem; line-height: 1.6;">Live session to walk through findings, answer questions, and discuss strategy.</div>
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
                    Are You <span class="gradient-text-blue-indigo">Overpaying</span>?
                </h2>
                <p>Find out with a confidential fee analysis. No obligation, no pressure—just clarity on whether you're getting a fair deal.</p>
            </div>
            
            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn-primary" style="display: inline-flex;">
                    Request Fee Analysis
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
