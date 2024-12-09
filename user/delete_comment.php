<?php
session_start();
require 'backend/db_conn.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Please log in to delete comments.'); window.history.back();</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
    exit();
}

$comment_id = isset($_POST['comment_id']) ? intval($_POST['comment_id']) : 0;
$post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
$user_id = $_SESSION['user_id'];

$check_comment_sql = "SELECT id FROM comments WHERE id = $comment_id AND user_id = $user_id";
$check_result = $conn->query($check_comment_sql);

if ($check_result->num_rows === 0) {
    echo "<script>alert('Comment not found or you are not authorized to delete it.'); window.history.back();</script>";
    exit();
}

$delete_sql = "DELETE FROM comments WHERE id = $comment_id";
if ($conn->query($delete_sql)) {
    echo "<script>alert('Comment deleted successfully.'); window.location.href = 'create_post.php';</script>";
} else {
    echo "<script>alert('An error occurred while deleting the comment.'); window.history.back();</script>";
}

$conn->close();
?>
