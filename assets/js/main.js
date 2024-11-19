// Header menu
let header = document.querySelector('.header');
let mobileMenu = document.querySelector('.header-inner__mobile');
let mobileMenuBtn = document.getElementById('mobile-menu-btn');
let mobileMenuBtnIcon = mobileMenuBtn.querySelector('i');

let mobileMenuActive = false;

function toggleMobileMenu() {
    mobileMenu.classList.toggle('active');
    mobileMenuBtnIcon.classList.toggle('fa-bars');
    mobileMenuBtnIcon.classList.toggle('fa-xmark');

    mobileMenuActive = !mobileMenuActive;
}

// Close/Open header mobile menu by button
mobileMenuBtn.addEventListener('click', (e) => {
    toggleMobileMenu();
})

// Close header menu if click outside the header
window.addEventListener('click', (e) => {
    if(!e.target.closest('.header') && mobileMenuActive) {
        toggleMobileMenu();
    }
});

