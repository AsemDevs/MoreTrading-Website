document.addEventListener("DOMContentLoaded", function () {
    var menu = document.querySelector('#menu');
    var menuToggle = document.getElementById('menu-toggle');
    var navMenuMobile = document.getElementById('menu-mobile');
    var menuItems = document.querySelectorAll('li.menu-item-has-children');

    // Dropdown functionality for #menu
    if (menu) {
        var dropdowns = menu.querySelectorAll('.menu-item-has-children');
        dropdowns.forEach(function (dropdown) {
            dropdown.addEventListener('mouseover', function () {
                this.querySelector('.submenu').style.display = 'block';
            });
            dropdown.addEventListener('mouseout', function () {
                this.querySelector('.submenu').style.display = 'none';
            });
        });
    }

    // Toggle functionality for menuToggle button
    if (menuToggle && navMenuMobile) {
        menuToggle.addEventListener('click', function () {
            navMenuMobile.classList.toggle('show');
        });
    }

    // Adding down arrows and toggle functionality for each menu item
    menuItems.forEach(function (menuItem) {
        var arrowElement = document.createElement('span');
        arrowElement.classList.add('down-arrow');

        if (menuItem.closest('#menu-mobile')) {
            menuItem.querySelector('a').after(arrowElement);
        } else if (menuItem.closest('#menu')) {
            menuItem.querySelector('a').appendChild(arrowElement);
        }

        arrowElement.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            var submenu = this.nextElementSibling;
            if (submenu.style.display === 'none' || submenu.style.display === '') {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = 'none';
            }
        });
    });

    var downArrows = document.querySelectorAll('li.menu-item-has-children .down-arrow');
    downArrows.forEach(function (arrow) {
        arrow.addEventListener('click', function (e) {
            e.preventDefault();

            var submenu = this.nextElementSibling;
            var parentMenuItem = this.parentElement.querySelector('a');

            if (submenu.style.display === 'block') {
                parentMenuItem.classList.add('primary-color');
            } else {
                parentMenuItem.classList.remove('primary-color');
            }
        });
    });

});
