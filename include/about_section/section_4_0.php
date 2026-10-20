<?php
// if (session_status() === PHP_SESSION_NONE) {
//     session_start();
// }

require_once dirname(__DIR__, 2) . '/admin_access/db_config.php';

if (!isset($mydb) || !($mydb instanceof mysqli)) {
    error_log('Student review form: database connection unavailable.');
    http_response_code(500);
    exit('Something went wrong. Please try again later.');
}

if (empty($_SESSION['student_review_csrf_xk91'])) {
    $_SESSION['student_review_csrf_xk91'] = bin2hex(random_bytes(32));
}

$srMessageXk91 = '';
$srMessageTypeXk91 = '';
$srNameXk91 = '';
$srCourseXk91 = '';
$srReviewXk91 = '';
$srRatingXk91 = '5';

function srLengthXk91(string $value): int
{
    return function_exists('mb_strlen')
        ? mb_strlen($value, 'UTF-8')
        : strlen($value);
}

function srCleanXk91(string $value): string
{
    return trim($value);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $srNameXk91 = srCleanXk91((string)($_POST['student_name'] ?? ''));
    $srCourseXk91 = srCleanXk91((string)($_POST['course_name'] ?? ''));
    $srReviewXk91 = srCleanXk91((string)($_POST['review_message'] ?? ''));
    $srRatingXk91 = (string)($_POST['review_rating'] ?? '');
    $srTokenXk91 = (string)($_POST['csrf_token'] ?? '');
    $srHoneypotXk91 = trim((string)($_POST['website_url_xk91'] ?? ''));

    $srErrorsXk91 = [];

    if ($srHoneypotXk91 !== '') {
        $srErrorsXk91[] = 'Unable to submit this review.';
    }

    if (
        $srTokenXk91 === '' ||
        !hash_equals($_SESSION['student_review_csrf_xk91'], $srTokenXk91)
    ) {
        $srErrorsXk91[] = 'Your session expired. Refresh the page and try again.';
    }

    if ($srNameXk91 === '') {
        $srErrorsXk91[] = 'Please enter your full name.';
    } elseif (srLengthXk91($srNameXk91) > 100) {
        $srErrorsXk91[] = 'Name must not exceed 100 characters.';
    } elseif (preg_match('/[\x00-\x1F\x7F]/u', $srNameXk91)) {
        $srErrorsXk91[] = 'Name contains invalid characters.';
    }

    if ($srCourseXk91 === '') {
        $srErrorsXk91[] = 'Please enter your course name.';
    } elseif (srLengthXk91($srCourseXk91) > 150) {
        $srErrorsXk91[] = 'Course name must not exceed 150 characters.';
    } elseif (preg_match('/[\x00-\x1F\x7F]/u', $srCourseXk91)) {
        $srErrorsXk91[] = 'Course name contains invalid characters.';
    }

    if ($srReviewXk91 === '') {
        $srErrorsXk91[] = 'Please write your review.';
    } elseif (srLengthXk91($srReviewXk91) < 10) {
        $srErrorsXk91[] = 'Review must contain at least 10 characters.';
    } elseif (srLengthXk91($srReviewXk91) > 3000) {
        $srErrorsXk91[] = 'Review must not exceed 3000 characters.';
    } elseif (preg_match('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', $srReviewXk91)) {
        $srErrorsXk91[] = 'Review contains invalid control characters.';
    }

    if (!in_array($srRatingXk91, ['1', '2', '3', '4', '5'], true)) {
        $srErrorsXk91[] = 'Please select a valid rating.';
    }

    if (!$srErrorsXk91) {
        $srRatingIntXk91 = (int)$srRatingXk91;

        $srStmtXk91 = $mydb->prepare(
            "INSERT INTO student_reviews_xk91
            (student_name, course_name, review_message, review_rating, review_status)
            VALUES (?, ?, ?, ?, 'Pending')"
        );

        if ($srStmtXk91) {
            $srStmtXk91->bind_param(
                'sssi',
                $srNameXk91,
                $srCourseXk91,
                $srReviewXk91,
                $srRatingIntXk91
            );

            if ($srStmtXk91->execute()) {
                $srMessageXk91 = 'Thank you! Your review has been submitted for approval.';
                $srMessageTypeXk91 = 'success';

                $srNameXk91 = '';
                $srCourseXk91 = '';
                $srReviewXk91 = '';
                $srRatingXk91 = '5';

                $_SESSION['student_review_csrf_xk91'] = bin2hex(random_bytes(32));
            } else {
                error_log('Student review insert failed: ' . $srStmtXk91->error);
                $srMessageXk91 = 'We could not submit your review. Please try again.';
                $srMessageTypeXk91 = 'error';
            }

            $srStmtXk91->close();
        } else {
            error_log('Student review prepare failed: ' . $mydb->error);
            $srMessageXk91 = 'Something went wrong. Please try again later.';
            $srMessageTypeXk91 = 'error';
        }
    } else {
        $srMessageXk91 = implode(' ', $srErrorsXk91);
        $srMessageTypeXk91 = 'error';
    }
}

function srEscapeXk91(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>

<section class="sr-form-section-xk91">
    <div class="sr-form-card-xk91">
        <div class="sr-form-heading-xk91">
            <span class="sr-form-eyebrow-xk91">STUDENT FEEDBACK</span>
            <h2>Share Your Experience</h2>
            <p>Your feedback helps us improve the learning experience at Eagletfly.</p>
        </div>

        <?php if ($srMessageXk91 !== ''): ?>
            <div class="sr-form-message-xk91 sr-form-message-<?php echo srEscapeXk91($srMessageTypeXk91); ?>"
                role="status" aria-live="polite">
                <?php echo srEscapeXk91($srMessageXk91); ?>
            </div>
        <?php endif; ?>

        <form class="sr-form-xk91" id="srFormXk91" method="POST"
            action="" accept-charset="UTF-8" novalidate>

            <input type="hidden" name="csrf_token"
                value="<?php echo srEscapeXk91($_SESSION['student_review_csrf_xk91']); ?>">

            <div class="sr-honeypot-xk91" aria-hidden="true">
                <label for="srWebsiteXk91">Leave this field empty</label>
                <input type="text" id="srWebsiteXk91" name="website_url_xk91"
                    tabindex="-1" autocomplete="off">
            </div>

            <div class="sr-field-xk91">
                <label for="srNameXk91">Full Name <span>*</span></label>
                <input type="text" id="srNameXk91" name="student_name"
                    maxlength="100" minlength="2" autocomplete="name"
                    value="<?php echo srEscapeXk91($srNameXk91); ?>"
                    placeholder="Enter your full name" required>
                <small class="sr-field-error-xk91" id="srNameErrorXk91"></small>
            </div>

            <div class="sr-field-xk91">
                <label for="srCourseXk91">Course Name <span>*</span></label>
                <input type="text" id="srCourseXk91" name="course_name"
                    maxlength="150" autocomplete="off"
                    value="<?php echo srEscapeXk91($srCourseXk91); ?>"
                    placeholder="e.g. Digital Marketing" required>
                <small class="sr-field-error-xk91" id="srCourseErrorXk91"></small>
            </div>

            <div class="sr-field-xk91">
                <label>How would you rate your experience? <span>*</span></label>
                <div class="sr-rating-xk91" role="radiogroup" aria-label="Rating">
                    <?php for ($srI = 5; $srI >= 1; $srI--): ?>
                        <input type="radio" id="srRating<?php echo $srI; ?>Xk91"
                            name="review_rating" value="<?php echo $srI; ?>"
                            <?php echo ((string)$srI === $srRatingXk91) ? 'checked' : ''; ?>>
                        <label for="srRating<?php echo $srI; ?>Xk91"
                            title="<?php echo $srI; ?> star<?php echo $srI > 1 ? 's' : ''; ?>">
                            ★
                        </label>
                    <?php endfor; ?>
                </div>
                <small class="sr-field-error-xk91" id="srRatingErrorXk91"></small>
            </div>

            <div class="sr-field-xk91">
                <div class="sr-review-label-row-xk91">
                    <label for="srReviewXk91">Your Review <span>*</span></label>
                    <small><span id="srReviewCountXk91">0</span>/3000</small>
                </div>
                <textarea id="srReviewXk91" name="review_message"
                    rows="5" minlength="10" maxlength="3000"
                    placeholder="Tell us about your learning experience..."
                    required><?php echo srEscapeXk91($srReviewXk91); ?></textarea>
                <small class="sr-field-error-xk91" id="srReviewErrorXk91"></small>
            </div>

            <button class="sr-submit-btn-xk91" type="submit" id="srSubmitXk91">
                Submit Review <span aria-hidden="true">→</span>
            </button>

            <p class="sr-form-note-xk91">
                Your review will be published after admin approval.
            </p>
        </form>
    </div>
</section>
<!-- 
<style>
    .sr-form-section-xk91 {
        width: 100%;
        padding: 60px 20px;
        box-sizing: border-box;
        background: #f5f7fc;
        font-family: Arial, sans-serif;
    }

    .sr-form-section-xk91 * {
        box-sizing: border-box;
    }

    .sr-form-card-xk91 {
        max-width: 680px;
        margin: 0 auto;
        padding: 38px;
        border: 1px solid #e4e9f3;
        border-radius: 18px;
        background: #fff;
        box-shadow: 0 15px 45px rgba(27, 42, 91, .08);
    }

    .sr-form-heading-xk91 {
        margin-bottom: 28px;
        text-align: center;
    }

    .sr-form-eyebrow-xk91 {
        color: #f2701d;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 2px;
    }

    .sr-form-heading-xk91 h2 {
        margin: 10px 0;
        color: #1b2a5b;
        font-size: clamp(25px, 4vw, 34px);
    }

    .sr-form-heading-xk91 p {
        margin: 0;
        color: #68738b;
        font-size: 15px;
        line-height: 1.7;
    }

    .sr-field-xk91 {
        margin-bottom: 22px;
    }

    .sr-field-xk91>label,
    .sr-review-label-row-xk91>label {
        display: block;
        margin-bottom: 9px;
        color: #202d4c;
        font-size: 14px;
        font-weight: 700;
    }

    .sr-field-xk91 label span {
        color: #e65e28;
    }

    .sr-field-xk91 input[type="text"],
    .sr-field-xk91 textarea {
        display: block;
        width: 100%;
        padding: 13px 15px;
        border: 1px solid #d9dfeb;
        border-radius: 9px;
        outline: none;
        background: #fff;
        color: #202d4c;
        font: inherit;
        font-size: 15px;
        transition: border-color .2s, box-shadow .2s;
    }

    .sr-field-xk91 textarea {
        resize: vertical;
        min-height: 130px;
    }

    .sr-field-xk91 input:focus,
    .sr-field-xk91 textarea:focus {
        border-color: #1b2a5b;
        box-shadow: 0 0 0 3px rgba(27, 42, 91, .09);
    }

    .sr-field-xk91 .sr-invalid-xk91 {
        border-color: #d93025 !important;
        box-shadow: 0 0 0 2px rgba(217, 48, 37, .08);
    }

    .sr-field-error-xk91 {
        display: block;
        min-height: 0;
        margin-top: 6px;
        color: #c62828;
        font-size: 12px;
    }

    .sr-review-label-row-xk91 {
        display: flex;
        justify-content: space-between;
        gap: 10px;
    }

    .sr-review-label-row-xk91 small {
        color: #778198;
    }

    .sr-rating-xk91 {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
        gap: 6px;
    }

    .sr-rating-xk91 input {
        position: absolute;
        width: 1px;
        height: 1px;
        opacity: 0;
    }

    .sr-rating-xk91 label {
        color: #d7dce6;
        cursor: pointer;
        font-size: 36px;
        line-height: 1.2;
    }

    .sr-rating-xk91 label:hover,
    .sr-rating-xk91 label:hover~label,
    .sr-rating-xk91 input:checked~label {
        color: #f4a623;
    }

    .sr-rating-xk91 input:focus-visible+label {
        outline: 2px solid #1b2a5b;
        outline-offset: 3px;
    }

    .sr-submit-btn-xk91 {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        width: 100%;
        min-height: 50px;
        padding: 14px 20px;
        border: 0;
        border-radius: 9px;
        background: #1b2a5b;
        color: #fff;
        cursor: pointer;
        font-size: 15px;
        font-weight: 700;
    }

    .sr-submit-btn-xk91:hover {
        background: #f2701d;
    }

    .sr-submit-btn-xk91:disabled {
        opacity: .65;
        cursor: not-allowed;
    }

    .sr-form-note-xk91 {
        margin: 14px 0 0;
        color: #778198;
        text-align: center;
        font-size: 12px;
        line-height: 1.6;
    }

    .sr-form-message-xk91 {
        margin-bottom: 22px;
        padding: 13px 15px;
        border-radius: 8px;
        font-size: 14px;
        line-height: 1.6;
    }

    .sr-form-message-success {
        color: #17643b;
        background: #e9f8ef;
    }

    .sr-form-message-error {
        color: #9c2525;
        background: #fff0f0;
    }

    .sr-honeypot-xk91 {
        position: absolute !important;
        left: -10000px !important;
        width: 1px !important;
        height: 1px !important;
        overflow: hidden !important;
    }

    @media (max-width: 600px) {
        .sr-form-section-xk91 {
            padding: 35px 14px;
        }

        .sr-form-card-xk91 {
            padding: 24px 18px;
            border-radius: 13px;
        }

        .sr-rating-xk91 label {
            font-size: 32px;
        }
    }
</style> -->

<style>
    
/* Eagletfly Student Review Form — Responsive Design */
.sr-form-section-xk91 {
    width: 100%;
    padding: clamp(35px, 6vw, 85px) 18px;
    box-sizing: border-box;
    background:
        radial-gradient(ellipse at 8% 5%, rgba(242,112,29,.07), transparent 35%),
        linear-gradient(135deg, #f7f8fd 0%, #eef2fa 100%);
    font-family: inherit;
}

.sr-form-section-xk91 *,
.sr-form-section-xk91 *::before,
.sr-form-section-xk91 *::after {
    box-sizing: border-box;
}

.sr-form-card-xk91 {
    position: relative;
    width: 100%;
    max-width: 700px;
    margin: 0 auto;
    padding: clamp(23px, 5vw, 48px);
    overflow: hidden;
    background: #fff;
    border: 1px solid rgba(27,42,91,.09);
    border-radius: 24px;
    box-shadow:
        0 24px 70px rgba(27,42,91,.09),
        0 3px 12px rgba(27,42,91,.025);
}

.sr-form-card-xk91::before {
    content: "";
    position: absolute;
    inset: 0 0 auto;
    height: 5px;
    background: linear-gradient(90deg, #1b2a5b, #f2701d);
}

.sr-form-heading-xk91 {
    margin: 0 0 32px;
    text-align: center;
}

.sr-form-eyebrow-xk91 {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 8px 13px;
    color: #d95e15;
    background: #fff2e9;
    border: 1px solid #ffe2cf;
    border-radius: 30px;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.6px;
}

.sr-form-heading-xk91 h2 {
    margin: 17px 0 12px;
    color: #1b2a5b;
    font-size: clamp(26px, 3.2vw, 36px);
    font-weight: 600;
    line-height: 1.2;
    letter-spacing: -.8px;
}

.sr-form-heading-xk91 p {
    max-width: 460px;
    margin: 0 auto;
    color: #6d7890;
    font-size: 14px;
    line-height: 1.8;
}

.sr-field-xk91 {
    min-width: 0;
    margin-bottom: 23px;
}

.sr-field-xk91 > label,
.sr-review-label-row-xk91 > label {
    display: block;
    margin: 0 0 10px;
    color: #253253;
    font-size: 13px;
    font-weight: 750;
    line-height: 1.5;
}

.sr-field-xk91 label span {
    color: #f2701d;
}

.sr-field-xk91 input[type="text"],
.sr-field-xk91 textarea {
    display: block;
    width: 100%;
    min-width: 0;
    margin: 0;
    padding: 15px 16px;
    border: 1px solid #dce2ed;
    border-radius: 11px;
    outline: none;
    background: #fbfcff;
    color: #1b2a5b;
    font: inherit;
    font-size: 14px;
    line-height: 1.6;
    box-shadow: 0 2px 5px rgba(27,42,91,.015);
    transition: border-color .2s ease, background .2s ease,
                box-shadow .2s ease;
}

.sr-form-section-xk91 input::placeholder,
.sr-form-section-xk91 textarea::placeholder {
    color: #9aa4b8;
    opacity: 1;
}

.sr-field-xk91 input[type="text"]:hover,
.sr-field-xk91 textarea:hover {
    border-color: #b9c5db;
}

.sr-field-xk91 input[type="text"]:focus,
.sr-field-xk91 textarea:focus {
    border-color: #425a9c;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(66,90,156,.10);
}

.sr-field-xk91 textarea {
    min-height: 155px;
    resize: vertical;
}

.sr-field-xk91 .sr-invalid-xk91 {
    border-color: #dc4545 !important;
    background: #fffafa !important;
    box-shadow: 0 0 0 3px rgba(220,69,69,.08) !important;
}

.sr-field-error-xk91 {
    display: block;
    margin-top: 6px;
    color: #c52f38;
    font-size: 12px;
    line-height: 1.5;
}

.sr-review-label-row-xk91 {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.sr-review-label-row-xk91 > label {
    margin-bottom: 10px;
}

.sr-review-label-row-xk91 small {
    margin-bottom: 10px;
    color: #8791a6;
    font-size: 11px;
    white-space: nowrap;
}

.sr-rating-xk91 {
    display: inline-flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
    align-items: center;
    gap: 7px;
    min-height: 43px;
}

.sr-rating-xk91 input {
    position: absolute;
    width: 1px;
    height: 1px;
    overflow: hidden;
    opacity: 0;
    clip-path: inset(50%);
}

.sr-rating-xk91 label {
    color: #dce1eb;
    cursor: pointer;
    font-size: 35px;
    line-height: 1;
    transition: color .15s ease, transform .15s ease;
}

.sr-rating-xk91 label:hover,
.sr-rating-xk91 label:hover ~ label,
.sr-rating-xk91 input:checked ~ label {
    color: #f6a52b;
}

.sr-rating-xk91 label:hover {
    transform: scale(1.1);
}

.sr-rating-xk91 input:focus-visible + label {
    outline: 2px solid #1b2a5b;
    outline-offset: 4px;
    border-radius: 3px;
}

.sr-submit-btn-xk91 {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
    min-height: 54px;
    margin-top: 5px;
    padding: 15px 22px;
    border: 0;
    border-radius: 11px;
    background: linear-gradient(110deg, #1b2a5b, #283a76);
    color: #fff;
    font-family: inherit;
    font-size: 14px;
    font-weight: 750;
    cursor: pointer;
    box-shadow: 0 7px 18px rgba(27,42,91,.17);
    transition: background .2s ease, box-shadow .2s ease,
                transform .2s ease;
}

.sr-submit-btn-xk91 span {
    font-size: 19px;
    line-height: 1;
}

.sr-submit-btn-xk91:hover {
    background: linear-gradient(110deg, #e96116, #f58230);
    box-shadow: 0 9px 22px rgba(242,112,29,.23);
}

.sr-submit-btn-xk91:focus-visible {
    outline: 3px solid rgba(242,112,29,.45);
    outline-offset: 3px;
}

.sr-submit-btn-xk91:disabled {
    opacity: .65;
    cursor: not-allowed;
    box-shadow: none;
}

.sr-form-note-xk91 {
    margin: 15px 0 0;
    color: #7d879c;
    text-align: center;
    font-size: 11px;
    line-height: 1.7;
}

.sr-form-message-xk91 {
    margin: 0 0 23px;
    padding: 14px 16px;
    border: 1px solid transparent;
    border-radius: 11px;
    font-size: 13px;
    line-height: 1.7;
    overflow-wrap: anywhere;
}

.sr-form-message-success {
    color: #17643b;
    background: #effaf3;
    border-color: #ccebd7;
}

.sr-form-message-error {
    color: #9c2525;
    background: #fff3f3;
    border-color: #f3d0d0;
}

.sr-honeypot-xk91 {
    position: absolute !important;
    left: -10000px !important;
    width: 1px !important;
    height: 1px !important;
    overflow: hidden !important;
}

/* Tablets */
@media (max-width: 768px) {
    .sr-form-section-xk91 {
        padding: 45px 18px;
    }

    .sr-form-card-xk91 {
        max-width: 620px;
        border-radius: 20px;
    }

    .sr-form-heading-xk91 {
        margin-bottom: 27px;
    }

    .sr-field-xk91 {
        margin-bottom: 20px;
    }
}

/* Mobile phones */
@media (max-width: 480px) {
    .sr-form-section-xk91 {
        padding: 30px 12px;
    }

    .sr-form-card-xk91 {
        padding: 28px 18px 24px;
        border-radius: 16px;
    }

    .sr-form-heading-xk91 {
        margin-bottom: 25px;
    }

    .sr-form-eyebrow-xk91 {
        padding: 7px 10px;
        font-size: 10px;
        letter-spacing: 1.2px;
    }

    .sr-form-heading-xk91 h2 {
        margin-top: 14px;
        font-size: 27px;
        letter-spacing: -.5px;
    }

    .sr-form-heading-xk91 p {
        font-size: 13px;
        line-height: 1.7;
    }

    .sr-field-xk91 {
        margin-bottom: 19px;
    }

    .sr-field-xk91 input[type="text"],
    .sr-field-xk91 textarea {
        padding: 13px 12px;
        font-size: 14px;
    }

    .sr-field-xk91 textarea {
        min-height: 135px;
    }

    .sr-rating-xk91 {
        gap: 8px;
    }

    .sr-rating-xk91 label {
        font-size: 32px;
    }

    .sr-submit-btn-xk91 {
        min-height: 51px;
        padding: 13px 15px;
    }
}

/* Small mobile screens */
@media (max-width: 350px) {
    .sr-form-section-xk91 {
        padding-right: 8px;
        padding-left: 8px;
    }

    .sr-form-card-xk91 {
        padding: 25px 13px 21px;
    }

    .sr-form-heading-xk91 h2 {
        font-size: 24px;
    }

    .sr-rating-xk91 {
        gap: 6px;
    }

    .sr-rating-xk91 label {
        font-size: 29px;
    }
}

/* Respect reduced-motion preferences */
@media (prefers-reduced-motion: reduce) {
    .sr-form-section-xk91 *,
    .sr-form-section-xk91 *::before,
    .sr-form-section-xk91 *::after {
        transition: none !important;
        scroll-behavior: auto !important;
    }
}

</style>

<script>
    (function() {
        const srForm = document.getElementById('srFormXk91');
        if (!srForm) return;

        const srName = document.getElementById('srNameXk91');
        const srCourse = document.getElementById('srCourseXk91');
        const srReview = document.getElementById('srReviewXk91');
        const srCount = document.getElementById('srReviewCountXk91');
        const srSubmit = document.getElementById('srSubmitXk91');

        function srSetError(input, errorId, message) {
            const error = document.getElementById(errorId);
            error.textContent = message;
            if (input) {
                input.classList.toggle('sr-invalid-xk91', Boolean(message));
                input.setAttribute('aria-invalid', message ? 'true' : 'false');
            }
        }

        function srValidateName() {
            const value = srName.value.trim();
            let error = '';
            if (!value) error = 'Please enter your full name.';
            else if ([...value].length < 2) error = 'Name must contain at least 2 characters.';
            else if ([...value].length > 100) error = 'Name must not exceed 100 characters.';
            else if (/[\u0000-\u001F\u007F]/.test(value)) error = 'Please remove invalid characters.';
            srSetError(srName, 'srNameErrorXk91', error);
            return !error;
        }

        function srValidateCourse() {
            const value = srCourse.value.trim();
            let error = '';
            if (!value) error = 'Please enter your course name.';
            else if ([...value].length > 150) error = 'Course name must not exceed 150 characters.';
            else if (/[\u0000-\u001F\u007F]/.test(value)) error = 'Please remove invalid characters.';
            srSetError(srCourse, 'srCourseErrorXk91', error);
            return !error;
        }

        function srValidateReview() {
            const value = srReview.value.trim();
            let error = '';
            if (!value) error = 'Please write your review.';
            else if ([...value].length < 10) error = 'Review must contain at least 10 characters.';
            else if ([...value].length > 3000) error = 'Review must not exceed 3000 characters.';
            else if (/[\u0000-\u0008\u000B\u000C\u000E-\u001F\u007F]/.test(value)) error = 'Please remove invalid control characters.';
            srSetError(srReview, 'srReviewErrorXk91', error);
            srCount.textContent = [...srReview.value].length;
            return !error;
        }

        function srValidateRating() {
            const checked = srForm.querySelector('input[name="review_rating"]:checked');
            const error = checked ? '' : 'Please select a star rating.';
            document.getElementById('srRatingErrorXk91').textContent = error;
            return !error;
        }

        srName.addEventListener('input', srValidateName);
        srCourse.addEventListener('input', srValidateCourse);
        srReview.addEventListener('input', srValidateReview);
        srForm.querySelectorAll('input[name="review_rating"]').forEach(function(radio) {
            radio.addEventListener('change', srValidateRating);
        });

        srCount.textContent = [...srReview.value].length;

        srForm.addEventListener('submit', function(event) {
            const valid = [
                srValidateName(),
                srValidateCourse(),
                srValidateReview(),
                srValidateRating()
            ].every(Boolean);

            if (!valid) {
                event.preventDefault();
                const firstInvalid = srForm.querySelector('.sr-invalid-xk91');
                if (firstInvalid) firstInvalid.focus();
                return;
            }

            srSubmit.disabled = true;
            srSubmit.textContent = 'Submitting...';
        });
    })();
</script>