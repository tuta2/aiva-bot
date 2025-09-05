document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  const logo = document.querySelector("header a");
  const menu = document.getElementById('mobile-menu');
  const backdrop = document.getElementById('sidebar-backdrop');
  const toggleBtn = document.getElementById('menu-toggle');
  const closeBtn = document.getElementById('menu-close');

  // Scroll Behavior
  window.addEventListener("scroll", function () {
    if (window.scrollY > 30) {
      header.classList.remove("bg-transparent", "absolute", "shadow-none", "py-6");
      header.classList.add("bg-gray-200", "sticky", "shadow-md", "py-1.5");

      logo.classList.remove("scale-100", "hover:scale-110");
      logo.classList.add("scale-70", "hover:scale-90");
    } else {
      header.classList.add("bg-transparent", "absolute", "shadow-none", "py-6");
      header.classList.remove("bg-gray-200", "sticky", "shadow-md", "py-1.5");

      logo.classList.add("scale-100", "hover:scale-110");
      logo.classList.remove("scale-70", "hover:scale-90");
    }
  });

  // Sidebar toggle functions
  function openSidebar() {
    menu.classList.remove('translate-x-full');
    menu.classList.add('translate-x-0');
    backdrop.classList.remove('hidden');
  }

  function closeSidebar() {
    menu.classList.add('translate-x-full');
    menu.classList.remove('translate-x-0');
    backdrop.classList.add('hidden');
  }

  // Toggle button
  toggleBtn.addEventListener('click', () => {
    const isOpen = !menu.classList.contains('translate-x-full');
    isOpen ? closeSidebar() : openSidebar();
  });

  // Backdrop click closes menu
  backdrop.addEventListener('click', closeSidebar);

  // Close on link click (mobile only)
  const links = menu.querySelectorAll('a, button');
  links.forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 1024) closeSidebar();
    });
  });

  // Close button inside menu
  closeBtn.addEventListener('click', closeSidebar);
});
