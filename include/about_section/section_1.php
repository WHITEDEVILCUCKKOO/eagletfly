<!-- ============================================================ -->
<!-- ==================== SECTION 1: HEADER BAR ================= -->
<!-- ============================================================ -->

<style>
  .qti-headbar {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #0d1526;
    padding: 46px 24px;
  }

  .qti-headbar-inner {
    max-width: 1180px;
    margin: 0 auto;
  }

  .qti-headbar-title {
    font-size: 26px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    opacity: 0;
    transform: translateX(-14px);
    animation: qtiSlideRight 0.6s ease forwards 0.1s;
  }

  @keyframes qtiSlideRight {
    from { opacity: 0; transform: translateX(-14px); }
    to   { opacity: 1; transform: translateX(0); }
  }

  @media (max-width: 620px) {
    .qti-headbar { padding: 34px 20px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-headbar-title {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
  }
</style>

<section class="qti-headbar">
  <div class="qti-headbar-inner">
    <h1 class="qti-headbar-title">About Us</h1>
  </div>
</section>

<script>
  /* Section 1 has no interactive JS — heading animates purely via CSS. */
</script>


