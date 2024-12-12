<?php
// Set the database connection file
require_once 'dbconf.php';

try {
    // Query
    $sql = "SELECT * FROM users"; // Make sure the table name is correct

    // Execute the query
    $result = mysqli_query($connect, $sql);

    // Check if data exists in the table
    if (mysqli_num_rows($result) > 0) {
        // Fetch the data from rows
        while ($row = mysqli_fetch_assoc($result)) {
            print_r($row); // Display the fetched data
        }
    } else {
        echo "No results found.";
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage()); // Handle exceptions gracefully
}
