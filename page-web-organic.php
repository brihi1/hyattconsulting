<?php
/**
 * Template Name: Web & Organic Growth
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
            alt="SEO and organic growth strategies"
            class="animate-drift"
        >
        <div class="hero-overlay-1"></div>
        <div class="hero-overlay-2"></div>
        <div class="hero-grid-overlay bg-grid-pattern"></div>
    </div>

    <div class="container hero-content" style="text-align: center;">
        <h1>
            Web & Organic Growth<br>
            <span class="gradient-text">The Foundation Paid Media Needs</span>
        </h1>
        <p class="hero-subtitle">
            Technical SEO, Answer Engine Optimization, and website performance. Without a solid foundation, paid media is just expensive traffic to a broken site.
        </p>
    </div>
</section>

<!-- Core Services -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                What We <span class="gradient-text-blue">Build</span>
            </h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; max-width: 1200px; margin: 0 auto;">
            <!-- Technical SEO -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Technical SEO</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    The technical foundation Google demands. Site speed, crawlability, mobile optimization, and Core Web Vitals.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Site speed optimization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Core Web Vitals improvement</li>
                    <li style="margin-bottom: 0.5rem;">✓ Mobile-first indexing</li>
                    <li style="margin-bottom: 0.5rem;">✓ XML sitemaps & robots.txt</li>
                    <li style="margin-bottom: 0.5rem;">✓ Structured data (Schema)</li>
                </ul>
            </div>

            <!-- AEO (Answer Engine Optimization) -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M12 2a10 10 0 1 0 10 10H12V2z"></path>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">AEO (Answer Engine Optimization)</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Optimize for AI models, not just search engines. ChatGPT, Perplexity, and Google SGE need structured data to understand your brand.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Knowledge Graph optimization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Entity disambiguation</li>
                    <li style="margin-bottom: 0.5rem;">✓ AI-friendly content structure</li>
                    <li style="margin-bottom: 0.5rem;">✓ FAQ & How-to markup</li>
                    <li style="margin-bottom: 0.5rem;">✓ Answer snippet optimization</li>
                </ul>
            </div>

            <!-- On-Page SEO -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">On-Page SEO</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Content optimization for both users and search engines. Title tags, meta descriptions, header structure, and internal linking.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Keyword research & mapping</li>
                    <li style="margin-bottom: 0.5rem;">✓ Title tag optimization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Meta description writing</li>
                    <li style="margin-bottom: 0.5rem;">✓ Header structure (H1-H6)</li>
                    <li style="margin-bottom: 0.5rem;">✓ Internal linking strategy</li>
                </ul>
            </div>

            <!-- Website Performance -->
            <div style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1rem; padding: 2.5rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Website Performance</h3>
                <p style="color: var(--color-zinc-300); margin-bottom: 1.5rem; line-height: 1.7;">
                    Fast sites convert better. We optimize load times, reduce page weight, and fix bottlenecks that kill conversions.
                </p>
                <ul style="color: var(--color-zinc-400); font-size: 0.95rem; line-height: 1.8; list-style: none; padding: 0;">
                    <li style="margin-bottom: 0.5rem;">✓ Page speed optimization</li>
                    <li style="margin-bottom: 0.5rem;">✓ Image compression & lazy loading</li>
                    <li style="margin-bottom: 0.5rem;">✓ JavaScript & CSS minification</li>
                    <li style="margin-bottom: 0.5rem;">✓ CDN implementation</li>
                    <li style="margin-bottom: 0.5rem;">✓ Caching strategy</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why It Matters -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Why This <span class="gradient-text-blue">Matters</span>
            </h2>
        </div>

        <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 2rem;">
            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Paid Media Needs a Foundation</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    You can drive all the traffic you want with ads, but if your site is slow, hard to navigate, or poorly structured, you're wasting money. A fast, well-optimized site converts traffic into revenue.
                </p>
            </div>

            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Search Engines Reward Good Experiences</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    Google's algorithm prioritizes user experience: fast sites, mobile-friendly designs, clear content structure. Technical SEO isn't optional—it's table stakes for ranking.
                </p>
            </div>

            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">AI Is the New Search</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    ChatGPT, Perplexity, and Google's AI Overviews are replacing traditional search. If your brand isn't structured for AI models to understand, you're invisible. AEO is the new SEO.
                </p>
            </div>

            <div style="background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.2); border-radius: 1rem; padding: 2.5rem;">
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Organic Traffic Compounds</h3>
                <p style="color: var(--color-zinc-300); line-height: 1.7;">
                    Paid traffic stops when you stop spending. Organic traffic compounds over time. A well-optimized site continues to attract visitors long after the work is done.
                </p>
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
        </div>

        <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 1.5rem;">
            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem;">
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">❌ We Don't Write Blog Content</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.95rem;">We optimize structure, not churn out articles. If you need content marketing, we'll refer you to writers. We focus on technical foundations.</p>
            </div>

            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem;">
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">❌ We Don't Do Link Building</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Most link building is spam. We don't buy links, exchange links, or promise "white hat" schemes. We focus on technical excellence and on-page optimization.</p>
            </div>

            <div style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: 1rem; padding: 2rem;">
                <h3 style="color: var(--color-white); font-size: 1.125rem; font-weight: 700; margin-bottom: 0.5rem;">❌ We Don't Guarantee Rankings</h3>
                <p style="color: var(--color-zinc-400); font-size: 0.95rem;">Anyone promising #1 rankings is lying. We optimize for search visibility, user experience, and conversions—not vanity metrics.</p>
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
                    Ready to Build a <span class="gradient-text-blue-indigo">Solid Foundation</span>?
                </h2>
                <p>Let's optimize your site for both users and search engines.</p>
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
