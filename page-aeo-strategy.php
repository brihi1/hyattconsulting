<?php
/**
 * Template Name: AEO Strategy
 *
 * @package Hyatt_Consulting
 */

get_header();

// Get editable content from meta boxes
$hero_subtitle = hyatt_get_page_meta('_hyatt_aeo_hero_subtitle', 'The landscape is shifting. AI-powered answer engines are changing how people find information—and your brand needs to be ready.');
$what_is_aeo = hyatt_get_page_meta('_hyatt_aeo_what_is', 'Answer Engine Optimization is the practice of optimizing your brand\'s digital presence to be understood and cited by AI systems—ChatGPT, Perplexity, Google\'s AI Overviews, and the growing ecosystem of AI-powered search tools.');
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
            Answer Engine <br>
            <span class="gradient-text">Optimization</span>
        </h1>
        <p class="hero-subtitle">
            <?php echo esc_html($hero_subtitle); ?>
        </p>
    </div>
</section>

<!-- What is AEO -->
<section class="services" style="padding-top: 6rem;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div>
                <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1.5rem;">
                    What is <span class="gradient-text-blue">AEO</span>?
                </h2>
                <p style="color: var(--color-zinc-300); font-size: 1.125rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    <?php echo esc_html($what_is_aeo); ?>
                </p>
                <p style="color: var(--color-zinc-400); line-height: 1.8;">
                    When someone asks ChatGPT, Perplexity, or Google's AI Overview about your industry, your products, or your competitors—will your brand be mentioned? AEO is how you ensure the answer is yes.
                </p>
            </div>
            <div class="hero-hud" style="display: block; position: relative;">
                <div class="hero-hud-glow animate-pulse"></div>
                <div class="hero-hud-card">
                    <div class="hud-header">
                        <div class="hud-status">
                            <span class="hud-status-dot"></span>
                            AI_VISIBILITY_SCAN
                        </div>
                    </div>
                    <div class="hud-metrics">
                        <div class="hud-metric">
                            <div class="hud-metric-left">
                                <div>
                                    <div class="hud-metric-title">Knowledge Graph</div>
                                    <div class="hud-metric-subtitle">Entity Recognition</div>
                                </div>
                            </div>
                            <div class="hud-metric-value indigo">Active</div>
                        </div>
                        <div class="hud-metric">
                            <div class="hud-metric-left">
                                <div>
                                    <div class="hud-metric-title">Schema Markup</div>
                                    <div class="hud-metric-subtitle">Structured Data</div>
                                </div>
                            </div>
                            <div class="hud-metric-value blue">12 Types</div>
                        </div>
                        <div class="hud-metric">
                            <div class="hud-metric-left">
                                <div>
                                    <div class="hud-metric-title">AI Citations</div>
                                    <div class="hud-metric-subtitle">Last 30 Days</div>
                                </div>
                            </div>
                            <div class="hud-metric-value white">847</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Why AEO Matters -->
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                Why AEO <span class="gradient-text-blue">Matters Now</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                The shift to AI-powered search is accelerating. Brands that optimize now will dominate. Those that wait will become invisible.
            </p>
        </div>
        
        <div class="services-grid" style="margin-bottom: 6rem;">
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <h3 style="font-size: 3rem; margin-bottom: 0.5rem;" class="gradient-text-blue">40%</h3>
                <p style="color: var(--color-zinc-400);">of Gen Z prefers TikTok and AI tools over Google for search queries.</p>
            </div>
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <h3 style="font-size: 3rem; margin-bottom: 0.5rem;" class="gradient-text-blue">1B+</h3>
                <p style="color: var(--color-zinc-400);">weekly active users on ChatGPT alone, asking questions about brands like yours.</p>
            </div>
            <div class="service-card">
                <div class="service-card-border"></div>
                <div class="service-card-corner-tl"></div>
                <div class="service-card-corner-br"></div>
                <div class="service-card-glow"></div>
                <h3 style="font-size: 3rem; margin-bottom: 0.5rem;" class="gradient-text-blue">Zero</h3>
                <p style="color: var(--color-zinc-400);">clicks needed. AI gives the answer directly—your brand either is or isn't mentioned.</p>
            </div>
        </div>
    </div>
</section>

<!-- AEO Components -->
<section class="stats" style="padding: 6rem 0;">
    <div class="stats-bg"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                The AEO <span class="gradient-text-blue">Framework</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                Our approach to AEO covers the three pillars that determine how AI systems understand and represent your brand.
            </p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
            <!-- Pillar 1 -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="2" y1="12" x2="22" y2="12"></line>
                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Entity Optimization</h3>
                <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1.5rem;">
                    Establishing your brand as a recognized entity in Google's Knowledge Graph and other knowledge bases that AI systems reference.
                </p>
                <ul style="color: var(--color-zinc-500); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.4rem 0;">• Knowledge Graph optimization</li>
                    <li style="padding: 0.4rem 0;">• Wikipedia & Wikidata presence</li>
                    <li style="padding: 0.4rem 0;">• Entity disambiguation</li>
                    <li style="padding: 0.4rem 0;">• Brand authority signals</li>
                </ul>
            </div>
            
            <!-- Pillar 2 -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Structured Data</h3>
                <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1.5rem;">
                    Implementing comprehensive schema markup that helps AI systems understand your content, products, services, and expertise.
                </p>
                <ul style="color: var(--color-zinc-500); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.4rem 0;">• Organization schema</li>
                    <li style="padding: 0.4rem 0;">• Product & service markup</li>
                    <li style="padding: 0.4rem 0;">• FAQ & How-to schema</li>
                    <li style="padding: 0.4rem 0;">• Author & expertise signals</li>
                </ul>
            </div>
            
            <!-- Pillar 3 -->
            <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; padding: 2rem;">
                <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--color-blue-600), var(--color-indigo-600)); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <h3 style="color: var(--color-white); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Content Authority</h3>
                <p style="color: var(--color-zinc-400); line-height: 1.7; margin-bottom: 1.5rem;">
                    Creating and optimizing content that AI systems identify as authoritative, trustworthy, and citation-worthy.
                </p>
                <ul style="color: var(--color-zinc-500); font-size: 0.875rem; list-style: none;">
                    <li style="padding: 0.4rem 0;">• Topical authority building</li>
                    <li style="padding: 0.4rem 0;">• E-E-A-T optimization</li>
                    <li style="padding: 0.4rem 0;">• Citation-worthy content</li>
                    <li style="padding: 0.4rem 0;">• Cross-platform consistency</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SEO vs AEO -->
<section class="services" style="padding: 6rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-size: 2.5rem; font-weight: 700; color: var(--color-white); margin-bottom: 1rem;">
                SEO vs <span class="gradient-text-blue">AEO</span>
            </h2>
            <p style="color: var(--color-zinc-400); max-width: 700px; margin: 0 auto;">
                AEO doesn't replace SEO—it extends it. Here's how the strategies differ and complement each other.
            </p>
        </div>

        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="border: 1px solid rgba(255,255,255,0.1); border-radius: 1rem; overflow: hidden;">
                <!-- Table Header -->
                <div style="display: grid; grid-template-columns: 200px 1fr 1fr; background: rgba(255, 255, 255, 0.03); border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="padding: 1.5rem; font-weight: 700; color: var(--color-white); border-right: 1px solid rgba(255,255,255,0.1);">Feature</div>
                    <div style="padding: 1.5rem; font-weight: 700; color: var(--color-blue-400); text-align: center; border-right: 1px solid rgba(255,255,255,0.1);">Traditional SEO</div>
                    <div style="padding: 1.5rem; font-weight: 700; color: var(--color-indigo-400); text-align: center;">AEO (Answer Engine Optimization)</div>
                </div>

                <!-- Goal -->
                <div style="display: grid; grid-template-columns: 200px 1fr 1fr; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); font-weight: 600; border-right: 1px solid rgba(255,255,255,0.05);">Goal</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(59, 130, 246, 0.05); border-right: 1px solid rgba(255,255,255,0.05);">Drive traffic to website</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(99, 102, 241, 0.05);">Be the cited source</div>
                </div>

                <!-- Target -->
                <div style="display: grid; grid-template-columns: 200px 1fr 1fr; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); font-weight: 600; border-right: 1px solid rgba(255,255,255,0.05);">Target</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(59, 130, 246, 0.05); border-right: 1px solid rgba(255,255,255,0.05);">Search Algorithms</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(99, 102, 241, 0.05);">Answer Engines (AI & Voice)</div>
                </div>

                <!-- Metric -->
                <div style="display: grid; grid-template-columns: 200px 1fr 1fr; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); font-weight: 600; border-right: 1px solid rgba(255,255,255,0.05);">Metric</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(59, 130, 246, 0.05); border-right: 1px solid rgba(255,255,255,0.05);">Rankings & Organic Sessions</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(99, 102, 241, 0.05);">Citations & Visibility</div>
                </div>

                <!-- Focus -->
                <div style="display: grid; grid-template-columns: 200px 1fr 1fr; border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); font-weight: 600; border-right: 1px solid rgba(255,255,255,0.05);">Focus</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(59, 130, 246, 0.05); border-right: 1px solid rgba(255,255,255,0.05);">Keywords, Backlinks & Technical</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(99, 102, 241, 0.05);">Entities, Schema & Authority</div>
                </div>

                <!-- Output -->
                <div style="display: grid; grid-template-columns: 200px 1fr 1fr;">
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); font-weight: 600; border-right: 1px solid rgba(255,255,255,0.05);">Output</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(59, 130, 246, 0.05); border-right: 1px solid rgba(255,255,255,0.05);">Ten Blue Links</div>
                    <div style="padding: 1.25rem 1.5rem; color: var(--color-zinc-300); background: rgba(99, 102, 241, 0.05);">Direct Answers</div>
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
                    Is Your Brand <span class="gradient-text-blue-indigo">AI-Visible</span>?
                </h2>
                <p>Get an AEO audit to understand how AI systems currently see your brand—and what you can do to improve your visibility.</p>
            </div>
            
            <div style="text-align: center;">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="btn-primary" style="display: inline-flex;">
                    Request AEO Audit
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
