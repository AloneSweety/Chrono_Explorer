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
        /* Add previous CSS styles here */
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
