/**
 * Simple implementation of the "debounce" concept
 */
function debounce(func, time) {
    var time = time || 100;
    var timer;
    return function (event) {
        if (timer) clearTimeout(timer);
        timer = setTimeout(func, time, event);
    };
}

/*
 * FAQ PAGE search
 */
document.addEventListener(
    'DOMContentLoaded',
    function (event) {
        var faq_top_search_txt = document.getElementById('faq_top_search_txt');
        var faq_top_search = document.getElementById('faq_top_search');
        if (faq_top_search_txt !== null && faq_top_search !== null) {
            faq_top_search_txt.addEventListener('keyup', (event) => {
                if (event.keyCode !== undefined && event.keyCode === 13) {
                    faq_top_search.submit();
                } else if (event.key !== undefined && event.key === 'Enter') {
                    faq_top_search.submit();
                }
            });
        }
    },
    false
);

/**
 * FAQ page: mark expandable list items.
 */
(() => {
    const $faqListItems = $('.js-faq-list-item');
    if ($faqListItems.length) {
        const markExpandableItems = () => {
            $faqListItems.each(function () {
                const $item = $(this),
                    $contentWrap = $item.find('.js-faq-list-item-content-wrap'),
                    $content = $item.find('.js-faq-list-item-content');

                $item.removeClass('expanded');
                $item.removeClass('expandable');

                if ($content.outerHeight() > $contentWrap.outerHeight()) {
                    $item.addClass('expandable');
                }
            });
        };

        markExpandableItems();
        $(window).on('resize', debounce(markExpandableItems));

        $('.js-faq-list-item-expand').on('click', function () {
            $(this).parents('.js-faq-list-item').toggleClass('expanded');
        });
    }
})();

/*
 * SITE THEME SELECTOR
 */
const Cookie = {
    set: function (name, value, days) {
        var domain, domainParts, date, expires, host;

        if (days) {
            date = new Date();
            date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
            expires = '; expires=' + date.toGMTString();
        } else {
            expires = '';
        }

        host = location.host;
        if (host.split('.').length === 1) {
            // no "." in a domain - it's localhost or something similar
            document.cookie = name + '=' + value + expires + '; path=/';
        } else {
            // Remember the cookie on all subdomains.
            //
            // Start with trying to set cookie to the top domain.
            // (example: if user is on foo.com, try to set
            //  cookie to domain ".com")
            //
            // If the cookie will not be set, it means ".com"
            // is a top level domain and we need to
            // set the cookie to ".foo.com"
            domainParts = host.split('.');
            domainParts.shift();
            domain = '.' + domainParts.join('.');

            document.cookie = name + '=' + value + expires + '; path=/; domain=' + domain;

            // check if cookie was successfuly set to the given domain
            // (otherwise it was a Top-Level Domain)
            if (Cookie.get(name) == null || Cookie.get(name) != value) {
                // append "." to current domain
                domain = '.' + host;
                document.cookie = name + '=' + value + expires + '; path=/; domain=' + domain;
            }
        }
    },

    get: function (name) {
        var nameEQ = name + '=';
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1, c.length);
            }

            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    },

    erase: function (name) {
        Cookie.set(name, '', -1);
    },
};

jQuery(document).ready(($) => {
    /** Theme switcher */

    let main_theme_style = Cookie.get('main_theme_style');

    if (main_theme_style === 'light') {
        document.querySelector('#main_theme_body').classList.add('mts_light');
    }

    if (main_theme_style === null) {
        Cookie.set('main_theme_style', 'dark');
        Cookie.set('wpe-us', 'dark_mode');
        main_theme_style = 'dark';
        // document.querySelector('#main_theme_body').classList.remove('mts_light');
    }

    function mts_theme_switch() {
        if (main_theme_style === 'light') {
            main_theme_style = 'dark';
            Cookie.set('main_theme_style', 'dark');
            Cookie.set('wpe-us', 'dark_mode');
            document.querySelector('#main_theme_body').classList.remove('mts_light');
        } else {
            main_theme_style = 'light';
            Cookie.set('main_theme_style', 'light');
            Cookie.set('wpe-us', 'light_mode');
            document.querySelector('#main_theme_body').classList.add('mts_light');
        }
    }

    function mts_theme_set() {
        const mainThemeBody = document.querySelector('#main_theme_body'); // Ищем элемент
        
        // Проверяем, существует ли элемент
        if (!mainThemeBody) {
            console.warn('Элемент с ID "main_theme_body" не найден!');
            return; // Прерываем выполнение функции, если элемент отсутствует
        }
    
        // Если элемент найден, выполняем основную логику
        if (main_theme_style === 'light') {
            mainThemeBody.classList.add('mts_light');
        } else {
            mainThemeBody.classList.remove('mts_light');
        }
    }
    

    // Add event listeners to switchers

    const themeModeSwitchers = document.querySelectorAll(
        '.js-dark-mode-switcher, .js-light-mode-switcher'
    );
    themeModeSwitchers.forEach((el) => el.addEventListener('click', mts_theme_switch, false));

    mts_theme_set();

    /** END Theme switcher */

    /** Toggle header mobile menu */
    (() => {
        const $openIcon = $('.js-header-mobile-menu-icon-open'),
            $closeIcon = $('.js-header-mobile-menu-icon-close'),
            $submenu = $('.js-header-mobile-submenu');

        $openIcon.on('click', function () {
            $(this).hide();
            $closeIcon.show();
            $submenu.slideDown('fast');
        });

        $closeIcon.on('click', function () {
            $(this).hide();
            $openIcon.show();
            $submenu.slideUp('fast');
        });
    })();

    /** Wrap links in the post author bio */
    (() => {
        const $postAuthorInfo = $('.js-post-author-info');
        if ($postAuthorInfo.length) {
            const $children = $postAuthorInfo.children().detach(),
                $div = $('<div></div>');
            $postAuthorInfo.append($div.append($children));
        }
    })();

    /** Sliders */
    (() => {
        const $sayingSwiper = $('.js-saying-swiper');
        if ($sayingSwiper.length) {
            new Swiper('.js-saying-swiper', {
                // Optional parameters
                loop: true,
                slidesPerView: 1,
                spaceBetween: 16,
                speed: 500,
                autoplay: {
                    delay: 5000,
                },

                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                    },
                    // when window width is >= 480px
                    768: {
                        slidesPerView: 2,
                    },
                },

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }
    })();

    /** AOS */
    AOS.init();

    /** Paralax */
    (() => {
        // Paralax 1
        const elements = [];
        const featuredis1DarkModeImage = document.querySelector('#partalax_featuredis_1_img');
        const featuredis1LightModeImage = document.querySelector(
            '#partalax_featuredis_1_img_lightmode'
        );

        if (featuredis1DarkModeImage) {
            elements.push(featuredis1DarkModeImage);
        }

        if (featuredis1LightModeImage) {
            elements.push(featuredis1LightModeImage);
        }

        const setTranslateXForElement = (el) => {
            const rect = el.getBoundingClientRect();
            if (rect.bottom > 0 && rect.top <= window.innerHeight) {
                const viewportHeight = window.innerHeight;
                const scrollTop = window.scrollY;
                const distance = scrollTop + viewportHeight - el.offsetTop;
                let percentage = Math.round(distance / ((viewportHeight + el.offsetHeight) / 100));
                percentage = Math.min(100, Math.max(0, percentage));
                percentage = percentage / 3;
                $(el).css({transform: 'translateX(-' + percentage + '%)'});
            }
        };

        if (elements.length) {
            $(window).scroll(() => elements.forEach(setTranslateXForElement));

            const darkModeSwitchers = document.querySelectorAll('.js-dark-mode-switcher');
            const lightModeSwitchers = document.querySelectorAll('.js-light-mode-switcher');

            darkModeSwitchers.forEach((el) =>
                el.addEventListener('click', () => setTranslateXForElement(featuredis1DarkModeImage), false)
            );

            lightModeSwitchers.forEach((el) =>
                el.addEventListener(
                    'click',
                    () => setTranslateXForElement(featuredis1LightModeImage),
                    false
                )
            );
        }

        // Paralax 2
        const pelement2 = document.querySelector('#partalax_featuredis_2_parent');
        const element2 = document.querySelector('#partalax_featuredis_2_img');
        if (pelement2 !== null && element2 !== null) {
            $(window).scroll(function () {
                const rect2 = pelement2.getBoundingClientRect();
                if (rect2.bottom > 0 && rect2.top <= window.innerHeight) {
                    let viewportHeight2 = window.innerHeight;
                    let scrollTop2 = window.scrollY;
                    let distance2 = scrollTop2 + viewportHeight2 - pelement2.offsetTop;
                    let percentage2 = Math.round(
                        distance2 / ((viewportHeight2 + pelement2.offsetHeight) / 100)
                    );
                    percentage2 = Math.min(100, Math.max(0, percentage2));
                    $(element2).css({
                        transform: 'scale( 0.' + percentage2 + ' )',
                    });
                }
            });
        }

        // Paralax 3
        const pelement3 = document.querySelector('#partalax_featuredis_3');
        const element3 = document.querySelector('#partalax_featuredis_3_img');
        if (pelement3 !== null && element3 !== null) {
            $(window).scroll(function () {
                const rect3 = element3.getBoundingClientRect();
                if (rect3.bottom > 0 && rect3.top <= window.innerHeight) {
                    var viewportHeight3 = window.innerHeight;
                    var scrollTop3 = window.scrollY;
                    var distance3 = scrollTop3 + viewportHeight3 - pelement3.offsetTop;
                    var percentage3 = Math.round(
                        distance3 / ((viewportHeight3 + pelement3.offsetHeight) / 100)
                    );
                    percentage3 = Math.min(100, Math.max(0, percentage3));
                    percentage3 = percentage3 - 30;
                    $(element3).css({top: percentage3 + '%'});
                }
            });
        }
    })();

    /**
     * Single Feature: Video
     */
    (() => {
        const playerId = 'feature-video-player',
            $player = $(`#${playerId}`);

        if ($player.length) {
            const tag = document.createElement('script');

            tag.src = 'https://www.youtube.com/iframe_api';
            const firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            const $videoPreview = $('#feature-video-preview');

            let player;

            window.onYouTubeIframeAPIReady = function () {
                player = new YT.Player(playerId, {
                    height: '480',
                    width: '853',
                    videoId: $player.data('videoId'),
                    playerVars: {
                        playsinline: 1,
                        rel: 0,
                    },
                    events: {
                        onStateChange(event) {
                            if (event.data == YT.PlayerState.PLAYING) {
                                $videoPreview.fadeOut(200);
                            }
                            if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
                                $videoPreview.fadeIn(200);
                            }
                        },
                    },
                });
            };

            $videoPreview.on('click', () => player?.playVideo && player.playVideo());
        }
    })();

    /**
     * Single Feature: Carousel
     */
    (function () {
        const carouselSection = document.querySelectorAll('.sFeatCarousel');
        if (carouselSection) {
            carouselSection.forEach((element, index) => {
                let cur = index + 1;
                console.log(cur);
                let carousel = element.querySelector('#feature-carousel-' + cur);
                console.log(carousel);
                if (carousel) {
                    new Swiper(carousel, {
                        slidesPerView: 'auto',
                        centerInsufficientSlides: true,
                        spaceBetween: 12,
                        grabCursor: true,
                        breakpoints: {
                            1024: {
                                spaceBetween: 20
                            },
                        },
                        navigation: {
                            prevEl: '#carousel-btn-prev-' + cur,
                            nextEl: '#carousel-btn-next-' + cur,
                        },
                    });
                }

            })
        }
    })();

    /**
     * Single Feature: FAQ
     */
    (function () {
        const faq = document.getElementById('feature-faq');

        if (faq) {
            $(faq).on('click', '.jsFeatureFaqItemQ', function () {
                $(this)
                    .siblings('.jsFeatureFaqItemA')
                    .slideToggle(300)
                    .parents('.jsFeatureFaqItem')
                    .toggleClass('collapsed');
            });
        }
    })();

    /**
     * Feature Hub: Filtering Features
     */
    (function () {
        const filter = document.getElementById('features-filter');

        if (filter) {
            const $posts = $('#features > *');

            $(filter).on('click', 'button', function () {
                const $btn = $(this),
                    filterClass = $btn.data('filter');

                if ($btn.hasClass('active')) {
                    return;
                }

                $btn.addClass('active').siblings().removeClass('active');

                if (filterClass === '*') {
                    $posts.hide(0).fadeIn(200);
                } else {
                    $posts.hide(0).filter(`.${filterClass}`).fadeIn(200);
                }
            });
        }
    })();
});
