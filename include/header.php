<?php

include "./admin_access/db_config.php";
include "./admin_access/functions/global_info.php";

$global_info = get_global_info($mydb);

?>



<body>
  <!-- PAGE LOADER -->
  <style>
    /* ==============================
   PAGE LOADER
    ============================== */

    .page-loader {
      position: fixed;
      inset: 0;
      width: 100%;
      height: 100vh;

      background: #ffffff;

      display: flex;
      align-items: center;
      justify-content: center;

      z-index: 999999;

      transition:
        opacity 0.6s ease,
        visibility 0.6s ease;
    }


    /* Loader hide */

    .page-loader.loader-hide {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
    }


    /* Main loader */

    .loader-box {
      width: 180px;
      height: 180px;

      position: relative;

      display: flex;
      align-items: center;
      justify-content: center;
    }


    /* ==============================
   ROTATING RING
    ============================== */

    .loader-ring {
      position: absolute;

      width: 170px;
      height: 170px;

      border-radius: 50%;

      background: conic-gradient(from 0deg,
          transparent 0deg,
          transparent 35deg,
          #F5820B 80deg,
          #F5A900 140deg,
          #F5820B 200deg,
          transparent 250deg,
          transparent 360deg);

      animation: loaderRotate 1.4s linear infinite;

      /* Ring thickness */
      -webkit-mask: radial-gradient(farthest-side,
          transparent calc(100% - 4px),
          #000 calc(100% - 3px));

      mask: radial-gradient(farthest-side,
          transparent calc(100% - 4px),
          #000 calc(100% - 3px));
    }


    /* Rotation */

    @keyframes loaderRotate {

      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }

    }


    /* ==============================
   CENTER LOGO
    ============================== */

    .loader-logo {
      width: 158px;
      height: 158px;

      background: #ffffff;

      border-radius: 50%;

      display: flex;
      align-items: center;
      justify-content: center;

      position: relative;

      z-index: 2;

      box-shadow:
        0 5px 25px rgba(48, 56, 61, 0.12);
      margin-top: 8px;
    }


    .loader-logo img {
      width: 100%;
      height: 100%;

      object-fit: contain;

      display: block;
    }

    .loader-ring {
      position: absolute;

      width: 170px;
      height: 170px;

      border-radius: 50%;

    }

    /* ==============================
      MOBILE
    ============================== */

    @media (max-width: 600px) {

      .loader-box {
        width: 145px;
        height: 145px;
      }

      .loader-ring {
        width: 140px;
        height: 140px;
      }

      .loader-logo {
        width: 105px;
        height: 105px;
      }

    }


    .rainbow-animated_without_animtion {
      background: linear-gradient(90deg,
          #ff0000,



          #0000ff,
          #8b00ff,
          #ff0000);
      background-size: 200% auto;

      /* Text ke andar color laane ke liye ye properties zaroori hain */
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;

      animation: rainbow-slide 3s linear infinite;
      display: inline-block;
      /* Smooth render ke liye */
    }

    .rainbow-animated {
      background: linear-gradient(90deg,
          #ff0000,
          #ff7f00,
          #ffff00,
          #00ff00,
          #00ffff,
          #0000ff,
          #8b00ff,
          #ff0000);
      background-size: 200% auto;

      /* Text ke andar color laane ke liye ye properties zaroori hain */
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;

      animation: rainbow-slide 3s linear infinite;
      display: inline-block;
      /* Smooth render ke liye */
    }

    @keyframes rainbow-slide {
      0% {
        background-position: 0% center;
      }

      100% {
        background-position: -200% center;
      }
    }

    .sole_1 {
      color: white;
    }

    .sole_2 {
      color: #30383D;
      /* color: #F5820B; */
    }

    .sole_3 {
      /* color: #30383D; */
      color: #F5820B;
    }


    .sole_3_background {
      color: #F5820B !important;
    }

    .itne78 {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
  <div class="page-loader" id="pageLoader">

    <div class="loader-box">

      <!-- Rotating Orange Circle -->
      <div class="loader-ring"></div>
      <!-- <div class="loader-ring-2"></div> -->

      <!-- Center Image -->
      <div class="loader-logo">
        <img src="img/logo/<?php echo htmlspecialchars($global_info['facion_icon']); ?>" alt="Eagletely Solutions">
      </div>

    </div>

  </div>
  <script>
    window.addEventListener("load", function() {

      const loader = document.getElementById("pageLoader");

      setTimeout(() => {
        loader.classList.add("loader-hide");
      }, 0);

    });
  </script>

  <!-- website content -->
  <div class="msw-page">

    <!-- HEADER -->
    <header class="header-container">
      <!-- 1. Logo -->
      <div class="logo">
        <a href="index.php">
          <img
            src="img/logo/<?php echo htmlspecialchars($global_info['logo'] ?? ''); ?>"
            alt="Logo">
        </a>
      </div>

      <!-- 2. Desktop Curved Center Navigation -->
      <div class="nav-wrapper">
        <div class="curved-bg">
          <ul class="desktop-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li class="our_drop_hover">

              <a href="#">Our Programs</a>

              <!-- MAIN DROPDOWN -->
              <div class="program-dropdown">

                <ul class="program-dropdown-list">

                  <!-- DESIGN COURSE -->
                  <li class="program-dropdown-item">

                    <a href="data-analytics.php" class="program-dropdown-link">
                      Data Analytics
                      <!-- <span class="submenu-arrow">›</span> -->
                    </a>

                  </li>


                  <!-- DESIGN COURSE -->
                  <li class="program-dropdown-item">

                    <a href="gen_ai-&-agentic_ai.php" class="program-dropdown-link">
                      Gen AI & Agentic AI
                      <!-- <span class="submenu-arrow">›</span> -->
                    </a>

                  </li>




                  <!-- TECH COURSE -->
                  <li class="program-dropdown-item">

                    <a href="machine_learning_and_ai.php" class="program-dropdown-link">
                      Artificial Intelligence
                      <!-- <span class="submenu-arrow">›</span> -->
                    </a>

                  </li>




                  <!-- TRENDING -->
                  <li class="program-dropdown-item">

                    <a href="data_science.php" class="program-dropdown-link">
                      Data science
                      <!-- <span class="submenu-arrow">›</span> -->
                    </a>

                  </li>

                  <!-- MANAGEMENT & MARKETING -->
                  <li class="program-dropdown-item">

                    <a href="python.php" class="program-dropdown-link">
                      Python
                      <!-- <span class="submenu-arrow">›</span> -->
                    </a>

                  </li>
                  <li class="program-dropdown-item">
                    <a href="digital_marketing.php" class="program-dropdown-link">
                      Digital Marketing
                    </a>
                  </li>



                  <li class="program-dropdown-item">
                    <a href="java.php" class="program-dropdown-link">
                      Java
                    </a>
                  </li>

                </ul>

              </div>

            </li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>

      <!-- 3. Social Icons & Hamburger Icon -->
      <div style="display: flex; align-items: center; gap: 20px;">
        <div class="social-icons">

          <a
            href="<?php echo htmlspecialchars($global_info['globle_instagram'] ?? '#', ENT_QUOTES); ?>"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>


          <a
            href="<?php echo htmlspecialchars($global_info['globle_linkedin'] ?? '#', ENT_QUOTES); ?>"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="LinkedIn">
            <i class="fab fa-facebook" style="color: #025bff;"></i>
          </a>


          <a
            href="<?php echo htmlspecialchars($global_info['globle_yt'] ?? '#', ENT_QUOTES); ?>"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="YouTube">
            <i class="fab fa-youtube"></i>
          </a>

        </div>

        <button class="hamburger" id="hamburger" aria-label="Open menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

      <!-- 4. Mobile Dropdown Menu -->
      <div class="mobile-menu" id="mobileMenu">

        <a href="index.php">Home</a>
        <a href="about.php">About</a>


        <!-- ================================
         OUR PROGRAMS
    ================================= -->

        <div class="mobile-program-wrapper">

          <button class="mobile-program-button" type="button">
            <span>Our Programs</span>
            <span class="mobile-program-icon">+</span>
          </button>


          <!-- MAIN PROGRAM DROPDOWN -->

          <div class="mobile-program-dropdown" style="text-align: end;">

            <!-- DESIGN COURSE -->

            <div class="mobile-course-wrapper">

              <button class="mobile-course-button itne78" onclick="window.location.href='data-analytics.php'" type="button">

                <span>
                  Data Analytics

                </span>

                <!-- <span class="mobile-course-icon">+</span> -->

              </button>


              <!-- <div class="mobile-course-dropdown">

                <a href="#">UI/UX Design Course</a>
                <a href="#">Graphic Design Course</a>

              </div> -->

            </div>






            <!-- TECH COURSE -->


            <!-- TECH COURSE -->

            <div class="mobile-course-wrapper">

              <button class="mobile-course-button itne78" type="button" onclick="window.location.href='gen_ai-&-agentic_ai.php'">

                <span>
                  Gen AI & Agentic AI

                </span>

                <!-- <span class="mobile-course-icon">+</span> -->

              </button>



            </div>

            <div class="mobile-course-wrapper">

              <button class="mobile-course-button itne78" type="button" onclick="window.location.href='machine_learning_and_ai.php'">

                <span>
                  Artificial Intelligence

                </span>

                <!-- <span class="mobile-course-icon">+</span> -->

              </button>

            </div>




            <!-- MANAGEMENT & MARKETING -->

            <div class="mobile-course-wrapper">

              <button class="mobile-course-button itne78" onclick="window.location.href='data_science.php'" type="button">

                <span>
                  Data Science
                </span>

                <!-- <span class="mobile-course-icon">+</span> -->

              </button>


              <!-- <div class="mobile-course-dropdown">

                <a href="#">Product Management</a>
                <a href="#">Digital Marketing</a>

              </div> -->

            </div>

            <div class="mobile-course-wrapper">

              <button class="mobile-course-button itne78" onclick="window.location.href='python.php'" type="button">

                <span>Python</span>
              </button>

            </div>

            <!-- TRENDING -->

            <div class="mobile-course-wrapper">

              <button class="mobile-course-button itne78" onclick="window.location.href='digital_marketing.php'" type="button">

                <span>
                  Digital Marketing
                </span>

                <!-- <span class="mobile-course-icon">+</span> -->

              </button>


              <!-- <div class="mobile-course-dropdown">

                <a href="#">Data Analytics with Generative AI</a>
                <a href="#">Data Science with Generative AI</a>

              </div> -->

            </div>


            <div class="mobile-course-wrapper">

              <button class="mobile-course-button itne78" onclick="window.location.href='java.php'" type="button">

                <span>Java</span>
              </button>

            </div>


          </div>

        </div>


        <a href="#">Testimonials</a>
        <a href="blog.php">Blog</a>
        <a href="contact.php">Contact</a>

      </div>
    </header>
    <script>
      document.addEventListener("DOMContentLoaded", function() {

        /* =========================================
          MOBILE HAMBURGER
        ========================================= */

        const hamburger =
          document.getElementById("hamburger");

        const mobileMenu =
          document.getElementById("mobileMenu");


        hamburger.addEventListener("click", function() {

          mobileMenu.classList.toggle("active");
          hamburger.classList.toggle("active");

        });



        /* =========================================
          OUR PROGRAMS
        ========================================= */

        const programButton =
          document.querySelector(
            ".mobile-program-button"
          );

        const programWrapper =
          document.querySelector(
            ".mobile-program-wrapper"
          );


        programButton.addEventListener("click", function() {

          programWrapper.classList.toggle("active");

        });



        /* =========================================
          COURSE DROPDOWNS
        ========================================= */

        const courseButtons =
          document.querySelectorAll(
            ".mobile-course-button"
          );


        courseButtons.forEach(function(button) {

          button.addEventListener("click", function() {

            const currentWrapper =
              button.closest(
                ".mobile-course-wrapper"
              );


            /* Close other course menus */

            document.querySelectorAll(
                ".mobile-course-wrapper"
              )
              .forEach(function(wrapper) {

                if (wrapper !== currentWrapper) {

                  wrapper.classList.remove(
                    "active"
                  );

                }

              });




            currentWrapper.classList.toggle(
              "active"
            );

          });

        });

      });



      window.addEventListener("scroll", function() {

        const header = document.querySelector(".header-container");

        if (window.scrollY > 500) {
          header.classList.add("header-scroll");
        } else {
          header.classList.remove("header-scroll");
        }

      });
    </script>