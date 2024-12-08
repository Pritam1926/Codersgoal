<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
        padding: 0;
        margin: 0;
    }

    /* Hero Section */
    .hero {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        background-image: url(https://images.unsplash.com/photo-1504507926084-34cf0b939964?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mzh8fGNvdXJzZSUyMGltZ3xlbnwwfHwwfHx8MA%3D%3D);
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        position: relative;
    }

    .hero::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.637);
        /* Dark overlay for readability */
    }

    .hero-content {
        position: relative;
        z-index: 1;
        /* Bring content above the overlay */
    }

    .hero h1 {
        font-size: 2.5em;
        margin-bottom: 10px;
    }

    .hero p {
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    /* Course Section */
    .course-section {
        padding: 40px;
        text-align: center;
    }

    .course-section h2 {
        font-size: 2.5em;
        margin-bottom: 30px;
        color: black;
    }

    .course-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 15px;
    }

    .card {
        width: 300px;
        height: 320px;
        border: 1px solid transparent;
        border-radius: 20px;
        padding: 20px;
        text-align: center;
        transition: all .3s ease;
        opacity: 0;
        transform: translateY(20px);
        animation: slideIn 0.5s forwards .3s;
        margin: 10px;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
        background-color: white;
    }

    .card img {
        width: 100px;
        height: auto;
        margin-bottom: 20px;
    }

    .card h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
        color: black;
    }

    .card p {
        font-size: 1em;
        margin-bottom: 20px;
        color: black;
    }

    .explore-button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        text-decoration: none;
        font-size: 1em;
        transition: all 0.3s ease;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.7);
        animation: glow 1s infinite alternate;
    }

    @keyframes glow {
        0% {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.7);
        }

        100% {
            box-shadow: 0 0 20px rgba(0, 123, 255, 1);
        }
    }

    .explore-button:hover {
        background-color: #0056b3;
    }

    /* Slide-in animation */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        .hero {
            height: 150px;
            background-size: cover;
            padding: 10px;
        }

        .hero h1 {
            font-size: 1.5em;
        }

        .hero p {
            font-size: 1em;
        }
        .course-section{
            padding: 20px;
        }
        .course-cards {
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 90%;
            height: auto;
        }

        .course-section h2 {
            font-size: 1.4em;
        }

        .card img {
            width: 80px;
        }

        .card h3 {
            font-size: 1.2em;
        }

        .card p {
            font-size: 0.9em;
        }

        .explore-button {
            font-size: 0.9em;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 576px) and (max-width: 767px) {
        .hero {
            height: 180px;
        }

        .hero h1 {
            font-size: 1.8em;
        }

        .hero p {
            font-size: 1.1em;
        }

        .course-cards {
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 90%;
            height: auto;
        }

        .course-section h2 {
            font-size: 1.6em;
        }

        .card img {
            width: 90px;
        }

        .card h3 {
            font-size: 1.3em;
        }

        .card p {
            font-size: 0.95em;
        }

        .explore-button {
            font-size: 1em;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 768px) and (max-width: 991px) {
        .hero {
            height: 200px;
        }

        .hero h1 {
            font-size: 2em;
        }

        .hero p {
            font-size: 1.2em;
        }

        .card {
            width: 45%;
            height: auto;
        }

        .course-section h2 {
            font-size: 2em;
        }

        .card img {
            width: 100px;
        }

        .card h3 {
            font-size: 1.4em;
        }

        .card p {
            font-size: 1em;
        }

        .explore-button {
            font-size: 1em;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .hero h1 {
            font-size: 2.5em;
        }

        .hero p {
            font-size: 1.2em;
        }

        .card {
            width: 30%;
            height: auto;
        }

        .course-section h2 {
            font-size: 2.4em;
        }

        .card img {
            width: 100px;
        }

        .card h3 {
            font-size: 1.5em;
        }

        .card p {
            font-size: 1em;
        }

        .explore-button {
            font-size: 1em;
        }
    }

    /* Responsive Design for Extra Large Devices (Large Desktops, 1200px and up) */
    @media (min-width: 1200px) {
        .hero h1 {
            font-size: 2.5em;
        }

        .hero p {
            font-size: 1.2em;
        }

        .card {
            width: 20%;
            height: auto;
        }

        .course-section h2 {
            font-size: 2.5em;
        }

        .card img {
            width: 100px;
        }

        .card h3 {
            font-size: 1.5em;
        }

        .card p {
            font-size: 1em;
        }

        .explore-button {
            font-size: 1em;
        }
    }
    </style>
    <title>Course</title>
</head>

<body>
    <?php include 'header.php' ?>
    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Transform Your Future with Our Courses</h1>
                <p>Empower yourself with knowledge and skills for a successful career.</p>
            </div>
        </section>

        <section class="course-section">
            <h2>Our Courses</h2>
            <div class="course-cards">
                <div class="card">
                    <img src="../img/c.png" alt="C Language">
                    <h3>C Language</h3>
                    <p>Learn the fundamentals of C programming from scratch.</p>
                    <a href="../course/c.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/c++.png" alt="C++">
                    <h3>C++</h3>
                    <p>Master object-oriented programming with C++.</p>
                    <a href="../course/c++.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/py.png" alt="Python">
                    <h3>Python</h3>
                    <p>Dive into Python for versatile programming and automation.</p>
                    <a href="../course/py.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/java.png" alt="Java" style="width: 60px;">
                    <h3>Java</h3>
                    <p>Explore the world of Java for modern development.</p>
                    <a href="../course/java.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/dsa.png" alt="Data Structure & Algorithm">
                    <h3>Data Structure & Algorithm</h3>
                    <p>Learn how to structure and optimize data for efficiency.</p>
                    <a href="../course/dsa.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/html.png" alt="HTML">
                    <h3>HTML</h3>
                    <p>Build the foundation of web development with HTML.</p>
                    <a href="../course/html.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/css.png" alt="CSS">
                    <h3>CSS</h3>
                    <p>Design beautiful websites with powerful CSS styling.</p>
                    <a href="../course/css.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/js.png" alt="JavaScript">
                    <h3>JavaScript</h3>
                    <p>Enhance website interactivity with JavaScript.</p>
                    <a href="../course/js.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/sql.png" alt="MySQL">
                    <h3>MySQL</h3>
                    <p>Manage databases with MySQL for data storage and retrieval.</p>
                    <a href="../course/sql.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/php.png" alt="PHP" style="width: 180px;">
                    <h3>PHP</h3>
                    <p>Develop dynamic websites using PHP server-side scripting.</p>
                    <a href="../course/php.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/cn.png" alt="Computer Networking">
                    <h3>Computer Networking</h3>
                    <p>Learn the principles of networking for modern communication.</p>
                    <a href="../course/cn.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/ca.png" alt="Computer Architecture">
                    <h3>Computer Architecture</h3>
                    <p>Understand how computers are designed and built.</p>
                    <a href="../course/ca.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/de.png" alt="Digital Electronics">
                    <h3>Digital Electronics</h3>
                    <p>Explore the fundamentals of digital electronic systems.</p>
                    <a href="../course/de.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/os.png" alt="Operating System">
                    <h3>Operating System</h3>
                    <p>Master the concepts behind modern operating systems.</p>
                    <a href="../course/os.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/ai.png" alt="AI/ML">
                    <h3>AI/ML</h3>
                    <p>Dive deep into Artificial Intelligence and Machine Learning.</p>
                    <a href="../course/ai.php" class="explore-button">Explore</a>
                </div>
                <div class="card">
                    <img src="../img/react.png" alt="React">
                    <h3>React</h3>
                    <p>Build modern web applications with React.</p>
                    <a href="../course/react.php" class="explore-button">Explore</a>
                </div>
            </div>
        </section>

    </main>
    <?php include 'footer.php' ?>
</body>

</html>