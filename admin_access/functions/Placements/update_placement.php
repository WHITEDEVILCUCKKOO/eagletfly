
<?php

function update_placement($mydb)
{
    /* PLACEMENT ID */

    $placement_id = (int) ($_POST['placement_id'] ?? 0);

    if ($placement_id <= 0) {
        return [
            'status' => false,
            'message' => 'Invalid placement ID.'
        ];
    }

    /* STUDENT DETAILS */

    $student_name = trim($_POST['student_name'] ?? '');
    $placement_position = trim($_POST['placement_position'] ?? '');
    $company_name = trim($_POST['company_name'] ?? '');
    $placement_status = trim($_POST['placement_status'] ?? 'Got Placed');
    $placement_description = trim($_POST['placement_description'] ?? '');
    $placement_sort_order = (int) ($_POST['placement_sort_order'] ?? 0);

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

    /* GET EXISTING PLACEMENT */

    $get_placement = mysqli_prepare(
        $mydb,
        "SELECT student_photo
         FROM placements
         WHERE placement_id = ?
         LIMIT 1"
    );

    if (!$get_placement) {
        return [
            'status' => false,
            'message' => 'Database error: ' . mysqli_error($mydb)
        ];
    }

    mysqli_stmt_bind_param($get_placement, "i", $placement_id);
    mysqli_stmt_execute($get_placement);

    $placement_result = mysqli_stmt_get_result($get_placement);
    $existing_placement = mysqli_fetch_assoc($placement_result);

    mysqli_stmt_close($get_placement);

    if (!$existing_placement) {
        return [
            'status' => false,
            'message' => 'Placement record not found.'
        ];
    }

    $old_student_photo = $existing_placement['student_photo'];
    $new_student_photo = $old_student_photo;
    $new_photo_full_path = '';

    /* OPTIONAL NEW PHOTO */

    $photo_uploaded = (
        isset($_FILES['student_photo']) &&
        $_FILES['student_photo']['error'] !== UPLOAD_ERR_NO_FILE
    );

    if ($photo_uploaded) {

        if ($_FILES['student_photo']['error'] !== UPLOAD_ERR_OK) {
            return [
                'status' => false,
                'message' => 'New photo upload failed.'
            ];
        }

        /* MAXIMUM SIZE: 5 MB */

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

        /* PHOTO DIRECTORY */

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

        /* UNIQUE NEW PHOTO NAME */

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

        $new_photo_full_path = $photo_directory . $photo_file_name;

        if (!move_uploaded_file($photo_tmp_path, $new_photo_full_path)) {
            return [
                'status' => false,
                'message' => 'Unable to save new student photo.'
            ];
        }

        $new_student_photo = 'assets/images/placements/' . $photo_file_name;
    }

    /* UPDATE DATABASE */

    $placement_update = mysqli_prepare(
        $mydb,
        "UPDATE placements
         SET student_name = ?,
             student_photo = ?,
             placement_position = ?,
             company_name = ?,
             placement_status = ?,
             placement_description = ?,
             placement_sort_order = ?
         WHERE placement_id = ?"
    );

    if (!$placement_update) {

        if ($new_photo_full_path !== '' && is_file($new_photo_full_path)) {
            unlink($new_photo_full_path);
        }

        return [
            'status' => false,
            'message' => 'Database prepare failed: ' . mysqli_error($mydb)
        ];
    }

    mysqli_stmt_bind_param(
        $placement_update,
        "ssssssii",
        $student_name,
        $new_student_photo,
        $placement_position,
        $company_name,
        $placement_status,
        $placement_description,
        $placement_sort_order,
        $placement_id
    );

    if (!mysqli_stmt_execute($placement_update)) {

        $placement_error = mysqli_stmt_error($placement_update);
        mysqli_stmt_close($placement_update);

        if ($new_photo_full_path !== '' && is_file($new_photo_full_path)) {
            unlink($new_photo_full_path);
        }

        return [
            'status' => false,
            'message' => 'Unable to update placement: ' . $placement_error
        ];
    }

    mysqli_stmt_close($placement_update);

    /* DELETE OLD PHOTO AFTER SUCCESSFUL UPDATE */

    if ($photo_uploaded && $old_student_photo !== '') {

        $old_relative_path = str_replace('\\', '/', $old_student_photo);
        $expected_prefix = 'assets/images/placements/';

        if (strpos($old_relative_path, $expected_prefix) === 0) {

            $old_filename = substr(
                $old_relative_path,
                strlen($expected_prefix)
            );

            if (
                $old_filename !== '' &&
                basename($old_filename) === $old_filename
            ) {

                $old_full_path = dirname(__DIR__, 3)
                    . DIRECTORY_SEPARATOR
                    . 'assets'
                    . DIRECTORY_SEPARATOR
                    . 'images'
                    . DIRECTORY_SEPARATOR
                    . 'placements'
                    . DIRECTORY_SEPARATOR
                    . $old_filename;

                if (is_file($old_full_path)) {
                    unlink($old_full_path);
                }
            }
        }
    }

    return [
        'status' => true,
        'message' => 'Placement updated successfully.'
    ];
}
