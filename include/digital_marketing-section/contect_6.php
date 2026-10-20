<!-- ==================== HTML SECTION ==================== -->
<section class="eagletfly-roadmap-section">
    <div class="eagletfly-roadmap-container">
        <!-- Header Content -->
        <div class="eagletfly-roadmap-header eagletfly-roadmap-fade">
            <span class="eagletfly-roadmap-badge">Career Roadmap</span>
            <h2 class="eagletfly-roadmap-title">Step-by-Step Career Roadmap: From Beginner to Hired</h2>
            <p class="eagletfly-roadmap-lead">
                EagletFly Solutions offers a comprehensive program divided into four steps that will transform your knowledge into employment:
            </p>
        </div>

        <!-- Roadmap Grid / Steps -->
        <div class="eagletfly-roadmap-grid">
            
            <!-- Step 1 -->
            <div class="eagletfly-roadmap-card eagletfly-roadmap-fade">
                <div class="eagletfly-roadmap-step-num">01</div>
                <h3>Foundational Strategy & Execution</h3>
                <p>Get familiar with the basic concepts of marketing, creating websites, using SEO, and working with graphic design.</p>
            </div>

            <!-- Step 2 -->
            <div class="eagletfly-roadmap-card eagletfly-roadmap-fade">
                <div class="eagletfly-roadmap-step-num">02</div>
                <h3>Paid Media & Analytics Specialization</h3>
                <p>The program includes an in-depth study of how to run and optimize campaigns on Google and Meta and provide proper tracking using GA4 technology.</p>
            </div>

            <!-- Step 3 -->
            <div class="eagletfly-roadmap-card eagletfly-roadmap-fade">
                <div class="eagletfly-roadmap-step-num">03</div>
                <h3>Portfolio Build & Live Projects</h3>
                <p>Real-life work experience is obtained by managing budgets and completing various capstone projects while publishing the portfolio.</p>
            </div>

            <!-- Step 4 -->
            <div class="eagletfly-roadmap-card eagletfly-roadmap-fade">
                <div class="eagletfly-roadmap-step-num">04</div>
                <h3>Placement Prep & Agency Interviews</h3>
                <p>Candidates who take part in special resume workshops, LinkedIn sessions, mock interviews, and job referral programs have higher chances to get hired.</p>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CSS STYLES ==================== -->
<style>
/* Eagletfly Roadmap Section Scoped Styles */
.eagletfly-roadmap-section {
    position: relative;
    padding: 80px 20px;
    background: #ffffff;
    font-family: inherit;
    color: #1e293b;
    box-sizing: border-box;
}

.eagletfly-roadmap-section *, 
.eagletfly-roadmap-section *::before, 
.eagletfly-roadmap-section *::after {
    box-sizing: border-box;
}

.eagletfly-roadmap-container {
    max-width: 1140px;
    margin: 0 auto;
}

.eagletfly-roadmap-header {
    text-align: center;
    max-width: 850px;
    margin: 0 auto 50px auto;
}

.eagletfly-roadmap-badge {
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

.eagletfly-roadmap-title {
    font-size: clamp(26px,3.2vw,36px);
    font-weight: 600;
    color: #0f172a;
    margin-bottom: 15px;
    line-height: 1.3;
}

.eagletfly-roadmap-lead {
    font-size: 16px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

.eagletfly-roadmap-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.eagletfly-roadmap-card {
    background: #f8fafc;
    padding: 35px 25px;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    position: relative;
}

.eagletfly-roadmap-card:hover {
    transform: translateY(-6px);
    background: #ffffff;
    border-color: #2563eb;
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.08);
}

.eagletfly-roadmap-step-num {
    font-size: 28px;
    font-weight: 900;
    color: #2563eb;
    background: #eff6ff;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    margin-bottom: 20px;
    border: 1px solid #dbeafe;
}

.eagletfly-roadmap-card h3 {
    font-size: 19px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
    line-height: 1.4;
}

.eagletfly-roadmap-card p {
    font-size: 14.5px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

/* Scroll Animation Helper */
.eagletfly-roadmap-fade {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.eagletfly-roadmap-fade.eagletfly-roadmap-show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const eagletflyRoadmapObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('eagletfly-roadmap-show');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.eagletfly-roadmap-fade').forEach(el => {
        eagletflyRoadmapObserver.observe(el);
    });
});
</script>