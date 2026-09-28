<!-- AI Course Section 7: Why Choose Our Training Program -->
<style>
    .aic-sec7-wrapper {
        background-color: #ffffff;
        color: #1e293b;
        line-height: 1.6;
        padding: 90px 20px;
        font-family: inherit;
        overflow: hidden;
        border-top: 1px solid #e2e8f0;
    }

    .aic-sec7-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .aic-sec7-heading-wrap {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .aic-sec7-heading-wrap.aic-sec7-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec7-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
    }

    .aic-sec7-title-line {
        width: 80px;
        height: 4px;
        background: #6366f1;
        margin: 0 auto 20px auto;
        border-radius: 2px;
    }

    .aic-sec7-subtitle {
        color: #475569;
        font-size: 1.1rem;
        max-width: 850px;
        margin: 0 auto;
    }

    /* 2x2 Grid Layout for 4 Points */
    .aic-sec7-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .aic-sec7-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        opacity: 0;
        transform: translateY(30px);
        transition: transform 0.5s ease, opacity 0.5s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .aic-sec7-card.aic-sec7-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec7-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.07);
        border-color: #cbd5e1;
    }

    /* Staggered animation delays */
    .aic-sec7-card:nth-child(1) { transition-delay: 0.1s; }
    .aic-sec7-card:nth-child(2) { transition-delay: 0.2s; }
    .aic-sec7-card:nth-child(3) { transition-delay: 0.3s; }
    .aic-sec7-card:nth-child(4) { transition-delay: 0.4s; }

    .aic-sec7-card-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e2e8f0;
    }

    .aic-sec7-card-icon {
        width: 38px;
        height: 38px;
        background: #e0e7ff;
        color: #4338ca;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1rem;
    }

    .aic-sec7-card-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #0f172a;
    }

    .aic-sec7-card-desc {
        color: #475569;
        font-size: 0.98rem;
        margin: 0;
        line-height: 1.6;
    }

    /* Responsive Design */
    @media (max-width: 968px) {
        .aic-sec7-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .aic-sec7-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .aic-sec7-wrapper {
            padding: 50px 15px;
        }

        .aic-sec7-title {
            font-size: 1.6rem;
        }

        .aic-sec7-card {
            padding: 24px;
        }
    }
</style>

<section class="aic-sec7-wrapper">
    <div class="aic-sec7-container">
        <!-- Section Header -->
        <div class="aic-sec7-heading-wrap" id="aicSec7Header">
            <h2 class="aic-sec7-title">Why Choose Our Training Program?</h2>
            <div class="aic-sec7-title-line"></div>
            <p class="aic-sec7-subtitle">Discover what makes our AI course stand out and empower your technical career journey:</p>
        </div>

        <!-- Cards Grid Layout (2x2) -->
        <div class="aic-sec7-grid">
            <!-- Point 1 -->
            <div class="aic-sec7-card aic-sec7-animate">
                <div class="aic-sec7-card-header">
                    <div class="aic-sec7-card-icon">01</div>
                    <h3 class="aic-sec7-card-title">Mentors with Industry Experience</h3>
                </div>
                <p class="aic-sec7-card-desc">Collaborate with high-level AI specialists, data science experts and other practitioners with years of experience in practice.</p>
            </div>

            <!-- Point 2 -->
            <div class="aic-sec7-card aic-sec7-animate">
                <div class="aic-sec7-card-header">
                    <div class="aic-sec7-card-icon">02</div>
                    <h3 class="aic-sec7-card-title">100% Productive Learning</h3>
                </div>
                <p class="aic-sec7-card-desc">Devote more than 70% of the course to coding, learning to use technology and developing real projects.</p>
            </div>

            <!-- Point 3 -->
            <div class="aic-sec7-card aic-sec7-animate">
                <div class="aic-sec7-card-header">
                    <div class="aic-sec7-card-icon">03</div>
                    <h3 class="aic-sec7-card-title">Flexibility in Learning</h3>
                </div>
                <p class="aic-sec7-card-desc">Have a choice between classes that take place on weekends or workdays, with the possibility of attending offline or online classes.</p>
            </div>

            <!-- Point 4 -->
            <div class="aic-sec7-card aic-sec7-animate">
                <div class="aic-sec7-card-header">
                    <div class="aic-sec7-card-icon">04</div>
                    <h3 class="aic-sec7-card-title">Professional Placement Assistance</h3>
                </div>
                <p class="aic-sec7-card-desc">Get the help with creating resumes, enhancing Linkedin profile, developing portfolios and scheduling interviews.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Scroll Animation Script for Section 7
    document.addEventListener("DOMContentLoaded", function () {
        const aicSec7Options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const aicSec7Callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aic-sec7-visible');
                }
            });
        };

        const aicSec7Observer = new IntersectionObserver(aicSec7Callback, aicSec7Options);

        const aicSec7Header = document.getElementById('aicSec7Header');
        if (aicSec7Header) {
            aicSec7Observer.observe(aicSec7Header);
        }

        const aicSec7Cards = document.querySelectorAll('.aic-sec7-animate');
        aicSec7Cards.forEach(card => {
            aicSec7Observer.observe(card);
        });
    });
</script>