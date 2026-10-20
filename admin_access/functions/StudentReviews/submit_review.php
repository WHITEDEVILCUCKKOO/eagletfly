
<?php

if (!function_exists('eagletfly_submit_student_review_xk91')) {
    function eagletfly_submit_student_review_xk91($mydb)
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return [
                'success' => false,
                'message' => 'Invalid request method.'
            ];
        }

        // CSRF token validation
        if (
            !isset($_SESSION['student_review_csrf_xk91']) ||
            !isset($_POST['student_review_csrf_xk91']) ||
            !is_string($_POST['student_review_csrf_xk91']) ||
            !hash_equals(
                $_SESSION['student_review_csrf_xk91'],
                $_POST['student_review_csrf_xk91']
            )
        ) {
            return [
                'success' => false,
                'message' => 'Security token expired. Please refresh and try again.'
            ];
        }

        // Honeypot field: real users should leave this empty
        $honeypot = $_POST['website_url_xk91'] ?? '';

        if (!is_string($honeypot) || trim($honeypot) !== '') {
            return [
                'success' => false,
                'message' => 'Unable to submit this review.'
            ];
        }

        $studentName = $_POST['student_name'] ?? '';
        $courseName = $_POST['course_name'] ?? '';
        $reviewMessage = $_POST['review_message'] ?? '';
        $ratingValue = $_POST['review_rating'] ?? '';

        if (
            !is_string($studentName) ||
            !is_string($courseName) ||
            !is_string($reviewMessage) ||
            !is_string($ratingValue)
        ) {
            return [
                'success' => false,
                'message' => 'Invalid form data.'
            ];
        }

        $studentName = trim($studentName);
        $courseName = trim($courseName);
        $reviewMessage = trim($reviewMessage);

        // Server-side length validation
        if (
            $studentName === '' ||
            mb_strlen($studentName, 'UTF-8') > 100
        ) {
            return [
                'success' => false,
                'message' => 'Student name is required and must be within 100 characters.'
            ];
        }

        if (
            $courseName === '' ||
            mb_strlen($courseName, 'UTF-8') > 150
        ) {
            return [
                'success' => false,
                'message' => 'Course name is required and must be within 150 characters.'
            ];
        }

        if (
            $reviewMessage === '' ||
            mb_strlen($reviewMessage, 'UTF-8') > 3000
        ) {
            return [
                'success' => false,
                'message' => 'Review is required and must be within 3000 characters.'
            ];
        }

        // Only integer ratings from 1 to 5 are accepted
        if (
            !preg_match('/^[1-5]$/', $ratingValue)
        ) {
            return [
                'success' => false,
                'message' => 'Please select a valid rating.'
            ];
        }

        // Basic spam protection
        if (
            preg_match('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', $reviewMessage)
        ) {
            return [
                'success' => false,
                'message' => 'Review contains invalid characters.'
            ];
        }

        $rating = (int) $ratingValue;

        $stmt = mysqli_prepare(
            $mydb,
            "INSERT INTO student_reviews_xk91
                (student_name, course_name, review_message, review_rating, review_status)
             VALUES (?, ?, ?, ?, 'Pending')"
        );

        if (!$stmt) {
            error_log('Student review prepare failed: ' . mysqli_error($mydb));

            return [
                'success' => false,
                'message' => 'Unable to submit your review right now.'
            ];
        }

        mysqli_stmt_bind_param(
            $stmt,
            'sssi',
            $studentName,
            $courseName,
            $reviewMessage,
            $rating
        );

        $saved = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        if (!$saved) {
            error_log('Student review insert failed.');

            return [
                'success' => false,
                'message' => 'Unable to submit your review right now.'
            ];
        }

        // Prevent accidental resubmission with the same token
        $_SESSION['student_review_csrf_xk91'] = bin2hex(random_bytes(32));

        return [
            'success' => true,
            'message' => 'Thank you! Your review has been submitted for approval.'
        ];
    }
}
