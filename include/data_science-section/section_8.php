  <style>
        .dark-wrap {
            box-sizing: border-box;
            background: #0E1330;
            padding: 96px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .dark-wrap * {
            box-sizing: border-box;
        }

        .dark-grid {
            max-width: 1160px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 56px;
            align-items: center;
        }

        .dark-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(26px, 3.2vw, 36px);
            color: #F6F5FF;
            margin: 0 0 16px;
            max-width: 14ch;
        }

        .dark-desc {
            font-size: 15px;
            color: #A8AEDB;
            line-height: 1.7;
            margin: 0;
            max-width: 42ch;
        }

        .dark-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 16px;
        }

        .dark-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #171C42;
            border: 1px solid #262C5C;
            border-radius: 10px;
            padding: 16px 18px;
            opacity: 0;
            transform: translateX(16px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .dark-item.dark-in {
            opacity: 1;
            transform: translateX(0);
        }

        .dark-check {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #35D0BA;
            color: #06231F;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 13px;
            font-weight: 700;
            margin-top: 1px;
        }

        .dark-item-text {
            font-size: 14.5px;
            color: #E5E7FA;
            line-height: 1.55;
        }

        @media (max-width: 880px) {
            .dark-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="dark-wrap">
        <div class="dark-grid">
            <div>
                <h2 class="dark-title">What actually makes Eaglefly different</h2>
                <p class="dark-desc">Not another checklist of buzzwords — these are the specific things past learners say made the difference.</p>
            </div>
            <ul class="dark-list" id="dark-target">
                <li class="dark-item"><span class="dark-check">✓</span><span class="dark-item-text">Live projects built on real, unfiltered datasets — not toy CSVs.</span></li>
                <li class="dark-item"><span class="dark-check">✓</span><span class="dark-item-text">A dedicated placement team that stays with you until you're hired.</span></li>
                <li class="dark-item"><span class="dark-check">✓</span><span class="dark-item-text">Resume rewrites and mock interviews with working data professionals.</span></li>
                <li class="dark-item"><span class="dark-check">✓</span><span class="dark-item-text">Lifetime access to every session recording and code repository.</span></li>
                <li class="dark-item"><span class="dark-check">✓</span><span class="dark-item-text">Weekly code reviews from an industry mentor, not just a TA.</span></li>
                <li class="dark-item"><span class="dark-check">✓</span><span class="dark-item-text">Weekday, weekend and self-paced online-live batches to choose from.</span></li>
            </ul>
        </div>
    </section>

    <script>
        (function() {
            var items = document.querySelectorAll('#dark-target .dark-item');
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry, i) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            entry.target.classList.add('dark-in');
                        }, i * 80);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            items.forEach(function(it) {
                obs.observe(it);
            });
        })();
    </script>
