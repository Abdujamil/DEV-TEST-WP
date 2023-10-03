// Mobile menu script
const menuButton = document.querySelector('.menu-btn');
const mobMenu = document.querySelector('.mob-menu');
const closeMenu = document.querySelector('.close');

let isMenuVisible = false;

menuButton.addEventListener('click', () => {
    mobMenu.style.display = isMenuVisible ? 'none' : 'block';
    menuButton.style.display = isMenuVisible ? 'block' : 'none';
    closeMenu.style.display = isMenuVisible ? 'none' : 'block';
    isMenuVisible = !isMenuVisible;
});

closeMenu.addEventListener('click', () => {
    mobMenu.style.display = isMenuVisible ? 'none' : 'block';
    menuButton.style.display = isMenuVisible ? 'block' : 'none';
    closeMenu.style.display = isMenuVisible ? 'none' : 'block';
    isMenuVisible = !isMenuVisible;
});


