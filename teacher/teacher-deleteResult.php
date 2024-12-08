<?php
include '../connection.php';

// Retrieve the result ID from the URL
$result_id = $_GET['id'];

// Prepare the delete statement
$sql = "DELETE FROM results WHERE result_id = '$result_id'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Result deleted successfully.'); window.location.href = 'teacher-manageResult.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
