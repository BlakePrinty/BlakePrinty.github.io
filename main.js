const hambuger = document.querySelector('.hamburger');

hambuger.addEventListener('click', function () {
    this.classList.toggle('active');
});