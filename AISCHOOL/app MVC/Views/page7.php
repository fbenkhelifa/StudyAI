<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم الطالب</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="icon" href="/AISCHOOL/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/AISCHOOL/public (index,css)/CSS/page7.css">
</head>
<body>
    <div class="navbar">
        <a href="page5.php">المواد الدراسية</a>
        <a href="page6.php">البرنامج</a>
        <a href="page7.php" class="highlight">المصادر</a>
        <a href="page8.php">تدرب</a>
        <a href="page10.php">اختبرني</a>
        <a href="page11.php">الدردشة</a>
        <a href="#account">الحساب</a>
    </div>
    <div class="content-wrapper">
        <div class="main-content">
            <h1>المصادر</h1>
            <p>سيتم عرض جميع المصادر المقدمة من LLM لهذا الوحدة هنا.</p>
            <ul class="resources-list">
                <?php
                // Example resources array
                $resources = [
                    'كتاب الرياضيات',
                    'فيديو تعليمي عن العلوم',
                    'مقالة تاريخية',
                    'خريطة جغرافية',
                    'تمارين إنجليزي',
                    'دروس فن',
                    'موسيقى تعليمية',
                    'تمارين التربية البدنية',
                    'دروس علوم الحاسوب'
                ];

                // Uncomment and use this section when integrating with a database or API
                /*
                // Fetch resources from the database or API
                $moduleId = $_GET['module_id'];
                $resources = fetchResourcesForModule($moduleId);
                */

                foreach ($resources as $resource): ?>
                    <li class="resource-item">
                        <?php echo htmlspecialchars($resource); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="sidebar">
            <h2>معلومات الطالب</h2>
            <p><strong>المستوى:</strong> متوسط</p>
            <p><strong>التقدم:</strong> 75%</p>
        </div>
    </div>
</body>
</html>