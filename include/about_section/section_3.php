
<!-- ============================================================ -->
<!-- ==================== SECTION 3: TUTORS ====================== -->
<!-- ============================================================ -->

<style>
  .qti-tutors {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #f3f4f8;
    padding: 90px 24px;
  }

  .qti-tutors-inner {
    max-width: 1180px;
    margin: 0 auto;
  }

  .qti-tutors .qti-fadeup {
    opacity: 0;
    transform: translateY(24px);
  }

  .qti-tutors .qti-fadeup.qti-in-view {
    animation: qtiTutorsFadeUp 0.7s ease forwards;
  }

  @keyframes qtiTutorsFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .qti-section-head {
    text-align: center;
    margin-bottom: 46px;
  }

  .qti-section-eyebrow {
    display: inline-block;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #ee7a2b;
    margin-bottom: 12px;
  }

  .qti-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #10182e;
    margin: 0 0 14px;
  }

  .qti-section-sub {
    font-size: 14.5px;
    color: #5c6178;
    max-width: 620px;
    margin: 0 auto;
  }

  .qti-tutors-viewport {
    overflow: hidden;
  }

  .qti-tutors-track {
    display: flex;
    gap: 22px;
    transition: transform 0.5s cubic-bezier(0.65, 0, 0.35, 1);
  }

  .qti-tutor-card {
    flex: 0 0 calc(25% - 16.5px);
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(20,20,50,0.05);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
  }

  .qti-tutor-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(20,20,50,0.1);
  }

  .qti-tutor-photo {
    width: 100%;
    aspect-ratio: 1 / 1.05;
    background: linear-gradient(150deg, #7c8ba8, #4d5a75);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .qti-tutor-photo svg {
    width: 40%;
    height: 40%;
    color: rgba(255,255,255,0.75);
  }

  .qti-tutor-body {
    padding: 16px 18px 18px;
  }

  .qti-tutor-name {
    font-size: 15.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 6px;
  }

  .qti-tutor-role {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12.5px;
    color: #ee7a2b;
    margin: 0;
  }

  .qti-tutor-role svg {
    width: 13px;
    height: 13px;
  }

  .qti-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 34px;
  }

  .qti-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #d3d6e2;
    border: none;
    padding: 0;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.3s ease, width 0.3s ease;
  }

  .qti-dot.qti-dot-active {
    background: #ee7a2b;
    width: 22px;
    border-radius: 5px;
  }

  @media (max-width: 980px) {
    .qti-tutor-card { flex: 0 0 calc(50% - 11px); }
  }

  @media (max-width: 620px) {
    .qti-tutors { padding: 60px 18px; }
    .qti-section-title { font-size: 24px; }
    .qti-tutor-card { flex: 0 0 100%; }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-tutors .qti-fadeup {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
    .qti-tutor-card:hover { transform: none; }
  }
</style>

<section class="qti-tutors">
  <div class="qti-tutors-inner">

    <div class="qti-section-head qti-fadeup" id="qtiTutorsHead">
      <span class="qti-section-eyebrow">Tutors</span>
      <h2 class="qti-section-title">Classes Taught By Real Creators</h2>
      <p class="qti-section-sub">Get latest news in your inbox. Consectetur adipiscing elitadipiscing elitse ddo eiusmod tempor incididunt</p>
    </div>

    <div class="qti-tutors-viewport">
      <div class="qti-tutors-track" id="qtiTutorsTrack">

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">Emma Scorsese</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>3D Animation</p>
          </div>
        </div>

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">John Deo</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>UI/UX Designer</p>
          </div>
        </div>

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">Nina Bennett</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>Web Development</p>
          </div>
        </div>

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">Charlie Burns</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>HTML Designer</p>
          </div>
        </div>

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">Sara Malik</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>Data Science</p>
          </div>
        </div>

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">Leo Turner</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>Digital Marketing</p>
          </div>
        </div>

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">Ava Brooks</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>Graphic Design</p>
          </div>
        </div>

        <div class="qti-tutor-card">
          <div class="qti-tutor-photo"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
          <div class="qti-tutor-body">
            <h3 class="qti-tutor-name">Noah Davis</h3>
            <p class="qti-tutor-role"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>Backend Development</p>
          </div>
        </div>

      </div>
    </div>

    <div class="qti-dots" id="qtiTutorsDots"></div>

  </div>
</section>

<script>
  (function qtiTutorsInit() {

    var qtiEls = document.querySelectorAll('.qti-tutors .qti-fadeup');
    var qtiRevealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('qti-in-view');
          qtiRevealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    qtiEls.forEach(function (el) { qtiRevealObserver.observe(el); });

    var qtiTrack = document.getElementById('qtiTutorsTrack');
    var qtiDotsWrap = document.getElementById('qtiTutorsDots');
    var qtiCards = qtiTrack.querySelectorAll('.qti-tutor-card');

    function qtiGetVisibleCount() {
      var w = window.innerWidth;
      if (w <= 620) return 1;
      if (w <= 980) return 2;
      return 4;
    }

    var qtiVisible = qtiGetVisibleCount();
    var qtiTotalPages = Math.ceil(qtiCards.length / qtiVisible);
    var qtiCurrentPage = 0;

    function qtiBuildDots() {
      qtiDotsWrap.innerHTML = '';
      qtiTotalPages = Math.ceil(qtiCards.length / qtiVisible);
      for (var i = 0; i < qtiTotalPages; i++) {
        var dot = document.createElement('button');
        dot.className = 'qti-dot' + (i === qtiCurrentPage ? ' qti-dot-active' : '');
        dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        (function (idx) {
          dot.addEventListener('click', function () { qtiGoToPage(idx); });
        })(i);
        qtiDotsWrap.appendChild(dot);
      }
    }

    function qtiGoToPage(page) {
      qtiCurrentPage = Math.max(0, Math.min(page, qtiTotalPages - 1));
      var cardWidth = qtiCards[0].getBoundingClientRect().width;
      var gap = 22;
      var offset = qtiCurrentPage * qtiVisible * (cardWidth + gap);
      qtiTrack.style.transform = 'translateX(-' + offset + 'px)';

      var dots = qtiDotsWrap.querySelectorAll('.qti-dot');
      dots.forEach(function (d, i) {
        d.classList.toggle('qti-dot-active', i === qtiCurrentPage);
      });
    }

    qtiBuildDots();
    qtiGoToPage(0);

    window.addEventListener('resize', function () {
      var newVisible = qtiGetVisibleCount();
      if (newVisible !== qtiVisible) {
        qtiVisible = newVisible;
        qtiCurrentPage = 0;
        qtiBuildDots();
      }
      qtiGoToPage(qtiCurrentPage);
    });

  })();
</script>
