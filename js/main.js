const darkModeButton = document.querySelector(".slider");

const pageHeader = document.querySelector(".header");
const toggleSwitchDiv = document.querySelector(".toggleSwitch");
const pageFooter = document.querySelector(".footer");
const downArrow = document.querySelector(".down-arrow");
const aboutMe = document.querySelector(".about");
const projects = document.querySelector(".projects");

let darkMode = false;

darkModeButton.addEventListener("click", () => {
    if (pageHeader.classList.contains("dark")) {

        pageHeader.classList.remove("dark");
        toggleSwitchDiv.classList.remove("dark");
        pageFooter.classList.remove("dark");
        downArrow.classList.remove("white");
        aboutMe.classList.remove("dark");
        projects.classList.remove("dark");

    } else {

        pageHeader.classList.add("dark");
        toggleSwitchDiv.classList.add("dark");
        pageFooter.classList.add("dark");
        downArrow.classList.add("white");
        aboutMe.classList.add("dark");
        projects.classList.add("dark");

    }
});

function makeDarkMode() {
    
}