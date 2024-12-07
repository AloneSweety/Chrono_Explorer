<?php
$page_title = "Lesson Details - The Arrival of the Portuguese"; // Dynamic title
$breadcrumbs_title = "The Arrival of the Portuguese";
$breadcrumbs_description = "Learn about the Portuguese arrival in Sri Lanka in 1505 and their impact on the island’s culture, politics, and trade.";
$lessons = [
    [
        "title" => "The First Encounter",
        "duration" => "30 min",
        "icon" => "lni lni-video",
    ],
    [
        "title" => "Portuguese Influence on Trade",
        "duration" => "45 min",
        "icon" => "lni lni-users",
    ],
    [
        "title" => "Quiz: Portuguese Influence",
        "questions" => "10 questions",
        "duration" => "20 min",
    ],
    [
        "title" => "Portuguese Military and Political Control",
        "duration" => "60 min",
    ],
    [
        "title" => "Quiz: Key Figures of the Portuguese Period",
        "questions" => "8 questions",
        "duration" => "15 min",
    ],
    [
        "title" => "Legacy of the Portuguese in Sri Lanka",
        "duration" => "30 min",
    ],
];
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Include your CSS styles here */
        /* Same styles as your original HTML */
    </style>
</head>

<body>
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title"><?php echo htmlspecialchars($breadcrumbs_title); ?></h1>
                        <p><?php echo htmlspecialchars($breadcrumbs_description); ?></p>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="project.html">Home</a></li>
                        <li><?php echo htmlspecialchars($breadcrumbs_title); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="course-details section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="curriculum">
                            <div class="course-curriculum">
                                <ul class="curriculum-sections">
                                    <li class="single-curriculum-section">
                                        <div class="section-header">
                                            <div class="section-left">
                                                <h5 class="title">The Arrival of the Portuguese: Lessons</h5>
                                            </div>
                                        </div>
                                        <ul class="section-content">
                                            <?php foreach ($lessons as $lesson): ?>
                                                <li class="course-item">
                                                    <a class="section-item-link lesson" href="javascript:void(0);">
                                                        <span class="item-name"><?php echo htmlspecialchars($lesson['title']); ?></span>
                                                        <div class="course-item-meta">
                                                            <?php if (isset($lesson['questions'])): ?>
                                                                <span class="item-meta count-questions"><?php echo htmlspecialchars($lesson['questions']); ?></span>
                                                            <?php endif; ?>
                                                            <span class="item-meta duration"><b><?php echo htmlspecialchars($lesson['duration']); ?></b></span>
                                                            <?php if (isset($lesson['icon'])): ?>
                                                                <span class="item-meta item-meta-icon video">
                                                                    <i class="<?php echo htmlspecialchars($lesson['icon']); ?>"></i>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer style2">
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="left">
                                <p>&copy; <?php echo date("Y"); ?> Chronicles of Learning. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
