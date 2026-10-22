<?php
/* admin_access/functions/AllReels/add_reels.php */

require_once __DIR__ . '/reels_helpers.php';

if (!function_exists('add_reel')) {
    /**
     * Naya reel add karta hai (video + thumbnail upload bhi yahin hota hai).
     *
     * @param array $data  $_POST
     * @param array $files $_FILES
     * @return array ['success' => bool, 'message' => string, 'reel_id' => int (success par)]
     */
    function add_reel(mysqli $mydb, array $data, array $files = []): array
    {
        $stmt     = null;
        $newVideo = null;
        $newThumb = null;

        try {
            $title       = trim((string)($data['reel_title'] ?? ''));
            $description = trim((string)($data['reel_description'] ?? ''));
            $status      = (string)($data['reel_status'] ?? 'Active');
            $sortOrder   = (int)($data['reel_sort_order'] ?? 0);

            if ($title === '') {
                throw new ReelsUserException('Reel title is required.');
            }

            $slug = reels_unique_slug($mydb, reels_make_slug($title));

            if (!in_array($status, ['Active', 'Inactive'], true)) {
                $status = 'Active';
            }

            $newVideo = reels_upload_file('reel_file', 'video', $files, true);
            $newThumb = reels_upload_file('reel_thumbnail', 'image', $files, false);
            $thumb    = $newThumb ?? '';

            $stmt = mysqli_prepare(
                $mydb,
                'INSERT INTO reels
                    (reel_title, reel_slug, reel_file, reel_thumbnail, reel_description, reel_status, reel_sort_order)
                 VALUES (?, ?, ?, ?, ?, ?, ?)'
            );

            if (!$stmt) {
                throw new RuntimeException('Unable to prepare insert query.');
            }

            mysqli_stmt_bind_param($stmt, 'ssssssi', $title, $slug, $newVideo, $thumb, $description, $status, $sortOrder);

            if (!mysqli_stmt_execute($stmt)) {
                throw new RuntimeException('Insert failed: ' . mysqli_stmt_error($stmt), mysqli_stmt_errno($stmt));
            }

            $id = (int)mysqli_insert_id($mydb);
            mysqli_stmt_close($stmt);
            $stmt = null;

            return [
                'success' => true,
                'message' => 'Reel added successfully.',
                'reel_id' => $id
            ];
        } catch (Throwable $e) {
            if ($stmt instanceof mysqli_stmt) {
                try {
                    mysqli_stmt_close($stmt);
                } catch (Throwable $ignored) {
                }
            }

            /* Save fail hua to nayi upload hui files hata do */
            reels_remove_file($newVideo);
            reels_remove_file($newThumb);

            error_log('add_reel fallback: ' . $e->getMessage());

            return [
                'success' => false,
                'message' => reels_error_message($e, 'Reel could not be added. Please check the details and try again.')
            ];
        }
    }
}