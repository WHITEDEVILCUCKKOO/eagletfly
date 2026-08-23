<!-- FOOTER -->
<style>
  .ftrsec-section {
    width: 100%;
    background-color: #000000;
    color: #ffffff;
    padding: 60px 20px;
  }

  .ftrsec-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.4fr 0.9fr 0.9fr 1fr;
    gap: 40px;
  }

  .ftrsec-col {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.5s ease, transform 0.5s ease;
  }

  .ftrsec-col.ftrsec-visible {
    opacity: 1;
    transform: translateY(0);
  }

  .ftrsec-heading {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 12px;
    position: relative;
    display: inline-block;
  }

  .ftrsec-heading::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 45px;
    height: 2px;
    background-color: #ffffff;
  }

  .ftrsec-contact-list {
    list-style: none;
    margin-top: 20px !important;
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .ftrsec-contact-item {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 14px;
    color: #e0e0e0;
  }

  .ftrsec-icon {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
  }

  .ftrsec-icon-red {
    color: #ff4d4d;
  }

  .ftrsec-icon-pink {
    color: #e91e63;
  }

  .ftrsec-icon-cyan {
    color: #00bcd4;
  }

  .ftrsec-links-list {
    list-style: none;
    margin-top: 20px !important;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .ftrsec-link {
    color: #ffffff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: color 0.3s ease, transform 0.3s ease;
    display: inline-block;
  }

  .ftrsec-link:hover {
    color: #3baf75;
    transform: translateX(4px);
  }

  .ftrsec-socials {
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .ftrsec-social-btn {
    width: 36px;
    height: 36px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    text-decoration: none;
    transition: transform 0.3s ease, filter 0.3s ease;
  }

  .ftrsec-social-btn svg {
    width: 20px;
    height: 20px;
  }

  .ftrsec-insta {
    background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
  }

  .ftrsec-whatsapp {
    background-color: #25d366;
  }

  .ftrsec-youtube {
    background-color: #ff0000;
  }

  .ftrsec-linkedin {
    background-color: #0077b5;
  }

  .ftrsec-social-btn:hover {
    transform: translateY(-4px) scale(1.08);
    filter: brightness(1.15);
  }

  /* Responsiveness */
  @media (max-width: 992px) {
    .ftrsec-container {
      grid-template-columns: repeat(2, 1fr);
      gap: 32px;
    }
  }

  @media (max-width: 576px) {
    .ftrsec-container {
      grid-template-columns: 1fr;
      gap: 28px;
    }

    .ftrsec-section {
      padding: 40px 16px;
    }
  }
</style>
<footer class="ftrsec-section">
  <div class="ftrsec-container">

    <!-- Column 1: Contact Us -->
    <div class="ftrsec-col">
      <h3 class="ftrsec-heading">Contact Us</h3>
      <ul class="ftrsec-contact-list">
        <li class="ftrsec-contact-item">
          <svg class="ftrsec-icon ftrsec-icon-red" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
          </svg>
          <span>10A/25-26, Lower Ground Floor, Backside, East Patel Nagar, New Delhi - 110008</span>
        </li>
        <li class="ftrsec-contact-item">
          <svg class="ftrsec-icon ftrsec-icon-pink" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
          </svg>
          <span>+91 98114 34634 | +91 98114 34638</span>
        </li>
        <li class="ftrsec-contact-item">
          <svg class="ftrsec-icon ftrsec-icon-cyan" viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
          </svg>
          <span>info@eagletflysolutions.com / eagletflysolutions@gmail.com</span>
        </li>
      </ul>
    </div>

    <!-- Column 2: Quick Links -->
    <div class="ftrsec-col">
      <h3 class="ftrsec-heading">Quick Links</h3>
      <ul class="ftrsec-links-list">
        <li><a href="#" class="ftrsec-link">About Us</a></li>
        <li><a href="#" class="ftrsec-link">Blog</a></li>
        <li><a href="#" class="ftrsec-link">Contact</a></li>
        <li><a href="#" class="ftrsec-link">Sitemap</a></li>
      </ul>
    </div>

    <!-- Column 3: Legal -->
    <div class="ftrsec-col">
      <h3 class="ftrsec-heading">Legal</h3>
      <ul class="ftrsec-links-list">
        <li><a href="#" class="ftrsec-link">Terms & Conditions</a></li>
        <li><a href="#" class="ftrsec-link">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Column 4: Like us on -->
    <div class="ftrsec-col">
      <h3 class="ftrsec-heading">Like us on</h3>
      <div class="ftrsec-socials">
        <!-- Instagram -->
        <a href="#" class="ftrsec-social-btn ftrsec-insta" aria-label="Instagram">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
          </svg>
        </a>
        <!-- WhatsApp -->
        <a href="#" class="ftrsec-social-btn ftrsec-whatsapp" aria-label="WhatsApp">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z" />
          </svg>
        </a>
        <!-- YouTube -->
        <a href="#" class="ftrsec-social-btn ftrsec-youtube" aria-label="YouTube">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
          </svg>
        </a>
        <!-- LinkedIn -->
        <a href="#" class="ftrsec-social-btn ftrsec-linkedin" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path
              d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
          </svg>
        </a>
      </div>
    </div>

  </div>
</footer>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const ftrCols = document.querySelectorAll('.ftrsec-col');

    const ftrObserverOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -20px 0px'
    };

    const ftrObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const index = Array.from(ftrCols).indexOf(entry.target);
          setTimeout(() => {
            entry.target.classList.add('ftrsec-visible');
          }, index * 100);
          observer.unobserve(entry.target);
        }
      });
    }, ftrObserverOptions);

    ftrCols.forEach(col => ftrObserver.observe(col));
  });
</script>

<div class="msw-footer" style="background: #000;" id="msw-blog">
  <div class="msw-container" style="width: max-content;
    border-top: 1px solid white;
    padding-top: 15px;">
    © 2026 EagletFly Solutions Trainings. All rights reserved.
  </div>
</div>

<!-- FLOATING BUTTONS -->
<div class="msw-float-btns">
  <a class="msw-float-btn msw-cal brand-gradient-animated" style="color: white;" href="#">📞 Call Us</a>
  <a class="msw-float-btn msw-whatsapp" style="color: white;" href="#">💬 WhatsApp Us</a>
</div>

</div>

<script>
  (function() {
    var burger = document.getElementById('mswBurger');
    var nav = document.querySelector('.msw-nav');
    if (burger) {
      burger.addEventListener('click', function() {
        var open = nav.style.display === 'flex';
        nav.style.display = open ? 'none' : 'flex';
        nav.style.flexDirection = 'column';
        nav.style.position = 'absolute';
        nav.style.top = '58px';
        nav.style.right = '20px';
        nav.style.background = '#14141f';
        nav.style.padding = '18px 26px';
        nav.style.borderRadius = '12px';
        nav.style.gap = '16px';
      });
    }

    var mswObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('msw-inview');
          mswObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15
    });

    document.querySelectorAll('.msw-reveal').forEach(function(el) {
      mswObserver.observe(el);
    });
  })();
</script>

</body>

</html>