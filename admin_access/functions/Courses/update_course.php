<?php

/* =========================================================
   CLEAN COURSE VALUE
========================================================= */

function course_update_clean_value($value)
{
    if (!isset($value)) {
        return "";
    }

    return trim((string)$value);
}


/* =========================================================
   GENERATE COURSE SLUG
========================================================= */

function course_update_generate_slug($course_name)
{
    $course_slug = strtolower(trim($course_name));

    $course_slug = preg_replace('/[^a-z0-9]+/i', '-', $course_slug);

    $course_slug = trim($course_slug, '-');

    if ($course_slug === "") {
        $course_slug = "course-" . time();
    }

    return $course_slug;
}


/* =========================================================
   UPDATE COURSE
========================================================= */

function update_course(
    $mydb,
    $course_id,
    $course_data,
    $course_image = null,
    $remove_course_image = false
) {

    $course_id = (int)$course_id;


    if ($course_id <= 0) {
        return [
            "status" => false,
            "message" => "Invalid course."
        ];
    }


    /* -----------------------------------------------------
       GET OLD COURSE
    ----------------------------------------------------- */

    $old_course_query = mysqli_prepare(
        $mydb,
        "SELECT * FROM courses WHERE course_id = ? LIMIT 1"
    );

    mysqli_stmt_bind_param($old_course_query, "i", $course_id);

    mysqli_stmt_execute($old_course_query);

    $old_course_result = mysqli_stmt_get_result($old_course_query);


    if (!$old_course_result || mysqli_num_rows($old_course_result) === 0) {
        return [
            "status" => false,
            "message" => "Course not found."
        ];
    }


    $old_course = mysqli_fetch_assoc($old_course_result);


    /* -----------------------------------------------------
       COURSE NAME
    ----------------------------------------------------- */

    $course_name = trim($course_data['course_name'] ?? '');


    if ($course_name === "") {
        return [
            "status" => false,
            "message" => "Course name is required."
        ];
    }


    /* -----------------------------------------------------
       OTHER VALUES
    ----------------------------------------------------- */

    $course_code = course_update_clean_value($course_data['course_code'] ?? '');
    $course_category = course_update_clean_value($course_data['course_category'] ?? '');
    $course_short_description = course_update_clean_value($course_data['course_short_description'] ?? '');
    $course_description = course_update_clean_value($course_data['course_description'] ?? '');
    $course_highlights = course_update_clean_value($course_data['course_highlights'] ?? '');
    $course_duration = course_update_clean_value($course_data['course_duration'] ?? '');
    $course_mode = course_update_clean_value($course_data['course_mode'] ?? '');
    $course_level = course_update_clean_value($course_data['course_level'] ?? '');
    $course_fee = course_update_clean_value($course_data['course_fee'] ?? '');
    $course_discount_fee = course_update_clean_value($course_data['course_discount_fee'] ?? '');
    $course_syllabus = course_update_clean_value($course_data['course_syllabus'] ?? '');
    $course_eligibility = course_update_clean_value($course_data['course_eligibility'] ?? '');
    $course_certification = course_update_clean_value($course_data['course_certification'] ?? '');
    $course_placement = course_update_clean_value($course_data['course_placement'] ?? '');
    $course_faculty = course_update_clean_value($course_data['course_faculty'] ?? '');
    $course_batch_timing = course_update_clean_value($course_data['course_batch_timing'] ?? '');


    /* -----------------------------------------------------
       STATUS
    ----------------------------------------------------- */

    $course_status = course_update_clean_value($course_data['course_status'] ?? '');

    if ($course_status !== 'Active' && $course_status !== 'Inactive') {
        $course_status = "";
    }


    /* -----------------------------------------------------
       FEATURED
    ----------------------------------------------------- */

    $course_featured = course_update_clean_value($course_data['course_featured'] ?? '');

    if ($course_featured !== 'Yes' && $course_featured !== 'No') {
        $course_featured = "";
    }


    /* -----------------------------------------------------
       NEW SLUG FROM COURSE NAME
       Course name same hai to old slug hi rahega.
    ----------------------------------------------------- */

    $old_slug = $old_course['course_slug'];

    $new_slug = course_update_generate_slug($course_name);


    if ($course_name === $old_course['course_name']) {

        $new_slug = $old_slug;

    } else {

        $slug_base = $new_slug;

        $slug_number = 2;

        while (true) {

            $slug_check_query = mysqli_prepare(
                $mydb,
                "SELECT course_id
                 FROM courses
                 WHERE course_slug = ?
                 AND course_id != ?
                 LIMIT 1"
            );

            mysqli_stmt_bind_param(
                $slug_check_query,
                "si",
                $new_slug,
                $course_id
            );

            mysqli_stmt_execute($slug_check_query);

            $slug_check_result = mysqli_stmt_get_result($slug_check_query);

            if (mysqli_num_rows($slug_check_result) === 0) {
                break;
            }

            $new_slug = $slug_base . "-" . $slug_number;

            $slug_number++;
        }
    }


    /* -----------------------------------------------------
       OLD IMAGE + DIRECTORIES
    ----------------------------------------------------- */

    $old_image = $old_course['course_image'] ?? "";

    $course_image_path = $old_image;

    $old_course_directory = __DIR__ . "/../../../assets/Courses/" . $old_slug;

    $new_course_directory = __DIR__ . "/../../../assets/Courses/" . $new_slug;


    /* -----------------------------------------------------
       COURSE NAME CHANGED -> MOVE OLD DIRECTORY
    ----------------------------------------------------- */

    if ($old_slug !== $new_slug && is_dir($old_course_directory)) {

        if (!is_dir($new_course_directory)) {

            rename($old_course_directory, $new_course_directory);
        }


        if ($old_image !== "") {

            $course_image_path =
                "assets/Courses/" .
                $new_slug .
                "/" .
                basename($old_image);
        }
    }


    /* -----------------------------------------------------
       REMOVE OLD IMAGE
       (folder rename ke baad NAYE path se delete hoga)
    ----------------------------------------------------- */

    if ($remove_course_image === true) {

        if ($course_image_path !== "") {

            $remove_image_full_path =
                __DIR__ . "/../../../" . $course_image_path;

            if (file_exists($remove_image_full_path)) {
                unlink($remove_image_full_path);
            }
        }

        $course_image_path = "";
    }


    /* -----------------------------------------------------
       NEW IMAGE UPLOAD (NEW IMAGE ALWAYS WINS)
    ----------------------------------------------------- */

    if (
        isset($course_image) &&
        isset($course_image['error']) &&
        $course_image['error'] === UPLOAD_ERR_OK
    ) {

        $allowed_extensions = [
            'jpg',
            'jpeg',
            'png',
            'webp',
            'gif'
        ];

        $image_extension = strtolower(
            pathinfo($course_image['name'], PATHINFO_EXTENSION)
        );

        if (in_array($image_extension, $allowed_extensions, true)) {

            if (!is_dir($new_course_directory)) {

                mkdir($new_course_directory, 0755, true);
            }


            /* Delete old image */

            if ($course_image_path !== "") {

                $old_image_full_path =
                    __DIR__ . "/../../../" . $course_image_path;

                if (file_exists($old_image_full_path)) {
                    unlink($old_image_full_path);
                }
            }


            $new_image_name = "course-image." . $image_extension;

            $new_image_full_path = $new_course_directory . "/" . $new_image_name;


            if (move_uploaded_file($course_image['tmp_name'], $new_image_full_path)) {

                $course_image_path =
                    "assets/Courses/" .
                    $new_slug .
                    "/" .
                    $new_image_name;
            }
        }
    }


    /* -----------------------------------------------------
       UPDATE DATABASE
    ----------------------------------------------------- */

    $course_updated_at = time();


    $update_query = mysqli_prepare(
        $mydb,
        "UPDATE courses SET
            course_name = ?,
            course_slug = ?,
            course_code = ?,
            course_category = ?,
            course_image = ?,
            course_short_description = ?,
            course_description = ?,
            course_highlights = ?,
            course_duration = ?,
            course_mode = ?,
            course_level = ?,
            course_fee = ?,
            course_discount_fee = ?,
            course_syllabus = ?,
            course_eligibility = ?,
            course_certification = ?,
            course_placement = ?,
            course_faculty = ?,
            course_batch_timing = ?,
            course_featured = ?,
            course_status = ?,
            course_updated_at = ?
        WHERE course_id = ?"
    );


    /* 21 text values + updated_at (i) + course_id (i) */

    mysqli_stmt_bind_param(
        $update_query,
        "sssssssssssssssssssssii",
        $course_name,
        $new_slug,
        $course_code,
        $course_category,
        $course_image_path,
        $course_short_description,
        $course_description,
        $course_highlights,
        $course_duration,
        $course_mode,
        $course_level,
        $course_fee,
        $course_discount_fee,
        $course_syllabus,
        $course_eligibility,
        $course_certification,
        $course_placement,
        $course_faculty,
        $course_batch_timing,
        $course_featured,
        $course_status,
        $course_updated_at,
        $course_id
    );


    if (!mysqli_stmt_execute($update_query)) {

        return [
            "status" => false,
            "message" => "Course could not be updated."
        ];
    }


    return [
        "status" => true,
        "message" => "Course updated successfully.",
        "course_id" => $course_id,
        "course_slug" => $new_slug
    ];
}