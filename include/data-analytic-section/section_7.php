<!-- section 7 -->
<style>
    .dgfm-wrapper {
        max-width: 1180px;
        margin: 0 auto;
        padding: 40px 20px 80px;
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
        /* background: #1e1b4b; */
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
        /* background: #312c7d; */
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
        /* background: #1e1b4b; */
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
        /* background: #312c7d; */
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

    .dgfm-timeline-fill {
        position: absolute;
        left: 5px;
        top: 6px;
        width: 2px;
        height: 0;
        background: #F5751E;
        transition: height 0.4s ease;
        z-index: 1;
    }

    .dgfm-tl-item {
        position: relative;
        margin-bottom: 26px;
        z-index: 2;
    }

    .dgfm-tl-dot {
        position: absolute;
        left: -26px;
        top: 4px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #F5751E;
        box-shadow: 0 0 0 4px #fff;
        transition: background 0.3s ease;
        z-index: 3;
    }

    .dgfm-tl-item.dgfm-open .dgfm-tl-dot,
    .dgfm-tl-item.dgfm-tl-visited .dgfm-tl-dot {
        background: #F5751E;
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

    /* ---- nested accordion (now used by every module) ---- */

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

    /* ---- collapsible body wrapper for every module ---- */

    .dgfm-tl-body {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.35s ease;
    }

    .dgfm-tl-item.dgfm-open .dgfm-tl-body {
        max-height: 2000px;
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

                <button class="dgfm-submit-btn brand-gradient-animated">Enquire Now</button>

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

            <button class="dgfm-brochure-btn brand-gradient-animated">DOWNLOAD BROCHURE &#8595;</button>

        </div>

        <!-- ================= RIGHT TIMELINE ================= -->
        <div class="dgfm-timeline" id="dgfmTimeline">
            <div class="dgfm-timeline-fill" id="dgfmTimelineFill"></div>

            <!-- Module 1 -->
            <div class="dgfm-tl-item " data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Data Science Course and AI Foundation: Orientation</h4>
                        <p class="dgfm-tl-desc">Gain a swift understanding of the data science training course and
                            key concepts, while installing crucial software. This foundational session paves the way
                            for a smooth journey ahead, minimizing obstacles in your learning path.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>

                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Welcome and Course Overview</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Introduction to the Data Science Course</li>
                                    <li>Importance of Data Science and AI</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item dgfm-sub-active">
                            <div class="dgfm-sub-header">
                                <span>Key Concepts Overview</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
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

            <!-- Module 2: Mastering MS Excel -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Mastering MS Excel</h4>
                        <p class="dgfm-tl-desc">Unleash the power of data. Master essential Excel skills for
                            efficient data analysis, visualization, and decision-making in various professional
                            domains.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Excel Basics &amp; Interface</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Navigating the Excel workspace</li>
                                    <li>Cell referencing and formatting</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Formulas &amp; Functions</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Logical &amp; lookup functions</li>
                                    <li>VLOOKUP, INDEX-MATCH</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Data Analysis Tools</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Pivot Tables &amp; Pivot Charts</li>
                                    <li>What-if analysis</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Data Visualization in Excel</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Charts &amp; dashboards</li>
                                    <li>Conditional formatting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 3: Python for Data Science -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Python for Data Science</h4>
                        <p class="dgfm-tl-desc">Unlock the power of Python in data analysis. Learn essential skills
                            for handling, analyzing, and visualizing data effectively.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Python Basics &amp; Syntax</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Variables, loops, conditionals</li>
                                    <li>Functions and modules</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Data Structures</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Lists, tuples, dictionaries</li>
                                    <li>Sets and comprehensions</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>NumPy &amp; Pandas</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Arrays and vectorized ops</li>
                                    <li>DataFrames &amp; Series</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Data Manipulation &amp; Cleaning</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Handling missing data</li>
                                    <li>Merging &amp; reshaping data</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 4: SQL for Data Science -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">SQL for Data Science</h4>
                        <p class="dgfm-tl-desc">Master the language of databases. Acquire essential SQL skills to
                            extract, manipulate, and analyze data for effective decision-making.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>SQL Basics &amp; Queries</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>SELECT, WHERE, ORDER BY</li>
                                    <li>Filtering &amp; sorting data</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Joins &amp; Subqueries</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Inner, left, right, full joins</li>
                                    <li>Nested subqueries</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Aggregate Functions &amp; Grouping</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>GROUP BY &amp; HAVING</li>
                                    <li>SUM, COUNT, AVG</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Database Design Concepts</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Normalization basics</li>
                                    <li>Keys &amp; relationships</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 5: Statistics and Probability -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Application of Statistics and Probability</h4>
                        <p class="dgfm-tl-desc">Uncover the data-driven insights you need. Explore the practical
                            application of statistics and probability to enhance decision-making in the world of
                            data.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Descriptive Statistics</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Mean, median, mode</li>
                                    <li>Variance &amp; standard deviation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Probability Distributions</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Normal &amp; binomial distributions</li>
                                    <li>Central Limit Theorem</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Hypothesis Testing</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Null &amp; alternate hypotheses</li>
                                    <li>p-values &amp; confidence intervals</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Inferential Statistics</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Sampling techniques</li>
                                    <li>Correlation &amp; regression basics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 6: Supervised ML -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Explore Supervised Machine Learning</h4>
                        <p class="dgfm-tl-desc">Dive into the fundamentals of supervised learning, where algorithms
                            learn from labeled data to make predictions and drive informed decisions.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Regression Techniques</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Linear &amp; multiple regression</li>
                                    <li>Regularization (Ridge, Lasso)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Classification Algorithms</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Logistic regression, KNN</li>
                                    <li>Decision trees &amp; random forest</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Model Evaluation Metrics</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Accuracy, precision, recall</li>
                                    <li>Confusion matrix &amp; ROC-AUC</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Overfitting &amp; Cross-Validation</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Bias-variance tradeoff</li>
                                    <li>K-fold cross-validation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 7: Unsupervised ML -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Explore Unsupervised Machine Learning</h4>
                        <p class="dgfm-tl-desc">Explore the world of unsupervised learning, where algorithms uncover
                            valuable insights from unlabeled data, driving innovation and discovery.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Clustering Techniques</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>K-Means clustering</li>
                                    <li>Hierarchical clustering</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Dimensionality Reduction</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Principal Component Analysis</li>
                                    <li>t-SNE basics</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Association Rule Mining</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Market basket analysis</li>
                                    <li>Apriori algorithm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Anomaly Detection</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Outlier detection methods</li>
                                    <li>Real-world fraud detection use case</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 8: Deep Learning -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Explore Deep Learning</h4>
                        <p class="dgfm-tl-desc">Discover the transformative world of deep learning, where neural
                            networks simulate the human brain to analyze and understand complex data.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Neural Network Fundamentals</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Perceptrons &amp; layers</li>
                                    <li>Forward propagation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Activation Functions &amp; Backpropagation</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>ReLU, sigmoid, softmax</li>
                                    <li>Gradient descent &amp; backprop</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>CNNs for Image Data</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Convolution &amp; pooling layers</li>
                                    <li>Image classification basics</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>RNNs for Sequential Data</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Recurrent networks &amp; LSTM</li>
                                    <li>Time-series applications</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 9: NLP -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Discover Natural Language Processing (NLP)</h4>
                        <p class="dgfm-tl-desc">Explore NLP, where machines comprehend, interpret, and generate human
                            language, paving the way for advanced communication and understanding.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Text Preprocessing Techniques</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Cleaning &amp; normalizing text</li>
                                    <li>Stopword removal &amp; stemming</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Tokenization &amp; Embeddings</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Word tokenization</li>
                                    <li>Word2Vec &amp; embeddings</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Sentiment Analysis</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Building a sentiment classifier</li>
                                    <li>Real-world review analysis</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Language Models Overview</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Intro to transformers</li>
                                    <li>Applications of LLMs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 10: Class Project -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Class Project: Application of ML, Deep Learning and NLP</h4>
                        <p class="dgfm-tl-desc">Experience the power of ML, Deep Learning, and NLP in action. Solve
                            real-world challenges and showcase your skills through hands-on projects.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Project Planning &amp; Dataset Selection</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Defining the problem statement</li>
                                    <li>Sourcing &amp; exploring datasets</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Model Building &amp; Evaluation</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>End-to-end model pipeline</li>
                                    <li>Testing &amp; performance tuning</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Presentation &amp; Documentation</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Structuring project reports</li>
                                    <li>Presenting findings clearly</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Peer Review &amp; Feedback</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Reviewing classmates' projects</li>
                                    <li>Incorporating mentor feedback</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 11: Data Visualization -->
            <div class="dgfm-tl-item" data-module>
                <span class="dgfm-tl-dot"></span>
                <div class="dgfm-tl-header">
                    <div>
                        <h4 class="dgfm-tl-title">Mastering Data Visualization</h4>
                        <p class="dgfm-tl-desc">Learn to craft compelling visual stories, turning raw data into
                            actionable insights with Power BI and Tableau, the industry's leading Business
                            Intelligence tools.</p>
                    </div>
                    <span class="dgfm-chevron">&#9660;</span>
                </div>
                <div class="dgfm-tl-body">
                    <div class="dgfm-subaccordion">
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Power BI Fundamentals</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Connecting &amp; shaping data</li>
                                    <li>Building interactive reports</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Tableau Fundamentals</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Worksheets &amp; calculated fields</li>
                                    <li>Building visualizations</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Dashboard Design Principles</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Layout &amp; UX best practices</li>
                                    <li>Interactivity &amp; filters</li>
                                </ul>
                            </div>
                        </div>
                        <div class="dgfm-sub-item">
                            <div class="dgfm-sub-header">
                                <span>Storytelling with Data</span>
                                <span class="dgfm-sub-chevron">&#9660;</span>
                            </div>
                            <div class="dgfm-sub-body">
                                <ul>
                                    <li>Structuring a data narrative</li>
                                    <li>Presenting to stakeholders</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<script>
    (function () {

        var dgfmTimeline = document.getElementById('dgfmTimeline');
        var dgfmFill = document.getElementById('dgfmTimelineFill');

        // colors the connecting line up to the bottom-most open module's dot
        function dgfmUpdateFillLine() {
            if (!dgfmTimeline || !dgfmFill) return;

            var openItems = dgfmTimeline.querySelectorAll('.dgfm-tl-item.dgfm-open');
            if (!openItems.length) {
                dgfmFill.style.height = '0px';
                return;
            }

            var timelineTop = dgfmTimeline.getBoundingClientRect().top;
            var maxBottom = 0;

            openItems.forEach(function (item) {
                var dot = item.querySelector('.dgfm-tl-dot');
                if (!dot) return;
                var dotRect = dot.getBoundingClientRect();
                var dotCenter = (dotRect.top + dotRect.bottom) / 2 - timelineTop;
                if (dotCenter > maxBottom) maxBottom = dotCenter;
            });

            dgfmFill.style.height = Math.max(0, maxBottom - 6) + 'px';
        }

        // main module headers toggle
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
                    item.classList.add('dgfm-tl-visited');
                    if (body) {
                        body.style.maxHeight = body.scrollHeight + 'px';
                    }
                }

                dgfmUpdateFillLine();
                // re-measure after the expand/collapse transition settles
                setTimeout(dgfmUpdateFillLine, 380);
            });
        });

        // nested sub-accordion toggle (works for every module now)
        function dgfmSyncParentHeight(header) {
            var parentItem = header.closest('.dgfm-tl-item');
            var parentBody = parentItem.querySelector('.dgfm-tl-body');
            if (parentItem.classList.contains('dgfm-open') && parentBody) {
                // let inner content settle first, then measure
                parentBody.style.maxHeight = 'none';
                var h = parentBody.scrollHeight;
                parentBody.style.maxHeight = h + 'px';
            }
        }

        var dgfmSubHeaders = document.querySelectorAll('.dgfm-sub-header');
        dgfmSubHeaders.forEach(function (header) {
            var subBody = header.nextElementSibling;

            header.addEventListener('click', function (e) {
                e.stopPropagation();
                var subItem = header.closest('.dgfm-sub-item');
                var opening = !subItem.classList.contains('dgfm-sub-open');

                subItem.classList.toggle('dgfm-sub-open');

                if (subBody) {
                    subBody.style.maxHeight = opening ? subBody.scrollHeight + 'px' : null;
                }

                // recalc parent module's max-height so it grows/shrinks smoothly
                dgfmSyncParentHeight(header);

                // after the sub-body's own transition finishes, re-measure parent
                // (padding/height settles slightly after class toggle)
                setTimeout(function () {
                    dgfmSyncParentHeight(header);
                    dgfmUpdateFillLine();
                }, 360);
            });

            // initialize any sub-items that start open (e.g. dgfm-sub-open in markup)
            if (header.closest('.dgfm-sub-item').classList.contains('dgfm-sub-open') && subBody) {
                subBody.style.maxHeight = subBody.scrollHeight + 'px';
            }
        });

        // mark modules that start open (module 1) as visited + colored dot
        document.querySelectorAll('.dgfm-tl-item.dgfm-open').forEach(function (item) {
            item.classList.add('dgfm-tl-visited');
        });

        // initial paint of the progress line for whatever is open by default
        dgfmUpdateFillLine();
        window.addEventListener('resize', dgfmUpdateFillLine);

    })();
</script>