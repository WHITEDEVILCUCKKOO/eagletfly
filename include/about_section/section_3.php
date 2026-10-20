
<?php
/* ============================================================
   EAGLETLFY STUDENT CERTIFICATES & REVIEWS — QTI SECTION
   ============================================================ */

$eagletflyTutorCertificatesXK91 = [];

if (isset($mydb) && $mydb instanceof mysqli) {
    $eagletflyTutorQueryXK91 = mysqli_query(
        $mydb,
        "SELECT
            certificate_id,
            student_name,
            course_name,
            student_photo,
            student_review,
            review_rating
         FROM student_certificates
         WHERE certificate_status = 'Active'
         ORDER BY certificate_sort_order ASC, certificate_id DESC"
    );

    if ($eagletflyTutorQueryXK91) {
        while ($eagletflyTutorRowXK91 = mysqli_fetch_assoc($eagletflyTutorQueryXK91)) {
            $eagletflyTutorCertificatesXK91[] = $eagletflyTutorRowXK91;
        }
    }
}
?>

<!-- ============================================================ -->
<!-- ================= SECTION 3: STUDENT REVIEWS ================ -->
<!-- ============================================================ -->

<style>
  .qti-tutors {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #f3f4f8;
    padding: 90px 24px;
  }

  .qti-tutors-inner {
    max-width: 1180px;
    margin: 0 auto;
  }

  .qti-tutors .qti-fadeup {
    opacity: 0;
    transform: translateY(24px);
  }

  .qti-tutors .qti-fadeup.qti-in-view {
    animation: qtiTutorsFadeUp 0.7s ease forwards;
  }

  @keyframes qtiTutorsFadeUp {
    from {
      opacity: 0;
      transform: translateY(24px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .qti-section-head {
    text-align: center;
    margin-bottom: 46px;
  }

  .qti-section-eyebrow {
    display: inline-block;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #ee7a2b;
    margin-bottom: 12px;
  }

  .qti-section-title {
    font-size: 32px;
    font-weight: 800;
    color: #10182e;
    margin: 0 0 14px;
  }

  .qti-section-sub {
    font-size: 14.5px;
    color: #5c6178;
    max-width: 620px;
    margin: 0 auto;
    line-height: 1.7;
  }

  .qti-tutors-viewport {
    overflow: hidden;
  }

  .qti-tutors-track {
    display: flex;
    gap: 22px;
    transition: transform 0.5s cubic-bezier(0.65, 0, 0.35, 1);
    will-change: transform;
  }

  .qti-tutor-card {
    flex: 0 0 calc(25% - 16.5px);
    min-width: 0;
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(20,20,50,0.05);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
  }

  .qti-tutor-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(20,20,50,0.1);
  }

  .qti-tutor-photo {
    width: 100%;
    aspect-ratio: 1 / 1.05;
    background: linear-gradient(150deg, #7c8ba8, #4d5a75);
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .qti-tutor-photo img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .qti-tutor-photo svg {
    width: 40%;
    height: 40%;
    color: rgba(255,255,255,0.75);
  }

  .qti-tutor-body {
    padding: 16px 18px 18px;
  }

  .qti-tutor-name {
    font-size: 15.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 6px;
    overflow-wrap: anywhere;
  }

  .qti-tutor-role {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12.5px;
    color: #ee7a2b;
    margin: 0;
    line-height: 1.6;
    overflow-wrap: anywhere;
  }

  .qti-tutor-review {
    margin: 12px 0 9px;
    color: #5c6178;
    font-size: 13px;
    line-height: 1.7;
    overflow-wrap: anywhere;
  }

  .qti-tutor-rating {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 10px;
  }

  .qti-tutor-stars {
    color: #ee7a2b;
    font-size: 16px;
    letter-spacing: 1px;
    line-height: 1.4;
    white-space: nowrap;
  }

  .qti-tutor-rating-number {
    color: #5c6178;
    font-size: 12px;
  }

  .qti-tutor-empty {
    width: 100%;
    padding: 28px 16px;
    text-align: center;
    color: #5c6178;
    font-size: 14px;
    background: #fff;
    border-radius: 12px;
  }

  .qti-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 34px;
  }

  .qti-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #d3d6e2;
    border: none;
    padding: 0;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.3s ease, width 0.3s ease;
  }

  .qti-dot.qti-dot-active {
    background: #ee7a2b;
    width: 22px;
    border-radius: 5px;
  }

  @media (max-width: 980px) {
    .qti-tutor-card {
      flex: 0 0 calc(50% - 11px);
    }
  }

  @media (max-width: 620px) {
    .qti-tutors {
      padding: 60px 18px;
    }

    .qti-section-title {
      font-size: 24px;
    }

    .qti-tutor-card {
      flex: 0 0 100%;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-tutors .qti-fadeup {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }

    .qti-tutor-card:hover {
      transform: none;
    }

    .qti-tutors-track {
      transition-duration: 0.01ms;
    }
  }
</style>

<section class="qti-tutors" id="qtiStudentReviewsXK91">
  <div class="qti-tutors-inner">

    <div class="qti-section-head qti-fadeup" id="qtiTutorsHead">
      <span class="qti-section-eyebrow">Student Reviews</span>

      <h2 class="qti-section-title">
        What Our Students Say
      </h2>

      <p class="qti-section-sub">
        Explore our students' achievements, training certificates and learning experiences.
      </p>
    </div>

    <div class="qti-tutors-viewport">
      <div class="qti-tutors-track" id="qtiTutorsTrack">

        <?php if (!empty($eagletflyTutorCertificatesXK91)): ?>

          <?php foreach ($eagletflyTutorCertificatesXK91 as $eagletflyTutorXK91): ?>

            <?php
              $eagletflyTutorNameXK91 =
                  $eagletflyTutorXK91['student_name'] ?? '';

              $eagletflyTutorCourseXK91 =
                  $eagletflyTutorXK91['course_name'] ?? '';

              $eagletflyTutorPhotoXK91 =
                  $eagletflyTutorXK91['student_photo'] ?? '';

              $eagletflyTutorReviewXK91 =
                  trim($eagletflyTutorXK91['student_review'] ?? '');

              $eagletflyTutorRatingXK91 = max(
                  0,
                  min(5, (int)($eagletflyTutorXK91['review_rating'] ?? 5))
              );

              /*
               * The saved photo path is relative to the project root.
               * Prefix the site's base path if this page is inside a subfolder.
               */
              $eagletflyTutorPhotoUrlXK91 = ltrim(
                  $eagletflyTutorPhotoXK91,
                  '/'
              );
            ?>

            <article class="qti-tutor-card">

              <div class="qti-tutor-photo">

                <?php if ($eagletflyTutorPhotoUrlXK91 !== ''): ?>

                  <img
                    src="<?= htmlspecialchars($eagletflyTutorPhotoUrlXK91, ENT_QUOTES, 'UTF-8') ?>"
                    alt="<?= htmlspecialchars($eagletflyTutorNameXK91, ENT_QUOTES, 'UTF-8') ?>"
                    loading="lazy"
                    decoding="async">

                <?php else: ?>

                  <svg viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    aria-hidden="true">
                    <circle cx="12" cy="8" r="4"/>
                    <path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/>
                  </svg>

                <?php endif; ?>

              </div>

              <div class="qti-tutor-body">

                <h3 class="qti-tutor-name">
                  <?= htmlspecialchars($eagletflyTutorNameXK91, ENT_QUOTES, 'UTF-8') ?>
                </h3>

                <p class="qti-tutor-role">
                  <?= htmlspecialchars($eagletflyTutorCourseXK91, ENT_QUOTES, 'UTF-8') ?>
                </p>

                <?php if ($eagletflyTutorReviewXK91 !== ''): ?>
                  <p class="qti-tutor-review">
                    <?= htmlspecialchars($eagletflyTutorReviewXK91, ENT_QUOTES, 'UTF-8') ?>
                  </p>
                <?php endif; ?>

                <div class="qti-tutor-rating">

                  <span
                    class="qti-tutor-stars"
                    aria-label="<?= $eagletflyTutorRatingXK91 ?> out of 5 stars">

                    <?= str_repeat('★', $eagletflyTutorRatingXK91) ?><?= str_repeat('☆', 5 - $eagletflyTutorRatingXK91) ?>

                  </span>

                  <span class="qti-tutor-rating-number">
                    <?= $eagletflyTutorRatingXK91 ?>/5
                  </span>

                </div>

              </div>

            </article>

          <?php endforeach; ?>

        <?php else: ?>

          <div class="qti-tutor-empty">
            Student certificates and reviews will appear here once published.
          </div>

        <?php endif; ?>

      </div>
    </div>

    <div class="qti-dots" id="qtiTutorsDots"></div>

  </div>
</section>

<script>
(function eagletflyStudentReviewsInitXK91() {
    function initXK91() {
        const section = document.getElementById('qtiStudentReviewsXK91');
        const track = document.getElementById('qtiTutorsTrack');
        const dotsWrap = document.getElementById('qtiTutorsDots');
        const heading = document.getElementById('qtiTutorsHead');

        if (!track || !dotsWrap) return;

        if (track.dataset.initializedXk91 === '1') return;
        track.dataset.initializedXk91 = '1';

        // Reveal heading
        if (heading) heading.classList.add('qti-in-view');

        const originalCards = Array.from(
            track.querySelectorAll('.qti-tutor-card')
        );

        if (!originalCards.length) return;

        let visibleCount = 1;
        let pageCount = 1;
        let currentPage = 0;
        let autoTimer = null;
        let resizeTimer = null;
        let isPaused = false;
        let isDragging = false;
        let startX = 0;
        let currentX = 0;
        let dragDistance = 0;
        let startTransform = 0;
        let dots = [];

        const reducedMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        );

        function getVisibleCount() {
            if (window.innerWidth <= 620) return 1;
            if (window.innerWidth <= 980) return 2;
            return 4;
        }

        function getGap() {
            return parseFloat(getComputedStyle(track).gap) || 22;
        }

        function getCardWidth() {
            const card = track.querySelector('.qti-tutor-card');
            return card ? card.getBoundingClientRect().width : 0;
        }

        function getStep() {
            return getCardWidth() + getGap();
        }

        function getOffset(page) {
            return page * visibleCount * getStep();
        }

        function updateDots() {
            dots.forEach(function(dot, index) {
                dot.classList.toggle(
                    'qti-dot-active',
                    index === (currentPage % pageCount)
                );
            });
        }

        function moveTo(page, animate) {
            currentPage = page;

            track.style.transition = animate
                ? 'transform 0.5s cubic-bezier(0.65, 0, 0.35, 1)'
                : 'none';

            track.style.transform =
                'translateX(-' + getOffset(currentPage) + 'px)';

            updateDots();
        }

        function stopAuto() {
            if (autoTimer !== null) {
                clearInterval(autoTimer);
                autoTimer = null;
            }
        }

        function startAuto() {
            stopAuto();

            if (
                originalCards.length <= visibleCount ||
                reducedMotion.matches ||
                isPaused ||
                isDragging
            ) return;

            autoTimer = setInterval(function() {
                if (isPaused || isDragging) return;
                moveTo(currentPage + 1, true);
            }, 3000);
        }

        function nextSlide() {
            if (originalCards.length <= visibleCount) return;
            moveTo(currentPage + 1, true);
            startAuto();
        }

        function previousSlide() {
            if (originalCards.length <= visibleCount) return;

            if (currentPage <= 0) {
                // Seamlessly move to the last original page
                moveTo(pageCount, false);
                currentPage = pageCount;
            }

            moveTo(currentPage - 1, true);
            startAuto();
        }

        track.addEventListener('transitionend', function(event) {
            if (
                event.target !== track ||
                event.propertyName !== 'transform'
            ) return;

            // Reset cloned slides to the real first slide
            if (currentPage >= pageCount) {
                moveTo(0, false);
            }

            // Keep the slider inside the valid range
            if (currentPage < 0) {
                moveTo(pageCount - 1, false);
            }
        });

        function buildDots() {
            dotsWrap.innerHTML = '';
            dots = [];

            for (let i = 0; i < pageCount; i++) {
                const dot = document.createElement('button');

                dot.type = 'button';
                dot.className =
                    'qti-dot' + (i === 0 ? ' qti-dot-active' : '');

                dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));

                dot.addEventListener('click', function() {
                    if (isDragging) return;
                    moveTo(i, true);
                    startAuto();
                });

                dotsWrap.appendChild(dot);
                dots.push(dot);
            }
        }

        function rebuildSlider() {
            stopAuto();

            visibleCount = getVisibleCount();
            pageCount = Math.max(
                1,
                Math.ceil(originalCards.length / visibleCount)
            );

            currentPage = 0;
            track.innerHTML = '';

            // Restore original cards
            originalCards.forEach(function(card) {
                track.appendChild(card);
            });

            // Clone the first visible cards for infinite looping
            if (originalCards.length > visibleCount) {
                originalCards.slice(0, visibleCount).forEach(function(card) {
                    const clone = card.cloneNode(true);
                    clone.setAttribute('aria-hidden', 'true');

                    clone.querySelectorAll('[id]').forEach(function(el) {
                        el.removeAttribute('id');
                    });

                    track.appendChild(clone);
                });
            }

            buildDots();
            moveTo(0, false);

            dotsWrap.style.display =
                originalCards.length <= visibleCount ? 'none' : 'flex';

            startAuto();
        }

        // Mouse drag + mobile finger swipe
        track.style.touchAction = 'pan-y';
        track.style.cursor = 'grab';

        track.addEventListener('pointerdown', function(event) {
            if (
                originalCards.length <= visibleCount ||
                event.pointerType === 'mouse' && event.button !== 0
            ) return;

            isDragging = true;
            startX = event.clientX;
            currentX = startX;
            dragDistance = 0;
            startTransform = getOffset(currentPage);

            stopAuto();

            track.style.transition = 'none';
            track.style.cursor = 'grabbing';

            if (track.setPointerCapture) {
                try {
                    track.setPointerCapture(event.pointerId);
                } catch (error) {}
            }
        });

        track.addEventListener('pointermove', function(event) {
            if (!isDragging) return;

            currentX = event.clientX;
            dragDistance = currentX - startX;

            // Follow the mouse or finger while dragging
            track.style.transform =
                'translateX(' + (-startTransform + dragDistance) + 'px)';
        });

        function finishDrag(event) {
            if (!isDragging) return;

            isDragging = false;
            track.style.cursor = 'grab';

            const threshold = Math.min(80, getCardWidth() * 0.18);

            if (dragDistance < -threshold) {
                currentPage++;
            } else if (dragDistance > threshold) {
                if (currentPage <= 0) {
                    moveTo(pageCount, false);
                    currentPage = pageCount;
                }
                currentPage--;
            }

            moveTo(currentPage, true);
            startAuto();
        }

        track.addEventListener('pointerup', finishDrag);
        track.addEventListener('pointercancel', finishDrag);

        // Pause automatic movement when the mouse is over the section
        if (section) {
            section.addEventListener('mouseenter', function() {
                isPaused = true;
                stopAuto();
            });

            section.addEventListener('mouseleave', function() {
                isPaused = false;
                startAuto();
            });
        }

        // Recalculate on responsive breakpoint changes
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);

            resizeTimer = setTimeout(function() {
                const newVisibleCount = getVisibleCount();

                if (newVisibleCount !== visibleCount) {
                    rebuildSlider();
                } else {
                    moveTo(currentPage, false);
                }
            }, 180);
        });

        if (reducedMotion.addEventListener) {
            reducedMotion.addEventListener('change', startAuto);
        }

        rebuildSlider();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initXK91);
    } else {
        initXK91();
    }
})();
</script>
