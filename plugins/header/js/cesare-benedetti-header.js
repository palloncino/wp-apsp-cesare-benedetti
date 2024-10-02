document.addEventListener("DOMContentLoaded", function () {
    function adjustHeaderPosition() {
        const adminBar = document.getElementById("wpadminbar");
        const header = document.querySelector(".header-container");
        if (adminBar) {
            const adminBarHeight = adminBar.offsetHeight;
            header.style.top = adminBarHeight + "px";
        } else {
            header.style.top = "0px";
        }
    }

    function adjustHeaderHeight() {
        const header = document.querySelector(".header-container");
        const headerHeight = header.offsetHeight;
        const headerHeightDiv = document.getElementById("header-height");
        if (headerHeightDiv) {
            headerHeightDiv.style.height = headerHeight + "px";
        }
    }

    // Initial adjustment
    adjustHeaderPosition();
    adjustHeaderHeight();

    // Adjust on window resize
    window.addEventListener("resize", function () {
        adjustHeaderPosition();
        adjustHeaderHeight();
    });

    // Burger menu toggle
    const burgerMenu = document.getElementById("burger-menu");
    const mobileMenu = document.getElementById("mobileMenu");
    if (burgerMenu && mobileMenu) {
        burgerMenu.addEventListener("click", function () {
            burgerMenu.classList.toggle("open");
            mobileMenu.classList.toggle("show");
        });
    }
});
