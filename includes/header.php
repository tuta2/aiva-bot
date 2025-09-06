<!-- Header -->
<header class="absolute left-0 top-0 z-[9999] bg-transparent w-full shadow-none shadow-gray-800 py-6 px-4 md:px-8 lg:px-16 border-b border-neutral-300">
  <div class="container mx-auto flex justify-between items-center">
    <a href="<?php echo ROOT_URL; ?>" class="flex items-center gap-2 hover:scale-[105%] transition-all duration-500 ease-in-out">
      <div class="h-10 w-10 flex items-center justify-center bg-red-600 text-white font-bold rounded-lg">
        Av
      </div>
      <div class="text-start">
        <p class="text-sm font-semibold">AIVA Bot</p>
        <p class="text-xs text-gray-500">Intelligence Virtual Assistant</p>
      </div>
    </a>

    <nav id="mobile-menu" class="flex lg:flex flex-col lg:flex-row items-center fixed lg:static top-0 right-0 h-full w-64 lg:h-auto lg:w-auto bg-gray-200 lg:bg-transparent shadow-lg shadow-gray-800 lg:shadow-none shadow-lg lg:shadow-none p-6 lg:p-0 space-y-6 lg:space-y-0 lg:space-x-6 transform transition-transform duration-700 translate-x-full lg:translate-x-0 z-[100]">

      <!-- Close Button (visible only on mobile) -->
      <div class="flex justify-end lg:hidden">
        <button id="menu-close" class="cursor-pointer text-neutral-500 hover:text-red-700 text-3xl">&times;</button>
      </div>

      <a id="rolesButton" class="cursor-pointer group text-neutral-700 hover:text-red-700 transition-colors">
        Roles
        <div class="h-1 w-0 group-hover:w-5/6 bg-red-700 transition-all duration-700 ease-in-out"></div>
      </a>
      <a id="tasksButton" class="cursor-pointer group text-neutral-700 hover:text-red-700 transition-colors">
        Guided Tasks
        <div class="h-1 w-0 group-hover:w-5/6 bg-red-700 transition-all duration-700 ease-in-out"></div>
      </a>
      <a id="visionButton" class="cursor-pointer group text-neutral-700 hover:text-[red-700 transition-colors">
        Vision
        <div class="h-1 w-0 group-hover:w-5/6 bg-red-700 transition-all duration-700 ease-in-out"></div>
      </a>
    </nav>

    <div class="flex items-center space-x-2 lg:space-x-0">
      <button id="openHeaderModal" class="relative group cursor-pointer text-red-700 text-xs md:text-sm lg:text-md border-2 border-red-700 rounded-lg px-1.5 lg:px-4 py-1.5 overflow-hidden hover:text-white transition-all duration-900 ease-in-out">
        <span class="relative z-[99] flex items-center justify-center">
          Signin
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15" fill="currentColor" class="ml-1.5">
            <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/>
          </svg>
        </span>
        <div class="absolute top-0 left-0 h-full w-0 bg-red-700 group-hover:w-full rounded-r-md transition-all duration-900 ease-in-out"></div>
      </button>

      <!-- Menu Icon -->
      <button id="menu-toggle" class="ml-2 cursor-pointer lg:hidden flex items-center text-neutral-700 hover:text-red-700 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"fill="currentColor" class="w-5.5 h-5.5">
          <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
        </svg>
      </button>
    </div>
  </div>
</header>
