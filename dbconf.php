<?php
$servername = "127.0.0.1:3306"; // or your DB host
$username = "root";        // your DB username
$password = "mariadb";            // your DB password
$dbname = "chrono_explorer"; // your DB name

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
