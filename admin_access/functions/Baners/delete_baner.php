
<?php

function delete_baner($mydb)
{
    $banerId = filter_var(
        $_POST['baner_id'] ?? null,
        FILTER_VALIDATE_INT
    );

    $field = $_POST['image_field'] ?? '';

    $allowedFields = [
        'img_index',
        'img_about',
        'img_applied_generative_ai_agentic_ai',
        'img_artificial_intelligence',
        'img_digital_marketing',
        'img_java'
    ];

    if (!$banerId || $banerId < 1 || !in_array($field, $allowedFields, true)) {
        return 'Invalid banner request.';
    }

    $stmt = $mydb->prepare(
        "SELECT `$field` FROM baners WHERE baner_id = ? LIMIT 1"
    );

    if (!$stmt) {
        return 'Unable to prepare banner query.';
    }

    $stmt->bind_param('i', $banerId);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    if (!$row || empty($row[$field])) {
        return 'Banner image not found.';
    }

    $imagePath = $row[$field];

    $stmt = $mydb->prepare(
        "UPDATE baners SET `$field` = NULL WHERE baner_id = ?"
    );

    if (!$stmt) {
        return 'Unable to prepare image deletion.';
    }

    $stmt->bind_param('i', $banerId);
    $success = $stmt->execute();
    $stmt->close();

    if (!$success) {
        return 'Failed to delete banner image.';
    }

    $prefix = 'assets/images/banners/';

    if (strpos($imagePath, $prefix) === 0) {
        $filePath = dirname(__DIR__, 3) . '/' . $imagePath;

        if (is_file($filePath)) {
            unlink($filePath);
        }
    }

    return 'Banner image deleted successfully.';
}
