jQuery(document).ready(function ($) {
    // Dropdown functionality for desktop #menu
    $('#menu .menu-item-has-children').hover(function () {
        $(this).find('.submenu').first().stop(true, true).slideDown();
    }, function () {
        $(this).find('.submenu').first().stop(true, true).slideUp();
    });

    // Toggle functionality for menuToggle button
    $('#menu-toggle').on('click', function () {
        $('#menu-mobile').toggleClass('show');
    });

    // Adding down arrows and toggle functionality for top-level menu items
    var $menuItems = $('li.menu-item-has-children').filter(function() {
        return !$(this).parents('.submenu').length;  // only keep top-level menu items
    });

    $menuItems.each(function () {
        var $menuItem = $(this);
        var $arrowElement = $('<span class="down-arrow"></span>');

        if ($menuItem.closest('#menu-mobile').length) {
            $menuItem.find('> a').after($arrowElement);
        } else if ($menuItem.closest('#menu').length) {
            $menuItem.find('> a').append($arrowElement);
        }

        // Toggle the correct submenu on click
        $arrowElement.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            var $submenu = $menuItem.children('.submenu');
            $submenu.slideToggle();
        });
    });

$('.flex.flex-col.text-white').each(function () {
        var $menuSection = $(this);
        var $heading = $menuSection.find('h3');
        var $menu = $menuSection.find('ul');
        var $downArrow = $heading.find('.down-arrow');

        // Toggle the menu on click
        $downArrow.on('click', function () {
            $menu.slideToggle();
        });
    });

    // Menu toggle for mobile menu
    $('.nav-menu-mobile').each(function () {
        var $menuSection = $(this);
        var $heading = $menuSection.find('.menu-item-has-children > a');
        var $submenu = $heading.siblings('.submenu');
        var $downArrow = $heading.find('.down-arrow');

        // Toggle the menu on click
        $downArrow.on('click', function () {
            $submenu.slideToggle();
        });
    });
});
