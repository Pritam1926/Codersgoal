<?php
include '../connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete record
    $sql = "DELETE FROM course_details WHERE Course_id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully.'); window.location.href = 'admin-manageCourse.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided for deletion.";
}

$conn->close();
?>
