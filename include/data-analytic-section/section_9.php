 <!-- section 9 -->
    <style>
        .dgfc-section {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px 80px;
            /* font-family: 'Segoe UI', Arial, sans-serif; */
            color: #1a1a1a;
            overflow: hidden;
        }

        /* ---------- decorative background blobs (CSS only, no images) ---------- */

        .dgfc-blob {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, #f5741e73, rgba(240, 157, 90, 0.1));
            z-index: 0;
            pointer-events: none;
            animation: dgfc-float 9s ease-in-out infinite;
        }

        .dgfc-blob-1 {
            width: 240px;
            height: 240px;
            top: -60px;
            left: 60px;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 60%);
            animation-delay: 0s;
        }

        .dgfc-blob-2 {
            width: 340px;
            height: 340px;
            top: -40px;
            right: 40px;
            clip-path: polygon(0 0, 100% 0, 100% 60%, 0 100%);
            animation-delay: 1.5s;
        }

        .dgfc-blob-3 {
            width: 300px;
            height: 300px;
            top: 220px;
            left: -80px;
            animation-delay: 3s;
        }

        .dgfc-blob-4 {
            width: 260px;
            height: 260px;
            top: 260px;
            right: -70px;
            animation-delay: 4.5s;
        }

        @keyframes dgfc-float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-16px);
            }
        }

        /* ---------- header ---------- */

        .dgfc-content {
            position: relative;
            z-index: 1;
        }

        .dgfc-eyebrow {
            font-size: 15px;
            color: #F5751E;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .dgfc-heading {
            font-size: 44px;
            font-weight: 800;
            line-height: 1.3;
            margin: 0 0 40px 0;
            max-width: 760px;
        }

        .dgfc-heading-accent {
            color: #F5751E;
        }

        /* ---------- comparison grid ---------- */

        .dgfc-compare-grid {
            display: grid;
            grid-template-columns: 1.15fr 1fr;
            gap: 26px;
            align-items: start;
        }

        .dgfc-col-digifine {
            border: 1.5px solid #2f6df3;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 14px 34px rgba(47, 109, 243, 0.10);
        }

        .dgfc-col-header {
            text-align: center;
            padding: 20px 20px 16px;
            font-size: 19px;
            font-weight: 800;
            color: #F5751E;
            letter-spacing: 0.5px;
        }

        .dgfc-col-header-other {
            color: #1a1a1a;
            font-weight: 700;
            letter-spacing: 0;
        }

        .dgfc-row {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 16px 22px;
            border-top: 1px solid #eef0f4;
            font-size: 15px;
            color: #2b2f38;
            line-height: 1.5;
            opacity: 0;
            transform: translateY(8px);
            animation: dgfc-row-in 0.5s ease forwards;
        }

        @keyframes dgfc-row-in {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dgfc-check {
            flex: 0 0 auto;
            width: 20px;
            height: 20px;
            border-radius: 4px;
            background: #22c55e;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-top: 1px;
        }

        .dgfc-row-other {
            color: #5b6270;
            padding-left: 22px;
        }

        .dgfc-col-other {
            background: #fff;
        }

        .dgfc-row:nth-child(2) {
            animation-delay: 0.05s;
        }

        .dgfc-row:nth-child(3) {
            animation-delay: 0.10s;
        }

        .dgfc-row:nth-child(4) {
            animation-delay: 0.15s;
        }

        .dgfc-row:nth-child(5) {
            animation-delay: 0.20s;
        }

        .dgfc-row:nth-child(6) {
            animation-delay: 0.25s;
        }

        .dgfc-row:nth-child(7) {
            animation-delay: 0.30s;
        }

        .dgfc-row:nth-child(8) {
            animation-delay: 0.35s;
        }

        .dgfc-row:nth-child(9) {
            animation-delay: 0.40s;
        }

        .dgfc-col-digifine .dgfc-row:hover {
            background: #f5f8ff;
        }

        .dgfc-col-other .dgfc-row:hover {
            background: #fafafa;
        }

        /* ---------- buttons ---------- */

        .dgfc-cta-row {
            display: flex;
            justify-content: center;
            gap: 18px;
            margin-top: 44px;
            flex-wrap: wrap;
        }

        .dgfc-btn {
            padding: 15px 34px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: transform 0.2s ease, box-shadow 0.25s ease, opacity 0.25s ease;
        }

        .dgfc-btn-outline {
            background: #fff;
            color: #1a1a1a;
            border: 1.5px solid #d9dde5;
        }

        .dgfc-btn-outline:hover {
            border-color: #2f6df3;
            color: #F5751E;
            transform: translateY(-2px);
        }

        .dgfc-btn-solid {
            /* background: linear-gradient(90deg, #4f46e5, #7c3aed); */
            color: #fff;
            box-shadow: 0 10px 24px rgba(99, 70, 230, 0.30);
        }

        .dgfc-btn-solid:hover {
            transform: translateY(-2px);
            /* box-shadow: 0 14px 30px rgba(99, 70, 230, 0.40); */
        }

        .dgfc-btn-solid:active,
        .dgfc-btn-outline:active {
            transform: translateY(0);
        }

        /* ---------- responsive ---------- */

        @media (max-width: 900px) {
            .dgfc-compare-grid {
                grid-template-columns: 1fr;
            }

            .dgfc-heading {
                font-size: 26px;
            }
        }

        @media (max-width: 520px) {
            .dgfc-section {
                padding: 34px 14px 60px;
            }

            .dgfc-heading {
                font-size: 21px;
            }

            .dgfc-row {
                font-size: 13.5px;
                padding: 13px 16px;
            }

            .dgfc-col-header {
                font-size: 16px;
            }

            .dgfc-btn {
                width: 100%;
                text-align: center;
                padding: 14px 20px;
            }

            .dgfc-cta-row {
                flex-direction: column;
            }

            .dgfc-blob-1,
            .dgfc-blob-2,
            .dgfc-blob-3,
            .dgfc-blob-4 {
                width: 150px;
                height: 150px;
            }
        }
    </style>
    <section class="dgfc-section">

        <div class="dgfc-blob dgfc-blob-1"></div>
        <div class="dgfc-blob dgfc-blob-2"></div>
        <div class="dgfc-blob dgfc-blob-3"></div>
        <div class="dgfc-blob dgfc-blob-4"></div>

        <div class="dgfc-content">

            <div class="dgfc-eyebrow">How Our Program Compares</div>
            <h2 class="dgfc-heading">
                Why is Digifine's Data Analytics <span class="dgfc-heading-accent">Course the Best?</span>
            </h2>
<br><br>
            <div class="dgfc-compare-grid">

                <div class="dgfc-col-digifine">
                    <div class="dgfc-col-header">DIGIFINE</div>

                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>100% Placement Assistance at top
                            companies</span></div>
                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>3-months Internship during the
                            course</span></div>
                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>Professional certifications that
                            are globally recognized for Power BI, Tableau &amp; Data Analytics</span></div>
                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>Industry Expert, Highly Skilled
                            In-house Trainers</span></div>
                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>Training on the programming
                            language Python with libraries like NumPy, Pandas, Matplotlib, etc. along with an upgraded
                            syllabus (with tools like MySQL, Tableau, PowerBI, Advanced Excel, Google Sheet,
                            etc.)</span></div>
                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>Practical Training with Live
                            Projects, Case Studies and Regular Assignments</span></div>
                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>Post-Course Support for each
                            student even after completion of training</span></div>
                    <div class="dgfc-row"><span class="dgfc-check">&#10003;</span><span>200+ hours of Intense Course
                            Training</span></div>
                </div>

                <div class="dgfc-col-other">
                    <div class="dgfc-col-header dgfc-col-header-other">Other Courses</div>

                    <div class="dgfc-row dgfc-row-other">No Placement Assistance</div>
                    <div class="dgfc-row dgfc-row-other">No internship letter during the course</div>
                    <div class="dgfc-row dgfc-row-other">No globally recognized certifications</div>
                    <div class="dgfc-row dgfc-row-other">Faculty with not enough relevant experience</div>
                    <div class="dgfc-row dgfc-row-other">No overseas mentorship</div>
                    <div class="dgfc-row dgfc-row-other">No unique, relevant and upgraded syllabus with multiple tools,
                        programming languages and databases</div>
                    <div class="dgfc-row dgfc-row-other">Not enough assessments or hands-on training</div>
                    <div class="dgfc-row dgfc-row-other">No post-course support after training</div>
                    <div class="dgfc-row dgfc-row-other">Not enough hours of training</div>
                </div>

            </div>

            <div class="dgfc-cta-row">
                <button class="dgfc-btn dgfc-btn-outline">Download Syllabus</button>
                <button class="dgfc-btn dgfc-btn-solid brand-gradient-animated">Apply Now</button>
            </div>

        </div>

    </section>