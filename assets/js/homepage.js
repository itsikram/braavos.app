

// var homeDepositAnimation = lottie.loadAnimation({
//     container: document.getElementById('home-deposit__right-wrapper'), // Контейнер для анимации
//     renderer: 'svg',
//     loop: false, // Анимация не зацикливается
//     autoplay: false, // Автоматическое воспроизведение отключено
//     path: themeData.themeUrl + '/assets/lottie/home-deposit.json'
// });

// var homeSecurityAnimation = lottie.loadAnimation({
//     container: document.getElementById('home-security__left-wrapper'), // Контейнер для анимации
//     renderer: 'svg',
//     loop: false, // Анимация не зацикливается
//     autoplay: false, // Автоматическое воспроизведение отключено
//     path: themeData.themeUrl + '/assets/lottie/home-security.json'
// });

// var homeSwapAnimation = lottie.loadAnimation({
//     container: document.getElementById('home-swap__right-wrapper'), // Контейнер для анимации
//     renderer: 'svg',
//     loop: false, // Анимация не зацикливается
//     autoplay: false, // Автоматическое воспроизведение отключено
//     path: themeData.themeUrl + '/assets/lottie/home-swap.json'
// });

// var homeGrowAnimation = lottie.loadAnimation({
//     container: document.getElementById('home-grow__left-wrapper'), // Контейнер для анимации
//     renderer: 'svg',
//     loop: false, // Анимация не зацикливается
//     autoplay: false, // Автоматическое воспроизведение отключено
//     path: themeData.themeUrl + '/assets/lottie/home-grow.json'
// });

// var homeHeroAnimation = lottie.loadAnimation({
//     container: document.getElementById('home-hero__right-wrapper'), // Контейнер для анимации
//     renderer: 'svg',
//     loop: false, // Анимация не зацикливается
//     autoplay: true, // Автоматическое воспроизведение включено
//     path: themeData.themeUrl + '/assets/lottie/home-hero.json'
// });

// window.addEventListener('load', function() {
//     setTimeout(function() {
//         // var homeHeroAnimation = lottie.loadAnimation({
//         //     container: document.getElementById('home-hero__right-wrapper'), // Контейнер для анимации
//         //     renderer: 'svg',
//         //     loop: false, // Анимация не зацикливается
//         //     autoplay: true, // Автоматическое воспроизведение включено
//         //     path: themeData.themeUrl + '/assets/lottie/home-hero.json'
//         // });
//     }, 1000); // Задержка в 1.5 секунды
// });

// function isElementInViewport(el) {
//     var rect = el.getBoundingClientRect();
//     return (
//         rect.top >= 0 &&
//         rect.left >= 0 &&
//         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//         rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//     );
// }

// function checkAnimations() {
//     if (isElementInViewport(document.getElementById('home-security__left-wrapper'))) {
//         homeSecurityAnimation.play();
//     }
//     if (isElementInViewport(document.getElementById('home-deposit__right-wrapper'))) {
//         homeDepositAnimation.play();
//     }
//     if (isElementInViewport(document.getElementById('home-swap__right-wrapper'))) {
//         homeSwapAnimation.play();
//     }
//     if (isElementInViewport(document.getElementById('home-grow__left-wrapper'))) {
//         homeGrowAnimation.play();
//     }
//     if (isElementInViewport(document.getElementById('home-hero__right-wrapper'))) {
//         homeHeroAnimation.play();
//     }
// }

// window.addEventListener('scroll', checkAnimations);
// window.addEventListener('load', checkAnimations);




