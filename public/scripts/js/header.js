// BACKGROUND
const header = document.querySelector('header');
const menuBtn = document.querySelector('.menu-btn');
const menuBtnLines = document.querySelector('.menu-btn__lines');
const menuItems = document.querySelector('.menu-items')
const menuItemHome = document.getElementById('menu-item-home')
const menuItemMail = document.getElementById('menu-item-mail')
const brand = document.querySelector('.brand')

// HEADER BACKGROUND
document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 250) {
        header.style.backgroundColor = 'var(--clr-background-2)';
        menuItemHome.style.color = 'var(--clr-text-1)';
        menuItemMail.style.color = 'var(--clr-text-1)';
        brand.style.color = 'var(--clr-text-1)';
    } else {
        header.style.backgroundColor = 'transparent';
        if (window.innerWidth < 1200) {
            menuItemHome.style.color = 'var(--clr-text-1)';
            menuItemMail.style.color = 'var(--clr-text-1)';
        } else {
            menuItemHome.style.color = '#F2F3F5';
            menuItemMail.style.color = '#F2F3F5';
        }
        brand.style.color = '#F2F3F5';
    }
});

// HAMBURGER MENU
menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle("open")
    menuItems.classList.toggle("open")
})

