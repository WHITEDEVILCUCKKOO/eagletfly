<!-- section 2 -->
<style>
    .dgfr-section {
        /* font-family: 'Segoe UI', Arial, sans-serif; */
        background: #bfe0fb;
        padding: 50px 20px 70px;
    }

    .dgfr-container {
        max-width: 1180px;
        margin: 0 auto;
    }

    .dgfr-heading {
        text-align: center;
        font-size: 26px;
        font-weight: 800;
        color: #10203f;
        letter-spacing: 0.5px;
        margin: 0 0 10px 0;
    }

    .dgfr-heading-underline {
        width: 220px;
        height: 3px;
        background: #10203f;
        margin: 0 auto 34px;
        border-radius: 2px;
    }

    /* ---------- tab switcher ---------- */

    .dgfr-tabbar {
        display: flex;
        justify-content: center;
        margin-bottom: 34px;
    }

    .dgfr-tabbar-inner {
        display: flex;
        background: #fff;
        border-radius: 30px;
        padding: 5px;
        box-shadow: 0 6px 18px rgba(16, 32, 63, 0.10);
    }

    .dgfr-tab-btn {
        padding: 12px 26px;
        border: none;
        background: transparent;
        border-radius: 24px;
        font-size: 14.5px;
        font-weight: 600;
        color: #10203f;
        cursor: pointer;
        transition: background 0.3s ease, color 0.3s ease;
    }

    .dgfr-tab-btn.dgfr-tab-active {
        background: #F5820B;
        color: #fff;
    }

    /* ---------- panels ---------- */

    .dgfr-panel {
        display: none;
    }

    .dgfr-panel.dgfr-panel-active {
        display: block;
        animation: dgfr-fade-in 0.4s ease;
    }

    @keyframes dgfr-fade-in {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dgfr-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    /* ---------- video review card ---------- */

    .dgfr-video-card {
        background: #F5820B;
        border: 4px solid #fff;
        border-radius: 8px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 10px 24px rgba(16, 32, 63, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 10px;
    }

    .dgfr-video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 32px rgba(16, 32, 63, 0.22);
    }

    .dgfr-video-thumb {
        height: 200px;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        /* background: linear-gradient(135deg, #16307c, #0c1a45);  */
        color: #cdd9f5;
        font-size: 13px;
        text-align: center;
        padding: 16px;
        position: relative;
        overflow: hidden;
    }


    .img_wn8741 {
        width: 100%;

        img {
            width: 100%;
            object-fit: contain;
        }
    }


    .dgfr-play-btn {
        position: absolute;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.92);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #10245f;
        font-size: 18px;
        cursor: pointer;
        transform: translate(-50%, 0%);
        transition: transform 0.25s ease;
        top: 50%;
        left: 50%;
    }

    .dgfr-video-card:hover .dgfr-play-btn {
        transform: translate(-50%, -50%);
    }

    .dgfr-video-info {
        padding: 10px 14px 12px;
        color: #fff;
    }

    .dgfr-video-name {
        font-size: 13px;
        font-weight: 700;
        margin: 0 0 4px 0;
    }

    .dgfr-video-course {
        display: inline-block;
        background: #f5a623;
        color: #1a1a1a;
        font-size: 11px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 3px;
    }

    /* ---------- placements card ---------- */

    .dgfr-place-grid {
        grid-template-columns: repeat(4, 1fr);
    }

    .dgfr-place-card {
        background: #fff;
        border-radius: 6px;
        overflow: hidden;
        display: flex;
        box-shadow: 0 8px 20px rgba(16, 32, 63, 0.10);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .dgfr-place-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 28px rgba(16, 32, 63, 0.18);
    }

    .dgfr-place-stripe {
        flex: 0 0 22px;
        background: linear-gradient(180deg, #f5a623, #e0491f);
        color: #fff;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .dgfr-place-body {
        flex: 1 1 auto;
        padding: 14px 12px;
    }

    .dgfr-place-title {
        font-size: 13px;
        color: #e0491f;
        font-weight: 700;
        font-style: italic;
        margin: 0 0 2px 0;
    }

    .dgfr-place-name {
        font-size: 14px;
        font-weight: 800;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .dgfr-place-photo {
        width: 100%;
        height: 150px;
        border-radius: 4px;
        background: #f1f3f8;
        border: 1.5px dashed #cbd3e3;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        color: #9aa3b5;
        text-align: center;
        margin-bottom: 8px;
        padding: 6px;
        overflow: hidden;
    }

    .img_wn8741987 {
        width: 100%;
        height: 100%;

        img {
            width: 100%;
            object-fit: cover;
        }
    }

    .dgfr-place-role {
        font-size: 11px;
        color: #4b5568;
        margin: 0;
    }

    /* ---------- voice review card ---------- */

    .dgfr-voice-card {
        background: #fff;
        border-radius: 10px;
        padding: 18px;
        box-shadow: 0 8px 20px rgba(16, 32, 63, 0.08);
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .dgfr-voice-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 26px rgba(16, 32, 63, 0.14);
    }

    .dgfr-voice-top {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
    }

    .dgfr-voice-avatar {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: #eef1f7;
        border: 1.5px dashed #cbd3e3;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: #9aa3b5;
        flex: 0 0 auto;
    }

    .dgfr-voice-meta {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .dgfr-stars {
        color: #f5a623;
        font-size: 12px;
        letter-spacing: 1px;
    }

    .dgfr-voice-name {
        font-size: 14px;
        font-weight: 700;
        color: #1a1a1a;
    }

    .dgfr-sound-btn {
        position: absolute;
        top: 16px;
        right: 16px;
        width: 30px;
        height: 30px;
        border-radius: 6px;
        background: #2f3fd6;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        cursor: pointer;
        transition: background 0.25s ease;
    }

    .dgfr-sound-btn:hover {
        background: #232fb0;
    }

    .dgfr-player {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #f2f4f8;
        border-radius: 20px;
        padding: 8px 12px;
    }

    .dgfr-player-play {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        border: none;
        background: #10245f;
        color: #fff;
        font-size: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex: 0 0 auto;
    }

    .dgfr-player-time {
        font-size: 11px;
        color: #4b5568;
        flex: 0 0 auto;
        white-space: nowrap;
    }

    .dgfr-player-track {
        flex: 1 1 auto;
        height: 4px;
        background: #d6dbe6;
        border-radius: 3px;
        overflow: hidden;
    }

    .dgfr-player-fill {
        height: 100%;
        width: 15%;
        background: #10245f;
        border-radius: 3px;
        transition: width 3s linear;
    }

    .dgfr-player-icon {
        font-size: 12px;
        color: #6b7280;
        flex: 0 0 auto;
    }

    /* ---------- view more button ---------- */

    .dgfr-viewmore-row {
        display: flex;
        justify-content: center;
        margin-top: 36px;
    }

    .dgfr-viewmore-btn {
        padding: 14px 30px;
            background: linear-gradient(120deg, #30383D, #46545E, #F5820B, #F5A900, #F5820B, #46545E, #30383D);
    background-size: 300% 300%;
    animation: brandGradient 6s ease infinite;
        /* background: #f5a623; */
        color: #1a1a1a;
        border: none;
        border-radius: 8px;
        font-size: 14.5px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
    }

    .dgfr-viewmore-btn:hover {
        background: #e0941a;
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(245, 166, 35, 0.35);
    }

    /* ---------- responsive ---------- */

    @media (max-width: 900px) {
        .dgfr-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .dgfr-place-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 560px) {
        .dgfr-section {
            padding: 36px 14px 50px;
        }

        .dgfr-heading {
            font-size: 19px;
        }

        .dgfr-grid,
        .dgfr-place-grid {
            grid-template-columns: 1fr;
        }

        .dgfr-tab-btn {
            padding: 10px 14px;
            font-size: 12.5px;
        }

        .dgfr-tabbar-inner {
            flex-wrap: wrap;
            justify-content: center;
        }
    }
</style>


<section class="dgfr-section">
    <div class="dgfr-container">

        <h2 class="dgfr-heading">STUDENTS PLACEMENTS &amp; REVIEWS</h2>
        <div class="dgfr-heading-underline"></div>

        <div class="dgfr-tabbar">
            <div class="dgfr-tabbar-inner">
                <button class="dgfr-tab-btn  dgfr-tab-active" data-target="dgfr-panel-video">Video Reviews</button>
                <button class="dgfr-tab-btn" data-target="dgfr-panel-placements">Placements</button>
                <button class="dgfr-tab-btn" data-target="dgfr-panel-voice">Voice Reviews</button>
            </div>
        </div>

        <!-- ================= VIDEO REVIEWS ================= -->
        <div class="dgfr-panel dgfr-panel-active" id="dgfr-panel-video">
            <div class="dgfr-grid">

                <div class="dgfr-video-card">
                    <div class="dgfr-video-thumb sole_3_background">
                        <span class="img_wn8741"><img src="img/teachers-4.jpg" alt=""></span>
                        <span class="dgfr-play-btn">&#9658;</span>
                    </div>
                    <div class="dgfr-video-info">
                        <p class="dgfr-video-name">Ali Salih Mohammednajeed Salih</p>
                        <span class="dgfr-video-course">Course: Python Django</span>
                    </div>
                </div>

                <div class="dgfr-video-card">
                    <div class="dgfr-video-thumb sole_3_background">
                        <span class="img_wn8741"><img src="img/teachers-2.jpg" alt=""></span>
                        <span class="dgfr-play-btn">&#9658;</span>
                    </div>
                    <div class="dgfr-video-info">
                        <p class="dgfr-video-name">Vishal</p>
                        <span class="dgfr-video-course">Course: Data Analytics</span>
                    </div>
                </div>

                <div class="dgfr-video-card">
                    <div class="dgfr-video-thumb sole_3_background">
                        <span class="img_wn8741"><img src="img/teachers-3.jpg" alt=""></span>
                        <span class="dgfr-play-btn">&#9658;</span>
                    </div>
                    <div class="dgfr-video-info">
                        <p class="dgfr-video-name">Satyam</p>
                        <span class="dgfr-video-course">Course: Data Analytics</span>
                    </div>
                </div>

                <div class="dgfr-video-card">
                    <div class="dgfr-video-thumb sole_3_background">
                        <span class="img_wn8741"><img src="img/teachers-5.jpg" alt=""></span>
                        <span class="dgfr-play-btn">&#9658;</span>
                    </div>
                    <div class="dgfr-video-info">
                        <p class="dgfr-video-name">Isha Kumari</p>
                        <span class="dgfr-video-course">Course: SP3D</span>
                    </div>
                </div>

                <div class="dgfr-video-card">
                    <div class="dgfr-video-thumb sole_3_background">
                        A<span class="img_wn8741"><img src="img/teachers-4.jpg" alt=""></span>
                        <span class="dgfr-play-btn">&#9658;</span>
                    </div>
                    <div class="dgfr-video-info">
                        <p class="dgfr-video-name">Faizan</p>
                        <span class="dgfr-video-course">Course: MERN Full Stack</span>
                    </div>
                </div>

                <div class="dgfr-video-card">
                    <div class="dgfr-video-thumb sole_3_background">
                        <span class="img_wn8741"><img src="img/teachers-5.jpg" alt=""></span>
                        <span class="dgfr-play-btn">&#9658;</span>
                    </div>
                    <div class="dgfr-video-info">
                        <p class="dgfr-video-name">Harsh Tyagi</p>
                        <span class="dgfr-video-course">Course: SP3D</span>
                    </div>
                </div>

            </div>

            <div class="dgfr-viewmore-row">
                <button class="dgfr-viewmore-btn">View More &#8594;</button>
            </div>
        </div>

        <!-- ================= PLACEMENTS ================= -->
        <div class="dgfr-panel" id="dgfr-panel-placements">
            <div class="dgfr-grid dgfr-place-grid">

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Mohit Udenia</p>
                        <div class="dgfr-place-photo">
                            <span class="img_wn8741987">
                                <img src="img/students-2.jpeg" alt="">
                            </span>
                        </div>
                        <p class="dgfr-place-role">Position: Data Analyst (Trainee) at Glorious Insight Private
                            Limited</p>
                    </div>
                </div>

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Rakshit Negi</p>
                        <div class="dgfr-place-photo">
                            <span class="img_wn8741987">
                                <img src="img/students-1.jpg" alt="">
                            </span>
                        </div>
                        <p class="dgfr-place-role">Role: Data Entry Intern at Anil Agencies Private Limited</p>
                    </div>
                </div>

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Ayush Bansal</p>
                        <div class="dgfr-place-photo">
                            <span class="img_wn8741987">
                                <img src="img/students-3.jpg" alt="">
                            </span>
                        </div>
                        <p class="dgfr-place-role">Role: Data Analyst at ClickOnik Digital Media Private Limited</p>
                    </div>
                </div>

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Ruchi</p>
                        <div class="dgfr-place-photo"> <span class="img_wn8741987">
                                <img src="img/teachers-1.jpg" alt="">
                            </span></div>
                        <p class="dgfr-place-role">Role: MIS Executive at Dorset India Private Limited</p>
                    </div>
                </div>

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Swarit Srivastava</p>
                        <div class="dgfr-place-photo"> <span class="img_wn8741987">
                                <img src="img/students-2.jpeg" alt="">
                            </span></div>
                        <p class="dgfr-place-role">Role: EDA Engineer at Motherson India Private Limited</p>
                    </div>
                </div>

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Chandan Dubey</p>
                        <div class="dgfr-place-photo"> <span class="img_wn8741987">
                                <img src="img/students-3.jpg" alt="">
                            </span></div>
                        <p class="dgfr-place-role">Role: Senior Data Analyst at Doran India Private Limited</p>
                    </div>
                </div>

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Anurag</p>
                        <div class="dgfr-place-photo"> <span class="img_wn8741987">
                                <img src="img/students-1.jpg" alt="">
                            </span></div>
                        <p class="dgfr-place-role">Role: Senior Data Analyst at Dorset India Private Limited</p>
                    </div>
                </div>

                <div class="dgfr-place-card">
                    <div class="dgfr-place-stripe">Congratulations!</div>
                    <div class="dgfr-place-body">
                        <p class="dgfr-place-title">Got Placed</p>
                        <p class="dgfr-place-name">Gracy Harshana</p>
                        <div class="dgfr-place-photo"> <span class="img_wn8741987">
                                <img src="img/teachers-1.jpg" alt="">
                            </span></div>
                        <p class="dgfr-place-role">Role: DEC Engineer at Nokia Solutions and Networks India Private
                            Limited</p>
                    </div>
                </div>

            </div>

            <div class="dgfr-viewmore-row">
                <button class="dgfr-viewmore-btn">View More &#8594;</button>
            </div>
        </div>

        <!-- ================= VOICE REVIEWS ================= -->
        <div class="dgfr-panel" id="dgfr-panel-voice">
            <div class="dgfr-grid">

                <div class="dgfr-voice-card">
                    <span class="dgfr-sound-btn">&#128266;</span>
                    <div class="dgfr-voice-top">
                        <div class="dgfr-voice-avatar">Img</div>
                        <div class="dgfr-voice-meta">
                            <span class="dgfr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            <span class="dgfr-voice-name">Kapil Sharma</span>
                        </div>
                    </div>
                    <div class="dgfr-player">
                        <button class="dgfr-player-play" data-total="20">&#9658;</button>
                        <span class="dgfr-player-time">0:03 / 0:20</span>
                        <span class="dgfr-player-track"><span class="dgfr-player-fill"></span></span>
                        <span class="dgfr-player-icon">&#128266;</span>
                        <span class="dgfr-player-icon">&#8942;</span>
                    </div>
                </div>

                <div class="dgfr-voice-card">
                    <span class="dgfr-sound-btn">&#128266;</span>
                    <div class="dgfr-voice-top">
                        <div class="dgfr-voice-avatar">Img</div>
                        <div class="dgfr-voice-meta">
                            <span class="dgfr-stars">&#9733;&#9733;&#9733;&#9733;</span>
                            <span class="dgfr-voice-name">Sanchit Nuhal</span>
                        </div>
                    </div>
                    <div class="dgfr-player">
                        <button class="dgfr-player-play" data-total="16">&#9658;</button>
                        <span class="dgfr-player-time">0:13 / 0:16</span>
                        <span class="dgfr-player-track"><span class="dgfr-player-fill" style="width:80%;"></span></span>
                        <span class="dgfr-player-icon">&#128266;</span>
                        <span class="dgfr-player-icon">&#8942;</span>
                    </div>
                </div>

                <div class="dgfr-voice-card">
                    <span class="dgfr-sound-btn">&#128266;</span>
                    <div class="dgfr-voice-top">
                        <div class="dgfr-voice-avatar">Img</div>
                        <div class="dgfr-voice-meta">
                            <span class="dgfr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            <span class="dgfr-voice-name">Rupesh Kumar</span>
                        </div>
                    </div>
                    <div class="dgfr-player">
                        <button class="dgfr-player-play" data-total="29">&#9658;</button>
                        <span class="dgfr-player-time">0:00 / 0:29</span>
                        <span class="dgfr-player-track"><span class="dgfr-player-fill" style="width:0%;"></span></span>
                        <span class="dgfr-player-icon">&#128266;</span>
                        <span class="dgfr-player-icon">&#8942;</span>
                    </div>
                </div>

                <div class="dgfr-voice-card">
                    <span class="dgfr-sound-btn">&#128266;</span>
                    <div class="dgfr-voice-top">
                        <div class="dgfr-voice-avatar">Img</div>
                        <div class="dgfr-voice-meta">
                            <span class="dgfr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            <span class="dgfr-voice-name">Prayojakta</span>
                        </div>
                    </div>
                    <div class="dgfr-player">
                        <button class="dgfr-player-play" data-total="34">&#9658;</button>
                        <span class="dgfr-player-time">0:05 / 0:34</span>
                        <span class="dgfr-player-track"><span class="dgfr-player-fill" style="width:15%;"></span></span>
                        <span class="dgfr-player-icon">&#128266;</span>
                        <span class="dgfr-player-icon">&#8942;</span>
                    </div>
                </div>

                <div class="dgfr-voice-card">
                    <span class="dgfr-sound-btn">&#128266;</span>
                    <div class="dgfr-voice-top">
                        <div class="dgfr-voice-avatar">Img</div>
                        <div class="dgfr-voice-meta">
                            <span class="dgfr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            <span class="dgfr-voice-name">Vikash Singh Rana</span>
                        </div>
                    </div>
                    <div class="dgfr-player">
                        <button class="dgfr-player-play" data-total="39">&#9658;</button>
                        <span class="dgfr-player-time">0:00 / 0:39</span>
                        <span class="dgfr-player-track"><span class="dgfr-player-fill" style="width:0%;"></span></span>
                        <span class="dgfr-player-icon">&#128266;</span>
                        <span class="dgfr-player-icon">&#8942;</span>
                    </div>
                </div>

                <div class="dgfr-voice-card">
                    <span class="dgfr-sound-btn">&#128266;</span>
                    <div class="dgfr-voice-top">
                        <div class="dgfr-voice-avatar">Img</div>
                        <div class="dgfr-voice-meta">
                            <span class="dgfr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                            <span class="dgfr-voice-name">Jayad Chaurasiya</span>
                        </div>
                    </div>
                    <div class="dgfr-player">
                        <button class="dgfr-player-play" data-total="30">&#9658;</button>
                        <span class="dgfr-player-time">0:00 / 0:30</span>
                        <span class="dgfr-player-track"><span class="dgfr-player-fill" style="width:0%;"></span></span>
                        <span class="dgfr-player-icon">&#128266;</span>
                        <span class="dgfr-player-icon">&#8942;</span>
                    </div>
                </div>

            </div>

            <div class="dgfr-viewmore-row">
                <button class="dgfr-viewmore-btn">View More &#8594;</button>
            </div>
        </div>

    </div>
</section>


<script>
    (function () {

        // tab switching
        var dgfrTabButtons = document.querySelectorAll('.dgfr-tab-btn');
        var dgfrPanels = document.querySelectorAll('.dgfr-panel');

        dgfrTabButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                dgfrTabButtons.forEach(function (b) {
                    b.classList.remove('dgfr-tab-active');
                });
                btn.classList.add('dgfr-tab-active');

                dgfrPanels.forEach(function (p) {
                    p.classList.remove('dgfr-panel-active');
                });
                var target = document.getElementById(btn.getAttribute('data-target'));
                if (target) {
                    target.classList.add('dgfr-panel-active');
                }
            });
        });

        // fake audio play/pause visual toggle
        var dgfrPlayButtons = document.querySelectorAll('.dgfr-player-play');
        dgfrPlayButtons.forEach(function (playBtn) {
            playBtn.addEventListener('click', function () {
                var card = playBtn.closest('.dgfr-player');
                var fill = card.querySelector('.dgfr-player-fill');
                var isPlaying = playBtn.getAttribute('data-playing') === 'true';

                if (isPlaying) {
                    playBtn.innerHTML = '&#9658;';
                    playBtn.setAttribute('data-playing', 'false');
                    fill.style.transitionDuration = '0s';
                } else {
                    playBtn.innerHTML = '&#10073;&#10073;';
                    playBtn.setAttribute('data-playing', 'true');
                    fill.style.transitionDuration = '4s';
                    fill.style.width = '100%';
                }
            });
        });

    })();
</script>