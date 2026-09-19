<!-- java_course-section -->
<style>
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
        padding: 42px 0;
        background:
            radial-gradient(circle at 8% 12%, rgba(231, 111, 0, .22), transparent 32%),
            radial-gradient(circle at 93% 8%, rgba(248, 152, 32, .16), transparent 34%),
            radial-gradient(circle at 58% 100%, rgba(72, 96, 205, .10), transparent 34%),
            linear-gradient(135deg, #070A12 0%, #0B1020 34%, #121126 68%, #17102B 100%);
    }

    .kd-podcast-hero-noise {
        position: absolute;
        inset: 0;
        pointer-events: none;
        opacity: .14;
        background-image: radial-gradient(rgba(255, 255, 255, .10) .65px, transparent .65px);
        background-size: 26px 26px;
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
        background: radial-gradient(circle, rgba(231, 111, 0, .18), transparent 68%);
    }

    .kd-light-right {
        width: 520px;
        height: 520px;
        right: -310px;
        top: -280px;
        background: radial-gradient(circle, rgba(248, 152, 32, .16), transparent 68%);
    }

    .kd-podcast-hero-wrap {
        position: relative;
        z-index: 3;
        width: min(1200px, calc(100% - 40px));
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
        animation: kdPodcastContentIn .85s cubic-bezier(.22, 1, .36, 1) both;
    }

    @keyframes kdPodcastContentIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .kd-podcast-eyebrow {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 13px;
        color: #ff9d3d;
        font-size: 10px;
        line-height: 1.3;
        font-weight: 800;
        letter-spacing: .14em;
    }

    .kd-podcast-eyebrow-line {
        width: 35px;
        height: 2px;
        flex: 0 0 35px;
        background: linear-gradient(90deg, #e76f00, #f89820);
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
        background: linear-gradient(90deg, #f8981d, #e76f00 42%, #ff7a3d 72%, #ffb347 100%);
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
        font-size: 12px !important;
        line-height: 1 !important;
        font-weight: 800 !important;
        text-decoration: none !important;
        outline: none !important;
        transition: transform .24s ease, box-shadow .24s ease, border-color .24s ease;
    }

    .kd-podcast-primary,
    .kd-podcast-primary:hover,
    .kd-podcast-primary:focus,
    .kd-podcast-primary:active {
        padding: 0 10px 0 19px;
        color: #ffffff !important;
        border: 1px solid transparent !important;
        background: linear-gradient(135deg, #f8981d, #e76f00 58%, #b8560a) !important;
        box-shadow: 0 13px 30px rgba(231, 111, 0, .22) !important;
    }

    .kd-podcast-primary:hover { transform: translateY(-2px); }

    .kd-podcast-btn-arrow {
        width: 33px;
        height: 33px;
        flex: 0 0 33px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        color: #ffffff;
        background: rgba(255, 255, 255, .15);
    }

    .kd-podcast-btn-arrow svg { width: 19px; height: 19px; }

    .kd-podcast-secondary,
    .kd-podcast-secondary:hover,
    .kd-podcast-secondary:focus,
    .kd-podcast-secondary:active {
        padding: 0 18px;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, .16) !important;
        background: rgba(255, 255, 255, .055) !important;
        box-shadow: none !important;
    }

    .kd-podcast-secondary:hover {
        transform: translateY(-2px);
        border-color: rgba(255, 255, 255, .30) !important;
        background: rgba(255, 255, 255, .09) !important;
    }

    .kd-podcast-hero-meta {
        margin-top: 23px;
        padding: 13px 14px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 15px;
        border: 1px solid rgba(255, 255, 255, .10);
        border-radius: 15px;
        background: rgba(255, 255, 255, .045);
        box-shadow: 0 12px 34px rgba(0, 0, 0, .14);
        backdrop-filter: blur(10px);
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
        color: #f8981d;
        background: rgba(248, 152, 32, .12);
    }

    .kd-podcast-meta-item:nth-of-type(3) .kd-podcast-meta-icon {
        color: #a87ef0;
        background: rgba(128, 91, 216, .13);
    }

    .kd-podcast-meta-item:nth-of-type(5) .kd-podcast-meta-icon {
        color: #77a7f5;
        background: rgba(77, 131, 221, .13);
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
        background: rgba(255, 255, 255, .10);
    }

    .kd-podcast-studio-visual {
        position: relative;
        min-height: clamp(300px, 45vw, 490px);
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
            radial-gradient(circle at 8% 12%, rgba(43, 42, 42, 0.18), transparent 30%),
            radial-gradient(circle at 93% 8%, rgba(126, 82, 220, .20), transparent 34%),
            radial-gradient(circle at 58% 100%, rgba(72, 96, 205, .10), transparent 34%),
            linear-gradient(135deg, #070A12 0%, #0B1020 34%, #121126 68%, #17102B 100%);
        box-shadow: 0 32px 78px rgba(158, 157, 157, 0.38);
        animation: kdPodcastMainReveal .9s .12s cubic-bezier(.22, 1, .36, 1) both;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
    }

    @keyframes kdPodcastMainReveal {
        from { opacity: 0; transform: translateY(20px) scale(.98); }
        to { opacity: 1; transform: translateY(0) scale(1); }
    }

    /* ===== JAVA LOGO — CUP RINGS + RISING STEAM ===== */

    .kd-java-visual {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kd-java-glow {
        position: absolute;
        z-index: 0;
        width: clamp(180px, 32vw, 340px);
        height: clamp(180px, 32vw, 340px);
        border-radius: 50%;
        background: radial-gradient(circle, rgba(231, 111, 0, .38) 0%, rgba(20, 130, 190, .22) 45%, transparent 72%);
        filter: blur(30px);
        opacity: 0;
        animation: kdGlowFadeIn .8s 1.8s ease-out forwards,
                   kdGlowPulse 3.2s 2.6s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes kdGlowFadeIn { to { opacity: 1; } }

    @keyframes kdGlowPulse {
        0%, 100% { opacity: .5; transform: scale(.92); }
        50% { opacity: 1; transform: scale(1.08); }
    }

    .kd-java-logo-container {
        position: relative;
        z-index: 1;
        width: clamp(130px, 22vw, 250px);
        height: clamp(150px, 25vw, 290px);
        filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.45));
        animation: kdLogoFloat 3.6s 2.2s ease-in-out infinite;
    }

    @keyframes kdLogoFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-9px); }
    }

    .kd-java-logo-container svg { width: 100%; height: 100%; overflow: visible; }

    /* rings: bottom to top build */
    .kd-java-ring { opacity: 0; transform: scaleX(.6); transform-box: fill-box; transform-origin: center; }

    .kd-podcast-studio-visual.kd-in-view .kd-java-ring {
        animation: kdRingIn .55s cubic-bezier(.2, .9, .3, 1.2) forwards;
    }

    .kd-podcast-studio-visual.kd-in-view .kd-java-ring-3 { animation-delay: .1s; }
    .kd-podcast-studio-visual.kd-in-view .kd-java-ring-2 { animation-delay: .32s; }
    .kd-podcast-studio-visual.kd-in-view .kd-java-ring-1 { animation-delay: .54s; }

    @keyframes kdRingIn {
        0% { opacity: 0; transform: scaleX(.6) translateY(6px); }
        100% { opacity: 1; transform: scaleX(1) translateY(0); }
    }

    /* steam: fades up after cup is built, then loops */
    .kd-java-steam { opacity: 0; transform-box: fill-box; transform-origin: bottom center; }

    .kd-podcast-studio-visual.kd-in-view .kd-java-steam-1 {
        animation: kdSteamRise 3s 1.1s ease-in-out infinite;
    }
    .kd-podcast-studio-visual.kd-in-view .kd-java-steam-2 {
        animation: kdSteamRise 3s 1.4s ease-in-out infinite;
    }

    @keyframes kdSteamRise {
        0% { opacity: 0; transform: translateY(6px) scale(.94); }
        25% { opacity: .95; }
        70% { opacity: .55; }
        100% { opacity: 0; transform: translateY(-10px) scale(1.03); }
    }

    @media(max-width:1024px) {
        .kd-podcast-hero-2026 { min-height: 560px; padding: 38px 0; }
        .kd-podcast-hero-wrap { width: min(960px, calc(100% - 36px)); }
        .kd-podcast-hero-grid { grid-template-columns: minmax(0, 1fr) 470px; gap: 42px; }
        .kd-podcast-hero-copy h1 { font-size: 50px; }
        .kd-podcast-hero-desc { font-size: 14.5px; }
        .kd-podcast-studio-visual { min-height: 450px; }
        .kd-podcast-main-shot { height: 380px; }
    }

    @media(max-width:767px) {
        .kd-podcast-hero-2026 { min-height: auto; padding: 32px 0 34px; }
        .kd-podcast-hero-wrap { width: calc(100% - 28px); max-width: 590px; }
        .kd-podcast-hero-grid { grid-template-columns: 1fr; gap: 27px; }
        .kd-podcast-hero-copy { text-align: center; padding: 80px 30px 30px; }
        .kd-podcast-eyebrow { justify-content: center; margin-bottom: 11px; font-size: 8.5px; }
        .kd-podcast-eyebrow-line { width: 28px; flex-basis: 28px; }
        .kd-podcast-hero-copy h1 { max-width: 540px; margin: 0 auto; font-size: 37px; line-height: 1.09; }
        .kd-podcast-hero-desc { max-width: 530px; margin: 14px auto 0; font-size: 14px; line-height: 1.7; }
        .kd-podcast-hero-actions { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 8px; margin-top: 19px; }
        .kd-podcast-hero-btn, .kd-podcast-hero-btn:hover, .kd-podcast-hero-btn:focus, .kd-podcast-hero-btn:active { width: 100%; min-height: 48px; font-size: 10px !important; }
        .kd-podcast-primary { padding: 0 6px 0 11px; }
        .kd-podcast-secondary { padding: 0 10px; }
        .kd-podcast-hero-meta { margin: 18px auto 0; padding: 11px 9px; gap: 8px; text-align: left; }
        .kd-podcast-meta-item { gap: 6px; }
        .kd-podcast-meta-icon { width: 29px; height: 29px; flex-basis: 29px; }
        .kd-podcast-meta-icon svg { width: 14px; height: 14px; }
        .kd-podcast-meta-item strong { font-size: 7.7px; }
        .kd-podcast-meta-item small { font-size: 5.7px; }
        .kd-podcast-studio-visual { min-height: 425px; max-width: 510px; width: 100%; margin: 0 auto; }
        .kd-podcast-main-shot { bottom: 19px; left: 50%; width: 80%; }
    }

    @media(max-width:420px) {
        .kd-podcast-hero-2026 { padding: 28px 0 30px; }
        .kd-podcast-hero-wrap { width: calc(100% - 24px); }
        .kd-podcast-hero-grid { gap: 22px; }
        .kd-podcast-hero-copy h1 { font-size: 31px; }
        .kd-podcast-hero-desc { margin-top: 12px; font-size: 13px; }
        .kd-podcast-hero-actions { margin-top: 16px; gap: 6px; }
        .kd-podcast-hero-btn, .kd-podcast-hero-btn:hover, .kd-podcast-hero-btn:focus, .kd-podcast-hero-btn:active { min-height: 45px; font-size: 8.7px !important; }
        .kd-podcast-hero-meta { margin-top: 15px; padding: 9px 7px; gap: 5px; }
        .kd-podcast-meta-divider { height: 29px; }
        .kd-podcast-meta-icon { width: 25px; height: 25px; flex-basis: 25px; }
        .kd-podcast-meta-item strong { font-size: 6.9px; }
        .kd-podcast-meta-item small { font-size: 5px; }
        .kd-podcast-studio-visual { min-height: 370px; }
        .kd-podcast-main-shot { top: 15px; left: 2%; width: 82%; border-radius: 18px; }
    }

    @media(prefers-reduced-motion:reduce) {
        .kd-podcast-hero-copy, .kd-podcast-main-shot { animation: none !important; }
        .kd-java-ring, .kd-java-steam, .kd-java-logo-container, .kd-java-glow {
            animation: none !important;
            opacity: 1 !important;
            transform: none !important;
        }
    }
</style>

<section class="kd-podcast-hero-2026">
    <div class="kd-podcast-hero-noise"></div>
    <div class="kd-podcast-hero-light kd-light-left"></div>
    <div class="kd-podcast-hero-light kd-light-right"></div>

    <div class="kd-podcast-hero-wrap">
        <div class="kd-podcast-hero-grid">

            <div class="kd-podcast-hero-copy">
                <div class="kd-podcast-eyebrow">
                    <span class="kd-podcast-eyebrow-line"></span>
                    JAVA PROGRAMMING COURSE
                </div>

                <h1>
                    Master Java Programming
                    <span> Course In Delhi </span> &
                    get job-ready in 6 Months
                </h1>

                <p class="kd-podcast-hero-desc">
                    Live Projects ∙ Placement Assistance ∙ Industry Trainers — learn Java from senior developers working at India's top product companies.
                </p>

                <div class="kd-podcast-hero-actions">
                    <a href="#contact" class="kd-podcast-hero-btn kd-podcast-primary">
                        Book Demo
                        <span class="kd-podcast-btn-arrow">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M5 12H19M13 6L19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                    <a href="#java-curriculum" class="kd-podcast-hero-btn kd-podcast-secondary">View Curriculum</a>
                </div>

                <div class="kd-podcast-hero-meta">
                    <div class="kd-podcast-meta-item">
                        🕐
                        <div><small>6 Months</small><strong>Duration</strong></div>
                    </div>
                    <div class="kd-podcast-meta-divider"></div>
                    <div class="kd-podcast-meta-item">
                        💻
                        <div><small>Live / On-Demand</small><strong>Learning Mode</strong></div>
                    </div>
                    <div class="kd-podcast-meta-divider"></div>
                    <div class="kd-podcast-meta-item">
                        📁
                        <div><small>2 Projects</small><strong>Real-World</strong></div>
                    </div>
                    <div class="kd-podcast-meta-item">
                        🏆
                        <div><small>Certificate</small><strong>Industry Recognized</strong></div>
                    </div>
                </div>
            </div>

            <div class="kd-podcast-studio-visual">
                <div class="kd-podcast-main-shot">
                    <div class="kd-java-visual">
                        <div class="kd-java-glow"></div>
                        <div class="kd-java-logo-container">
                            <svg viewBox="0 0 120 150" xmlns="http://www.w3.org/2000/svg">

                                <!-- steam: two wavy flame wisps rising above the cup -->
                                <path class="kd-java-steam kd-java-steam-1" fill="#e2231a"
                                    d="M 52 46 C 40 38 46 28 40 20 C 34 12 42 4 40 -2
                                       C 48 2 54 10 50 18 C 46 26 56 32 52 40 C 56 42 56 46 52 46 Z" />

                                <path class="kd-java-steam kd-java-steam-2" fill="#f04a3c"
                                    d="M 68 46 C 58 40 64 30 58 22 C 52 14 60 6 58 0
                                       C 66 4 70 12 66 20 C 62 28 70 34 66 40 C 70 42 72 46 68 46 Z" />

                                <!-- ring 3 (top, near rim) -->
                                <path class="kd-java-ring kd-java-ring-3" fill="#5382a1"
                                    d="M 30 58 C 30 51 90 51 90 58 C 90 65 30 65 30 58 Z" />

                                <!-- ring 2 (middle) -->
                                <path class="kd-java-ring kd-java-ring-2" fill="#1c7fbf"
                                    d="M 22 82 C 22 73 98 73 98 82 C 98 91 22 91 22 82 Z" />

                                <!-- ring 1 (bottom, widest / base) -->
                                <path class="kd-java-ring kd-java-ring-1" fill="#0e5f96"
                                    d="M 14 108 C 14 97 106 97 106 108 C 106 119 14 119 14 108 Z" />

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
                    visual.classList.remove("kd-in-view");
                    void visual.offsetWidth;
                    visual.classList.add("kd-in-view");
                } else {
                    visual.classList.remove("kd-in-view");
                }
            });
        }, { threshold: 0.35 });

        observer.observe(section);
    })();
</script>