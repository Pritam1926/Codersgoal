<?php
include '../connection.php';

$student_id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($student_id > 0) {
    $sql = "SELECT * FROM students_details WHERE Std_id = '$student_id'";
    $result= $conn->query($sql);
    if($result->num_rows>0){
        $student = $result->fetch_assoc();
    }
    else{
        echo "No Student Found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #e6ee9c, #80cbc4);
        font-family: Arial, sans-serif;
        padding: 0 10px;
    }

    /* Container Styling */
    .container {
        background: linear-gradient(to right, #f0f4f8, #c2e9fb);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        width: 80vw;
        margin: 20px;
        white-space: nowrap;
    }

    .back {
        font-size: 1.5em;
        text-decoration: none;
        color: black;
    }

    .heading {
        text-align: center;
        margin-bottom: 20px;
        color: black;
    }

    .heading h2 {
        font-size: 2em;
    }

    /* Table Styling */
    .student-table {
        width: 100%;
        border-collapse: collapse;
    }

    .student-table td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        font-size: 1.1em;
    }

    .student-table th {
        font-weight: bold;
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        font-size: 1.2em;
    }

    .student-photo,
    .student-sign {
        width: 100%;
        max-width: 200px;
        height: auto;
        object-fit: cover;
        display: block;
        margin: 0 auto;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        .container {
            padding: 15px;
            margin: 10px;
            width: 95vw;
        }

        .heading h2 {
            font-size: 1.5em;
        }

        .back {
            font-size: 1.2em;
        }

        .student-table th,
        .student-table td {
            font-size: 0.9em;
            padding: 8px;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 576px) and (max-width: 767px) {
        .container {
            padding: 20px;
            margin: 20px;
            width: 90vw;
        }

        .heading h2 {
            font-size: 1.8em;
        }

        .back {
            font-size: 1.3em;
        }

        .student-table th,
        .student-table td {
            font-size: 1em;
            padding: 10px;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 768px) and (max-width: 991px) {
        .container {
            padding: 25px;
            margin: 30px;
            width: 85vw;
        }

        .heading h2 {
            font-size: 2em;
        }

        .back {
            font-size: 1.4em;
        }

        .student-table th,
        .student-table td {
            font-size: 1.1em;
            padding: 12px;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 992px) {
        body {
            padding: 20px;
        }

        .container {
            padding: 30px;
            margin: 40px;
            width: 80vw;
        }

        .heading h2 {
            font-size: 2em;
        }

        .back {
            font-size: 1.5em;
        }

        .student-table th,
        .student-table td {
            font-size: 1.2em;
            padding: 15px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <a href="admin-manageStudent.php" class="back">⬅️Back</a>
        <div class="heading">
            <h2>Student Details</h2>
        </div>
        <table class="student-table">
            <tr>
                <th>Student ID</th>
                <td><?php echo htmlspecialchars($student['Std_id']); ?></td>
                <td rowspan="8"><img src="/uploads/<?php echo htmlspecialchars($student['Photo']); ?>"
                        alt="Student Photo" class="student-photo"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo htmlspecialchars($student['Password']); ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo htmlspecialchars($student['Std_name']); ?></td>
            </tr>
            <tr>
                <th>Father's Name</th>
                <td><?php echo htmlspecialchars($student['Father_name']); ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo htmlspecialchars($student['Ph_no']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($student['Email']); ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo htmlspecialchars($student['DOB']); ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo htmlspecialchars($student['Gender']); ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo htmlspecialchars($student['Address']); ?></td>
                <td rowspan="7"> <img src="/uploads/<?php echo htmlspecialchars($student['sign']); ?>"
                        alt="Student Signature" class="student-sign"></td>
            </tr>
            <tr>
                <th>Qualification</th>
                <td><?php echo htmlspecialchars($student['Qualification']); ?></td>
            </tr>
            <tr>
                <th>Pursuing</th>
                <td><?php echo htmlspecialchars($student['Pursuing']); ?></td>
            </tr>
            <tr>
                <th>Current Course</th>
                <td><?php echo htmlspecialchars($student['Course_name']); ?></td>
            </tr>
            <tr>
                <th>Course Fees</th>
                <td><?php echo htmlspecialchars($student['Fees']); ?></td>
            </tr>
            <tr>
                <th>Date of Joining</th>
                <td><?php echo htmlspecialchars($student['join_date']); ?></td>
            </tr>
            <tr>
                <th>Attendance</th>
                <td><?php echo htmlspecialchars($student['Attendance']); ?></td>
            </tr>
        </table>
    </div>
</body>

</html>