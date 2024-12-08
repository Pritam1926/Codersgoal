<?php
// Start session
session_start();

include '../connection.php';
// Fetch the form data
$admin_id = $_POST['Admin_id'];
$password = $_POST['Password'];

// Prepare and bind
$sql ="SELECT * FROM admin_details WHERE Admin_id = '$admin_id' AND Password = '$password'";
$result=$conn->query($sql);

// Check if the credentials match
if ($result->num_rows > 0) {
    // Store admin ID in session
    $_SESSION['Admin_id'] = $admin_id;
    $_SESSION['Password'] = $password;

    // If login is successful, show an alert and redirect to the dashboard
    echo "<script>alert('Login successfully! Welcome, Admin.'); window.location.href = 'admin-dashboard.php';</script>";
} 
else {
    // If login fails, show an error message
    echo "<script>alert('Invalid ID or Password. Please try again.'); window.location.href = 'admin-login.html';</script>";
}

$conn->close();
?>
