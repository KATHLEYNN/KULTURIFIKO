<?php
session_start();
require 'backend/db_conn.php';
$user_id = $_SESSION['user_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $caption = mysqli_real_escape_string($conn, trim($_POST['postCaption']));
    $location = !empty($_POST['postLocation']) ? mysqli_real_escape_string($conn, trim($_POST['postLocation'])) : NULL;

    $uploadPath = '';
    $fileType = 'text/plain';

    if (isset($_FILES['postFiles']) && $_FILES['postFiles']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $fileType = finfo_file($finfo, $_FILES['postFiles']['tmp_name']);
        finfo_close($finfo);

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
        
        if (!in_array($fileType, $allowedTypes)) {
            echo "<script>alert('Invalid file type. Only images are allowed.'); window.location.href = 'create_post.php';</script>";
            exit();
        }

        $fileExtension = pathinfo($_FILES['postFiles']['name'], PATHINFO_EXTENSION);
        $uniqueFilename = uniqid() . '.' . $fileExtension;
        $uploadPath = $uploadDir . $uniqueFilename;

        if (!move_uploaded_file($_FILES['postFiles']['tmp_name'], $uploadPath)) {
            echo "<script>alert('File upload failed.'); window.location.href = 'create_post.php';</script>";
            exit();
        }
    }

    $stmt = $conn->prepare("INSERT INTO posts (caption, file_path, location, file_type, user_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $caption, $uploadPath, $location, $fileType, $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('Post created successfully!'); window.location.href = 'create_post.php';</script>";
    } else {
        echo "<script>alert('Error creating post: " . addslashes($stmt->error) . "'); window.location.href = 'create_post.php';</script>";
    }
    $stmt->close();
}
?>