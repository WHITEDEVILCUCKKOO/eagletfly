


<style>
    .enroll-wrap {
        box-sizing: border-box;
        background: #F6F4EF;
        padding: 96px 8vw;
    }

    .enroll-wrap * {
        box-sizing: border-box;
    }

    .enroll-grid {
        max-width: 1080px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: #14172B;
        border-radius: 18px;
        overflow: hidden;
    }

    .enroll-left {
        padding: 52px 44px;
    }

    .enroll-title {
        font-weight: 600;
        font-size: clamp(26px, 3.6vw, 36px);
        color: #F6F5FF;
        margin: 0 0 14px;
    }

    .enroll-desc {
        font-size: 14.5px;
        color: #A8AEDB;
        line-height: 1.7;
        margin: 0 0 26px;
    }

    .enroll-mini {
        display: grid;
        gap: 12px;
    }

    .enroll-mini-item {
        display: flex;
        gap: 10px;
        align-items: flex-start;
        font-size: 13.5px;
        color: #C6CAF0;
        line-height: 1.6;
    }

    .enroll-mini-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #35D0BA;
        flex-shrink: 0;
        margin-top: 7px;
    }

    .enroll-right {
        background: #FFFFFF;
        padding: 44px;
    }

    .enroll-field {
        margin-bottom: 14px;
    }

    .enroll-field label {
        display: block;
        font-size: 12.5px;
        color: #767B94;
        margin-bottom: 6px;
    }

    .enroll-field input,
    .enroll-field select {
        display: block;
        width: 100%;
        min-width: 0;
        padding: 12px 14px;
        border: 1px solid #E4E0D6;
        border-radius: 8px;
        font-family: inherit;
        font-size: 14px;
        color: #14172B;
        background: #FFFFFF;
        transition: border-color 0.2s ease;
    }

    .enroll-field input:focus,
    .enroll-field select:focus {
        outline: none;
        border-color: #35D0BA;
    }

    .enroll-field input[aria-invalid="true"],
    .enroll-field select[aria-invalid="true"] {
        border-color: #FF6F59;
    }

    .enroll-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .enroll-error {
        display: block;
        color: #C53C2B;
        font-size: 12px;
        line-height: 1.5;
        margin-top: 5px;
    }

    .enroll-submit {
        width: 100%;
        background: #14172B;
        color: #F6F4EF;
        border: none;
        padding: 14px;
        border-radius: 8px;
        font-family: inherit;
        font-weight: 600;
        font-size: 15px;
        cursor: pointer;
        margin-top: 6px;
        transition: background 0.2s ease;
    }

    .enroll-submit:hover {
        background: #262C5C;
    }

    .enroll-submit:focus-visible {
        outline: 2px solid #35D0BA;
        outline-offset: 3px;
    }

    .enroll-captcha-row {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 10px;
    }

    .enroll-refresh {
        width: auto;
        margin: 0;
        padding: 10px 12px;
        font-size: 12px;
    }

    .enroll-status {
        font-size: 13px;
        line-height: 1.6;
        margin: 10px 0 0;
        color: #C53C2B;
    }

    .enroll-note {
        font-size: 12px;
        color: #A0A4B8;
        text-align: center;
        line-height: 1.6;
        margin: 10px 0 0;
    }

    @media (max-width: 820px) {
        .enroll-wrap {
            padding: 64px 5vw;
        }

        .enroll-grid {
            grid-template-columns: 1fr;
        }

        .enroll-left {
            padding: 36px 28px;
        }

        .enroll-right {
            padding: 32px 28px;
        }
    }

    @media (max-width: 480px) {
        .enroll-wrap {
            padding: 44px 16px;
        }

        .enroll-left,
        .enroll-right {
            padding: 28px 20px;
        }

        .enroll-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .enroll-captcha-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="enroll-wrap" id="data-science-enquiry">
    <div class="enroll-grid">

        <div class="enroll-left">
            <h2 class="enroll-title">
                Start Your Data Science Learning Journey
            </h2>

            <p class="enroll-desc">
                Interested in a Data Science Course in Delhi NCR?
                Enquire about the curriculum, practical projects,
                career opportunities and available learning modes.
                Share your details to connect with our program team.
            </p>

            <div class="enroll-mini">
                <div class="enroll-mini-item">
                    <span class="enroll-mini-dot"></span>
                    Practical learning with real-world datasets
                </div>

                <div class="enroll-mini-item">
                    <span class="enroll-mini-dot"></span>
                    Explore Data Science, Machine Learning and AI career paths
                </div>

                <div class="enroll-mini-item">
                    <span class="enroll-mini-dot"></span>
                    Enquire about weekday, weekend and online-live batches
                </div>

                <div class="enroll-mini-item">
                    <span class="enroll-mini-dot"></span>
                    Get course details directly through WhatsApp
                </div>
            </div>
        </div>

        <div class="enroll-right">
            <form id="enroll-form" novalidate>

                <div class="enroll-field">
                    <label for="enroll-name">Full Name *</label>
                    <input
                        type="text"
                        id="enroll-name"
                        name="full_name"
                        placeholder="Enter your full name"
                        autocomplete="name"
                        minlength="2"
                        maxlength="80"
                        required
                    >
                    <small class="enroll-error" id="enroll-name-error"></small>
                </div>

                <div class="enroll-row">
                    <div class="enroll-field">
                        <label for="enroll-email">Email Address *</label>
                        <input
                            type="email"
                            id="enroll-email"
                            name="email"
                            placeholder="you@example.com"
                            autocomplete="email"
                            maxlength="254"
                            required
                        >
                        <small class="enroll-error" id="enroll-email-error"></small>
                    </div>

                    <div class="enroll-field">
                        <label for="enroll-phone">Mobile Number *</label>
                        <input
                            type="tel"
                            id="enroll-phone"
                            name="phone"
                            placeholder="10-digit mobile number"
                            autocomplete="tel-national"
                            inputmode="numeric"
                            maxlength="10"
                            required
                        >
                        <small class="enroll-error" id="enroll-phone-error"></small>
                    </div>
                </div>

                <div class="enroll-field">
                    <label for="enroll-batch">Preferred Learning Mode *</label>
                    <select id="enroll-batch" name="batch" required>
                        <option value="">Select learning mode</option>
                        <option value="Weekday Batch">Weekday Batch</option>
                        <option value="Weekend Batch">Weekend Batch</option>
                        <option value="Online Live">Online Live</option>
                        <option value="Need Guidance">Need Guidance</option>
                    </select>
                    <small class="enroll-error" id="enroll-batch-error"></small>
                </div>

                <div class="enroll-field">
                    <label for="enroll-interest">Area of Interest *</label>
                    <select id="enroll-interest" name="interest" required>
                        <option value="">Select your area of interest</option>
                        <option value="Data Artificial">Data Artificial</option>
                        <option value="Gen Ai & Agentic Ai">Gen Ai & Agentic Ai</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Python">Python</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Java">Java</option>
                        <!-- <option value="Machine Learning">Machine Learning</option> -->
                        <!-- <option value="Not Sure Yet">Not Sure Yet</option> -->
                    </select>
                    <small class="enroll-error" id="enroll-interest-error"></small>
                </div>

                <div class="enroll-field">
                    <label for="enroll-captcha-input" id="enroll-captcha-label">
                        Solve the security question
                    </label>

                    <div class="enroll-captcha-row">
                        <input
                            type="number"
                            id="enroll-captcha-input"
                            name="captcha"
                            placeholder="Enter answer"
                            inputmode="numeric"
                            required
                        >

                        <button
                            type="button"
                            id="enroll-captcha-refresh"
                            class="enroll-submit enroll-refresh"
                        >
                            New Question
                        </button>
                    </div>

                    <small class="enroll-error" id="enroll-captcha-error"></small>
                </div>

                <button type="submit" class="enroll-submit">
                    Enquire on WhatsApp →
                </button>

                <p class="enroll-status" id="enroll-status"
                   role="status" aria-live="polite"></p>

                <p class="enroll-note">
                    Your details will be prepared as a WhatsApp enquiry.
                    Review the message and press Send in WhatsApp.
                </p>

            </form>
        </div>

    </div>
</section>

<script>
(function () {
    'use strict';

    var form = document.getElementById('enroll-form');
    if (!form) return;

    var nameInput = document.getElementById('enroll-name');
    var emailInput = document.getElementById('enroll-email');
    var phoneInput = document.getElementById('enroll-phone');
    var batchInput = document.getElementById('enroll-batch');
    var interestInput = document.getElementById('enroll-interest');
    var captchaInput = document.getElementById('enroll-captcha-input');
    var captchaLabel = document.getElementById('enroll-captcha-label');
    var captchaRefresh = document.getElementById('enroll-captcha-refresh');
    var status = document.getElementById('enroll-status');

    var whatsappNumber = <?php echo htmlspecialchars($global_info['globle_whatsapp']); ?>

    var captchaA;
    var captchaB;

    function setError(input, message) {
        var error = document.getElementById(input.id + '-error');

        if (error) error.textContent = message;

        input.setAttribute('aria-invalid', message ? 'true' : 'false');
        return !message;
    }

    function validateName() {
        var value = nameInput.value.trim();

        if (value.length < 2 || value.length > 80) {
            return setError(nameInput, 'Enter a name between 2 and 80 characters.');
        }

        if (!/^[\p{L}\p{M}][\p{L}\p{M}\s.'-]*$/u.test(value)) {
            return setError(nameInput, 'Please enter a valid name.');
        }

        return setError(nameInput, '');
    }

    function validateEmail() {
        var value = emailInput.value.trim();

        if (
            value.length > 254 ||
            !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)
        ) {
            return setError(emailInput, 'Please enter a valid email address.');
        }

        return setError(emailInput, '');
    }

    function validatePhone() {
        var value = phoneInput.value.trim();

        if (!/^[6-9]\d{9}$/.test(value)) {
            return setError(
                phoneInput,
                'Enter a valid 10-digit Indian mobile number.'
            );
        }

        return setError(phoneInput, '');
    }

    function validateSelect(input, message) {
        return setError(input, input.value ? '' : message);
    }

    function validateCaptcha() {
        var value = captchaInput.value.trim();

        if (!/^\d+$/.test(value) ||
            Number(value) !== captchaA + captchaB) {
            return setError(captchaInput, 'Incorrect answer. Try again.');
        }

        return setError(captchaInput, '');
    }

    function newCaptcha() {
        captchaA = Math.floor(Math.random() * 8) + 2;
        captchaB = Math.floor(Math.random() * 8) + 2;

        captchaLabel.textContent =
            'Security check: Solve ' + captchaA + ' + ' + captchaB + ' =';

        captchaInput.value = '';
        setError(captchaInput, '');
    }

    nameInput.addEventListener('input', validateName);
    emailInput.addEventListener('input', validateEmail);

    phoneInput.addEventListener('input', function () {
        phoneInput.value = phoneInput.value.replace(/\D/g, '').slice(0, 10);
        validatePhone();
    });

    batchInput.addEventListener('change', function () {
        validateSelect(batchInput, 'Please select a learning mode.');
    });

    interestInput.addEventListener('change', function () {
        validateSelect(interestInput, 'Please select an area of interest.');
    });

    captchaInput.addEventListener('input', validateCaptcha);
    captchaRefresh.addEventListener('click', newCaptcha);

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        status.textContent = '';

        var valid = true;

        if (!validateName()) valid = false;
        if (!validateEmail()) valid = false;
        if (!validatePhone()) valid = false;

        if (!validateSelect(batchInput, 'Please select a learning mode.')) {
            valid = false;
        }

        if (!validateSelect(interestInput, 'Please select an area of interest.')) {
            valid = false;
        }

        if (!validateCaptcha()) valid = false;

        if (!valid) {
            status.textContent = 'Please correct the highlighted fields.';

            var firstInvalid = form.querySelector('[aria-invalid="true"]');
            if (firstInvalid) firstInvalid.focus();

            return;
        }

        if (!/^\d{10,15}$/.test(whatsappNumber)) {
            status.textContent =
                'WhatsApp number is missing from global information. Please configure the correct WhatsApp field in global_info.php.';
            return;
        }

        var message = [
            'DATA SCIENCE COURSE ENQUIRY',
            '',
            'Full Name: ' + nameInput.value.trim(),
            'Email: ' + emailInput.value.trim(),
            'Mobile: +91 ' + phoneInput.value.trim(),
            'Preferred Learning Mode: ' + batchInput.value,
            'Area of Interest: ' + interestInput.value,
            '',
            'I would like to know more about the course, curriculum, fees and available batches.'
        ].join('\n');

        var whatsappURL =
            'https://wa.me/' + whatsappNumber +
            '?text=' + encodeURIComponent(message);

        var newWindow = window.open(whatsappURL, '_blank');

        if (newWindow) {
            newWindow.opener = null;
            status.textContent =
                'WhatsApp opened. Review the message and press Send.';
        } else {
            status.textContent =
                'WhatsApp could not open. Please allow pop-ups and try again.';
        }
    });

    newCaptcha();
})();
</script>
