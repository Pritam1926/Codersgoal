<?php
session_start();

if (!isset($_SESSION['Std_id'])) {
    header("Location: /index.php");
    exit();
}

header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: -1");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

?>