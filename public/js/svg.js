let svg1 = document.getElementById("svg1");
let svg2 = document.getElementById("svg2");
let svg3 = document.getElementById("svg3");

let svg1l = svg1.getTotalLength();
let svg2l = svg2.getTotalLength();
let svg3l = svg3.getTotalLength();

svg1.style.strokeDasharray = svg1l + " " + svg1l;
svg1.style.strokeDashoffset = svg1l;

svg2.style.strokeDasharray = svg2l + " " + svg2l;
svg2.style.strokeDashoffset = svg2l;

svg3.style.strokeDasharray = svg3l + " " + svg3l;
svg3.style.strokeDashoffset = svg3l;

window.onscroll = function () {
    let scrollpercent =
        (document.documentElement.scrollTop + document.body.scrollTop) /
        (document.documentElement.scrollHeight -
            document.documentElement.clientHeight);
    let drawlength = svg1l * scrollpercent;
    svg1.style.strokeDashoffset = svg1l - drawlength;
};
