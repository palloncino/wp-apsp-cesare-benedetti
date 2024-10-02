document.addEventListener("DOMContentLoaded", function () {
    function adjustHeaderHeight() {
        const header = document.querySelector(".header-container");
        const headerHeight = header.offsetHeight;
        document.getElementById("header-height").style.height = headerHeight + "px";
    }

    // Initial adjustment
    adjustHeaderHeight();

    // Adjust on window resize
    window.addEventListener("resize", adjustHeaderHeight);

    // Burger menu toggle
    const burgerMenu = document.getElementById("burger-menu");
    const mobileMenu = document.getElementById("mobileMenu");
    burgerMenu.addEventListener("click", function () {
        burgerMenu.classList.toggle("open");
        mobileMenu.classList.toggle("show");
    });
});