<style>
    .qloc-wrap {
        background: linear-gradient(135deg, #eafaf3 0%, #f3fbf9 55%, #eef9f7 100%);
        /* font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; */
        padding: 120px 20px 80px ;
    }

    .qloc-inner {
        max-width: 1180px;
        margin: 0 auto;
    }

    /* ---------- Head ---------- */

    .qloc-head {
        text-align: center;
        margin-bottom: 46px;
    }

    .qloc-title {
        font-size: 38px;
        font-weight: 800;
        letter-spacing: -0.5px;
        color: #171a2b;
        margin: 0 0 14px;
        opacity: 0;
        transform: translateY(18px);
        animation: qlocFadeUp 0.7s ease forwards;
    }

    .qloc-sub {
        font-size: 15px;
        line-height: 1.7;
        color: #5c6178;
        margin: 0;
        opacity: 0;
        transform: translateY(18px);
        animation: qlocFadeUp 0.7s ease forwards 0.12s;
    }

    @keyframes qlocFadeUp {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ---------- Card shell ---------- */

    .qloc-card {
        display: grid;
        grid-template-columns: 0.85fr 1.15fr;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(16, 90, 70, 0.12);
        opacity: 0;
        transform: translateY(24px);
        animation: qlocFadeUp 0.8s ease forwards 0.2s;
    }

    /* ---------- Left panel ---------- */

    .qloc-panel {
        background:linear-gradient(160deg, #0f8f79, #1a7d8f);
        padding: 34px 32px;
        color: #ffffff;
    }

    .qloc-panel-head {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 26px;
    }

    .qloc-pin-icon {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.18);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .qloc-pin-icon svg {
        width: 19px;
        height: 19px;
    }

    .qloc-panel-title {
        font-size: 19px;
        font-weight: 700;
        margin: 0;
    }

    .qloc-info-card {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 14px;
        padding: 20px 20px 22px;
        margin-bottom: 18px;
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .qloc-info-card:hover {
        transform: translateY(-4px);
        background: rgba(255, 255, 255, 0.16);
    }

    .qloc-info-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.7);
        margin: 0 0 10px;
    }

    .qloc-info-name {
        font-size: 16px;
        font-weight: 700;
        margin: 0 0 8px;
    }

    .qloc-info-address {
        font-size: 13.5px;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.88);
        margin: 0;
    }

    .qloc-hours-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13.5px;
        padding: 9px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.14);
    }

    .qloc-hours-row:last-child {
        border-bottom: none;
    }

    .qloc-hours-day {
        color: rgba(255, 255, 255, 0.85);
    }

    .qloc-hours-time {
        font-weight: 700;
        color: #ffffff;
    }

    .qloc-hours-closed {
        font-weight: 700;
        color: #9fe8c9;
    }

    /* ---------- Map panel ---------- */

    .qloc-map-panel {
        position: relative;
        min-height: 420px;
        background: #dfe6df;
    }

    .qloc-map-panel iframe {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 900px) {
        .qloc-card {
            grid-template-columns: 1fr;
        }

        .qloc-map-panel {
            min-height: 340px;
            order: -1;
        }
    }

    @media (max-width: 620px) {
        .qloc-wrap {
            padding: 56px 16px;
        }

        .qloc-title {
            font-size: 27px;
        }

        .qloc-sub {
            font-size: 13.8px;
        }

        .qloc-panel {
            padding: 26px 22px;
        }

        .qloc-info-card {
            padding: 16px 16px 18px;
        }

        .qloc-map-panel {
            min-height: 280px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .qloc-title,
        .qloc-sub,
        .qloc-card {
            animation: none !important;
            opacity: 1 !important;
            transform: none !important;
        }

        .qloc-info-card:hover {
            transform: none;
        }
    }
</style>


<section class="qloc-wrap">
    <div class="qloc-inner">

        <div class="qloc-head">
            <h2 class="qloc-title">Our  <span class="qcontact-title-accent"> Location</span></h2>
            <p class="qloc-sub">Visit us at our office or reach out — we'd love to meet you in person.</p>
        </div>

        <div class="qloc-card">

            <!-- Left info panel -->
            <div class="qloc-panel">
                <div class="qloc-panel-head">
                    <div class="qloc-pin-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <h3 class="qloc-panel-title">Find Us Here</h3>
                </div>

                <div class="qloc-info-card">
                    <p class="qloc-info-label">Head Office</p>
                    <p class="qloc-info-name">EagletFly</p>
                    <p class="qloc-info-address">Ground Floor, 10A/19, Block 10A, East Patel Nagar, Patel Nagar, New Delhi, Delhi, 110008</p>
                </div>

                <div class="qloc-info-card">
                    <p class="qloc-info-label">Working Hours</p>
                    <div class="qloc-hours-row">
                        <span class="qloc-hours-day">Monday – Friday</span>
                        <span class="qloc-hours-time">10:00 AM – 7:00 PM</span>
                    </div>
                    <div class="qloc-hours-row">
                        <span class="qloc-hours-day">Saturday</span>
                        <span class="qloc-hours-time">10:00 AM – 5:00 PM</span>
                    </div>
                    <div class="qloc-hours-row">
                        <span class="qloc-hours-day">Sunday</span>
                        <span class="qloc-hours-closed" style="color: red;">Closed</span>
                    </div>
                </div>
            </div>

            <!-- Right map panel -->
            <div class="qloc-map-panel">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d437.67775252896064!2d77.17010613344813!3d28.647079886220727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03e5d2381555%3A0x370e46f5213d8008!2sPrimora%20Kids!5e0!3m2!1sen!2sin!4v1788349705408!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>

        </div>
    </div>
</section>