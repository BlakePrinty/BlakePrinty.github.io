window.onscroll = function() {scrollUpdater()};

function scrollUpdater() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("scrollBar").style.width = scrolled + "%";
}

var background = document.querySelector(".background");
var habiTrack = document.querySelector(".habiTrack");
var albumSongs = document.querySelector(".albumSongs");
var wordleSolver = document.querySelector(".wordleSolver");

background.addEventListener("click", () => {
    background.classList.add("hidden");    
})

habiTrack.addEventListener("click", () => {
    background.classList.remove("hidden");
})

albumSongs.addEventListener("click", () => {
    background.classList.remove("hidden");
})

wordleSolver.addEventListener("click", () => {
    background.classList.remove("hidden");
})