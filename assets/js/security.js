// // Инициализация всех анимаций, но autoplay отключен
// var securityBiometricAnimation = lottie.loadAnimation({
//     container: document.getElementById('security-biometric__right-wrapper'),
//     renderer: 'svg',
//     loop: false,
//     autoplay: false, // Отключаем автоматическое воспроизведение
//     path: themeData.themeUrl + '/assets/lottie/security-biometric.json'
// });

// var securityThreeFactorAnimation = lottie.loadAnimation({
//     container: document.getElementById('security-three-factor__left-wrapper'),
//     renderer: 'svg',
//     loop: false,
//     autoplay: false, // Отключаем автоматическое воспроизведение
//     path: themeData.themeUrl + '/assets/lottie/security-three-factor.json'
// });

// var securitySupportAnimation = lottie.loadAnimation({
//     container: document.getElementById('security-support__right-wrapper'),
//     renderer: 'svg',
//     loop: false,
//     autoplay: false, // Отключаем автоматическое воспроизведение
//     path: themeData.themeUrl + '/assets/lottie/security-support.json'
// });

// window.addEventListener('load', function() {
//     setTimeout(function() {
//         var securityHeroAnimation = lottie.loadAnimation({
//             container: document.getElementById('security-hero__right-wrapper'), // Контейнер для анимации
//             renderer: 'svg',
//             loop: false, // Анимация не зацикливается
//             autoplay: true, // Автоматическое воспроизведение включено
//             path: themeData.themeUrl + '/assets/lottie/security-hero.json'
//         });
//     }, 1500); // Задержка в 1.5 секунды
// });


function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}


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


window.addEventListener('scroll', checkAnimations);
window.addEventListener('load', checkAnimations);