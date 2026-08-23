<!-- section 3 -->
<style>
    .dgfs-section {
        /* font-family: 'Segoe UI', Arial, sans-serif; */
        background: #fff;
        padding: 44px 0 60px;
        overflow: hidden;
    }

    .dgfs-heading {
        text-align: center;
        font-size: 24px;
        font-weight: 800;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .dgfs-heading span {
        border-bottom: 3px solid #f5a623;
        padding-bottom: 2px;
    }

    .dgfs-subgap {
        margin-bottom: 36px;
    }

    /* ---------- slider viewport ---------- */

    .dgfs-slider-viewport {
        position: relative;
        width: 65%;
        margin: 0 auto;
        overflow: hidden;
        padding: 40px 0;
        mask-image: linear-gradient(90deg, transparent 0%, #000 8%, #000 92%, transparent 100%);
        -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 8%, #000 92%, transparent 100%);
    }

    .dgfs-slider-track {
        display: flex;
        gap: 20px;
        width: max-content;
        animation: dgfs-scroll-left 28s linear infinite;
    }

    .dgfs-slider-viewport:hover .dgfs-slider-track {
        /* animation-play-state: paused; */
    }

    @keyframes dgfs-scroll-left {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* ---------- card ---------- */

    .dgfs-card {
        position: relative;
        flex: 0 0 auto;
        width: 220px;
        /* height: 400px; */
        border-radius: 12px;
        overflow: hidden;
        background: linear-gradient(160deg, #123a9c, #06132f);
        box-shadow: 0 14px 30px rgba(10, 20, 60, 0.22);
        color: #fff;
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .dgfs-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(10, 20, 60, 0.3);
    }

    .dgfs-card-topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 12px;
        font-size: 10px;
        font-weight: 700;
        color: #dfe6f7;
    }

    .dgfs-nasscom-tag {
        background: #fff;
        color: #cc092f;
        font-weight: 800;
        padding: 2px 6px;
        border-radius: 3px;
        font-size: 9px;
    }

    .dgfs-card-photo {
        margin: 4px 16px;
        /* height: 170px; */
        border-radius: 10px;
        /* border: 1.5px dashed rgba(255, 255, 255, 0.4); */
        /* background: rgba(255, 255, 255, 0.06); */
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 11px;
        color: #d7e0f7;
        /* padding: 10px; */
        overflow: hidden
    }

    .dgfs-play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -100%);
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.94);
        color: #e0491f;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
        transition: transform 0.25s ease;
    }

    .dgfs-card:hover .dgfs-play-btn {
        transform: translate(-50%, -50%) scale(1.12);
    }

    .dgfs-card-caption {
        padding: 10px 16px 4px;
        font-size: 13px;
        font-weight: 800;
        line-height: 1.3;
    }

    .dgfs-card-sub {
        padding: 0 16px;
        font-size: 11px;
        color: #cdd8f2;
        margin-bottom: 8px;
    }

    .dgfs-card-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px 16px 12px;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.55), transparent);
    }

    .dgfs-card-name {
        font-size: 13px;
        font-weight: 800;
        margin: 0 0 2px 0;
    }

    .dgfs-card-course {
        font-size: 10.5px;
        color: #d7e0f7;
        margin: 0 0 6px 0;
    }

    .dgfs-card-stars {
        color: #f5c33e;
        font-size: 12px;
        letter-spacing: 1px;
    }

    .dgfs-card-url {
        position: absolute;
        bottom: 4px;
        right: 10px;
        font-size: 8px;
        color: rgba(255, 255, 255, 0.5);
    }

    /* special: pathfinder collage card */

    .dgfs-collage-card .dgfs-card-caption {
        font-size: 11.5px;
        color: #f5c33e;
        padding-bottom: 0;
    }

    .dgfs-collage-title {
        padding: 0 16px;
        font-size: 17px;
        font-weight: 900;
        color: #ffcf3f;
        line-height: 1.15;
        margin-bottom: 8px;
    }

    .dgfs-collage-tag {
        margin: 0 16px 8px;
        display: inline-block;
        background: #14b866;
        color: #fff;
        font-size: 9px;
        font-weight: 700;
        padding: 2px 8px;
        border-radius: 3px;
    }

    /* ---------- CTA button ---------- */

    .dgfs-cta-row {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .dgfs-cta-btn {
        padding: 14px 32px;
        background: #123a9c;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.25s ease, transform 0.2s ease, box-shadow 0.25s ease;
    }

    .dgfs-cta-btn:hover {
        background: #0d2c78;
        transform: translateY(-2px);
        box-shadow: 0 12px 26px rgba(18, 58, 156, 0.30);
    }

    /* ---------- responsive ---------- */

    @media (max-width: 560px) {
        .dgfs-heading {
            font-size: 19px;
        }

        .dgfs-card {
            width: 175px;
            height: 320px;
        }

        .dgfs-card-photo {
            height: 130px;
        }

        .dgfs-play-btn {
            width: 34px;
            height: 34px;
            font-size: 12px;
        }

        .dgfs-card-name {
            font-size: 12px;
        }

        .dgfs-collage-title {
            font-size: 14px;
        }
    }

    .img_wn874178 {
        width: 100%;
        height: 150px;


        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
</style>
<section class="dgfs-section">

    <h2 class="dgfs-heading dgfs-subgap">What Our <span>Students</span> Say</h2>

    <div class="dgfs-slider-viewport">
        <div class="dgfs-slider-track" id="dgfsTrack">

            <!-- set 1 -->

            <div class="dgfs-card sole">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <div class="dgfs-card-photo"><span class="img_wn874178"><img src="img/teachers-4.jpg" alt=""></span></div>
                <span class="dgfs-play-btn">&#9658;</span>
                <div class="dgfs-card-footer">
                    <p class="dgfs-card-name">Amit Ura</p>
                    <p class="dgfs-card-course">Course: Digital Marketing With AI</p>
                    <span class="dgfs-card-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>

            <div class="dgfs-card">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <div class="dgfs-card-photo"><span class="img_wn874178"><img src="img/teachers-5.jpg" alt=""></span></div>
                <span class="dgfs-play-btn">&#9658;</span>
                <div class="dgfs-card-footer">
                    <p class="dgfs-card-name">Prince Kumar Singh</p>
                    <p class="dgfs-card-course">Course: SAP SuccessFactors</p>
                    <span class="dgfs-card-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>




            <div class="dgfs-card">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <div class="dgfs-card-photo"><span class="img_wn874178"><img src="img/teachers-4.jpg" alt=""></span></div>
                <span class="dgfs-play-btn">&#9658;</span>
                <div class="dgfs-card-footer">
                    <p class="dgfs-card-name">Anushka Srivastava</p>
                    <p class="dgfs-card-course">Course: Data Analytics</p>
                    <span class="dgfs-card-stars">&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>

            <!-- set 2 (duplicate for seamless infinite loop) -->

            <div class="dgfs-card">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <div class="dgfs-card-photo"><span class="img_wn874178"><img src="img/teachers-1.jpg" alt=""></span></div>
                <span class="dgfs-play-btn">&#9658;</span>
                <div class="dgfs-card-footer">
                    <p class="dgfs-card-name">Amit Ura</p>
                    <p class="dgfs-card-course">Course: Digital Marketing With AI</p>
                    <span class="dgfs-card-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>

            <div class="dgfs-card">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <div class="dgfs-card-photo"><span class="img_wn874178"><img src="img/teachers-8.jpg" alt=""></span></div>
                <span class="dgfs-play-btn">&#9658;</span>
                <div class="dgfs-card-footer">
                    <p class="dgfs-card-name">Prince Kumar Singh</p>
                    <p class="dgfs-card-course">Course: SAP SuccessFactors</p>
                    <span class="dgfs-card-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>

            <div class="dgfs-card dgfs-collage-card">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <p class="dgfs-card-caption">Croma Campus Participated</p>
                <p class="dgfs-collage-title">PATHFINDER 4.0<br>MEGA JOB FAIR</p>
                <span class="dgfs-collage-tag">Successfully Done</span>
                <div class="dgfs-card-photo" style="height:120px; margin-top:0;"><span class="img_wn874178"><img src="img/events-1.jpg" alt=""></span>
                </div>
                <span class="dgfs-play-btn">&#9658;</span>
            </div>

            <div class="dgfs-card">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <p class="dgfs-card-caption" style="color:#2fd6c0;">Success Speaks Here</p>
                <div class="dgfs-card-photo" style="margin-top:2px;"><span class="img_wn874178"><img src="img/teachers-9.jpg" alt=""></span></div>
                <span class="dgfs-play-btn">&#9658;</span>
                <div class="dgfs-card-footer">
                    <p class="dgfs-card-name">Anurag Poddar</p>
                    <p class="dgfs-card-course">Position: PowerBI Developer at Glorious Insight</p>
                </div>
            </div>

            <div class="dgfs-card">
                <div class="dgfs-card-topbar"><span>CROMA CAMPUS</span><span class="dgfs-nasscom-tag">NASSCOM</span>
                </div>
                <div class="dgfs-card-photo"><span class="img_wn874178"><img src="img/teachers-10.jpg" alt=""></span></div>
                <span class="dgfs-play-btn">&#9658;</span>
                <div class="dgfs-card-footer">
                    <p class="dgfs-card-name">Anushka Srivastava</p>
                    <p class="dgfs-card-course">Course: Data Analytics</p>
                    <span class="dgfs-card-stars">&#9733;&#9733;&#9733;&#9733;</span>
                </div>
            </div>

        </div>
    </div>

    <div class="dgfs-cta-row">
        <button class="dgfs-cta-btn">Hear More Stories</button>
    </div>

</section>