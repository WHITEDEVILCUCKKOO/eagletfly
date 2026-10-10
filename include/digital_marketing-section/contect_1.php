<!-- ==================== HTML SECTION ==================== -->
<section class="eagletfly-dm-section">
    <div class="eagletfly-dm-container">
        <!-- Header Content -->
        <div class="eagletfly-dm-header">
            <span class="eagletfly-badge">Industry-Oriented Program</span>
            <h2 class="eagletfly-title">Digital Marketing Course in Patel Nagar</h2>
            <p class="eagletfly-lead">
                With consumers always connected, mobile-first searching behavior, social commerce, and AI-driven advertisement engines gaining traction, traditional marketing is no longer enough for successful business ventures.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="eagletfly-dm-grid">
            <div class="eagletfly-dm-card eagletfly-fade-in">
                <div class="eagletfly-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h3>The Modern Workforce Demand</h3>
                <p>
                    Businesses across all industries—from small local shops to global e-commerce sites—are reallocating budgets to measurable channels. Ranking sites in search engines, running performance marketing campaigns, managing social channels, and building sales funnels are the most sought-after skills today.
                </p>
            </div>

            <div class="eagletfly-dm-card eagletfly-fade-in">
                <div class="eagletfly-icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l10 7-4 13H6L2 9l10-7z"/></svg>
                </div>
                <h3>Why Choose EagletFly Solutions?</h3>
                <p>
                    The fully industry-oriented Digital Marketing Course in Patel Nagar developed by EagletFly Solutions turns students, graduates, job seekers, and business owners into proficient digital marketers through live ad budget execution, website building, and agency-level analysis.
                </p>
            </div>
        </div>

        <!-- Highlight Footer Box -->
        <div class="eagletfly-dm-footer-box eagletfly-fade-in">
            <p>
                If you are looking for a reputable <strong>Digital Marketing Institute in Patel Nagar</strong> that pays special attention to practical skills rather than just theories, EagletFly Solutions has everything to help you succeed.
            </p>
        </div>
    </div>
</section>

<!-- ==================== CSS STYLES ==================== -->
<style>
/* EagletFly Unique Scoped Styles - No Global Resets */
.eagletfly-dm-section {
    position: relative;
    padding: 60px 20px;
    background: #f8fafc;
    font-family: inherit;
    color: #1e293b;
    box-sizing: border-box;
}

.eagletfly-dm-section *, 
.eagletfly-dm-section *::before, 
.eagletfly-dm-section *::after {
    box-sizing: border-box;
}

.eagletfly-dm-container {
    max-width: 1100px;
    margin: 0 auto;
}

.eagletfly-dm-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 45px auto;
}

.eagletfly-badge {
    display: inline-block;
    padding: 6px 14px;
    font-size: 13px;
    font-weight: 600;
    color: #2563eb;
    background: #eff6ff;
    border-radius: 50px;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.eagletfly-title {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 20px;
    line-height: 1.3;
}

.eagletfly-lead {
    font-size: 16px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

.eagletfly-dm-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 35px;
}

.eagletfly-dm-card {
    background: #ffffff;
    padding: 35px 30px;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #e2e8f0;
}

.eagletfly-dm-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.08);
    border-color: #cbd5e1;
}

.eagletfly-icon-box {
    width: 48px;
    height: 48px;
    background: #eff6ff;
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    margin-bottom: 20px;
}

.eagletfly-dm-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
}

.eagletfly-dm-card p {
    font-size: 15px;
    line-height: 1.6;
    color: #475569;
    margin: 0;
}

.eagletfly-dm-footer-box {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    color: #ffffff;
    padding: 30px 40px;
    border-radius: 16px;
    text-align: center;
    box-shadow: 0 8px 25px rgba(15, 23, 42, 0.15);
}

.eagletfly-dm-footer-box p {
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
    color: #e2e8f0;
}

.eagletfly-dm-footer-box strong {
    color: #60a5fa;
}

/* Scroll Animation Helper Class */
.eagletfly-fade-in {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.eagletfly-fade-in.eagletfly-appear {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const eagletflyObserverOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const eagletflyObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('eagletfly-appear');
                observer.unobserve(entry.target);   
            }
        });
    }, eagletflyObserverOptions);

    const eagletflyElements = document.querySelectorAll('.eagletfly-fade-in');
    eagletflyElements.forEach(el => {
        eagletflyObserver.observe(el);
    });
});
</script>