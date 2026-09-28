<!-- AI Course Section 2: Why Enroll -->
<style>
    /* Unique scoped styling for Section 2 */
    .aic-sec2-wrapper {
        background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
        color: #ffffff;
        line-height: 1.6;
        padding: 80px 20px;
        font-family: inherit;
        overflow: hidden;
        border-top: 1px solid rgba(99, 102, 241, 0.2);
        border-bottom: 1px solid rgba(99, 102, 241, 0.2);
    }

    .aic-sec2-container {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }

    .aic-sec2-heading-wrap {
        margin-bottom: 40px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .aic-sec2-heading-wrap.aic-sec2-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec2-title {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(90deg, #f43f5e 0%, #fb7185 50%, #e879f9 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 15px;
    }

    .aic-sec2-title-glow {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #f43f5e, #e879f9);
        margin: 0 auto;
        border-radius: 2px;
        box-shadow: 0 0 15px rgba(244, 63, 94, 0.5);
    }

    .aic-sec2-card {
        background: rgba(30, 41, 59, 0.8);
        border: 1px solid rgba(244, 63, 94, 0.25);
        padding: 45px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(12px);
        opacity: 0;
        transform: translateY(40px);
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), 
                    opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), 
                    border-color 0.3s ease, 
                    box-shadow 0.3s ease;
        text-align: left;
    }

    .aic-sec2-card.aic-sec2-visible {
        opacity: 1;
        transform: translateY(0);
        transition-delay: 0.2s;
    }

    .aic-sec2-card:hover {
        transform: translateY(-6px);
        border-color: rgba(244, 63, 94, 0.6);
        box-shadow: 0 25px 50px rgba(244, 63, 94, 0.15);
    }

    .aic-sec2-text {
        color: #cbd5e1;
        font-size: 1.15rem;
        margin-bottom: 0;
    }

    .aic-sec2-highlight {
        color: #fb7185;
        font-weight: 600;
        text-shadow: 0 0 10px rgba(251, 113, 133, 0.3);
    }

    /* Responsive Queries */
    @media (max-width: 768px) {
        .aic-sec2-title {
            font-size: 2rem;
        }
        .aic-sec2-card {
            padding: 30px;
        }
    }

    @media (max-width: 480px) {
        .aic-sec2-wrapper {
            padding: 50px 15px;
        }
        .aic-sec2-title {
            font-size: 1.6rem;
        }
        .aic-sec2-card {
            padding: 20px;
        }
        .aic-sec2-text {
            font-size: 1rem;
        }
    }
</style>

<section class="aic-sec2-wrapper">
    <div class="aic-sec2-container">
        <!-- Section Header -->
        <div class="aic-sec2-heading-wrap" id="aicSec2Header">
            <h2 class="aic-sec2-title">Why Enroll in an Artificial Intelligence Course in Delhi?</h2>
            <div class="aic-sec2-title-glow"></div>
        </div>

        <!-- Content Card -->
        <div class="aic-sec2-card" id="aicSec2Card">
            <p class="aic-sec2-text">
                Delhi NCR has rapidly emerged as a primary hub for tech innovation, corporate headquarters, analytics firms, and booming startups. Enrolling in a dedicated <span class="aic-sec2-highlight">AI Course in Delhi</span> positions you directly at the center of extensive hiring networks and technological growth.
            </p>
        </div>
    </div>
</section>

<script>
    // Scroll Animation Script for Section 2
    document.addEventListener("DOMContentLoaded", function () {
        const aicSec2Options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const aicSec2Callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aic-sec2-visible');
                }
            });
        };

        const aicSec2Observer = new IntersectionObserver(aicSec2Callback, aicSec2Options);

        const aicSec2Header = document.getElementById('aicSec2Header');
        if (aicSec2Header) {
            aicSec2Observer.observe(aicSec2Header);
        }

        const aicSec2Card = document.getElementById('aicSec2Card');
        if (aicSec2Card) {
            aicSec2Observer.observe(aicSec2Card);
        }
    });
</script>