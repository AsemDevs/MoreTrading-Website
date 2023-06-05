document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.querySelectorAll('.menu-item-has-children');
    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('mouseover', function() {
            this.querySelector('.submenu').style.display = 'block';
        });
        dropdown.addEventListener('mouseout', function() {
            this.querySelector('.submenu').style.display = 'none';
        });
    });
});

const menuToggle = document.getElementById('menu-toggle');
const navMenuMobile = document.getElementById('menu-mobile');

// Add toggle functionality to the menuToggle button
menuToggle.addEventListener('click', () => {
  if (navMenuMobile.classList.contains('show')) {
    navMenuMobile.classList.remove('show');
  } else {
    navMenuMobile.classList.add('show');
  }
});

jQuery(document).ready(function($) {
    $('li.menu-item-has-children').each(function() {
        var arrowElement = '<span class="down-arrow"></span>';
        $(this).children('a').append(arrowElement);
    });

    $('li.menu-item-has-children').on('click', function(e) {
        $(this).children('a').children('.down-arrow').toggleClass('up-arrow');
    });
});
