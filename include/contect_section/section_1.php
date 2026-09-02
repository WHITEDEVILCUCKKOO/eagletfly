<style>
    .qcontact-wrap {
        background: #ffffff;
        /* font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; */
        padding: 100px 20px 80px;
    }

    .qcontact-inner {
        max-width: 1180px;
        margin: 0 auto;
    }

    /* ---------- Head ---------- */

    .qcontact-head {
        text-align: center;
        margin-bottom: 50px;
    }

    .qcontact-title {
        font-size: 44px;
        font-weight: 800;
        line-height: 1.25;
        letter-spacing: -0.5px;
        color: #171a2b;
        margin: 0 0 16px;
        opacity: 0;
        transform: translateY(18px);
        animation: qcontactFadeUp 0.7s ease forwards;
    }

    .qcontact-title-accent {
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
        background-size: 250% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes aboutHeadingGradient {

        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }


    .qcontact-sub {
        font-size: 15px;
        line-height: 1.7;
        color: #5c6178;
        max-width: 620px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(18px);
        animation: qcontactFadeUp 0.7s ease forwards 0.12s;
    }

    @keyframes qcontactFadeUp {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ---------- Layout ---------- */

    .qcontact-grid {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 24px;
        align-items: start;
    }

    /* ---------- Left panel ---------- */

    .qcontact-panel {
        background: #ecfeff ;
        border-radius: 22px;
        padding: 34px 30px;
        opacity: 0;
        transform: translateY(24px);
        animation: qcontactFadeUp 0.7s ease forwards 0.2s;
    }

    .qcontact-panel-title {
        font-size: 21px;
        font-weight: 700;
        color: #0d0d0e;
        margin: 0 0 12px;
    }

    .qcontact-panel-desc {
        font-size: 13.8px;
        line-height: 1.7;
        color: #383838;
        margin: 0 0 24px;
    }

    .qcontact-info-card {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        background: #ffffff;
        border-radius: 14px;
        padding: 16px 18px;
        margin-bottom: 14px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .qcontact-info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(23, 176, 110, 0.12);
    }

    .qcontact-info-icon {
        flex-shrink: 0;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: #f3e7d8;
        color: #17b06e;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .qcontact-info-card:hover .qcontact-info-icon {
        transform: rotate(-8deg) scale(1.1);
    }

    .qcontact-info-icon svg {
        width: 18px;
        height: 18px;
    }

    .qcontact-info-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.6px;
        text-transform: uppercase;
        color: #8a8fa3;
        margin: 0 0 4px;
    }

    .qcontact-info-value {
        font-size: 15px;
        font-weight: 700;
        color: #171a2b;
        margin: 0;
    }

    .qcontact-info-value.qcontact-teal {
        color: #111111;
    }

    .qcontact-response-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 18px 18px 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .qcontact-response-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 28px rgba(23, 176, 110, 0.1);
    }

    .qcontact-response-head {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
    }

    .qcontact-response-head span:first-child {
        font-size: 18px;
    }

    .qcontact-response-title {
        font-size: 14.5px;
        font-weight: 700;
        color: #171a2b;
        margin: 0;
    }

    .qcontact-response-text {
        font-size: 13.3px;
        line-height: 1.6;
        color: #5c6178;
        margin: 0;
    }

    .qcontact-response-text strong {
        color: #df710a;
    }

    /* ---------- Right form panel ---------- */

    .qcontact-form-panel {
        background: #ffffff;
        border: 1px solid #ececf5;
        border-radius: 22px;
        padding: 24px 34px 13px;
        box-shadow: 0 20px 50px rgba(30, 34, 90, 0.06);
        opacity: 0;
        transform: translateY(24px);
        animation: qcontactFadeUp 0.7s ease forwards 0.3s;
    }

    .qcontact-field {
        margin-bottom: 20px;
    }

    .qcontact-field-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
    }

    .qcontact-label {
        display: block;
        font-size: 13.5px;
        font-weight: 700;
        color: #171a2b;
        margin-bottom: 8px;
    }

    .qcontact-required {
        color: #e0447e;
    }

    .qcontact-input,
    .qcontact-select,
    .qcontact-textarea {
        width: 100%;
        box-sizing: border-box;
        font-family: inherit;
        font-size: 14px;
        color: #171a2b;
        background: #ffffff;
        border: 1px solid #dcdfe8;
        border-radius: 10px;
        padding: 12px 14px;
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .qcontact-input::placeholder,
    .qcontact-textarea::placeholder {
        color: #a7abbb;
    }

    .qcontact-input:focus,
    .qcontact-select:focus,
    .qcontact-textarea:focus {
        outline: none;
        border-color: #17b06e;
        box-shadow: 0 0 0 4px rgba(23, 176, 110, 0.12);
    }

    .qcontact-textarea {
        resize: vertical;
        min-height: 100px;
    }

    .qcontact-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%235c6178' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        background-size: 16px;
        cursor: pointer;
    }

    .qcontact-captcha-row {
        display: flex;
        gap: 14px;
        align-items: stretch;
    }

    .qcontact-captcha-code {
        flex-shrink: 0;
        min-width: 110px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        font-weight: 800;
        letter-spacing: 3px;
        color: #3d3fae;
        background: #eef0fe;
        border-radius: 10px;
        padding: 0 16px;
        user-select: none;
    }

    .qcontact-captcha-input {
        flex: 1;
    }

    .qcontact-submit-btn {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 15px;
        font-weight: 700;
        color: #ffffff;
       background: linear-gradient(90deg, #00A878 0%, #1696B5 100%);
        border: none;
        border-radius: 12px;
        padding: 15px 20px;
        cursor: pointer;
        margin-top: 4px;
        transition: transform 0.25s ease, box-shadow 0.25s ease, filter 0.25s ease;
    }

    .qcontact-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 32px rgba(176, 79, 23, 0.28);
        filter: brightness(1.04);
    }

    .qcontact-submit-btn svg {
        width: 17px;
        height: 17px;
    }

    .qcontact-terms {
        text-align: center;
        font-size: 12px;
        color: #8a8fa3;
        margin: 14px 0 0;
    }

    .qcontact-terms a {
        color: #17b06e;
        font-weight: 600;
        text-decoration: none;
    }

    .qcontact-terms a:hover {
        text-decoration: underline;
    }

    .qcontact-form-msg {
        text-align: center;
        font-size: 13.5px;
        font-weight: 600;
        border-radius: 10px;
        padding: 12px 14px;
        margin-bottom: 18px;
        display: none;
    }

    .qcontact-form-msg.qcontact-msg-show {
        display: block;
    }

    .qcontact-form-msg.qcontact-msg-success {
        background: #e3f7ee;
        color: #128a56;
    }

    .qcontact-form-msg.qcontact-msg-error {
        background: #fde5ea;
        color: #c23158;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 960px) {
        .qcontact-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 620px) {
        .qcontact-wrap {
            padding: 56px 16px;
        }

        .qcontact-title {
            font-size: 27px;
        }

        .qcontact-sub {
            font-size: 13.8px;
        }

        .qcontact-panel {
            padding: 26px 22px;
        }

        .qcontact-form-panel {
            padding: 26px 22px 24px;
        }

        .qcontact-field-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .qcontact-captcha-row {
            flex-direction: column;
        }

        .qcontact-captcha-code {
            min-width: 0;
            padding: 12px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .qcontact-title,
        .qcontact-sub,
        .qcontact-panel,
        .qcontact-form-panel {
            animation: none !important;
            opacity: 1 !important;
            transform: none !important;
        }

        .qcontact-info-card:hover,
        .qcontact-response-card:hover,
        .qcontact-submit-btn:hover {
            transform: none;
        }
    }
</style>

<section class="qcontact-wrap">
    <div class="qcontact-inner">

        <div class="qcontact-head">
            <h2 class="qcontact-title">Get in touch with <span class="qcontact-title-accent">Eagletfly</span></h2>
            <p class="qcontact-sub" style="margin: auto;padding-top:10px;">Looking for better career skill? We are educating people to make their future brighter. Contact our Training Counselors to boost your IT Skills and Employ-ability.</p>
        </div>

        <div class="qcontact-grid">

            <!-- Left info panel -->

            <div class="qcontact-form-panel">

                <div class="qcontact-form-msg" id="qcontactFormMsg"></div>

                <form id="qcontactForm" novalidate>

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactName">Full Name <span class="qcontact-required">*</span></label>
                        <input class="qcontact-input" type="text" id="qcontactName" name="fullName" placeholder="John Doe" required>
                    </div>

                    <div class="qcontact-field qcontact-field-row">
                        <div>
                            <label class="qcontact-label" for="qcontactEmail">Work Email <span class="qcontact-required">*</span></label>
                            <input class="qcontact-input" type="email" id="qcontactEmail" name="workEmail" placeholder="you@company.com" required>
                        </div>
                        <div>
                            <label class="qcontact-label" for="qcontactPhone">Phone Number</label>
                            <input class="qcontact-input" type="tel" id="qcontactPhone" name="phone" placeholder="9900000000">
                        </div>
                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactSubject">Subject <span class="qcontact-required">*</span></label>
                        <select class="qcontact-select" id="qcontactSubject" name="subject" required>
                            <option value="" selected disabled>Select Service</option>
                            <option value="bulk-sms">Bulk SMS</option>
                            <option value="whatsapp-api">WhatsApp API</option>
                            <option value="otp-sms">OTP SMS</option>
                            <option value="voice">Voice / IVR</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactMessage">Message <span class="qcontact-required">*</span></label>
                        <textarea class="qcontact-textarea" id="qcontactMessage" name="message" placeholder="Tell us about your requirements, use case, or question..." required></textarea>
                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label">Enter CAPTCHA: <span class="qcontact-required">*</span></label>
                        <div class="qcontact-captcha-row">
                            <div class="qcontact-captcha-code" id="qcontactCaptchaCode"></div>
                            <input class="qcontact-input qcontact-captcha-input" type="text" id="qcontactCaptchaInput" placeholder="Enter the CAPTCHA" required>
                        </div>
                    </div>

                    <button type="submit" class="qcontact-submit-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13" />
                            <polygon points="22 2 15 22 11 13 2 9 22 2" />
                        </svg>
                        Send Inquiry
                    </button>

                    <p class="qcontact-terms">By submitting, you agree to our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></p>

                </form>
            </div>



            <!-- Right form panel -->
            <div class="qcontact-panel">
                <h3 class="qcontact-panel-title">Let's Connect</h3>
                <p class="qcontact-panel-desc">Have a question or a project in mind? Fill out the form and our team will get back to you within 24 hours. We're here to understand your needs and find the right solution for your business.
</p>

                <div class="qcontact-info-card">
                    <div class="qcontact-info-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#F97B30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16v16H4z" opacity="0" />
                            <path d="M22 6c0 1.1-.9 2-2 2H4a2 2 0 0 1-2-2" />
                            <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6z" />
                            <polyline points="2 6 12 13 22 6" />
                        </svg>
                    </div>
                    <div>
                        <p class="qcontact-info-label">SALES EMAIL</p>
                        <p class="qcontact-info-value">info@eagletflysolutions.com / eagletflysolutions@gmail.com</p>
                       
                    </div>
                </div>

                <div class="qcontact-info-card">
                    <div class="qcontact-info-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12.04 2c-5.5 0-9.96 4.46-9.96 9.96 0 1.76.46 3.48 1.34 5L2 22l5.2-1.36a9.94 9.94 0 0 0 4.84 1.23h.01c5.5 0 9.96-4.46 9.96-9.96S17.54 2 12.04 2zm5.85 14.24c-.24.68-1.4 1.3-1.93 1.35-.5.05-1.02.24-3.43-.72-2.9-1.16-4.76-4.13-4.9-4.33-.14-.2-1.17-1.56-1.17-2.97 0-1.4.74-2.09 1-2.38.26-.28.57-.35.76-.35.19 0 .38 0 .55.01.18.01.42-.07.65.5.24.58.82 2 .89 2.15.07.15.12.32.02.52-.1.2-.15.32-.3.5-.15.18-.32.4-.45.53-.15.15-.31.31-.13.61.18.3.79 1.3 1.7 2.1 1.17 1.04 2.15 1.37 2.45 1.52.3.15.48.13.66-.08.18-.2.75-.87.95-1.17.2-.3.4-.25.66-.15.27.1 1.72.81 2.02.96.3.15.5.22.57.35.08.13.08.75-.16 1.43z" />
                        </svg>
                    </div>
                    <div>
                        <p class="qcontact-info-label">WHATSAPP</p>
                        <p class="qcontact-info-value qcontact-teal">+91 9811434638 | +91 98114 34634</p>

                    </div>
                    <div></div>
                    <!-- <div>
                        <p class="qcontact-info-label">Sales</p>

                        <p class="qcontact-info-value qcontact-teal">+91-9211339966</p>
                        <p class="qcontact-info-value qcontact-teal">+91-9210763636</p>
                    </div> -->
                </div>

                <div class="qcontact-response-card">
                    <div class="qcontact-response-head">
                        <span>⏱️</span>
                        <p class="qcontact-response-title">Response Time</p>
                    </div>
                    <p class="qcontact-response-text">We typically respond to all inquiries within <strong> 24 hours </strong> during business days. Our team carefully reviews every request to understand your needs and provide the most relevant information, guidance, and next steps. For urgent queries, we make every effort to get back to you as quickly as possible.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function qcontactInit() {
        var qcontactCaptchaEl = document.getElementById('qcontactCaptchaCode');
        var qcontactCaptchaInput = document.getElementById('qcontactCaptchaInput');
        var qcontactForm = document.getElementById('qcontactForm');
        var qcontactMsgEl = document.getElementById('qcontactFormMsg');
        var qcontactCurrentCode = '';

        function qcontactGenerateCaptcha() {
            qcontactCurrentCode = String(Math.floor(100000 + Math.random() * 900000));
            qcontactCaptchaEl.textContent = qcontactCurrentCode;
            qcontactCaptchaInput.value = '';
        }

        function qcontactShowMsg(text, type) {
            qcontactMsgEl.textContent = text;
            qcontactMsgEl.className = 'qcontact-form-msg qcontact-msg-show ' + (type === 'success' ? 'qcontact-msg-success' : 'qcontact-msg-error');
        }

        qcontactGenerateCaptcha();

        qcontactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            if (!qcontactForm.checkValidity()) {
                qcontactForm.reportValidity();
                return;
            }

            if (qcontactCaptchaInput.value.trim() !== qcontactCurrentCode) {
                qcontactShowMsg('Incorrect CAPTCHA. Please try again.', 'error');
                qcontactGenerateCaptcha();
                return;
            }

            qcontactShowMsg("Thanks! Your inquiry has been sent — we'll get back to you within 24 hours.", 'success');
            qcontactForm.reset();
            qcontactGenerateCaptcha();
        });
    })();
</script>