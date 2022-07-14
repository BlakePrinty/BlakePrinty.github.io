let navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}

let popup = document.getElementById("popup");

function showSocials() {
    popup.classList.add("open-popup");
}

function hideSocials() {
    popup.classList.remove("open-popup");
}
