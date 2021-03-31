const submenus = document.querySelectorAll('.sub-menu');
const menus = document.querySelectorAll('.menu-item-has-children');




submenus.forEach(submenu => {
    submenu.classList.add('d-none'),

        submenu.addEventListener('mouseleave', e => {

            submenu.classList.add('d-none'),
                submenu.classList.remove('menu-back')
        })
});

menus.forEach(menu => {
    menu.addEventListener('mouseenter', e => {
        menu.classList.add('active');

        submenus.forEach(submenu => {

            if (submenu.parentElement.classList.contains('active')) {
                submenu.classList.remove('d-none'),
                    submenu.classList.add('menu-back')
            };
        })

    });

    menu.addEventListener('mouseleave', e => {
        menu.classList.remove('active');
        menu.children[1].classList.add('d-none');
        menu.children[1].classList.remove('menu-back');
    })
});
