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

document.querySelectorAll(".tabs button").forEach((button) => {
    button.addEventListener("click", () => {
        document
            .querySelectorAll(".tabs button")
            .forEach((btn) => btn.classList.remove("active"));
        button.classList.add("active");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const progressBar = document.querySelector(".progress__curr");

    setTimeout(() => {
        progressBar.style.width = "220px";
    }, 1000);
});

document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".info__item .line");
    const leftArrow = document.querySelector(".arrow__left");
    const rightArrow = document.querySelector(".arrow__right");
    let currentIndex = 0;

    function updateActiveClass(index) {
        items.forEach((item, i) => {
            item.classList.toggle("active", i === index);
        });
    }

    leftArrow.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateActiveClass(currentIndex);
        }
    });

    rightArrow.addEventListener("click", () => {
        if (currentIndex < items.length - 1) {
            currentIndex++;
            updateActiveClass(currentIndex);
        }
    });
});
