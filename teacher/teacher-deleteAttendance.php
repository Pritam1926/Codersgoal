<?php
include '../connection.php';

// Retrieve the attendance ID from the URL
$attendance_id = $_GET['id'];

// Prepare the delete statement
$sql = "DELETE FROM student_attendance WHERE attendance_id='$attendance_id'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Attendance record deleted successfully.'); window.location.href = 'teacher-manageAttendance.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();
?>
