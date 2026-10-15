
<?php

function add_all_image($mydb)
{
    $image_title = trim($_POST['image_title'] ?? '');
    $image_description = trim($_POST['image_description'] ?? '');
    $image_status = trim($_POST['image_status'] ?? 'Active');

    /* IMAGE TITLE CHECK */

    if ($image_title === '') {
        return [
            'status' => false,
            'message' => 'Image title is required.'
        ];
    }

    /* STATUS CHECK */

    if (!in_array($image_status, ['Active', 'Inactive'], true)) {
        $image_status = 'Active';
    }

    /* SLUG GENERATE */

    $image_slug = strtolower($image_title);
    $image_slug = preg_replace('/[^a-z0-9]+/i', '-', $image_slug);
    $image_slug = trim($image_slug, '-');

    if ($image_slug === '') {
        return [
            'status' => false,
            'message' => 'Please enter a valid image title.'
        ];
    }

    /* DUPLICATE SLUG CHECK */

    $image_slug_check = mysqli_prepare(
        $mydb,
        "SELECT image_id FROM all_images WHERE image_slug = ? LIMIT 1"
    );

    if (!$image_slug_check) {
        return [
            'status' => false,
            'message' => 'Database error: ' . mysqli_error($mydb)
        ];
    }

    mysqli_stmt_bind_param($image_slug_check, "s", $image_slug);
    mysqli_stmt_execute($image_slug_check);
    mysqli_stmt_store_result($image_slug_check);

    if (mysqli_stmt_num_rows($image_slug_check) > 0) {
        mysqli_stmt_close($image_slug_check);

        return [
            'status' => false,
            'message' => 'An image with this title already exists.'
        ];
    }

    mysqli_stmt_close($image_slug_check);

    /* IMAGE FILE CHECK */

    if (
        !isset($_FILES['image_file']) ||
        $_FILES['image_file']['error'] === UPLOAD_ERR_NO_FILE
    ) {
        return [
            'status' => false,
            'message' => 'Please select an image.'
        ];
    }

    if ($_FILES['image_file']['error'] !== UPLOAD_ERR_OK) {
        return [
            'status' => false,
            'message' => 'Image upload failed.'
        ];
    }

    /* FILE SIZE CHECK: 10 MB */

    if ($_FILES['image_file']['size'] > 10 * 1024 * 1024) {
        return [
            'status' => false,
            'message' => 'Image size must not exceed 10 MB.'
        ];
    }

    /* VERIFY REAL IMAGE */

    $image_tmp_path = $_FILES['image_file']['tmp_name'];
    $image_info = @getimagesize($image_tmp_path);

    if ($image_info === false) {
        return [
            'status' => false,
            'message' => 'Please upload a valid image file.'
        ];
    }

    /* ALLOWED IMAGE TYPES */

    $allowed_image_types = [
        IMAGETYPE_JPEG => 'jpg',
        IMAGETYPE_PNG  => 'png',
        IMAGETYPE_WEBP => 'webp',
        IMAGETYPE_GIF  => 'gif'
    ];

    $image_type = $image_info[2];

    if (!isset($allowed_image_types[$image_type])) {
        return [
            'status' => false,
            'message' => 'Only JPG, JPEG, PNG, WEBP and GIF images are allowed.'
        ];
    }

    $image_extension = $allowed_image_types[$image_type];

    /* IMAGE DIRECTORY */

    $image_directory = dirname(__DIR__, 3)
        . DIRECTORY_SEPARATOR
        . 'assets'
        . DIRECTORY_SEPARATOR
        . 'images'
        . DIRECTORY_SEPARATOR
        . 'all-images'
        . DIRECTORY_SEPARATOR;

    if (!is_dir($image_directory)) {
        if (!mkdir($image_directory, 0755, true)) {
            return [
                'status' => false,
                'message' => 'Unable to create image folder.'
            ];
        }
    }

    if (!is_writable($image_directory)) {
        return [
            'status' => false,
            'message' => 'Image folder is not writable.'
        ];
    }

    /* UNIQUE IMAGE NAME */

    try {
        $image_unique_id = bin2hex(random_bytes(6));
    } catch (Throwable $e) {
        return [
            'status' => false,
            'message' => 'Unable to generate image filename.'
        ];
    }

    $image_file_name = $image_slug
        . '-'
        . $image_unique_id
        . '.'
        . $image_extension;

    $image_full_path = $image_directory . $image_file_name;

    /* SAVE IMAGE */

    if (!move_uploaded_file($image_tmp_path, $image_full_path)) {
        return [
            'status' => false,
            'message' => 'Image could not be saved.'
        ];
    }

    /* DATABASE PATH */

    $image_file_path = 'assets/images/all-images/' . $image_file_name;

    $image_thumbnail = '';

    /* CREATED TIME */

    $image_created_at = time();

    /* INSERT IMAGE */

    $image_insert = mysqli_prepare(
        $mydb,
        "INSERT INTO all_images
        (
            image_title,
            image_slug,
            image_file,
            image_thumbnail,
            image_description,
            image_status,
            image_created_at,
            image_updated_at
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, NULL)"
    );

    if (!$image_insert) {
        if (file_exists($image_full_path)) {
            unlink($image_full_path);
        }

        return [
            'status' => false,
            'message' => 'Database prepare failed: ' . mysqli_error($mydb)
        ];
    }

    mysqli_stmt_bind_param(
        $image_insert,
        "ssssssi",
        $image_title,
        $image_slug,
        $image_file_path,
        $image_thumbnail,
        $image_description,
        $image_status,
        $image_created_at
    );

    if (!mysqli_stmt_execute($image_insert)) {
        $image_error = mysqli_stmt_error($image_insert);
        mysqli_stmt_close($image_insert);

        if (file_exists($image_full_path)) {
            unlink($image_full_path);
        }

        return [
            'status' => false,
            'message' => 'Unable to add image: ' . $image_error
        ];
    }

    mysqli_stmt_close($image_insert);

    return [
        'status' => true,
        'message' => 'Image added successfully.'
    ];
}
