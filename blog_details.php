<?php
// ============ DB + LOGIC (header se pehle, taaki redirect chale) ============
include_once "admin_access/db_config.php";

// Upload folder ka path - apne hisaab se badal lena
$imgPath = "admin_access/uploads/";

if (!isset($_GET['slug']) || trim($_GET['slug']) === '') {
    header("Location: blog.php");
    exit();
}

$slug = trim($_GET['slug']);

// ---- Current blog ----
$stmt = $mydb->prepare("SELECT * FROM blog WHERE blog_slug = ? LIMIT 1");
$stmt->bind_param("s", $slug);
$stmt->execute();
$blog = $stmt->get_result()->fetch_assoc();
$stmt->close();

if (!$blog) {
    header("Location: blog.php");
    exit();
}

// ---- Random blogs (current ko chhod ke) ----
$stmt = $mydb->prepare("SELECT blog_title, blog_slug, blog_img, blog_content, blog_meta_desc, created_at
                        FROM blog WHERE blog_id != ? ORDER BY RAND() LIMIT 3");
$stmt->bind_param("i", $blog['blog_id']);
$stmt->execute();
$related = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// ---- Helpers ----
function blogDate($d)
{
    $t = strtotime($d);
    return $t ? date('d M Y', $t) : $d;
}
$readMin = max(1, (int) ceil(str_word_count(strip_tags($blog['blog_content'])) / 200));
$authorInitial = strtoupper(mb_substr(trim($blog['blog_author']) ?: 'A', 0, 1));
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$shareUrl = urlencode($scheme . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

// header.php me agar ye variables use hote hain
$page_title = !empty($blog['blog_meta_title']) ? $blog['blog_meta_title'] : $blog['blog_title'];
$meta_desc  = $blog['blog_meta_desc'];

include 'include/header.php';
?>



<?php

function timeAgo($timestamp)
{
    $time = time() - $timestamp;

    if ($time < 60) {
        return $time . "sec ago";
    } elseif ($time < 3600) {
        return floor($time / 60) . "m ago";
    } elseif ($time < 86400) {
        return floor($time / 3600) . "h ago";
    } elseif ($time < 2592000) {
        return floor($time / 86400) . "d ago";
    } elseif ($time < 31536000) {
        return floor($time / 2592000) . "m ago";
    } else {
        return floor($time / 31536000) . "y ago";
    }
}

?>

<style>
    /* ---------------- PAGE SHELL ---------------- */
    .blg7-page {
        font-family: 'Poppins', sans-serif;
        background: #f6f3ee;
        color: #211d19;
        line-height: 1.7;
        /* overflow-x: hidden; */
    }

    /* ---------------- READING PROGRESS ---------------- */
    .blg7-progress {
        position: fixed;
        top: 0;
        left: 0;
        height: 4px;
        width: 0;
        background: linear-gradient(90deg, #e2503c, #f6a13a);
        box-shadow: 0 0 12px rgba(226, 80, 60, .5);
        z-index: 1000;
    }

    /* ---------------- HERO ---------------- */
    .blg7-hero {
        max-width: 880px;
        margin: 0 auto;
        padding: 70px 22px 46px;
        text-align: center;
    }

    .blg7-crumbs {
        font-size: 13px;
        color: #a49e94;
        margin: 0 0 26px;
    }

    .blg7-crumbs a {
        color: #211d19;
        text-decoration: none;
        transition: color .3s;
    }

    .blg7-crumbs a:hover {
        color: #e2503c;
    }

    .blg7-badge {
        display: inline-block;
        padding: 8px 22px;
        border-radius: 40px;
        background: #e2503c;
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        animation: blg7-up .7s .05s both, blg7-bob 3.5s 1.2s ease-in-out infinite;
    }

    .blg7-head {
        font-family: 'Playfair Display', serif;
        font-size: 54px;
        line-height: 1.12;
        font-weight: 800;
        margin: 26px 0 20px;
        letter-spacing: -1px;
        animation: blg7-up .7s .25s both;
    }

    .blg7-dek {
        font-size: 18px;
        color: #6f685e;
        max-width: 640px;
        margin: 0 auto !important;
        animation: blg7-up .7s .4s both;
    }

    .blg7-meta {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 34px;
        font-size: 14px;
        color: #6f685e;
        animation: blg7-up .7s .55s both;
    }

    .blg7-initial {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #211d19;
        color: #f6f3ee;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 18px;
        border: 3px solid #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, .15);
    }

    .blg7-mid {
        text-align: left;
        line-height: 1.3;
    }

    .blg7-mid strong {
        display: block;
        color: #211d19;
        font-size: 14.5px;
    }

    .blg7-mid span {
        font-size: 12px;
        color: #a49e94;
    }

    .blg7-dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #d8d2c8;
    }

    /* ---------------- COVER ---------------- */
    .blg7-coverwrap {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 22px;
    }

    .blg7-cover {
        display: block;
        width: 100%;
        height: 470px;
        object-fit: cover;
        border-radius: 24px;
        box-shadow: 0 30px 60px rgba(33, 29, 25, .18);
        animation: blg7-up .8s .7s both;
    }

    /* ---------------- ARTICLE (editor ka HTML bhi style hoga) ---------------- */
    .blg7-article {
        max-width: 760px;
        margin: 0 auto;
        padding: 70px 22px 20px;
        font-size: 17px;
        word-wrap: break-word;
    }

    .blg7-article p {
        margin: 0 0 26px;
    }

    .blg7-article>p:first-of-type::first-letter {
        font-family: 'Playfair Display', serif;
        font-size: 76px;
        line-height: .8;
        float: left;
        padding: 10px 14px 0 0;
        color: #e2503c;
        font-weight: 800;
    }

    .blg7-article h1,
    .blg7-article h2,
    .blg7-article h3,
    .blg7-article h4 {
        font-family: 'Playfair Display', serif;
        font-weight: 800;
        margin: 44px 0 16px;
        line-height: 1.25;
    }

    .blg7-article h2 {
        font-size: 30px;
        position: relative;
        padding-left: 18px;
    }

    .blg7-article h2::before {
        content: '';
        position: absolute;
        left: 0;
        top: 8px;
        bottom: 8px;
        width: 5px;
        border-radius: 5px;
        background: #e2503c;
    }

    .blg7-article h3 {
        font-size: 24px;
    }

    .blg7-article img {
        max-width: 100%;
        height: auto;
        border-radius: 16px;
        margin: 20px 0;
    }

    .blg7-article a {
        color: #e2503c;
    }

    .blg7-article ul,
    .blg7-article ol {
        margin: 0 0 26px;
        padding-left: 24px;
    }

    .blg7-article li {
        margin-bottom: 10px;
    }

    .blg7-article blockquote {
        margin: 45px 0;
        padding: 34px 38px;
        background: #211d19;
        color: #f6f3ee;
        border-radius: 18px;
        font-family: 'Playfair Display', serif;
        font-size: 21px;
        line-height: 1.6;
    }

    .blg7-article table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 26px;
        display: block;
        overflow-x: auto;
    }

    .blg7-article th,
    .blg7-article td {
        border: 1px solid rgba(33, 29, 25, .15);
        padding: 10px 14px;
    }

    .blg7-article iframe,
    .blg7-article video {
        max-width: 100%;
    }

    /* ---------------- SHARE ---------------- */
    .blg7-share {
        max-width: 760px;
        margin: 30px auto 0;
        padding: 26px 22px;
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
        border-top: 1px solid rgba(33, 29, 25, .1);
        border-bottom: 1px solid rgba(33, 29, 25, .1);
    }

    .blg7-sharelbl {
        font-weight: 600;
        font-size: 14px;
        margin-right: auto;
    }

    .blg7-sbtn {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        color: #211d19;
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        box-shadow: 0 4px 14px rgba(33, 29, 25, .1);
        transition: transform .35s, background .35s, color .35s, box-shadow .35s;
    }

    .blg7-sbtn:hover {
        transform: translateY(-6px) rotate(8deg);
        background: #e2503c;
        color: #fff;
        box-shadow: 0 12px 24px rgba(226, 80, 60, .35);
    }

    /* ---------------- AUTHOR CARD ---------------- */
    .blg7-author {
        max-width: 760px;
        margin: 60px auto 0;
        padding: 34px;
        background: #fff;
        border-radius: 22px;
        display: flex;
        gap: 26px;
        align-items: center;
        flex-wrap: wrap;
        box-shadow: 0 8px 30px rgba(33, 29, 25, .07);
        transition: transform .4s, box-shadow .4s;
    }

    .blg7-author:hover {
        transform: translateY(-6px);
        box-shadow: 0 24px 50px rgba(33, 29, 25, .14);
    }

    .blg7-aring {
        position: relative;
        width: 96px;
        height: 96px;
        flex-shrink: 0;
        padding: 4px;
        border-radius: 50%;
        background: conic-gradient(#e2503c, #f6a13a, #211d19, #e2503c);
        animation: blg7-spin 6s linear infinite;
        display: block;
    }

    .blg7-aimg {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #211d19;
        color: #f6f3ee;
        font-family: 'Playfair Display', serif;
        font-size: 36px;
        font-weight: 800;
        border: 4px solid #fff;
        animation: blg7-spinRev 6s linear infinite;
    }

    .blg7-aname {
        font-family: 'Playfair Display', serif;
        font-size: 24px;
        font-weight: 700;
        margin: 0;
    }

    .blg7-arole {
        color: #e2503c;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin: 6px 0 0;
    }

    /* ---------------- RELATED ---------------- */
    .blg7-related {
        max-width: 1100px;
        margin: 90px auto 0;
        padding: 0 22px 80px;
    }

    .blg7-secTitle {
        font-family: 'Playfair Display', serif;
        font-size: 32px;
        font-weight: 800;
        text-align: center;
        margin: 0 0 8px;
    }

    .blg7-secSub {
        text-align: center;
        color: #a49e94;
        font-size: 14px;
        margin: 0;
    }

    .blg7-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
        margin-top: 40px;
    }

    .blg7-card {
        display: block;
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        text-decoration: none;
        color: #211d19;
        box-shadow: 0 6px 24px rgba(33, 29, 25, .07);
        transition: transform .4s ease, box-shadow .4s ease;
    }

    .blg7-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 22px 48px rgba(33, 29, 25, .15);
        color: #211d19;
    }

    .blg7-thumb {
        height: 190px;
        overflow: hidden;
    }

    .blg7-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .7s ease;
    }

    .blg7-card:hover .blg7-thumb img {
        transform: scale(1.09);
    }

    .blg7-cardbody {
        padding: 22px;
    }

    .blg7-cdate {
        font-size: 12px;
        color: #a49e94;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .blg7-ctitle {
        font-family: 'Playfair Display', serif;
        font-size: 20px;
        font-weight: 700;
        margin: 10px 0;
        line-height: 1.35;
    }

    .blg7-cex {
        font-size: 13.5px;
        color: #6f685e;
        margin: 0 0 16px;
    }

    .blg7-more {
        color: #e2503c;
        font-weight: 600;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .blg7-arrow {
        display: inline-block;
        transition: transform .3s;
    }

    .blg7-card:hover .blg7-arrow {
        transform: translateX(7px);
    }

    /* ---------------- BACK TO TOP ---------------- */
    .blg7-top {
        position: fixed;
        right: 24px;
    bottom: 100px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        background: #211d19;
        color: #f6f3ee;
        font-size: 20px;
        cursor: pointer;
        z-index: 800;
        opacity: 0;
        visibility: hidden;
        transform: translateY(16px);
        transition: all .4s;
        box-shadow: 0 10px 24px rgba(0, 0, 0, .25);
    }

    .blg7-top.blg7-show {
        opacity: 1;
        visibility: visible;
        transform: none;
    }

    .blg7-top:hover {
        background: #e2503c;
        transform: translateY(-4px);
    }

    /* ---------------- SCROLL REVEAL ---------------- */
    .blg7-reveal {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity .8s cubic-bezier(.22, .61, .36, 1), transform .8s cubic-bezier(.22, .61, .36, 1);
    }

    .blg7-reveal.blg7-in {
        opacity: 1;
        transform: translateY(0);
    }

    /* ---------------- KEYFRAMES ---------------- */
    @keyframes blg7-up {
        from {
            opacity: 0;
            transform: translateY(34px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes blg7-bob {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-6px)
        }
    }

    @keyframes blg7-spin {
        to {
            transform: rotate(360deg)
        }
    }

    @keyframes blg7-spinRev {
        to {
            transform: rotate(-360deg)
        }
    }

    /* ---------------- RESPONSIVE ---------------- */
    @media(max-width:920px) {
        .blg7-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width:620px) {
        .blg7-head {
            font-size: 34px;
        }

        .blg7-dek {
            font-size: 16px;
        }

        .blg7-cover {
            height: 260px;
        }

        .blg7-grid {
            grid-template-columns: 1fr;
        }

        .blg7-author {
            flex-direction: column;
            text-align: center;
        }

        .blg7-article blockquote {
            padding: 26px 22px;
            font-size: 18px;
        }
    }
</style>

<main>
    <div class="blg7-progress"></div>

    <div class="blg7-page">

        <!-- HERO -->
        <section class="blg7-hero">
            <p class="blg7-crumbs">
                <a href="index.php">Home</a> /
                <a href="blog.php">Blog</a> /
                <span><?= htmlspecialchars($blog['blog_title']) ?></span>
            </p>
            <span class="blg7-badge">Blog</span>
            <h1 class="blg7-head"><?= htmlspecialchars($blog['blog_title']) ?></h1>
            <?php if (!empty($blog['blog_meta_desc'])): ?>
                <p class="blg7-dek"><?= htmlspecialchars($blog['blog_meta_desc']) ?></p>
            <?php endif; ?>
            <div class="blg7-meta">
                <span class="blg7-initial"><?= htmlspecialchars($authorInitial) ?></span>
                <span class="blg7-mid"><strong><?= htmlspecialchars($blog['blog_author']) ?></strong><span>Author</span></span>
                <span class="blg7-dot"></span>
                <span><?= htmlspecialchars(timeAgo(blogDate($blog['created_at']))) ?></span>
                <span class="blg7-dot"></span>
                <span><?= $readMin ?> min read</span>
            </div>
        </section>

        <!-- COVER -->
        <?php if (!empty($blog['blog_img'])): ?>
            <section class="blg7-coverwrap">
                <img class="blg7-cover" src="assets/blog/<?= $imgPath . htmlspecialchars($blog['blog_img']) ?>" alt="<?= htmlspecialchars($blog['blog_title']) ?>">
            </section>
        <?php endif; ?>

        <!-- ARTICLE (editor ka HTML - sirf admin ka trusted content) -->
        <section class="blg7-article">
            <?= $blog['blog_content'] ?>
        </section>

        <!-- SHARE -->
        <section class="blg7-share blg7-reveal">
            <span class="blg7-sharelbl">Share this article —</span>
            <a class="blg7-sbtn" target="_blank" rel="noopener" href="https://www.facebook.com/sharer/sharer.php?u=<?= $shareUrl ?>">f</a>
            <a class="blg7-sbtn" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=<?= $shareUrl ?>&text=<?= urlencode($blog['blog_title']) ?>">𝕏</a>
            <a class="blg7-sbtn" target="_blank" rel="noopener" href="https://www.linkedin.com/sharing/share-offsite/?url=<?= $shareUrl ?>">in</a>
            <a class="blg7-sbtn" target="_blank" rel="noopener" href="https://wa.me/?text=<?= $shareUrl ?>">⧉</a>
        </section>

        <!-- AUTHOR -->
        <section class="blg7-author blg7-reveal">
            <span class="blg7-aring"><span class="blg7-aimg"><?= htmlspecialchars($authorInitial) ?></span></span>
            <div>
                <h3 class="blg7-aname"><?= htmlspecialchars($blog['blog_author']) ?></h3>
                <p class="blg7-arole">Author</p>
            </div>
        </section>

        <!-- RELATED / RANDOM BLOGS -->
        <?php if (!empty($related)): ?>
            <section class="blg7-related blg7-reveal">
                <h2 class="blg7-secTitle">You May Also Like</h2>
                <p class="blg7-secSub">Handpicked reads for you</p>
                <div class="blg7-grid">
                    <?php foreach ($related as $r):
                        $ex = !empty($r['blog_meta_desc']) ? $r['blog_meta_desc'] : trim(strip_tags($r['blog_content']));
                        $ex = mb_strlen($ex) > 110 ? mb_substr($ex, 0, 110) . '...' : $ex;
                    ?>
                        <a class="blg7-card" href="blog_details.php?slug=<?= urlencode($r['blog_slug']) ?>">
                            <div class="blg7-thumb">
                                <img src="<?= $imgPath . htmlspecialchars($r['blog_img']) ?>" alt="<?= htmlspecialchars($r['blog_title']) ?>">
                            </div>
                            <div class="blg7-cardbody">
                                <span class="blg7-cdate"><?= htmlspecialchars(blogDate($r['created_at'])) ?></span>
                                <h3 class="blg7-ctitle"><?= htmlspecialchars($r['blog_title']) ?></h3>
                                <p class="blg7-cex"><?= htmlspecialchars($ex) ?></p>
                                <span class="blg7-more">Read More <span class="blg7-arrow">→</span></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <button class="blg7-top" id="blg7Top" type="button" aria-label="Back to top">↑</button>
    </div>

    <script>
        /* ---------- SCROLL REVEAL ---------- */
        const blg7Io = new IntersectionObserver((entries) => {
            entries.forEach(en => {
                if (en.isIntersecting) {
                    en.target.classList.add('blg7-in');
                    blg7Io.unobserve(en.target);
                }
            });
        }, { threshold: .12 });
        document.querySelectorAll('.blg7-reveal').forEach(el => blg7Io.observe(el));

        /* ---------- PROGRESS BAR + TOP BUTTON ---------- */
        const blg7Bar = document.querySelector('.blg7-progress');
        const blg7Top = document.getElementById('blg7Top');

        window.addEventListener('scroll', () => {
            const sc = window.scrollY;
            const total = document.documentElement.scrollHeight - window.innerHeight;
            if (blg7Bar && total > 0) blg7Bar.style.width = (sc / total * 100) + '%';
            if (blg7Top) blg7Top.classList.toggle('blg7-show', sc > 500);
        });

        if (blg7Top) {
            blg7Top.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    </script>
</main>

<?php include 'include/footer.php'; ?>s