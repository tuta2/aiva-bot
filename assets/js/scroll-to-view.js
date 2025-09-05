document.addEventListener("DOMContentLoaded", function () {
  const scrollMap = {
    rolesButton: "roles",
    tasksButton: "tasks",
    visionButton: "vision",
  };

  const mobileMenu = document.getElementById("mobile-menu");

  Object.entries(scrollMap).forEach(([btnId, targetId]) => {
    const btn = document.getElementById(btnId);
    if (btn) {
      btn.addEventListener("click", function (e) {
        e.preventDefault();
        const section = document.getElementById(targetId);
        section?.scrollIntoView({ behavior: "smooth" });
        history.pushState(null, null, " ");
        if (btnId.endsWith("2")) {
          mobileMenu.classList.add("hidden");
        }
      });
    }
  });
});
