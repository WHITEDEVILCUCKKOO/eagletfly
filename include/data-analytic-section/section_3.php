<?php
include_once "./admin_access/db_config.php";

/* =========================================================
   SECTION 3 - STUDENT REELS MARQUEE
   - reels table se random 10 Active reels
   - Marquee: cards duplicate hokar infinite chalte hain
   - PC/Laptop: hover par video chalta hai
   - Tablet/Phone: click/tap par video chalta hai
   - Thumbnail ho to wahi dikhta hai, nahi to video ka first frame
   - Koi error ho ya reels na hon to section chup-chap hide ho jata hai
   ========================================================= */

$dgfs_reels = [];

try {
    if (isset($mydb) && $mydb instanceof mysqli) {
        $dgfs_query = mysqli_query(
            $mydb,
            "SELECT reel_title, reel_file, reel_thumbnail, reel_description
             FROM reels
             WHERE reel_status = 'Active' AND reel_file <> ''
             ORDER BY RAND()
             LIMIT 10"
        );

        if ($dgfs_query) {
            while ($dgfs_row = mysqli_fetch_assoc($dgfs_query)) {
                $dgfs_reels[] = $dgfs_row;
            }
        }
    }
} catch (Throwable $e) {
    error_log('Reels marquee fallback: ' . $e->getMessage());
    $dgfs_reels = [];
}

$dgfs_count = count($dgfs_reels);

/* Kam reels hon to bhi marquee bhara dikhe: ek half me kam se kam 8 cards */
$dgfs_repeat   = $dgfs_count > 0 ? (int)ceil(8 / $dgfs_count) : 1;
$dgfs_per_half = $dgfs_count * $dgfs_repeat;
$dgfs_duration = max(24, $dgfs_per_half * 4); /* seconds, jitne zyada card utna slow */

if (!function_exists('dgfs_render_reel')) {
    function dgfs_render_reel(array $r, bool $clone): void
    {
        $h = fn($v) => htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');

        $video = $h($r['reel_file'] ?? '');
        $thumb = trim((string)($r['reel_thumbnail'] ?? ''));
        $title = $h($r['reel_title'] ?? '');
        $desc  = $h($r['reel_description'] ?? '');
        ?>
        <div class="dgfs-reel<?= $thumb !== '' ? ' has-poster' : '' ?>"
            <?= $clone ? 'aria-hidden="true" tabindex="-1"' : 'tabindex="0" role="button" aria-label="Play reel: ' . $title . '"' ?>>

            <div class="dgfs-reel-media">
                <?php if ($thumb !== ''): ?>
                    <video class="dgfs-reel-video" muted loop playsinline preload="none"
                        data-src="<?= $video ?>"></video>
                    <img class="dgfs-reel-poster" src="<?= $h($thumb) ?>" alt="<?= $title ?>" loading="lazy">
                <?php else: ?>
                    <video class="dgfs-reel-video" muted loop playsinline preload="metadata"
                        src="<?= $video ?>#t=0.1" data-start="0.1"></video>
                <?php endif; ?>
            </div>

            <span class="dgfs-reel-badge">REEL</span>

            <button type="button" class="dgfs-reel-mute" aria-label="Toggle sound" tabindex="-1">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
                    <path class="i-off" d="M16.5 12A4.5 4.5 0 0 0 14 8v8a4.5 4.5 0 0 0 2.5-4zM3 9v6h4l5 5V4L7 9H3zm13.6-3.4-1.4 1.4A6.99 6.99 0 0 1 19 12a7 7 0 0 1-3.8 6.2l1.4 1.4A9 9 0 0 0 21 12a9 9 0 0 0-4.4-6.4z" />
                    <path class="i-on" d="M3 9v6h4l5 5V4L7 9H3zm13.6 1.2L15.2 11.6 16.6 13l-1.4 1.4 1.4 1.4 1.4-1.4 1.4 1.4 1.4-1.4L19.4 13l1.4-1.4-1.4-1.4-1.4 1.4-1.4-1.4z" />
                </svg>
            </button>

            <span class="dgfs-reel-play" aria-hidden="true">&#9658;</span>

            <div class="dgfs-reel-info">
                <p class="dgfs-reel-title"><?= $title ?></p>
                <?php if ($desc !== ''): ?>
                    <p class="dgfs-reel-desc"><?= $desc ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
}
?>

<!-- section 3 -->
<style>
    .dgfs-section {
        background: #fff;
        padding: 44px 0 60px;
        overflow: hidden;
    }

    .dgfs-heading {
        text-align: center;
        margin: 0 0 8px 0;
        color: #1a1a1a;
    }

    .dgfs-subgap {
        margin-bottom: 20px;
    }

    /* ---------- marquee ---------- */
    .dgfs-slider-viewport {
        position: relative;
        width: 100%;
        max-width: 1240px;
        margin: 0 auto;
        overflow: hidden;
        padding: 30px 0;
        -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 7%, #000 93%, transparent 100%);
        mask-image: linear-gradient(90deg, transparent 0%, #000 7%, #000 93%, transparent 100%);
    }

    .dgfs-slider-track {
        display: flex;
        width: max-content;
        animation: dgfs-scroll-left var(--dgfs-dur, 40s) linear infinite;
        will-change: transform;
    }

    .dgfs-slider-track.is-paused {
        animation-play-state: paused;
    }

    @media (hover: hover) and (pointer: fine) {
        .dgfs-slider-track:hover {
            animation-play-state: paused;
        }
    }

    @keyframes dgfs-scroll-left {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* ---------- reel card (9:16) ---------- */
    .dgfs-reel {
        position: relative;
        flex: 0 0 auto;
        width: 210px;
        aspect-ratio: 9 / 16;
        margin-right: 18px;
        border-radius: 16px;
        overflow: hidden;
        background: #0b1226;
        color: #fff;
        cursor: pointer;
        box-shadow: 0 14px 30px rgba(10, 20, 60, .22);
        transition: transform .3s ease, box-shadow .3s ease;
        -webkit-tap-highlight-color: transparent;
        outline: none;
    }

    .dgfs-reel:hover,
    .dgfs-reel.is-playing,
    .dgfs-reel:focus-visible {
        transform: translateY(-6px);
        box-shadow: 0 22px 42px rgba(10, 20, 60, .34);
    }

    .dgfs-reel-media,
    .dgfs-reel-video,
    .dgfs-reel-poster {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
    }

    .dgfs-reel-video,
    .dgfs-reel-poster {
        object-fit: cover;
        display: block;
    }

    .dgfs-reel-poster {
        transition: opacity .25s ease;
    }

    .dgfs-reel.is-playing .dgfs-reel-poster {
        opacity: 0;
        pointer-events: none;
    }

    /* bottom gradient + text */
    .dgfs-reel::after {
        content: "";
        position: absolute;
        inset: auto 0 0 0;
        height: 55%;
        background: linear-gradient(0deg, rgba(0, 0, 0, .8), transparent);
        pointer-events: none;
    }

    .dgfs-reel-info {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        padding: 14px;
        pointer-events: none;
    }

    .dgfs-reel-title {
        margin: 0 0 3px;
        font-size: 14px;
        font-weight: 800;
        line-height: 1.25;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .dgfs-reel-desc {
        margin: 0;
        font-size: 11px;
        line-height: 1.4;
        color: #d7e0f7;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .dgfs-reel-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 2;
        padding: 3px 8px;
        border-radius: 4px;
        background: rgba(255, 255, 255, .95);
        color: #cc092f;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: .8px;
        height: max-content;
    }

    .dgfs-reel-play {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        width: 46px;
        height: 46px;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, .94);
        color: #e0491f;
        font-size: 16px;
        padding-left: 3px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, .3);
        transition: transform .25s ease, opacity .2s ease;
        pointer-events: none;
    }

    .dgfs-reel:hover .dgfs-reel-play {
        transform: translate(-50%, -50%) scale(1.12);
    }

    .dgfs-reel.is-playing .dgfs-reel-play {
        opacity: 0;
    }

    /* mute button (sirf playing time par) */
    .dgfs-reel-mute {
        position: absolute;
        top: 8px;
        right: 8px;
        z-index: 3;
        width: 32px;
        height: 32px;
        padding: 0;
        display: none;
        align-items: center;
        justify-content: center;
        border: 0;
        border-radius: 50%;
        background: rgba(0, 0, 0, .55);
        color: #fff;
        cursor: pointer;
    }

    .dgfs-reel.is-playing .dgfs-reel-mute {
        display: flex;
    }

    .dgfs-reel-mute .i-on {
        display: none;
    }

    .dgfs-reel.is-muted .dgfs-reel-mute .i-off {
        display: none;
    }

    .dgfs-reel.is-muted .dgfs-reel-mute .i-on {
        display: inline;
    }

    /* ---------- CTA ---------- */
    .dgfs-cta-row {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }

    .dgfs-cta-btn {
        padding: 14px 32px;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: background .25s ease, transform .2s ease, box-shadow .25s ease;
    }

    .dgfs-cta-btn:hover {
        background: #2d2e2e;
        transform: translateY(-2px);
        box-shadow: 0 12px 26px rgba(18, 58, 156, .3);
    }

    /* ---------- responsive ---------- */
    @media (max-width: 900px) {
        .dgfs-reel {
            width: 185px;
            margin-right: 14px;
        }
    }

    @media (max-width: 560px) {
        .dgfs-section {
            padding: 30px 0 44px;
        }

        .dgfs-reel {
            width: 150px;
            margin-right: 12px;
            border-radius: 14px;
        }

        .dgfs-reel-title {
            font-size: 12px;
        }

        .dgfs-reel-desc {
            font-size: 10px;
        }

        .dgfs-reel-play {
            width: 38px;
            height: 38px;
            font-size: 13px;
        }

        .dgfs-slider-viewport {
            -webkit-mask-image: none;
            mask-image: none;
        }
    }

    /* Motion kam chahne wale users: marquee band, haath se scroll */
    @media (prefers-reduced-motion: reduce) {
        .dgfs-slider-viewport {
            overflow-x: auto;
        }

        .dgfs-slider-track {
            animation: none;
        }
    }
</style>

<?php if ($dgfs_count > 0): ?>
    <section class="dgfs-section">

        <h2 class="dgfs-heading dgfs-subgap" style="font-family:'Sora',inter;font-weight:600;font-size:clamp(26px,3.2vw,36px);">
            What Our <span style="font-style:normal;" class="rainbow-animated_without_animtion">Students</span> Say
        </h2>

        <div class="dgfs-slider-viewport" id="dgfsViewport">
            <div class="dgfs-slider-track" id="dgfsTrack" style="--dgfs-dur: <?= (int)$dgfs_duration ?>s;">

                <?php
                /* Half 1 (asli cards) */
                for ($i = 0; $i < $dgfs_repeat; $i++) {
                    foreach ($dgfs_reels as $dgfs_r) {
                        dgfs_render_reel($dgfs_r, $i > 0);
                    }
                }

                /* Half 2 (seamless infinite loop ke liye duplicate) */
                for ($i = 0; $i < $dgfs_repeat; $i++) {
                    foreach ($dgfs_reels as $dgfs_r) {
                        dgfs_render_reel($dgfs_r, true);
                    }
                }
                ?>

            </div>
        </div>

        <div class="dgfs-cta-row">
            <button class="dgfs-cta-btn dark-gradient-animated">Hear More Stories</button>
        </div>

    </section>

    <script>
        (function() {
            var viewport = document.getElementById('dgfsViewport');
            var track = document.getElementById('dgfsTrack');
            if (!viewport || !track) return;

            var cards = track.querySelectorAll('.dgfs-reel');
            var current = null;

            /* PC/Laptop = hover + mouse. Tablet/Phone = touch */
            function isDesktop() {
                return window.matchMedia('(hover: hover) and (pointer: fine)').matches;
            }

            function setMuteClass(card, muted) {
                card.classList.toggle('is-muted', muted);
            }

            function stop(card) {
                if (!card) return;
                var v = card.querySelector('video');

                try {
                    v.pause();
                    v.currentTime = parseFloat(v.getAttribute('data-start')) || 0;
                } catch (e) {}

                card.classList.remove('is-playing');

                if (current === card) {
                    current = null;
                    track.classList.remove('is-paused');
                }
            }

            function play(card, withSound) {
                if (current && current !== card) stop(current);

                var v = card.querySelector('video');

                /* Poster wale card me video tabhi load hota hai jab pehli baar chalta hai */
                if (!v.getAttribute('src') && v.getAttribute('data-src')) {
                    v.src = v.getAttribute('data-src');
                }

                v.muted = !withSound;
                setMuteClass(card, v.muted);

                card.classList.add('is-playing');
                track.classList.add('is-paused');
                current = card;

                var p = v.play();

                if (p && p.catch) {
                    p.catch(function() {
                        /* Sound ke saath block hua to muted chalane ki koshish */
                        if (!v.muted) {
                            v.muted = true;
                            setMuteClass(card, true);
                            v.play().catch(function() {
                                stop(card);
                            });
                        } else {
                            stop(card);
                        }
                    });
                }
            }

            Array.prototype.forEach.call(cards, function(card) {
                var v = card.querySelector('video');
                var muteBtn = card.querySelector('.dgfs-reel-mute');
                setMuteClass(card, true);

                /* Desktop: hover par play (muted) */
                card.addEventListener('mouseenter', function() {
                    if (isDesktop()) play(card, false);
                });

                card.addEventListener('mouseleave', function() {
                    if (isDesktop()) stop(card);
                });

                /* Click: desktop par sound on/off, touch par play/stop */
                card.addEventListener('click', function() {
                    if (isDesktop()) {
                        if (card.classList.contains('is-playing')) {
                            v.muted = !v.muted;
                            setMuteClass(card, v.muted);
                        }
                        return;
                    }

                    if (card.classList.contains('is-playing')) {
                        stop(card);
                    } else {
                        play(card, true);
                    }
                });

                /* Keyboard: Enter / Space */
                card.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        card.classList.contains('is-playing') ? stop(card) : play(card, true);
                    }
                });

                if (muteBtn) {
                    muteBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        v.muted = !v.muted;
                        setMuteClass(card, v.muted);
                    });
                }
            });

            /* Section screen se bahar jaye to video band */
            if ('IntersectionObserver' in window) {
                new IntersectionObserver(function(entries) {
                    if (!entries[0].isIntersecting && current) stop(current);
                }, {
                    threshold: 0.05
                }).observe(viewport);
            }

            /* Tab change par video band */
            document.addEventListener('visibilitychange', function() {
                if (document.hidden && current) stop(current);
            });
        })();
    </script>
<?php endif; ?>