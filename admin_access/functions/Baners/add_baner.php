
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

        // Verify the AVIF container when finfo returns generic MIME.
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

function add_baner($mydb)
{
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

    $uploadDir = dirname(__DIR__, 3) . '/assets/images/banners/';
    $relativeDir = 'assets/images/banners/';

    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
        return 'Unable to create banner upload folder.';
    }

    if (!is_writable($uploadDir)) {
        return 'Banner folder is not writable.';
    }

    $images = array_fill_keys($fields, null);
    $uploadedFiles = [];
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
            return 'Upload error for ' . $field . ': ' . (int)$file['error'];
        }

        if ($file['size'] <= 0 || $file['size'] > 20 * 1024 * 1024) {
            finfo_close($finfo);
            return 'Image must be between 1 byte and 20 MB: ' . $field;
        }

        if (!is_uploaded_file($file['tmp_name'])) {
            finfo_close($finfo);
            return 'Invalid uploaded file: ' . $field;
        }

        $mime = baner_detect_mime_xk91(
            $file['tmp_name'],
            $file['name'],
            $finfo
        );

        if (!isset($allowed[$mime])) {
            finfo_close($finfo);

            foreach ($uploadedFiles as $uploadedFile) {
                if (is_file($uploadedFile)) {
                    unlink($uploadedFile);
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

            foreach ($uploadedFiles as $uploadedFile) {
                if (is_file($uploadedFile)) {
                    unlink($uploadedFile);
                }
            }

            return 'Unable to save image file: ' . $field;
        }

        $images[$field] = $relativeDir . $filename;
        $uploadedFiles[] = $destination;
    }

    finfo_close($finfo);

    if (empty($uploadedFiles)) {
        return 'Please select at least one banner image.';
    }

    $stmt = $mydb->prepare(
        "INSERT INTO baners (
            img_index,
            img_about,
            img_applied_generative_ai_agentic_ai,
            img_artificial_intelligence,
            img_digital_marketing,
            img_java
        ) VALUES (?, ?, ?, ?, ?, ?)"
    );

    if (!$stmt) {
        foreach ($uploadedFiles as $uploadedFile) {
            if (is_file($uploadedFile)) {
                unlink($uploadedFile);
            }
        }

        return 'Database prepare failed: ' . $mydb->error;
    }

    $stmt->bind_param(
        'ssssss',
        $images['img_index'],
        $images['img_about'],
        $images['img_applied_generative_ai_agentic_ai'],
        $images['img_artificial_intelligence'],
        $images['img_digital_marketing'],
        $images['img_java']
    );

    $success = $stmt->execute();
    $error = $stmt->error;
    $stmt->close();

    if (!$success) {
        foreach ($uploadedFiles as $uploadedFile) {
            if (is_file($uploadedFile)) {
                unlink($uploadedFile);
            }
        }

        return 'Database insert failed: ' . $error;
    }

    return 'Banner images saved successfully.';
}
