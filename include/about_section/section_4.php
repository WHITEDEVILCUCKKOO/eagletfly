

<!-- ============================================================ -->
<!-- ================= SECTION 4: TESTIMONIALS =================== -->
<!-- ============================================================ -->

<style>
  .qti-testi {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #ffffff;
    padding: 90px 24px;
  }

  .qti-testi-inner {
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 0.85fr 1.15fr;
    gap: 50px;
    align-items: center;
  }

  .qti-testi .qti-fadeup {
    opacity: 0;
    transform: translateY(24px);
  }

  .qti-testi .qti-fadeup.qti-in-view {
    animation: qtiTestiFadeUp 0.7s ease forwards;
  }

  @keyframes qtiTestiFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .qti-testi-left .qti-eyebrow {
    display: inline-block;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #ee7a2b;
    margin-bottom: 14px;
  }

  .qti-testi-title {
    font-size: 32px;
    font-weight: 800;
    line-height: 1.25;
    color: #10182e;
    margin: 0 0 18px;
  }

  .qti-testi-desc {
    font-size: 14px;
    line-height: 1.75;
    color: #5c6178;
    margin: 0 0 30px;
    max-width: 380px;
  }

  .qti-testi-nav {
    display: flex;
    gap: 12px;
  }

  .qti-testi-nav-btn {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: 1px solid #dfe1ec;
    background: #ffffff;
    color: #171a2b;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
  }

  .qti-testi-nav-btn:hover {
    background: #ee7a2b;
    color: #ffffff;
    transform: translateY(-2px);
  }

  .qti-testi-nav-btn svg {
    width: 18px;
    height: 18px;
  }

  .qti-testi-card-wrap {
    position: relative;
  }

  .qti-testi-card-bg {
    position: absolute;
    top: 18px;
    left: 18px;
    right: -18px;
    bottom: -18px;
    background: linear-gradient(135deg, #ffd98a, #ffb46b);
    border-radius: 20px;
    z-index: 0;
  }

  .qti-testi-card {
    position: relative;
    z-index: 1;
    background: #ffffff;
    border-radius: 20px;
    padding: 40px 40px 30px;
    box-shadow: 0 20px 50px rgba(20,20,50,0.1);
  }

  .qti-testi-quote-icon {
    width: 30px;
    height: 24px;
    color: #ee7a2b;
    margin-bottom: 16px;
    opacity: 0.5;
  }

  .qti-testi-text {
    font-size: 14.5px;
    line-height: 1.85;
    color: #3f4457;
    margin: 0 0 22px;
    min-height: 130px;
    transition: opacity 0.3s ease;
  }

  .qti-testi-rule {
    width: 60px;
    height: 3px;
    background: #ee7a2b;
    border-radius: 3px;
    margin-bottom: 22px;
  }

  .qti-testi-author {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
  }

  .qti-testi-author-left {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .qti-testi-avatar {
    flex-shrink: 0;
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: linear-gradient(135deg, #6d5bf5, #ee7a2b);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 16px;
  }

  .qti-testi-author-name {
    font-size: 14.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 3px;
  }

  .qti-testi-author-role {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: #ee7a2b;
    margin: 0;
  }

  .qti-testi-author-role svg {
    width: 12px;
    height: 12px;
  }

  .qti-testi-rating {
    display: flex;
    align-items: center;
    gap: 4px;
    flex-shrink: 0;
  }

  .qti-testi-rating-num {
    font-size: 13px;
    font-weight: 700;
    color: #171a2b;
    margin-right: 4px;
  }

  .qti-testi-rating svg {
    width: 13px;
    height: 13px;
    color: #f5b942;
  }

  @media (max-width: 980px) {
    .qti-testi-inner { grid-template-columns: 1fr; gap: 40px; }
  }

  @media (max-width: 620px) {
    .qti-testi { padding: 60px 18px; }
    .qti-testi-title { font-size: 24px; }
    .qti-testi-card { padding: 30px 24px 24px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-testi .qti-fadeup {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
    .qti-testi-nav-btn:hover { transform: none; }
  }
</style>

<section class="qti-testi">
  <div class="qti-testi-inner">

    <div class="qti-testi-left qti-fadeup" id="qtiTestiLeft">
      <span class="qti-eyebrow">Testimonials</span>
      <h2 class="qti-testi-title">Our Student Community Feedback</h2>
      <p class="qti-testi-desc">Get latest news in your inbox. Consectetur adipiscing elitadipiscing elitseddo eiusmod tempor incididunt utlabore etdolo magnased doeiusmod.</p>
      <div class="qti-testi-nav">
        <button class="qti-testi-nav-btn" id="qtiTestiPrev" aria-label="Previous testimonial">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <button class="qti-testi-nav-btn" id="qtiTestiNext" aria-label="Next testimonial">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
      </div>
    </div>

    <div class="qti-testi-card-wrap qti-fadeup" id="qtiTestiCardWrap">
      <div class="qti-testi-card-bg"></div>
      <div class="qti-testi-card">
        <svg class="qti-testi-quote-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M9.5 8C6.5 8 4 10.5 4 13.5S6.5 19 9.5 19c1 0 2-.3 2.7-.8-.3 2-1.8 3.5-3.7 4v2c3.2-.5 5.5-3.2 5.5-6.7V8H9.5zm10 0c-3 0-5.5 2.5-5.5 5.5S16.5 19 19.5 19c1 0 2-.3 2.7-.8-.3 2-1.8 3.5-3.7 4v2c3.2-.5 5.5-3.2 5.5-6.7V8h-4.5z"/></svg>
        <p class="qti-testi-text" id="qtiTestiText">Get latest news in your inbox. Consectetur adipiscing elitaedipiscing elitseddo eiusmod tempor incididunt utlabore etdolore magnaseded doeiusmod tempor incididunt ut labore et dolore magna aliquasedd elitadipiscing elitseddo eiusmod tempor incididunt utlabore etdolore magnased tempor incididunt magna aliqua.</p>
        <div class="qti-testi-rule"></div>
        <div class="qti-testi-author">
          <div class="qti-testi-author-left">
            <div class="qti-testi-avatar" id="qtiTestiAvatar">E</div>
            <div>
              <p class="qti-testi-author-name" id="qtiTestiName">Emma Doe</p>
              <p class="qti-testi-author-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg><span id="qtiTestiRole">3D Animation</span></p>
            </div>
          </div>
          <div class="qti-testi-rating">
            <span class="qti-testi-rating-num" id="qtiTestiScore">4.0</span>
            <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  (function qtiTestiInit() {

    var qtiEls = document.querySelectorAll('.qti-testi .qti-fadeup');
    var qtiRevealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('qti-in-view');
          qtiRevealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    qtiEls.forEach(function (el) { qtiRevealObserver.observe(el); });

    var qtiTestimonials = [
      {
        text: "Get latest news in your inbox. Consectetur adipiscing elitaedipiscing elitseddo eiusmod tempor incididunt utlabore etdolore magnaseded doeiusmod tempor incididunt ut labore et dolore magna aliquasedd elitadipiscing elitseddo eiusmod tempor incididunt utlabore etdolore magnased tempor incididunt magna aliqua.",
        name: "Emma Doe",
        role: "3D Animation",
        score: "4.0",
        initial: "E"
      },
      {
        text: "The instructors genuinely care about your progress. I went from knowing nothing about UI/UX to landing a design role within four months of finishing the program.",
        name: "Michael Chen",
        role: "UI/UX Designer",
        score: "4.5",
        initial: "M"
      },
      {
        text: "Flexible batch timings made it possible for me to learn web development while working full-time. The hands-on projects were exactly what I needed for my portfolio.",
        name: "Sophia Patel",
        role: "Web Development",
        score: "5.0",
        initial: "S"
      }
    ];

    var qtiTestiIndex = 0;
    var qtiTestiTextEl = document.getElementById('qtiTestiText');
    var qtiTestiNameEl = document.getElementById('qtiTestiName');
    var qtiTestiRoleEl = document.getElementById('qtiTestiRole');
    var qtiTestiScoreEl = document.getElementById('qtiTestiScore');
    var qtiTestiAvatarEl = document.getElementById('qtiTestiAvatar');

    function qtiRenderTestimonial() {
      var t = qtiTestimonials[qtiTestiIndex];
      qtiTestiTextEl.style.opacity = '0';
      setTimeout(function () {
        qtiTestiTextEl.textContent = t.text;
        qtiTestiNameEl.textContent = t.name;
        qtiTestiRoleEl.textContent = t.role;
        qtiTestiScoreEl.textContent = t.score;
        qtiTestiAvatarEl.textContent = t.initial;
        qtiTestiTextEl.style.opacity = '1';
      }, 180);
    }

    document.getElementById('qtiTestiPrev').addEventListener('click', function () {
      qtiTestiIndex = (qtiTestiIndex - 1 + qtiTestimonials.length) % qtiTestimonials.length;
      qtiRenderTestimonial();
    });

    document.getElementById('qtiTestiNext').addEventListener('click', function () {
      qtiTestiIndex = (qtiTestiIndex + 1) % qtiTestimonials.length;
      qtiRenderTestimonial();
    });

  })();
</script>


