<!-- FAQs Section Start -->
<div class="ef-faq-wrapper">
    <div class="ef-faq-container">
        <!-- Section Header -->
        <div class="ef-faq-header-area">
            <span class="ef-faq-badge">GOT QUESTIONS?</span>
            <h2 class="ef-faq-main-title">Frequently Asked Questions</h2>
            <div class="ef-faq-title-underline"></div>
            <p class="ef-faq-intro-text">
                Find answers to common queries regarding our Data Analytics Course in Delhi, eligibility, tools covered, flexible timings, and placement support.
            </p>
        </div>

        <!-- FAQ Accordion List -->
        <div class="ef-faq-list">
            <!-- FAQ 1 -->
            <div class="ef-faq-item ef-faq-active">
                <div class="ef-faq-question">
                    <span class="ef-faq-name">What are the eligibility requirements for enrolling in the Data Analytics Course in Delhi?</span>
                    <span class="ef-faq-icon">×</span>
                </div>
                <div class="ef-faq-answer" style="max-height: 500px;">
                    <p class="ef-faq-desc">
                        There are no strict technical prerequisites. Fresh graduates, non-IT background professionals, commerce/management students, and experienced working professionals can enroll. A basic understanding of high-school mathematics and logical reasoning is all you need to get started.
                    </p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="ef-faq-item">
                <div class="ef-faq-question">
                    <span class="ef-faq-name">Does EagletFly Solutions offer placement assistance upon course completion?</span>
                    <span class="ef-faq-icon">+</span>
                </div>
                <div class="ef-faq-answer">
                    <p class="ef-faq-desc">
                        Yes. We provide complete placement support, including 1-on-1 resume optimization, LinkedIn profile branding, GitHub and Power BI portfolio building, technical mock interviews, and direct referral drives with hiring partners across Delhi NCR.
                    </p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="ef-faq-item">
                <div class="ef-faq-question">
                    <span class="ef-faq-name">Which tools are most important for landing a Data Analyst job?</span>
                    <span class="ef-faq-icon">+</span>
                </div>
                <div class="ef-faq-answer">
                    <p class="ef-faq-desc">
                        Industry standards require proficiency across four core pillars: Advanced Excel, SQL for database extraction, a major BI tool (Power BI or Tableau), and Python for automated data analysis.
                    </p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="ef-faq-item">
                <div class="ef-faq-question">
                    <span class="ef-faq-name">Are flexible learning options available for working professionals?</span>
                    <span class="ef-faq-icon">+</span>
                </div>
                <div class="ef-faq-answer">
                    <p class="ef-faq-desc">
                        Yes. EagletFly Solutions offers flexible learning formats, including weekend-only classroom batches, weekday evening batches, and live interactive online/hybrid classes featuring recorded sessions and mentor support.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scoped CSS Styles -->
<style>
    .ef-faq-wrapper {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #ffffff;
        color: #1e293b;
        padding: 80px 20px;
        box-sizing: border-box;
        width: 100%;
        overflow-x: hidden;
    }

    .ef-faq-container {
        max-width: 1000px;
        margin: 0 auto;
        box-sizing: border-box;
    }

    .ef-faq-header-area {
        text-align: center;
        margin-bottom: 50px;
    }

    .ef-faq-badge {
        display: inline-block;
        background: rgba(255, 107, 0, 0.1);
        color: #ff6b00;
        font-size: 13px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 50px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
        border: 1px solid rgba(255, 107, 0, 0.2);
    }

    .ef-faq-main-title {
        font-size: 38px;
        font-weight: 800;
        color: #0f172a;
        margin: 0 0 15px 0;
        line-height: 1.3;
    }

    .ef-faq-title-underline {
        width: 80px;
        height: 4px;
        background: #ff6b00;
        margin: 0 auto 20px auto;
        border-radius: 2px;
    }

    .ef-faq-intro-text {
        font-size: 16px;
        line-height: 1.8;
        color: #475569;
        margin: 0 auto;
        max-width: 800px;
    }

    .ef-faq-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .ef-faq-item {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .ef-faq-item:hover {
        border-color: #cbd5e1;
    }

    .ef-faq-active {
        border-color: #ff6b00;
        box-shadow: 0 10px 30px rgba(255, 107, 0, 0.08);
    }

    .ef-faq-question {
        padding: 22px 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        background-color: #ffffff;
        user-select: none;
        gap: 20px;
    }

    .ef-faq-name {
        font-size: 18px;
        font-weight: 700;
        color: #0f172a;
        line-height: 1.4;
    }

    .ef-faq-icon {
        font-size: 22px;
        font-weight: 600;
        color: #ff6b00;
        min-width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #fffaf0;
        border: 1px solid rgba(255, 107, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .ef-faq-answer {
        padding: 0 24px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), padding 0.3s ease;
        background-color: #fafafa;
    }

    .ef-faq-active .ef-faq-answer {
        padding: 20px 24px 24px 24px;
        border-top: 1px solid #e2e8f0;
    }

    .ef-faq-desc {
        font-size: 15px;
        line-height: 1.8;
        color: #475569;
        margin: 0;
    }

    /* Responsive Queries */
    @media (max-width: 768px) {
        .ef-faq-main-title {
            font-size: 28px;
        }

        .ef-faq-name {
            font-size: 16px;
        }

        .ef-faq-question {
            padding: 16px 18px;
        }

        .ef-faq-wrapper {
            padding: 50px 15px;
        }
    }
</style>

<!-- Scoped JavaScript for FAQ Accordion Toggle Functionality -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const faqItems = document.querySelectorAll('.ef-faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.ef-faq-question');
            const answer = item.querySelector('.ef-faq-answer');
            const icon = item.querySelector('.ef-faq-icon');

            question.addEventListener('click', () => {
                const isActive = item.classList.contains('ef-faq-active');

                // Optional: To close other items when one is opened, uncomment below loop:
                // faqItems.forEach(otherItem => {
                //     otherItem.classList.remove('ef-faq-active');
                //     otherItem.querySelector('.ef-faq-answer').style.maxHeight = null;
                //     otherItem.querySelector('.ef-faq-icon').textContent = '+';
                // });

                if (isActive) {
                    item.classList.remove('ef-faq-active');
                    answer.style.maxHeight = null;
                    icon.textContent = '+';
                } else {
                    item.classList.add('ef-faq-active');
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    icon.textContent = '×';
                }
            });
        });
    });
</script>
<!-- FAQs Section End -->