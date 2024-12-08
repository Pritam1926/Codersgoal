<?php
include 'admin-stayLogout.php';
include '../connection.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Course</title>
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

    .button {
        display: flex;
        justify-content: left;
        align-items: center;
        gap: 20px;
    }

    .button a {
        padding: 10px 15px;
        background-color: #004aad;
        border-radius: 10px;
        color: white;
        border: none;
        text-decoration: none;
        font-size: 1.1em;
        cursor: pointer;
    }

    .search-box input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 300px;
    }

    .search-box input[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #1e3c72;
        color: white;
        cursor: pointer;
    }

    .view {
        text-decoration: none;
        color: black;
    }

    .delete-btn {
        padding: 5px 10px;
        background-color: #f44336;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
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

        main {
            padding: 10px;
        }

        h2 {
            font-size: 1.3em;
            text-align: left;
        }

        .button {
            flex-wrap: wrap;
        }

        .button a {
            padding: 8px 10px;
            font-size: 1em;
        }

        .search-box input[type="text"] {
            padding: 10px;
            font-size: 12px;
            width: 200px;
        }

        .search-box input[type="submit"] {
            padding: 10px 15px;
            font-size: 12px;
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

        main {
            padding: 10px;
        }

        .container {
            padding: 15px;
        }

        h2 {
            font-size: 1.5em;
            text-align: left;
        }

        .button {
            flex-wrap: wrap;
        }

        .button a {
            padding: 8px 10px;
            font-size: 1em;
        }

        .search-box input[type="text"] {
            padding: 10px;
            font-size: 12px;
            width: 250px;
        }

        .search-box input[type="submit"] {
            padding: 10px 15px;
            font-size: 12px;
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

        .button {
            flex-wrap: wrap;
        }

        .button a {
            padding: 8px 10px;
            font-size: 1em;
        }

        .search-box input[type="text"] {
            padding: 10px;
            font-size: 12px;
            width: 200px;
        }

        .search-box input[type="submit"] {
            padding: 10px 15px;
            font-size: 12px;
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
            padding-left: 250px;
            padding-right: 20px;
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
    <script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this record?')) {
            window.location.href = 'admin-delete-course.php?id=' + id;
        }
    }
    </script>
</head>

<body>
    <?php include 'admin-header.php'; ?>
    <main>
        <div class="container">
            <h2>Manage Course</h2>
            <div class="button">
                <a href="admin-addCourse.php">Add</a>
                <div class="search-box">
                    <form action="" method="get">
                        <input type="text" name="search" placeholder="Search by Name, ID or teacher_name">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Sl_no</th>
                        <th>Course Id</th>
                        <th>Course Name</th>
                        <th>Course Fees</th>
                        <th>Duration</th>
                        <th>Start Date</th>
                        <th>Syllabus</th>
                        <th>Teacher Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sl_no=1;
                if (isset($_GET['search'])) { 
                    $search = $_GET['search']; 
                    $sql = "SELECT * FROM course_details WHERE Course_id LIKE '%$search%' OR Course_Name LIKE '%$search%' OR teacher_name LIKE '%$search%'"; 
                } 
                else { 
                    $sql = "SELECT * FROM course_details"; 
                }
                $result= $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                            echo "<tr>
                            <td>" . $sl_no . "</td>
                            <td>" . $row['Course_id'] . "</td>
                            <td>" . $row['Course_Name'] . "</td>
                            <td>" . $row['Fees'] . "</td>
                            <td>" . $row['Duration'] . "</td>
                            <td>" . $row['Start_date'] . "</td>
                            <td>" . $row['Syllabus'] . "</td>
                            <td>" . $row['teacher_name'] . "</td>
                            <td><a href='admin-edit-course.php?id={$row['Course_id']}' class='view'>Edit</a></td>
                            <td><button class='delete-btn' onclick='confirmDelete(" . $row["Course_id"] . ")'>Delete</button></td>
                            </tr>";
                            $sl_no=$sl_no+1;
                    }
                } 
                else {
                    echo "<tr><td colspan='8'>No Course found</td></tr>";
                }

                $conn->close();
                ?>
                </tbody>
            </table>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include 'admin-footer.php'; ?>
</body>

</html>