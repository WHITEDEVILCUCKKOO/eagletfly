 <style>
        .stats-wrap {
            box-sizing: border-box;
            background: #F6F4EF;
            padding: 54px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .stats-wrap * {
            box-sizing: border-box;
        }

        .stats-grid {
            max-width: 1160px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border: 1px solid #E4E0D6;
            border-radius: 14px;
            overflow: hidden;
            background: #FFFFFF;
        }

        .stats-cell {
            padding: 30px 20px;
            text-align: center;
            border-right: 1px solid #E4E0D6;
            opacity: 0;
            transform: translateY(12px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .stats-cell:last-child {
            border-right: none;
        }

        .stats-cell.stats-in {
            opacity: 1;
            transform: translateY(0);
        }

        .stats-num {
            /* font-family: 'JetBrains Mono', monospace; */
            font-weight: 600;
            font-size: 30px;
            color: #14172B;
            margin: 0 0 6px;
        }

        .stats-label {
            font-size: 13px;
            color: #767B94;
        }

        @media (max-width: 720px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stats-cell:nth-child(2) {
                border-right: none;
            }
        }
    </style>

    <section class="stats-wrap">
        <div class="stats-grid" id="stats-target">
            <div class="stats-cell">
                <p class="stats-num">20,000+</p>
                <p class="stats-label">Learners trained</p>
            </div>
            <div class="stats-cell">
                <p class="stats-num">₹5–12L</p>
                <p class="stats-label">Average package</p>
            </div>
            <div class="stats-cell">
                <p class="stats-num">90%</p>
                <p class="stats-label">Placement rate</p>
            </div>
            <div class="stats-cell">
                <p class="stats-num">12 yrs</p>
                <p class="stats-label">In tech education</p>
            </div>
        </div>
    </section>

    <script>
        (function() {
            var cells = document.querySelectorAll('#stats-target .stats-cell');
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry, i) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            entry.target.classList.add('stats-in');
                        }, i * 90);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.3
            });
            cells.forEach(function(c) {
                obs.observe(c);
            });
        })();
    </script>
