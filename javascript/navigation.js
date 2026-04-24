document.addEventListener("DOMContentLoaded", () => {
    const navBars = document.getElementById("nav-bars");
    const navMenu = document.querySelector(".nav-menu");

    navBars.addEventListener("click", () => {
        navBars.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
});