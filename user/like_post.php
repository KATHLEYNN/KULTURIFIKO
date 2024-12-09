<?php
session_start();
require 'backend/db_conn.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please log in to like posts'); window.location.href='login_page.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<script>alert('Invalid request method'); window.location.href='create_post.php';</script>";
    exit();
}

$post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
$user_id = $_SESSION['user_id'];
$reaction_type = isset($_POST['reaction']) ? mysqli_real_escape_string($conn, $_POST['reaction']) : 'like';

$check_post_sql = "SELECT id FROM posts WHERE id = $post_id";
$check_result = $conn->query($check_post_sql);

if ($check_result->num_rows === 0) {
    echo "<script>alert('Post does not exist'); window.location.href='create_post.php';</script>";
    exit();
}

$check_like_sql = "SELECT id, reaction_type FROM likes WHERE post_id = $post_id AND user_id = $user_id";
$check_like_result = $conn->query($check_like_sql);
$existing_like = $check_like_result->fetch_assoc();

if ($existing_like) {
    $delete_like_sql = "DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id";
    $conn->query($delete_like_sql);
    echo "<script>alert('Like removed'); window.location.href='create_post.php';</script>";
} else {
    $insert_like_sql = "INSERT INTO likes (post_id, user_id, reaction_type) VALUES ($post_id, $user_id, '$reaction_type')";
    $conn->query($insert_like_sql);
    echo "<script>alert('Post liked'); window.location.href='create_post.php';</script>";
}

$count_likes_sql = "SELECT COUNT(*) as total_likes FROM likes WHERE post_id = $post_id";
$count_result = $conn->query($count_likes_sql);
$likes_result = $count_result->fetch_assoc();

$conn->close();
?>
