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
        background: #ecfeff;
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
        font-size: 14px;
        /* font-weight: 700; */
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

    /* ---------- Validation ---------- */

    .qcontact-input.qcontact-invalid,
    .qcontact-select.qcontact-invalid,
    .qcontact-textarea.qcontact-invalid {
        border-color: #e0447e;
        box-shadow: 0 0 0 4px rgba(224, 68, 126, 0.10);
    }

    .qcontact-input.qcontact-valid,
    .qcontact-select.qcontact-valid,
    .qcontact-textarea.qcontact-valid {
        border-color: #17b06e;
    }

    .qcontact-error {
        display: none;
        margin-top: 6px;
        font-size: 12px;
        font-weight: 600;
        line-height: 1.4;
        color: #c23158;
    }

    .qcontact-error.qcontact-error-show {
        display: block;
    }

    .qcontact-counter {
        margin-top: 4px;
        font-size: 11.5px;
        text-align: right;
        color: #8a8fa3;
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

    .qcontact-captcha-refresh {
        flex-shrink: 0;
        width: 46px;
        border: 1px solid #dcdfe8;
        background: #fff;
        border-radius: 10px;
        cursor: pointer;
        font-size: 18px;
        color: #5c6178;
        transition: background 0.2s ease;
    }

    .qcontact-captcha-refresh:hover {
        background: #f3f4f9;
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

        .qcontact-field-row > div + div {
            margin-top: 20px;
        }

        .qcontact-captcha-row {
            flex-direction: column;
        }

        .qcontact-captcha-code {
            min-width: 0;
            padding: 12px;
        }

        .qcontact-captcha-refresh {
            width: 100%;
            padding: 10px;
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

            <!-- Left form panel -->

            <div class="qcontact-form-panel">

                <div class="qcontact-form-msg" id="qcontactFormMsg" role="alert"></div>

                <form id="qcontactForm" novalidate autocomplete="on">

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactName">Full Name <span class="qcontact-required">*</span></label>
                        <input class="qcontact-input" type="text" id="qcontactName" name="fullName" placeholder="John Doe" maxlength="60" autocomplete="name" required>
                        <span class="qcontact-error" id="qcontactNameErr"></span>
                    </div>

                    <div class="qcontact-field qcontact-field-row">
                        <div>
                            <label class="qcontact-label" for="qcontactEmail">Work Email <span class="qcontact-required">*</span></label>
                            <input class="qcontact-input" type="email" id="qcontactEmail" name="workEmail" placeholder="you@company.com" maxlength="100" autocomplete="email" required>
                            <span class="qcontact-error" id="qcontactEmailErr"></span>
                        </div>
                        <div>
                            <label class="qcontact-label" for="qcontactPhone">Phone Number <span class="qcontact-required">*</span></label>
                            <input class="qcontact-input" type="tel" id="qcontactPhone" name="phone" placeholder="9900000000" maxlength="10" inputmode="numeric" autocomplete="tel-national" required>
                            <span class="qcontact-error" id="qcontactPhoneErr"></span>
                        </div>
                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactSubject">Subject <span class="qcontact-required">*</span></label>
                        <select class="qcontact-select" id="qcontactSubject" name="subject" required>
                            <option value="" selected disabled>Select Service</option>
                            <option value="machine_learning_&_ai">Machine Learning & Ai</option>
                            <option value="gen_ai_&_agentic_ai">Gen Ai & Agentic Ai</option>
                            <option value="data_analytics_with_python">Data Analytics with Python</option>
                            <option value="data_science_with_python">Data Science with Python</option>
                            <option value="digital_marketing">Digital Marketing</option>
                            <option value="python">Python</option>
                            <option value="java">Java</option>
                        </select>
                        <span class="qcontact-error" id="qcontactSubjectErr"></span>
                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactMessage">Message <span class="qcontact-required">*</span></label>
                        <textarea class="qcontact-textarea" id="qcontactMessage" name="message" placeholder="Tell us about your requirements, use case, or question..." maxlength="500" required></textarea>
                        <div class="qcontact-counter"><span id="qcontactMsgCount">0</span>/500</div>
                        <span class="qcontact-error" id="qcontactMessageErr"></span>
                    </div>

                    <div class="qcontact-field">
                        <label class="qcontact-label" for="qcontactCaptchaInput">Enter CAPTCHA: <span class="qcontact-required">*</span></label>
                        <div class="qcontact-captcha-row">
                            <div class="qcontact-captcha-code" id="qcontactCaptchaCode"></div>
                            <button type="button" class="qcontact-captcha-refresh" id="qcontactCaptchaRefresh" title="New CAPTCHA" aria-label="New CAPTCHA">&#8635;</button>
                            <input class="qcontact-input qcontact-captcha-input" type="text" id="qcontactCaptchaInput" placeholder="Enter the CAPTCHA" maxlength="6" inputmode="numeric" autocomplete="off" required>
                        </div>
                        <span class="qcontact-error" id="qcontactCaptchaErr"></span>
                    </div>

                    <button type="submit" class="qcontact-submit-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="22" y1="2" x2="11" y2="13" />
                            <polygon points="22 2 15 22 11 13 2 9 22 2" />
                        </svg>
                        Send Inquiry
                    </button>

                    <p class="qcontact-terms">By submitting, you agree to our <a href="contact.php">Terms</a> &amp; <a href="contact.php">Privacy Policy</a></p>

                </form>
            </div>



            <!-- Right info panel -->
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
                        <p class="qcontact-info-value">
                            <?php echo htmlspecialchars($global_info['footer_email_1'] ?? ''); ?>
                            <br>    
                            <?php echo htmlspecialchars($global_info['footer_email_2'] ?? ''); ?>
                        </p>

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
                        <p class="qcontact-info-value qcontact-teal">
                            <?php echo htmlspecialchars($global_info['footer_phone_1'] ?? ''); ?>
                            |
                            <?php echo htmlspecialchars($global_info['footer_phone_2'] ?? ''); ?>
                        </p>

                    </div>
                    <div></div>
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
        var form = document.getElementById('qcontactForm');
        var msgEl = document.getElementById('qcontactFormMsg');
        var captchaEl = document.getElementById('qcontactCaptchaCode');
        var captchaInput = document.getElementById('qcontactCaptchaInput');
        var captchaRefresh = document.getElementById('qcontactCaptchaRefresh');
        var msgCount = document.getElementById('qcontactMsgCount');
        var currentCode = '';

        /* WhatsApp number (global_info se). Country code ke saath, bina '+' ke */
        var whatsappNumber = "<?php echo htmlspecialchars($global_info['globle_whatsapp'] ?? '', ENT_QUOTES); ?>".replace(/\D/g, '');
        if (whatsappNumber.length === 10) {
            whatsappNumber = '91' + whatsappNumber; // sirf 10 digit ho to India code laga do
        }

        var fields = {
            name: document.getElementById('qcontactName'),
            email: document.getElementById('qcontactEmail'),
            phone: document.getElementById('qcontactPhone'),
            subject: document.getElementById('qcontactSubject'),
            message: document.getElementById('qcontactMessage'),
            captcha: captchaInput
        };

        var errEls = {
            name: document.getElementById('qcontactNameErr'),
            email: document.getElementById('qcontactEmailErr'),
            phone: document.getElementById('qcontactPhoneErr'),
            subject: document.getElementById('qcontactSubjectErr'),
            message: document.getElementById('qcontactMessageErr'),
            captcha: document.getElementById('qcontactCaptchaErr')
        };

        /* ---------- validators: error text return karte hain, valid ho to '' ---------- */
        var validators = {
            name: function (v) {
                v = v.trim().replace(/\s+/g, ' ');
                if (!v) return 'Please enter your full name.';
                if (v.length < 3) return 'Name must be at least 3 characters.';
                if (v.length > 60) return 'Name is too long (max 60 characters).';
                if (!/^[A-Za-z][A-Za-z\s.'-]*$/.test(v)) return 'Name can only contain letters, spaces, . \' and -';
                return '';
            },
            email: function (v) {
                v = v.trim();
                if (!v) return 'Please enter your email address.';
                if (v.length > 100) return 'Email is too long.';
                if (!/^[A-Za-z0-9._%+-]+@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*\.[A-Za-z]{2,}$/.test(v)) return 'Please enter a valid email address.';
                return '';
            },
            phone: function (v) {
                v = v.trim();
                if (!v) return 'Please enter your phone number.';
                if (!/^\d+$/.test(v)) return 'Phone number can only contain digits.';
                if (v.length !== 10) return 'Phone number must be exactly 10 digits.';
                if (!/^[6-9]/.test(v)) return 'Enter a valid mobile number (starts with 6, 7, 8 or 9).';
                if (/^(\d)\1{9}$/.test(v)) return 'Please enter a real phone number.';
                return '';
            },
            subject: function (v) {
                if (!v) return 'Please select a service.';
                return '';
            },
            message: function (v) {
                v = v.trim();
                if (!v) return 'Please write your message.';
                if (v.length < 10) return 'Message must be at least 10 characters.';
                if (v.length > 500) return 'Message is too long (max 500 characters).';
                if (/(https?:\/\/|www\.)/i.test(v)) return 'Links are not allowed in the message.';
                return '';
            },
            captcha: function (v) {
                v = v.trim();
                if (!v) return 'Please enter the CAPTCHA.';
                if (v !== currentCode) return 'Incorrect CAPTCHA. Please try again.';
                return '';
            }
        };

        /* ---------- helpers ---------- */
        function setError(key, text) {
            var input = fields[key];
            var el = errEls[key];
            if (text) {
                el.textContent = text;
                el.classList.add('qcontact-error-show');
                input.classList.add('qcontact-invalid');
                input.classList.remove('qcontact-valid');
                input.setAttribute('aria-invalid', 'true');
            } else {
                el.textContent = '';
                el.classList.remove('qcontact-error-show');
                input.classList.remove('qcontact-invalid');
                input.classList.add('qcontact-valid');
                input.setAttribute('aria-invalid', 'false');
            }
        }

        function validateField(key) {
            var text = validators[key](fields[key].value);
            setError(key, text);
            return text === '';
        }

        function clearAllStates() {
            Object.keys(fields).forEach(function (key) {
                errEls[key].textContent = '';
                errEls[key].classList.remove('qcontact-error-show');
                fields[key].classList.remove('qcontact-invalid', 'qcontact-valid');
                fields[key].removeAttribute('aria-invalid');
            });
        }

        function showMsg(text, type) {
            msgEl.textContent = text;
            msgEl.className = 'qcontact-form-msg qcontact-msg-show ' + (type === 'success' ? 'qcontact-msg-success' : 'qcontact-msg-error');
        }

        function hideMsg() {
            msgEl.className = 'qcontact-form-msg';
            msgEl.textContent = '';
        }

        function generateCaptcha() {
            currentCode = String(Math.floor(100000 + Math.random() * 900000));
            captchaEl.textContent = currentCode;
            captchaInput.value = '';
            errEls.captcha.textContent = '';
            errEls.captcha.classList.remove('qcontact-error-show');
            captchaInput.classList.remove('qcontact-invalid', 'qcontact-valid');
        }

        /* ---------- live input handling ---------- */
        // phone: sirf digits, +91 / 0 prefix paste ho to hata do
        fields.phone.addEventListener('input', function () {
            var digits = this.value.replace(/\D/g, '');
            if (digits.length > 10) {
                if (digits.indexOf('91') === 0 && digits.length === 12) digits = digits.slice(2);
                else if (digits.charAt(0) === '0' && digits.length === 11) digits = digits.slice(1);
            }
            this.value = digits.slice(0, 10);
        });

        // captcha: sirf digits
        captchaInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
        });

        // message counter
        fields.message.addEventListener('input', function () {
            msgCount.textContent = this.value.length;
        });

        // blur par validate, aur error dikh raha ho to typing ke saath live update
        Object.keys(fields).forEach(function (key) {
            var input = fields[key];
            var evt = key === 'subject' ? 'change' : 'input';

            input.addEventListener('blur', function () {
                if (input.value !== '' || input.classList.contains('qcontact-invalid')) {
                    validateField(key);
                }
            });

            input.addEventListener(evt, function () {
                hideMsg();
                if (input.classList.contains('qcontact-invalid') || key === 'subject') {
                    validateField(key);
                }
            });
        });

        captchaRefresh.addEventListener('click', generateCaptcha);

        /* ---------- submit ---------- */
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            hideMsg();

            var firstInvalid = null;
            Object.keys(fields).forEach(function (key) {
                if (!validateField(key) && !firstInvalid) {
                    firstInvalid = fields[key];
                }
            });

            if (firstInvalid) {
                if (fields.captcha.classList.contains('qcontact-invalid') && fields.captcha.value.trim() !== '') {
                    generateCaptcha();
                    setError('captcha', 'Incorrect CAPTCHA. A new one has been generated.');
                }
                showMsg('Please fix the highlighted fields and try again.', 'error');
                firstInvalid.focus();
                return;
            }

            if (!whatsappNumber) {
                showMsg('WhatsApp number is not configured. Please contact the site admin.', 'error');
                return;
            }

            var name = fields.name.value.trim().replace(/\s+/g, ' ');
            var email = fields.email.value.trim();
            var phone = fields.phone.value.trim();
            var subjectText = fields.subject.options[fields.subject.selectedIndex].text;
            var message = fields.message.value.trim();

            var text =
                '*New Contact Inquiry*\n' +
                '*Name:* ' + name + '\n' +
                '*Email:* ' + email + '\n' +
                '*Phone:* +91' + phone + '\n' +
                '*Service:* ' + subjectText + '\n' +
                '*Message:* ' + message;

            var url = 'https://wa.me/' + whatsappNumber + '?text=' + encodeURIComponent(text);

            var win = window.open(url, '_blank');
            if (!win) {
                // popup block ho gaya to same tab me kholo
                window.location.href = url;
            }

            showMsg("Thanks! Redirecting you to WhatsApp — we'll get back to you within 24 hours.", 'success');
            form.reset();
            msgCount.textContent = '0';
            clearAllStates();
            generateCaptcha();
        });

        generateCaptcha();
    })();
</script>