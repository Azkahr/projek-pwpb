window.onload = function () {
    let bg = document.getElementById("paralax");
    window.addEventListener("scroll", function () {
        if (window.pageYOffset < 968) {
            let i = window.pageYOffset / 2;
            bg.style.top = `${i}px`;
        }
    });
};
