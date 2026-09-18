<!-- ================= TRAINING MODE SECTION ================= -->

<section class="ef-training-section">

    <div class="ef-training-container">

        <!-- ================= CLASSROOM ================= -->
        <div class="ef-training-card ef-classroom-card">

            <div class="ef-training-icon ef-location-icon">
                <i class="fa-solid fa-location-dot"></i>
            </div>

            <div class="ef-training-label">
                CLASSROOM
            </div>

            <div class="ef-training-points">

                <div class="ef-training-point">
                    <i class="fa-solid fa-graduation-cap"></i>

                    <p>
                        Get trained by Industry Experts via Classroom Training
                        at any of the <strong>Eagletfly Solutions</strong> branches near you.
                    </p>
                </div>

                <div class="ef-training-point">
                    <i class="fa-solid fa-rocket"></i>

                    <p>
                        Why Wait? Jump Start your Career by taking the
                        <strong>Python Course in Delhi!</strong>
                    </p>
                </div>

            </div>

            <a href="#" class="ef-training-btn ef-classroom-btn">
                ENQUIRE NOW
            </a>

            <!-- Background Icon -->
            <div class="ef-training-bg-icon">
                <i class="fa-solid fa-building-columns"></i>
            </div>

        </div>


        <!-- ================= ONLINE ================= -->
        <div class="ef-training-card ef-online-card">

            <div class="ef-training-icon ef-online-icon">
                <i class="fa-solid fa-wifi"></i>
            </div>

            <div class="ef-training-label">
                ONLINE
            </div>

            <div class="ef-training-points">

                <div class="ef-training-point">
                    <i class="fa-solid fa-desktop"></i>

                    <p>
                        Take-up Instructor-led Live Online Training.
                        Get the Recorded Videos of each session.
                    </p>
                </div>

                <div class="ef-training-point">
                    <i class="fa-solid fa-plane"></i>

                    <p>
                        Travelling is a Constraint? Jump Start your Career by
                        taking the <strong>Python Course Online!</strong>
                    </p>
                </div>

            </div>

            <a href="#" class="ef-training-btn ef-online-btn">
                ENQUIRE NOW
            </a>

            <!-- Background Icon -->
            <div class="ef-online-bg-icon">
                <i class="fa-solid fa-laptop"></i>
            </div>

        </div>

    </div>

</section>


<style>

/* =========================================
   TRAINING SECTION
========================================= */

.ef-training-section {
    width: 100%;
    padding: 65px 20px;
    box-sizing: border-box;
    background: #ffffff;
}

.ef-training-container {
    width: 80%;
    max-width: 1050px;
    margin: auto;

    display: grid;
    grid-template-columns: 1fr 1fr;

    border-radius: 25px;
    overflow: hidden;

    box-shadow: 0 25px 55px rgba(20, 30, 60, 0.12);
}


/* =========================================
   COMMON CARD
========================================= */

.ef-training-card {
    min-height: 390px;
    padding: 54px 45px;

    position: relative;
    box-sizing: border-box;

    overflow: hidden;
}

.ef-classroom-card {
    background: #ffffff;
}

.ef-online-card {
    background: #3939b9;
    color: #ffffff;

    border-radius: 0 25px 25px 0;
}


/* =========================================
   ICON BOX
========================================= */

.ef-training-icon {
    width: 45px;
    height: 45px;

    margin-bottom: 30px;

    border-radius: 11px;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 18px;

    position: relative;
    z-index: 2;
}

.ef-location-icon {
    background: #f0f4f9;
    color: #283bbd;
}

.ef-online-icon {
    background: rgba(255,255,255,0.12);
    color: #ffffff;
}


/* =========================================
   LABEL
========================================= */

.ef-training-label {
    margin-bottom: 14px;

    position: relative;
    z-index: 2;

    font-size: 11px;
    font-weight: 800;
    letter-spacing: 2px;
}

.ef-classroom-card .ef-training-label {
    color: #ff6717;
}

.ef-online-card .ef-training-label {
    color: #b7bbff;
}


/* =========================================
   POINTS
========================================= */

.ef-training-points {
    position: relative;
    z-index: 2;
}

.ef-training-point {
    display: flex;
    align-items: flex-start;
    gap: 14px;

    margin-bottom: 15px;
}

.ef-training-point i {
    width: 17px;
    flex-shrink: 0;

    margin-top: 4px;

    font-size: 15px;
}

.ef-classroom-card .ef-training-point i {
    color: #293dbd;
}

.ef-online-card .ef-training-point i {
    color: #ffffff;
}

.ef-training-point p {
    margin: 0;

    font-size: 15px;
    line-height: 1.8;
}

.ef-classroom-card .ef-training-point p {
    color: #12224a;
}

.ef-online-card .ef-training-point p {
    color: #ffffff;
}

.ef-training-point strong {
    font-weight: 700;
}


/* =========================================
   BUTTON
========================================= */

.ef-training-btn {
    min-width: 155px;
    min-height: 48px;

    margin-top: 18px;

    padding: 0 20px;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    border-radius: 11px;

    text-decoration: none;

    font-size: 13px;
    font-weight: 800;

    position: relative;
    z-index: 3;

    transition: 0.3s ease;
}

.ef-classroom-btn {
    background: #3738bb;
    color: #ffffff !important   ;
}

.ef-online-btn {
    background: #ff7217;
    color: #ffffff;
}

.ef-training-btn:hover {
    transform: translateY(-2px);
}


/* =========================================
   BACKGROUND ICONS
========================================= */

.ef-training-bg-icon,
.ef-online-bg-icon {
    position: absolute;

    right: -10px;
    bottom: -8px;

    font-size: 155px;

    pointer-events: none;

    z-index: 1;
}

.ef-training-bg-icon {
    color: rgba(36, 56, 180, 0.035);
}

.ef-online-bg-icon {
    color: rgba(255,255,255,0.07);
}


/* =========================================
   RESPONSIVE
========================================= */

@media (max-width: 900px) {

    .ef-training-container {
        width: 90%;
    }

    .ef-training-card {
        padding: 45px 30px;
    }

    .ef-training-point p {
        font-size: 14px;
    }
}


@media (max-width: 650px) {

    .ef-training-section {
        padding: 45px 15px;
    }

    .ef-training-container {
        width: 100%;
        grid-template-columns: 1fr;

        border-radius: 18px;
    }

    .ef-training-card {
        min-height: auto;
        padding: 38px 25px;
    }

    .ef-online-card {
        border-radius: 0 0 18px 18px;
    }

    .ef-training-icon {
        margin-bottom: 23px;
    }

    .ef-training-point p {
        font-size: 13px;
        line-height: 1.7;
    }

    .ef-training-btn {
        width: 155px;
    }

}

</style>