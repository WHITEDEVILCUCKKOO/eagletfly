<!-- EagletFly Data Analytics Section Start -->
<div class="ef-da-wrapper">
    <div class="ef-da-container">
        <!-- Section Header -->
        <div class="ef-da-header">
            <span class="ef-da-badge">Professional Training Program</span>
            <h2 class="ef-da-title">Data Analytics Training Program in Delhi</h2>
            <div class="ef-da-title-underline"></div>
        </div>

        <!-- Content Grid -->
        <div class="ef-da-content-grid">
            <div class="ef-da-text-card ef-da-fade-in">
                <p class="ef-da-paragraph">
                    In the modern economy that relies heavily on data, organizations all over the world require actionable insights in order to grow, optimize operations, and stay ahead of competition. The role of data analytics has changed dramatically as it evolved from a niche function to playing a vital role in decision-making in modern companies.
                </p>
                <p class="ef-da-paragraph">
                    Data analytics encompasses many areas, such as consumer behavior analysis, financial risk assessment, supply chain logistics, and business intelligence, and the skill of analyzing and visualizing data is among the most sought-after skills by companies today.
                </p>
            </div>

            <div class="ef-da-text-card ef-da-fade-in ef-da-delay-1">
                <p class="ef-da-paragraph">
                    The industry-driven <strong>Data Analytics Course in Delhi</strong> launched by EagletFly Solutions is designed to connect the fundamentals of basic spreadsheet usage to enterprise-level data intelligence.
                </p>
                <p class="ef-da-paragraph">
                    The program draws its structure and a demanding practical framework from world-renowned training programs, and it gives graduates, IT specialists, and those who want to switch careers the opportunity to receive practical skills, professional certifications, and support in finding a job.
                </p>
                <div class="ef-da-highlight-box">
                    <span>🚀 Bridge the gap between raw data and career growth with hands-on live projects.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scoped CSS Styles -->
<style>
    .ef-da-wrapper {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
        color: #1e293b;
        padding: 60px 20px;
        box-sizing: border-box;
        width: 100%;
        overflow-x: hidden;
    }

    .ef-da-container {
        max-width: 1200px;
        margin: 0 auto;
        box-sizing: border-box;
    }

    .ef-da-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .ef-da-badge {
        display: inline-block;
        background-color: #ff6b00;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        padding: 6px 16px;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        box-shadow: 0 4px 15px rgba(255, 107, 0, 0.3);
        transform: translateY(20px);
        opacity: 0;
        animation: efDaFadeUp 0.8s ease forwards;
    }

    .ef-da-title {
        font-size: 38px;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 15px 0;
        line-height: 1.3;
        transform: translateY(20px);
        opacity: 0;
        animation: efDaFadeUp 0.8s ease 0.2s forwards;
    }

    .ef-da-title-underline {
        width: 80px;
        height: 4px;
        background: #ff6b00;
        margin: 0 auto;
        border-radius: 2px;
        transform: scaleX(0);
        animation: efDaScaleIn 0.8s ease 0.4s forwards;
    }

    .ef-da-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .ef-da-text-card {
        background: #ffffff;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border-top: 4px solid #ff6b00;
    }

    .ef-da-text-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(255, 107, 0, 0.12);
    }

    .ef-da-paragraph {
        font-size: 16px;
        line-height: 1.8;
        color: #475569;
        margin-bottom: 20px;
    }

    .ef-da-paragraph:last-child {
        margin-bottom: 0;
    }

    .ef-da-highlight-box {
        margin-top: 25px;
        padding: 15px 20px;
        background-color: #fffaf0;
        border-left: 4px solid #ff6b00;
        border-radius: 0 8px 8px 0;
        font-size: 15px;
        color: #c05621;
        font-weight: 500;
    }

    /* Animation Classes */
    .ef-da-fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .ef-da-delay-1 {
        transition-delay: 0.2s;
    }

    .ef-da-fade-in.ef-da-visible {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes efDaFadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes efDaScaleIn {
        to {
            transform: scaleX(1);
        }
    }

    /* Responsive Queries */
    @media (max-width: 900px) {
        .ef-da-content-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .ef-da-title {
            font-size: 28px;
        }

        .ef-da-wrapper {
            padding: 40px 15px;
        }
    }
</style>

<!-- Scoped JavaScript for Scroll Animations -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const efDaObserverOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const efDaObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ef-da-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, efDaObserverOptions);

        document.querySelectorAll('.ef-da-fade-in').forEach(card => {
            efDaObserver.observe(card);
        });
    });
</script>
<!-- EagletFly Data Analytics Section End -->