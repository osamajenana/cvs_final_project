document.addEventListener("DOMContentLoaded", () => {
    const chatWidget = document.getElementById("chatgpt-widget");
    const chatToggle = document.getElementById("chatgpt-toggle");
    const chatClose = document.getElementById("chatgpt-close");
    const messagesDiv = document.getElementById("chatgpt-messages");
    const userInput = document.getElementById("user-input");
    const sendButton = document.getElementById("send-button");
  
    // Toggle chat widget
    chatToggle.addEventListener("click", () => {
      chatWidget.style.display = "flex";
      chatToggle.style.display = "none";
    });
  
    chatClose.addEventListener("click", () => {
      chatWidget.style.display = "none";
      chatToggle.style.display = "block";
    });
  
    // Handle sending messages
    sendButton.addEventListener("click", () => {
      const userMessage = userInput.value.trim();
      if (userMessage) {
        addMessage(userMessage, "user");
        userInput.value = "";
        getChatGPTResponse(userMessage);
      }
    });
  
    const addMessage = (message, type) => {
      const messageDiv = document.createElement("div");
      messageDiv.className = `message ${type}`;
      messageDiv.textContent = message;
      messagesDiv.appendChild(messageDiv);
      messagesDiv.scrollTop = messagesDiv.scrollHeight;
    };
  
    const getChatGPTResponse = (userMessage) => {
      addMessage("Thinking...", "bot");
  
      // Simulate API call
      setTimeout(() => {
        messagesDiv.lastChild.textContent = `You said: "${userMessage}". I'll recommend jobs soon!`;
      }, 1000);
  
      // Real integration with API
      // fetch('https://api.openai.com/v1/engines/davinci/completions', {
      //   method: 'POST',
      //   headers: {
      //     'Content-Type': 'application/json',
      //     'Authorization': 'Bearer YOUR_API_KEY',
      //   },
      //   body: JSON.stringify({
      //     prompt: `User's CV data: ${userMessage}. Recommend suitable jobs.`,
      //     max_tokens: 150,
      //   }),
      // })
      // .then(response => response.json())
      // .then(data => {
      //   messagesDiv.lastChild.textContent = data.choices[0].text.trim();
      // })
      // .catch(() => {
      //   messagesDiv.lastChild.textContent = "Something went wrong. Please try again.";
      // });
    };
  });
  