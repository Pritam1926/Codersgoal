<?php
include '../connection.php';

$teacher_id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($teacher_id > 0) {
    $sql = "SELECT * FROM teachers WHERE teacher_id = '$teacher_id'";
    $result= $conn->query($sql);
    if($result->num_rows>0){
        $teacher = $result->fetch_assoc();
    }
    else{
        echo "No Teacher Found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>
    <style>
     body {
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #e6ee9c, #80cbc4);
    }

    /* Container Styling */
    .container {
        background: linear-gradient(to right, #f0f4f8, #c2e9fb);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        width: 80vw;
        margin-top: 20px;
        white-space: nowrap;
    }

    .container h2 {
        font-size: 2em;
        text-align: center;
    }

    .container a {
        text-decoration: none;
        color: black;
        font-size: 1.3em;
        background-color: rgb(172, 205, 234);
        padding: 10px;
        border-radius: 10px;
    }

    /* Teacher Table Styling */
    .teacher-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .teacher-table td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        width: 50%;
        font-size: 1.1em;
    }

    .teacher-table th {
        font-weight: bold;
        width: 20%;
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        font-size: 1.2em;
    }

    .teacher-photo {
        position: relative;
        width: 200px;
        height: 200px;
        object-fit: cover;
        margin: auto;
    }

    .teacher-sign {
        position: relative;
        width: 200px;
        height: 80px;
        margin: auto;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        .container {
            padding: 15px;
        }

        .container h2 {
            font-size: 1.3em;
        }

        .container a {
            font-size: 1em;
            padding: 8px;
        }

        .teacher-table th,
        .teacher-table td {
            font-size: .5em;
            padding: 8px;
        }

        .teacher-photo,
        .teacher-sign {
            width: 70px;
            height: auto;
            margin: 0 auto;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        .container {
            padding: 15px;
        }

        .container h2 {
            font-size: 1.5em;
        }

        .container a {
            font-size: 1em;
            padding: 8px;
        }

        .teacher-table th,
        .teacher-table td {
            font-size: .9em;
            padding: 8px;
        }

        .teacher-photo,
        .teacher-sign {
            width: 100px;
            height: auto;
            margin: 0 auto;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 991px) {
        .container {
            padding: 20px;
        }

        .container h2 {
            font-size: 1.8em;
        }

        .container a {
            font-size: 1em;
            padding: 10px;
        }

        .teacher-table th,
        .teacher-table td {
            font-size: .8em;
            padding: 10px;
        }

        .teacher-photo,
        .teacher-sign {
            width: 120px;
            height: auto;
            margin: 0 auto;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 991px) and (max-width: 1199px) {
        .container {
            padding: 20px;
        }

        .container h2 {
            font-size: 2em;
        }

        .container a {
            font-size: 1em;
            padding: 10px;
        }

        .teacher-table th,
        .teacher-table td {
            font-size: 1.1em;
            padding: 10px;
        }

        .teacher-photo,
        .teacher-sign {
            width: 180px;
            height: auto;
            margin: auto;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <a href="admin-manageTeacher.php" class="back">⬅️Back</a>
        <div class="heading">
            <h2>Teacher Details</h2>
        </div>
        <table class="teacher-table">
            <tr>
                <th>Teacher ID</th>
                <td><?php echo htmlspecialchars($teacher['teacher_id']); ?></td>
                <td rowspan="7"><img src="/uploads/<?php echo htmlspecialchars($teacher['Photo']); ?>"
                        alt="Teacher Photo" class="teacher-photo"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo htmlspecialchars($teacher['Password']); ?></td>
            </tr>
            <tr>
                <th>Name</th>
                <td><?php echo htmlspecialchars($teacher['teacher_name']); ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo htmlspecialchars($teacher['Gender']); ?></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td><?php echo htmlspecialchars($teacher['Ph_no']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo htmlspecialchars($teacher['Email']); ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo htmlspecialchars($teacher['Address']); ?></td>
            </tr>
            <tr>
                <th>Qualification</th>
                <td><?php echo htmlspecialchars($teacher['Qualification']); ?></td>
                <td rowspan="4"><img src="/uploads/<?php echo htmlspecialchars($teacher['sign']); ?>"
                        alt="Teacher sign" class="teacher-sign"></td>
            </tr>
            <tr>
                <th>Subjects</th>
                <td><?php echo htmlspecialchars($teacher['Subjects']); ?></td>
            </tr>
            <tr>
                <th>Experience</th>
                <td><?php echo htmlspecialchars($teacher['Experience']); ?></td>
            </tr>
            <tr>
                <th>Date of Joining</th>
                <td><?php echo htmlspecialchars($teacher['join_date']); ?></td>
            </tr>
        </table>
    </div>
</body>

</html>