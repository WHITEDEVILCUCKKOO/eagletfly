<!-- ============================================================ -->
<!-- ==================== SECTION 2: WELCOME ===================== -->
<!-- ============================================================ -->

<style>
  .qti-welcome {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #ffffff;
    padding: 90px 24px;
  }

  .qti-welcome-inner {
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 0.95fr 1.05fr;
    gap: 60px;
    align-items: center;
  }

  .qti-fadeup {
    opacity: 0;
    transform: translateY(24px);
  }

  .qti-fadeup.qti-in-view {
    animation: qtiFadeUp 0.7s ease forwards;
  }

  @keyframes qtiFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .qti-welcome-visual {
    position: relative;
  }

  .qti-welcome-frame {
    position: absolute;
    top: -18px;
    left: -18px;
    right: 18px;
    bottom: 18px;
    background: linear-gradient(135deg, #ffd98a, #ffb46b);
    border-radius: 22px;
    z-index: 0;
  }

  .qti-welcome-photo {
    position: relative;
    z-index: 1;
    width: 100%;
    aspect-ratio: 4 / 4.6;
    border-radius: 22px;
    background: linear-gradient(150deg, #f5a95f, #e88a4a);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .qti-welcome-photo svg {
    width: 46%;
    height: 46%;
    color: rgba(255,255,255,0.75);
  }

  .qti-badge-videos {
    position: absolute;
    z-index: 2;
    top: 30px;
    left: -20px;
    background: #ffffff;
    border-radius: 14px;
    padding: 12px 18px 12px 12px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 14px 30px rgba(20,20,50,0.14);
  }

  .qti-badge-videos-icon {
    flex-shrink: 0;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: #3d5bf5;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .qti-badge-videos-icon svg {
    width: 15px;
    height: 15px;
  }

  .qti-badge-videos-num {
    font-size: 16px;
    font-weight: 800;
    color: #171a2b;
    margin: 0;
    line-height: 1.2;
  }

  .qti-badge-videos-label {
    font-size: 11.5px;
    color: #7c8093;
    margin: 0;
  }

  .qti-badge-tutor {
    position: absolute;
    z-index: 2;
    bottom: -26px;
    right: -12px;
    background: #ffffff;
    border-radius: 14px;
    padding: 16px 20px;
    box-shadow: 0 14px 30px rgba(20,20,50,0.14);
    min-width: 190px;
  }

  .qti-badge-tutor-icon {
    width: 30px;
    height: 30px;
    margin-bottom: 8px;
  }

  .qti-badge-tutor-name {
    font-size: 14.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 2px;
  }

  .qti-badge-tutor-role {
    font-size: 12px;
    color: #8a8fa3;
    margin: 0 0 8px;
  }

  .qti-badge-tutor-stars {
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .qti-badge-tutor-stars svg {
    width: 12px;
    height: 12px;
    color: #f5b942;
  }

  .qti-badge-tutor-score {
    font-size: 12px;
    font-weight: 700;
    color: #171a2b;
    margin-left: 4px;
  }

  .qti-welcome-content .qti-eyebrow {
    display: inline-block;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #ee7a2b;
    margin-bottom: 14px;
  }

  .qti-welcome-title {
    font-size: 36px;
    font-weight: 800;
    line-height: 1.25;
    color: #10182e;
    margin: 0 0 20px;
  }

  .qti-welcome-desc {
    font-size: 14.5px;
    line-height: 1.8;
    color: #5c6178;
    margin: 0 0 32px;
    max-width: 540px;
  }

  .qti-feature-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
    margin-bottom: 32px;
  }

  .qti-feature-item {
    display: flex;
    align-items: center;
    gap: 14px;
    background: #f6f7fb;
    border-radius: 14px;
    padding: 16px 18px;
    transition: transform 0.3s ease, background 0.3s ease, box-shadow 0.3s ease;
  }

  .qti-feature-item:hover {
    transform: translateY(-4px);
    background: #ffffff;
    box-shadow: 0 14px 28px rgba(20,20,50,0.08);
  }

  .qti-feature-icon {
    flex-shrink: 0;
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: #ffe6d4;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 19px;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .qti-feature-item:hover .qti-feature-icon {
    transform: rotate(-8deg) scale(1.1);
  }

  .qti-feature-title {
    font-size: 14.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 3px;
  }

  .qti-feature-sub {
    font-size: 12px;
    color: #8a8fa3;
    margin: 0;
  }

  .qti-btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    font-weight: 700;
    color: #ffffff;
    background: #ee7a2b;
    text-decoration: none;
    padding: 15px 26px;
    border-radius: 10px;
    transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
  }

  .qti-btn-primary:hover {
    transform: translateY(-3px);
    background: #d96a1f;
    box-shadow: 0 14px 28px rgba(238,122,43,0.3);
  }

  .qti-btn-primary .qti-arrow {
    transition: transform 0.3s ease;
    display: inline-flex;
  }

  .qti-btn-primary:hover .qti-arrow {
    transform: translateX(5px);
  }

  @media (max-width: 980px) {
    .qti-welcome-inner { grid-template-columns: 1fr; gap: 70px; }
    .qti-welcome-visual { max-width: 420px; margin: 0 auto; }
  }

  @media (max-width: 620px) {
    .qti-welcome { padding: 60px 18px; }
    .qti-welcome-title { font-size: 27px; }
    .qti-feature-grid { grid-template-columns: 1fr; }
    .qti-badge-tutor { right: 0; bottom: -20px; min-width: 160px; padding: 12px 16px; }
    .qti-badge-videos { left: 0; }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-fadeup {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
    .qti-feature-item:hover, .qti-btn-primary:hover { transform: none; }
  }
</style>

<section class="qti-welcome">
  <div class="qti-welcome-inner">

    <div class="qti-welcome-visual qti-fadeup" id="qtiWelcomeVisual">
      <div class="qti-welcome-frame"></div>
      <div class="qti-welcome-photo">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg>
      </div>

      <div class="qti-badge-videos">
        <div class="qti-badge-videos-icon">
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="6 4 20 12 6 20 6 4"/></svg>
        </div>
        <div>
          <p class="qti-badge-videos-num">200+</p>
          <p class="qti-badge-videos-label">Video Courses</p>
        </div>
      </div>

      <div class="qti-badge-tutor">
        <div class="qti-badge-tutor-icon">🏅</div>
        <p class="qti-badge-tutor-name">Tim A. Wilson</p>
        <p class="qti-badge-tutor-role">Java Batch</p>
        <div class="qti-badge-tutor-stars">
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <span class="qti-badge-tutor-score">4.0</span>
        </div>
      </div>
    </div>

    <div class="qti-welcome-content qti-fadeup" id="qtiWelcomeContent">
      <span class="qti-eyebrow">About</span>
      <h2 class="qti-welcome-title">Welcome To The Online Learning Center</h2>
      <p class="qti-welcome-desc">Get latest news in your inbox. Consectetur adipiscing elitadipiscing elitse ddo eiusmod tempor incididunt ut labore et dolore magnased doeiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspend isse ultrices gravida.</p>

      <div class="qti-feature-grid">
        <div class="qti-feature-item">
          <div class="qti-feature-icon">📘</div>
          <div>
            <p class="qti-feature-title">Offline Courses</p>
            <p class="qti-feature-sub">Video Courses</p>
          </div>
        </div>
        <div class="qti-feature-item">
          <div class="qti-feature-icon">🖥️</div>
          <div>
            <p class="qti-feature-title">Online Courses</p>
            <p class="qti-feature-sub">Video Courses</p>
          </div>
        </div>
        <div class="qti-feature-item">
          <div class="qti-feature-icon">🎓</div>
          <div>
            <p class="qti-feature-title">Diploma</p>
            <p class="qti-feature-sub">Video Courses</p>
          </div>
        </div>
        <div class="qti-feature-item">
          <div class="qti-feature-icon">📜</div>
          <div>
            <p class="qti-feature-title">Certification</p>
            <p class="qti-feature-sub">Video Courses</p>
          </div>
        </div>
      </div>

      <a href="#" class="qti-btn-primary">Read More <span class="qti-arrow">→</span></a>
    </div>

  </div>
</section>

<script>
  (function qtiWelcomeInit() {
    var qtiEls = document.querySelectorAll('#qtiWelcomeVisual, #qtiWelcomeContent');
    var qtiObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('qti-in-view');
          qtiObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    qtiEls.forEach(function (el) { qtiObserver.observe(el); });
  })();
</script>

