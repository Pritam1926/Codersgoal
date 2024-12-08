<?php
include 'admin-stayLogout.php';
include '../connection.php';

// Total Students
$sql = "SELECT COUNT(*) AS total_students FROM students_details";
$result = $conn->query($sql);
$total_students = $result->fetch_assoc()['total_students'];

// Total Teachers
$sql = "SELECT COUNT(*) AS total_teachers FROM teachers";
$result = $conn->query($sql);
$total_teachers = $result->fetch_assoc()['total_teachers'];

// Total Courses
$sql = "SELECT COUNT(*) AS total_courses FROM course_details";
$result = $conn->query($sql);
$total_courses = $result->fetch_assoc()['total_courses'];

// Total Revenue
$sql = "SELECT SUM(amount) AS total_revenue FROM payments";
$result = $conn->query($sql);
$total_revenue = $result->fetch_assoc()['total_revenue'];

// Total Expenses
$sql = "SELECT SUM(amount) AS total_expenses FROM expenses";
$result = $conn->query($sql);
$total_expenses = $result->fetch_assoc()['total_expenses'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
    /* Global Styles */
    body {
        padding-top: 110px;
        padding-left: 300px;
        padding-right: 30px;
        background: linear-gradient(135deg, #f2f4f7, #d7e3fc);
        font-family: Arial, sans-serif;
    }
    main{
        padding: 0 10px;
    }
    /* Dashboard Container */
    .dashboard-container {
        width: 100%;
        background: linear-gradient(135deg, #ffffff, #e3f2fd);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        display: flex;
        padding: 20px;
        justify-content: space-between;
        flex-direction: row;
    }

    /* Welcome Section */
    .welcome-section {
        width: 60%;
        padding: 20px;
        background: linear-gradient(135deg, #e3fdfd, #ffe4e1);
        border-radius: 10px;
        margin-right: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .welcome-section h2 {
        margin: 0;
        font-size: 24px;
        color: #01579b;
    }

    .welcome-section p {
        font-size: 18px;
        color: #0277bd;
    }

    /* Action Buttons */
    .action-buttons {
        width: 40%;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .action-buttons button {
        width: 48%;
        padding: 15px 10px;
        color: white;
        background: linear-gradient(135deg, #0288d1, #039be5);
        border: none;
        border-radius: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .action-buttons button:hover {
        background: linear-gradient(135deg, #01579b, #0277bd);
    }

    /* Section Styles */
    .section {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .latest-admissions {
        width: 100%;
        background: #e3f2fd;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
        max-height: 300px;
        overflow-x: auto;
        overflow-y: auto;
        white-space: nowrap;
    }

    .latest-admissions h3 {
        margin-top: 0;
        color: #0277bd;
    }

    /* Counts */
    .counts {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .count-box {
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        min-width: 150px;
        height: 150px;
        flex: 1 1 45%;
    }

    .count-box h4 {
        margin: 0;
        font-size: 24px;
    }

    .count-box p {
        margin: 10px 0 0;
        font-size: 18px;
    }

    /* Birthday Section */
    .birthday-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .birthday-box {
        background: #e3f2fd;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        flex: 1;
        max-width: 200px;
    }

    .birthday-box h3 {
        margin-top: 0;
        color: #0277bd;
    }

    .birthday-box img {
        border-radius: 50%;
        margin-top: 10px;
    }

    .birthday-box p {
        margin: 10px 0 0;
        color: #01579b;
        font-weight: bold;
    }

    #no-birthday {
        background-color: bisque;
        width: 250px;
        height: 60px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, .2);
    }

    /* Table Container */
    .table-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 30px;
    }

    .table-wrapper {
        flex: 1;
        margin: 10px;
        background: linear-gradient(135deg, #f4ffd4, #f5f5dc);
        padding: 20px;
        border-radius: 8px;
        max-height: 300px;
        overflow-x: auto;
        overflow-y: auto;
        white-space: nowrap;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border-bottom: 1px solid black;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
    }

    th {
        background: #0277bd;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #d7dbde;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        body {
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .dashboard-container {
            flex-direction: column;
            padding: 15px;
        }

        .welcome-section,
        .latest-admissions,
        .count-box {
            width: 100%;
            margin-bottom: 20px;
        }

        .action-buttons {
            width: 100%;
            justify-content: space-between;
        }

        .action-buttons button {
            width: 100%;
            margin-bottom: 10px;
        }

        .count-box {
            min-width: 100%;
        }
        .table-container{
            flex-direction: column;
        }
        .latest-admissions h3,.table-container h3{
            font-size: 1em;
        }
        .latest-admissions th, td,.table-container th, td{
            font-size: .8em;
        }

        .table-wrapper {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        body {
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .dashboard-container {
            flex-direction: column;
            padding: 15px;
        }

        .welcome-section,
        .latest-admissions,
        .count-box {
            width: 100%;
            margin-bottom: 20px;
        }

        .action-buttons {
            width: 100%;
            justify-content: space-between;
        }

        .action-buttons button {
            width: 48%;
        }

        .count-box {
            min-width: 100%;
        }
        .table-container{
            flex-direction: column;
        }
        .latest-admissions h3,.table-container h3{
            font-size: 1.1em;
        }
        .latest-admissions th, td,.table-container th, td{
            font-size: .9em;
        }
        .table-wrapper {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 991px) {
        body {
            padding-top: 110px;
            padding-left: 240px;
            padding-right: 20px;
        }

        .dashboard-container {
            flex-direction: column;
            padding: 20px;
        }

        .welcome-section,
        .latest-admissions,
        .count-box {
            width: 100%;
            margin-bottom: 20px;
        }

        .action-buttons {
            width: 100%;
            justify-content: space-between;
        }

        .action-buttons button {
            width: 48%;
        }
        .table-container{
            flex-direction: column;
        }
        .table-wrapper {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 991px) and (max-width: 1199px){
        body {
            padding-top: 110px;
            padding-left: 240px;
            padding-right: 20px;
        }

        .dashboard-container {
            flex-direction: column;
            padding: 20px;
        }

        .welcome-section,
        .latest-admissions {
            width: 100%;
        }

        .action-buttons,
        .counts {
            margin-top: 10px;
            width: 100%;
        }

        .action-buttons button {
            width: 48%;
        }

        .count-box {
            min-width: 40%;
        }
        .table-container{
            flex-direction: column;
        }
    }
    @media (min-width: 1200px){
        body {
            padding-top: 110px;
            padding-left: 300px;
            padding-right: 20px;
        }

        .dashboard-container {
            flex-direction: row;
            padding: 20px;
        }

        .welcome-section,
        .latest-admissions {
            width: 55%;
        }

        .action-buttons,
        .counts {
            margin-top: 10px;
            width: 40%;
        }

        .action-buttons button {
            width: 48%;
        }

        .count-box {
            min-width: 40%;
        }
    }
    </style>
</head>

<body>
    <?php include 'admin-header.php'; ?>
    <main>
        <div class="dashboard-container">
            <div class="welcome-section">
                <h2>Welcome, Admin!</h2>
                <p>Your diligent work ensures everything runs smoothly.</p>
            </div>
            <div class="action-buttons">
                <button onclick="window.location.href='admin-addStudent.php'">Add Student</button>
                <button onclick="window.location.href='admin-addTeacher.php'">Add Teacher</button>
                <button onclick="window.location.href='admin-addCourse.php'">Add Course</button>
                <button onclick="window.location.href='admin-addNotice.php'">Add Notice</button>
            </div>
        </div>
        <div class="section">
            <div class="latest-admissions">
                <h3>Latest Student Admissions</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Admission Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT Std_name, Course_name, join_date FROM students_details ORDER BY join_date DESC LIMIT 5";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                <td>" . $row['Std_name'] . "</td>
                                <td>" . $row['Course_name'] . "</td>
                                <td>" .$row['join_date'] . "</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No recent admissions</td></tr>";
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="counts">
                <div class="count-box" style="background: #4caf50;">
                    <h4><?php echo $total_students; ?></h4>
                    <p>Total Students</p>
                </div>
                <div class="count-box" style="background: #ff9800;">
                    <h4><?php echo $total_teachers; ?></h4>
                    <p>Total Teachers</p>
                </div>
                <div class="count-box" style="background: #03a9f4;">
                    <h4><?php echo $total_courses; ?></h4>
                    <p>Total Courses</p>
                </div>
                <div class="count-box" style="background: #8bc34a;">
                    <h4><?php echo $total_revenue; ?></h4>
                    <p>Total Revenue</p>
                </div>
                <div class="count-box" style="background: #f44336;">
                    <h4><?php echo $total_expenses; ?></h4>
                    <p>Total Expenses</p>
                </div>
                <div class="birthday-container">
                    <?php
                $today = date("Y-m-d");

                // Query to fetch students whose birthdays are today
                $sql = "SELECT Std_Name, Photo FROM students_details WHERE DATE_FORMAT(DOB, '%m-%d') = DATE_FORMAT(NOW(), '%m-%d')";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='birthday-box'>";
                        echo "<h3>Happy Birthday</h3>";
                        echo "<img src='../uploads/" . $row['Photo'] . "' alt='Student Photo' width='50' height='50'>";
                        echo "<p>" . $row['Std_Name'] . "</p>";
                        echo "</div>";
                    }
                } 
                else {
                    echo "<p id='no-birthday'>No birthdays today</p>";
                }
                ?>
                </div>
            </div>
        </div>
        <div class="table-container">
            <div class="table-wrapper">
                <h3>Scheduled Classes</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Teacher Name</th>
                            <th>Course Name</th>
                            <th>Class Date</th>
                            <th>Time</th>
                            <th>Topic</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_classes = "SELECT teacher_name, Course_name, class_date, class_time, topic_name 
                        FROM classes 
                        WHERE class_status='Pending' 
                        ORDER BY class_date DESC";
                        $result_classes = $conn->query($sql_classes);
                        if ($result_classes->num_rows > 0) {
                            while ($row = $result_classes->fetch_assoc()) {
                                echo "<tr>
                                    <td>" . $row['teacher_name'] . "</td>
                                    <td>" . $row['Course_name'] . "</td>
                                    <td>" . $row['class_date'] . "</td>
                                    <td>" . $row['class_time'] . "</td>
                                    <td>" . $row['topic_name'] . "</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No pending classes scheduled</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="table-wrapper">
                <h3>Mock Tests</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Teacher Name</th>
                            <th>Course Name</th>
                            <th>Exam Name</th>
                            <th>Submission Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_mocktests = "SELECT teacher_name, Course_name, title, submission_date 
                        FROM mock_test 
                        WHERE submission_status='Pending' 
                        ORDER BY submission_date DESC";
                        $result_mocktests = $conn->query($sql_mocktests);
                        if ($result_mocktests->num_rows > 0) {
                            while ($row = $result_mocktests->fetch_assoc()) {
                                echo "<tr>
                                    <td>" . $row['teacher_name'] . "</td>
                                    <td>" . $row['Course_name'] . "</td>
                                    <td>" . $row['title'] . "</td>
                                    <td>" . $row['submission_date'] . "</td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No pending mock tests</td></tr>";
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <br>
    <?php include 'admin-footer.php'; ?>
</body>

</html>