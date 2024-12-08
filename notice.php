<?php
include 'connection.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <style>
    body {
        background: linear-gradient(135deg, #f0f4c3, #b2dfdb);
    }

    .container {
        width: 80%;
        margin: 30px auto;
        background: linear-gradient(135deg, #f4ffd4, #f5f5dc);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: black;
    }

    .search-box input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        max-width: 300px;
        box-sizing: border-box;
    }

    .search-box input[type="submit"] {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #1e3c72;
        color: white;
        cursor: pointer;
        margin-top: 10px;
        width: 100%;
        max-width: 200px;
    }

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
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 15px;
        }

        h2 {
            font-size: 1.3em;
        }

        .search-box input[type="text"] {
            width: 100%;
        }

        .search-box input[type="submit"] {
            width: 100%;
            max-width: 100px;
        }

        th,
        td {
            font-size: .9em;
            padding: 10px;
        }
    }

    /* Responsive Design for Small Devices (Phones, Landscape, 576px and up) */
    @media (min-width: 575px) and (max-width: 767px) {
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 15px;
        }

        h2 {
            font-size: 1.5em;
        }

        .search-box input[type="text"] {
            width: 100%;
        }

        .search-box input[type="submit"] {
            width: 100%;
            max-width: 100px;
        }

        th,
        td {
            font-size: .9em;
            padding: 11px;
        }

    }

    /* Responsive Design for Medium Devices (Tablets, 768px and up) */
    @media (min-width: 768px) and (max-width: 991px) {
        .container {
            width: 90%;
        }

        h2 {
            font-size: 1.8em;
        }

        .search-box input[type="text"] {
            width: 100%;
        }

        .search-box input[type="submit"] {
            width: auto;
        }

        th,
        td {
            font-size: .9em;
            padding: 12px;
        }
    }

    /* Responsive Design for Large Devices (Desktops, 992px and up) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .container {
            width: 90%;
        }

        h2 {
            font-size: 2em;
        }

        .search-box input[type="text"] {
            width: 100%;
        }

        .search-box input[type="submit"] {
            width: auto;
        }

        th,
        td {
            font-size: 1em;
            padding: 12px;
        }
    }

    /* Responsive Design for Extra Large Devices (Large Desktops, 1200px and up) */
    @media (min-width: 1200px) {
        .container {
            width: 90%;
        }

        h2 {
            font-size: 2em;
        }

        .search-box input[type="text"] {
            width: 100%;
        }

        .search-box input[type="submit"] {
            width: auto;
        }

        th,
        td {
            font-size: 1em;
            padding: 12px;
        }
    }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <div class="container">
            <h2>Notice</h2>
            <div class="button">
                <div class="search-box">
                    <form action="" method="get">
                        <input type="text" name="search" placeholder="Search by Notice_date">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Sl_no</th>
                        <th>Date</th>
                        <th>Content</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $sl_no=1;
                if (isset($_GET['search'])) { 
                    $search = $_GET['search']; 
                    $sql = "SELECT * FROM notice WHERE notice_date LIKE '%$search%'"; 
                } 
                else { 
                    $sql = "SELECT * FROM notice"; 
                }
                $result= $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                            echo "<tr>
                            <td>" . $sl_no . "</td>
                            <td>" . $row['notice_date'] . "</td>
                            <td>" . $row['content'] . "</td>
                            </tr>";
                            $sl_no=$sl_no+1;
                    }
                } 
                else {
                    echo "<tr><td colspan='3'>No Course found</td></tr>";
                }

                $conn->close();
                ?>
                </tbody>
            </table>
        </div>
    </main><br><br><br><br><br>
    <?php include 'footer.php'; ?>
</body>

</html>