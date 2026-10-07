<?php

/* =========================================================
   GET SINGLE COURSE
========================================================= */

function get_single_course($mydb, $course_id)
{
    $course_id = (int)$course_id;

    if ($course_id <= 0) {
        return false;
    }


    $course_query = mysqli_prepare(
        $mydb,
        "SELECT * FROM courses WHERE course_id = ? LIMIT 1"
    );


    mysqli_stmt_bind_param(
        $course_query,
        "i",
        $course_id
    );


    mysqli_stmt_execute($course_query);


    $course_result = mysqli_stmt_get_result($course_query);


    if (!$course_result || mysqli_num_rows($course_result) === 0) {
        return false;
    }


    return mysqli_fetch_assoc($course_result);
}