<?php
/* admin_access/functions/AllReels/delete_reels.php */

require_once __DIR__ . '/reels_helpers.php';

if (!function_exists('delete_reel')) {
    /**
     * Reel DB se delete karta hai aur video + thumbnail file bhi assets se hata deta hai.
     */
    function delete_reel(mysqli $mydb, int $reelId): array
    {
        $stmt = null;

        try {
            if ($reelId <= 0) {
                throw new ReelsUserException('Invalid reel ID.');
            }

            $old = reels_find($mydb, $reelId);

            if (!$old) {
                throw new ReelsUserException('Reel not found.');
            }

            $stmt = mysqli_prepare($mydb, 'DELETE FROM reels WHERE reel_id = ?');

            if (!$stmt) {
                throw new RuntimeException('Unable to prepare delete query.');
            }

            mysqli_stmt_bind_param($stmt, 'i', $reelId);

            if (!mysqli_stmt_execute($stmt)) {
                throw new RuntimeException('Delete failed: ' . mysqli_stmt_error($stmt), mysqli_stmt_errno($stmt));
            }

            $deleted = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            $stmt = null;

            if ($deleted <= 0) {
                throw new ReelsUserException('Reel not found.');
            }

            /* DB se delete ho gaya, ab files hata do */
            reels_remove_file($old['reel_file'] ?? null);
            reels_remove_file($old['reel_thumbnail'] ?? null);

            return [
                'success' => true,
                'message' => 'Reel deleted successfully.'
            ];
        } catch (Throwable $e) {
            if ($stmt instanceof mysqli_stmt) {
                try {
                    mysqli_stmt_close($stmt);
                } catch (Throwable $ignored) {
                }
            }

            error_log('delete_reel fallback: ' . $e->getMessage());

            return [
                'success' => false,
                'message' => reels_error_message($e, 'Reel could not be deleted. Please try again.')
            ];
        }
    }
}