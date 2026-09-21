<style>
        .why-wrap {
            box-sizing: border-box;
            background: #FFFFFF;
            padding: 96px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .why-wrap * {
            box-sizing: border-box;
        }

        .why-head {
            max-width: 640px;
            margin: 0 auto 52px;
            text-align: left;
        }

        .why-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(26px, 3vw, 36px);
            color: #14172B;
            margin: 0 0 12px;
        }

        .why-desc {
            font-size: 15.5px;
            color: #5B5F73;
            line-height: 1.7;
            margin: 0;
        }

        .why-grid {
            max-width: 1160px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .why-card {
            border: 1px solid #EAE7DE;
            border-radius: 12px;
            padding: 28px 24px;
            opacity: 0;
            transform: translateY(16px);
            transition: opacity 0.55s ease, transform 0.55s ease, border-color 0.25s ease;
        }

        .why-card.why-in {
            opacity: 1;
            transform: translateY(0);
        }

        .why-card:hover {
            border-color: #35D0BA;
        }

        .why-icon {
            width: 40px;
            height: 40px;
            border-radius: 9px;
            background: #E9FBF8;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
        }

        .why-card-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: 17px;
            color: #14172B;
            margin: 0 0 8px;
        }

        .why-card-desc {
            font-size: 14px;
            color: #767B94;
            line-height: 1.6;
            margin: 0;
        }

        @media (max-width: 880px) {
            .why-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 560px) {
            .why-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="why-wrap">
        <div class="why-head">
            <h2 class="why-title">Built around how you'll actually work with data</h2>
            <p class="why-desc">Every part of the program is designed to close the gap between knowing a concept and shipping it in production.</p>
        </div>
        <div class="why-grid" id="why-target">
            <div class="why-card">
                <div class="why-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M4 19h16M6 15l4-5 3 3 5-7" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <p class="why-card-title">Flexible batch</p>
                <p class="why-card-desc">Work on real, messy datasets from day one instead of pre-cleaned classroom examples.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="8" r="4" stroke="#0E9C8A" stroke-width="2" />
                        <path d="M4 20c0-4 4-6 8-6s8 2 8 6" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" />
                    </svg></div>
                <p class="why-card-title">100% Internship</p>
                <p class="why-card-desc">A dedicated mentor reviews your notebooks and code, not just your final grade.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 3v6l4 2" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" />
                        <circle cx="12" cy="12" r="9" stroke="#0E9C8A" stroke-width="2" />
                    </svg></div>
                <p class="why-card-title">Resume building session</p>
                <p class="why-card-desc">Taught by practitioners currently building analytics and ML systems, not full-time trainers only.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M5 12h14M5 6h14M5 18h9" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" />
                    </svg></div>
                <p class="why-card-title">Hands on training</p>
                <p class="why-card-desc">Weekday, weekend and online-live formats so the course fits around your job or college.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m5-4a4 4 0 100-8 4 4 0 000 8zm6 0a4 4 0 10-4-4" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" />
                    </svg></div>
                <p class="why-card-title">Live projects</p>
                <p class="why-card-desc">Capped batches mean every question gets answered, not lost in a crowd of hundreds.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2l3 6 7 1-5 5 1 7-6-3-6 3 1-7-5-5 7-1z" stroke="#0E9C8A" stroke-width="2" stroke-linejoin="round" />
                    </svg></div>
                <p class="why-card-title">Specialization tracks</p>
                <p class="why-card-desc">Go deeper into NLP, computer vision or analytics once the core curriculum is done.</p>
            </div>
        </div>
    </section>

    <script>
        (function() {
            var cards = document.querySelectorAll('#why-target .why-card');
            var obs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry, i) {
                    if (entry.isIntersecting) {
                        setTimeout(function() {
                            entry.target.classList.add('why-in');
                        }, i * 70);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });
            cards.forEach(function(c) {
                obs.observe(c);
            });
        })();
    </script>
