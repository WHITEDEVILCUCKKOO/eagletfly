<style>
    .kd-rcs-section {
        position: relative;
        overflow: hidden;
        padding: 76px 20px 82px;
        /* background:
            radial-gradient(circle at 8% 18%, rgba(67, 92, 205, .10), transparent 28%),
            radial-gradient(circle at 92% 82%, rgba(255, 93, 39, .09), transparent 25%),
            linear-gradient(180deg, #f8f9fd 0%, #f3f5fa 100%); */
        background: #01132E;
    }

    .kd-rcs-section::before,
    .kd-rcs-section::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border: 1px solid rgba(70, 91, 190, .08);
        pointer-events: none;
    }

    .kd-rcs-section::before {
        top: -190px;
        right: -90px
    }

    .kd-rcs-section::after {
        bottom: -220px;
        left: -110px
    }

    .kd-rcs-wrap {
        /* width: min(1180px, 100%); */
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .kd-rcs-head {
        max-width: 800px;
        margin: 0 auto 42px;
        text-align: center;
    }

    .kd-rcs-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 16px;
        margin-bottom: 14px;
        border: 1px solid rgba(63, 83, 183, .18);
        border-radius: 999px;
        background: rgba(255, 255, 255, .76);
        box-shadow: 0 8px 22px rgba(28, 42, 85, .06);
        color: #4055aa;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .kd-rcs-eyebrow i {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        display: block;
        background: #ff642d;
        box-shadow: 0 0 0 5px rgba(255, 100, 45, .10);
    }

    .kd-rcs-head h2 {
        margin: 0;
        font-size: clamp(27px, 3.1vw, 43px);
        line-height: 1.18;
        letter-spacing: -1.1px;
        font-weight: 800;
        color: #ffffff;
    }

    .kd-rcs-head h2 span {
        background: linear-gradient(90deg, #3157ba, #6950bf);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .kd-rcs-head p {
        max-width: 710px;
        margin: 14px auto 0;
        color: #647087;
        font-size: 15px;
        line-height: 1.8;
    }

    .kd-rcs-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        padding: 0 40px;
        gap: 22px;
    }

    .kd-rcs-card {
        position: relative;
        /* min-height: 285px; */
        padding: 28px 27px 30px;
        border-radius: 24px;
        overflow: hidden;
        background: rgba(255, 255, 255, .88);
        border: 1px solid rgba(39, 57, 96, .10);
        box-shadow: 0 14px 35px rgba(26, 40, 77, .07);
        transition: transform .38s cubic-bezier(.2, .75, .25, 1), box-shadow .38s ease, border-color .38s ease;
    }

    .kd-rcs-card::before {
        content: "";
        position: absolute;
        width: 150px;
        height: 150px;
        right: -78px;
        top: -78px;
        border-radius: 50%;
        background: var(--card-soft);
        opacity: .7;
        transition: transform .55s ease;
    }

    .kd-rcs-card::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 4px;
        transform: scaleX(.18);
        transform-origin: left center;
        border-radius: 0 10px 10px 0;
        background: var(--card-accent);
        transition: transform .4s ease;
    }

    .kd-rcs-card:hover {
        transform: translateY(-9px);
        box-shadow: 0 24px 50px rgba(31, 46, 92, .14);
        border-color: var(--card-border);
    }

    .kd-rcs-card:hover::before {
        transform: scale(1.35)
    }

    .kd-rcs-card:hover::after {
        transform: scaleX(1)
    }

    .kd-card-icon {
        width: 60px;
        height: 60px;
        position: relative;
        z-index: 1;
        display: grid;
        place-items: center;
        border-radius: 18px;
        color: #fff;
        /* background: var(--card-accent); */
        /* box-shadow: 0 12px 22px var(--card-shadow); */
        transition: transform .45s ease, box-shadow .45s ease;
    }

    .kd-rcs-card:hover .kd-card-icon {
        transform: translateY(-4px) rotate(-5deg) scale(1.05);
        /* box-shadow: 0 16px 28px var(--card-shadow);   */
    }

    .kd-card-icon svg {
        width: 40px;
        height: 40px;
        stroke: currentColor;
        /* fill: white; */
        stroke-width: 1.9;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .kd-card-icon .kd-fill {
        fill: currentColor;
        stroke: none
    }

    .kd-rcs-card h3 {
        position: relative;
        z-index: 1;
        margin: 24px 0 10px;
        color: #26344a;
        font-size: 20px;
        line-height: 1.4;
        font-weight: 700;
    }

    .kd-rcs-card p {
        position: relative;
        z-index: 1;
        margin: 0;
        color: #667286;
        font-size: 14px;
        line-height: 1.75;
    }

    .kd-card-one {
        --card-accent: linear-gradient(135deg, #315fc6, #6249bb);
        --card-soft: rgba(64, 94, 198, .18);
        --card-border: rgba(64, 94, 198, .25);
        --card-shadow: rgba(55, 85, 191, .24);
    }

    .kd-card-two {
        --card-accent: linear-gradient(135deg, #664bc3, #9354c4);
        --card-soft: rgba(119, 73, 194, .17);
        --card-border: rgba(119, 73, 194, .25);
        --card-shadow: rgba(119, 73, 194, .22);
    }

    .kd-card-three {
        --card-accent: linear-gradient(135deg, #732ff0d5, #9337e9);
        --card-soft: rgba(240, 86, 48, .15);
        --card-border: rgba(236, 84, 47, .25);
        --card-shadow: rgba(235, 83, 46, .22);
    }

    .kd-card-4 {
        --card-accent: linear-gradient(135deg, #a92ff0, #a837e9);
        --card-soft: rgba(240, 86, 48, .15);
        --card-border: rgba(236, 84, 47, .25);
        --card-shadow: rgba(235, 83, 46, .22);
    }

    .kd-card-5 {
        --card-accent: linear-gradient(135deg, #d02ff0, #e937e9);
        --card-soft: rgba(240, 86, 48, .15);
        --card-border: rgba(236, 84, 47, .25);
        --card-shadow: rgba(235, 83, 46, .22);
    }

    @media(max-width:900px) {
        .kd-rcs-section {
            padding: 62px 18px 68px
        }

        .kd-rcs-grid {
            grid-template-columns: 1fr;
            max-width: 590px;
            margin: auto
        }

        .kd-rcs-card {
            min-height: auto
        }
    }

    @media(max-width:520px) {
        .kd-rcs-section {
            padding: 50px 14px 58px
        }

        .kd-rcs-head {
            margin-bottom: 30px
        }

        .kd-rcs-head h2 {
            font-size: 28px;
            letter-spacing: -.7px
        }

        .kd-rcs-head p {
            font-size: 13px;
            line-height: 1.7
        }

        .kd-rcs-grid {
            gap: 15px
        }

        .kd-rcs-card {
            min-height: 0;
            padding: 23px 21px 25px;
            border-radius: 20px;
            text-align: center;
        }

        .kd-card-icon {
            margin: 0 auto
        }

        .kd-rcs-card h3 {
            font-size: 18px;
            margin-top: 18px
        }

        .kd-rcs-card p {
            font-size: 13px
        }
    }

    @media(prefers-reduced-motion:no-preference) {
        .kd-rcs-card {
            animation: kdCardEnter .75s both;
        }

        .kd-rcs-card:nth-child(2) {
            animation-delay: .12s
        }

        .kd-rcs-card:nth-child(3) {
            animation-delay: .24s
        }

        @keyframes kdCardEnter {
            from {
                opacity: 0;
                transform: translateY(26px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
    }
</style>


<section class="kd-rcs-section">
    <div class="kd-rcs-wrap">

        <div class="kd-rcs-head">
            <div class="kd-rcs-eyebrow"> Use Cases</div>
            <h2>AI / ML <span>In Action</span></h2>
            <!-- <p>Give your business a richer messaging experience with interactive communication, verified brand trust and seamless native reach.</p> -->
        </div>

        <div class="kd-rcs-grid">

            <article class="kd-rcs-card kd-card-one">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25px" fill="#6602a0">
                        <path d="M320 171.9L305 151.1C280 116.5 239.9 96 197.1 96C123.6 96 64 155.6 64 229.1L64 231.7C64 255.3 70.2 279.7 80.6 304L186.6 304C189.8 304 192.7 302.1 194 299.1L225.8 222.8C229.5 214 238.1 208.2 247.6 208C257.1 207.8 265.9 213.4 269.8 222.1L321.1 336L362.5 253.2C366.6 245.1 374.9 239.9 384 239.9C393.1 239.9 401.4 245 405.5 253.2L428.7 299.5C430.1 302.2 432.8 303.9 435.9 303.9L559.5 303.9C570 279.6 576.1 255.2 576.1 231.6L576.1 229C576 155.6 516.4 96 442.9 96C400.2 96 360 116.5 335 151.1L320 171.8zM533.6 352L435.8 352C414.6 352 395.2 340 385.7 321L384 317.6L341.5 402.7C337.4 411 328.8 416.2 319.5 416C310.2 415.8 301.9 410.3 298.1 401.9L248.8 292.4L238.3 317.6C229.6 338.5 209.2 352.1 186.6 352.1L106.4 352.1C153.6 425.9 229.4 493.8 276.8 530C289.2 539.4 304.4 544.1 319.9 544.1C335.4 544.1 350.7 539.5 363 530C410.6 493.7 486.4 425.8 533.6 352z" />
                    </svg>
                </div>
                <h3>Healthcare</h3>
                <p>Disease prediction, medical imaging, patient analytics.</p>
            </article>

            <article class="kd-rcs-card kd-card-three">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25px" fill="#6602a0">
                        <path d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z" />
                    </svg>
                </div>
                <h3>Retail </h3>
                <p>Demand forecasting, recommendation engines, pricing.</p>
            </article>

            <article class="kd-rcs-card kd-card-two">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25px" fill="#500aac">
                        <path d="M335.9 84.2C326.1 78.6 314 78.6 304.1 84.2L80.1 212.2C67.5 219.4 61.3 234.2 65 248.2C68.7 262.2 81.5 272 96 272L128 272L128 480L128 480L76.8 518.4C68.7 524.4 64 533.9 64 544C64 561.7 78.3 576 96 576L544 576C561.7 576 576 561.7 576 544C576 533.9 571.3 524.4 563.2 518.4L512 480L512 272L544 272C558.5 272 571.2 262.2 574.9 248.2C578.6 234.2 572.4 219.4 559.8 212.2L335.8 84.2zM464 272L464 480L400 480L400 272L464 272zM352 272L352 480L288 480L288 272L352 272zM240 272L240 480L176 480L176 272L240 272zM320 160C337.7 160 352 174.3 352 192C352 209.7 337.7 224 320 224C302.3 224 288 209.7 288 192C288 174.3 302.3 160 320 160z" />
                    </svg>
                </div>
                <h3>Finance </h3>
                <p>Fraud detection, risk scoring, algorithmic trading.</p>
            </article>

            <article class="kd-rcs-card kd-card-5">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25px" fill="#6602a0">
                        <path d="M256 64C238.3 64 224 78.3 224 96L224 128L215.1 128C173.1 128 136 155.3 123.5 195.4L100.5 268.9C78.5 283.1 64 307.9 64 336L64 512C64 529.7 78.3 544 96 544L128 544C145.7 544 160 529.7 160 512L160 480L480 480L480 512C480 529.7 494.3 544 512 544L544 544C561.7 544 576 529.7 576 512L576 336C576 307.9 561.5 283.1 539.6 268.9L516.6 195.4C504.1 155.3 466.9 128 424.9 128L416 128L416 96C416 78.3 401.7 64 384 64L256 64zM215.1 192L425 192C439 192 451.4 201.1 455.5 214.5L468.5 256L171.6 256L184.6 214.5C188.8 201.1 201.1 192 215.1 192zM160 336C177.7 336 192 350.3 192 368C192 385.7 177.7 400 160 400C142.3 400 128 385.7 128 368C128 350.3 142.3 336 160 336zM448 368C448 350.3 462.3 336 480 336C497.7 336 512 350.3 512 368C512 385.7 497.7 400 480 400C462.3 400 448 385.7 448 368z" />
                    </svg>
                </div>
                <h3>Transportation </h3>
                <p>Route optimization, traffic prediction, self-driving systems.</p>
            </article>

            <article class="kd-rcs-card kd-card-4">
                <div class="kd-card-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25px" fill="#6602a0">
                        <path d="M53.5 245.1L110.3 131.4C121.2 109.7 143.3 96 167.6 96L472.5 96C496.7 96 518.9 109.7 529.7 131.4L586.5 245.1C590.1 252.3 592 260.2 592 268.3C592 295.6 570.8 318 544 319.9L544 512C544 529.7 529.7 544 512 544C494.3 544 480 529.7 480 512L480 320L384 320L384 496C384 522.5 362.5 544 336 544L144 544C117.5 544 96 522.5 96 496L96 319.9C69.2 318 48 295.6 48 268.3C48 260.3 49.9 252.3 53.5 245.1zM160 320L160 432C160 440.8 167.2 448 176 448L304 448C312.8 448 320 440.8 320 432L320 320L160 320z" />
                    </svg>
                </div>
                <h3>Marketing </h3>
                <p>Customer segmentation, churn prediction, campaign optimization.</p>
            </article>


        </div>
    </div>
</section>