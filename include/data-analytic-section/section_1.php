 <!-- section 1 ( hero ) -->
 <style>
     .dgfh-hero {
         position: relative;
         /* font-family: 'Segoe UI', Arial, sans-serif; */
         /* background: linear-gradient(120deg, #000000 0%, #06231f 32%, #0fbf9f 55%, #0b3f8c 100%); */
         background: radial-gradient(circle at 15% 85%, rgba(110, 100, 255, 0.12) 0%, rgba(110, 100, 255, 0.06) 25%, transparent 50%), radial-gradient(circle at 85% 20%, rgba(70, 140, 255, 0.13) 0%, rgba(70, 140, 255, 0.06) 30%, transparent 60%), linear-gradient(135deg, #ffffff 0%, #f8faff 35%, #eef3ff 70%, #e5edff 100%);
         padding: 120px 40px 60px;
         /* height: 85vh; */
         overflow: hidden;
     }

     .dgfh-hero::before {
         content: "";
         position: absolute;
         inset: 0;
         /* background: radial-gradient(circle at 30% 70%, rgba(15, 191, 159, 0.25), transparent 55%); */
         pointer-events: none;
     }

     .dgfh-container {
         position: relative;
         z-index: 1;
         max-width: 1180px;
         margin: 0 auto;
         display: grid;
         grid-template-columns: 1fr 380px;
         gap: 36px;
         align-items: start;
     }

     /* ---------- left column ---------- */

     .dgfh-breadcrumb {
         font-size: 13px;
         color: #121213;
         margin-bottom: 14px;
         font-weight: 500;
     }

     .dgfh-heading {
         font-size: 34px;
         font-weight: 800;
         color: #181717;
         margin: 0 0 16px 0;
         opacity: 0;
         animation: dgfh-fade-up 0.6s ease forwards;
     }

     .dgfh-subtext {
         font-size: 15.5px;
         color: #363636;
         line-height: 1.7;
         max-width: 560px;
         margin: 0 0 26px 0;
         opacity: 0;
         animation: dgfh-fade-up 0.6s ease 0.1s forwards;
     }

     @keyframes dgfh-fade-up {
         from {
             opacity: 0;
             transform: translateY(14px);
         }

         to {
             opacity: 1;
             transform: translateY(0);
         }
     }

     .dgfh-rating-row {
         display: flex;
         flex-wrap: wrap;
         align-items: center;
         gap: 22px;
         margin-bottom: 26px;
         font-size: 13px;
         color: #232324;
     }

     .dgfh-rating-main {
         font-weight: 600;
     }

     .dgfh-badge-row {
         display: flex;
         gap: 16px;
         flex-wrap: wrap;
         margin-top: 15px;

     }

     .dgfh-badge {
         display: flex;
         align-items: center;
         gap: 5px;
         font-weight: 600;
         /* color: ; */
         padding: 3px 15px;
         border-radius: 15px;
         background: aliceblue;
     }

     .dgfh-badge-dot {
         width: 50px;
         height: 50px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 10px;
         font-weight: 800;
         color: #202020;



     }

     .dgfh-dot-g {
         background: #4285f4;
     }

     .dgfh-dot-m {
         background: #ea4335;
     }

     .dgfh-dot-t {
         background: #1976d2;
     }

     .dgfh-dot-j {
         background: #fbbc05;
         color: #1a1a1a;
     }

     .dgfh-dot-f {
         background: #1877f2;
     }

     .dgfh-partner-bar {
         display: flex;
         flex-wrap: wrap;
         background: #fff;
         border-radius: 12px;
         overflow: hidden;
         margin-bottom: 26px;
         box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
     }

     .dgfh-partner-left {
         padding: 18px 26px;
         display: flex;
         flex-direction: column;
         justify-content: center;
         gap: 2px;
     }

     .dgfh-partner-label {
         font-size: 11.5px;
         color: #6b7280;
     }

     .dgfh-partner-name {
         font-size: 22px;
         font-weight: 900;
         color: #cc092f;
         letter-spacing: 0.5px;
     }

     .dgfh-partner-stats {
         flex: 1 1 auto;
         background: #2c2c2c;
         display: flex;
         flex-wrap: wrap;
     }

     .dgfh-stat-item {
         flex: 1 1 auto;
         padding: 18px 24px;
         color: #111111;
         border-right: 1px solid rgba(255, 255, 255, 0.12);
     }

     .dgfh-stat-item:last-child {
         border-right: none;
     }

     .dgfh-stat-num {
         font-size: 15px;
         font-weight: 800;
     }

     .dgfh-stat-sub {
         font-size: 12.5px;
         color: #d1d5db;
     }

     .dgfh-btn-row {
         display: flex;
         flex-wrap: wrap;
         gap: 14px;
         margin-top: 100px;
     }

     .dgfh-btn {
         padding: 14px 26px;
         border-radius: 6px;
         font-size: 14px;
         font-weight: 400;
         letter-spacing: 0.4px;
         cursor: pointer;
         font-style: normal;
         border: 2px solid transparent;
         transition: transform 0.2s ease, box-shadow 0.25s ease, background 0.25s ease;
     }

     .dgfh-btn-solid {
         background: #FD8321;
         color: #f7f2f2;
         border-color: #FD8321;
     }

     .dgfh-btn-solid:hover {
         background: #e2941a;
         transform: translateY(-2px);
         box-shadow: 0 10px 22px rgba(245, 166, 35, 0.35);
     }

     .dgfh-btn-outline {
         /* background: transparent; */
         color: #fffdfd;
         border-color: #7ee0d0;
     }

     .dgfh-btn-outline:hover {
         background: rgba(126, 224, 208, 0.12);
         transform: translateY(-2px);
     }

     /* ---------- right column: form card ---------- */

     .dgfh-form-card {
         background: #fff;
         border-radius: 14px;
         overflow: hidden;
         box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
         opacity: 0;
         animation: dgfh-fade-up 0.6s ease 0.2s forwards;
     }

     .dgfh-form-header {
         background: linear-gradient(120deg, #373ACF, #0f2f8f);
         padding: 20px 22px;
         display: flex;
         justify-content: space-between;
         align-items: flex-start;
         gap: 12px;
         color: #fff;
     }

     .dgfh-form-header-title {
         font-size: 17px;
         font-weight: 800;
         line-height: 1.35;
         margin: 0 0 6px 0;
     }

     .dgfh-form-header-sub {
         font-size: 12.5px;
         color: #d7e3ff;
         margin: 0;
     }

     .dgfh-form-icon {
         flex: 0 0 auto;
         font-size: 30px;
         opacity: 0.85;
     }

     .dgfh-form-body {
         padding: 22px;
         display: flex;
         flex-direction: column;
         gap: 14px;
     }

     .dgfh-field {
         width: 100%;
         box-sizing: border-box;
         padding: 13px 14px;
         border: 1px solid #d9dde5;
         border-radius: 8px;
         font-size: 14px;
         /* font-family: inherit; */
         transition: border-color 0.25s ease, box-shadow 0.25s ease;
     }

     .dgfh-field:focus {
         outline: none;
         border-color: #1449c4;
         box-shadow: 0 0 0 3px rgba(20, 73, 196, 0.12);
     }

     textarea.dgfh-field {
         resize: vertical;
         min-height: 80px;
     }

     .dgfh-phone-row {
         display: flex;
         gap: 8px;
     }

     .dgfh-country-code {
         flex: 0 0 auto;
         display: flex;
         align-items: center;
         gap: 6px;
         padding: 0 12px;
         border: 1px solid #d9dde5;
         border-radius: 8px;
         font-size: 13px;
         color: #333;
     }

     .dgfh-flag {
         display: inline-block;
         width: 16px;
         height: 11px;
         background: linear-gradient(#ff9933 0 33%, #fff 33% 66%, #138808 66% 100%);
         border-radius: 2px;
     }

     .dgfh-phone-input {
         flex: 1 1 auto;
     }

     .dgfh-submit-btn {
         margin-top: 4px;
         padding: 14px;
         border: 2px solid #1449c4;
         border-radius: 8px;
         font-size: 14.5px;
         font-weight: 800;
         letter-spacing: 0.5px;
         cursor: pointer;
         transition: background 0.25s ease, color 0.25s ease, transform 0.2s ease;
         color: #fff;
         background: #373ACF;
     }

     .dgfh-submit-btn:hover {
         color: #ffffff;
         background: #242424;
         transform: translateY(-2px);
     }

     /* ---------- responsive ---------- */

     @media (max-width: 980px) {
         .dgfh-container {
             grid-template-columns: 1fr;
         }

         .dgfh-form-card {
             max-width: 460px;
         }
     }

     @media (max-width: 560px) {
         .dgfh-hero {
             padding: 32px 16px 44px;
         }

         .dgfh-heading {
             font-size: 24px;
         }

         .dgfh-subtext {
             font-size: 14px;
         }

         .dgfh-partner-left {
             padding: 14px 18px;
         }

         .dgfh-partner-name {
             font-size: 18px;
         }

         .dgfh-stat-item {
             padding: 14px 16px;
             flex: 1 1 45%;
         }

         .dgfh-btn-row {
             flex-direction: column;
         }

         .dgfh-btn {
             width: 100%;
             text-align: center;
         }

         .dgfh-rating-row {
             gap: 12px;
         }
     }



     /* all section animations */
     /* 1 dule cycle */
     .dss {
         position: relative;
         overflow: hidden;
     }

     .decor-hero-ring {
         position: absolute;
         top: -90px;
         left: -90px;
         width: 300px;
         height: 300px;
         border: 2px dashed #f77123;
         border-radius: 50%;
         opacity: .4;
         z-index: 1;
         pointer-events: none;
         animation: hero-ring-spin 20s linear infinite;
     }


     .decor-hero-ring::before {
         content: '';
         position: absolute;
         inset: 34px;
         border: 2px dashed #22D3EE;
         border-radius: 50%;
         opacity: .6;
     }

     @keyframes hero-ring-spin {
         0% {
             transform: rotate(0deg);
         }

         100% {
             transform: rotate(360deg);
         }
     }

     /* 2 glow */
     .decor-hero-glow1 {
         position: absolute;
         top: -180px;
         left: -160px;
         width: 480px;
         height: 480px;
         border-radius: 50%;
         background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
         opacity: .18;
         filter: blur(60px);
         z-index: 0;
         pointer-events: none;
         animation: hero-glow-drift 12s ease-in-out infinite;
     }

     /* 2 glow */
     .decor-hero-glow2 {
         position: absolute;
         bottom: -180px;
         right: -120px;
         width: 480px;
         height: 480px;
         border-radius: 50%;
         background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
         opacity: .18;
         filter: blur(60px);
         z-index: 0;
         pointer-events: none;
         animation: hero-glow-drift 12s ease-in-out infinite;
     }


     @keyframes hero-glow-drift {

         0%,
         100% {
             transform: translate(0, 0) scale(1);
         }

         50% {
             transform: translate(30px, 20px) scale(1.08);
         }
     }



     /* 3 dots  */


     .decor-hero-orb.o1 {
         width: 14px;
         height: 14px;
            top: 75px;
    right: 170px;
         background: #8B5CF6;
         opacity: .5;
         animation: hero-orb-1 5s ease-in-out infinite;
         position: absolute;
         border-radius: 50%;
     }


     .decor-hero-orb.o2 {
         position: absolute;
         width: 9px;
         height: 9px;
         bottom: 100px;
         right: 20px;
         background: #22D3EE;
         opacity: .5;
         animation: hero-orb-2 6s ease-in-out infinite .3s;
         border-radius: 50%;
     }


     @keyframes hero-orb-1 {

         0%,
         100% {
             transform: translate(0, 0);
         }

         50% {
             transform: translate(-10px, -14px);
         }
     }

     @keyframes hero-orb-2 {

         0%,
         100% {
             transform: translate(0, 0);
         }

         50% {
             transform: translate(-8px, 10px);
         }
     }


     .decor-hero-orb.o3 {
         position: absolute;
         width: 20px;
         height: 20px;
         top: 200px;
        right: 66px;;
         background: #2563EB;
         opacity: .3;
         animation: hero-orb-1 7s ease-in-out infinite .6s;
         border-radius: 50%;
     }
     
 </style>
 <section class="dgfh-hero dss">
     <div class="decor-hero-ring"></div>
     <div class="decor-hero-glow1"></div>
     <div class="decor-hero-glow2"></div>

     <div class="decor-hero-orb o1"></div>
     <div class="decor-hero-orb o2"></div>
     <div class="decor-hero-orb o3"></div>

     <div class="dgfh-container">

         <!-- LEFT -->
         <div class="dgfh-left">

             <div class="dgfh-breadcrumb0" style="display: none;">Home / Data Analytics &amp; BI / Data Analytics Training Program</div>

             <h1 class="dgfh-heading" style=" font-family: 'Sora', inter;  font-weight:800;font-size:44px;">Data Analytics Course <br> <em style="color: #373ACF;font-style:normal;"> in Delhi </em></h1>

             <p class="dgfh-subtext" style="color:#666666;">Uncover the methods to extract data for analytical purposes. Join us now and
                 study under a skilled data analyst.</p>

             <div class="dgfh-rating-row">
                 <span class="dgfh-rating-main" style="font-size: 15.5px;    font-weight: 700;">⭐ 4.9 out of 5 based on 45479 votes</span>

             </div>

             <div class="dgfh-partner-bar" style="display: none;">
                 <div class="dgfh-partner-left">
                     <span class="dgfh-partner-label">In collaboration with</span>
                     <span class="dgfh-partner-name">NASSCOM</span>
                 </div>
                 <div class="dgfh-partner-stats">
                     <div class="dgfh-stat-item">
                         <div class="dgfh-stat-num">400+</div>
                         <div class="dgfh-stat-sub">Corp. Tie-Ups</div>
                     </div>
                     <div class="dgfh-stat-item">
                         <div class="dgfh-stat-num">Online/Offline</div>
                         <div class="dgfh-stat-sub">Format</div>
                     </div>
                     <div class="dgfh-stat-item">
                         <div class="dgfh-stat-num">LMS</div>
                         <div class="dgfh-stat-sub">Life Time Access</div>
                     </div>
                 </div>
             </div>

             <div class="dgfh-btn-row">
                 <button class="dgfh-btn dgfh-btn-solid">Placement Report  &#10140;</button>
                 <button class="dgfh-btn dgfh-btn-outline dark-gradient-animated">Download Curriculum  &#10140;</button>
                 <button class="dgfh-btn dgfh-btn-outline dark-gradient-animated">Interview Questions  &#10140;</button>
             </div>

             <div class="dgfh-badge-row">
                 <span class="dgfh-badge card1298he">
                     <span class="dgfh-badge-dot ">
                         <span style="width: 30px;">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 262"
                                 preserveAspectRatio="xMidYMid" crxlauncher-bridged="" crxlauncher="">
                                 <path
                                     d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                     fill="#4285F4" />
                                 <path
                                     d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                     fill="#34A853" />
                                 <path
                                     d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                     fill="#FBBC05" />
                                 <path
                                     d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                     fill="#EB4335" />
                             </svg>
                         </span>
                     </span>4.2/5</span>
                 <span class="dgfh-badge card1298he"><span class="dgfh-badge-dot dgfh-dot-"><span style="width: 30px;"><img
                                 src="img/extra/sul.png" alt=""></span></span>4.8/5</span>
                 <span class="dgfh-badge card1298he"><span class="dgfh-badge-dot dgfh-dot-"><span style="width: 30px;"><img
                                 src="img/extra/urbonpro.png" alt=""></span></span>4.6/5</span>
                 <span class="dgfh-badge card1298he"><span class="dgfh-badge-dot dgfh-dot-"><span style="width: 30px;"><img
                                 src="img/extra/just-dial.png" alt=""></span></span>4.3/5</span>
                 <span class="dgfh-badge card1298he"><span class="dgfh-badge-dot dgfh-dot-"><span style="width: 30px;"><svg
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 viewBox="0 0 15 15" version="1.1"
                                 crxlauncher-bridged="" crxlauncher="">
                                 <g id="surface1">
                                     <path
                                         style=" stroke:none;fill-rule:nonzero;fill:rgb(23.529412%,35.294118%,60.392157%);fill-opacity:1;"
                                         d="M 15 7.5 C 15 11.640625 11.640625 15 7.5 15 C 3.359375 15 0 11.640625 0 7.5 C 0 3.359375 3.359375 0 7.5 0 C 11.640625 0 15 3.359375 15 7.5 Z M 15 7.5 " />
                                     <path
                                         style=" stroke:none;fill-rule:nonzero;fill:rgb(100%,100%,100%);fill-opacity:1;"
                                         d="M 9.9375 2.300781 L 8.277344 2.300781 C 7.292969 2.300781 6.195312 2.714844 6.195312 4.144531 C 6.199219 4.644531 6.195312 5.121094 6.195312 5.65625 L 5.054688 5.65625 L 5.054688 7.472656 L 6.230469 7.472656 L 6.230469 12.699219 L 8.390625 12.699219 L 8.390625 7.4375 L 9.816406 7.4375 L 9.945312 5.652344 L 8.351562 5.652344 C 8.351562 5.652344 8.355469 4.859375 8.351562 4.628906 C 8.351562 4.0625 8.941406 4.09375 8.976562 4.09375 C 9.257812 4.09375 9.800781 4.097656 9.941406 4.09375 L 9.941406 2.300781 Z M 9.9375 2.300781 " />
                                 </g>
                             </svg></span></span>4.5/5</span>
             </div>

         </div>

         <!-- RIGHT: FORM -->
         <div class="dgfh-form-card card1298he_no_hover">
             <div class="dgfh-form-header">
                 <div>
                     <h3 class="dgfh-form-header-title">Book A Free Counselling Session</h3>
                     <p class="dgfh-form-header-sub">we train you to get hired.</p>
                 </div>
                 <span class="dgfh-form-icon"><svg width="25" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                         <path d="M264 112L376 112C380.4 112 384 115.6 384 120L384 160L256 160L256 120C256 115.6 259.6 112 264 112zM208 120L208 160L128 160C92.7 160 64 188.7 64 224L64 320L576 320L576 224C576 188.7 547.3 160 512 160L432 160L432 120C432 89.1 406.9 64 376 64L264 64C233.1 64 208 89.1 208 120zM576 368L384 368L384 384C384 401.7 369.7 416 352 416L288 416C270.3 416 256 401.7 256 384L256 368L64 368L64 480C64 515.3 92.7 544 128 544L512 544C547.3 544 576 515.3 576 480L576 368z" />
                     </svg></span>
             </div>

             <div class="dgfh-form-body">
                 <input class="dgfh-field" type="text" placeholder="Full Name*">
                 <input class="dgfh-field" type="email" placeholder="Email Address*">

                 <div class="dgfh-phone-row">
                     <span class="dgfh-country-code"><span class="dgfh-flag"></span>(+91)</span>
                     <input class="dgfh-field dgfh-phone-input" type="tel" placeholder="Phone No*">
                 </div>

                 <textarea class="dgfh-field" placeholder="Message Details"></textarea>

                 <button class="dgfh-submit-btn">SUBMIT</button>
             </div>
         </div>

     </div>
 </section>