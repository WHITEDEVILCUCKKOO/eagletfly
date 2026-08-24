
    <!-- section 5 -->
    <style>
        .dgfo-section {
            /* font-family: 'Segoe UI', Arial, sans-serif; */
            max-width: 1100px;
            margin: 0 auto;
            padding: 50px 20px 70px;
            color: #1a1a1a;
        }

        .dgfo-eyebrow {
            font-size: 13px;
            font-weight: 700;
            color: #f5a623;
            letter-spacing: 1.5px;
            margin: 0 0 10px 0;
        }

        .dgfo-heading {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.3;
            margin: 0 0 18px 0;
        }

        .dgfo-heading-accent {
            color: #f5a623;
            text-decoration: underline;
            text-decoration-thickness: 2.5px;
            text-underline-offset: 8px;
        }

        .dgfo-subtext {
            font-size: 15px;
            color: #5b6270;
            line-height: 1.7;
            max-width: 640px;
            margin: 0 0 34px 0;
        }

        /* ---------- pill grid ---------- */

        .dgfo-pill-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .dgfo-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 22px;
            border-radius: 30px;
            border: 1.5px solid #e2e5ec;
            background: #fff;
            font-size: 14.5px;
            font-weight: 600;
            color: #1a1a1a;
            cursor: pointer;
            opacity: 0;
            transform: translateY(10px);
            animation: dgfo-pill-in 0.5s ease forwards;
            transition: border-color 0.25s ease, box-shadow 0.25s ease, transform 0.2s ease, background 0.25s ease, color 0.25s ease;
        }

        @keyframes dgfo-pill-in {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dgfo-pill:hover {
            border-color: #f5a623;
            box-shadow: 0 8px 18px rgba(245, 166, 35, 0.18);
            transform: translateY(-3px);
        }

        .dgfo-pill-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #f5a623;
            flex: 0 0 auto;
        }

        .dgfo-pill.dgfo-pill-active {
            border-color: #fcfcfc;
            background: #F5820B;
            color: #fffefb;
            box-shadow: 0 8px 18px rgba(245, 166, 35, 0.22);
        }

        /* stagger animation delays */
        .dgfo-pill-wrap .dgfo-pill:nth-child(1) {
            animation-delay: 0.02s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(2) {
            animation-delay: 0.06s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(3) {
            animation-delay: 0.10s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(4) {
            animation-delay: 0.14s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(5) {
            animation-delay: 0.18s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(6) {
            animation-delay: 0.22s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(7) {
            animation-delay: 0.26s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(8) {
            animation-delay: 0.30s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(9) {
            animation-delay: 0.34s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(10) {
            animation-delay: 0.38s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(11) {
            animation-delay: 0.42s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(12) {
            animation-delay: 0.46s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(13) {
            animation-delay: 0.50s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(14) {
            animation-delay: 0.54s;
        }

        .dgfo-pill-wrap .dgfo-pill:nth-child(15) {
            animation-delay: 0.58s;
        }

        /* ---------- responsive ---------- */

        @media (max-width: 640px) {
            .dgfo-heading {
                font-size: 24px;
            }

            .dgfo-subtext {
                font-size: 13.5px;
            }

            .dgfo-pill {
                padding: 11px 18px;
                font-size: 13px;
            }
        }

        @media (max-width: 400px) {
            .dgfo-pill-wrap {
                gap: 10px;
            }
        }
    </style>
    <section class="dgfo-section ">

        <p class="dgfo-eyebrow  sole_3_background ">CAREER OUTCOMES</p>
        <h2 class="dgfo-heading">Roles You Can Apply For <span class="dgfo-heading-accent  sole_3_background ">After This Program</span>
        </h2>
        <br>
        <br>
        <p class="dgfo-subtext">Graduate job-ready for the most in-demand data roles in business and tech — with a
            portfolio and real project experience to back it up.</p>
            <br>

        <div class="dgfo-pill-wrap" id="dgfoPillWrap">
            <button class="dgfo-pill dgfo-pill-active"><span class="dgfo-pill-dot"></span>Data Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Business Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>BI Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>MIS Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Reporting Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>SQL Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Data Operations Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Junior Data Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Marketing Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Product Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Operations Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Financial Analyst (Data)</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Insights Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Associate Data Scientist</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>E-Commerce Analyst</button>
            <button class="dgfo-pill"><span class="dgfo-pill-dot"></span>Dashboard Developer</button>
        </div>

    </section>
    <script>
        (function () {
            var dgfoPills = document.querySelectorAll('#dgfoPillWrap .dgfo-pill');
            dgfoPills.forEach(function (pill) {
                pill.addEventListener('click', function () {
                    dgfoPills.forEach(function (p) {
                        p.classList.remove('dgfo-pill-active');
                    });
                    pill.classList.add('dgfo-pill-active');
                });
            });
        })();
    </script>