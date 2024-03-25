
/*========== menu icon navbar ==========*/
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};


/*========== scroll sections active link ==========*/
document.addEventListener("DOMContentLoaded", function() {
    var currentLocation = window.location.href;
    var menuItem = document.querySelectorAll('.navbar a');
    var menuLength = menuItem.length;
    for (var i = 0; i< menuLength; i++) {
        if(menuItem[i].href === currentLocation) {
            menuItem[i].className = "active";
        }
    }
});



window.onscroll = () => {
/*========== sticky navbar ==========*/
let header = document.querySelector('.header');

header.classList.toggle('sticky', window.scrollY > 100);


/*========== remove menu icon navbar when click navbar link (scroll) ==========*/
menuIcon.classList.remove('bx-x');
navbar.classList.remove('active');

};