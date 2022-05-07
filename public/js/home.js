window.onload = function () {
    let bg = document.getElementById("paralax");
    let rect1 = document.getElementById("rect1");
    let rect1l = document.getElementById("rect1").getBoundingClientRect();

    let rect2 = document.getElementById("rect2");
    let rect2l = document.getElementById("rect1").getBoundingClientRect();

    let rect3l = document.getElementById("limit1").getBoundingClientRect();

    let scroll = 0;

    window.addEventListener("scroll", function () {
        if (window.pageYOffset < 968) {
            let i = window.pageYOffset / 2;
            bg.style.top = `${i}px`;
        }
    });

    window.addEventListener("scroll", function () {
        /* let scrollpercent1 = (window.pageYOffset / rect2l.y) * 100;
        let drawlength1 = (scrollpercent1 / 100) * rect1l.width;
        rect1.setAttribute("width", `${drawlength1}`); */

        if (window.pageYOffset > rect2l.y) {
            if (scroll <= 0) {
                scroll = window.pageYOffset;
            }
            /* let min = window.pageYOffset - scroll; */
            console.log(
                window.pageYOffset,
                Math.max(0, window.pageYOffset - scroll)
            );
        }

        /* if (window.pageYOffset > rect2l.y) {
            let scrollpercent2 = (window.pageYOffset / rect3l.y) * 100;
            let drawlength2 = (scrollpercent2 / 100) * rect2l.width * 2;
            rect2.setAttribute("width", `${drawlength2}`);
            console.log(scrollpercent2, drawlength2);
        } */
    });
};
