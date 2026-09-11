<!-- ==================================================================== -->
<!-- ==== SECTION 2: WHAT WE DO (SERVICES GRID) ==== -->
<!-- ==================================================================== -->
<style>
    .kds-section {
        /* font-family: 'Segoe UI', Arial, sans-serif; */
        background: #fff;
        padding: 160px 20px 60px;
        position: relative;
    }

    .kds-container {
        max-width: 1180px;
        margin: 0 auto;
        text-align: center;
    }

    .kds-eyebrow {
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 1.5px;
        color: #2f6df3;
        margin: 0 0 8px 0;
    }

    .kds-heading {
        font-size: 44px;
        font-weight: 800;
        color: #101828;
        margin: 0 0 10px 0;
    }

    .kds-heading em {
        /* color: #2f6df3; */
        font-style: normal;

    }

    .kds-subtext {
        font-size: 14px;
        color: #667085;
        max-width: 520px;
        margin: 0 auto 40px !important;
        line-height: 1.6;
    }

    .kds-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 22px;
        text-align: left;
    }

    .kds-card {
        border: 1px solid #eaecf0;
        border-radius: 12px;
        padding: 24px 22px;
        background: #fff;
        opacity: 0;
        transform: translateY(14px);
        animation: kds-card-in 0.5s ease forwards;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    }

    @keyframes kds-card-in {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .kds-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 32px rgba(16, 24, 40, 0.10);
        border-color: #d6e0ff;
    }

    .kds-grid .kds-card:nth-child(1) {
        animation-delay: 0.02s;
    }

    .kds-grid .kds-card:nth-child(2) {
        animation-delay: 0.08s;
    }

    .kds-grid .kds-card:nth-child(3) {
        animation-delay: 0.14s;
    }

    .kds-grid .kds-card:nth-child(4) {
        animation-delay: 0.20s;
    }

    .kds-grid .kds-card:nth-child(5) {
        animation-delay: 0.26s;
    }

    .kds-grid .kds-card:nth-child(6) {
        animation-delay: 0.32s;
    }

    .kds-icon {
        width: 60px;
        height: 60px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        margin-bottom: 16px;
        margin: auto;
    }

    .kds-icon-blue {
        background: #E6F7FD;
    }

    .kds-icon-purple {
        background: #EBFBF5;
    }

    .kds-icon-green {
        /* background: #e8f9f0; */
        background: #F3F1FE;
    }

    .kds-icon-orange {
        background: #FEF5F2;
    }

    .kds-icon-navy {
        background: #EDF6FE;
    }

    /* .kds-icon-violet {
    } */

    .kds-card-title {
        font-size: 16px;
        font-weight: 700;
        color: #101828;
        margin: 10px auto !important;
        text-align: center;
    }

    .kds-card-text {
        font-size: 13px;
        color: #667085;
        line-height: 1.6;
        margin: 15px 0 14px !important;
        text-align: center;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3;
        overflow: hidden;

    }

    .kds-learn-more {
        font-size: 13px;
        font-weight: 600;
        width: 100%;
        color: #2f6df3;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: gap 0.25s ease;
        margin: auto;
        text-align: center;
        justify-content: center;
    }

    .kds-learn-more:hover {
        gap: 9px;
    }

    @media (max-width: 900px) {
        .kds-grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 560px) {
        .kds-grid {
            grid-template-columns: 1fr;
        }

        .kds-heading {
            font-size: 21px;
        }

        .kds-section {
            padding: 44px 16px;
        }
    }

    .section_2_cards_icons {

        svg {
            /* fill: #0438F0; */
            width: 35px;
        }
    }

    .section_2_cards_icon1 {

        svg {
            /* fill: #0438F0;    */
            width: 35px;
        }
    }









    .bottom_div_s {
        position: absolute;
        width: 80%;
        height: max-content;
        left: 50%;
        top: -80px;
        transform: translateX(-50%);
        box-shadow: 0 1px 5px 2px #6666666b;
        border-radius: 15px;

    }
</style>

<section class="kds-section">
    <div class="kds-container">

        <p class="kds-eyebrow">WHAT WE DO</p>
        <h2 class="kds-heading">AI & ML <em class="animated-gradient-text"> Services </em></h2>
        <p class="kds-subtext">From data to deployment, we deliver end-to-end AI/ML solutions tailored to your business needs.</p>

        <div class="kds-grid">

            <div class="kds-card">
                <div class="kds-icon kds-icon-blue">
                    <span class="section_2_cards_icons">
                        <svg fill="#40bcf2" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-4.92 -4.92 501.36 501.36" xml:space="preserve" stroke="#40bcf2" stroke-width="8.847359999999998">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <path d="M285.266,440.32c-3.724-14.326-14.943-25.542-29.266-29.266v-32.404c76.556-2.345,133.12-30.677,133.12-67.821V68.05 C389.12,29.26,327.49,0,245.76,0S102.4,29.26,102.4,68.05v242.78c0,37.144,56.564,65.476,133.12,67.821v32.404 c-14.324,3.723-25.543,14.94-29.266,29.266H0v20.48h206.254c4.579,17.618,20.477,30.72,39.506,30.72s34.927-13.102,39.506-30.72 H491.52v-20.48H285.266z M245.76,20.48c72.415,0,122.88,25.07,122.88,47.57s-50.465,47.56-122.88,47.56S122.88,90.55,122.88,68.05 S173.345,20.48,245.76,20.48z M122.88,103.966c24.624,19.541,69.376,32.124,122.88,32.124s98.256-12.583,122.88-32.124v45.014 c0,22.5-50.465,47.56-122.88,47.56s-122.88-25.06-122.88-47.56V103.966z M122.88,184.896 c24.624,19.541,69.376,32.124,122.88,32.124s98.256-12.583,122.88-32.124V229.9c0,22.5-50.465,47.57-122.88,47.57 S122.88,252.4,122.88,229.9V184.896z M122.88,310.83v-45.011c24.624,19.544,69.376,32.131,122.88,32.131 s98.256-12.587,122.88-32.131v45.011c0,22.5-50.465,47.57-122.88,47.57S122.88,333.33,122.88,310.83z M245.76,471.04 c-11.295,0-20.48-9.19-20.48-20.48s9.185-20.48,20.48-20.48c11.295,0,20.48,9.19,20.48,20.48S257.055,471.04,245.76,471.04z"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                </div>
                <h3 class="kds-card-title">Data Engineering:</h3>
                <p class="kds-card-text">Focused on collecting, cleaning, and preparing high-quality data to build a strong foundation for AI/ML modeling.</p>
                <a href="#" class="kds-learn-more">Learn More &#8594;</a>
            </div>

            <div class="kds-card">
                <div class="kds-icon kds-icon-purple">
                    <span class="section_2_cards_icons">
                        <svg fill="#30742f" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 449.978 449.978" xml:space="preserve" stroke="#30742f" stroke-width="4.049802">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M85.213,224.989c0-23.493-19.113-42.606-42.606-42.606S0,201.496,0,224.989c0,23.493,19.113,42.606,42.606,42.606 C66.099,267.595,85.213,248.482,85.213,224.989z M42.606,252.596C27.384,252.596,15,240.211,15,224.989 c0-15.222,12.384-27.606,27.606-27.606c15.222,0,27.606,12.384,27.606,27.606C70.212,240.211,57.829,252.596,42.606,252.596z"></path>
                                            <path d="M407.372,182.383c-23.494,0-42.607,19.113-42.607,42.606c0,23.493,19.113,42.606,42.607,42.606 c23.493,0,42.606-19.113,42.606-42.606C449.978,201.496,430.865,182.383,407.372,182.383z M407.372,252.596 c-15.223,0-27.607-12.384-27.607-27.606s12.385-27.606,27.607-27.606s27.606,12.384,27.606,27.606 S422.595,252.596,407.372,252.596z"></path>
                                            <path d="M65.897,323.826c-16.612,16.612-16.612,43.642,0,60.254c8.307,8.306,19.217,12.459,30.128,12.459 c10.91,0,21.82-4.153,30.127-12.459c16.612-16.612,16.612-43.642,0-60.254C109.539,307.214,82.511,307.215,65.897,323.826z M115.545,373.474c-10.765,10.765-28.277,10.763-39.04,0c-10.764-10.764-10.764-28.278,0-39.042 c5.382-5.382,12.451-8.073,19.521-8.073c7.068,0,14.138,2.691,19.52,8.073C126.309,345.196,126.309,362.71,115.545,373.474z"></path>
                                            <path d="M224.989,364.766c-23.493,0-42.606,19.113-42.606,42.606s19.113,42.606,42.606,42.606s42.606-19.113,42.606-42.606 S248.482,364.766,224.989,364.766z M224.989,434.979c-15.223,0-27.606-12.384-27.606-27.606s12.384-27.606,27.606-27.606 s27.606,12.384,27.606,27.606S240.212,434.979,224.989,434.979z"></path>
                                            <path d="M323.825,323.826c-16.612,16.612-16.612,43.642,0,60.254c8.307,8.306,19.217,12.459,30.128,12.459 c10.911,0,21.821-4.153,30.128-12.459c16.612-16.612,16.612-43.642,0-60.254C367.468,307.214,340.438,307.214,323.825,323.826z M373.474,373.474c-10.764,10.764-28.277,10.764-39.041,0c-10.764-10.764-10.764-28.278,0-39.042 c5.382-5.382,12.451-8.073,19.521-8.073s14.139,2.691,19.521,8.073C384.237,345.196,384.237,362.71,373.474,373.474z"></path>
                                            <path d="M353.953,138.612c10.911,0,21.821-4.153,30.128-12.459c16.612-16.612,16.612-43.643,0-60.255 c-16.613-16.612-43.643-16.612-60.256,0c-16.612,16.612-16.612,43.643,0,60.255C332.132,134.459,343.042,138.612,353.953,138.612 z M334.433,76.504c5.382-5.382,12.451-8.073,19.521-8.073s14.139,2.691,19.521,8.073c10.765,10.764,10.765,28.278,0,39.042 c-10.764,10.764-28.277,10.764-39.041,0C323.668,104.782,323.668,87.269,334.433,76.504z"></path>
                                            <path d="M224.989,85.213c23.493,0,42.606-19.113,42.606-42.606C267.596,19.113,248.482,0,224.989,0s-42.606,19.113-42.606,42.607 C182.383,66.1,201.496,85.213,224.989,85.213z M224.989,15c15.223,0,27.606,12.384,27.606,27.607 c0,15.222-12.384,27.606-27.606,27.606s-27.606-12.384-27.606-27.606C197.383,27.384,209.767,15,224.989,15z"></path>
                                            <path d="M96.025,138.612c10.91,0,21.82-4.153,30.127-12.459c16.612-16.612,16.612-43.643,0-60.255 c-16.613-16.613-43.642-16.611-60.255,0c-16.612,16.612-16.612,43.643,0,60.255C74.204,134.459,85.114,138.612,96.025,138.612z M76.505,76.504c5.382-5.382,12.451-8.073,19.521-8.073c7.068,0,14.138,2.691,19.52,8.073c10.765,10.764,10.765,28.278,0,39.042 c-10.765,10.764-28.277,10.763-39.04,0C65.74,104.782,65.74,87.269,76.505,76.504z"></path>
                                            <path d="M261.937,162.689h-73.896c-4.143,0-7.5,3.358-7.5,7.5V279.79c0,4.142,3.357,7.5,7.5,7.5h73.896 c4.143,0,7.5-3.358,7.5-7.5V170.189C269.437,166.047,266.079,162.689,261.937,162.689z M254.437,272.29h-58.896v-22.675h58.896 V272.29z M254.437,234.614h-58.896v-19.25h58.896V234.614z M254.437,200.364h-58.896v-22.675h58.896V200.364z"></path>
                                            <path d="M217.489,102.544v35.963c0,4.142,3.357,7.5,7.5,7.5s7.5-3.358,7.5-7.5v-35.963c0-4.142-3.357-7.5-7.5-7.5 S217.489,98.402,217.489,102.544z"></path>
                                            <path d="M232.489,347.434v-35.963c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v35.963c0,4.142,3.357,7.5,7.5,7.5 S232.489,351.576,232.489,347.434z"></path>
                                            <path d="M143.711,133.104c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678,0,10.606l25.43,25.43 c1.465,1.464,3.385,2.197,5.304,2.197s3.839-0.732,5.304-2.197c2.929-2.929,2.929-7.678,0-10.606L143.711,133.104z"></path>
                                            <path d="M316.874,316.874c2.929-2.929,2.929-7.678,0-10.606l-25.43-25.43c-2.93-2.929-7.678-2.929-10.607,0 c-2.929,2.929-2.929,7.678,0,10.606l25.43,25.43c1.465,1.464,3.385,2.197,5.304,2.197 C313.49,319.071,315.409,318.338,316.874,316.874z"></path>
                                            <path d="M95.044,224.989c0,4.142,3.357,7.5,7.5,7.5h35.963c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-35.963 C98.401,217.489,95.044,220.847,95.044,224.989z"></path>
                                            <path d="M347.434,217.489h-35.963c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h35.963c4.143,0,7.5-3.358,7.5-7.5 C354.934,220.847,351.576,217.489,347.434,217.489z"></path>
                                            <path d="M158.533,280.838l-25.43,25.43c-2.929,2.929-2.929,7.678,0,10.606c1.465,1.464,3.385,2.197,5.304,2.197 s3.839-0.732,5.304-2.197l25.43-25.43c2.929-2.929,2.929-7.678,0-10.606C166.211,277.909,161.463,277.909,158.533,280.838z"></path>
                                            <path d="M286.141,171.337c1.919,0,3.839-0.732,5.304-2.197l25.43-25.43c2.929-2.929,2.929-7.678,0-10.606 c-2.93-2.929-7.678-2.929-10.607,0l-25.43,25.43c-2.929,2.929-2.929,7.678,0,10.606 C282.302,170.605,284.222,171.337,286.141,171.337z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                </div>
                <h3 class="kds-card-title">Machine Learning</h3>
                <p class="kds-card-text">Involves building predictive models designed to solve complex business problems.</p>
                <a href="#" class="kds-learn-more">Learn More &#8594;</a>
            </div>

            <div class="kds-card">
                <div class="kds-icon kds-icon-green"><span class="section_2_cards_icon1">
                        <svg fill="#742499" viewBox="0 0 100 100" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#742499" stroke-width="1.8">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path d="M93.998,45.312c0-3.676-1.659-7.121-4.486-9.414c0.123-0.587,0.184-1.151,0.184-1.706c0-4.579-3.386-8.382-7.785-9.037 c0.101-0.526,0.149-1.042,0.149-1.556c0-4.875-3.842-8.858-8.655-9.111c-0.079-0.013-0.159-0.024-0.242-0.024 c-0.04,0-0.079,0.005-0.12,0.006c-0.04-0.001-0.079-0.006-0.12-0.006c-0.458,0-0.919,0.041-1.406,0.126 c-0.846-4.485-4.753-7.825-9.437-7.825c-5.311,0-9.632,4.321-9.632,9.633v65.918c0,6.723,5.469,12.191,12.191,12.191 c4.46,0,8.508-2.413,10.646-6.246c0.479,0.104,0.939,0.168,1.401,0.198c2.903,0.185,5.73-0.766,7.926-2.693 c2.196-1.927,3.51-4.594,3.7-7.51c0.079-1.215-0.057-2.434-0.403-3.638c3.796-2.691,6.027-6.952,6.027-11.621 c0-3.385-1.219-6.635-3.445-9.224C92.731,51.505,93.998,48.471,93.998,45.312z M90.938,62.999c0,3.484-1.582,6.68-4.295,8.819 c-2.008-3.196-5.57-5.237-9.427-5.237c-0.828,0-1.5,0.672-1.5,1.5s0.672,1.5,1.5,1.5c3.341,0,6.384,2.093,7.582,5.208 c0.41,1.088,0.592,2.189,0.521,3.274c-0.138,2.116-1.091,4.051-2.685,5.449c-1.594,1.399-3.641,2.094-5.752,1.954 c-0.594-0.039-1.208-0.167-1.933-0.402c-0.74-0.242-1.541,0.124-1.846,0.84c-1.445,3.404-4.768,5.604-8.465,5.604 c-5.068,0-9.191-4.123-9.191-9.191V16.399c0-3.657,2.975-6.633,6.632-6.633c3.398,0,6.194,2.562,6.558,5.908 c-2.751,1.576-4.612,4.535-4.612,7.926c0,0.829,0.672,1.5,1.5,1.5s1.5-0.671,1.5-1.5c0-3.343,2.689-6.065,6.016-6.13 c3.327,0.065,6.016,2.787,6.016,6.129c0,0.622-0.117,1.266-0.359,1.971c-0.057,0.166-0.084,0.34-0.081,0.515 c0.001,0.041,0.003,0.079,0.007,0.115c-0.006,0.021-0.01,0.035-0.01,0.035c-0.118,0.465-0.006,0.959,0.301,1.328 c0.307,0.369,0.765,0.569,1.251,0.538c0.104-0.007,0.208-0.02,0.392-0.046c3.383,0,6.136,2.753,6.136,6.136 c0,0.572-0.103,1.159-0.322,1.849c-0.203,0.635,0.038,1.328,0.591,1.7c2.434,1.639,3.909,4.329,4.014,7.242 c0,0.004-0.001,0.008-0.001,0.012c0,5.03-4.092,9.123-9.122,9.123s-9.123-4.093-9.123-9.123c0-0.829-0.672-1.5-1.5-1.5 s-1.5,0.671-1.5,1.5c0,6.685,5.438,12.123,12.123,12.123c2.228,0,4.31-0.615,6.106-1.668C89.88,57.539,90.938,60.212,90.938,62.999 z"></path>
                                    <path d="M38.179,6.766c-4.684,0-8.59,3.34-9.435,7.825c-0.488-0.085-0.949-0.126-1.407-0.126c-0.04,0-0.079,0.005-0.12,0.006 c-0.04-0.001-0.079-0.006-0.12-0.006c-0.083,0-0.163,0.011-0.242,0.024c-4.813,0.253-8.654,4.236-8.654,9.111 c0,0.514,0.049,1.03,0.149,1.556c-4.399,0.655-7.785,4.458-7.785,9.037c0,0.554,0.061,1.118,0.184,1.706 c-2.827,2.293-4.486,5.738-4.486,9.414c0,3.159,1.266,6.193,3.505,8.463c-2.227,2.589-3.446,5.839-3.446,9.224 c0,4.669,2.231,8.929,6.027,11.621c-0.347,1.204-0.482,2.423-0.402,3.639c0.19,2.915,1.503,5.582,3.699,7.509 c2.196,1.928,5.015,2.879,7.926,2.693c0.455-0.03,0.919-0.096,1.4-0.199c2.138,3.834,6.186,6.247,10.646,6.247 c6.722,0,12.191-5.469,12.191-12.191V16.399C47.811,11.087,43.49,6.766,38.179,6.766z M44.811,82.317 c0,5.068-4.123,9.191-9.191,9.191c-3.697,0-7.02-2.2-8.464-5.604c-0.241-0.567-0.793-0.914-1.381-0.914 c-0.154,0-0.311,0.023-0.465,0.074c-0.724,0.235-1.338,0.363-1.933,0.402c-2.119,0.139-4.158-0.556-5.751-1.954 c-1.594-1.398-2.547-3.333-2.685-5.449c-0.076-1.16,0.125-2.336,0.598-3.495c0.007-0.017,0.005-0.036,0.011-0.053 c1.342-3.056,4.225-4.953,7.597-4.953c0.829,0,1.5-0.672,1.5-1.5s-0.671-1.5-1.5-1.5c-3.938,0-7.501,2.007-9.548,5.239 c-2.701-2.139-4.277-5.327-4.277-8.802c0-2.787,1.06-5.46,2.978-7.549c1.796,1.053,3.879,1.668,6.107,1.668 c6.685,0,12.123-5.438,12.123-12.123c0-0.829-0.671-1.5-1.5-1.5s-1.5,0.671-1.5,1.5c0,5.03-4.092,9.123-9.123,9.123 s-9.123-4.093-9.123-9.123c0-0.002-0.001-0.004-0.001-0.006c0.103-2.915,1.578-5.607,4.013-7.248 c0.553-0.372,0.793-1.064,0.591-1.699c-0.22-0.691-0.322-1.278-0.322-1.85c0-3.376,2.741-6.125,6.195-6.125 c0.007,0,0.015,0,0.022,0c0.103,0.014,0.206,0.027,0.311,0.034c0.485,0.03,0.948-0.171,1.254-0.542 c0.307-0.372,0.417-0.868,0.294-1.334c0-0.001-0.003-0.014-0.008-0.031c0.003-0.035,0.006-0.067,0.007-0.095 c0.005-0.18-0.022-0.359-0.081-0.529c-0.242-0.707-0.359-1.352-0.359-1.972c0-3.342,2.688-6.065,6.016-6.129 c3.328,0.065,6.016,2.787,6.016,6.13c0,0.829,0.671,1.5,1.5,1.5s1.5-0.671,1.5-1.5c0-3.391-1.861-6.35-4.612-7.926 c0.364-3.346,3.16-5.908,6.558-5.908c3.657,0,6.632,2.976,6.632,6.633V82.317z"></path>
                                </g>
                            </g>
                        </svg>
                    </span></div>
                <h3 class="kds-card-title">Deep Learning</h3>
                <p class="kds-card-text">Utilizes advanced neural networks to handle complex tasks like image, text, and speech analysis.</p>
                <a href="#" class="kds-learn-more">Learn More &#8594;</a>
            </div>

            <div class="kds-card">
                <div class="kds-icon kds-icon-orange"><span class="section_2_cards_icons"><svg style="width: 45px;" fill="#d59a1a" width="40px" viewBox="0 0 512 512" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" stroke="#d59a1a" stroke-width="4.608"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M398.78,260.79V240a5.33,5.33,0,0,0-5.33-5.33H373.06v-50a39.9,39.9,0,0,0-79.79,0v7.68a56.18,56.18,0,0,0-6-4.88V140.82a31.26,31.26,0,1,0-62.51,0v46.57a58.48,58.48,0,0,0-6,4.88V184.6a39.9,39.9,0,0,0-79.79,0v50H118.56a5.33,5.33,0,0,0-5.33,5.33v20.82a24.45,24.45,0,0,0-19.1,23.8,5.33,5.33,0,0,0,5.33,5.33h38.19a5.33,5.33,0,0,0,5.33-5.33,24.45,24.45,0,0,0-19.09-23.8V245.3h75.64V311H175.62a5.33,5.33,0,0,0-5.33,5.33v50.57a30.77,30.77,0,0,0-25.45,30.24,5.33,5.33,0,0,0,5.33,5.33h50.9a5.33,5.33,0,0,0,5.33-5.33A30.76,30.76,0,0,0,181,366.87V321.63h69.72v45.24a30.77,30.77,0,0,0-25.45,30.24,5.33,5.33,0,0,0,5.33,5.33h50.91a5.33,5.33,0,0,0,5.33-5.33,30.78,30.78,0,0,0-25.46-30.24V321.63h69.73v45.24a30.77,30.77,0,0,0-25.45,30.24,5.33,5.33,0,0,0,5.33,5.33h50.9a5.33,5.33,0,0,0,5.33-5.33,30.77,30.77,0,0,0-25.45-30.24V316.3a5.33,5.33,0,0,0-5.33-5.33H312.47V245.3h75.65v15.49A24.45,24.45,0,0,0,369,284.59a5.33,5.33,0,0,0,5.33,5.33h38.18a5.33,5.33,0,0,0,5.33-5.33A24.45,24.45,0,0,0,398.78,260.79ZM131.24,279.25H105.87a13.77,13.77,0,0,1,25.37,0ZM195,391.78h-38.8a20.12,20.12,0,0,1,38.8,0Zm80.39,0H236.6a20.13,20.13,0,0,1,38.81,0Zm80.38,0H317a20.12,20.12,0,0,1,38.8,0Zm-120.38-251a20.6,20.6,0,1,1,41.19,0v41.1a54.77,54.77,0,0,0-41.19,0ZM256,188.56a45.86,45.86,0,0,1,45.81,45.81V311H274.6V243.63l11.47-14.14a5.34,5.34,0,0,0-8.29-6.72l-12.66,15.61a5.32,5.32,0,0,0-1.19,3.36V311H251V241.74a5.32,5.32,0,0,0-1.56-3.77l-15.61-15.61a5.33,5.33,0,1,0-7.54,7.54l14.05,14v67H210.19v-76.6A45.86,45.86,0,0,1,256,188.56ZM149.61,234.64v-50a29.24,29.24,0,0,1,58.47,0v20.26a55.94,55.94,0,0,0-8.55,29.51v.27Zm154.32-29.76V184.6a29.24,29.24,0,0,1,58.47,0v50H312.47v-.27A55.89,55.89,0,0,0,303.93,204.88Zm76.84,74.37a13.76,13.76,0,0,1,25.36,0Z"></path></g></svg></span></div>
                <h3 class="kds-card-title">AI Consulting</h3>
                <p class="kds-card-text">Offers strategic guidance to help organizations identify business opportunities and build long-term AI roadmaps.</p>
                <a href="#" class="kds-learn-more">Learn More &#8594;</a>
            </div>

            <div class="kds-card">
                <div class="kds-icon kds-icon-navy"><span class="section_2_cards_icons">
                       <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M7 10C7.43285 10 7.84965 10.0688 8.24006 10.1959M12 12V21M12 12L15 15M12 12L9 15" stroke="#0b5a75" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </span></div>
                <h3 class="kds-card-title">Model Deployment</h3>
                <p class="kds-card-text">Covers the final production stages, including deploying, monitoring, and optimizing models for real-world impact.</p>
                <a href="#" class="kds-learn-more">Learn More &#8594;</a>
            </div>

            <!-- <div class="kds-card">
                <div class="kds-icon kds-icon-violet"><span class="section_2_cards_icons"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path d="M320 128C241 128 175.3 185.3 162.3 260.7C171.6 257.7 181.6 256 192 256L208 256C234.5 256 256 277.5 256 304L256 400C256 426.5 234.5 448 208 448L192 448C139 448 96 405 96 352L96 288C96 164.3 196.3 64 320 64C443.7 64 544 164.3 544 288L544 456.1C544 522.4 490.2 576.1 423.9 576.1L336 576L304 576C277.5 576 256 554.5 256 528C256 501.5 277.5 480 304 480L336 480C362.5 480 384 501.5 384 528L384 528L424 528C463.8 528 496 495.8 496 456L496 435.1C481.9 443.3 465.5 447.9 448 447.9L432 447.9C405.5 447.9 384 426.4 384 399.9L384 303.9C384 277.4 405.5 255.9 432 255.9L448 255.9C458.4 255.9 468.3 257.5 477.7 260.6C464.7 185.3 399.1 127.9 320 127.9z" />
                        </svg></span></div>
                <h3 class="kds-card-title">Support &amp; Maintenance</h3>
                <p class="kds-card-text">Ongoing support and maintenance to keep your website secure, updated and running smoothly.</p>
                <a href="#" class="kds-learn-more">Learn More &#8594;</a>
            </div> -->

        </div>

    </div>


    <div class="bottom_div_s">
        <!-- ==================================================================== -->
        <!-- ==== SECTION 7: STATS BAR ==== -->
        <!-- ==================================================================== -->
        <style>
            .kdst-section {
                /* font-family: 'Segoe UI', Arial, sans-serif; */
                /* background: linear-gradient(100deg, #f8f8f8, #f5f4f7); */
                background: rgb(255, 255, 255);
                padding: 40px 20px;
                border-radius: 15px;

            }

            .kdst-container {
                /* max-width: 1100px; */
                margin: 0 auto;
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
                background: #F5F6FE;
                overflow: hidden;
            }

            .kdst-stat {
                display: flex;
                align-items: center;
                background: #fff;
                gap: 14px;
                color: #fff;
                justify-content: center;
                opacity: 0;
                transform: translateY(10px);
                animation: kdst-stat-in 0.5s ease forwards;
                padding: 18px;

                border-radius: 8px;

            }

            @keyframes kdst-stat-in {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .kdst-container .kdst-stat:nth-child(1) {
                animation-delay: 0.02s;
            }

            .kdst-container .kdst-stat:nth-child(2) {
                animation-delay: 0.10s;
            }

            .kdst-container .kdst-stat:nth-child(3) {
                animation-delay: 0.18s;
            }

            .kdst-container .kdst-stat:nth-child(4) {
                animation-delay: 0.26s;
            }

            .kdst-icon {
                font-size: 34px;
            }

            .kdst-num {
                font-size: 24px;
                /* font-weight: 800; */
                line-height: 1.2;
                color: #101828;
                font-weight: 800;
                margin: 0px 0 5px;
            }

            .kdst-label {

                font-size: 16px;
                color: #020202;
            }

            @media (max-width: 700px) {
                .kdst-container {
                    grid-template-columns: 1fr 1fr;
                }
            }

            @media (max-width: 420px) {
                .kdst-container {
                    grid-template-columns: 1fr;
                }
            }
        </style>

        <section class="kdst-section">
            <div class="kdst-container">

                <div class="kdst-stat" style="
                border-top-left-radius: 0px;
                border-bottom-left-radius: 0px; ">
                    <span class="kdst-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="40px" fill="#6E33E5">
                            <path d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z" />
                        </svg>
                    </span>
                    <div>
                        <div class="kdst-num qunik-count" data-target="150" data-suffix="+">0</div>
                        <div class="kdst-label">Project Delivered</div>
                    </div>
                </div>

                <div class="kdst-stat">
                    <span class="kdst-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="40px" fill="#118517">
                            <path d="M208.3 64L432.3 64C458.8 64 480.4 85.8 479.4 112.2C479.2 117.5 479 122.8 478.7 128L528.3 128C554.4 128 577.4 149.6 575.4 177.8C567.9 281.5 514.9 338.5 457.4 368.3C441.6 376.5 425.5 382.6 410.2 387.1C390 415.7 369 430.8 352.3 438.9L352.3 512L416.3 512C434 512 448.3 526.3 448.3 544C448.3 561.7 434 576 416.3 576L224.3 576C206.6 576 192.3 561.7 192.3 544C192.3 526.3 206.6 512 224.3 512L288.3 512L288.3 438.9C272.3 431.2 252.4 416.9 233 390.6C214.6 385.8 194.6 378.5 175.1 367.5C121 337.2 72.2 280.1 65.2 177.6C63.3 149.5 86.2 127.9 112.3 127.9L161.9 127.9C161.6 122.7 161.4 117.5 161.2 112.1C160.2 85.6 181.8 63.9 208.3 63.9zM165.5 176L113.1 176C119.3 260.7 158.2 303.1 198.3 325.6C183.9 288.3 172 239.6 165.5 176zM444 320.8C484.5 297 521.1 254.7 527.3 176L475 176C468.8 236.9 457.6 284.2 444 320.8z" />
                        </svg>
                    </span>
                    <div>
                        <div class="kdst-num qunik-count" data-target="98" data-suffix="%">0</div>
                        <div class="kdst-label">Client Satisfaction</div>
                    </div>
                </div>

                <div class="kdst-stat">
                    <span class="kdst-icon">
                        <svg fill="#3354e5" width="40px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M2.67 10.73a3.52 3.52 0 0 0-.94 1.93 5 5 0 0 0-.07 1.1v.58h.8a5.05 5.05 0 0 0 .88-.08 3.46 3.46 0 0 0 1.93-.94 1.76 1.76 0 0 0-.14-2.48 1.76 1.76 0 0 0-2.46-.11zm1.74 1.73a2.26 2.26 0 0 1-1.26.6h-.22v-.22a2.26 2.26 0 0 1 .6-1.26.36.36 0 0 1 .24-.08.67.67 0 0 1 .47.22.54.54 0 0 1 .17.74zM14.65 2.24a.91.91 0 0 0-.89-.89A8.75 8.75 0 0 0 7.27 3.5L5.64 5.4l-2.4-.5a1 1 0 0 0-.92.27l-.68.68a1 1 0 0 0-.28.81 1 1 0 0 0 .45.74l2.06 1.32.13.08 3.2 3.25.08.08 1.32 2.06a1 1 0 0 0 .74.45h.11a1 1 0 0 0 .7-.29l.68-.68a1 1 0 0 0 .27-.92l-.5-2.39 1.84-1.58a8.79 8.79 0 0 0 2.21-6.54zM3.11 6.15l1.32.28-.64.75-1-.67zm6.38 7.1-.67-1 .75-.64.28 1.32zm2.39-5.11.18.17zm-.28-.28L7.92 11 5 8.08 8.14 4.4a7.44 7.44 0 0 1 5.26-1.8 7.48 7.48 0 0 1-1.8 5.26z"></path>
                                <path d="M11.13 6.63a1.19 1.19 0 0 0-.06-1.7 1.16 1.16 0 1 0-1.64 1.63 1.2 1.2 0 0 0 1.7.07z"></path>
                            </g>
                        </svg></span>
                    <div>
                        <div class="kdst-num qunik-count" data-target="10" data-suffix="+">0</div>
                        <div class="kdst-label">Years Experience</div>
                    </div>
                </div>

                <div class="kdst-stat" style="
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;">
                    <span class="kdst-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="40px" fill="#1094e0">
                            <path d="M415.9 344L225 344C227.9 408.5 242.2 467.9 262.5 511.4C273.9 535.9 286.2 553.2 297.6 563.8C308.8 574.3 316.5 576 320.5 576C324.5 576 332.2 574.3 343.4 563.8C354.8 553.2 367.1 535.8 378.5 511.4C398.8 467.9 413.1 408.5 416 344zM224.9 296L415.8 296C413 231.5 398.7 172.1 378.4 128.6C367 104.2 354.7 86.8 343.3 76.2C332.1 65.7 324.4 64 320.4 64C316.4 64 308.7 65.7 297.5 76.2C286.1 86.8 273.8 104.2 262.4 128.6C242.1 172.1 227.8 231.5 224.9 296zM176.9 296C180.4 210.4 202.5 130.9 234.8 78.7C142.7 111.3 74.9 195.2 65.5 296L176.9 296zM65.5 344C74.9 444.8 142.7 528.7 234.8 561.3C202.5 509.1 180.4 429.6 176.9 344L65.5 344zM463.9 344C460.4 429.6 438.3 509.1 406 561.3C498.1 528.6 565.9 444.8 575.3 344L463.9 344zM575.3 296C565.9 195.2 498.1 111.3 406 78.7C438.3 130.9 460.4 210.4 463.9 296L575.3 296z" />
                        </svg></span>
                    <div>
                        <div class="kdst-num"><span class="qunik-count" data-target="25" data-suffix="+">0</span></div>
                        <div class="kdst-label">Industries Served</div>
                    </div>
                </div>

            </div>
        </section>

        <script>
            // Section 7: no interactive JS required beyond CSS animations
        </script>

    </div>
</section>

<script>
    // Section 2: no interactive JS required beyond CSS hover/animations
</script>