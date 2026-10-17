 <style>
     .faq-wrap {
         box-sizing: border-box;
         background: #FFFFFF;
         padding: 96px 8vw 110px;
         /* font-family: 'Inter', sans-serif; */
     }

     .faq-wrap * {
         box-sizing: border-box;
     }

     .faq-inner {
         max-width: 760px;
         margin: 0 auto;
     }

     .faq-title {
         /* font-family: 'Space Grotesk', sans-serif; */
         font-weight: 600;
         font-size: clamp(26px, 3.2vw, 36px);
         color: #14172B;
         margin: 0 0 34px;
     }

     .faq-item {
         border-bottom: 1px solid #E4E0D6;
     }

     .faq-item:first-child {
         border-top: 1px solid #E4E0D6;
     }

     .faq-head {
         width: 100%;
         background: none;
         border: none;
         display: flex;
         justify-content: space-between;
         align-items: center;
         gap: 16px;
         padding: 20px 2px;
         cursor: pointer;
         text-align: left;
         /* font-family: 'Inter', sans-serif; */
     }

     .faq-q {
         font-size: 15.5px;
         font-weight: 600;
         color: #14172B;
     }

     .faq-plus {
         font-size: 19px;
         color: #767B94;
         transition: transform 0.3s ease;
         flex-shrink: 0;
     }

     .faq-item.faq-open .faq-plus {
         transform: rotate(45deg);
     }

     .faq-body {
         max-height: 0;
         overflow: hidden;
         transition: max-height 0.35s ease;
     }

     .faq-item.faq-open .faq-body {
         max-height: 160px;
     }

     .faq-body-inner {
         padding: 0 2px 20px;
         font-size: 14.5px;
         color: #5B5F73;
         line-height: 1.65;
     }
 </style>

 <section class="faq-wrap">
     <div class="faq-inner">
         <h2 class="faq-title">Frequently asked questions</h2>
         <div id="faq-target">
             <div class="faq-item faq-open">
                 <button class="faq-head"><span class="faq-q">What are the eligibility requirements for joining the Data Science Course in Delhi?
                     </span><span class="faq-plus">+</span></button>
                 <div class="faq-body">
                     <div class="faq-body-inner">There are no strict academic prerequisites. Beginners, non-IT graduates, working professionals, and engineering students can all join. A basic understanding of high-school mathematics and logical reasoning is all you need to get started.
                     </div>
                 </div>
             </div>
             <div class="faq-item">
                 <button class="faq-head"><span class="faq-q">
                         Does EagletFly Solutions provide direct placement assistance after course completion?
                     </span><span class="faq-plus">+</span></button>
                 <div class="faq-body">
                     <div class="faq-body-inner">Yes. We offer complete placement support, including 1-on-1 resume optimization, GitHub portfolio reviews, technical mock interviews, behavioral prep, and direct interview drives with partner companies across Delhi NCR.

                     </div>
                 </div>
             </div>
             <div class="faq-item">
                 <button class="faq-head"><span class="faq-q">What is the difference between Data Science and Data Analytics?
                     </span><span class="faq-plus">+</span></button>
                 <div class="faq-body">
                     <div class="faq-body-inner">Data Analytics focuses primarily on examining historical data to discover trends, answer specific business questions, and build visual dashboards. Data Science encompasses data analytics but extends further into building predictive machine learning models, deep learning systems, and artificial intelligence applications.
                     </div>
                 </div>
             </div>
             <div class="faq-item">
                 <button class="faq-head"><span class="faq-q">Are flexible class schedules available for working professionals?
                     </span><span class="faq-plus">+</span></button>
                 <div class="faq-body">
                     <div class="faq-body-inner">Yes. EagletFly Solutions offers flexible learning options, including weekday morning/evening batches, weekend-only classes, and instructor-led live online sessions with recorded lectures.
                     </div>
                 </div>
             </div>
             <div class="faq-item">
                 <button class="faq-head"><span class="faq-q">How long does it take to become job-ready in Data Science?
                     </span><span class="faq-plus">+</span></button>
                 <div class="faq-body">
                     <div class="faq-body-inner">With consistent practice and structured training, you can master core analytics in 12 weeks and complete a comprehensive 6-month professional track to qualify for entry-level and mid-level data science roles.
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <script>
     (function() {
         var items = document.querySelectorAll('#faq-target .faq-item');
         items.forEach(function(item) {
             var head = item.querySelector('.faq-head');
             head.addEventListener('click', function() {
                 var isOpen = item.classList.contains('faq-open');
                 items.forEach(function(i) {
                     i.classList.remove('faq-open');
                 });
                 if (!isOpen) item.classList.add('faq-open');
             });
         });
     })();
 </script>