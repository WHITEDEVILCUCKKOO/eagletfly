<?php
/* admin_access/functions/AllReels/update_reels.php */

require_once __DIR__ . '/reels_helpers.php';

if (!function_exists('update_reel')) {
    /**
     * Reel update karta hai. Nayi file na ho to purani file rehti hai.
     * Purani file tabhi hatti hai jab DB update successful ho.
     *
     * @param array $data  $_POST
     * @param array $files $_FILES
     */
    function update_reel(mysqli $mydb, int $reelId, array $data, array $files = []): array
    {
        $stmt     = null;
        $newVideo = null;
        $newThumb = null;

        try {
            if ($reelId <= 0) {
                throw new ReelsUserException('Invalid reel ID.');
            }

            $title       = trim((string)($data['reel_title'] ?? ''));
            $description = trim((string)($data['reel_description'] ?? ''));
            $status      = (string)($data['reel_status'] ?? 'Active');
            $sortOrder   = (int)($data['reel_sort_order'] ?? 0);

            if ($title === '') {
                throw new ReelsUserException('Reel title is required.');
            }

            if (!in_array($status, ['Active', 'Inactive'], true)) {
                $status = 'Active';
            }

            $old = reels_find($mydb, $reelId);

            if (!$old) {
                throw new ReelsUserException('Reel not found.');
            }

            $slug = reels_unique_slug($mydb, reels_make_slug($title), $reelId);

            $oldVideo = (string)($old['reel_file'] ?? '');
            $oldThumb = (string)($old['reel_thumbnail'] ?? '');

            $newVideo = reels_upload_file('reel_file', 'video', $files, false);
            $newThumb = reels_upload_file('reel_thumbnail', 'image', $files, false);

            $finalVideo = $newVideo ?? $oldVideo;
            $finalThumb = $newThumb ?? $oldThumb;

            $stmt = mysqli_prepare(
                $mydb,
                'UPDATE reels SET
                    reel_title = ?, reel_slug = ?, reel_file = ?, reel_thumbnail = ?,
                    reel_description = ?, reel_status = ?, reel_sort_order = ?
                 WHERE reel_id = ?'
            );

            if (!$stmt) {
                throw new RuntimeException('Unable to prepare update query.');
            }

            mysqli_stmt_bind_param(
                $stmt,
                'ssssssii',
                $title,
                $slug,
                $finalVideo,
                $finalThumb,
                $description,
                $status,
                $sortOrder,
                $reelId
            );

            if (!mysqli_stmt_execute($stmt)) {
                throw new RuntimeException('Update failed: ' . mysqli_stmt_error($stmt), mysqli_stmt_errno($stmt));
            }

            mysqli_stmt_close($stmt);
            $stmt = null;

            /* DB update ho chuka, ab purani replaced files hata do */
            if ($newVideo && $oldVideo !== $newVideo) {
                reels_remove_file($oldVideo);
            }

            if ($newThumb && $oldThumb !== $newThumb) {
                reels_remove_file($oldThumb);
            }

            return [
                'success' => true,
                'message' => 'Reel updated successfully.'
            ];
        } catch (Throwable $e) {
            if ($stmt instanceof mysqli_stmt) {
                try {
                    mysqli_stmt_close($stmt);
                } catch (Throwable $ignored) {
                }
            }

            /* Update fail hua to nayi upload hui files hata do (purani safe rehti hain) */
            reels_remove_file($newVideo);
            reels_remove_file($newThumb);

            error_log('update_reel fallback: ' . $e->getMessage());

            return [
                'success' => false,
                'message' => reels_error_message($e, 'Reel could not be updated. Please try again.')
            ];
        }
    }
}