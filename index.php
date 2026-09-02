<?php include 'include/header.php' ?>


<main>

  

  <!-- hero  -->
  <style>
    #canvas {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 0;
      /* height: 100%; */
      /* max-height: 578px; */
      pointer-events: none;
    }

    .hero-sec-container {
      width: 100%;
      height: 100vh;
      padding: 80px 20px;
      background-color: #f7f9fc;
      /* Graph Paper Background Effect */
      /* background-image:
            linear-gradient(to right, rgba(200, 210, 225, 0.3) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(200, 210, 225, 0.3) 1px, transparent 1px); */
      background-size: 32px 32px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero-sec-header {
      margin-bottom: 36px;
    }

    .hero-sec-main-title {
      font-size: 52px;
      font-weight: 800;
      color: #1e2022;
      line-height: 1.2;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      flex-wrap: wrap;
    }

    .hero-sec-dynamic-text {
      /* color: #2e3077; */
    }

    /* Vertical Cursor Indicator */
    .hero-sec-cursor {
      display: inline-block;
      width: 3px;
      height: 1.1em;
      background-color: #2e3077;
      margin-left: 2px;
      animation: heroSecBlink 0.8s infinite;
    }

    @keyframes heroSecBlink {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }
    }

    .hero-sec-sub-title {
      font-size: 42px;
      font-weight: 800;
      color: #1e2022;
      margin-top: 6px;
    }

    /* Features List Styles */
    .hero-sec-features {
      display: flex;
      flex-direction: column;
      gap: 16px;
      margin-bottom: 40px;
      max-width: 1000px;
    }

    .hero-sec-feature-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 24px;
      flex-wrap: wrap;
    }

    .hero-sec-feature-item {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 15px;
      font-weight: 600;
      color: #2c3e50;
    }

    .hero-sec-check-icon {
      width: 20px;
      height: 20px;
      background-color: #4caf50;
      color: #ffffff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      font-weight: bold;
      flex-shrink: 0;
    }

    /* Buttons Section */
    .hero-sec-actions {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 18px;
      flex-wrap: wrap;
    }

    .hero-sec-btn-primary {
      background-color: #2b2d7c;
      color: #ffffff;
      border: 2px solid #2b2d7c;
      padding: 14px 28px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 0.5px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(43, 45, 124, 0.2);
      z-index: 2;
    }

    .hero-sec-btn-primary:hover {
      background-color: #212363;
      border-color: #212363;
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(43, 45, 124, 0.3);
    }

    .hero-sec-btn-secondary {
      background-color: #ffffff;
      color: #2b2d7c;
      border: 1.5px solid #2b2d7c;
      padding: 14px 28px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 700;
      letter-spacing: 0.5px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: all 0.3s ease;
      z-index: 2;
    }

    .hero-sec-btn-secondary:hover {
      background-color: #f0f2f9;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
    }

    .hero-sec-btn-icon {
      width: 18px;
      height: 18px;
    }

    /* Responsiveness for Tablets and Mobile */
    @media (max-width: 992px) {
      .hero-sec-main-title {
        font-size: 40px;
      }

      .hero-sec-sub-title {
        font-size: 32px;
      }
    }

    @media (max-width: 768px) {
      .hero-sec-container {
        padding: 50px 16px;
      }

      .hero-sec-main-title {
        font-size: 32px;
      }

      .hero-sec-sub-title {
        font-size: 26px;
      }

      .hero-sec-feature-row {
        gap: 14px;
        flex-direction: column;
        align-items: flex-start;
      }

      .hero-sec-features {
        align-items: flex-start;
        text-align: left;
      }

      .hero-sec-actions {
        width: 100%;
        flex-direction: column;
      }

      .hero-sec-btn-primary,
      .hero-sec-btn-secondary {
        width: 100%;
        justify-content: center;
      }
    }
  </style>

  <section class="hero-sec-container">
    <canvas id="canvas"></canvas>
    <!-- Heading Section -->
    <div class="hero-sec-header">
      <h1 class="hero-sec-main-title">
        Learn <span class="hero-sec-dynamic-text sole_3"></span><span class="hero-sec-cursor"></span>
      </h1>
      <h2 class="hero-sec-sub-title">From Industry Experts</h2>
    </div>

    <!-- Features Badges Grid -->
    <div class="hero-sec-features">
      <!-- Row 1 -->
      <div class="hero-sec-feature-row">
        <div class="hero-sec-feature-item">
          <span class="hero-sec-check-icon">✓</span>
          <span>Online/Offline Classes</span>
        </div>
        <div class="hero-sec-feature-item">
          <span class="hero-sec-check-icon">✓</span>
          <span>100% Job Assistance</span>
        </div>
        <div class="hero-sec-feature-item">
          <span class="hero-sec-check-icon">✓</span>
          <span>Real-World Projects</span>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="hero-sec-feature-row">
        <div class="hero-sec-feature-item">
          <span class="hero-sec-check-icon">✓</span>
          <span> Prior Math/Coding Experience Needed</span>
        </div>
        <div class="hero-sec-feature-item">
          <span class="hero-sec-check-icon">✓</span>
          <span>10+ Years of Experience</span>
        </div>
        <!-- <div class="hero-sec-feature-item">
          <span class="hero-sec-check-icon">✓</span>
          <span>Pay 50% Fee After Job Placement*</span>
        </div> -->
      </div>
    </div>

    <!-- Call to Action Buttons -->
    <div class="hero-sec-actions">
      <button class="hero-sec-btn-primary brand-gradient-animated">
        <span>DOWNLOAD BROCHURE</span>
        <svg class="hero-sec-btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
          <polyline points="7 10 12 15 17 10"></polyline>
          <line x1="12" y1="15" x2="12" y2="3"></line>
        </svg>
      </button>

      <button class="hero-sec-btn-secondary dark-gradient-animated">
        <span class="sole_1">BOOK A FREE DEMO CLASS</span>
        <svg class="hero-sec-btn-icon sole_1" viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2">
          <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
          <line x1="8" y1="21" x2="16" y2="21"></line>
          <line x1="12" y1="17" x2="12" y2="21"></line>
        </svg>
      </button>
    </div>
  </section>

  <script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const hero = document.querySelector('.hero-sec-container');

    let width, height;

    function resize() {
      width = canvas.width = hero.offsetWidth;
      height = canvas.height = hero.offsetHeight;
    }
    resize();
    window.addEventListener('resize', () => {
      resize();
      initDots();
    });

    const SPACING = 27,
      BASE_RADIUS = 1.5,
      REPEL_RADIUS = 120,
      REPEL_STRENGTH = 40,
      EASE = 0.12;
    let dots = [];

    function initDots() {
      dots = [];
      const cols = Math.ceil(width / SPACING) + 1;
      const rows = Math.ceil(height / SPACING) + 1;
      for (let i = 0; i < cols; i++)
        for (let j = 0; j < rows; j++)
          dots.push({
            baseX: i * SPACING,
            baseY: j * SPACING,
            x: i * SPACING,
            y: j * SPACING
          });
    }
    initDots();

    const mouse = {
      x: -9999,
      y: -9999
    };
    hero.addEventListener('mousemove', (e) => {
      const rect = hero.getBoundingClientRect();
      mouse.x = e.clientX - rect.left;
      mouse.y = e.clientY - rect.top;
    });
    hero.addEventListener('mouseleave', () => {
      mouse.x = -9999;
      mouse.y = -9999;
    });

    function animate() {
      ctx.clearRect(0, 0, width, height);
      for (const dot of dots) {
        const dx = dot.baseX - mouse.x,
          dy = dot.baseY - mouse.y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        let targetX = dot.baseX,
          targetY = dot.baseY;
        if (dist < REPEL_RADIUS) {
          const force = 1 - dist / REPEL_RADIUS;
          const angle = Math.atan2(dy, dx);
          targetX += Math.cos(angle) * force * REPEL_STRENGTH;
          targetY += Math.sin(angle) * force * REPEL_STRENGTH;
        }
        dot.x += (targetX - dot.x) * EASE;
        dot.y += (targetY - dot.y) * EASE;
        ctx.beginPath();
        ctx.arc(dot.x, dot.y, BASE_RADIUS, 0, Math.PI * 2);
        ctx.fillStyle = '#6666';
        // ctx.fillStyle = '#8f8f8ff7';
        // ctx.fillStyle = '#CF7103';
        ctx.fill();
      }
      requestAnimationFrame(animate);
    }
    animate();

    document.addEventListener('DOMContentLoaded', () => {
      const dynamicTextElement = document.querySelector('.hero-sec-dynamic-text');

      const courses = [
        'Data Science',
        'Data Analytics',
        'Python',
        'Java',
        'Digital Marketing',
        'Machine Learning & AI'
      ];

      let courseIndex = 0;
      let charIndex = 0;
      let isDeleting = false;
      const typingSpeed = 100;
      const deletingSpeed = 50;
      const delayBetweenWords = 2000;

      function typeEffect() {
        const currentCourse = courses[courseIndex];

        if (isDeleting) {
          dynamicTextElement.textContent = currentCourse.substring(0, charIndex - 1);
          charIndex--;
        } else {
          dynamicTextElement.textContent = currentCourse.substring(0, charIndex + 1);
          charIndex++;
        }

        let currentSpeed = isDeleting ? deletingSpeed : typingSpeed;

        if (!isDeleting && charIndex === currentCourse.length) {
          currentSpeed = delayBetweenWords;
          isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
          isDeleting = false;
          courseIndex = (courseIndex + 1) % courses.length;
          currentSpeed = 400;
        }

        setTimeout(typeEffect, currentSpeed);
      }

      if (dynamicTextElement) {
        typeEffect();
      }
    });
  </script>


<?php require_once __DIR__ . '/include/home-section/section_1.php' ?>


  <!-- PROGRAMS -->
  <style>
    .msw-img-placeholder12 {
      width: 100%;
      height: 200px;
      overflow: hidden;
      /* height: 100%; */
      /* min-height: 120px; */
      /* background: repeating-linear-gradient(45deg, #f1eefc, #f1eefc 10px, #e7e2fb 10px, #e7e2fb 20px); */
      /* border: 2px dashed #b7aef0; */
      /* border-radius: 14px; */
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      color: #6a5fc7;
      font-size: 13px;
      font-weight: 600;
      text-align: center;
      gap: 6px;
      transition: transform .35s ease, box-shadow .35s ease;
    }

    .msw-img-placeholder12 img {
      width: 100%;
      object-fit: cover;
      transition: .25s ease;
      /* object-position: center center; */
    }

    .msw-img-placeholder12:hover img {
      transition: .25s ease;
      transform: scale(1.1);
    }
  </style>
  <section class="msw-section" id="msw-programs">
    <div class="msw-container">
      <div class="msw-section-head msw-reveal">

        <h2 class="msw-section-title sol"> Don’t <span class="sole_3">Just Learn. Build Your Future.</span></h2>
        <p class="msw-section-sub sol">Master in-demand skills, work on real projects, and prepare yourself for the
          opportunities that matter.</p>
      </div>

      <div class="msw-pill-heading msw-reveal">
        <a class="msw-btn-pill brand-gradient-animated sole_1" style="color: white;" href="#">Tech Courses</a>
        <p class="msw-section-sub" style="margin-top:14px;">Build what powers the world — from algorithms to AI
          agents.</p>
      </div>

      <div class="msw-cards-grid msw-reveal">
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Data Science.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Data Science</h3>
            <p>Transform raw data into real-world impact using machine learning and statistics.</p>
            <ul>
              <li>Work with Python, Pandas, NumPy, and Scikit-Learn.</li>
              <li>Command data cleaning, feature engineering, un-supervised ML models, and model evaluation.</li>
            </ul>
          </div>
        </div>
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Data Analytics.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Data Analytics</h3>
            <p>Decode patterns, predict outcomes, and drive smart business decisions.</p>
            <ul>
              <li>Pick up SQL, Excel, Power BI, Tableau, and data storytelling.</li>
              <li>Gain business context, work on case studies, and form dashboards that find impact.</li>
            </ul>
          </div>
        </div>
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/ai_img.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>AI &amp; Machine Learning</h3>
            <p>Master the tools driving the next generation of intelligent products.</p>
            <ul>
              <li>Deep dive into Generative AI, LLMs, and ChatGPT-based tools.</li>
              <li>Build real capstone projects mentored by industry experts.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="msw-pill-heading msw-reveal" style="margin-top:60px;">
        <a class="msw-btn-pill brand-gradient-animated sole_1" style="color: white;" href="#">High Language
          Courses</a>
        <p class="msw-section-sub" style="margin-top:14px;">Shape the future of user experience and brand identity.
        </p>
      </div>

      <div class="msw-cards-grid msw-two msw-reveal">
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Python logo.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Python</h3>
            <p>Formulate intuitive, beautiful digital experiences that users love.</p>
            <ul>
              <li>Cover design thinking, user research, wireframing, and prototyping.</li>
              <li>Explore tools like Figma and craft real product journeys.</li>
            </ul>
          </div>
        </div>
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/java.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Java</h3>
            <p>Craft visual identities that turn heads and tell stories.</p>
            <ul>
              <li>Get the hang of visual hierarchy, typography, brand systems, and Adobe Creative Suite.</li>
              <li>Become skilled in design systems, create campaigns, and style a polished portfolio.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="msw-pill-heading msw-reveal" style="margin-top:60px;">
        <a class="msw-btn-pill brand-gradient-animated sole_1" style="color: white;" href="#">Marketing &amp;
          Management Course</a>
        <p class="msw-section-sub" style="margin-top:14px;">Grow brands and lead campaigns with measurable impact.
        </p>
      </div>

      <div class="msw-cards-grid msw-two msw-reveal">
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/digital markting.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Digital Marketing</h3>
            <p>Drive traffic, convert leads, and optimize marketing with data-driven strategies.</p>
            <ul>
              <li>Nail SEO, Google Ads, Meta Ads, and marketing funnels, and analytics tools.</li>
              <li>Launch real campaigns and measure ROI.</li>
            </ul>
          </div>
        </div>
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Product Management.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Product Management</h3>
            <p>Build and launch products that solve real problems and drive business growth.</p>
            <ul>
              <li>Master product roadmapping, Agile methodologies, and stakeholder management.</li>
              <li>Work on real-world product specs and prioritize features for impact.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- SUMMIT GALLERY -->
  <style>
    .reative_box {
      position: relative;
    }

    .reative_box:hover .msw-ph-icon974 {
      bottom: 0;
      transition: .25s ease;
    }

    .msw-ph-icon974 {
      transition: .25s ease;
      position: absolute;
      bottom: -200px;
      left: 0;
      width: 100%;
      /* height: 100%; */
      display: flex;
      justify-content: center;
      align-items: end;
      padding: 4px 25px 9px;
      background-color: #0f0f1857;
      backdrop-filter: blur(6px);

    }



    .msw-ph-icon974 h5 {
      font-size: 18px;
      font-weight: 800;
    }
  </style>
  <section class="msw-section msw-summit" id="msw-about">
    <div class="msw-container">
      <div class="msw-summit-tag msw-reveal sole_2">✨ Glimpse from Rising Bharat Summit</div>
      <h2 class="msw-summit-title msw-reveal"><b>EagletFly Solutions :</b> Great Ideas Start With <span
          class="sole_3">Great People</span> </h2>
      <div class="msw-gallery msw-reveal">

        <!-- card 1 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="img/teachers-1.jpg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Great minds don’t just teach, they inspire.</h5>
          </span>
        </div>

        <!-- card 2 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="img/teachers-2.jpg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Knowledge becomes powerful when it is shared. </h5>
          </span>
        </div>

        <!-- card 3 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="img/teachers-3.jpg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Success starts with the courage to keep learning. </h5>
          </span>
        </div>

        <!-- card 4 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="img/teachers-4.jpg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Learn with purpose. Grow with confidence. </h5>
          </span>
        </div>

        <!-- card 5 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="img/teachers-5.jpg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Your potential is greater than your current skills. </h5>
          </span>
        </div>

        <!-- card 6 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="img/bacck_1.png" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Ideas grow when great minds come together. </h5>
          </span>
        </div>

      </div>
    </div>
  </section>


  <!-- PARTNERS -->
  <style>
    .componys_hover {
      position: relative;
      overflow: hidden;
      z-index: 0;
    }

    .componys_hover::after {
      content: "";
      width: 100%;
      height: 100%;
      background-color: #F5820B;
      position: absolute;
      right: -100%;
      top: 0;
      z-index: -1;
      transition: right 0.6s ease;
    }

    .componys_hover:hover::after {
      right: 0;
    }

    .componys_hover:hover {
      color: aliceblue;

    }
  </style>
  <section class="msw-section">
    <div class="msw-container">
      <h2 class="msw-partners-title msw-reveal"><span class="sole_3">300 +</span> Hiring Partners</h2>
      <div class="msw-logo-grid msw-reveal">
        <div class="msw-logo-box componys_hover">Cognizant</div>
        <div class="msw-logo-box componys_hover">RBS</div>
        <div class="msw-logo-box componys_hover">Sapient</div>
        <div class="msw-logo-box componys_hover">Infosys</div>
        <div class="msw-logo-box componys_hover">wipro</div>
        <div class="msw-logo-box componys_hover">Indiabulls</div>
        <div class="msw-logo-box componys_hover">genpact</div>
        <div class="msw-logo-box componys_hover">amdocs</div>
        <div class="msw-logo-box componys_hover">DELL</div>
        <div class="msw-logo-box componys_hover">Airtel</div>
        <div class="msw-logo-box componys_hover">HCL</div>
        <div class="msw-logo-box componys_hover">hp</div>
        <div class="msw-logo-box componys_hover">Paytm</div>
        <div class="msw-logo-box componys_hover">Google</div>
        <div class="msw-logo-box componys_hover">accenture</div>
        <div class="msw-logo-box componys_hover">Standard Chartered</div>
      </div>
    </div>
  </section>


  <!-- Old web section -->
  <style>
    :root {

      /* ========================================
       BRAND COLORS
         ======================================== */

      --color-primary: #F47B20;
      --color-primary-light: #FF9A4A;
      --color-primary-dark: #D85F0B;

      --color-secondary: #4F7FF7;
      --color-secondary-light: #7FA3FF;
      --color-secondary-dark: #315FCC;


      /* ========================================
       BACKGROUNDS
        ======================================== */

      --color-bg: #FFFFFF;
      --color-bg-soft: #F7F8FA;
      --color-bg-muted: #EEF1F5;

      --color-bg-dark: #1C3D7B;
      --color-bg-dark-soft: #1A2233;


      /* ========================================
       TEXT
        ======================================== */

      --color-text: #171B26;
      --color-text-secondary: #5F6673;
      --color-text-muted: #8A919D;

      --color-text-light: #FFFFFF;
      --color-text-light-secondary: #C4C9D2;


      /* ========================================
       BORDERS
        ======================================== */

      --color-border: #E3E7ED;
      --color-border-dark: #30394A;


      /* ========================================
       PRIMARY GRADIENTS
    ======================================== */

      --gradient-primary:
        linear-gradient(135deg,
          #F47B20 0%,
          #FF9A4A 100%);

      --gradient-primary-dark:
        linear-gradient(135deg,
          #D85F0B 0%,
          #F47B20 100%);


      /* ========================================
       SECONDARY GRADIENTS
    ======================================== */

      --gradient-secondary:
        linear-gradient(135deg,
          #315FCC 0%,
          #4F7FF7 50%,
          #7FA3FF 100%);

      --gradient-secondary-dark:
        linear-gradient(135deg,
          #244BA5 0%,
          #315FCC 100%);


      /* ========================================
       BRAND GRADIENTS
    ======================================== */

      --gradient-brand:
        linear-gradient(135deg,
          #F47B20 0%,
          #FF9A4A 45%,
          #4F7FF7 100%);

      --gradient-brand-reverse:
        linear-gradient(135deg,
          #4F7FF7 0%,
          #7FA3FF 55%,
          #F47B20 100%);


      /* ========================================
       DARK GRADIENTS
    ======================================== */

      --gradient-dark:
        linear-gradient(135deg,
          #111827 0%,
          #1A2233 100%);


      /* ========================================
       GLOW
    ======================================== */

      --gradient-glow:
        radial-gradient(circle,
          rgba(244, 123, 32, 0.16) 0%,
          rgba(244, 123, 32, 0) 70%);

      --gradient-glow-secondary:
        radial-gradient(circle,
          rgba(79, 127, 247, 0.18) 0%,
          rgba(79, 127, 247, 0) 70%);


      /* ========================================
       STATUS COLORS
    ======================================== */

      --color-success: #16A34A;
      --color-warning: #D99100;
      --color-danger: #DC2626;
      --color-info: #4F7FF7;


      /* ========================================
       SHADOWS
    ======================================== */

      --shadow-sm:
        0 2px 8px rgba(15, 23, 42, 0.06);

      --shadow-md:
        0 8px 24px rgba(15, 23, 42, 0.10);

      --shadow-lg:
        0 16px 40px rgba(15, 23, 42, 0.14);

      --shadow-orange:
        0 10px 30px rgba(244, 123, 32, 0.18);

      --shadow-blue:
        0 10px 30px rgba(79, 127, 247, 0.18);


      /* ========================================
       RADIUS
    ======================================== */

      --radius-sm: 6px;
      --radius-md: 10px;
      --radius-lg: 16px;
      --radius-xl: 24px;
      --radius-full: 999px;


      /* ========================================
       TRANSITIONS
    ======================================== */

      --transition-fast: 150ms ease;
      --transition-normal: 250ms ease;
      --transition-slow: 400ms ease;
    }

    .about-why {
      background: #FFF9F2;
      /* background: var(--color-bg-muted); */
      padding: 100px 40px;
      overflow: hidden;
    }

    .about-why_heading {
      max-width: 700px;
      margin: 0 auto 60px;
      text-align: center;
    }

    .about-why_heading span {
      display: inline-block;
      padding: 6px 18px;
      margin-bottom: 16px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: 0.5px;
      color: var(--color-primary-dark);
      background: rgba(244, 123, 32, 0.1);
      border-radius: var(--radius-full);
    }

    .about-why_heading span::before {
      content: "KingDigital";
    }

    .about-why_heading h1 {
      font-size: 42px;
      font-weight: 700;
      margin: 0 0 10px;
      line-height: 1.2;
      background: var(--gradient-brand-reverse);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }


    .about-why_content {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1.5fr 1fr;
      gap: 70px;
      align-items: center;
      opacity: 0;
      transform: translateY(30px);
      transition: opacity var(--transition-slow), transform var(--transition-slow);
    }

    .about-why_content.in-view {
      opacity: 1;
      transform: translateY(0);
    }

    .about-why_content-visual {
      position: relative;
    }

    .about-why_content-visual::before {
      content: "";
      position: absolute;
      inset: -20px;
      /* background: var(--gradient-glow);? */
      /* border-radius: var(--radius-xl); */
      z-index: 0;
    }

    .about-why_content-visual-img {
      position: relative;
      z-index: 1;
      /* border-radius: var(--radius-lg); */
      overflow: hidden;
      /* box-shadow: var(--shadow-lg); */
    }

    .about-why_content-visual-img img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .about-why_content-text h2 {
      font-size: 30px;
      font-weight: 800;
      color: var(--color-text);
      margin: 0 0 20px;
      line-height: 1.3;
    }

    .about-why_content-text h2 span {
      background: var(--gradient-brand);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .about-why_content-text p {
      font-size: 16px;
      line-height: 1.75;
      color: var(--color-text-secondary);
      margin: 0;
    }

    @media (max-width: 900px) {
      .about-why {
        padding: 70px 24px;
      }

      .about-why_heading h1 {
        font-size: 32px;
      }

      .about-why_content {
        grid-template-columns: 1fr;
        gap: 36px;
      }
    }
  </style>
  <section class="about-why">
    <div class="about-why_headin" style="margin: auto;text-align: center;
    padding-bottom: 56px;">

      <h1 class="sole_3">Key Features of EagletFly Solutions </h1>
    </div>
    <div class="about-why_content in-view">
      <div class="about-why_content-visual in-view">
        <div class="about-why_content-visual-img">
          <img src="img/Infographic-News.png" alt="">
        </div>
      </div>
      <div class="about-why_content-text in-view">

        <p style="font-size: 12.5px;">“Eagletfly Solutions contribute broadly recognized information by teaching,
          learning and the evaluation
          of instructive results over the life outlook through its training curriculum. We intend to give the best
          planning for all of our learners and give Placement helps too.

          Here, the course construction is designed so as to put the right weight on Theory and Guidance on. Our
          Learning methodologies assure that you easily understand both the Basic and Advanced technical theories.
        </p><br>
        <p style="font-size: 12.5px;">The emphasis is given to experiential learning wherein you study from real
          Case subjects and Live
          projects. Regular workshops and appropriate evaluations are other trademarks of our course construction.

          As the role of our job willingness program, we guide you through a set of Mock interviews accompanied by
          business veterans. Our purpose is not merely to land our learners in better jobs but to guarantee that
          they are qualified to become the greatest programmers in the world.</p>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const aboutContent1 = document.querySelector('.about-why_content-visual');
      const aboutContent2 = document.querySelector('.about-why_content-text');
      const aboutWhyContent = document.querySelector('.about-why_content');

      if (aboutContent1 || aboutContent2 || aboutWhyContent) {
        const revealObserver = new IntersectionObserver((entries) => {
          entries.forEach((entry) => {
            entry.target.classList.toggle('in-view', entry.isIntersecting);
          });
        }, {
          threshold: 0.2,
          rootMargin: '0px 0px -10% 0px'
        });

        if (aboutContent1) revealObserver.observe(aboutContent1);
        if (aboutContent2) revealObserver.observe(aboutContent2);
        if (aboutWhyContent) revealObserver.observe(aboutWhyContent);
      }
    });
  </script>


  <!-- WHY TRUST -->
  <section class="msw-section msw-trust">
    <div class="msw-container">
      <div class="msw-section-head msw-reveal">
        <h2 class="msw-section-title">Why Learners Trust <span class="sole_3">EagletFly</span> with Their Future
        </h2>
        <p class="msw-section-sub">Building Careers That Not Only Pay But Builds Impact</p>
      </div>
      <div class="msw-trust-cta msw-reveal">
        <a class="msw-btn msw-btn-primary primary_btns" style="color: white;" href="#msw-programs">Explore
          Programs</a>
        <a class="msw-btn msw-btn-outline" href="#msw-contact">Talk To Our Expert</a>
      </div>
      <div class="msw-features-grid msw-reveal">
        <div class="msw-feature-card">
          <div class="msw-feature-icon">🎯</div>
          <h3>Outcome-Oriented Approach</h3>
          <p>Indulge into career-aligned learning paths built by ex-Cognizant professionals. We offer dedicated
            capstone projects and role-based simulations to let you ace in your domain.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon">⚡</div>
          <h3>Real-Time Expertise</h3>
          <p>We move above the pre-recorded monotony. We live mentor sessions, we ensure to resolve all your queries
            and break down real-world case studies.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon">🧩</div>
          <h3>Built-in Practice Layer</h3>
          <p>Master Data Science, AI, Machine Learning, Deep Learning, and ChatGPT with the latest tools by
            enrolling
            in the AI course in Delhi.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon">📄</div>
          <h3>Beyond Certification</h3>
          <p>Resume and LinkedIn optimization and assist in profoundly. Get expert help with interview readiness
            drills, mock rounds, and hiring partner accessibility.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon">🎤</div>
          <h3>Mock Interviews with Real Feedback</h3>
          <p>Our seasoned industry mentors conduct simulations and share detailed feedback to improve your
            performance
            and reach your goal one step at a time.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon">🤝</div>
          <h3>Hiring Network Access</h3>
          <p>We have a rich network of professionals spread over leading MNCs. Get referred to top companies through
            our growing pool of hiring partners.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- TESTIMONIALS -->
  <section class="msw-section" id="msw-testimonials" style="background: #FFF9F2;">
    <div class="msw-container">
      <div class="msw-section-head msw-reveal">
        <h2 class="msw-section-title">Stories of Skills Turned into <span class="sole_3">Success</span></h2>
      </div>
      <div class="msw-testi-grid msw-reveal">

        <!-- student card 1 -->
        <div class="msw-testi-card">
          <div class="msw-testi-top">
            <div class="msw-testi-avatar" style="overflow: hidden;"><img src="img/students-1.jpg" alt=""></div>
            <div>
              <div class="msw-testi-name">Shivani Rakhroan</div>
              <div class="msw-stars">★★★★★</div>
            </div>
          </div>
          <p class="msw-testi-text">"I have enrolled in a Data Scientist AI course, and based on my experience,
            Eagletfly Solutions stands out as the premier institute. The faculty exhibits extensive expertise in
            their respective fields, teachers are exceedingly cooperative, and the overall environment of the
            institute is exceptional."</p>
        </div>

        <div class="msw-testi-card">
          <div class="msw-testi-top">
            <div class="msw-testi-avatar" style="overflow: hidden;"><img src="img/students-3.jpg" alt=""></div>
            <div>
              <div class="msw-testi-name">Chetna Saini</div>
              <div class="msw-stars">★★★★★</div>
            </div>
          </div>
          <p class="msw-testi-text">Best institute in Patel Nagar where the teachers are very cooperative and the
            learning skills are top - notch.
          </p>
        </div>

        <div class="msw-testi-card">
          <div class="msw-testi-top">
            <div class="msw-testi-avatar" style="overflow: hidden;"><img src="img/students-2.jpeg" alt=""></div>
            <div>
              <div class="msw-testi-name">Tanya Bansal</div>
              <div class="msw-stars">★★★★★</div>
            </div>
          </div>
          <p class="msw-testi-text">My experience with Eagletfly Solutions about data analytics with python is much
            impressed, with such quality of the training. All the concepts was covered with no compromise.
            Instructor was very well determined and focused with examples. Now i am placed in SI2 (Singapore) based
            company.</p>
        </div>

        <div class="msw-testi-card">
          <div class="msw-testi-top">
            <div class="msw-testi-avatar" style="overflow: hidden;"><img src="img/teachers-1.jpg" alt=""></div>
            <div>
              <div class="msw-testi-name">Diana</div>
              <div class="msw-stars">★★★★★</div>
            </div>
          </div>
          <p class="msw-testi-text">This coaching centre offers excellent guidance with knowledgeable faculty and a
            supportive learning environment. The study material is well-structured, and the personalized attention
            really helps students succeed.</p>
        </div>

      </div>
    </div>
  </section>


  <!-- SYSTEM DARK -->
  <section class="msw-section msw-system">
    <div class="msw-container msw-system-inner">
      <div class="msw-system-left msw-reveal">
        <h2>EagletFly Solutions :<br><span class="sole_3">System Behind Success</span></h2>
        <p>Experience a complete ecosystem curated to move your career faster. 🚀</p>
        <a class="msw-btn msw-btn-primar brand-gradient-animated" style="margin-top:22px;"
          href="#msw-programs">Explore Career Paths</a>
      </div>
      <div class="msw-system-cards msw-reveal">
        <div class="msw-sys-card msw-sys-dark">
          <h4>Skill Acceleration Sprints 🚀</h4>
          <p>Rapid 4-6 week deep-dives designed to plug real-world skill gaps.</p>
        </div>
        <div class="msw-sys-card msw-sys-ligh primary_btns-without-shado">
          <h4>Hiring Partner Connects 💼</h4>
          <p>Exclusive access to pre-placement drives and company-sponsored tasks.</p>
        </div>
        <div class="msw-sys-card msw-sys-dark">
          <h4>Portfolio That Speaks 📁</h4>
          <p>Build GitHub repos, Behance cases, or campaign decks that actually get recruiters calling.</p>
        </div>
        <div class="msw-sys-card msw-sys-ligh primary_btns-without-shado">
          <h4>One-to-One Roadmapping 🗺️</h4>
          <p>Get personalized goal-mapping and pivot plans with senior mentors.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- JOURNEY -->
  <!-- <section class="msw-section msw-journey" style="display: none;">
        <div class="msw-container">
          <h2 class="msw-journey-title msw-reveal">Inside EagletFly : What Learners Really <span
              class="sole_3">Experience</span></h2>
          <p class="msw-section-sub msw-reveal">A peek into the real journey — from day one to offer letters.</p>
          <div class="msw-journey-grid msw-reveal">
            <div>
              <div class="msw-journey-icon">🗓️</div>
              <h3>Your First 30 Days</h3>
              <p>Tool rotation kickoff, project preview, mentor intros &amp; your first sprint challenge.</p>
            </div>
            <div>
              <div class="msw-journey-icon">📈</div>
              <h3>The Midway Momentum</h3>
              <p>Case studies, client-styled feedback, and peer reviews amp up your growth.</p>
            </div>
            <div>
              <div class="msw-journey-icon">🎯</div>
              <h3>The Placement Zone</h3>
              <p>Resume teardown, recruiter AMAs, and mock drills led by hiring managers.</p>
            </div>
          </div>

          <div class="msw-cta-banner msw-reveal" id="msw-contact">
            <div class="msw-cta-text">
              This isn't the end But your <span class="msw-accent">starting line</span>. Careers don't change with
              information.
              They change with action. <b>demand.</b> 🙌<br><br>
              Take the first step toward a future you've imagined — one where you're
              <b>skilled, confident,</b> and in <b>demand.</b>
            </div>
            <div class="msw-cta-badge">100%<br>Placement 🏆</div>
          </div>
        </div>
      </section> -->

</main>

<?php include 'include/footer.php' ?>