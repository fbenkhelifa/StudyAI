document.addEventListener('DOMContentLoaded', () => {
    const chatForm = document.getElementById('chatForm');
    const chatBox = document.getElementById('chatBox');
    const userInput = document.getElementById('userInput');

    // Load chat history from local storage
    const chatHistory = JSON.parse(localStorage.getItem('chatHistory')) || [];
    chatHistory.forEach(message => displayMessage(message.text, message.sender));

    chatForm.addEventListener('submit', async (event) => {
        event.preventDefault();
        const userMessage = userInput.value.trim();
        if (userMessage === '') return;

        // Display user message
        displayMessage(userMessage, 'user');
        saveMessage(userMessage, 'user');

        // Clear input
        userInput.value = '';

        // Send message to LLM and get response
        const llmResponse = await getLLMResponse(userMessage);

        // Display LLM response
        displayMessage(llmResponse, 'llm');
        saveMessage(llmResponse, 'llm');
    });

    function displayMessage(message, sender) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message', sender);
        messageElement.textContent = message;
        chatBox.appendChild(messageElement);
        chatBox.scrollTop = chatBox.scrollHeight;
    }

    function saveMessage(text, sender) {
        const chatHistory = JSON.parse(localStorage.getItem('chatHistory')) || [];
        chatHistory.push({ text, sender });
        localStorage.setItem('chatHistory', JSON.stringify(chatHistory));
    }

    async function getLLMResponse(message) {
        // Simulate LLM response
        return new Promise((resolve) => {
            setTimeout(() => {
                resolve(`LLM response to: ${message}`);
            }, 1000);
        });
    }
});