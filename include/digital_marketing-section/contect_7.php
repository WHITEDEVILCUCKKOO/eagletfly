<!-- ==================== HTML SECTION ==================== -->
<section class="eagletfly-practices-section">
    <div class="eagletfly-practices-container">
        <!-- Header Content -->
        <div class="eagletfly-practices-header eagletfly-practices-fade">
            <span class="eagletfly-practices-badge">Expert Guidelines</span>
            <h2 class="eagletfly-practices-title">Key Best Practices for Modern Digital Marketers</h2>
            <p class="eagletfly-practices-lead">
                In order to create continuous success with your campaigns and remain on top of expected algorithm updates in the industry, make sure to follow these key steps:
            </p>
        </div>

        <!-- Practices Grid -->
        <div class="eagletfly-practices-grid">
            
            <!-- Practice 1 -->
            <div class="eagletfly-practices-card eagletfly-practices-fade">
                <div class="eagletfly-practices-num">01</div>
                <h3>Make customer intent the priority rather than the algorithms</h3>
                <p>Instead of focusing solely on keywords and artificial parameters for search engines, it is important to create useful and unique content that will address the concerns of your audience.</p>
            </div>

            <!-- Practice 2 -->
            <div class="eagletfly-practices-card eagletfly-practices-fade">
                <div class="eagletfly-practices-num">02</div>
                <h3>Conduct Creatives Testing</h3>
                <p>It is advisable to move away from irrelevant or unstructured testing phase involving your new ads and make use of A/B testing approach to test out the features of your new ad campaign.</p>
            </div>

            <!-- Practice 3 -->
            <div class="eagletfly-practices-card eagletfly-practices-fade">
                <div class="eagletfly-practices-num">03</div>
                <h3>Verify Your Analytics</h3>
                <p>It is important to make sure that your conversion pixels, GTM tags, and GA4 events are properly functioning before you launch your ad with a high budget.</p>
            </div>

            <!-- Practice 4 -->
            <div class="eagletfly-practices-card eagletfly-practices-fade">
                <div class="eagletfly-practices-num">04</div>
                <h3>Stay Updated with the Industry</h3>
                <p>Make sure to follow updates from the key players, including Google and Meta, as well as significant marketing news sources to be able to adjust to updated trends in the industry quickly.</p>
            </div>

        </div>
    </div>
</section>

<!-- ==================== CSS STYLES ==================== -->
<style>
/* Eagletfly Practices Section Scoped Styles */
.eagletfly-practices-section {
    position: relative;
    padding: 80px 20px;
    background: #ffffff;
    font-family: inherit;
    color: #1e293b;
    box-sizing: border-box;
}

.eagletfly-practices-section *, 
.eagletfly-practices-section *::before, 
.eagletfly-practices-section *::after {
    box-sizing: border-box;
}

.eagletfly-practices-container {
    max-width: 1140px;
    margin: 0 auto;
}

.eagletfly-practices-header {
    text-align: center;
    max-width: 850px;
    margin: 0 auto 50px auto;
}

.eagletfly-practices-badge {
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

.eagletfly-practices-title {
    font-size: 34px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 15px;
    line-height: 1.3;
}

.eagletfly-practices-lead {
    font-size: 16px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

.eagletfly-practices-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.eagletfly-practices-card {
    background: #f8fafc;
    padding: 35px 25px;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    position: relative;
}

.eagletfly-practices-card:hover {
    transform: translateY(-6px);
    background: #ffffff;
    border-color: #2563eb;
    box-shadow: 0 12px 30px rgba(37, 99, 235, 0.08);
}

.eagletfly-practices-num {
    font-size: 26px;
    font-weight: 900;
    color: #2563eb;
    background: #eff6ff;
    width: 54px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    margin-bottom: 20px;
    border: 1px solid #dbeafe;
}

.eagletfly-practices-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
    line-height: 1.4;
}

.eagletfly-practices-card p {
    font-size: 14.5px;
    line-height: 1.7;
    color: #475569;
    margin: 0;
}

/* Scroll Animation Helper */
.eagletfly-practices-fade {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.eagletfly-practices-fade.eagletfly-practices-show {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const eagletflyPracticesObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('eagletfly-practices-show');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.eagletfly-practices-fade').forEach(el => {
        eagletflyPracticesObserver.observe(el);
    });
});
</script>