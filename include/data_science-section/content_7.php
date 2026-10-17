
<style>
  .ef-bp-wrap {
    box-sizing: border-box;
    background: #FAF9F5;
    padding: 96px 8vw;
    font-family: 'Inter', -apple-system, sans-serif;
  }

  .ef-bp-wrap div,
  .ef-bp-wrap h2,
  .ef-bp-wrap h3,
  .ef-bp-wrap p,
  .ef-bp-wrap span,
  .ef-bp-wrap svg {
    box-sizing: border-box;
  }

  .ef-bp-container {
    max-width: 1160px;
    margin: 0 auto;
  }

  /* Section Header */
  .ef-bp-head {
    text-align: center;
    max-width: 720px;
    margin: 0 auto 56px;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity 0.55s ease, transform 0.55s ease;
  }

  .ef-bp-head.ef-bp-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-bp-tag {
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

  .ef-bp-title {
    font-weight: 600;
    font-size: clamp(26px, 3.2vw, 36px);
    color: #14172B;
    margin: 0 0 14px;
    line-height: 1.2;
  }

  .ef-bp-desc {
    font-size: 15.5px;
    color: #5B5F73;
    line-height: 1.7;
    margin: 0;
  }

  /* 2x2 Grid Layout */
  .ef-bp-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }

  .ef-bp-card {
    background: #FFFFFF;
    border: 1px solid #EAE7DE;
    border-left: 4px solid #0E9C8A;
    border-radius: 14px;
    padding: 32px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.55s ease, transform 0.55s ease, border-color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
  }

  .ef-bp-card.ef-bp-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-bp-card:hover {
    border-color: #35D0BA;
    border-left-color: #35D0BA;
    box-shadow: 0 14px 35px rgba(14, 156, 138, 0.08);
    transform: translateY(-3px);
  }

  .ef-bp-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 16px;
  }

  .ef-bp-num {
    font-size: 12px;
    font-weight: 700;
    color: #0E9C8A;
    background: #E9FBF8;
    padding: 4px 10px;
    border-radius: 6px;
    letter-spacing: 0.4px;
  }

  .ef-bp-card-title {
    font-weight: 600;
    font-size: 18.5px;
    color: #14172B;
    margin: 0 0 10px;
    line-height: 1.3;
  }

  .ef-bp-card-desc {
    font-size: 14.5px;
    color: #767B94;
    line-height: 1.65;
    margin: 0;
  }

  /* Responsive Breakpoints */
  @media (max-width: 880px) {
    .ef-bp-grid {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 560px) {
    .ef-bp-wrap {
      padding: 64px 5vw;
    }
    .ef-bp-card {
      padding: 24px 20px;
    }
  }
</style>

<section class="ef-bp-wrap" id="ef-bp-section">
  <div class="ef-bp-container">
    
    <!-- Section Header -->
    <div class="ef-bp-head ef-bp-anim">
      <div class="ef-bp-tag">
        <!-- <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
          <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
        <span>EagletFly Solutions</span>
      </div>
      <h2 class="ef-bp-title">Key Best Practices for Success in Data Science</h2>
      <p class="ef-bp-desc">To create a sustainable career in data science and artificial intelligence, follow these best practices:</p>
    </div>

    <!-- 2x2 Grid -->
    <div class="ef-bp-grid" id="ef-bp-target">
      
      <!-- Practice 1 -->
      <div class="ef-bp-card ef-bp-anim">
        <div class="ef-bp-card-top">
          <span class="ef-bp-num">PRACTICE 01</span>
        </div>
        <h3 class="ef-bp-card-title">Prioritize Data Quality</h3>
        <p class="ef-bp-card-desc">Before attempting to train complicated models, devote sufficient time to cleaning, profiling, and engineering features right from the source data.</p>
      </div>

      <!-- Practice 2 -->
      <div class="ef-bp-card ef-bp-anim">
        <div class="ef-bp-card-top">
          <span class="ef-bp-num">PRACTICE 02</span>
        </div>
        <h3 class="ef-bp-card-title">Grasp the Core Mathematics</h3>
        <p class="ef-bp-card-desc">Make sure you don’t consider algorithms to be black boxes. It is essential to have an understanding of the basic statistics and calculus, which makes it easier to debug and optimize models in practice.</p>
      </div>

      <!-- Practice 3 -->
      <div class="ef-bp-card ef-bp-anim">
        <div class="ef-bp-card-top">
          <span class="ef-bp-num">PRACTICE 03</span>
        </div>
        <h3 class="ef-bp-card-title">Go Beyond Jupyter Notebooks</h3>
        <p class="ef-bp-card-desc">Know how to make your code containerized with Docker and make it production-ready by deploying it through clean REST APIs, such as FastAPI and Flask.</p>
      </div>

      <!-- Practice 4 -->
      <div class="ef-bp-card ef-bp-anim">
        <div class="ef-bp-card-top">
          <span class="ef-bp-num">PRACTICE 04</span>
        </div>
        <h3 class="ef-bp-card-title">Create GitHub Portfolio</h3>
        <p class="ef-bp-card-desc">Show evidence of your work by maintaining well-documented code repositories on GitHub.</p>
      </div>

    </div>

  </div>
</section>

<script>
  (function() {
    var items = document.querySelectorAll('#ef-bp-section .ef-bp-anim');
    if (!items.length) return;

    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry, i) {
        if (entry.isIntersecting) {
          setTimeout(function() {
            entry.target.classList.add('ef-bp-in');
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
