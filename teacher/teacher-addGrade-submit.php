<?php
include '../connection.php';

// Retrieve form data
$teacher_id = $_POST['teacher_id'];
$teacher_name = $_POST['teacher_name'];
$student_id = $_POST['Std_id'];
$student_name = $_POST['Std_Name'];
$course_name = $_POST['Course_name'];
$exam_name = $_POST['title'];
$total_marks = $_POST['total_marks'];
$marks_obtained = $_POST['marks'];
$percentage = $_POST['percentage'];
$date = date('Y-m-d'); // Set the current date

// Insert data into the database
$sql = "INSERT INTO grades (teacher_id, teacher_name, Std_id, Std_Name, Course_name, title, total_marks, marks, percentage, grade_date) 
        VALUES ('$teacher_id', '$teacher_name', '$student_id', '$student_name', '$course_name', '$exam_name', '$total_marks', '$marks_obtained', '$percentage', '$date')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Grade added successfully.'); window.location.href = 'teacher-manageGrade.php';</script>";
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>
