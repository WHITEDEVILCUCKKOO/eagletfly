<?php include "./admin_access/db_config.php" ?>
<?php
/* ============================================================
   SECTION 4: TESTIMONIALS - DATABASE DATA
   Database: db_eagletfly
   Table: student_certificates
============================================================ */

$qtiTestimonialsX91 = [];

$qtiSqlX91 = "SELECT
    student_name,
    course_name,
    student_review,
    review_rating
FROM student_certificates
WHERE certificate_status = 'Active'
  AND student_review IS NOT NULL
  AND TRIM(student_review) != ''
ORDER BY RAND()
LIMIT 10";

if (isset($mydb) && $mydb instanceof mysqli) {
    $qtiResultX91 = $mydb->query($qtiSqlX91);

    if ($qtiResultX91) {
        while ($qtiRowX91 = $qtiResultX91->fetch_assoc()) {
            $qtiTestimonialsX91[] = [
                'text' => $qtiRowX91['student_review'],
                'name' => $qtiRowX91['student_name'],
                'role' => $qtiRowX91['course_name'],
                'score' => max(0, min(5, (int)($qtiRowX91['review_rating'] ?? 5))),
                'initial' => strtoupper(
                    mb_substr($qtiRowX91['student_name'], 0, 1, 'UTF-8')
                )
            ];
        }

        $qtiResultX91->free();
    }
}
?>

<style>
  .qti-testi {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    background: #ffffff;
    padding: 90px 24px;
  }

  .qti-testi-inner {
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 0.85fr 1.15fr;
    gap: 50px;
    align-items: center;
  }

  .qti-testi .qti-fadeup {
    opacity: 0;
    transform: translateY(24px);
  }

  .qti-testi .qti-fadeup.qti-in-view {
    animation: qtiTestiFadeUp 0.7s ease forwards;
  }

  @keyframes qtiTestiFadeUp {
    from { opacity: 0; transform: translateY(24px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .qti-testi-left .qti-eyebrow {
    display: inline-block;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #ee7a2b;
    margin-bottom: 14px;
  }

  .qti-testi-title {
    font-size: 32px;
    font-weight: 800;
    line-height: 1.25;
    color: #10182e;
    margin: 0 0 18px;
  }

  .qti-testi-desc {
    font-size: 14px;
    line-height: 1.75;
    color: #5c6178;
    margin: 0 0 30px;
    max-width: 380px;
  }

  .qti-testi-nav {
    display: flex;
    gap: 12px;
  }

  .qti-testi-nav-btn {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: 1px solid #dfe1ec;
    background: #ffffff;
    color: #171a2b;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
  }

  .qti-testi-nav-btn:hover {
    background: #ee7a2b;
    color: #ffffff;
    transform: translateY(-2px);
  }

  .qti-testi-nav-btn svg {
    width: 18px;
    height: 18px;
  }

  .qti-testi-card-wrap {
    position: relative;
    min-width: 0;
  }

  .qti-testi-card-bg {
    position: absolute;
    top: 18px;
    left: 18px;
    right: -18px;
    bottom: -18px;
    background: linear-gradient(135deg, #ffd98a, #ffb46b);
    border-radius: 20px;
    z-index: 0;
  }

  .qti-testi-card {
    position: relative;
    z-index: 1;
    background: #ffffff;
    border-radius: 20px;
    padding: 40px 40px 30px;
    box-shadow: 0 20px 50px rgba(20,20,50,0.1);
    min-width: 0;
    overflow-wrap: anywhere;
  }

  .qti-testi-quote-icon {
    width: 30px;
    height: 24px;
    color: #ee7a2b;
    margin-bottom: 16px;
    opacity: 0.5;
  }

  .qti-testi-text {
    font-size: 14.5px;
    line-height: 1.85;
    color: #3f4457;
    margin: 0 0 22px;
    min-height: max-content;
    padding-bottom: 10px;
    transition: opacity 0.3s ease;
    overflow-wrap: anywhere;
  }

  .qti-testi-rule {
    width: 60px;
    height: 3px;
    background: #ee7a2b;
    border-radius: 3px;
    margin-bottom: 22px;
  }

  .qti-testi-author {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
  }

  .qti-testi-author-left {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 0;
  }

  .qti-testi-avatar {
    flex-shrink: 0;
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: linear-gradient(135deg, #6d5bf5, #ee7a2b);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 16px;
  }

  .qti-testi-author-name {
    font-size: 14.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 3px;
    overflow-wrap: anywhere;
  }

  .qti-testi-author-role {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: #ee7a2b;
    margin: 0;
    overflow-wrap: anywhere;
  }

  .qti-testi-author-role svg {
    width: 12px;
    height: 12px;
    flex-shrink: 0;
  }

  .qti-testi-rating {
    display: flex;
    align-items: center;
    gap: 4px;
    flex-shrink: 0;
  }

  .qti-testi-rating-num {
    font-size: 13px;
    font-weight: 700;
    color: #171a2b;
    margin-right: 4px;
  }

  .qti-testi-rating svg {
    width: 13px;
    height: 13px;
    color: #f5b942;
    flex-shrink: 0;
  }

  .qti-testi-empty {
    color: #5c6178;
    font-size: 14px;
    line-height: 1.7;
  }

  @media (max-width: 980px) {
    .qti-testi-inner {
      grid-template-columns: 1fr;
      gap: 40px;
    }

    .qti-testi-desc {
      max-width: 600px;
    }

    .qti-testi-card-wrap {
      margin-right: 18px;
    }
  }

  @media (max-width: 620px) {
    .qti-testi {
      padding: 60px 18px;
    }

    .qti-testi-title {
      font-size: 24px;
    }

    .qti-testi-inner {
      gap: 30px;
    }

    .qti-testi-card {
      padding: 30px 20px 24px;
    }

    .qti-testi-card-bg {
      top: 12px;
      left: 12px;
      right: -12px;
      bottom: -12px;
    }

    .qti-testi-card-wrap {
      margin-right: 12px;
    }

    .qti-testi-text {
      min-height: 0;
    }

    .qti-testi-author {
      align-items: flex-start;
      flex-wrap: wrap;
      gap: 16px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .qti-testi .qti-fadeup {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }

    .qti-testi-nav-btn {
      transition: none;
    }

    .qti-testi-nav-btn:hover {
      transform: none;
    }

    .qti-testi-text {
      transition: none;
    }
  }
</style>

<section class="qti-testi">
  <div class="qti-testi-inner">

    <div class="qti-testi-left qti-fadeup" id="qtiTestiLeft">
      <span class="qti-eyebrow">Testimonials</span>

      <h2 class="qti-testi-title">Our Student Community Feedback</h2>

      <p class="qti-testi-desc">
        Discover what our students say about their learning experience,
        practical training and courses at Eagletfly.
      </p>

      <?php if (count($qtiTestimonialsX91) > 1): ?>
      <div class="qti-testi-nav">
        <button type="button" class="qti-testi-nav-btn"
                id="qtiTestiPrev" aria-label="Previous testimonial">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
               stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"/>
          </svg>
        </button>

        <button type="button" class="qti-testi-nav-btn"
                id="qtiTestiNext" aria-label="Next testimonial">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
               stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"/>
          </svg>
        </button>
      </div>
      <?php endif; ?>
    </div>

    <div class="qti-testi-card-wrap qti-fadeup" id="qtiTestiCardWrap">
      <div class="qti-testi-card-bg"></div>

      <div class="qti-testi-card">

        <?php if (!empty($qtiTestimonialsX91)): ?>

        <svg class="qti-testi-quote-icon" viewBox="0 0 24 24"
             fill="currentColor" aria-hidden="true">
          <path d="M9.5 8C6.5 8 4 10.5 4 13.5S6.5 19 9.5 19c1 0 2-.3 2.7-.8-.3 2-1.8 3.5-3.7 4v2c3.2-.5 5.5-3.2 5.5-6.7V8H9.5zm10 0c-3 0-5.5 2.5-5.5 5.5S16.5 19 19.5 19c1 0 2-.3 2.7-.8-.3 2-1.8 3.5-3.7 4v2c3.2-.5 5.5-3.2 5.5-6.7V8h-4.5z"/>
        </svg>

        <p class="qti-testi-text" id="qtiTestiText"><?php
          echo htmlspecialchars($qtiTestimonialsX91[0]['text'], ENT_QUOTES, 'UTF-8');
        ?></p>

        <div class="qti-testi-rule"></div>

        <div class="qti-testi-author">
          <div class="qti-testi-author-left">

            <div class="qti-testi-avatar" id="qtiTestiAvatar"><?php
              echo htmlspecialchars($qtiTestimonialsX91[0]['initial'], ENT_QUOTES, 'UTF-8');
            ?></div>

            <div>
              <p class="qti-testi-author-name" id="qtiTestiName"><?php
                echo htmlspecialchars($qtiTestimonialsX91[0]['name'], ENT_QUOTES, 'UTF-8');
              ?></p>

              <p class="qti-testi-author-role">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2" aria-hidden="true">
                  <rect x="2" y="7" width="20" height="14" rx="2"/>
                  <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                </svg>

                <span id="qtiTestiRole"><?php
                  echo htmlspecialchars($qtiTestimonialsX91[0]['role'], ENT_QUOTES, 'UTF-8');
                ?></span>
              </p>
            </div>
          </div>

          <div class="qti-testi-rating">
            <span class="qti-testi-rating-num" id="qtiTestiScore"><?php
              echo number_format($qtiTestimonialsX91[0]['score'], 1);
            ?></span>

            <?php for ($qtiStarX91 = 1; $qtiStarX91 <= 5; $qtiStarX91++): ?>
              <svg viewBox="0 0 24 24"
                   fill="<?php echo $qtiStarX91 <= $qtiTestimonialsX91[0]['score'] ? 'currentColor' : 'none'; ?>"
                   stroke="currentColor" stroke-width="1.5"
                   aria-hidden="true">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
            <?php endfor; ?>
          </div>
        </div>

        <?php else: ?>

        <p class="qti-testi-empty">
          No student reviews are available right now.
        </p>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<script>
(function qtiTestiInitX91() {
    var qtiElsX91 = document.querySelectorAll('.qti-testi .qti-fadeup');

    if ('IntersectionObserver' in window) {
        var qtiRevealObserverX91 = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('qti-in-view');
                    qtiRevealObserverX91.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        qtiElsX91.forEach(function(el) {
            qtiRevealObserverX91.observe(el);
        });
    } else {
        qtiElsX91.forEach(function(el) {
            el.classList.add('qti-in-view');
        });
    }

    var qtiTestimonialsX91 = <?php
        echo json_encode(
            $qtiTestimonialsX91,
            JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP
        );
    ?>;

    if (!qtiTestimonialsX91.length) return;

    var qtiTestiIndexX91 = 0;
    var qtiTextElX91 = document.getElementById('qtiTestiText');
    var qtiNameElX91 = document.getElementById('qtiTestiName');
    var qtiRoleElX91 = document.getElementById('qtiTestiRole');
    var qtiScoreElX91 = document.getElementById('qtiTestiScore');
    var qtiAvatarElX91 = document.getElementById('qtiTestiAvatar');
    var qtiPrevX91 = document.getElementById('qtiTestiPrev');
    var qtiNextX91 = document.getElementById('qtiTestiNext');

    var qtiStarsX91 = document.querySelectorAll(
        '.qti-testi-rating svg'
    );

    function qtiRenderTestimonialX91() {
        var qtiItemX91 = qtiTestimonialsX91[qtiTestiIndexX91];

        qtiTextElX91.style.opacity = '0';

        window.setTimeout(function() {
            qtiTextElX91.textContent = qtiItemX91.text;
            qtiNameElX91.textContent = qtiItemX91.name;
            qtiRoleElX91.textContent = qtiItemX91.role;
            qtiScoreElX91.textContent = Number(qtiItemX91.score).toFixed(1);
            qtiAvatarElX91.textContent = qtiItemX91.initial;

            qtiStarsX91.forEach(function(star, index) {
                var qtiFilledX91 = index < Number(qtiItemX91.score);
                star.setAttribute('fill', qtiFilledX91 ? 'currentColor' : 'none');
            });

            qtiTextElX91.style.opacity = '1';
        }, 180);
    }

    if (qtiPrevX91) {
        qtiPrevX91.addEventListener('click', function() {
            qtiTestiIndexX91 =
                (qtiTestiIndexX91 - 1 + qtiTestimonialsX91.length)
                % qtiTestimonialsX91.length;

            qtiRenderTestimonialX91();
        });
    }

    if (qtiNextX91) {
        qtiNextX91.addEventListener('click', function() {
            qtiTestiIndexX91 =
                (qtiTestiIndexX91 + 1) % qtiTestimonialsX91.length;

            qtiRenderTestimonialX91();
        });
    }
})();
</script>
