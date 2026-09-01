<!-- ============================================================ -->
<!-- =================== SECTION 5: TRUSTED BAR =================== -->
<!-- ============================================================ -->

<style>
  .qti-trusted {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #0d1526;
    padding: 56px 24px;
  }

  .qti-trusted-inner {
    max-width: 1180px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    flex-wrap: wrap;
  }

  .qti-trusted .qti-fadeup {
    opacity: 0;
    transform: translateY(24px);
  }

  .qti-trusted .qti-fadeup.qti-in-view {
    animation: qtiTrustedFadeUp 0.7s ease forwards;
  }

  @keyframes qtiTrustedFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .qti-trusted-title {
    font-size: 26px;
    font-weight: 800;
    line-height: 1.3;
    color: #ffffff;
    margin: 0;
  }

  .qti-trusted-logos {
    display: flex;
    align-items: center;
    gap: 34px;
    flex-wrap: wrap;
  }

  .qti-trusted-logo {
    width: 34px;
    height: 34px;
    color: #3a4560;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  .qti-trusted-logo:hover {
    color: #7d89ac;
    transform: translateY(-3px);
  }

  @media (max-width: 980px) {
    .qti-trusted-inner { justify-content: center; text-align: center; }
  }

  @media (max-width: 620px) {
    .qti-trusted-title { font-size: 21px; text-align: center; }
    .qti-trusted-logos { justify-content: center; gap: 24px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-trusted .qti-fadeup {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
    .qti-trusted-logo:hover { transform: none; }
  }
</style>

<section class="qti-trusted">
  <div class="qti-trusted-inner">
    <h2 class="qti-trusted-title qti-fadeup" id="qtiTrustedTitle">Trusted By<br>500+ Companies</h2>
    <div class="qti-trusted-logos qti-fadeup" id="qtiTrustedLogos">
      <svg class="qti-trusted-logo" viewBox="0 0 24 24" fill="currentColor"><path d="M6 3c6 0 12 2 12 9 0 5-4 9-9 9-1 0-2-.2-3-.6C9 18 12 14 12 9c0-2.5-1-4.6-2.8-6C8.2 3.3 7.1 3 6 3z"/></svg>
      <svg class="qti-trusted-logo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="12" cy="12" r="10"/><path d="M8 15s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
      <svg class="qti-trusted-logo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11l18-7-7 18-2-8-8-2z"/></svg>
      <svg class="qti-trusted-logo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="5" x2="5" y2="19"/><circle cx="6.5" cy="6.5" r="2.5"/><circle cx="17.5" cy="17.5" r="2.5"/></svg>
      <svg class="qti-trusted-logo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8.5"/><path d="M20 12c0 4.4-3.6 8-8 8"/></svg>
    </div>
  </div>
</section>

<script>
  (function qtiTrustedInit() {
    var qtiEls = document.querySelectorAll('.qti-trusted .qti-fadeup');
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


