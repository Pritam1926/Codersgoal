<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    /* General Styling */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* About Us Section */
    .about-us-section {
        display: flex;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Left: Image Styling */
    .about-us-image {
        width: 40%;
        padding-right: 20px;
    }

    .about-us-image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    /* Right: Content and Capsules Styling */
    .about-us-content {
        width: 60%;
        padding-left: 20px;
    }

    .about-us-content h2 {
        font-size: 2.5em;
        margin-bottom: 15px;
        color: black;
        display: inline-block;
        padding-left: 20px;
        position: relative;
    }

    .about-us-content h2::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 4px;
        background-color: #007BFF;
        margin-left: 10px;
    }

    .about-us-content p {
        font-size: 1.1em;
        line-height: 1.8;
        color: black;
        margin-bottom: 20px;
        text-align: justify;
    }

    /* Capsules Section */
    .capsules-container {
        display: flex;
        justify-content: space-between;
    }

    .capsule {
        display: flex;
        align-items: center;
        margin-right: 10px;
        padding: 20px;
        background-color: #8ba9d0;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .capsule .icon {
        font-size: 2em;
        margin-right: 10px;
        color: #426ca5;
    }

    .capsule p {
        margin-bottom: 0;
        font-size: 1.1em;
        color: black;
    }

    .container {
        display: flex;
        justify-content: center;
        max-width: 100%;
        max-height: fit-content;
        background-color: white;
    }

    .part {
        width: 32%;
        height: auto;
        margin: 40px 0px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
    }

    .part img {
        width: 200px;
        height: 200px;
        border-radius: 8px;
        /* Optional: for rounded corners */
    }

    .part h3 {
        font-size: 2em;
        color: black;
        margin: 10px 0;
    }

    .part p {
        padding: 20px;
        margin: 0px 0px;
        font-size: 1.1em;
        line-height: 1.5;
        color: black;
        text-align: justify;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        .about-us-section {
            flex-direction: column;
            padding: 10px;
            gap: 10px;
        }

        .about-us-image {
            width: 100%;
            padding-right: 0;
        }

        .about-us-content {
            width: 100%;
            padding: 0 10px;
        }

        .about-us-content h2 {
            font-size: 1.4em;
        }

        .about-us-content p {
            font-size: 1em;
        }

        .capsules-container {
            flex-direction: column;
        }

        .capsule {
            margin-bottom: 10px;
            width: 100%;
        }
        .container{
            flex-direction: column;
            padding: 0 10px;
        }
        .part {
            width: 100%;
            margin: 20px 0;
        }

        .part img {
            width: 100px;
            height: 100px;
        }

        .part h3 {
            font-size: 1.5em;
        }

        .part p {
            font-size: 1em;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        .about-us-section {
            flex-direction: column;
            padding: 15px;
            gap: 10px;
        }

        .about-us-image {
            width: 100%;
            padding-right: 0;
        }

        .about-us-content {
            width: 100%;
            padding: 10px;
        }

        .about-us-content h2 {
            font-size: 1.8em;
        }

        .about-us-content p {
            font-size: 1.1em;
        }

        .capsules-container {
            flex-direction: column;
        }

        .capsule {
            margin-bottom: 10px;
            width: 100%;
        }
        .container{
            flex-direction: column;
            padding: 0 15px;
        }
        .part {
            width: 100%;
            margin: 20px 0;
        }

        .part img {
            width: 150px;
            height: 150px;
        }

        .part h3 {
            font-size: 1.8em;
        }

        .part p {
            font-size: 1.1em;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 991px) {
        .about-us-section {
            flex-direction: column;
            padding: 20px;
            gap: 20px;
        }

        .about-us-image {
            width: 50%;
            padding-right: 10px;
            margin: auto;
        }

        .about-us-content {
            width: 100%;
            padding-left: 10px;
        }

        .about-us-content h2 {
            font-size: 2.2em;
        }

        .about-us-content p {
            font-size: 1.1em;
        }

        .capsules-container {
            flex-direction: row;
            justify-content: space-between;
        }

        .capsule {
            width: 100%;
            margin-right: 10px;
        }

        .part {
            width: 48%;
            margin: 20px 0;
        }

        .part img {
            width: 180px;
            height: 180px;
        }

        .part h3 {
            font-size: 1.8em;
        }

        .part p {
            font-size: 1.1em;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .about-us-section {
            padding: 25px;
        }

        .about-us-image {
            width: 40%;
            padding-right: 15px;
        }

        .about-us-content {
            width: 60%;
            padding-left: 15px;
        }

        .about-us-content h2 {
            font-size: 2.4em;
        }

        .about-us-content p {
            font-size: 1.1em;
        }

        .capsules-container {
            flex-direction: column;
            justify-content: space-between;
        }

        .capsule {
            width: 90%;
            margin-bottom: 10px;
        }

        .part {
            width: 32%;
            margin: 30px 0;
        }

        .part img {
            width: 200px;
            height: 200px;
        }

        .part h3 {
            font-size: 2em;
        }

        .part p {
            font-size: 1.1em;
        }
    }

    /* Responsive Design for Extra Large Devices (Large Desktops, 1200px and up) */
    @media (min-width: 1200px) {
        .about-us-section {
            padding: 30px;
        }

        .about-us-image {
            width: 40%;
            padding-right: 20px;
        }

        .about-us-content {
            width: 60%;
            padding-left: 20px;
        }

        .about-us-content h2 {
            font-size: 2.5em;
        }

        .about-us-content p {
            font-size: 1.1em;
        }

        .capsules-container {
            flex-direction: row;
            justify-content: space-between;
        }

        .capsule {
            width: 48%;
            margin-right: 10px;
        }

        .part {
            width: 32%;
            margin: 30px 0;
        }

        .part img {
            width: 200px;
            height: 200px;
        }

        .part h3 {
            font-size: 2em;
        }

        .part p {
            font-size: 1.1em;
        }
    }
    </style>
    <title>About Us</title>
</head>

<body>
    <?php include 'header.php' ?>
    <main>
        <!-- About Us Section -->
        <div class="about-us-section">
            <!-- Left Part: Image -->
            <div class="about-us-image">
                <img src="../img/team.png" alt="About Us Image">
            </div>

            <!-- Right Part: About Us Content -->
            <div class="about-us-content">
                <h2>About Us</h2>
                <p>
                    Welcome to Coder's Goal, a premier educational institution dedicated to shaping the future of
                    technology
                    through high-quality learning. Our mission is to empower students with the skills, knowledge, and
                    confidence they need to excel in their careers.

                    At Coder's Goal, we offer a diverse range of courses tailored to meet industry demands, blending
                    theoretical concepts with practical applications. Our experienced faculty are passionate educators
                    committed to providing personalized attention and mentorship, ensuring that each student receives
                    the
                    support they need to thrive.

                    We believe in holistic development, promoting not just academic excellence but also extracurricular
                    engagement. Students can participate in sports, cultural activities, and various clubs to enhance
                    their
                    interpersonal skills and leadership qualities.

                    Our modern infrastructure includes state-of-the-art classrooms and labs, providing an ideal
                    environment
                    for learning. Additionally, our robust placement cell assists students in securing internships and
                    job
                    opportunities with leading companies.
                </p>

                <!-- Capsules Section -->
                <div class="capsules-container">
                    <!-- Capsule 1: Address -->
                    <div class="capsule">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p>Karimpur, Nadia-741152, West Bengal</p>
                    </div>

                    <!-- Capsule 2: Email -->
                    <div class="capsule">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <p>info@codersgoal.com</p>
                    </div>

                    <!-- Capsule 3: Phone -->
                    <div class="capsule">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <p>+91 7719332510</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="three-part-section">
            <div class="container">
                <div class="part">
                    <img src="../img/story.png" alt="Description of Image 1">
                    <h3>Our Story</h3>
                    <p>" At Coder's Goal, we began our journey with a vision to empower aspiring tech enthusiasts
                        through
                        quality education. Established by passionate educators, our institution has evolved into a
                        vibrant
                        community dedicated to excellence in learning. We offer a diverse range of courses, from
                        programming
                        languages to advanced technologies, ensuring our students gain practical skills that meet
                        industry
                        demands. Our commitment to fostering a supportive environment encourages collaboration and
                        innovation. With experienced faculty and modern infrastructure, we are proud to guide our
                        students
                        toward achieving their dreams and shaping the future of technology together. "
                    </p>
                </div>
                <div class="part" style="border-left: 3px solid #426ca5; border-right: 3px solid #426ca5;">
                    <img src="../img/mission.png" alt="Description of Image 2">
                    <h3>Our Mission</h3>
                    <p>" At Coder's Goal, our mission is to provide accessible, high-quality education that empowers
                        students
                        to excel in the ever-evolving world of technology. We are dedicated to nurturing talent through
                        a
                        comprehensive curriculum that combines theoretical knowledge with practical experience. Our goal
                        is
                        to create an inclusive and inspiring learning environment where students can thrive, innovate,
                        and
                        grow. We strive to equip our students with the skills and confidence necessary to succeed in
                        their
                        careers, while fostering a passion for lifelong learning. By doing so, we aim to contribute
                        positively to the community and the global tech landscape. "
                    </p>
                </div>
                <div class="part">
                    <img src="../img/what-do.png" alt="Description of Image 3">
                    <h3>What We Do</h3>
                    <p>" At Coder's Goal, we specialize in delivering industry-relevant courses in computer science and
                        programming. Our diverse offerings include in-depth training in languages such as Java, C, and
                        Python, alongside essential topics like web development, data science, and software engineering.
                        We
                        focus on practical learning experiences, incorporating hands-on projects and real-world
                        applications
                        to ensure our students gain valuable skills. In addition to academic instruction, we provide
                        personalized mentorship, career guidance, and placement assistance to support students in their
                        professional journeys. "</p>
                </div>
            </div>
        </section>

    </main>
    <?php include 'footer.php' ?>
</body>

</html>