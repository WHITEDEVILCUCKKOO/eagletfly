<!-- ==================================================================== -->
<!-- ==== SECTION 1: HERO ==== -->
<!-- ==================================================================== -->
<style>
    .kdh-hero {
        position: relative;
        font-family: 'Segoe UI', Arial, sans-serif;
        padding: 110px 20px 110px;
        overflow: hidden;

        background-image: url('assets/extara_imgs/asemn.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Only phone */
    @media (max-width: 768px) {
        .kdh-hero {
            background-image: none;
        }

        .kdh-hero::before {
            content: "";
            position: absolute;
            inset: -10px;
            background-image: url('assets/extara_imgs/asemn.png');
            background-size: cover;
            background-position: 80% center;
            background-repeat: no-repeat;
            filter: blur(4px);
            z-index: 0;
        }

        .kdh-hero>* {
            position: relative;
            z-index: 1;
        }
    }


    .kdh-container {
        max-width: 1180px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .kdh-eyebrow {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.5px;
        color: #4d8dff;
        margin: 0 0 14px 0;
        opacity: 0;
        animation: kdh-fade-up 0.6s ease forwards;
    }

    .kdh-heading {
        font-size: 44px;
        font-weight: 00;
        line-height: 1.3;
        color: #fff;
        margin: 0 0 18px 0;
        opacity: 0;
        animation: kdh-fade-up 0.6s ease 0.1s forwards;
    }

    .kdh-heading-accent {
        /* color: #4d8dff; */
        background: linear-gradient(90deg, #3aa0ff 0%, #685eff 40%, #a238ff 75%, #d14dff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }


















    @keyframes kdh-fade-up {
        from {
            opacity: 0;
            transform: translateY(16px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .kdh-subtext {
        font-size: 15px;
        color: #a9b3c9;
        line-height: 1.7;
        margin: 0 0 24px 0;
        max-width: 460px;
        opacity: 0;
        animation: kdh-fade-up 0.6s ease 0.2s forwards;
    }

    .kdh-feature-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 10px 20px;
        margin-bottom: 28px;
        opacity: 0;
        animation: kdh-fade-up 0.6s ease 0.3s forwards;
    }

    .kdh-feature-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12.5px;
        color: #d7dcea;
    }

    .kdh-check {
        width: 50px;
        height: 50px;
        /* border-radius: 50%; */
        /* background: ; */
        color: #fff;
        font-size: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
    }

    .kdh-btn-row {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        opacity: 0;
        animation: kdh-fade-up 0.6s ease 0.4s forwards;
    }

    .kdh-btn {
        padding: 13px 24px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.25s ease, background 0.25s ease;
    }

    .kdh-btn-solid {
        background: #6E33E5;
        color: #fff;
        border: none;
    }

    .kdh-btn-solid:hover {
        background: #553496;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(47, 109, 243, 0.35);
    }

    .kdh-btn-outline {
        background: transparent;
        color: #fff;
        border: 1.5px solid rgba(255, 255, 255, 0.35);
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .kdh-btn-outline:hover {
        border-color: #fff;
        background: rgba(255, 255, 255, 0.06);
        transform: translateY(-2px);
    }

    /* ---------- device mockup ---------- */

    .kdh-mockup-wrap {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 320px;
        opacity: 0;
        animation: kdh-fade-up 0.6s ease 0.3s forwards;
        display: none;

    }

    .kdh-laptop {
        position: relative;
        width: 100%;
        max-width: 460px;
    }

    .kdh-laptop-screen {
        background: linear-gradient(150deg, #0b1c4a, #050a1e 70%);
        border: 6px solid #1c2338;
        border-radius: 14px 14px 4px 4px;
        padding: 16px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        position: relative;
        overflow: hidden;
    }

    .kdh-laptop-screen::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 30% 80%, rgba(77, 141, 255, 0.35), transparent 55%),
            radial-gradient(circle at 80% 20%, rgba(120, 90, 255, 0.3), transparent 50%);
        animation: kdh-glow-shift 6s ease-in-out infinite;
    }

    @keyframes kdh-glow-shift {

        0%,
        100% {
            opacity: 0.7;
        }

        50% {
            opacity: 1;
        }
    }

    .kdh-laptop-topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
        z-index: 1;
        margin-bottom: 30px;
    }

    .kdh-laptop-logo {
        font-size: 10px;
        font-weight: 800;
        color: #fff;
    }

    .kdh-laptop-nav {
        display: flex;
        gap: 8px;
    }

    .kdh-laptop-nav span {
        font-size: 8px;
        color: #8a94b8;
    }

    .kdh-laptop-content {
        position: relative;
        z-index: 1;
    }

    .kdh-laptop-label {
        font-size: 10px;
        color: #8fa5e0;
        letter-spacing: 1px;
        margin-bottom: 4px;
    }

    .kdh-laptop-title {
        font-size: 22px;
        font-weight: 800;
        color: #fff;
        line-height: 1.2;
    }

    .kdh-laptop-title-accent {
        color: #4d8dff;
        display: block;
    }

    .kdh-laptop-sub {
        font-size: 9px;
        color: #99a5c9;
        margin: 8px 0 14px;
    }

    .kdh-laptop-btn {
        display: inline-block;
        background: #2f6df3;
        color: #fff;
        font-size: 9px;
        font-weight: 700;
        padding: 7px 14px;
        border-radius: 5px;
    }

    .kdh-laptop-base {
        height: 14px;
        background: linear-gradient(180deg, #2a2f42, #14161f);
        border-radius: 0 0 10px 10px;
        margin-top: -2px;
    }

    .kdh-laptop-base::after {
        content: "";
        display: block;
        width: 26%;
        height: 5px;
        background: #3a3f55;
        margin: 0 auto;
        border-radius: 0 0 6px 6px;
    }

    .kdh-phone {
        position: absolute;
        right: -6%;
        bottom: -8%;
        width: 140px;
        background: #111;
        border: 5px solid #1c2338;
        border-radius: 20px;
        padding: 10px 8px;
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5);
        animation: kdh-float 5s ease-in-out infinite;
    }

    @keyframes kdh-float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }

    .kdh-phone-screen {
        background: linear-gradient(160deg, #0b1c4a, #050a1e 70%);
        border-radius: 10px;
        padding: 10px 8px;
        position: relative;
        overflow: hidden;
    }

    .kdh-phone-label {
        font-size: 7px;
        color: #8fa5e0;
        letter-spacing: 1px;
    }

    .kdh-phone-title {
        font-size: 12px;
        font-weight: 800;
        color: #fff;
        line-height: 1.2;
        margin: 4px 0;
    }

    .kdh-phone-title span {
        color: #4d8dff;
        display: block;
    }

    .kdh-phone-btn {
        display: inline-block;
        background: #2f6df3;
        color: #fff;
        font-size: 6.5px;
        font-weight: 700;
        padding: 4px 8px;
        border-radius: 4px;
        margin-top: 6px;
    }

    .kdh-phone-check-row {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }

    .kdh-phone-check-row span {
        font-size: 6px;
        color: #99a5c9;
    }

    /* ---------- responsive ---------- */

    @media (max-width: 900px) {
        .kdh-container {
            grid-template-columns: 1fr;
        }

        .kdh-mockup-wrap {
            order: -1;
            min-height: 260px;
        }

        .kdh-phone {
            width: 110px;
        }
    }

    @media (max-width: 480px) {
        .kdh-heading {
            font-size: 26px;
        }

        .kdh-feature-grid {
            grid-template-columns: 1fr 1fr;
        }

        .kdh-hero {
            padding: 120px 16px 80px;
        }
    }


    .talk_cdae {

        svg {

            fill: white;
            width: 20px;
        }
    }





</style>

<section class="kdh-hero">
    <div class="kdh-container">

        <div>
            <p class="kdh-eyebrow">SMARTER SYSTEMS. INTELLIGENT FUTURE</p>
            <h1 class="kdh-heading">Machine Learning<br>& <span class="animated-gradient-text">AI Solutions</span></h1>
            <p class="kdh-subtext">We build intelligent solutions using Machine Learning and Artificial Intelligence to help businesses automate processes, gain insights and drive innovation</p>
            <br>


            <div class="kdh-btn-row">
                <button class="kdh-btn kdh-btn-solid">Explore Our Services &#8594;</button>
                <button class="kdh-btn kdh-btn-outline"><span class="talk_cdae">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M115.9 448.9C83.3 408.6 64 358.4 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304C576 436.5 461.4 544 320 544C283.5 544 248.8 536.8 217.4 524L101 573.9C97.3 575.5 93.5 576 89.5 576C75.4 576 64 564.6 64 550.5C64 546.2 65.1 542 67.1 538.3L115.9 448.9zM153.2 418.7C165.4 433.8 167.3 454.8 158 471.9L140 505L198.5 479.9C210.3 474.8 223.7 474.7 235.6 479.6C261.3 490.1 289.8 496 319.9 496C437.7 496 527.9 407.2 527.9 304C527.9 200.8 437.8 112 320 112C202.2 112 112 200.8 112 304C112 346.8 127.1 386.4 153.2 418.7z" />
                        </svg>
                    </span> Let's Talk</button>
            </div>

            <div class="kdh-feature-grid" style="margin-top: 30px;">
                <div class="kdh-feature-item"><span class="kdh-check"><svg fill="#6E33E5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                        </svg></span>
                    <span>
                        Data-Driven
                        Decisions
                    </span>
                </div>
                <div class="kdh-feature-item"><span class="kdh-check"><svg fill="#6E33E5" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M31.25,7.4a43.79,43.79,0,0,1-6.62-2.35,45,45,0,0,1-6.08-3.21L18,1.5l-.54.35a45,45,0,0,1-6.08,3.21A43.79,43.79,0,0,1,4.75,7.4L4,7.59v8.34c0,13.39,13.53,18.4,13.66,18.45l.34.12.34-.12c.14,0,13.66-5.05,13.66-18.45V7.59ZM30,15.93c0,11-10,15.61-12,16.43-2-.82-12-5.44-12-16.43V9.14a47.54,47.54,0,0,0,6.18-2.25,48.23,48.23,0,0,0,5.82-3,48.23,48.23,0,0,0,5.82,3A47.54,47.54,0,0,0,30,9.14Z" class="clr-i-outline clr-i-outline-path-1"></path>
                                <path d="M10.88,16.87a1,1,0,0,0-1.41,1.41l6,6L26.4,13.77A1,1,0,0,0,25,12.33l-9.47,9.19Z" class="clr-i-outline clr-i-outline-path-2"></path>
                                <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                            </g>
                        </svg></span>Scalable & Secure</div>
                <div class="kdh-feature-item"><span class="kdh-check"><svg fill="#6E33E5" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M2.67 10.73a3.52 3.52 0 0 0-.94 1.93 5 5 0 0 0-.07 1.1v.58h.8a5.05 5.05 0 0 0 .88-.08 3.46 3.46 0 0 0 1.93-.94 1.76 1.76 0 0 0-.14-2.48 1.76 1.76 0 0 0-2.46-.11zm1.74 1.73a2.26 2.26 0 0 1-1.26.6h-.22v-.22a2.26 2.26 0 0 1 .6-1.26.36.36 0 0 1 .24-.08.67.67 0 0 1 .47.22.54.54 0 0 1 .17.74zM14.65 2.24a.91.91 0 0 0-.89-.89A8.75 8.75 0 0 0 7.27 3.5L5.64 5.4l-2.4-.5a1 1 0 0 0-.92.27l-.68.68a1 1 0 0 0-.28.81 1 1 0 0 0 .45.74l2.06 1.32.13.08 3.2 3.25.08.08 1.32 2.06a1 1 0 0 0 .74.45h.11a1 1 0 0 0 .7-.29l.68-.68a1 1 0 0 0 .27-.92l-.5-2.39 1.84-1.58a8.79 8.79 0 0 0 2.21-6.54zM3.11 6.15l1.32.28-.64.75-1-.67zm6.38 7.1-.67-1 .75-.64.28 1.32zm2.39-5.11.18.17zm-.28-.28L7.92 11 5 8.08 8.14 4.4a7.44 7.44 0 0 1 5.26-1.8 7.48 7.48 0 0 1-1.8 5.26z"></path>
                                <path d="M11.13 6.63a1.19 1.19 0 0 0-.06-1.7 1.16 1.16 0 1 0-1.64 1.63 1.2 1.2 0 0 0 1.7.07z"></path>
                            </g>
                        </svg></span>Faster innovation</div>
                <!-- <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>SEO Friendly</div>
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>Fast Loading Speed</div>
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>Secure &amp; Scalable Solutions</div> -->
            </div>

        </div>



    </div>



    
</section>

<script>
    // Section 1: no interactive JS required beyond CSS animations
</script>