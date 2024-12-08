<?php
include '../connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete record
    $sql = "DELETE FROM students_details WHERE Std_id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully.'); window.location.href = 'admin-manageStudent.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "No ID provided for deletion.";
}

$conn->close();
?>
