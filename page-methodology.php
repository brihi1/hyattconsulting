<?php
/**
 * Template Name: Methodology
 *
 * @package HyattLabs
 */

get_header();
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 60vh;">
    <div class="hero-bg">
        <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-background.jpg"
            alt="HyattLabs methodology"
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>

    <div class="container hero-content" style="text-align: center;">
        <h1>
            Our<br>
            <span class="gradient-text">Methodology</span>
        </h1>
        <p class="hero-subtitle">
            A three-phase approach: Audit what's broken. Build the strategy. Execute with precision.
        </p>
    </div>
</section>

<!-- 3-Phase Overview -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Three <span class="gradient-text-blue">Phases</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                From diagnosis to deployment, we follow a proven process that delivers measurable results.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; max-width: 1200px; margin: 0 auto;">
            <!-- Phase 1 -->
            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem; text-align: center;">
                <div style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: 700; color: var(--color-blue-400);">1</div>
                <h3 style="color: var(--color-blue-400); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Audit</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    We diagnose what's broken. Wasted spend, poor account structure, broken tracking, missed opportunities—we find it all.
                </p>
            </div>

            <!-- Phase 2 -->
            <div style="background: rgba(99, 102, 241, 0.05); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 1rem; padding: 2.5rem; text-align: center;">
                <div style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: 700; color: var(--color-indigo-400);">2</div>
                <h3 style="color: var(--color-indigo-400); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Strategy</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    We build the plan. Channel mix, targeting strategy, budget allocation, KPIs, and a roadmap for growth.
                </p>
            </div>

            <!-- Phase 3 -->
            <div style="background: rgba(139, 92, 246, 0.05); border: 1px solid rgba(139, 92, 246, 0.2); border-radius: 1rem; padding: 2.5rem; text-align: center;">
                <div style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: 700; color: var(--color-purple-400);">3</div>
                <h3 style="color: var(--color-purple-400); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Execute</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    We deploy the campaigns. Build accounts, launch tests, optimize relentlessly, and report transparently.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Phase 1: Audit (Detailed) -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 4rem;">
                <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                    Phase 1: <span class="gradient-text-blue">Audit</span>
                </h2>
                <p style="color: var(--color-zinc-300); font-size: 1.125rem; max-width: 800px; margin: 0 auto;">
                    We start by uncovering what's broken. Whether it's your current agency's work or your in-house setup, we identify waste, errors, and missed opportunities.
                </p>
            </div>

            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1.5rem; padding: 3rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 2rem;">What We Audit</h3>

                <div style="display: grid; gap: 1.5rem;">
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(59, 130, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-blue-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Account Structure & Organization</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Campaign architecture, ad group logic, keyword organization, and whether your setup follows best practices.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(59, 130, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-blue-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Wasted Spend Analysis</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Search terms that convert nothing, broad keywords bleeding budget, and campaigns that should have been paused months ago.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(59, 130, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-blue-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Tracking & Data Integrity</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">GTM setup, conversion pixels, attribution models, and whether you're optimizing toward real data or garbage signals.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(59, 130, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-blue-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Agency Fee Benchmarking</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Are you overpaying? We compare your retainers and % of spend fees against industry standards.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(59, 130, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-blue-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Website & Technical Foundation</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Site speed, mobile optimization, SEO health, and whether your site is ready to convert paid traffic.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(59, 130, 246, 0.2);">
                    <p style="color: var(--color-zinc-300); font-size: 1rem;">
                        <strong style="color: var(--color-white);">Deliverable:</strong> A prioritized audit report with findings, evidence, quantified savings opportunities, and specific recommendations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phase 2: Strategy -->
<section class="services" style="padding: 6rem 0;">
    <div class="container">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 4rem;">
                <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                    Phase 2: <span class="gradient-text-blue">Strategy</span>
                </h2>
                <p style="color: var(--color-zinc-300); font-size: 1.125rem; max-width: 800px; margin: 0 auto;">
                    Based on audit findings, we build the strategic roadmap. Channel mix, targeting approach, budget allocation, and performance KPIs.
                </p>
            </div>

            <div style="background: rgba(99, 102, 241, 0.05); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 1.5rem; padding: 3rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 2rem;">What We Define</h3>

                <div style="display: grid; gap: 1.5rem;">
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(99, 102, 241, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-indigo-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Channel Strategy</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Which channels (Google, Meta, CTV, IP targeting) and how to allocate budget for maximum ROI.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(99, 102, 241, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-indigo-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Targeting Approach</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Audience segmentation, geographic targeting, hyper-targeting via IP/CTV, and retargeting strategy.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(99, 102, 241, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-indigo-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Performance KPIs</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">What we're optimizing for (CPA, ROAS, MQL volume) and what success looks like in 30, 60, 90 days.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(99, 102, 241, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-indigo-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Testing Plan</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">What we'll test first (creative, audiences, bidding strategies) and how we'll iterate based on results.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(99, 102, 241, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-indigo-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Timeline & Milestones</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">90-day roadmap with clear milestones, expected outcomes, and decision points.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(99, 102, 241, 0.2);">
                    <p style="color: var(--color-zinc-300); font-size: 1rem;">
                        <strong style="color: var(--color-white);">Deliverable:</strong> A strategic playbook with channel recommendations, budget allocation, KPIs, and a 90-day execution plan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phase 3: Execute -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 4rem;">
                <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                    Phase 3: <span class="gradient-text-blue">Execute</span>
                </h2>
                <p style="color: var(--color-zinc-300); font-size: 1.125rem; max-width: 800px; margin: 0 auto;">
                    We deploy the strategy. Build campaigns, launch tests, optimize daily, and report weekly with full transparency.
                </p>
            </div>

            <div style="background: rgba(139, 92, 246, 0.05); border: 1px solid rgba(139, 92, 246, 0.2); border-radius: 1.5rem; padding: 3rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 2rem;">What We Deliver</h3>

                <div style="display: grid; gap: 1.5rem;">
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(139, 92, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-purple-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Campaign Setup & Launch</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Account structure, tracking implementation, creative production, and campaign deployment.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(139, 92, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-purple-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Daily Optimization</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">We review performance daily, pause underperformers, scale winners, and adjust bids based on data.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(139, 92, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-purple-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Testing & Iteration</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Continuous creative testing, audience expansion, and strategic pivots based on performance data.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(139, 92, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-purple-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Weekly Reporting</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Transparent performance updates, optimization log, and what we're testing next. No hiding behind monthly reports.</p>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="flex-shrink: 0; width: 40px; height: 40px; background: rgba(139, 92, 246, 0.2); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-purple-400)" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h4 style="color: var(--color-white); font-weight: 700; margin-bottom: 0.5rem;">Full Account Access</h4>
                            <p style="color: var(--color-zinc-400); font-size: 0.95rem;">You get read-only access to all accounts. See every campaign, bid, budget change in real-time.</p>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid rgba(139, 92, 246, 0.2);">
                    <p style="color: var(--color-zinc-300); font-size: 1rem;">
                        <strong style="color: var(--color-white);">Deliverable:</strong> Live campaigns, weekly performance reports, and measurable results—not excuses.
                    </p>
                </div>
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
                    Ready to <span class="gradient-text-blue-indigo">Get Started</span>?
                </h2>
                <p>Let's audit, strategize, and execute.</p>
            </div>

            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn-primary" style="display: inline-flex;">
                    Start Your Project
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
