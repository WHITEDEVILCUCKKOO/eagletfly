<style>
    /* =========================
   HERO SECTION
========================= */

    .hero-sec-container {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 100px 7% 70px;
        background: #f7f9fc;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        text-align: left;
    }

    /* Soft background glow */
    .hero-sec-container::before {
        content: "";
        position: absolute;
        width: 550px;
        height: 550px;
        left: -280px;
        top: 80px;
        background: radial-gradient(circle,
                rgba(80, 180, 255, 0.16),
                transparent 68%);
        pointer-events: none;
    }

    .hero-sec-container::after {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        right: -220px;
        bottom: -180px;
        background: radial-gradient(circle,
                rgba(105, 125, 255, 0.16),
                transparent 68%);
        pointer-events: none;
    }


    /* =========================
   MAIN HERO WRAPPER
========================= */

    .hero-sec-wrapper {
        width: 100%;
        max-width: 1450px;
        display: grid;
        grid-template-columns: 0.95fr 1.05fr;
        align-items: center;
        gap: 60px;
        position: relative;
        z-index: 2;
    }


    /* =========================
   LEFT CONTENT
========================= */

    .hero-sec-left {
        max-width: 680px;
    }

    .hero-sec-header {
        margin-bottom: 28px;
    }

    .hero-sec-main-title {
        margin: 0;
        font-family: "Sora", sans-serif;
        font-size: clamp(42px, 4vw, 62px);
        line-height: 1.08;
        font-weight: 800;
        color: #17191c;
        display: block;
    }

    .hero-sec-dynamic-text {
        background: linear-gradient(90deg,
                #3924d5,
                #7b18e8,
                #c014e9);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-sec-cursor {
        display: inline-block;
        width: 3px;
        height: 0.95em;
        margin-left: 5px;
        vertical-align: middle;
        background: #4933c8;
        animation: heroSecBlink 0.8s infinite;
    }

    @keyframes heroSecBlink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

    .hero-sec-sub-title {
        margin: 8px 0 0;
        font-family: "Sora", sans-serif;
        font-size: clamp(34px, 3.2vw, 50px);
        line-height: 1.12;
        font-weight: 800;
        color: #17191c;
    }


    /* =========================
   DESCRIPTION
========================= */

    .hero-sec-description {
        max-width: 600px;
        margin: 0 0 28px;
        font-family: "Inter", sans-serif;
        font-size: 17px;
        line-height: 1.7;
        color: #526176;
    }


    /* =========================
   FEATURES
========================= */

    .hero-sec-features {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-bottom: 34px;
    }

    .hero-sec-feature-row {
        display: flex;
        align-items: center;
        gap: 28px;
        flex-wrap: wrap;
    }

    .hero-sec-feature-item {
        display: flex;
        align-items: center;
        gap: 9px;
        font-family: "Inter", sans-serif;
        font-size: 15px;
        font-weight: 600;
        color: #26384e;
    }

    .hero-sec-check-icon {
        width: 23px;
        height: 23px;
        min-width: 23px;
        background: #35b965;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        font-weight: 800;
    }


    /* =========================
   BUTTONS
========================= */

    .hero-sec-actions {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
    }

    .hero-sec-btn-primary,
    .hero-sec-btn-secondary {
        min-height: 52px;
        padding: 0 28px;
        border-radius: 7px;
        font-family: "Inter", sans-serif;
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.3px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .hero-sec-btn-primary {
        background: linear-gradient(90deg,
                #00a878,
                #2196b5);
        color: #fff;
        border: none;
        box-shadow: 0 8px 22px rgba(0, 160, 130, 0.2);
    }

    .hero-sec-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(0, 160, 130, 0.3);
    }

    .hero-sec-btn-secondary {
        background: #252c32;
        color: #fff;
        border: none;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .hero-sec-btn-secondary:hover {
        transform: translateY(-3px);
        background: #171c20;
    }

    .hero-sec-btn-icon {
        width: 18px;
        height: 18px;
    }


    /* =========================
   RIGHT IMAGE AREA
========================= */

    .hero-sec-right {
        width: 100%;
        min-height: 540px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    /* Ye box sirf image ki jagah hai */
    .hero-image-placeholder {
        width: 100%;
        max-width: 700px;
        height: 500px;

        /* border: 1.5px dashed rgba(91, 72, 255, 0.55); */
        border-radius: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        position: relative;
        overflow: hidden;

        background: rgba(255, 255, 255, 0.18);
    }

    /* Image yaha add karna */
    .hero-image-placeholder img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
    }


    /* =========================
   FLOATING CARDS
========================= */

    .hero-floating-card {
        position: absolute;
        background: rgba(255, 255, 255, 0.92);
        backdrop-filter: blur(12px);
        border-radius: 15px;
        padding: 16px 20px;
        box-shadow: 0 12px 35px rgba(40, 50, 80, 0.12);
        z-index: 3;
    }

    .hero-floating-card strong {
        display: block;
        font-family: "Sora", sans-serif;
        font-size: 24px;
        color: #15191d;
    }

    .hero-floating-card span {
        font-family: "Inter", sans-serif;
        font-size: 13px;
        color: #566477;
    }

    .hero-card-one {
        left: -20px;
        top: 55px;
    }

    .hero-card-two {
        right: -20px;
        top: 170px;
    }

    .hero-card-three {
        left: 30px;
        bottom: 25px;
    }


    /* =========================
   RESPONSIVE
========================= */

    @media (max-width: 1100px) {

        .hero-sec-wrapper {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 40px;
        }

        .hero-sec-left {
            max-width: 800px;
            margin: auto;
        }

        .hero-sec-description {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-sec-feature-row {
            justify-content: center;
        }

        .hero-sec-actions {
            justify-content: center;
        }

        .hero-sec-right {
            min-height: 450px;
        }

        .hero-image-placeholder {
            height: 430px;
        }
    }


    @media (max-width: 768px) {

        .hero-sec-container {
            min-height: auto;
            padding: 100px 20px 60px;
        }

        .hero-sec-main-title {
            font-size: 38px !important;
        }

        .hero-sec-sub-title {
            font-size: 30px !important;
        }

        .hero-sec-description {
            font-size: 15px;
        }

        .hero-sec-feature-row {
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .hero-sec-actions {
            flex-direction: column;
            width: 100%;
        }

        .hero-sec-btn-primary,
        .hero-sec-btn-secondary {
            width: 100%;
        }

        .hero-sec-right {
            min-height: 350px;
        }

        .hero-image-placeholder {
            height: 320px;
            border-radius: 22px;
        }

        .hero-floating-card {
            display: none;
        }
    }
</style>

<section class="hero-sec-container">

    <!-- Existing decorative elements -->
    <div class="decor-hero-ring"></div>
    <div class="decor-hero-glow1"></div>
    <div class="decor-hero-glow2"></div>

    <div class="decor-hero-orb o1"></div>
    <div class="decor-hero-orb o2"></div>
    <div class="decor-hero-orb o3"></div>


    <div class="hero-sec-wrapper">

        <!-- ================= LEFT ================= -->
        <div class="hero-sec-left">

            <div class="hero-sec-header">

                <h1 class="hero-sec-main-title">
                    Learn
                    <span class="hero-sec-dynamic-text rainbow-animated_without_animtion"></span>
                    <span class="hero-sec-cursor"></span>
                </h1>

                <h2 class="hero-sec-sub-title">
                    From Industry Experts
                </h2>

            </div>


            <p class="hero-sec-description">
                Master in-demand skills in Data Analytics & BI with
                real-world projects, expert mentorship and 100% placement assistance.
            </p>


            <!-- Features -->
            <div class="hero-sec-features">

                <div class="hero-sec-feature-row">

                    <div class="hero-sec-feature-item">
                        <span class="hero-sec-check-icon">✓</span>
                        <span>Online/Offline Classes</span>
                    </div>

                    <div class="hero-sec-feature-item">
                        <span class="hero-sec-check-icon">✓</span>
                        <span>100% Job Assistance</span>
                    </div>

                    <div class="hero-sec-feature-item">
                        <span class="hero-sec-check-icon">✓</span>
                        <span>Real-World Projects</span>
                    </div>

                </div>


                <div class="hero-sec-feature-row">

                    <div class="hero-sec-feature-item">
                        <span class="hero-sec-check-icon">✓</span>
                        <span>Prior Math/Coding Experience Needed</span>
                    </div>

                    <div class="hero-sec-feature-item">
                        <span class="hero-sec-check-icon">✓</span>
                        <span>10+ Years of Experience</span>
                    </div>

                </div>

            </div>


            <!-- Buttons -->
            <div class="hero-sec-actions">

                <button class="hero-sec-btn-primary">
                    <span>SEND INQUIRY</span>

                    <svg class="hero-sec-btn-icon"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <path d="M22 2L11 13"></path>
                        <path d="M22 2L15 22L11 13L2 9L22 2"></path>

                    </svg>
                </button>


                <button class="hero-sec-btn-secondary">

                    <span>BOOK A FREE DEMO CLASS</span>

                    <svg class="hero-sec-btn-icon"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <rect x="2" y="3"
                            width="20"
                            height="14"
                            rx="2"></rect>

                        <line x1="8"
                            y1="21"
                            x2="16"
                            y2="21"></line>

                        <line x1="12"
                            y1="17"
                            x2="12"
                            y2="21"></line>

                    </svg>

                </button>

            </div>

        </div>


        <!-- ================= RIGHT IMAGE ================= -->

        <div class="hero-sec-right">

            <!--
                ==========================================
                APNI IMAGE YAHAN ADD KARNA
                ==========================================

                Example:

                <img src="assets/img/your-image.webp"
                     alt="Data Analytics">

            -->

            <div class="hero-image-placeholder">

                <!-- APNI IMAGE YAHAN LAGAO -->


                <img src="img/laptop_simg_123 (1).png"
                    alt="Data Analytics">


            </div>


            <!-- Floating Cards -->

            <div class="hero-floating-card hero-card-one " style="height: max-content;">
                <strong>10+</strong>
                <span>Years Experience</span>
            </div>


            <div class="hero-floating-card hero-card-two" style="height: max-content;">
                <strong>100%</strong>
                <span>Job Assistance</span>
            </div>


            <div class="hero-floating-card hero-card-three">
                <strong>5000+</strong>
                <span>Students Trained</span>
            </div>

        </div>

    </div>

</section>