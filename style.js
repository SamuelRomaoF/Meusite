document.addEventListener("DOMContentLoaded", function() {
    const menuLinks = document.querySelectorAll(".menu-link");

    menuLinks.forEach(function(menuLink) {
        menuLink.addEventListener("click", function(event) {
            event.preventDefault();

            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});

let btnmenu = document.getElementById('btn-menu');
let menu = document.getElementById('menu-mobile');

btnmenu.addEventListener('click', function() {
    menu.classList.toggle('abrir-menu');
});