<style>
/* =========================================================
   GENAI & AGENTIC AI COURSE FAQ
   ISOLATED CSS (Using #kdRcsFaqSection)
========================================================= */

#kdRcsFaqSection,
#kdRcsFaqSection * {
    box-sizing: border-box;
}

#kdRcsFaqSection {
    --kd-rcs-primary: #9333ea;
    --kd-rcs-primary-dark: #7e22ce;
    --kd-rcs-cyan: #20d9ff;
    --kd-rcs-purple: #8957ff;
    --kd-rcs-heading: #18243d;
    --kd-rcs-text: #68758c;
    --kd-rcs-border: rgba(147, 51, 234, 0.12);
    --kd-rcs-white: #ffffff;

    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 58px 20px 62px;
    font-family: Arial, sans-serif;

    background:
        radial-gradient(
            circle at 8% 12%,
            rgba(137, 87, 255, 0.07) 0%,
            transparent 25%
        ),
        radial-gradient(
            circle at 92% 85%,
            rgba(147, 51, 234, 0.07) 0%,
            transparent 27%
        ),
        linear-gradient(
            180deg,
            #faf5ff 0%,
            #ffffff 45%,
            #fbf8ff 100%
        );
}

#kdRcsFaqSection::before {
    content: "";
    position: absolute;
    width: 560px;
    height: 250px;
    top: -185px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 50%;
    background:
        radial-gradient(
            ellipse,
            rgba(147, 51, 234, 0.13) 0%,
            rgba(137, 87, 255, 0.055) 45%,
            transparent 72%
        );
    filter: blur(25px);
    pointer-events: none;
}

#kdRcsFaqSection .kd-rcs-faq-container {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 930px;
    margin: 0 auto;
}

#kdRcsFaqSection .kd-rcs-faq-header {
    max-width: 760px;
    margin: 0 auto 34px;
    text-align: center;
}

#kdRcsFaqSection .kd-rcs-faq-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 8px 15px;
    margin-bottom: 15px;
    border: 1px solid rgba(147, 51, 234, 0.14);
    border-radius: 50px;
    color: var(--kd-rcs-primary);
    background:
        linear-gradient(
            135deg,
            rgba(147, 51, 234, 0.06),
            rgba(137, 87, 255, 0.04)
        );
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.8px;
    text-transform: uppercase;
}

#kdRcsFaqSection .kd-rcs-faq-badge-dot {
    position: relative;
    width: 7px;
    height: 7px;
    flex: 0 0 7px;
    border-radius: 50%;
    background: var(--kd-rcs-primary);
    animation: kdRcsFaqBlink 1.5s ease-in-out infinite;
}

#kdRcsFaqSection .kd-rcs-faq-badge-dot::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: rgba(147, 51, 234, 0.25);
    transform: translate(-50%, -50%);
    animation: kdRcsFaqPulse 1.5s ease-out infinite;
}

@keyframes kdRcsFaqBlink {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.4; transform: scale(0.72); }
}

@keyframes kdRcsFaqPulse {
    0% { width: 7px; height: 7px; opacity: 0.8; }
    70% { width: 22px; height: 22px; opacity: 0; }
    100% { width: 22px; height: 22px; opacity: 0; }
}

#kdRcsFaqSection .kd-rcs-faq-header h2 {
    margin: 0;
    color: var(--kd-rcs-heading);
    font-size: clamp(30px, 3.8vw, 44px);
    line-height: 1.2;
    font-weight: 700;
    letter-spacing: -1.1px;
}

#kdRcsFaqSection .kd-rcs-faq-header h2 span {
    color: var(--kd-rcs-primary);
}

#kdRcsFaqSection .kd-rcs-faq-header p {
    max-width: 690px;
    margin: 15px auto 0;
    color: var(--kd-rcs-text);
    font-size: 13px;
    line-height: 1.8;
    font-weight: 400;
}

#kdRcsFaqSection .kd-rcs-faq-list {
    display: flex;
    flex-direction: column;
    gap: 11px;
}

#kdRcsFaqSection .kd-rcs-faq-item {
    overflow: hidden;
    border: 1px solid var(--kd-rcs-border);
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.92);
    box-shadow: 0 9px 25px rgba(147, 51, 234, 0.04);
    transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-item:hover {
    border-color: rgba(147, 51, 234, 0.22);
    box-shadow: 0 14px 32px rgba(147, 51, 234, 0.07);
    transform: translateY(-1px);
}

#kdRcsFaqSection .kd-rcs-faq-item.active {
    border-color: rgba(147, 51, 234, 0.28);
    box-shadow: 0 17px 38px rgba(147, 51, 234, 0.09);
}

#kdRcsFaqSection .kd-rcs-faq-question {
    width: 100%;
    min-height: 66px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 15px 20px 15px 22px;
    border: 0;
    outline: none;
    background: transparent;
    color: var(--kd-rcs-heading);
    cursor: pointer;
    text-align: left;
    font-family: inherit;
    transition: color 0.3s ease, background 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-question:hover {
    color: var(--kd-rcs-primary);
}

#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-question {
    color: var(--kd-rcs-primary);
    background:
        linear-gradient(
            90deg,
            rgba(147, 51, 234, 0.06),
            rgba(137, 87, 255, 0.025),
            transparent
        );
}

#kdRcsFaqSection .kd-rcs-faq-question-text {
    flex: 1;
    font-size: 14px;
    line-height: 1.5;
    font-weight: 600;
}

#kdRcsFaqSection .kd-rcs-faq-icon {
    position: relative;
    width: 30px;
    height: 30px;
    flex: 0 0 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(147, 51, 234, 0.14);
    border-radius: 50%;
    background: rgba(147, 51, 234, 0.035);
    transition: background 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-icon-horizontal,
#kdRcsFaqSection .kd-rcs-faq-icon-vertical {
    position: absolute;
    width: 11px;
    height: 2px;
    border-radius: 10px;
    background: var(--kd-rcs-primary);
    transition: opacity 0.3s ease, background 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-icon-vertical {
    transform: rotate(90deg);
}

#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon {
    border-color: var(--kd-rcs-primary);
    background:
        linear-gradient(
            135deg,
            var(--kd-rcs-primary),
            var(--kd-rcs-purple)
        );
    transform: rotate(180deg);
}

.ewras {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon-horizontal,
#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon-vertical {
    background: #ffffff;
}

#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon-vertical {
    opacity: 0;
}

#kdRcsFaqSection .kd-rcs-faq-answer {
    display: grid;
    grid-template-rows: 0fr;
    opacity: 0;
    transition: grid-template-rows 0.4s ease, opacity 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-answer-inner {
    min-height: 0;
    overflow: hidden;
}

#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-answer {
    grid-template-rows: 1fr;
    opacity: 1;
}

#kdRcsFaqSection .kd-rcs-faq-answer p {
    margin: 0 22px;
    padding: 14px 0 17px;
    border-top: 1px solid rgba(147, 51, 234, 0.09);
    color: var(--kd-rcs-text);
    font-size: 12px;
    line-height: 1.8;
    font-weight: 400;
}

@media (max-width: 1024px) {
    #kdRcsFaqSection { padding: 52px 24px 55px; }
}

@media (max-width: 767px) {
    #kdRcsFaqSection { padding: 44px 15px 48px; }
    #kdRcsFaqSection .kd-rcs-faq-header { margin-bottom: 27px; }
    #kdRcsFaqSection .kd-rcs-faq-header h2 { font-size: 28px; }
    #kdRcsFaqSection .kd-rcs-faq-header p { font-size: 12px; }
    #kdRcsFaqSection .kd-rcs-faq-question { min-height: 61px; padding: 13px 14px 13px 16px; }
    #kdRcsFaqSection .kd-rcs-faq-question-text { font-size: 12px; }
    #kdRcsFaqSection .kd-rcs-faq-answer p { font-size: 11px; }
}
</style>

<section class="kd-rcs-faq-section" id="kdRcsFaqSection">
    <div class="kd-rcs-faq-container">

        <!-- SECTION HEADER -->
        <div class="kd-rcs-faq-header">
            <div class="kd-rcs-faq-badge">
                <span class="kd-rcs-faq-badge-dot"></span>
                <span>Frequently Asked Questions</span>
            </div>
            <h2>
                Questions About Our 
                <span>GenAI & Agentic AI Course</span>
            </h2>
            <p>
                Find answers to common questions about our Generative AI and Agentic AI program, practical frameworks, multi-agent systems, deployment, and how it accelerates your tech career.
            </p>
        </div>

        <!-- FAQ LIST -->
        <div class="kd-rcs-faq-list">

            <!-- FAQ 1 -->
            <div class="kd-rcs-faq-item">
                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">What is Generative AI and Agentic AI, and why should I learn it?</span>
                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%) rotate(90deg);"></span>
                    </span>
                </button>
                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>Generative AI creates content, while Agentic AI takes autonomous actions, uses tools, and completes multi-step workflows. Learning these skills puts you at the core of modern tech development where open job roles far outnumber qualified candidates.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="kd-rcs-faq-item">
                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">Do I need prior coding experience to join this course?</span>
                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%) rotate(90deg);"></span>
                    </span>
                </button>
                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>The program covers both no-code/low-code automation tools (Zapier, Make, n8n) and advanced Python-based agent frameworks, making it adaptable whether you are starting fresh or expanding your technical expertise.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="kd-rcs-faq-item">
                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">Which frameworks and tools are covered in the curriculum?</span>
                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%) rotate(90deg);"></span>
                    </span>
                </button>
                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>You will work hands-on with leading frameworks like LangChain, LangGraph, CrewAI, and AutoGen, alongside deployment tools such as FastAPI, Streamlit, Gradio, and LangSmith for monitoring.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="kd-rcs-faq-item">
                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">Will I get hands-on practical experience in building AI agents?</span>
                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%) rotate(90deg);"></span>
                    </span>
                </button>
                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>Yes! Every core skill includes working builds—from designing autonomous agents and RAG pipelines with vector databases to deploying production-ready multi-agent workflows.</p>
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="kd-rcs-faq-item">
                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">How does this course prepare me for job interviews and career growth?</span>
                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%) rotate(90deg);"></span>
                    </span>
                </button>
                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>Hiring managers specifically look for engineers who can handle autonomous agents in production, debug failures, and manage token costs. This course trains you directly on those real-world production challenges.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
(function() {
    const faqSection = document.getElementById("kdRcsFaqSection");
    if (!faqSection) return;

    const faqItems = faqSection.querySelectorAll(".kd-rcs-faq-item");

    faqItems.forEach(function(item) {
        const question = item.querySelector(".kd-rcs-faq-question");
        if (!question) return;

        question.addEventListener("click", function() {
            const isCurrentlyOpen = item.classList.contains("active");

            faqItems.forEach(function(faqItem) {
                faqItem.classList.remove("active");
                const faqButton = faqItem.querySelector(".kd-rcs-faq-question");
                if (faqButton) {
                    faqButton.setAttribute("aria-expanded", "false");
                }
            });

            if (!isCurrentlyOpen) {
                item.classList.add("active");
                question.setAttribute("aria-expanded", "true");
            }
        });
    });
})();
</script>