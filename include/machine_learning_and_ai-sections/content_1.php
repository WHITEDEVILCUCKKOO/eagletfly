<!-- AI Course Unique Section -->
<style>
    /* Unique scoped styling for AI Course Section */
    .aic-section-wrapper {
        background-color: #0b0f19;
        color: #ffffff;
        line-height: 1.6;
        padding: 40px 20px 140px;
        font-family: inherit;
        overflow: hidden;
    }

    .aic-main-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .aic-heading-wrap {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .aic-heading-wrap.aic-is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-main-title {
        font-size: 2.8rem;
        font-weight: 700;
        background: linear-gradient(90deg, #38bdf8 0%, #818cf8 50%, #c084fc 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 15px;
    }

    .aic-title-glow {
        width: 90px;
        height: 4px;
        background: linear-gradient(90deg, #6366f1, #a855f7);
        margin: 0 auto;
        border-radius: 2px;
        box-shadow: 0 0 15px rgba(168, 85, 247, 0.6);
    }

    .aic-grid-layout {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: stretch;
    }

    .aic-content-card {
        background: rgba(17, 24, 39, 0.75);
        border: 1px solid rgba(99, 102, 241, 0.25);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(12px);
        opacity: 0;
        transform: translateY(40px);
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), 
                    opacity 0.6s cubic-bezier(0.16, 1, 0.3, 1), 
                    border-color 0.3s ease, 
                    box-shadow 0.3s ease;
    }

    .aic-content-card.aic-is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-content-card:nth-child(1) {
        transition-delay: 0.2s;
    }

    .aic-content-card:nth-child(2) {
        transition-delay: 0.4s;
    }

    .aic-content-card:hover {
        transform: translateY(-8px) scale(1.01);
        border-color: rgba(168, 85, 247, 0.6);
        box-shadow: 0 20px 40px rgba(99, 102, 241, 0.2);
    }

    .aic-text-item {
        color: #9ca3af;
        font-size: 1.1rem;
        margin-bottom: 24px;
    }

    .aic-text-item:last-child {
        margin-bottom: 0;
    }

    .aic-text-highlight {
        color: #38bdf8;
        font-weight: 600;
        text-shadow: 0 0 10px rgba(56, 189, 248, 0.3);
    }

    /* Responsive Queries */
    @media (max-width: 968px) {
        .aic-grid-layout {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .aic-main-title {
            font-size: 2.2rem;
        }
    }

    @media (max-width: 480px) {
        .aic-section-wrapper {
            padding: 50px 15px;
        }

        .aic-main-title {
            font-size: 1.7rem;
        }

        .aic-content-card {
            padding: 25px;
        }

        .aic-text-item {
            font-size: 1rem;
        }
    }
</style>

<section class="aic-section-wrapper">
    <div class="aic-main-container">
        <!-- Section Header -->
        <div class="aic-heading-wrap" id="aicScrollHeader">
            <h2 class="aic-main-title">Artificial Intelligence Course in Delhi</h2>
            <div class="aic-title-glow"></div>
        </div>

        <!-- Content Cards Grid -->
        <div class="aic-grid-layout">
            <div class="aic-content-card aic-scroll-animate">
                <p class="aic-text-item">Artificial intelligence is no longer a concept of the future as it is the decisive force of modern technology, making decisions in the corporate world and managing business processes dynamically.</p>
                <p class="aic-text-item">From generative language models and computer vision to predictive analytics and autonomous systems, AI is transforming industries worldwide. To stand out in the tech ecosystem of today one needs to possess particular skills, practical experience, and professional mentorship.</p>
            </div>

            <div class="aic-content-card aic-scroll-animate">
                <p class="aic-text-item">Designed to connect theoretical knowledge with practical skills in the industry, our <span class="aic-text-highlight">Artificial Intelligence Course in Delhi</span> offers the training you need.</p>
                <p class="aic-text-item">Whether you have just graduated and wish to embark on a promising career or are an IT specialist wishing to improve your knowledge or are transitioning into machine learning, our course provides practical experience with Python programming and deep learning techniques, NLP, neural networks, and generative AI.</p>
            </div>
        </div>
    </div>
</section>

<script>
    // Scroll Animation Script using Intersection Observer
    document.addEventListener("DOMContentLoaded", function () {
        const aicObserverOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.15
        };

        const aicScrollCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aic-is-visible');
                }
            });
        };

        const aicObserver = new IntersectionObserver(aicScrollCallback, aicObserverOptions);

        const aicHeaderElement = document.getElementById('aicScrollHeader');
        if (aicHeaderElement) {
            aicObserver.observe(aicHeaderElement);
        }

        const aicCardElements = document.querySelectorAll('.aic-scroll-animate');
        aicCardElements.forEach(card => {
            aicObserver.observe(card);
        });
    });
</script>