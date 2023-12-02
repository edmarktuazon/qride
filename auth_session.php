<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: admin_login.php");
    exit();
}
$dbConnection = mysqli_connect('localhost', 'root', '', 'qride_database');
if (!$dbConnection) {
    die("Connection failed: " . mysqli_connect_error());
}

?>