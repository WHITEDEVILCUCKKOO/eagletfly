```html
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

    .kd-cov-body-wrap > *:first-child {
        margin-top: 0;
    }

    .kd-cov-body-wrap h3 {
        font-size: 18px;
        font-weight: 800;
        color: #12121f;
        margin: 22px 0 10px;
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


    /* ================= RIGHT COLUMN ================= */

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


    /* ================= RESPONSIVE ================= */

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

        <h1 class="kd-cov-heading">
            Everything you need to master Java Course in Delhi.
        </h1>


        <div class="kd-cov-body-wrap" id="kdCovBody">

            <h2>Overview</h2>

            <p>
                Java is one of the most widely used programming languages
                for building enterprise applications, web applications,
                Android applications and backend systems. This program is
                designed for learners who want to build a strong foundation
                in Java and develop practical programming skills through
                hands-on learning.
            </p>

            <p>
                You will learn Java fundamentals, object-oriented
                programming, exception handling, collections, database
                connectivity and backend development concepts. The course
                focuses on practical exercises and projects so that you can
                apply your knowledge to real-world programming problems.
            </p>


            <h2>Course Objectives</h2>

            <ul>

                <li>
                    Build a strong foundation in Java syntax, variables,
                    data types, operators and programming logic.
                </li>

                <li>
                    Understand Object-Oriented Programming concepts such as
                    classes, objects, inheritance, polymorphism and abstraction.
                </li>

                <li>
                    Work confidently with arrays, strings, collections and
                    commonly used Java data structures.
                </li>

                <li>
                    Handle errors and unexpected situations using Java
                    exception handling techniques.
                </li>

                <li>
                    Understand file handling, input/output operations and
                    basic application workflows.
                </li>

                <li>
                    Work with databases using Java Database Connectivity
                    and understand basic CRUD operations.
                </li>

                <li>
                    Build practical Java projects that demonstrate your
                    programming and problem-solving skills.
                </li>

            </ul>


            <h2>Who Should Attend</h2>

            <ul>

                <li>
                    Students and freshers who want to start a career
                    in Java development.
                </li>

                <li>
                    Beginners who want to learn programming from
                    the fundamentals.
                </li>

                <li>
                    Working professionals looking to upgrade their
                    programming and backend development skills.
                </li>

                <li>
                    Career switchers who want to move into software
                    development and Java-based roles.
                </li>

            </ul>


            <h2>Curriculum (Syllabus)</h2>

            <p>
                The syllabus starts with Java programming fundamentals and
                gradually moves towards object-oriented programming,
                advanced Java concepts, database connectivity and
                practical application development.
            </p>

            <ul>

                <li>Java fundamentals and programming concepts</li>

                <li>Variables, data types and operators</li>

                <li>Conditional statements and loops</li>

                <li>Arrays, strings and methods</li>

                <li>Object-Oriented Programming with Java</li>

                <li>Inheritance, polymorphism and abstraction</li>

                <li>Exception handling and file handling</li>

                <li>Collections Framework</li>

                <li>JDBC and database connectivity</li>

                <li>Practical Java projects</li>

            </ul>


            <h2>Modules</h2>


            <h3>Module 1 — Java Fundamentals</h3>

            <p>
                Learn Java syntax, variables, data types, operators,
                input/output, conditional statements and loops. Build a
                strong programming foundation through practical exercises.
            </p>


            <h3>Module 2 — Object-Oriented Programming</h3>

            <p>
                Understand classes and objects along with constructors,
                inheritance, encapsulation, polymorphism and abstraction.
                Learn how OOP concepts are used in real Java applications.
            </p>


            <h3>Module 3 — Java Collections & Exception Handling</h3>

            <p>
                Work with ArrayList, LinkedList, HashSet, HashMap and other
                collection classes. Learn how to handle runtime errors and
                build more reliable Java applications using exception handling.
            </p>


            <h3>Module 4 — Database & Application Development</h3>

            <p>
                Learn the basics of JDBC, database connectivity and CRUD
                operations. Apply your Java knowledge to build practical
                applications connected with databases.
            </p>


            <h3>Capstone — Build a Java Application</h3>

            <p>
                Work on a practical Java project that combines programming
                fundamentals, OOP, collections, exception handling and
                database connectivity to create a complete application.
            </p>


            <h2>Optional Add-ons</h2>

            <ul>

                <li>
                    <b>Practical coding exercises</b> for regular Java practice.
                </li>

                <li>
                    Project guidance with real-world programming scenarios.
                </li>

                <li>
                    Interview preparation and Java coding practice.
                </li>

            </ul>


            <h2>0% Easy EMI</h2>

            <p>
                We keep education accessible with affordable course fees
                and flexible <b>0% Easy EMI</b> options for
                <b>3 or 6 months</b>. This allows students to focus on
                learning Java and building practical development skills.
            </p>


            <h2>Placement Support</h2>

            <ul>

                <li>
                    Role mapping to identify suitable Java development
                    and software development opportunities.
                </li>

                <li>
                    Resume and profile preparation focused on Java skills
                    and project experience.
                </li>

                <li>
                    Mock interviews with Java technical questions and
                    programming problems.
                </li>

                <li>
                    Guidance for interview preparation and job applications.
                </li>

            </ul>


            <h2>Career Paths & Job Roles</h2>

            <ul>

                <li>
                    <b>Java Developer:</b>
                    Develop applications, backend services and
                    business logic using Java.
                </li>

                <li>
                    <b>Backend Developer:</b>
                    Build server-side applications, APIs and
                    database-connected systems.
                </li>

                <li>
                    <b>Software Developer:</b>
                    Design, develop and maintain software applications.
                </li>

                <li>
                    <b>Junior Java Developer:</b>
                    Work on Java-based projects under the guidance
                    of experienced development teams.
                </li>

            </ul>


            <h2>Eligibility & Prerequisites</h2>

            <p>
                No strict programming prerequisites are required.
                Basic computer knowledge is enough to get started.
                Prior programming experience can be helpful, but the
                course starts from fundamental Java concepts.
            </p>


            <h2>Learning Methodology</h2>

            <p>
                Each session combines concept explanation, instructor-led
                demonstrations and hands-on coding practice. Students work
                through programming exercises and practical assignments to
                strengthen their Java development skills.
            </p>


            <h2>Portfolio & Project Deliverables</h2>

            <p>
                Students complete practical Java projects that can be added
                to their portfolio. Projects help demonstrate programming
                fundamentals, OOP concepts, database connectivity and
                problem-solving abilities.
            </p>


            <h2>Certification & Assessment</h2>

            <p>
                Students are assessed through coding exercises, practical
                assignments, project work and Java programming evaluations.
                Certification is provided based on successful completion
                of the required course activities.
            </p>


            <h2>Why Choose This Java Course?</h2>

            <p>
                Learning Java with a practical approach helps students
                understand not only the syntax of the language but also
                how Java is used to develop real applications.
            </p>

            <ul>

                <li>
                    <b>Practical Learning:</b>
                    Regular coding exercises and application-based tasks.
                </li>

                <li>
                    <b>Strong Fundamentals:</b>
                    Learn Java from basic programming concepts to OOP.
                </li>

                <li>
                    <b>Project Orientation:</b>
                    Build practical applications to strengthen your portfolio.
                </li>

                <li>
                    <b>Interview Preparation:</b>
                    Practice Java questions and programming problems.
                </li>

                <li>
                    <b>Career Support:</b>
                    Guidance for resumes, interviews and job preparation.
                </li>

            </ul>

        </div>


        <button class="kd-cov-readmore" id="kdCovToggle">

            <span id="kdCovToggleText">Read More</span>

            <svg viewBox="0 0 12 8" fill="none">
                <path
                    d="M1 1l5 5 5-5"
                    stroke="currentColor"
                    stroke-width="1.6"
                />
            </svg>

        </button>

    </div>


    <!-- RIGHT: DEMO FORM -->

    <div class="kd-cov-form-wrap">

        <span class="kd-cov-badge">
            ★ Bestseller
        </span>


        <div class="kd-cov-form-card">

            <h3 class="kd-cov-form-title">
                Request Free Demo
            </h3>


            <form id="kdCovForm">

                <input
                    class="kd-cov-field"
                    type="text"
                    placeholder="Full Name"
                    required
                >

                <input
                    class="kd-cov-field"
                    type="email"
                    placeholder="Email Address"
                    required
                >

                <input
                    class="kd-cov-field"
                    type="tel"
                    placeholder="Phone Number"
                    required
                >

                <input
                    class="kd-cov-field"
                    type="text"
                    value="Java"
                    readonly
                >


                <select class="kd-cov-field" required>

                    <option value="" disabled selected>
                        Select a Branch
                    </option>

                    <option>
                        Faridabad - Sector 15
                    </option>

                    <option>
                        Faridabad - NIT
                    </option>

                    <option>
                        Delhi - Laxmi Nagar
                    </option>

                </select>


                <p class="kd-cov-captcha-label">
                    Solve:
                    <span id="kdCovA">4</span>
                    +
                    <span id="kdCovB">4</span>
                    = ?
                </p>


                <input
                    class="kd-cov-field"
                    type="text"
                    id="kdCovAnswer"
                    placeholder="Enter answer"
                    required
                >


                <button
                    type="submit"
                    class="kd-cov-submit"
                >
                    Submit
                </button>


                <p
                    class="kd-cov-msg"
                    id="kdCovMsg"
                ></p>

            </form>


            <p class="kd-cov-trust">
                🔒 Your data is safe with us. No spam.
            </p>

        </div>

    </div>

</section>


<script>

    // ================= READ MORE TOGGLE =================

    const body = document.getElementById('kdCovBody');
    const toggleBtn = document.getElementById('kdCovToggle');
    const toggleText = document.getElementById('kdCovToggleText');

    toggleBtn.addEventListener('click', () => {

        const expanded = body.classList.toggle('kd-cov-expanded');

        toggleBtn.classList.toggle(
            'kd-cov-open',
            expanded
        );

        toggleText.textContent =
            expanded ? 'Read Less' : 'Read More';

    });


    // ================= SIMPLE MATH CAPTCHA =================

    let numA = 4;
    let numB = 4;


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

        const answer = parseInt(
            document.getElementById('kdCovAnswer').value,
            10
        );


        if (answer !== numA + numB) {

            msg.textContent =
                'Incorrect answer, please try again.';

            msg.className =
                'kd-cov-msg kd-cov-error';

            newCaptcha();

            document.getElementById(
                'kdCovAnswer'
            ).value = '';

            return;
        }


        msg.textContent =
            'Thank you! We will contact you shortly.';

        msg.className =
            'kd-cov-msg kd-cov-success';

        form.reset();

        newCaptcha();

    });

</script>
```
