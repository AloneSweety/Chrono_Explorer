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
        // Article not found, we display a hard-coded article about the Portuguese
        $article = [
            'title' => 'The Arrival of the Portuguese',
            'image_url' => 'https://www.greenholidaytravels.com/wp-content/uploads/2019/08/Trinco-Fort.jpg',  // New image for Trinco Fort
            'era' => '15th Century',
            'level' => 'Advanced',
            'status' => 'Historical',
            'content' => "The arrival of the Portuguese in Asia marks a significant turning point in world history. In the early 16th century, Portugal, a small but ambitious maritime nation, set out to expand its influence and trade routes across the globe. This expansion was driven by the search for new trading opportunities, particularly for spices, which were highly sought after in Europe.\n\nIn 1498, the Portuguese navigator Vasco da Gama successfully reached the shores of India, opening the sea route from Europe to Asia around the southern tip of Africa. His voyage to the Indian Ocean not only marked the beginning of the Portuguese colonial empire in Asia but also laid the foundation for an era of European exploration and dominance in the region.\n\nThe Portuguese landed on the Indian subcontinent in Calicut (present-day Kozhikode) on the southwestern coast of India. Vasco da Gama's arrival was met with initial enthusiasm, as the Portuguese offered protection to local rulers in exchange for trading privileges. In 1510, the Portuguese seized the strategic port of Goa, which would later become the capital of their Asian empire.\n\nGoa became a vital trading hub for the Portuguese, allowing them to control the spice trade between India, Europe, and the Far East. The Portuguese also introduced new technologies, including cannonry and navigation techniques, which had lasting impacts on regional warfare and maritime practices.\n\nThe Portuguese presence in India and Asia was not without controversy. While they established important trading posts and spread Christianity, they also engaged in colonial exploitation and military conflicts with local rulers and other European powers, including the Dutch and the British. The legacy of the Portuguese in India can still be seen in the architecture, culture, and religion of Goa, where Portuguese influence remained strong until its annexation by India in 1961.\n\nToday, the arrival of the Portuguese is considered a pivotal event in the Age of Discovery and the history of European colonization. It reshaped global trade, culture, and geopolitics, laying the foundation for future European imperial ventures in Asia."
        ];
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
    <style>
        /* General Body Styles */
        body {
            background-color: #f4f7f6;
            font-family: 'Arial', sans-serif;
            color: #333;
            padding-top: 20px;
        }

        .container {
            margin-top: 50px;
        }

        .header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .header p {
            font-style: italic;
            font-size: 1.2rem;
        }

        .article-detail {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .article-detail h2 {
            font-size: 2.5rem;
            color: #007bff;
        }

        .article-detail img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .article-detail p {
            font-size: 1.2rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .article-detail b {
            color: #007bff;
        }

        .article-detail .btn-secondary {
            background-color: #28a745;
            border: none;
            color: white;
            padding: 12px 20px;
            font-size: 1.1rem;
            border-radius: 5px;
        }

        .article-detail .btn-secondary:hover {
            background-color: #218838;
            text-decoration: none;
        }

        /* Button styles in the header */
        .header-buttons a {
            background-color: #007bff;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px;
            font-size: 1.1rem;
        }

        .header-buttons a:hover {
            background-color: #0056b3;
        }

        .back-btn {
            background-color: #6c757d;
        }

        .back-btn:hover {
            background-color: #5a6268;
        }

        /* Styling for small screens */
        @media (max-width: 767px) {
            .header h1 {
                font-size: 2.5rem;
            }
            .article-detail h2 {
                font-size: 2rem;
            }
        }
    </style>
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
        <img src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="Article Image">
        <p><strong>Era:</strong> <?php echo htmlspecialchars($article['era']); ?></p>
        <p><strong>Level:</strong> <?php echo htmlspecialchars($article['level']); ?></p>
        <p><strong>Status:</strong> <?php echo htmlspecialchars($article['status']); ?></p>
        <hr>
        <p><?php echo nl2br(htmlspecialchars($article['content'])); ?></p>
        <a href="home.php" class="btn btn-secondary back-btn">Back to Home</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
