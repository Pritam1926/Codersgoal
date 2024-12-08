<?php
include '../connection.php';

// Retrieve form data
$course_name = $_POST['Course_Name'];
$fees = $_POST['Fees'];
$duration = $_POST['Duration'];
$syllabus = $_FILES['Syllabus']['name'];
$start_date = $_POST['Start_date'];
$matrial = $_FILES['Material']['name'];
$teacher_name = $_POST['teacher_name'];

// Directory to save uploaded files 
$syllabus_target = "../uploads/" . basename($syllabus);
$matrial_target = "../uploads/" . basename($matrial);
 // Move uploaded files to target directory 
 move_uploaded_file($_FILES['Syllabus']['tmp_name'], $syllabus_target);
 move_uploaded_file($_FILES['Material']['tmp_name'], $matrial_target);
// Insert data into database
$sql = "INSERT INTO course_details (Course_Name, Fees, Duration, Syllabus, Start_date, Material, teacher_name) 
        VALUES ('$course_name', '$fees', '$duration', '$syllabus', '$start_date', '$matrial', '$teacher_name')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Course added successfully.'); window.location.href = 'admin-addCourse.php';</script>";
    
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
