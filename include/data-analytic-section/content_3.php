<!-- Why Choose EagletFly Section Start -->
<div class="ef-why-wrapper">
    <div class="ef-why-container">
        <!-- Section Header -->
        <div class="ef-why-header">
            <span class="ef-why-badge">Excellence in Training</span>
            <h2 class="ef-why-title">Why Choose EagletFly Solutions for Data Analytics?</h2>
            <p class="ef-why-subtitle">It is important to choose the right education platform if one is to transform the theoretical knowledge into practical skills. EagletFly Solutions offers an advanced learning experience that is project-oriented and meets the standards of the corporate world.</p>
            <div class="ef-why-title-underline"></div>
        </div>

        <!-- Features Grid -->
        <div class="ef-why-grid">
            <!-- Card 1 -->
            <div class="ef-why-card ef-why-fade-in">
                <div class="ef-why-icon-box">🎯</div>
                <h4 class="ef-why-card-title">Specific educational program</h4>
                <p class="ef-why-card-text">Learn how the data architecture looks like in practice, starting from raw data extraction and exploration to developing dashboards and presenting data.</p>
            </div>

            <!-- Card 2 -->
            <div class="ef-why-card ef-why-fade-in ef-why-delay-1">
                <div class="ef-why-icon-box">👨‍🏫</div>
                <h4 class="ef-why-card-title">Mentorship by a leading expert</h4>
                <p class="ef-why-card-text">Learn from the professional who has worked in analysis and engineering industries for more than 8 years.</p>
            </div>

            <!-- Card 3 -->
            <div class="ef-why-card ef-why-fade-in ef-why-delay-2">
                <div class="ef-why-icon-box">⏰</div>
                <h4 class="ef-why-card-title">Small batches and flexible studying regime</h4>
                <p class="ef-why-card-text">Study in small groups and get undivided attention. Classes are held during the week, on weekends, and also in a hybrid format.</p>
            </div>

            <!-- Card 4 -->
            <div class="ef-why-card ef-why-fade-in ef-why-delay-3">
                <div class="ef-why-icon-box">💼</div>
                <h4 class="ef-why-card-title">Placement guarantee</h4>
                <p class="ef-why-card-text">Enjoy the services of the company offering help with resumes, GitHub portfolio preparation, practice interviews, and direct employment.</p>
            </div>
        </div>
    </div>
</div>

<!-- Scoped CSS Styles -->
<style>
    .ef-why-wrapper {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
        color: #1e293b;
        padding: 60px 20px;
        box-sizing: border-box;
        width: 100%;
        overflow-x: hidden;
    }

    .ef-why-container {
        max-width: 1200px;
        margin: 0 auto;
        box-sizing: border-box;
    }

    .ef-why-header {
        text-align: center;
        margin-bottom: 50px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .ef-why-badge {
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
        animation: efWhyFadeUp 0.8s ease forwards;
    }

    .ef-why-title {
        font-size: 36px;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 20px 0;
        line-height: 1.3;
        transform: translateY(20px);
        opacity: 0;
        animation: efWhyFadeUp 0.8s ease 0.2s forwards;
    }

    .ef-why-subtitle {
        font-size: 16px;
        line-height: 1.8;
        color: #475569;
        margin-bottom: 25px;
        transform: translateY(20px);
        opacity: 0;
        animation: efWhyFadeUp 0.8s ease 0.3s forwards;
    }

    .ef-why-title-underline {
        width: 80px;
        height: 4px;
        background: #ff6b00;
        margin: 0 auto;
        border-radius: 2px;
        transform: scaleX(0);
        animation: efWhyScaleIn 0.8s ease 0.4s forwards;
    }

    .ef-why-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .ef-why-card {
        background: #ffffff;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border-top: 4px solid #ff6b00;
        box-sizing: border-box;
    }

    .ef-why-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(255, 107, 0, 0.12);
    }

    .ef-why-icon-box {
        font-size: 32px;
        margin-bottom: 20px;
        background: #fffaf0;
        width: 65px;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(255, 107, 0, 0.1);
    }

    .ef-why-card-title {
        font-size: 20px;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 15px 0;
        line-height: 1.4;
    }

    .ef-why-card-text {
        font-size: 15px;
        line-height: 1.7;
        color: #475569;
        margin: 0;
    }

    /* Animation Classes */
    .ef-why-fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .ef-why-delay-1 {
        transition-delay: 0.15s;
    }

    .ef-why-delay-2 {
        transition-delay: 0.3s;
    }

    .ef-why-delay-3 {
        transition-delay: 0.45s;
    }

    .ef-why-fade-in.ef-why-visible {
        opacity: 1;
        transform: translateY(0);
    }

    @keyframes efWhyFadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes efWhyScaleIn {
        to {
            transform: scaleX(1);
        }
    }

    /* Responsive Queries */
    @media (max-width: 900px) {
        .ef-why-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .ef-why-title {
            font-size: 26px;
        }

        .ef-why-wrapper {
            padding: 40px 15px;
        }
    }
</style>

<!-- Scoped JavaScript for Scroll Animations -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const efWhyObserverOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const efWhyObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ef-why-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, efWhyObserverOptions);

        document.querySelectorAll('.ef-why-fade-in').forEach(card => {
            efWhyObserver.observe(card);
        });
    });
</script>
<!-- Why Choose EagletFly Section End -->