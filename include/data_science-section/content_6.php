
<style>
  .ef-roadmap-wrap {
    box-sizing: border-box;
    background: #FAF9F5;
    padding: 96px 8vw;
    font-family: 'Inter', -apple-system, sans-serif;
  }

  .ef-roadmap-wrap div,
  .ef-roadmap-wrap h2,
  .ef-roadmap-wrap h3,
  .ef-roadmap-wrap p,
  .ef-roadmap-wrap span,
  .ef-roadmap-wrap svg {
    box-sizing: border-box;
  }

  .ef-roadmap-container {
    max-width: 1160px;
    margin: 0 auto;
  }

  /* Header */
  .ef-roadmap-head {
    text-align: center;
    max-width: 720px;
    margin: 0 auto 56px;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity 0.55s ease, transform 0.55s ease;
  }

  .ef-roadmap-head.ef-rm-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-roadmap-tag {
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

  .ef-roadmap-title {
    font-weight: 600;
    font-size: clamp(26px, 3.2vw, 36px);
    color: #14172B;
    margin: 0 0 14px;
    line-height: 1.2;
  }

  .ef-roadmap-desc {
    font-size: 15.5px;
    color: #5B5F73;
    line-height: 1.7;
    margin: 0;
  }

  /* 4-Step Grid */
  .ef-roadmap-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .ef-rm-card {
    background: #FFFFFF;
    border: 1px solid #EAE7DE;
    border-radius: 16px;
    padding: 30px 24px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.55s ease, transform 0.55s ease, border-color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
  }

  .ef-rm-card.ef-rm-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-rm-card:hover {
    border-color: #35D0BA;
    box-shadow: 0 14px 35px rgba(14, 156, 138, 0.08);
    transform: translateY(-4px);
    background: #FFFFFF;
  }

  .ef-rm-top {
    margin-bottom: 20px;
  }

  .ef-rm-step-num {
    font-size: 13px;
    font-weight: 700;
    color: #0E9C8A;
    background: #E9FBF8;
    padding: 6px 12px;
    border-radius: 8px;
    display: inline-block;
    margin-bottom: 18px;
    letter-spacing: 0.5px;
  }

  .ef-rm-card-title {
    font-weight: 600;
    font-size: 17.5px;
    color: #14172B;
    margin: 0 0 10px;
    line-height: 1.3;
  }

  .ef-rm-card-desc {
    font-size: 14px;
    color: #767B94;
    line-height: 1.65;
    margin: 0;
  }

  /* Responsive Breakpoints */
  @media (max-width: 1024px) {
    .ef-roadmap-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 640px) {
    .ef-roadmap-wrap {
      padding: 64px 5vw;
    }
    .ef-roadmap-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="ef-roadmap-wrap" id="ef-roadmap-section">
  <div class="ef-roadmap-container">
    
    <!-- Section Header -->
    <div class="ef-roadmap-head ef-rm-anim">
      <div class="ef-roadmap-tag">
        <!-- <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
          <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
        <span>EagletFly Solutions</span>
      </div>
      <h2 class="ef-roadmap-title">Step-by-Step Career Roadmap: From Beginner to Hired</h2>
      <p class="ef-roadmap-desc">EagletFly Solutions has a systematic 4-step framework that aims to implement your technical know-how into job opportunities.</p>
    </div>

    <!-- 4 Steps Grid -->
    <div class="ef-roadmap-grid" id="ef-roadmap-target">
      
      <!-- Step 1 -->
      <div class="ef-rm-card ef-rm-anim">
        <div class="ef-rm-top">
          <span class="ef-rm-step-num">STEP 01</span>
          <h3 class="ef-rm-card-title">Skill Foundation</h3>
          <p class="ef-rm-card-desc">First, you will focus on building necessary skills. With the help of various analytical tasks and daily programming activities, you will learn how to program in Python and SQL and work with statistics and data exploration.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="ef-rm-card ef-rm-anim">
        <div class="ef-rm-top">
          <span class="ef-rm-step-num">STEP 02</span>
          <h3 class="ef-rm-card-title">Advanced Machine Learning</h3>
          <p class="ef-rm-card-desc">In the second step of the program, you will specialize in advanced machine learning. In this step, you will learn how to build prediction models, apply deep neural networks learning, and get acquainted with Generative AI tools.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="ef-rm-card ef-rm-anim">
        <div class="ef-rm-top">
          <span class="ef-rm-step-num">STEP 03</span>
          <h3 class="ef-rm-card-title">Portfolio &amp; Open Source</h3>
          <p class="ef-rm-card-desc">The third step will consist of designing your portfolio and working on open-source projects. Therefore, you will work on real-life end-to-end capstone projects, writing clean code and publishing project reports on GitHub.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="ef-rm-card ef-rm-anim">
        <div class="ef-rm-top">
          <span class="ef-rm-step-num">STEP 04</span>
          <h3 class="ef-rm-card-title">Placement &amp; Interviews</h3>
          <p class="ef-rm-card-desc">Finally, at the fourth and last phase, you will get prepared for placement interviews and learn how to prepare yourself for technical interviews.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<script>
  (function() {
    var items = document.querySelectorAll('#ef-roadmap-section .ef-rm-anim');
    if (!items.length) return;

    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry, i) {
        if (entry.isIntersecting) {
          setTimeout(function() {
            entry.target.classList.add('ef-rm-in');
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
  })();
</script>
