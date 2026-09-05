  <!-- section 4 -->
    <style>
.asdhi979{

    background-color: #FFF9F2;
}

        .dgf-syllabus-wrapper {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px 70px;
            /* font-family: 'Segoe UI', Arial, sans-serif; */
            color: #1a1a1a;
        }

        .dgf-eyebrow {
            font-size: 15px;
            color: #444;
            margin-bottom: 6px;
            letter-spacing: 0.3px;
        }

        .dgf-heading {
            font-size: 34px;
            font-weight: 800;
            line-height: 1.25;
            margin: 0 0 30px 0;
        }

        .dgf-heading-line2 {
            /* color: #2f6df3; */
            display: block;
            margin-bottom: 15px;
        }

        /* ---------- Tabs Row ---------- */

        .dgf-tabs-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dgf-arrow-btn {
            flex: 0 0 auto;
            width: 44px;
            height: 44px;
            border-radius: 8px;
            border: none;
            /* background: #2f6df3; */
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.25s ease, transform 0.2s ease;
        }

        .dgf-arrow-btn:hover {
            /* background: #1d54d1; */
            transform: scale(1.06);
        }

        .dgf-arrow-btn:active {
            transform: scale(0.94);
        }

        .dgf-tabs-scroll-area {
            flex: 1 1 auto;
            overflow: hidden;
        }

        .dgf-tabs-track {
            display: flex;
            gap: 12px;
            transition: transform 0.35s ease;
            will-change: transform;
        }

        .dgf-tab-btn {
            flex: 0 0 auto;
            min-width: 130px;
            padding: 14px 20px;
            text-align: center;
            background: #fff;
            /* background: #f3972f; */
            border: 1.5px solid #f3972f !important;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            color: #161616;
            cursor: pointer;
            position: relative;
            transition: border-color 0.25s ease, box-shadow 0.25s ease, transform 0.2s ease;
        }

        .dgf-tab-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(47, 109, 243, 0.12);
        }

        .dgf-tab-btn.dgf-active {
            border-color: #f3972f;
            box-shadow: 0 6px 14px rgba(243, 165, 47, 0.15);
        }

        .dgf-tab-btn.dgf-active::after {
            content: "";
            position: absolute;
            left: 10%;
            right: 10%;
            bottom: -3px;
            height: 3px;
            background: #f38e2f;
            border-radius: 3px;
            animation: dgf-underline-grow 0.3s ease;
        }

        @keyframes dgf-underline-grow {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }

        /* ---------- Content Card ---------- */

        .dgf-content-card {
            margin-top: 34px;
            border: 1px solid #ececec;
            border-radius: 18px;
            padding: 45px 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .dgf-panel {
            display: none;
        }

        .dgf-panel.dgf-panel-active {
            display: block;
            animation: dgf-fade-in 0.4s ease;
        }

        @keyframes dgf-fade-in {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dgf-panel-inner {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .dgf-panel-text {
            flex: 1 1 380px;
        }

        .dgf-panel-title {
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 18px 0;
        }

        .dgf-topic-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .dgf-topic-list li {
            position: relative;
            padding: 9px 0 9px 22px;
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            opacity: 0;
            animation: dgf-item-slide 0.45s ease forwards;
        }

        .dgf-topic-list li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 18px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #2f6df3;
        }

        @keyframes dgf-item-slide {
            from {
                opacity: 0;
                transform: translateX(-8px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .dgf-topic-list li:nth-child(1) {
            animation-delay: 0.03s;
        }

        .dgf-topic-list li:nth-child(2) {
            animation-delay: 0.07s;
        }

        .dgf-topic-list li:nth-child(3) {
            animation-delay: 0.11s;
        }

        .dgf-topic-list li:nth-child(4) {
            animation-delay: 0.15s;
        }

        .dgf-topic-list li:nth-child(5) {
            animation-delay: 0.19s;
        }

        .dgf-topic-list li:nth-child(6) {
            animation-delay: 0.23s;
        }

        .dgf-topic-list li:nth-child(7) {
            animation-delay: 0.27s;
        }

        .dgf-topic-list li:nth-child(8) {
            animation-delay: 0.31s;
        }

        .dgf-topic-list li:nth-child(9) {
            animation-delay: 0.35s;
        }

        .dgf-topic-list li:nth-child(10) {
            animation-delay: 0.39s;
        }

        /* ---------- Image placeholder : yaha aap apni khud ki image add kar sakte hain ---------- */

        .dgf-panel-image {
            flex: 0 0 260px;
            height: 260px;
            border: 2px dashed #c7d2e6;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #8896b3;
            font-size: 14px;
            background: #f7f9fd;
            padding: 20px;
            transition: border-color 0.3s ease, background 0.3s ease;
        }

        .dgf-panel-image:hover {
            border-color: #2f6df3;
            background: #eef3ff;
        }

        /* ---------- Responsive ---------- */

        @media (max-width: 768px) {
            .dgf-heading {
                font-size: 26px;
            }

            .dgf-content-card {
                padding: 30px 22px;
            }

            .dgf-tab-btn {
                min-width: 110px;
                padding: 12px 14px;
                font-size: 14px;
            }

            .dgf-arrow-btn {
                width: 38px;
                height: 38px;
            }

            .dgf-panel-inner {
                flex-direction: column;
            }

            .dgf-panel-image {
                width: 100%;
                flex: 0 0 auto;
            }
        }

        @media (max-width: 480px) {
            .dgf-syllabus-wrapper {
                padding: 24px 14px 50px;
            }

            .dgf-heading {
                font-size: 21px;
            }

            .dgf-eyebrow {
                font-size: 13px;
            }

            .dgf-panel-title {
                font-size: 20px;
            }

            .dgf-topic-list li {
                font-size: 14.5px;
            }

            .dgf-tab-btn {
                min-width: 96px;
                padding: 10px 12px;
                font-size: 13px;
            }

            .dgf-content-card {
                padding: 22px 16px;
                border-radius: 14px;
            }
        }
    </style>
    <section class="asdhi979">
        <div class="dgf-syllabus-wrapper">

            <!-- <div class="dgf-eyebrow">Syllabus</div> -->
            <h1 class="dgf-heading"  style=" font-family: 'Sora', inter;  font-weight:800;font-size:35px;">
                Digifine Data Analytics Course
                <span class="dgf-heading-line2 rainbow-animated_without_animtion" style="font-style: normal;">in Mumbai Syllabus</span>
            </h1>

            <div class="dgf-tabs-row">
                <button class="dgf-arrow-btn dark-gradient-animated" id="dgfArrowLeft" aria-label="Previous">&#8249;</button>

                <div class="dgf-tabs-scroll-area">
                    <div class="dgf-tabs-track" id="dgfTabsTrack">
                        <button class="dgf-tab-btn dgf-active" data-target="dgf-panel-excel">Excel</button>
                        <button class="dgf-tab-btn" data-target="dgf-panel-python">Python</button>
                        <button class="dgf-tab-btn" data-target="dgf-panel-mysql">MySQL</button>
                        <button class="dgf-tab-btn" data-target="dgf-panel-numpy">Numpy</button>
                        <button class="dgf-tab-btn" data-target="dgf-panel-pandas">Pandas</button>
                    </div>
                </div>

                <button class="dgf-arrow-btn dark-gradient-animated" id="dgfArrowRight" aria-label="Next">&#8250;</button>
            </div>

            <div class="dgf-content-card">

                <!-- Excel -->
                <div class="dgf-panel dgf-panel-active" id="dgf-panel-excel">
                    <div class="dgf-panel-inner">
                        <div class="dgf-panel-text">
                            <h2 class="dgf-panel-title">Excel</h2>
                            <ul class="dgf-topic-list">
                                <li>Introduction: What is Excel, Why Excel &amp; Get Started</li>
                                <li>Basic: Range, Move, Add, Delete Cells &amp; Undo</li>
                                <li>Basic Formulas: Sum, Average, Count, Count If, Sum If &amp; Average If</li>
                                <li>Advance Formulas: Vlookup, Sum Ifs, Count Ifs, If, Concatenate &amp; Index Match
                                </li>
                                <li>Operators: Arithmetic, Comparison, Logical &amp; Reference</li>
                                <li>Formatting: Excel Formatting, Sort &amp; Filter</li>
                                <li>Tables: Pivot Table, import &amp; export</li>
                                <li>Conditional: If, AND, OR, NOT</li>
                                <li>Rules: Highlight Cell Rules</li>
                                <li>Bars &amp; Charts: Data Bars, Colour Scales, Icon Sets, Pie Charts &amp; Histograms
                                </li>
                                <li>Charts Customization</li>
                            </ul>
                        </div>
                        <!-- Yahan apni khud ki image add karein -->
                        <!-- <div class="dgf-panel-image">Apni image yahan add karein<br>(Excel)</div> -->
                    </div>
                </div>

                <!-- Python -->
                <div class="dgf-panel" id="dgf-panel-python">
                    <div class="dgf-panel-inner">
                        <div class="dgf-panel-text">
                            <h2 class="dgf-panel-title">Python</h2>
                            <ul class="dgf-topic-list">
                                <li>Introduction: What is Python, Why Python &amp; Installation</li>
                                <li>Basic: Variables, Data Types &amp; Operators</li>
                                <li>Control Flow: If Else, Loops (For, While)</li>
                                <li>Functions: Defining, Arguments &amp; Return Values</li>
                                <li>Data Structures: List, Tuple, Set &amp; Dictionary</li>
                                <li>String Handling &amp; String Methods</li>
                                <li>File Handling: Read, Write &amp; Append</li>
                                <li>Exception Handling: Try, Except &amp; Finally</li>
                                <li>OOPs Concepts: Class &amp; Object</li>
                                <li>Modules &amp; Libraries Overview</li>
                            </ul>
                        </div>
                        <!-- <div class="dgf-panel-image">Apni image yahan add karein<br>(Python)</div> -->
                    </div>
                </div>

                <!-- MySQL -->
                <div class="dgf-panel" id="dgf-panel-mysql">
                    <div class="dgf-panel-inner">
                        <div class="dgf-panel-text">
                            <h2 class="dgf-panel-title">MySQL</h2>
                            <ul class="dgf-topic-list">
                                <li>Introduction: What is MySQL &amp; Database Basics</li>
                                <li>DDL Commands: Create, Alter, Drop</li>
                                <li>DML Commands: Insert, Update, Delete</li>
                                <li>Queries: Select, Where, Order By, Group By</li>
                                <li>Joins: Inner, Left, Right &amp; Full Join</li>
                                <li>Aggregate Functions: Sum, Avg, Count, Min, Max</li>
                                <li>Subqueries &amp; Nested Queries</li>
                                <li>Constraints: Primary Key, Foreign Key, Unique</li>
                                <li>Views &amp; Indexes</li>
                                <li>Case Studies &amp; Real Time Queries</li>
                            </ul>
                        </div>
                        <!-- <div class="dgf-panel-image">Apni image yahan add karein<br>(MySQL)</div> -->
                    </div>
                </div>

                <!-- Numpy -->
                <div class="dgf-panel" id="dgf-panel-numpy">
                    <div class="dgf-panel-inner">
                        <div class="dgf-panel-text">
                            <h2 class="dgf-panel-title">Numpy</h2>
                            <ul class="dgf-topic-list">
                                <li>Introduction: What is Numpy &amp; Installation</li>
                                <li>Numpy Arrays: Creation &amp; Properties</li>
                                <li>Array Indexing &amp; Slicing</li>
                                <li>Array Operations: Arithmetic &amp; Broadcasting</li>
                                <li>Reshaping, Stacking &amp; Splitting Arrays</li>
                                <li>Statistical Functions: Mean, Median, Std Dev</li>
                                <li>Random Module &amp; Random Number Generation</li>
                                <li>Linear Algebra with Numpy</li>
                            </ul>
                        </div>
                        <!-- <div class="dgf-panel-image">Apni image yahan add karein<br>(Numpy)</div> -->
                    </div>
                </div>

                <!-- Pandas -->
                <div class="dgf-panel" id="dgf-panel-pandas">
                    <div class="dgf-panel-inner">
                        <div class="dgf-panel-text">
                            <h2 class="dgf-panel-title">Pandas</h2>
                            <ul class="dgf-topic-list">
                                <li>Introduction: What is Pandas &amp; Installation</li>
                                <li>Series &amp; DataFrame Basics</li>
                                <li>Reading &amp; Writing Data: CSV, Excel, JSON</li>
                                <li>Data Selection: loc, iloc &amp; Filtering</li>
                                <li>Data Cleaning: Handling Null Values &amp; Duplicates</li>
                                <li>GroupBy &amp; Aggregation</li>
                                <li>Merging, Joining &amp; Concatenation</li>
                                <li>Pivot Tables in Pandas</li>
                                <li>Data Visualization with Pandas</li>
                                <li>Real Time Case Studies</li>
                            </ul>
                        </div>
                        <!-- <div class="dgf-panel-image">Apni image yahan add karein<br>(Pandas)</div> -->
                    </div>
                </div>

            </div>

        </div>

    </section>
    <script>
        (function () {
            var dgfTabButtons = document.querySelectorAll('.dgf-tab-btn');
            var dgfPanels = document.querySelectorAll('.dgf-panel');
            var dgfTabsTrack = document.getElementById('dgfTabsTrack');
            var dgfArrowLeft = document.getElementById('dgfArrowLeft');
            var dgfArrowRight = document.getElementById('dgfArrowRight');
            var dgfCurrentIndex = 0;

            function dgfActivateTab(index) {
                dgfTabButtons.forEach(function (btn, i) {
                    btn.classList.toggle('dgf-active', i === index);
                });

                dgfPanels.forEach(function (panel) {
                    panel.classList.remove('dgf-panel-active');
                });

                var targetId = dgfTabButtons[index].getAttribute('data-target');
                var targetPanel = document.getElementById(targetId);
                if (targetPanel) {
                    targetPanel.classList.add('dgf-panel-active');
                    var listItems = targetPanel.querySelectorAll('.dgf-topic-list li');
                    listItems.forEach(function (li) {
                        li.style.animation = 'none';
                        void li.offsetWidth;
                        li.style.animation = '';
                    });
                }

                dgfCurrentIndex = index;
                dgfScrollTabsIntoView(index);
            }

            function dgfScrollTabsIntoView(index) {
                var btn = dgfTabButtons[index];
                var trackParent = dgfTabsTrack.parentElement;
                var btnLeft = btn.offsetLeft;
                var btnRight = btnLeft + btn.offsetWidth;
                var viewLeft = -parseInt(dgfTabsTrack.style.transform.replace(/[^-0-9]/g, '') || 0, 10);
                var viewWidth = trackParent.clientWidth;

                var currentTranslate = 0;
                var match = dgfTabsTrack.style.transform.match(/-?\d+/);
                if (match) {
                    currentTranslate = parseInt(match[0], 10);
                }

                if (btnRight + currentTranslate > viewWidth) {
                    currentTranslate = viewWidth - btnRight - 16;
                }
                if (btnLeft + currentTranslate < 0) {
                    currentTranslate = -btnLeft + 16;
                }
                if (currentTranslate > 0) {
                    currentTranslate = 0;
                }

                dgfTabsTrack.style.transform = 'translateX(' + currentTranslate + 'px)';
            }

            dgfTabButtons.forEach(function (btn, index) {
                btn.addEventListener('click', function () {
                    dgfActivateTab(index);
                });
            });

            dgfArrowLeft.addEventListener('click', function () {
                var newIndex = dgfCurrentIndex - 1;
                if (newIndex < 0) {
                    newIndex = dgfTabButtons.length - 1;
                }
                dgfActivateTab(newIndex);
            });

            dgfArrowRight.addEventListener('click', function () {
                var newIndex = dgfCurrentIndex + 1;
                if (newIndex > dgfTabButtons.length - 1) {
                    newIndex = 0;
                }
                dgfActivateTab(newIndex);
            });

        })();
    </script>