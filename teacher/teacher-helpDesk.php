<?php
include 'teacher-stayLogout.php';
include '../connection.php';

// Fetch help desk details from the admin table
$sql = "SELECT Address, Ph_no, Email_id FROM admin_details LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data
    $helpData = $result->fetch_assoc();
} else {
    echo "No help desk information available.";
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Help Desk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
        padding-top: 110px;
        padding-left: 300px;
        padding-right: 30px;
        font-family: 'Arial', sans-serif;
    }

    .help-section {
        text-align: center;
        padding: 20px;
        width: 100%;
        margin: auto;
    }

    .help-section h2 {
        font-size: 2em;
        color: black;
        margin-bottom: 10px;
    }

    .help-section p {
        font-size: 1.2em;
        color: black;
    }

    .help-cards {
        display: flex;
        gap: 20px;
        justify-content: space-between;
        margin-top: 50px;
        flex-wrap: wrap;
    }

    .card {
        background: linear-gradient(135deg, #ffffff, #e0f7fa);
        border-radius: 10px;
        flex: 1;
        min-width: 280px;
        max-width: 300px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .card-icon {
        font-size: 40px;
        margin-bottom: 15px;
        color: #0073e6;
    }

    .card-title {
        font-size: 1.5em;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .card-content {
        font-size: 1.1em;
        color: #555;
    }

    /* Responsive Design for Extra Small Devices (Phones, Less than 576px) */
    @media (max-width: 575px) {
        body {
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .help-section h2 {
            font-size: 1.3em;
        }

        .help-section p {
            font-size: 1em;
        }

        .help-cards {
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 90%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .card-icon {
            font-size: 1.5em;
        }

        .card-title {
            font-size: 1.4em;
        }

        .card-content {
            font-size: 1em;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        body {
            padding-top: 0;
            padding-left: 0;
            padding-right: 0;
        }

        .help-section h2 {
            font-size: 1.5em;
        }

        .help-section p {
            font-size: 1.1em;
        }

        .help-cards {
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 90%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .card-icon {
            font-size: 1.5em;
        }

        .card-title {
            font-size: 1.4em;
        }

        .card-content {
            font-size: 1em;
        }
    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 768px) and (max-width: 991px) {
        body {
            padding-top: 110px;
            padding-left: 240px;
            padding-right: 30px;
        }

        .help-section h2 {
            font-size: 1.8em;
        }

        .help-section p {
            font-size: 1.2em;
        }

        .help-cards {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            width: 90%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .card-icon {
            font-size: 38px;
        }

        .card-title {
            font-size: 1.5em;
        }

        .card-content {
            font-size: 1.1em;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 991px) and (max-width: 1199px) {
        body {
            padding-top: 110px;
            padding-left: 300px;
            padding-right: 30px;
        }

        .help-section h2 {
            font-size: 2em;
        }

        .help-section p {
            font-size: 1.2em;
        }

        .help-cards {
            flex-direction: row;
            justify-content: space-between;
        }


        .card {
            width: 90%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .card-icon {
            font-size: 38px;
        }

        .card-title {
            font-size: 1.5em;
        }

        .card-content {
            font-size: 1.1em;
        }
    }
    </style>
</head>

<body>
    <?php include 'teacher-header.php'; ?>
    <main>
        <div class="help-section">
            <h2>Need Assistance?</h2>
            <p>"Our Help Desk is here to provide you with quick and reliable support. Whether you're facing account
                issues, course management challenges, or technical problems, we offer comprehensive FAQs,
                troubleshooting guides, and direct assistance. Reach out through our contact form for personalized
                support from our dedicated team."</p>

            <div class="help-cards">
                <div class="card">
                    <div class="card-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="card-title">Address</div>
                    <div class="card-content"><?php echo htmlspecialchars($helpData['Address']); ?></div>
                </div>

                <div class="card">
                    <div class="card-icon"><i class="fas fa-phone"></i></div>
                    <div class="card-title">Phone</div>
                    <div class="card-content"><?php echo htmlspecialchars($helpData['Ph_no']); ?></div>
                </div>

                <div class="card">
                    <div class="card-icon"><i class="fas fa-envelope"></i></div>
                    <div class="card-title">Email</div>
                    <div class="card-content"><?php echo htmlspecialchars($helpData['Email_id']); ?></div>
                </div>
            </div>
        </div>
    </main>
    <br><br><br><br><br>
    <?php include 'teacher-footer.php'; ?>
</body>

</html>