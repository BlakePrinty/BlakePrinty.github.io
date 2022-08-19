const darkModeButton = document.querySelector(".slider");

const pageHeader = document.querySelector(".header");
const toggleSwitchDiv = document.querySelector(".toggleSwitch");
const pageFooter = document.querySelector(".footer");

darkModeButton.addEventListener("click", () => {
    if (pageHeader.classList.contains("dark")) {

        pageHeader.classList.remove("dark");
        toggleSwitchDiv.classList.remove("dark");
        pageFooter.classList.remove("dark");

    } else {

        pageHeader.classList.add("dark");
        toggleSwitchDiv.classList.add("dark");
        pageFooter.classList.add("dark");

    }
});

