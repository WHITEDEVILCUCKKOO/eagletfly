<style>
    /* =========================================================
KING DIGITAL RCS FAQ
COMPLETE ISOLATED CSS
========================================================= */

    #kdRcsFaqSection,
    #kdRcsFaqSection * {
        box-sizing: border-box;
    }


    #kdRcsFaqSection {
        --kd-rcs-primary: #e2ad3b;
        --kd-rcs-primary-dark: #e2ad3b
        --kd-rcs-cyan: #20d9ff;
        --kd-rcs-purple: #e2ad3b;
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
            radial-gradient(circle at 8% 12%,
                rgba(137, 87, 255, 0.07) 0%,
                transparent 25%),
            radial-gradient(circle at 92% 85%,
                rgba(32, 217, 255, 0.07) 0%,
                transparent 27%),
            linear-gradient(180deg,
                #f5f8ff 0%,
                #ffffff 45%,
                #f8faff 100%);
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
            radial-gradient(ellipse,
                rgba(52, 120, 255, 0.13) 0%,
                rgba(137, 87, 255, 0.055) 45%,
                transparent 72%);

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
            linear-gradient(135deg,
                rgba(32, 217, 255, 0.06),
                rgba(52, 120, 255, 0.055),
                rgba(137, 87, 255, 0.04));

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

        color: black;

        font-size: clamp(30px, 3.8vw, 44px);
        line-height: 1.2;

        font-weight: 700;

        letter-spacing: -1.1px;
    }


    #kdRcsFaqSection .kd-rcs-faq-header h2 span {
        color: #e2ad3b;
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
            linear-gradient(90deg,
                rgba(52, 120, 255, 0.06),
                rgba(137, 87, 255, 0.025),
                transparent);
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
            linear-gradient(135deg,
                var(--kd-rcs-primary),
                var(--kd-rcs-purple));

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
                <span>Machine Learning & And Ai</span>
            </h2>


            <p>
                Find answers to common questions about RCS messaging, interactive
                communication, branded messages and how King Digital can help your
                business create more engaging customer experiences.
            </p>

        </div>


        <!-- =====================================================
    FAQ LIST
    ====================================================== -->
        <div class="kd-rcs-faq-list">


            <!-- FAQ 1 -->
            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">
                        What is RCS messaging?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%)  rotate(90deg);"></span>
                    </span>
                </button>


                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>
                            RCS, or Rich Communication Services, is an advanced business
                            messaging solution that allows brands to create richer and more
                            interactive conversations. Messages can include branded content,
                            images, buttons, suggested actions and other engaging elements.
                        </p>
                    </div>
                </div>

            </div>


            <!-- FAQ 2 -->
            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">
                        How is RCS different from traditional SMS?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%)  rotate(90deg);"></span>
                    </span>
                </button>


                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>
                            Traditional SMS is mainly text-based, while RCS supports a more
                            interactive messaging experience. Businesses can use rich media,
                            branded messaging, visual content and action buttons to create
                            more engaging customer communication.
                        </p>
                    </div>
                </div>

            </div>


            <!-- FAQ 3 -->
            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">
                        Can I add images and buttons to RCS messages?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%)  rotate(90deg);"></span>
                    </span>
                </button>


                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>
                            Yes. RCS messaging can support rich visual content and interactive
                            features such as images, cards, buttons and suggested actions,
                            helping customers interact with your business more easily.
                        </p>
                    </div>
                </div>

            </div>


            <!-- FAQ 4 -->
            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">
                        Can RCS messages be branded with my business identity?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%)  rotate(90deg);"></span>
                    </span>
                </button>


                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>
                            Yes. RCS can help businesses create a more recognizable brand
                            experience by presenting communication in a professional and
                            visually engaging format that is designed around your brand
                            identity and messaging goals.
                        </p>
                    </div>
                </div>

            </div>


            <!-- FAQ 5 -->
            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">
                        What businesses can benefit from RCS messaging?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%)  rotate(90deg);"></span>
                    </span>
                </button>


                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>
                            RCS messaging can be useful for businesses across many industries
                            that want to create more interactive customer communication,
                            promote products or services, share important updates and improve
                            overall audience engagement.
                        </p>
                    </div>
                </div>

            </div>


            <!-- FAQ 6 -->
            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">
                        Can RCS help improve customer engagement?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%)  rotate(90deg);"></span>
                    </span>
                </button>


                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>
                            Yes. Rich visual content and interactive actions can make customer
                            communication more engaging and easier to respond to, helping
                            businesses create more meaningful conversations with their
                            audience.
                        </p>
                    </div>
                </div>

            </div>


            <!-- FAQ 7 -->
            <div class="kd-rcs-faq-item">

                <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                    <span class="kd-rcs-faq-question-text">
                        How can I get started with King Digital RCS services?
                    </span>

                    <span class="kd-rcs-faq-icon" aria-hidden="true">
                        <span class="kd-rcs-faq-icon-horizontal ewras"></span>
                        <span class="kd-rcs-faq-icon-vertical ewras" style="transform: translate(-50%, -50%)  rotate(90deg);"></span>
                    </span>
                </button>


                <div class="kd-rcs-faq-answer">
                    <div class="kd-rcs-faq-answer-inner">
                        <p>
                            Simply contact the King Digital team and share your business
                            communication requirements. Our team can help you understand the
                            available RCS messaging solutions and plan the right approach for
                            your customer engagement goals.
                        </p>
                    </div>
                </div>

            </div>


        </div>

    </div>

</section>


<script>
    /* =========================================================
KING DIGITAL RCS FAQ ACCORDION
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