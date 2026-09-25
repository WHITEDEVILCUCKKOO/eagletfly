<section class="klr-ks-sec-wrap">
    <div class="klr-ks-container">
        <h2 class="klr-ks-main-heading">Key Skills</h2>

        <div class="klr-ks-grid">
            <!-- Card 1 -->
            <div class="klr-ks-card klr-ks-blue">
                <span class="klr-ks-card-text">Understand the foundations of AI and Generative AI</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 2 -->
            <div class="klr-ks-card klr-ks-yellow">
                <span class="klr-ks-card-text">Master prompt engineering and prompting frameworks for real-world scenarios</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 3 -->
            <div class="klr-ks-card klr-ks-green">
                <span class="klr-ks-card-text">Automate workflows with no-code/low-code AI tools</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 4 -->
            <div class="klr-ks-card klr-ks-blue">
                <span class="klr-ks-card-text">Design and deploy AI Agents for business and personal productivity</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 5 -->
            <div class="klr-ks-card klr-ks-yellow">
                <span class="klr-ks-card-text">Understand core AI & GenAI fundamentals</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 6 -->
            <div class="klr-ks-card klr-ks-green">
                <span class="klr-ks-card-text">Build LLM-powered apps with LangChain & Vector DBs</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 7 -->
            <div class="klr-ks-card klr-ks-blue">
                <span class="klr-ks-card-text">Design & deploy AI agents using Python frameworks</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 8 -->
            <div class="klr-ks-card klr-ks-yellow">
                <span class="klr-ks-card-text">Work with practical enterprise use cases in automation</span>
                <div class="klr-ks-corner"></div>
            </div>

            <!-- Card 9 -->
            <div class="klr-ks-card klr-ks-green">
                <span class="klr-ks-card-text">Apply AI responsibly with awareness of ethical, bias, and governance considerations</span>
                <div class="klr-ks-corner"></div>
            </div>
        </div>
    </div>
</section>

<style>
.klr-ks-sec-wrap {
    background-color: #ffffff;
    padding: 50px 20px;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
    width: 100%;
}

.klr-ks-container {
    max-width: 1300px;
    margin: 0 auto;
    box-sizing: border-box;
}

.klr-ks-main-heading {
    font-size: 28px;
    font-weight: 800;
    color: #0b1c3f;
    margin: 0 0 35px 0;
    letter-spacing: -0.5px;
}

.klr-ks-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

.klr-ks-card {
    position: relative;
    border-radius: 8px;
    padding: 28px 24px;
    display: flex;
    align-items: center;
    overflow: hidden;
    min-height: 95px;
    box-sizing: border-box;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.klr-ks-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
}

/* Card Pastel Background Variations */
.klr-ks-blue {
    background-color: #f0f8ff;
}

.klr-ks-yellow {
    background-color: #fffde6;
}

.klr-ks-green {
    background-color: #e6f9f2;
}

.klr-ks-card-text {
    font-size: 14px;
    font-weight: 600;
    color: #222222;
    line-height: 1.5;
    z-index: 2;
    padding-right: 20px;
}

/* Bottom-Right Corner Fold Effect */
.klr-ks-corner {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 0 32px 32px;
    z-index: 1;
}

.klr-ks-blue .klr-ks-corner {
    border-color: transparent transparent #0ea5e9 transparent;
}

.klr-ks-yellow .klr-ks-corner {
    border-color: transparent transparent #eab308 transparent;
}

.klr-ks-green .klr-ks-corner {
    border-color: transparent transparent #10b981 transparent;
}

/* Responsive Breakpoints */
@media (max-width: 1024px) {
    .klr-ks-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
}

@media (max-width: 650px) {
    .klr-ks-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    .klr-ks-main-heading {
        font-size: 24px;
        margin-bottom: 25px;
    }
}
</style>
