const chatbotButton = document.getElementById("chatbot-button");
const chatbotModal = document.getElementById("chatbot-modal");
const chatbotClose = document.getElementById("chatbot-close");

chatbotButton.addEventListener("click", () => {
  chatbotModal.classList.remove("hidden");
  document.body.classList.add("overflow-hidden");
});

chatbotClose.addEventListener("click", () => {
  chatbotModal.classList.add("hidden");
  document.body.classList.remove("overflow-hidden");
});

chatbotModal.addEventListener("click", (e) => {
  if (e.target === chatbotModal) {
    chatbotModal.classList.add("hidden");
    document.body.classList.remove("overflow-hidden");
  }
});
