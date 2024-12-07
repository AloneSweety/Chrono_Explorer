<?php
// config.php

define('DB_SERVER', 'localhost');  // MySQL server (localhost if running locally)
define('DB_USERNAME', 'root');     // MySQL username (default is usually 'root')
define('DB_PASSWORD', '');         // MySQL password (empty by default for local installations)
define('DB_DATABASE', 'chrono_explorer');  // Database name

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
