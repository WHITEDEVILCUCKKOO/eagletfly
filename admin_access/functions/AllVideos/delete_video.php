<?php

function delete_all_video($mydb)
{
    $video_id = intval(
        $_POST['video_id'] ?? 0
    );


    if ($video_id <= 0) {

        return [
            'status' => false,
            'message' => 'Invalid video ID.'
        ];

    }


    /* GET VIDEO */

    $get_video = mysqli_prepare(
        $mydb,
        "SELECT video_file
         FROM all_videos
         WHERE video_id = ?
         LIMIT 1"
    );


    mysqli_stmt_bind_param(
        $get_video,
        "i",
        $video_id
    );


    mysqli_stmt_execute(
        $get_video
    );


    $video_result = mysqli_stmt_get_result(
        $get_video
    );


    $video_data = mysqli_fetch_assoc(
        $video_result
    );


    mysqli_stmt_close(
        $get_video
    );


    if (!$video_data) {

        return [
            'status' => false,
            'message' => 'Video not found.'
        ];

    }


    /* DELETE DATABASE RECORD */

    $delete_video = mysqli_prepare(
        $mydb,
        "DELETE FROM all_videos
         WHERE video_id = ?"
    );


    mysqli_stmt_bind_param(
        $delete_video,
        "i",
        $video_id
    );


    if (!mysqli_stmt_execute($delete_video)) {

        $delete_error = mysqli_stmt_error(
            $delete_video
        );

        mysqli_stmt_close(
            $delete_video
        );

        return [
            'status' => false,
            'message' => 'Unable to delete video: ' . $delete_error
        ];

    }


    mysqli_stmt_close(
        $delete_video
    );


    /* DELETE PHYSICAL FILE */

    if (!empty($video_data['video_file'])) {

        $video_full_path = dirname(__DIR__, 3)
            . DIRECTORY_SEPARATOR
            . str_replace(
                '/',
                DIRECTORY_SEPARATOR,
                $video_data['video_file']
            );


        if (file_exists($video_full_path)) {

            unlink(
                $video_full_path
            );

        }

    }


    return [
        'status' => true,
        'message' => 'Video deleted successfully.'
    ];
}