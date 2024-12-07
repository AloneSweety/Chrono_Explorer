<?php
// config.php

// Database connection configuration
define('DB_SERVER', 'localhost');  // Change if using a different server
define('DB_USERNAME', 'root');     // Database username (default: root for local server)
define('DB_PASSWORD', '');         // Database password (default: empty for local server)
define('DB_DATABASE', 'chrono_explorer');  // The database name

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
