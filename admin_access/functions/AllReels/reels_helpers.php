<?php
/* =========================================================
   REELS HELPERS (shared by add_reels / update_reels / delete_reels)
   Location: admin_access/functions/AllReels/reels_helpers.php
   Files save hoti hain: <project root>/assets/reels/ (+ /thumbnails/)
   ========================================================= */

if (!class_exists('ReelsUserException')) {
    /* User ko dikhane layak (safe) error message ke liye */
    class ReelsUserException extends RuntimeException {}
}

if (!function_exists('reels_config')) {
    function reels_config(): array
    {
        $root = dirname(__DIR__, 3); // AllReels -> functions -> admin_access -> project root

        $uploadDir = $root . '/assets/reels/';
        $thumbDir  = $uploadDir . 'thumbnails/';

        foreach ([$uploadDir, $thumbDir] as $dir) {
            if (!is_dir($dir)) {
                @mkdir($dir, 0755, true);
            }
        }

        return [
            'upload_dir' => $uploadDir,
            'thumb_dir'  => $thumbDir,
            'upload_url' => 'assets/reels/',
            'thumb_url'  => 'assets/reels/thumbnails/',
        ];
    }
}

if (!function_exists('reels_error_message')) {
    /* Safe message: sirf ReelsUserException ka message user ko dikhta hai */
    function reels_error_message(Throwable $e, string $fallback): string
    {
        if ($e instanceof ReelsUserException) {
            return $e->getMessage();
        }

        if ((int)$e->getCode() === 1062) {
            return 'This reel slug already exists. Please use a different slug.';
        }

        return $fallback;
    }
}

if (!function_exists('reels_make_slug')) {
    /* Slug hamesha title se banta hai (posted slug ignore). Hindi/khali title ho to fallback slug. */
    function reels_make_slug(string $title): string
    {
        $slug = strtolower(trim($title));
        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
        $slug = trim((string)$slug, '-');

        if ($slug === '') {
            $slug = 'reel-' . substr(bin2hex(random_bytes(4)), 0, 6);
        }

        return $slug;
    }
}

if (!function_exists('reels_unique_slug')) {
    /* Slug pehle se ho to -2, -3 ... lagata hai. $excludeId = update wala reel. */
    function reels_unique_slug(mysqli $mydb, string $slug, int $excludeId = 0): string
    {
        $candidate = $slug;
        $i = 2;

        while ($i < 1000) {
            $stmt = mysqli_prepare($mydb, 'SELECT reel_id FROM reels WHERE reel_slug = ? AND reel_id <> ? LIMIT 1');

            if (!$stmt) {
                return $candidate; // DB unique key last safety rahegi
            }

            mysqli_stmt_bind_param($stmt, 'si', $candidate, $excludeId);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $exists = mysqli_stmt_num_rows($stmt) > 0;
            mysqli_stmt_close($stmt);

            if (!$exists) {
                return $candidate;
            }

            $candidate = $slug . '-' . $i;
            $i++;
        }

        return $slug . '-' . bin2hex(random_bytes(3));
    }
}

if (!function_exists('reels_upload_file')) {
    /**
     * Ek file validate + save karta hai. URL (DB me save hone wala) return karta hai.
     * $files = $_FILES
     */
    function reels_upload_file(string $inputName, string $type, array $files, bool $required = false): ?string
    {
        if (!isset($files[$inputName]) || ($files[$inputName]['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
            if ($required) {
                throw new ReelsUserException('Please select the required video file.');
            }
            return null;
        }

        $file = $files[$inputName];
        $cfg  = reels_config();

        if ($file['error'] === UPLOAD_ERR_INI_SIZE || $file['error'] === UPLOAD_ERR_FORM_SIZE) {
            throw new ReelsUserException('File is larger than the server upload limit (check php.ini).');
        }

        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new ReelsUserException('File upload failed. Please try again.');
        }

        $isVideo = ($type === 'video');
        $maxSize = $isVideo ? 100 * 1024 * 1024 : 5 * 1024 * 1024;

        if ((int)$file['size'] <= 0 || (int)$file['size'] > $maxSize) {
            throw new ReelsUserException(
                $isVideo ? 'Video size must be 100 MB or smaller.' : 'Thumbnail size must be 5 MB or smaller.'
            );
        }

        if (!is_uploaded_file($file['tmp_name'])) {
            throw new ReelsUserException('Invalid uploaded file.');
        }

        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime  = $finfo->file($file['tmp_name']);

        $allowed = $isVideo
            ? ['video/mp4' => 'mp4', 'video/webm' => 'webm', 'video/ogg' => 'ogv']
            : ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];

        if (!isset($allowed[$mime])) {
            throw new ReelsUserException(
                $isVideo ? 'Only MP4, WebM or OGG videos are allowed.' : 'Only JPG, PNG or WEBP thumbnails are allowed.'
            );
        }

        $directory    = $isVideo ? $cfg['upload_dir'] : $cfg['thumb_dir'];
        $urlDirectory = $isVideo ? $cfg['upload_url'] : $cfg['thumb_url'];

        if (!is_dir($directory) || !is_writable($directory)) {
            throw new ReelsUserException('Upload folder (assets/reels) is not writable.');
        }

        $filename = bin2hex(random_bytes(16)) . '.' . $allowed[$mime];

        if (!move_uploaded_file($file['tmp_name'], $directory . $filename)) {
            throw new ReelsUserException('Unable to save uploaded file.');
        }

        return $urlDirectory . $filename;
    }
}

if (!function_exists('reels_remove_file')) {
    /* Sirf assets/reels ke andar ki file hatata hai. Kabhi error nahi phenkta. */
    function reels_remove_file(?string $url): void
    {
        try {
            if (!$url) {
                return;
            }

            $cfg = reels_config();
            $url = str_replace('\\', '/', $url);

            if (strpos($url, $cfg['thumb_url']) === 0) {
                $base     = $cfg['thumb_dir'];
                $relative = substr($url, strlen($cfg['thumb_url']));
            } elseif (strpos($url, $cfg['upload_url']) === 0) {
                $base     = $cfg['upload_dir'];
                $relative = substr($url, strlen($cfg['upload_url']));
            } else {
                return;
            }

            if ($relative === '' || basename($relative) !== $relative) {
                return;
            }

            $path = $base . $relative;

            if (is_file($path) && !is_link($path)) {
                @unlink($path);
            }
        } catch (Throwable $e) {
            error_log('reels_remove_file fallback: ' . $e->getMessage());
        }
    }
}

if (!function_exists('reels_find')) {
    /* Ek reel ka record (file + thumbnail) laata hai, nahi mila to null */
    function reels_find(mysqli $mydb, int $reelId): ?array
    {
        $stmt = mysqli_prepare($mydb, 'SELECT reel_id, reel_file, reel_thumbnail FROM reels WHERE reel_id = ?');

        if (!$stmt) {
            throw new RuntimeException('Unable to prepare lookup query.');
        }

        mysqli_stmt_bind_param($stmt, 'i', $reelId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row    = $result ? mysqli_fetch_assoc($result) : null;
        mysqli_stmt_close($stmt);

        return $row ?: null;
    }
}

if (!function_exists('reels_get_all')) {
    /* Saari reels (list ke liye). Error aaye to khali array, website nahi tutegi. */
    function reels_get_all(mysqli $mydb): array
    {
        $reels = [];

        try {
            $query = mysqli_query($mydb, 'SELECT * FROM reels ORDER BY reel_sort_order ASC, reel_id DESC');

            if ($query) {
                while ($row = mysqli_fetch_assoc($query)) {
                    $reels[] = $row;
                }
            }
        } catch (Throwable $e) {
            error_log('reels_get_all fallback: ' . $e->getMessage());
        }

        return $reels;
    }
}