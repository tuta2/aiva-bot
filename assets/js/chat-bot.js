document.addEventListener("DOMContentLoaded", () => {
  const chatContainer = document.getElementById("chat-container");
  const chatInput = document.getElementById("chat-input");
  const sendBtn = document.getElementById("btn-send");
  const fiveGDevicesBtn = document.getElementById("btn-5g-devices");
  const resetPasswordBtn = document.getElementById("btn-reset-password");
  const generalHelpBtn = document.getElementById("btn-general-help");

  const addMessage = (text, sender) => {
    const messageWrapper = document.createElement("div");
    const messageBubble = document.createElement("div");

    if (sender === "user") {
      messageWrapper.className = "flex justify-end";
      messageBubble.className =
        "bg-red-500 text-white rounded-lg p-3 max-w-xs";
    } else {
      messageWrapper.className = "flex justify-start";
      messageBubble.className =
        "bg-gray-200 text-gray-800 rounded-lg p-3 max-w-xs";
    }

    messageBubble.innerHTML = text;
    messageWrapper.appendChild(messageBubble);
    chatContainer.appendChild(messageWrapper);
    chatContainer.scrollTop = chatContainer.scrollHeight;
  };

  const handleUserAction = (message, action) => {
    addMessage(message, "user");
    let botResponse = "";
    setTimeout(() => {
      if (action === "5g_devices") {
        botResponse = `To order 5G devices, please follow these steps:<br/><br/>
      1. Log in to the USDM Portal.<br/>
      2. Navigate to the '5G Devices' section.<br/>
      3. Select the devices and quantities you need.<br/>
      4. Submit your order for approval.`;
      } else if (action === "reset_password") {
        botResponse = `To reset your USDM password, please follow these steps:<br/><br/>
      1. Go to the USDM login page.<br/>
      2. Click on the "Forgot Password" link.<br/>
      3. Enter your registered email address.<br/>
      4. Follow the instructions sent to your email to create a new password.`;
      } else if (action === "general_help") {
        botResponse = `For general support, please provide a brief description of your issue. I will do my best to assist you.`;
      } else if (action === "usdm_link") {
        botResponse = `To access the USDM portal, please click the link below:<br/><br/>
      <a href="https://your-usdm-portal-link.com" target="_blank" class="text-blue-500 underline hover:text-blue-700">Access USDM Portal</a>`;
      }
      addMessage(botResponse, "bot");
    }, 1000);
  };

  fiveGDevicesBtn.addEventListener("click", () =>
    handleUserAction("I need to order 5G devices.", "5g_devices")
  );
  resetPasswordBtn.addEventListener("click", () =>
    handleUserAction("I need to reset my USDM password.", "reset_password")
  );
  generalHelpBtn.addEventListener("click", () =>
    handleUserAction("I need general support.", "general_help")
  );

  sendBtn.addEventListener("click", () => {
    const message = chatInput.value.trim();
    if (message) {
      addMessage(message, "user");
      chatInput.value = "";
      let botResponse = `I'm sorry, I can only provide assistance with 5G devices and password resets at this time. Please select an option above or type "USDM Link" to get the portal link.`;
      if (
        message.toLowerCase().includes("usdm") ||
        message.toLowerCase().includes("link")
      ) {
        handleUserAction(message, "usdm_link");
        return;
      }
      setTimeout(() => addMessage(botResponse, "bot"), 1000);
    }
  });

  chatInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      sendBtn.click();
    }
  });
});
