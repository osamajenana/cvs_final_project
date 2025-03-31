// FAQ Toggle Script
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.parentElement;
        faqItem.classList.toggle('open');
    });
});


// Add animation on scroll
document.addEventListener("DOMContentLoaded", () => {
    const featureItems = document.querySelectorAll(".feature-item");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    featureItems.forEach(item => {
        observer.observe(item);
    });
});

// home page
document.addEventListener("DOMContentLoaded", () => {
    const featureImage = document.querySelector(".feature-image");

    // Add a click effect
    featureImage.addEventListener("click", () => {
        featureImage.style.transform = "rotate(5deg) scale(1.1)";
        featureImage.style.transition = "transform 0.5s";

        // Reset the effect after 500ms
        setTimeout(() => {
            featureImage.style.transform = "scale(1)";
        }, 500);
    });

    // Add a focus effect when hovered
    featureImage.addEventListener("mouseover", () => {
        featureImage.style.border = "3px solid #3498db";
    });

    featureImage.addEventListener("mouseout", () => {
        featureImage.style.border = "none";
    });
});


document.addEventListener("DOMContentLoaded", () => {
    const button = document.querySelector(".button--whiteBlue");

    button.addEventListener("click", (event) => {
        event.preventDefault();
        document.body.style.transition = "opacity 0.5s ease-in-out";
        document.body.style.opacity = "0";
        setTimeout(() => {
            window.location.href = "/build-resume";
        }, 500);
    });
});


document.addEventListener("DOMContentLoaded", () => {
    const benefitsItems = document.querySelectorAll(".benefitsItem");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, {
            threshold: 0.2
        }
    );

    benefitsItems.forEach((item) => {
        observer.observe(item);
    });
});


// resume page
document.querySelector('.benefitsTemplatesButton').addEventListener('click', function(e) {
    e.preventDefault();
    const targetPage = e.target.getAttribute('href');
    window.scrollTo({
        top: document.querySelector(targetPage).offsetTop,
        behavior: 'smooth'
    });
});

document.querySelector('.jumbotronTemplatesButton').addEventListener('click', function(e) {
    e.preventDefault();
    const targetPage = e.target.getAttribute('href');
    window.scrollTo({
        top: document.querySelector(targetPage).offsetTop,
        behavior: 'smooth'
    });
});




// chatgpt
document.addEventListener("DOMContentLoaded", () => {
    const chatToggle = document.getElementById("chatgpt-toggle");
    const chatWindow = document.getElementById("chatgpt-window");
    const chatClose = document.getElementById("chatgpt-close");
    const chatForm = document.getElementById("chatgpt-form");
    const chatInput = document.getElementById("chatgpt-input");
    const chatMessages = document.querySelector(".chatgpt-messages");

    // Toggle Chat Window
    chatToggle.addEventListener("click", () => {
        chatWindow.classList.toggle("hidden");
    });

    chatClose.addEventListener("click", () => {
        chatWindow.classList.add("hidden");
    });

    // Add message to chat
    const addMessage = (text, sender) => {
        const messageDiv = document.createElement("div");
        messageDiv.classList.add("chatgpt-message", `chatgpt-${sender}`);
        messageDiv.innerHTML = `<p>${text}</p>`;
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight; // Scroll to the latest message
    };

    // Handle form submission
    chatForm.addEventListener("submit", async(e) => {
        e.preventDefault();

        const userMessage = chatInput.value.trim();
        if (!userMessage) return;

        // Add user message to chat
        addMessage(userMessage, "user");
        chatInput.value = "";

        // Call AI API for response
        addMessage("Thinking...", "bot"); // Placeholder message

        try {
            const botResponse = await fetchChatGPTResponse(userMessage);
            // Update bot message with the response
            chatMessages.lastChild.innerHTML = `<p>${botResponse}</p>`;
        } catch (error) {
            chatMessages.lastChild.innerHTML = `<p>Sorry, something went wrong. Please try again later.</p>`;
        }
    });

    // Fetch response from ChatGPT API
    const fetchChatGPTResponse = async(userMessage) => {
        // Replace `YOUR_API_KEY` with your OpenAI API key
        const apiKey = "YOUR_API_KEY";
        const endpoint = "https://api.openai.com/v1/completions";

        const payload = {
            model: "text-davinci-003", // Or any other supported model
            prompt: `User's CV data: ${userMessage}. Suggest suitable job roles.`,
            max_tokens: 150,
            temperature: 0.7,
        };

        const response = await fetch(endpoint, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                Authorization: `Bearer ${apiKey}`,
            },
            body: JSON.stringify(payload),
        });

        if (!response.ok) {
            throw new Error("Failed to fetch response");
        }

        const data = await response.json();
        return data.choices[0].text.trim();
    };
});
