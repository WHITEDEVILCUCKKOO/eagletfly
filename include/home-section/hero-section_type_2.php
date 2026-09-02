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

  <section class="hero-sec-container ljisfiah6">
    <canvas id="canvas" style="display: none;"></canvas>

    <div class="decor-hero-ring"></div>
     <div class="decor-hero-glow1"></div>
     <div class="decor-hero-glow2"></div>

     <div class="decor-hero-orb o1"></div>
     <div class="decor-hero-orb o2"></div>
     <div class="decor-hero-orb o3"></div>
    <!-- Heading Section -->
    <div class="hero-sec-header">
      <h1 class="hero-sec-main-title "style=" font-family: 'Sora', inter;  font-weight:800;font-size:44px;">
        Learn <span class="hero-sec-dynamic-text rainbow-animated_without_animtion"></span><span class="hero-sec-cursor "></span>
      </h1>
      <h2 class="hero-sec-sub-title" style=" font-family: 'Sora', inter;  font-weight:800;font-size:44px;">From Industry Experts</h2>
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
      <button class="hero-sec-btn-primary dark-gradient-animated">
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