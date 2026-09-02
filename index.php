<?php include 'include/header.php' ?>


<main>



  <!-- hero  -->
  <?php require_once __DIR__ . '/include/home-section/hero-section_type_1.php' ?>
  <?php require_once __DIR__ . '/include/home-section/hero-section_type_2.php' ?>

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
  <?php require_once __DIR__ . '/include/home-section/section_marquee.php' ?>

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
    height: 100%;
    object-fit: cover;
    transition: .25s ease;
    object-position: center center;
      /* object-position: center center; */
    }

    .msw-img-placeholder12:hover img {
      transition: .25s ease;
      transform: scale(1.1);
    }


    .sole_riper_1{
          box-shadow: none !important;
          transition: .25x ease;
        }
        .sole_riper_1:hover{
      transition: .25x ease;
          box-shadow: 0 2px 2px 2px #666 !important;
    }

    .curase_topse{
      font-size:20px ;
    }
  </style>
  <section class="msw-section" id="msw-programs">
    <div class="msw-container">
      <div class="msw-section-head msw-reveal">

        <h2 class="msw-section-title sol"> Don’t <span class="rainbow-animated_without_animtion">Just Learn. Build Your Future.</span></h2>
        <p class="msw-section-sub sol">Master in-demand skills, work on real projects, and prepare yourself for the
          opportunities that matter.</p>
      </div>

      <div class="msw-pill-heading msw-reveal">
        <a class="msw-btn-pill dark-gradient-animated sole_riper_1" style="color: white;" href="#">Tech Courses</a>
        <p class="msw-section-sub curase_topse" style="margin-top:30px;">Build what powers the world — from algorithms to AI
          agents.</p>
      </div>

      <div class="msw-cards-grid msw-reveal">

        <!-- card 1 -->
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Data Analytics.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Data Analytics</h3>
            <p style="margin-top: 10px;">Decode patterns, predict outcomes, and drive smart business decisions.</p>
            <ul style="margin-top: 10px;">
              <li>Pick up SQL, Excel, Power BI, Tableau, and data storytelling.</li>
              <li>Gain business context, work on case studies, and form dashboards that find impact.</li>
            </ul>

          </div>
        </div>

        <!-- card 2 -->
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Data Science.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Artificial intelligence <br> and ML</h3>
            <p style="margin-top: 10px;">Transform raw data into real-world impact using machine .</p>
            <ul style="margin-top: 10px;">
              <li>Work with Python, Pandas, NumPy, and Scikit-Learn.</li>
              <li>Command data cleaning, feature engineering, un-supervised ML models, and model evaluation.</li>
            </ul>
          </div>
        </div>

        <!-- card 3 -->
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/ai_img.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Gen Ai and agentic ai</h3>
            <p style="margin-top: 10px;">Master the tools driving the next generation of intelligent products.</p>
            <ul style="margin-top: 10px;">
              <li>Deep dive into Generative AI, LLMs, and ChatGPT-based tools.</li>
              <li>Build real capstone projects mentored by industry experts.</li>
            </ul>
          </div>
        </div>

        <!-- card 4 -->
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Data Science.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Data science and Ml</h3>
            <p style="margin-top: 10px;">Master the tools driving the next generation of intelligent products.</p>
            <ul style="margin-top: 10px;">
              <li>Deep dive into Generative AI, LLMs, and ChatGPT-based tools.</li>
              <li>Build real capstone projects mentored by industry experts.</li>
            </ul>
          </div>
        </div>

      </div>




      <div class="msw-pill-heading msw-reveal" style="margin-top:60px;">
        <a class="msw-btn-pill dark-gradient-animated sole_riper_1" style="color: white;" href="#">High Language
          Courses</a>
        <p class="msw-section-sub curase_topse" style="margin-top:30px;">Shape the future of user experience and brand identity.
        </p>
      </div>

      <!-- card 4 -->
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

        <!-- card 5 -->
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
        <a class="msw-btn-pill dark-gradient-animated sole_riper_1" style="color: white;" href="#">Marketing &amp;
          Management Course</a>
        <p class="msw-section-sub curase_topse" style="margin-top:30px;">Grow brands and lead campaigns with measurable impact.
        </p>
      </div>

      <!-- card 6 -->
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

        <!-- card 7 -->
        <div class="msw-course-card">
          <div class="msw-img-placeholder12"><img src="img/Product Management.jpg" alt=""></div>
          <div class="msw-course-body">
            <h3>Digital Marketing With Ai</h3>
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

    .reative_box:nth-child(1){
      border-top-left-radius:100px !important;
      border-bottom-right-radius:40px !important;
      border: 1px solid orangered !important;
    }
    .reative_box:nth-child(2){
      border: 1px solid orangered !important;
      height: 250px !important;
      border-top-left-radius:40px !important;
      border-bottom-right-radius:40px !important;
    }
    .reative_box:nth-child(3){
      border: 1px solid orangered !important;
      border-bottom-left-radius:80px !important;
      border-top-right-radius:100px !important;
    }
    .reative_box:nth-child(4 ){
      border: 1px solid orangered !important;
      border-bottom-left-radius:100px !important;
      border-top-right-radius:40px !important;
    }
    .reative_box:nth-child(5){
     border: 1px solid orangered !important;
      height: 250px !important;
      border-top-left-radius:80px !important;
      border-bottom-right-radius:100px !important;
    }
    .reative_box:nth-child(6){
      border: 1px solid orangered !important;
      border-top-left-radius:50px !important;
      border-bottom-right-radius:100px !important;
    }
  </style>
  <section class="msw-section msw-summit" id="msw-about">
    <div class="msw-container">
      <div class="msw-summit-tag msw-reveal sole_2" style="display: none;">✨ Glimpse from Rising Bharat Summit</div>
      <h2 class="msw-summit-title msw-reveal"><b>EagletFly Solutions :</b> Great Ideas Start With <span
          class="rainbow-animated_without_animtion">Great People</span> </h2>
      <div class="msw-gallery msw-reveal">

        <!-- card 1 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="assets/students_imgs/img_1.jpeg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Great minds don’t just teach, they inspire.</h5>
          </span>
        </div>

        <!-- card 2 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="assets/students_imgs/img_2.jpeg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Knowledge becomes powerful when it is shared. </h5>
          </span>
        </div>

        <!-- card 3 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="assets/students_imgs/img_3.jpeg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Success starts with the courage to keep learning. </h5>
          </span>
        </div>

        <!-- card 4 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="assets/students_imgs/img_2.jpeg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Learn with purpose. Grow with confidence. </h5>
          </span>
        </div>

        <!-- card 5 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="assets/students_imgs/img_3.jpeg" alt="">
          <span class="msw-ph-icon974">
            <h5 class="sole_1">Your potential is greater than your current skills. </h5>
          </span>
        </div>

        <!-- card 6 -->
        <div class="msw-img-placeholder12 reative_box" style="border-radius:10px ;overflow: hidden;">
          <img src="assets/students_imgs/img_1.jpeg" alt="">
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
  <section class="msw-section" style="display: none;">
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

      <h1 style="font-size: 35px;color:#111827; font-weight:800;">Key Features of <em style="font-style: normal;" class="rainbow-animated_without_animtion">EagletFly Solutions</em> </h1>
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
   <style>
    .icon_shot_12{
      svg{
        width: 30px;
        fill: blue;
      }
    }
   </style>
  <section class="msw-section msw-trust">
    <div class="msw-container">
      <div class="msw-section-head msw-reveal">
        <h2 class="msw-section-title">Why Learners Trust <span class="rainbow-animated_without_animtion">EagletFly</span> with Their Future
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
          <div class="msw-feature-icon"><span class="icon_shot_12"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M512 320C512 214 426 128 320 128C214 128 128 214 128 320C128 426 214 512 320 512C426 512 512 426 512 320zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 400C364.2 400 400 364.2 400 320C400 275.8 364.2 240 320 240C275.8 240 240 275.8 240 320C240 364.2 275.8 400 320 400zM320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320C176 240.5 240.5 176 320 176zM288 320C288 302.3 302.3 288 320 288C337.7 288 352 302.3 352 320C352 337.7 337.7 352 320 352C302.3 352 288 337.7 288 320z"/></svg></span></div>
          <h3>Outcome-Oriented Approach</h3>
          <p>Indulge into career-aligned learning paths built by ex-Cognizant professionals. We offer dedicated
            capstone projects and role-based simulations to let you ace in your domain.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon"><span class="icon_shot_12"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M434.8 54.1C446.7 62.7 451.1 78.3 445.7 91.9L367.3 288L512 288C525.5 288 537.5 296.4 542.1 309.1C546.7 321.8 542.8 336 532.5 344.6L244.5 584.6C233.2 594 217.1 594.5 205.2 585.9C193.3 577.3 188.9 561.7 194.3 548.1L272.7 352L128 352C114.5 352 102.5 343.6 97.9 330.9C93.3 318.2 97.2 304 107.5 295.4L395.5 55.4C406.8 46 422.9 45.5 434.8 54.1z"/></svg></span></div>
          <h3>Real-Time Expertise</h3>
          <p>We move above the pre-recorded monotony. We live mentor sessions, we ensure to resolve all your queries
            and break down real-world case studies.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon"><span class="icon_shot_12"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M288 64C323.3 64 352 85.5 352 112C352 122.4 347.6 132 340 139.9C333.4 146.8 328 155.2 328 164.8C328 179.8 340.2 192 355.2 192L400 192C426.5 192 448 213.5 448 240L448 284.8C448 299.8 460.2 312 475.2 312C484.7 312 493.2 306.6 500.1 300C508 292.5 517.6 288 528 288C554.5 288 576 316.7 576 352C576 387.3 554.5 416 528 416C517.6 416 507.9 411.6 500.1 404C493.2 397.4 484.8 392 475.2 392C460.2 392 448 404.2 448 419.2L448 528C448 554.5 426.5 576 400 576L343.2 576C330.4 576 320 565.6 320 552.8C320 543.6 325.8 535.5 333.2 530C344.8 521.3 352 509.3 352 496C352 469.5 323.3 448 288 448C252.7 448 224 469.5 224 496C224 509.3 231.2 521.3 242.8 530C250.2 535.5 256 543.5 256 552.8C256 565.6 245.6 576 232.8 576L112 576C85.5 576 64 554.5 64 528L64 407.2C64 394.4 74.4 384 87.2 384C96.4 384 104.5 389.8 110 397.2C118.7 408.8 130.7 416 144 416C170.5 416 192 387.3 192 352C192 316.7 170.5 288 144 288C130.7 288 118.7 295.2 110 306.8C104.5 314.2 96.5 320 87.2 320C74.4 320 64 309.6 64 296.8L64 240C64 213.5 85.5 192 112 192L220.8 192C235.8 192 248 179.8 248 164.8C248 155.3 242.6 146.8 236 139.9C228.5 132 224 122.4 224 112C224 85.5 252.7 64 288 64z"/></svg></span></div>
          <h3>Built-in Practice Layer</h3>
          <p>Master Data Science, AI, Machine Learning, Deep Learning, and ChatGPT with the latest tools by
            enrolling
            in the AI course in Delhi.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon"><span class="icon_shot_12"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M192 64C156.7 64 128 92.7 128 128L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 234.5C512 217.5 505.3 201.2 493.3 189.2L386.7 82.7C374.7 70.7 358.5 64 341.5 64L192 64zM453.5 240L360 240C346.7 240 336 229.3 336 216L336 122.5L453.5 240z"/></svg></span></div>
          <h3>Beyond Certification</h3>
          <p>Resume and LinkedIn optimization and assist in profoundly. Get expert help with interview readiness
            drills, mock rounds, and hiring partner accessibility.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon"><span class="icon_shot_12"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 64C267 64 224 107 224 160L224 288C224 341 267 384 320 384C373 384 416 341 416 288L416 160C416 107 373 64 320 64zM176 248C176 234.7 165.3 224 152 224C138.7 224 128 234.7 128 248L128 288C128 385.9 201.3 466.7 296 478.5L296 528L248 528C234.7 528 224 538.7 224 552C224 565.3 234.7 576 248 576L392 576C405.3 576 416 565.3 416 552C416 538.7 405.3 528 392 528L344 528L344 478.5C438.7 466.7 512 385.9 512 288L512 248C512 234.7 501.3 224 488 224C474.7 224 464 234.7 464 248L464 288C464 367.5 399.5 432 320 432C240.5 432 176 367.5 176 288L176 248z"/></svg></span></div>
          <h3>Mock Interviews with Real Feedback</h3>
          <p>Our seasoned industry mentors conduct simulations and share detailed feedback to improve your
            performance
            and reach your goal one step at a time.</p>
        </div>
        <div class="msw-feature-card">
          <div class="msw-feature-icon"><span class="icon_shot_12"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M300.9 149.2L184.3 278.8C179.7 283.9 179.9 291.8 184.8 296.7C215.3 327.2 264.8 327.2 295.3 296.7L327.1 264.9C331.3 260.7 336.6 258.4 342 258C348.8 257.4 355.8 259.7 361 264.9L537.6 440L608 384L608 96L496 160L472.2 144.1C456.4 133.6 437.9 128 418.9 128L348.5 128C347.4 128 346.2 128 345.1 128.1C328.2 129 312.3 136.6 300.9 149.2zM148.6 246.7L255.4 128L215.8 128C190.3 128 165.9 138.1 147.9 156.1L144 160L32 96L32 384L188.4 514.3C211.4 533.5 240.4 544 270.3 544L286 544L279 537C269.6 527.6 269.6 512.4 279 503.1C288.4 493.8 303.6 493.7 312.9 503.1L353.9 544.1L362.9 544.1C382 544.1 400.7 539.8 417.7 531.8L391 505C381.6 495.6 381.6 480.4 391 471.1C400.4 461.8 415.6 461.7 424.9 471.1L456.9 503.1L474.4 485.6C483.3 476.7 485.9 463.8 482 452.5L344.1 315.7L329.2 330.6C279.9 379.9 200.1 379.9 150.8 330.6C127.8 307.6 126.9 270.7 148.6 246.6z"/></svg></span></div>
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