import "./bootstrap";

import "../sass/app.scss";
import * as mdb from "mdb-ui-kit"; // lib
import { Input } from "mdb-ui-kit"; // module

import "./pelayanan.js";
import "./beranda.js";
import "./info-negara.js";
import "./fun-facts.js";

$("#recipeCarousel").carousel({
    interval: 10000,
});

$("list-card-slide .carousel .carousel-item").each(function () {
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(":first");
    }
    next.children(":first-child").clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(":first");
        }

        next.children(":first-child").clone().appendTo($(this));
    }
});
