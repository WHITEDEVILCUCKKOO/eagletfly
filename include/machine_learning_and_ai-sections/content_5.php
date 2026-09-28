<!-- AI Course Section 5: Step-by-Step Career Roadmap -->
<style>
    .aic-sec5-wrapper {
        background-color: #ffffff;
        color: #1e293b;
        line-height: 1.6;
        padding: 90px 20px;
        font-family: inherit;
        overflow: hidden;
        border-top: 1px solid #e2e8f0;
    }

    .aic-sec5-container {
        max-width: 900px;
        margin: 0 auto;
    }

    /* =========================
       SECTION HEADING
    ========================= */

    .aic-sec5-heading-wrap {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        transition:
            opacity 0.8s ease,
            transform 0.8s ease;
    }

    .aic-sec5-heading-wrap.aic-sec5-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec5-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 12px;
        line-height: 1.2;
    }

    .aic-sec5-title-line {
        width: 80px;
        height: 4px;
        background: #6366f1;
        margin: 0 auto 20px;
        border-radius: 2px;
    }

    .aic-sec5-subtitle {
        color: #475569;
        font-size: 1.1rem;
        max-width: 800px;
        margin: 0 auto;
        line-height: 1.6;
    }


    /* =========================
       TIMELINE
    ========================= */

    .aic-sec5-timeline-wrapper {
        position: relative;
        padding-left: 60px;
    }

    /*
     * The actual timeline starts/ends
     * around the center of the nodes.
     */
    .aic-sec5-track-line {
        position: absolute;
        left: 21px;
        top: 58px;
        bottom: 58px;
        width: 4px;
        background: #e2e8f0;
        border-radius: 4px;
        z-index: 0;
    }

    .aic-sec5-progress-line {
        position: absolute;
        left: 21px;
        top: 58px;
        width: 4px;
        height: 0;
        background: linear-gradient(
            to bottom,
            #6366f1,
            #a855f7
        );
        border-radius: 4px;
        z-index: 1;
        transition: height 0.12s linear;
        pointer-events: none;
    }


    /* =========================
       ROADMAP CARD
    ========================= */

    .aic-sec5-card {
        position: relative;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 30px;
        border-radius: 16px;
        margin-bottom: 35px;

        opacity: 0;
        transform: translateY(30px);

        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);

        transition:
            opacity 0.55s ease,
            transform 0.55s ease,
            box-shadow 0.3s ease,
            border-color 0.3s ease;
    }

    .aic-sec5-card:last-child {
        margin-bottom: 0;
    }

    /*
     * Important:
     * Don't use transform on visible state.
     * Otherwise hover transform and animation
     * can conflict.
     */
    .aic-sec5-card.aic-sec5-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec5-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.07);
        border-color: #cbd5e1;
    }


    /* =========================
       TIMELINE NODE
    ========================= */

    .aic-sec5-card::before {
        content: '';

        position: absolute;

        /*
         * Card begins at 60px.
         * Timeline center = 23px.
         * Node = 20px wide.
         *
         * 60 - 47 = 13
         * 13 + 10 = 23px center.
         */
        left: -47px;
        top: 48px;

        width: 20px;
        height: 20px;
        box-sizing: border-box;

        background-color: #ffffff;
        border: 4px solid #cbd5e1;
        border-radius: 50%;

        box-shadow: 0 0 0 4px #f1f5f9;

        z-index: 3;

        transition:
            background-color 0.35s ease,
            border-color 0.35s ease,
            box-shadow 0.35s ease,
            transform 0.35s ease;
    }

    /*
     * Active timeline node
     */
    .aic-sec5-card.aic-sec5-point-active::before {
        background-color: #6366f1;
        border-color: #ffffff;

        box-shadow:
            0 0 0 6px rgba(99, 102, 241, 0.22),
            0 0 15px rgba(99, 102, 241, 0.55);

        transform: scale(1.08);
    }


    /* =========================
       CARD CONTENT
    ========================= */

    .aic-sec5-stage-tag {
        display: inline-block;

        background: #e0e7ff;
        color: #4338ca;

        padding: 5px 12px;
        border-radius: 6px;

        font-size: 0.85rem;
        font-weight: 600;

        margin-bottom: 12px;
        letter-spacing: 0.5px;
    }

    .aic-sec5-stage-title {
        font-size: 1.35rem;
        font-weight: 700;
        color: #0f172a;

        margin: 0 0 10px;
        line-height: 1.35;
    }

    .aic-sec5-stage-desc {
        color: #475569;
        font-size: 0.98rem;

        margin: 0;
        line-height: 1.6;
    }


    /* =========================
       STAGGER ANIMATION
    ========================= */

    .aic-sec5-card:nth-child(3) {
        transition-delay: 0.08s;
    }

    .aic-sec5-card:nth-child(4) {
        transition-delay: 0.16s;
    }

    .aic-sec5-card:nth-child(5) {
        transition-delay: 0.24s;
    }

    .aic-sec5-card:nth-child(6) {
        transition-delay: 0.32s;
    }


    /* =========================
       TABLET
    ========================= */

    @media (max-width: 768px) {

        .aic-sec5-wrapper {
            padding: 70px 20px;
        }

        .aic-sec5-title {
            font-size: 2rem;
        }

        .aic-sec5-timeline-wrapper {
            padding-left: 40px;
        }

        .aic-sec5-track-line,
        .aic-sec5-progress-line {
            left: 17px;
        }

        .aic-sec5-card {
            padding: 24px;
        }

        /*
         * Card starts at 40px.
         * Timeline center = 19px.
         * Node = 16px.
         *
         * 40 - 29 = 11
         * 11 + 8 = 19px
         */
        .aic-sec5-card::before {
            left: -29px;
            top: 44px;

            width: 16px;
            height: 16px;

            border-width: 3px;
        }

        .aic-sec5-stage-title {
            font-size: 1.25rem;
        }
    }


    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 480px) {

        .aic-sec5-wrapper {
            padding: 55px 15px;
        }

        .aic-sec5-container {
            width: 100%;
        }

        .aic-sec5-heading-wrap {
            margin-bottom: 45px;
        }

        .aic-sec5-title {
            font-size: 1.6rem;
        }

        .aic-sec5-subtitle {
            font-size: 0.98rem;
        }

        .aic-sec5-timeline-wrapper {
            padding-left: 34px;
        }

        .aic-sec5-track-line,
        .aic-sec5-progress-line {
            left: 14px;
        }

        .aic-sec5-card {
            padding: 20px;
            border-radius: 14px;
            margin-bottom: 28px;
        }

        /*
         * Mobile:
         * Card starts at 34px
         * Line center = 16px
         * Node = 14px
         */
        .aic-sec5-card::before {
            left: -25px;
            top: 40px;

            width: 14px;
            height: 14px;

            border-width: 3px;
        }

        .aic-sec5-stage-tag {
            font-size: 0.78rem;
            padding: 4px 10px;
            margin-bottom: 10px;
        }

        .aic-sec5-stage-title {
            font-size: 1.1rem;
        }

        .aic-sec5-stage-desc {
            font-size: 0.92rem;
        }
    }


    /* =========================
       REDUCED MOTION
    ========================= */

    @media (prefers-reduced-motion: reduce) {

        .aic-sec5-heading-wrap,
        .aic-sec5-card,
        .aic-sec5-progress-line,
        .aic-sec5-card::before {
            transition: none !important;
        }
    }
</style>


<section class="aic-sec5-wrapper">

    <div class="aic-sec5-container">

        <!-- Section Header -->
        <div
            class="aic-sec5-heading-wrap"
            id="aicSec5Header"
        >
            <h2 class="aic-sec5-title">
                Step-by-Step Career Roadmap
            </h2>

            <div class="aic-sec5-title-line"></div>

            <p class="aic-sec5-subtitle">
                Transitioning into a successful AI role requires a structured approach that goes beyond classroom sessions:
            </p>
        </div>


        <!-- Timeline -->
        <div
            class="aic-sec5-timeline-wrapper"
            id="aicTimelineWrapper"
        >

            <!-- Background Timeline -->
            <div class="aic-sec5-track-line"></div>

            <!-- Animated Progress -->
            <div
                class="aic-sec5-progress-line"
                id="aicProgressLine"
            ></div>


            <!-- =========================
                 STAGE 1
            ========================== -->
            <div
                class="aic-sec5-card aic-sec5-animate"
                data-index="0"
            >
                <span class="aic-sec5-stage-tag">
                    Stage 1
                </span>

                <h3 class="aic-sec5-stage-title">
                    Learning Foundational Skills
                </h3>

                <p class="aic-sec5-stage-desc">
                    Begin with the basics of Python coding, mathematics,
                    statistics, and data cleansing. Finish all of the
                    assignments that will help you learn the important concepts.
                </p>
            </div>


            <!-- =========================
                 STAGE 2
            ========================== -->
            <div
                class="aic-sec5-card aic-sec5-animate"
                data-index="1"
            >
                <span class="aic-sec5-stage-tag">
                    Stage 2
                </span>

                <h3 class="aic-sec5-stage-title">
                    Learning Advanced Algorithms and Architectures
                </h3>

                <p class="aic-sec5-stage-desc">
                    Go deep into the area of machine learning algorithms,
                    deep networks, computer vision, and NLP. Work on creating
                    the entire pipeline of a model, troubleshoot hyperparameter
                    tuning, and learn how to measure model efficiency.
                </p>
            </div>


            <!-- =========================
                 STAGE 3
            ========================== -->
            <div
                class="aic-sec5-card aic-sec5-animate"
                data-index="2"
            >
                <span class="aic-sec5-stage-tag">
                    Stage 3
                </span>

                <h3 class="aic-sec5-stage-title">
                    Building a Portfolio and Contributing to Open Sources
                </h3>

                <p class="aic-sec5-stage-desc">
                    Focus on finishing real-life projects, making repositories
                    on GitHub, writing how-tos, and designing interactive web
                    demos with Streamlit or Gradio.
                </p>
            </div>


            <!-- =========================
                 STAGE 4
            ========================== -->
            <div
                class="aic-sec5-card aic-sec5-animate"
                data-index="3"
            >
                <span class="aic-sec5-stage-tag">
                    Stage 4
                </span>

                <h3 class="aic-sec5-stage-title">
                    Optimizing your Resume and Undergoing Interviews
                </h3>

                <p class="aic-sec5-stage-desc">
                    Take part in a resume-building class, code tests,
                    practice interviews, and recruitment campaigns organized
                    with partner hiring firms in areas of Delhi NCR.
                </p>
            </div>

        </div>
    </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const header = document.getElementById("aicSec5Header");
    const wrapper = document.getElementById("aicTimelineWrapper");
    const progressLine = document.getElementById("aicProgressLine");

    const cards = Array.from(
        document.querySelectorAll(".aic-sec5-animate")
    );

    if (!wrapper || !progressLine || !cards.length) {
        return;
    }


    /* ==========================================
       HEADER + CARD REVEAL OBSERVER
    ========================================== */

    const revealObserver = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add(
                        "aic-sec5-visible"
                    );

                }

            });

        },
        {
            root: null,
            rootMargin: "0px 0px -8% 0px",
            threshold: 0.08
        }
    );


    if (header) {
        revealObserver.observe(header);
    }


    cards.forEach(function (card) {
        revealObserver.observe(card);
    });


    /* ==========================================
       TIMELINE PROGRESS
    ========================================== */

    function updateRoadmapProgress() {

        const wrapperRect =
            wrapper.getBoundingClientRect();

        const wrapperTop =
            wrapperRect.top;

        const wrapperHeight =
            wrapper.offsetHeight;


        /*
         * The user sees the timeline as "active"
         * when the node reaches this point.
         */
        const triggerPoint =
            window.innerHeight * 0.55;


        /*
         * Calculate every card's node center
         * relative to the timeline wrapper.
         */
        const nodePositions = cards.map(function (card) {

            const cardTop =
                card.offsetTop;

            /*
             * Keep this value synchronized
             * with the CSS node position.
             *
             * Desktop node:
             * top 48px + half of 20px = 58px
             */
            let nodeOffset = 58;

            if (window.innerWidth <= 768) {
                /*
                 * Tablet:
                 * top 44px + half of 16px = 52px
                 */
                nodeOffset = 52;
            }

            if (window.innerWidth <= 480) {
                /*
                 * Mobile:
                 * top 40px + half of 14px = 47px
                 */
                nodeOffset = 47;
            }

            return cardTop + nodeOffset;
        });


        if (!nodePositions.length) {
            return;
        }


        const firstNode =
            nodePositions[0];

        const lastNode =
            nodePositions[nodePositions.length - 1];


        /*
         * Current viewport trigger position
         * inside the wrapper.
         */
        let currentPosition =
            triggerPoint - wrapperTop;


        /*
         * Don't let the progress go
         * before the first node.
         */
        currentPosition =
            Math.max(
                firstNode,
                currentPosition
            );


        /*
         * Don't let it go beyond
         * the final node.
         */
        currentPosition =
            Math.min(
                lastNode,
                currentPosition
            );


        /*
         * Progress starts exactly
         * at the first node.
         */
        const progressHeight =
            currentPosition - firstNode;


        progressLine.style.height =
            Math.max(0, progressHeight) + "px";


        /* ======================================
           ACTIVE NODE LOGIC
        ====================================== */

        cards.forEach(function (card, index) {

            const nodePosition =
                nodePositions[index];

            /*
             * Node becomes active once its
             * center reaches the trigger line.
             */
            if (
                currentPosition >=
                nodePosition
            ) {

                card.classList.add(
                    "aic-sec5-point-active"
                );

            } else {

                card.classList.remove(
                    "aic-sec5-point-active"
                );

            }

        });
    }


    /* ==========================================
       SCROLL OPTIMIZATION
    ========================================== */

    let ticking = false;

    function requestRoadmapUpdate() {

        if (!ticking) {

            window.requestAnimationFrame(
                function () {

                    updateRoadmapProgress();

                    ticking = false;

                }
            );

            ticking = true;
        }
    }


    window.addEventListener(
        "scroll",
        requestRoadmapUpdate,
        { passive: true }
    );


    window.addEventListener(
        "resize",
        requestRoadmapUpdate
    );


    /*
     * Run after browser has calculated
     * the actual card dimensions.
     */
    window.requestAnimationFrame(function () {

        updateRoadmapProgress();

    });


    /*
     * Run once more after images/fonts/layout
     * have settled.
     */
    window.setTimeout(function () {

        updateRoadmapProgress();

    }, 300);

});
</script>