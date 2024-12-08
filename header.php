<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- For icons -->
    <style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        background-color: #f4f4ff;
        font-family: 'poppins', sans-serif;
    }
    /* Top Nav Bar Styles */
    .top-nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #f0f8ff;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Logo and Institute Name */
    .logo {
        display: flex;
        align-items: center;
    }

    .logo img {
        height: 60px;
        width: 60px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .institute-name {
        font-size: 2em;
        font-weight: bold;
        color: black;
    }

    /* Middle Nav for Login */
    .middle-nav {
        display: flex;
        align-items: center;
    }

    .middle-nav a {
        margin: 0 10px;
        color: black;
        text-decoration: none;
        font-size: 1.1em;
        padding: 5px 10px;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .middle-nav a i {
        margin-right: 5px;
        font-size: 1.5em;
    }

    /* Right Nav for Notice & Feedback */
    .right-nav {
        display: flex;
        align-items: center;
    }

    .right-nav a {
        color: black;
        background-color: #a2cbe4;
        text-decoration: none;
        padding: 10px;
        font-size: 1.2em;
        border-radius: 15px;
        margin-right: 15px;
        transition: all 0.3s ease;
    }

    .middle-nav a:hover,
    .right-nav a:hover {
        background-color: cadetblue;
        box-shadow: 2px 2px 5px black;
    }

    /* Second Nav Bar Styles */
    .second-nav {
        background-color: #f0f8ff;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
        border-top: 2px solid #a2cbe4;
    }

    .second-nav .nav-list {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
        font-size: 1.2em;
    }

    .second-nav .nav-list li {
        margin: 0 20px;
    }

    .second-nav .nav-list li a {
        text-decoration: none;
        color: black;
        border: 1px solid transparent;
        border-radius: 10px;
        font-size: 1.1em;
        padding: 5px 10px;
        transition: all 0.3s ease;
    }

    .second-nav .nav-list li a:hover {
        background-color: cadetblue;
        box-shadow: 2px 2px 5px black;
    }

    .nav-list .active {
        font-weight: bolder;
        background-color: #a2cbe4;
    }

    /* Mobile Menu Icon */
    .mobile-menu-icon {
        display: none;
        font-size: 1.5em;
        cursor: pointer;
    }

    /* Mobile Menu Styles */
    .mobile-menu {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        width: 250px;
        height: 100%;
        background-color: #f0f8ff;
        box-shadow: -2px 0px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        z-index: 1000;
        transition: transform 0.3s;
        transform: translateX(100%);
    }

    .mobile-menu.open {
        transform: translateX(55%);
    }

    .mobile-menu a {
        display: block;
        color: #2c3e50;
        text-decoration: none;
        margin-bottom: 15px;
        font-size: 1.1em;
        padding: 5px 10px;
        border-radius: 5px;
        transition: all .3s ease;
    }

    .mobile-menu a:hover {
        background-color: #d4e6f1;
    }

    /* Mobile Navigation List */
    .mobile-nav-list {
        list-style: none;
        padding: 0;
    }

    .mobile-nav-list li {
        margin: 15px 0;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        .top-nav {
            flex-direction: column;
            align-items: flex-start;
        }
        .middle-nav{
            margin-top: 10px;
        }
        .middle-nav a i, .middle-nav a{
            font-size: 1em;
        }
        .right-nav {
            display: none;
        }

        .mobile-menu-icon {
            display: block;
            align-self: flex-start;
            /* Align menu icon to the left */
        }
        .mobile-menu{
            display: block;
        }
        .logo img {
            height: 40px;
            width: 40px;
        }

        .institute-name {
            font-size: 1.2em;
        }

        .second-nav .nav-list {
            display: none;
        }

        .mobile-menu a {
            font-size: 1em;
        }

        .mobile-menu {
            width: 100%;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        .top-nav {
            flex-direction: column;
            align-items: flex-start;
        }
        .middle-nav{
            margin-top: 10px;
        }
        .middle-nav a i, .middle-nav a{
            font-size: 1.3em;
        }
        .right-nav {
            display: none;
        }

        .mobile-menu-icon {
            display: block;
            align-self: flex-start;
            /* Align menu icon to the left */
        }
        .mobile-menu{
            display: block;
        }
        .logo img {
            height: 40px;
            width: 40px;
        }

        .institute-name {
            font-size: 1.6em;
        }

        .second-nav .nav-list {
            display: none;
        }

        .mobile-menu a {
            font-size: 1em;
        }

        .mobile-menu {
            width: 100%;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 991px) {
        .logo img {
            height: 45px;
            width: 45px;
        }

        .institute-name {
            font-size: 1.4em;
        }

        .middle-nav a,.middle-nav a i {
            font-size: 1.1em;
            margin: 0;
        }
        
        .right-nav a {
            font-size: 1em;
            padding: 5px;
            border-radius: 8px;
        }
        .second-nav .nav-list li{
            margin: 5px;
        }
        .second-nav .nav-list li a{
            font-size: 1em;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .logo img {
            height: 60px;
            width: 60px;
        }

        .institute-name {
            font-size: 2em;
        }

        .middle-nav a {
            font-size: 1.2em;
        }

        .right-nav a {
            font-size: 1.2em;
        }

        .mobile-menu a {
            font-size: 1.4em;
        }
    }

    /* Responsive Design for Extra Large Devices (Large Desktops, 1200px and up) */
    @media (min-width: 1200px) {
        .logo img {
            height: 60px;
            width: 60px;
        }

        .institute-name {
            font-size: 2em;
        }

        .middle-nav a {
            font-size: 1.2em;
        }

        .right-nav a {
            font-size: 1.2em;
        }

        .mobile-menu a {
            font-size: 1.4em;
        }
    }
    </style>
</head>

<body>
    <?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

    <header>
        <!-- First Nav Bar -->
        <div class="top-nav">
            <div class="logo">
                <a href="index.php"><img src="/img/logo.jpg" alt="Institute Logo"></a>
                <span class="institute-name">Coder's Goal</span>
            </div>
            <div class="middle-nav">
                <a href="/student/student-login.php" class="login"><i class="fas fa-user"></i> Student</a>
                <a href="/teacher/teacher-login.php" class="login"><i class="fas fa-chalkboard-teacher"></i>
                    Teacher</a>
                <a href="/admin/admin-login.php" class="login"><i class="fas fa-user-shield"></i> Admin</a>
            </div>
            <div class="right-nav">
                <a href="notice.php" class="nav-btn">Notice</a>
                <a href="#" class="nav-btn">Feedback</a>
            </div>
        </div>

        <!-- Second Nav Bar -->
        <nav class="second-nav">
            <ul class="nav-list">
                <li><a href="/index.php"
                        class="<?php if($currentPage == 'index.php') echo 'active'; ?>">Home</a></li>
                <li><a href="/admission.php"
                        class="<?php if($currentPage == 'admission.php') echo 'active'; ?>">Admission</a></li>
                <li><a href="/course.php"
                        class="<?php if($currentPage == 'course.php') echo 'active'; ?>">Course</a></li>
                <li><a href="/faculty.php"
                        class="<?php if($currentPage == 'faculty.php') echo 'active'; ?>">Faculty</a></li>
                <li><a href="/about.php"
                        class="<?php if($currentPage == 'about.php') echo 'active'; ?>">About Us</a></li>
                <li><a href="/contact.php"
                        class="<?php if($currentPage == 'contact.php') echo 'active'; ?>">Contact Us</a></li>
            </ul>
            <div class="mobile-menu-icon">
                <i class="fas fa-bars"></i>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="/notice.php" class="nav-btn">Notice</a>
            <a href="#" class="nav-btn">Feedback</a>
            <ul class="mobile-nav-list">
                <li><a href="/index.php">Home</a></li>
                <li><a href="/admission.php">Admission</a></li>
                <li><a href="/course.php">Course</a></li>
                <li><a href="/faculty.php">Faculty</a></li>
                <li><a href="/about.php">About Us</a></li>
                <li><a href="/contact.php">Contact Us</a></li>
            </ul>
        </div>

        <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu-icon').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('open');
        });
        </script>
    </header>
</body>

</html>