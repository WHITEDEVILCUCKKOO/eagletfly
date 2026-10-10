<!-- ==================== HTML SECTION ==================== -->
<section class="eagletfly-tools-section">
    <div class="eagletfly-tools-container">
        <!-- Header Content -->
        <div class="eagletfly-tools-header eagletfly-tools-fade">
            <span class="eagletfly-tools-badge">Industry Standard</span>
            <h2 class="eagletfly-tools-title">Essential Tools & Software You Will Master</h2>
            <p class="eagletfly-tools-lead">
                With our practical training environment, we ensure competency in the industries leading software tools:
            </p>
        </div>

        <!-- Tools Grid -->
        <div class="eagletfly-tools-grid">
            
            <!-- Category 1 -->
            <div class="eagletfly-tools-card eagletfly-tools-fade">
                <div class="eagletfly-tools-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3>SEO and Research Tools</h3>
                <p>SEMrush, Ahrefs, Google Keyword Planner, Google Search Console, Screaming Frog, Ubersuggest</p>
            </div>

            <!-- Category 2 -->
            <div class="eagletfly-tools-card eagletfly-tools-fade">
                <div class="eagletfly-tools-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 11-7.778 7.778 5.5 5.5 0 017.778-7.778zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"/></svg>
                </div>
                <h3>Advertising Networks</h3>
                <p>Google Ads, Meta Ads Manager, LinkedIn Campaign Manager, YouTube Ads, Amazon Ads</p>
            </div>

            <!-- Category 3 -->
            <div class="eagletfly-tools-card eagletfly-tools-fade">
                <div class="eagletfly-tools-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 118 2.83"/><path d="M22 12A10 10 0 0012 2v10z"/></svg>
                </div>
                <h3>Analytics and Tagging Tools</h3>
                <p>Google Analytics 4 (GA4), Google Tag Manager (GTM), Google Looker Studio, Hotjar</p>
            </div>

            <!-- Category 4 -->
            <div class="eagletfly-tools-card eagletfly-tools-fade">
                <div class="eagletfly-tools-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                </div>
                <h3>Content and Design Tools</h3>
                <p>WordPress, Elementor, Canva, Adobe Express, CapCut, Grammarly</p>
            </div>

            <!-- Category 5 -->
            <div class="eagletfly-tools-card eagletfly-tools-fade">
                <div class="eagletfly-tools-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <h3>Automation and Email Marketing Tools</h3>
                <p>Mailchimp, Klaviyo, Brevo, Zapier, HubSpot CRM</p>
            </div>

            <!-- Category 6 -->
            <div class="eagletfly-tools-card eagletfly-tools-fade">
                <div class="eagletfly-tools-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/></svg>
                </div>
                <h3>AI Tools</h3>
                <p>ChatGPT, Claude, Gemini, Midjourney, Jasper AI</p>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CSS STYLES ==================== -->
<style>
/* Eagletfly Tools Section Scoped Styles */
.eagletfly-tools-section {
    position: relative;
    padding: 80px 20px;
    background: #ffffff;
    font-family: inherit;
    color: #1e293b;
    box-sizing: border-box;
}

.eagletfly-tools-section *, 
.eagletfly-tools-section *::before, 
.eagletfly-tools-section *::after {
    box-sizing: border-box;
}

.eagletfly-tools-container {
    max-width: 1140px;
    margin: 0 auto;
}

.eagletfly-tools-header {
    text-align: center;
    max-width: 850px;
    margin: 0 auto 50px auto;
}

.eagletfly-tools-badge {
    display: inline-block;
    padding: 6px 16px;
    font-size: 13px;
    font-weight: 700;
    color: #2563eb;
    background: #eff6ff;
    border: 1px solid #dbeafe;
    border-radius: 50px;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.eagletfly-tools-title {
    font-size: 34px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 15px;
    line-height: 1.3;
}

.eagletfly-tools-lead {
    font-size: 16px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

.eagletfly-tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
}

.eagletfly-tools-card {
    background: #f8fafc;
    padding: 35px 25px;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.eagletfly-tools-card:hover {
    transform: translateY(-6px);
    background: #ffffff;
    border-color: #2563eb;
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.08);
}

.eagletfly-tools-icon {
    width: 48px;
    height: 48px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    margin-bottom: 20px;
    border: 1px solid #dbeafe;
}

.eagletfly-tools-card h3 {
    font-size: 19px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
    line-height: 1.4;
}

.eagletfly-tools-card p {
    font-size: 14.5px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

/* Scroll Animation Helper */
.eagletfly-tools-fade {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.eagletfly-tools-fade.eagletfly-tools-show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const eagletflyToolsObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('eagletfly-tools-show');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.eagletfly-tools-fade').forEach(el => {
        eagletflyToolsObserver.observe(el);
    });
});
</script>