<!-- Key Best Practices Section Start -->
<div class="ef-bp-wrapper">
    <div class="ef-bp-container">
        <!-- Section Header -->
        <div class="ef-bp-header">
            <span class="ef-bp-badge">Industry Standards</span>
            <h2 class="ef-bp-title">Key Best Practices for Data Analysts</h2>
            <div class="ef-bp-title-underline"></div>
            <p class="ef-bp-subtitle">
                Writing accurate queries, keeping reproducible workflows, as well as preparing simple sketches are the required standards for today’s analytical specialists.
            </p>
        </div>

        <!-- Best Practices Grid -->
        <div class="ef-bp-grid">
            <!-- Practice 1 -->
            <div class="ef-bp-card ef-bp-fade-in">
                <div class="ef-bp-card-top">
                    <span class="ef-bp-num">01</span>
                    <div class="ef-bp-icon-box">🛡️</div>
                </div>
                <h3 class="ef-bp-card-title">Maintain Data Quality</h3>
                <p class="ef-bp-card-desc">
                    First and foremost, perform thorough data profiling before visualizing or modeling. Garbage in means garbage out.
                </p>
                <div class="ef-bp-tag-container">
                    <span class="ef-bp-tag">DATA PROFILING & QUALITY</span>
                </div>
            </div>

            <!-- Practice 2 -->
            <div class="ef-bp-card ef-bp-fade-in ef-bp-delay-1">
                <div class="ef-bp-card-top">
                    <span class="ef-bp-num">02</span>
                    <div class="ef-bp-icon-box">📝</div>
                </div>
                <h3 class="ef-bp-card-title">Document SQL and Code</h3>
                <p class="ef-bp-card-desc">
                    Be sure you use easy table naming, standard indentation, clear variable names and comments in every SQL query and Python code.
                </p>
                <div class="ef-bp-tag-container">
                    <span class="ef-bp-tag">CLEAN CODE & COMMENTS</span>
                </div>
            </div>

            <!-- Practice 3 -->
            <div class="ef-bp-card ef-bp-fade-in ef-bp-delay-2">
                <div class="ef-bp-card-top">
                    <span class="ef-bp-num">03</span>
                    <div class="ef-bp-icon-box">🎯</div>
                </div>
                <h3 class="ef-bp-card-title">Focus on Business Metrics instead of Fancy Graphics</h3>
                <p class="ef-bp-card-desc">
                    The main goal of designing dashboards should be KPI metrics, actionable insights and user understanding instead of overloaded pictures.
                </p>
                <div class="ef-bp-tag-container">
                    <span class="ef-bp-tag">KPI & ACTIONABLE INSIGHTS</span>
                </div>
            </div>

            <!-- Practice 4 -->
            <div class="ef-bp-card ef-bp-fade-in ef-bp-delay-3">
                <div class="ef-bp-card-top">
                    <span class="ef-bp-num">04</span>
                    <div class="ef-bp-icon-box">🐙</div>
                </div>
                <h3 class="ef-bp-card-title">Maintain Version Control</h3>
                <p class="ef-bp-card-desc">
                    Keep clean data sets, queries and code in the version control repositories like GitHub to showcase your portfolio easily.
                </p>
                <div class="ef-bp-tag-container">
                    <span class="ef-bp-tag">GITHUB & VERSION CONTROL</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scoped CSS Styles -->
<style>
    .ef-bp-wrapper {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #0b0f19;
        color: #f8fafc;
        padding: 80px 20px;
        box-sizing: border-box;
        width: 100%;
        overflow-x: hidden;
    }

    .ef-bp-container {
        max-width: 1200px;
        margin: 0 auto;
        box-sizing: border-box;
    }

    .ef-bp-header {
        text-align: center;
        margin-bottom: 50px;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .ef-bp-badge {
        display: inline-block;
        background: rgba(255, 107, 0, 0.15);
        color: #ff6b00;
        font-size: 13px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
        border: 1px solid rgba(255, 107, 0, 0.3);
    }

    .ef-bp-title {
        font-size: 38px;
        font-weight: 800;
        color: #ffffff;
        margin: 0 0 15px 0;
        line-height: 1.3;
    }

    .ef-bp-title-underline {
        width: 80px;
        height: 4px;
        background: #ff6b00;
        margin: 0 auto 20px auto;
        border-radius: 2px;
    }

    .ef-bp-subtitle {
        font-size: 16px;
        line-height: 1.8;
        color: #94a3b8;
        margin: 0;
    }

    .ef-bp-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    .ef-bp-card {
        background: #111827;
        border: 1px solid #1f2937;
        padding: 35px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), border-color 0.4s ease, box-shadow 0.4s ease;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    .ef-bp-card:hover {
        transform: translateY(-8px);
        border-color: rgba(255, 107, 0, 0.5);
        box-shadow: 0 20px 40px rgba(255, 107, 0, 0.15);
    }

    .ef-bp-card-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .ef-bp-num {
        font-size: 15px;
        font-weight: 700;
        color: #60a5fa;
    }

    .ef-bp-icon-box {
        font-size: 20px;
        background: #1f2937;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        border: 1px solid #374151;
        color: #60a5fa;
    }

    .ef-bp-card-title {
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
        margin: 0 0 15px 0;
        line-height: 1.4;
    }

    .ef-bp-card-desc {
        font-size: 15px;
        line-height: 1.8;
        color: #94a3b8;
        margin: 0 0 25px 0;
        flex-grow: 1;
    }

    .ef-bp-tag-container {
        margin-top: auto;
    }

    .ef-bp-tag {
        font-size: 11px;
        font-weight: 700;
        background: rgba(37, 99, 235, 0.15);
        color: #60a5fa;
        padding: 6px 12px;
        border-radius: 20px;
        border: 1px solid rgba(37, 99, 235, 0.3);
        letter-spacing: 0.5px;
        display: inline-block;
    }

    /* Animation Classes */
    .ef-bp-fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .ef-bp-delay-1 {
        transition-delay: 0.15s;
    }

    .ef-bp-delay-2 {
        transition-delay: 0.3s;
    }

    .ef-bp-delay-3 {
        transition-delay: 0.45s;
    }

    .ef-bp-fade-in.ef-bp-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive Queries */
    @media (max-width: 1024px) {
        .ef-bp-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .ef-bp-grid {
            grid-template-columns: 1fr;
        }

        .ef-bp-title {
            font-size: 28px;
        }

        .ef-bp-wrapper {
            padding: 50px 15px;
        }
    }
</style>

<!-- Scoped JavaScript for Scroll Animations -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const efBpObserverOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const efBpObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('ef-bp-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, efBpObserverOptions);

        document.querySelectorAll('.ef-bp-fade-in').forEach(card => {
            efBpObserver.observe(card);
        });
    });
</script>
<!-- Key Best Practices Section End -->