<?php
session_start();
include('backend/db_conn.php');

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('You must be logged in to create an event.'); window.location.href = 'login.php';</script>";
    exit();
}

// Check if user is an admin
$isAdmin = $_SESSION['isAdmin']; // Assuming the isAdmin flag is stored in session

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get form data
    $event_name = mysqli_real_escape_string($conn, $_POST['event_name']);
    $event_date = mysqli_real_escape_string($conn, $_POST['event_date']);
    $event_location = mysqli_real_escape_string($conn, $_POST['event_location']);
    $event_description = mysqli_real_escape_string($conn, $_POST['event_description']);
    
    // Handle file upload
    if (isset($_FILES['event_image']) && $_FILES['event_image']['error'] == 0) {
        $image_name = $_FILES['event_image']['name'];
        $image_tmp = $_FILES['event_image']['tmp_name'];
        $image_type = $_FILES['event_image']['type'];
        $image_size = $_FILES['event_image']['size'];

        // Validate image file type (optional)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($image_type, $allowed_types)) {
            // Upload image to a folder (make sure the folder exists)
            $upload_dir = 'uploads/events/';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $image_path = $upload_dir . basename($image_name);
            move_uploaded_file($image_tmp, $image_path);
        } else {
            echo "<script>alert('Invalid image file type. Only JPG, PNG, and GIF are allowed.'); window.history.back();</script>";
            exit();
        }
    } else {
        echo "<script>alert('Please upload an image for the event.'); window.history.back();</script>";
        exit();
    }

    // Prepare SQL query to insert event into the database
    $insert_event_sql = "INSERT INTO events (event_name, event_date, event_location, event_description, event_image) 
                         VALUES ('$event_name', '$event_date', '$event_location', '$event_description', '$image_path')";

    if (mysqli_query($conn, $insert_event_sql)) {
        echo "<script>alert('Event added successfully!'); window.location.href = 'events.php';</script>";
    } else {
        echo "<script>alert('An error occurred while adding the event. Please try again later.'); window.history.back();</script>";
    }
}

// Close the database connection
mysqli_close($conn);
?>
