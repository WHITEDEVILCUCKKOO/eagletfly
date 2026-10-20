<!-- ==================== HTML SECTION ==================== -->
<section class="eagletfly-cta-section">
    <div class="eagletfly-cta-container">
        <div class="eagletfly-cta-box eagletfly-cta-fade">
            <span class="eagletfly-cta-badge">Enroll Today</span>
            <h2 class="eagletfly-cta-title">Kickstart Your Digital Career with EagletFly Solutions Today</h2>
            <p class="eagletfly-cta-lead">
                Take the definitive step toward a high-growth career in digital marketing. Enroll in the upcoming batch of our Digital Marketing Course in Patel Nagar at EagletFly Solutions to build practical campaign skills, manage real ad budgets, and secure top marketing roles.
            </p>
            <div class="eagletfly-cta-btn-wrap">
                <a href="#contact" class="eagletfly-cta-btn">Book Your Free Demo Class Now</a>
            </div>
        </div>
    </div>
</section>

<!-- ==================== CSS STYLES ==================== -->
<style>
/* Eagletfly CTA Section Scoped Styles */
.eagletfly-cta-section {
    position: relative;
    padding: 80px 20px;
    background: #ffffff;
    font-family: inherit;
    color: #1e293b;
    box-sizing: border-box;
}

.eagletfly-cta-section *, 
.eagletfly-cta-section *::before, 
.eagletfly-cta-section *::after {
    box-sizing: border-box;
}

.eagletfly-cta-container {
    max-width: 1000px;
    margin: 0 auto;
}

.eagletfly-cta-box {
    background: linear-gradient(135deg, #eff6ff 0%, #f1f5f9 100%);
    border: 1px solid #cbd5e1;
    border-radius: 24px;
    padding: 50px 40px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(37, 99, 235, 0.05);
}

.eagletfly-cta-badge {
    display: inline-block;
    padding: 6px 16px;
    font-size: 13px;
    font-weight: 700;
    color: #2563eb;
    background: #ffffff;
    border: 1px solid #dbeafe;
    border-radius: 50px;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.eagletfly-cta-title {
    font-size: clamp(26px,3.2vw,36px);
    font-weight: 600;
    color: #0f172a;
    margin-bottom: 20px;
    line-height: 1.3;
}

.eagletfly-cta-lead {
    font-size: 16px;
    line-height: 1.8;
    color: #475569;
    max-width: 800px;
    margin: 0 auto 30px auto;
}

.eagletfly-cta-btn-wrap {
    margin-top: 10px;
}

.eagletfly-cta-btn {
    display: inline-block;
    background: #2563eb;
    color: #ffffff !important;
    padding: 15px 35px;
    font-size: 16px;
    font-weight: 700;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
}

.eagletfly-cta-btn:hover {
    background: #1d4ed8;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
}

/* Scroll Animation Helper */
.eagletfly-cta-fade {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.eagletfly-cta-fade.eagletfly-cta-show {
    opacity: 1;
    transform: translateY(0);
}

@media(max-width: 768px) {
    .eagletfly-cta-title {
        font-size: 26px;
    }
    .eagletfly-cta-box {
        padding: 35px 20px;
    }
}
</style>

<!-- ==================== JAVASCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const eagletflyCtaObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('eagletfly-cta-show');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.eagletfly-cta-fade').forEach(el => {
        eagletflyCtaObserver.observe(el);
    });
});
</script>   