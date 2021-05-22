/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/hamburger.js ***!
  \***********************************/
var forEach = function forEach(t, o, r) {
  if ("[object Object]" === Object.prototype.toString.call(t)) for (var c in t) {
    Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
  } else for (var e = 0, l = t.length; l > e; e++) {
    o.call(r, t[e], e, t);
  }
};

var hamburgers = document.querySelectorAll(".hamburger");

if (hamburgers.length > 0) {
  forEach(hamburgers, function (hamburger) {
    hamburger.addEventListener("click", function () {
      $("header").toggleClass("visable");
      $("ul>li.menu_item_link>a").toggleClass("animate__animated animate__fadeInDown ");
      this.classList.toggle("is-active");
    }, false);
  });
}
/******/ })()
;