<!-- AI Course Section 3: Strategic Career Advantages -->
<style>
    /* Unique scoped styling for Section 3 (Clean & White Theme) */
    .aic-sec3-wrapper {
        background-color: #ffffff;
        color: #1e293b;
        line-height: 1.6;
        padding: 80px 20px;
        font-family: inherit;
        overflow: hidden;
    }

    .aic-sec3-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    .aic-sec3-heading-wrap {
        text-align: center;
        margin-bottom: 50px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .aic-sec3-heading-wrap.aic-sec3-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec3-title {
        font-size: 2.4rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
    }

    .aic-sec3-title-line {
        width: 70px;
        height: 4px;
        background: #6366f1;
        margin: 0 auto;
        border-radius: 2px;
    }

    /* Simple Grid Layout for 4 Points */
    .aic-sec3-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .aic-sec3-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        opacity: 0;
        transform: translateY(30px);
        transition: transform 0.5s ease, opacity 0.5s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    .aic-sec3-card.aic-sec3-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec3-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px -3px rgba(0, 0, 0, 0.08);
        border-color: #cbd5e1;
    }

    /* Staggered animation delays */
    .aic-sec3-card:nth-child(1) { transition-delay: 0.1s; }
    .aic-sec3-card:nth-child(2) { transition-delay: 0.2s; }
    .aic-sec3-card:nth-child(3) { transition-delay: 0.3s; }
    .aic-sec3-card:nth-child(4) { transition-delay: 0.4s; }

    .aic-sec3-point-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Simple bullet/indicator dot */
    .aic-sec3-point-title::before {
        content: '';
        display: inline-block;
        width: 8px;
        height: 8px;
        background-color: #6366f1;
        border-radius: 50%;
    }

    .aic-sec3-point-desc {
        color: #475569;
        font-size: 1rem;
        margin: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .aic-sec3-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .aic-sec3-title {
            font-size: 1.9rem;
        }

        .aic-sec3-card {
            padding: 22px;
        }
    }

    @media (max-width: 480px) {
        .aic-sec3-wrapper {
            padding: 50px 15px;
        }

        .aic-sec3-title {
            font-size: 1.6rem;
        }
    }
</style>

<section class="aic-sec3-wrapper">
    <div class="aic-sec3-container">
        <!-- Section Header -->
        <div class="aic-sec3-heading-wrap" id="aicSec3Header">
            <h2 class="aic-sec3-title">Strategic Career Advantages in Delhi NCR</h2>
            <div class="aic-sec3-title-line"></div>
        </div>

        <!-- Content Grid Cards -->
        <div class="aic-sec3-grid">
            <div class="aic-sec3-card aic-sec3-animate">
                <h3 class="aic-sec3-point-title">Growing Employment Market</h3>
                <p class="aic-sec3-point-desc">Renowned multinational corporations, fintech startups, e-commerce organizations, and IT consulting companies in Delhi, Gurgaon, and Noida are constantly looking for people who are qualified to become AI engineers, data scientists, or ML experts.</p>
            </div>

            <div class="aic-sec3-card aic-sec3-animate">
                <h3 class="aic-sec3-point-title">High Salary Prospects</h3>
                <p class="aic-sec3-point-desc">AI specialists get exceptionally high remuneration due to strong demand and their specific skill set.</p>
            </div>

            <div class="aic-sec3-card aic-sec3-animate">
                <h3 class="aic-sec3-point-title">Intensive Practical Training</h3>
                <p class="aic-sec3-point-desc">Gaining experience through industry-specific case studies and real datasets as opposed to theoretical training only.</p>
            </div>

            <div class="aic-sec3-card aic-sec3-animate">
                <h3 class="aic-sec3-point-title">Networking and Mentorship</h3>
                <p class="aic-sec3-point-desc">Meeting experienced professionals and technical experts working in the industry and connecting with peers from the NCR industry.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Scroll Animation Script for Section 3
    document.addEventListener("DOMContentLoaded", function () {
        const aicSec3Options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const aicSec3Callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aic-sec3-visible');
                }
            });
        };

        const aicSec3Observer = new IntersectionObserver(aicSec3Callback, aicSec3Options);

        const aicSec3Header = document.getElementById('aicSec3Header');
        if (aicSec3Header) {
            aicSec3Observer.observe(aicSec3Header);
        }

        const aicSec3Cards = document.querySelectorAll('.aic-sec3-animate');
        aicSec3Cards.forEach(card => {
            aicSec3Observer.observe(card);
        });
    });
</script>