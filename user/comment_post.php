<?php
session_start();
include('backend/db_conn.php');  

if (!isset($_SESSION['user_id'])) {
    echo "You must be logged in to comment.";
    exit();
}

$user_id = $_SESSION['user_id'];  // Logged-in user ID


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $post_id = $_POST['post_id'];
    $comment = mysqli_real_escape_string($conn, $_POST['comment']); // Sanitize the comment input


    if (!empty($comment)) {

        $sql = "INSERT INTO comments (post_id, user_id, comment) VALUES ('$post_id', '$user_id', '$comment')";
        if (mysqli_query($conn, $sql)) {

            header("Location: create_post.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Comment cannot be empty.";
    }
}

mysqli_close($conn);
?>
