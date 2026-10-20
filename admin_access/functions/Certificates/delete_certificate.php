
<?php

if (!function_exists('delete_certificate')) {
    function delete_certificate($mydb)
    {
        $id = filter_var(
            $_POST['certificate_id'] ?? null,
            FILTER_VALIDATE_INT
        );

        if (!$id || $id < 1) {
            return [
                'success' => false,
                'message' => 'Invalid certificate ID.'
            ];
        }

        $stmt = mysqli_prepare(
            $mydb,
            "SELECT student_photo
             FROM student_certificates
             WHERE certificate_id = ?"
        );

        if (!$stmt) {
            return [
                'success' => false,
                'message' => 'Could not prepare certificate lookup.'
            ];
        }

        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $certificate = mysqli_fetch_assoc($result);

        mysqli_stmt_close($stmt);

        if (!$certificate) {
            return [
                'success' => false,
                'message' => 'Certificate record not found.'
            ];
        }

        $stmt = mysqli_prepare(
            $mydb,
            "DELETE FROM student_certificates
             WHERE certificate_id = ?"
        );

        if (!$stmt) {
            return [
                'success' => false,
                'message' => 'Could not prepare certificate deletion.'
            ];
        }

        mysqli_stmt_bind_param($stmt, 'i', $id);
        $deleted = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        if (!$deleted) {
            return [
                'success' => false,
                'message' => 'Certificate could not be deleted.'
            ];
        }

        $photo = $certificate['student_photo'] ?? '';

        if (
            $photo !== '' &&
            strpos($photo, 'uploads/certificates/') === 0 &&
            basename($photo) === substr(
                $photo,
                strlen('uploads/certificates/')
            )
        ) {
            $photoPath = dirname(__DIR__, 3) . '/' . $photo;

            if (is_file($photoPath)) {
                @unlink($photoPath);
            }
        }

        return [
            'success' => true,
            'message' => 'Student certificate deleted successfully.'
        ];
    }
}
