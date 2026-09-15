<!-- COURSE CONTENT SECTION START -->
<section class="cc-sec-wrap">
  <h2 class="cc-main-heading">Course Content</h2>

  <!-- Grid Container -->
  <div class="cc-grid-container">
    
    <!-- INITIAL VISIBLE CARDS (20 Cards) -->
    <!-- Row 1 -->
    <div class="cc-card-item"><span class="cc-card-text">Brush-up the Basics</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Understanding the Digital Jargons</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Content Planning and Creation</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Professional Blogging</span></div>

    <!-- Row 2 -->
    <div class="cc-card-item"><span class="cc-card-text">Intro of Website</span></div>
    <div class="cc-card-item"><span class="cc-card-text">E-commerce Store Creation</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Shopify Store Creation (Dropshipping)</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Email- Marketing</span></div>

    <!-- Row 3 -->
    <div class="cc-card-item"><span class="cc-card-text">Intro to Google Analytics</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Search Engine Optimization</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Social Media Optimization</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Search Engine Marketing</span></div>

    <!-- Row 4 -->
    <div class="cc-card-item"><span class="cc-card-text">Social Media Marketing</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Lead Generation</span></div>
    <div class="cc-card-item"><span class="cc-card-text">E-commerce Marketing</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Remarketing</span></div>

    <!-- Row 5 -->
    <div class="cc-card-item"><span class="cc-card-text">Video Marketing with Youtube</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Mobile Marketing</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Marketplace Selling</span></div>
    <div class="cc-card-item"><span class="cc-card-text">Web Analytics & CRO</span></div>

    <!-- EXTRA HIDDEN CARDS (Appears on Button Click) -->
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">Affiliate Marketing Essentials</span></div>
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">Google Ads & PPC Campaigns</span></div>
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">Conversion Rate Optimization</span></div>
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">ORM & Brand Management</span></div>
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">Freelancing & Client Pitching</span></div>
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">AI Tools for Marketers</span></div>
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">Growth Hacking Strategies</span></div>
    <div class="cc-card-item cc-extra-card"><span class="cc-card-text">Performance Marketing</span></div>

  </div>

  <!-- Bottom Toggle Button -->
  <div class="cc-btn-wrapper">
    <button type="button" class="cc-action-btn" id="ccToggleBtn">
      <span id="ccBtnText">READ CONTENT</span> <span class="cc-btn-arrow" id="ccBtnArrow">&darr;</span>
    </button>
  </div>
</section>

<!-- STYLES -->
<style>
.cc-sec-wrap {
  background-color: #f1f3f4;
  background-image: radial-gradient(#e2e6e8 1px, transparent 1px);
  background-size: 16px 16px;
  padding: 50px 20px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  box-sizing: border-box;
}

.cc-main-heading {
  text-align: center;
  font-size: 32px;
  font-weight: 700;
  color: #e2ad3b; /* Updated Color */
  margin: 0 0 45px 0;
  letter-spacing: -0.5px;
}

.cc-grid-container {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}

.cc-card-item {
  background-color: #ffffff;
  border-radius: 2px;
  padding: 22px 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  border-bottom: 3px solid #e2ad3b; /* Updated Color */
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
  transition: transform 0.25s ease, box-shadow 0.25s ease, opacity 0.4s ease;
  min-height: 70px;
  box-sizing: border-box;
}

.cc-card-item:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
}

.cc-card-text {
  font-size: 14px;
  font-weight: 600;
  color: #2b3a42;
  line-height: 1.4;
}

/* EXTRA HIDDEN CARDS STYLING */
.cc-extra-card {
  display: none;
  opacity: 0;
  transform: translateY(15px);
}

/* CLASS TRIGGERED VIA JS TO SHOW CARDS WITH ANIMATION */
.cc-extra-card.cc-show-card {
  display: flex;
  animation: ccFadeInUp 0.4s forwards ease-in-out;
}

@keyframes ccFadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.cc-btn-wrapper {
  text-align: center;
  margin-top: 45px;
}

.cc-action-btn {
  background-color: #e2ad3b; /* Updated Color */
  color: #ffffff;
  border: none;
  padding: 12px 28px;
  font-size: 13px;
  font-weight: 700;
  border-radius: 4px;
  cursor: pointer;
  letter-spacing: 0.5px;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: background-color 0.2s ease, transform 0.2s ease;
}

.cc-action-btn:hover {
  background-color: #c9962a; /* Slightly darker shade for hover effect */
  transform: translateY(-1px);
}

.cc-btn-arrow {
  font-size: 16px;
  line-height: 1;
}

/* RESPONSIVE BREAKPOINTS */
@media (max-width: 1024px) {
  .cc-grid-container {
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }
}

@media (max-width: 600px) {
  .cc-sec-wrap {
    padding: 35px 15px;
  }

  .cc-main-heading {
    font-size: 24px;
    margin-bottom: 30px;
  }

  .cc-grid-container {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .cc-card-item {
    padding: 18px 12px;
  }
}
</style>

<!-- JAVASCRIPT FOR TOGGLING CARDS -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("ccToggleBtn");
  const btnText = document.getElementById("ccBtnText");
  const btnArrow = document.getElementById("ccBtnArrow");
  const extraCards = document.querySelectorAll(".cc-extra-card");

  let isExpanded = false;

  toggleBtn.addEventListener("click", function () {
    isExpanded = !isExpanded;

    extraCards.forEach((card, index) => {
      if (isExpanded) {
        card.classList.add("cc-show-card");
        card.style.animationDelay = (index * 0.05) + "s"; // Staggered Animation
      } else {
        card.classList.remove("cc-show-card");
        card.style.animationDelay = "0s";
      }
    });

    if (isExpanded) {
      btnText.textContent = "SHOW LESS";
      btnArrow.innerHTML = "&uarr;"; // Up Arrow
    } else {
      btnText.textContent = "READ CONTENT";
      btnArrow.innerHTML = "&darr;"; // Down Arrow
    }
  });
});
</script>
<!-- COURSE CONTENT SECTION END -->