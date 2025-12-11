<?php
/**
 * Template Name: Paid Media Execution
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
            alt="Paid media execution and management"
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>

    <div class="container hero-content" style="text-align: center;">
        <h1>
            Paid Media Execution<br>
            <span class="gradient-text">No Black Boxes. No Excuses.</span>
        </h1>
        <p class="hero-subtitle">
            We build, manage, and optimize paid campaigns with radical transparency. You see every decision, every dollar, and every result.
        </p>
    </div>
</section>

<!-- Channels We Manage -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Channels We <span class="gradient-text-blue">Execute</span>
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; max-width: 1200px; margin: 0 auto;">
            <!-- Google Ads -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem;">
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">Google Ads</h3>
                <p style="color: var(--color-zinc-300); font-size: 0.95rem; margin-bottom: 1rem;">Search, Shopping, Display, YouTube, Performance Max</p>
                <ul style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li>✓ Campaign structure & optimization</li>
                    <li>✓ Bid strategy management</li>
                    <li>✓ Negative keyword mining</li>
                    <li>✓ Ad copy testing</li>
                </ul>
            </div>

            <!-- Meta / Social -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem;">
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">Meta & Social</h3>
                <p style="color: var(--color-zinc-300); font-size: 0.95rem; margin-bottom: 1rem;">Facebook, Instagram, LinkedIn, TikTok</p>
                <ul style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li>✓ Creative testing & iteration</li>
                    <li>✓ Audience segmentation</li>
                    <li>✓ Funnel optimization</li>
                    <li>✓ Retargeting campaigns</li>
                </ul>
            </div>

            <!-- CTV & Programmatic -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2rem;">
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem;">CTV & Programmatic</h3>
                <p style="color: var(--color-zinc-300); font-size: 0.95rem; margin-bottom: 1rem;">Connected TV, Display, Video, Native</p>
                <ul style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li>✓ Premium inventory only</li>
                    <li>✓ Geo-targeted delivery</li>
                    <li>✓ Fraud prevention</li>
                    <li>✓ Transparent reporting</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- How We're Different -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                How We're <span class="gradient-text-blue">Different</span>
            </h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 2rem;">
            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Full Transparency</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    You get read-only access to all ad accounts. You see every campaign, every bid adjustment, every budget change in real-time. No gatekeeping, no proprietary dashboards that hide the truth.
                </p>
            </div>

            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">No Markup on Media</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    We charge a management fee—not a % of spend markup. Your budget goes to ads, not inflated agency fees. We make money when you succeed, not when you spend more.
                </p>
            </div>

            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Data You Own</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    All accounts are set up in YOUR name. You own the data, the audience lists, the conversion history. If we part ways, you keep everything—no hostage situations.
                </p>
            </div>

            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Weekly Reporting</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    We don't hide behind monthly reports. You get weekly updates on performance, optimizations made, and what we're testing next. Questions answered in hours, not days.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="services" style="padding: 6rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Our <span class="gradient-text-blue">Approach</span>
            </h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Step 1 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">1</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Audit First</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        Before we launch anything, we audit your current setup (if applicable), analyze competitors, and identify quick wins and structural issues.
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">2</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Build the Foundation</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We set up tracking, conversion pixels, audience segmentation, and account structure properly from day one. No shortcuts, no "we'll fix it later."
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div style="display: flex; gap: 2rem; margin-bottom: 3rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">3</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Launch & Test</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We launch campaigns with clear hypotheses, test variables methodically, and iterate based on data—not gut feelings.
                    </p>
                </div>
            </div>

            <!-- Step 4 -->
            <div style="display: flex; gap: 2rem; align-items: flex-start;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: white;">4</div>
                <div style="flex: 1; padding-top: 0.5rem;">
                    <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">Optimize Relentlessly</h3>
                    <p style="color: var(--color-zinc-400); line-height: 1.7;">
                        We review performance daily, make adjustments weekly, and report results transparently. No set-it-and-forget-it campaigns.
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
                    Ready for <span class="gradient-text-blue-indigo">Transparent Execution</span>?
                </h2>
                <p>Let's build campaigns that actually perform.</p>
            </div>

            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn-primary" style="display: inline-flex;">
                    Get Started
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
