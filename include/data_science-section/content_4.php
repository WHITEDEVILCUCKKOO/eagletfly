
<style>
  .ef-tracks-wrap {
    box-sizing: border-box;
    background: #FFFFFF;
    padding: 96px 8vw;
    font-family: 'Inter', -apple-system, sans-serif;
  }

  .ef-tracks-wrap div,
  .ef-tracks-wrap h2,
  .ef-tracks-wrap h3,
  .ef-tracks-wrap p,
  .ef-tracks-wrap span,
  .ef-tracks-wrap svg {
    box-sizing: border-box;
  }

  .ef-tracks-container {
    max-width: 1160px;
    margin: 0 auto;
  }

  /* Header */
  .ef-tracks-head {
    text-align: center;
    max-width: 720px;
    margin: 0 auto 56px;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity 0.55s ease, transform 0.55s ease;
  }

  .ef-tracks-head.ef-tr-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-tracks-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #E9FBF8;
    color: #0E9C8A;
    font-size: 12px;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 6px;
    margin-bottom: 16px;
    letter-spacing: 0.4px;
  }

  .ef-tracks-title {
    font-weight: 600;
    font-size: clamp(26px, 3.2vw, 36px);
    color: #14172B;
    margin: 0 0 14px;
    line-height: 1.2;
  }

  .ef-tracks-desc {
    font-size: 15.5px;
    color: #5B5F73;
    line-height: 1.7;
    margin: 0;
  }

  /* 3-Column Modern Grid */
  .ef-tracks-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }

  .ef-track-card {
    background: #FAF9F5;
    border: 1px solid #EAE7DE;
    border-radius: 16px;
    padding: 32px 28px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease, transform 0.6s ease, border-color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
  }

  .ef-track-card.ef-tr-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-track-card:hover {
    border-color: #35D0BA;
    background: #FFFFFF;
    box-shadow: 0 14px 35px rgba(14, 156, 138, 0.08);
    transform: translateY(-4px);
  }

  .ef-track-top {
    margin-bottom: 24px;
  }

  .ef-track-duration {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    color: #0E9C8A;
    background: #E9FBF8;
    padding: 6px 12px;
    border-radius: 6px;
    margin-bottom: 16px;
    letter-spacing: 0.3px;
  }

  .ef-track-name {
    font-weight: 600;
    font-size: 20px;
    color: #14172B;
    margin: 0 0 12px;
    line-height: 1.3;
  }

  .ef-track-target {
    font-size: 14.5px;
    color: #5B5F73;
    line-height: 1.65;
    margin: 0;
  }

  .ef-track-divider {
    height: 1px;
    background: #EAE7DE;
    margin: 20px 0;
  }

  .ef-track-bottom {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .ef-track-includes-lbl {
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    color: #767B94;
  }

  .ef-track-features {
    font-size: 14px;
    color: #14172B;
    line-height: 1.6;
    margin: 0;
    font-weight: 500;
  }

  /* Responsive Breakpoints */
  @media (max-width: 980px) {
    .ef-tracks-grid {
      grid-template-columns: 1fr;
      max-width: 600px;
      margin: 0 auto;
    }
  }

  @media (max-width: 560px) {
    .ef-tracks-wrap {
      padding: 64px 5vw;
    }
    .ef-track-card {
      padding: 24px 20px;
    }
  }
</style>

<section class="ef-tracks-wrap" id="ef-tracks-section">
  <div class="ef-tracks-container">
    
    <!-- Section Header -->
    <div class="ef-tracks-head ef-tr-anim">
      <div class="ef-tracks-tag">
        <!-- <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
          <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
        <span>EagletFly Solutions</span>
      </div>
      <h2 class="ef-tracks-title">Program Specialization Tracks at EagletFly Solutions</h2>
      <p class="ef-tracks-desc">There are the tracks for the selected criterion according to one’s requirement.</p>
    </div>

    <!-- 3 Tracks Grid -->
    <div class="ef-tracks-grid" id="ef-tracks-target">
      
      <!-- Track 1 -->
      <div class="ef-track-card ef-tr-anim">
        <div class="ef-track-top">
          <span class="ef-track-duration">3 Months / 12 Weeks</span>
          <h3 class="ef-track-name">Data Science Foundation Track</h3>
          <p class="ef-track-target">This is meant for amateurs and people from non-IT background who want to start analytics quickly.</p>
        </div>
        <div class="ef-track-divider"></div>
        <div class="ef-track-bottom">
          <span class="ef-track-includes-lbl">Key Coverage &amp; Outcomes:</span>
          <p class="ef-track-features">Includes learning about Python, Advanced SQL, EDA, Statistics, and basic Machine Learning. It also includes 2 projects, resume writing help and interview preparation.</p>
        </div>
      </div>

      <!-- Track 2 -->
      <div class="ef-track-card ef-tr-anim">
        <div class="ef-track-top">
          <span class="ef-track-duration">6 Months / 24 Weeks</span>
          <h3 class="ef-track-name">Professional Data Scientist Track</h3>
          <p class="ef-track-target">This is meant for computer science graduates and working people with experience.</p>
        </div>
        <div class="ef-track-divider"></div>
        <div class="ef-track-bottom">
          <span class="ef-track-includes-lbl">Key Coverage &amp; Outcomes:</span>
          <p class="ef-track-features">It covers complete core curriculum including Advanced ML, Deep Learning, Computer Vision, NLP, and Cloud APIs. It also includes capstone projects, portfolio writing help and placement facility.</p>
        </div>
      </div>

      <!-- Track 3 -->
      <div class="ef-track-card ef-tr-anim">
        <div class="ef-track-top">
          <span class="ef-track-duration">9 Months / 36 Weeks</span>
          <h3 class="ef-track-name">Enterprise AI &amp; MLOps Specialization Track</h3>
          <p class="ef-track-target">This is for eager engineers looking for leadership roles.</p>
        </div>
        <div class="ef-track-divider"></div>
        <div class="ef-track-bottom">
          <span class="ef-track-includes-lbl">Key Coverage &amp; Outcomes:</span>
          <p class="ef-track-features">It provides additional information on Generative AI, Transformer tuning, RAG architecture, MLOps and scalable cloud engineering. It also has live capstone builds and direct referral calls.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<script>
  (function() {
    var items = document.querySelectorAll('#ef-tracks-section .ef-tr-anim');
    if (!items.length) return;

    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry, i) {
        if (entry.isIntersecting) {
          setTimeout(function() {
            entry.target.classList.add('ef-tr-in');
          }, i * 100);
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15
    });

    items.forEach(function(c) {
      obs.observe(c);
    });
  })();
</script>
