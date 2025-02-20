import './main.scss';

const themeSwitch = document.querySelector("#switch");
const DARK = "dark";
const LIGHT = "light";

function switchThemeColor() {
    // Проверяем, есть ли сохраненная тема в localStorage
    const currentTheme = localStorage.getItem("theme-color");

    // Если нет сохраненной темы, устанавливаем тему по умолчанию на тёмную
    if (!currentTheme) {
        setTheme(DARK);
    } else {
        // Если сохраненная тема есть, применяем её
        setThemeColor(currentTheme === DARK, currentTheme);
    }

    themeSwitch.addEventListener("change", (event) => {
        const newTheme = event.target.checked ? DARK : LIGHT;
        setTheme(newTheme);
    });
}

function setThemeColor(isChecked, themeColor) {
    themeSwitch.checked = isChecked;
    document.documentElement.setAttribute("data-theme", themeColor);
    document.body.classList.remove(DARK, LIGHT, 'dark-bg', 'light-bg');
    document.body.classList.add(themeColor);
    updateLogoVisibility(themeColor);
    updateBackground(themeColor);
}

function setTheme(theme) {
    localStorage.setItem("theme-color", theme);
    document.documentElement.setAttribute("data-theme", theme);
    document.body.classList.remove(DARK, LIGHT, 'dark-bg', 'light-bg');
    document.body.classList.add(theme);
    updateLogoVisibility(theme);
    updateBackground(theme);
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
let mobileMenuButtonClose = document.querySelector('.mobile-menu__close');

mobileMenuButtonOpen.addEventListener('click', function (event) {
    event.preventDefault();

    mobileMenu.style.display = 'flex';
})

mobileMenuButtonClose.addEventListener('click', function (event) {
    event.preventDefault();

    mobileMenu.style.display = 'none';
})




var animation = lottie.loadAnimation({
    container: document.getElementById('lottie-animation'), // Контейнер для анимации
    renderer: 'svg',
    loop: false, // Анимация не зацикливается
    autoplay: false, // Автоматическое воспроизведение отключено
    path: themeData.themeUrl + '/assets/lottie/Rating.json'
});

// var hasPlayed = false; // Флаг для отслеживания, была ли анимация уже воспроизведена
//
// // Функция для запуска анимации при скролле
// function playAnimationOnScroll() {
//     var animationContainer = document.getElementById('lottie-animation');
//     var containerPosition = animationContainer.getBoundingClientRect().top;
//     var screenPosition = window.innerHeight;
//
//     // Если контейнер виден на экране и анимация еще не была запущена
//     if (containerPosition < screenPosition && !hasPlayed) {
//         animation.play(); // Запуск анимации
//         hasPlayed = true; // Обновляем флаг, чтобы не воспроизводить анимацию повторно
//     }
// }
//
// // Добавляем обработчик события прокрутки
// window.addEventListener('scroll', playAnimationOnScroll);

var homeDepositAnimation = lottie.loadAnimation({
    container: document.getElementById('home-deposit__right-wrapper'), // Контейнер для анимации
    renderer: 'svg',
    loop: false, // Анимация не зацикливается
    autoplay: true, // Автоматическое воспроизведение отключено
    path: themeData.themeUrl + '/assets/lottie/home-deposit.json'
});

var homeSecurityAnimation = lottie.loadAnimation({
    container: document.getElementById('home-security__left-wrapper'), // Контейнер для анимации
    renderer: 'svg',
    loop: false, // Анимация не зацикливается
    autoplay: true, // Автоматическое воспроизведение отключено
    path: themeData.themeUrl + '/assets/lottie/home-security.json'
});

var homeSwapAnimation = lottie.loadAnimation({
    container: document.getElementById('home-swap__right-wrapper'), // Контейнер для анимации
    renderer: 'svg',
    loop: false, // Анимация не зацикливается
    autoplay: true, // Автоматическое воспроизведение отключено
    path: themeData.themeUrl + '/assets/lottie/home-swap.json'
});

var homeGrowAnimation = lottie.loadAnimation({
    container: document.getElementById('home-grow__left-wrapper'), // Контейнер для анимации
    renderer: 'svg',
    loop: false, // Анимация не зацикливается
    autoplay: true, // Автоматическое воспроизведение отключено
    path: themeData.themeUrl + '/assets/lottie/home-grow.json'
});

var homeHeroAnimation = lottie.loadAnimation({
    container: document.getElementById('home-hero__right-wrapper'), // Контейнер для анимации
    renderer: 'svg',
    loop: false, // Анимация не зацикливается
    autoplay: true, // Автоматическое воспроизведение отключено
    path: themeData.themeUrl + '/assets/lottie/home-hero.json'
});


window.addEventListener('load', function() {
    setTimeout(function() {
        var securityHeroAnimation = lottie.loadAnimation({
            container: document.getElementById('security-hero__right-wrapper'), // Контейнер для анимации
            renderer: 'svg',
            loop: false, // Анимация не зацикливается
            autoplay: true, // Автоматическое воспроизведение включено
            path: themeData.themeUrl + '/assets/lottie/security-hero.json'
        });
    }, 1000); // Задержка в 1.5 секунды
});

// Инициализация всех анимаций, но autoplay отключен
var securityBiometricAnimation = lottie.loadAnimation({
    container: document.getElementById('security-biometric__right-wrapper'),
    renderer: 'svg',
    loop: false,
    autoplay: false, // Отключаем автоматическое воспроизведение
    path: themeData.themeUrl + '/assets/lottie/security-biometric.json'
});

var securityThreeFactorAnimation = lottie.loadAnimation({
    container: document.getElementById('security-three-factor__left-wrapper'),
    renderer: 'svg',
    loop: false,
    autoplay: false, // Отключаем автоматическое воспроизведение
    path: themeData.themeUrl + '/assets/lottie/security-three-factor.json'
});

var securitySupportAnimation = lottie.loadAnimation({
    container: document.getElementById('security-support__right-wrapper'),
    renderer: 'svg',
    loop: false,
    autoplay: false, // Отключаем автоматическое воспроизведение
    path: themeData.themeUrl + '/assets/lottie/security-support.json'
});

// Функция для проверки, виден ли элемент на экране
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Функция для запуска анимаций, когда элементы становятся видимыми
function checkAnimations() {
    if (isElementInViewport(document.getElementById('security-biometric__right-wrapper'))) {
        securityBiometricAnimation.play();
    }
    if (isElementInViewport(document.getElementById('security-three-factor__left-wrapper'))) {
        securityThreeFactorAnimation.play();
    }
    if (isElementInViewport(document.getElementById('security-support__right-wrapper'))) {
        securitySupportAnimation.play();
    }
}

// Запускаем проверку при прокрутке и загрузке страницы
window.addEventListener('scroll', checkAnimations);
window.addEventListener('load', checkAnimations);

let swiper = new Swiper(".Swiper-apps", {
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 24,
    centeredSlides: true,
    navigation: {
        nextEl: ".swiper-app-button-next",
        prevEl: ".swiper-app-button-next",
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