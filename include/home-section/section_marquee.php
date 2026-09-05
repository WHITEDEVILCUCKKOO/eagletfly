<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .colab_brand_a3e55 {
        width: 100%;
        padding: 40px 0;
        /* background: linear-gradient(356deg, #b9c3e726, #535c7429); */
        /* margin-top: 5rem; */
    }

    .slider-wrap {
        /* width: 74.5%; */
        /* background: #ffffff; */
        /* border-radius: 20px; */
        /* padding: 28px 0; */
        /* box-shadow: 0 10px 30px rgba(20, 25, 40, 0.08); */
        /* background: rgba(255, 255, 255, .36); */
        /* border: 1px solid rgba(239, 86, 13, .12); */
        /* background: linear-gradient(356deg, #b9c3e726, #535c7429); */
        position: relative;
        overflow: hidden;
        margin: auto;
    }

    /* fade edges */
    .slider-wrap::before,
    .slider-wrap::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 90px;
        z-index: 2;
        pointer-events: none;
    }

    .slider-wrap::before {
        left: 0;
        background: linear-gradient(to right,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    .slider-wrap::after {
        right: 0;
        background: linear-gradient(to left,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    .title_wa85::before {
        left: 0;
        background: linear-gradient(to right,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    .title_wa85::after {
        right: 0;
        background: linear-gradient(to left,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    .track {
        display: flex;
        width: max-content;
        animation: scroll 75s linear infinite;
        padding: 10px 0;
    }

    /* .slider-wrap:hover .track {
          animation-play-state: paused;
      } */

    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .logo-card {
        flex: 0 0 auto;
        width: 100px;
        height: 70px;
        margin: 0 15px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        /* background: #f4f5f7;  */
        /* padding: 14px; */
        border-radius: 15px;
        overflow: hidden;
    }

    .logo-card img {
        max-width: 100%;
        /* max-height: 100%; */
        height: 100px ;
        object-fit: contain;
    }
</style>

<div class="colab_brand_a3e55" style="background: linear-gradient(356deg, #b9c3e726, #535c7429);">

    <div class="title_wa85" style="    font-family: 'Sora', inter;  font-weight:800;font-size:35px;text-align: center;
    padding: 20px;">
        Hiring <em class="rainbow-animated_without_animtion" style="    padding: 0 19px 0px 0;
    font-style: normal;">Partner</em>
    </div>


    <div class="slider-wrap" style="  ">
        <div class="track" id="track">
            <!-- logos rendered by JS, duplicated for seamless loop -->

            <div class="logo-card"><img src="assets/brands/accenture.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Airtel.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/amdocs.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Cognizant.png" style="height: 50px;" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/DELL.png" style="height: 50px;"   alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/genpact.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Google.png" style="height: 50px;" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/HCL.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/hp.png" style="height: 50px;" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Indiabulls.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/INFY_BIG.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Paytm.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/RBS.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Sapient.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Standard_Chartered.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Wipro-logo.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/accenture.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Airtel.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/amdocs.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Cognizant.png" style="height: 50px;" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/DELL.png" style="height: 50px;"   alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/genpact.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Google.png" style="height: 50px;" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/HCL.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/hp.png" style="height: 50px;" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Indiabulls.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/INFY_BIG.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Paytm.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/RBS.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Sapient.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Standard_Chartered.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Wipro-logo.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/accenture.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Airtel.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/amdocs.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Cognizant.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/DELL.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/genpact.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Google.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/HCL.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/hp.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Indiabulls.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/INFY_BIG.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Paytm.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/RBS.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Sapient.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Standard_Chartered.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Wipro-logo.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/accenture.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Airtel.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/amdocs.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Cognizant.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/DELL.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/genpact.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Google.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/HCL.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/hp.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Indiabulls.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/INFY_BIG.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Paytm.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/RBS.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Sapient.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Standard_Chartered.png" alt="client logo"></div>
            <div class="logo-card"><img src="assets/brands/Wipro-logo.png" alt="client logo"></div>
        </div>
    </div>
</div>
<!-- <script>
    const logos = [
        "assets/brands/accenture.png",
        "assets/brands/Airtel.png",
        "assets/brands/amdocs.png",
        "assets/brands/Cognizant.png",
        "assets/brands/DELL.png",
        "assets/brands/genpact.png",
        "assets/brands/Google.png",
        "assets/brands/HCL.png",
        "assets/brands/hp.png",
        "assets/brands/Indiabulls.png",
        "assets/brands/INFY_BIG.png",
        "assets/brands/Paytm.png",
        "assets/brands/RBS.png",
        "assets/brands/Sapient.png",
        "assets/brands/Standard_Chartered.png",
        "assets/brands/Wipro-logo.png",
        "assets/brands/accenture.png",
        "assets/brands/Airtel.png",
        "assets/brands/amdocs.png",
        "assets/brands/Cognizant.png",
        "assets/brands/DELL.png",
        "assets/brands/genpact.png",
        "assets/brands/Google.png",
        "assets/brands/HCL.png",
        "assets/brands/hp.png",
        "assets/brands/Indiabulls.png",
        "assets/brands/INFY_BIG.png",
        "assets/brands/Paytm.png",
        "assets/brands/RBS.png",
        "assets/brands/Sapient.png",
        "assets/brands/Standard_Chartered.png",
        "assets/brands/Wipro-logo.png",
       

    ];

    const track = document.getElementById('track');

    function renderSet() {
        logos.forEach(src => {
            const card = document.createElement('div');
            card.className = 'logo-card';
            const img = document.createElement('img');
            img.src = src;
            img.alt = 'client logo';
            card.appendChild(img);
            track.appendChild(card);
        });
    }

    // duplicate the set so the loop is seamless
    renderSet();
    renderSet();
</script> -->