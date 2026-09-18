    <style>
        .kd-cov-section {
            background: #ffffff;
            font-family: 'Manrope', Arial, sans-serif;
            max-width: 1180px;
            margin: 0 auto;
            padding: 56px 24px 80px;
            display: grid;
            grid-template-columns: 1.55fr 1fr;
            gap: 56px;
            align-items: start;
        }

        /* ================= LEFT COLUMN ================= */

        .kd-cov-eyebrow {
            color: #5b6bd6;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: .08em;
            margin: 0 0 14px;
        }

        .kd-cov-heading {
            font-size: 42px;
            line-height: 1.15;
            font-weight: 800;
            letter-spacing: -.02em;
            margin: 0 0 26px;
            color: #12121f;
        }

        .kd-cov-body-wrap {
            position: relative;
            max-height: 330px;
            overflow: hidden;
            transition: max-height .4s ease;
        }

        .kd-cov-body-wrap.kd-cov-expanded {
            max-height: 420px;
            overflow-y: auto;
            padding-right: 14px;
        }

        .kd-cov-body-wrap.kd-cov-expanded::-webkit-scrollbar {
            width: 6px;
        }

        .kd-cov-body-wrap.kd-cov-expanded::-webkit-scrollbar-track {
            background: transparent;
        }

        .kd-cov-body-wrap.kd-cov-expanded::-webkit-scrollbar-thumb {
            background: #5b6bd6;
            border-radius: 10px;
        }

        .kd-cov-body-wrap:not(.kd-cov-expanded):after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 90px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0), #ffffff 88%);
            pointer-events: none;
        }

        .kd-cov-body-wrap ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .kd-cov-body-wrap li {
            position: relative;
            padding: 0 0 18px 20px;
            font-size: 16.5px;
            line-height: 1.65;
            color: #3a3a4a;
        }

        .kd-cov-body-wrap li:before {
            content: "";
            position: absolute;
            left: 0;
            top: 10px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #12121f;
        }

        .kd-cov-body-wrap li b {
            color: #12121f;
            font-weight: 800;
        }

        .kd-cov-body-wrap p {
            font-size: 16.5px;
            line-height: 1.65;
            color: #3a3a4a;
            margin: 0 0 18px;
        }

        .kd-cov-body-wrap h2 {
            font-size: 24px;
            font-weight: 800;
            color: #12121f;
            margin: 30px 0 14px;
        }

        .kd-cov-body-wrap>*:first-child {
            margin-top: 0;
        }

        .kd-cov-body-wrap h3 {
            font-size: 18px;
            font-weight: 800;
            color: #12121f;
            margin: 22px 0 10px;
        }

        .kd-cov-body-wrap ul {
            margin: 0 0 18px;
        }

        .kd-cov-body-wrap a {
            color: #5b6bd6;
            font-weight: 700;
            text-decoration: none;
        }

        .kd-cov-body-wrap a:hover {
            text-decoration: underline;
        }

        .kd-cov-readmore {
            margin-top: 24px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 26px;
            border: none;
            border-radius: 30px;
            background: #12123a;
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s ease;
        }

        .kd-cov-readmore:hover {
            background: #1c1c52;
        }

        .kd-cov-readmore svg {
            width: 13px;
            height: 13px;
            transition: transform .3s ease;
        }

        .kd-cov-readmore.kd-cov-open svg {
            transform: rotate(180deg);
        }

        /* ================= RIGHT COLUMN (FORM CARD) ================= */

        .kd-cov-form-wrap {
            position: sticky;
            top: 24px;
        }

        .kd-cov-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            margin-bottom: 14px;
            border-radius: 30px;
            background: linear-gradient(90deg, #ff8a3d, #ff6a3d);
            color: #ffffff;
            font-size: 12.5px;
            font-weight: 800;
        }

        .kd-cov-form-card {
            background: #ffffff;
            border: 1px solid rgba(20, 20, 40, .08);
            border-radius: 18px;
            padding: 26px 26px 22px;
            box-shadow: 0 18px 40px rgba(20, 20, 50, .08);
        }

        .kd-cov-form-title {
            margin: 0 0 18px;
            font-size: 21px;
            font-weight: 800;
            color: #12121f;
        }

        .kd-cov-field {
            width: 100%;
            padding: 13px 15px;
            margin-bottom: 12px;
            border: 1px solid #d8dae3;
            border-radius: 8px;
            font-size: 14.5px;
            font-family: inherit;
            color: #4a4a5a;
            background: #ffffff;
            outline: none;
            transition: border-color .2s ease;
        }

        .kd-cov-field:focus {
            border-color: #5b6bd6;
        }

        select.kd-cov-field {
            appearance: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'><path d='M1 1l5 5 5-5' stroke='%237a7a8a' stroke-width='1.6' fill='none' fill-rule='evenodd'/></svg>");
            background-repeat: no-repeat;
            background-position: right 15px center;
            cursor: pointer;
        }

        .kd-cov-field[readonly] {
            background: #f2f3f7;
            color: #6a6a7a;
            cursor: default;
        }

        .kd-cov-captcha-label {
            font-size: 14.5px;
            font-weight: 800;
            color: #12121f;
            margin: 6px 0 10px;
        }

        .kd-cov-submit {
            width: 100%;
            padding: 14px;
            margin-top: 4px;
            border: none;
            border-radius: 8px;
            background: #1c2b6b;
            color: #ffffff;
            font-size: 15.5px;
            font-weight: 700;
            cursor: pointer;
            transition: background .2s ease;
        }

        .kd-cov-submit:hover {
            background: #142058;
        }

        .kd-cov-trust {
            text-align: center;
            margin: 14px 0 0;
            font-size: 12px;
            color: #8a8a96;
        }

        .kd-cov-msg {
            text-align: center;
            font-size: 13px;
            font-weight: 700;
            margin-top: 10px;
            min-height: 16px;
        }

        .kd-cov-msg.kd-cov-error {
            color: #e04b4b;
        }

        .kd-cov-msg.kd-cov-success {
            color: #2fa96a;
        }

        @media(max-width: 900px) {
            .kd-cov-section {
                grid-template-columns: 1fr;
                padding: 40px 20px 60px;
            }

            .kd-cov-heading {
                font-size: 30px;
            }

            .kd-cov-form-wrap {
                position: static;
            }
        }
    </style>


    <section class="kd-cov-section">

        <!-- LEFT: COURSE OVERVIEW -->
        <div>
            <p class="kd-cov-eyebrow">COURSE OVERVIEW</p>
            <h1 class="kd-cov-heading">Everything you need to master
                Python Course in Delhi | Ducat India.</h1>

            <div class="kd-cov-body-wrap" id="kdCovBody">
                <h2>Overview</h2>
                <p>Python has become the common language for building products, automating work, and making sense of data. This program is designed for learners who want to turn “I can write a script” into “I can ship reliable solutions.” You’ll learn the building blocks of Python, practise clean coding habits, and apply them to realistic problems—data wrangling, file and API workflows, simple web backends, and analytical reporting. Every topic ends in a task you can repeat and adapt, so progress is visible and usable.</p>
                <p>We keep things practical: clear explanations, measured exercises, and a portfolio that proves what you can do. You also get free access to our tutorial website for revision, and a small welcome kit (bag, pen, notepad) so your notes and checklists are always at hand.</p>
                <h2>Course Objectives</h2>
                <ul>
                    <li>Write clean, readable Python code with functions, modules, and clear error handling.</li>
                    <li>Work confidently with files, JSON/CSV, and external services using HTTP and simple automation.</li>
                    <li>Organise data using lists, dicts, sets, and tuples; apply comprehension patterns sensibly.</li>
                    <li>Model small applications with classes where it actually helps (not everywhere).</li>
                    <li>Process and summarise datasets; produce audit-friendly outputs and reports.</li>
                    <li>Build a minimal, well-structured backend to expose data and workflows.</li>
                    <li>Present results with concise documentation so reviewers can verify your steps.</li>
                </ul>
                <h2>Who Should Attend</h2>
                <ul>
                    <li>Students/freshers who want a structured, hands-on path into developer/analyst roles.</li>
                    <li>Working professionals who rely on spreadsheets or manual tasks and want automation.</li>
                    <li>Career switchers seeking fundamentals plus a demonstrable portfolio.</li>
                    <li>Entrepreneurs who need reliable scripts, small backends, or data pipelines for their product.</li>
                </ul>
                <h2>Curriculum (Syllabus)</h2>
                <p>The syllabus moves from foundations to project delivery. You’ll practise the essentials, build small utilities, and finish with a capstone that combines data handling, API work, and a tiny backend.</p>
                <ul>
                    <li>Python essentials and coding discipline</li>
                    <li>Data structures &amp; algorithms (practical set)</li>
                    <li>Files, CSV/JSON, and task automation</li>
                    <li>HTTP requests and small workflow scripts</li>
                    <li>Simple backend development and routing</li>
                    <li>Data cleaning, calculation, and summarisation</li>
                    <li>Testing habits and basic performance checks</li>
                    <li>Packaging your work and documenting decisions</li>
                </ul>
                <h2>Modules</h2>
                <h3>Module 1 — Python Foundations &amp; Habits</h3>
                <p>Syntax that matters, naming, comments that explain intent, and a “no mystery numbers” rule. Inputs, outputs, and a quick tour of the runtime so nothing feels magical.</p>
                <h3>Module 2 — Data Structures in Practice</h3>
                <p>Lists, dicts, sets, tuples; when to use which and why. Slicing, searching, grouping, and small algorithmic patterns that save time.</p>
                <h3>Module 3 — Working with Files &amp; Data Formats</h3>
                <p>Read/write CSV/JSON safely, handle encodings, merge records, and build repeatable scripts that never overwrite source data without backups.</p>
                <h3>Module 4 — Web Requests &amp; Small Workflows</h3>
                <p>Make requests, validate responses, and stitch tiny automations together—download, transform, and summarise data on a schedule.</p>
                <h3>Module 5 — Lightweight Backend Development</h3>
                <p>Design tidy routes, separate concerns, and return clear responses. Capture input errors up front and log what matters for debugging.</p>
                <h3>Module 6 — Data Cleaning &amp; Reporting</h3>
                <p>Filter, aggregate, and calculate indicators. Create compact reports and export formats that managers actually read.</p>
                <h3>Module 7 — Testing &amp; Reliability</h3>
                <p>Write just-enough tests to catch regressions. Structure folders, control randomness, and measure simple performance to avoid slow paths.</p>
                <h3>Module 8 — Packaging &amp; Documentation</h3>
                <p>Turn scripts into reusable modules, write a minimal README, and provide a setup script so others can run your work in minutes.</p>
                <h3>Capstone — Automate • Analyse • Serve</h3>
                <p>Define a small problem, fetch/process data, publish an endpoint or report, and submit a concise README that explains assumptions, limitations, and next steps.</p>
                <h2>Optional Add-ons</h2>
                <ul>
                    <li><b>Free access</b> to our tutorial website for practice files, checklists, and revision.</li>
                    <li>Welcome kit with <b>bag, pen, and notepad</b>.</li>
                    <li>Interview sprints and portfolio reviews before placement season.</li>
                </ul>
                <h2>0% Easy EMI</h2>
                <p>We keep education accessible. Fees are <b>affordable</b>, and you can opt for <b>0% Easy EMI</b> for <b>3 or 6 months</b>. Spread the cost without interest and focus on building skills that compound.</p>
                <h2>Placement Support</h2>
                <ul>
                    <li>Role mapping so your applications align with your strengths and portfolio.</li>
                    <li>Resume and profile edits that highlight measurable outcomes from your projects.</li>
                    <li>Mock interviews with feedback you can act on immediately.</li>
                    <li>Targeted referrals and guidance that continue until you land a role.</li>
                </ul>
                <h2>Career Paths &amp; Job Roles</h2>
                <ul>
                    <li><b>Python Developer (Junior):</b> build utilities, small services, and reliable scripts.</li>
                    <li><b>Data/Reporting Analyst (Entry):</b> clean datasets, create summaries, and automate recurring reports.</li>
                    <li><b>Automation/MIS Associate:</b> remove manual steps, standardise inputs, and document workflows.</li>
                    <li><b>Backend Trainee:</b> implement simple endpoints and error-aware request handling.</li>
                </ul>
                <h2>Other Related Courses near you</h2>
                <p>Anyone building a career roadmap through Python Course In Delhi | Ducat India can explore <a href="https://wordhtml.com/">Python Full Stack Course</a> for deeper practical learning. The course is designed around API development, responsive design, live project workflow, and frontend development. This makes it useful for stronger project and interview preparation.</p>
                <p>For another related learning option, <a href="https://wordhtml.com/">Selenium with Python Training</a> can be added naturally in the content. It supports bug reporting, Selenium basics, real project testing practice, and test case design. Students can understand which course fits their goals better.</p>
                <h2>Eligibility &amp; Prerequisites</h2>
                <p>No strict prerequisites. Comfort with basic computer operations is enough. Prior coding helps but isn’t required—we build from first principles and give you repeatable practice.</p>
                <h2>Learning Methodology</h2>
                <p>Each session has three parts: a focused concept, a guided demonstration, and a hands-on task. You’ll track decisions in a short learning log (what you tried, what failed, what you changed) so improvement is visible and reviewable. Reflection is part of the grade.</p>
                <h2>Portfolio &amp; Project Deliverables</h2>
                <p>You graduate with proof of work: a clean repository, small utilities with instructions, a minimal backend or reporting pipeline, and a readable README that explains choices and trade-offs.</p>
                <h2>Ducat Branches in Delhi NCR</h2>
                <ul>
                    <li><a href="https://share.google/RV9R9uKp3Nsgy7iq5">Noida Sector 16</a></li>
                    <li><a href="https://share.google/xMdpehHP08BZGsV8d">Noida Sector 63</a></li>
                    <li><a href="https://share.google/PoTTMkTqxIXJGLfrN">Noida Extension</a></li>
                    <li><a href="https://share.google/5138jZr6Hl08udkyI">Gurugram</a></li>
                    <li><a href="https://share.google/SgQ9nXpKMhHJR71Ov">Faridabad</a></li>
                    <li><a href="https://share.google/vXpxgLCd67PZ19hj6">Jaipur</a></li>
                    <li><a href="https://share.google/L8nTeIXevDGcA6AXr">Vikaspuri, Delhi</a></li>
                    <li><a href="https://share.google/hFsJr0GecsZwMhzsG">Pitampura, Delhi</a></li>
                    <li><a href="https://share.google/c2r2rqwMqMIlifOoZ">South Extension I, Delhi</a></li>
                </ul>
                <h2>Why Choose Ducat India?</h2>
                <p>Choosing a training partner is a career decision. We focus on outcomes you can show and skills you can defend.</p>
                <ul>
                    <li><b>Practice over promises:</b> every topic ends with a working task you can repeat at home.</li>
                    <li><b>Clarity first:</b> we teach reasoning and trade-offs, not just steps.</li>
                    <li><b>Transparent evaluation:</b> rubrics are shared early; expectations are concrete.</li>
                    <li><b>Portfolio orientation:</b> you leave with artefacts that hiring teams can audit quickly.</li>
                    <li><b>Ongoing support:</b> placement help continues until you land a role.</li>
                    <li><b>Accessible plans:</b> affordable fees with <b>0% Easy EMI (3/6 months)</b>, tutorial site access, and a welcome kit.</li>
                </ul>
                <h2>Admission Process</h2>
                <p>We keep admissions supportive and structured so you start strong:</p>
                <ol>
                    <li><b>Counselling call:</b> align goals, background, weekly availability, and preferred role targets.</li>
                </ol>
                <ol>
                    <li><b>Readiness discussion:</b> a friendly check of logic and problem-solving; used to tailor your starting plan.</li>
                </ol>
                <ol>
                    <li><b>Enrollment &amp; onboarding:</b> paperwork, choose <b>0% EMI</b> if needed, tutorial portal access, and your orientation checklist.</li>
                </ol>
                <ol>
                    <li><b>Orientation week:</b> set up environment, create your first utility script, and review the code style you’ll follow in the course.</li>
                </ol>
                <ol>
                    <li><b>Milestone plan:</b> a month-by-month map of concepts, tasks, and checkpoints with clear quality bars and examples of “meets/exceeds”.</li>
                </ol>
                <ol>
                    <li><b>Progress reviews:</b> periodic code reviews with concrete edits; blockers are resolved quickly so momentum stays high.</li>
                </ol>
                <ol>
                    <li><b>Placement readiness:</b> when your capstone and projects meet rubric thresholds, we start interview sprints and role-matching.</li>
                </ol>
                <h2>Certification &amp; Assessment</h2>
                <p>Certification is earned through consistent practice and clear outcomes:</p>
                <ul>
                    <li><b>Lab quality:</b> readable code, sensible structure, and error handling that doesn’t hide problems.</li>
                    <li><b>Midterm build:</b> a small automation or reporting task delivered end-to-end with inputs, outputs, and a short narrative explaining results.</li>
                    <li><b>Capstone evaluation:</b> fetch/process real-world data, expose a minimal service or publish a clean report, and ship a concise README that states assumptions, limitations, and next steps.</li>
                    <li><b>Review &amp; revision:</b> mentors provide actionable feedback; you revise and resubmit where needed.</li>
                    <li><b>Final certification:</b> awarded after you meet rubric thresholds and present your capstone to a review panel.</li>
                </ul>
                <h3>Other Python Course</h3>
                <ul>
                    <li><a href="https://www.ducatindia.com/datascienceusingpython">Data Science with Python Course In Noida</a></li>
                    <li><a href="https://www.ducatindia.com/python-training-course-in-gurgaon">Python Course In Gurgaon</a></li>
                    <li><a href="https://www.ducatindia.com/python-training-course-in-faridabad">Best Python Training course In Faridabad</a></li>
                    <li><a href="https://www.ducatindia.com/python-training-course-in-south-extension">Best Python Course In South Extension</a></li>
                    <li><a href="https://www.ducatindia.com/python-training-course-in-india">Best Python Training Course In India</a></li>
                    <li><a href="https://www.ducatindia.com/python-training-course-in-pitampura">Best Python Course In Pitampura</a></li>
                    <li><a href="https://www.ducatindia.com/python-training-course-in-ghaziabad">Best Python Course In Ghaziabad</a></li>
                    <li><a href="https://www.ducatindia.com/python-course-in-vikaspuri">Best Python Course In Vikaspuri</a></li>
                    <li><a href="https://www.ducatindia.com/python-course-in-sector-16-noida">Python Course in Noida Sector 16</a></li>
                    <li><a href="https://www.ducatindia.com/best-python-course-in-noida-extension">Best Python Course in Noida Extension</a></li>
                    <li><a href="https://www.ducatindia.com/best-python-course-in-jaipur">Best Python Course in Jaipur</a></li>
                </ul>
                <h3>Why Choose Ducat India for Data Analytics Training in Delhi?</h3>
                <ul>
                    <li><b>Experienced Trainers</b>: Our trainers have real-world experience and deep knowledge in data analytics, ensuring that you learn from the best in the industry.</li>
                    <li><b>Project-Based Learning</b>: Learn through hands-on projects that will help you apply the theory to real-world problems.</li>
                    <li><b>Placement Assistance</b>: We have a dedicated team to help you find the right job post-training.</li>
                    <li><b>Comprehensive Curriculum</b>: Our course content covers everything you need to know to become a proficient data analyst.</li>
                </ul>
            </div>

            <button class="kd-cov-readmore" id="kdCovToggle">
                <span id="kdCovToggleText">Read More</span>
                <svg viewBox="0 0 12 8" fill="none">
                    <path d="M1 1l5 5 5-5" stroke="currentColor" stroke-width="1.6" />
                </svg>
            </button>
        </div>

        <!-- RIGHT: DEMO FORM -->
        <div class="kd-cov-form-wrap">
            <span class="kd-cov-badge">★ Bestseller</span>

            <div class="kd-cov-form-card">
                <h3 class="kd-cov-form-title">Request Free Demo</h3>

                <form id="kdCovForm">
                    <input class="kd-cov-field" type="text" placeholder="Full Name" required>
                    <input class="kd-cov-field" type="email" placeholder="Email Address" required>
                    <input class="kd-cov-field" type="tel" placeholder="Phone Number" required>
                    <input class="kd-cov-field" type="text" value="python" readonly>

                    <select class="kd-cov-field" required>
                        <option value="" disabled selected>Select a Branch</option>
                        <option>Faridabad - Sector 15</option>
                        <option>Faridabad - NIT</option>
                        <option>Delhi - Laxmi Nagar</option>
                    </select>

                    <p class="kd-cov-captcha-label">Solve: <span id="kdCovA">4</span> + <span id="kdCovB">4</span> = ?</p>
                    <input class="kd-cov-field" type="text" id="kdCovAnswer" placeholder="Enter answer" required>

                    <button type="submit" class="kd-cov-submit">Submit</button>
                    <p class="kd-cov-msg" id="kdCovMsg"></p>
                </form>

                <p class="kd-cov-trust">🔒 Your data is safe with us. No spam.</p>
            </div>
        </div>

    </section>

    <script>
        // Read More toggle
        const body = document.getElementById('kdCovBody');
        const toggleBtn = document.getElementById('kdCovToggle');
        const toggleText = document.getElementById('kdCovToggleText');

        toggleBtn.addEventListener('click', () => {
            const expanded = body.classList.toggle('kd-cov-expanded');
            toggleBtn.classList.toggle('kd-cov-open', expanded);
            toggleText.textContent = expanded ? 'Read Less' : 'Read More';
        });

        // Simple math captcha
        let numA = 4,
            numB = 4;

        function newCaptcha() {
            numA = Math.floor(Math.random() * 8) + 1;
            numB = Math.floor(Math.random() * 8) + 1;
            document.getElementById('kdCovA').textContent = numA;
            document.getElementById('kdCovB').textContent = numB;
        }

        const form = document.getElementById('kdCovForm');
        const msg = document.getElementById('kdCovMsg');

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const answer = parseInt(document.getElementById('kdCovAnswer').value, 10);

            if (answer !== numA + numB) {
                msg.textContent = 'Incorrect answer, please try again.';
                msg.className = 'kd-cov-msg kd-cov-error';
                newCaptcha();
                document.getElementById('kdCovAnswer').value = '';
                return;
            }

            msg.textContent = 'Thank you! We will contact you shortly.';
            msg.className = 'kd-cov-msg kd-cov-success';
            form.reset();
            newCaptcha();
        });
    </script>