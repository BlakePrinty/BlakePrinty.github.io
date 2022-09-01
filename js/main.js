
const main = document.querySelector(".main");

const downArrow = document.querySelector(".downArrow");
const logo = document.querySelector(".logo");

logo.addEventListener("click", () => {
    
    if (main.classList.contains("dark")) {
        main.classList.remove("dark");
        logo.classList.add("inverted");
        downArrow.classList.remove("inverted");
    } else {
        main.classList.add("dark");
        logo.classList.remove("inverted");
        downArrow.classList.add("inverted");
    }

});