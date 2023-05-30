const lines = document.querySelector(".lines");
const mobileList = document.querySelector(".mobile-list");
const mobileLinks = document.querySelectorAll(".mobile-link");

mobileLinks.forEach(link => {
    link.addEventListener("click", () => {
        mobileList.classList.remove("flex");
        lines.innerHTML = "&#9776;";
    })
})

lines.addEventListener("click", () => {
    if (mobileList.classList.contains("flex")) {
        mobileList.classList.remove("flex");
        lines.innerHTML = "&#9776;";
    } else {
        mobileList.classList.add("flex");
        lines.innerHTML = "X";
    }
});

