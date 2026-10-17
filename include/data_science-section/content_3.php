<style>
  .ef-bento-wrap {
    box-sizing: border-box;
    background: #FAF9F5;
    padding: 96px 8vw;
    font-family: 'Inter', -apple-system, sans-serif;
    /* sticky ke liye yahan koi overflow nahi hona chahiye */
    overflow: visible;
  }

  .ef-bento-wrap div,
  .ef-bento-wrap h2,
  .ef-bento-wrap h3,
  .ef-bento-wrap p,
  .ef-bento-wrap span,
  .ef-bento-wrap svg {
    box-sizing: border-box;
  }

  .ef-bento-container {
    max-width: 1160px;
    margin: 0 auto;
    overflow: visible;
  }

  /* Asymmetric Grid Layout */
  .ef-bento-grid {
    display: grid;
    grid-template-columns: 0.85fr 1.15fr;
    gap: 40px;
    align-items: start;
    overflow: visible;
  }

  /* LEFT COLUMN = sticky track (sirf position handle karta hai, animation nahi) */
  .ef-bento-left {
    align-self: start;
    position: sticky;
    top: 100px; /* apni header ki height ke hisaab se adjust karo */
    z-index: 2;
  }

  /* Card ka design + animation andar wale box par */
  .ef-bento-card {
    background: #FFFFFF;
    border: 1px solid #EAE7DE;
    border-radius: 16px;
    padding: 36px 32px;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }

  .ef-bento-card.ef-bn-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-bento-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #E9FBF8;
    color: #0E9C8A;
    font-size: 12px;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 6px;
    margin-bottom: 20px;
    letter-spacing: 0.4px;
  }

  .ef-bento-title {
    font-weight: 600;
    font-size: clamp(26px, 3.8vw, 36px);
    color: #14172B;
    margin: 0 0 16px;
    line-height: 1.2;
  }

  .ef-bento-desc {
    font-size: 15px;
    color: #5B5F73;
    line-height: 1.7;
    margin: 0;
  }

  /* Right Stacked Rows Container */
  .ef-bento-right {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .ef-bento-row {
    background: #FFFFFF;
    border: 1px solid #EAE7DE;
    border-radius: 14px;
    padding: 26px 28px;
    display: flex;
    gap: 20px;
    align-items: flex-start;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.55s ease, transform 0.55s ease, border-color 0.25s ease, box-shadow 0.25s ease;
  }

  .ef-bento-row.ef-bn-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-bento-row:hover {
    border-color: #35D0BA;
    box-shadow: 0 12px 30px rgba(14, 156, 138, 0.08);
    transform: translateY(-2px);
  }

  .ef-bento-num {
    font-size: 14px;
    font-weight: 700;
    color: #0E9C8A;
    background: #E9FBF8;
    padding: 6px 10px;
    border-radius: 8px;
    flex-shrink: 0;
    line-height: 1;
    margin-top: 2px;
  }

  .ef-bento-content {
    display: flex;
    flex-direction: column;
  }

  .ef-bento-row-title {
    font-weight: 600;
    font-size: 17.5px;
    color: #14172B;
    margin: 0 0 8px;
  }

  .ef-bento-row-desc {
    font-size: 14.5px;
    color: #767B94;
    line-height: 1.65;
    margin: 0;
  }

  /* Responsive Breakpoints */
  @media (max-width: 920px) {
    .ef-bento-grid {
      grid-template-columns: 1fr;
      gap: 32px;
    }

    /* Mobile/tablet par sticky band */
    .ef-bento-left {
      position: static;
    }
  }

  @media (max-width: 560px) {
    .ef-bento-wrap {
      padding: 64px 5vw;
    }

    .ef-bento-card {
      padding: 24px 20px;
    }

    .ef-bento-row {
      padding: 20px 18px;
      gap: 14px;
    }
  }
</style>

<section class="ef-bento-wrap" id="ef-bento-section">
  <div class="ef-bento-container">
    <div class="ef-bento-grid">

      <!-- Left Column: Sticky Header -->
      <div class="ef-bento-left">
        <div class="ef-bento-card ef-bn-anim">

          <div class="ef-bento-tag">
            <!-- <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
              <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg> -->
            <span>EagletFly Solutions</span>
          </div>
          <h2 class="ef-bento-title">Why EagletFly Solutions Stands Out for Data Science Education</h2>
          <p class="ef-bento-desc">
            Selecting the appropriate training partner decides whether you only learn coding syntax or gain true enterprise engineering expertise. EagletFly Solutions provides real-life, project-centric training designed in accordance with modern industry needs:
          </p>
        </div>
      </div>

      <!-- Right Column: Interactive Stacked Rows -->
      <div class="ef-bento-right" id="ef-bento-target">

        <!-- Row 1 -->
        <div class="ef-bento-row ef-bn-anim">
          <span class="ef-bento-num">01</span>
          <div class="ef-bento-content">
            <h3 class="ef-bento-row-title">Industry-Validated Syllabus</h3>
            <p class="ef-bento-row-desc">Understand how data pipelines, machine learning models, and deep learning networks are created, improved, and deployed in real production and cloud environments.</p>
          </div>
        </div>

        <!-- Row 2 -->
        <div class="ef-bento-row ef-bn-anim">
          <span class="ef-bento-num">02</span>
          <div class="ef-bento-content">
            <h3 class="ef-bento-row-title">Mentorship From Lead Data Scientists</h3>
            <p class="ef-bento-row-desc">Get individual training, project supervision, and audits from seasoned analytics professionals who bring their experience to the classroom.</p>
          </div>
        </div>

        <!-- Row 3 -->
        <div class="ef-bento-row ef-bn-anim">
          <span class="ef-bento-num">03</span>
          <div class="ef-bento-content">
            <h3 class="ef-bento-row-title">Practical Experience in Laboratory-classrooms</h3>
            <p class="ef-bento-row-desc">More than 70% of class hours are spent on programming, data cleansing, hyper-parameter tuning, and functioning live API deployment.</p>
          </div>
        </div>

        <!-- Row 4 -->
        <div class="ef-bento-row ef-bn-anim">
          <span class="ef-bento-num">04</span>
          <div class="ef-bento-content">
            <h3 class="ef-bento-row-title">Dedicated Career Development Center</h3>
            <p class="ef-bento-row-desc">Receive complete support for successful employment from constructing your CV and GitHub portfolio analysis to conducting mock technical interviews with employers.</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<script>
  (function() {
    /* Scroll animation */
    var items = document.querySelectorAll('#ef-bento-section .ef-bn-anim');
    if (items.length) {
      var obs = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry, i) {
          if (entry.isIntersecting) {
            setTimeout(function() {
              entry.target.classList.add('ef-bn-in');
            }, i * 90);
            obs.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.15
      });

      items.forEach(function(c) {
        obs.observe(c);
      });
    }

    /* Sticky fix: kisi parent par overflow hidden/auto ho to sticky kaam nahi karta.
       Ye section ke parents ko overflow: clip kar deta hai (clip scroll container nahi banata). */
    var el = document.querySelector('#ef-bento-section .ef-bento-left');
    if (!el) return;

    var node = el.parentElement;
    while (node && node !== document.body && node !== document.documentElement) {
      var cs = getComputedStyle(node);
      if (/(hidden|auto|scroll)/.test(cs.overflowX + cs.overflowY)) {
        node.style.setProperty('overflow', 'clip', 'important');
      }
      node = node.parentElement;
    }
  })();
</script>