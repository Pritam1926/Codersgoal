<?php
include '../connection.php';

// Retrieve the class ID from the URL
$class_id = $_GET['id'];

// Prepare the delete statement
$sql = "DELETE FROM classes WHERE class_id='$class_id'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Class schedule deleted successfully.'); window.location.href = 'teacher-manageClasses.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
