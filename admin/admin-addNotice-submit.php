<?php
include '../connection.php';

// Retrieve form data
$date = $_POST['notice_date'];
$content = $_POST['content'];

// Insert data into database
$sql = "INSERT INTO notice (notice_date, content) 
        VALUES ('$date', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Notice added successfully.'); window.location.href = 'admin-addNotice.php';</script>";
    
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

