const menus = document.querySelectorAll('.menu-item-has-children');
const submenus = document.querySelectorAll('.sub-menu');

console.log(menus);
console.log(submenus);

submenus.forEach(submenu =>
    submenu.classList.add('d-none')
);

menus.forEach(menu =>
    menu.addEventListener('mouseenter', e => {
        submenus.forEach(submenu =>
            submenu.classList.toggle('d-none')
        );

        submenus.forEach(submenu =>
            submenu.classList.add('menu-back')
        );

    })
);

