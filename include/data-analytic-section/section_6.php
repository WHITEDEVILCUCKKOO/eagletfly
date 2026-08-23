
    <!-- section 6 -->
    <style>
        .dgfw-section {
            /* font-family: 'Segoe UI', Arial, sans-serif; */
            background: #ffffff;
            padding: 50px 20px 70px;
            position: relative;
            overflow: hidden;
        }

        .dgfw-glow-left {
            position: absolute;
            top: 0;
            left: 15%;
            width: 260px;
            height: 100%;
            background: radial-gradient(ellipse at top, rgba(245, 120, 30, 0.06), transparent 65%);
            pointer-events: none;
        }

        .dgfw-glow-right {
            position: absolute;
            top: 0;
            right: 15%;
            width: 260px;
            height: 100%;
            background: radial-gradient(ellipse at top, rgba(245, 120, 30, 0.06), transparent 65%);
            pointer-events: none;
        }

        .dgfw-container {
            position: relative;
            z-index: 1;
            max-width: 1220px;
            margin: 0 auto;
        }

        .dgfw-heading {
            text-align: center;
            font-size: 24px;
            font-weight: 800;
            margin: 0 0 8px 0;
            color: #1a1a1a;
        }

        .dgfw-heading-brand {
            color: #f5751e;
        }

        .dgfw-subtext {
            text-align: center;
            font-size: 13px;
            color: #0284c7;
            margin: 0 0 34px 0;
        }

        /* ---------- grid ---------- */

        .dgfw-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            align-items: start;
        }

        .dgfw-col {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .dgfw-col-mid {
            padding-top: 60px;
        }

        .dgfw-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 13px 16px;
            background: #ffffff;
            border: 1px solid #f0d9c8;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            opacity: 0;
            transform: translateY(10px);
            animation: dgfw-item-in 0.5s ease forwards;
            transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.25s ease;
        }

        @keyframes dgfw-item-in {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dgfw-item:hover {
            border-color: #f5751e;
            box-shadow: 0 8px 22px rgba(245, 117, 30, 0.20);
            transform: translateY(-3px);
        }

        .dgfw-icon {
            flex: 0 0 auto;
            width: 32px;
            height: 32px;
            border-radius: 6px;
            background: #fdf1e7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
        }

        .dgfw-item-text {
            font-size: 12.5px;
            font-weight: 600;
            color: #26262a;
            line-height: 1.5;
        }

        /* stagger delays */
        .dgfw-col .dgfw-item:nth-child(1) {
            animation-delay: 0.02s;
        }

        .dgfw-col .dgfw-item:nth-child(2) {
            animation-delay: 0.06s;
        }

        .dgfw-col .dgfw-item:nth-child(3) {
            animation-delay: 0.10s;
        }

        .dgfw-col .dgfw-item:nth-child(4) {
            animation-delay: 0.14s;
        }

        .dgfw-col .dgfw-item:nth-child(5) {
            animation-delay: 0.18s;
        }

        .dgfw-col .dgfw-item:nth-child(6) {
            animation-delay: 0.22s;
        }

        .dgfw-col .dgfw-item:nth-child(7) {
            animation-delay: 0.26s;
        }

        .dgfw-col .dgfw-item:nth-child(8) {
            animation-delay: 0.30s;
        }

        .dgfw-col .dgfw-item:nth-child(9) {
            animation-delay: 0.34s;
        }

        .dgfw-col .dgfw-item:nth-child(10) {
            animation-delay: 0.38s;
        }

        .dgfw-col .dgfw-item:nth-child(11) {
            animation-delay: 0.42s;
        }

        .dgfw-col .dgfw-item:nth-child(12) {
            animation-delay: 0.46s;
        }

        /* ---------- responsive ---------- */

        @media (max-width: 900px) {
            .dgfw-grid {
                grid-template-columns: 1fr;
            }

            .dgfw-col-mid {
                padding-top: 0;
            }
        }

        @media (max-width: 480px) {
            .dgfw-heading {
                font-size: 19px;
            }

            .dgfw-item-text {
                font-size: 12px;
            }

            .dgfw-section {
                padding: 36px 14px 50px;
            }
        }
    </style>
    <section class="dgfw-section">
        <div class="dgfw-glow-left"></div>
        <div class="dgfw-glow-right"></div>

        <div class="dgfw-container">

            <h2 class="dgfw-heading">Why Choose <span class="dgfw-heading-brand">Digifine</span> Data Analytics</h2>
            <p class="dgfw-subtext">Empowering Careers with Industry-Ready Skills.</p>

            <div class="dgfw-grid">

                <!-- Column 1 -->
                <div class="dgfw-col">
                    <div class="dgfw-item"><span class="dgfw-icon">&#128176;</span><span
                            class="dgfw-item-text">Specialized Pocket
                            Friendly Programs as per your requirements</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128187;</span><span class="dgfw-item-text">Live
                            Projects With
                            Hands-on Experience</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#129309;</span><span
                            class="dgfw-item-text">Corporate
                            Soft-skills &amp; Personality Building Sessions</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128225;</span><span class="dgfw-item-text">Digital
                            Online,
                            Classroom, Hybrid Batches</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128222;</span><span
                            class="dgfw-item-text">Interview Calls
                            Assistance &amp; Mock Sessions</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128101;</span><span class="dgfw-item-text">1:1
                            Mentorship
                            when required</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#127891;</span><span class="dgfw-item-text">Industry
                            Experienced Trainers</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#127909;</span><span class="dgfw-item-text">Class
                            Recordings
                            for Missed Classes</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128260;</span><span class="dgfw-item-text">1 Year
                            FREE Repeat
                            Option</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#127873;</span><span class="dgfw-item-text">Bonus
                            Resources</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#9889;</span><span class="dgfw-item-text">Fastest
                            1:1 doubt
                            support</span></div>
                </div>

                <!-- Column 2 -->
                <div class="dgfw-col dgfw-col-mid">
                    <div class="dgfw-item"><span class="dgfw-icon">&#128179;</span><span class="dgfw-item-text">Flexible
                            EMI
                            Plans</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128218;</span><span class="dgfw-item-text">Adaptive
                            LMS</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128246;</span><span class="dgfw-item-text">Free
                            Wifi
                            Facilities</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128197;</span><span class="dgfw-item-text">Flexible
                            Scheduling</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128200;</span><span class="dgfw-item-text">Ongoing
                            Career
                            Support</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128188;</span><span
                            class="dgfw-item-text">Placement
                            Drives</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128187;</span><span class="dgfw-item-text">GitHub
                            Project
                            Implementations</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#127760;</span><span class="dgfw-item-text">Real
                            World
                            Topics</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#11088;</span><span class="dgfw-item-text">5/5
                            rating for 99%
                            doubt solutions</span></div>
                </div>

                <!-- Column 3 -->
                <div class="dgfw-col">
                    <div class="dgfw-item"><span class="dgfw-icon">&#127942;</span><span class="dgfw-item-text">Be
                            Different With
                            Master Certificate</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128225;</span><span class="dgfw-item-text">Latest
                            Market
                            Technology &amp; Practical Training</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128196;</span><span class="dgfw-item-text">Resume
                            Building
                            Session &amp; Job Portals Training</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128194;</span><span class="dgfw-item-text">Enhanced
                            Capstone
                            Projects for learning</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#127891;</span><span class="dgfw-item-text">Stand
                            Out with an
                            Impressive Certificate</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128197;</span><span class="dgfw-item-text">Weekday
                            and
                            Weekend Batches</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#127891;</span><span
                            class="dgfw-item-text">Workshops &amp;
                            Seminars with Industry Experts</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128222;</span><span
                            class="dgfw-item-text">Unlimited
                            Interview Calls</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#9729;</span><span class="dgfw-item-text">AWS Cloud
                            Project
                            Deployments</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128187;</span><span class="dgfw-item-text">Live
                            Quizzes</span></div>
                    <div class="dgfw-item"><span class="dgfw-icon">&#128172;</span><span class="dgfw-item-text">Resolve
                            doubts any
                            time through chat, voice notes, calling or meeting with instructors.</span></div>
                </div>

            </div>

        </div>
    </section>
