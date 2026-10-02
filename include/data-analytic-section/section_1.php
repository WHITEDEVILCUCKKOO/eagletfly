<!-- section 1 ( hero ) -->
<style>
    .dgfh-hero {
        position: relative;
        background: radial-gradient(circle at 15% 85%, rgba(110, 100, 255, 0.12) 0%, rgba(110, 100, 255, 0.06) 25%, transparent 50%), radial-gradient(circle at 85% 20%, rgba(70, 140, 255, 0.13) 0%, rgba(70, 140, 255, 0.06) 30%, transparent 60%), linear-gradient(135deg, #ffffff 0%, #f8faff 35%, #eef3ff 70%, #e5edff 100%);
        padding: 120px 40px 60px;
        overflow: hidden;
    }

    .dgfh-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
    }

    .dgfh-container {
        position: relative;
        z-index: 1;
        max-width: 1180px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 380px;
        gap: 36px;
        align-items: start;
    }

    /* ---------- left column ---------- */

    .dgfh-breadcrumb {
        font-size: 13px;
        color: #121213;
        margin-bottom: 14px;
        font-weight: 500;
    }

    .dgfh-heading {
        font-size: 34px;
        font-weight: 800;
        color: #181717;
        margin: 0 0 16px 0;
        opacity: 0;
        animation: dgfh-fade-up 0.6s ease forwards;
    }

    .dgfh-subtext {
        font-size: 15.5px;
        color: #363636;
        line-height: 1.7;
        max-width: 560px;
        margin: 0 0 26px 0;
        opacity: 0;
        animation: dgfh-fade-up 0.6s ease 0.1s forwards;
    }

    @keyframes dgfh-fade-up {
        from {
            opacity: 0;
            transform: translateY(14px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dgfh-rating-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 22px;
        margin-bottom: 26px;
        font-size: 13px;
        color: #232324;
    }

    .dgfh-rating-main {
        font-weight: 600;
    }

    .dgfh-badge-row {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 15px;
    }

    .dgfh-badge {
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 600;
        padding: 3px 15px;
        border-radius: 15px;
        background: aliceblue;
    }

    .dgfh-badge-dot {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        font-weight: 800;
        color: #202020;
    }

    .dgfh-btn-row {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-top: 100px;
    }

    .dgfh-btn {
        padding: 14px 26px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 0.4px;
        cursor: pointer;
        font-style: normal;
        border: 2px solid transparent;
        transition: transform 0.2s ease, box-shadow 0.25s ease, background 0.25s ease;
    }

    .dgfh-btn-solid {
        background: #FD8321;
        color: #f7f2f2;
        border-color: #FD8321;
    }

    .dgfh-btn-solid:hover {
        background: #e2941a;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(245, 166, 35, 0.35);
    }

    .dgfh-btn-outline {
        color: #fffdfd;
        border-color: #7ee0d0;
    }

    .dgfh-btn-outline:hover {
        background: rgba(126, 224, 208, 0.12);
        transform: translateY(-2px);
    }

    /* ---------- right column: form card ---------- */

    .dgfh-form-card {
        background: #fff;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
        opacity: 0;
        animation: dgfh-fade-up 0.6s ease 0.2s forwards;
    }

    .dgfh-form-header {
        background: linear-gradient(120deg, #373ACF, #0f2f8f);
        padding: 20px 22px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 12px;
        color: #fff;
    }

    .dgfh-form-header-title {
        font-size: 17px;
        font-weight: 800;
        line-height: 1.35;
        margin: 0 0 6px 0;
    }

    .dgfh-form-header-sub {
        font-size: 12.5px;
        color: #d7e3ff;
        margin: 0;
    }

    .dgfh-form-icon {
        flex: 0 0 auto;
        font-size: 30px;
        opacity: 0.85;
    }

    .dgfh-form-body {
        padding: 22px;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .dgfh-field {
        width: 100%;
        box-sizing: border-box;
        padding: 13px 14px;
        border: 1px solid #d9dde5;
        border-radius: 8px;
        font-size: 14px;
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .dgfh-field:focus {
        outline: none;
        border-color: #1449c4;
        box-shadow: 0 0 0 3px rgba(20, 73, 196, 0.12);
    }

    textarea.dgfh-field {
        resize: vertical;
        min-height: 80px;
    }

    .dgfh-phone-row {
        display: flex;
        gap: 8px;
    }

    .dgfh-country-code {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 0 12px;
        border: 1px solid #d9dde5;
        border-radius: 8px;
        font-size: 13px;
        color: #333;
    }

    .dgfh-flag {
        display: inline-block;
        width: 16px;
        height: 11px;
        background: linear-gradient(#ff9933 0 33%, #fff 33% 66%, #138808 66% 100%);
        border-radius: 2px;
    }

    .dgfh-phone-input {
        flex: 1 1 auto;
    }

    .dgfh-submit-btn {
        margin-top: 4px;
        padding: 14px;
        border: 2px solid #1449c4;
        border-radius: 8px;
        font-size: 14.5px;
        font-weight: 800;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: background 0.25s ease, color 0.25s ease, transform 0.2s ease;
        color: #fff;
        background: #373ACF;
    }

    .dgfh-submit-btn:hover {
        color: #ffffff;
        background: #242424;
        transform: translateY(-2px);
    }

    /* ---------- responsive ---------- */
    @media (max-width: 980px) {
        .dgfh-container {
            grid-template-columns: 1fr;
        }
        .dgfh-form-card {
            max-width: 460px;
        }
    }

    @media (max-width: 560px) {
        .dgfh-hero {
            padding: 120px 16px 44px;
        }
        .dgfh-heading {
            font-size: 24px;
        }
        .dgfh-subtext {
            font-size: 14px;
        }
        .dgfh-btn-row {
            flex-direction: column;
        }
        .dgfh-btn {
            width: 100%;
            text-align: center;
        }
    }

    /* animations */
    .dss {
        position: relative;
        overflow: hidden;
    }
    .decor-hero-glow1 {
        position: absolute;
        top: -180px;
        left: -160px;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
        opacity: .18;
        filter: blur(60px);
        z-index: 0;
        pointer-events: none;
    }
    .decor-hero-glow2 {
        position: absolute;
        bottom: -180px;
        right: -120px;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
        opacity: .18;
        filter: blur(60px);
        z-index: 0;
        pointer-events: none;
    }
</style>

<section class="dgfh-hero dss">
    <div class="decor-hero-glow1"></div>
    <div class="decor-hero-glow2"></div>

    <div class="dgfh-container">
        <!-- LEFT -->
        <div class="dgfh-left" style="padding-top:25px ;">
            <h1 class="dgfh-heading" style="font-family: 'Sora', inter; font-weight:800; font-size:44px;">Data Analytics Course <br> <em style="color: #373ACF; font-style:normal;"> in Delhi </em></h1>
            <p class="dgfh-subtext" style="color:#666666;padding:15px 0;">Uncover the methods to extract data for analytical purposes. Join us now and study under a skilled data analyst.</p>

            <div class="dgfh-rating-row">
                <span class="dgfh-rating-main" style="font-size: 15.5px; font-weight: 700;">⭐ 4.9 out of 5 based on 45479 votes</span>
            </div>

            <div class="dgfh-btn-row">
                <button class="dgfh-btn dgfh-btn-solid">Placement Report  &#10140;</button>
                <button class="dgfh-btn dgfh-btn-outline dark-gradient-animated">Download Curriculum  &#10140;</button>
                <button class="dgfh-btn dgfh-btn-outline dark-gradient-animated">Interview Questions  &#10140;</button>
            </div>
        </div>

        <!-- RIGHT: FORM (PHP Backend & JS WhatsApp Trigger) -->
        <div class="dgfh-form-card card1298he_no_hover">
            <form id="dgfhCounsellingForm" action="send_mail.php" method="POST">
                <div class="dgfh-form-header">
                    <div>
                        <h3 class="dgfh-form-header-title">Book A Free Counselling Session</h3>
                        <p class="dgfh-form-header-sub">we train you to get hired.</p>
                    </div>
                    <span class="dgfh-form-icon">
                        <svg width="25" fill="#ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M264 112L376 112C380.4 112 384 115.6 384 120L384 160L256 160L256 120C256 115.6 259.6 112 264 112zM208 120L208 160L128 160C92.7 160 64 188.7 64 224L64 320L576 320L576 224C576 188.7 547.3 160 512 160L432 160L432 120C432 89.1 406.9 64 376 64L264 64C233.1 64 208 89.1 208 120zM576 368L384 368L384 384C384 401.7 369.7 416 352 416L288 416C270.3 416 256 401.7 256 384L256 368L64 368L64 480C64 515.3 92.7 544 128 544L512 544C547.3 544 576 515.3 576 480L576 368z"/>
                        </svg>
                    </span>
                </div>

                <div class="dgfh-form-body">
                    <input class="dgfh-field" type="text" name="fullname" id="dgfhName" placeholder="Full Name*" required>
                    <input class="dgfh-field" type="email" name="email" id="dgfhEmail" placeholder="Email Address*" required>

                    <div class="dgfh-phone-row">
                        <span class="dgfh-country-code"><span class="dgfh-flag"></span>(+91)</span>
                        <input class="dgfh-field dgfh-phone-input" type="tel" name="phone" id="dgfhPhone" placeholder="Phone No*" required>
                    </div>

                    <textarea class="dgfh-field" name="message" id="dgfhMessage" placeholder="Message Details"></textarea>

                    <button type="submit" class="dgfh-submit-btn">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- JavaScript for WhatsApp Redirect & Form Handling -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("dgfhCounsellingForm");
        
        form.addEventListener("submit", function (e) {
            // Optional: If you want to prevent default form submission to test WhatsApp instantly, uncomment e.preventDefault();
            // e.preventDefault();

            const name = document.getElementById("dgfhName").value;
            const email = document.getElementById("dgfhEmail").value;
            const phone = document.getElementById("dgfhPhone").value;
            const message = document.getElementById("dgfhMessage").value;

            // Apana WhatsApp number yahan dalein (Country code ke sath, bina '+' ke, jaise: 919876543210)
            const whatsappNumber = "919876543210"; 

            const whatsappMessage = `*New Counselling Session Booking*%0A*Name:* ${encodeURIComponent(name)}%0A*Email:* ${encodeURIComponent(email)}%0A*Phone:* ${encodeURIComponent(phone)}%0A*Message:* ${encodeURIComponent(message)}`;

            // WhatsApp Web/App par redirect karne ke liye
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
            
            // Background me WhatsApp kholne ke liye (Form PHP script par mail bhejta rahega)
            window.open(whatsappURL, '_blank');
        });
    });
</script>

<!-- 
==================================================
PHP Script (Is code ko apne server par 'send_mail.php' naam se save karein):
==================================================
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["fullname"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $message = strip_tags(trim($_POST["message"]));

    // Jahan email bhejni hai wo email yahan daalein:
    $to = "your-email@example.com"; 
    $subject = "New Counselling Inquiry from " . $name;

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if (mail($to,$subject, $email_content,$headers)) {
        echo "<script>alert('Thank you! Your message has been sent successfully.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong, please try again.'); window.history.back();</script>";
    }
} else {
    echo "Access Denied";
}
?>
-->