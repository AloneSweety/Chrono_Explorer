<?php
session_start(); // Start the session to manage user login state
require_once('config.php'); // Include your database connection file

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $article_id = intval($_GET['id']);  // Convert the 'id' parameter to an integer

    // Fetch the article from the database based on the article ID
    $query = "SELECT * FROM articles WHERE id = '$article_id'";

    // Execute the query and check if it was successful
    $result = mysqli_query($conn, $query);

    // If query fails, display an error message
    if (!$result) {
        die("Query failed: " . mysqli_error($conn)); // This will display a more detailed error message
    }

    // Check if the article exists
    if (mysqli_num_rows($result) > 0) {
        $article = mysqli_fetch_assoc($result);
    } else {
        echo "Article not found!";
        exit();
    }
} else {
    echo "No article selected!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?> - Chrono Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Chrono Explorer</h1>
            <p><em>Walk Through the Past</em></p>
            <div class="header-buttons">
                <?php if (!isset($_SESSION['user_id'])): ?>
                    <a href="login.php" class="btn btn-login">Log In</a>
                    <a href="register.php" class="btn btn-signup">Sign Up</a>
                <?php else: ?>
                    <a href="dashboard.php" class="btn btn-login">Dashboard</a>
                    <a href="logout.php" class="btn btn-signup">Logout</a>
                <?php endif; ?>
            </div>
        </div>

        <div class="article-detail">
            <h2><?php echo htmlspecialchars($article['title']); ?></h2>
            <img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Article Image" class="img-fluid mb-4">
            <p><b>Era: </b><?php echo htmlspecialchars($article['era']); ?></p>
            <p><b>Level: </b><?php echo htmlspecialchars($article['level']); ?></p>
            <p><b>Status: </b><?php echo htmlspecialchars($article['status']); ?></p>
            <hr>
            <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
            <a href="home.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
