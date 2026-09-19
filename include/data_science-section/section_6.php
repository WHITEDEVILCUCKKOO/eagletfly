 <style>
        .tools-wrap {
            box-sizing: border-box;
            background: #F6F4EF;
            padding: 84px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .tools-wrap * {
            box-sizing: border-box;
        }

        .tools-head {
            text-align: center;
            max-width: 560px;
            margin: 0 auto 40px;
        }

        .tools-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(24px, 3vw, 32px);
            color: #14172B;
            margin: 0 0 10px;
        }

        .tools-desc {
            font-size: 15px;
            color: #5B5F73;
            margin: 0;
        }

        .tools-grid {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }

        .tools-chip {
            background: #FFFFFF;
            border: 1px solid #E4E0D6;
            border-radius: 999px;
            padding: 10px 20px;
            /* font-family: 'JetBrains Mono', monospace; */
            font-size: 13.5px;
            color: #14172B;
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.4s ease, transform 0.4s ease, border-color 0.2s ease;
        }

        .tools-chip.tools-in {
            opacity: 1;
            transform: scale(1);
        }

        .tools-chip:hover {
            border-color: #35D0BA;
        }
    </style>

    <section class="tools-wrap">
        <div class="tools-head">
            <h2 class="tools-title">Tools &amp; technologies you'll use</h2>
            <p class="tools-desc">The same stack analysts and ML engineers use in production, not toy substitutes.</p>
        </div>
        <div class="tools-grid" id="tools-target">
            <span class="tools-chip">Python</span>
            <span class="tools-chip">Pandas</span>
            <span class="tools-chip">NumPy</span>
            <span class="tools-chip">SQL</span>
            <span class="tools-chip">Power BI</span>
            <span class="tools-chip">Tableau</span>
            <span class="tools-chip">Scikit-learn</span>
            <span class="tools-chip">TensorFlow</span>
            <span class="tools-chip">Matplotlib</span>
            <span class="tools-chip">Seaborn</span>
            <span class="tools-chip">Jupyter</span>
            <span class="tools-chip">Git</span>
        </div>
    </section>

    <script>
        (function() {
            var chips = document.querySelectorAll('#tools-target .tools-chip');
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry, i) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            entry.target.classList.add('tools-in');
                        }, i * 45);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            chips.forEach(function(c) {
                obs.observe(c);
            });
        })();
    </script>
