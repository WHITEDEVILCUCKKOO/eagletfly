
<style>
    .why-wrap {
        box-sizing: border-box;
        background: #FFFFFF;
        padding: 96px 8vw;
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
        font-weight: 600;
        font-size: clamp(26px, 3.2vw, 36px);
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
        max-width: 900px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
    }

    .why-card {
        border: 1px solid #EAE7DE;
        border-radius: 12px;
        padding: 28px 24px;
        opacity: 0;
        transform: translateY(16px);
        transition: opacity 0.55s ease,
                    transform 0.55s ease,
                    border-color 0.25s ease;
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
        flex-shrink: 0;
        border-radius: 9px;
        background: #E9FBF8;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
    }

    .why-card-title {
        font-weight: 600;
        font-size: 17px;
        color: #14172B;
        line-height: 1.5;
        margin: 0 0 8px;
    }

    .why-card-desc {
        font-size: 14px;
        color: #767B94;
        line-height: 1.7;
        margin: 0;
        overflow-wrap: anywhere;
    }

    @media (max-width: 880px) {
        .why-wrap {
            padding: 72px 5vw;
        }

        .why-grid {
            gap: 18px;
        }

        .why-card {
            padding: 24px 20px;
        }
    }

    @media (max-width: 560px) {
        .why-wrap {
            padding: 52px 20px;
        }

        .why-head {
            margin-bottom: 32px;
        }

        .why-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .why-card {
            padding: 24px 20px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .why-card {
            opacity: 1;
            transform: none;
            transition: none;
        }
    }
</style>

<section class="why-wrap">
    <div class="why-head">
        <h2 class="why-title">Strategic Career Advantages</h2>
    </div>

    <div class="why-grid" id="why-target">

        <!-- Card 1 -->
        <div class="why-card">
            <div class="why-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M4 19h16M6 15l4-5 3 3 5-7"
                          stroke="#0E9C8A"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>

            <p class="why-card-title">Surging Market Demand</p>

            <p class="why-card-desc">Top organizations from various industries are seeking qualified data scientists, machine learning engineers, and data engineers for general business intelligence and predictive ability work.</p>
        </div>

        <!-- Card 2 -->
        <div class="why-card">
            <div class="why-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="8" r="4"
                            stroke="#0E9C8A"
                            stroke-width="2"/>
                    <path d="M4 20c0-4 4-6 8-6s8 2 8 6"
                          stroke="#0E9C8A"
                          stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </div>

            <p class="why-card-title">Excellent Salary Packages</p>

            <p class="why-card-desc">Data scientists get the highest salaries upon graduation and benefit from rapid career advancement owing to their specialization.</p>
        </div>

        <!-- Card 3 -->
        <div class="why-card">
            <div class="why-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M12 3v6l4 2"
                          stroke="#0E9C8A"
                          stroke-width="2"
                          stroke-linecap="round"/>
                    <circle cx="12" cy="12" r="9"
                            stroke="#0E9C8A"
                            stroke-width="2"/>
                </svg>
            </div>

            <p class="why-card-title">Diverse Career Options</p>

            <p class="why-card-desc">Acquire knowledge of the technical stack applicable in several industries, such as healthcare, e-commerce, banking, supply chain, and retail.</p>
        </div>

        <!-- Card 4 -->
        <div class="why-card">
            <div class="why-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m5-4a4 4 0 100-8 4 4 0 000 8zm6 0a4 4 0 10-4-4"
                          stroke="#0E9C8A"
                          stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
            </div>

            <p class="why-card-title">Active Professional Network</p>

            <p class="why-card-desc">Make friends with fellow students from the end of the Central Delhi while meeting industry experts and mentors.</p>
        </div>

    </div>
</section>

<script>
    (function () {
        var cards = document.querySelectorAll(
            '#why-target .why-card'
        );

        if (
            !('IntersectionObserver' in window) ||
            window.matchMedia('(prefers-reduced-motion: reduce)').matches
        ) {
            cards.forEach(function (card) {
                card.classList.add('why-in');
            });
            return;
        }

        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var index = Array.prototype.indexOf.call(
                        cards,
                        entry.target
                    );

                    setTimeout(function () {
                        entry.target.classList.add('why-in');
                    }, index * 70);

                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        cards.forEach(function (card) {
            obs.observe(card);
        });
    })();
</script>
