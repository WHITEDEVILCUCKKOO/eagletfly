<?php

/* =========================================================
   CLEAN COURSE VALUE
   Empty / missing value = blank
========================================================= */

function course_add_clean_value($value)
{
    if (!isset($value)) {
        return "";
    }

    return trim((string)$value);
}


/* =========================================================
   GENERATE COURSE SLUG
========================================================= */

function course_generate_slug($course_name)
{
    $course_name = trim($course_name);

    $course_slug = strtolower($course_name);

    $course_slug = preg_replace('/[^a-z0-9]+/i', '-', $course_slug);

    $course_slug = trim($course_slug, '-');

    if ($course_slug === "") {
        $course_slug = "course-" . time();
    }

    return $course_slug;
}


/* =========================================================
   CREATE COURSE IMAGE DIRECTORY
========================================================= */

function course_create_image_directory($course_slug)
{
    $course_directory = __DIR__ . "/../../../assets/Courses/" . $course_slug;

    if (!is_dir($course_directory)) {
        mkdir($course_directory, 0755, true);
    }

    return $course_directory;
}


/* =========================================================
   ADD COURSE
========================================================= */

function add_course($mydb, $course_data, $course_image = null)
{
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

    $course_code = course_add_clean_value($course_data['course_code'] ?? '');
    $course_category = course_add_clean_value($course_data['course_category'] ?? '');
    $course_short_description = course_add_clean_value($course_data['course_short_description'] ?? '');
    $course_description = course_add_clean_value($course_data['course_description'] ?? '');
    $course_highlights = course_add_clean_value($course_data['course_highlights'] ?? '');
    $course_duration = course_add_clean_value($course_data['course_duration'] ?? '');
    $course_mode = course_add_clean_value($course_data['course_mode'] ?? '');
    $course_level = course_add_clean_value($course_data['course_level'] ?? '');
    $course_fee = course_add_clean_value($course_data['course_fee'] ?? '');
    $course_discount_fee = course_add_clean_value($course_data['course_discount_fee'] ?? '');
    $course_syllabus = course_add_clean_value($course_data['course_syllabus'] ?? '');
    $course_eligibility = course_add_clean_value($course_data['course_eligibility'] ?? '');
    $course_certification = course_add_clean_value($course_data['course_certification'] ?? '');
    $course_placement = course_add_clean_value($course_data['course_placement'] ?? '');
    $course_faculty = course_add_clean_value($course_data['course_faculty'] ?? '');
    $course_batch_timing = course_add_clean_value($course_data['course_batch_timing'] ?? '');


    /* -----------------------------------------------------
       STATUS
    ----------------------------------------------------- */

    $course_status = course_add_clean_value($course_data['course_status'] ?? '');

    if ($course_status !== 'Active' && $course_status !== 'Inactive') {
        $course_status = "";
    }


    /* -----------------------------------------------------
       FEATURED
    ----------------------------------------------------- */

    $course_featured = course_add_clean_value($course_data['course_featured'] ?? '');

    if ($course_featured !== 'Yes' && $course_featured !== 'No') {
        $course_featured = "";
    }


    /* -----------------------------------------------------
       AUTO SLUG + SAME SLUG CHECK
    ----------------------------------------------------- */

    $course_slug = course_generate_slug($course_name);

    $course_slug_check = $course_slug;

    $course_slug_number = 2;

    while (true) {

        $slug_check_query = mysqli_prepare(
            $mydb,
            "SELECT course_id FROM courses WHERE course_slug = ? LIMIT 1"
        );

        mysqli_stmt_bind_param(
            $slug_check_query,
            "s",
            $course_slug_check
        );

        mysqli_stmt_execute($slug_check_query);

        $slug_check_result = mysqli_stmt_get_result($slug_check_query);

        if (mysqli_num_rows($slug_check_result) == 0) {
            break;
        }

        $course_slug_check = $course_slug . "-" . $course_slug_number;

        $course_slug_number++;
    }

    $course_slug = $course_slug_check;


    /* -----------------------------------------------------
       IMAGE UPLOAD
    ----------------------------------------------------- */

    $course_image_path = "";

    $course_directory = "";

    if (
        isset($course_image) &&
        isset($course_image['error']) &&
        $course_image['error'] === UPLOAD_ERR_OK
    ) {

        $image_extension = strtolower(
            pathinfo($course_image['name'], PATHINFO_EXTENSION)
        );

        $allowed_extensions = [
            'jpg',
            'jpeg',
            'png',
            'webp',
            'gif'
        ];

        if (in_array($image_extension, $allowed_extensions, true)) {

            $course_directory = course_create_image_directory($course_slug);

            $new_image_name = "course-image." . $image_extension;

            $new_image_path = $course_directory . "/" . $new_image_name;

            if (move_uploaded_file(
                $course_image['tmp_name'],
                $new_image_path
            )) {

                $course_image_path =
                    "assets/Courses/" .
                    $course_slug .
                    "/" .
                    $new_image_name;
            }
        }
    }


    /* -----------------------------------------------------
       INSERT COURSE
    ----------------------------------------------------- */

    $course_created_at = time();

    $course_updated_at = $course_created_at;

    $course_query = mysqli_prepare(
        $mydb,
        "INSERT INTO courses (
            course_name,
            course_slug,
            course_code,
            course_category,
            course_image,
            course_short_description,
            course_description,
            course_highlights,
            course_duration,
            course_mode,
            course_level,
            course_fee,
            course_discount_fee,
            course_syllabus,
            course_eligibility,
            course_certification,
            course_placement,
            course_faculty,
            course_batch_timing,
            course_featured,
            course_status,
            course_created_at,
            course_updated_at
        ) VALUES (
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
        )"
    );


    /* 21 text values + 2 integer values */

    mysqli_stmt_bind_param(
        $course_query,
        "sssssssssssssssssssssii",
        $course_name,
        $course_slug,
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
        $course_created_at,
        $course_updated_at
    );


    if (!mysqli_stmt_execute($course_query)) {

        /* Insert fail hua to uploaded image + folder hata do */

        if ($course_image_path !== "") {

            $uploaded_image_full_path =
                __DIR__ . "/../../../" . $course_image_path;

            if (file_exists($uploaded_image_full_path)) {
                unlink($uploaded_image_full_path);
            }
        }

        if ($course_directory !== "" && is_dir($course_directory)) {
            @rmdir($course_directory);
        }

        return [
            "status" => false,
            "message" => "Course could not be added."
        ];
    }


    return [
        "status" => true,
        "message" => "Course added successfully.",
        "course_id" => mysqli_insert_id($mydb),
        "course_slug" => $course_slug
    ];
}