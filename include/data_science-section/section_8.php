
<style>
    .dark-wrap {
        box-sizing: border-box;
        background: #0E1330;
        padding: 96px 8vw;
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
            <h2 class="dark-title">
                High-Demand Job Roles &amp; Salary Scope in Delhi NCR
            </h2>

            <p class="dark-desc">
                Finishing a recognized Data Science Course in Delhi leads to several distinct career choices in the fields of technology services, business firms, and product startups:
            </p>
        </div>

        <ul class="dark-list" id="dark-target">

            <li class="dark-item">
                <span class="dark-check">✓</span>
                <span class="dark-item-text">
                    <strong>Data Scientist:</strong> Develops predictive models, statistical methods, and data processing systems for solving complex problems in business.
                </span>
            </li>

            <li class="dark-item">
                <span class="dark-check">✓</span>
                <span class="dark-item-text">
                    <strong>Machine Learning Engineer:</strong> Works on creating, scaling, and implementing machine learning systems in production environments.
                </span>
            </li>

            <li class="dark-item">
                <span class="dark-check">✓</span>
                <span class="dark-item-text">
                    <strong>AI / NLP Specialist:</strong> Designs systems for natural speech processing, voice recognition systems, and Generative AI systems.
                </span>
            </li>

            <li class="dark-item">
                <span class="dark-check">✓</span>
                <span class="dark-item-text">
                    <strong>Data Analyst / BI Developer:</strong> Modifies raw data into ready-to-use visual information, dashboards, and reports for management.
                </span>
            </li>

            <li class="dark-item">
                <span class="dark-check">✓</span>
                <span class="dark-item-text">
                    <strong>MLOps Engineer:</strong> Is engaged in the management of automated retraining systems and the deployment of machine-learning systems.
                </span>
            </li>

        </ul>

    </div>
</section>

<script>
    (function() {
        var items = document.querySelectorAll('#dark-target .dark-item');

        var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var index = Array.prototype.indexOf.call(items, entry.target);

                    setTimeout(function() {
                        entry.target.classList.add('dark-in');
                    }, index * 80);

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
