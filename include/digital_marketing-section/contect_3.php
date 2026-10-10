<!-- ==================== HTML SECTION ==================== -->
<section class="eagletfly-tracks-section">
    <div class="eagletfly-tracks-container">
        <!-- Header Content -->
        <div class="eagletfly-tracks-header eagletfly-tracks-fade">
            <span class="eagletfly-tracks-badge">Program Specialization Tracks</span>
            <h2 class="eagletfly-tracks-title">Pick the program that best suits your career aspirations:</h2>
        </div>

        <!-- Tracks Grid -->
        <div class="eagletfly-tracks-grid">
            
            <!-- Track 1 -->
            <div class="eagletfly-tracks-card eagletfly-tracks-fade">
                <div class="eagletfly-tracks-duration">8 Weeks</div>
                <h3>Digital Marketing Foundation Track</h3>
                <p class="eagletfly-tracks-target">Suitable for beginners wanting to get some basic skills.</p>
                <p class="eagletfly-tracks-desc">
                    The focus is on website building, SEO basics, social media management, and Google/Meta ads. There are also two practical projects and resume advice.
                </p>
                <ul class="eagletfly-tracks-features">
                    <li>Website Building & SEO Basics</li>
                    <li>Social Media Management</li>
                    <li>Google & Meta Ads Intro</li>
                    <li>2 Practical Projects & Resume Advice</li>
                </ul>
            </div>

            <!-- Track 2 (Bestseller / Featured) -->
            <div class="eagletfly-tracks-card eagletfly-tracks-featured eagletfly-tracks-fade">
                <span class="eagletfly-tracks-pop-badge">Most Popular</span>
                <div class="eagletfly-tracks-duration">16 Weeks</div>
                <h3>Professional Digital Marketing Specialist Track</h3>
                <p class="eagletfly-tracks-target">Designed for recent grads, job seekers, and career switchers.</p>
                <p class="eagletfly-tracks-desc">
                    The whole standard 12-modules curriculum is covered, including GA4, advanced PPC, Meta ads, and email automation.
                </p>
                <ul class="eagletfly-tracks-features">
                    <li>Complete 12-Module Curriculum</li>
                    <li>GA4 & Advanced PPC</li>
                    <li>Email Automation & Meta Ads</li>
                    <li>4 Live Projects & Job Placement Help</li>
                </ul>
            </div>

            <!-- Track 3 -->
            <div class="eagletfly-tracks-card eagletfly-tracks-fade">
                <div class="eagletfly-tracks-duration">24 Weeks</div>
                <h3>Advanced Performance Marketing & AI Track</h3>
                <p class="eagletfly-tracks-target">For experienced marketers looking to scale or run an agency.</p>
                <p class="eagletfly-tracks-desc">
                    Includes everything from the previous curriculum, plus media buying strategies, advanced CRO, programmatic advertising, AI tools, and agency management.
                </p>
                <ul class="eagletfly-tracks-features">
                    <li>Media Buying & Advanced CRO</li>
                    <li>Programmatic Advertising & AI Tools</li>
                    <li>Agency Management & Scaling</li>
                    <li>6 Live Projects & Placement Assistance</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CSS STYLES ==================== -->
<style>
/* Eagletfly White Background Theme Scoped Styles */
.eagletfly-tracks-section {
    position: relative;
    padding: 80px 20px;
    background: #ffffff;
    font-family: inherit;
    color: #1e293b;
    box-sizing: border-box;
}

.eagletfly-tracks-section *, 
.eagletfly-tracks-section *::before, 
.eagletfly-tracks-section *::after {
    box-sizing: border-box;
}

.eagletfly-tracks-container {
    max-width: 1140px;
    margin: 0 auto;
}

.eagletfly-tracks-header {
    text-align: center;
    max-width: 850px;
    margin: 0 auto 50px auto;
}

.eagletfly-tracks-badge {
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

.eagletfly-tracks-title {
    font-size: 34px;
    font-weight: 800;
    color: #0f172a;
    margin: 0;
    line-height: 1.3;
}

.eagletfly-tracks-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    align-items: stretch;
}

.eagletfly-tracks-card {
    background: #f8fafc;
    padding: 35px 30px;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    position: relative;
    display: flex;
    flex-direction: column;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
}

.eagletfly-tracks-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(37, 99, 235, 0.08);
    border-color: #cbd5e1;
    background: #ffffff;
}

.eagletfly-tracks-card.eagletfly-tracks-featured {
    background: #ffffff;
    border: 2px solid #2563eb;
    box-shadow: 0 10px 30px rgba(37, 99, 235, 0.1);
}

.eagletfly-tracks-pop-badge {
    position: absolute;
    top: -14px;
    right: 25px;
    background: #2563eb;
    color: #ffffff;
    font-size: 12px;
    font-weight: 700;
    padding: 5px 14px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    height: max-content;
}

.eagletfly-tracks-duration {
    display: inline-block;
    width: fit-content;
    padding: 5px 12px;
    background: #e0f2fe;
    color: #0369a1;
    font-size: 12px;
    font-weight: 700;
    border-radius: 6px;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.eagletfly-tracks-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 10px;
    line-height: 1.4;
}

.eagletfly-tracks-target {
    font-size: 14px;
    font-weight: 600;
    color: #2563eb;
    margin-bottom: 15px;
}

.eagletfly-tracks-desc {
    font-size: 15px;
    line-height: 1.6;
    color: #475569;
    margin-bottom: 25px;
}

.eagletfly-tracks-features {
    margin: auto 0 0 0;
    padding: 20px 0 0 0;
    list-style: none;
    border-top: 1px solid #e2e8f0;
}

.eagletfly-tracks-features li {
    position: relative;
    padding-left: 22px;
    font-size: 14px;
    color: #334155;
    margin-bottom: 10px;
    line-height: 1.5;
}

.eagletfly-tracks-features li:last-child {
    margin-bottom: 0;
}

.eagletfly-tracks-features li::before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 0;
    color: #2563eb;
    font-weight: 800;
}

/* Scroll Animation Helper */
.eagletfly-tracks-fade {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.eagletfly-tracks-fade.eagletfly-tracks-show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const eagletflyTracksObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('eagletfly-tracks-show');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.eagletfly-tracks-fade').forEach(el => {
        eagletflyTracksObserver.observe(el);
    });
});
</script>