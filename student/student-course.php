<?php
include 'student-stayLogout.php';
include '../connection.php';

$student_id = $_SESSION['Std_id'];

// Query to fetch course details and corresponding teacher
$sql1 = "SELECT Course_name from students_details where Std_id='$student_id'";
$data= $conn->query($sql1);

if ($data->num_rows > 0) {
    $row = $data->fetch_assoc();
    $course = $row['Course_name'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Course Details</title>
    <style>
    body {
        padding-top: 110px;
        padding-left: 300px;
        padding-right: 30px;
    }

    /* Container Styling */
    .container {
        width: 100%;
        margin: auto;
        background: linear-gradient(135deg, #f4ffd4, #f5f5dc);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-height: 600px;
        overflow-y: auto;
        overflow-x: auto;
        white-space: nowrap;
    }

    h2 {
        text-align: center;
        color: black;
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        text-align: center;
        padding: 12px;
        border-bottom: 1px solid black;
    }

    th {
        background-color: #4cafbe;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        body {
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .container {
            padding: 15px;
        }
        main{
            padding: 10px;
        }
        h2 {
            font-size: 1.3em;
            text-align: left;
        }

        th,
        td {
            font-size: 0.9em;
            padding: 10px;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        body {
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
        }
        main{
            padding: 10px;
        }
        .container {
            padding: 15px;
        }

        h2 {
            font-size: 1.5em;
            text-align: left;
        }

        th,
        td {
            font-size: .9em;
            padding: 10px;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 991px) {
        body {
            padding-top: 110px;
            padding-left: 240px;
            padding-right: 20px;
        }

        .container {
            padding: 20px;
        }
        
        h2 {
            font-size: 1.8em;
            text-align: left;
        }

        th,
        td {
            font-size: .9em;
            padding: 12px;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 991px) and (max-width: 1199px) {
        body {
            padding-top: 110px;
            padding-left: 300px;
            padding-right: 30px;
        }

        .container {
            padding: 20px;
        }

        h2 {
            font-size: 2em;
            text-align: left;
        }

        th,
        td {
            font-size: 1em;
            padding: 12px;
        }
    }

    /* Responsive Design for Extra Large Devices (Large Desktops, 1200px and up) */
    @media (min-width: 1200px) {
        body {
            padding-top: 110px;
            padding-left: 300px;
            padding-right: 30px;
        }

        .container {
            padding: 20px;
        }

        h2 {
            font-size: 2em;
        }

        th,
        td {
            font-size: 1em;
            padding: 12px;
        }
    }
    </style>
</head>

<body>
    <?php include 'student-portal-header.php'; ?>
    <main>
        <div class="container">
            <h2>Student Course Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Duration</th>
                        <th>Fees</th>
                        <th>Materials</th>
                        <th>Course Details</th>
                        <th>Start Date</th>
                        <th>Teacher Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sql= "SELECT * from course_details where Course_Name='$course'";
                $result= $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                        echo "<tr>
                            <td>" . $row['Course_id'] . "</td>
                            <td>" . $row['Course_Name'] . "</td>
                            <td>" . $row['Duration'] . "</td>
                            <td>" . $row['Fees'] . "</td>
                            <td><a href='../uploads/" . $row['Material'] . "' target='_blank'>Material</a></td>
                            <td><a href='../uploads/" . $row['Syllabus'] . "' target='_blank'>Syllabus</a></td>
                            <td>" . $row['Start_date'] . "</td>
                            <td>" . $row['teacher_name'] . "</td>
                        </tr>";
                } else {
                    echo "<tr><td colspan='8'>No course details found</td></tr>";
                }

                $conn->close();
                ?>
                </tbody>
            </table>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include 'student-portal-footer.php'; ?>
</body>

</html>