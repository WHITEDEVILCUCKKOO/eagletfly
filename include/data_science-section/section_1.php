    <style>
        .hero-wrap {
            --hero-navy-deep: #0E1330;
            --hero-navy-mid: #171C42;
            --hero-teal: #35D0BA;
            --hero-coral: #FF6F59;
            --hero-fog: #A8AEDB;
            box-sizing: border-box;
            background: radial-gradient(120% 140% at 85% -10%, #232a5c 0%, var(--hero-navy-deep) 55%), var(--hero-navy-deep);
            padding: 96px 8vw 88px;
            overflow: hidden;
            position: relative;
            /* font-family: 'Inter', sans-serif; */
        }

        .hero-wrap * {
            box-sizing: border-box;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 56px;
            align-items: center;
            max-width: 1240px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--hero-teal);
            /* font-family: 'JetBrains Mono', monospace; */
            font-size: 13px;
            letter-spacing: 0.02em;
            margin: 0 0 22px;
            opacity: 0;
            transform: translateY(14px);
            animation: heroFade 0.7s ease forwards 0.1s;
        }

        .hero-kicker span.dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--hero-teal);
            display: inline-block;
        }

        .hero-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(34px, 4.2vw, 56px);
            line-height: 1.08;
            color: #F6F5FF;
            margin: 0 0 22px;
            max-width: 15ch;
            opacity: 0;
            transform: translateY(18px);
            animation: heroFade 0.75s ease forwards 0.22s;
        }

        .hero-sub {
            font-size: 17px;
            line-height: 1.7;
            color: var(--hero-fog);
            max-width: 46ch;
            margin: 0 0 34px;
            opacity: 0;
            transform: translateY(18px);
            animation: heroFade 0.75s ease forwards 0.36s;
        }

        .hero-actions {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(18px);
            animation: heroFade 0.75s ease forwards 0.5s;
        }

        .hero-btn-primary {
            background: var(--hero-teal);
            color: #06231F;
            border: none;
            /* font-family: 'Inter', sans-serif; */
            font-weight: 600;
            font-size: 15px;
            padding: 14px 26px;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 8px 24px rgba(53, 208, 186, 0.25);
        }

        .hero-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(53, 208, 186, 0.35);
        }

        .hero-btn-secondary {
            background: transparent;
            color: #F6F5FF;
            border: 1px solid rgba(246, 245, 255, 0.28);
            /* font-family: 'Inter', sans-serif; */
            font-weight: 600;
            font-size: 15px;
            padding: 14px 26px;
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.2s ease, background 0.2s ease;
        }

        .hero-btn-secondary:hover {
            border-color: rgba(246, 245, 255, 0.6);
            background: rgba(255, 255, 255, 0.05);
        }

        .hero-trust {
            display: flex;
            gap: 28px;
            flex-wrap: wrap;
            opacity: 0;
            transform: translateY(18px);
            animation: heroFade 0.75s ease forwards 0.64s;
        }

        .hero-trust-item {
            /* font-family: 'JetBrains Mono', monospace; */
            font-size: 13px;
            color: #C6CAF0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .hero-trust-item b {
            color: #F6F5FF;
            font-size: 15px;
        }

        .hero-visual {
            position: relative;
            height: 420px;
            opacity: 0;
            transform: translateY(24px) scale(0.98);
            animation: heroFade 0.9s ease forwards 0.3s;
        }

        .hero-visual svg {
            width: 100%;
            height: 100%;
        }

        .hero-node {
            animation: heroPulse 3.6s ease-in-out infinite;
            transform-origin: center;
        }

        .hero-node.n2 {
            animation-delay: 0.6s;
        }

        .hero-node.n3 {
            animation-delay: 1.2s;
        }

        .hero-node.n4 {
            animation-delay: 1.8s;
        }

        .hero-line {
            stroke-dasharray: 6 6;
            animation: heroDash 6s linear infinite;
        }

        .hero-bar {
            transform-origin: bottom;
            animation: heroBarGrow 1.4s cubic-bezier(.2, .8, .2, 1) forwards;
        }

        @keyframes heroFade {
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes heroPulse {

            0%,
            100% {
                opacity: 0.55;
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes heroDash {
            to {
                stroke-dashoffset: -120;
            }
        }

        @keyframes heroBarGrow {
            from {
                transform: scaleY(0);
            }

            to {
                transform: scaleY(1);
            }
        }

        @media (max-width: 880px) {
            .hero-grid {
                grid-template-columns: 1fr;
            }

            .hero-visual {
                height: 300px;
                order: -1;
            }

            .hero-wrap {
                padding: 64px 6vw 56px;
            }
        }
    </style>

    <section class="hero-wrap">
        <div class="hero-grid">
            <div>
                <p class="hero-kicker"><span class="dot"></span>DATA SCIENCE COURSE · DELHI</p>
                <h1 class="hero-title">Learn to ask data the right questions.</h1>
                <p class="hero-sub">A 6-month, project-first Data Science program from Eaglefly Solutions — Python, SQL, Machine Learning and a portfolio built on real datasets, taught by people who ship models for a living.</p>
                <div class="hero-actions">
                    <button class="hero-btn-primary">Book a Free Demo</button>
                    <button class="hero-btn-secondary">Download Curriculum</button>
                </div>
                <div class="hero-trust">
                    <div class="hero-trust-item"><b>20,000+</b>&nbsp;learners trained</div>
                    <div class="hero-trust-item"><b>₹5–12L</b>&nbsp;average package</div>
                    <div class="hero-trust-item"><b>90%</b>&nbsp;placement rate</div>
                </div>
            </div>
            <div class="hero-visual">
                <svg viewBox="0 0 420 420" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="60" y1="330" x2="360" y2="330" stroke="#2C3268" stroke-width="1.5" />
                    <rect class="hero-bar" x="80" y="230" width="34" height="100" rx="4" fill="#35D0BA" style="animation-delay:0.2s" />
                    <rect class="hero-bar" x="140" y="170" width="34" height="160" rx="4" fill="#4E5AA8" style="animation-delay:0.4s" />
                    <rect class="hero-bar" x="200" y="120" width="34" height="210" rx="4" fill="#35D0BA" style="animation-delay:0.6s" />
                    <rect class="hero-bar" x="260" y="200" width="34" height="130" rx="4" fill="#4E5AA8" style="animation-delay:0.8s" />
                    <rect class="hero-bar" x="320" y="90" width="34" height="240" rx="4" fill="#FF6F59" style="animation-delay:1s" />
                    <line class="hero-line" x1="97" y1="220" x2="317" y2="80" stroke="#5B63B7" stroke-width="1.4" />
                    <circle class="hero-node n1" cx="97" cy="220" r="7" fill="#F6F5FF" />
                    <circle class="hero-node n2" cx="157" cy="160" r="7" fill="#F6F5FF" />
                    <circle class="hero-node n3" cx="217" cy="110" r="7" fill="#F6F5FF" />
                    <circle class="hero-node n4" cx="317" cy="80" r="7" fill="#F6F5FF" />
                </svg>
            </div>
        </div>
    </section>

    <script>
        // Section 1 script: no scroll trigger needed — hero animates on load only.
    </script>
