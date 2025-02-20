(() => {
  "use strict";
  // var __webpack_modules__ = {
  //     "./src/main.scss":
  //         /*!***********************!*\
  //   !*** ./src/main.scss ***!
  //   \***********************/
  //         (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
  //             __webpack_require__.r(__webpack_exports__);
  //         },
  // };
  // var __webpack_module_cache__ = {};
  // function __webpack_require__(moduleId) {
  //     var cachedModule = __webpack_module_cache__[moduleId];
  //     if (cachedModule !== undefined) {
  //         return cachedModule.exports;
  //     }
  //     var module = (__webpack_module_cache__[moduleId] = { exports: {} });
  //     __webpack_modules__[moduleId](module, module.exports, __webpack_require__);
  //     return module.exports;
  // }
  // (() => {
  //     __webpack_require__.r = (exports) => {
  //         if (typeof Symbol !== "undefined" && Symbol.toStringTag) {
  //             Object.defineProperty(exports, Symbol.toStringTag, { value: "Module" });
  //         }
  //         Object.defineProperty(exports, "__esModule", { value: !0 });
  //     };
  // })();
  // var __webpack_exports__ = {};
  /*!**********************!*\
    !*** ./src/index.js ***!
    \**********************/
  // __webpack_require__.r(__webpack_exports__);
  // var _main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main.scss */ "./src/main.scss");
  document.addEventListener("DOMContentLoaded", () => {
      const themeSwitch = document.querySelector("#switch");
      const mobileSwitch = document.querySelector("#switch-mobile");
      const DARK = "dark";
      const LIGHT = "light";
      // function switchThemeColor() {
      //     const currentTheme = localStorage.getItem("theme-color") || DARK;
      //     applyTheme(currentTheme);
      //     themeSwitch.addEventListener("change", handleThemeChange);
      //     mobileSwitch.addEventListener("change", handleThemeChange);
      // }
      // function handleThemeChange(event) {
      //     const newTheme = event.target.checked ? DARK : LIGHT;
      //     applyTheme(newTheme);
      // }
      // function applyTheme(theme) {
      //     localStorage.setItem("theme-color", theme);
      //     document.documentElement.setAttribute("data-theme", theme);
      //     //document.body.classList.remove(DARK, LIGHT, "dark-bg", "light-bg");
      //     document.body.classList.add(theme);
      //     updateLogoVisibility(theme);
      //     updateFooterLogoVisibility(theme);
      //     // updateBackground(theme);
      //     // updateThemeImages(theme);
      //     themeSwitch.checked = theme === DARK;
      //     mobileSwitch.checked = theme === DARK;
      // }
      // function updateLogoVisibility(theme) {
      //     const darkLogo = document.getElementById("logo-dark");
      //     const lightLogo = document.getElementById("logo-light");
      //     if (theme === DARK) {
      //         darkLogo.classList.add("active");
      //         lightLogo.classList.remove("active");
      //     } else {
      //         darkLogo.classList.remove("active");
      //         lightLogo.classList.add("active");
      //     }
      // }
      // function updateFooterLogoVisibility(theme) {
      //     const darkLogo = document.getElementById("footer-logo-dark");
      //     const lightLogo = document.getElementById("footer-logo-light");
      //     if (theme === DARK) {
      //         darkLogo.classList.add("active-footer-logo");
      //         lightLogo.classList.remove("active-footer-logo");
      //     } else {
      //         darkLogo.classList.remove("active-footer-logo");
      //         lightLogo.classList.add("active-footer-logo");
      //     }
      // }
      // function updateBackground(theme) {
      //     if (theme === DARK) {
      //         document.body.classList.add("dark-bg");
      //     } else {
      //         document.body.classList.add("light-bg");
      //     }
      // }
      // switchThemeColor();

      
      let mobileMenuButtonOpen = document.querySelector(".main-header__mobile-menu-button");
      let mobileMenu = document.querySelector(".mobile-menu");
      let header = document.querySelector(".main-header");
      mobileMenuButtonOpen.addEventListener("click", function (event) {
          event.preventDefault();
          mobileMenu.style.display = "flex";
          header.style.position = "static";
          document.addEventListener("click", handleOutsideClick);
      });
      function handleOutsideClick(event) {
          if (!mobileMenu.contains(event.target) && !mobileMenuButtonOpen.contains(event.target) && !mobileSwitch.contains(event.target)) {
              closeMobileMenu();
          }
      }
      function closeMobileMenu() {
          mobileMenu.style.display = "none";
          header.style.position = "sticky";
          document.removeEventListener("click", handleOutsideClick);
      }
      mobileMenu.addEventListener("click", (event) => {
          event.stopPropagation();
      });
      mobileSwitch.addEventListener("click", (event) => {
          event.stopPropagation();
      });
      let mobileMenuCloseButton = document.querySelector(".mobile-menu__close");
      mobileMenuCloseButton.addEventListener("click", function (event) {
          event.preventDefault();
          closeMobileMenu();
      });
      function updateThemeImages(theme) {
          const themeImages = document.querySelectorAll("[data-theme]");
          if (themeImages.length === 0) {
              return;
          }
          themeImages.forEach((img) => {
              if (img.dataset.theme === theme) {
                  img.style.display = "block";
              } else {
                  img.style.display = "none";
              }
          });
      }
      let swiper = new Swiper(".mySwiper", {
          slidesPerView: "auto",
          loop: !0,
          spaceBetween: 24,
          centeredSlides: !0,
          navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
          breakpoints: {
              320: { slidesPerView: "auto", spaceBetween: 24, loop: !0, centeredSlides: !0 },
              768: { slidesPerView: 2.5, spaceBetween: 24, loop: !0, centeredSlides: !1 },
              1024: { slidesPerView: 4, loop: !0, centeredSlides: !1, spaceBetween: 50 },
          },
      });
      mobileMenu.addEventListener("click", (event) => {
          event.stopPropagation();
      });
      mobileSwitch.addEventListener("click", (event) => {
          event.stopPropagation();
      });
      const scrollContainer = document.querySelector(".home-table__scroll-container");
      const scrollStep = 100;
      const leftArrow = document.querySelector(".home-table__arrows-left");
      const rightArrow = document.querySelector(".home-table__arrows-right");
      if (leftArrow && rightArrow && scrollContainer) {
          leftArrow.addEventListener("click", function () {
              scrollContainer.scrollBy({ left: -scrollStep, behavior: "smooth" });
          });
          rightArrow.addEventListener("click", function () {
              scrollContainer.scrollBy({ left: scrollStep, behavior: "smooth" });
          });
      }
  });
})();
