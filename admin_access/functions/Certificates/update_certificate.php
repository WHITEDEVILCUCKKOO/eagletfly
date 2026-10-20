
<?php

if (!function_exists('update_certificate')) {
    function update_certificate($mydb)
    {
        $id = filter_var($_POST['certificate_id'] ?? null, FILTER_VALIDATE_INT);
        $student = trim($_POST['student_name'] ?? '');
        $course = trim($_POST['course_name'] ?? '');
        $title = trim($_POST['certificate_title'] ?? 'Certificate of Training');
        $review = trim($_POST['student_review'] ?? '');
        $rating = filter_var($_POST['review_rating'] ?? 5, FILTER_VALIDATE_INT);
        $date = trim($_POST['certificate_date'] ?? '');
        $status = $_POST['certificate_status'] ?? 'Active';
        $order = filter_var($_POST['certificate_sort_order'] ?? 0, FILTER_VALIDATE_INT);

        if (!$id || $student === '' || $course === '') {
            return ['success' => false, 'message' => 'Valid certificate ID, student name and course are required.'];
        }

        if ($rating === false || $rating < 1 || $rating > 5) {
            return ['success' => false, 'message' => 'Rating must be between 1 and 5.'];
        }

        if (!in_array($status, ['Active', 'Inactive'], true) || $order === false) {
            return ['success' => false, 'message' => 'Invalid status or sort order.'];
        }

        if ($date !== '' && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            return ['success' => false, 'message' => 'Invalid certificate date.'];
        }

        $check = mysqli_prepare(
            $mydb,
            "SELECT student_photo FROM student_certificates WHERE certificate_id = ?"
        );
        mysqli_stmt_bind_param($check, 'i', $id);
        mysqli_stmt_execute($check);
        $result = mysqli_stmt_get_result($check);
        $old = mysqli_fetch_assoc($result);
        mysqli_stmt_close($check);

        if (!$old) {
            return ['success' => false, 'message' => 'Certificate record not found.'];
        }

        $photo = $old['student_photo'];
        $newUpload = null;

        if (
            isset($_FILES['student_photo']) &&
            ($_FILES['student_photo']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_NO_FILE
        ) {
            $newUpload = eagletfly_certificate_upload_xk91($_FILES['student_photo'], false);

            if (!$newUpload['success']) {
                return ['success' => false, 'message' => $newUpload['message']];
            }

            $photo = $newUpload['path'];
        }

        $dateValue = $date !== '' ? $date : null;

        $stmt = mysqli_prepare(
            $mydb,
            "UPDATE student_certificates SET
                student_name = ?,
                course_name = ?,
                certificate_title = ?,
                student_photo = ?,
                student_review = ?,
                review_rating = ?,
                certificate_date = ?,
                certificate_status = ?,
                certificate_sort_order = ?
             WHERE certificate_id = ?"
        );

        if (!$stmt) {
            if ($newUpload && $newUpload['path']) {
                @unlink(dirname(__DIR__, 3) . '/' . $newUpload['path']);
            }
            return ['success' => false, 'message' => 'Could not prepare certificate update.'];
        }

        mysqli_stmt_bind_param(
            $stmt,
            'sssssissii',
            $student,
            $course,
            $title,
            $photo,
            $review,
            $rating,
            $dateValue,
            $status,
            $order,
            $id
        );

        $saved = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if (!$saved) {
            if ($newUpload && $newUpload['path']) {
                @unlink(dirname(__DIR__, 3) . '/' . $newUpload['path']);
            }
            return ['success' => false, 'message' => 'Certificate update failed.'];
        }

        if ($newUpload && $newUpload['path'] && strpos($old['student_photo'], 'uploads/certificates/') === 0) {
            $oldPath = dirname(__DIR__, 3) . '/' . $old['student_photo'];
            if (is_file($oldPath)) {
                @unlink($oldPath);
            }
        }

        return ['success' => true, 'message' => 'Student certificate updated successfully.'];
    }
}
