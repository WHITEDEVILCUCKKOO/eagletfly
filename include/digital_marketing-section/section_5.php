<!-- WINGZ PORTAL SECTION START -->
<section class="wz-portal-wrapper">
    <h2 class="wz-portal-heading">Get All Course Access On Your Wingz Portal</h2>

    <div class="wz-portal-arc-container" id="wzArcSection">

        <!-- Curved Green SVG Line -->
        <svg class="wz-portal-svg" viewBox="0 0 500 280">
            <path class="wz-portal-arc-path" d="M 50 250 A 200 200 0 0 1 450 250" />
        </svg>

        <!-- Center Logo & Subtitle -->
        <div class="wz-portal-center-brand">
            <div class="wz-portal-logo-text">
                Eaglet<span class="wz-portal-logo-x">fly</span>
            </div>
            <div class="wz-portal-subtext">Your all-in-one</div>
        </div>

        <!-- Bottom Green Banner -->
        <div class="wz-portal-bottom-bar">
            <span>Apply Now</span>
        </div>

        <!-- Animated Arc Items -->
        <!-- Item 1: Self Learning Hub -->
        <div class="wz-arc-node wz-node-1">
            <span class="wz-node-label wz-label-left">Self Learning Hub</span>
            <div class="wz-node-icon">
                👨‍💻
            </div>
        </div>

        <!-- Item 2: Track Your Daily Progress -->
        <div class="wz-arc-node wz-node-2">
            <span class="wz-node-label wz-label-left">Track Your Daily Progress</span>
            <div class="wz-node-icon">
               📊
            </div>
        </div>

        <!-- Item 3: Live Corporate Sessions -->
        <div class="wz-arc-node wz-node-3">
            <span class="wz-node-label wz-label-left">Live Corporate Sessions</span>
            <div class="wz-node-icon">
                👨‍🏫
            </div>
        </div>

        <!-- Item 4: Internship Manager -->
        <div class="wz-arc-node wz-node-4">
            <span class="wz-node-label wz-label-top">Internship Manager</span>
            <div class="wz-node-icon">
                👨‍🎓
            </div>
        </div>

        <!-- Item 5: AI - Powered Test Series -->
        <div class="wz-arc-node wz-node-5">
            <span class="wz-node-label wz-label-right">AI - Powered Test Series</span>
            <div class="wz-node-icon">
                🤖
            </div>
        </div>

        <!-- Item 6: Every Lecture is Just A Replay Away -->
        <div class="wz-arc-node wz-node-6">
            <span class="wz-node-label wz-label-right">Every Lecture is<br>Just A Replay Away</span>
            <div class="wz-node-icon">
                ✅
            </div>
        </div>

        <!-- Item 7: One-Click Job Application -->
        <div class="wz-arc-node wz-node-7">
            <span class="wz-node-label wz-label-right">One-Click Job Application</span>
            <div class="wz-node-icon">
                💫
            </div>
        </div>

    </div>
</section>

<!-- UNIQUE CSS STYLES -->
<style>
    .wz-portal-wrapper {
        background-color: #173852;
        padding: 50px 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow: hidden;
        box-sizing: border-box;
    }

    .wz-portal-heading {
        font-size: 26px;
        font-weight: 700;
        color: #e2ad3b !important;
        margin-bottom: 30px;
        text-align: center;
    }

    .wz-portal-arc-container {
        position: relative;
        width: 100%;
        max-width: 800px;
        height: 420px;
        margin: 0 auto;
    }

    /* SVG Line Arc */
    .wz-portal-svg {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .wz-portal-arc-path {
        fill: none;
        stroke: #e2ad3b;
        stroke-width: 6;
        stroke-dasharray: 800;
        stroke-dashoffset: 800;
        transition: stroke-dashoffset 2s ease-in-out;
    }

    .wz-portal-arc-container.wz-animate .wz-portal-arc-path {
        stroke-dashoffset: 0;
    }

    /* Center Logo */
    .wz-portal-center-brand {
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 2;
    }

    .wz-portal-logo-text {
        font-size: 42px;
        font-weight: 900;
        letter-spacing: 2px;
        color: #ffffff;
        line-height: 1;
    }

    .wz-portal-logo-x {
        color: #e2ad3b;
    }

    .wz-portal-subtext {
        font-size: 13px;
        color: #e0e0e0;
        margin-top: 4px;
    }

    /* Bottom Bar */
    .wz-portal-bottom-bar {
        position: absolute;
        bottom: 25px;
        left: 10%;
        width: 80%;
        height: 36px;
        background-color: #e2ad3b;
        border-radius: 13px;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wz-portal-bottom-bar span {
        color: #173852;
        font-weight: 700;
        font-size: 15px;
    }

    /* Arc Nodes (Circles) */
    .wz-arc-node {
        position: absolute;
        z-index: 3;
        display: flex;
        align-items: center;
        /* Starting point (animation target position center mein logo ke peeche) */
        top: 60% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) scale(0);
        opacity: 0;
        transition: all 0.9s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        height: max-content;
    }

    .wz-node-icon {
        width: 50px;
        height: 50px;
        background-color: #ffffff;
        border: 3px solid #c28d1b;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        transition: .25s ease;
    }

    .wz-arc-node:hover .wz-node-icon {
        transition: .25s ease;
        background: #c28d1b ;
        border: 3px solid #e2ad3b;
        transform: scale(1.5);
    }

    .wz-node-icon svg {
        width: 26px;
        height: 26px;
        fill: #173852;
    }

    .wz-node-label {
        position: absolute;
        font-size: 13px;
        font-weight: 600;
        color: #ffffff;
        white-space: nowrap;
    }

    .wz-label-left {
        right: 60px;
        text-align: right;
    }

    .wz-label-right {
        left: 60px;
        text-align: left;
    }

    .wz-label-top {
        bottom: 60px;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
    }

    /* ANIMATED FINAL POSITIONS (Triggered by Scroll) */
    .wz-portal-arc-container.wz-animate .wz-arc-node {
        opacity: 1;
    }

    .wz-portal-arc-container.wz-animate .wz-node-1 {
        top: 89% !important;
        left: 12.5% !important;
        transform: translate(-50%, -50%) scale(1);
        transition-delay: 0.1s;
    }

    .wz-portal-arc-container.wz-animate .wz-node-2 {
        top: 60% !important;
        left: 16% !important;
        transform: translate(-50%, -50%) scale(1);
        transition-delay: 0.25s;
    }

    .wz-portal-arc-container.wz-animate .wz-node-3 {
        top: 32% !important;
        left: 28% !important;
        transform: translate(-50%, -50%) scale(1);
        transition-delay: 0.4s;
    }

    .wz-portal-arc-container.wz-animate .wz-node-4 {
        top: 18% !important;
        left: 50% !important;
        transform: translate(-50%, -50%) scale(1);
        transition-delay: 0.55s;
    }

    .wz-portal-arc-container.wz-animate .wz-node-5 {
        top: 34% !important;
        left: 74% !important;
        transform: translate(-50%, -50%) scale(1);
        transition-delay: 0.7s;
    }

    .wz-portal-arc-container.wz-animate .wz-node-6 {
        top: 61% !important;
        left: 84.5% !important;
        transform: translate(-50%, -50%) scale(1);
        transition-delay: 0.85s;
    }

    .wz-portal-arc-container.wz-animate .wz-node-7 {
        top: 89% !important;
        left: 87.5% !important;
        transform: translate(-50%, -50%) scale(1);
        transition-delay: 1s;
    }

    /* RESPONSIVE DESIGN (For Mobile & Tablets) */
    @media (max-width: 768px) {
        .wz-portal-arc-container {
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wz-portal-svg {
            display: none;
        }

        .wz-portal-center-brand {
            position: static;
            transform: none;
            margin-bottom: 20px;
        }

        .wz-portal-bottom-bar {
            position: static;
            width: 100%;
            margin-bottom: 30px;
        }

        .wz-arc-node {
            position: static !important;
            transform: none !important;
            opacity: 1 !important;
            width: 100%;
            margin-bottom: 15px;
            justify-content: flex-start;
            flex-direction: row;
        }

        .wz-node-label {
            position: static !important;
            transform: none !important;
            margin-left: 15px;
            text-align: left !important;
            white-space: normal;
        }

        .wz-node-icon {
            min-width: 45px;
            height: 45px;
        }
    }
</style>

<!-- SCROLL ANIMATION JAVASCRIPT -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const arcContainer = document.getElementById("wzArcSection");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Scroll karke section par aane par animation start hogi
                    arcContainer.classList.add("wz-animate");
                }
            });
        }, {
            threshold: 0.3 // Section 30% dikhte hi trigger hoga
        });

        if (arcContainer) {
            observer.observe(arcContainer);
        }
    });
</script>
<!-- WINGZ PORTAL SECTION END -->