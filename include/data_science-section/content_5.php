
<style>
  .ef-capstone-wrap {
    box-sizing: border-box;
    background: #FAF9F5;
    padding: 96px 8vw;
    /* font-family: 'Inter', -apple-system, sans-serif; */
  }

  .ef-capstone-container {
    max-width: 1160px;
    margin: 0 auto;
  }

  /* Two Column Layout */
  .ef-capstone-grid {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: 48px;
    align-items: start;
  }

  /* Left Sticky Column */
  .ef-capstone-left {
    position: sticky;
    top: 90px;
    opacity: 0;
    transform: translateY(16px);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }

  .ef-capstone-left.ef-cp-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-capstone-tag {
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

  .ef-capstone-title {
    font-weight: 600;
    font-size: clamp(26px, 3.2vw, 36px);
    color: #14172B;
    margin: 0 0 16px;
    line-height: 1.2;
  }

  .ef-capstone-desc {
    font-size: 15.5px;
    color: #5B5F73;
    line-height: 1.7;
    margin: 0;
  }

  /* Right Column Project Cards */
  .ef-capstone-right {
    display: flex;
    flex-direction: column;
    gap: 18px;
  }

  .ef-cp-card {
    background: #FFFFFF;
    border: 1px solid #EAE7DE;
    border-radius: 14px;
    padding: 28px;
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.55s ease, transform 0.55s ease, border-color 0.25s ease, box-shadow 0.25s ease;
  }

  .ef-cp-card.ef-cp-in {
    opacity: 1;
    transform: translateY(0);
  }

  .ef-cp-card:hover {
    border-color: #35D0BA;
    box-shadow: 0 12px 30px rgba(14, 156, 138, 0.08);
    transform: translateY(-2px);
  }

  .ef-cp-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 12px;
  }

  .ef-cp-badge {
    font-size: 11.5px;
    font-weight: 700;
    color: #0E9C8A;
    background: #E9FBF8;
    padding: 4px 10px;
    border-radius: 6px;
    letter-spacing: 0.4px;
    text-transform: uppercase;
  }

  .ef-cp-card-title {
    font-weight: 600;
    font-size: 18px;
    color: #14172B;
    margin: 0 0 10px;
    line-height: 1.3;
  }

  .ef-cp-card-desc {
    font-size: 14.5px;
    color: #767B94;
    line-height: 1.65;
    margin: 0;
  }

  /* Responsive Breakpoints */
  @media (max-width: 960px) {
    .ef-capstone-grid {
      grid-template-columns: 1fr;
      gap: 36px;
    }
    .ef-capstone-left {
      position: relative;
      top: 0;
    }
  }

  @media (max-width: 560px) {
    .ef-capstone-wrap {
      padding: 64px 5vw;
    }
    .ef-cp-card {
      padding: 22px 18px;
    }
  }

  .ef-capstone-card-top{
    padding-bottom: 10px;
  }
</style>

<section class="ef-capstone-wrap" id="ef-capstone-section">
  <div class="ef-capstone-container">
    <div class="ef-capstone-grid">
      
      <!-- Left Sticky Header -->
      <div class="ef-capstone-left ef-cp-anim">
        <div class="ef-capstone-tag">
          <!-- <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg> -->
          <span>EagletFly Solutions</span>
        </div>
        <h2 class="ef-capstone-title">Real-World Capstone Projects &amp; Industry Applications</h2>
        <p class="ef-capstone-desc">
          At the center of our training framework is the practical application of skills. The learners get to construct projects that are similar to the real-world projects in the fields of business, such as:
        </p>
      </div>

      <!-- Right Column: Project Cards -->
      <div class="ef-capstone-right" id="ef-capstone-target">
        
        <!-- Project 1 -->
        <div class="ef-cp-card ef-cp-anim">
          <div class="ef-capstone-card-top">
            <span class="ef-cp-badge">E-commerce / ML Pipeline</span>
          </div>
          <h3 class="ef-cp-card-title">Customer Lifetime Value &amp; Churn Predicting System</h3>
          <p class="ef-cp-card-desc">Using XGBoost to implement an entire machine learning pipeline to predict customer churn risk. The entire process will be programmed in Python.</p>
        </div>

        <!-- Project 2 -->
        <div class="ef-cp-card ef-cp-anim">
          <div class="ef-capstone-card-top">
            <span class="ef-cp-badge">Healthcare / Deep Learning</span>
          </div>
          <h3 class="ef-cp-card-title">Classification System for Medical Images</h3>
          <p class="ef-cp-card-desc">Implementing a deep Convolutional Neural Network using PyTorch to analyze chest X-ray scans, which are supposed to help specialists in identifying early signs of the disease.</p>
        </div>

        <!-- Project 3 -->
        <div class="ef-cp-card ef-cp-anim">
          <div class="ef-capstone-card-top">
            <span class="ef-cp-badge">Fintech / Anomaly Detection</span>
          </div>
          <h3 class="ef-cp-card-title">Real-Time Financial Fraud Detection Engine</h3>
          <p class="ef-cp-card-desc">Implementing an anomaly detection pipeline to detect fraud in credit card transactions when working with real-time datasets.</p>
        </div>

        <!-- Project 4 -->
        <div class="ef-cp-card ef-cp-anim">
          <div class="ef-capstone-card-top">
            <span class="ef-cp-badge">Generative AI / RAG</span>
          </div>
          <h3 class="ef-cp-card-title">Customized Enterprise Knowledge Assistant based on RAG</h3>
          <p class="ef-cp-card-desc">Building the generative AI assistant, which will use LangChain, ChromaDB, and open-source language models to answer questions using the internal corporate documents in PDF.</p>
        </div>

      </div>

    </div>
  </div>
</section>

<script>
  (function() {
    var items = document.querySelectorAll('#ef-capstone-section .ef-cp-anim');
    if (!items.length) return;

    var obs = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry, i) {
        if (entry.isIntersecting) {
          setTimeout(function() {
            entry.target.classList.add('ef-cp-in');
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
