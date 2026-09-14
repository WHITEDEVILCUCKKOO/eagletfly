<?php include 'include/header.php' ?>


<?php include "admin_access/db_config.php" ?>

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

<?php
$sql = "SELECT * FROM blog";

$stmt = mysqli_query($mydb, $sql);

$count = mysqli_num_rows($stmt);

$data_set = mysqli_fetch_all($stmt, MYSQLI_ASSOC);

// echo "Total Blogs: " . $count;






?>

<style>
    /* ===== Blog & Insights Page Styles (unique prefixed classes, no *{}, body{}, :root{}) ===== */

    .blogIn-wrapper {
        /* font-family: 'Segoe UI', Arial, sans-serif; */
        width: 100%;
        box-sizing: border-box;
        background-color: #f4f5f9;
        position: relative;
    }

    .blogIn-wrapper *,
    .blogIn-wrapper *::before,
    .blogIn-wrapper *::after {
        box-sizing: border-box;
    }

    /* ---- Banner ---- */
    .blogIn-banner {
        background: linear-gradient(100deg, #1f4fb8 0%, #a194b6 55%, #d2b5e4 100%);
        padding: 100px 40px 40px 40px;
        text-align: center;
    }

    .blogIn-bannerTitle {
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
        margin: 0 0 12px 0;
    }

    .blogIn-bannerSubtitle {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.88);
        margin: 0 0 30px 0;
    }

    .blogIn-controlsRow {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 14px;
    }

    .blogIn-searchBox {
        position: relative;
        width: 240px;
    }

    .blogIn-searchIcon {
        position: absolute;
        top: 50%;
        left: 16px;
        transform: translateY(-50%);
        width: 16px;
        height: 16px;
        color: #9a9fac;
    }

    .blogIn-searchInput {
        width: 100%;
        background-color: #ffffff;
        border: none;
        border-radius: 30px;
        padding: 13px 16px 13px 42px;
        font-size: 13.5px;
        font-family: inherit;
        color: #16213e;
        outline: none;
        transition: box-shadow 0.3s ease;
    }

    .blogIn-searchInput:focus {
        box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.3);
    }

    .blogIn-postBtn {
        display: flex;
        align-items: center;
        gap: 8px;
        background-color: #ffffff;
        color: #5a1fb8;
        border: none;
        border-radius: 30px;
        padding: 13px 22px;
        font-size: 13.5px;
        font-weight: 800;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .blogIn-postBtn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 22px rgba(0, 0, 0, 0.18);
    }

    .blogIn-postBtn svg {
        width: 15px;
        height: 15px;
    }

    .blogIn-adminBtn {
        position: relative;
        display: flex;
        align-items: center;
        gap: 8px;
        background-color: rgba(255, 255, 255, 0.16);
        color: #ffffff;
        border: none;
        border-radius: 30px;
        padding: 13px 22px;
        font-size: 13.5px;
        font-weight: 700;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .blogIn-adminBtn:hover {
        background-color: rgba(255, 255, 255, 0.26);
        transform: translateY(-3px);
    }

    .blogIn-adminBtn svg {
        width: 15px;
        height: 15px;
    }

    .blogIn-adminBadge {
        position: absolute;
        top: -6px;
        right: -6px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #ff3b3b;
        color: #ffffff;
        font-size: 10px;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: blogInBadgePulse 1.8s ease-in-out infinite;
    }

    @keyframes blogInBadgePulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.15);
        }
    }

    .blogIn-countPill {
        background-color: rgba(255, 255, 255, 0.16);
        color: #ffffff;
        border-radius: 30px;
        padding: 13px 22px;
        font-size: 13.5px;
        font-weight: 700;
        white-space: nowrap;
    }

    /* ---- Filter Bar ---- */
    .blogIn-filterBarOuter {
        background-color: #ffffff;
        border-bottom: 1px solid #eceef2;
    }

    .blogIn-filterBar {
        max-width: 1300px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 16px 40px;
        overflow-x: auto;
        scrollbar-width: thin;
    }

    .blogIn-filterBar::-webkit-scrollbar {
        height: 5px;
    }

    .blogIn-filterBar::-webkit-scrollbar-thumb {
        background-color: #d8d8de;
        border-radius: 4px;
    }

    .blogIn-filterIcon {
        flex-shrink: 0;
        width: 17px;
        height: 17px;
        color: #6b6b74;
        margin-right: 4px;
    }

    .blogIn-filterPill {
        flex-shrink: 0;
        border: none;
        background-color: #eef0f4;
        color: #4a4a52;
        font-size: 13px;
        font-weight: 600;
        padding: 9px 18px;
        border-radius: 20px;
        cursor: pointer;
        white-space: nowrap;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
    }

    .blogIn-filterPill:hover {
        background-color: #e2e2ec;
        transform: translateY(-2px);
    }

    .blogIn-filterPill.blogIsActive {
        background: linear-gradient(90deg, #5a1fb8, #7b2ff7);
        color: #ffffff;
    }

    /* ---- Blog Grid ---- */
    .blogIn-gridSection {
        max-width: 1300px;
        margin: 0 auto;
        padding: 34px 40px 60px 40px;
    }

    .blogIn-resultsInfo {
        font-size: 13.5px;
        color: #6b6b74;
        margin: 0 0 20px 0;
    }

    .blogIn-cardsGrid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .blogIn-card {
        background-color: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
        display: flex;
        flex-direction: column;
        opacity: 0;
        transform: translateY(20px);
        animation: blogInFadeUp 0.5s ease forwards;
    }

    .blogIn-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 34px rgba(0, 0, 0, 0.12);
    }

    @keyframes blogInFadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .blogIn-imageArea {
        position: relative;
        height: 180px;
        overflow: hidden;
    }

    .blogIn-cardImg {
        /* Yahan har blog ki cover image ka src daal dena. Filhal gradient placeholder rakha hai */
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .blogIn-card:hover .blogIn-cardImg {
        transform: scale(1.08);
    }

    .blogIn-imgFallback {
        width: 100%;
        height: 100%;
        /* background: linear-gradient(135deg, #7b2ff7, #5a1fb8); */
        background: linear-gradient(100deg, #1f4fb8 0%, #a194b6 55%, #d2b5e4 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* .blogIn-imgFallback svg {
        width: 34px;
        height: 34px;
        color: rgba(255, 255, 255, 0.5);
    } */

    .blogIn-catOverlayBadge {
        position: absolute;
        height: max-content;
        top: 14px;
        left: 14px;
        background-color: #ffffff;
        color: #5a1fb8;
        font-size: 11.5px;
        font-weight: 700;
        padding: 5px 14px;
        border-radius: 14px;
        z-index: 2;
    }

    .blogIn-cardBody {
        padding: 18px 20px 22px 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .blogIn-metaRow {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 12px;
    }

    .blogIn-metaItem {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 12px;
        color: #8a8f9c;
    }

    .blogIn-metaItem svg {
        width: 13px;
        height: 13px;
    }

    .blogIn-cardTitle {
        font-size: 16.5px;
        font-weight: 800;
        color: #1c1c22;
        line-height: 1.35;
        margin: 0 0 10px 0;
    }

    .blogIn-cardDesc {
        font-size: 13px;
        line-height: 1.6;
        color: #6b6b74;
        margin: 0 0 16px 0;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blogIn-tagsRow {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 16px;
    }

    .blogIn-tagPill {
        background-color: #f1ecfd;
        color: #6a2fd9;
        font-size: 11px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 10px;
    }

    .blogIn-readLink {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #6a2fd9;
        font-size: 13.5px;
        font-weight: 700;
        text-decoration: none;
        margin-top: auto;
        width: fit-content;
        transition: gap 0.3s ease;
    }

    .blogIn-readLink svg {
        width: 14px;
        height: 14px;
        transition: transform 0.3s ease;
    }

    .blogIn-readLink:hover svg {
        transform: translateX(4px);
    }

    .blogIn-noResults {
        grid-column: 1 / -1;
        text-align: center;
        padding: 60px 20px;
        color: #8a8f9c;
        font-size: 14.5px;
    }

    /* ---- Floating WhatsApp Button ---- */
    .blogIn-whatsappBtn {
        position: fixed;
        bottom: 26px;
        left: 26px;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: linear-gradient(135deg, #7b2ff7, #5a1fb8);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 24px rgba(90, 31, 184, 0.4);
        z-index: 50;
        cursor: pointer;
        animation: blogInWhatsappPulse 2.4s ease-in-out infinite;
        text-decoration: none;
    }

    .blogIn-whatsappBtn svg {
        width: 26px;
        height: 26px;
        color: #ffffff;
    }

    @keyframes blogInWhatsappPulse {

        0%,
        100% {
            box-shadow: 0 10px 24px rgba(90, 31, 184, 0.4);
        }

        50% {
            box-shadow: 0 10px 30px rgba(90, 31, 184, 0.65), 0 0 0 8px rgba(123, 47, 247, 0.12);
        }
    }

    /* ===================== RESPONSIVE BREAKPOINTS ===================== */

    @media (max-width: 1024px) {
        .blogIn-cardsGrid {
            grid-template-columns: repeat(2, 1fr);
        }

        .blogIn-banner {
            padding: 40px 24px 34px 24px;
        }

        .blogIn-bannerTitle {
            font-size: 32px;
        }
    }

    @media (max-width: 720px) {

        .blogIn-filterBar,
        .blogIn-gridSection {
            padding-left: 20px;
            padding-right: 20px;
        }

        .blogIn-searchBox {
            width: 100%;
        }

        .blogIn-controlsRow {
            width: 100%;
        }

        .blogIn-cardsGrid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .blogIn-bannerTitle {
            font-size: 25px;
        }

        .blogIn-bannerSubtitle {
            font-size: 13px;
        }

        .blogIn-postBtn,
        .blogIn-adminBtn,
        .blogIn-countPill {
            padding: 11px 16px;
            font-size: 12.5px;
        }
    }
</style>


<div class="blogIn-wrapper">

    <!-- Banner -->
    <div class="blogIn-banner">
        <h1 class="blogIn-bannerTitle">Blog &amp; Insights</h1>
        <p class="blogIn-bannerSubtitle">Insights on RCS, WhatsApp APIs, Bulk SMS, AI, and native integrations</p>

        <div class="blogIn-controlsRow">
            <div class="blogIn-searchBox" style="display: none;">
                <svg class="blogIn-searchIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" class="blogIn-searchInput" id="blogInSearchInput" placeholder="Search articles...">
            </div>

            <button class="blogIn-postBtn" style="display: none;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Post Blog
            </button>

            <button class="blogIn-adminBtn" onclick="window.location.href='login.php'">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
                Admin
                <span class="blogIn-adminBadge">1</span>
            </button>

            <span class="blogIn-countPill" id="blogInTotalCount">Total Blogs: <?php echo $count; ?></span>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="blogIn-filterBarOuter">
        <div class="blogIn-filterBar" id="blogInFilterBar" style="display: none;"></div>
    </div>

    <!-- Blog Grid -->
    <div class="blogIn-gridSection">
        <p class="blogIn-resultsInfo" id="blogInResultsInfo">
            <?php echo $count; ?> Article found
        </p>
        <div class="blogIn-cardsGrid">


            <?php foreach ($data_set as $blog) { ?>

                <div class="blogIn-card">

                    <div class="blogIn-imageArea">

                        <span class="blogIn-catOverlayBadge">
                            <?php echo $blog['blog_author']; ?>
                        </span>

                        <div class="blogIn-imgFallback">

                            <img src="assets/blog/<?php echo $blog['blog_img'] ?>" alt="">

                        </div>

                    </div>

                    <div class="blogIn-cardBody">

                        <div class="blogIn-metaRow">

                            <span class="blogIn-metaItem">
                                <?php echo timeAgo($blog['created_at']); ?>
                            </span>

                            <!-- <span class="blogIn-metaItem">
                                10 min read
                            </span> -->

                        </div>

                        <h3 class="blogIn-cardTitle">
                            <?php echo $blog['blog_title']; ?>
                        </h3>

                        <section style=" display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;overflow: hidden;">

                            <p class="blogIn-cardDesc">
                                <?php echo $blog['blog_content']; ?>
                            </p>
                        </section>
                        <br>

                        <a href="#" class="blogIn-readLink">
                            Read Article
                        </a>

                    </div>

                </div>

            <?php } ?>

        </div>
    </div>

</div>


<script>
    (function blogInsightsInit() {

        // ---- Blog data ----
        var blogInPosts = [{
                title: "Regulatory Compliance: Ensuring PII Security in Messaging",
                category: "Compliance",
                date: "Oct 18, 2025",
                readTime: "10 min read",
                desc: "A deep dive into GDPR, CCPA, TRAI DLT, and PII security requirements for SMS, WhatsApp, and omnichannel messaging — essential reading for compliance teams.",
                tags: ["#Compliance", "#GDPR", "#TRAI DLT", "#Security", "#PII", "#CPaaS"]
            },
            {
                title: "Using In-Chat Forms and Buttons for Quick Data Capture",
                category: "UX/UI",
                date: "Oct 20, 2025",
                readTime: "6 min read",
                desc: "Simplify user experience by embedding forms and quick-reply buttons directly into WhatsApp, RCS, and messaging interfaces — eliminating friction from data capture flows.",
                tags: ["#UX", "#Data Capture", "#Forms", "#CPaaS", "#Conversational AI"]
            },
            {
                title: "Dynamic Image Personalization in Multi-Channel Campaigns",
                category: "Personalization",
                date: "Oct 25, 2025",
                readTime: "5 min read",
                desc: "Drive higher conversion rates by dynamically generating personalized images and coupons within your SMS, WhatsApp, and RCS message campaigns.",
                tags: ["#Personalization", "#Marketing", "#Smart AI", "#Dynamic Images", "#CPaaS"]
            },
            {
                title: "RCS Business Messaging: The Complete Setup Guide",
                category: "RCS",
                date: "Oct 12, 2025",
                readTime: "8 min read",
                desc: "Everything you need to know about enabling RCS Business Messaging, verified sender agents, and rich media capabilities for your brand.",
                tags: ["#RCS", "#RichMedia", "#Setup", "#Branding"]
            },
            {
                title: "WhatsApp Business API vs Cloud API: Which One to Choose",
                category: "WhatsApp",
                date: "Oct 8, 2025",
                readTime: "7 min read",
                desc: "A practical comparison between WhatsApp's On-Premise, Business API and Cloud API options to help you pick the right integration path.",
                tags: ["#WhatsApp", "#CloudAPI", "#Integration"]
            },
            {
                title: "Bulk SMS Delivery Optimization at Scale",
                category: "SMS",
                date: "Oct 5, 2025",
                readTime: "6 min read",
                desc: "Techniques for improving SMS delivery rates, throughput and cost-efficiency when sending millions of messages across carriers.",
                tags: ["#SMS", "#Delivery", "#Scale"]
            },
            {
                title: "How AI Agents Are Reshaping Conversational Support",
                category: "AI",
                date: "Sep 30, 2025",
                readTime: "9 min read",
                desc: "Explore how generative AI agents are automating first-line customer support across chat, voice and messaging channels.",
                tags: ["#AI", "#Automation", "#Support"]
            },
            {
                title: "Native CRM Integrations: Connecting Messaging to Your Stack",
                category: "Integration",
                date: "Sep 24, 2025",
                readTime: "7 min read",
                desc: "A guide to integrating messaging platforms natively with Salesforce, HubSpot and other CRMs for unified customer data.",
                tags: ["#Integration", "#CRM", "#DataSync"]
            },
            {
                title: "Building a Winning Omnichannel Messaging Strategy",
                category: "Strategy",
                date: "Sep 18, 2025",
                readTime: "8 min read",
                desc: "How to design a messaging strategy that blends SMS, WhatsApp and RCS for maximum reach and engagement.",
                tags: ["#Strategy", "#Omnichannel", "#Engagement"]
            }
        ];

        var blogInFilterBarEl = document.getElementById('blogInFilterBar');
        var blogInCardsGridEl = document.getElementById('blogInCardsGrid');
        var blogInResultsInfoEl = document.getElementById('blogInResultsInfo');
        var blogInSearchInputEl = document.getElementById('blogInSearchInput');
        var blogInTotalCountEl = document.getElementById('blogInTotalCount');

        // blogInTotalCountEl.textContent = 'Total Blogs: ' + blogInPosts.length;

        var blogInActiveCategory = 'All';
        var blogInSearchTerm = '';

        // ---- Build category list ----
        var blogInCategorySet = ['All'];
        blogInPosts.forEach(function(p) {
            if (blogInCategorySet.indexOf(p.category) === -1) {
                blogInCategorySet.push(p.category);
            }
        });

        function blogInRenderFilters() {
            blogInFilterBarEl.innerHTML = '<svg class="blogIn-filterIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>';
            blogInCategorySet.forEach(function(cat) {
                var blogBtn = document.createElement('button');
                blogBtn.className = 'blogIn-filterPill' + (cat === blogInActiveCategory ? ' blogIsActive' : '');
                blogBtn.textContent = cat;
                blogBtn.addEventListener('click', function() {
                    blogInActiveCategory = cat;
                    blogInRenderFilters();
                    blogInRenderCards();
                });
                blogInFilterBarEl.appendChild(blogBtn);
            });
        }

        function blogInRenderCards() {
            var blogFiltered = blogInPosts.filter(function(p) {
                var blogMatchesCategory = (blogInActiveCategory === 'All') || (p.category === blogInActiveCategory);
                var blogHaystack = (p.title + ' ' + p.desc + ' ' + p.category + ' ' + p.tags.join(' ')).toLowerCase();
                var blogMatchesSearch = blogHaystack.indexOf(blogInSearchTerm) !== -1;
                return blogMatchesCategory && blogMatchesSearch;
            });

            // blogInResultsInfoEl.textContent = blogFiltered.length + ' article' + (blogFiltered.length === 1 ? '' : 's') + ' found';

            blogInCardsGridEl.innerHTML = '';

            if (blogFiltered.length === 0) {
                var blogEmptyDiv = document.createElement('div');
                blogEmptyDiv.className = 'blogIn-noResults';
                blogEmptyDiv.textContent = 'No articles match your search. Try a different keyword or category.';
                blogInCardsGridEl.appendChild(blogEmptyDiv);
                return;
            }

            blogFiltered.forEach(function(p, index) {
                var blogCard = document.createElement('div');
                blogCard.className = 'blogIn-card';
                blogCard.style.animationDelay = (index % 9) * 0.05 + 's';

                var blogTagsHtml = p.tags.map(function(t) {
                    return '<span class="blogIn-tagPill">' + t + '</span>';
                }).join('');

                blogCard.innerHTML =
                    '<div class="blogIn-imageArea">' +
                    '<span class="blogIn-catOverlayBadge">' + p.category + '</span>' +
                    '<div class="blogIn-imgFallback">' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>' +
                    '</div>' +
                    '</div>' +
                    '<div class="blogIn-cardBody">' +
                    '<div class="blogIn-metaRow">' +
                    '<span class="blogIn-metaItem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>' + p.date + '</span>' +
                    '<span class="blogIn-metaItem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>' + p.readTime + '</span>' +
                    '</div>' +
                    '<h3 class="blogIn-cardTitle">' + p.title + '</h3>' +
                    '<p class="blogIn-cardDesc">' + p.desc + '</p>' +
                    '<div class="blogIn-tagsRow">' + blogTagsHtml + '</div>' +
                    '<a href="#" class="blogIn-readLink">Read Article ' +
                    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' +
                    '</a>' +
                    '</div>';

                // blogInCardsGridEl.appendChild(blogCard);
            });
        }

        blogInSearchInputEl.addEventListener('input', function() {
            blogInSearchTerm = blogInSearchInputEl.value.trim().toLowerCase();
            blogInRenderCards();
        });

        blogInRenderFilters();
        blogInRenderCards();

    })();
</script>



<?php include 'include/footer.php' ?>