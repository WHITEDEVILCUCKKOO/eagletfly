
    <!-- section 8 -->
    <style>
        .dgfc2-section {
            position: relative;
            /* font-family: 'Segoe UI', Arial, sans-serif; */
            background: #0d0d0f;
            padding: 60px 20px 70px;
            text-align: center;
            overflow: hidden;
        }

        .dgfc2-glow {
            position: absolute;
            top: -120px;
            left: 50%;
            transform: translateX(-50%);
            width: 520px;
            height: 320px;
            background: radial-gradient(ellipse at center, rgba(245, 166, 35, 0.35), transparent 70%);
            filter: blur(10px);
            pointer-events: none;
            animation: dgfc2-pulse 4s ease-in-out infinite;
        }

        @keyframes dgfc2-pulse {

            0%,
            100% {
                opacity: 0.7;
            }

            50% {
                opacity: 1;
            }
        }

        .dgfc2-content {
            position: relative;
            z-index: 1;
            max-width: 760px;
            margin: 0 auto;
        }

        .dgfc2-eyebrow {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #F5751E;
            margin: 0 0 14px 0;
            opacity: 0;
            animation: dgfc2-fade-up 0.6s ease forwards;
        }

        .dgfc2-heading {
            font-size: 38px;
            font-weight: 900;
            line-height: 1.25;
            margin: 0 0 20px 0;
            color: #fff;
            opacity: 0;
            animation: dgfc2-fade-up 0.6s ease 0.1s forwards;
        }

        .dgfc2-heading-line2 {
            display: block;
            color: #F5751E;
            position: relative;
        }

        .dgfc2-heading-line2::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -6px;
            transform: translateX(-50%);
            width: 0%;
            height: 3px;
            background: #F5751E;
            border-radius: 2px;
            animation: dgfc2-underline-grow 0.8s ease 0.5s forwards;
        }

        @keyframes dgfc2-underline-grow {
            to {
                width: 260px;
            }
        }

        @keyframes dgfc2-fade-up {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dgfc2-subtext {
            font-size: 15.5px;
            color: #9aa0ac;
            line-height: 1.7;
            margin: 0 0 34px 0;
            opacity: 0;
            animation: dgfc2-fade-up 0.6s ease 0.2s forwards;
        }

        .dgfc2-btn-row {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            opacity: 0;
            animation: dgfc2-fade-up 0.6s ease 0.3s forwards;
        }

        .dgfc2-btn {
            padding: 16px 28px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.25s ease, background 0.25s ease;
        }

        .dgfc2-btn-solid {
            background: linear-gradient(90deg, #f5c33e, #f5a623);
            color: #1a1a1a;
            border: none;
            box-shadow: 0 10px 24px rgba(245, 166, 35, 0.30);
        }

        .dgfc2-btn-solid:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 32px rgba(245, 166, 35, 0.42);
        }

        .dgfc2-btn-outline {
            background: transparent;
            color: #fff;
            border: 1.5px solid rgba(255, 255, 255, 0.5);
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .dgfc2-btn-outline:hover {
            border-color: #fff;
            background: rgba(255, 255, 255, 0.06);
            transform: translateY(-3px);
        }

        .dgfc2-whatsapp-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #25d366;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: #fff;
        }

        /* ---------- responsive ---------- */

        @media (max-width: 620px) {
            .dgfc2-heading {
                font-size: 27px;
            }

            .dgfc2-subtext {
                font-size: 13.5px;
            }

            .dgfc2-btn-row {
                flex-direction: column;
                align-items: stretch;
            }

            .dgfc2-btn {
                width: 100%;
                text-align: center;
                justify-content: center;
            }

            .dgfc2-section {
                padding: 44px 18px 54px;
            }
        }
    </style>
    <section class="dgfc2-section">
        <div class="dgfc2-glow"></div>

        <div class="dgfc2-content">
            <p class="dgfc2-eyebrow">READY TO START?</p>
            <h2 class="dgfc2-heading">
                Your First Job Experience
                <span class="dgfc2-heading-line2">Starts Here</span>
            </h2>
            <br>
            <br>
            <p class="dgfc2-subtext">Don't wait for your first job to get real data experience. Start building
                dashboards and analysing real datasets today.</p>

            <div class="dgfc2-btn-row">
                <button class="dgfc2-btn dgfc2-btn-solid">Enroll Now — Limited Seats</button>
                <button class="dgfc2-btn dgfc2-btn-outline"><span class="dgfc2-whatsapp-icon">&#9742;</span>Connect on
                    Whatsapp</button>
            </div>
        </div>

    </section>