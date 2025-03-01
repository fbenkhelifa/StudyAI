function submitTest() {
    const form = document.getElementById('testForm');
    const formData = new FormData(form);
    const questions = JSON.parse(document.getElementById('questionsData').textContent);
    let score = 0;

    questions.forEach((question, index) => {
        const questionElement = document.getElementById(`question_${index}`);
        const userAnswer = formData.getAll(`question_${index}`);
        const correctAnswer = question.correct_answer;

        if (question.type === 'checkbox') {
            if (JSON.stringify(userAnswer) === JSON.stringify(correctAnswer)) {
                questionElement.classList.add('correct');
                score++;
            } else {
                questionElement.classList.add('incorrect');
            }
        } else {
            if (userAnswer[0] === correctAnswer) {
                questionElement.classList.add('correct');
                score++;
            } else {
                questionElement.classList.add('incorrect');
            }
        }
    });

    const resultElement = document.getElementById('result');
    resultElement.innerHTML = `<h2>نتيجتك: ${score} من ${questions.length}</h2>`;
}