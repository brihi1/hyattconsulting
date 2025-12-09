<?php
/**
 * Template Name: Methodology
 *
 * @package Hyatt_Consulting
 */

get_header();

// Get editable content from meta boxes
$hero_subtitle = hyatt_get_page_meta('_hyatt_meth_hero_subtitle', 'Rigorous, independent, and built on radical transparency. Here\'s how we approach every engagement.');
$principle_1 = hyatt_get_page_meta('_hyatt_meth_principle_1', 'We never accept kickbacks or referral fees. We can refer trusted agencies, but our only incentive is finding the truth.');
$principle_2 = hyatt_get_page_meta('_hyatt_meth_principle_2', 'We show our work. Every finding is documented with evidence, methodology, and clear reasoning.');
$principle_3 = hyatt_get_page_meta('_hyatt_meth_principle_3', 'We verify everything. Assumptions are identified. Estimates include confidence levels and ranges.');
$principle_4 = hyatt_get_page_meta('_hyatt_meth_principle_4', 'Findings without recommendations are useless. Every issue includes prioritized, practical next steps.');
$dont_do_1 = hyatt_get_page_meta('_hyatt_meth_dont_1', 'We can refer you to agencies we trust, but we never accept kickbacks or referral fees. Our recommendations are always unbiased.');
$dont_do_2 = hyatt_get_page_meta('_hyatt_meth_dont_2', 'We don\'t run ads or marketing campaigns for our consulting clients. Managing accounts would compromise our objectivity as auditors.');
$dont_do_3 = hyatt_get_page_meta('_hyatt_meth_dont_3', 'No tool partnerships, no preferred vendors, no hidden incentives. Our software and platform recommendations are 100% merit-based.');
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
            Our <br>
            <span class="gradient-text">Methodology</span>
        </h1>
        <p class="hero-subtitle">
            <?php echo esc_html($hero_subtitle); ?>
        </p>
    </div>
</section>

<!-- Core Principles -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Guiding <span class="gradient-text-blue">Principles</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                Every audit we conduct is guided by these core principles. No exceptions.
            </p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; margin-bottom: 6rem;">
            <!-- Principle 1 -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Independence</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;"><?php echo esc_html($principle_1); ?></p>
            </div>
            
            <!-- Principle 2 -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Transparency</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;"><?php echo esc_html($principle_2); ?></p>
            </div>
            
            <!-- Principle 3 -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Accuracy</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;"><?php echo esc_html($principle_3); ?></p>
            </div>
            
            <!-- Principle 4 -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Actionability</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;"><?php echo esc_html($principle_4); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- The Process -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                The Audit <span class="gradient-text-blue">Process</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                A structured, thorough approach that delivers actionable insights—not just another report.
            </p>
        </div>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Step 1 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">1</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Discovery & Scoping</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1rem;">
                        We start with a detailed conversation to understand your business objectives, current concerns, and what success looks like. We define the exact scope of the audit and establish timelines.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Kickoff Call</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Goals Alignment</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Scope Definition</span>
                    </div>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">2</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Data Collection</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1rem;">
                        We gather read-only access to relevant accounts and platforms. We collect historical data, contracts, invoices, reports, and any other documentation needed for a complete picture.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Account Access</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Data Export</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Document Review</span>
                    </div>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">3</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Deep Analysis</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1rem;">
                        This is where we dig in. We analyze account structures, campaign performance, fee arrangements, technical implementations, and competitive positioning. We look for waste, errors, and opportunities.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Performance Analysis</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Benchmarking</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Gap Identification</span>
                    </div>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">4</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Findings & Recommendations</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1rem;">
                        We compile our findings into a clear, prioritized report. Each issue is documented with evidence, impact assessment, and specific recommendations. We quantify savings and improvement opportunities.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Executive Summary</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Detailed Findings</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Action Plan</span>
                    </div>
                </div>
            </div>
            
            <!-- Step 5 -->
            <div style="display: flex; gap: 2rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">5</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Review & Support</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1rem;">
                        We present our findings in a live session, walking through each recommendation and answering questions. We're available for follow-up as you implement changes or negotiate with vendors.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Presentation</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Q&A Session</span>
                        <span style="background: rgba(59, 130, 246, 0.1); color: var(--color-blue-400); padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">Follow-up Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Don't Do -->
<section class="services" style="padding: 6rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                What We <span style="color: #ef4444;">Don't</span> Do
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                Clear boundaries protect our independence and ensure you get unbiased analysis.
            </p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; max-width: 1000px; margin: 0 auto;">
            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="margin-bottom: 1rem;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">No Kickbacks or Referral Fees</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.875rem;"><?php echo esc_html($dont_do_1); ?></p>
            </div>
            
            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="margin-bottom: 1rem;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">No Campaign Management</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.875rem;"><?php echo esc_html($dont_do_2); ?></p>
            </div>
            
            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" style="margin-bottom: 1rem;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">No Vendor Partnerships</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.875rem;"><?php echo esc_html($dont_do_3); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Confidentiality -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>
            </div>
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Complete <span class="gradient-text-blue">Confidentiality</span>
            </h2>
            <p style="color: var(--color-zinc-300); font-size: 1.125rem; line-height: 1.8; margin-bottom: 1.5rem;">
                Every engagement is protected by a comprehensive NDA. Your data, findings, and business information are never shared, used for benchmarking without permission, or disclosed to any third party.
            </p>
            <p style="color: var(--color-zinc-400); line-height: 1.7;">
                We use secure file sharing, encrypted communications, and access controls to protect your information throughout the engagement. After completion, we retain data only as long as needed for potential follow-up support.
            </p>
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
                    Ready to Get <span class="gradient-text-blue-indigo">Started</span>?
                </h2>
                <p>Let's discuss your situation and determine if an audit makes sense for your organization.</p>
            </div>
            
            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn-primary" style="display: inline-flex;">
                    Schedule a Consultation
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
