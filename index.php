<?php
session_start(); // Start the session to manage user login state

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']); // If there's a session variable 'user_id', the user is logged in
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chrono Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://www.transparenttextures.com/patterns/paper.png');
            background-color: #e8e8e8;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #4a2c2c;
            color: #ffffff;
            padding: 30px 0;
            text-align: center;
            border-radius: 5px;
            margin: 20px 0 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            font-size: 2.5rem;
        }

        .header p {
            font-size: 1.2rem;
            font-style: italic;
        }

        .header .btn {
            margin: 10px;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
        }

        /* Log In button color */
        .btn-login {
            background-color: #4ae2e2;
            color: white;
            border: none;
        }

        .btn-login:hover {
            background-color: #357ab7;
        }

        /* Sign Up button color */
        .btn-signup {
            background-color: #e94e77;
            color: white;
            border: none;
        }

        .btn-signup:hover {
            background-color: #d43660;
        }

        .image-section {
            margin: 20px 0;
            text-align: center;
        }

        .image-section img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .timeline-container {
            position: relative;
            padding: 40px 0;
        }

        .timeline {
            display: flex;
            justify-content: space-between;
            position: relative;
            padding: 20px 0;
            border-top: 2px solid #ccc;
            margin: 20px 0;
        }

        .timeline-item {
            position: relative;
            text-align: center;
            width: 20%;
        }

        .timeline-item h3 {
            margin: 10px 0;
            font-size: 1.5rem;
            color: #4a2c2c;
        }

        .progress-bar {
            height: 10px;
            border-radius: 5px;
        }

        .article-grid {
            margin: 20px 0;
        }

        .article-card {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .article-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .article-card img {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.25rem;
            color: #4a2c2c;
        }

        .filter {
            margin: 20px 0;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .timeline-title {
            margin: 20px 0;
            text-align: center;
            font-size: 1.8rem;
            color: #4a2c2c;
        }

        .footer {
            text-align: center;
            padding: 20px 0;
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
        <div class="header">
            <h1>Chrono Explorer</h1>
            <p><em>Walk Through the Past</em></p>
            <div class="header-buttons">
                <?php if (!$isLoggedIn): ?>
                    <a href="login.php" class="btn btn-login">Log In</a>
                    <a href="register.php" class="btn btn-signup">Sign Up</a>
                <?php else: ?>
                    <a href="dashboard.php" class="btn btn-login">Dashboard</a>
                    <a href="logout.php" class="btn btn-signup">Logout</a>
                <?php endif; ?>
            </div>
        </div>

        <div class="image-section">
            <img src="https://www.wlc.edu/_images/academics/IMPACT-History.jpg" alt="Historical Journey" class="img-fluid">
        </div>

        <div class="timeline-container">
            <h2 class="timeline-title"><u>Track your progress through a timeline</u></h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h3><b>1505</b></h3>
                </div>
                <div class="timeline-item">
                    <h3><b>1658</b></h3>
                </div>
                <div class="timeline-item">
                    <h3><b>1796</b></h3>
                </div>

                <div class="timeline-item">
                    <h3><b>1948</b></h3>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 60%;" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>

        <div class="filter">
            <h5>Filter Articles:</h5>
            <label for="articleFilter">Search:</label>
            <input type="text" id="articleFilter" class="form-control" placeholder="Search articles...">

            <label for="levelFilter" class="mt-2">Level:</label>
            <select id="levelFilter" class="form-control">
                <option value="">All Levels</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>

            <label for="eraFilter" class="mt-2">Era:</label>
            <select id="eraFilter" class="form-control">
                <option value="">All Eras</option>
                <option value="portuguese">Portuguese Colonization</option>
                <option value="dutch">Dutch Colonization</option>
                <option value="british">British Colonization</option>
            </select>

            <label for="statusFilter" class="mt-2">Status:</label>
            <select id="statusFilter" class="form-control">
                <option value="">All Articles</option>
                <option value="read">Read</option>
                <option value="unread">Unread</option>
            </select>
        </div>

        <div class="row article-grid">
            <div class="col-md-4">
                <div class="card article-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/65/AMH-6978-KB_The_Portuguese_Pedro_Lopez_welcomes_the_Empress_of_Ceylon%2C_Dona_Catharina.jpg" class="card-img-top" alt="Portuguese Colonization">
                    <div class="card-body">
                        <h5 class="card-title"><b>The Arrival of the Portuguese</b></h5>
                        <p class="card-text">Explore how the Portuguese established their control over Sri Lanka starting in 1505.</p>
                        <a href="lesson.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card article-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/MapofEelamTamilcountryengraving1692.jpg/472px-MapofEelamTamilcountryengraving1692.jpg" class="card-img-top" alt="Dutch Colonization">
                    <div class="card-body">
                        <h5 class="card-title"><b>Dutch Influence in Sri Lanka</b></h5>
                        <p class="card-text">Learn about the Dutch takeover from 1658 and their lasting impact on the island.</p>
                        <a href="lesson.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card article-card">
                    <img src="https://cdfhs.org/wp-content/uploads/2019/06/Headmen-light.png" class="card-img-top" alt="British Colonization">
                    <div class="card-body">
                        <h5 class="card-title"><b>British Rule in Sri Lanka</b></h5>
                        <p class="card-text">A comprehensive look at British colonization from 1796 to 1948 and its consequences.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
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
