<!-- HERO -->

<style>
    .msw-page {
        font-family: outfit;
        color: #1c1c2b;
        background: #ffffff;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        box-sizing: border-box;
        --msw-primary: #3b2fd4;
        --msw-orange: #ff5a1f;
        --msw-pink: #d6249f;
        --msw-green: #d7f7c2;
        --msw-dark: #14141f;
        --msw-cream: #fff9f2;
    }

    .msw-page,
    .msw-page *,
    .msw-page *::before,
    .msw-page *::after {
        box-sizing: border-box;
    }

    .msw-page h1,
    .msw-page h2,
    .msw-page h3,
    .msw-page p,
    .msw-page ul {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    .msw-page ul {
        list-style: none;
    }

    .msw-page a {
        text-decoration: none;
        color: inherit;
    }

    .msw-page img {
        max-width: 100%;
        display: block;
    }

    .msw-page button {
        font-family: inherit;
        cursor: pointer;
        border: none;
    }

    .msw-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* ===================== IMAGE PLACEHOLDER ===================== */
    .msw-img-placeholder {
        width: 100%;
        height: 100%;
        min-height: 120px;
        background: repeating-linear-gradient(45deg, #f1eefc, #f1eefc 10px, #e7e2fb 10px, #e7e2fb 20px);
        border: 2px dashed #b7aef0;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: #6a5fc7;
        font-size: 13px;
        font-weight: 600;
        text-align: center;
        gap: 6px;
        transition: transform .35s ease, box-shadow .35s ease;
    }

    .msw-img-placeholder span.msw-ph-icon {
        font-size: 26px;
    }

    .msw-img-placeholder:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 30px rgba(59, 47, 212, .18);
    }

    /* ===================== SCROLL REVEAL ===================== */
    .msw-reveal {
        opacity: 0;
        transform: translateY(28px);
        transition: opacity .7s ease, transform .7s ease;
    }

    .msw-reveal.msw-inview {
        opacity: 1;
        transform: translateY(0);
    }



    /* ===================== HERO ===================== */
    .msw-hero {
        background: #FFFFFF;
        padding: 60px 0 50px;
        position: relative;
    }

    .msw-hero-inner {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 40px;
        align-items: center;
    }

    .msw-hero-eyebrow {
        font-size: 14px;
        color: var(--msw-primary);
        font-weight: 600;
        letter-spacing: .5px;
        margin-bottom: 10px;
        display: inline-block;
    }

    .msw-hero-title {
        font-size: 30px;
        /* line-height: 1.18; */
        font-weight: 700;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }


    .msw-blue1 em {
        color: #2563EB;
        font-style: normal;
    }

    .msw-hero-title .msw-blue1::before {
        content: "| ";
        color: #2563EB;
    }

    .msw-hero-title .msw-red {
        color: #0f0f0f;
        /* margin-top: 10px; */
        /* padding-top: 20px; */
        position: relative;
    }

    .msw-hero-title .msw-red em {
        color: #e0263b;
        font-style: normal;

    }

    .msw-hero-text {
        margin-top: 18px;
        font-size: 15.5px;
        line-height: 1.7;
        color: #4a4a5a;
        max-width: 520px;
    }

    .msw-hero-text b {
        color: #1c1c2b;
    }

    .msw-hero-cta {
        display: flex;
        gap: 14px;
        margin-top: 26px;
        flex-wrap: wrap;
    }

    .msw-btn {
        padding: 13px 26px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14.5px;
        transition: transform .3s ease, box-shadow .3s ease, background .3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .msw-btn-primary {
        background: linear-gradient(90deg, #001EFF 0%, #00D9FF 100%);
        color: #fff !important;
        border-radius: 50px;
        box-shadow: 0 6px 0 #001A70;
    }

    .msw-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 30px rgba(59, 47, 212, .4);
    }

    .asdbhb64964 {
        background: #0004FF;
        border-radius: 50%;
        padding: 5px 10px;
    }

    .msw-btn-outline {
        background: #fff;
        color: #1c1c2b;
        border: 1.5px solid #e2ddf5;
        box-shadow: 0 6px 0 #001A70;
    }

    .msw-btn-outline:hover {
        background: #f4f1ff;
        transform: translateY(-3px);
        box-shadow: 0 16px 30px rgba(59, 47, 212, .4);
    }

    .msw-btn-pill {
        background: linear-gradient(135deg, #ff6a2c, #ff3d63);
        color: #fff;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 10px 24px rgba(255, 90, 31, .3);
        transition: transform .3s ease;
    }

    .msw-btn-pill:hover {
        transform: translateY(-3px) scale(1.03);
    }

    .msw-hero-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 26px;
        flex-wrap: wrap;
    }

    .msw-avatars {
        display: flex;
    }

    .msw-avatars span {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 2px solid #fff9f2;
        margin-left: -10px;
        background: linear-gradient(135deg, #c9c2f7, #a595f0);
    }

    .msw-avatars span:first-child {
        margin-left: 0;
    }

    .msw-meta-text {
        font-size: 13.5px;
        font-weight: 600;
        color: #333;
    }

    .msw-badges {
        display: flex;
        gap: 12px;
        margin-top: 16px;
        flex-wrap: wrap;
    }

    .sf84 {
        border: 1px solid #000541;
        background: #000541;
        display: flex;
        color: white;
        flex-direction: column !important;
    align-items: self-start !important;
    }

    .ashdi4star {
        svg {
            fill: yellow;
            width: 18px;
        }
    }


    .ijhni96541{
            align-items: center;
    text-align: center;
    display: flex;
    gap: 10px;

    }

    .smoll_boxs_stars {
        display: flex;
        
    }

    .smoll_boxs {
        display: flex;
        width: 20px;
        gap: 5px;
        padding: 2px;
        
        svg{
            background:#1EAF77 ;
            width: 13px;
            fill: white;
        }
    }

.smoll_boxs:nth-child(5) svg{
    background: linear-gradient(to right ,#1EAF77 , white  );
}

    .msw-badge {
        display: flex;
        align-items: center;
        gap: 8px;
        /* background: #fff; */
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 600;
        box-shadow: 0 4px 14px rgba(0, 0, 0, .06);
    }

    .msw-hero-visual {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(1) {

        aspect-ratio: 3/4;
        align-self: start;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(2) {
        aspect-ratio: 1/1;
        border-radius: 50%;
        align-self: end;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(3) {
        aspect-ratio: 1/1;
        border-radius: 50%;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(4) {
        aspect-ratio: 3/4;
    }

    .msw-float {
        animation: msw-floaty 4s ease-in-out infinite;
    }

    @keyframes msw-floaty {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-14px);
        }
    }

    .ihiahdfsk {
        position: relative;
        z-index: 1;
    }

    .ihiahdfsk::after {
        position: absolute;
        content: "";
        background: linear-gradient(135deg,
                #FFFFFF 0%,
                #F4F8FF 35%,
                #DDEBFE 100%);
        /* background: linear-gradient(to right, #ffffff15 80%, rgb(177, 207, 247) 10%, #2563EB 40%); */
        width: 100%;
        z-index: -1;
        height: 100%;
        right: 0;
        top: 0;


    }

    .sdasdjoa {
        width: 2px;
        height: 100%;
        color: #f3b406;
    }

    .sdasdjoaq {
        height: 80%;
        width: 1px;
        background-color: #f3b406;
        /* position: absolute; */
        right: -10px;
        top: 3px;
        padding: 0 2.5px;
        /* display: block; */
    }


    .msw-redqw {
        position: relative;
    }

    .msw-redqw::after {
        position: absolute;
        content: "";
        background: linear-gradient(135deg,
                #ffffff 0%,
                #fffcf4 35%,
                #fef5dd 100%);
        /* background: linear-gradient(to right, #ffffff15 80%, rgb(177, 207, 247) 10%, #2563EB 40%); */
        width: 100%;
        z-index: -1;
        height: 100%;
        right: -10px;
        top: 0;
    }


    #sdhuagsduas {
        overflow: hidden;
        display: flex;
        align-items: center;
        font-size: 12px;
        justify-content: center;
        background: red;
        font-weight: bolder;
        color: white;
    }
</style>
<section class="msw-hero">
    <div class="msw-container msw-hero-inner">
        <div class="msw-hero-content msw-reveal">
            <!-- <span class="msw-hero-eyebrow">| Your Launchpad to a</span> -->
            <h1 class="msw-hero-title">
                <span class="ihiahdfsk"><span class="msw-blue1">Your <em>Launchpad</em></span> to a High-Growth</span>
                <span class="msw-red"><em>Tech</em><span class="msw-redqw">Career Starts Here <span class="sdasdjoaq"></span></span></span>
            </h1>
            <br>
            <p class="msw-hero-text">
                Learn next-gen skills in <b style="color: #2563EB;">AI</b>, <b style="color: #fc0000;">Data Science</b>, <b style="color: #6B2548;">Marketing</b> &amp; more through
                Madrid Software's expert mentorship and real-world exposure.
            </p>
            <div class="msw-hero-cta">
                <a class="msw-btn msw-btn-primary" href="#msw-programs">Explore Programs <span class="asdbhb64964">✓</span></a>
                <a class="msw-btn msw-btn-outline" href="#msw-contact">Book A Free Consultation</a>
            </div>
            <div class="msw-hero-meta">
                <div class="msw-avatars">
                    <span style="overflow: hidden;"><img src="img/students-1.jpg" alt=""></span>
                    <span style="overflow: hidden;"><img src="img/students-3.jpg" alt=""></span>
                    <span style="overflow: hidden;"><img src="img/students-2.jpeg" alt=""></span>
                    <span id="sdhuagsduas">10+</span>
                </div>
                <span class="msw-meta-text">Students Enrolled</span>
            </div>
            <div class="msw-badges">
                <div class="msw-badge sf84">
                    <div class="ijhni96541">
                        <span class="ashdi4star"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                            </svg></span> Trustpilot
                    </div>
                    <div class="smoll_boxs_stars">
                        <span class="smoll_boxs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                            </svg></span>
                        <span class="smoll_boxs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                            </svg></span>
                        <span class="smoll_boxs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                            </svg></span>
                        <span class="smoll_boxs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                            </svg></span>
                        <span class="smoll_boxs"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M341.5 45.1C337.4 37.1 329.1 32 320.1 32C311.1 32 302.8 37.1 298.7 45.1L225.1 189.3L65.2 214.7C56.3 216.1 48.9 222.4 46.1 231C43.3 239.6 45.6 249 51.9 255.4L166.3 369.9L141.1 529.8C139.7 538.7 143.4 547.7 150.7 553C158 558.3 167.6 559.1 175.7 555L320.1 481.6L464.4 555C472.4 559.1 482.1 558.3 489.4 553C496.7 547.7 500.4 538.8 499 529.8L473.7 369.9L588.1 255.4C594.5 249 596.7 239.6 593.9 231C591.1 222.4 583.8 216.1 574.8 214.7L415 189.3L341.5 45.1z" />
                            </svg></span>
                    </div>
                </div>
                <div class="msw-badge">
                    <span style="width: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 262" preserveAspectRatio="xMidYMid" crxlauncher-bridged="" crxlauncher="">
                            <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"></path>
                            <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"></path>
                            <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"></path>
                            <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"></path>
                        </svg>
                    </span> 4.7 Rating
                </div>
            </div>
        </div>
        <div class="msw-hero-visual msw-reveal" style="display: block;">
            <!-- <div class="msw-img-placeholder msw-float"><span class="msw-ph-icon">🖼️</span>Add Photo</div>
          <div class="msw-img-placeholder msw-float" style="animation-delay:.5s"><span class="msw-ph-icon">🖼️</span>Add
            Photo</div>
          <div class="msw-img-placeholder msw-float" style="animation-delay:1s"><span class="msw-ph-icon">🖼️</span>Add
            Photo</div>
          <div class="msw-img-placeholder msw-float" style="animation-delay:1.5s"><span
              class="msw-ph-icon">🖼️</span>Add Photo</div> -->

            <div style="padding-top:15px ;">
                <img src="img/home-hero-section.png" alt="">
            </div>
        </div>
    </div>
</section>