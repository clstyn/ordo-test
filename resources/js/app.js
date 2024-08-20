import "./bootstrap";

import Splide from "@splidejs/splide";
import "@splidejs/splide/css";

document.addEventListener("DOMContentLoaded", function () {
    new Splide(".splide", {
        type: "fade",
        arrows: false,
        pagination: false,
        rewind: true,
        autoplay: true,
        interval: 2000,
        speed: 1000,
    }).mount();
});
