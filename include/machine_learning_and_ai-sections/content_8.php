<!-- AI Course Section 8: Why Choose EagletFly Solutions -->
<style>
    .aic-sec8-wrapper {
        /* background-color: #ffffff; */
            background: #01132E;
        color: #1e293b;
        line-height: 1.6;
        padding: 90px 20px;
        font-family: inherit;
        overflow: hidden;
        border-top: 1px solid #e2e8f0;
    }

    .aic-sec8-container {
        max-width: 1000px;
        margin: 0 auto;
    }

    .aic-sec8-heading-wrap {
        text-align: center;
        margin-bottom: 50px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .aic-sec8-heading-wrap.aic-sec8-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec8-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #fdfdfd;
        margin-bottom: 12px;
    }

    .aic-sec8-title-line {
        width: 80px;
        height: 4px;
        background: #6366f1;
        margin: 0 auto;
        border-radius: 2px;
    }

    .aic-sec8-card {
        background: #cadbeb;
        border: 1px solid #e2e8f0;
        padding: 45px;
        border-radius: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        opacity: 0;
        transform: translateY(30px);
        transition: transform 0.5s ease, opacity 0.5s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .aic-sec8-card.aic-sec8-visible {
        opacity: 1;
        transform: translateY(0);
        transition-delay: 0.2s;
    }

    .aic-sec8-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.07);
        border-color: #cbd5e1;
    }

    .aic-sec8-text {
        color: #475569;
        font-size: 1.1rem;
        margin-bottom: 20px;
        line-height: 1.7;
    }

    .aic-sec8-text:last-child {
        margin-bottom: 0;
    }

    .aic-sec8-highlight {
        color: #4338ca;
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .aic-sec8-title {
            font-size: 2rem;
        }

        .aic-sec8-card {
            padding: 30px;
        }
    }

    @media (max-width: 480px) {
        .aic-sec8-wrapper {
            padding: 50px 15px;
        }

        .aic-sec8-title {
            font-size: 1.6rem;
        }

        .aic-sec8-card {
            padding: 22px;
        }

        .aic-sec8-text {
            font-size: 1rem;
        }
    }
</style>

<section class="aic-sec8-wrapper">
    <div class="aic-sec8-container">
        <!-- Section Header -->
        <div class="aic-sec8-heading-wrap" id="aicSec8Header">
            <h2 class="aic-sec8-title">Why Choose EagletFly Solutions for Your AI Course?</h2>
            <div class="aic-sec8-title-line"></div>
        </div>

        <!-- Content Card -->
        <div class="aic-sec8-card aic-sec8-animate" id="aicSec8Card">
            <p class="aic-sec8-text">
                Choosing an appropriate training collaborator is vital when it comes to forging a successful career in advanced technology. <span class="aic-sec8-highlight">EagletFly solutions</span> stands out because it combines academic theories with practical enterprise production.
            </p>
            <p class="aic-sec8-text">
                Ordinary institutes place their focus on textbook learning; however, <span class="aic-sec8-highlight">EagletFly solutions</span> brings practical experience in all aspects of AI technology and its application to media, digital marketing, content synthesis, and video automation processes.
            </p>
            <p class="aic-sec8-text">
                Studying with us implies that you will be taught by the professionals who develop AI solutions for various businesses. Our program is focused on practical implementation and covers all stages of AI implementation including model development and local API integration through production deployment.
            </p>
        </div>
    </div>
</section>

<script>
    // Scroll Animation Script for Section 8
    document.addEventListener("DOMContentLoaded", function () {
        const aicSec8Options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const aicSec8Callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aic-sec8-visible');
                }
            });
        };

        const aicSec8Observer = new IntersectionObserver(aicSec8Callback, aicSec8Options);

        const aicSec8Header = document.getElementById('aicSec8Header');
        if (aicSec8Header) {
            aicSec8Observer.observe(aicSec8Header);
        }

        const aicSec8Card = document.getElementById('aicSec8Card');
        if (aicSec8Card) {
            aicSec8Observer.observe(aicSec8Card);
        }
    });
</script>