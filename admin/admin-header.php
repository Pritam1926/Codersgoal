<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Header</title>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(135deg, #f0f4c3, #b2dfdb);
        font-family: 'poppins', sans-serif;
    }

    /* Header Styling */
    .header {
        background: linear-gradient(135deg, #ffffff, #f9f9f9);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 30px;
        background-color: white;
        color: black;
        position: fixed;
        width: 100%;
        top: 0px;
        left: 0px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        z-index: 2;
    }

    /* Logo and Institute Name */
    .header-left {
        display: flex;
        align-items: center;
    }

    .logo {
        width: 60px;
        height: 60px;
        margin-right: 20px;
        border-radius: 50%;
    }

    .institute-name {
        font-size: 2em;
        font-weight: bold;
    }

    /* Digital Clock Styling */
    .clock {
        font-size: 1.5em;
        font-weight: bold;
        color: #004aad;
    }

    /* Right Side Buttons */
    .header-right {
        display: flex;
        gap: 15px;
    }

    .header-button {
        background-color: #004aad;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        text-decoration: none;
        font-size: 1.2em;
        transition: all .3s ease;
    }

    .mobile-toggle {
        display: none;
        font-size: 1.5em;
        cursor: pointer;
    }

    /* Sidebar Styling */
    .sidebar {
        width: 250px;
        background: linear-gradient(135deg, #2a2a72, #009ffd);
        box-shadow: 0 0 5px black;
        color: white;
        padding-top: 20px;
        position: fixed;
        height: 100vh;
        top: 110px;
        left: 20px;
        border-radius: 15px;
        z-index: 2;
        transition: transform 0.3s;
    }

    /* Sidebar Links with Icons */
    .sidebar a {
        display: flex;
        align-items: center;
        padding: 10px 15px;
        color: white;
        text-decoration: none;
        font-size: 1em;
        transition: all .3s ease;
    }

    .sidebar a i {
        margin-right: 15px;
        font-size: 1em;
    }

    .sidebar a:hover {
        background-color: #517fbc;
    }

    .sidebar .active {
        font-weight: bolder;
        background-color: rgba(81, 127, 188, .5);
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        .header {
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
            gap: 20px;
            position: static;
            margin-bottom: 10px;
        }

        .header-left,
        .clock,
        .header-right {
            text-align: center;

        }

        .header-right {
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 0 10px;
        }

        .logo {
            width: 30px;
            height: 30px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .institute-name {
            font-size: 1.1em;
        }

        /* Digital Clock Styling */
        .clock {
            font-size: .9em;
        }

        .header-button {
            width: 100%;
            max-width: 100px;
            margin: 5px auto;
            font-size: .6em;
            padding: 5px;
        }

        .sidebar {
            transform: translateX(-114%);
            height: 100%;
            width: 150px;
            top: 0;
            border-radius: 0;
        }

        .sidebar a {
            font-size: .8em;
            padding: 10px;
        }

        .sidebar.open {
            transform: translateX(-14%);
        }

        .mobile-toggle {
            display: block;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        .header {
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
            gap: 20px;
            position: static;
            margin-bottom: 10px;
        }

        .header-left,
        .clock,
        .header-right {
            text-align: center;
            margin-bottom: 10px;
        }

        .header-right {
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 100%;
            margin: 0 10px;
        }

        .header-button {
            width: 100%;
            max-width: 200px;
            margin: 5px auto;
        }

        .sidebar {
            transform: translateX(-110%);
            height: 100%;
            top: 0;
            border-radius: 0;
        }

        .sidebar.open {
            transform: translateX(-10%);
        }

        .mobile-toggle {
            display: block;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 991px) {
        .header {
            padding: 15px 30px;
        }

        .header-left,
        .clock,
        .header-right {
            width: auto;
            text-align: left;
            margin-bottom: 0;
        }

        .logo {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .institute-name {
            font-size: 1.2em;
        }

        /* Digital Clock Styling */
        .clock {
            font-size: 1em;
        }

        .header-button {
            font-size: .7em;
            padding: 10px;
        }

        .sidebar {
            height: 100%;
            width: 200px;
        }

        .sidebar a {
            font-size: .8em;
            padding: 10px;
        }

        .mobile-toggle {
            display: none;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 991px) and (max-width: 1199px) {
        .header {
            flex-wrap: nowrap;
            padding: 15px 30px;
        }

        .header-left,
        .clock,
        .header-right {
            width: auto;
            text-align: left;
            margin-bottom: 0;
        }

        .header-right {
            flex-direction: row;
            justify-content: flex-end;
        }

        .logo {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .institute-name {
            font-size: 1.6em;
        }

        /* Digital Clock Styling */
        .clock {
            font-size: 1.2em;
        }

        .header-button {
            font-size: 1em;
            padding: 10px;
        }

        .sidebar {
            height: 100%;
            width: 200px;
        }

        .sidebar a {
            font-size: .9em;
            padding: 10px;
        }

        .mobile-toggle {
            display: none;
        }
    }
    </style>
</head>

<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
    <!-- Header -->
    <div class="header">
        <!-- Left Section: Logo and Name -->
        <div class="header-left">
            <img src="../img/logo.jpg" alt="Logo" class="logo">
            <div class="institute-name">Coder's Goal</div>
        </div>

        <!-- Middle Section: Digital Clock -->
        <div class="clock" id="clock"></div>

        <!-- Right Section: Dashboard and Logout Buttons -->
        <div class="header-right">
            <a href="admin-profile.php" class="header-button"><i class="fas fa-user-shield"></i> Your Profile</a>
            <a href="admin-dashboard.php" class="header-button"><i class="fa-solid fa-house-user"></i> Dashboard</a>
            <a href="admin-logout.php" class="header-button" style="background-color: red;"><i
                    class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        <div class="mobile-toggle" id="mobileToggle"><i class="fas fa-bars"></i></div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="admin-manageStudent.php" class="<?php if($currentPage == 'admin-manageStudent.php') echo 'active'; ?>">
            <i class="fas fa-user-graduate"></i> Manage Students
        </a>
        <a href="admin-view-studentResult.php"
            class="<?php if($currentPage == 'admin-view-studentResult.php') echo 'active'; ?>">
            <i class="fas fa-file-alt"></i> Student Result
        </a>
        <a href="admin-view-studentFeedback.php"
            class="<?php if($currentPage == 'admin-view-studentFeedback.php') echo 'active'; ?>">
            <i class="fas fa-star"></i> Student Feedback
        </a>
        <a href="admin-manageTeacher.php" class="<?php if($currentPage == 'admin-manageTeacher.php') echo 'active'; ?>">
            <i class="fas fa-chalkboard-teacher"></i> Manage Teachers
        </a>
        <a href="admin-view-classes.php" class="<?php if($currentPage == 'admin-view-classes.php') echo 'active'; ?>">
            <i class="fas fa-chalkboard"></i> View Classes
        </a>
        <a href="admin-view-mockTest.php" class="<?php if($currentPage == 'admin-view-mockTest.php') echo 'active'; ?>">
            <i class="fas fa-file-alt"></i> View Mock-Test
        </a>
        <a href="admin-view-grades.php" class="<?php if($currentPage == 'admin-view-grades.php') echo 'active'; ?>">
            <i class="fas fa-graduation-cap"></i> View Grades
        </a>

        <a href="admin-view-teacherFeedback.php"
            class="<?php if($currentPage == 'admin-view-teacherFeedback.php') echo 'active'; ?>">
            <i class="fas fa-star"></i> Teacher Feedback
        </a>
        <a href="admin-manageCourse.php" class="<?php if($currentPage == 'admin-manageCourse.php') echo 'active'; ?>">
            <i class="fas fa-book-open"></i> Manage Course
        </a>
        <a href="admin-manageNotice.php" class="<?php if($currentPage == 'admin-manageNotice.php') echo 'active'; ?>">
            <i class="fas fa-bullhorn"></i> Manage Notice
        </a>
        <a href="admin-checkEnquiry.php" class="<?php if($currentPage == 'admin-checkEnquiry.php') echo 'active'; ?>">
            <i class="fas fa-envelope"></i> Check Enquiry
        </a>
        <br><br>
        <a href="admin-logout.php">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>


    </div>

    <script>
    function updateClock() {
        const clock = document.getElementById('clock');
        const now = new Date();
        const date = now.toLocaleDateString();
        const time = now.toLocaleTimeString();
        clock.innerHTML = `<strong>${date} (${time})</strong>`;
    }
    setInterval(updateClock, 1000);
    updateClock(); // Initial call to display the clock immediately 

    document.getElementById('mobileToggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('open');
    });
    </script>

</body>

</html>