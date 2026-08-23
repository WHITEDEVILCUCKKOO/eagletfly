
    <!-- section 7 -->
    <style>
        .dgfm-wrapper {
            max-width: 1180px;
            margin: 0 auto;
            padding: 40px 20px 80px;
            /* font-family: 'Segoe UI', Arial, sans-serif; */
            color: #1a1a1a;
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 30px;
            align-items: start;
        }

        /* ================= LEFT SIDEBAR ================= */

        .dgfm-sidebar {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .dgfm-form-card {
            border: 1px solid #e6e8ee;
            border-radius: 14px;
            padding: 24px;
            background: #fff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        }

        .dgfm-form-title {
            font-size: 18px;
            font-weight: 700;
            margin: 0 0 6px 0;
        }

        .dgfm-form-sub {
            font-size: 13px;
            color: #6b7280;
            margin: 0 0 18px 0;
            line-height: 1.5;
        }

        .dgfm-input {
            width: 100%;
            box-sizing: border-box;
            padding: 12px 14px;
            margin-bottom: 12px;
            border: 1px solid #dde1e8;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .dgfm-input:focus {
            outline: none;
            border-color: #2f6df3;
            box-shadow: 0 0 0 3px rgba(47, 109, 243, 0.12);
        }

        .dgfm-submit-btn {
            width: 100%;
            padding: 13px;
            background: #1e1b4b;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.3px;
            cursor: pointer;
            margin-top: 4px;
            transition: background 0.25s ease, transform 0.2s ease;
        }

        .dgfm-submit-btn:hover {
            background: #312c7d;
            transform: translateY(-2px);
        }

        .dgfm-consent {
            font-size: 11.5px;
            color: #8a8f9a;
            margin-top: 12px;
            line-height: 1.5;
        }

        .dgfm-consent a {
            color: #2f6df3;
            text-decoration: none;
        }

        .dgfm-consent a:hover {
            text-decoration: underline;
        }

        .dgfm-info-block {
            padding: 0 4px;
        }

        .dgfm-info-title {
            font-size: 22px;
            font-weight: 800;
            margin: 0 0 10px 0;
            line-height: 1.3;
        }

        .dgfm-info-text {
            font-size: 14px;
            color: #5b6270;
            line-height: 1.6;
            margin: 0;
        }

        .dgfm-stats {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .dgfm-stat-card {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 16px;
            border: 1px solid #e6e8ee;
            border-radius: 12px;
            background: #fff;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .dgfm-stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.06);
        }

        .dgfm-stat-icon {
            flex: 0 0 auto;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            color: #fff;
        }

        .dgfm-stat-icon-green {
            background: #16a34a;
        }

        .dgfm-stat-icon-purple {
            background: #7c3aed;
        }

        .dgfm-stat-num {
            font-size: 14px;
            font-weight: 700;
        }

        .dgfm-stat-label {
            font-size: 12px;
            color: #6b7280;
        }

        .dgfm-brochure-btn {
            width: 100%;
            padding: 15px;
            background: #1e1b4b;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background 0.25s ease, transform 0.2s ease;
        }

        .dgfm-brochure-btn:hover {
            background: #312c7d;
            transform: translateY(-2px);
        }

        /* ================= RIGHT TIMELINE ================= */

        .dgfm-timeline {
            position: relative;
            padding-left: 26px;
        }

        .dgfm-timeline::before {
            content: "";
            position: absolute;
            left: 5px;
            top: 6px;
            bottom: 6px;
            width: 2px;
            background: #dfe4ee;
        }

        .dgfm-tl-item {
            position: relative;
            margin-bottom: 26px;
        }

        .dgfm-tl-dot {
            position: absolute;
            left: -26px;
            top: 4px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #2f6df3;
            box-shadow: 0 0 0 4px #fff;
        }

        .dgfm-tl-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 14px;
            cursor: pointer;
        }

        .dgfm-tl-title {
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 6px 0;
        }

        .dgfm-tl-desc {
            font-size: 13.5px;
            color: #5b6270;
            line-height: 1.6;
            margin: 0;
        }

        .dgfm-chevron {
            flex: 0 0 auto;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            transition: transform 0.3s ease;
            margin-top: 2px;
        }

        .dgfm-tl-item.dgfm-open .dgfm-chevron {
            transform: rotate(180deg);
        }

        /* ---- nested accordion (first module only) ---- */

        .dgfm-subaccordion {
            margin-top: 16px;
            border: 1px solid #e6e8ee;
            border-radius: 10px;
            overflow: hidden;
        }

        .dgfm-sub-item {
            border-top: 1px solid #e6e8ee;
        }

        .dgfm-sub-item:first-child {
            border-top: none;
        }

        .dgfm-sub-item.dgfm-sub-active {
            border: 1.5px solid #1a1a1a;
            border-radius: 8px;
            margin: -1px 3px;
        }

        .dgfm-sub-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 13px 16px;
            cursor: pointer;
            font-size: 13.5px;
            font-weight: 600;
        }

        .dgfm-sub-chevron {
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            transition: transform 0.3s ease;
            flex: 0 0 auto;
        }

        .dgfm-sub-item.dgfm-sub-open .dgfm-sub-chevron {
            transform: rotate(180deg);
        }

        .dgfm-sub-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease;
            padding: 0 16px;
        }

        .dgfm-sub-item.dgfm-sub-open .dgfm-sub-body {
            padding: 0 16px 14px 16px;
        }

        .dgfm-sub-body ul {
            margin: 0;
            padding-left: 18px;
        }

        .dgfm-sub-body li {
            font-size: 13px;
            color: #2f6df3;
            padding: 4px 0;
        }

        /* ---- collapsible body for simple modules ---- */

        .dgfm-tl-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease;
        }

        .dgfm-tl-item.dgfm-open .dgfm-tl-body {
            max-height: 500px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 860px) {
            .dgfm-wrapper {
                grid-template-columns: 1fr;
            }

            .dgfm-sidebar {
                order: 2;
            }

            .dgfm-timeline {
                order: 1;
            }
        }

        @media (max-width: 480px) {
            .dgfm-wrapper {
                padding: 26px 14px 60px;
                gap: 24px;
            }

            .dgfm-info-title {
                font-size: 19px;
            }

            .dgfm-tl-title {
                font-size: 14.5px;
            }

            .dgfm-tl-desc {
                font-size: 12.5px;
            }
        }
    </style>
    <section>
        <div class="dgfm-wrapper">

            <!-- ================= LEFT SIDEBAR ================= -->
            <div class="dgfm-sidebar">

                <div class="dgfm-form-card">
                    <h3 class="dgfm-form-title">Talk to Our Expert</h3>
                    <p class="dgfm-form-sub">Please share your details and we will reach out to you soon.</p>

                    <input class="dgfm-input" type="text" placeholder="Name">
                    <input class="dgfm-input" type="email" placeholder="E-mail">
                    <input class="dgfm-input" type="tel" placeholder="Phone">
                    <input class="dgfm-input" type="text" placeholder="Mumbai">

                    <button class="dgfm-submit-btn">Enquire Now</button>

                    <p class="dgfm-consent">
                        By submitting the form, you agree to our <a href="#">Terms and Conditions</a> and our <a
                            href="#">Privacy
                            Policy</a>.
                    </p>
                </div>

                <div class="dgfm-info-block">
                    <h3 class="dgfm-info-title">Comprehensive Curriculum</h3>
                    <p class="dgfm-info-text">Our data science course curriculum, meticulously crafted and delivered by
                        Industry-Expert Trainers, offers a dynamic fusion of academic depth and real-world know-how.</p>
                </div>

                <div class="dgfm-stats">
                    <div class="dgfm-stat-card">
                        <div class="dgfm-stat-icon dgfm-stat-icon-green">&#9201;</div>
                        <div>
                            <div class="dgfm-stat-num">200+ Hours</div>
                            <div class="dgfm-stat-label">Learning &amp; Practicals</div>
                        </div>
                    </div>
                    <div class="dgfm-stat-card">
                        <div class="dgfm-stat-icon dgfm-stat-icon-purple">&#128187;</div>
                        <div>
                            <div class="dgfm-stat-num">15+</div>
                            <div class="dgfm-stat-label">Projects &amp; Case Studies</div>
                        </div>
                    </div>
                    <div class="dgfm-stat-card">
                        <div class="dgfm-stat-icon dgfm-stat-icon-purple">&#128187;</div>
                        <div>
                            <div class="dgfm-stat-num">30+</div>
                            <div class="dgfm-stat-label">Tools &amp; Technologies</div>
                        </div>
                    </div>
                </div>

                <button class="dgfm-brochure-btn">DOWNLOAD BROCHURE &#8595;</button>

            </div>

            <!-- ================= RIGHT TIMELINE ================= -->
            <div class="dgfm-timeline" id="dgfmTimeline">

                <!-- Module 1 with nested accordion -->
                <div class="dgfm-tl-item dgfm-open">
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Data Science Course and AI Foundation: Orientation</h4>
                            <p class="dgfm-tl-desc">Gain a swift understanding of the data science training course and
                                key concepts,
                                while installing crucial software. This foundational session paves the way for a smooth
                                journey ahead,
                                minimizing obstacles in your learning path.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>

                    <div class="dgfm-tl-body" style="max-height:1200px;">
                        <div class="dgfm-subaccordion">

                            <div class="dgfm-sub-item dgfm-sub-open">
                                <div class="dgfm-sub-header">
                                    <span>Welcome and Course Overview</span>
                                    <span class="dgfm-sub-chevron">&#9650;</span>
                                </div>
                                <div class="dgfm-sub-body">
                                    <ul>
                                        <li>Introduction to the Data Science Course</li>
                                        <li>Importance of Data Science and AI</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dgfm-sub-item dgfm-sub-open dgfm-sub-active">
                                <div class="dgfm-sub-header">
                                    <span>Key Concepts Overview</span>
                                    <span class="dgfm-sub-chevron">&#9650;</span>
                                </div>
                                <div class="dgfm-sub-body">
                                    <ul>
                                        <li>Fundamentals of Data Science</li>
                                        <li>Introduction to Artificial Intelligence</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dgfm-sub-item">
                                <div class="dgfm-sub-header">
                                    <span>Software Installation Guidance</span>
                                    <span class="dgfm-sub-chevron">&#9660;</span>
                                </div>
                                <div class="dgfm-sub-body">
                                    <ul>
                                        <li>Installing Anaconda &amp; Jupyter Notebook</li>
                                        <li>Setting up required libraries</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dgfm-sub-item">
                                <div class="dgfm-sub-header">
                                    <span>Course Expectations and Structure</span>
                                    <span class="dgfm-sub-chevron">&#9660;</span>
                                </div>
                                <div class="dgfm-sub-body">
                                    <ul>
                                        <li>How the course is structured</li>
                                        <li>Assessment and project timelines</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dgfm-sub-item">
                                <div class="dgfm-sub-header">
                                    <span>Introduction to the Learning Environment</span>
                                    <span class="dgfm-sub-chevron">&#9660;</span>
                                </div>
                                <div class="dgfm-sub-body">
                                    <ul>
                                        <li>Navigating the learning portal</li>
                                        <li>Accessing resources and support</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Simple modules -->
                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Mastering MS Excel</h4>
                            <p class="dgfm-tl-desc">Unleash the power of data. Master essential Excel skills for
                                efficient data
                                analysis, visualization, and decision-making in various professional domains.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Python for Data Science</h4>
                            <p class="dgfm-tl-desc">Unlock the power of Python in data analysis. Learn essential skills
                                for handling,
                                analyzing, and visualizing data effectively.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">SQL for Data Science</h4>
                            <p class="dgfm-tl-desc">Master the language of databases. Acquire essential SQL skills to
                                extract,
                                manipulate, and analyze data for effective decision-making.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Application of Statistics and Probability</h4>
                            <p class="dgfm-tl-desc">Uncover the data-driven insights you need. Explore the practical
                                application of
                                statistics and probability to enhance decision-making in the world of data.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Explore Supervised Machine Learning</h4>
                            <p class="dgfm-tl-desc">Dive into the fundamentals of supervised learning, where algorithms
                                learn from
                                labeled data to make predictions and drive informed decisions.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Explore Unsupervised Machine Learning</h4>
                            <p class="dgfm-tl-desc">Explore the world of unsupervised learning, where algorithms uncover
                                valuable
                                insights from unlabeled data, driving innovation and discovery.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Explore Deep Learning</h4>
                            <p class="dgfm-tl-desc">Discover the transformative world of deep learning, where neural
                                networks simulate
                                the human brain to analyze and understand complex data.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Discover Natural Language Processing (NLP)</h4>
                            <p class="dgfm-tl-desc">Explore NLP, where machines comprehend, interpret, and generate
                                human language,
                                paving the way for advanced communication and understanding.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Class Project: Application of ML, Deep Learning and NLP</h4>
                            <p class="dgfm-tl-desc">Experience the power of ML, Deep Learning, and NLP in action. Solve
                                real-world
                                challenges and showcase your skills through hands-on projects.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

                <div class="dgfm-tl-item" data-module>
                    <span class="dgfm-tl-dot"></span>
                    <div class="dgfm-tl-header">
                        <div>
                            <h4 class="dgfm-tl-title">Mastering Data Visualization</h4>
                            <p class="dgfm-tl-desc">Learn to craft compelling visual stories, turning raw data into
                                actionable
                                insights
                                with Power BI and Tableau, the industry's leading Business Intelligence tools.</p>
                        </div>
                        <span class="dgfm-chevron">&#9660;</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <script>
        (function () {

            // main module headers toggle (first big item + simple ones)
            var dgfmHeaders = document.querySelectorAll('.dgfm-tl-header');
            dgfmHeaders.forEach(function (header) {
                header.addEventListener('click', function () {
                    var item = header.closest('.dgfm-tl-item');
                    var body = item.querySelector('.dgfm-tl-body');
                    var isOpen = item.classList.contains('dgfm-open');

                    if (isOpen) {
                        item.classList.remove('dgfm-open');
                        if (body) {
                            body.style.maxHeight = null;
                        }
                    } else {
                        item.classList.add('dgfm-open');
                        if (body) {
                            body.style.maxHeight = body.scrollHeight + 'px';
                        }
                    }
                });
            });

            // nested sub-accordion toggle
            var dgfmSubHeaders = document.querySelectorAll('.dgfm-sub-header');
            dgfmSubHeaders.forEach(function (header) {
                header.addEventListener('click', function (e) {
                    e.stopPropagation();
                    var subItem = header.closest('.dgfm-sub-item');
                    subItem.classList.toggle('dgfm-sub-open');
                });
            });

        })();
    </script>
