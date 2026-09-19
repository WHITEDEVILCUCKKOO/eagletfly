<style>

/* =========================================================
   JAVA COURSE FAQ
   COMPLETE ISOLATED CSS
========================================================= */

#kdRcsFaqSection,
#kdRcsFaqSection * {
    box-sizing: border-box;
}

#kdRcsFaqSection {
    --kd-rcs-primary: #3478ff;
    --kd-rcs-primary-dark: #2366ed;
    --kd-rcs-cyan: #20d9ff;
    --kd-rcs-purple: #8957ff;
    --kd-rcs-heading: #18243d;
    --kd-rcs-text: #68758c;
    --kd-rcs-border: rgba(52, 120, 255, 0.12);
    --kd-rcs-white: #ffffff;

    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 58px 20px 62px;
    font-family: "Poppins", sans-serif;

    background:
        radial-gradient(
            circle at 8% 12%,
            rgba(137, 87, 255, 0.07) 0%,
            transparent 25%
        ),
        radial-gradient(
            circle at 92% 85%,
            rgba(32, 217, 255, 0.07) 0%,
            transparent 27%
        ),
        linear-gradient(
            180deg,
            #f5f8ff 0%,
            #ffffff 45%,
            #f8faff 100%
        );
}


/* TOP SOFT GLOW */

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
            rgba(52, 120, 255, 0.13) 0%,
            rgba(137, 87, 255, 0.055) 45%,
            transparent 72%
        );

    filter: blur(25px);
    pointer-events: none;
}


/* =========================================================
   CONTAINER
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-container {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 930px;
    margin: 0 auto;
}


/* =========================================================
   HEADER
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-header {
    max-width: 760px;
    margin: 0 auto 34px;
    text-align: center;
}


/* =========================================================
   BADGE
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 8px 15px;
    margin-bottom: 15px;

    border: 1px solid rgba(52, 120, 255, 0.14);
    border-radius: 50px;

    color: var(--kd-rcs-primary);

    background:
        linear-gradient(
            135deg,
            rgba(32, 217, 255, 0.06),
            rgba(52, 120, 255, 0.055),
            rgba(137, 87, 255, 0.04)
        );

    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.8px;
    text-transform: uppercase;
}


/* =========================================================
   BLINKING DOT
========================================================= */

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
    background: rgba(52, 120, 255, 0.25);
    transform: translate(-50%, -50%);
    animation: kdRcsFaqPulse 1.5s ease-out infinite;
}

@keyframes kdRcsFaqBlink {
    0%,
    100% {
        opacity: 1;
        transform: scale(1);
    }

    50% {
        opacity: 0.4;
        transform: scale(0.72);
    }
}

@keyframes kdRcsFaqPulse {
    0% {
        width: 7px;
        height: 7px;
        opacity: 0.8;
    }

    70% {
        width: 22px;
        height: 22px;
        opacity: 0;
    }

    100% {
        width: 22px;
        height: 22px;
        opacity: 0;
    }
}


/* =========================================================
   HEADING
========================================================= */

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


/* =========================================================
   DESCRIPTION
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-header p {
    max-width: 690px;
    margin: 15px auto 0;
    color: var(--kd-rcs-text);
    font-size: 13px;
    line-height: 1.8;
    font-weight: 400;
}


/* =========================================================
   FAQ LIST
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-list {
    display: flex;
    flex-direction: column;
    gap: 11px;
}


/* =========================================================
   FAQ ITEM
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-item {
    overflow: hidden;
    border: 1px solid var(--kd-rcs-border);
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.92);

    box-shadow:
        0 9px 25px rgba(35, 65, 120, 0.045);

    transition:
        border-color 0.3s ease,
        box-shadow 0.3s ease,
        transform 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-item:hover {
    border-color: rgba(52, 120, 255, 0.22);

    box-shadow:
        0 14px 32px rgba(35, 65, 120, 0.07);

    transform: translateY(-1px);
}

#kdRcsFaqSection .kd-rcs-faq-item.active {
    border-color: rgba(52, 120, 255, 0.28);

    box-shadow:
        0 17px 38px rgba(35, 65, 120, 0.09);
}


/* =========================================================
   QUESTION
========================================================= */

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

    transition:
        color 0.3s ease,
        background 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-question:hover {
    color: var(--kd-rcs-primary);
}

#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-question {
    color: var(--kd-rcs-primary);

    background:
        linear-gradient(
            90deg,
            rgba(52, 120, 255, 0.06),
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


/* =========================================================
   PLUS / MINUS ICON
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-icon {
    position: relative;
    width: 30px;
    height: 30px;
    flex: 0 0 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid rgba(52, 120, 255, 0.14);
    border-radius: 50%;
    background: rgba(52, 120, 255, 0.035);

    transition:
        background 0.3s ease,
        border-color 0.3s ease,
        transform 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-icon-horizontal,
#kdRcsFaqSection .kd-rcs-faq-icon-vertical {
    position: absolute;
    width: 11px;
    height: 2px;
    border-radius: 10px;
    background: var(--kd-rcs-primary);

    transition:
        opacity 0.3s ease,
        background 0.3s ease;
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


/* =========================================================
   ANSWER ANIMATION
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-answer {
    display: grid;
    grid-template-rows: 0fr;
    opacity: 0;

    transition:
        grid-template-rows 0.4s ease,
        opacity 0.3s ease;
}

#kdRcsFaqSection .kd-rcs-faq-answer-inner {
    min-height: 0;
    overflow: hidden;
}

#kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-answer {
    grid-template-rows: 1fr;
    opacity: 1;
}


/* =========================================================
   ANSWER TEXT
========================================================= */

#kdRcsFaqSection .kd-rcs-faq-answer p {
    margin: 0 22px;
    padding: 14px 0 17px;

    border-top: 1px solid rgba(52, 120, 255, 0.09);

    color: var(--kd-rcs-text);
    font-size: 12px;
    line-height: 1.8;
    font-weight: 400;
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1024px) {

    #kdRcsFaqSection {
        padding: 52px 24px 55px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    #kdRcsFaqSection {
        padding: 44px 15px 48px;
    }

    #kdRcsFaqSection .kd-rcs-faq-header {
        margin-bottom: 27px;
    }

    #kdRcsFaqSection .kd-rcs-faq-badge {
        font-size: 9px;
    }

    #kdRcsFaqSection .kd-rcs-faq-header h2 {
        font-size: 28px;
        letter-spacing: -0.8px;
    }

    #kdRcsFaqSection .kd-rcs-faq-header p {
        margin-top: 13px;
        font-size: 12px;
        line-height: 1.75;
    }

    #kdRcsFaqSection .kd-rcs-faq-list {
        gap: 9px;
    }

    #kdRcsFaqSection .kd-rcs-faq-item {
        border-radius: 12px;
    }

    #kdRcsFaqSection .kd-rcs-faq-question {
        min-height: 61px;
        gap: 13px;
        padding: 13px 14px 13px 16px;
    }

    #kdRcsFaqSection .kd-rcs-faq-question-text {
        font-size: 12px;
        line-height: 1.5;
    }

    #kdRcsFaqSection .kd-rcs-faq-icon {
        width: 27px;
        height: 27px;
        flex-basis: 27px;
    }

    #kdRcsFaqSection .kd-rcs-faq-answer p {
        margin: 0 16px;
        padding: 13px 0 15px;
        font-size: 11px;
        line-height: 1.75;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    #kdRcsFaqSection {
        padding: 40px 12px 44px;
    }

    #kdRcsFaqSection .kd-rcs-faq-header h2 {
        font-size: 26px;
    }

    #kdRcsFaqSection .kd-rcs-faq-badge {
        padding: 7px 11px;
    }

    #kdRcsFaqSection .kd-rcs-faq-question {
        padding-left: 13px;
    }

    #kdRcsFaqSection .kd-rcs-faq-question-text {
        font-size: 11.5px;
    }

}

</style>


<section class="kd-rcs-faq-section" id="kdRcsFaqSection">

    <div class="kd-rcs-faq-container">

        <!-- =====================================================
        SECTION HEADER
        ====================================================== -->

        <div class="kd-rcs-faq-header">

            <div class="kd-rcs-faq-badge">
                <span class="kd-rcs-faq-badge-dot"></span>
                <span>Frequently Asked Questions</span>
            </div>

            <h2>
                Questions About Our
                <span>Java Course</span>
            </h2>

            <p>
                Find answers to common questions about our Java course,
                training programs, practical learning and how
                Eagletfly Solutions can help you build your Java skills
                and prepare for your career.
            </p>

        </div>


        <!-- =====================================================
        FAQ LIST
        ====================================================== -->

        <div class="kd-rcs-faq-list">


            <!-- FAQ 1 -->

            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question"
                        type="button"
                        aria-expanded="false">

                    <span class="kd-rcs-faq-question-text">
                        What is Java and why should I learn it?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">

                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>

                        <span class="kd-rcs-faq-icon-vertical ewras"
                              style="transform: translate(-50%, -50%) rotate(90deg);">
                        </span>

                    </span>

                </button>


                <div class="kd-rcs-faq-answer">

                    <div class="kd-rcs-faq-answer-inner">

                        <p>
                            Java is a widely used programming language known for its
                            object-oriented approach, reliability and versatility.
                            Learning Java can help you understand core programming
                            concepts and build applications for different platforms
                            and software environments.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 2 -->

            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question"
                        type="button"
                        aria-expanded="false">

                    <span class="kd-rcs-faq-question-text">
                        Is Java suitable for beginners?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">

                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>

                        <span class="kd-rcs-faq-icon-vertical ewras"
                              style="transform: translate(-50%, -50%) rotate(90deg);">
                        </span>

                    </span>

                </button>


                <div class="kd-rcs-faq-answer">

                    <div class="kd-rcs-faq-answer-inner">

                        <p>
                            Yes. Java can be learned by beginners with proper guidance.
                            The course starts with programming fundamentals and gradually
                            covers Java concepts, object-oriented programming, coding
                            practices and practical development.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 3 -->

            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question"
                        type="button"
                        aria-expanded="false">

                    <span class="kd-rcs-faq-question-text">
                        What topics are covered in the Java course?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">

                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>

                        <span class="kd-rcs-faq-icon-vertical ewras"
                              style="transform: translate(-50%, -50%) rotate(90deg);">
                        </span>

                    </span>

                </button>


                <div class="kd-rcs-faq-answer">

                    <div class="kd-rcs-faq-answer-inner">

                        <p>
                            The Java course covers important programming concepts such as
                            Java fundamentals, variables, data types, operators, control
                            statements, methods, classes, objects, inheritance, polymorphism,
                            exception handling and other core Java concepts.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 4 -->

            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question"
                        type="button"
                        aria-expanded="false">

                    <span class="kd-rcs-faq-question-text">
                        Will I get practical Java programming experience?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">

                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>

                        <span class="kd-rcs-faq-icon-vertical ewras"
                              style="transform: translate(-50%, -50%) rotate(90deg);">
                        </span>

                    </span>

                </button>


                <div class="kd-rcs-faq-answer">

                    <div class="kd-rcs-faq-answer-inner">

                        <p>
                            The training focuses on practical learning along with
                            theoretical concepts. Students can practice Java programming,
                            work on coding exercises and understand how Java concepts
                            are applied while developing software applications.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 5 -->

            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question"
                        type="button"
                        aria-expanded="false">

                    <span class="kd-rcs-faq-question-text">
                        Can I learn Java without prior programming experience?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">

                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>

                        <span class="kd-rcs-faq-icon-vertical ewras"
                              style="transform: translate(-50%, -50%) rotate(90deg);">
                        </span>

                    </span>

                </button>


                <div class="kd-rcs-faq-answer">

                    <div class="kd-rcs-faq-answer-inner">

                        <p>
                            Yes. Beginners can start the Java course without previous
                            programming experience. The learning process begins with
                            basic programming concepts and gradually moves toward
                            object-oriented programming and Java development.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 6 -->

            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question"
                        type="button"
                        aria-expanded="false">

                    <span class="kd-rcs-faq-question-text">
                        What career opportunities can Java skills provide?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">

                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>

                        <span class="kd-rcs-faq-icon-vertical ewras"
                              style="transform: translate(-50%, -50%) rotate(90deg);">
                        </span>

                    </span>

                </button>


                <div class="kd-rcs-faq-answer">

                    <div class="kd-rcs-faq-answer-inner">

                        <p>
                            Java skills can be useful for roles involving software
                            development, application development, backend programming
                            and other areas where Java-based technologies are used.
                            The actual opportunities depend on your skills, experience
                            and job requirements.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FAQ 7 -->

            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question"
                        type="button"
                        aria-expanded="false">

                    <span class="kd-rcs-faq-question-text">
                        How can I get started with the Java course at Eagletfly Solutions?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">

                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>

                        <span class="kd-rcs-faq-icon-vertical ewras"
                              style="transform: translate(-50%, -50%) rotate(90deg);">
                        </span>

                    </span>

                </button>


                <div class="kd-rcs-faq-answer">

                    <div class="kd-rcs-faq-answer-inner">

                        <p>
                            You can contact the Eagletfly Solutions team to learn more
                            about the Java course, training options, course structure
                            and enrollment process. The team can guide you through the
                            available learning options based on your requirements.
                        </p>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>


<script>

/* =========================================================
   JAVA COURSE FAQ ACCORDION
   ONE QUESTION OPEN AT A TIME
========================================================= */

(function() {

    const faqSection = document.getElementById("kdRcsFaqSection");

    if (!faqSection) return;

    const faqItems = faqSection.querySelectorAll(
        ".kd-rcs-faq-item"
    );

    faqItems.forEach(function(item) {

        const question = item.querySelector(
            ".kd-rcs-faq-question"
        );

        if (!question) return;

        question.addEventListener("click", function() {

            const isCurrentlyOpen =
                item.classList.contains("active");


            /* CLOSE ALL FAQ ITEMS */

            faqItems.forEach(function(faqItem) {

                faqItem.classList.remove("active");

                const faqButton = faqItem.querySelector(
                    ".kd-rcs-faq-question"
                );

                if (faqButton) {

                    faqButton.setAttribute(
                        "aria-expanded",
                        "false"
                    );

                }

            });


            /* OPEN CLICKED FAQ */

            if (!isCurrentlyOpen) {

                item.classList.add("active");

                question.setAttribute(
                    "aria-expanded",
                    "true"
                );

            }

        });

    });

})();

</script>