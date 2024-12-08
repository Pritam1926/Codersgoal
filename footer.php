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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Footer</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        font-size: 15px;
        font-family: 'poppins', sans-serif;
    }

    footer {
        width: 100%;
        background-color: #f0f8ff;
    }

    .footer-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        padding: 20px 0;
        height: 320px;
        border-top: 2px solid #a2cbe4;
    }

    .bold {
        margin-bottom: 5px;
        font-size: 1.5em;
        font-weight: bolder;
        color: black;
    }

    .contact,
    .media,
    .quick {
        width: auto;
        height: auto;
        margin-top: 10px;
        font-size: 1.2em;
        display: flex;
        flex-direction: column;
    }

    .icon-logo li {
        transition: all 0.2s ease;
    }

    .icon-logo li:hover {
        font-weight: bolder;
        font-size: 1.3em;
        cursor: pointer;
    }

    .icon-logo {
        list-style: none;
        width: fit-content;
    }

    .icon-link {
        text-decoration: none;
        color: black;
        padding-bottom: 0.5em;
    }

    .line-space {
        padding: 5px;
    }

    .footer-copywrite {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 20px;
        background-color: #f0f8ff;
        border-top: 2px solid #a2cbe4;
        padding: 15px 0;
        flex-wrap: wrap;
    }

    .footer-copywrite img {
        height: 60px;
        border-radius: 50%;
    }

    .footer-copywrite h1 {
        font-size: 2em;
        margin: 0;
    }

    #copyright {
        font-size: 1em;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        .footer-details {
            flex-direction: column;
            align-items: center;
            height: 100%;
        }
        .bold{
            font-size: 1.1em;
        }
        .contact,
        .media,
        .quick {
            width: 100%;
            text-align: center;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1em;
        }

        .footer-copywrite {
            flex-direction: column;
            text-align: center;
        }

        .footer-copywrite img {
            height: 40px;
        }

        .footer-copywrite h1 {
            font-size: 1.3em;
        }

        #copyright {
            font-size: 0.9em;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        .footer-details {
            flex-direction: column;
            align-items: center;
            height: 100%;
        }
        .bold{
            font-size: 1.2em;
        }
        .contact,
        .media,
        .quick {
            width: 100%;
            text-align: center;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        .footer-copywrite {
            flex-direction: column;
            text-align: center;
        }

        .footer-copywrite img {
            height: 50px;
        }

        .footer-copywrite h1 {
            font-size: 1.5em;
        }

        #copyright {
            font-size: 0.9em;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 767px) and (max-width: 991px) {
        .footer-details {
            flex-direction: row;
            height: 40%;
        }
        .bold{
            font-size: 1.2em;
        }
        .contact,
        .media,
        .quick {
            width: auto;
            text-align: left;
            font-size: 1em;
        }

        .footer-copywrite {
            flex-direction: row;
            text-align: left;
        }

        .footer-copywrite img {
            height: 55px;
        }

        .footer-copywrite h1 {
            font-size: 1.8em;
        }

        #copyright {
            font-size: 0.95em;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .footer-details {
            flex-direction: row;
        }

        .contact,
        .media,
        .quick {
            width: auto;
            text-align: left;
        }

        .footer-copywrite {
            flex-direction: row;
            text-align: left;
        }

        .footer-copywrite img {
            height: 60px;
        }

        .footer-copywrite h1 {
            font-size: 2em;
        }

        #copyright {
            font-size: 1em;
        }
    }

    /* Responsive Design for Extra Large Devices (Large Desktops, 1200px and up) */
    @media (min-width: 1200px) {
        .footer-details {
            flex-direction: row;
        }
        .contact,
        .media,
        .quick {
            width: auto;
            text-align: left;
        }

        .footer-copywrite {
            flex-direction: row;
            text-align: left;
        }

        .footer-copywrite img {
            height: 60px;
        }

        .footer-copywrite h1 {
            font-size: 2em;
        }

        #copyright {
            font-size: 1em;
        }
    }
    </style>
</head>

<body>
    <footer>
        <section class="footer-details">
            <!-- Contact Info -->
            <div class="contact">
                <p class="bold">Contact Us</p>
                <p class="line-space">Email: info@codersgoal.com</p>
                <p class="line-space">Phone: +91 7719332510</p>
                <p class="line-space">Address: Karimpur, Nadia-741152, West Bengal</p>
            </div>

            <!-- Social Media Links -->
            <div class="media">
                <p class="bold">Social Media Link</p>
                <ul class="icon-logo">
                    <li class="line-space"><a href="https://www.facebook.com/profile.php?id=61556110485652"
                            class="icon-link"><i class="fa-brands fa-facebook"></i></a> Facebook</li>
                    <li class="line-space"><a href="#" class="icon-link"><i class="fa-brands fa-whatsapp"></i></a>
                        Whatsapp</li>
                    <li class="line-space"><a href="#" class="icon-link"><i class="fa-brands fa-linkedin"></i></a>
                        LinkedIn</li>
                    <li class="line-space"><a href="https://www.instagram.com/codergoals_/" class="icon-link"><i
                                class="fa-brands fa-square-instagram"></i></a> Instagram</li>
                    <li class="line-space"><a href="https://www.youtube.com/@codergoals" class="icon-link"><i
                                class="fa-brands fa-youtube"></i></a> YouTube</li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="quick">
                <p class="bold">Quick Links</p>
                <ul class="icon-logo">
                    <li class="line-space"><a href="/index.php" class="icon-link">Home</a></li>
                    <li class="line-space"><a href="/course.php" class="icon-link">Course</a></li>
                    <li class="line-space"><a href="/admission.php" class="icon-link">Admission</a></li>
                    <li class="line-space"><a href="/about.php" class="icon-link">About Us</a></li>
                    <li class="line-space"><a href="#" class="icon-link">Notice</a></li>
                    <li class="line-space"><a href="#" class="icon-link">Feedback</a></li>
                </ul>
            </div>
        </section>

        <!-- Footer Bottom Section -->
        <section class="footer-copywrite">
            <img src="/img/logo.jpg" alt="logo" class="main-logo">
            <h1 class="main-heading">Coder's Goal</h1>
            <p id="copyright">&copy; 2024 Coder's Goal. <a href="/index.php" class="icon-link">All Rights
                    Reserved</a></p>
        </section>
    </footer>
</body>

</html>