
<?php

if (!function_exists('baner_detect_mime_xk91')) {
    function baner_detect_mime_xk91($tmpPath, $originalName, $finfo)
    {
        $mime = finfo_file($finfo, $tmpPath);

        if (is_string($mime) && isset([
            'image/jpeg' => true,
            'image/png'  => true,
            'image/webp' => true,
            'image/avif' => true
        ][$mime])) {
            return $mime;
        }

        if (
            $mime === 'application/octet-stream' &&
            strtolower(pathinfo($originalName, PATHINFO_EXTENSION)) === 'avif'
        ) {
            $handle = @fopen($tmpPath, 'rb');

            if ($handle !== false) {
                $header = fread($handle, 256);
                fclose($handle);

                if (
                    is_string($header) &&
                    strlen($header) >= 12 &&
                    substr($header, 4, 4) === 'ftyp' &&
                    (
                        strpos($header, 'avif') !== false ||
                        strpos($header, 'avis') !== false
                    )
                ) {
                    return 'image/avif';
                }
            }
        }

        return $mime;
    }
}

function update_baner($mydb)
{
    $banerId = filter_var(
        $_POST['baner_id'] ?? null,
        FILTER_VALIDATE_INT
    );

    if (!$banerId || $banerId < 1) {
        return 'Invalid banner ID.';
    }

    $fields = [
        'img_index',
        'img_about',
        'img_applied_generative_ai_agentic_ai',
        'img_artificial_intelligence',
        'img_digital_marketing',
        'img_java'
    ];

    $allowed = [
        'image/jpeg' => 'jpg',
        'image/png'  => 'png',
        'image/webp' => 'webp',
        'image/avif' => 'avif'
    ];

    $stmt = $mydb->prepare(
        "SELECT img_index, img_about,
                img_applied_generative_ai_agentic_ai,
                img_artificial_intelligence,
                img_digital_marketing, img_java
         FROM baners
         WHERE baner_id = ?
         LIMIT 1"
    );

    if (!$stmt) {
        return 'Database select prepare failed: ' . $mydb->error;
    }

    $stmt->bind_param('i', $banerId);

    if (!$stmt->execute()) {
        $error = $stmt->error;
        $stmt->close();
        return 'Database select failed: ' . $error;
    }

    $result = $stmt->get_result();
    $oldImages = $result->fetch_assoc();
    $stmt->close();

    if (!$oldImages) {
        return 'Banner record not found.';
    }

    $uploadDir = dirname(__DIR__, 3) . '/assets/images/banners/';
    $relativeDir = 'assets/images/banners/';

    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
        return 'Unable to create banner upload folder.';
    }

    if (!is_writable($uploadDir)) {
        return 'Banner folder is not writable.';
    }

    $images = $oldImages;
    $newFiles = [];
    $finfo = finfo_open(FILEINFO_MIME_TYPE);

    if (!$finfo) {
        return 'Unable to validate image MIME type.';
    }

    foreach ($fields as $field) {
        if (!isset($_FILES[$field])) {
            continue;
        }

        $file = $_FILES[$field];

        if ($file['error'] === UPLOAD_ERR_NO_FILE) {
            continue;
        }

        if ($file['error'] !== UPLOAD_ERR_OK) {
            finfo_close($finfo);
            foreach ($newFiles as $newFile) {
                if (is_file($newFile)) {
                    unlink($newFile);
                }
            }
            return 'Upload error for ' . $field . ': ' . (int)$file['error'];
        }

        if (
            $file['size'] <= 0 ||
            $file['size'] > 20 * 1024 * 1024
        ) {
            finfo_close($finfo);

            foreach ($newFiles as $newFile) {
                if (is_file($newFile)) {
                    unlink($newFile);
                }
            }

            return 'Image must be between 1 byte and 20 MB: ' . $field;
        }

        if (!is_uploaded_file($file['tmp_name'])) {
            finfo_close($finfo);
            foreach ($newFiles as $newFile) {
                if (is_file($newFile)) {
                    unlink($newFile);
                }
            }
            return 'Invalid uploaded file: ' . $field;
        }

        $mime = baner_detect_mime_xk91(
            $file['tmp_name'],
            $file['name'],
            $finfo
        );

        if (!isset($allowed[$mime])) {
            finfo_close($finfo);

            foreach ($newFiles as $newFile) {
                if (is_file($newFile)) {
                    unlink($newFile);
                }
            }

            return 'Invalid image format for ' . $field .
                '. Detected MIME: ' . $mime .
                '. Please use a valid JPG, PNG, WEBP or AVIF image.';
        }

        $filename = bin2hex(random_bytes(16)) . '.' . $allowed[$mime];
        $destination = $uploadDir . $filename;

        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            finfo_close($finfo);

            foreach ($newFiles as $newFile) {
                if (is_file($newFile)) {
                    unlink($newFile);
                }
            }

            return 'Unable to save image file: ' . $field;
        }

        $images[$field] = $relativeDir . $filename;
        $newFiles[] = $destination;
    }

    finfo_close($finfo);

    if (empty($newFiles)) {
        return 'Please select a new banner image to update.';
    }

    $stmt = $mydb->prepare(
        "UPDATE baners SET
            img_index = ?,
            img_about = ?,
            img_applied_generative_ai_agentic_ai = ?,
            img_artificial_intelligence = ?,
            img_digital_marketing = ?,
            img_java = ?
         WHERE baner_id = ?"
    );

    if (!$stmt) {
        foreach ($newFiles as $newFile) {
            if (is_file($newFile)) {
                unlink($newFile);
            }
        }

        return 'Database update prepare failed: ' . $mydb->error;
    }

    $stmt->bind_param(
        'ssssssi',
        $images['img_index'],
        $images['img_about'],
        $images['img_applied_generative_ai_agentic_ai'],
        $images['img_artificial_intelligence'],
        $images['img_digital_marketing'],
        $images['img_java'],
        $banerId
    );

    $success = $stmt->execute();
    $error = $stmt->error;
    $stmt->close();

    if (!$success) {
        foreach ($newFiles as $newFile) {
            if (is_file($newFile)) {
                unlink($newFile);
            }
        }

        return 'Database update failed: ' . $error;
    }

    // Delete replaced files only after database update succeeds.
    foreach ($fields as $field) {
        if (
            $images[$field] !== $oldImages[$field] &&
            !empty($oldImages[$field]) &&
            strpos($oldImages[$field], $relativeDir) === 0
        ) {
            $oldFile = dirname(__DIR__, 3) . '/' . $oldImages[$field];

            if (is_file($oldFile)) {
                unlink($oldFile);
            }
        }
    }

    return 'Banner image updated successfully.';
}
