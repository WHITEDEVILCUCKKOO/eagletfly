<style>
    * {
        box-sizing: border-box;
    }

    .kd-steps-section {
       background:
            radial-gradient(circle at 8% 12%,
                rgba(255, 102, 46, .18),
                transparent 30%),

            radial-gradient(circle at 93% 8%,
                rgba(126, 82, 220, .20),
                transparent 34%),

            radial-gradient(circle at 58% 100%,
                rgba(72, 96, 205, .10),
                transparent 34%),

            linear-gradient(135deg,
                #070A12 0%,
                #0B1020 34%,
                #121126 68%,
                #17102B 100%);
        font-family: 'Manrope', Arial, sans-serif;
        position: relative;
        padding: 60px 54px 90px;
        /* background: #262626; */
        overflow: hidden;
    }

    .kd-steps-title {
        /* max-width: 500px; */
        margin: 0 auto;
        text-align: center;
        color: #ffffff;
        font-size: clamp(20px, 3.2vw, 27px);
        font-weight: 800;
        line-height: 1.35;
        text-align: center;
    }

    .kd-steps-scroll-wrapper {
        /* overflow-x: auto;
        -webkit-overflow-scrolling: touch; */
        padding-bottom: 4px;
    }

    .kd-steps-stage {
        position: relative;
        max-width: 1320px;
        min-width: 760px;
        margin: 0 auto;
        height: 620px;
    }

    .kd-steps-connectors {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
    }

    /* .kd-steps-connectors path {
        fill: none;
        stroke: #F85F3A;
        stroke-width: 2;
        stroke-dasharray: 5 6;
        stroke-linecap: round;
    } */

    .kd-step-card {
        /* display: none; */
        position: absolute;
        z-index: 2;
        width: 183px;
        height: max-content;
        padding: clamp(16px, 1.8vw, 22px) clamp(14px, 1.6vw, 20px) clamp(18px, 2vw, 24px);
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 18px 34px rgba(0, 0, 0, .28);
    }

    .kd-step-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 16px;
    }

    .kd-step-icon {
        width: clamp(42px, 4.5vw, 58px);
        height: clamp(42px, 4.5vw, 58px);
        border-radius: 50%;
        background: #eef1f6;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .kd-step-icon svg {
        width: 55%;
        height: 55%;
        stroke: #2c3648;
    }

    .kd-step-icon.kd-step-icon-blank {
        background: transparent;
    }

    .kd-step-num {
        font-size: clamp(19px, 2vw, 26px);
        font-weight: 800;
        color: #12121f;
        line-height: 1;
    }

    .kd-step-card h3 {
        margin: 0 0 10px;
        font-size: clamp(14px, 1.3vw, 16.5px);
        font-weight: 800;
        color: #12121f;
    }

    .kd-step-card p {
        margin: 0;
        font-size: clamp(12px, 1.05vw, 13.5px);
        line-height: 1.6;
        color: #545b6e;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* card positions */
    .kd-step-1 {
        left: 0%;
        top: 160px;
    }

    .kd-step-2 {
        left: 18%;
        top: 280px;
    }

    .kd-step-3 {
        left: 34.5%;
        top: 134px;
    }

    .kd-step-4 {
        left: 51%;
        top: 346px;
    }

    .kd-step-5 {
        left: 65.5%;
        top: 102px;
    }

    .kd-step-6 {
        left: 81%;
        top: 306px;
    }

    .kd-steps-endpoint {
        position: absolute;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .kd-steps-endpoint .kd-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #F85F3A;
    }

    .kd-steps-endpoint span.kd-label {
        color: #ffffff;
        font-size: 15px;
        font-weight: 700;
        white-space: nowrap;
    }

    .kd-start {
        left: 4%;
        top: 440px;
    }

    .kd-end {
        left: 81%;
        top: 560px;
    }

    .kd-scroll-dot-mobile {
        display: none;
        position: absolute;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #F85F3A;
        box-shadow: 0 0 0 4px rgba(248, 95, 58, .18), 0 0 14px 4px rgba(248, 95, 58, .55);
        z-index: 3;
        transition: top .08s linear;
    }

    @media(max-width: 640px) {
        .kd-step-1 {
            order: 2;
        }

        .kd-step-2 {
            order: 3;
        }

        .kd-step-3 {
            order: 4;
        }

        .kd-step-4 {
            order: 5;
        }

        .kd-step-5 {
            order: 6;
        }

        .kd-step-6 {
            order: 7;
        }

        .kd-start {
            order: 1;
        }

        .kd-end {
            order: 8;
        }
    }

    @media(max-width: 640px) {
        .kd-steps-section {
            padding: 44px 20px 60px;
        }

        .kd-steps-scroll-wrapper {
            overflow-x: visible;
        }

        .kd-steps-stage {
            height: auto;
            min-width: 0;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 26px;
            padding-left: 22px;
        }

        .kd-steps-stage:before {
            content: "";
            position: absolute;
            left: 32px;
            top: 8px;
            bottom: 8px;
            border-left: 2px dashed #F85F3A;
        }

        .kd-steps-connectors {
            display: none;
        }



        .kd-step-card,
        .kd-steps-endpoint {
            position: static;
            width: 100%;
            max-width: 380px;
        }

        .kd-step-card {
            width: calc(100% - 22px);
        }

        .kd-steps-endpoint {
            flex-direction: row;
            align-items: center;
            gap: 10px;
            align-self: flex-start;
            padding-left: 2px;
        }

        .kd-steps-endpoint .kd-dot {
            margin-left: 6px;
        }
    }

    @media(max-width: 480px) {
        .kd-steps-title {
            margin-bottom: 40px;
        }

        .kd-step-card {
            padding: 16px 16px 18px;
        }

        .kd-step-card h3 {
            font-size: 15px;
        }

        .kd-step-card p {
            font-size: 12.5px;
        }

        .kd-steps-stage:before {
            left: 26px;
        }

        .kd-scroll-dot-mobile {
            left: 20px;
        }
    }

    .aldjoq531 {
        margin-top: 50px;
        width: 78%;
        padding-top: 80px;
        display: block;
        margin: auto;

    }




    @media (min-width: 1400px) {

        .kd-steps-section {
            padding-left: 70px;
            padding-right: 70px;
        }

        .kd-steps-stage {
            max-width: 1380px;
            height: 650px;
        }

        .kd-step-card {
            width: 195px;
        }
    }


    /* ================================
   DESKTOP / LAPTOP
   1200px - 1399px
================================ */
    @media (min-width: 1200px) and (max-width: 1399px) {

        .kd-steps-section {
            padding: 55px 45px 80px;
        }

        .kd-steps-stage {
            max-width: 1180px;
            min-width: 0;
            height: 600px;
        }

        .kd-step-card {
            width: 175px;
        }

        .kd-step-card h3 {
            font-size: 15px;
        }

        .kd-step-card p {
            font-size: 12.5px;
        }
    }


    /* ================================
   SMALL LAPTOP / DESKTOP
   992px - 1199px
================================ */
    @media (min-width: 992px) and (max-width: 1199px) {

        .kd-steps-section {
            padding: 50px 30px 70px;
        }

        .kd-steps-stage {
            max-width: 950px;
            min-width: 0;
            height: 570px;
        }

        .kd-step-card {
            width: 155px;
            padding: 16px 14px 18px;
        }

        .kd-step-top {
            margin-bottom: 12px;
        }

        .kd-step-icon {
            width: 46px;
            height: 46px;
        }

        .kd-step-num {
            font-size: 21px;
        }

        .kd-step-card h3 {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .kd-step-card p {
            font-size: 11.5px;
            line-height: 1.5;
        }

        /* Adjust card positions */
        .kd-step-1 {
            left: 0%;
            top: 145px;
        }

        .kd-step-2 {
            left: 17%;
            top: 265px;
        }

        .kd-step-3 {
            left: 34%;
            top: 120px;
        }

        .kd-step-4 {
            left: 50%;
            top: 325px;
        }

        .kd-step-5 {
            left: 66%;
            top: 90px;
        }

        .kd-step-6 {
            left: 81%;
            top: 285px;
        }
    }


    /* ================================
   TABLET
   768px - 991px
================================ */
    @media (min-width: 768px) and (max-width: 991px) {

        .kd-steps-section {
            padding: 45px 25px 65px;
        }

        .kd-steps-title {
            max-width: 700px;
            margin-bottom: 55px;
            font-size: 23px;
        }

        .kd-steps-scroll-wrapper {
            overflow-x: hidden;
        }

        .kd-steps-stage {
            max-width: 720px;
            min-width: 0;
            height: 540px;
        }

        .kd-step-card {
            width: 135px;
            padding: 14px 12px 16px;
            border-radius: 9px;
        }

        .kd-step-top {
            margin-bottom: 10px;
        }

        .kd-step-icon {
            width: 40px;
            height: 40px;
        }

        .kd-step-num {
            font-size: 18px;
        }

        .kd-step-card h3 {
            font-size: 12.5px;
            margin-bottom: 7px;
        }

        .kd-step-card p {
            font-size: 10.5px;
            line-height: 1.45;
        }

        .kd-step-1 {
            left: 0%;
            top: 130px;
        }

        .kd-step-2 {
            left: 17%;
            top: 245px;
        }

        .kd-step-3 {
            left: 34%;
            top: 110px;
        }

        .kd-step-4 {
            left: 50%;
            top: 300px;
        }

        .kd-step-5 {
            left: 66%;
            top: 80px;
        }

        .kd-step-6 {
            left: 81%;
            top: 265px;
        }


    }

    @media (min-width: 481px) and (max-width: 767px) {

        .kd-steps-section {
            padding: 45px 20px 60px;
        }

        .kd-steps-title {
            max-width: 600px;
            margin-bottom: 45px;
            font-size: 21px;
        }

        .kd-steps-scroll-wrapper {
            overflow-x: visible;
        }

        .aldjoq531 {
            display: none !important;
        }

        .kd-steps-stage {
            height: auto;
            min-width: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 26px;
            margin-top: 52px;
            position: relative;
            padding-left: 22px;
        }

        .kd-steps-stage:before {
            content: "";
            position: absolute;
            left: 32px;
            top: 8px;
            bottom: 8px;
            border-left: 2px dashed #F85F3A;
        }

        .kd-steps-connectors {
            display: none;
        }

        .kd-scroll-dot-mobile {
            display: block;
            position: absolute;
            left: 26px;
        }

        .kd-step-card,
        .kd-steps-endpoint {
            position: static;
            width: 100%;
            max-width: 480px;
        }

        .kd-step-card {
            width: calc(100% - 22px);
            padding: 17px 17px 19px;
        }

        .kd-step-top {
            margin-bottom: 13px;
        }

        .kd-step-icon {
            width: 48px;
            height: 48px;
        }

        .kd-step-num {
            font-size: 21px;
        }

        .kd-step-card h3 {
            font-size: 15px;
        }

        .kd-step-card p {
            font-size: 12.5px;
            line-height: 1.55;
        }

        .kd-steps-endpoint {
            flex-direction: row;
            align-items: center;
            gap: 10px;
            align-self: flex-start;
            padding-left: 2px;
        }

        .kd-steps-endpoint .kd-dot {
            margin-left: 6px;
        }

        .kd-step-1 {
            order: 2;
        }

        .kd-step-2 {
            order: 3;
        }

        .kd-step-3 {
            order: 4;
        }

        .kd-step-4 {
            order: 5;
        }

        .kd-step-5 {
            order: 6;
        }

        .kd-step-6 {
            order: 7;
        }

        .kd-start {
            order: 1;
        }

        .kd-end {
            order: 8;
        }

    }


    /* ================================
   SMALL MOBILE
   320px - 480px
================================ */
    @media (max-width: 480px) {

        .kd-steps-section {
            padding: 40px 15px 55px;
        }

        .kd-steps-title {
            max-width: 100%;
            margin-bottom: 38px;
            font-size: 20px;
            line-height: 1.4;
            padding: 25px 15px !important;
        }

        .kd-steps-scroll-wrapper {
            overflow-x: visible;
        }

        .kd-steps-stage {
            height: auto;
            min-width: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 22px;
            padding-left: 20px;
        }

        .kd-steps-stage:before {
            left: 26px;
            top: 8px;
            bottom: 8px;
            border-left: 2px dashed #F85F3A;
        }

        .kd-scroll-dot-mobile {
            display: block;
            left: 20px;
            width: 12px;
            height: 12px;
        }

        .kd-step-card {
            width: calc(100% - 20px);
            max-width: 380px;
            padding: 15px 15px 17px;
            border-radius: 9px;
        }

        .kd-step-top {
            margin-bottom: 11px;
        }

        .kd-step-icon {
            width: 43px;
            height: 43px;
        }

        .kd-step-num {
            font-size: 19px;
        }

        .kd-step-card h3 {
            font-size: 14px;
            margin-bottom: 7px;
        }

        .kd-step-card p {
            font-size: 12px;
            line-height: 1.5;
            -webkit-line-clamp: 3;
        }

        .kd-steps-endpoint {
            flex-direction: row;
            align-items: center;
            gap: 8px;
            align-self: flex-start;
            padding-left: 0;
        }

        .kd-steps-endpoint .kd-dot {
            width: 10px;
            height: 10px;
            margin-left: 6px;
        }

        .kd-steps-endpoint span.kd-label {
            font-size: 13px;
        }

        .kd-step-1 {
            order: 2;
        }

        .kd-step-2 {
            order: 3;
        }

        .kd-step-3 {
            order: 4;
        }

        .kd-step-4 {
            order: 5;
        }

        .kd-step-5 {
            order: 6;
        }

        .kd-step-6 {
            order: 7;
        }

        .kd-start {
            order: 1;
        }

        .kd-end {
            order: 8;
        }


        .aldjoq531 {
            display: none;
        }
    }

    @media (max-width:744px) {

        .kd-steps-stage {
            position: relative !important;
        }

        .kd-scroll-dot-mobile {
            display: block;
            position: absolute;
            left: 26px;

            width: 14px;
            height: 14px;

            border-radius: 50%;
            background: #F85F3A;

            box-shadow:
                0 0 0 4px rgba(248, 95, 58, .18),
                0 0 14px 4px rgba(248, 95, 58, .55);

            z-index: 10;

            transition: top .08s linear;
            pointer-events: none;
        }
    }


    .your-element {
        animation: upDown 2.5s ease-in-out infinite;
    }

    @keyframes upDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    .your-element2 {
        animation: downUp 2s ease-in-out infinite reverse;
    }

    @keyframes downUp {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(15px);
        }

        100% {
            transform: translateY(0);
        }
    }



    @media (max-width:744px) {

        .your-element {
            animation: none;
        }

        .your-element2{
            animation: none;
        }

    }
</style>


<section class="kd-steps-section">
    <h2 class="kd-steps-title">You're Just A Few Steps Closer To Getting Your Digital Marketing with AI Course Certification</h2>

    <div class="kd-steps-scroll-wrapper">
        <div class="kd-steps-stage" id="kdStepsStage">

            <div class="kd-scroll-dot-mobile" id="kdScrollDotMobile"></div>

            <span class="aldjoq531">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 1063.2 558" style="enable-background:new 0 0 1063.2 558;" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: none;
                            stroke: #B9D719;
                            stroke-dasharray: 8, 8;
                        }

                        .st1 {
                            fill: #B9D719;
                        }
                    </style>
                    <path id="Path_8693" class="st0" d="M12.8,470.6c0,0-68-466.2,115.4-470.1s-21.9,552.5,176,551.6S299.4,1.6,526.4,0.5
	s2.6,556.3,207.6,557s8.9-552.3,205.2-557s99.7,520.8,99.7,520.8" />
                    <circle class="st1" cx="13.7" cy="474.1" r="5" />
                    <circle class="st1" cx="1038.9" cy="522" r="5" />
                </svg>
            </span>

            <!-- Card 1 -->
            <article class="kd-step-card kd-step-1 your-element">
                <div class="kd-step-top">
                    <div class="kd-step-icon kd-step-icon-blank"></div>
                    <span class="kd-step-num">01</span>
                </div>
                <h3>Follow 3A</h3>
                <p>Our structured learning model focuses on Attendance, Assignment &amp; Assessment, encouraging consistency and helping you achieve a success score.</p>
            </article>

            <!-- Card 2 -->
            <article class="kd-step-card kd-step-2 your-element2">
                <div class="kd-step-top">
                    <div class="kd-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="7" r="3" />
                            <path d="M5 21v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2" />
                            <circle cx="4" cy="9" r="2" />
                            <circle cx="20" cy="9" r="2" />
                        </svg>
                    </div>
                    <span class="kd-step-num">02</span>
                </div>
                <h3>Industry-Specific Skills</h3>
                <p>Gain hands-on expertise with tools and technologies tailored to high-demand roles in data, development, cloud, testing and marketing.</p>
            </article>

            <!-- Card 3 -->
            <article class="kd-step-card kd-step-3 your-element">
                <div class="kd-step-top">
                    <div class="kd-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="3" width="14" height="18" rx="2" />
                            <circle cx="12" cy="9" r="2.5" />
                            <path d="M9 17c.6-1.6 2-2.5 3-2.5s2.4.9 3 2.5" />
                            <path d="M15.5 5.5l1 1 2-2" />
                        </svg>
                    </div>
                    <span class="kd-step-num">03</span>
                </div>
                <h3>Profile Building</h3>
                <p>Get expert guidance on resume creation, LinkedIn, and web portfolio development to confidently present your skills to employers.</p>
            </article>

            <!-- Card 4 -->
            <article class="kd-step-card kd-step-4 your-element2">
                <div class="kd-step-top">
                    <div class="kd-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="4" y="3" width="16" height="18" rx="1.5" />
                            <path d="M8 8h8M8 12h8M8 16h5" />
                        </svg>
                    </div>
                    <span class="kd-step-num">04</span>
                </div>
                <h3>Exam</h3>
                <p>Clear the final evaluation exam designed to test your technical understanding and practical readiness to conquer real-world challenges.</p>
            </article>

            <!-- Card 5 -->
            <article class="kd-step-card kd-step-5 your-element">
                <div class="kd-step-top">
                    <div class="kd-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="6" width="18" height="12" rx="2" />
                            <circle cx="9" cy="12" r="2.2" />
                            <path d="M14 10h4M14 14h3" />
                        </svg>
                    </div>
                    <span class="kd-step-num">05</span>
                </div>
                <h3>Global Certification</h3>
                <p>Earn globally recognized certifications that validate your expertise and enhance your professional credibility across industries.</p>
            </article>

            <!-- Card 6 -->
            <article class="kd-step-card kd-step-6 your-element2">
                <div class="kd-step-top">
                    <div class="kd-step-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3 2 8l10 5 10-5-10-5Z" />
                            <path d="M6 10.5V16c0 1.5 2.7 3 6 3s6-1.5 6-3v-5.5" />
                        </svg>
                    </div>
                    <span class="kd-step-num">06</span>
                </div>
                <h3>Integrated Internship</h3>
                <p>Apply your knowledge in real projects and case studies through an internship that prepares you to understand workplace challenges and build credibility.</p>
            </article>

            <!-- Start with -->
            <!-- <div class="kd-steps-endpoint kd-start">
                <span class="kd-dot"></span>
                <span class="kd-label">Start with</span>
            </div> -->

            <!-- Happy Ending -->
            <!-- <div class="kd-steps-endpoint kd-end">
                <span class="kd-dot"></span>
                <span class="kd-label">Happy Ending</span>
            </div> -->

        </div>
    </div>
</section>



<script>
    (function() {

        const stage = document.getElementById('kdStepsStage');
        const mobileDot = document.getElementById('kdScrollDotMobile');

        /*
         * Mobile/tablet breakpoint must match the CSS.
         * Your mobile layout starts at 767px.
         */
        const mq = window.matchMedia('(max-width: 767px)');

        if (!stage || !mobileDot) return;


        function clamp(value, min, max) {
            return Math.max(min, Math.min(max, value));
        }


        function updateMobileDot() {

            /*
             * Desktop par mobile dot hide rahega.
             */
            if (!mq.matches) {
                mobileDot.style.display = 'none';
                return;
            }

            mobileDot.style.display = 'block';


            const rect = stage.getBoundingClientRect();
            const stageHeight = stage.offsetHeight;

            const viewportHeight =
                window.innerHeight ||
                document.documentElement.clientHeight;


            /*
             * Scroll progress:
             *
             * Stage jab viewport ke bottom par enter kare
             *       = 0%
             *
             * Stage jab viewport ke top ko cross kare
             *       = 100%
             */
            const startPoint = viewportHeight;
            const endPoint = -stageHeight;


            let progress =
                (startPoint - rect.top) /
                (startPoint - endPoint);


            progress = clamp(progress, 0, 1);


            /*
             * Dashed line ke actual top/bottom ke according
             * dot ko move karna hai.
             */
            const lineTop = 8;
            const lineBottom = Math.max(lineTop, stageHeight - 8);


            const y =
                lineTop +
                progress * (lineBottom - lineTop);


            mobileDot.style.top = y + 'px';
        }


        /*
         * Scroll par dot update.
         */
        window.addEventListener('scroll', updateMobileDot, {
            passive: true
        });


        /*
         * Resize par position recalculate.
         */
        window.addEventListener('resize', updateMobileDot);


        /*
         * Mobile <-> desktop breakpoint change.
         */
        if (mq.addEventListener) {
            mq.addEventListener('change', updateMobileDot);
        } else {
            mq.addListener(updateMobileDot);
        }


        /*
         * Initial position.
         */
        updateMobileDot();

    })();
</script>