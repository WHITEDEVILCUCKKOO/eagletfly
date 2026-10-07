<?php

/* =========================================================
   DELETE COURSE DIRECTORY
========================================================= */

function delete_course_directory($directory)
{
    if (!is_dir($directory)) {
        return;
    }


    $directory_items = scandir($directory);


    foreach ($directory_items as $directory_item) {

        if (
            $directory_item === "." ||
            $directory_item === ".."
        ) {
            continue;
        }


        $directory_item_path =
            $directory .
            DIRECTORY_SEPARATOR .
            $directory_item;


        if (is_dir($directory_item_path)) {

            delete_course_directory(
                $directory_item_path
            );

        } else {

            if (file_exists($directory_item_path)) {
                unlink($directory_item_path);
            }
        }
    }


    rmdir($directory);
}


/* =========================================================
   DELETE COURSE
========================================================= */

function delete_course($mydb, $course_id)
{
    $course_id = (int)$course_id;


    if ($course_id <= 0) {

        return [
            "status" => false,
            "message" => "Invalid course."
        ];
    }


    /* -----------------------------------------------------
       GET COURSE
    ----------------------------------------------------- */

    $course_get_query = mysqli_prepare(
        $mydb,
        "SELECT course_id, course_slug, course_image
         FROM courses
         WHERE course_id = ?
         LIMIT 1"
    );


    mysqli_stmt_bind_param(
        $course_get_query,
        "i",
        $course_id
    );


    mysqli_stmt_execute(
        $course_get_query
    );


    $course_result =
        mysqli_stmt_get_result(
            $course_get_query
        );


    if (
        !$course_result ||
        mysqli_num_rows($course_result) === 0
    ) {

        return [
            "status" => false,
            "message" => "Course not found."
        ];
    }


    $course = mysqli_fetch_assoc(
        $course_result
    );


    /* -----------------------------------------------------
       DELETE DATABASE RECORD
    ----------------------------------------------------- */

    $delete_query = mysqli_prepare(
        $mydb,
        "DELETE FROM courses WHERE course_id = ?"
    );


    mysqli_stmt_bind_param(
        $delete_query,
        "i",
        $course_id
    );


    if (!mysqli_stmt_execute($delete_query)) {

        return [
            "status" => false,
            "message" => "Course could not be deleted."
        ];
    }


    /* -----------------------------------------------------
       DELETE COURSE FOLDER + IMAGE
    ----------------------------------------------------- */

    if (!empty($course['course_slug'])) {

        $course_directory =
            __DIR__ .
            "/../../../assets/Courses/" .
            $course['course_slug'];


        if (is_dir($course_directory)) {

            delete_course_directory(
                $course_directory
            );
        }
    }


    return [
        "status" => true,
        "message" => "Course deleted successfully."
    ];
}