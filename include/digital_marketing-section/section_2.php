<style>
    .kd-podcast-counter-pro,
    .kd-podcast-counter-pro * {
        box-sizing: border-box;
    }
 
    body {
        margin: 0;
        background: #f5f6fa;
    }
 
    .kd-podcast-counter-pro {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 50px 0;
        font-family: 'Manrope', Arial, sans-serif;
        background: linear-gradient(180deg, #f7f8fc 0%, #f2f3f8 100%);
    }
 
    .kd-pcp-wrap {
        position: relative;
        z-index: 3;
        width: min(1180px, calc(100% - 40px));
        margin: 0 auto;
    }
 
    .kd-pcp-counter-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 22px;
    }
 
    .kd-pcp-card {
        position: relative;
        overflow: hidden;
        min-height: 175px;
        padding: 26px 22px 24px;
        text-align: center;
        border: 1px solid rgba(20, 20, 40, .06);
        border-radius: 18px;
        background: #ffffff;
        box-shadow: 0 10px 26px rgba(30, 30, 60, .06);
        transition: transform .28s ease, box-shadow .28s ease;
    }
 
    .kd-pcp-card:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, #ff7139, #ef5261, #8d62dc);
    }
 
    .kd-pcp-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 16px 34px rgba(30, 30, 60, .10);
    }
 
    .kd-pcp-card-top {
        display: flex;
        align-items: center;
        justify-content: center;
    }
 
    .kd-pcp-icon-box {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        font-size: 24px;
    }
 
    .kd-pcp-yellow { background: #fdf3d7; }
    .kd-pcp-purple { background: #ece9fb; }
    .kd-pcp-red    { background: #fbe9ea; }
    .kd-pcp-gold   { background: #fdf0dd; }
 
    .kd-pcp-number-row {
        margin-top: 16px;
    }
 
    .kd-pcp-counter {
        display: inline-block;
        font-size: 34px;
        line-height: 1;
        font-weight: 800;
        letter-spacing: -.03em;
        color: #171438;
    }
 
    .kd-pcp-card p {
        margin: 8px 0 0;
        color: #6b7280;
        font-size: 13.5px;
        line-height: 1.4;
        font-weight: 500;
    }
 
    @media(max-width:1024px) {
        .kd-pcp-wrap { width: min(930px, calc(100% - 36px)); }
    }
 
    @media(max-width:767px) {
        .kd-podcast-counter-pro { padding: 30px 0; }
        .kd-pcp-wrap { width: calc(100% - 28px); max-width: 580px; }
        .kd-pcp-counter-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
        .kd-pcp-card { min-height: 145px; padding: 18px 14px; border-radius: 14px; }
        .kd-pcp-icon-box { width: 42px; height: 42px; font-size: 20px; border-radius: 12px; }
        .kd-pcp-counter { font-size: 26px; }
        .kd-pcp-card p { font-size: 11.5px; }
    }
 
    @media(prefers-reduced-motion:reduce) {
        .kd-pcp-card { transition: none; }
    }
</style>

 
<section class="kd-podcast-counter-pro">
    <div class="kd-pcp-wrap">
        <div class="kd-pcp-counter-grid">
 
            <article class="kd-pcp-card">
                <div class="kd-pcp-card-top">
                    <div class="kd-pcp-icon-box kd-pcp-yellow">⭐</div>
                </div>
                <div class="kd-pcp-number-row">
                    <span class="kd-pcp-counter" data-target="4.5" data-suffix="/5">0</span>
                </div>
                <p>Average Rating</p>
            </article>
 
            <article class="kd-pcp-card">
                <div class="kd-pcp-card-top">
                    <div class="kd-pcp-icon-box kd-pcp-purple">🎓</div>
                </div>
                <div class="kd-pcp-number-row">
                    <span class="kd-pcp-counter" data-target="10000" data-suffix="+">0</span>
                </div>
                <p>Students Trained</p>
            </article>
 
            <article class="kd-pcp-card">
                <div class="kd-pcp-card-top">
                    <div class="kd-pcp-icon-box kd-pcp-red">💼</div>
                </div>
                <div class="kd-pcp-number-row">
                    <span class="kd-pcp-counter" data-target="5000" data-suffix="+">0</span>
                </div>
                <p>Successful Placements</p>
            </article>
 
            <article class="kd-pcp-card">
                <div class="kd-pcp-card-top">
                    <div class="kd-pcp-icon-box kd-pcp-gold">🤝</div>
                </div>
                <div class="kd-pcp-number-row">
                    <span class="kd-pcp-counter" data-target="500" data-suffix="+">0</span>
                </div>
                <p>Hiring Partners</p>
            </article>
 
        </div>
    </div>
</section>
 
<script>
(function () {
    const section = document.querySelector('.kd-podcast-counter-pro');
    if (!section) return;
 
    const counters = section.querySelectorAll('.kd-pcp-counter');
    let hasStarted = false;
 
    function runCounter(el) {
        const target = parseFloat(el.getAttribute('data-target'));
        const suffix = el.getAttribute('data-suffix') || '';
        const isDecimal = !Number.isInteger(target);
        const duration = 1700;
        const start = performance.now();
 
        function update(t) {
            const progress = Math.min((t - start) / duration, 1);
            const ease = 1 - Math.pow(1 - progress, 3);
            const current = target * ease;
            el.textContent = (isDecimal ? current.toFixed(1) : Math.floor(current)) + suffix;
 
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = (isDecimal ? target.toFixed(1) : target) + suffix;
            }
        }
        requestAnimationFrame(update);
    }
 
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !hasStarted) {
                hasStarted = true;
                counters.forEach(runCounter);
                observer.disconnect();
            }
        });
    }, { threshold: .28 });
 
    observer.observe(section);
})();
</script>