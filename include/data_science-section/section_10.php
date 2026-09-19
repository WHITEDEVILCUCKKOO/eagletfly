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
            font-size: clamp(24px, 3vw, 32px);
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
                    <button class="faq-head"><span class="faq-q">Do I need a coding background to join?</span><span class="faq-plus">+</span></button>
                    <div class="faq-body">
                        <div class="faq-body-inner">No. The first module starts from Python basics, so no prior programming experience is required.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-head"><span class="faq-q">How long is the Data Science course?</span><span class="faq-plus">+</span></button>
                    <div class="faq-body">
                        <div class="faq-body-inner">The full program runs 6 months, including the capstone project and placement preparation.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-head"><span class="faq-q">What placement support does Eaglefly offer?</span><span class="faq-plus">+</span></button>
                    <div class="faq-body">
                        <div class="faq-body-inner">Resume reviews, mock interviews, and direct introductions to our hiring partner network.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-head"><span class="faq-q">Can I switch between weekday and weekend batches?</span><span class="faq-plus">+</span></button>
                    <div class="faq-body">
                        <div class="faq-body-inner">Yes, subject to seat availability in the batch you'd like to move to — just ask your advisor.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-head"><span class="faq-q">Is a certificate provided at the end?</span><span class="faq-plus">+</span></button>
                    <div class="faq-body">
                        <div class="faq-body-inner">Yes, you receive a certified Data Scientist credential after completing the capstone project.</div>
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
