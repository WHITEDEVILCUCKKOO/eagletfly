<style>
    .ef-tech-wrap {
        box-sizing: border-box;
        background: #FFFFFF;
        padding: 96px 8vw;
    }



    .ef-tech-container {
        max-width: 1160px;
        margin: 0 auto;
    }

    /* Section Header */
    .ef-tech-head {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 56px;
        opacity: 0;
        transform: translateY(16px);
        transition: opacity 0.55s ease, transform 0.55s ease;
    }

    .ef-tech-head.ef-tc-in {
        opacity: 1;
        transform: translateY(0);
    }

    .ef-tech-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #E9FBF8;
        color: #0E9C8A;
        font-size: 12px;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 6px;
        margin-bottom: 16px;
        letter-spacing: 0.4px;
    }

    .ef-tech-title {
        font-weight: 600;
        font-size: clamp(26px, 3.2vw, 36px);
        color: #14172B;
        margin: 0 0 14px;
        line-height: 1.2;
    }

    .ef-tech-desc {
        font-size: 15.5px;
        color: #5B5F73;
        line-height: 1.7;
        margin: 0;
    }

    /* Tech Grid (3 Columns) */
    .ef-tech-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .ef-tc-card {
        background: #FAF9F5;
        border: 1px solid #EAE7DE;
        border-radius: 14px;
        padding: 26px 24px;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.55s ease, transform 0.55s ease, border-color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .ef-tc-card.ef-tc-in {
        opacity: 1;
        transform: translateY(0);
    }

    .ef-tc-card:hover {
        border-color: #35D0BA;
        background: #FFFFFF;
        box-shadow: 0 12px 30px rgba(14, 156, 138, 0.08);
        transform: translateY(-3px);
    }

    .ef-tc-cat-title {
        font-weight: 600;
        font-size: 17px;
        color: #14172B;
        margin: 0 0 16px;
        padding-bottom: 12px;
        border-bottom: 1px solid #EAE7DE;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

  
.ef-tc-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #0E9C8A;
    position: relative;
    flex-shrink: 0;
}

.ef-tc-dot::before,
.ef-tc-dot::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50%;
    background: #0e9c89a8;
    animation: efDotWave 1.8s ease-out infinite;
}

.ef-tc-dot::after {
    animation-delay: 0.9s;
}

@keyframes efDotWave {
    0% {
        transform: scale(1);
        opacity: 0.7;
    }

    100% {
        transform: scale(3.5);
        opacity: 0;
    }
}


    .ef-tc-items {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .ef-tc-pill {
        font-size: 13.5px;
        font-weight: 500;
        color: #5B5F73;
        background: #FFFFFF;
        border: 1px solid #EAE7DE;
        padding: 6px 12px;
        border-radius: 8px;
        transition: all 0.2s ease;
    }

    .ef-tc-card:hover .ef-tc-pill {
        color: #14172B;
        border-color: #35D0BA;
        background: #E9FBF8;
    }

    /* Responsive Breakpoints */
    @media (max-width: 980px) {
        .ef-tech-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .ef-tech-wrap {
            padding: 64px 5vw;
        }

        .ef-tech-grid {
            grid-template-columns: 1fr;
        }
    }

    .ef-tc-cat-title {
        padding: 10px !important;
        margin-bottom: 10px !important;
    }


    .big_small {
        animation: ani641an 1s infinite alternate;
        transition: .25s ease;
    }

    @keyframes ani641an {
        from {
            transform: scale(1);
            /* background: #a50005; */
        }
        
        to {
            transform: scale(1.5);
            /* background: #0E9C8A; */
        }
    }
</style>

<section class="ef-tech-wrap" id="ef-tech-section">
    <div class="ef-tech-container">

        <!-- Header -->
        <div class="ef-tech-head ef-tc-anim">
            <div class="ef-tech-tag">
                <!-- <svg width="14" height="14" viewBox="0 0 24 24" fill="none" class="big_small">
          <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#0E9C8A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> -->
                <span>EagletFly Solutions</span>
            </div>
            <h2 class="ef-tech-title">Essential Tools &amp; Technologies You Will Master</h2>
            <p class="ef-tech-desc">Our hands-on training ensures proficiency with the industry-standard software tools, libraries, and cloud platforms required by top technology teams:</p>
        </div>

        <!-- Tech Categories Grid -->
        <div class="ef-tech-grid" id="ef-tech-target">

            <!-- Category 1 -->
            <div class="ef-tc-card ef-tc-anim">
                <h3 class="ef-tc-cat-title">Programming &amp; IDES <span class="ef-tc-dot big_small"></span></h3>
                <div class="ef-tc-items">
                    <span class="ef-tc-pill">Python</span>
                    <span class="ef-tc-pill">SQL</span>
                    <span class="ef-tc-pill">Jupyter Notebooks</span>
                    <span class="ef-tc-pill">VS Code</span>
                    <span class="ef-tc-pill">Google Colab</span>
                </div>
            </div>

            <!-- Category 2 -->
            <div class="ef-tc-card ef-tc-anim">
                <h3 class="ef-tc-cat-title">Data Processing &amp; Analytics <span class="ef-tc-dot big_small"></span></h3>
                <div class="ef-tc-items">
                    <span class="ef-tc-pill">Pandas</span>
                    <span class="ef-tc-pill">NumPy</span>
                    <span class="ef-tc-pill">SciPy</span>
                    <span class="ef-tc-pill">MySQL</span>
                    <span class="ef-tc-pill">PostgreSQL</span>
                </div>
            </div>

            <!-- Category 3 -->
            <div class="ef-tc-card ef-tc-anim">
                <h3 class="ef-tc-cat-title">Data Visualization &amp; BI <span class="ef-tc-dot big_small"></span></h3>
                <div class="ef-tc-items">
                    <span class="ef-tc-pill">Matplotlib</span>
                    <span class="ef-tc-pill">Seaborn</span>
                    <span class="ef-tc-pill">Plotly</span>
                    <span class="ef-tc-pill">Microsoft Power BI</span>
                    <span class="ef-tc-pill">Tableau</span>
                </div>
            </div>

            <!-- Category 4 -->
            <div class="ef-tc-card ef-tc-anim">
                <h3 class="ef-tc-cat-title">Machine Learning Libraries <span class="ef-tc-dot big_small"></span></h3>
                <div class="ef-tc-items">
                    <span class="ef-tc-pill">Scikit-Learn</span>
                    <span class="ef-tc-pill">XGBoost</span>
                    <span class="ef-tc-pill">LightGBM</span>
                    <span class="ef-tc-pill">CatBoost</span>
                </div>
            </div>

            <!-- Category 5 -->
            <div class="ef-tc-card ef-tc-anim">
                <h3 class="ef-tc-cat-title">Deep Learning &amp; CV <span class="ef-tc-dot big_small"></span></h3>
                <div class="ef-tc-items">
                    <span class="ef-tc-pill">TensorFlow</span>
                    <span class="ef-tc-pill">Keras</span>
                    <span class="ef-tc-pill">PyTorch</span>
                    <span class="ef-tc-pill">OpenCV</span>
                </div>
            </div>

            <!-- Category 6 -->
            <div class="ef-tc-card ef-tc-anim">
                <h3 class="ef-tc-cat-title">NLP &amp; Generative AI Stack <span class="ef-tc-dot big_small"></span></h3>
                <div class="ef-tc-items">
                    <span class="ef-tc-pill">Hugging Face</span>
                    <span class="ef-tc-pill">NLTK</span>
                    <span class="ef-tc-pill">SpaCy</span>
                    <span class="ef-tc-pill">LangChain</span>
                    <span class="ef-tc-pill">LlamaIndex</span>
                    <span class="ef-tc-pill">OpenAI API</span>
                </div>
            </div>

        </div>

        <!-- Category 7 (Full width or centered row for MLOps) -->
        <div style="margin-top: 22px;">
            <div class="ef-tc-card ef-tc-anim" style="max-width: 100%;">
                <h3 class="ef-tc-cat-title">MLOps &amp; Deployment <span class="ef-tc-dot big_small"></span></h3>
                <div class="ef-tc-items">
                    <span class="ef-tc-pill">Flask</span>
                    <span class="ef-tc-pill">FastAPI</span>
                    <span class="ef-tc-pill">Docker</span>
                    <span class="ef-tc-pill">Git</span>
                    <span class="ef-tc-pill">GitHub</span>
                    <span class="ef-tc-pill">Pinecone</span>
                    <span class="ef-tc-pill">MLflow</span>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    (function() {
        var items = document.querySelectorAll('#ef-tech-section .ef-tc-anim');
        if (!items.length) return;

        var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry, i) {
                if (entry.isIntersecting) {
                    setTimeout(function() {
                        entry.target.classList.add('ef-tc-in');
                    }, i * 70);
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        items.forEach(function(c) {
            obs.observe(c);
        });
    })();
</script>