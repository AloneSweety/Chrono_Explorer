<?php
session_start(); // Start the session

// Example lesson data
$lesson = [
    'title' => 'The Arrival of the Portuguese',
    'description' => 'Explore how the Portuguese established their control over Sri Lanka starting in 1505.',
    'content' => 'The Portuguese arrived in Sri Lanka in 1505, establishing control over the coastal areas. They were initially welcomed by local rulers but eventually faced resistance as their influence expanded. The Portuguese introduced their culture, religion, and trade practices, which had a significant impact on the island.',
    'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/65/AMH-6978-KB_The_Portuguese_Pedro_Lopez_welcomes_the_Empress_of_Ceylon%2C_Dona_Catharina.jpg',
];

$isLoggedIn = isset($_SESSION['user_id']); // Check if the user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $lesson['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e8e8e8;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        .lesson-header {
            background-color: #4a2c2c;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .lesson-header h1 {
            font-size: 2.5rem;
        }
        .lesson-content img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #4a2c2c;
            color: white;
            position: relative;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="lesson-header">
            <h1><?php echo $lesson['title']; ?></h1>
        </div>

        <div class="lesson-content">
            <img src="<?php echo $lesson['image']; ?>" alt="<?php echo $lesson['title']; ?>" class="img-fluid">
            <p><?php echo $lesson['description']; ?></p>
            <p><?php echo $lesson['content']; ?></p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Chrono Explorer. All Rights Reserved.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
