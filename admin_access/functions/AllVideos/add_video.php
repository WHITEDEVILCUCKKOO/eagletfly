<?php

function add_all_video($mydb)
{
    $video_title = trim($_POST['video_title'] ?? '');
    $video_description = trim($_POST['video_description'] ?? '');
    $video_status = trim($_POST['video_status'] ?? 'Active');


    /* VIDEO TITLE CHECK */

    if ($video_title === '') {

        return [
            'status' => false,
            'message' => 'Video title is required.'
        ];

    }


    /* SLUG */

    $video_slug = strtolower($video_title);

    $video_slug = preg_replace(
        '/[^a-z0-9]+/i',
        '-',
        $video_slug
    );

    $video_slug = trim(
        $video_slug,
        '-'
    );


    /* DUPLICATE SLUG CHECK */

    $video_slug_check = mysqli_prepare(
        $mydb,
        "SELECT video_id
         FROM all_videos
         WHERE video_slug = ?
         LIMIT 1"
    );

    mysqli_stmt_bind_param(
        $video_slug_check,
        "s",
        $video_slug
    );

    mysqli_stmt_execute(
        $video_slug_check
    );

    mysqli_stmt_store_result(
        $video_slug_check
    );

    if (mysqli_stmt_num_rows($video_slug_check) > 0) {

        mysqli_stmt_close(
            $video_slug_check
        );

        return [
            'status' => false,
            'message' => 'A video with this title already exists.'
        ];

    }

    mysqli_stmt_close(
        $video_slug_check
    );


    /* VIDEO FILE CHECK */

    if (
        !isset($_FILES['video_file']) ||
        $_FILES['video_file']['error'] === UPLOAD_ERR_NO_FILE
    ) {

        return [
            'status' => false,
            'message' => 'Please select a video file.'
        ];

    }


    if (
        $_FILES['video_file']['error'] !== UPLOAD_ERR_OK
    ) {

        return [
            'status' => false,
            'message' => 'Video upload failed.'
        ];

    }


    /* ALLOWED VIDEO TYPES */

    $allowed_video_extensions = [
        'mp4',
        'webm',
        'ogg'
    ];


    $video_original_name = $_FILES['video_file']['name'];

    $video_extension = strtolower(
        pathinfo(
            $video_original_name,
            PATHINFO_EXTENSION
        )
    );


    if (
        !in_array(
            $video_extension,
            $allowed_video_extensions,
            true
        )
    ) {

        return [
            'status' => false,
            'message' => 'Only MP4, WebM and OGG videos are allowed.'
        ];

    }


    /* ONE COMMON VIDEO FOLDER */

    $video_directory = dirname(__DIR__, 3)
        . DIRECTORY_SEPARATOR
        . 'assets'
        . DIRECTORY_SEPARATOR
        . 'videos'
        . DIRECTORY_SEPARATOR
        . 'all-videos'
        . DIRECTORY_SEPARATOR;


    /* CREATE FOLDER */

    if (!is_dir($video_directory)) {

        if (!mkdir($video_directory, 0755, true)) {

            return [
                'status' => false,
                'message' => 'Unable to create video folder.'
            ];

        }

    }


    /* CHECK FOLDER WRITABLE */

    if (!is_writable($video_directory)) {

        return [
            'status' => false,
            'message' => 'Video folder is not writable.'
        ];

    }


    /* UNIQUE VIDEO FILE NAME */

    $video_file_name = $video_slug
        . '-'
        . time()
        . '.'
        . $video_extension;


    $video_full_path = $video_directory
        . $video_file_name;


    /* MOVE VIDEO */

    if (
        !move_uploaded_file(
            $_FILES['video_file']['tmp_name'],
            $video_full_path
        )
    ) {

        return [
            'status' => false,
            'message' => 'Video file could not be saved.'
        ];

    }


    /* DATABASE FILE PATH */

    $video_file_path =
        'assets/videos/all-videos/'
        . $video_file_name;


    /* CREATED TIME */

    $video_created_at = time();

    $video_thumbnail = '';


    /* INSERT DATABASE */

    $video_insert = mysqli_prepare(
        $mydb,
        "INSERT INTO all_videos
        (
            video_title,
            video_slug,
            video_file,
            video_thumbnail,
            video_description,
            video_status,
            video_created_at,
            video_updated_at
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, NULL)"
    );


    if (!$video_insert) {

        if (file_exists($video_full_path)) {
            unlink($video_full_path);
        }

        return [
            'status' => false,
            'message' => 'Database prepare failed: ' . mysqli_error($mydb)
        ];

    }


    mysqli_stmt_bind_param(
        $video_insert,
        "ssssssi",
        $video_title,
        $video_slug,
        $video_file_path,
        $video_thumbnail,
        $video_description,
        $video_status,
        $video_created_at
    );


    if (!mysqli_stmt_execute($video_insert)) {

        if (file_exists($video_full_path)) {
            unlink($video_full_path);
        }

        $video_error = mysqli_stmt_error(
            $video_insert
        );

        mysqli_stmt_close(
            $video_insert
        );

        return [
            'status' => false,
            'message' => 'Unable to add video: ' . $video_error
        ];

    }


    mysqli_stmt_close(
        $video_insert
    );


    return [
        'status' => true,
        'message' => 'Video added successfully.'
    ];
}