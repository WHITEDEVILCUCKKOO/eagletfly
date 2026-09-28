<!-- AI Course Section 4: Complete Core Curriculum Overview (Redesigned & Clean) -->
<style>
    .aic-sec4-wrapper {
        background-color: #ffffff;
        color: #1e293b;
        line-height: 1.6;
        padding: 90px 20px;
        font-family: inherit;
        overflow: hidden;
        border-top: 1px solid #e2e8f0;
    }

    .aic-sec4-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .aic-sec4-heading-wrap {
        text-align: center;
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

    .aic-sec4-heading-wrap.aic-sec4-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec4-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
    }

    .aic-sec4-title-line {
        width: 80px;
        height: 4px;
        background: #6366f1;
        margin: 0 auto 20px auto;
        border-radius: 2px;
    }

    .aic-sec4-subtitle {
        color: #475569;
        font-size: 1.1rem;
        max-width: 850px;
        margin: 0 auto !important;
        text-align: center;
    }

    /* 2x2 Grid Layout with comfortable gap */
    .aic-sec4-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 35px;
    }

    .aic-sec4-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        opacity: 0;
        transform: translateY(30px);
        transition: transform 0.5s ease, opacity 0.5s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .aic-sec4-card.aic-sec4-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .aic-sec4-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.07);
        border-color: #cbd5e1;
    }

    .aic-sec4-card:nth-child(1) { transition-delay: 0.1s; }
    .aic-sec4-card:nth-child(2) { transition-delay: 0.2s; }
    .aic-sec4-card:nth-child(3) { transition-delay: 0.3s; }
    .aic-sec4-card:nth-child(4) { transition-delay: 0.4s; }

    /* Fixed Module Title Styling to Prevent Unwanted Breaking */
    .aic-sec4-module-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 12px;
        padding-bottom: 15px;
        border-bottom: 2px solid #e2e8f0;
        display: flex;
        align-items: baseline;
        gap: 8px;
        flex-wrap: nowrap;
    }

    .aic-sec4-module-tag {
        background: #e0e7ff;
        color: #4338ca;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        white-space: nowrap;
    }

    .aic-sec4-module-intro {
        color: #64748b;
        font-size: 0.95rem;
        margin-bottom: 20px;
        line-height: 1.5;

        padding: 10px 5px !important; 
    }

    .aic-sec4-list {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .aic-sec4-list li {
        position: relative;
        padding-left: 20px;
        margin-bottom: 16px;
        color: #334155;
        font-size: 0.96rem;
    }

    .aic-sec4-list li:last-child {
        margin-bottom: 0;
    }

    .aic-sec4-list li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 8px;
        width: 6px;
        height: 6px;
        background-color: #6366f1;
        border-radius: 50%;
    }

    .aic-sec4-list li strong {
        color: #0f172a;
        text-decoration:underline;
    }

    /* Responsive Design */
    @media (max-width: 968px) {
        .aic-sec4-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .aic-sec4-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 480px) {
        .aic-sec4-wrapper {
            padding: 50px 15px;
        }

        .aic-sec4-title {
            font-size: 1.6rem;
        }

        .aic-sec4-card {
            padding: 24px;
        }

        .aic-sec4-module-title {
            font-size: 1.15rem;
            flex-direction: column;
            align-items: flex-start;
            gap: 6px;
        }
    }
</style>

<section class="aic-sec4-wrapper">
    <div class="aic-sec4-container">
        <!-- Section Header -->
        <div class="aic-sec4-heading-wrap" id="aicSec4Header">
            <h2 class="aic-sec4-title">Complete Core Curriculum Overview</h2>
            <div class="aic-sec4-title-line"></div>
            <p class="aic-sec4-subtitle">Our curriculum is structured to build your expertise progressively, taking you from foundational programming principles to advanced deep learning architectures and generative deployment.</p>
        </div>

        <!-- Modules Grid Layout -->
        <div class="aic-sec4-grid">
            <!-- Module 1 -->
            <div class="aic-sec4-card aic-sec4-animate">
                <div class="aic-sec4-module-title">
                    <span class="aic-sec4-module-tag">Module 1</span>
                    Foundational Programming & Math
                </div>
                <p class="aic-sec4-module-intro">Building robust AI models requires a strong foundation in programming and core mathematical principles.</p>
                <ul class="aic-sec4-list">
                    <li><strong>Python for AI & Data Science:</strong> Understanding Python syntax, object-oriented programming, file handling, and libraries like NumPy, Pandas, and Matplotlib.</li>
                    <li><strong>Linear Algebra & Vector Calculus:</strong> Covers matrices, vectors, eigenvalues, matrix factorization, and gradient calculus used in model optimization.</li>
                    <li><strong>Probability & Applied Statistics:</strong> Based on probability distributions, Bayes' Theorem, hypothesis testing, inferential statistics, and random variables.</li>
                    <li><strong>Exploratory Data Analysis:</strong> Involves data cleaning, missing value imputation, outlier detection, and feature visualization processes.</li>
                </ul>
            </div>

            <!-- Module 2 -->
            <div class="aic-sec4-card aic-sec4-animate">
                <div class="aic-sec4-module-title">
                    <span class="aic-sec4-module-tag">Module 2</span>
                    Applied Machine Learning
                </div>
                <p class="aic-sec4-module-intro">Machine learning forms the predictive backbone of artificial intelligence applications.</p>
                <ul class="aic-sec4-list">
                    <li><strong>Supervised Learning:</strong> Become an expert on linear regression, logistic regression, decision trees, random forests, SVM, and KNN.</li>
                    <li><strong>Unsupervised Learning:</strong> Understand clustering strategies (K-Means, Hierarchical, DBSCAN) and dimensionality reduction (PCA, t-SNE).</li>
                    <li><strong>Ensemble Methods & Optimization:</strong> Use state-of-the-art boosting and bagging strategies like XGBoost, LightGBM, and AdaBoost.</li>
                    <li><strong>Model Evaluation & Tuning:</strong> Learn hyperparameter tuning (GridSearchCV, RandomSearch), cross-validation, precision, recall, and ROC-AUC graphs.</li>
                </ul>
            </div>

            <!-- Module 3 -->
            <div class="aic-sec4-card aic-sec4-animate">
                <div class="aic-sec4-module-title">
                    <span class="aic-sec4-module-tag">Module 3</span>
                    Deep Learning & Vision
                </div>
                <p class="aic-sec4-module-intro">Dive into complex neural network architectures designed to process unstructured visual and sequential data.</p>
                <ul class="aic-sec4-list">
                    <li><strong>Artificial Neural Networks (ANN):</strong> Learn feedforward networks, activation functions (ReLU, Sigmoid, Softmax), backpropagation, and loss functions.</li>
                    <li><strong>Convolutional Neural Networks (CNN):</strong> Construct visual recognition models using ResNet, VGG, and YOLO for object recognition and classification.</li>
                    <li><strong>Computer Vision with OpenCV:</strong> Work with images, perform edge detection, extract features, and handle live video feeds.</li>
                    <li><strong>Framework Familiarity:</strong> Get hands-on experience with TensorFlow, Keras, and PyTorch.</li>
                </ul>
            </div>

            <!-- Module 4 -->
            <div class="aic-sec4-card aic-sec4-animate">
                <div class="aic-sec4-module-title">
                    <span class="aic-sec4-module-tag">Module 4</span>
                    NLP & Generative AI
                </div>
                <p class="aic-sec4-module-intro">Learn how machines analyze, understand, and generate human language.</p>
                <ul class="aic-sec4-list">
                    <li><strong>Text Processing & Vectorization:</strong> Tokenizing, lemmatizing, removing stop-words, TF-IDF, and Word2Vec embeddings.</li>
                    <li><strong>RNN & LSTM:</strong> Create sequential models for time series forecasting, text generation, and language translation.</li>
                    <li><strong>Transformer Architectures & Attention:</strong> Understand self-attention mechanisms, BERT, GPT, and modern transformers.</li>
                    <li><strong>Generative AI & LLM Integration:</strong> Fine-tune LLMs, prompt engineering, RAG, and build AI agents with LangChain and Hugging Face.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    // Scroll Animation Script for Section 4
    document.addEventListener("DOMContentLoaded", function () {
        const aicSec4Options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const aicSec4Callback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aic-sec4-visible');
                }
            });
        };

        const aicSec4Observer = new IntersectionObserver(aicSec4Callback, aicSec4Options);

        const aicSec4Header = document.getElementById('aicSec4Header');
        if (aicSec4Header) {
            aicSec4Observer.observe(aicSec4Header);
        }

        const aicSec4Cards = document.querySelectorAll('.aic-sec4-animate');
        aicSec4Cards.forEach(card => {
            aicSec4Observer.observe(card);
        });
    });
</script>