<?php

/* =========================================================
   GET ALL COURSES
========================================================= */

function get_all_courses($mydb)
{
    $course_query = mysqli_prepare(
        $mydb,
        "SELECT *
         FROM courses
         ORDER BY course_id DESC"
    );


    if (!$course_query) {
        return [];
    }


    mysqli_stmt_execute($course_query);


    $course_result = mysqli_stmt_get_result(
        $course_query
    );


    if (!$course_result) {
        return [];
    }


    $course_list = [];


    while ($course_row = mysqli_fetch_assoc($course_result)) {

        $course_list[] = $course_row;
    }


    return $course_list;
}