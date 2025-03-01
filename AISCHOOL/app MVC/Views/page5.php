<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المواد الدراسية</title>
    <link rel="stylesheet" href="/AISCHOOL/public (index,css)/CSS/page5.css">
    <link rel="icon" href="/AISCHOOL/images/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    // Example modules array
    $modules = [
        'رياضيات',
        'علوم',
        'تاريخ',
        'جغرافيا',
        'إنجليزي',
        'فن',
        'موسيقى',
        'التربية البدنية',
        'علوم الحاسوب'
    ];

    // Uncomment and use this section when integrating with a database
    /*
    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch modules from the database
    $sql = "SELECT module_name FROM modules";
    $result = $conn->query($sql);

    $modules = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $modules[] = $row['module_name'];
        }
    }

    $conn->close();
    */
    ?>

    <h2>المواد الدراسية</h2>
    <ul>
        <?php foreach ($modules as $module): ?>
            <li>
                <div class="card">
                    <a href="module_page.php?module=<?php echo urlencode($module); ?>">
                        <?php echo htmlspecialchars($module); ?>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>