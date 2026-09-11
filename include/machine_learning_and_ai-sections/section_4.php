<style>
    /* ===== Technologies We Use Section Styles (unique prefixed classes, no *{}, body{}, :root{}) ===== */

    .techUse-wrapper {
        font-family: 'Segoe UI', Arial, sans-serif;
        width: 100%;
        box-sizing: border-box;
        background-color: #ffffff;
        padding: 40px 50px;
    }

    .techUse-wrapper *,
    .techUse-wrapper *::before,
    .techUse-wrapper *::after {
        box-sizing: border-box;
    }

    .techUse-grid {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.15fr 1fr;
        gap: 28px;
        align-items: stretch;
    }

    /* ============ LEFT: TECH LOGOS ============ */
    .techUse-leftCol {
        display: flex;
        flex-direction: column;
    }

    .techUse-sectionTitle {
        font-size: 14px;
        font-weight: 800;
        letter-spacing: 1.2px;
        color: #4b2fb0;
        margin: 0 0 16px 0;
    }

    .techUse-logosCard {
        flex: 1;
        background-color: #ffffff;
        border: 1px solid #eceef4;
        border-radius: 16px;
        padding: 26px 18px;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 10px;
    }

    .techUse-logoItem {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        gap: 12px;
        padding: 6px 4px;
        border-radius: 12px;
        opacity: 0;
        transform: translateY(16px);
        animation: techUseFadeUp 0.5s ease forwards;
        transition: transform 0.3s ease;
    }

    .techUse-logoItem:nth-child(1) {
        animation-delay: 0.05s;
    }

    .techUse-logoItem:nth-child(2) {
        animation-delay: 0.13s;
    }

    .techUse-logoItem:nth-child(3) {
        animation-delay: 0.21s;
    }

    .techUse-logoItem:nth-child(4) {
        animation-delay: 0.29s;
    }

    .techUse-logoItem:nth-child(5) {
        animation-delay: 0.37s;
    }

    .techUse-logoItem:nth-child(6) {
        animation-delay: 0.45s;
    }

    .techUse-logoItem:hover {
        transform: translateY(-6px);
    }

    .techUse-logoIconWrap {
        width: 46px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.4s ease;
    }

    .techUse-logoItem:hover .techUse-logoIconWrap {
        transform: scale(1.14) rotate(-4deg);
    }

    .techUse-logoIconWrap svg {
        width: 100%;
        height: 100%;
        display: block;
    }

    .techUse-logoLabel {
        font-size: 12.5px;
        font-weight: 600;
        color: #4a4a52;
        text-align: center;
    }

    @keyframes techUseFadeUp {
        from {
            opacity: 0;
            transform: translateY(16px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ============ RIGHT: CTA CARD ============ */
    .techUse-ctaCard {
        position: relative;
        border-radius: 20px;
        padding: 34px 38px;
        background: linear-gradient(135deg, #7b2ff7 0%, #4b2fb0 55%, #3a2fc7 100%);
        color: #ffffff;
        overflow: hidden;
        display: flex;
        align-items: center;
        gap: 24px;
        box-shadow: 0 20px 40px rgba(75, 47, 176, 0.28);
    }

    .techUse-ctaGlow {
        position: absolute;
        top: -50px;
        right: -50px;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.08);
        animation: techUseGlowPulse 4s ease-in-out infinite;
    }

    @keyframes techUseGlowPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.8;
        }

        50% {
            transform: scale(1.2);
            opacity: 1;
        }
    }

    /* ---- Illustration ---- */
    .techUse-illustration {
        position: relative;
        z-index: 1;
        width: 140px;
        height: 140px;
        flex-shrink: 0;
    }

    .techUse-illustration svg {
        width: 100%;
        height: 100%;
        animation: techUseFloatIllus 4s ease-in-out infinite;
    }

    @keyframes techUseFloatIllus {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    .techUse-cubeFloat {
        animation: techUseCubeFloat 3.2s ease-in-out infinite;
        transform-origin: center;
    }

    @keyframes techUseCubeFloat {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-10px) rotate(8deg);
        }
    }

    /* ---- Content ---- */
    .techUse-ctaContent {
        position: relative;
        z-index: 1;
        flex: 1;
    }

    .techUse-ctaTitle {
        font-size: 21px;
        font-weight: 800;
        line-height: 1.3;
        margin: 0 0 10px 0;
    }

    .techUse-ctaText {
        font-size: 13.5px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.85);
        margin: 0 0 22px 0;
        max-width: 360px;
    }

    .techUse-ctaBtn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: none;
        border-radius: 10px;
        padding: 12px 22px;
        font-size: 13.5px;
        font-weight: 700;
        color: #4b2fb0;
        background-color: #ffffff;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .techUse-ctaBtn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 22px rgba(0, 0, 0, 0.2);
    }

    .techUse-ctaBtn svg {
        width: 15px;
        height: 15px;
        transition: transform 0.3s ease;
    }

    .techUse-ctaBtn:hover svg {
        transform: translateX(4px);
    }

    /* ===================== RESPONSIVE BREAKPOINTS ===================== */

    @media (max-width: 1024px) {
        .techUse-wrapper {
            padding: 34px 28px;
        }

        .techUse-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .techUse-logosCard {
            grid-template-columns: repeat(6, 1fr);
        }
    }

    @media (max-width: 700px) {
        .techUse-logosCard {
            grid-template-columns: repeat(3, 1fr);
            gap: 18px 10px;
        }

        .techUse-ctaCard {
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
        }

        .techUse-illustration {
            width: 110px;
            height: 110px;
        }
    }

    @media (max-width: 420px) {
        .techUse-wrapper {
            padding: 26px 16px;
        }

        .techUse-logosCard {
            grid-template-columns: repeat(2, 1fr);
            padding: 20px 14px;
        }

        .techUse-ctaCard {
            padding: 26px 24px;
        }

        .techUse-ctaTitle {
            font-size: 18px;
        }
    }
</style>

<section class="techUse-wrapper">
    <div class="techUse-grid">

        <!-- LEFT: Tech Logos -->
        <div class="techUse-leftCol">
            <h2 class="techUse-sectionTitle">TECHNOLOGIES WE USE</h2>

            <div class="techUse-logosCard">

                <!-- Python -->
                <div class="techUse-logoItem">
                    <span class="techUse-logoIconWrap">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0164 2C10.8193 2 9.03825 3.72453 9.03825 5.85185V8.51852H15.9235V9.25926H5.97814C3.78107 9.25926 2 10.9838 2 13.1111L2 18.8889C2 21.0162 3.78107 22.7407 5.97814 22.7407H8.27322V19.4815C8.27322 17.3542 10.0543 15.6296 12.2514 15.6296H19.5956C21.4547 15.6296 22.9617 14.1704 22.9617 12.3704V5.85185C22.9617 3.72453 21.1807 2 18.9836 2H13.0164ZM12.0984 6.74074C12.8589 6.74074 13.4754 6.14378 13.4754 5.40741C13.4754 4.67103 12.8589 4.07407 12.0984 4.07407C11.3378 4.07407 10.7213 4.67103 10.7213 5.40741C10.7213 6.14378 11.3378 6.74074 12.0984 6.74074Z" fill="url(#paint0_linear_87_8204)"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9834 30C21.1805 30 22.9616 28.2755 22.9616 26.1482V23.4815L16.0763 23.4815L16.0763 22.7408L26.0217 22.7408C28.2188 22.7408 29.9998 21.0162 29.9998 18.8889V13.1111C29.9998 10.9838 28.2188 9.25928 26.0217 9.25928L23.7266 9.25928V12.5185C23.7266 14.6459 21.9455 16.3704 19.7485 16.3704L12.4042 16.3704C10.5451 16.3704 9.03809 17.8296 9.03809 19.6296L9.03809 26.1482C9.03809 28.2755 10.8192 30 13.0162 30H18.9834ZM19.9015 25.2593C19.1409 25.2593 18.5244 25.8562 18.5244 26.5926C18.5244 27.329 19.1409 27.9259 19.9015 27.9259C20.662 27.9259 21.2785 27.329 21.2785 26.5926C21.2785 25.8562 20.662 25.2593 19.9015 25.2593Z" fill="url(#paint1_linear_87_8204)"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_87_8204" x1="12.4809" y1="2" x2="12.4809" y2="22.7407" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#327EBD"></stop>
                                        <stop offset="1" stop-color="#1565A7"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_87_8204" x1="19.519" y1="9.25928" x2="19.519" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FFDA4B"></stop>
                                        <stop offset="1" stop-color="#F9C600"></stop>
                                    </linearGradient>
                                </defs>
                            </g>
                        </svg>
                    </span>
                    <span class="techUse-logoLabel">Python</span>
                </div>

                <!-- TensorFlow -->
                <div class="techUse-logoItem">
                    <span class="techUse-logoIconWrap">
                        <svg fill="#ffa305" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg" stroke="#ffa305" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#656161" stroke-width="0.528"><title>TensorFlow icon</title><path d="M19.6 12l.1 4.7-3.1-1.8v6.7L12.5 24V0l10.2 5.9v5.3l-6.1-3.6v2.7zM1.3 5.9L11.5 0v24l-4.1-2.4v-14l-6.1 3.6z"></path></g><g id="SVGRepo_iconCarrier"><title>TensorFlow icon</title><path d="M19.6 12l.1 4.7-3.1-1.8v6.7L12.5 24V0l10.2 5.9v5.3l-6.1-3.6v2.7zM1.3 5.9L11.5 0v24l-4.1-2.4v-14l-6.1 3.6z"></path></g></svg>
                    </span>
                    <span class="techUse-logoLabel">TensorFlow</span>
                </div>

                <!-- PyTorch -->
                <div class="techUse-logoItem">
                    <span class="techUse-logoIconWrap">
                       <svg viewBox="-27 0 310 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M218.281037,90.106412 C268.572988,140.398363 268.572988,221.075034 218.281037,271.716235 C169.036835,322.008186 88.0109141,322.008186 37.7189632,271.716235 C-12.5729877,221.424284 -12.5729877,140.398363 37.7189632,90.106412 L127.825375,0 L127.825375,45.053206 L119.443383,53.4351978 L59.7216917,113.156889 C22.0027285,150.177353 22.0027285,210.946794 59.7216917,248.665757 C96.7421555,286.38472 157.511596,286.38472 195.230559,248.665757 C232.949523,211.645293 232.949523,150.875853 195.230559,113.156889 L218.281037,90.106412 Z M173.227831,84.5184175 C163.969338,84.5184175 156.463847,77.0129263 156.463847,67.7544338 C156.463847,58.4959413 163.969338,50.9904502 173.227831,50.9904502 C182.486323,50.9904502 189.991814,58.4959413 189.991814,67.7544338 C189.991814,77.0129263 182.486323,84.5184175 173.227831,84.5184175 Z" fill="#EE4C2C"> </path> </g> </g></svg>  
                    </span>
                    <span class="techUse-logoLabel">PyTorch</span>
                </div>

                <!-- scikit-learn -->
                <div class="techUse-logoItem">
                    <span class="techUse-logoIconWrap">
                        <svg viewBox="0 0 32 32">
                            <circle cx="12" cy="16" r="9" fill="#F89939"></circle>
                            <circle cx="20" cy="10" r="5.5" fill="#3499CD"></circle>
                        </svg>
                    </span>
                    <span class="techUse-logoLabel">scikit-learn</span>
                </div>

                <!-- Keras -->
                <div class="techUse-logoItem">
                    <span class="techUse-logoIconWrap">
                        <svg viewBox="0 0 32 32">
                            <rect x="2" y="2" width="28" height="28" rx="6" fill="#D00000"></rect>
                            <text x="16" y="22" font-size="16" font-weight="800" fill="#ffffff" text-anchor="middle" font-family="Arial, sans-serif">K</text>
                        </svg>
                    </span>
                    <span class="techUse-logoLabel">Keras</span>
                </div>

                <!-- AWS -->
                <div class="techUse-logoItem">
                    <span class="techUse-logoIconWrap">
                        <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#252F3E" d="M4.51 7.687c0 .197.02.357.058.475.042.117.096.245.17.384a.233.233 0 01.037.123c0 .053-.032.107-.1.16l-.336.224a.255.255 0 01-.138.048c-.054 0-.107-.026-.16-.074a1.652 1.652 0 01-.192-.251 4.137 4.137 0 01-.165-.315c-.415.491-.936.737-1.564.737-.447 0-.804-.129-1.064-.385-.261-.256-.394-.598-.394-1.025 0-.454.16-.822.484-1.1.325-.278.756-.416 1.304-.416.18 0 .367.016.564.042.197.027.4.07.612.118v-.39c0-.406-.085-.689-.25-.854-.17-.166-.458-.246-.868-.246-.186 0-.377.022-.574.07a4.23 4.23 0 00-.575.181 1.525 1.525 0 01-.186.07.326.326 0 01-.085.016c-.075 0-.112-.054-.112-.166v-.262c0-.085.01-.15.037-.186a.399.399 0 01.15-.113c.185-.096.409-.176.67-.24.26-.07.537-.101.83-.101.633 0 1.096.144 1.394.432.293.288.442.726.442 1.314v1.73h.01zm-2.161.811c.175 0 .356-.032.548-.096.191-.064.362-.182.505-.342a.848.848 0 00.181-.341c.032-.129.054-.283.054-.465V7.03a4.43 4.43 0 00-.49-.09 3.996 3.996 0 00-.5-.033c-.357 0-.618.07-.793.214-.176.144-.26.347-.26.614 0 .25.063.437.196.566.128.133.314.197.559.197zm4.273.577c-.096 0-.16-.016-.202-.054-.043-.032-.08-.106-.112-.208l-1.25-4.127a.938.938 0 01-.049-.214c0-.085.043-.133.128-.133h.522c.1 0 .17.016.207.053.043.032.075.107.107.208l.894 3.535.83-3.535c.026-.106.058-.176.1-.208a.365.365 0 01.214-.053h.425c.102 0 .17.016.213.053.043.032.08.107.101.208l.841 3.578.92-3.578a.458.458 0 01.107-.208.346.346 0 01.208-.053h.495c.085 0 .133.043.133.133 0 .027-.006.054-.01.086a.76.76 0 01-.038.133l-1.283 4.127c-.032.107-.069.177-.111.209a.34.34 0 01-.203.053h-.457c-.101 0-.17-.016-.213-.053-.043-.038-.08-.107-.101-.214L8.213 5.37l-.82 3.439c-.026.107-.058.176-.1.213-.043.038-.118.054-.213.054h-.458zm6.838.144a3.51 3.51 0 01-.82-.096c-.266-.064-.473-.134-.612-.214-.085-.048-.143-.101-.165-.15a.378.378 0 01-.031-.149v-.272c0-.112.042-.166.122-.166a.3.3 0 01.096.016c.032.011.08.032.133.054.18.08.378.144.585.187.213.042.42.064.633.064.336 0 .596-.059.777-.176a.575.575 0 00.277-.508.52.52 0 00-.144-.373c-.095-.102-.276-.193-.537-.278l-.772-.24c-.388-.123-.676-.305-.851-.545a1.275 1.275 0 01-.266-.774c0-.224.048-.422.143-.593.096-.17.224-.32.384-.438.16-.122.34-.213.553-.277.213-.064.436-.091.67-.091.118 0 .24.005.357.021.122.016.234.038.346.06.106.026.208.052.303.085.096.032.17.064.224.096a.46.46 0 01.16.133.289.289 0 01.047.176v.251c0 .112-.042.171-.122.171a.552.552 0 01-.202-.064 2.427 2.427 0 00-1.022-.208c-.303 0-.543.048-.708.15-.165.1-.25.256-.25.475 0 .149.053.277.16.379.106.101.303.202.585.293l.756.24c.383.123.66.294.825.513.165.219.244.47.244.748 0 .23-.047.437-.138.619a1.436 1.436 0 01-.388.47c-.165.133-.362.23-.591.299-.24.075-.49.112-.761.112z"></path> <g fill="#F90" fill-rule="evenodd" clip-rule="evenodd"> <path d="M14.465 11.813c-1.75 1.297-4.294 1.986-6.481 1.986-3.065 0-5.827-1.137-7.913-3.027-.165-.15-.016-.353.18-.235 2.257 1.313 5.04 2.109 7.92 2.109 1.941 0 4.075-.406 6.039-1.239.293-.133.543.192.255.406z"></path> <path d="M15.194 10.98c-.223-.287-1.479-.138-2.048-.069-.17.022-.197-.128-.043-.24 1-.705 2.645-.502 2.836-.267.192.24-.053 1.89-.99 2.68-.143.123-.281.06-.218-.1.213-.53.687-1.72.463-2.003z"></path> </g> </g></svg>
                    </span>
                    <span class="techUse-logoLabel">AWS</span>
                </div>

            </div>
        </div>

        <!-- RIGHT: CTA Card -->
        <div class="techUse-ctaCard">
            <span class="techUse-ctaGlow"></span>

            <div class="techUse-illustration">
                <svg viewBox="0 0 200 200">
                    <!-- floating cube -->
                    <g class="techUse-cubeFloat">
                        <polygon points="38,30 58,42 38,54 18,42" fill="#c9b6ff"></polygon>
                        <polygon points="18,42 38,54 38,74 18,62" fill="#8a5cf6"></polygon>
                        <polygon points="38,54 58,42 58,62 38,74" fill="#6b3fe0"></polygon>
                    </g>

                    <!-- monitor (analytics) -->
                    <g>
                        <rect x="55" y="55" width="80" height="58" rx="6" fill="#ffffff" opacity="0.14"></rect>
                        <rect x="63" y="63" width="64" height="42" rx="3" fill="#ffffff"></rect>
                        <polyline points="70,95 82,80 92,88 105,68 120,75" fill="none" stroke="#7b2ff7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
                        <circle cx="82" cy="80" r="2.4" fill="#7b2ff7"></circle>
                        <circle cx="105" cy="68" r="2.4" fill="#7b2ff7"></circle>
                        <rect x="90" y="113" width="20" height="8" fill="#ffffff" opacity="0.5"></rect>
                    </g>

                    <!-- laptop (bottom) -->
                    <g>
                        <rect x="80" y="120" width="90" height="55" rx="6" fill="#ffffff" opacity="0.16"></rect>
                        <rect x="88" y="128" width="74" height="40" rx="3" fill="#ffffff"></rect>
                        <circle cx="125" cy="148" r="10" fill="none" stroke="#7b2ff7" stroke-width="2.4"></circle>
                        <circle cx="125" cy="148" r="3" fill="#7b2ff7"></circle>
                        <rect x="82" y="176" width="86" height="8" rx="2" fill="#ffffff" opacity="0.5"></rect>
                    </g>

                    <!-- small floating dot accents -->
                    <circle cx="165" cy="60" r="4" fill="#ffb020" opacity="0.9"></circle>
                    <circle cx="150" cy="150" r="5" fill="#ffb020" opacity="0.9"></circle>
                </svg>
            </div>

            <div class="techUse-ctaContent">
                <h3 class="techUse-ctaTitle">Let's Build Something Intelligent Together</h3>
                <p class="techUse-ctaText">Transform your data into powerful insights and achieve measurable results.</p>
                <button class="techUse-ctaBtn">
                    Get in Touch
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </button>
            </div>

        </div>

    </div>
</section>