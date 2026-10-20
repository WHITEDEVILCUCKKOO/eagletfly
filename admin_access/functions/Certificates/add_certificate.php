
<?php

if (!function_exists('eagletfly_certificate_upload_xk91')) {
    function eagletfly_certificate_upload_xk91($file, $required = true)
    {
        $uploadDir = dirname(__DIR__, 3) . '/uploads/certificates/';

        if (!is_dir($uploadDir) &&
            !mkdir($uploadDir, 0755, true) &&
            !is_dir($uploadDir)) {
            return ['success' => false, 'message' => 'Upload folder could not be created.'];
        }

        if (
            !isset($file) ||
            !isset($file['error']) ||
            $file['error'] === UPLOAD_ERR_NO_FILE
        ) {
            return $required
                ? ['success' => false, 'message' => 'Please select a student photo.']
                : ['success' => true, 'path' => null];
        }

        if ($file['error'] !== UPLOAD_ERR_OK) {
            return ['success' => false, 'message' => 'Photo upload failed.'];
        }

        if ($file['size'] > 5 * 1024 * 1024) {
            return ['success' => false, 'message' => 'Photo must be 5 MB or smaller.'];
        }

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($file['tmp_name']);

        $allowed = [
            'image/jpeg' => 'jpg',
            'image/png'  => 'png',
            'image/webp' => 'webp'
        ];

        if (!isset($allowed[$mime]) || @getimagesize($file['tmp_name']) === false) {
            return ['success' => false, 'message' => 'Only JPG, PNG and WEBP images are allowed.'];
        }

        $filename = bin2hex(random_bytes(16)) . '.' . $allowed[$mime];

        if (!move_uploaded_file($file['tmp_name'], $uploadDir . $filename)) {
            return ['success' => false, 'message' => 'Could not save the uploaded photo.'];
        }

        return [
            'success' => true,
            'path' => 'uploads/certificates/' . $filename
        ];
    }
}

if (!function_exists('add_certificate')) {
    function add_certificate($mydb)
    {
        $student = trim($_POST['student_name'] ?? '');
        $course = trim($_POST['course_name'] ?? '');
        $title = trim($_POST['certificate_title'] ?? 'Certificate of Training');
        $review = trim($_POST['student_review'] ?? '');
        $rating = filter_var($_POST['review_rating'] ?? 5, FILTER_VALIDATE_INT);
        $date = trim($_POST['certificate_date'] ?? '');
        $status = $_POST['certificate_status'] ?? 'Active';
        $order = filter_var($_POST['certificate_sort_order'] ?? 0, FILTER_VALIDATE_INT);

        if ($student === '' || $course === '') {
            return ['success' => false, 'message' => 'Student name and course name are required.'];
        }

        if ($rating === false || $rating < 1 || $rating > 5) {
            return ['success' => false, 'message' => 'Rating must be between 1 and 5.'];
        }

        if (!in_array($status, ['Active', 'Inactive'], true)) {
            return ['success' => false, 'message' => 'Invalid certificate status.'];
        }

        if ($order === false) {
            return ['success' => false, 'message' => 'Invalid sort order.'];
        }

        if ($date !== '' && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            return ['success' => false, 'message' => 'Invalid certificate date.'];
        }

        $upload = eagletfly_certificate_upload_xk91($_FILES['student_photo'] ?? null);

        if (!$upload['success']) {
            return ['success' => false, 'message' => $upload['message']];
        }

        $photo = $upload['path'];
        $dateValue = $date !== '' ? $date : null;

        $stmt = mysqli_prepare(
            $mydb,
            "INSERT INTO student_certificates
            (student_name, course_name, certificate_title, student_photo,
             student_review, review_rating, certificate_date,
             certificate_status, certificate_sort_order)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        if (!$stmt) {
            @unlink(dirname(__DIR__, 3) . '/' . $photo);
            return ['success' => false, 'message' => 'Could not prepare certificate record.'];
        }

        mysqli_stmt_bind_param(
            $stmt,
            'sssssissi',
            $student,
            $course,
            $title,
            $photo,
            $review,
            $rating,
            $dateValue,
            $status,
            $order
        );

        $saved = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if (!$saved) {
            @unlink(dirname(__DIR__, 3) . '/' . $photo);
            return ['success' => false, 'message' => 'Certificate could not be saved.'];
        }

        return ['success' => true, 'message' => 'Student certificate added successfully.'];
    }
}
