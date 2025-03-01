<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>توليد التمارين</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="icon" href="/AISCHOOL/images/logo.png" type="image/png">
    <link rel="stylesheet" href="/AISCHOOL/public (index,css)/CSS/page8.css">
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
        <h1>توليد التمارين</h1>
        <form action="page9.php" method="post">
            <div class="form-group">
                <label for="num_exercises">عدد التمارين:</label>
                <input type="number" id="num_exercises" name="num_exercises" min="1" required>
            </div>
            <div class="form-group">
                <label>مستوى الصعوبة:</label>
                <div class="radio-group">
                    <label><input type="radio" name="difficulty" value="easy" required> سهل</label>
                    <label><input type="radio" name="difficulty" value="middle"> متوسط</label>
                    <label><input type="radio" name="difficulty" value="hard"> صعب</label>
                </div>
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="include_solutions"> تضمين الحلول</label>
            </div>
            <button type="submit">توليد التمارين</button>
        </form>
    </div>
</body>
</html>