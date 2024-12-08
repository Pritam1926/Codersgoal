<?php
include '../connection.php';

// Retrieve the grade ID from the URL
$grade_id = $_GET['id'];

// Prepare the delete statement
$sql = "DELETE FROM grades WHERE grade_id='$grade_id'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Grade deleted successfully.'); window.location.href = 'teacher-manageGrade.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
