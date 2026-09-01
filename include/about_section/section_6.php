<!-- ============================================================ -->
<!-- ==================== SECTION 6: STEPS ======================= -->
<!-- ============================================================ -->

<style>
  .qti-steps {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #f9f7f4;
    padding: 90px 24px;
  }

  .qti-steps-inner {
    max-width: 1180px;
    margin: 0 auto;
  }

  .qti-steps .qti-fadeup {
    opacity: 0;
    transform: translateY(24px);
  }

  .qti-steps .qti-fadeup.qti-in-view {
    animation: qtiStepsFadeUp 0.7s ease forwards;
  }

  @keyframes qtiStepsFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .qti-steps .qti-section-head {
    text-align: center;
    margin-bottom: 46px;
  }

  .qti-steps .qti-section-eyebrow {
    display: inline-block;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #ee7a2b;
    margin-bottom: 12px;
  }

  .qti-steps .qti-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #10182e;
    margin: 0 0 14px;
  }

  .qti-steps .qti-section-sub {
    font-size: 14.5px;
    color: #5c6178;
    max-width: 620px;
    margin: 0 auto;
  }

  .qti-steps-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 50px;
  }

  .qti-step {
    text-align: center;
  }

  .qti-step-icon {
    width: 84px;
    height: 84px;
    margin: 0 auto 22px;
    border-radius: 50%;
    background: #ffffff;
    box-shadow: 0 14px 30px rgba(20,20,50,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 34px;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .qti-step:hover .qti-step-icon {
    transform: scale(1.1) rotate(-6deg);
  }

  .qti-step-title {
    font-size: 18px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 10px;
  }

  .qti-step-desc {
    font-size: 13.5px;
    line-height: 1.7;
    color: #6b6f85;
    max-width: 260px;
    margin: 0 auto;
  }

  @media (max-width: 980px) {
    .qti-steps-grid { grid-template-columns: 1fr; gap: 50px; }
  }

  @media (max-width: 620px) {
    .qti-steps { padding: 60px 18px; }
    .qti-steps .qti-section-title { font-size: 24px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-steps .qti-fadeup {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
    .qti-step:hover .qti-step-icon { transform: none; }
  }
</style>

<section class="qti-steps">
  <div class="qti-steps-inner">
    <div class="qti-section-head qti-fadeup" id="qtiStepsHead">
      <span class="qti-section-eyebrow">Join Us</span>
      <h2 class="qti-section-title">Get Your Certificate In Just 3 Easy Steps</h2>
      <p class="qti-section-sub">Get latest news in your inbox. Consectetur adipiscing elitadipiscing elitse ddo eiusmod tempor incididunt</p>
    </div>

    <div class="qti-steps-grid" id="qtiStepsGrid">
      <div class="qti-step">
        <div class="qti-step-icon">📚</div>
        <h3 class="qti-step-title">Find Course</h3>
        <p class="qti-step-desc">Browse our catalog and find the course that matches your career goals and interests.</p>
      </div>
      <div class="qti-step">
        <div class="qti-step-icon">🪑</div>
        <h3 class="qti-step-title">Book Your Seat</h3>
        <p class="qti-step-desc">Secure your spot instantly with simple enrollment and flexible batch timings.</p>
      </div>
      <div class="qti-step">
        <div class="qti-step-icon">🎓</div>
        <h3 class="qti-step-title">Get Certificate</h3>
        <p class="qti-step-desc">Complete the course and receive your industry-recognized certification.</p>
      </div>
    </div>
  </div>
</section>

<script>
  (function qtiStepsInit() {
    var qtiEls = document.querySelectorAll('.qti-steps .qti-fadeup');
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

</body>
</html>