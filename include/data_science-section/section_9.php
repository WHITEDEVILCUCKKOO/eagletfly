 <style>
        .enroll-wrap {
            box-sizing: border-box;
            background: #F6F4EF;
            padding: 96px 8vw;
            /* font-family: 'Inter', sans-serif; */
        }

        .enroll-wrap * {
            box-sizing: border-box;
        }

        .enroll-grid {
            max-width: 1080px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            background: #14172B;
            border-radius: 18px;
            overflow: hidden;
        }

        .enroll-left {
            padding: 52px 44px;
        }

        .enroll-title {
            /* font-family: 'Space Grotesk', sans-serif; */
            font-weight: 600;
            font-size: clamp(24px, 2.6vw, 30px);
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
            align-items: center;
            font-size: 13.5px;
            color: #C6CAF0;
        }

        .enroll-mini-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #35D0BA;
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
            /* font-family: 'JetBrains Mono', monospace; */
        }

        .enroll-field input,
        .enroll-field select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #E4E0D6;
            border-radius: 8px;
            /* font-family: 'Inter', sans-serif; */
            font-size: 14px;
            color: #14172B;
            transition: border-color 0.2s ease;
        }

        .enroll-field input:focus,
        .enroll-field select:focus {
            outline: none;
            border-color: #35D0BA;
        }

        .enroll-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .enroll-submit {
            width: 100%;
            background: #14172B;
            color: #F6F4EF;
            border: none;
            padding: 14px;
            border-radius: 8px;
            /* font-family: 'Inter', sans-serif; */
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            margin-top: 6px;
            transition: background 0.2s ease;
        }

        .enroll-submit:hover {
            background: #262C5C;
        }

        .enroll-note {
            font-size: 12px;
            color: #A0A4B8;
            text-align: center;
            margin: 10px 0 0;
        }

        @media (max-width: 820px) {
            .enroll-grid {
                grid-template-columns: 1fr;
            }

            .enroll-row {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="enroll-wrap">
        <div class="enroll-grid">
            <div class="enroll-left">
                <h2 class="enroll-title">Reserve a seat in the next batch</h2>
                <p class="enroll-desc">Talk to our program advisor, see the full curriculum and find a batch that fits your schedule.</p>
                <div class="enroll-mini">
                    <div class="enroll-mini-item"><span class="enroll-mini-dot"></span>Weekday batch starts 28 September</div>
                    <div class="enroll-mini-item"><span class="enroll-mini-dot"></span>Weekend batch starts 4 October</div>
                    <div class="enroll-mini-item"><span class="enroll-mini-dot"></span>Limited seats per cohort</div>
                </div>
            </div>
            <div class="enroll-right">
                <div class="enroll-field"><label>Full name</label><input type="text" placeholder="Your name"></div>
                <div class="enroll-row">
                    <div class="enroll-field"><label>Email</label><input type="email" placeholder="you@email.com"></div>
                    <div class="enroll-field"><label>Phone</label><input type="tel" placeholder="+91"></div>
                </div>
                <div class="enroll-field">
                    <label>Preferred batch</label>
                    <select>
                        <option>Weekday — starts 28 Sept</option>
                        <option>Weekend — starts 4 Oct</option>
                        <option>Online live</option>
                    </select>
                </div>
                <div class="enroll-field">
                    <label id="enroll-captcha-label">Solve 3 + 4 =</label>
                    <input type="text" id="enroll-captcha-input" placeholder="Enter answer">
                </div>
                <button class="enroll-submit" id="enroll-submit-btn">Reserve my seat</button>
                <p class="enroll-note">Your data stays with us. No spam, ever.</p>
            </div>
        </div>
    </section>

    <script>
        (function() {
            var a = Math.floor(Math.random() * 6) + 2;
            var b = Math.floor(Math.random() * 6) + 2;
            var label = document.getElementById('enroll-captcha-label');
            if (label) label.textContent = 'Solve ' + a + ' + ' + b + ' =';
            var btn = document.getElementById('enroll-submit-btn');
            var input = document.getElementById('enroll-captcha-input');
            if (btn) {
                btn.addEventListener('click', function() {
                    if (parseInt(input.value, 10) === a + b) {
                        btn.textContent = 'Request received ✓';
                    } else {
                        input.style.borderColor = '#FF6F59';
                    }
                });
            }
        })();
    </script>
