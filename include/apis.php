
<?php

include "../admin_access/db_config.php";

header("Content-Type: application/json");


// =====================================================
// GET REQUEST
// =====================================================

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $getAction = $_GET['action'] ?? '';

    switch ($getAction) {


        // =====================================================
        // GET ALL BLOGS
        // =====================================================

        case "get_all_blogs":

            $sql = "SELECT * FROM blog ORDER BY blog_id DESC";

            $result = mysqli_query($mydb, $sql);

            if (!$result) {

                echo json_encode([
                    "status" => false,
                    "message" => mysqli_error($mydb)
                ]);

                exit;
            }

            $data = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            echo json_encode([
                "status" => true,
                "data" => $data
            ]);

            exit;


        // =====================================================
        // INVALID GET ACTION
        // =====================================================

        default:

            echo json_encode([
                "status" => false,
                "message" => "Invalid GET Action"
            ]);

            exit;
    }
}



// =====================================================
// POST REQUEST
// =====================================================

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = $_POST['action'] ?? '';

    switch ($action) {


        // =====================================================
        // GET BLOG BY SLUG
        // =====================================================

        case "get_blog":

            $slug = mysqli_real_escape_string(
                $mydb,
                $_POST['slug'] ?? ''
            );

            $sql = "
                SELECT *
                FROM blog
                WHERE blog_slug = '$slug'
                LIMIT 1
            ";

            $result = mysqli_query($mydb, $sql);

            if (!$result) {

                echo json_encode([
                    "status" => false,
                    "message" => mysqli_error($mydb)
                ]);

                break;
            }

            $blog = mysqli_fetch_assoc($result);

            if ($blog) {

                echo json_encode([
                    "status" => true,
                    "data" => $blog
                ]);

            } else {

                echo json_encode([
                    "status" => false,
                    "message" => "Blog not found"
                ]);
            }

            break;



        // =====================================================
        // DELETE BLOG
        // =====================================================

        case "delete_blog":

            $id = (int)($_POST['id'] ?? 0);

            if ($id <= 0) {

                echo json_encode([
                    "status" => false,
                    "message" => "Invalid Blog ID"
                ]);

                break;
            }

            $sql = "
                DELETE FROM blog
                WHERE blog_id = '$id'
            ";

            if (mysqli_query($mydb, $sql)) {

                echo json_encode([
                    "status" => true,
                    "message" => "Blog Deleted"
                ]);

            } else {

                echo json_encode([
                    "status" => false,
                    "message" => mysqli_error($mydb)
                ]);
            }

            break;



        // =====================================================
        // INVALID POST ACTION
        // =====================================================

        default:

            echo json_encode([
                "status" => false,
                "message" => "Invalid Action"
            ]);

            break;
    }
}

?>

