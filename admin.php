<?php

session_start();

if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}

?>



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

<!-- loging -->
<?php

$email = $_SESSION['email'];

$result = mysqli_query(
    $mydb,
    "SELECT * FROM login_users WHERE user_email='$email'"
);

$get_data = mysqli_fetch_assoc($result);

// email change

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_email_btn'])) {

    $new_email = mysqli_real_escape_string(
        $mydb,
        trim($_POST['change_email'])
    );

    $current_password = mysqli_real_escape_string(
        $mydb,
        trim($_POST['email_current_password'])
    );

    if ($current_password != $get_data['user_password']) {

        echo "<script>alert('Current password is incorrect.');</script>";
    } else {

        $check_email = mysqli_query(
            $mydb,
            "SELECT user_id
                    FROM login_users
                    WHERE user_email='$new_email'
                    AND user_email != '$email'"
        );

        if (mysqli_num_rows($check_email) > 0) {

            echo "<script>alert('Email already exists.');</script>";
        } else {

            $update = mysqli_query(
                $mydb,
                "UPDATE login_users
                        SET user_email='$new_email'
                        WHERE user_email='$email'"
            );

            if ($update) {

                session_unset();
                session_destroy();

                echo "
                        <script>
                            alert('Email updated successfully. Please login again.');
                            window.location='login.php';
                        </script>";
                exit;
            }
        }
    }
}

// password chnange

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_password_btn'])) {

    $current_password = mysqli_real_escape_string(
        $mydb,
        trim($_POST['current_password'])
    );

    $new_password = mysqli_real_escape_string(
        $mydb,
        trim($_POST['new_password'])
    );

    $confirm_password = mysqli_real_escape_string(
        $mydb,
        trim($_POST['confirm_password'])
    );

    if ($current_password != $get_data['user_password']) {

        echo "<script>alert('Current password is incorrect.');</script>";
    } elseif ($new_password != $confirm_password) {

        echo "<script>alert('New password and confirm password do not match.');</script>";
    } else {

        $update = mysqli_query(
            $mydb,
            "UPDATE login_users
                    SET user_password='$new_password'
                    WHERE user_email='$email'"
        );

        if ($update) {

            session_unset();
            session_destroy();

            echo "
                    <script>
                        alert('Password updated successfully. Please login again.');
                        window.location='login.php';
                    </script>";
            exit;
        }
    }
}
?>



<!-- blog add new -->
<?php

if (isset($_POST['form_action']) && $_POST['form_action'] === 'add_blog') {

    // Form Data
    $blog_title   = mysqli_real_escape_string($mydb, $_POST['blog_title']);
    $blog_author  = mysqli_real_escape_string($mydb, $_POST['blog_author']);
    $blog_content = mysqli_real_escape_string($mydb, $_POST['blog_content1252']);

    // Slug Generate
    $blog_slug = strtolower(trim($blog_title));
    $blog_slug = preg_replace('/[^a-z0-9-]+/', '-', $blog_slug);
    $blog_slug = trim($blog_slug, '-');

    // Created Time
    $created_at = time();

    // Image Upload
    $blog_img = "";

    if (isset($_FILES['blog_image']) && $_FILES['blog_image']['error'] == 0) {
        $upload_dir = "assets/blog/";

        $file_name = $_FILES['blog_image']['name'];
        $tmp_name  = $_FILES['blog_image']['tmp_name'];

        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Original filename without extension
        $base_name = pathinfo($file_name, PATHINFO_FILENAME);

        $new_file_name = $base_name . "." . $ext;

        // Check if file already exists
        if (file_exists($upload_dir . $new_file_name)) {
            $new_file_name = $base_name . "_" . time() . "_" . rand(1000, 9999) . "." . $ext;
        }

        if (move_uploaded_file($tmp_name, $upload_dir . $new_file_name)) {
            $blog_img = $new_file_name;
        }
    }

    // Save karne se pehle clean karo
    $blog_content = str_replace(['<!--StartFragment-->', '<!--EndFragment-->'], '', $blog_content);
    $blog_content = trim($blog_content);

    // Meta Data
    $blog_meta_title = $blog_title;
    $blog_meta_desc  = substr(strip_tags($blog_content), 0, 160);

    // Insert Query
    $sql = "INSERT INTO blog
        (
            blog_title,
            blog_slug,
            blog_content,
            blog_img,
            blog_author,
            blog_meta_title,
            blog_meta_desc,
            created_at
        )
        VALUES
        (
            '$blog_title',
            '$blog_slug',
            '$blog_content',
            '$blog_img',
            '$blog_author',
            '$blog_meta_title',
            '$blog_meta_desc',
            '$created_at'
        )";

    $result = mysqli_query($mydb, $sql);

    if ($result) {
        echo "<script>alert('Blog Added Successfully!'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Error: " . addslashes(mysqli_error($mydb)) . "');</script>";
    }
    exit();
}
?>

<!-- update blog -->
<?php
if (isset($_POST['form_action']) && $_POST['form_action'] === 'update_blog') {

    $blog_id      = mysqli_real_escape_string($mydb, $_POST['blog_id_name']);
    $blog_title   = mysqli_real_escape_string($mydb, $_POST['blog_title2']);
    $blog_author  = mysqli_real_escape_string($mydb, $_POST['blog_author2']);
    $blog_content = mysqli_real_escape_string($mydb, $_POST['blog_content2']);
    $updated_at   = time();

    // Clean content
    $blog_content = str_replace(['<!--StartFragment-->', '<!--EndFragment-->'], '', $blog_content);
    $blog_content = trim($blog_content);

    // Meta
    $blog_meta_title = $blog_title;
    $blog_meta_desc  = substr(strip_tags($blog_content), 0, 160);

    // Purana data fetch karo
    $old_result = mysqli_query($mydb, "SELECT blog_title, blog_img, blog_slug FROM blog WHERE blog_id = '$blog_id'");
    $old_data   = mysqli_fetch_assoc($old_result);

    if (!$old_data) {
        echo "<script>alert('Blog not found!'); window.location.href='admin.php';</script>";
        exit();
    }

    $old_img    = $old_data['blog_img'];
    $old_title  = $old_data['blog_title'];
    $old_slug   = $old_data['blog_slug'];

    // Slug — sirf tab change karo jab title change hua ho
    if (trim($blog_title) !== trim($old_title)) {
        $blog_slug = strtolower(trim($blog_title));
        $blog_slug = preg_replace('/[^a-z0-9-]+/', '-', $blog_slug);
        $blog_slug = trim($blog_slug, '-');
    } else {
        $blog_slug = $old_slug; // purana slug hi rakho
    }

    // Image handle
    $upload_dir = "assets/blog/";
    $blog_img   = $old_img; // default: purani image

    if (isset($_FILES['blog_image2']) && $_FILES['blog_image2']['error'] == 0) {

        $file_name = $_FILES['blog_image2']['name'];
        $tmp_name  = $_FILES['blog_image2']['tmp_name'];
        $ext       = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $base_name = pathinfo($file_name, PATHINFO_FILENAME);

        $new_file_name = $base_name . "." . $ext;

        // Same name pahle se hai to rename
        if (file_exists($upload_dir . $new_file_name)) {
            $new_file_name = $base_name . "_" . time() . "_" . rand(1000, 9999) . "." . $ext;
        }

        if (move_uploaded_file($tmp_name, $upload_dir . $new_file_name)) {

            // Purani image delete karo
            if (!empty($old_img) && file_exists($upload_dir . $old_img)) {
                unlink($upload_dir . $old_img);
            }

            $blog_img = $new_file_name;
        }
    }

    // Update Query
    $sql = "UPDATE blog SET 
                blog_title      = '$blog_title',
                blog_slug       = '$blog_slug',
                blog_content    = '$blog_content',
                blog_img        = '$blog_img',
                blog_author     = '$blog_author',
                blog_meta_title = '$blog_meta_title',
                blog_meta_desc  = '$blog_meta_desc',
                updated_at      = '$updated_at'
            WHERE blog_id = '$blog_id'";

    $result = mysqli_query($mydb, $sql);

    if ($result) {
        echo "<script>alert('Blog Updated Successfully!'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Error: " . addslashes(mysqli_error($mydb)) . "');</script>";
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagletfly Admin</title>

    <script src="assets/js/blog.js"></script>
</head>

<body>


    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
    </style>

    <style>
        .title_admin {
            color: #0284c7;
        }
    </style>


    <main class="contact-main">


        <!-- section 1 ( Hero ) -->
        <style>
            :root {
                --bg-color: #f0f2f5;
                /* Light grey background */
                --card-bg: #ffffff;
                /* White card background */
                --text-primary: #111827;
                /* Dark text for titles */
                --text-secondary: #6b7280;
                /* Lighter text for descriptions */
                --accent-color: #3b82f6;
                /* Primary blue accent */
                --radius: 16px;
                /* Rounded corners */
                --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            }

            .application_section {
                width: 100%;
                height: 100%;
                background-color: #F8FAFC;
                position: relative;
                overflow: hidden;
                display: flex;
                flex-direction: row;
            }


            /* left silde */
            .left_section_1 {
                position: fixed;
                width: 350px;
                z-index: 10;
                height: 100%;
                border-right: 1px solid #ccc;
                padding: 50px 30px 90px;
                height: 100%;
                background: #fff;
                overflow: auto;
            }

            .left_section_1 h6 {
                color: #9EA3B8;
                letter-spacing: 1.3px;
                text-transform: uppercase;
                font-size: .67rem;
                margin: 10px 0;
            }

            .top_nave_appli {}

            .subbox_link {
                display: flex;
                align-items: center;
                gap: 10px;
                padding: 7px 16px;
                font-size: .855rem;
                color: var(--text2);
                cursor: pointer;
                text-decoration: none;
                border-left: 3px solid transparent;
                transition: all .13s;
                user-select: none;
                margin: 4px 0;
            }

            .subbox_link:not(.active):hover {
                background: #f1f5f9;
                color: #0f172a;
            }

            .subbox_link.active {
                background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
                /* background: linear-gradient(135deg, #059669 0%, #0d9488 100%); */
                color: #ffffff !important;
                font-weight: 700;
                padding: 10px 16px;
                margin: 4px 0;
                border-radius: 10px;
                box-shadow: 0 6px 16px rgba(5, 63, 150, 0.25);
            }


            .subbox_link.active:hover {
                background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
                /* background: linear-gradient(135deg, #059669 0%, #0d9488 100%); */
                color: #fff;
            }

            /* .sub_box_link:hover {} */

            .svg_icon_box {
                display: flex;
                align-items: center;
                justify-content: center;
                pointer-events: none;
            }

            .svg_icon_box svg {
                width: 20px;
                height: 20px;
                padding: 1.5px;
                fill: #087553;
                pointer-events: none;
            }

            .svg_icon_color-active {
                fill: white !important;
            }

            .line_rola {
                border-top: 1px solid #ccc;
                position: relative;
            }

            .hammer_btn {
                display: none;
            }

            .haamer_btn_nikw5 {
                left: 309px !important;
                transition: .25s ease !important;
            }

            .dashbord_revile_gl {
                left: 0 !important;
                transition: .25s ease !important;
            }

            #close_linw969 {
                display: none;
                font-size: 20px;
                text-align: center;
            }

            #haw_linw969 {
                font-size: 20px;
                text-align: center;
            }

            @media (max-width:640px) {
                .left_section_1 {
                    position: fixed;
                    left: -350px;
                    width: 310px;
                    z-index: 10;
                }

                .hammer_btn {
                    display: flex;
                    flex-direction: column;
                    gap: 5px;
                    position: fixed;
                    padding: 5px 15px;
                    transition: .25s ease;
                    justify-content: center;
                    transition: .25s ease;
                    top: 100px;
                    left: 0;
                    width: 50px;
                    height: 50px;
                    border-radius: 0 10px 10px 0;
                    border: 1px outset #6666663d;
                    background-color: #fff;
                    z-index: 10;

                }
            }






            /* right slide */
            .right_section_1 {
                width: 90%;
                /* height: 20px; */
                /* margin: auto; */
                border-radius: 10px;
                /* height: 1000px; */
                /* overflow-y: auto; */
                /* overflow-x: hidden; */
                /* background: #313030; */
                display: flex;
                align-items: start;
                justify-content: center;
                margin: 25px 25px 25px 375px;

            }

            .all_sejmca8974 {

                /* #overview_contect_box { */
                margin-top: 25px;

                border: 1px solid #6666663d;
                /* background: #c0b9b9; */
                background: #fff;
                width: 100%;
                border-radius: 15px;
                width: 95%;
                padding: 25px 0;
                /* margin: 25px; */







            }

            .overview_hero {
                background: linear-gradient(135deg, #0d1b2a 0%, #1a2f42 60%, #0d3d2a 100%);
                border-radius: 12px;
                padding: 40px 40px 36px;
                margin-bottom: 36px;
                /* padding: 70px; */
                border-radius: 24px;
                border: 1px solid rgba(255, 255, 255, .08);
                text-align: center;
                position: relative;
                overflow: hidden;
                width: 80%;
                margin: auto;
                background: linear-gradient(135deg, #0f172a 0%, #111827 60%, #0b3d2e 100%);
                color: white;
                box-shadow: 0 25px 80px rgba(15, 23, 42, .25);

                /* margin: auto; */
                /* padding: 25px; */
            }

            .htaw85 {
                font-size: 44px;
            }

            .jsb8520 {
                color: #33BF74;
            }


            .overview_hero p {
                font: 35px;
                color: #c4c2c2;
                padding: 10px 0;
            }

            .btna1sa {
                color: #000000;
                background: #31BA74;
                padding: 8px 25px;
                border-radius: 15px;
                font-weight: 600;
                margin-top: 10px;
            }

            .counrt_grid_wer854_card {
                width: 80%;
                display: grid;
                gap: 25px;
                grid-template-columns: repeat(4, 1fr);
                margin: auto;
                margin-top: 25px;

            }


            .sole_89_Card {
                background-color: white;
                border-radius: 15px;
                border: 1px solid #DFE4EB;
                /* display: flex; */
                text-align: center;
            }

            .hwqih95a {
                font-size: 44px;
                font-weight: 800;
                background: linear-gradient(to bottom, #31BA74 46%, rgb(7 9 9));
                background-clip: text;
                --webkit-text-fill-color: transparent;
                color: transparent;
            }

            .tiawn98631ijas {
                margin: 5px 10px;
                font-size: 18px;
                font-weight: 400;
                color: rgba(85, 102, 102, 0.73);
            }

            .h8wh74523 {

                width: 80%;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                margin: auto;
                margin-top: 30px;

            }

            .uhujh2294sas {
                background: #F8FAFC;
                border: 1px solid #b0b1b3;
                border-radius: 20px;
                padding: 32px;
                text-decoration: none;
                cursor: pointer;
                box-shadow: 0 10px 35px rgba(0, 0, 0, .06);
                transition: background .3s, border .3s, transform .3s, box-shadow .3s;

            }

            .uhujh2294sas:hover {
                border-color: #a7ddf3;
                background: #ecf7fd;
            }


            .c-title12 {
                font-size: .9rem;
                font-weight: 700;
                /* color: #0d1b2a; */
                color: #064e3b;
                margin-bottom: 5px;
            }

            .c-desc12 {
                font-size: .8rem;
                color: #94a3b8;
                line-height: 1.5;
            }







            .container9789674 {
                width: 80%;

                /* Limits width like a mobile view or sidebar */
                background-color: transparent;
                margin: auto;
                padding: 40px 0;
            }


            /* Card Styles */
            .service-card {
                background-color: var(--card-bg);
                border-radius: var(--radius);
                padding: 20px;
                margin-bottom: 16px;
                display: flex;
                align-items: center;
                /* Vertically center content */
                justify-content: space-between;
                box-shadow: var(--shadow);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                cursor: pointer;
                border: 1px solid rgba(0, 0, 0, 0.02);
                text-decoration: none;
                /* Remove underline if used as link */
                color: inherit;
            }

            .service-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                /* border-color: rgba(59, 130, 246, 0.2); */
                border-color: #a7ddf3;
                background: #ecf7fd;
            }

            /* Left Section: Icon */
            .icon-box {
                flex-shrink: 0;
                width: 30px;
                height: 30px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                margin-right: 16px;
            }

            /* Specific Icon Colors & Backgrounds */
            .icon-sms {
                background-color: #e0f2fe;
                color: #0284c7;
            }

            .icon-rcs {
                background-color: #f3e8ff;
                color: #9333ea;
            }

            .icon-wa {
                background-color: #dcfce7;
                color: #16a34a;
            }

            .icon-voice {
                background-color: #ffedd5;
                color: #ea580c;
            }

            .icon-email {
                background-color: #fee2e2;
                color: #dc2626;
            }

            /* Middle Section: Text */
            .content-box {
                flex-grow: 1;
                /* Takes available space */
                min-width: 0;
                /* Prevents text overflow issues */
            }

            .content-box h3 {
                font-size: 14px;
                font-weight: 600;
                color: var(--text-primary);
                margin-bottom: 4px;
                line-height: 1.2;
            }

            .content-box p {
                font-size: 12.5px;
                font-weight: 400;
                color: var(--text-secondary);
                line-height: 1.4;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                /* Limits text to 2 lines */
                -webkit-box-orient: vertical;
                overflow: hidden;
            }

            /* Right Section: Arrow */
            .arrow-box {
                flex-shrink: 0;
                margin-left: 12px;
                color: #d1d5db;
                font-size: 14px;
                transition: color 0.2s ease;
            }

            .service-card:hover .arrow-box {
                color: var(--accent-color);
            }

            /* Mobile Responsiveness */
            @media (max-width: 400px) {
                .service-card {
                    padding: 16px;
                }

                .icon-box {
                    width: 40px;
                    height: 40px;
                    font-size: 18px;
                }
            }

            .void-horizon {
                width: 80%;
                max-width: 1000px;
                margin: 50px auto;
                padding: 20px;
            }

            .cyber-grid-array {
                display: grid;
                /* 6 columns per row jaisi image mein dikh raha hai (responsive ke liye auto-fit use kiya hai) */
                grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
                gap: 10px;
            }

            .nano-brick-unit {
                background-color: #ffffff;
                border-radius: 16px;
                padding: 10px 9px;
                display: flex;
                gap: 5px;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                border: 1px solid #e5e7eb;
                transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
                position: relative;
                overflow: hidden;
            }

            .nano-brick-unit:hover {
                transform: translateY(-5px);
                box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
                /* border-color: #d1d5db; */
                border-color: #a7ddf3;
                background: #ecf7fd;


            }

            /* Icon Styling */
            .visual-core {
                font-size: 12px;
                /* margin-bottom: 12px; */
                display: flex;
                align-items: center;
                justify-content: center;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-color: #f9fafb;
                /* Subtle circle background for icon */
                transition: transform 0.3s ease;
            }

            .nano-brick-unit:hover .visual-core {
                transform: scale(1.1);
                background-color: #f3f4f6;
            }

            /* Text Styling */
            .data-tag {

                font-size: 12px;
                font-weight: 600;
                color: #374151;
                letter-spacing: 0.3px;
            }


            /* HubSpot Orange */

            /* Media Query for smaller screens to adjust grid */
            @media (max-width: 768px) {
                .cyber-grid-array {
                    grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
                    gap: 16px;
                }

                .visual-core {
                    width: 50px;
                    height: 50px;
                    font-size: 24px;
                }

                .data-tag {
                    font-size: 12px;
                }
            }



            .void-control-deck {
                max-width: 900px;
                margin: 80px auto;
                /* Centered vertically and horizontally */
                padding: 0 20px;
                display: flex;
                justify-content: space-between;
                /* Space out the two buttons */
                gap: 24px;
            }

            .chrono-portal {
                background-color: #ffffff;
                border: 1px solid #e5e7eb;
                /* Light gray border */
                border-radius: 12px;
                padding: 24px 32px;
                text-decoration: none;
                display: flex;
                flex-direction: column;
                justify-content: center;
                width: 48%;
                /* Split almost half width */
                transition: all 0.3s ease;
                cursor: pointer;
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            }

            .chrono-portal:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                /* border-color: #d1d5db; */
                border-color: #a7ddf3;
                background: #ecf7fd;
            }

            /* Alignment Modifiers */
            .align-port-left {
                align-items: flex-start;
                text-align: left;
            }

            .align-port-right {
                align-items: flex-end;
                text-align: right;
            }

            /* Typography Styles */
            .ghost-ink {
                /* font-family: sans-serif; */
                font-size: 12px;
                font-weight: 600;
                color: #9ca3af;
                /* Grey text */
                text-transform: uppercase;
                letter-spacing: 1px;
                margin-bottom: 6px;
                display: block;
            }

            .solid-ink {
                /* font-family: sans-serif; */
                font-size: 18px;
                font-weight: 700;
                color: #111827;
                /* Black/Dark Grey text */
                display: block;
            }

            /* Mobile Responsiveness */
            @media (max-width: 600px) {
                .void-control-deck {
                    flex-direction: column;
                }

                .chrono-portal {
                    width: 100%;
                }

                .align-port-right {
                    align-items: flex-start;
                    /* Reset alignment on mobile stack */
                    text-align: left;
                }
            }







            @media (max-width:990px) {

                .counrt_grid_wer854_card {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width:640px) {
                .widh_wmob {
                    width: 100% !important;
                    margin: 0 !important;
                    padding: 0 !important;
                }

                .section_sub_with {
                    width: 90% !important;
                    padding: 25px 0px;
                }

                /* this is change everr time that change section */

                .htaw85 {
                    font-size: 30px;
                }

                .counrt_grid_wer854_card {
                    grid-template-columns: repeat(1, 1fr);
                }

                .h8wh74523 {
                    grid-template-columns: repeat(1, 1fr);
                }
            }

            /* show section after click css start */
            .section_sub_with {
                display: none;
            }

            .show_active {
                display: block !important;
                animation: to_wm95 0.55s ease forwards;
            }

            @keyframes to_wm95 {
                from {
                    transform: translateY(110px);
                    opacity: 0;
                    transition: .25s ease;
                }

                to {
                    transition: .25s ease;
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            /* show section after click css end */


            /* secton 2 login */
            .login_hero {
                margin: auto;
                width: 80%;
                display: block;
                color: #0284c7;
                font-size: 13px;
            }


            .brad_kaem {
                font-size: 13px;
                color: #0284c7;
                cursor: pointer;
            }

            .brad_kaem:nth-child(2) {
                content: "";
            }

            .loging_title {
                width: 80%;
                margin: auto;
                margin-top: 15px;
                position: relative;
                padding-left: 15px;
            }


            .loging_title::before {
                content: "";
                position: absolute;
                width: 10px;
                height: 10px;
                background: #0284c7;
                display: block;
                border-radius: 50%;
                left: 5px;
                top: 50%;
                transform: translate(-50%, -50%);

                /* margin-right: 10px; */
            }

            .loging_title h4 {
                color: #0284c7;
                font-size: 14px;
            }

            #login_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #login_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }

            .all_drive_box {
                width: 80%;
                margin: auto;
                margin-top: 20px;
                overflow: hidden;
                border-radius: 15px;
                transition: transform 0.25s ease;
            }

            .img_box img {
                width: 100%;
                display: block;
            }

            .all_drive_box:hover {
                transform: scale(1.02);
                box-shadow: 0 0px 13px 2px #00000059;
            }

            .qunike-table-container {
                width: 80%;
                margin: auto;
                margin-top: 30px;
            }

            .qunike-table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
                border: 1px solid #dce3ec;
                border-radius: 9px;
                overflow: hidden;
                background: #ffffff;
            }

            .qunike-table th,
            .qunike-table td {
                box-sizing: border-box;
            }

            .qunike-table th {
                padding: 13px 18px;
                background: #f1f5f9;
                color: #8a9bb3;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: 0.6px;
                text-align: left;
                border-bottom: 1px solid #dce3ec;
            }

            .qunike-table th:first-child {
                width: 27%;
            }

            .qunike-table th:last-child {
                width: 73%;
            }

            .qunike-table td {
                padding: 12px 18px;
                font-size: 14px;
                line-height: 1.5;
                border-bottom: 1px solid #dce3ec;
            }

            .qunike-table td:first-child {
                font-weight: 600;
                color: #20283a;
            }

            .qunike-table td:nth-child(2) {
                color: #59677d;
                font-weight: 400;
            }

            .qunike-table tr:last-child td {
                border-bottom: none;
            }

            @media (max-width: 992px) {

                .qunike-table-container {
                    width: 90%;
                }

                .qunike-table th {
                    padding: 12px 15px;
                    font-size: 12px;
                }

                .qunike-table td {
                    padding: 11px 15px;
                    font-size: 13px;
                }
            }

            @media (max-width: 768px) {

                .qunike-table-container {
                    width: 94%;
                    margin: auto;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                }

                .qunike-table {
                    min-width: 620px;
                }

                .qunike-table th {
                    padding: 11px 14px;
                    font-size: 12px;
                }

                .qunike-table td {
                    padding: 11px 14px;
                    font-size: 13px;
                }
            }

            @media (max-width: 480px) {

                .qunike-table-container {
                    width: 96%;
                }

                .qunike-table {
                    min-width: 560px;
                }

                .qunike-table th {
                    padding: 10px 12px;
                    font-size: 11px;
                }

                .qunike-table td {
                    padding: 10px 12px;
                    font-size: 12px;
                }
            }

            .om-guide-shell {
                width: 80%;
                margin: auto;
                padding: 40px 0;
            }

            .om-title-bar {
                text-align: center;
                margin-bottom: 8px;
            }

            .om-main-heading {
                font-size: 26px;
                color: #1e293b;
                margin: 0;
            }

            .om-thin-strip {
                display: block;
                width: 70px;
                height: 4px;
                margin: 12px auto 0 auto;
                border-radius: 4px;
                background: linear-gradient(90deg, #22c55e, #16a34a);
            }

            .om-sub-caption {
                text-align: center;
                font-size: 14px;
                color: #8a94a6;
                margin: 10px 0 30px 0;
            }

            /* ===== single step card ===== */
            .om-step-card {
                display: flex;
                align-items: flex-start;
                gap: 18px;
                background: #ffffff;
                border: 1px solid #e2e6ee;
                border-left: 4px solid #224ec5;
                border-radius: 12px;
                padding: 20px 22px;
                margin-bottom: 16px;
                box-shadow: 0 4px 14px rgba(30, 41, 59, 0.08);
                transition: transform 0.2s, box-shadow 0.2s;
            }

            .om-step-card:hover {
                transform: translateX(6px);
                box-shadow: 0 6px 20px rgba(34, 72, 197, 0.18);
            }

            .om-circle-badge {
                flex-shrink: 0;
                width: 35px;
                height: 35px;
                border-radius: 50%;
                background: linear-gradient(135deg, #224ec5, #1637a3);
                color: #ffffff;
                font-size: 16px;
                font-weight: 700;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 4px 10px rgba(34, 37, 197, 0.35);
            }

            .om-card-left {
                flex: 1;
            }

            .om-step-title {
                font-size: 15px;
                font-weight: 700;
                color: #162b65;
                margin: 0 0 6px 0;
            }

            .om-step-detail {
                font-size: 13px;
                color: #666666;
                line-height: 1.6;
                margin: 0 !important;
            }

            .om-link-tag {
                color: #4f6ef7;
                font-weight: 600;
                text-decoration: none;
            }

            .om-link-tag:hover {
                text-decoration: underline;
            }

            .om-code-chip {
                display: inline-block;
                padding: 2px 10px;

                font-size: 13px;
                color: #3b3f8f;
                background: #eef2ff;
                border: 1px solid #c7d2fe;
                border-radius: 6px;
            }

            .om-note-tag {
                display: inline-block;
                padding: 2px 10px;
                font-size: 12px;
                font-weight: 600;
                color: #92400e;
                background: #fef3c7;
                border: 1px solid #fcd34d;
                border-radius: 6px;
                margin-left: 6px;
            }


            .hdah651 {
                width: 80%;
                margin: auto;
            }

            /* secton 3 dashbord */
            #dashbord_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #dashbord_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }

            #dashbord_contect_box h5 {
                margin: auto;
                width: 80%;
                margin-top: 30px;
                font-size: 16px;
            }

            /* secton 4 SMS */
            #sms_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #sms_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }

            /* secton 5 RCS */
            #rcs_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #rcs_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }


            /* secton 6 whatsapp */
            #whatsapp_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #whatsapp_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }


            /* secton 7 voice */
            #voice_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #voice_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }


            /* secton 8 ivr */
            #ivr_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #ivr_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }


            /* secton 9 click to call */
            #click_to_call_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #click_to_call_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }


            .sndinli li::marker {
                color: #03810a !important;
            }

            /* secton 10 text to speech */
            #text_to_speech_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #text_to_speech_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }






            /* secton 11 ai agent */
            #ai_agent_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #ai_agent_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }


            /* secton 12 jourany */
            #journeys_contect_box h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            #journeys_contect_box p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;

            }

            .diaod98641 {
                width: 80%;
                margin: auto;


            }

            /* Sub links  */

            .auto_margin_notwa h2 {
                width: 80%;
                font-size: 40px;
                margin: auto;
            }

            .auto_margin_notwa p {
                font-size: 14px;
                width: 80%;
                margin: auto;
                color: #666666;
            }

            .line_rola span {
                left: -10px !important;

                font-weight: 700;

            }


            /* sms  */
            .sole78m {
                display: flex;
                align-items: center;
                gap: 9px;
                padding: 7px 18px;
                font-size: 12.5px;
                color: #94a3b8;
                cursor: pointer;
                text-decoration: none;
                border-left: 3px solid transparent;
                transition: all .13s;
                user-select: none;
                position: relative;
                left: 25px;
            }

            .sole78m::before {
                content: '';
                position: absolute;
                left: 8px;
                top: 50%;
                width: 6px;
                height: 6px;
                border-radius: 50%;
                background: #cbd5e1;
                transform: translateY(-50%);
                transition: background .13s;
            }

            .sole78m:not(.active):hover {
                background: #f1f5f9;
                color: #0f172a;
            }


            .sole78m.active {
                background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
                box-shadow: 0 8px 20px rgba(10, 37, 191, 0.18);
                color: #ffffff !important;
                font-weight: 700;
                border: none;
                border-radius: 10px;
                animation: sole78mTransform 0.6s ease forwards;
            }

            @keyframes sole78mTransform {
                0% {
                    transform: translateX(-15px) scale(0.95);
                    opacity: 0.6;
                }

                100% {
                    transform: translateX(0) scale(1);
                    opacity: 1;
                }
            }

            .sole78m.active:hover {
                background: #0a58bf;
                color: #fff;
                border-radius: 10px;
            }

            .sub_links_of_allawn {
                display: none;
            }

            .sub_links_of_show_box {
                display: block;
            }

            .step_impear {
                margin: 30px;
                border-radius: 15px;
                overflow: hidden;
                transition: .25s ease;
            }

            .step_impear:hover {
                transition: .25s ease;
                transform: scale(1.02);
                box-shadow: 0 0px 13px 2px #00000059;
            }
        </style>



        <!-- Loging -->
        <style>
            /* From Uiverse.io by cssbuttons-io */
            .logout_btn {
                width: 150px;
                height: 50px;
                margin: auto;
                cursor: pointer;
                display: flex;
                align-items: center;
                background: red;
                border: none;
                border-radius: 5px;
                box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.15);
                background: #e62222;
            }

            .logout_btn,
            .logout_btn span {
                transition: 200ms;
            }

            .logout_btn .text {
                transform: translateX(35px);
                color: white;
                font-weight: bold;
            }

            .logout_btn .icon {
                position: absolute;
                border-left: 1px solid #c41b1b;
                transform: translateX(110px);
                height: 40px;
                width: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .logout_btn svg {
                width: 15px;
                fill: #eee;
            }

            .logout_btn:hover {
                background: #ff3636;
            }

            .logout_btn:hover .text {
                color: transparent;
            }

            .logout_btn:hover .icon {
                width: 150px;
                border-left: none;
                transform: translateX(0);
            }

            .logout_btn:focus {
                outline: none;
            }

            .logout_btn:active .icon svg {
                transform: scale(0.8);
            }






            /* ===== Bhaum Unique Settings Form ===== */

            .bhaum-settings-card-2026 {
                max-width: 700px;
                background: #fff;
                padding: 25px;
                border-radius: 12px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
                margin: 0 auto 40px;
            }

            .bhaum-settings-form-2026 {
                margin-bottom: 35px;
            }

            .bhaum-settings-title-2026 {
                font-size: 20px;
                font-weight: 600;
                margin-bottom: 15px;
            }

            .bhaum-field-group-2026 {
                margin-bottom: 15px;
            }

            .bhaum-field-group-2026 input {
                width: 100%;
                height: 48px;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 0 15px;
                outline: none;
            }

            .bhaum-password-wrap-2026 {
                display: flex;
                gap: 10px;
                align-items: center;
            }

            .bhaum-password-wrap-2026 input {
                flex: 1;
            }

            .bhaum-password-toggle-2026 {
                min-width: 80px;
                height: 48px;
                border: none;
                cursor: pointer;
                border-radius: 8px;
                background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
                color: #fff;
            }

            .bhaum-save-btn-2026 {
                border: none;
                background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
                color: #fff;
                padding: 12px 20px;
                border-radius: 8px;
                cursor: pointer;
            }
        </style>


        <!-- /* -------------------- blog css ---------------------- */ -->
        <style>
            /*  ============================  blogedit  ================================  */


            .blog_nav {
                width: 100%;
            }

            .blog_nav ul {
                list-style: none;
                width: 100%;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                gap: 20px;
                padding: 0 20px;

            }

            .search_btr {
                display: flex;
                flex-direction: column;
                position: relative;
                padding-top: 8px;


            }

            .search_btr label {
                position: absolute;
                color: var(--primary);
                background-color: white;
                border-radius: 12px;
                top: 0;
                left: 11px;
                font-weight: 600;
                font-size: 13px;
                padding: 0 5px;

            }

            .search_btr input {

                padding: 10px;
                border-radius: 8px;
                border: 1px solid #6666;
            }

            .search_btr input:focus {
                outline: none;
                /* border: none; */
                box-shadow: none;
                color: var(--danger-back);
                background-color: #383535;
            }


            .add_new_blog {
                padding: 10px 15px;
                background-color: var(--accent);
                color: rgb(255, 255, 255);
                outline: none;
                border: none;
                border-radius: 10px;
            }

            .add_new_blog:focus {
                border: none;
                outline: none;
            }

            .devidedLine {
                display: flex;
                align-items: center;
                gap: 15px;
                /* text aur line ke beech space */
                color: #666;
                font-size: 12px;
                margin: 25px 0;
            }

            .devidedLine::before,
            .devidedLine::after {
                content: "";
                flex: 1;
                height: 1px;
                background: #6666;
            }

            /* -------------------- update blog css ---------------------- */



            /* -------------------- addnew blog css ---------------------- */
            .add_fromw {
                margin-top: 20px;
                border-radius: 15px;
                overflow: hidden;
            }

            .show_add_from {
                display: none;
            }

            /* Blog Upload Section Styles */
            .blog-upload-section {
                min-height: 100vh;
                padding: 40px 20px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .blog-upload-container {
                width: 100%;
                max-width: 800px;
                background: #ffffff;
                border-radius: 20px;
                padding: 40px;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
                animation: blogFadeInUp 0.6s ease-out;
            }

            @keyframes blogFadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .blog-upload-title {
                font-size: 28px;
                font-weight: 700;
                color: #1a1a2e;
                text-align: center;
                margin-bottom: 35px;
                position: relative;
            }

            .blog-upload-title::after {
                content: '';
                position: absolute;
                bottom: -10px;
                left: 50%;
                transform: translateX(-50%);
                width: 60px;
                height: 4px;
                background: linear-gradient(90deg, #667eea, #764ba2);
                border-radius: 2px;
            }

            .blog-upload-group {
                margin-bottom: 25px;
            }

            .blog-upload-label {
                display: block;
                font-size: 14px;
                font-weight: 600;
                color: #374151;
                margin-bottom: 8px;
            }

            .blog-upload-input {
                width: 100%;
                padding: 14px 18px;
                font-size: 15px;
                border: 2px solid #e5e7eb;
                border-radius: 12px;
                background: #f9fafb;
                color: #1f2937;
                transition: all 0.3s ease;
                outline: none;
                box-sizing: border-box;
            }

            .blog-upload-input:focus {
                border-color: #667eea;
                background: #ffffff;
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            }

            .blog-upload-input::placeholder {
                color: #9ca3af;
            }

            /* Image Upload Area */
            .blog-image-upload-area {
                position: relative;
                border: 2px dashed #d1d5db;
                border-radius: 16px;
                padding: 40px;
                text-align: center;
                background: #f9fafb;
                cursor: pointer;
                transition: all 0.3s ease;
                overflow: hidden;
            }

            .blog-image-upload-area:hover {
                border-color: #667eea;
                background: #f3f4f6;
            }

            .blog-image-upload-area.blog-drag-over {
                border-color: #667eea;
                background: rgba(102, 126, 234, 0.1);
                transform: scale(1.02);
            }

            .blog-image-upload-area input[type="file"] {
                position: absolute;
                inset: 0;
                opacity: 0;
                cursor: pointer;
            }

            .blog-image-placeholder {
                color: #9ca3af;
                transition: all 0.3s ease;
            }

            .blog-image-placeholder svg {
                margin-bottom: 12px;
            }

            .blog-image-placeholder p {
                font-size: 14px;
                margin: 0;
            }

            .blog-image-preview {
                display: none;
                max-width: 100%;
                max-height: 300px;
                border-radius: 12px;
                object-fit: contain;
            }

            .blog-image-upload-area.blog-has-image .blog-image-placeholder {
                display: none;
            }

            .blog-image-upload-area.blog-has-image .blog-image-preview {
                display: block;
                margin: 0 auto;
                animation: blogImagePop 0.4s ease;
            }

            @keyframes blogImagePop {
                0% {
                    opacity: 0;
                    transform: scale(0.8);
                }

                100% {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            /* Editor Toolbar */
            .blog-editor-toolbar {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                gap: 6px;
                padding: 12px;
                background: #f3f4f6;
                border: 2px solid #e5e7eb;
                border-bottom: none;
                border-radius: 12px 12px 0 0;
            }

            .blog-toolbar-select {
                padding: 8px 12px;
                font-size: 13px;
                border: 1px solid #d1d5db;
                border-radius: 8px;
                background: #ffffff;
                cursor: pointer;
                outline: none;
                transition: all 0.2s ease;
            }

            .blog-toolbar-select:hover {
                border-color: #667eea;
            }

            .blog-toolbar-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 36px;
                height: 36px;
                border: none;
                border-radius: 8px;
                background: transparent;
                color: #4b5563;
                cursor: pointer;
                transition: all 0.2s ease;
                font-size: 15px;
            }

            .blog-toolbar-btn:hover {
                background: #e5e7eb;
                color: #1f2937;
            }

            .blog-toolbar-btn:active {
                transform: scale(0.95);
            }

            .blog-toolbar-btn.blog-active {
                background: #667eea;
                color: #ffffff;
            }

            .blog-toolbar-divider {
                width: 1px;
                height: 24px;
                background: #d1d5db;
                margin: 0 4px;
            }

            .blog-color-picker-wrap {
                position: relative;
            }

            .blog-color-btn {
                flex-direction: column;
                gap: 2px;
                height: 40px;
            }

            .blog-color-icon {
                font-weight: 700;
                font-size: 14px;
            }

            .blog-color-bar {
                width: 20px;
                height: 4px;
                border-radius: 2px;
                background: #000000;
            }

            #blogBgColorBar {
                background: #ffffff;
                border: 1px solid #d1d5db;
            }

            .blog-color-input {
                position: absolute;
                bottom: -5px;
                left: 50%;
                transform: translateX(-50%);
                width: 0;
                height: 0;
                opacity: 0;
                cursor: pointer;
            }

            /* Content Editor */
            .blog-content-editor {
                min-height: 300px;
                max-height: 500px;
                overflow-y: auto;
                padding: 20px;
                font-size: 15px;
                line-height: 1.7;
                border: 2px solid #e5e7eb;
                border-top: none;
                border-radius: 0 0 12px 12px;
                background: #ffffff;
                color: #1f2937;
                outline: none;
                transition: all 0.3s ease;
            }

            .blog-content-editor:focus {
                border-color: #667eea;
                box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            }

            .blog-content-editor:empty::before {
                content: attr(placeholder);
                color: #9ca3af;
                pointer-events: none;
            }

            .blog-content-editor a {
                color: #667eea;
                text-decoration: underline;
            }

            /* Submit Button */
            .blog-upload-actions {
                margin-top: 30px;
            }

            .blog-submit-btn {
                width: 100%;
                padding: 16px 32px;
                font-size: 16px;
                font-weight: 600;
                color: #ffffff;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border: none;
                border-radius: 12px;
                cursor: pointer;
                position: relative;
                overflow: hidden;
                transition: all 0.3s ease;
            }

            .blog-submit-btn::before {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            .blog-submit-btn:hover::before {
                opacity: 1;
            }

            .blog-submit-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            }

            .blog-submit-btn:active {
                transform: translateY(0);
            }

            .blog-btn-text {
                position: relative;
                z-index: 1;
            }

            .blog-btn-loader {
                display: none;
                width: 20px;
                height: 20px;
                border: 2px solid rgba(255, 255, 255, 0.3);
                border-top-color: #ffffff;
                border-radius: 50%;
                animation: blogBtnSpin 0.8s linear infinite;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            @keyframes blogBtnSpin {
                to {
                    transform: translate(-50%, -50%) rotate(360deg);
                }
            }

            .blog-submit-btn.blog-loading .blog-btn-text {
                opacity: 0;
            }

            .blog-submit-btn.blog-loading .blog-btn-loader {
                display: block;
            }

            /* Modal Styles */
            .blog-modal-overlay {
                position: fixed;
                inset: 0;
                background: rgba(0, 0, 0, 0.5);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
                padding: 20px;
            }

            .blog-modal-overlay.blog-modal-active {
                opacity: 1;
                visibility: visible;
            }

            .blog-modal {
                width: 100%;
                max-width: 450px;
                background: #ffffff;
                border-radius: 16px;
                overflow: hidden;
                transform: scale(0.9) translateY(20px);
                transition: all 0.3s ease;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            }

            .blog-modal-overlay.blog-modal-active .blog-modal {
                transform: scale(1) translateY(0);
            }

            .blog-modal-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 20px 24px;
                border-bottom: 1px solid #e5e7eb;
            }

            .blog-modal-header h3 {
                font-size: 18px;
                font-weight: 600;
                color: #1f2937;
                margin: 0;
            }

            .blog-modal-close {
                width: 32px;
                height: 32px;
                display: flex;
                align-items: center;
                justify-content: center;
                border: none;
                background: transparent;
                font-size: 24px;
                color: #9ca3af;
                cursor: pointer;
                border-radius: 8px;
                transition: all 0.2s ease;
            }

            .blog-modal-close:hover {
                background: #f3f4f6;
                color: #1f2937;
            }

            .blog-modal-body {
                padding: 24px;
            }

            .blog-modal-body .blog-upload-group:last-child {
                margin-bottom: 0;
            }

            .blog-modal-footer {
                display: flex;
                justify-content: flex-end;
                gap: 12px;
                padding: 16px 24px;
                background: #f9fafb;
            }

            .blog-modal-btn {
                padding: 10px 20px;
                font-size: 14px;
                font-weight: 500;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: all 0.2s ease;
            }

            .blog-modal-cancel {
                background: #e5e7eb;
                color: #4b5563;
            }

            .blog-modal-cancel:hover {
                background: #d1d5db;
            }

            .blog-modal-confirm {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: #ffffff;
            }

            .blog-modal-confirm:hover {
                transform: translateY(-1px);
                box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .blog-upload-section {
                    padding: 20px 15px;
                }

                .blog-upload-container {
                    padding: 25px 20px;
                    border-radius: 16px;
                }

                .blog-upload-title {
                    font-size: 22px;
                    margin-bottom: 25px;
                }

                .blog-editor-toolbar {
                    padding: 10px;
                    gap: 4px;
                }

                .blog-toolbar-btn {
                    width: 32px;
                    height: 32px;
                }

                .blog-toolbar-select {
                    padding: 6px 10px;
                    font-size: 12px;
                }

                .blog-toolbar-divider {
                    height: 20px;
                    margin: 0 2px;
                }

                .blog-content-editor {
                    min-height: 250px;
                    padding: 15px;
                    font-size: 14px;
                }

                .blog-image-upload-area {
                    padding: 30px 20px;
                }
            }

            @media (max-width: 480px) {
                .blog-upload-container {
                    padding: 20px 15px;
                }

                .blog-upload-title {
                    font-size: 20px;
                }

                .blog-upload-input {
                    padding: 12px 14px;
                    font-size: 14px;
                }

                .blog-toolbar-btn {
                    width: 30px;
                    height: 30px;
                    font-size: 13px;
                }

                .blog-color-btn {
                    height: 36px;
                }

                .blog-submit-btn {
                    padding: 14px 24px;
                    font-size: 15px;
                }

                .blog-modal {
                    margin: 10px;
                }

                .blog-modal-header,
                .blog-modal-body,
                .blog-modal-footer {
                    padding: 16px;
                }
            }

            /* Scrollbar Styling */
            .blog-content-editor::-webkit-scrollbar {
                width: 8px;
            }

            .blog-content-editor::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 4px;
            }

            .blog-content-editor::-webkit-scrollbar-thumb {
                background: #c1c1c1;
                border-radius: 4px;
            }

            .blog-content-editor::-webkit-scrollbar-thumb:hover {
                background: #a1a1a1;
            }



            .show_bolg {
                width: 100%;
                margin-top: 20px;
            }

            .card_into {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }

            /* Tablet */
            @media (max-width: 992px) {
                .card_into {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            /* Mobile */
            @media (max-width: 576px) {
                .card_into {
                    grid-template-columns: 1fr;
                }
            }

            .blog_card {
                background: #fff;
                border-radius: 18px;
                overflow: hidden;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                transition: .3s ease;
                border: 1px solid #eee;
            }

            .blog_card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            }

            .blog_card img {
                padding: 10px;
                width: 100%;
                height: 220px;
                object-fit: cover;
            }

            .blog_content {
                padding: 18px;
            }

            .blog_meta {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 12px;
                font-size: 13px;
                color: #666;
            }

            .blog_author {
                background: #f5f5f5;
                padding: 4px 10px;
                border-radius: 50px;
            }

            .blog_title {
                font-size: 14px;
                font-weight: 700;
                margin-bottom: 10px;
                color: #222;
                line-height: 1.4;
            }

            .blog_desc {
                color: #666;
                line-height: 1.6;
                font-size: 12px;
                margin-bottom: 18px;
            }

            .blog_btn {
                display: inline-block;
                padding: 10px 18px;
                background: #4f46e5;
                color: #fff;
                text-decoration: none;
                border-radius: 8px;
                font-size: 14px;
                transition: .3s;
                outline: none;
                border: none;
            }

            .blog_btn:focus {
                outline: none;
                border: none;
            }

            .blog_btn:hover {
                background: #3730a3;
            }
        </style>

        <section class="application_section">

            <!-- left side  -->
            <section class="left_section_1" id="left_section_box">

                <h1 class="title_admin">Admin Eagletfly</h1>
                <h6>Getting Started</h6>

                <ul class="top_nave_appli">
                    <li class="subbox_link active" id="overview_btn_124" data-set="overview" onclick="show_this_box(this); close_all_sub_links_ha()">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg svg_icon_color-active" data-subset="icon_1">
                                <path d="M320.5 437.1C295.3 405.4 280.4 377.7 275.5 353.9C253 265.9 388.1 265.9 365.6 353.9C360.2 378.1 345.3 405.9 320.6 437.1L320.5 437.1zM458.7 510.3C416.6 528.6 375 499.4 339.4 459.8C443.3 329.7 385.5 259.8 320.6 259.8C265.7 259.8 235.4 306.3 247.3 360.3C254.2 389.5 272.5 422.7 301.7 459.8C269.2 495.8 241.2 512.5 216.5 514.7C166.5 522.1 127.4 473.6 145.2 423.6C160.3 384.4 256.9 192.4 261.1 182C276.9 151.9 286.7 124.6 320.5 124.6C352.8 124.6 363.9 150.5 380.9 184.5C416.9 255.1 470.3 362 495.7 423.6C508.9 456.7 494.3 494.9 458.7 510.2zM505.7 374.2C376.8 99.9 369.7 96 320.6 96C275.1 96 255.7 127.7 235.9 168.8C129.7 381.1 119.5 411.2 118.6 413.8C93.4 483.1 145.3 544 208.2 544C229.9 544 268.8 537.9 320.6 481.6C379.3 545.4 421.9 544 433 544C495.9 544.1 547.9 483.1 522.6 413.8C522.6 409.9 505.8 374.9 505.8 374.2L505.8 374.2z" />
                            </svg>
                        </span>

                        Overview
                    </li>

                    <li class="subbox_link" id="journeys_btn_124" data-set="journeys" onclick="window.show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_12">
                                <path d="M288 88C288 74.7 298.7 64 312 64C457.8 64 576 182.2 576 328C576 341.3 565.3 352 552 352C538.7 352 528 341.3 528 328C528 208.7 431.3 112 312 112C298.7 112 288 101.3 288 88zM144 160C170.5 160 192 181.5 192 208L192 432C192 458.5 213.5 480 240 480C266.5 480 288 458.5 288 432C288 405.5 266.5 384 240 384C231.2 384 224 376.8 224 368L224 304C224 295.2 231.2 288 240 288C319.5 288 384 352.5 384 432C384 511.5 319.5 576 240 576C160.5 576 96 511.5 96 432L96 208C96 181.5 117.5 160 144 160zM312 160C404.8 160 480 235.2 480 328C480 341.3 469.3 352 456 352C442.7 352 432 341.3 432 328C432 261.7 378.3 208 312 208C298.7 208 288 197.3 288 184C288 170.7 298.7 160 312 160z" />
                            </svg>
                        </span>
                        Blog
                    </li>

                    <!-- Journeys -->
                    <div class="sub_links_of_allawn" id="journeys_sub_box" data-set="journeys-sub" style="display: none;">
                        <ul>
                            <li class="sole78m" id="contect__59" onclick="link_sole_action(this)" data-set="contect-59">Journey Campaign</li>
                            <li class="sole78m" id="contect__60" onclick="link_sole_action(this)" data-set="contect-60">Journey Reports</li>
                        </ul>
                    </div>

                    <li class="subbox_link" id="dashbord_btn_124" data-set="dashbord" onclick="show_this_box(this); close_all_sub_links_ha()">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_3">
                                <path d="M96 96C113.7 96 128 110.3 128 128L128 464C128 472.8 135.2 480 144 480L544 480C561.7 480 576 494.3 576 512C576 529.7 561.7 544 544 544L144 544C99.8 544 64 508.2 64 464L64 128C64 110.3 78.3 96 96 96zM208 288C225.7 288 240 302.3 240 320L240 384C240 401.7 225.7 416 208 416C190.3 416 176 401.7 176 384L176 320C176 302.3 190.3 288 208 288zM352 224L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224zM432 256C449.7 256 464 270.3 464 288L464 384C464 401.7 449.7 416 432 416C414.3 416 400 401.7 400 384L400 288C400 270.3 414.3 256 432 256zM576 160L576 384C576 401.7 561.7 416 544 416C526.3 416 512 401.7 512 384L512 160C512 142.3 526.3 128 544 128C561.7 128 576 142.3 576 160z" />
                            </svg>
                        </span>
                        Courses
                    </li>
                </ul>

                <div class="line_rola"></div>

                <div class="bottom_nave_apli">
                    <h6>Web Pages</h6>
                    <ul class="mosd82">
                        <li class="subbox_link" id="sms_btn_124" onclick="show_this_box(this); show_sub_link(this);" data-set="sms">
                            <span class="svg_icon_box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_4">
                                    <path d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z" />
                                </svg>
                            </span>
                            Home
                        </li>

                        <!-- sms sub link -->
                        <div class="sub_links_of_allawn" id="sms_sub_box" data-set="sms-sub">
                            <ul>
                                <li class="sole78m" id="contect__1" onclick="link_sole_action(this)" data-set="contect-1">SMS Dashbord</li>
                                <li class="sole78m" id="contect__2" onclick="link_sole_action(this)" data-set="contect-2">Create SMS Campaign</li>
                                <li class="sole78m" id="contect__3" onclick="link_sole_action(this)" data-set="contect-3">Tiny Campaign( Smart URL )</li>
                                <li class="sole78m" id="contect__4" onclick="link_sole_action(this)" data-set="contect-4">Manage Sender ID</li>
                                <li class="sole78m" id="contect__5" onclick="link_sole_action(this)" data-set="contect-5">Manage Template</li>
                                <li class="sole78m" id="contect__6" onclick="link_sole_action(this)" data-set="contect-6">My Routes</li>
                                <li class="sole78m" id="contect__7" onclick="link_sole_action(this)" data-set="contect-7">Contact Manager</li>
                                <li class="sole78m" id="contect__8" onclick="link_sole_action(this)" data-set="contect-8">Manage Group</li>
                                <li class="sole78m" id="contect__9" onclick="link_sole_action(this)" data-set="contect-9">Blacklist Numbers</li>
                                <li class="sole78m" id="contect__10" onclick="link_sole_action(this)" data-set="contect-10">SMS Reports</li>
                                <li class="sole78m" id="contect__11" onclick="link_sole_action(this)" data-set="contect-11">SMS API Integration</li>
                            </ul>
                        </div>

                        <li class="subbox_link" id="rcs_btn_124" data-set="rcs" onclick="show_this_box(this); show_sub_link(this);">
                            <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_5">
                                    <path d="M144 128C144 92.7 172.7 64 208 64L432 64C467.3 64 496 92.7 496 128L496 512C496 547.3 467.3 576 432 576L208 576C172.7 576 144 547.3 144 512L144 128zM256 504C256 517.3 266.7 528 280 528L360 528C373.3 528 384 517.3 384 504C384 490.7 373.3 480 360 480L280 480C266.7 480 256 490.7 256 504zM432 128L208 128L208 432L432 432L432 128z" />
                                </svg></span>
                            RCS
                        </li>

                        <!-- Rcs sub link -->
                        <div class="sub_links_of_allawn" id="rcs_sub_box" data-set="rcs-sub">
                            <ul>
                                <li class="sole78m" id="contect__12" onclick="link_sole_action(this)" data-set="contect-12">RCS Dashbord</li>
                                <li class="sole78m" id="contect__13" onclick="link_sole_action(this)" data-set="contect-13">RCS Agent</li>
                                <li class="sole78m" id="contect__14" onclick="link_sole_action(this)" data-set="contect-14">Templates</li>
                                <li class="sole78m" id="contect__15" onclick="link_sole_action(this)" data-set="contect-15">Create Campaign</li>
                                <li class="sole78m" id="contect__16" onclick="link_sole_action(this)" data-set="contect-16">Manage Group</li>
                                <li class="sole78m" id="contect__17" onclick="link_sole_action(this)" data-set="contect-17">Blacklist Numbers</li>
                                <li class="sole78m" id="contect__18" onclick="link_sole_action(this)" data-set="contect-18">RCS Reports</li>
                                <li class="sole78m" id="contect__19" onclick="link_sole_action(this)" data-set="contect-19">Chatbot Automation</li>
                            </ul>
                        </div>

                        <li class="subbox_link" id="whatsapp_btn_124" data-set="whatsapp" onclick="show_this_box(this); show_sub_link(this);">
                            <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_6">
                                    <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z" />
                                </svg></span>
                            WhatsApp
                        </li>

                        <!-- whatsapp sub link -->
                        <div class="sub_links_of_allawn" id="whatsapp_sub_box" data-set="whatsapp-sub">
                            <ul>
                                <li class="sole78m" id="contect__20" onclick="link_sole_action(this)" data-set="contect-20">WhatsApp Onboarding</li>
                                <li class="sole78m" id="contect__21" onclick="link_sole_action(this)" data-set="contect-21">Dashbord</li>
                                <li class="sole78m" id="contect__22" onclick="link_sole_action(this)" data-set="contect-22">Templates</li>
                                <li class="sole78m" id="contect__23" onclick="link_sole_action(this)" data-set="contect-23">Campaign</li>
                                <li class="sole78m" id="contect__24" onclick="link_sole_action(this)" data-set="contect-24">Reports</li>
                                <li class="sole78m" id="contect__25" onclick="link_sole_action(this)" data-set="contect-25">Agent</li>
                                <li class="sole78m" id="contect__26" onclick="link_sole_action(this)" data-set="contect-26">Chatbot Builder</li>
                                <li class="sole78m" id="contect__27" onclick="link_sole_action(this)" data-set="contect-27">Payment</li>
                                <li class="sole78m" id="contect__28" onclick="link_sole_action(this)" data-set="contect-28">Catalogue</li>
                            </ul>
                        </div>




                        <li class="subbox_link" id="voice_btn_124" data-set="voice" onclick="show_this_box(this); show_sub_link(this);">
                            <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_7">
                                    <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z" />
                                </svg></span>
                            Voice
                        </li>

                        <!-- voice sub link -->
                        <div class="sub_links_of_allawn" id="voice_sub_box" data-set="voice-sub">
                            <ul>
                                <li class="sole78m" id="contect__29" onclick="link_sole_action(this)" data-set="contect-29">Voice Dashbord</li>
                                <li class="sole78m" id="contect__30" onclick="link_sole_action(this)" data-set="contect-30">Voice Files</li>
                                <li class="sole78m" id="contect__31" onclick="link_sole_action(this)" data-set="contect-31">Components</li>
                                <li class="sole78m" id="contect__32" onclick="link_sole_action(this)" data-set="contect-32">Voice Campaign Management</li>
                                <li class="sole78m" id="contect__33" onclick="link_sole_action(this)" data-set="contect-33">Agent Monitoring</li>
                                <li class="sole78m" id="contect__34" onclick="link_sole_action(this)" data-set="contect-34">Report</li>
                                <li class="sole78m" id="contect__35" onclick="link_sole_action(this)" data-set="contect-35">Manage Agents</li>
                                <li class="sole78m" id="contect__36" onclick="link_sole_action(this)" data-set="contect-36">Manage Remarks</li>
                            </ul>
                        </div>

                        <li class="subbox_link" id="ivr_btn_124" data-set="ivr" onclick="show_this_box(this); show_sub_link(this);">
                            <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_8">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg></span>
                            IVR
                        </li>

                        <!-- IVR / Campaign -->
                        <div class="sub_links_of_allawn" id="ivr_sub_box" data-set="ivr-sub">
                            <ul>
                                <li class="sole78m" id="contect__37" onclick="link_sole_action(this)" data-set="contect-37">Dashboard</li>
                                <li class="sole78m" id="contect__38" onclick="link_sole_action(this)" data-set="contect-38">Campaign</li>
                                <li class="sole78m" id="contect__39" onclick="link_sole_action(this)" data-set="contect-39">Voice Files</li>
                                <li class="sole78m" id="contect__40" onclick="link_sole_action(this)" data-set="contect-40">Components</li>
                                <li class="sole78m" id="contect__41" onclick="link_sole_action(this)" data-set="contect-41">Manage Agent</li>
                                <li class="sole78m" id="contect__42" onclick="link_sole_action(this)" data-set="contect-42">Manage Remarks</li>
                                <li class="sole78m" id="contect__43" onclick="link_sole_action(this)" data-set="contect-43">Report</li>
                            </ul>
                        </div>

                        <li class="subbox_link" id="click_to_call_btn_124" data-set="click_to_call" onclick="show_this_box(this); show_sub_link(this);">
                            <span class="svg_icon_box">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_9">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </span>
                            Click To Call
                        </li>

                        <!-- Click To Call -->
                        <div class="sub_links_of_allawn" id="click_to_call_sub_box" data-set="click_to_call-sub">
                            <ul>
                                <li class="sole78m" id="contect__44" onclick="link_sole_action(this)" data-set="contect-44">Dashboard</li>
                                <li class="sole78m" id="contect__45" onclick="link_sole_action(this)" data-set="contect-45">Manage Agent</li>
                                <li class="sole78m" id="contect__46" onclick="link_sole_action(this)" data-set="contect-46">Campaign</li>
                                <li class="sole78m" id="contect__47" onclick="link_sole_action(this)" data-set="contect-47">Agent Monitoring</li>
                                <li class="sole78m" id="contect__48" onclick="link_sole_action(this)" data-set="contect-48">Manage Remarks</li>
                                <li class="sole78m" id="contect__49" onclick="link_sole_action(this)" data-set="contect-49">Report</li>
                            </ul>
                        </div>

                        <li class="subbox_link" id="text_to_speech_btn_124" data-set="text_to_speech" onclick="show_this_box(this); show_sub_link(this);">
                            <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_10">
                                    <path d="M112 416L160 416L294.1 535.2C300.5 540.9 308.7 544 317.2 544C336.4 544 352 528.4 352 509.2L352 130.8C352 111.6 336.4 96 317.2 96C308.7 96 300.5 99.1 294.1 104.8L160 224L112 224C85.5 224 64 245.5 64 272L64 368C64 394.5 85.5 416 112 416zM505.1 171C494.8 162.6 479.7 164.2 471.3 174.5C462.9 184.8 464.5 199.9 474.8 208.3C507.3 234.7 528 274.9 528 320C528 365.1 507.3 405.3 474.8 431.8C464.5 440.2 463 455.3 471.3 465.6C479.6 475.9 494.8 477.4 505.1 469.1C548.3 433.9 576 380.2 576 320.1C576 260 548.3 206.3 505.1 171.1zM444.6 245.5C434.3 237.1 419.2 238.7 410.8 249C402.4 259.3 404 274.4 414.3 282.8C425.1 291.6 432 305 432 320C432 335 425.1 348.4 414.3 357.3C404 365.7 402.5 380.8 410.8 391.1C419.1 401.4 434.3 402.9 444.6 394.6C466.1 376.9 480 350.1 480 320C480 289.9 466.1 263.1 444.5 245.5z" />
                                </svg></span>
                            Text To Speech
                        </li>

                        <!-- Text To Speech -->
                        <div class="sub_links_of_allawn" id="text_to_speech_sub_box" data-set="text_to_speech-sub">
                            <ul>
                                <li class="sole78m" id="contect__50" onclick="link_sole_action(this)" data-set="contect-50">Dashboard</li>
                                <li class="sole78m" id="contect__51" onclick="link_sole_action(this)" data-set="contect-51">Voice Files</li>
                                <li class="sole78m" id="contect__52" onclick="link_sole_action(this)" data-set="contect-52">Manage TTS Template</li>
                                <li class="sole78m" id="contect__53" onclick="link_sole_action(this)" data-set="contect-53">Create Campaign</li>
                                <li class="sole78m" id="contect__54" onclick="link_sole_action(this)" data-set="contect-54">Report</li>
                                <li class="sole78m" id="contect__55" onclick="link_sole_action(this)" data-set="contect-55">Manage Remarks</li>
                            </ul>
                        </div>

                        <li class="subbox_link" id="ai_agent_btn_124" data-set="ai_agent" onclick="show_this_box(this); show_sub_link(this);">
                            <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_11">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                                </svg></span>
                            Ai Agent
                        </li>


                        <!-- AI Agent -->
                        <div class="sub_links_of_allawn" id="ai_agent_sub_box" data-set="ai_agent-sub">
                            <ul>
                                <li class="sole78m" id="contect__56" onclick="link_sole_action(this)" data-set="contect-56">Dashboard</li>
                                <li class="sole78m" id="contect__57" onclick="link_sole_action(this)" data-set="contect-57">AI Agent Campaign</li>
                                <li class="sole78m" id="contect__58" onclick="link_sole_action(this)" data-set="contect-58">Report</li>
                            </ul>
                        </div>

                    </ul>
                </div>

                <div class="line_rola"></div>

                <h6>Utilities</h6>
                <ul class="top_nave_appli">


                    <li class="subbox_link" id="login_btn_124" data-set="login" onclick="show_this_box(this); close_all_sub_links_ha()">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_2">
                                <path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z" />
                            </svg>
                        </span>
                        Login
                    </li>

                </ul>

            </section>

            <span class="hammer_btn" id="haamer_id_adase">
                <div id="haw_linw969">
                    &#9776;
                </div>
                <div id="close_linw969">
                    &#10005;

                </div>
            </span>

            <!-- right side  -->
            <section class="right_section_1 widh_wmob">

                <!-- section 1 overview -->
                <section id="overview_contect_box" class="section_sub_with all_sejmca8974 show_active">
                    1
                </section>

                <!-- section 2 Login -->
                <section id="login_contect_box" class="section_sub_with all_sejmca8974 ">

                    <div class="bhaum-settings-card-2026">

                        <!-- =====================
                                CHANGE EMAIL
                            ====================== -->

                        <form method="post" class="bhaum-settings-form-2026">

                            <h3 class="bhaum-settings-title-2026">
                                Change Email
                            </h3>

                            <div class="bhaum-field-group-2026">

                                <input
                                    type="email"
                                    name="change_email"
                                    value="<?php echo htmlspecialchars($get_data['user_email']); ?>"
                                    placeholder="Enter New Email"
                                    required>

                            </div>

                            <div class="bhaum-field-group-2026">

                                <div class="bhaum-password-wrap-2026">

                                    <input
                                        type="password"
                                        name="email_current_password"
                                        value="<?php echo htmlspecialchars($get_data['user_password']); ?>"
                                        placeholder="Current Password"
                                        class="bhaum-email-pass-field-2026"
                                        required>

                                    <button
                                        type="button"
                                        class="bhaum-password-toggle-2026 bhaum-email-pass-toggle-2026">
                                        Show
                                    </button>

                                </div>

                            </div>

                            <button
                                type="submit"
                                name="change_email_btn"
                                class="bhaum-save-btn-2026">
                                Change Email
                            </button>

                        </form>


                        <!-- =====================
                                CHANGE PASSWORD
                            ====================== -->

                        <form method="post" class="bhaum-settings-form-2026">

                            <h3 class="bhaum-settings-title-2026">
                                Change Password
                            </h3>

                            <div class="bhaum-field-group-2026">

                                <div class="bhaum-password-wrap-2026">

                                    <input
                                        type="password"
                                        name="current_password"
                                        placeholder="Current Password"
                                        class="bhaum-current-pass-field-2026"
                                        required>

                                    <button
                                        type="button"
                                        class="bhaum-password-toggle-2026 bhaum-current-pass-toggle-2026">
                                        Show
                                    </button>

                                </div>

                            </div>

                            <div class="bhaum-field-group-2026">

                                <div class="bhaum-password-wrap-2026">

                                    <input
                                        type="password"
                                        name="new_password"
                                        placeholder="New Password"
                                        class="bhaum-new-pass-field-2026"
                                        required>

                                    <button
                                        type="button"
                                        class="bhaum-password-toggle-2026 bhaum-new-pass-toggle-2026">
                                        Show
                                    </button>

                                </div>

                            </div>

                            <div class="bhaum-field-group-2026">

                                <div class="bhaum-password-wrap-2026">

                                    <input
                                        type="password"
                                        name="confirm_password"
                                        placeholder="Confirm New Password"
                                        class="bhaum-confirm-pass-field-2026"
                                        required>

                                    <button
                                        type="button"
                                        class="bhaum-password-toggle-2026 bhaum-confirm-pass-toggle-2026">
                                        Show
                                    </button>

                                </div>

                            </div>

                            <button
                                type="submit"
                                name="change_password_btn"
                                class="bhaum-save-btn-2026">
                                Change Password
                            </button>

                        </form>

                    </div>

                    <button class="logout_btn noselect" onclick="window.location.href='logout.php'">
                        <span class="text">Logout</span>
                        <span class="icon">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"></path>
                            </svg> -->
                            <svg viewBox="0 0 512 512" width="24" height="24">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                            </svg>
                        </span>
                    </button>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {

                            function bhaumPasswordToggle2026(
                                inputSelector,
                                buttonSelector
                            ) {

                                const input = document.querySelector(inputSelector);
                                const button = document.querySelector(buttonSelector);

                                if (!input || !button) return;

                                button.addEventListener('click', function() {

                                    if (input.type === 'password') {

                                        input.type = 'text';
                                        button.innerText = 'Hide';

                                    } else {

                                        input.type = 'password';
                                        button.innerText = 'Show';

                                    }

                                });

                            }

                            bhaumPasswordToggle2026(
                                '.bhaum-email-pass-field-2026',
                                '.bhaum-email-pass-toggle-2026'
                            );

                            bhaumPasswordToggle2026(
                                '.bhaum-current-pass-field-2026',
                                '.bhaum-current-pass-toggle-2026'
                            );

                            bhaumPasswordToggle2026(
                                '.bhaum-new-pass-field-2026',
                                '.bhaum-new-pass-toggle-2026'
                            );

                            bhaumPasswordToggle2026(
                                '.bhaum-confirm-pass-field-2026',
                                '.bhaum-confirm-pass-toggle-2026'
                            );

                        });
                    </script>



                </section>

                <!-- section 3 Dashbord -->
                <section id="dashbord_contect_box" class="section_sub_with all_sejmca8974 ">
                    3
                </section>

                <!-- section 4 home -->
                <section id="sms_contect_box" class="section_sub_with all_sejmca8974 ">
                    4
                </section>

                <!-- section 5 RCS -->
                <section id="rcs_contect_box" class="section_sub_with all_sejmca8974 ">
                    5
                </section>

                <!-- section 6 Whatsapp -->
                <section id="whatsapp_contect_box" class="section_sub_with all_sejmca8974 ">
                    6
                </section>

                <!-- section 7 Voice -->
                <section id="voice_contect_box" class="section_sub_with all_sejmca8974 ">
                    7
                </section>

                <!-- section 8 IVR -->
                <section id="ivr_contect_box" class="section_sub_with all_sejmca8974 ">
                    8
                </section>

                <!-- section 9 Click To Call -->
                <section id="click_to_call_contect_box" class="section_sub_with all_sejmca8974 ">
                    9
                </section>

                <!-- section 10 Text To Speech -->
                <section id="text_to_speech_contect_box" class="section_sub_with all_sejmca8974 ">
                    10
                </section>

                <!-- section 11 Ai Agent -->
                <section id="ai_agent_contect_box" class="section_sub_with all_sejmca8974 ">
                    11
                </section>

                <!-- section 12 blog -->
                <section id="journeys_contect_box" class="section_sub_with all_sejmca8974 ">

                    <div id="orders" class="page " style="width: 80%;margin: auto;">
                        <div
                            style="display: flex; justify-content: space-between; margin-bottom: 25px; flex-wrap: wrap; gap: 10px;">
                            <h2>Blog Management</h2>
                            <!-- <button class="btn btn-outline">Export CSV</button> -->
                        </div>

                        <div class="card">
                            <div class="table-container">
                                <!-- blog contect add start here -->

                                <div class="blog_nav">
                                    <ul>
                                        <li class="search_btr" style="">
                                            <label for="Search"></label>
                                            <!-- <input type="text" placeholder="Enter the Blog ID or Title"> -->
                                        </li>
                                        <li id="adeac">
                                            <button id="btn_add_sadcarlod" class="btn btn-primary bhaum-save-btn-2026" onclick="
                                        let form=document.getElementById('add_newblog_form');
                                        let btn=document.getElementById('btn_add_sadcarlod');
                                        let blog_cards=document.getElementById('vaweca');

                                        form.classList.toggle('show_add_from');

                                        blog_cards.classList.toggle('show_add_from')
                                        btn.innerHTML=form.classList.contains('show_add_from')
                                        ? 'Add New Blog'
                                        : 'Cancel';
                                        ">
                                                Add New Blog
                                            </button>

                                        </li>
                                        <li id="btn_update_sadcarlod" class="show_add_from">

                                            <div style="padding: 0 20px;display: flex;gap: 10px;">
                                                <div>
                                                    <button class="btn btn-primary" onclick="cancel_update_blog_btn()">
                                                        Cancel
                                                    </button>
                                                </div>
                                                <div id="btn_update_sadcarlodasas" class="show_add_from">
                                                    <button class="btn btn-primary" id="delete_update_blog_sd">
                                                        Delete Blog
                                                    </button>
                                                </div>
                                            </div>

                                        </li>

                                    </ul>
                                </div>

                                <!-- line -->
                                <div class="devidedLine"> Blogs Contect </div>

                                <!-- blogs card -->
                                <div class="show_bolg" id="vaweca">
                                    <div class="card_into">

                                        <!-- cards -->
                                        <?php

                                        $sql = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 8";
                                        $result = mysqli_query($mydb, $sql);

                                        while ($blog = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <div class="blog_card">

                                                <div>
                                                    <img src="assets/blog/<?php echo $blog['blog_img']; ?>" alt="<?php echo $blog['blog_title']; ?>">
                                                </div>

                                                <div class="blog_content">

                                                    <div class="blog_meta">
                                                        <span class="blog_author">
                                                            <?php echo $blog['blog_author']; ?>
                                                        </span>

                                                        <span>
                                                            <!-- <?php echo date("d M Y", $blog['created_at']); ?> -->
                                                            <?php
                                                            if ($blog['updated_at'] == "Null") {
                                                                echo timeAgo($blog['created_at']);
                                                            } else {
                                                                echo timeAgo($blog['updated_at']) . " Updated";
                                                            }
                                                            ?>
                                                        </span>
                                                    </div>

                                                    <h3 class="blog_title">
                                                        <?php echo $blog['blog_title']; ?>
                                                    </h3>

                                                    <p class="blog_desc">
                                                        <?php echo substr(strip_tags($blog['blog_content']), 0, 120); ?>...
                                                    </p>

                                                    <button onclick="edit_blog('<?php echo $blog['blog_slug']; ?>')" class="blog_btn">
                                                        Edit Blog
                                                    </button>

                                                </div>

                                            </div>

                                        <?php } ?>



                                    </div>
                                </div>

                                <!-- add new form -->
                                <div id="add_newblog_form" class="add_fromw show_add_from">
                                    <section class="blog-upload-section">
                                        <div class="blog-upload-container">
                                            <h1 class="blog-upload-title">Create New Blog</h1>

                                            <form id="blogUploadForm" method="POST" enctype="multipart/form-data"
                                                onsubmit="document.getElementById('blogContentHidden').value = document.getElementById('blogContentEditor').innerHTML;">
                                                <input type="hidden" name="form_action" value="add_blog">

                                                <!-- Image Upload -->
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label">Blog Image *</label>
                                                    <div class="blog-image-upload-area" id="blogImageUploadArea">
                                                        <input type="file" name="blog_image" id="blogImageInput"
                                                            accept="image/*" required>
                                                        <div class="blog-image-placeholder" id="blogImagePlaceholder">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                                height="48" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1.5">
                                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                                                <circle cx="8.5" cy="8.5" r="1.5" />
                                                                <polyline points="21 15 16 10 5 21" />
                                                            </svg>
                                                            <p>Click or drag image here</p>
                                                        </div>
                                                        <img id="blogImagePreview" class="blog-image-preview" alt="Preview">
                                                    </div>
                                                </div>

                                                <!-- Blog Title -->
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogTitle">Blog Title *</label>
                                                    <input type="text" name="blog_title" id="blogTitle"
                                                        class="blog-upload-input" placeholder="Enter blog title" required>
                                                </div>

                                                <!-- Blog Author -->
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogAuthor">Author Name *</label>
                                                    <input type="text" name="blog_author" id="blogAuthor"
                                                        class="blog-upload-input" placeholder="Enter author name" required>
                                                </div>

                                                <!-- Blog Content Editor -->
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label">Blog Content *</label>

                                                    <!-- Toolbar -->
                                                    <div class="blog-editor-toolbar">
                                                        <select id="blogFontSize" class="blog-toolbar-select" title="Font Size">
                                                            <option value="1">Small</option>
                                                            <option value="3" selected>Normal</option>
                                                            <option value="5">Large</option>
                                                            <option value="7">Extra Large</option>
                                                        </select>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" data-command="bold" title="Bold"><strong>B</strong></button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="italic" title="Italic"><em>I</em></button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="underline" title="Underline"><u>U</u></button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="strikeThrough" title="Strikethrough"><s>S</s></button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" data-command="justifyLeft" title="Align Left">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M3 3h18v2H3V3zm0 4h12v2H3V7zm0 4h18v2H3v-2zm0 4h12v2H3v-2zm0 4h18v2H3v-2z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="justifyCenter" title="Align Center">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M3 3h18v2H3V3zm3 4h12v2H6V7zm-3 4h18v2H3v-2zm3 4h12v2H6v-2zm-3 4h18v2H3v-2z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="justifyRight" title="Align Right">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M3 3h18v2H3V3zm6 4h12v2H9V7zm-6 4h18v2H3v-2zm6 4h12v2H9v-2zm-6 4h18v2H3v-2z" />
                                                            </svg>
                                                        </button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" data-command="insertUnorderedList" title="Bullet List">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M4 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm4-15h14v2H8V5zm0 8h14v2H8v-2zm0 8h14v2H8v-2z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="insertOrderedList" title="Numbered List">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M2 5h2v2H3v1h2v1H2V7.5h1v-1H2V5zm0 7h2.5v.5H3v1h1.5V14H2v-2zm0 6h2v.5H3v1h1v.5H2v-1.5h.5v-1H2V18zM8 5h14v2H8V5zm0 6h14v2H8v-2zm0 6h14v2H8v-2z" />
                                                            </svg>
                                                        </button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" id="blogLinkBtn" title="Insert Link">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                                            </svg>
                                                        </button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <div class="blog-color-picker-wrap">
                                                            <button type="button" class="blog-toolbar-btn blog-color-btn" title="Text Color">
                                                                <span class="blog-color-icon">A</span>
                                                                <span class="blog-color-bar" id="blogTextColorBar"></span>
                                                            </button>
                                                            <input type="color" id="blogTextColor" class="blog-color-input" value="#000000">
                                                        </div>

                                                        <div class="blog-color-picker-wrap">
                                                            <button type="button" class="blog-toolbar-btn blog-color-btn" title="Background Color">
                                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                                                </svg>
                                                                <span class="blog-color-bar" id="blogBgColorBar"></span>
                                                            </button>
                                                            <input type="color" id="blogBgColor" class="blog-color-input" value="#ffffff">
                                                        </div>
                                                    </div>

                                                    <!-- Content Editable Area -->
                                                    <div id="blogContentEditor" class="blog-content-editor"
                                                        contenteditable="true" placeholder="Write your blog content here...">
                                                    </div>
                                                    <input type="hidden" name="blog_content1252" id="blogContentHidden">
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="blog-upload-actions">
                                                    <button type="submit" name="blog_submit" class="blog-submit-btn">
                                                        <span class="blog-btn-text">Publish Blog</span>
                                                        <span class="blog-btn-loader"></span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </section>

                                    <!-- Link Modal -->
                                    <div class="blog-modal-overlay" id="blogLinkModal">
                                        <div class="blog-modal">
                                            <div class="blog-modal-header">
                                                <h3>Insert Link</h3>
                                                <button type="button" class="blog-modal-close" id="blogModalClose">&times;</button>
                                            </div>
                                            <div class="blog-modal-body">
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogLinkUrl">URL</label>
                                                    <input type="url" id="blogLinkUrl" class="blog-upload-input" placeholder="https://example.com">
                                                </div>
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogLinkText">Link Text</label>
                                                    <input type="text" id="blogLinkText" class="blog-upload-input" placeholder="Click here">
                                                </div>
                                            </div>
                                            <div class="blog-modal-footer">
                                                <button type="button" class="blog-modal-btn blog-modal-cancel" id="blogLinkCancel">Cancel</button>
                                                <button type="button" class="blog-modal-btn blog-modal-confirm" id="blogLinkConfirm">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- update blog  -->
                                <div id="update_blog_form" class="add_fromw show_add_from">
                                    <section class="blog-upload-section">
                                        <div class="blog-upload-container">
                                            <h1 class="blog-upload-title">Update Blog</h1>

                                            <form id="blogUploadForm2" method="POST" enctype="multipart/form-data"
                                                onsubmit="document.getElementById('blogContentHidden2').value = document.getElementById('blogContentEditor2').innerHTML;">

                                                <input type="text" name="blog_id_name" id="blog_id_update" readonly hidden>

                                                <input type="hidden" name="form_action" value="update_blog">
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label">Blog Image *</label>
                                                    <div class="blog-image-upload-area" id="blogImageUploadArea2">
                                                        <input type="file" name="blog_image2" id="blogImageInput2" accept="image/*">
                                                        <div class="blog-image-placeholder" id="blogImagePlaceholder2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="48"
                                                                height="48" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="1.5">
                                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                                                                <circle cx="8.5" cy="8.5" r="1.5" />
                                                                <polyline points="21 15 16 10 5 21" />
                                                            </svg>
                                                            <p>Click or drag image here</p>
                                                        </div>
                                                        <img id="blogImagePreview2" class="blog-image-preview" alt="Preview">
                                                    </div>
                                                </div>

                                                <div style="width: 170px;height: 180px;">
                                                    <img id="blogimg2" alt="" style="object-fit: cover;width: 100%;">
                                                </div>

                                                <!-- Blog Title -->
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogTitle2">Blog Title *</label>
                                                    <input type="text" name="blog_title2" id="blogTitle2"
                                                        class="blog-upload-input" placeholder="Enter blog title" required>
                                                </div>

                                                <!-- Blog Author -->
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogAuthor2">Author Name *</label>
                                                    <input type="text" name="blog_author2" id="blogAuthor2"
                                                        class="blog-upload-input" placeholder="Enter author name" required>
                                                </div>

                                                <!-- Blog Content Editor -->
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label">Blog Content *</label>

                                                    <!-- Toolbar -->
                                                    <div class="blog-editor-toolbar">
                                                        <select id="blogFontSize2" class="blog-toolbar-select" title="Font Size">
                                                            <option value="1">Small</option>
                                                            <option value="3" selected>Normal</option>
                                                            <option value="5">Large</option>
                                                            <option value="7">Extra Large</option>
                                                        </select>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" data-command="bold" title="Bold"><strong>B</strong></button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="italic" title="Italic"><em>I</em></button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="underline" title="Underline"><u>U</u></button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="strikeThrough" title="Strikethrough"><s>S</s></button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" data-command="justifyLeft" title="Align Left">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M3 3h18v2H3V3zm0 4h12v2H3V7zm0 4h18v2H3v-2zm0 4h12v2H3v-2zm0 4h18v2H3v-2z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="justifyCenter" title="Align Center">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M3 3h18v2H3V3zm3 4h12v2H6V7zm-3 4h18v2H3v-2zm3 4h12v2H6v-2zm-3 4h18v2H3v-2z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="justifyRight" title="Align Right">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M3 3h18v2H3V3zm6 4h12v2H9V7zm-6 4h18v2H3v-2zm6 4h12v2H9v-2zm-6 4h18v2H3v-2z" />
                                                            </svg>
                                                        </button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" data-command="insertUnorderedList" title="Bullet List">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M4 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm4-15h14v2H8V5zm0 8h14v2H8v-2zm0 8h14v2H8v-2z" />
                                                            </svg>
                                                        </button>
                                                        <button type="button" class="blog-toolbar-btn" data-command="insertOrderedList" title="Numbered List">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                <path d="M2 5h2v2H3v1h2v1H2V7.5h1v-1H2V5zm0 7h2.5v.5H3v1h1.5V14H2v-2zm0 6h2v.5H3v1h1v.5H2v-1.5h.5v-1H2V18zM8 5h14v2H8V5zm0 6h14v2H8v-2zm0 6h14v2H8v-2z" />
                                                            </svg>
                                                        </button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <button type="button" class="blog-toolbar-btn" id="blogLinkBtn2" title="Insert Link">
                                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                                            </svg>
                                                        </button>

                                                        <div class="blog-toolbar-divider"></div>

                                                        <div class="blog-color-picker-wrap">
                                                            <button type="button" class="blog-toolbar-btn blog-color-btn" title="Text Color">
                                                                <span class="blog-color-icon">A</span>
                                                                <span class="blog-color-bar" id="blogTextColorBar2"></span>
                                                            </button>
                                                            <input type="color" id="blogTextColor2" class="blog-color-input" value="#000000">
                                                        </div>

                                                        <div class="blog-color-picker-wrap">
                                                            <button type="button" class="blog-toolbar-btn blog-color-btn" title="Background Color">
                                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" />
                                                                </svg>
                                                                <span class="blog-color-bar" id="blogBgColorBar2"></span>
                                                            </button>
                                                            <input type="color" id="blogBgColor2" class="blog-color-input" value="#ffffff">
                                                        </div>
                                                    </div>

                                                    <!-- Content Editable Area -->
                                                    <div id="blogContentEditor2" class="blog-content-editor"
                                                        contenteditable="true" placeholder="Write your blog content here...">
                                                    </div>
                                                    <input type="hidden" name="blog_content2" id="blogContentHidden2">
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="blog-upload-actions">
                                                    <button type="submit" name="update_blog15515" class="blog-submit-btn">
                                                        <span class="blog-btn-text">Update Blog</span>
                                                        <span class="blog-btn-loader"></span>
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </section>

                                    <!-- Link Modal -->
                                    <div class="blog-modal-overlay" id="blogLinkModal2">
                                        <div class="blog-modal">
                                            <div class="blog-modal-header">
                                                <h3>Insert Link</h3>
                                                <button type="button" class="blog-modal-close" id="blogModalClose2">&times;</button>
                                            </div>
                                            <div class="blog-modal-body">
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogLinkUrl2">URL</label>
                                                    <input type="url" id="blogLinkUrl2" class="blog-upload-input" placeholder="https://example.com">
                                                </div>
                                                <div class="blog-upload-group">
                                                    <label class="blog-upload-label" for="blogLinkText2">Link Text</label>
                                                    <input type="text" id="blogLinkText2" class="blog-upload-input" placeholder="Click here">
                                                </div>
                                            </div>
                                            <div class="blog-modal-footer">
                                                <button type="button" class="blog-modal-btn blog-modal-cancel" id="blogLinkCancel2">Cancel</button>
                                                <button type="button" class="blog-modal-btn blog-modal-confirm" id="blogLinkConfirm2">Insert</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- blog contect add end here -->

                            </div>
                        </div>
                    </div>


                    <script>
                        function edit_blog(slug) {
                            let update_blog_form = document.getElementById("update_blog_form")
                            let card_into = document.getElementById("vaweca")

                            let value = slug;

                            edit_blog_api(value)


                            document.getElementById("adeac").classList.add("show_add_from")
                            document.getElementById("btn_update_sadcarlod").classList.remove("show_add_from")
                            card_into.classList.add("show_add_from")
                            update_blog_form.classList.remove("show_add_from")

                        }

                        function cancel_update_blog() {
                            // let update_blog_form = document.getElementById("update_blog_form")
                            // let card_into = document.getElementById("vaweca")

                            // let detalis_box = document.getElementById("blg-modal-bg")
                            // let blog_img = document.getElementById("blg-modal-img");
                            // let blog_title = document.getElementById("blg-modal__title");
                            // let blg_meta_data = document.getElementById("blg-modal__meta");
                            // let blg_content_long_desc = document.getElementById("blg-modal-content");

                            // detalis_box.style.opacity = '0';
                            // detalis_box.style.pointerEvents = 'none';

                            // blog_img.src = `assets/blog/`;
                            // blog_title.innerHTML = "";
                            // blg_meta_data.innerHTML = "";
                            // blg_content_long_desc.innerHTML = "";

                            // document.getElementById("adeac").classList.remove("show_add_from")
                            // document.getElementById("btn_update_sadcarlod").classList.add("show_add_from")
                            // card_into.classList.remove("show_add_from")
                            // update_blog_form.classList.add("show_add_from")
                        }
                    </script>

                </section>


                <!-- sublink box 1 -->
                <section id="contect_1_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa ">
                    sub 1
                </section>

                <!-- sublink box 2 -->
                <section id="contect_2_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa ">
                    sub 2
                </section>

                <!-- sublink box 3 -->
                <section id="contect_3_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa ">
                    sub 3
                </section>

                <!-- sublink box 4 -->
                <section id="contect_4_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    4
                </section>

                <!-- sublink box 5 -->
                <section id="contect_5_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    5
                </section>

                <!-- sublink box 6 -->
                <section id="contect_6_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    6
                </section>

                <!-- sublink box 7 -->
                <section id="contect_7_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    7
                </section>

                <!-- sublink box 8 -->
                <section id="contect_8_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    8
                </section>

                <!-- sublink box 9 -->
                <section id="contect_9_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    9
                </section>

                <!-- sublink box 10 -->
                <section id="contect_10_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    10
                </section>

                <!-- sublink box 11 -->
                <section id="contect_11_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    11
                </section>

                <!-- sublink box 12 -->
                <section id="contect_12_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    12
                </section>

                <!-- sublink box 13 -->
                <section id="contect_13_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    13
                </section>

                <!-- sublink box 14 -->
                <section id="contect_14_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    14
                </section>

                <!-- sublink box 15 -->
                <section id="contect_15_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    15
                </section>

                <!-- sublink box 16 -->
                <section id="contect_16_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    16
                </section>

                <!-- sublink box 17 -->
                <section id="contect_17_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    17
                </section>

                <!-- sublink box 18 -->
                <section id="contect_18_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    18
                </section>

                <!-- sublink box 19 -->
                <section id="contect_19_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    19
                </section>

                <!-- sublink box 20 -->
                <section id="contect_20_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    20
                </section>

                <!-- sublink box 21 -->
                <section id="contect_21_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    21
                </section>

                <!-- sublink box 22 -->
                <section id="contect_22_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    22
                </section>

                <!-- sublink box 23 -->
                <section id="contect_23_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    23
                </section>

                <!-- sublink box 24 -->
                <section id="contect_24_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    24
                </section>

                <!-- sublink box 25 -->
                <section id="contect_25_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    25
                </section>

                <!-- sublink box 26 -->
                <section id="contect_26_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    26
                </section>

                <!-- sublink box 27 -->
                <section id="contect_27_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    27
                </section>

                <!-- sublink box 28 -->
                <section id="contect_28_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    28
                </section>

                <!-- sublink box 29 -->
                <section id="contect_29_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    29
                </section>

                <!-- sublink box 30 -->
                <section id="contect_30_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    30
                </section>

                <!-- sublink box 31 -->
                <section id="contect_31_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    31
                </section>

                <!-- sublink box 32 -->
                <section id="contect_32_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    32
                </section>

                <!-- sublink box 33 -->
                <section id="contect_33_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    33
                </section>

                <!-- sublink box 34 -->
                <section id="contect_34_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    34
                </section>

                <!-- sublink box 35 -->
                <section id="contect_35_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    35
                </section>

                <!-- sublink box 36 -->
                <section id="contect_36_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    36
                </section>

                <!-- sublink box 37 -->
                <section id="contect_37_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    37
                </section>

                <!-- sublink box 38 -->
                <section id="contect_38_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    38
                </section>

                <!-- sublink box 39 -->
                <section id="contect_39_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    39
                </section>

                <!-- sublink box 40 -->
                <section id="contect_40_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    40
                </section>

                <!-- sublink box 41 -->
                <section id="contect_41_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    41
                </section>

                <!-- sublink box 42 -->
                <section id="contect_42_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    42
                </section>

                <!-- sublink box 43 -->
                <section id="contect_43_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    43
                </section>

                <!-- sublink box 44 -->
                <section id="contect_44_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    44
                </section>

                <!-- sublink box 45 -->
                <section id="contect_45_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    45
                </section>

                <!-- sublink box 46 -->
                <section id="contect_46_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    46
                </section>

                <!-- sublink box 47 -->
                <section id="contect_47_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    47
                </section>

                <!-- sublink box 48 -->
                <section id="contect_48_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    48
                </section>

                <!-- sublink box 49 -->
                <section id="contect_49_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    49
                </section>

                <!-- sublink box 50 -->
                <section id="contect_50_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    50
                </section>

                <!-- sublink box 51 -->
                <section id="contect_51_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    51
                </section>

                <!-- sublink box 52 -->
                <section id="contect_52_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    52
                </section>

                <!-- sublink box 53 -->
                <section id="contect_53_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    53
                </section>

                <!-- sublink box 54 -->
                <section id="contect_54_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    54
                </section>

                <!-- sublink box 55 -->
                <section id="contect_55_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    55
                </section>

                <!-- sublink box 56 -->
                <section id="contect_56_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    56
                </section>

                <!-- sublink box 57 -->
                <section id="contect_57_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    57
                </section>

                <!-- sublink box 58 -->
                <section id="contect_58_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    58
                </section>

                <!-- sublink box 59 -->
                <section id="contect_59_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    59
                </section>

                <!-- sublink box 60 -->
                <section id="contect_60_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                    60
                </section>


            </section>

        </section>
        <script>
            const haamer_id_btn = document.getElementById("haamer_id_adase");
            let dash_box_slie = document.getElementById("left_section_box");
            let close_linw969 = document.getElementById("close_linw969");
            let haw_linw969 = document.getElementById("haw_linw969");

            // if koi btn pa click kar to ya chale ga 
            haamer_id_btn.addEventListener("click", () => {

                dash_box_slie.classList.toggle("dashbord_revile_gl");
                haamer_id_btn.classList.toggle("haamer_btn_nikw5");

                if (haamer_id_btn.classList.contains("haamer_btn_nikw5")) {

                    close_linw969.style.display = "flex";
                    haw_linw969.style.display = "none";

                } else {

                    close_linw969.style.display = "none";
                    haw_linw969.style.display = "flex";

                }

            });

            function show_this_box(el) {

                let overview_box_show = document.getElementById("overview_contect_box");
                let login_contect_box = document.getElementById("login_contect_box");
                let dashbord_contect_box = document.getElementById("dashbord_contect_box");
                let sms_contect_box = document.getElementById("sms_contect_box");
                let rcs_contect_box = document.getElementById("rcs_contect_box");
                let whatsapp_contect_box = document.getElementById("whatsapp_contect_box");
                let voice_contect_box = document.getElementById("voice_contect_box");
                let ivr_contect_box = document.getElementById("ivr_contect_box");
                let click_to_call_contect_box = document.getElementById("click_to_call_contect_box");
                let text_to_speech_contect_box = document.getElementById("text_to_speech_contect_box");
                let ai_agent_contect_box = document.getElementById("ai_agent_contect_box");
                let journeys_contect_box = document.getElementById("journeys_contect_box");


                // btn sole here 
                let overview_btn_124 = document.getElementById("overview_btn_124");
                let login_btn_124 = document.getElementById("login_btn_124");
                let dashbord_btn_124 = document.getElementById("dashbord_btn_124");

                let sms_btn_124 = document.getElementById("sms_btn_124");
                let rcs_btn_124 = document.getElementById("rcs_btn_124");
                let whatsapp_btn_124 = document.getElementById("whatsapp_btn_124");
                let voice_btn_124 = document.getElementById("voice_btn_124");
                let ivr_btn_124 = document.getElementById("ivr_btn_124");
                let click_to_call_btn_124 = document.getElementById("click_to_call_btn_124");
                let text_to_speech_btn_124 = document.getElementById("text_to_speech_btn_124");
                let ai_agent_btn_124 = document.getElementById("ai_agent_btn_124");

                let journeys_btn_124 = document.getElementById("journeys_btn_124");


                // if koi btn pa click kar to ya chale ga 
                haamer_id_btn.addEventListener("click", () => {

                    dash_box_slie.classList.toggle("dashbord_revile_gl");
                    haamer_id_btn.classList.toggle("haamer_btn_nikw5");

                    if (haamer_id_btn.classList.contains("haamer_btn_nikw5")) {

                        close_linw969.style.display = "flex";
                        haw_linw969.style.display = "none";

                    } else {

                        close_linw969.style.display = "none";
                        haw_linw969.style.display = "flex";

                    }

                });


                document.querySelectorAll('.subbox_link').forEach(item => {
                    item.classList.remove('active');

                    let svg = item.querySelector('.sub_set_iocn_svg');

                    if (svg) {
                        svg.classList.remove('svg_icon_color-active');
                    }
                });

                el.classList.add('active');

                let icon = el.querySelector('.sub_set_iocn_svg');

                if (icon) {
                    icon.classList.add('svg_icon_color-active');
                }

                // all sub btn 
                let contect__1 = document.getElementById("contect__1");
                let contect__2 = document.getElementById("contect__2");
                let contect__3 = document.getElementById("contect__3");
                let contect__4 = document.getElementById("contect__4");
                let contect__5 = document.getElementById("contect__5");
                let contect__6 = document.getElementById("contect__6");
                let contect__7 = document.getElementById("contect__7");
                let contect__8 = document.getElementById("contect__8");
                let contect__9 = document.getElementById("contect__9");
                let contect__10 = document.getElementById("contect__10");
                let contect__11 = document.getElementById("contect__11");
                let contect__12 = document.getElementById("contect__12");
                let contect__13 = document.getElementById("contect__13");
                let contect__14 = document.getElementById("contect__14");
                let contect__15 = document.getElementById("contect__15");
                let contect__16 = document.getElementById("contect__16");
                let contect__17 = document.getElementById("contect__17");
                let contect__18 = document.getElementById("contect__18");
                let contect__19 = document.getElementById("contect__19");
                let contect__20 = document.getElementById("contect__20");
                let contect__21 = document.getElementById("contect__21");
                let contect__22 = document.getElementById("contect__22");
                let contect__23 = document.getElementById("contect__23");
                let contect__24 = document.getElementById("contect__24");
                let contect__25 = document.getElementById("contect__25");
                let contect__26 = document.getElementById("contect__26");
                let contect__27 = document.getElementById("contect__27");
                let contect__28 = document.getElementById("contect__28");
                let contect__29 = document.getElementById("contect__29");
                let contect__30 = document.getElementById("contect__30");
                let contect__31 = document.getElementById("contect__31");
                let contect__32 = document.getElementById("contect__32");
                let contect__33 = document.getElementById("contect__33");
                let contect__34 = document.getElementById("contect__34");
                let contect__35 = document.getElementById("contect__35");
                let contect__36 = document.getElementById("contect__36");
                let contect__37 = document.getElementById("contect__37");
                let contect__38 = document.getElementById("contect__38");
                let contect__39 = document.getElementById("contect__39");
                let contect__40 = document.getElementById("contect__40");
                let contect__41 = document.getElementById("contect__41");
                let contect__42 = document.getElementById("contect__42");
                let contect__43 = document.getElementById("contect__43");
                let contect__44 = document.getElementById("contect__44");
                let contect__45 = document.getElementById("contect__45");
                let contect__46 = document.getElementById("contect__46");
                let contect__47 = document.getElementById("contect__47");
                let contect__48 = document.getElementById("contect__48");
                let contect__49 = document.getElementById("contect__49");
                let contect__50 = document.getElementById("contect__50");
                let contect__51 = document.getElementById("contect__51");
                let contect__52 = document.getElementById("contect__52");
                let contect__53 = document.getElementById("contect__53");
                let contect__54 = document.getElementById("contect__54");
                let contect__55 = document.getElementById("contect__55");
                let contect__56 = document.getElementById("contect__56");
                let contect__57 = document.getElementById("contect__57");
                let contect__58 = document.getElementById("contect__58");
                let contect__59 = document.getElementById("contect__59");
                let contect__60 = document.getElementById("contect__60");

                contect__1.classList.remove("active");
                contect__2.classList.remove("active");
                contect__3.classList.remove("active");
                contect__4.classList.remove("active");
                contect__5.classList.remove("active");
                contect__6.classList.remove("active");
                contect__7.classList.remove("active");
                contect__8.classList.remove("active");
                contect__9.classList.remove("active");
                contect__10.classList.remove("active");
                contect__11.classList.remove("active");
                contect__12.classList.remove("active");
                contect__13.classList.remove("active");
                contect__14.classList.remove("active");
                contect__15.classList.remove("active");
                contect__16.classList.remove("active");
                contect__17.classList.remove("active");
                contect__18.classList.remove("active");
                contect__19.classList.remove("active");
                contect__20.classList.remove("active");
                contect__21.classList.remove("active");
                contect__22.classList.remove("active");
                contect__23.classList.remove("active");
                contect__24.classList.remove("active");
                contect__25.classList.remove("active");
                contect__26.classList.remove("active");
                contect__27.classList.remove("active");
                contect__28.classList.remove("active");
                contect__29.classList.remove("active");
                contect__30.classList.remove("active");
                contect__31.classList.remove("active");
                contect__32.classList.remove("active");
                contect__33.classList.remove("active");
                contect__34.classList.remove("active");
                contect__35.classList.remove("active");
                contect__36.classList.remove("active");
                contect__37.classList.remove("active");
                contect__38.classList.remove("active");
                contect__39.classList.remove("active");
                contect__40.classList.remove("active");
                contect__41.classList.remove("active");
                contect__42.classList.remove("active");
                contect__43.classList.remove("active");
                contect__44.classList.remove("active");
                contect__45.classList.remove("active");
                contect__46.classList.remove("active");
                contect__47.classList.remove("active");
                contect__48.classList.remove("active");
                contect__49.classList.remove("active");
                contect__50.classList.remove("active");
                contect__51.classList.remove("active");
                contect__52.classList.remove("active");
                contect__53.classList.remove("active");
                contect__54.classList.remove("active");
                contect__55.classList.remove("active");
                contect__56.classList.remove("active");
                contect__57.classList.remove("active");
                contect__58.classList.remove("active");
                contect__59.classList.remove("active");
                contect__60.classList.remove("active");
                // all sub boxs 
                let contect_box_1 = document.getElementById("contect_1_contect_box");
                let contect_box_2 = document.getElementById("contect_2_contect_box");
                let contect_box_3 = document.getElementById("contect_3_contect_box");
                let contect_box_4 = document.getElementById("contect_4_contect_box");
                let contect_box_5 = document.getElementById("contect_5_contect_box");
                let contect_box_6 = document.getElementById("contect_6_contect_box");
                let contect_box_7 = document.getElementById("contect_7_contect_box");
                let contect_box_8 = document.getElementById("contect_8_contect_box");
                let contect_box_9 = document.getElementById("contect_9_contect_box");
                let contect_box_10 = document.getElementById("contect_10_contect_box");
                let contect_box_11 = document.getElementById("contect_11_contect_box");
                let contect_box_12 = document.getElementById("contect_12_contect_box");
                let contect_box_13 = document.getElementById("contect_13_contect_box");
                let contect_box_14 = document.getElementById("contect_14_contect_box");
                let contect_box_15 = document.getElementById("contect_15_contect_box");
                let contect_box_16 = document.getElementById("contect_16_contect_box");
                let contect_box_17 = document.getElementById("contect_17_contect_box");
                let contect_box_18 = document.getElementById("contect_18_contect_box");
                let contect_box_19 = document.getElementById("contect_19_contect_box");
                let contect_box_20 = document.getElementById("contect_20_contect_box");
                let contect_box_21 = document.getElementById("contect_21_contect_box");
                let contect_box_22 = document.getElementById("contect_22_contect_box");
                let contect_box_23 = document.getElementById("contect_23_contect_box");
                let contect_box_24 = document.getElementById("contect_24_contect_box");
                let contect_box_25 = document.getElementById("contect_25_contect_box");
                let contect_box_26 = document.getElementById("contect_26_contect_box");
                let contect_box_27 = document.getElementById("contect_27_contect_box");
                let contect_box_28 = document.getElementById("contect_28_contect_box");
                let contect_box_29 = document.getElementById("contect_29_contect_box");
                let contect_box_30 = document.getElementById("contect_30_contect_box");
                let contect_box_31 = document.getElementById("contect_31_contect_box");
                let contect_box_32 = document.getElementById("contect_32_contect_box");
                let contect_box_33 = document.getElementById("contect_33_contect_box");
                let contect_box_34 = document.getElementById("contect_34_contect_box");
                let contect_box_35 = document.getElementById("contect_35_contect_box");
                let contect_box_36 = document.getElementById("contect_36_contect_box");
                let contect_box_37 = document.getElementById("contect_37_contect_box");
                let contect_box_38 = document.getElementById("contect_38_contect_box");
                let contect_box_39 = document.getElementById("contect_39_contect_box");
                let contect_box_40 = document.getElementById("contect_40_contect_box");
                let contect_box_41 = document.getElementById("contect_41_contect_box");
                let contect_box_42 = document.getElementById("contect_42_contect_box");
                let contect_box_43 = document.getElementById("contect_43_contect_box");
                let contect_box_44 = document.getElementById("contect_44_contect_box");
                let contect_box_45 = document.getElementById("contect_45_contect_box");
                let contect_box_46 = document.getElementById("contect_46_contect_box");
                let contect_box_47 = document.getElementById("contect_47_contect_box");
                let contect_box_48 = document.getElementById("contect_48_contect_box");
                let contect_box_49 = document.getElementById("contect_49_contect_box");
                let contect_box_50 = document.getElementById("contect_50_contect_box");
                let contect_box_51 = document.getElementById("contect_51_contect_box");
                let contect_box_52 = document.getElementById("contect_52_contect_box");
                let contect_box_53 = document.getElementById("contect_53_contect_box");
                let contect_box_54 = document.getElementById("contect_54_contect_box");
                let contect_box_55 = document.getElementById("contect_55_contect_box");
                let contect_box_56 = document.getElementById("contect_56_contect_box");
                let contect_box_57 = document.getElementById("contect_57_contect_box");
                let contect_box_58 = document.getElementById("contect_58_contect_box");
                let contect_box_59 = document.getElementById("contect_59_contect_box");
                let contect_box_60 = document.getElementById("contect_60_contect_box");


                contect_box_1.classList.remove("show_active");
                contect_box_2.classList.remove("show_active");
                contect_box_3.classList.remove("show_active");
                contect_box_4.classList.remove("show_active");
                contect_box_5.classList.remove("show_active");
                contect_box_6.classList.remove("show_active");
                contect_box_7.classList.remove("show_active");
                contect_box_8.classList.remove("show_active");
                contect_box_9.classList.remove("show_active");
                contect_box_10.classList.remove("show_active");
                contect_box_11.classList.remove("show_active");
                contect_box_12.classList.remove("show_active");
                contect_box_13.classList.remove("show_active");
                contect_box_14.classList.remove("show_active");
                contect_box_15.classList.remove("show_active");
                contect_box_16.classList.remove("show_active");
                contect_box_17.classList.remove("show_active");
                contect_box_18.classList.remove("show_active");
                contect_box_19.classList.remove("show_active");
                contect_box_20.classList.remove("show_active");
                contect_box_21.classList.remove("show_active");
                contect_box_22.classList.remove("show_active");
                contect_box_23.classList.remove("show_active");
                contect_box_24.classList.remove("show_active");
                contect_box_25.classList.remove("show_active");
                contect_box_26.classList.remove("show_active");
                contect_box_27.classList.remove("show_active");
                contect_box_28.classList.remove("show_active");
                contect_box_29.classList.remove("show_active");
                contect_box_30.classList.remove("show_active");
                contect_box_31.classList.remove("show_active");
                contect_box_32.classList.remove("show_active");
                contect_box_33.classList.remove("show_active");
                contect_box_34.classList.remove("show_active");
                contect_box_35.classList.remove("show_active");
                contect_box_36.classList.remove("show_active");
                contect_box_37.classList.remove("show_active");
                contect_box_38.classList.remove("show_active");
                contect_box_39.classList.remove("show_active");
                contect_box_40.classList.remove("show_active");
                contect_box_41.classList.remove("show_active");
                contect_box_42.classList.remove("show_active");
                contect_box_43.classList.remove("show_active");
                contect_box_44.classList.remove("show_active");
                contect_box_45.classList.remove("show_active");
                contect_box_46.classList.remove("show_active");
                contect_box_47.classList.remove("show_active");
                contect_box_48.classList.remove("show_active");
                contect_box_49.classList.remove("show_active");
                contect_box_50.classList.remove("show_active");
                contect_box_51.classList.remove("show_active");
                contect_box_52.classList.remove("show_active");
                contect_box_53.classList.remove("show_active");
                contect_box_54.classList.remove("show_active");
                contect_box_55.classList.remove("show_active");
                contect_box_56.classList.remove("show_active");
                contect_box_57.classList.remove("show_active");
                contect_box_58.classList.remove("show_active");
                contect_box_59.classList.remove("show_active");
                contect_box_60.classList.remove("show_active");

                // set defulte none on all box 
                overview_box_show.classList.remove("show_active")
                login_contect_box.classList.remove("show_active")
                dashbord_contect_box.classList.remove("show_active")
                sms_contect_box.classList.remove("show_active")
                rcs_contect_box.classList.remove("show_active")
                whatsapp_contect_box.classList.remove("show_active")
                voice_contect_box.classList.remove("show_active")
                ivr_contect_box.classList.remove("show_active")
                click_to_call_contect_box.classList.remove("show_active")
                text_to_speech_contect_box.classList.remove("show_active")
                ai_agent_contect_box.classList.remove("show_active")
                journeys_contect_box.classList.remove("show_active")

                let value = el.dataset.set;

                if (value === "overview") {
                    overview_box_show.classList.add("show_active")

                    dash_box_slie.classList.toggle("dashbord_revile_gl");
                    haamer_id_btn.classList.toggle("haamer_btn_nikw5");

                    if (haamer_id_btn.classList.contains("haamer_btn_nikw5")) {

                        close_linw969.style.display = "flex";
                        haw_linw969.style.display = "none";

                    } else {

                        close_linw969.style.display = "none";
                        haw_linw969.style.display = "flex";

                    }
                }

                if (value === "login") {
                    login_contect_box.classList.add("show_active")
                }

                if (value === "dashbord") {
                    dashbord_contect_box.classList.add("show_active")
                }

                if (value === "sms") {
                    sms_contect_box.classList.add("show_active")
                }

                if (value === "rcs") {
                    rcs_contect_box.classList.add("show_active")
                }

                if (value === "whatsapp") {
                    whatsapp_contect_box.classList.add("show_active")
                }

                if (value === "voice") {
                    voice_contect_box.classList.add("show_active")
                }

                if (value === "ivr") {
                    ivr_contect_box.classList.add("show_active")
                }

                if (value === "click_to_call") {
                    click_to_call_contect_box.classList.add("show_active")
                }

                if (value === "text_to_speech") {
                    text_to_speech_contect_box.classList.add("show_active")
                }
                if (value === "ai_agent") {
                    ai_agent_contect_box.classList.add("show_active")
                }
                if (value === "journeys") {
                    journeys_contect_box.classList.add("show_active")
                }
            }


            function show_sub_link(el) {

                let sms_sub_box = document.getElementById("sms_sub_box");
                let rcs_sub_box = document.getElementById("rcs_sub_box");
                let whatsapp_sub_box = document.getElementById("whatsapp_sub_box");
                let voice_sub_box = document.getElementById("voice_sub_box");
                let ivr_sub_box = document.getElementById("ivr_sub_box");
                let click_to_call_sub_box = document.getElementById("click_to_call_sub_box");
                let text_to_speech_sub_box = document.getElementById("text_to_speech_sub_box");
                let ai_agent_sub_box = document.getElementById("ai_agent_sub_box");
                let journeys_sub_box = document.getElementById("journeys_sub_box");

                let sub_value = el.dataset.set;

                sms_sub_box.classList.remove("sub_links_of_show_box");
                rcs_sub_box.classList.remove("sub_links_of_show_box");
                whatsapp_sub_box.classList.remove("sub_links_of_show_box");
                voice_sub_box.classList.remove("sub_links_of_show_box");
                ivr_sub_box.classList.remove("sub_links_of_show_box");
                click_to_call_sub_box.classList.remove("sub_links_of_show_box");
                text_to_speech_sub_box.classList.remove("sub_links_of_show_box");
                ai_agent_sub_box.classList.remove("sub_links_of_show_box");
                journeys_sub_box.classList.remove("sub_links_of_show_box");



                // sub_links_of_show_box
                if (sub_value === "sms") {
                    sms_sub_box.classList.toggle("sub_links_of_show_box")
                }

                if (sub_value === "rcs") {
                    rcs_sub_box.classList.toggle("sub_links_of_show_box")

                }

                if (sub_value === "whatsapp") {
                    whatsapp_sub_box.classList.toggle("sub_links_of_show_box")

                }

                if (sub_value === "voice") {
                    voice_sub_box.classList.toggle("sub_links_of_show_box")

                }

                if (sub_value === "ivr") {
                    ivr_sub_box.classList.toggle("sub_links_of_show_box")

                }

                if (sub_value === "click_to_call") {
                    click_to_call_sub_box.classList.toggle("sub_links_of_show_box")

                }

                if (sub_value === "text_to_speech") {
                    text_to_speech_sub_box.classList.toggle("sub_links_of_show_box")

                }
                if (sub_value === "ai_agent") {
                    ai_agent_sub_box.classList.toggle("sub_links_of_show_box")

                }
                if (sub_value === "journeys") {
                    journeys_sub_box.classList.toggle("sub_links_of_show_box")

                }

            }


            function link_sole_action(el) {

                let box_id = el.dataset.set;

                // Jis submenu ke andar clicked item hai
                let parent_box = el.closest(".sub_links_of_allawn");

                if (parent_box) {

                    // Pehle sabhi items se active hatao
                    parent_box.querySelectorAll(".sole78m").forEach(function(item) {
                        item.classList.remove("active");
                    });

                    // Sirf clicked item ko active karo
                    el.classList.add("active");
                }

                // all sub boxs 
                let contect_box_1 = document.getElementById("contect_1_contect_box");
                let contect_box_2 = document.getElementById("contect_2_contect_box");
                let contect_box_3 = document.getElementById("contect_3_contect_box");
                let contect_box_4 = document.getElementById("contect_4_contect_box");
                let contect_box_5 = document.getElementById("contect_5_contect_box");
                let contect_box_6 = document.getElementById("contect_6_contect_box");
                let contect_box_7 = document.getElementById("contect_7_contect_box");
                let contect_box_8 = document.getElementById("contect_8_contect_box");
                let contect_box_9 = document.getElementById("contect_9_contect_box");
                let contect_box_10 = document.getElementById("contect_10_contect_box");
                let contect_box_11 = document.getElementById("contect_11_contect_box");
                let contect_box_12 = document.getElementById("contect_12_contect_box");
                let contect_box_13 = document.getElementById("contect_13_contect_box");
                let contect_box_14 = document.getElementById("contect_14_contect_box");
                let contect_box_15 = document.getElementById("contect_15_contect_box");
                let contect_box_16 = document.getElementById("contect_16_contect_box");
                let contect_box_17 = document.getElementById("contect_17_contect_box");
                let contect_box_18 = document.getElementById("contect_18_contect_box");
                let contect_box_19 = document.getElementById("contect_19_contect_box");
                let contect_box_20 = document.getElementById("contect_20_contect_box");
                let contect_box_21 = document.getElementById("contect_21_contect_box");
                let contect_box_22 = document.getElementById("contect_22_contect_box");
                let contect_box_23 = document.getElementById("contect_23_contect_box");
                let contect_box_24 = document.getElementById("contect_24_contect_box");
                let contect_box_25 = document.getElementById("contect_25_contect_box");
                let contect_box_26 = document.getElementById("contect_26_contect_box");
                let contect_box_27 = document.getElementById("contect_27_contect_box");
                let contect_box_28 = document.getElementById("contect_28_contect_box");
                let contect_box_29 = document.getElementById("contect_29_contect_box");
                let contect_box_30 = document.getElementById("contect_30_contect_box");
                let contect_box_31 = document.getElementById("contect_31_contect_box");
                let contect_box_32 = document.getElementById("contect_32_contect_box");
                let contect_box_33 = document.getElementById("contect_33_contect_box");
                let contect_box_34 = document.getElementById("contect_34_contect_box");
                let contect_box_35 = document.getElementById("contect_35_contect_box");
                let contect_box_36 = document.getElementById("contect_36_contect_box");
                let contect_box_37 = document.getElementById("contect_37_contect_box");
                let contect_box_38 = document.getElementById("contect_38_contect_box");
                let contect_box_39 = document.getElementById("contect_39_contect_box");
                let contect_box_40 = document.getElementById("contect_40_contect_box");
                let contect_box_41 = document.getElementById("contect_41_contect_box");
                let contect_box_42 = document.getElementById("contect_42_contect_box");
                let contect_box_43 = document.getElementById("contect_43_contect_box");
                let contect_box_44 = document.getElementById("contect_44_contect_box");
                let contect_box_45 = document.getElementById("contect_45_contect_box");
                let contect_box_46 = document.getElementById("contect_46_contect_box");
                let contect_box_47 = document.getElementById("contect_47_contect_box");
                let contect_box_48 = document.getElementById("contect_48_contect_box");
                let contect_box_49 = document.getElementById("contect_49_contect_box");
                let contect_box_50 = document.getElementById("contect_50_contect_box");
                let contect_box_51 = document.getElementById("contect_51_contect_box");
                let contect_box_52 = document.getElementById("contect_52_contect_box");
                let contect_box_53 = document.getElementById("contect_53_contect_box");
                let contect_box_54 = document.getElementById("contect_54_contect_box");
                let contect_box_55 = document.getElementById("contect_55_contect_box");
                let contect_box_56 = document.getElementById("contect_56_contect_box");
                let contect_box_57 = document.getElementById("contect_57_contect_box");
                let contect_box_58 = document.getElementById("contect_58_contect_box");
                let contect_box_59 = document.getElementById("contect_59_contect_box");
                let contect_box_60 = document.getElementById("contect_60_contect_box");


                contect_box_1.classList.remove("show_active");
                contect_box_2.classList.remove("show_active");
                contect_box_3.classList.remove("show_active");
                contect_box_4.classList.remove("show_active");
                contect_box_5.classList.remove("show_active");
                contect_box_6.classList.remove("show_active");
                contect_box_7.classList.remove("show_active");
                contect_box_8.classList.remove("show_active");
                contect_box_9.classList.remove("show_active");
                contect_box_10.classList.remove("show_active");
                contect_box_11.classList.remove("show_active");
                contect_box_12.classList.remove("show_active");
                contect_box_13.classList.remove("show_active");
                contect_box_14.classList.remove("show_active");
                contect_box_15.classList.remove("show_active");
                contect_box_16.classList.remove("show_active");
                contect_box_17.classList.remove("show_active");
                contect_box_18.classList.remove("show_active");
                contect_box_19.classList.remove("show_active");
                contect_box_20.classList.remove("show_active");
                contect_box_21.classList.remove("show_active");
                contect_box_22.classList.remove("show_active");
                contect_box_23.classList.remove("show_active");
                contect_box_24.classList.remove("show_active");
                contect_box_25.classList.remove("show_active");
                contect_box_26.classList.remove("show_active");
                contect_box_27.classList.remove("show_active");
                contect_box_28.classList.remove("show_active");
                contect_box_29.classList.remove("show_active");
                contect_box_30.classList.remove("show_active");
                contect_box_31.classList.remove("show_active");
                contect_box_32.classList.remove("show_active");
                contect_box_33.classList.remove("show_active");
                contect_box_34.classList.remove("show_active");
                contect_box_35.classList.remove("show_active");
                contect_box_36.classList.remove("show_active");
                contect_box_37.classList.remove("show_active");
                contect_box_38.classList.remove("show_active");
                contect_box_39.classList.remove("show_active");
                contect_box_40.classList.remove("show_active");
                contect_box_41.classList.remove("show_active");
                contect_box_42.classList.remove("show_active");
                contect_box_43.classList.remove("show_active");
                contect_box_44.classList.remove("show_active");
                contect_box_45.classList.remove("show_active");
                contect_box_46.classList.remove("show_active");
                contect_box_47.classList.remove("show_active");
                contect_box_48.classList.remove("show_active");
                contect_box_49.classList.remove("show_active");
                contect_box_50.classList.remove("show_active");
                contect_box_51.classList.remove("show_active");
                contect_box_52.classList.remove("show_active");
                contect_box_53.classList.remove("show_active");
                contect_box_54.classList.remove("show_active");
                contect_box_55.classList.remove("show_active");
                contect_box_56.classList.remove("show_active");
                contect_box_57.classList.remove("show_active");
                contect_box_58.classList.remove("show_active");
                contect_box_59.classList.remove("show_active");
                contect_box_60.classList.remove("show_active");

                let overview_box_show = document.getElementById("overview_contect_box");
                let login_contect_box = document.getElementById("login_contect_box");
                let dashbord_contect_box = document.getElementById("dashbord_contect_box");
                let sms_contect_box = document.getElementById("sms_contect_box");
                let rcs_contect_box = document.getElementById("rcs_contect_box");
                let whatsapp_contect_box = document.getElementById("whatsapp_contect_box");
                let voice_contect_box = document.getElementById("voice_contect_box");
                let ivr_contect_box = document.getElementById("ivr_contect_box");
                let click_to_call_contect_box = document.getElementById("click_to_call_contect_box");
                let text_to_speech_contect_box = document.getElementById("text_to_speech_contect_box");
                let ai_agent_contect_box = document.getElementById("ai_agent_contect_box");
                let journeys_contect_box = document.getElementById("journeys_contect_box");

                // set defulte none on all box 
                overview_box_show.classList.remove("show_active")
                login_contect_box.classList.remove("show_active")
                dashbord_contect_box.classList.remove("show_active")
                sms_contect_box.classList.remove("show_active")
                rcs_contect_box.classList.remove("show_active")
                whatsapp_contect_box.classList.remove("show_active")
                voice_contect_box.classList.remove("show_active")
                ivr_contect_box.classList.remove("show_active")
                click_to_call_contect_box.classList.remove("show_active")
                text_to_speech_contect_box.classList.remove("show_active")
                ai_agent_contect_box.classList.remove("show_active")
                journeys_contect_box.classList.remove("show_active")

                contect_box_1.classList.remove("show_active");
                contect_box_2.classList.remove("show_active");
                contect_box_3.classList.remove("show_active");
                contect_box_4.classList.remove("show_active");
                contect_box_5.classList.remove("show_active");
                contect_box_6.classList.remove("show_active");
                contect_box_7.classList.remove("show_active");
                contect_box_8.classList.remove("show_active");
                contect_box_9.classList.remove("show_active");
                contect_box_10.classList.remove("show_active");
                contect_box_11.classList.remove("show_active");
                contect_box_12.classList.remove("show_active");
                contect_box_13.classList.remove("show_active");
                contect_box_14.classList.remove("show_active");
                contect_box_15.classList.remove("show_active");
                contect_box_16.classList.remove("show_active");
                contect_box_17.classList.remove("show_active");
                contect_box_18.classList.remove("show_active");
                contect_box_19.classList.remove("show_active");
                contect_box_20.classList.remove("show_active");
                contect_box_21.classList.remove("show_active");
                contect_box_22.classList.remove("show_active");
                contect_box_23.classList.remove("show_active");
                contect_box_24.classList.remove("show_active");
                contect_box_25.classList.remove("show_active");
                contect_box_26.classList.remove("show_active");
                contect_box_27.classList.remove("show_active");
                contect_box_28.classList.remove("show_active");
                contect_box_29.classList.remove("show_active");
                contect_box_30.classList.remove("show_active");
                contect_box_31.classList.remove("show_active");
                contect_box_32.classList.remove("show_active");
                contect_box_33.classList.remove("show_active");
                contect_box_34.classList.remove("show_active");
                contect_box_35.classList.remove("show_active");
                contect_box_36.classList.remove("show_active");
                contect_box_37.classList.remove("show_active");
                contect_box_38.classList.remove("show_active");
                contect_box_39.classList.remove("show_active");
                contect_box_40.classList.remove("show_active");
                contect_box_41.classList.remove("show_active");
                contect_box_42.classList.remove("show_active");
                contect_box_43.classList.remove("show_active");
                contect_box_44.classList.remove("show_active");
                contect_box_45.classList.remove("show_active");
                contect_box_46.classList.remove("show_active");
                contect_box_47.classList.remove("show_active");
                contect_box_48.classList.remove("show_active");
                contect_box_49.classList.remove("show_active");
                contect_box_50.classList.remove("show_active");
                contect_box_51.classList.remove("show_active");
                contect_box_52.classList.remove("show_active");
                contect_box_53.classList.remove("show_active");
                contect_box_54.classList.remove("show_active");
                contect_box_55.classList.remove("show_active");
                contect_box_56.classList.remove("show_active");
                contect_box_57.classList.remove("show_active");
                contect_box_58.classList.remove("show_active");
                contect_box_59.classList.remove("show_active");
                contect_box_60.classList.remove("show_active");




                if (box_id === "contect-1") {
                    contect_box_1.classList.toggle("show_active");
                }

                if (box_id === "contect-2") {
                    contect_box_2.classList.toggle("show_active");
                }

                if (box_id === "contect-3") {
                    contect_box_3.classList.toggle("show_active");
                }

                if (box_id === "contect-4") {
                    contect_box_4.classList.toggle("show_active");
                }

                if (box_id === "contect-5") {
                    contect_box_5.classList.toggle("show_active");
                }

                if (box_id === "contect-6") {
                    contect_box_6.classList.toggle("show_active");
                }

                if (box_id === "contect-7") {
                    contect_box_7.classList.toggle("show_active");
                }

                if (box_id === "contect-8") {
                    contect_box_8.classList.toggle("show_active");
                }

                if (box_id === "contect-9") {
                    contect_box_9.classList.toggle("show_active");
                }

                if (box_id === "contect-10") {
                    contect_box_10.classList.toggle("show_active");
                }

                if (box_id === "contect-11") {
                    contect_box_11.classList.toggle("show_active");
                }

                if (box_id === "contect-12") {
                    contect_box_12.classList.toggle("show_active");
                }

                if (box_id === "contect-13") {
                    contect_box_13.classList.toggle("show_active");
                }

                if (box_id === "contect-14") {
                    contect_box_14.classList.toggle("show_active");
                }

                if (box_id === "contect-15") {
                    contect_box_15.classList.toggle("show_active");
                }

                if (box_id === "contect-16") {
                    contect_box_16.classList.toggle("show_active");
                }

                if (box_id === "contect-17") {
                    contect_box_17.classList.toggle("show_active");
                }

                if (box_id === "contect-18") {
                    contect_box_18.classList.toggle("show_active");
                }

                if (box_id === "contect-19") {
                    contect_box_19.classList.toggle("show_active");
                }

                if (box_id === "contect-20") {
                    contect_box_20.classList.toggle("show_active");
                }

                if (box_id === "contect-21") {
                    contect_box_21.classList.toggle("show_active");
                }

                if (box_id === "contect-22") {
                    contect_box_22.classList.toggle("show_active");
                }

                if (box_id === "contect-23") {
                    contect_box_23.classList.toggle("show_active");
                }

                if (box_id === "contect-24") {
                    contect_box_24.classList.toggle("show_active");
                }

                if (box_id === "contect-25") {
                    contect_box_25.classList.toggle("show_active");
                }

                if (box_id === "contect-26") {
                    contect_box_26.classList.toggle("show_active");
                }

                if (box_id === "contect-27") {
                    contect_box_27.classList.toggle("show_active");
                }

                if (box_id === "contect-28") {
                    contect_box_28.classList.toggle("show_active");
                }

                if (box_id === "contect-29") {
                    contect_box_29.classList.toggle("show_active");
                }

                if (box_id === "contect-30") {
                    contect_box_30.classList.toggle("show_active");
                }

                if (box_id === "contect-31") {
                    contect_box_31.classList.toggle("show_active");
                }

                if (box_id === "contect-32") {
                    contect_box_32.classList.toggle("show_active");
                }

                if (box_id === "contect-33") {
                    contect_box_33.classList.toggle("show_active");
                }

                if (box_id === "contect-34") {
                    contect_box_34.classList.toggle("show_active");
                }

                if (box_id === "contect-35") {
                    contect_box_35.classList.toggle("show_active");
                }

                if (box_id === "contect-36") {
                    contect_box_36.classList.toggle("show_active");
                }

                if (box_id === "contect-37") {
                    contect_box_37.classList.toggle("show_active");
                }

                if (box_id === "contect-38") {
                    contect_box_38.classList.toggle("show_active");
                }

                if (box_id === "contect-39") {
                    contect_box_39.classList.toggle("show_active");
                }

                if (box_id === "contect-40") {
                    contect_box_40.classList.toggle("show_active");
                }

                if (box_id === "contect-41") {
                    contect_box_41.classList.toggle("show_active");
                }

                if (box_id === "contect-42") {
                    contect_box_42.classList.toggle("show_active");
                }

                if (box_id === "contect-43") {
                    contect_box_43.classList.toggle("show_active");
                }

                if (box_id === "contect-44") {
                    contect_box_44.classList.toggle("show_active");
                }

                if (box_id === "contect-45") {
                    contect_box_45.classList.toggle("show_active");
                }

                if (box_id === "contect-46") {
                    contect_box_46.classList.toggle("show_active");
                }

                if (box_id === "contect-47") {
                    contect_box_47.classList.toggle("show_active");
                }

                if (box_id === "contect-48") {
                    contect_box_48.classList.toggle("show_active");
                }

                if (box_id === "contect-49") {
                    contect_box_49.classList.toggle("show_active");
                }

                if (box_id === "contect-50") {
                    contect_box_50.classList.toggle("show_active");
                }

                if (box_id === "contect-51") {
                    contect_box_51.classList.toggle("show_active");
                }

                if (box_id === "contect-52") {
                    contect_box_52.classList.toggle("show_active");
                }

                if (box_id === "contect-53") {
                    contect_box_53.classList.toggle("show_active");
                }

                if (box_id === "contect-54") {
                    contect_box_54.classList.toggle("show_active");
                }

                if (box_id === "contect-55") {
                    contect_box_55.classList.toggle("show_active");
                }

                if (box_id === "contect-56") {
                    contect_box_56.classList.toggle("show_active");
                }

                if (box_id === "contect-57") {
                    contect_box_57.classList.toggle("show_active");
                }

                if (box_id === "contect-58") {
                    contect_box_58.classList.toggle("show_active");
                }

                if (box_id === "contect-59") {
                    contect_box_59.classList.toggle("show_active");
                }

                if (box_id === "contect-60") {
                    contect_box_60.classList.toggle("show_active");
                }

            }


            function close_all_sub_links_ha() {
                let sms_sub_box = document.getElementById("sms_sub_box");
                let rcs_sub_box = document.getElementById("rcs_sub_box");
                let whatsapp_sub_box = document.getElementById("whatsapp_sub_box");
                let voice_sub_box = document.getElementById("voice_sub_box");
                let ivr_sub_box = document.getElementById("ivr_sub_box");
                let click_to_call_sub_box = document.getElementById("click_to_call_sub_box");
                let text_to_speech_sub_box = document.getElementById("text_to_speech_sub_box");
                let ai_agent_sub_box = document.getElementById("ai_agent_sub_box");
                let journeys_sub_box = document.getElementById("journeys_sub_box");

                sms_sub_box.classList.remove("sub_links_of_show_box");
                rcs_sub_box.classList.remove("sub_links_of_show_box");
                whatsapp_sub_box.classList.remove("sub_links_of_show_box");
                voice_sub_box.classList.remove("sub_links_of_show_box");
                ivr_sub_box.classList.remove("sub_links_of_show_box");
                click_to_call_sub_box.classList.remove("sub_links_of_show_box");
                text_to_speech_sub_box.classList.remove("sub_links_of_show_box");
                ai_agent_sub_box.classList.remove("sub_links_of_show_box");
                journeys_sub_box.classList.remove("sub_links_of_show_box");

            }
        </script>


        <script>
            function startOverviewCounters() {

                const sections = document.querySelectorAll(".counrt_grid_wer854_card");

                if (!sections.length) return;

                sections.forEach((section) => {

                    // Is section ke andar ke counters only
                    const counters = section.querySelectorAll(".qunik-count_version_2_onlyfor_appliction_page");

                    if (!counters.length) return;

                    const runCounter = (counter) => {

                        // Already started hai to dobara mat chalao
                        if (counter.dataset.counterStarted === "true") return;

                        counter.dataset.counterStarted = "true";

                        const target = parseFloat(counter.dataset.target);

                        if (isNaN(target)) return;

                        const suffix = counter.dataset.suffix || "";
                        const duration = 1800;
                        const start = performance.now();

                        function animateCounter(time) {

                            const progress = Math.min(
                                (time - start) / duration,
                                1
                            );

                            // Smooth animation
                            const ease = 1 - Math.pow(1 - progress, 3);

                            const currentValue = target * ease;

                            if (target % 1 !== 0) {

                                counter.textContent =
                                    currentValue.toFixed(1) + suffix;

                            } else {

                                counter.textContent =
                                    Math.floor(currentValue) + suffix;
                            }

                            if (progress < 1) {

                                requestAnimationFrame(animateCounter);

                            } else {

                                // Exact final value
                                counter.textContent =
                                    (target % 1 !== 0 ?
                                        target.toFixed(1) :
                                        target
                                    ) + suffix;
                            }
                        }

                        requestAnimationFrame(animateCounter);
                    };


                    // Section visible hone ka wait karega
                    const observer = new IntersectionObserver(
                        (entries, obs) => {

                            entries.forEach((entry) => {

                                if (!entry.isIntersecting) return;

                                // Sirf isi section ke counters
                                counters.forEach((counter) => {
                                    runCounter(counter);
                                });

                                // Ek baar chalne ke baad observer remove
                                obs.unobserve(entry.target);
                            });

                        }, {
                            threshold: 0.25
                        }
                    );

                    observer.observe(section);
                });
            }


            // Page load ke baad function run
            document.addEventListener("DOMContentLoaded", () => {
                startOverviewCounters();
            });
        </script>

    </main>


    <!-- Image Preview -->
    <style>
        .qunike-img-preview {
            position: fixed;
            inset: 0;
            z-index: 999999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.78);
            backdrop-filter: blur(3px);
        }

        .qunike-img-preview.qunike-img-preview-show {
            display: flex;
        }

        .qunike-img-preview-box {
            width: 90%;
            height: 90%;
            max-width: 1600px;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 70px rgba(0, 0, 0, 0.35);
            animation: qunikeImageOpen 0.3s ease forwards;
        }

        .qunike-img-preview-top {
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 22px;
            background: #fff;
            border-bottom: 1px solid #e8e8e8;
        }

        .qunike-img-preview-title {
            font-size: 17px;
            font-weight: 600;
            color: #20283a;
        }

        .qunike-img-preview-close {
            width: 38px;
            height: 38px;
            border: none;
            border-radius: 50%;
            background: #f2f3f5;
            color: #20283a;
            font-size: 28px;
            line-height: 1;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.25s ease;
        }

        .qunike-img-preview-close:hover {
            background: #20283a;
            color: #fff;
            transform: rotate(90deg);
        }

        .qunike-img-preview-content {
            width: 100%;
            height: calc(100% - 58px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            box-sizing: border-box;
            background: #f8f9fa;
        }

        .qunike-img-preview-content img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 8px;
            animation: qunikeImageZoom 0.35s ease forwards;
        }

        @keyframes qunikeImageOpen {
            from {
                opacity: 0;
                transform: scale(0.94) translateY(15px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        @keyframes qunikeImageZoom {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }


        /* Mobile */

        @media (max-width: 768px) {

            .qunike-img-preview {
                padding: 15px;
            }

            .qunike-img-preview-box {
                width: 96%;
                height: 85%;
                border-radius: 14px;
            }

            .qunike-img-preview-top {
                height: 52px;
                padding: 0 15px;
            }

            .qunike-img-preview-title {
                font-size: 15px;
            }

            .qunike-img-preview-content {
                height: calc(100% - 52px);
                padding: 12px;
            }
        }
    </style>
    <div class="qunike-img-preview" id="qunikeImgPreview">
        <div class="qunike-img-preview-box">

            <div class="qunike-img-preview-top">
                <span class="qunike-img-preview-title">Image Preview</span>

                <button type="button"
                    class="qunike-img-preview-close"
                    onclick="qunikeCloseImage()">
                    ×
                </button>
            </div>

            <div class="qunike-img-preview-content">
                <img id="qunikePreviewImage" src="" alt="Preview">
            </div>

        </div>
    </div>
    <script>
        function qunikeOpenImage(img) {

            const previewBox = document.getElementById("qunikeImgPreview");
            const previewImage = document.getElementById("qunikePreviewImage");

            if (!previewBox || !previewImage) return;

            previewImage.src = img.currentSrc || img.src;
            previewImage.alt = img.alt || "Image Preview";

            previewBox.classList.add("qunike-img-preview-show");

            document.body.style.overflow = "hidden";
        }


        function qunikeCloseImage() {

            const previewBox = document.getElementById("qunikeImgPreview");
            const previewImage = document.getElementById("qunikePreviewImage");

            if (!previewBox) return;

            previewBox.classList.remove("qunike-img-preview-show");

            if (previewImage) {
                previewImage.src = "";
            }

            document.body.style.overflow = "";
        }


        /* Automatically make every image clickable */

        document.addEventListener("click", function(e) {

            const clickedImage = e.target.closest("img");

            if (!clickedImage) return;

            /*
               Preview ke andar wali image par dobara open nahi hoga
            */
            if (clickedImage.id === "qunikePreviewImage") return;

            qunikeOpenImage({
                currentSrc: clickedImage.currentSrc,
                src: clickedImage.src,
                alt: clickedImage.alt
            });

        });


        /* Outside click se close */

        document.getElementById("qunikeImgPreview").addEventListener("click", function(e) {

            if (e.target === this) {
                qunikeCloseImage();
            }

        });


        /* ESC se close */

        document.addEventListener("keydown", function(e) {

            if (e.key === "Escape") {
                qunikeCloseImage();
            }

        });
    </script>
</body>

</html>