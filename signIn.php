<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "SELECT email, password_hash FROM users WHERE email = '$email'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password_hash"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            header("Location: lesson.php");
            exit; 
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $connect->close(); // Close the database connection
    header("Location: login.php?error=" . urlencode($error));
    exit;
}
?>