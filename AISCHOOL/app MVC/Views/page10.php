<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اختبرني</title>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/AISCHOOL/public (index,css)/CSS/page10.css">
    <link rel="icon" href="/AISCHOOL/images/logo.png" type="image/png">
    <script src="/AISCHOOL/public (index,css)/JS/page10.js" defer></script>
</head>
<body>
    <div class="navbar">
        <a href="page5.php">المواد الدراسية</a>
        <a href="page6.php">البرنامج</a>
        <a href="page7.php">المصادر</a>
        <a href="page8.php">تدرب</a>
        <a href="page10.php" class="highlight">اختبرني</a>
        <a href="page11.php">الدردشة</a>
        <a href="#account">الحساب</a>
    </div>
    <div class="container">
        <h1>اختبرني</h1>
        <form id="testForm" action="submit_test.php" method="post">
            <?php
            // Example generated questions array
            $questions = [
                ['type' => 'text', 'question' => 'ما هو اسمك؟', 'correct_answer' => 'محمد'],
                ['type' => 'radio', 'question' => 'ما هو لون السماء؟', 'options' => ['أزرق', 'أخضر', 'أحمر'], 'correct_answer' => 'أزرق'],
                ['type' => 'checkbox', 'question' => 'اختر الفواكه التي تحبها:', 'options' => ['تفاح', 'موز', 'برتقال'], 'correct_answer' => ['تفاح', 'برتقال']],
                // Add more questions as needed
            ];

            // Display the questions
            foreach ($questions as $index => $question): ?>
                <div class="question-item" id="question_<?php echo $index; ?>">
                    <p><?php echo ($index + 1) . '. ' . htmlspecialchars($question['question']); ?></p>
                    <?php if ($question['type'] == 'text'): ?>
                        <input type="text" name="question_<?php echo $index; ?>" required>
                    <?php elseif ($question['type'] == 'radio'): ?>
                        <?php foreach ($question['options'] as $option): ?>
                            <label>
                                <input type="radio" name="question_<?php echo $index; ?>" value="<?php echo htmlspecialchars($option); ?>" required>
                                <?php echo htmlspecialchars($option); ?>
                            </label>
                        <?php endforeach; ?>
                    <?php elseif ($question['type'] == 'checkbox'): ?>
                        <?php foreach ($question['options'] as $option): ?>
                            <label>
                                <input type="checkbox" name="question_<?php echo $index; ?>[]" value="<?php echo htmlspecialchars($option); ?>">
                                <?php echo htmlspecialchars($option); ?>
                            </label>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
            <button type="button" onclick="submitTest()">إرسال</button>
        </form>
        <div id="result"></div>
        <script id="questionsData" type="application/json"><?php echo json_encode($questions); ?></script>
    </div>
</body>
</html>