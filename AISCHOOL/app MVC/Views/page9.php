<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التمارين المولدة</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="icon" href="/AISCHOOL/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/AISCHOOL/public (index,css)/CSS/page9.css">
</head>
<body>
    <div class="navbar">
        <a href="page5.php">المواد الدراسية</a>
        <a href="page6.php">البرنامج</a>
        <a href="page7.php">المصادر</a>
        <a href="page8.php"  class="highlight">تدرب</a>
        <a href="page10.php">اختبرني</a>
        <a href="page11.php">الدردشة</a>
        <a href="#account">الحساب</a>
    </div>
    <div class="container">
        <h1>التمارين المولدة</h1>
        <div class="exercises">
            <?php
            // Fetch the form data
            $num_exercises = $_POST['num_exercises'];
            $difficulty = $_POST['difficulty'];
            $include_solutions = isset($_POST['include_solutions']) ? true : false;

            // Example generated exercises array
            $exercises = [];
            for ($i = 1; $i <= $num_exercises; $i++) {
                $exercise = "تمرين $i - مستوى الصعوبة: $difficulty";
                if ($include_solutions) {
                    $exercise .= " - الحل: هذا هو الحل للتمرين $i";
                }
                $exercises[] = $exercise;
            }

            // Display the exercises
            foreach ($exercises as $exercise): ?>
                <div class="exercise-item">
                    <?php echo htmlspecialchars($exercise); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>