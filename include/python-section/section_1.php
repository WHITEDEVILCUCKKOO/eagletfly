<!-- python_course-section -->
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap'); */


    .kd-podcast-hero-2026,
    .kd-podcast-hero-2026 * {
        box-sizing: border-box;
    }

    .kd-podcast-hero-2026 * {
        min-width: 0;
    }


    .kd-podcast-hero-2026 {

        position: relative;

        width: 100%;

        min-height: 590px;

        display: flex;

        align-items: center;

        overflow: hidden;

        /* REDUCED FROM 70PX */
        padding: 42px 0;

        /* font-family:
            'Manrope',
            Arial,
            sans-serif; */

        /* background:
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
                #17102B 100%); */


                background:
            radial-gradient(circle at 8% 12%,
                rgba(55, 118, 171, .24),
                transparent 32%),
 
            radial-gradient(circle at 93% 8%,
                rgba(255, 212, 59, .14),
                transparent 34%),
 
            radial-gradient(circle at 58% 100%,
                rgba(72, 96, 205, .14),
                transparent 36%),
 
            linear-gradient(135deg,
                #050810 0%,
                #081020 32%,
                #0B1830 66%,
                #0E1E3D 100%);
    }

    .kd-podcast-hero-noise {

        position: absolute;

        inset: 0;

        pointer-events: none;

        opacity: .14;

        background-image:
            radial-gradient(rgba(255, 255, 255, .10) .65px,
                transparent .65px);

        background-size:
            26px 26px;
    }


    .kd-podcast-hero-light {

        position: absolute;

        pointer-events: none;

        border-radius: 50%;
    }


    .kd-light-left {

        width: 450px;

        height: 450px;

        left: -300px;

        bottom: -250px;

        background:
            radial-gradient(circle,
                rgba(255, 101, 47, .18),
                transparent 68%);
    }


    .kd-light-right {

        width: 520px;

        height: 520px;

        right: -310px;

        top: -280px;

        background:
            radial-gradient(circle,
                rgba(127, 87, 218, .18),
                transparent 68%);
    }



    .kd-podcast-hero-wrap {

        position: relative;

        z-index: 3;

        width: min(1200px,
                calc(100% - 40px));

        margin: 0 auto;
    }


    .kd-podcast-hero-grid {

        display: grid;

        grid-template-columns: 1.5fr 380px;

        align-items: center;

        gap: 10px;
    }


    .kd-podcast-hero-copy {

        position: relative;

        z-index: 4;

        animation:
            kdPodcastContentIn .85s cubic-bezier(.22, 1, .36, 1) both;
    }


    @keyframes kdPodcastContentIn {

        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }

    }


    /* EYEBROW */

    .kd-podcast-eyebrow {

        display: flex;

        align-items: center;

        gap: 10px;

        margin-bottom: 13px;

        color: #ff7a49;

        font-size: 10px;

        line-height: 1.3;

        font-weight: 800;

        letter-spacing: .14em;
    }


    .kd-podcast-eyebrow-line {

        width: 35px;

        height: 2px;

        flex: 0 0 35px;

        background:
            linear-gradient(90deg,
                #ff6b2b,
                #ed4b50);
    }


    .kd-podcast-hero-copy h1 {

        max-width: 670px;

        margin: 0;

        color: #ffffff;

        font-size: 44px;

        line-height: 1.03;

        letter-spacing: -.058em;

        font-weight: 800;
    }


    .kd-podcast-hero-copy h1 span {

        display: inline-block;

        padding-bottom: 5px;

        background:
            linear-gradient(90deg,
                #ff7a3d,
                #f04f61 42%,
                #a578ef 72%,
                #6f9dff 100%);

        -webkit-background-clip: text;

        background-clip: text;

        -webkit-text-fill-color: transparent;
    }



    .kd-podcast-hero-desc {

        max-width: 610px;

        margin: 17px 0 0;

        color: #aeb7c8;

        font-size: 13.5px;

        line-height: 1.72;

        font-weight: 500;
    }



    .kd-podcast-hero-actions {

        display: flex;

        flex-wrap: wrap;

        align-items: center;

        gap: 10px;

        margin-top: 23px;
    }


    .kd-podcast-hero-btn,
    .kd-podcast-hero-btn:hover,
    .kd-podcast-hero-btn:focus,
    .kd-podcast-hero-btn:active {

        min-height: 52px;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 9px;

        border-radius: 11px;

        /* font-family:
            'Manrope',
            Arial,
            sans-serif !important; */

        font-size: 12px !important;

        line-height: 1 !important;

        font-weight: 800 !important;

        text-decoration: none !important;

        outline: none !important;

        transition:
            transform .24s ease,
            box-shadow .24s ease,
            border-color .24s ease;
    }


    .kd-podcast-primary,
    .kd-podcast-primary:hover,
    .kd-podcast-primary:focus,
    .kd-podcast-primary:active {

        padding:
            0 10px 0 19px;

        color: #ffffff !important;

        border:
            1px solid transparent !important;

        background:
            linear-gradient(135deg,
                #ff6929,
                #ed474a 58%,
                #805bd8) !important;

        box-shadow:
            0 13px 30px rgba(235, 74, 51, .19) !important;
    }


    .kd-podcast-primary:hover {

        transform: translateY(-2px);
    }


    .kd-podcast-btn-arrow {

        width: 33px;

        height: 33px;

        flex: 0 0 33px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 8px;

        color: #ffffff;

        background:
            rgba(255, 255, 255, .15);
    }


    .kd-podcast-btn-arrow svg {

        width: 19px;

        height: 19px;
    }


    .kd-podcast-secondary,
    .kd-podcast-secondary:hover,
    .kd-podcast-secondary:focus,
    .kd-podcast-secondary:active {

        padding:
            0 18px;

        color: #ffffff !important;

        border:
            1px solid rgba(255, 255, 255, .16) !important;

        background:
            rgba(255, 255, 255, .055) !important;

        box-shadow: none !important;
    }


    .kd-podcast-secondary:hover {

        transform: translateY(-2px);

        border-color:
            rgba(255, 255, 255, .30) !important;

        background:
            rgba(255, 255, 255, .09) !important;
    }


    .kd-podcast-btn-play {

        width: 29px;

        height: 29px;

        flex: 0 0 29px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 8px;

        color: #ff7a49;

        background:
            rgba(255, 122, 73, .12);
    }


    .kd-podcast-btn-play svg {

        width: 16px;

        height: 16px;
    }

    .kd-podcast-hero-meta {

        /* max-width: 600px; */

        margin-top: 23px;

        padding:
            13px 14px;

        display: flex;
        flex-wrap: wrap;

        align-items: center;

        gap: 15px;

        border:
            1px solid rgba(255, 255, 255, .10);

        border-radius: 15px;

        background:
            rgba(255, 255, 255, .045);

        box-shadow:
            0 12px 34px rgba(0, 0, 0, .14);

        backdrop-filter:
            blur(10px);
    }


    .kd-podcast-meta-item {

        flex: 1;

        display: flex;

        align-items: center;

        gap: 9px;
    }


    .kd-podcast-meta-icon {

        width: 34px;

        height: 34px;

        flex: 0 0 34px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 9px;

        color: #ff7445;

        background:
            rgba(255, 116, 69, .12);
    }


    .kd-podcast-meta-item:nth-of-type(3) .kd-podcast-meta-icon {

        color: #a87ef0;

        background:
            rgba(128, 91, 216, .13);
    }


    .kd-podcast-meta-item:nth-of-type(5) .kd-podcast-meta-icon {

        color: #77a7f5;

        background:
            rgba(77, 131, 221, .13);
    }


    .kd-podcast-meta-icon svg {

        width: 20px;

        height: 20px;
    }


    .kd-podcast-meta-item small {

        display: block;

        color: #788399;

        font-size: 9.5px;

        font-weight: 800;

        letter-spacing: .08em;
    }


    .kd-podcast-meta-item strong {

        display: block;

        margin-top: 3px;

        color: #f5f7fb;

        font-size: 13.5px;

        line-height: 1.2;

        font-weight: 800;
    }


    .kd-podcast-meta-divider {

        width: 1px;

        height: 33px;

        flex: 0 0 1px;

        background:
            rgba(255, 255, 255, .10);
    }



    .kd-podcast-studio-visual {

        position: relative;

        min-height: clamp(300px, 45vw, 490px);
    }


    .kd-podcast-studio-number {

        position: absolute;

        right: -4px;

        top: -20px;

        z-index: 0;

        color:
            rgba(255, 255, 255, .035);

        font-size: 160px;

        line-height: 1;

        font-weight: 800;

        letter-spacing: -.10em;
    }


    .kd-podcast-main-shot {

        position: absolute;
        z-index: 2;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) !important;
        width: min(89%, 480px);
        height: clamp(200px, 65vw, 355px);
        overflow: hidden;
        border-radius: 24px;
        background:
            radial-gradient(circle at 8% 12%,
                rgba(43, 42, 42, 0.18),
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
        box-shadow: 0 32px 78px rgba(158, 157, 157, 0.38);
        animation: kdPodcastMainReveal .9s .12s cubic-bezier(.22, 1, .36, 1) both;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;

    }




    @keyframes kdPodcastMainReveal {

        from {
            opacity: 0;
            transform:
                translateY(20px) scale(.98);
        }

        to {
            opacity: 1;
            transform:
                translateY(0) scale(1);
        }

    }


    /* ===== PYTHON LOGO ANIMATION (replaces the old <img>) ===== */

    .kd-python-visual {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Soft pulsing glow behind the logo */
    .kd-python-glow {
        position: absolute;
        z-index: 0;
        width: clamp(180px, 32vw, 340px);
        height: clamp(180px, 32vw, 340px);
        border-radius: 50%;
        background:
            radial-gradient(circle,
                rgba(55, 118, 171, .40) 0%,
                rgba(255, 212, 59, .28) 42%,
                transparent 72%);
        filter: blur(28px);
        opacity: 0;
        animation: kdGlowFadeIn .8s 2.4s ease-out forwards,
                   kdGlowPulse 3.2s 3.2s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes kdGlowFadeIn {
        to {
            opacity: 1;
        }
    }

    @keyframes kdGlowPulse {

        0%,
        100% {
            opacity: .55;
            transform: scale(.92);
        }

        50% {
            opacity: 1;
            transform: scale(1.08);
        }
    }

    .kd-python-logo-container {
        position: relative;
        z-index: 1;
        width: clamp(120px, 20vw, 230px);
        height: clamp(120px, 20vw, 230px);
        filter:
            drop-shadow(0 15px 30px rgba(0, 0, 0, 0.45))
            drop-shadow(0 0 0 rgba(255, 212, 59, 0));
        animation: kdLogoFloat 3.6s 3s ease-in-out infinite;
    }

    @keyframes kdLogoFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-9px);
        }
    }

    .kd-python-logo-container svg {
        width: 100%;
        height: 100%;
        overflow: visible;
    }

    /* Glowing outline while each snake half draws itself */
    .kd-podcast-studio-visual.kd-in-view .kd-snake-blue,
    .kd-podcast-studio-visual.kd-in-view .kd-snake-yellow {
        animation-name: kdDrawPath, kdFillColor, kdStrokeGlow;
        animation-duration: 2.5s, 1s, 2.5s;
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1), ease-out, ease-in-out;
        animation-fill-mode: forwards, forwards, forwards;
    }

    .kd-podcast-studio-visual.kd-in-view .kd-snake-yellow {
        animation-delay: 0.4s, 2.4s, 0.4s;
    }

    .kd-podcast-studio-visual.kd-in-view .kd-snake-blue {
        animation-delay: 0s, 2.2s, 0s;
    }

    @keyframes kdStrokeGlow {

        0% {
            filter: drop-shadow(0 0 0 rgba(255, 255, 255, 0));
        }

        60% {
            filter: drop-shadow(0 0 6px currentColor);
        }

        100% {
            filter: drop-shadow(0 0 0 rgba(255, 255, 255, 0));
        }
    }

    /* Gentle continuous glow pulse on the finished logo container */
    .kd-podcast-studio-visual.kd-in-view .kd-python-logo-container {
        animation: kdLogoFloat 3.6s 3s ease-in-out infinite,
                   kdLogoGlowPulse 3.2s 3.2s ease-in-out infinite;
    }

    @keyframes kdLogoGlowPulse {

        0%,
        100% {
            filter:
                drop-shadow(0 15px 30px rgba(0, 0, 0, 0.45))
                drop-shadow(0 0 10px rgba(255, 212, 59, .25))
                drop-shadow(0 0 14px rgba(55, 118, 171, .25));
        }

        50% {
            filter:
                drop-shadow(0 15px 30px rgba(0, 0, 0, 0.45))
                drop-shadow(0 0 22px rgba(255, 212, 59, .5))
                drop-shadow(0 0 26px rgba(55, 118, 171, .5));
        }
    }

    /* Paused by default — only runs once the section scrolls into view */
    .kd-snake-blue,
    .kd-snake-yellow {
        fill-opacity: 0;
        stroke-width: 2.5;
        stroke-dasharray: 600;
        stroke-dashoffset: 600;
        animation-play-state: paused;
    }

    .kd-snake-blue {
        stroke: #3776ab;
        fill: #3776ab;
    }

    .kd-snake-yellow {
        stroke: #ffd43b;
        fill: #ffd43b;
    }

    .kd-python-eye {
        transform-origin: center;
        transform: scale(0);
        animation-play-state: paused;
    }

    /* Class added by JS (IntersectionObserver) when section enters viewport */
    .kd-podcast-studio-visual.kd-in-view .kd-snake-blue {
        animation: kdDrawPath 2.5s cubic-bezier(0.4, 0, 0.2, 1) forwards,
                   kdFillColor 1s 2.2s ease-out forwards;
        animation-play-state: running;
    }

    .kd-podcast-studio-visual.kd-in-view .kd-snake-yellow {
        animation: kdDrawPath 2.5s cubic-bezier(0.4, 0, 0.2, 1) forwards,
                   kdFillColor 1s 2.2s ease-out forwards;
        animation-delay: 0.4s, 2.4s;
        animation-play-state: running;
    }

    .kd-podcast-studio-visual.kd-in-view .kd-python-eye {
        animation: kdPopEye 0.4s 2.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        animation-play-state: running;
    }

    @keyframes kdDrawPath {
        0% {
            stroke-dashoffset: 600;
        }

        100% {
            stroke-dashoffset: 0;
        }
    }

    @keyframes kdFillColor {
        0% {
            fill-opacity: 0;
        }

        100% {
            fill-opacity: 1;
            stroke-width: 0;
        }
    }

    @keyframes kdPopEye {
        0% {
            transform: scale(0);
        }

        100% {
            transform: scale(1);
        }
    }

    /* ===== END PYTHON LOGO ANIMATION ===== */


    .kd-podcast-shot-overlay {

        position: absolute;

        inset: 0;

        background:
            linear-gradient(180deg,
                rgba(7, 10, 16, .13) 0%,
                rgba(7, 10, 16, .05) 45%,
                rgba(7, 10, 16, .78) 100%);

        pointer-events: none;
    }


    /* IMAGE TOP */

    .kd-podcast-shot-top {

        position: absolute;

        z-index: 4;

        top: 15px;

        left: 15px;

        right: 15px;

        display: flex;

        align-items: center;

        justify-content: space-between;
    }


    .kd-podcast-rec {

        min-height: 29px;

        padding:
            0 10px;

        display: flex;

        align-items: center;

        gap: 7px;

        border-radius: 8px;

        color: #ffffff;

        background:
            rgba(13, 16, 24, .72);

        backdrop-filter:
            blur(7px);

        font-size: 7px;

        font-weight: 800;

        letter-spacing: .08em;
    }


    .kd-podcast-rec span {

        width: 8px;

        height: 8px;

        border-radius: 50%;

        background: #ff5e58;

        box-shadow:
            0 0 0 4px rgba(255, 94, 88, .12);

        animation:
            kdPodcastRecBlink 1.1s ease-in-out infinite;
    }


    @keyframes kdPodcastRecBlink {

        50% {
            opacity: .25;
        }

    }


    .kd-podcast-camera-text {

        color: #ffffff;

        font-size: 7px;

        font-weight: 800;

        letter-spacing: .09em;
    }


    /* IMAGE BOTTOM */

    .kd-podcast-shot-bottom {

        position: absolute;

        z-index: 4;

        left: 20px;

        right: 20px;

        bottom: 18px;

        display: flex;

        align-items: flex-end;

        justify-content: space-between;

        gap: 15px;
    }


    .kd-podcast-shot-bottom small {

        display: block;

        color: #ff8454;

        font-size: 7px;

        font-weight: 800;

        letter-spacing: .10em;
    }


    .kd-podcast-shot-bottom strong {

        display: block;

        max-width: 285px;

        margin-top: 5px;

        color: #ffffff;

        font-size: 15px;

        line-height: 1.35;

        font-weight: 750;
    }


    .kd-podcast-timecode {

        color:
            rgba(255, 255, 255, .66);

        font-size: 8px;

        font-weight: 700;
    }


    .kd-podcast-production-card {

        position: absolute;

        z-index: 8;

        left: 55px;

        bottom: 14px;

        min-width: 235px;

        padding:
            12px 14px;

        display: flex;

        align-items: center;

        gap: 11px;

        border:
            1px solid rgba(255, 255, 255, .12);

        border-radius: 14px;

        background:
            rgba(17, 20, 32, .92);

        box-shadow:
            0 18px 42px rgba(0, 0, 0, .28);

        backdrop-filter:
            blur(10px);

        animation:
            kdPodcastFloat 4s ease-in-out infinite;
    }


    @keyframes kdPodcastFloat {

        50% {
            transform: translateY(-7px);
        }

    }


    .kd-podcast-production-icon {

        width: 39px;

        height: 39px;

        flex: 0 0 39px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 11px;

        color: #ff7447;

        background:
            rgba(255, 116, 71, .12);
    }


    .kd-podcast-production-icon svg {

        width: 20px;

        height: 20px;
    }


    .kd-podcast-production-card small {

        display: block;

        color: #7d8799;

        font-size: 9.5px;

        font-weight: 800;

        letter-spacing: .08em;
    }


    .kd-podcast-production-card strong {

        display: block;

        margin-top: 4px;

        color: #ffffff;

        font-size: 13.5px;

        font-weight: 800;
    }


    @media(max-width:1024px) {

        .kd-podcast-hero-2026 {

            min-height: 560px;

            padding:
                38px 0;
        }


        .kd-podcast-hero-wrap {

            width: min(960px,
                    calc(100% - 36px));
        }


        .kd-podcast-hero-grid {

            grid-template-columns:
                minmax(0, 1fr) 470px;

            gap: 42px;
        }


        .kd-podcast-hero-copy h1 {

            font-size: 50px;
        }


        .kd-podcast-hero-desc {

            font-size: 14.5px;
        }


        .kd-podcast-studio-visual {

            min-height: 450px;
        }


        .kd-podcast-main-shot {

            height: 380px;
        }

    }


    @media(max-width:767px) {

        .kd-podcast-hero-2026 {

            min-height: auto;

            padding:
                32px 0 34px;
        }


        .kd-podcast-hero-wrap {

            width:
                calc(100% - 28px);

            max-width: 590px;
        }


        .kd-podcast-hero-grid {

            grid-template-columns: 1fr;

            gap: 27px;
        }


        .kd-podcast-hero-copy {

            text-align: center;
            padding:80px 30px 30px;
        }


        .kd-podcast-eyebrow {

            justify-content: center;

            margin-bottom: 11px;

            font-size: 8.5px;
        }


        .kd-podcast-eyebrow-line {

            width: 28px;

            flex-basis: 28px;
        }


        .kd-podcast-hero-copy h1 {

            max-width: 540px;

            margin: 0 auto;

            font-size: 37px;

            line-height: 1.09;
        }


        .kd-podcast-hero-desc {

            max-width: 530px;

            margin:
                14px auto 0;

            font-size: 14px;

            line-height: 1.7;
        }


        /* BUTTONS SAME ROW */

        .kd-podcast-hero-actions {

            display: grid;

            grid-template-columns:
                repeat(2,
                    minmax(0, 1fr));

            gap: 8px;

            margin-top: 19px;
        }


        .kd-podcast-hero-btn,
        .kd-podcast-hero-btn:hover,
        .kd-podcast-hero-btn:focus,
        .kd-podcast-hero-btn:active {

            width: 100%;

            min-height: 48px;

            font-size: 10px !important;
        }


        .kd-podcast-primary {

            padding:
                0 6px 0 11px;
        }


        .kd-podcast-secondary {

            padding:
                0 10px;
        }


        /* META */

        .kd-podcast-hero-meta {

            margin:
                18px auto 0;

            padding:
                11px 9px;

            gap: 8px;

            text-align: left;
        }


        .kd-podcast-meta-item {

            gap: 6px;
        }


        .kd-podcast-meta-icon {

            width: 29px;

            height: 29px;

            flex-basis: 29px;
        }


        .kd-podcast-meta-icon svg {

            width: 14px;

            height: 14px;
        }


        .kd-podcast-meta-item strong {

            font-size: 7.7px;
        }


        .kd-podcast-meta-item small {

            font-size: 5.7px;
        }


        /* VISUAL */

        .kd-podcast-studio-visual {

            min-height: 425px;

            max-width: 510px;

            width: 100%;

            margin: 0 auto;
        }


        .kd-podcast-main-shot {
            bottom: 19px;
            left: 50%;
            width: 80%;
        }

    }


    @media(max-width:420px) {

        .kd-podcast-hero-2026 {

            padding:
                28px 0 30px;
        }


        .kd-podcast-hero-wrap {

            width:
                calc(100% - 24px);
        }


        .kd-podcast-hero-grid {

            gap: 22px;
        }


        .kd-podcast-hero-copy h1 {

            font-size: 31px;
        }


        .kd-podcast-hero-desc {

            margin-top: 12px;

            font-size: 13px;
        }


        .kd-podcast-hero-actions {

            margin-top: 16px;

            gap: 6px;
        }


        .kd-podcast-hero-btn,
        .kd-podcast-hero-btn:hover,
        .kd-podcast-hero-btn:focus,
        .kd-podcast-hero-btn:active {

            min-height: 45px;

            font-size: 8.7px !important;
        }


        .kd-podcast-btn-arrow {

            width: 28px;

            height: 28px;

            flex-basis: 28px;
        }


        .kd-podcast-btn-arrow svg {

            width: 16px;

            height: 16px;
        }


        .kd-podcast-btn-play {

            width: 26px;

            height: 26px;

            flex-basis: 26px;
        }


        .kd-podcast-hero-meta {

            margin-top: 15px;

            padding:
                9px 7px;

            gap: 5px;
        }


        .kd-podcast-meta-divider {

            height: 29px;
        }


        .kd-podcast-meta-icon {

            width: 25px;

            height: 25px;

            flex-basis: 25px;
        }


        .kd-podcast-meta-item strong {

            font-size: 6.9px;
        }


        .kd-podcast-meta-item small {

            font-size: 5px;
        }


        /* VISUAL */

        .kd-podcast-studio-visual {

            min-height: 370px;
        }


        .kd-podcast-studio-number {

            top: -10px;

            font-size: 110px;
        }


        .kd-podcast-main-shot {

            top: 15px;

            left: 2%;

            width: 82%;

            border-radius: 18px;
        }

    }



    @media(prefers-reduced-motion:reduce) {

        .kd-podcast-hero-copy,
        .kd-podcast-main-shot {

            animation: none !important;
        }

        .kd-podcast-studio-visual.kd-in-view .kd-snake-blue,
        .kd-podcast-studio-visual.kd-in-view .kd-snake-yellow,
        .kd-podcast-studio-visual.kd-in-view .kd-python-eye,
        .kd-python-logo-container,
        .kd-podcast-studio-visual.kd-in-view .kd-python-logo-container,
        .kd-python-glow {
            animation: none !important;
            fill-opacity: 1 !important;
            stroke-dashoffset: 0 !important;
            transform: scale(1) !important;
            opacity: 1 !important;
        }

    }
</style>

<section class="kd-podcast-hero-2026">

    <!-- BACKGROUND -->
    <div class="kd-podcast-hero-noise"></div>
    <div class="kd-podcast-hero-light kd-light-left"></div>
    <div class="kd-podcast-hero-light kd-light-right"></div>

    <div class="kd-podcast-hero-wrap">

        <div class="kd-podcast-hero-grid">

            <!-- LEFT CONTENT -->
            <div class="kd-podcast-hero-copy">

                <div class="kd-podcast-eyebrow">
                    <span class="kd-podcast-eyebrow-line"></span>
                    PYTHON PROGRAMMING COURSE
                </div>

                <h1>
                    Master Python Programming
                    <span> Course In Delhi </span> &
                    get job-ready in 6 Months

                </h1>

                <p class="kd-podcast-hero-desc">
                    Live Projects ∙ Placement Assistance ∙ Industry Trainers — learn Python from senior developers working at India's top product companies.
                </p>

                <!-- CTA -->
                <div class="kd-podcast-hero-actions">

                    <a href="#contact"
                        class="kd-podcast-hero-btn kd-podcast-primary">

                        Book Demo

                        <span class="kd-podcast-btn-arrow">

                            <svg viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M5 12H19M13 6L19 12L13 18"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </span>

                    </a>

                    <a href="#python-curriculum"
                        class="kd-podcast-hero-btn kd-podcast-secondary">



                        View Curriculum
                    </a>

                </div>


                <!-- SMALL INFO -->
                <div class="kd-podcast-hero-meta">

                    <div class="kd-podcast-meta-item">

                        🕐

                        <div>
                            <small>6 Months</small>
                            <strong>Duration</strong>
                        </div>

                    </div>


                    <div class="kd-podcast-meta-divider"></div>


                    <div class="kd-podcast-meta-item">

                        💻

                        <div>
                            <small>Live / On-Demand</small>
                            <strong>Learning Mode</strong>
                        </div>

                    </div>


                    <div class="kd-podcast-meta-divider"></div>


                    <div class="kd-podcast-meta-item">

                        📁

                        <div>
                            <small>2 Projects</small>
                            <strong>Real-World</strong>
                        </div>

                    </div>

                    <div class="kd-podcast-meta-item">

                        🏆

                        <div>
                            <small>Certificate</small>
                            <strong>Industry Recognized</strong>
                        </div>

                    </div>

                </div>

            </div>


            <!-- RIGHT PYTHON LOGO VISUAL -->
            <div class="kd-podcast-studio-visual">

                <!-- MAIN BOX (img removed, python logo animation added) -->
                <div class="kd-podcast-main-shot">

                    <div class="kd-python-visual">
                        <div class="kd-python-glow"></div>
                        <div class="kd-python-logo-container">
                            <svg viewBox="0 0 110 110" xmlns="http://www.w3.org/2000/svg">
                                <path class="kd-snake-blue" d="M 54.8,5.0 C 27.5,5.0 29.2,16.8 29.2,16.8 L 29.2,29.1 L 55.4,29.1 L 55.4,32.8 L 19.3,32.8 C 19.3,32.8 5.0,31.2 5.0,58.3 C 5.0,85.5 17.5,83.9 17.5,83.9 L 25.0,83.9 L 25.0,73.5 C 25.0,73.5 24.6,60.8 37.5,60.8 L 63.6,60.8 C 63.6,60.8 75.8,61.2 75.8,49.2 L 75.8,17.2 C 75.8,17.2 77.8,5.0 54.8,5.0 Z" />

                                <path class="kd-snake-yellow" d="M 55.2,105.0 C 82.5,105.0 80.8,93.2 80.8,93.2 L 80.8,80.9 L 54.6,80.9 L 54.6,77.2 L 90.7,77.2 C 90.7,77.2 105.0,78.8 105.0,51.7 C 105.0,24.5 92.5,26.1 92.5,26.1 L 85.0,26.1 L 85.0,36.5 C 85.0,36.5 85.4,49.2 72.5,49.2 L 46.4,49.2 C 46.4,49.2 34.2,48.8 34.2,60.8 L 34.2,92.8 C 34.2,92.8 32.2,105.0 55.2,105.0 Z" />

                                <circle class="kd-python-eye" cx="41.5" cy="18.5" r="3.8" fill="#ffffff" />

                                <circle class="kd-python-eye" cx="68.5" cy="91.5" r="3.8" fill="#ffffff" />
                            </svg>
                        </div>
                    </div>

                    <div class="kd-podcast-shot-overlay"></div>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
    (function () {
        var section = document.querySelector(".kd-podcast-hero-2026");
        var visual = section && section.querySelector(".kd-podcast-studio-visual");

        if (!section || !visual) return;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    // restart the animation every time the section comes into view
                    visual.classList.remove("kd-in-view");
                    void visual.offsetWidth; // force reflow so animation restarts
                    visual.classList.add("kd-in-view");
                } else {
                    visual.classList.remove("kd-in-view");
                }
            });
        }, { threshold: 0.35 });

        observer.observe(section);
    })();
</script>