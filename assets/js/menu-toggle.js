document.addEventListener("DOMContentLoaded", function() {
    const navMenu = document.querySelector('.nav-menu');
    const toggleButton = document.querySelector('.toggle-button');

    toggleButton.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
    });
});
