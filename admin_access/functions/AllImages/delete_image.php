
<?php

function delete_all_image($mydb)
{
    /* IMAGE ID */

    $image_id = intval($_POST['image_id'] ?? 0);

    if ($image_id <= 0) {
        return [
            'status' => false,
            'message' => 'Invalid image ID.'
        ];
    }

    /* GET IMAGE DETAILS */

    $get_image = mysqli_prepare(
        $mydb,
        "SELECT image_file, image_thumbnail
         FROM all_images
         WHERE image_id = ?
         LIMIT 1"
    );

    if (!$get_image) {
        return [
            'status' => false,
            'message' => 'Database error: ' . mysqli_error($mydb)
        ];
    }

    mysqli_stmt_bind_param($get_image, "i", $image_id);
    mysqli_stmt_execute($get_image);

    $image_result = mysqli_stmt_get_result($get_image);
    $image_data = mysqli_fetch_assoc($image_result);

    mysqli_stmt_close($get_image);

    if (!$image_data) {
        return [
            'status' => false,
            'message' => 'Image not found.'
        ];
    }

    /* DELETE DATABASE RECORD */

    $delete_image = mysqli_prepare(
        $mydb,
        "DELETE FROM all_images WHERE image_id = ?"
    );

    if (!$delete_image) {
        return [
            'status' => false,
            'message' => 'Database error: ' . mysqli_error($mydb)
        ];
    }

    mysqli_stmt_bind_param($delete_image, "i", $image_id);

    if (!mysqli_stmt_execute($delete_image)) {
        $delete_error = mysqli_stmt_error($delete_image);
        mysqli_stmt_close($delete_image);

        return [
            'status' => false,
            'message' => 'Unable to delete image: ' . $delete_error
        ];
    }

    mysqli_stmt_close($delete_image);

    /* DELETE PHYSICAL IMAGE FILES */

    $image_project_directory = dirname(__DIR__, 3);

    $image_paths_to_delete = [
        $image_data['image_file'] ?? '',
        $image_data['image_thumbnail'] ?? ''
    ];

    foreach ($image_paths_to_delete as $image_relative_path) {

        if ($image_relative_path === '') {
            continue;
        }

        /* ONLY ALLOW FILES INSIDE all-images */

        $image_relative_path = str_replace('\\', '/', $image_relative_path);

        $image_expected_prefix = 'assets/images/all-images/';

        if (strpos($image_relative_path, $image_expected_prefix) !== 0) {
            continue;
        }

        $image_filename = substr(
            $image_relative_path,
            strlen($image_expected_prefix)
        );

        /* PREVENT PATH TRAVERSAL */

        if (
            $image_filename === '' ||
            basename($image_filename) !== $image_filename
        ) {
            continue;
        }

        $image_full_path = $image_project_directory
            . DIRECTORY_SEPARATOR
            . str_replace(
                '/',
                DIRECTORY_SEPARATOR,
                $image_relative_path
            );

        if (is_file($image_full_path)) {
            unlink($image_full_path);
        }
    }

    return [
        'status' => true,
        'message' => 'Image deleted successfully.'
    ];
}
