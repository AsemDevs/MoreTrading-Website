document.addEventListener('DOMContentLoaded', function () {
    var toggleButton = document.querySelector('.toggle-menu');
    var navMenu = document.querySelector('.nav-menu');

    toggleButton.addEventListener('click', function () {
        navMenu.classList.toggle('hidden');
    });
});
