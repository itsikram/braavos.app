/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/main.scss":
/*!***********************!*\
  !*** ./src/main.scss ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./main.scss */ "./src/main.scss");


document.addEventListener("DOMContentLoaded", () => {


    const themeSwitch = document.querySelector("#switch");
    const mobileSwitch = document.querySelector('#switch-mobile');
    const DARK = "dark";
    const LIGHT = "light";

    function switchThemeColor() {
        // Проверяем, есть ли сохраненная тема в localStorage
        const currentTheme = localStorage.getItem("theme-color") || DARK; // Тёмная тема по умолчанию

        // Применяем текущую тему
        applyTheme(currentTheme);

        // Слушаем переключение темы для обоих переключателей
        themeSwitch.addEventListener("change", handleThemeChange);
        mobileSwitch.addEventListener("change", handleThemeChange);
    }

    function handleThemeChange(event) {
        const newTheme = event.target.checked ? DARK : LIGHT;
        applyTheme(newTheme);
    }

    function applyTheme(theme) {
        // Сохраняем тему в localStorage
        localStorage.setItem("theme-color", theme);

        // Устанавливаем атрибут на HTML и классы на body
        document.documentElement.setAttribute("data-theme", theme);
        document.body.classList.remove(DARK, LIGHT, 'dark-bg', 'light-bg');
        document.body.classList.add(theme);

        // Обновляем другие элементы, связанные с темой
        updateLogoVisibility(theme);
        updateFooterLogoVisibility(theme);
        updateBackground(theme);
        updateThemeImages(theme);

        // Синхронизируем состояние обоих переключателей
        themeSwitch.checked = (theme === DARK);
        mobileSwitch.checked = (theme === DARK);
    }



    function updateLogoVisibility(theme) {
        const darkLogo = document.getElementById('logo-dark');
        const lightLogo = document.getElementById('logo-light');

        if (theme === DARK) {
            darkLogo.classList.add('active');
            lightLogo.classList.remove('active');
        } else {
            darkLogo.classList.remove('active');
            lightLogo.classList.add('active');
        }
    }



    function updateFooterLogoVisibility(theme) {
        const darkLogo = document.getElementById('footer-logo-dark');
        const lightLogo = document.getElementById('footer-logo-light');

        if (theme === DARK) {
            darkLogo.classList.add('active-footer-logo');
            lightLogo.classList.remove('active-footer-logo');
        } else {
            darkLogo.classList.remove('active-footer-logo');
            lightLogo.classList.add('active-footer-logo');
        }
    }

    function updateBackground(theme) {
        if (theme === DARK) {
            document.body.classList.add('dark-bg');
        } else {
            document.body.classList.add('light-bg');
        }
    }

    switchThemeColor();

    let mobileMenuButtonOpen = document.querySelector('.main-header__mobile-menu-button');
    let mobileMenu = document.querySelector('.mobile-menu');
    let header = document.querySelector('.main-header');

    mobileMenuButtonOpen.addEventListener('click', function (event) {
        event.preventDefault();

        // Открываем мобильное меню
        mobileMenu.style.display = 'flex';
        header.style.position = 'static';

        // Добавляем обработчик для клика за пределами меню
        document.addEventListener('click', handleOutsideClick);
    });

// Обработчик клика за пределами меню
    function handleOutsideClick(event) {

        if (
            !mobileMenu.contains(event.target) &&
            !mobileMenuButtonOpen.contains(event.target) &&
            !mobileSwitch.contains(event.target)
        ) {
            closeMobileMenu();
        }
    }

// Функция для закрытия мобильного меню
    function closeMobileMenu() {
        mobileMenu.style.display = 'none';
        header.style.position = 'sticky';

        // Удаляем обработчик после закрытия
        document.removeEventListener('click', handleOutsideClick);
    }

// Останавливаем всплытие кликов внутри меню
    mobileMenu.addEventListener("click", (event) => {
        event.stopPropagation(); // Останавливаем всплытие события для всех элементов внутри меню
    });

// Дополнительно: останавливаем всплытие кликов на переключателе темы
    mobileSwitch.addEventListener("click", (event) => {
        event.stopPropagation(); // Останавливаем всплытие события
    });

    let mobileMenuCloseButton = document.querySelector('.mobile-menu__close');

// Добавляем обработчик события для кнопки закрытия меню
    mobileMenuCloseButton.addEventListener('click', function (event) {
        event.preventDefault(); // Предотвращаем стандартное поведение ссылки
        closeMobileMenu(); // Вызываем функцию закрытия меню
    });




    function updateThemeImages(theme) {
        // Находим все элементы с data-theme
        const themeImages = document.querySelectorAll("[data-theme]");

        if (themeImages.length === 0) {
            // Если на странице нет изображений с data-theme, ничего не делаем
            return;
        }

        themeImages.forEach((img) => {
            // Отображаем изображение, если его data-theme соответствует текущей теме
            if (img.dataset.theme === theme) {
                img.style.display = "block";
            } else {
                img.style.display = "none";
            }
        });
    }

    let swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        loop: true,
        spaceBetween: 24,
        centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {

            320: {
                slidesPerView: 'auto',
                spaceBetween: 24,
                loop: true,
                centeredSlides: true,
            },

            768: {
                slidesPerView: 2.5,
                spaceBetween: 24,
                loop: true,
                centeredSlides: false,
            },

            1024: {
                slidesPerView: 4,
                loop: true,
                centeredSlides: false,
                spaceBetween: 50,
            },
        },
    });

    mobileMenu.addEventListener("click", (event) => {

        event.stopPropagation();
    });

    mobileSwitch.addEventListener("click", (event) => {

        event.stopPropagation();
    });

    const scrollContainer = document.querySelector(".home-table__scroll-container");
    const scrollStep = 100; // Шаг прокрутки в пикселях

    // Находим стрелки
    const leftArrow = document.querySelector(".home-table__arrows-left");
    const rightArrow = document.querySelector(".home-table__arrows-right");

    // Добавляем обработчики событий
    if (leftArrow && rightArrow && scrollContainer) {
        leftArrow.addEventListener("click", function () {
            scrollContainer.scrollBy({ left: -scrollStep, behavior: "smooth" });
        });

        rightArrow.addEventListener("click", function () {
            scrollContainer.scrollBy({ left: scrollStep, behavior: "smooth" });
        });
    }


});



/******/ })()
;
//# sourceMappingURL=main.js.map