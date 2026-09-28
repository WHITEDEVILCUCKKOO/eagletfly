<!-- AI Course Section 6: High-Demand AI Job Roles & Salary Scope (6 Cards Grid) -->
<style>
    .aic-sec6-wrapper {
        /* background-color: #ffffff; */
            background: #01132E;
        color: #fbfcfd;
        line-height: 1.6;
        padding: 90px 20px;
        font-family: inherit;
        overflow: hidden;
        border-top: 1px solid #e2e8f0;
    }

    .aic-sec6-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .aic-sec6-heading-wrap {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .aic-sec6-heading-wrap.aic-sec6-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec6-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #f4f5f7;
        margin-bottom: 12px;
    }

    .aic-sec6-title-line {
        width: 80px;
        height: 4px;
        background: #6366f1;
        margin: 0 auto 20px auto;
        border-radius: 2px;
    }

    .aic-sec6-subtitle {
        color: #acb0b6;
        font-size: 1.1rem;
        max-width: 850px;
        margin: 0 auto !important;
    }

    /* 3x2 Grid Layout for 6 Job Roles */
    .aic-sec6-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .aic-sec6-card {
        background: #cad3dd;
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

    .aic-sec6-card.aic-sec6-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec6-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.07);
        border-color: #cbd5e1;
    }

    /* Staggered animation delays */
    .aic-sec6-card:nth-child(1) { transition-delay: 0.1s; }
    .aic-sec6-card:nth-child(2) { transition-delay: 0.2s; }
    .aic-sec6-card:nth-child(3) { transition-delay: 0.3s; }
    .aic-sec6-card:nth-child(4) { transition-delay: 0.4s; }
    .aic-sec6-card:nth-child(5) { transition-delay: 0.5s; }
    .aic-sec6-card:nth-child(6) { transition-delay: 0.6s; }

    .aic-sec6-role-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e2e8f0;
    }

    .aic-sec6-role-icon {
        width: 38px;
        height: 38px;
        background: #e0e7ff;
        color: #4338ca;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 0.95rem;
    }

    .aic-sec6-role-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #0f172a;
    }

    .aic-sec6-role-desc {
        color: #475569;
        font-size: 0.98rem;
        margin: 0;
        line-height: 1.6;
    }

    /* Responsive Design */
    @media (max-width: 968px) {
        .aic-sec6-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .aic-sec6-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 640px) {
        .aic-sec6-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .aic-sec6-wrapper {
            padding: 50px 15px;
        }

        .aic-sec6-title {
            font-size: 1.6rem;
        }

        .aic-sec6-card {
            padding: 24px;
        }
    }
</style>

<section class="aic-sec6-wrapper">
    <div class="aic-sec6-container">
        <!-- Section Header -->
        <div class="aic-sec6-heading-wrap" id="aicSec6Header">
            <h2 class="aic-sec6-title">High-Demand AI Job Roles & Salary Scope in Delhi NCR</h2>
            <div class="aic-sec6-title-line"></div>
            <p class="aic-sec6-subtitle">Completing an industry-aligned Artificial Intelligence Course in Delhi opens doors to multiple career paths in tech and corporate sectors:</p>
        </div>

        <!-- Job Roles Grid Layout (3x2) -->
        <div class="aic-sec6-grid">
            <!-- Role 1 -->
            <div class="aic-sec6-card aic-sec6-animate">
                <div class="aic-sec6-role-header">
                    <div class="aic-sec6-role-icon">AI</div>
                    <h3 class="aic-sec6-role-title">AI Engineer</h3>
                </div>
                <p class="aic-sec6-role-desc">Creates and implements efficient AI systems that are used in daily operations.</p>
            </div>

            <!-- Role 2 -->
            <div class="aic-sec6-card aic-sec6-animate">
                <div class="aic-sec6-role-header">
                    <div class="aic-sec6-role-icon">ML</div>
                    <h3 class="aic-sec6-role-title">Machine Learning Engineer</h3>
                </div>
                <p class="aic-sec6-role-desc">Concentrates on the design of machine learning processes and their deployment.</p>
            </div>

            <!-- Role 3 -->
            <div class="aic-sec6-card aic-sec6-animate">
                <div class="aic-sec6-role-header">
                    <div class="aic-sec6-role-icon">DS</div>
                    <h3 class="aic-sec6-role-title">Data Scientist</h3>
                </div>
                <p class="aic-sec6-role-desc">Employs statistical methods and machine learning techniques for conversion of data into actionable insights.</p>
            </div>

            <!-- Role 4 -->
            <div class="aic-sec6-card aic-sec6-animate">
                <div class="aic-sec6-role-header">
                    <div class="aic-sec6-role-icon">VE</div>
                    <h3 class="aic-sec6-role-title">Vision Engineer</h3>
                </div>
                <p class="aic-sec6-role-desc">Designs image recognition and processing architectures for solving important tasks.</p>
            </div>

            <!-- Role 5 -->
            <div class="aic-sec6-card aic-sec6-animate">
                <div class="aic-sec6-role-header">
                    <div class="aic-sec6-role-icon">NL</div>
                    <h3 class="aic-sec6-role-title">NLP Engineer</h3>
                </div>
                <p class="aic-sec6-role-desc">Produces effective machine learning models and conversational AI systems.</p>
            </div>

            <!-- Role 6 (Added) -->
            <div class="aic-sec6-card aic-sec6-animate">
                <div class="aic-sec6-role-header">
                    <div class="aic-sec6-role-icon">GEN</div>
                    <h3 class="aic-sec6-role-title">Generative AI Engineer</h3>
                </div>
                <p class="aic-sec6-role-desc">Builds cutting-edge LLM applications, custom prompt workflows, RAG systems, and AI-driven enterprise solutions.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Scroll Animation Script for Section 6
    document.addEventListener("DOMContentLoaded", function () {
        const aicSec6Options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const aicSec6Callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aic-sec6-visible');
                }
            });
        };

        const aicSec6Observer = new IntersectionObserver(aicSec6Callback, aicSec6Options);

        const aicSec6Header = document.getElementById('aicSec6Header');
        if (aicSec6Header) {
            aicSec6Observer.observe(aicSec6Header);
        }

        const aicSec6Cards = document.querySelectorAll('.aic-sec6-animate');
        aicSec6Cards.forEach(card => {
            aicSec6Observer.observe(card);
        });
    });
</script>