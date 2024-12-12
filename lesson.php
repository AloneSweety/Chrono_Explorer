<?php
// Dynamic Data
$page_title = "The Arrival of the Portuguese";
$breadcrumbs_title = "The Arrival of the Portuguese";
$breadcrumbs_description = "Learn about the Portuguese arrival in Sri Lanka in 1505 and their impact on the island’s culture, politics, and trade.";
$lessons = [
    [
        'title' => 'The First Encounter',
        'duration' => '30 min',
        'icon' => 'lni lni-video',
        'video_url' => 'https://www.youtube.com/embed/example1' // Replace with actual video URL
    ],
    [
        'title' => 'Portuguese Influence on Trade',
        'duration' => '45 min',
        'icon' => 'lni lni-users',
        'video_url' => 'https://www.youtube.com/embed/example2' // Replace with actual video URL
    ],
    [
        'title' => 'Quiz: Portuguese Influence',
        'duration' => '20 min',
        'questions' => '10 questions'
    ],
    [
        'title' => 'Portuguese Military and Political Control',
        'duration' => '60 min',
        'video_url' => 'https://www.youtube.com/embed/example3' // Replace with actual video URL
    ],
    [
        'title' => 'Quiz: Key Figures of the Portuguese Period',
        'duration' => '15 min',
        'questions' => '8 questions'
    ],
    [
        'title' => 'Legacy of the Portuguese in Sri Lanka',
        'duration' => '30 min',
        'video_url' => 'https://www.youtube.com/embed/example4' // Replace with actual video URL
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(249, 249, 249);
            color: #333;
            line-height: 1.6;
        }

        /* Breadcrumbs Section */
        .breadcrumbs {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3)), 
                        url('https://upload.wikimedia.org/wikipedia/commons/6/65/AMH-6978-KB_The_Portuguese_Pedro_Lopez_welcomes_the_Empress_of_Ceylon%2C_Dona_Catharina.jpg') 
                        no-repeat center center/cover;
            padding: 50px 0;
            color: white;
            text-align: center;
        }

        .breadcrumbs h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .breadcrumbs p {
            margin: 10px 0 20px;
            font-size: 1.2rem;
        }

        .breadcrumb-nav {
            list-style: none;
            padding: 0;
            display: inline-block;
            margin: 0;
        }

        .breadcrumb-nav li {
            display: inline;
            margin: 0 10px;
            color: #f9f9f9;
        }

        .breadcrumb-nav a {
            text-decoration: none;
            color: #ddd;
        }

        .breadcrumb-nav a:hover {
            color: #fff;
        }

        /* Course Details Section */
        .course-details {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .section-header h5 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
            color: #4a2c2c;
        }

        .section-content {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .course-item {
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }

        .course-item:last-child {
            border-bottom: none;
        }

        .item-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #4a2c2c;
        }

        .course-item-meta {
            font-size: 0.9rem;
            color: #666;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .course-item-meta span {
            margin-right: 15px;
        }

        .course-item-meta i {
            color: #4a2c2c;
        }

        /* Video Styling */
        .video-container {
            margin-top: 15px;
        }

        iframe {
            width: 100%;
            height: 315px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Footer Section */
        .footer {
            text-align: center;
            padding: 20px;
            background: #4a2c2c;
            color: white;
            margin-top: 50px;
        }

        .footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <div class="breadcrumbs overlay">
        <div class="breadcrumbs-content">
            <h1><?php echo htmlspecialchars($breadcrumbs_title); ?></h1>
            <p><?php echo htmlspecialchars($breadcrumbs_description); ?></p>
            <ul class="breadcrumb-nav">
                <li><a href="index.php">Home</a></li>
                <li><?php echo htmlspecialchars($breadcrumbs_title); ?></li>
            </ul>
        </div>
    </div>

    <div class="course-details">
        <div class="section-header">
            <h5>The Arrival of the Portuguese: Lessons</h5>
        </div>
        <ul class="section-content">
            <?php foreach ($lessons as $lesson): ?>
                <li class="course-item">
                    <span class="item-name"><?php echo htmlspecialchars($lesson['title']); ?></span>
                    <div class="course-item-meta">
                        <?php if (isset($lesson['questions'])): ?>
                            <span><?php echo htmlspecialchars($lesson['questions']); ?></span>
                        <?php endif; ?>
                        <span><?php echo htmlspecialchars($lesson['duration']); ?></span>
                        <?php if (isset($lesson['icon'])): ?>
                            <i class="<?php echo htmlspecialchars($lesson['icon']); ?>"></i>
                        <?php endif; ?>
                    </div>
                    <?php if (isset($lesson['video_url'])): ?>
                        <div class="video-container">
                            <iframe src="<?php echo htmlspecialchars($lesson['video_url']); ?>" allowfullscreen></iframe>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <footer class="footer style2">
        <p>&copy; <?php echo date("Y"); ?> Chronicles of Learning. All Rights Reserved.</p>
    </footer>
</body>

</html>
