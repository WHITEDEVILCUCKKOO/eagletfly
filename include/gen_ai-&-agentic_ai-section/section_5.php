<?php include "./admin_access/db_config.php" ?>

<?php
/*
|--------------------------------------------------------------------------
| DATABASE CONNECTION
|--------------------------------------------------------------------------
| Assumption: this file is in your website root directory.
| If db_config.php is already included by your page, remove this require_once.
*/
// require_once __DIR__ . './admin_access/db_config.php';

/*
|--------------------------------------------------------------------------
| FIND EXISTING MYSQLI CONNECTION
|--------------------------------------------------------------------------
*/
$db = $mydb ?? $conn ?? $con ?? $mysqli ?? null;

$klrStudents = [];

if ($db instanceof mysqli) {
    $sql = "SELECT
                certificate_id,
                student_name,
                course_name,
                certificate_title,
                student_photo,
                student_review,
                review_rating,
                certificate_date
            FROM student_certificates
            WHERE certificate_status = 'Active'
              AND student_review IS NOT NULL
              AND TRIM(student_review) <> ''
            ORDER BY certificate_sort_order ASC,
                     certificate_id DESC";

    try {
        $result = mysqli_query($db, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $klrStudents[] = [
                    'id' => (int) $row['certificate_id'],
                    'studentName' => $row['student_name'] ?? '',
                    'courseName' => $row['course_name'] ?? '',
                    'certificateTitle' => $row['certificate_title'] ?? '',
                    'studentImg' => $row['student_photo'] ?? '',
                    'quote' => $row['student_review'] ?? '',
                    'rating' => (int) ($row['review_rating'] ?? 5),
                    'date' => $row['certificate_date'] ?? ''
                ];
            }

            mysqli_free_result($result);
        }
    } catch (Throwable $e) {
        // Keep database errors out of the public webpage.
        error_log('Testimonial section error: ' . $e->getMessage());
    }
}

/*
|--------------------------------------------------------------------------
| CONVERT DATABASE DATA TO JAVASCRIPT
|--------------------------------------------------------------------------
*/
$klrStudentsJson = json_encode(
    $klrStudents,
    JSON_HEX_TAG |
    JSON_HEX_APOS |
    JSON_HEX_QUOT |
    JSON_HEX_AMP |
    JSON_INVALID_UTF8_SUBSTITUTE
);

if ($klrStudentsJson === false) {
    $klrStudentsJson = '[]';
}
?>

<div class="klr-test-wrapper">
    <div class="klr-test-container">

        <!-- Header -->
        <div class="klr-test-header">
            <span class="klr-test-tagline">TESTIMONIALS</span>

            <h2 class="klr-test-title">
                Professionals from
                <strong>leading organizations</strong>
                trust this Generative AI and Agentic AI course
                to advance their <strong>careers</strong>
            </h2>
        </div>

        <!-- Company Logo Ticker -->
        <div class="klr-test-marquee-box">
            <div class="klr-test-marquee-track">

                <?php
                $klrLogos = [
                    ['accenture.png', 'Accenture'],
                    ['Airtel.png', 'Airtel'],
                    ['amdocs.png', 'Amdocs'],
                    ['Cognizant.png', 'Cognizant'],
                    ['DELL.png', 'Dell'],
                    ['genpact.png', 'Genpact'],
                    ['Google.png', 'Google'],
                    ['HCL.png', 'HCL'],
                    ['hp.png', 'HP'],
                    ['Indiabulls.png', 'Indiabulls'],
                    ['INFY_BIG.png', 'Infosys'],
                    ['Paytm.png', 'Paytm'],
                    ['RBS.png', 'RBS'],
                    ['Sapient.png', 'Sapient'],
                    ['Standard_Chartered.png', 'Standard Chartered'],
                    ['Wipro-logo.png', 'Wipro']
                ];
                ?>

                <?php for ($copy = 0; $copy < 2; $copy++): ?>
                    <?php foreach ($klrLogos as $logo): ?>
                        <div class="klr-test-logo-item"
                             <?php if ($copy === 1): ?>aria-hidden="true"<?php endif; ?>>
                            <img
                                src="assets/brands/<?php echo htmlspecialchars($logo[0], ENT_QUOTES, 'UTF-8'); ?>"
                                alt="<?php echo htmlspecialchars($logo[1], ENT_QUOTES, 'UTF-8'); ?>"
                                loading="lazy"
                            >
                        </div>
                    <?php endforeach; ?>
                <?php endfor; ?>

            </div>
        </div>

        <!-- Main Testimonial Section -->
        <div class="klr-test-grid">

            <!-- Left: Student Photo -->
            <div class="klr-test-left-card">

                <div class="klr-test-media-box">
                    <img
                        id="klrStudentImg"
                        src=""
                        alt="Student"
                        draggable="false"
                    >

                    <div class="klr-test-photo-placeholder"
                         id="klrStudentPlaceholder">
                        Student photo
                    </div>
                </div>

                <span
                    class="klr-test-student-name"
                    id="klrStudentName"
                >
                    Loading testimonials...
                </span>

                <span
                    class="klr-test-course-name"
                    id="klrStudentCourse"
                ></span>

            </div>

            <!-- Right: Dynamic Review Cards -->
            <div class="klr-test-right-wrapper">

                <div
                    class="klr-test-right-cards"
                    id="klrTestimonialsBox"
                    aria-live="polite"
                >
                    <p class="klr-test-empty">
                        Loading student reviews...
                    </p>
                </div>

                <!-- Previous / Next -->
                <div class="klr-test-controls">

                    <button
                        type="button"
                        class="klr-test-arrow-btn"
                        id="klrPrevBtn"
                        aria-label="Previous testimonials"
                    >
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 19.5L8.25 12l7.5-7.5"
                            />
                        </svg>
                    </button>

                    <button
                        type="button"
                        class="klr-test-arrow-btn"
                        id="klrNextBtn"
                        aria-label="Next testimonials"
                    >
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8.25 4.5l7.5 7.5-7.5 7.5"
                            />
                        </svg>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
.klr-test-wrapper,
.klr-test-wrapper * {
    box-sizing: border-box;
}

.klr-test-wrapper {
    font-family: Arial, sans-serif;
    background: #fff;
    color: #111;
    padding: 70px 20px;
    width: 100%;
    overflow: hidden;
}

.klr-test-container {
    max-width: 1300px;
    margin: 0 auto;
    width: 100%;
}

.klr-test-header {
    margin-bottom: 35px;
}

.klr-test-tagline {
    position: relative;
    display: inline-block;
    padding-left: 14px;
    margin-bottom: 15px;
    font-size: 11px;
    font-weight: 700;
    color: #777;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.klr-test-tagline::before {
    content: "";
    position: absolute;
    left: 0;
    top: 2px;
    bottom: 2px;
    width: 3px;
    background: #9333ea;
    border-radius: 2px;
}

.klr-test-title {
    max-width: 1000px;
    margin: 0;
    font-size: clamp(26px, 3.2vw, 36px);
    font-weight: 600;
    line-height: 1.3;
    color: #111;
}

.klr-test-title strong {
    font-weight: 700;
}

/* Logo ticker */
.klr-test-marquee-box {
    width: 100%;
    overflow: hidden;
    position: relative;
    margin-bottom: 45px;
    padding-bottom: 25px;
    border-bottom: 1px solid #eee;
    -webkit-mask-image: linear-gradient(
        to right, transparent, #000 10%, #000 90%, transparent
    );
    mask-image: linear-gradient(
        to right, transparent, #000 10%, #000 90%, transparent
    );
}

.klr-test-marquee-track {
    display: flex;
    align-items: center;
    gap: 20px;
    width: max-content;
    animation: klrMarqueeScroll 35s linear infinite;
}

.klr-test-logo-item {
    width: 130px;
    height: 55px;
    flex: 0 0 130px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.klr-test-logo-item img {
    display: block;
    width: auto;
    height: auto;
    max-width: 115px;
    max-height: 50px;
    object-fit: contain;
}

@keyframes klrMarqueeScroll {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

/* Main layout */
.klr-test-grid {
    display: flex;
    gap: 40px;
    align-items: flex-start;
}

.klr-test-left-card {
    flex: 1;
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.klr-test-media-box {
    position: relative;
    width: 100%;
    aspect-ratio: 1.45 / 1;
    border-radius: 12px;
    overflow: hidden;
    background: #f0edf5;
    box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
}

.klr-test-media-box img {
    position: absolute;
    inset: 0;
    z-index: 2;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.klr-test-photo-placeholder {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #777;
    font-size: 14px;
    background: #f0edf5;
}

.klr-test-student-name {
    padding-left: 4px;
    font-size: 15px;
    font-weight: 700;
    color: #222;
}

.klr-test-course-name {
    padding-left: 4px;
    color: #777;
    font-size: 13px;
    line-height: 1.5;
}

.klr-test-right-wrapper {
    flex: 1.2;
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.klr-test-right-cards {
    display: flex;
    flex-direction: column;
    gap: 20px;
    min-width: 0;
    transition: opacity .25s ease;
}

.klr-test-review-card {
    min-width: 0;
    padding: 24px;
    background: #fff;
    border: 1px solid #e8e8e8;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, .03);
    overflow-wrap: anywhere;
}

.klr-test-review-course {
    margin: 0 0 10px;
    color: #9333ea;
    font-size: 12px;
    font-weight: 700;
}

.klr-test-quote {
    margin: 0 0 14px;
    color: #333;
    font-size: 14px;
    line-height: 1.7;
    white-space: pre-line;
}

.klr-test-author {
    margin: 0;
    color: #111;
    font-size: 13px;
    font-weight: 700;
}

.klr-test-rating {
    margin-top: 10px;
    color: #9333ea;
    font-size: 13px;
    letter-spacing: 1px;
}

.klr-test-date {
    margin-top: 7px;
    color: #888;
    font-size: 12px;
}

.klr-test-controls {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
    margin-top: 5px;
}

.klr-test-arrow-btn {
    width: 38px;
    height: 38px;
    padding: 0;
    flex-shrink: 0;
    border: none;
    border-radius: 50%;
    background: #9333ea;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background .2s ease, transform .2s ease;
}

.klr-test-arrow-btn:hover:not(:disabled) {
    background: #7e22ce;
    transform: scale(1.08);
}

.klr-test-arrow-btn:disabled {
    opacity: .4;
    cursor: not-allowed;
}

.klr-test-arrow-btn svg {
    width: 17px;
    height: 17px;
    fill: none;
    stroke: #fff;
    stroke-width: 2.5;
}

.klr-test-empty {
    padding: 24px;
    color: #666;
    font-size: 14px;
    line-height: 1.6;
    border: 1px solid #eee;
    border-radius: 10px;
}

@media (max-width: 1024px) {
    .klr-test-grid {
        flex-direction: column;
        gap: 30px;
    }

    .klr-test-left-card,
    .klr-test-right-wrapper {
        width: 100%;
        flex: auto;
    }

    .klr-test-media-box {
        aspect-ratio: 16 / 9;
    }

    .klr-test-title {
        font-size: 26px;
    }
}

@media (max-width: 600px) {
    .klr-test-wrapper {
        padding: 45px 15px;
    }

    .klr-test-header {
        margin-bottom: 25px;
    }

    .klr-test-title {
        font-size: 25px;
        line-height: 1.35;
    }

    .klr-test-marquee-box {
        margin-bottom: 30px;
        padding-bottom: 18px;
    }

    .klr-test-logo-item {
        width: 105px;
        flex-basis: 105px;
    }

    .klr-test-logo-item img {
        max-width: 95px;
        max-height: 42px;
    }

    .klr-test-review-card {
        padding: 18px;
    }

    .klr-test-grid {
        gap: 24px;
    }
}

@media (prefers-reduced-motion: reduce) {
    .klr-test-marquee-track {
        animation: none;
    }

    .klr-test-arrow-btn {
        transition: none;
    }
}
</style>

<script>
(function () {
    'use strict';

    const klrStudents = <?php echo $klrStudentsJson; ?>;

    const klrStudentImg = document.getElementById('klrStudentImg');
    const klrStudentPlaceholder =
        document.getElementById('klrStudentPlaceholder');
    const klrStudentName = document.getElementById('klrStudentName');
    const klrStudentCourse = document.getElementById('klrStudentCourse');
    const klrTestimonialsBox =
        document.getElementById('klrTestimonialsBox');
    const klrPrevBtn = document.getElementById('klrPrevBtn');
    const klrNextBtn = document.getElementById('klrNextBtn');

    if (
        !klrStudentImg ||
        !klrStudentName ||
        !klrTestimonialsBox ||
        !klrPrevBtn ||
        !klrNextBtn
    ) {
        return;
    }

    /*
     * Display two review cards at a time.
     * The first student in each group supplies the left-side photo.
     */
    const klrSlides = [];

    for (let i = 0; i < klrStudents.length; i += 2) {
        klrSlides.push(klrStudents.slice(i, i + 2));
    }

    let klrCurrentSlide = 0;

    function klrAddTextElement(parent, tag, className, text) {
        const element = document.createElement(tag);
        element.className = className;
        element.textContent = text || '';
        parent.appendChild(element);
        return element;
    }

    function klrRenderSlide(index) {
        if (!klrSlides.length) {
            klrStudentImg.removeAttribute('src');
            klrStudentImg.hidden = true;

            if (klrStudentPlaceholder) {
                klrStudentPlaceholder.hidden = false;
                klrStudentPlaceholder.textContent =
                    'No student photo available';
            }

            klrStudentName.textContent = 'No testimonials available';
            klrStudentCourse.textContent = '';
            klrTestimonialsBox.replaceChildren();

            klrAddTextElement(
                klrTestimonialsBox,
                'p',
                'klr-test-empty',
                'No active student reviews were found in the database.'
            );

            klrPrevBtn.disabled = true;
            klrNextBtn.disabled = true;
            return;
        }

        const students = klrSlides[index];
        const firstStudent = students[0];

        klrStudentName.textContent =
            firstStudent.studentName || 'Student';

        klrStudentCourse.textContent =
            firstStudent.courseName || '';

        /*
         * Image path:
         * Uses the path saved in student_photo.
         * If your database stores only filenames, add your upload
         * folder prefix here before assigning the image.
         */
        const photo = (firstStudent.studentImg || '').trim();

        if (photo) {
            klrStudentImg.hidden = false;
            klrStudentImg.alt =
                firstStudent.studentName || 'Student';

            if (klrStudentPlaceholder) {
                klrStudentPlaceholder.hidden = true;
            }

            klrStudentImg.onerror = function () {
                klrStudentImg.hidden = true;

                if (klrStudentPlaceholder) {
                    klrStudentPlaceholder.hidden = false;
                    klrStudentPlaceholder.textContent =
                        'Student photo unavailable';
                }
            };

            klrStudentImg.src = photo;
        } else {
            klrStudentImg.removeAttribute('src');
            klrStudentImg.hidden = true;

            if (klrStudentPlaceholder) {
                klrStudentPlaceholder.hidden = false;
                klrStudentPlaceholder.textContent =
                    'No student photo available';
            }
        }

        klrTestimonialsBox.replaceChildren();

        students.forEach(function (student) {
            const card = document.createElement('article');
            card.className = 'klr-test-review-card';

            if (student.courseName) {
                klrAddTextElement(
                    card,
                    'p',
                    'klr-test-review-course',
                    student.courseName
                );
            }

            if (student.quote) {
                klrAddTextElement(
                    card,
                    'p',
                    'klr-test-quote',
                    student.quote
                );
            }

            klrAddTextElement(
                card,
                'h4',
                'klr-test-author',
                student.studentName || 'Student'
            );

            const rating = Math.max(
                0,
                Math.min(5, Number(student.rating) || 0)
            );

            klrAddTextElement(
                card,
                'div',
                'klr-test-rating',
                '★'.repeat(rating) + '☆'.repeat(5 - rating)
            ).setAttribute(
                'aria-label',
                'Rating: ' + rating + ' out of 5'
            );

            if (student.date) {
                klrAddTextElement(
                    card,
                    'div',
                    'klr-test-date',
                    student.date
                );
            }

            klrTestimonialsBox.appendChild(card);
        });

        const hasMultipleSlides = klrSlides.length > 1;
        klrPrevBtn.disabled = !hasMultipleSlides;
        klrNextBtn.disabled = !hasMultipleSlides;
    }

    klrNextBtn.addEventListener('click', function () {
        if (!klrSlides.length) return;

        klrCurrentSlide =
            (klrCurrentSlide + 1) % klrSlides.length;

        klrRenderSlide(klrCurrentSlide);
    });

    klrPrevBtn.addEventListener('click', function () {
        if (!klrSlides.length) return;

        klrCurrentSlide =
            (klrCurrentSlide - 1 + klrSlides.length) %
            klrSlides.length;

        klrRenderSlide(klrCurrentSlide);
    });

    klrRenderSlide(klrCurrentSlide);
})();
</script>
