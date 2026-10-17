
  <link rel="icon" type="image/x-icon" href="img/logo/<?php echo htmlspecialchars($global_info['facion_icon']); ?>">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .msw-page {
      font-family: 'Inter', sans-serif;
      color: #1c1c2b;
      background: #ffffff;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      box-sizing: border-box;
      --msw-primary: #3b2fd4;
      --msw-orange: #ff5a1f;
      --msw-pink: #d6249f;
      --msw-green: #d7f7c2;
      --msw-dark: #14141f;
      --msw-cream: #fff9f2;
    }

    .msw-page,
    .msw-page *,
    .msw-page *::before,
    .msw-page *::after {
      box-sizing: border-box;
    }

    .msw-page h1,
    .msw-page h2,
    .msw-page h3,
    .msw-page p,
    .msw-page ul {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    .msw-page ul {
      list-style: none;
    }

    .msw-page a {
      text-decoration: none;
      color: inherit;
    }

    .msw-page img {
      max-width: 100%;
      display: block;
    }

    .msw-page button {
      font-family: inherit;
      cursor: pointer;
      border: none;
    }

    .msw-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* ===================== IMAGE PLACEHOLDER ===================== */
    .msw-img-placeholder {
      width: 100%;
      /* height: 100%; */
      min-height: 120px;
      /* background: repeating-linear-gradient(45deg, #f1eefc, #f1eefc 10px, #e7e2fb 10px, #e7e2fb 20px); */
      /* border: 2px dashed #b7aef0; */
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      color: #6a5fc7;
      font-size: 13px;
      font-weight: 600;
      text-align: center;
      gap: 6px;
      transition: transform .35s ease, box-shadow .35s ease;
    }

    .msw-img-placeholder span.msw-ph-icon {
      font-size: 26px;
    }

    .msw-img-placeholder:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 30px rgba(59, 47, 212, .18);
    }

    /* ===================== SCROLL REVEAL ===================== */
    .msw-reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity .7s ease, transform .7s ease;
    }

    .msw-reveal.msw-inview {
      opacity: 1;
      transform: translateY(0);
    }



    /* ===================== HERO ===================== */
    .msw-hero {
      background-image:
        linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.295)),
        url("img/eaglet-fly-training-center-delhi-vision-1024x681.jpg");

      background-repeat: no-repeat;
      background-size: cover;
      background-position: center 0%;
      width: 100%;
      padding: 120px 0 50px;
      position: relative;

    }

    .msw-hero-inner {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 40px;
      align-items: center;
    }

    .msw-hero-eyebrow {
      font-size: 14px;
      color: var(--msw-primary);
      font-weight: 600;
      letter-spacing: .5px;
      margin-bottom: 10px;
      display: inline-block;
    }

    .msw-hero-title {
      font-size: 44px;
      line-height: 1.18;
      font-weight: 700;
    }

    .msw-hero-title .msw-blue {
      color: var(--msw-primary);
    }

    .msw-hero-title .msw-red {
      color: #e0263b;
    }

    .msw-hero-text {
      margin-top: 18px;
      font-size: 15.5px;
      line-height: 1.7;
      color: #4a4a5a;
      max-width: 520px;
    }

    .msw-hero-text b {
      color: #1c1c2b;
    }

    .msw-hero-cta {
      display: flex;
      gap: 14px;
      margin-top: 26px;
      flex-wrap: wrap;
    }

    .msw-btn {
      padding: 13px 26px;
      border-radius: 30px;
      font-weight: 600;
      font-size: 14.5px;
      transition: transform .3s ease, box-shadow .3s ease, background .3s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .msw-btn-primary {
      background: linear-gradient(135deg, #3b2fd4, #6a3fe0);
      color: #fff;
      box-shadow: 0 10px 24px rgba(59, 47, 212, .28);
    }

    .msw-btn-primary:hover {
      transform: translateY(-3px);
      box-shadow: 0 16px 30px rgba(59, 47, 212, .4);
    }

    .msw-btn-outline {
      background: #fff;
      color: #1c1c2b;
      border: 1.5px solid #e2ddf5;
    }

    .msw-btn-outline:hover {
      background: #f4f1ff;
      transform: translateY(-3px);
    }

    .msw-btn-pill {
      /* background: linear-gradient(135deg, #ff6a2c, #ff3d63); */
      color: #fff;
      padding: 12px 30px;
      border-radius: 30px;
      font-weight: 600;
      font-size: 14px;
      box-shadow: 0 10px 24px rgba(255, 90, 31, .3);
      transition: transform .3s ease;
    }

    .msw-btn-pill:hover {
      transform: translateY(-3px) scale(1.03);
    }

    .msw-hero-meta {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-top: 26px;
      flex-wrap: wrap;
    }

    .msw-avatars {
      display: flex;
    }

    .msw-avatars span {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 2px solid #fff9f2;
      margin-left: -10px;
      background: linear-gradient(135deg, #c9c2f7, #a595f0);
    }

    .msw-avatars span:first-child {
      margin-left: 0;
    }

    .msw-meta-text {
      font-size: 13.5px;
      font-weight: 600;
      color: #333;
    }

    .msw-badges {
      display: flex;
      gap: 12px;
      margin-top: 16px;
      flex-wrap: wrap;
    }

    .msw-badge {
      display: flex;
      align-items: center;
      gap: 8px;
      background: #fff;
      padding: 8px 16px;
      border-radius: 10px;
      font-size: 13px;
      font-weight: 600;
      box-shadow: 0 4px 14px rgba(0, 0, 0, .06);
    }

    .msw-hero-visual {
      position: relative;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 18px;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(1) {
      aspect-ratio: 3/4;
      align-self: start;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(2) {
      aspect-ratio: 1/1;
      border-radius: 50%;
      align-self: end;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(3) {
      aspect-ratio: 1/1;
      border-radius: 50%;
    }

    .msw-hero-visual .msw-img-placeholder:nth-child(4) {
      aspect-ratio: 3/4;
    }

    .msw-float {
      animation: msw-floaty 4s ease-in-out infinite;
    }

    @keyframes msw-floaty {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-14px);
      }
    }

    /* ===================== SECTION HEADINGS ===================== */
    .msw-section {
      padding: 80px 0;
    }

    .msw-section-head {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 40px;
    }

    .msw-section-title {
      font-size: 32px;
      font-weight: 800;
    }

    .msw-section-title .msw-accent {
      color: var(--msw-primary);
    }

    .msw-section-sub {
      margin-top: 12px;
      color: #6a6a7a;
      font-size: 15px;
      line-height: 1.6;
    }

    .msw-pill-heading {
      text-align: center;
      margin: 0 auto 34px;
    }

    /* ===================== PROGRAM CARDS ===================== */
    .msw-cards-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }

    .msw-cards-grid.msw-two {
      grid-template-columns: repeat(2, 1fr);
    }

    .msw-course-card {
      background: #fff;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 8px 26px rgba(20, 20, 40, .08);
      transition: transform .35s ease, box-shadow .35s ease;
      display: flex;
      flex-direction: column;
    }

    .msw-course-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(20, 20, 40, .14);
    }

    .msw-course-card .msw-img-placeholder {
      border-radius: 0;
      min-height: 170px;
    }

    .msw-course-body {
      padding: 20px 22px 24px;
    }

    .msw-course-body h3 {
      font-size: 17px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .msw-course-body p {
      font-size: 13.5px;
      color: #6a6a7a;
      line-height: 1.6;
      margin-bottom: 12px;
    }

    .msw-course-body ul li {
      font-size: 13.5px;
      color: #444;
      padding-left: 18px;
      position: relative;
      margin-bottom: 6px;
      line-height: 1.5;
    }

    .msw-course-body ul li::before {
      content: '•';
      color: var(--msw-orange);
      position: absolute;
      left: 0;
      font-weight: 900;
    }

    /* ===================== SUMMIT GALLERY ===================== */
    .msw-summit {
      background: var(--msw-cream);
    }

    .msw-summit-tag {
      display: inline-block;
      background: #fdf0b8;
      color: #7a5b00;
      padding: 6px 18px;
      border-radius: 20px;
      font-size: 13px;
      font-weight: 700;
      margin-bottom: 18px;
    }

    .msw-summit-title {
      font-size: 35px;
      font-weight: 700;
      max-width: 750px;
      line-height: 1.3;
    }

    .msw-summit-title .msw-accent {
      color: var(--msw-primary);
    }

    .msw-gallery {
      margin-top: 34px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .msw-gallery .msw-img-placeholder {
      aspect-ratio: 4/3;
      border-radius: 16px;
    }

    /* ===================== PARTNERS ===================== */
    .msw-partners-title {
      text-align: center;
      font-size: 30px;
      font-weight: 800;
      margin-bottom: 40px;
    }

    .msw-partners-title .msw-accent {
      color: var(--msw-primary);
    }

    .msw-logo-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 24px;
    }

    .msw-logo-box {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 12px;
      height: 74px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: #333;
      font-size: 14px;
      transition: box-shadow .3s ease, transform .3s ease;
    }

    .msw-logo-box:hover {
      box-shadow: 0 10px 22px rgba(0, 0, 0, .08);
      transform: translateY(-4px);
    }

    /* ===================== WHY TRUST ===================== */
    .msw-trust {
      background: #fff;
    }

    .msw-trust-cta {
      display: flex;
      justify-content: center;
      gap: 16px;
      margin: 22px 0 50px;
      flex-wrap: wrap;
    }

    .msw-features-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 34px;
      text-align: center;
    }

    .msw-feature-icon {
      width: 60px;
      height: 60px;
      border-radius: 16px;
      margin: 0 auto 16px;
      background: linear-gradient(135deg, #efeaff, #f7e9ff);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 26px;
      transition: transform .35s ease;
    }

    .msw-feature-card:hover .msw-feature-icon {
      transform: rotate(-8deg) scale(1.08);
    }

    .msw-feature-card h3 {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .msw-feature-card p {
      font-size: 13.5px;
      color: #6a6a7a;
      line-height: 1.6;
    }

    /* ===================== MEDIA ===================== */
    .msw-media {
      background: var(--msw-cream);
      text-align: center;
    }

    .msw-media-title {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 34px;
    }

    .msw-media-title .msw-accent {
      color: var(--msw-primary);
    }

    .msw-media-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      max-width: 760px;
      margin: 0 auto;
    }

    .msw-media-box {
      height: 90px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 18px;
      letter-spacing: .5px;
      color: #fff;
      transition: transform .3s ease;
    }

    .msw-media-box:hover {
      transform: translateY(-5px);
    }

    .msw-media-box.msw-m1 {
      background: #d21e2b;
    }

    .msw-media-box.msw-m2 {
      background: #e0263b;
      font-style: italic;
    }

    .msw-media-box.msw-m3 {
      background: #182a52;
      font-size: 14px;
    }

    /* ===================== TESTIMONIALS ===================== */
    .msw-testi-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .msw-testi-card {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 16px;
      padding: 22px;
      transition: transform .3s ease, box-shadow .3s ease;
    }

    .msw-testi-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 30px rgba(0, 0, 0, .08);
    }

    .msw-testi-top {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 10px;
    }

    .msw-testi-avatar {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: linear-gradient(135deg, #c9c2f7, #a595f0);
      flex-shrink: 0;
    }

    .msw-testi-name {
      font-size: 14px;
      font-weight: 700;
    }

    .msw-stars {
      color: #ffb400;
      font-size: 12px;
    }

    .msw-testi-text {
      font-size: 12.8px;
      color: #666;
      line-height: 1.6;

      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    /* ===================== SYSTEM (DARK) ===================== */
    .msw-system {
      background: #0f0f18;
      color: #fff;
    }

    .msw-system-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 50px;
      align-items: center;
    }

    .msw-system-left h2 {
      font-size: 30px;
      font-weight: 700;
      line-height: 1.3;
    }

    .msw-system-left .msw-accent {
      color: #b89bff;
    }

    .msw-system-left p {
      margin-top: 14px;
      color: #b8b8c5;
      font-size: 14.5px;
      line-height: 1.6;
    }

    .msw-system-cards {
      display: grid;
      gap: 14px;
    }

    .msw-sys-card {
      border-radius: 14px;
      padding: 18px 20px;
      transition: transform .3s ease;
    }

    .msw-sys-card:hover {
      transform: translateX(6px);
    }

    .msw-sys-card.msw-sys-dark {
      background: #1c1c28;
      color: #fff;
    }

    .msw-sys-card.msw-sys-light {
      background: var(--msw-green);
      color: #10331a;
    }

    .msw-sys-card h4 {
      font-size: 15px;
      font-weight: 700;
      margin-bottom: 6px;
    }

    .msw-sys-card p {
      font-size: 12.8px;
      opacity: .85;
      line-height: 1.5;
    }

    /* ===================== JOURNEY ===================== */
    .msw-journey {
      background: #fff;
      text-align: center;
    }

    .msw-journey-title {
      font-size: 28px;
      font-weight: 700;
    }

    .msw-journey-title .msw-accent {
      color: var(--msw-primary);
    }

    .msw-journey-grid {
      margin-top: 44px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    .msw-journey-icon {
      font-size: 30px;
      margin-bottom: 12px;
    }

    .msw-journey-grid h3 {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .msw-journey-grid p {
      font-size: 13.5px;
      color: #6a6a7a;
      line-height: 1.6;
    }

    /* ===================== CTA BANNER ===================== */
    .msw-cta-banner {
      background: linear-gradient(120deg, #eaf6ff, #f5f0ff);
      border-radius: 22px;
      padding: 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
      margin-bottom: 60px;
    }

    .msw-cta-text {
      font-size: 20px;
      font-weight: 600;
      max-width: 600px;
      line-height: 1.5;
    }

    .msw-cta-text .msw-accent {
      color: var(--msw-orange);
    }

    .msw-cta-badge {
      width: 110px;
      height: 110px;
      border-radius: 50%;
      background: #fff;
      box-shadow: 0 10px 26px rgba(0, 0, 0, .1);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      font-weight: 800;
      font-size: 13px;
      color: var(--msw-primary);
      text-align: center;
      animation: msw-spin-slow 10s linear infinite;
    }

    @keyframes msw-spin-slow {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    /* ===================== FLOATING BUTTONS ===================== */
    .msw-float-btns {
      position: fixed;
      bottom: 24px;
      right: 24px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      z-index: 500;
    }

    .msw-float-btn {
      padding: 12px 20px;
      border-radius: 30px;
      font-weight: 700;
      font-size: 13px;
      color: #fff;
      box-shadow: 0 10px 24px rgba(0, 0, 0, .2);
      transition: transform .3s ease;
    }

    .msw-float-btn:hover {
      transform: scale(1.06);
    }

    .msw-float-btn.msw-call {
      background: #14141f;
    }

    .msw-float-btn.msw-whatsapp {
      background: #25d366;
    }

    /* ===================== FOOTER ===================== */
    .msw-footer {
      background: #14141f;
      color: #9a9aab;
      padding: 30px 0;
      text-align: center;
      font-size: 13px;
    }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 1024px) {
      .msw-hero-title {
        font-size: 34px;
      }

      .msw-cards-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .msw-logo-grid {
        grid-template-columns: repeat(4, 1fr);
      }

      .msw-features-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .msw-testi-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .msw-system-inner {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 860px) {
      .msw-nav {
        display: none;
      }

      .msw-cards-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .msw-burger {
        display: flex;
      }

      .msw-hero-inner {
        grid-template-columns: 1fr;
      }

      .msw-hero-visual {
        order: -1;
        max-width: 420px;
        margin: 0 auto;
      }

      .msw-hero-title {
        font-size: 30px;
      }

      .msw-gallery {
        grid-template-columns: repeat(2, 1fr);
      }

      .msw-media-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .msw-journey-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 600px) {
      .msw-section {
        padding: 56px 0;
      }

      .msw-cards-grid {
        grid-template-columns: repeat(1, 1fr);
      }

      .msw-cards-grid,
      .msw-cards-grid.msw-two {
        grid-template-columns: 1fr;
      }

      .msw-logo-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .msw-features-grid {
        grid-template-columns: 1fr;
      }

      .msw-testi-grid {
        grid-template-columns: 1fr;
      }

      .msw-gallery {
        grid-template-columns: 1fr;
      }

      .msw-cta-banner {
        flex-direction: column;
        text-align: center;
      }

      .msw-section-title,
      .msw-partners-title,
      .msw-media-title,
      .msw-journey-title {
        font-size: 24px;
      }

      .msw-float-btns {
        right: 14px;
        bottom: 14px;
      }

      .msw-hero-visual {
        grid-template-columns: repeat(2, 1fr);
      }
    }


    /* all btn color grids */

    .primary_btns-without-shado {
      background: #F5820B;
      color: #FFFFFF;
    }

    .primary_btns {
      background: #F5820B;
      color: #FFFFFF;
      color: #F5820B;
      border: 2px solid #F5820B;
      box-shadow: none;
    }

    .primary_btns:hover {

      box-shadow: 0 10px 24px #D96E00;
      background: #D96E00;
      color: #FFFFFF;
    }

    .primary_dark_btns {
      background: #30383D;
      color: #FFFFFF;
    }

    .primary_dark_btns:hover {
      background: #46545E;
      color: #FFFFFF;
    }


    /* 1. 🟠 Brand Orange Gradient — Without Animation */
    .orange-gradient {
      background: linear-gradient(135deg,
          #F5A900 0%,
          #F5820B 50%,
          #D96E00 100%);
    }

    /* 2. 🟠 Brand Orange Gradient — Animate */
    .orange-gradient-animated {
      background: linear-gradient(90deg,
          #D96E00,
          #F5820B,
          #F5A900,
          #F5820B,
          #D96E00);

      background-size: 300% 100%;
      animation: orangeFlow 4s ease infinite;
    }

    @keyframes orangeFlow {
      0% {
        background-position: 0% center;
      }

      50% {
        background-position: 100% center;
      }

      100% {
        background-position: 0% center;
      }
    }


    /* 3. 🔵 Dark Brand Gradient — Without Animation */
    .dark-gradient {
      background: linear-gradient(135deg,
          #20272B 0%,
          #30383D 50%,
          #46545E 100%);
    }

    /* 4. 🔵 Dark Brand Gradient — Animated */
    .dark-gradient-animated {
      background: linear-gradient(90deg,
          #20272B,
          #30383D,
          #46545E,
          #30383D,
          #20272B) !important;

      background-size: 300% 100% !important;
      animation: darkFlow 6s ease infinite !important;
    }

    @keyframes darkFlow {
      0% {
        background-position: 0% center;
      }

      50% {
        background-position: 100% center;
      }

      100% {
        background-position: 0% center;
      }
    }


    /* 5. 🔥 Orange + Dark Premium Gradient */
    .brand-gradient {
      background: linear-gradient(135deg,
          #30383D 0%,
          #46545E 45%,
          #F5820B 75%,
          #F5A900 100%);
    }

    /* 5. 🔥 Orange + Dark Premium Gradient without Animated*/
    .brand-gradient-animated {
      background: linear-gradient(120deg,
          #30383D,
          #46545E,
          #F5820B,
          #F5A900,
          #F5820B,
          #46545E,
          #30383D);

      background-size: 300% 300%;
      animation: brandGradient 6s ease infinite;
    }

    @keyframes brandGradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }
  </style>

