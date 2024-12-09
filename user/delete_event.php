<?php
session_start();
include('backend/db_conn.php');

if (!isset($_SESSION['user_id']) || $_SESSION['isAdmin'] != '1') {
    echo "<script>alert('You must be an admin to delete events.'); window.location.href = 'events.php';</script>";
    exit();
}

if (isset($_POST['event_id'])) {
    $event_id = intval($_POST['event_id']);
    
    $delete_event_sql = "DELETE FROM events WHERE id = $event_id";

    if (mysqli_query($conn, $delete_event_sql)) {
        echo "<script>alert('Event deleted successfully.'); window.location.href = 'home.php';</script>";
    } else {
        echo "<script>alert('An error occurred while deleting the event. Please try again later.'); window.location.href = 'home.php';</script>";
    }
} else {
    echo "<script>alert('Invalid event ID.'); window.location.href = 'home.php';</script>";
}

mysqli_close($conn);
?>
