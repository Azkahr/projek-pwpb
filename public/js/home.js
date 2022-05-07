window.onload = function () {
    let bg = document.getElementById("paralax");
    let rect1 = document.getElementById("rect1");
    let rect1l = document.getElementById("rect1").getBoundingClientRect();

    let rect2 = document.getElementById("rect2");
    let rect2l = document.getElementById("rect1").getBoundingClientRect();

    let rect3l = document.getElementById("limit1").getBoundingClientRect();

    window.addEventListener("scroll", function () {
        if (window.pageYOffset < 968) {
            let i = window.pageYOffset / 2;
            bg.style.top = `${i}px`;
        }
    });

    window.addEventListener("scroll", function () {
        if (window.pageYOffset + window.innerHeight < rect2l.y) {
            let scrollpercent1 = (window.pageYOffset / rect2l.y) * 100;
            let drawlength = (scrollpercent1 / 100) * rect1l.width;
            rect1.setAttribute("width", `${drawlength}`);
        }
    });
};
