
<style>
    .curr-wrap {
        box-sizing: border-box;
        background: #F6F4EF;
        padding: 96px 8vw;
    }

    .curr-wrap * {
        box-sizing: border-box;
    }

    .curr-inner {
        max-width: 860px;
        margin: 0 auto;
        width: 100%;
    }

    .curr-topline {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 20px;
        margin-bottom: 24px;
        flex-wrap: wrap;
    }

    .curr-title {
        font-weight: 600;
        font-size: clamp(26px, 3.2vw, 36px);
        line-height: 1.35;
        color: #14172B;
        margin: 0;
    }

    .curr-count {
        font-size: 13px;
        color: #767B94;
    }

    .curr-intro {
        font-size: 15px;
        color: #5B5F73;
        line-height: 1.8;
        margin: 0 0 34px;
    }

    .curr-dl {
        border: none;
        background: #14172B;
        color: #F6F4EF;
        font-weight: 600;
        font-size: 14px;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
        flex-shrink: 0;
    }

    .curr-dl:hover {
        background: #292D45;
    }

    .curr-item {
        border-bottom: 1px solid #E4E0D6;
    }

    .curr-item:first-child {
        border-top: 1px solid #E4E0D6;
    }

    .curr-head {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 22px 4px;
        cursor: pointer;
        background: none;
        border: none;
        width: 100%;
        text-align: left;
        font-family: inherit;
    }

    .curr-idx {
        font-size: 13px;
        color: #35B7A4;
        min-width: 26px;
        flex-shrink: 0;
    }

    .curr-name {
        flex: 1;
        font-size: 16px;
        font-weight: 600;
        line-height: 1.5;
        color: #14172B;
        overflow-wrap: anywhere;
    }

    .curr-plus {
        font-size: 20px;
        color: #767B94;
        transition: transform 0.3s ease;
        flex-shrink: 0;
    }

    .curr-item.curr-open .curr-plus {
        transform: rotate(45deg);
    }

    .curr-body {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows 0.35s ease;
    }

    .curr-item.curr-open .curr-body {
        grid-template-rows: 1fr;
    }

    .curr-body-clip {
        min-height: 0;
        overflow: hidden;
    }

    .curr-body-inner {
        padding: 0 4px 28px 48px;
        font-size: 14.5px;
        color: #5B5F73;
        line-height: 1.8;
        overflow-wrap: anywhere;
    }

    .curr-body-inner p {
        margin: 0 0 16px;
    }

    .curr-body-inner p:last-child {
        margin-bottom: 0;
    }

    .curr-body-inner ul {
        margin: 12px 0 0;
        padding-left: 22px;
    }

    .curr-body-inner li {
        margin-bottom: 12px;
        padding-left: 3px;
    }

    .curr-body-inner li:last-child {
        margin-bottom: 0;
    }

    .curr-body-inner h3 {
        color: #14172B;
        font-size: 17px;
        line-height: 1.5;
        font-weight: 600;
        margin: 0 0 14px;
    }

    @media (max-width: 880px) {
        .curr-wrap {
            padding: 72px 5vw;
        }

        .curr-topline {
            align-items: flex-start;
        }
    }

    @media (max-width: 560px) {
        .curr-wrap {
            padding: 52px 20px;
        }

        .curr-topline {
            flex-direction: column;
            align-items: stretch;
            gap: 16px;
            margin-bottom: 20px;
        }

        .curr-title {
            font-size: clamp(23px, 6vw, 29px);
        }

        .curr-dl {
            width: 100%;
            padding: 13px 16px;
        }

        .curr-intro {
            font-size: 14px;
            margin-bottom: 26px;
        }

        .curr-head {
            gap: 12px;
            padding: 19px 2px;
        }

        .curr-idx {
            min-width: 24px;
        }

        .curr-name {
            font-size: 14.5px;
        }

        .curr-body-inner {
            padding: 0 2px 24px 36px;
            font-size: 14px;
            line-height: 1.75;
        }

        .curr-body-inner h3 {
            font-size: 16px;
        }

        .curr-body-inner ul {
            padding-left: 19px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .curr-body,
        .curr-plus {
            transition: none;
        }
    }
</style>

<section class="curr-wrap">
    <div class="curr-inner">

        <div class="curr-topline">
            <h2 class="curr-title">Complete Core Curriculum Overview</h2>

            <button class="curr-dl" type="button"
                    onclick="window.print()">
                Download full syllabus
            </button>
        </div>

        <p class="curr-intro">Our curriculum takes you step-by-step through a structured 6-phase journey, taking you from foundational mathematics and Python programming to deep learning architectures, Large Language Models (LLMs), and cloud deployment.</p>

        <div id="curr-target">

            <!-- Module 1 -->
            <div class="curr-item ">
                <button class="curr-head" type="button"
                        aria-expanded="true">
                    <span class="curr-idx">01</span>
                    <span class="curr-name">Module 1: Python Programming, Data Wrangling &amp; Mathematical Essentials</span>
                    <span class="curr-plus" aria-hidden="true">+</span>
                </button>

                <div class="curr-body">
                    <div class="curr-body-clip">
                        <div class="curr-body-inner">

                            <!-- <h3>Module 1: Python Programming, Data Wrangling &amp; Mathematical Essentials</h3> -->

                            <p>Build a good mathematical understanding as well as a thorough understanding of the top programming language used in data science.</p>

                            <ul>
                                <li>Python Basics: Understand variable handling, data structures such as lists, tuples, dictionaries, sets, functions, error handling, and object-oriented programming.</li>

                                <li>Numerical Computing using NumPy: Working with multi-dimensional arrays, vectorization, mathematical broadcasting, operations of linear algebra, and matrix decomposition.</li>

                                <li>Data Manipulation using Pandas: Understanding DataFrames, Series, importing datasets (CSV, JSON, Excel, SQL), data cleaning and filtering, handling missing data, merging, and grouping.</li>

                                <li>Linear Algebra and Vector Calculus: Working with vectors, matrices, finding eigen values and eigen vectors, matrix factorization and partial derivatives used in optimization algorithms.</li>

                                <li>Probability and Statistics: Understanding probability distribution, Bayes' theorem, descriptive statistics, measures of central tendency, variance, standard deviation, hypothesis testing, Z test, T test, ANOVA, and chi square test.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 2 -->
            <div class="curr-item">
                <button class="curr-head" type="button"
                        aria-expanded="false">
                    <span class="curr-idx">02</span>
                    <span class="curr-name">Module 2: Exploratory Data Analysis (EDA) &amp; Business Intelligence</span>
                    <span class="curr-plus" aria-hidden="true">+</span>
                </button>

                <div class="curr-body">
                    <div class="curr-body-clip">
                        <div class="curr-body-inner">

                            <!-- <h3>Module 2: Exploratory Data Analysis (EDA) &amp; Business Intelligence</h3> -->

                            <p>Gain the skills necessary to spot trends, correlations, and anomalies in raw data utilizing statistical graphics and Business Intelligence dashboards.</p>

                            <ul>
                                <li>Visualizing Data Using Python: Create static and dynamic visuals using Matplotlib, Seaborn, and Plotly.</li>

                                <li>Exploratory Data Analysis Techniques: Performing feature engineering, outlier analysis, distribution analysis, correlation heatmaps, and dimensionality reduction.</li>

                                <li>SQL for Business Analytics: Learn how to design relational databases, formulate complex SQL queries with JOINs and subqueries, use Common Table Expressions (CTEs), and apply window functions (ROW_NUMBER, RANK, DENSE_RANK).</li>

                                <li>Interactive Business Intelligence Dashboards: Build multi-page interactive dashboards, KPI dashboards, and drill-down dashboards with Microsoft Power BI or Tableau.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 3 -->
            <div class="curr-item">
                <button class="curr-head" type="button"
                        aria-expanded="false">
                    <span class="curr-idx">03</span>
                    <span class="curr-name">Module 3: Machine Learning Algorithms &amp; Predictive Modeling</span>
                    <span class="curr-plus" aria-hidden="true">+</span>
                </button>

                <div class="curr-body">
                    <div class="curr-body-clip">
                        <div class="curr-body-inner">

                            <!-- <h3>Module 3: Machine Learning Algorithms &amp; Predictive Modeling</h3> -->

                            <p>He has expertise in both supervised and unsupervised learning algorithms that can help in achieving accurate real-world business predictions.</p>

                            <ul>
                                <li>For supervised learning, regression techniques being used include simple linear regression, multiple linear regression, ridge/lasso regression, as well as the evaluation of metrics, including MSE, RMSE, MAE, and R-squared.</li>

                                <li>For supervised classification, techniques include logistic regression, decision trees, SVMs, KNNs, as well as Naive Bayes classifiers.</li>

                                <li>As to model evaluation metrics, precision, recall, F1-score, ROC curves, and confusion matrices would be employed.</li>

                                <li>Different ensemble techniques being utilized are bagging, random forests, gradient boosting machines, XGBoost, LightGBM, and CatBoost.</li>

                                <li>Some of the unsupervised learning options include the K-means clustering, hierarchical clustering, DBSCAN clustering, and PCA for dimensionality reduction.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 4 -->
            <div class="curr-item">
                <button class="curr-head" type="button"
                        aria-expanded="false">
                    <span class="curr-idx">04</span>
                    <span class="curr-name">Module 4: Deep Learning, Computer Vision &amp; Neural Networks</span>
                    <span class="curr-plus" aria-hidden="true">+</span>
                </button>

                <div class="curr-body">
                    <div class="curr-body-clip">
                        <div class="curr-body-inner">

                            <!-- <h3>Module 4: Deep Learning, Computer Vision &amp; Neural Networks</h3> -->

                            <p>Explore neural network frameworks aimed at handling complicated unstructured datasets such as images, videos, and time-series signals.</p>

                            <ul>
                                <li>Artificial Neural Networks (ANNs): perceptrons, multilayer neural networks, activation functions (ReLU, Sigmoid, Softmax), forward and backward propagation, and loss function minimizers.</li>

                                <li>Deep Learning Frameworks: constructing, training, and validating deep learning systems using TensorFlow, Keras, and PyTorch.</li>

                                <li>Convolutional Neural Network (CNN): image processing, feature extraction, pooling, edge detection, and transfer learning models (ResNet, VGG, YOLO).</li>

                                <li>Recurrent Neural Networks (RNN/LSTM): processing sequential data, predicting time series, employing Long Short-Term Memory (LSTM), and utilizing Gated Recurrent Unit (GRU).</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 5 -->
            <div class="curr-item">
                <button class="curr-head" type="button"
                        aria-expanded="false">
                    <span class="curr-idx">05</span>
                    <span class="curr-name">Module 5: Natural Language Processing (NLP) &amp; Generative AI</span>
                    <span class="curr-plus" aria-hidden="true">+</span>
                </button>

                <div class="curr-body">
                    <div class="curr-body-clip">
                        <div class="curr-body-inner">

                            <!-- <h3>Module 5: Natural Language Processing (NLP) &amp; Generative AI</h3> -->

                            <p>Learn how machines understand, interpret, and generate human language using modern Techniques in NLP and Generative AI Technologies.</p>

                            <ul>
                                <li>Preprocessing and Representation: Tokenization, lemmatization, removal of stop words, TF-IDF, Word2Vec, GloVe and FastText embeddings.</li>

                                <li>Transformer Structures: Self-attention processes, encoder-decoder architecture, BERT, GPT and modern transformer-based structures.</li>

                                <li>Generative AI as well as the LLM Ecosystem: prompt engineering, fine-tuning of language models, RAG, vector database structures, developing AI agents through LangChain and Hugging Face.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Module 6 -->
            <div class="curr-item">
                <button class="curr-head" type="button"
                        aria-expanded="false">
                    <span class="curr-idx">06</span>
                    <span class="curr-name">Module 6: MLOps, Model Deployment &amp; Cloud Architecture</span>
                    <span class="curr-plus" aria-hidden="true">+</span>
                </button>

                <div class="curr-body">
                    <div class="curr-body-clip">
                        <div class="curr-body-inner">

                            <!-- <h3>Module 6: MLOps, Model Deployment &amp; Cloud Architecture</h3> -->

                            <p>Discover how to use trained machine learning models and put them to practical use by developing APIs and monitoring their achievements.</p>

                            <ul>
                                <li>Machine Learning API Development: Create REST APIs with your models using Flask and FastAPI</li>

                                <li>Docker and Containerization: Build and run applications together with libraries and environment in lightweight containers.</li>

                                <li>Deployment on Cloud: Deploy containerized models for real use in AWS, Google Cloud, or Azure.</li>

                                <li>Basics of MLOps: Keep track of models using MLflow, deal with data drift, and apply CI/CD in ML models.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function () {
        var items = document.querySelectorAll(
            '#curr-target .curr-item'
        );

        items.forEach(function (item) {
            var head = item.querySelector('.curr-head');

            head.addEventListener('click', function () {
                var isOpen = item.classList.contains('curr-open');

                items.forEach(function (i) {
                    i.classList.remove('curr-open');
                    i.querySelector('.curr-head')
                        .setAttribute('aria-expanded', 'false');
                });

                if (!isOpen) {
                    item.classList.add('curr-open');
                    head.setAttribute('aria-expanded', 'true');
                }
            });
        });
    })();
</script>
