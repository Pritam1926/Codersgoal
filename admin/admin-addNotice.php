<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Form</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(to bottom right, #1e3c72, #2a5298, #6dd5ed, #ffffff);
        margin: 0;
        padding: 0;
    }

    /* Admission Container Styling */
    .admission-container {
        max-width: 650px;
        margin: 50px auto;
        background: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    .button {
        text-decoration: none;
        font-size: 1.2em;
        color: black;
    }

    .admission-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #1e3c72;
        font-size: 28px;
        font-weight: bold;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: black;
    }

    .form-group textarea {
        height: 120px;
    }

    .form-group .gender-options {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
    }

    .form-group input[type="date"],
    .form-group input[type="file"],
    .form-group textarea {
        width: 100%;
        padding: 12px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 8px;
        transition: all 0.3s ease;
        font-size: 16px;
    }

    .form-group input:focus,
    .form-group select:focus {
        border-color: #6dd5ed;
        box-shadow: 0 0 10px rgba(109, 213, 237, 0.5);
    }

    .form-group input[type="submit"] {
        width: 100%;
        padding: 15px;
        background: linear-gradient(to right, #1e3c72, #2a5298, #6dd5ed);
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .form-group input[type="submit"]:hover {
        background: linear-gradient(to right, #6dd5ed, #2a5298, #1e3c72);
        transform: scale(1.02);
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        body {
            padding: 20px 10px;
        }

        .admission-container {
            padding: 20px;
            margin: 20px auto;
        }

        .admission-container h2 {
            font-size: 1.3em;
        }

        .form-group label {
            font-size: 1em;
        }

        .form-group input,
        .form-group button {
            font-size: .9em;
            padding: 10px;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 576px) and (max-width: 767px) {
        body {
            padding: 20px 20px;
        }

        .admission-container {
            padding: 20px;
            margin: 30px auto;
        }

        .admission-container h2 {
            font-size: 1.5em;
        }

        .form-group label {
            font-size: 1.1em;
        }

        .form-group input,
        .form-group button {
            font-size: 1em;
            padding: 10px;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 768px) and (max-width: 991px) {
        body {
            padding: 20px 20px;
        }

        .admission-container {
            padding: 20px;
            margin: 30px auto;
        }

        .admission-container h2 {
            font-size: 1.8em;
        }

        .form-group label {
            font-size: 1.2em;
        }

        .form-group input,
        .form-group button {
            font-size: 1.1em;
            padding: 10px;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199px) {
        body {
            padding: 20px 20px;
        }

        .admission-container {
            padding: 20px;
            margin: 30px auto;
        }

        .admission-container h2 {
            font-size: 1.8em;
        }

        .form-group label {
            font-size: 1.2em;
        }

        .form-group input,
        .form-group button {
            font-size: 1.1em;
            padding: 10px;
        }
    }
    </style>
</head>

<body>
    <div class="admission-container">
        <a href="admin-manageNotice.php" class="button">⬅️Back</a>
        <h2>Notice Form</h2>
        <form action="admin-addNotice-submit.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="notice_date">
            </div>
            <div class="form-group">
                <label for="content">Notice:</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>