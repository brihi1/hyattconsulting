<?php
/**
 * Template Name: Consulting & Audits
 *
 * @package Hyatt_Consulting
 */

get_header();
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 60vh;">
    <div class="hero-bg">
        <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg.jpg"
            alt="Digital marketing auditing and consulting"
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>

    <div class="container hero-content" style="text-align: center;">
        <h1>
            Consulting & Audits<br>
            <span class="gradient-text">Independent. Unbiased. Ruthless.</span>
        </h1>
        <p class="hero-subtitle">
            We verify what your agency says, uncover waste they hide, and demand accountability they avoid. No kickbacks, no partnerships, no conflicts of interest.
        </p>
    </div>
</section>

<!-- Core Services -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                What We <span class="gradient-text-blue">Audit</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                Every channel, every vendor, every dollar. We audit the numbers your agency doesn't want you to see.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; max-width: 1200px; margin: 0 auto;">
            <!-- Google Ads Audit -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Google Ads Audits</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Account structure, wasted spend, bidding strategy, negative keyword gaps, search query analysis, and whether your agency is actually optimizing or just collecting fees.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Campaign structure & organization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Wasted spend identification</li>
                    <li style="margin-bottom: 0.5rem;">✓ Bidding strategy evaluation</li>
                    <li style="margin-bottom: 0.5rem;">✓ Negative keyword analysis</li>
                    <li style="margin-bottom: 0.5rem;">✓ Search query mining</li>
                </ul>
            </div>

            <!-- Agency Fee Analysis -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Agency Fee Analysis</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Are you overpaying? We benchmark your retainers, % of spend fees, and hidden markups against industry standards and comparable agencies.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Retainer vs. deliverables audit</li>
                    <li style="margin-bottom: 0.5rem;">✓ % of spend fee benchmarking</li>
                    <li style="margin-bottom: 0.5rem;">✓ Hidden markup identification</li>
                    <li style="margin-bottom: 0.5rem;">✓ Contract renegotiation strategy</li>
                    <li style="margin-bottom: 0.5rem;">✓ Alternative vendor pricing</li>
                </ul>
            </div>

            <!-- CTV / Programmatic Audit -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                        <polyline points="17 2 12 7 7 2"></polyline>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">CTV & Programmatic Audits</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Are your CTV ads running on premium networks or cheap junk inventory? We verify log files, audit supply paths, and expose vendor fraud.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Inventory quality verification</li>
                    <li style="margin-bottom: 0.5rem;">✓ Supply path optimization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Fraud detection & bot traffic</li>
                    <li style="margin-bottom: 0.5rem;">✓ Viewability & completion rates</li>
                    <li style="margin-bottom: 0.5rem;">✓ Vendor fee transparency</li>
                </ul>
            </div>

            <!-- Technical SEO Audit -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Technical SEO Audits</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Is your site technically sound? We audit crawl depth, Core Web Vitals, indexing issues, and the foundations paid media depends on.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Site crawl & indexability</li>
                    <li style="margin-bottom: 0.5rem;">✓ Core Web Vitals analysis</li>
                    <li style="margin-bottom: 0.5rem;">✓ Schema markup audit</li>
                    <li style="margin-bottom: 0.5rem;">✓ Mobile optimization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Technical debt identification</li>
                </ul>
            </div>

            <!-- Data Integrity Audit -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                        <polyline points="17 6 23 6 23 12"></polyline>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Data Integrity & Attribution</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Is your tracking broken? We audit GTM, GA4, conversion pixels, and attribution models to ensure you're optimizing toward real data—not garbage.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ GTM & GA4 setup validation</li>
                    <li style="margin-bottom: 0.5rem;">✓ Conversion tracking accuracy</li>
                    <li style="margin-bottom: 0.5rem;">✓ Attribution model review</li>
                    <li style="margin-bottom: 0.5rem;">✓ Pixel & tag verification</li>
                    <li style="margin-bottom: 0.5rem;">✓ Data discrepancy resolution</li>
                </ul>
            </div>

            <!-- AEO / Entity Audit -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">AEO & Entity Audits</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Are AI models seeing your brand correctly? We audit Knowledge Graph entities, Schema implementation, and Answer Engine Optimization.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Knowledge Graph audit</li>
                    <li style="margin-bottom: 0.5rem;">✓ Schema markup validation</li>
                    <li style="margin-bottom: 0.5rem;">✓ Entity optimization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Answer Engine visibility</li>
                    <li style="margin-bottom: 0.5rem;">✓ AI-ready content structure</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Audit Process -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Our <span class="gradient-text-blue">Process</span>
            </h2>
            <p style="color: var(--color-zinc-300); font-size: 1.125rem; max-width: 700px; margin: 0 auto;">
                Thorough, documented, and designed to uncover what your agency doesn't want you to see.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Step 1 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">1</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Discovery & Scoping</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We discuss your concerns, objectives, and what success looks like. We define the audit scope and establish exactly what we'll review.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">2</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Data Collection</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We request read-only access to accounts, contracts, invoices, and reports. We collect historical data and documentation needed for a complete audit.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">3</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Deep Analysis</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We analyze account structures, campaign performance, fee arrangements, and competitive positioning. We identify waste, errors, and missed opportunities.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">4</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Findings & Recommendations</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We compile findings into a prioritized report with evidence, impact assessment, and specific recommendations. We quantify savings and improvement opportunities.
                    </p>
                </div>
            </div>

            <!-- Step 5 -->
            <div style="display: flex; gap: 2rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">5</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Presentation & Support</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We present findings in a live session, walk through recommendations, and answer questions. We're available for follow-up as you implement changes or negotiate with vendors.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We DON'T Do -->
<section class="services" style="padding: 6rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                What We <span style="color: #ef4444;">Don't</span> Do
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                Clear boundaries protect our independence and ensure unbiased analysis.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; max-width: 1000px; margin: 0 auto;">
            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="margin: 0 auto 1rem;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">No Kickbacks</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.875rem;">We don't accept referral fees or kickbacks. Our recommendations are unbiased.</p>
            </div>

            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="margin: 0 auto 1rem;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">No Vendor Partnerships</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.875rem;">No tool partnerships, no preferred vendors. Our software recommendations are merit-based.</p>
            </div>

            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="margin: 0 auto 1rem;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">No Conflicts</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.875rem;">We audit OR we execute. If we're auditing your agency, we're not pitching you our services.</p>
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
                    Ready for an <span class="gradient-text-blue-indigo">Independent Audit</span>?
                </h2>
                <p>Let's uncover what your agency isn't telling you.</p>
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
