
const main = document.querySelector(".main");

const downArrow = document.querySelector(".downArrow");
const logo = document.querySelector(".logo");
const cursor = document.querySelector(".cursor");
// const projectImg = document.querySelectorAll(".img");

logo.addEventListener("click", () => {
    
    if (main.classList.contains("dark")) {

        main.classList.remove("dark");
        logo.classList.add("inverted");
        cursor.classList.add("inverted");
        // projectImg.classList.remove("dark-border");
        downArrow.classList.remove("inverted");
    
    } else {

        main.classList.add("dark");
        logo.classList.remove("inverted");
        cursor.classList.remove("inverted");
        // projectImg.classList.add("dark-border");
        downArrow.classList.add("inverted");
    
    }

});