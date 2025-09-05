<!-- Modal Overlay -->
<div id="chatbot-modal" class="fixed inset-0 bg-black/70 flex items-center justify-center z-[99999] hidden">
  <div class="w-full max-w-xl bg-white rounded-2xl shadow-xl shadow-neutral-900 flex flex-col h-[90vh]">
    <div class="bg-gradient-to-r from-red-700 via-red-500 to-red-300 text-white rounded-t-2xl p-4 flex items-center relative">
      <div class="bg-white flex items-center justify-center w-10 h-10 rounded-lg mr-3">
        <img src="<?php echo ROOT_URL; ?>/assets/images/favicon.webp" alt="AIVA Profile" class="w-[95%] h-auto"/>
      </div>
      <div class="flex-1">
        <h2 class="text-lg font-semibold">AIVA Bot</h2>
        <span class="text-xs text-red-200">Online</span>
      </div>

      <button id="chatbot-close" class="cursor-pointer absolute right-4 top-5 text-white bg-red-700 border-2 border-white shadow-md shadow-neutral-900 flex items-center justify-center w-8 h-8 rounded-full hover:scale-[105%] hover:shadow-none transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="14" height="14" fill="currentColor">
          <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/>
        </svg>
      </button>
    </div>

    <div id="chat-container" class="flex-1 p-6 overflow-y-auto space-y-4 bg-chat-pattern">
      <div class="flex items-end">
        <div class="bg-gray-200 text-gray-800 rounded-lg p-3 max-w-xs">
          <p>Hello! I am AIVA, your dedicated virtual assistant. How can I help you today?</p>
        </div>
      </div>

      <div class="flex items-end">
        <div class="bg-gray-200 text-gray-800 rounded-lg p-3 max-w-xs">
          <p>Please choose one of the options below to get started:</p>
          <div class="mt-2 space-y-2">
            <button id="btn-5g-devices" class="w-full text-left bg-white text-gray-700 border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 transition-colors duration-200">
              <i class="fas fa-mobile-alt mr-2"></i>Order 5G Devices
            </button>
            <button id="btn-reset-password" class="w-full text-left bg-white text-gray-700 border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 transition-colors duration-200">
              <i class="fas fa-key mr-2"></i>Reset USDM Password
            </button>
            <button id="btn-general-help" class="w-full text-left bg-white text-gray-700 border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 transition-colors duration-200">
              <i class="fas fa-question-circle mr-2"></i>General Support
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-gray-50 border-t border-gray-200 p-4 flex items-center rounded-b-2xl">
      <input type="text" id="chat-input" class="flex-1 rounded-full py-2 px-4 border-2 border-gray-200 outline-none focus:border-red-600 text-gray-600" placeholder="Type your message..."/>
      <button id="btn-send" class="ml-3 cursor-pointer bg-red-600 text-white rounded-full p-3 hover:bg-red-700 flex items-center justify-center shadow-lg hover:shadow-md shadow-neutral-900 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18" height="18" fill="currentColor">
          <path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/>
        </svg>
      </button>
    </div>
  </div>
</div>
