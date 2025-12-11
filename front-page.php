<?php
/**
 * Front Page Template
 *
 * Full-service digital performance consultancy homepage.
 *
 * @package HyattLabs
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg">
        <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/particle-wave.jpg"
            alt="Data flow visualization"
            style="opacity: 0.65;"
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
        <div class="hero-glow hero-glow-1 animate-pulse"></div>
        <div class="hero-glow hero-glow-2"></div>
    </div>

    <div class="container hero-content">
        <div class="hero-grid" style="max-width: 900px; margin: 0 auto;">
            <div style="max-width: 100%;">
                <h1>
                    Engineered Growth.<br>
                    <span class="gradient-text animate-gradient-x">Verified Results.</span>
                </h1>
                <p class="hero-subtitle" style="max-width: 100%;">
                    We don't just audit—we execute. From uncovering waste to deploying precision campaigns, HyattLabs delivers full-stack digital performance. Radical transparency meets aggressive execution.
                </p>

                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary">
                        Get Started
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <a href="#services" class="btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        Explore Services
                    </a>
                </div>

                <div class="hero-badges">
                    <span class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Full-Stack Performance
                    </span>
                    <span class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Audit + Execution
                    </span>
                    <span class="hero-badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        Precision Marketing Experts
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Four Pillars Section -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Built on Four <span class="gradient-text-blue">Pillars</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                The principles that separate performance marketing from noise.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; margin-bottom: 6rem;">
            <!-- Pillar 1: Transparency -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Transparency</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;">Every dollar tracked. Every decision explained. No black boxes, no agency double-speak.</p>
            </div>

            <!-- Pillar 2: Execution -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Execution</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;">We don't just audit—we build, deploy, and optimize campaigns that drive measurable growth.</p>
            </div>

            <!-- Pillar 3: Precision -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Precision</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;">Hyper-targeting at the IP and household level. Reach the right people, not just the right demographics.</p>
            </div>

            <!-- Pillar 4: Foundation -->
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Foundation</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.9rem; line-height: 1.6;">SEO, technical health, and data integrity. Performance marketing fails without a solid foundation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Precision Marketing Spotlight -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                    Precision Marketing That <span class="gradient-text-blue">Actually Works</span>
                </h2>
                <p style="color: var(--color-zinc-300); font-size: 1.125rem; max-width: 800px; margin: 0 auto;">
                    Forget demographic guessing. We target households by IP address, physical locations via CTV, and replay venue visits with precision advertising.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-bottom: 2rem;">
                <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                    <h3 style="color: var(--color-blue-400); font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">IP Targeting</h3>
                    <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Target specific households by IP address. Perfect for B2B account-based marketing or high-value consumer segments.</p>
                </div>

                <div style="background: rgba(99, 102, 241, 0.05); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                    <h3 style="color: var(--color-indigo-400); font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">CTV Precision</h3>
                    <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Connected TV ads to exact ZIP codes, neighborhoods, or building addresses. No wasted impressions.</p>
                </div>

                <div style="background: rgba(139, 92, 246, 0.05); border: 1px solid rgba(139, 92, 246, 0.2); border-radius: 1rem; padding: 2rem; text-align: center;">
                    <h3 style="color: var(--color-purple-400); font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">Venue Replay</h3>
                    <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Retarget people who visited a physical location (your store, competitor, event) with mobile and display ads.</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="<?php echo esc_url(home_url('/precision-marketing')); ?>" class="btn-primary">
                    Explore Precision Marketing
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="services" id="services" style="padding: 6rem 0;">
    <div class="services-bg bg-grid-pattern"></div>

    <div class="container">
        <div class="services-header">
            <div class="services-header-left">
                <h2>Our <span class="gradient-text-blue">Services</span></h2>
                <p>From auditing waste to executing precision campaigns, we deliver full-stack digital performance.</p>
            </div>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(2, 1fr);">
            <!-- Service 1: Precision Marketing -->
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <span class="service-card-tag">Precision</span>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
                <h3>Precision Marketing</h3>
                <p>IP targeting, CTV, venue replay, and household-level precision. We don't guess—we know exactly who sees your ads.</p>
                <a href="<?php echo esc_url(home_url('/precision-marketing')); ?>" class="service-card-link">
                    Learn More
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <!-- Service 2: Consulting & Audits -->
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
                <h3>Consulting & Audits</h3>
                <p>Independent audits of your agency's work, fee structures, and campaign performance. Uncover waste, verify spend, demand accountability.</p>
                <a href="<?php echo esc_url(home_url('/consulting-audits')); ?>" class="service-card-link">
                    Learn More
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <!-- Service 3: Paid Media Execution -->
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <span class="service-card-tag">Execution</span>
                <div class="service-card-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                </div>
                <h3>Paid Media Execution</h3>
                <p>Google Ads, Meta, LinkedIn, CTV, and programmatic. We build, manage, and optimize campaigns with radical transparency.</p>
                <a href="<?php echo esc_url(home_url('/paid-media')); ?>" class="service-card-link">
                    Learn More
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>

            <!-- Service 4: Web & Organic Growth -->
            <div class="service-card">
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
                <h3>Web & Organic Growth</h3>
                <p>Technical SEO, AEO (Answer Engine Optimization), and website performance. The foundation that makes paid media work.</p>
                <a href="<?php echo esc_url(home_url('/web-organic')); ?>" class="service-card-link">
                    Learn More
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Metrics / Social Proof -->
<section class="stats">
    <div class="stats-bg"></div>

    <div class="container">
        <div style="text-align: center; margin-bottom: 3rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Proven <span class="gradient-text-blue">Performance</span>
            </h2>
        </div>

        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-value">$25M<span class="accent-blue">+</span></div>
                <div class="stat-label">Ad Spend Managed</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">40<span class="accent-indigo">%</span></div>
                <div class="stat-label">Avg. Waste Recovered</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">100<span class="accent-white">+</span></div>
                <div class="stat-label">Campaigns Launched</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">100<span class="accent-white">%</span></div>
                <div class="stat-label">Independent</div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA with Form -->
<section class="lead-form-section" id="contact">
    <div class="container lead-form-wrapper">
        <div class="lead-form-card">
            <div class="lead-form-border-top"></div>
            <div class="lead-form-glow"></div>

            <div class="lead-form-header">
                <h2>
                    Ready to Scale <span class="gradient-text-blue-indigo">with Precision</span>?
                </h2>
                <p>Tell us about your goals. We'll show you how to get there.</p>
            </div>

            <form class="lead-form" id="audit-form">
                <div class="lead-form-row">
                    <div class="lead-form-group">
                        <label class="lead-form-label">Website URL</label>
                        <input type="text" name="website" class="lead-form-input" placeholder="example.com" required>
                    </div>
                    <div class="lead-form-group">
                        <label class="lead-form-label">Current Monthly Spend</label>
                        <select name="spend" class="lead-form-select" required>
                            <option value="">Select range</option>
                            <option value="0-10k">$0 - $10,000</option>
                            <option value="10k-50k">$10,000 - $50,000</option>
                            <option value="50k-100k">$50,000 - $100,000</option>
                            <option value="100k-plus">$100,000+</option>
                        </select>
                    </div>
                </div>

                <div class="lead-form-group">
                    <label class="lead-form-label">I'm interested in:</label>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; margin-bottom: 1.5rem;">
                        <label style="display: flex; align-items: center; gap: 0.5rem; color: var(--color-zinc-300); cursor: pointer;">
                            <input type="checkbox" name="focus[]" value="precision-marketing" style="width: 18px; height: 18px;">
                            Precision Marketing
                        </label>
                        <label style="display: flex; align-items: center; gap: 0.5rem; color: var(--color-zinc-300); cursor: pointer;">
                            <input type="checkbox" name="focus[]" value="audits" style="width: 18px; height: 18px;">
                            Audits & Consulting
                        </label>
                        <label style="display: flex; align-items: center; gap: 0.5rem; color: var(--color-zinc-300); cursor: pointer;">
                            <input type="checkbox" name="focus[]" value="paid-media" style="width: 18px; height: 18px;">
                            Paid Media Execution
                        </label>
                        <label style="display: flex; align-items: center; gap: 0.5rem; color: var(--color-zinc-300); cursor: pointer;">
                            <input type="checkbox" name="focus[]" value="seo" style="width: 18px; height: 18px;">
                            SEO & Organic
                        </label>
                    </div>
                </div>

                <div class="lead-form-group">
                    <label class="lead-form-label">Tell us about your goals</label>
                    <textarea name="message" class="lead-form-input" rows="4" placeholder="What are you trying to achieve?" required></textarea>
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; justify-content: center;">
                    Submit Request
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>

                <div id="form-message" style="margin-top: 1rem; text-align: center; display: none;"></div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
