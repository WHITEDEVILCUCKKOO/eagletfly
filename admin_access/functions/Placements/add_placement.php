
<?php

function add_placement($mydb)
{
    /* STUDENT DETAILS */

    $student_name = trim($_POST['student_name'] ?? '');
    $placement_position = trim($_POST['placement_position'] ?? '');
    $company_name = trim($_POST['company_name'] ?? '');
    $placement_status = trim($_POST['placement_status'] ?? 'Got Placed');
    $placement_description = trim($_POST['placement_description'] ?? '');
    $placement_sort_order = (int) ($_POST['placement_sort_order'] ?? 0);

    /* REQUIRED FIELD CHECK */

    if (
        $student_name === '' ||
        $placement_position === '' ||
        $company_name === ''
    ) {
        return [
            'status' => false,
            'message' => 'Student name, position and company are required.'
        ];
    }

    /* STATUS VALIDATION */

    $allowed_statuses = [
        'Got Placed',
        'Internship',
        'Active',
        'Inactive'
    ];

    if (!in_array($placement_status, $allowed_statuses, true)) {
        $placement_status = 'Got Placed';
    }

    /* PHOTO CHECK */

    if (
        !isset($_FILES['student_photo']) ||
        $_FILES['student_photo']['error'] === UPLOAD_ERR_NO_FILE
    ) {
        return [
            'status' => false,
            'message' => 'Please select a student photo.'
        ];
    }

    if ($_FILES['student_photo']['error'] !== UPLOAD_ERR_OK) {
        return [
            'status' => false,
            'message' => 'Student photo upload failed.'
        ];
    }

    /* MAXIMUM PHOTO SIZE: 5 MB */

    if ($_FILES['student_photo']['size'] > 5 * 1024 * 1024) {
        return [
            'status' => false,
            'message' => 'Photo size must not exceed 5 MB.'
        ];
    }

    /* VERIFY REAL IMAGE */

    $photo_tmp_path = $_FILES['student_photo']['tmp_name'];
    $photo_info = @getimagesize($photo_tmp_path);

    if ($photo_info === false) {
        return [
            'status' => false,
            'message' => 'Please upload a valid image.'
        ];
    }

    /* ALLOWED PHOTO FORMATS */

    $allowed_photo_types = [
        IMAGETYPE_JPEG => 'jpg',
        IMAGETYPE_PNG  => 'png',
        IMAGETYPE_WEBP => 'webp'
    ];

    $photo_type = $photo_info[2];

    if (!isset($allowed_photo_types[$photo_type])) {
        return [
            'status' => false,
            'message' => 'Only JPG, PNG and WEBP photos are allowed.'
        ];
    }

    $photo_extension = $allowed_photo_types[$photo_type];

    /* PHOTO UPLOAD DIRECTORY */

    $photo_directory = dirname(__DIR__, 3)
        . DIRECTORY_SEPARATOR
        . 'assets'
        . DIRECTORY_SEPARATOR
        . 'images'
        . DIRECTORY_SEPARATOR
        . 'placements'
        . DIRECTORY_SEPARATOR;

    if (!is_dir($photo_directory)) {
        if (!mkdir($photo_directory, 0755, true)) {
            return [
                'status' => false,
                'message' => 'Unable to create placements image folder.'
            ];
        }
    }

    if (!is_writable($photo_directory)) {
        return [
            'status' => false,
            'message' => 'Placements image folder is not writable.'
        ];
    }

    /* UNIQUE PHOTO NAME */

    try {
        $photo_unique_name = bin2hex(random_bytes(8));
    } catch (Throwable $e) {
        return [
            'status' => false,
            'message' => 'Unable to generate photo filename.'
        ];
    }

    $photo_file_name = 'student-'
        . $photo_unique_name
        . '.'
        . $photo_extension;

    $photo_full_path = $photo_directory . $photo_file_name;

    /* MOVE PHOTO */

    if (!move_uploaded_file($photo_tmp_path, $photo_full_path)) {
        return [
            'status' => false,
            'message' => 'Unable to save student photo.'
        ];
    }

    /* DATABASE PHOTO PATH */

    $student_photo = 'assets/images/placements/' . $photo_file_name;

    /* INSERT PLACEMENT */

    $placement_insert = mysqli_prepare(
        $mydb,
        "INSERT INTO placements
        (
            student_name,
            student_photo,
            placement_position,
            company_name,
            placement_status,
            placement_description,
            placement_sort_order
        )
        VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    if (!$placement_insert) {
        if (is_file($photo_full_path)) {
            unlink($photo_full_path);
        }

        return [
            'status' => false,
            'message' => 'Database prepare failed: ' . mysqli_error($mydb)
        ];
    }

    mysqli_stmt_bind_param(
        $placement_insert,
        "ssssssi",
        $student_name,
        $student_photo,
        $placement_position,
        $company_name,
        $placement_status,
        $placement_description,
        $placement_sort_order
    );

    if (!mysqli_stmt_execute($placement_insert)) {
        $placement_error = mysqli_stmt_error($placement_insert);
        mysqli_stmt_close($placement_insert);

        if (is_file($photo_full_path)) {
            unlink($photo_full_path);
        }

        return [
            'status' => false,
            'message' => 'Unable to save placement: ' . $placement_error
        ];
    }

    mysqli_stmt_close($placement_insert);

    return [
        'status' => true,
        'message' => 'Placement added successfully.'
    ];
}
