<?php
// Dynamic Data
$page_title = "The Arrival of the Portuguese";
$breadcrumbs_title = "The Arrival of the Portuguese";
$breadcrumbs_description = "Learn about the Portuguese arrival in Sri Lanka in 1505 and their impact on the island’s culture, politics, and trade.";
$lessons = [
    [
        'title' => 'The First Encounter',
        'duration' => '30 min',
        'icon' => 'lni lni-video'
    ],
    [
        'title' => 'Portuguese Influence on Trade',
        'duration' => '45 min',
        'icon' => 'lni lni-users'
    ],
    [
        'title' => 'Quiz: Portuguese Influence',
        'duration' => '20 min',
        'questions' => '10 questions'
    ],
    [
        'title' => 'Portuguese Military and Political Control',
        'duration' => '60 min'
    ],
    [
        'title' => 'Quiz: Key Figures of the Portuguese Period',
        'duration' => '15 min',
        'questions' => '8 questions'
    ],
    [
        'title' => 'Legacy of the Portuguese in Sri Lanka',
        'duration' => '30 min'
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
            background-color: #f0f8ff; /* Light blue background */
            color: #333;
            line-height: 1.6;
        }

        .breadcrumbs.overlay {
            background: linear-gradient(90deg, #4e95ff, #ff9f43);
            color: #fff;
            padding: 60px 0;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .breadcrumbs-content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin: 0;
        }

        .breadcrumbs-content p {
            font-size: 1.2rem;
            margin: 10px 0 20px;
            opacity: 0.9;
        }

        .breadcrumb-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .breadcrumb-nav li {
            display: inline-block;
            margin: 0 5px;
        }

        .breadcrumb-nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .breadcrumb-nav a:hover {
            color: #ffe066;
        }

        .course-details {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            background-color: #4e95ff;
            color: #fff;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .section-header h5 {
            margin: 0;
            font-size: 1.8rem;
        }

        .section-content {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .course-item {
            background: #fff;
            margin-bottom: 20px;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .course-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .course-item .item-name {
            font-size: 1.4rem;
            font-weight: 600;
            color: #4e95ff;
        }

        .course-item-meta {
            font-size: 0.9rem;
            text-align: right;
        }

        .course-item-meta span {
            display: block;
            margin: 5px 0;
            color: #555;
        }

        .footer.style2 {
            background: #2d3436;
            color: #dfe6e9;
            padding: 30px 0;
            text-align: center;
        }

        .footer.style2 a {
            color: #ffe066;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .footer.style2 a:hover {
            color: #ff9f43;
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
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <footer class="footer style2">
        <p>&copy; <?php echo date("Y"); ?> Chronicles of Learning. All Rights Reserved.</p>
    </footer>
</body>

</html>
