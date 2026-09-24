<?php include 'include/header.php' ?>
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
    <!-- section 2 -->
    <?php require_once __DIR__ . '/include/contect_section/section_2.php' ?>

    <!-- section 1 -->
    <?php require_once __DIR__ . '/include/contect_section/section_1.php' ?>
    


</main>


<?php include 'include/footer.php' ?>