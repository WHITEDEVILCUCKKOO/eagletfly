<?php
$seo_title       = "About EagletFly - Training Institute in Delhi";
$seo_description = "Learn about EagletFly, our mission, expert trainers and hands-on approach to building job-ready skills in technology and digital marketing.";
$seo_keywords    = "about EagletFly, training institute in Delhi, IT training center, skill development institute";

include 'include/header.php';
?>

<style>
    .background_css {
        background: linear-gradient(120deg, #30383D, #46545E, #F5820B, #F5A900, #F5820B, #46545E, #30383D);
        background-size: 300% 300%;
        animation: brandGradient 6s ease infinite;
    }

    @keyframes brandGradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }
</style>
<main>
    <!-- section 1 -->
    <?php require_once __DIR__ . '/include/about_section/section_1.php' ?>

    <!-- section 2 -->
    <?php require_once __DIR__ . '/include/about_section/section_2.php' ?>
    

    <!-- section 3 -->
    <?php require_once __DIR__ . '/include/about_section/section_3.php' ?>
    

    <!-- section 4 -->
    <?php require_once __DIR__ . '/include/about_section/section_4.php' ?>
    
    
    <!-- section 5 -->
    <?php require_once __DIR__ . '/include/about_section/section_5.php' ?>
    
    
    <!-- section 6 -->
    <?php require_once __DIR__ . '/include/about_section/section_6.php' ?>
    <?php require_once __DIR__ . '/include/about_section/section_4_0.php' ?>
    


</main>


<?php include 'include/footer.php' ?>