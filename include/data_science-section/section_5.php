<style>
        .path-wrap {
            box-sizing: border-box;
            background: #FFFFFF;
            padding: 96px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .path-wrap * {
            box-sizing: border-box;
        }

        .path-head {
            max-width: 640px;
            margin: 0 auto 56px;
        }

        .path-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(24px, 3vw, 32px);
            color: #14172B;
            margin: 0 0 10px;
        }

        .path-desc {
            font-size: 15px;
            color: #5B5F73;
            margin: 0;
            line-height: 1.6;
        }

        .path-track {
            max-width: 760px;
            margin: 0 auto;
            position: relative;
            padding-left: 44px;
        }

        .path-track::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 6px;
            bottom: 6px;
            width: 2px;
            background: #E4E0D6;
        }

        .path-step {
            position: relative;
            padding-bottom: 40px;
            opacity: 0;
            transform: translateX(-14px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .path-step.path-in {
            opacity: 1;
            transform: translateX(0);
        }

        .path-step:last-child {
            padding-bottom: 0;
        }

        .path-dot {
            position: absolute;
            left: -44px;
            top: 2px;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #14172B;
            color: #35D0BA;
            /* font-family: 'JetBrains Mono', monospace; */
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .path-step-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: 17px;
            color: #14172B;
            margin: 0 0 6px;
        }

        .path-step-desc {
            font-size: 14px;
            color: #767B94;
            margin: 0;
            line-height: 1.6;
        }
    </style>

    <section class="path-wrap">
        <div class="path-head">
            <h2 class="path-title">Your path to becoming a certified data scientist</h2>
            <p class="path-desc">The program moves in one direction — from fundamentals to a certification you can put on your resume.</p>
        </div>
        <div class="path-track" id="path-target">
            <div class="path-step">
                <div class="path-dot">01</div>
                <p class="path-step-title">Foundations of data science</p>
                <p class="path-step-desc">Python, statistics and the mental models behind every later module.</p>
            </div>
            <div class="path-step">
                <div class="path-dot">02</div>
                <p class="path-step-title">Data analysis &amp; visualization</p>
                <p class="path-step-desc">Clean, explore and present data so it's ready for modelling.</p>
            </div>
            <div class="path-step">
                <div class="path-dot">03</div>
                <p class="path-step-title">Machine learning essentials</p>
                <p class="path-step-desc">Build, tune and evaluate your first predictive models.</p>
            </div>
            <div class="path-step">
                <div class="path-dot">04</div>
                <p class="path-step-title">Real-world projects</p>
                <p class="path-step-desc">Apply everything on datasets pulled from live business problems.</p>
            </div>
            <div class="path-step">
                <div class="path-dot">05</div>
                <p class="path-step-title">Job readiness &amp; placement support</p>
                <p class="path-step-desc">Resume reviews, mock interviews and introductions to hiring partners.</p>
            </div>
            <div class="path-step">
                <div class="path-dot">06</div>
                <p class="path-step-title">Certified data scientist</p>
                <p class="path-step-desc">Graduate with a portfolio, a certificate and a plan for your first role.</p>
            </div>
        </div>
    </section>

    <script>
        (function() {
            var steps = document.querySelectorAll('#path-target .path-step');
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry, i) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            entry.target.classList.add('path-in');
                        }, i * 90);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.3
            });
            steps.forEach(function(s) {
                obs.observe(s);
            });
        })();
    </script>
