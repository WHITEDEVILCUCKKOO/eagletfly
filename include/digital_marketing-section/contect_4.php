<!-- ==================== HTML SECTION ==================== -->
<section class="eagletfly-caps-section">
    <div class="eagletfly-caps-container">
        <!-- Header Content -->
        <div class="eagletfly-caps-header eagletfly-caps-fade">
            <span class="eagletfly-caps-badge">Practical Applications</span>
            <h2 class="eagletfly-caps-title">Real-World Capstone Projects & Practical Applications</h2>
            <p class="eagletfly-caps-lead">
                Tangible execution takes center stage in the Digital Marketing Course in Patel Nagar. Participants complete portfolio projects in the fields of:
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="eagletfly-caps-grid">
            
            <!-- Project 1 -->
            <div class="eagletfly-caps-card eagletfly-caps-fade">
                <div class="eagletfly-caps-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
                </div>
                <h3>E-Commerce Sales and Retargeting Campaign</h3>
                <p>
                    Construct a complete Shopify site; set up Google PMax and Meta Advantage+ campaigns; assume implementation of tracking tags; and run abandoned cart retargeting flows.
                </p>
            </div>

            <!-- Project 2 -->
            <div class="eagletfly-caps-card eagletfly-caps-fade">
                <div class="eagletfly-caps-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Local Business Lead Generation Funnel</h3>
                <p>
                    Create a conversion-focused landing page for a local service provider; implement targeted local search advertisements; and optimize Google Business Profile for calls and lead forms.
                </p>
            </div>

            <!-- Project 3 -->
            <div class="eagletfly-caps-card eagletfly-caps-fade">
                <div class="eagletfly-caps-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg>
                </div>
                <h3>B2B Content Process and LinkedIn Campaign</h3>
                <p>
                    Create the pieces for an inbound content strategy; develop long articles for the blog; create lead magnets; and create campaigns for B2B lead generation on LinkedIn.
                </p>
            </div>

            <!-- Project 4 -->
            <div class="eagletfly-caps-card eagletfly-caps-fade">
                <div class="eagletfly-caps-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                </div>
                <h3>Website SEO Redesign and Ranking</h3>
                <p>
                    Conduct a technical audit of an existing website; solve crawling problems found; rework page meta-data; perform link-building; and measure ranking.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CSS STYLES ==================== -->
<style>
/* Eagletfly Capstone Section Scoped Styles */
.eagletfly-caps-section {
    position: relative;
    padding: 80px 20px;
     background:
            radial-gradient(circle at 8% 12%,
                rgba(255, 102, 46, .18),
                transparent 30%),

            radial-gradient(circle at 93% 8%,
                rgba(126, 82, 220, .20),
                transparent 34%),

            radial-gradient(circle at 58% 100%,
                rgba(72, 96, 205, .10),
                transparent 34%),

            linear-gradient(135deg,
                #070A12 0%,
                #0B1020 34%,
                #121126 68%,
                #17102B 100%);
    /* background: #ffffff; */
    font-family: inherit;
    color: #ffffff;
    box-sizing: border-box;
}

.eagletfly-caps-section *, 
.eagletfly-caps-section *::before, 
.eagletfly-caps-section *::after {
    box-sizing: border-box;
}

.eagletfly-caps-container {
    max-width: 1140px;
    margin: 0 auto;
}

.eagletfly-caps-header {
    text-align: center;
    max-width: 850px;
    margin: 0 auto 50px auto;
}

.eagletfly-caps-badge {
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

.eagletfly-caps-title {
    font-size: 34px;
    font-weight: 800;
    color: #f9fafc;
    margin-bottom: 15px;
    line-height: 1.3;
}

.eagletfly-caps-lead {
    font-size: 16px;
    line-height: 1.7;
    color: #7c838b;
    margin: 0;
}

.eagletfly-caps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}

.eagletfly-caps-card {
    background: #f8fafc;
    padding: 35px 25px;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.eagletfly-caps-card:hover {
    transform: translateY(-6px);
    background: #ffffff;
    border-color: #2563eb;
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.08);
}

.eagletfly-caps-icon {
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

.eagletfly-caps-card h3 {
    font-size: 19px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
    line-height: 1.4;
}

.eagletfly-caps-card p {
    font-size: 14.5px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

/* Scroll Animation Helper */
.eagletfly-caps-fade {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.eagletfly-caps-fade.eagletfly-caps-show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const eagletflyCapsObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('eagletfly-caps-show');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.eagletfly-caps-fade').forEach(el => {
        eagletflyCapsObserver.observe(el);
    });
});
</script>