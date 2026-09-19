 <style>
        .curr-wrap {
            box-sizing: border-box;
            background: #F6F4EF;
            padding: 96px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .curr-wrap * {
            box-sizing: border-box;
        }

        .curr-inner {
            max-width: 860px;
            margin: 0 auto;
        }

        .curr-topline {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            gap: 20px;
            margin-bottom: 34px;
            flex-wrap: wrap;
        }

        .curr-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(24px, 3vw, 32px);
            color: #14172B;
            margin: 0;
        }

        .curr-count {
            /* font-family: 'JetBrains Mono', monospace; */
            font-size: 13px;
            color: #767B94;
        }

        .curr-dl {
            border: none;
            background: #14172B;
            color: #F6F4EF;
            /* font-family: 'Inter', sans-serif; */
            font-weight: 600;
            font-size: 14px;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
        }

        .curr-item {
            border-bottom: 1px solid #E4E0D6;
        }

        .curr-item:first-child {
            border-top: 1px solid #E4E0D6;
        }

        .curr-head {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 22px 4px;
            cursor: pointer;
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            /* font-family: 'Inter', sans-serif; */
        }

        .curr-idx {
            /* font-family: 'JetBrains Mono', monospace; */
            font-size: 13px;
            color: #35B7A4;
            min-width: 26px;
        }

        .curr-name {
            flex: 1;
            font-size: 16px;
            font-weight: 600;
            color: #14172B;
        }

        .curr-plus {
            font-size: 20px;
            color: #767B94;
            transition: transform 0.3s ease;
        }

        .curr-item.curr-open .curr-plus {
            transform: rotate(45deg);
        }

        .curr-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease;
        }

        .curr-item.curr-open .curr-body {
            max-height: 140px;
        }

        .curr-body-inner {
            padding: 0 4px 22px 68px;
            font-size: 14.5px;
            color: #5B5F73;
            line-height: 1.6;
        }
    </style>

    <section class="curr-wrap">
        <div class="curr-inner">
            <div class="curr-topline">
                <h2 class="curr-title">Six modules, one job-ready portfolio</h2>
                <button class="curr-dl">Download full syllabus</button>
            </div>
            <div id="curr-target">
                <div class="curr-item curr-open">
                    <button class="curr-head"><span class="curr-idx">01</span><span class="curr-name">Python &amp; Statistics Foundations</span><span class="curr-plus">+</span></button>
                    <div class="curr-body">
                        <div class="curr-body-inner">Core Python, data structures, and the statistics you actually need before touching a model.</div>
                    </div>
                </div>
                <div class="curr-item">
                    <button class="curr-head"><span class="curr-idx">02</span><span class="curr-name">Data Wrangling &amp; Visualization</span><span class="curr-plus">+</span></button>
                    <div class="curr-body">
                        <div class="curr-body-inner">Pandas, NumPy and storytelling with Matplotlib, Seaborn and Power BI dashboards.</div>
                    </div>
                </div>
                <div class="curr-item">
                    <button class="curr-head"><span class="curr-idx">03</span><span class="curr-name">SQL &amp; Databases for Analysts</span><span class="curr-plus">+</span></button>
                    <div class="curr-body">
                        <div class="curr-body-inner">Writing production-grade queries and understanding how analytics data is actually stored.</div>
                    </div>
                </div>
                <div class="curr-item">
                    <button class="curr-head"><span class="curr-idx">04</span><span class="curr-name">Machine Learning Essentials</span><span class="curr-plus">+</span></button>
                    <div class="curr-body">
                        <div class="curr-body-inner">Regression, classification, clustering and model evaluation with scikit-learn.</div>
                    </div>
                </div>
                <div class="curr-item">
                    <button class="curr-head"><span class="curr-idx">05</span><span class="curr-name">Deep Learning &amp; NLP</span><span class="curr-plus">+</span></button>
                    <div class="curr-body">
                        <div class="curr-body-inner">Neural networks, text classification and an introduction to transformer-based models.</div>
                    </div>
                </div>
                <div class="curr-item">
                    <button class="curr-head"><span class="curr-idx">06</span><span class="curr-name">Capstone Project &amp; Placement Prep</span><span class="curr-plus">+</span></button>
                    <div class="curr-body">
                        <div class="curr-body-inner">A full end-to-end project for your portfolio, plus resume, interview and mock-panel prep.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function() {
            var items = document.querySelectorAll('#curr-target .curr-item');
            items.forEach(function(item) {
                var head = item.querySelector('.curr-head');
                head.addEventListener('click', function() {
                    var isOpen = item.classList.contains('curr-open');
                    items.forEach(function(i) {
                        i.classList.remove('curr-open');
                    });
                    if (!isOpen) item.classList.add('curr-open');
                });
            });
        })();
    </script>
