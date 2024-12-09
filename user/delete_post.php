<?php
session_start();
include('backend/db_conn.php');  


if (!isset($_SESSION['user_id'])) {
    echo "You must be logged in to delete a post.";
    exit();
}

$user_id = $_SESSION['user_id'];  // Logged-in user ID
$post_id = $_POST['post_id'];     // The post ID to delete


$post_sql = "SELECT * FROM posts WHERE id = $post_id";
$post_result = $conn->query($post_sql);

if ($post_result->num_rows > 0) {
    $post = $post_result->fetch_assoc();


        $delete_sql = "DELETE FROM posts WHERE id = $post_id";
        $conn->query($delete_sql);


        $delete_likes_sql = "DELETE FROM likes WHERE post_id = $post_id";
        $conn->query($delete_likes_sql);
        
        $delete_comments_sql = "DELETE FROM comments WHERE post_id = $post_id";
        $conn->query($delete_comments_sql);


        header("Location: create_post.php");
        exit();
} else {
    echo "Post not found.";
}

$conn->close();
?>
