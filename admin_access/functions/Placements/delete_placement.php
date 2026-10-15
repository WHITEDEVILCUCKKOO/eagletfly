
<?php

function delete_placement($mydb)
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return [
            'status' => false,
            'message' => 'Invalid request method.'
        ];
    }

    $placement_id = filter_input(INPUT_POST, 'placement_id', FILTER_VALIDATE_INT);

    if (!$placement_id || $placement_id < 1) {
        return [
            'status' => false,
            'message' => 'Invalid placement ID.'
        ];
    }

    // Get the existing placement record
    $kdDeletePlacementQuery = "SELECT student_photo FROM placements WHERE placement_id = ? LIMIT 1";
    $kdDeletePlacementStmt = mysqli_prepare($mydb, $kdDeletePlacementQuery);

    if (!$kdDeletePlacementStmt) {
        return [
            'status' => false,
            'message' => 'Unable to prepare placement query.'
        ];
    }

    mysqli_stmt_bind_param($kdDeletePlacementStmt, "i", $placement_id);
    mysqli_stmt_execute($kdDeletePlacementStmt);

    $kdDeletePlacementResult = mysqli_stmt_get_result($kdDeletePlacementStmt);
    $kdDeletePlacementData = mysqli_fetch_assoc($kdDeletePlacementResult);

    mysqli_stmt_close($kdDeletePlacementStmt);

    if (!$kdDeletePlacementData) {
        return [
            'status' => false,
            'message' => 'Placement record not found.'
        ];
    }

    // Delete the database record
    $kdDeletePlacementQuery = "DELETE FROM placements WHERE placement_id = ?";
    $kdDeletePlacementStmt = mysqli_prepare($mydb, $kdDeletePlacementQuery);

    if (!$kdDeletePlacementStmt) {
        return [
            'status' => false,
            'message' => 'Unable to prepare delete query.'
        ];
    }

    mysqli_stmt_bind_param($kdDeletePlacementStmt, "i", $placement_id);
    $kdDeletePlacementSuccess = mysqli_stmt_execute($kdDeletePlacementStmt);
    $kdDeletePlacementAffected = mysqli_stmt_affected_rows($kdDeletePlacementStmt);

    mysqli_stmt_close($kdDeletePlacementStmt);

    if (!$kdDeletePlacementSuccess || $kdDeletePlacementAffected !== 1) {
        return [
            'status' => false,
            'message' => 'Unable to delete placement record.'
        ];
    }

    // Delete the photo only if it belongs to the placements folder
    $kdPlacementPhotoPath = $kdDeletePlacementData['student_photo'] ?? '';
    $kdAllowedPhotoPrefix = 'assets/images/placements/';

    if (
        is_string($kdPlacementPhotoPath) &&
        strpos($kdPlacementPhotoPath, $kdAllowedPhotoPrefix) === 0
    ) {
        $kdPhotoFileName = substr(
            $kdPlacementPhotoPath,
            strlen($kdAllowedPhotoPrefix)
        );

        // Accept only a filename, not a path
        if (
            $kdPhotoFileName !== '' &&
            basename($kdPhotoFileName) === $kdPhotoFileName
        ) {
            $kdProjectDirectory = dirname(__DIR__, 3);
            $kdPlacementPhotoFullPath = $kdProjectDirectory
                . DIRECTORY_SEPARATOR
                . 'assets'
                . DIRECTORY_SEPARATOR
                . 'images'
                . DIRECTORY_SEPARATOR
                . 'placements'
                . DIRECTORY_SEPARATOR
                . $kdPhotoFileName;

            if (is_file($kdPlacementPhotoFullPath)) {
                @unlink($kdPlacementPhotoFullPath);
            }
        }
    }

    return [
        'status' => true,
        'message' => 'Placement deleted successfully.'
    ];
}
