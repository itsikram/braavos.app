(function ($) {
    $(document).ready(function () {
        function likePattern(value, pattern) {
            const escapedPattern = pattern.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
            const regexPattern = escapedPattern.replace(/%/g, '.*').replace(/_/g, '.');
            const regex = new RegExp(`^${regexPattern}$`, 'i');
            return regex.test(value)
        }
        $('.d-explorer-ecosystem-section .filter-tab-item:not(.filter-tab-item-search)').click(function (e) {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            $('#ecoFilterSearchInput').val('')
            let dataFilter = $(e.currentTarget).attr('data-filter');
            if (!dataFilter) return;
            let totalItemExists = $('.' + dataFilter).length
            if (totalItemExists == 0) {
                $('.dapps-not-found').css('display', 'flex')
            } else {
                $('.dapps-not-found').css('display', 'none')
            }
            if (dataFilter == 'all') {
                $('.item-box').fadeIn('show');
                $('.item-box').attr('data-filter', 'true');
                $('.dapps-not-found').css('display', 'none');
                return
            }
            $('.item-box').hide();
            $('.item-box').removeAttr('data-filter');
            $(`.${dataFilter}`).fadeIn('show');
            $(`.${dataFilter}`).attr('data-filter', 'true')
        })
        $('#ecoFilterSearchInput').keyup(function (event) {
            $('.filter-tab-item').removeClass('active');
            let searchText = event.currentTarget.value
            $('.item-box').hide();
            $('.item-box').removeAttr('data-filter');
            $('.dapps-not-found').css('display', 'flex');
            $('.item-box').each(function () {
                let dataTitle = $(this).attr('data-title')
                let isMatch = likePattern(dataTitle, `%${searchText}%`)
                if (isMatch) {
                    $('.dapps-not-found').css('display', 'none');
                    $(this).fadeIn(400);
                    $(this).attr('data-filter', 'true')
                }
            })
        })
        $('.d-explorer-ecosystem-section .items-box-container .item-box[data-filter=true]').hover(function (e) {
            let columns = 3
            let visibleItems = $('.d-explorer-ecosystem-section .items-box-container .item-box[data-filter=true]')
            let index = visibleItems.index(this);
            let rowIndex = Math.floor(index / columns) + 1;
            let colIndex = (index % columns) + 1;
            console.log(colIndex, rowIndex)
            let currentHeight = $(this).height();
            let currentRow = rowIndex
            let currentColumn = colIndex
            let totalRows = Math.floor((visibleItems.length / columns))
            console.log(visibleItems.length, totalRows)
            $(this).find('.item-desc').stop(!0, !0).slideDown(200);
            $(this).find('.item-buttons-container').stop(!0, !0).slideDown('fast', 'linear', function () {
                $(e.currentTarget).find('.item-buttons-container').css('display', 'flex');
                let newHeight = $(e.currentTarget).height();
                let difference = newHeight - currentHeight;
                visibleItems.each(function (i) {
                    let currentRow = Math.floor(i / columns) + 1;
                    let currentCol = (i % columns) + 1;
                    let nextRowIndex = rowIndex;
                    if (currentColumn == 1) {
                        if (currentRow > nextRowIndex && (currentCol === 2 || currentCol === 3)) {
                            $(this).css('margin-top', `-${difference}px`)
                        }
                    }
                    if (currentColumn == 2) {
                        if (currentRow > nextRowIndex && (currentCol === 1 || currentCol === 3)) {
                            $(this).css('margin-top', `-${difference}px`)
                        }
                    }
                    if (currentColumn == 3) {
                        if (currentRow > nextRowIndex && (currentCol === 1 || currentCol === 2)) {
                            $(this).css('margin-top', `-${difference}px`)
                        }
                    }
                })
            })
        }, function () {
            $(this).find('.item-buttons-container').stop(!0, !0).slideUp(400);
            $(this).find('.item-desc').stop(!0, !0).slideUp(400);
            $(`.d-explorer-ecosystem-section .items-box-container .item-box`).css('margin-top', `0px`)
        });
        $('.home-socials a').attr('target', '_blank');
        $('[class$="-apps"] a').attr('target', '_blank');
        $('.social-icons a').attr('target', '_blank');
        $('#dExplorerEcosystem .items-box-container a').attr('target', '_blank');
        $('.blog-grid-section .filter-tab-item').click(function (e) {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            $('.blog-grid-section .blog-top-row .column-2-row,.blog-grid-section .blog-middle-row').hide();
            let dataFilter = $(e.currentTarget).attr('data-filter');
            if (!dataFilter) return;
            let availableItems = $('.' + dataFilter).length;
            if (availableItems == 0) {
                $('.blog-grid-section .blog-not-found-text').remove();
                $('.blog-grid-section .filter-item-container').append('<p class="blog-not-found-text">No blogs found</p>')
                $('.blog-not-found-text').show()
            } else {
                $('.blog-grid-section .blog-not-found-text').remove()
            }
            if (dataFilter == 'all') {
                $('.blog-grid-section .blog-not-found-text').remove();
                $('.item-box').fadeIn();
                $('.item-box.from-top-row').hide();
                if (window.matchMedia("(max-width: 768px)").matches) {
                    $('.item-box.from-top-row').show()
                } else {
                    $('.blog-grid-section .blog-top-row .column-2-row,.blog-grid-section .blog-middle-row').fadeIn()
                }
                return
            }
            $('.item-box').hide();
            $(`.${dataFilter}`).fadeIn()
        })
        $('.main-header__mobile-menu-button').click(e => {
            $('.mobile-menu').toggleClass('force-show')
        })
        $('.mobile-menu__close').click(e => {
            $('.mobile-menu').removeClass('force-show')
        })
        $('.home-hero__video-link').click(e => {
            $('.popup-overlay').toggleClass('force-show')
        })
        $('#popupOverlay').click(e => {
            $('.popup-overlay').removeClass('force-show')
        })
        $('#blogHeroLeftContainer').click(function () {
            let href = $(this).data('href');
            window.location.href = href
        })

        $(window).on('load', function() {
            console.log('Page fully loaded!');
            function applyThemeMode(themeMode){
                if(themeMode == 'dark') {
                    $(document.body).removeClass('light');
                    $(document.body).removeClass('light-bg');
                    $(document.body).addClass('dark');
                    $(document.body).addClass('dark-bg');
                    $('html').attr('data-theme', 'dark')
                    $('#logo-light').hide();
                    $('#logo-dark').fadeIn();
                }else {
                    $(document.body).removeClass('dark');
                    $(document.body).removeClass('dark-bg');
                    $(document.body).addClass('light');
                    $(document.body).addClass('light-bg');
                    $('html').attr('data-theme', 'light')
                    $('#logo-dark').hide();
                    $('#logo-light').fadeIn();
    
    
                }
            }
    
            let themeMode = localStorage.getItem('theme-mode') || 'dark';
            applyThemeMode(themeMode)
    
            $('#switch').change(function () {
                let isChecked = $(this).prop('checked')
                let themeMode = isChecked ? 'dark' : 'light';
    
                applyThemeMode(themeMode)
                $.ajax({
                    url: ajax_object.ajax_url,
                    type: 'POST',
                    data: {
                        action: 'update_session',
                        theme_mode: themeMode,
                    },
                    success: function (response) {
                        if (response.success) {
                            //let themeMode =  response.data
                            localStorage.setItem('theme-mode',themeMode) 
                            applyThemeMode(themeMode)
    
                        } else {
                            console.error(response.data)
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX error:", status, error)
                    },
                })
            })
    
            if(themeMode == 'dark') {
                $('#switch-mobile').prop('checked',true)
                $('#switch').prop('checked',true)
                applyThemeMode('dark')
                // $('#switch').trigger('change')
                // $('#switch-mobile').trigger('change')
    
            }
            $('#switch-mobile').change(function () {
                let isChecked = $(this).prop('checked')
                let themeMode = isChecked ? 'dark' : 'light';
    
                applyThemeMode(themeMode)
    
                $.ajax({
                    url: ajax_object.ajax_url,
                    type: 'POST',
                    data: {
                        action: 'update_session',
                        theme_mode: themeMode,
                    },
                    success: function (response) {
                        if (response.success) {
                            let themeMode =  response.data
                            localStorage.setItem('theme-mode',themeMode) 
                            applyThemeMode(themeMode)
                        } else {
                            console.error(response.data)
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX error:", status, error)
                    },
                })
            })
        });
        


        

        function activeMenu(index) {
            $('.main-menu__list-item').removeClass('active');
            if (index == 0) return;
            $('.main-menu__list-item:nth-child(' + index + ')').addClass('active')
        }
        activeMenu(0)
        if (window.location.href.includes("/security")) {
            activeMenu(1)
        }
        if (window.location.href.includes("/swap-tokens")) {
            activeMenu(1)
        }
        if (window.location.href.includes("/deposit-crypto")) {
            activeMenu(1)
        }
        if (window.location.href.includes("/connect-to-starknet-dapps")) {
            activeMenu(1)
        }
        if (window.location.href.includes("/stake")) {
            activeMenu(2)
        }
        if (window.location.href.includes("/starknet-wallet-for-defi")) {
            activeMenu(2)
        }
        if (window.location.href.includes("/one-click-invest")) {
            activeMenu(2)
        }
        if (window.location.href.includes("/dapps-explorer")) {
            activeMenu(3)
        }
        if (window.location.href.includes("/faq")) {
            activeMenu(4)
        }
        if (window.location.href.includes("/blog")) {
            activeMenu(5)
        }
        if (window.location.href.includes("/careers")) {
            activeMenu(5)
        }
        if (window.location.href.includes("/faq")) {
            activeMenu(4)
        }
        if (window.location.href.includes("/download-braavos-wallet")) {
            activeMenu(0)
        }
        $('.play-btn').click(e => {
            $('.video-placeholder').hide();
            $('.play-btn').hide();
            $(e.target).hide();
            $('.youtube-short-container').html('<iframe id="youtube-video" width="360" height="640" allow="autoplay; encrypted-media" src="https://www.youtube.com/embed/4o8w5K2obtE?autoplay=1" frameborder="0" allowfullscreen></iframe>');

            $('.youtube-short-container iframe').attr('src','https://www.youtube.com/embed/4o8w5K2obtE?autoplay=1')


            // setTimeout(function () {

            //     var iframe = document.querySelector(".youtube-short-container iframe");
            //     var videoSrc = iframe.src;
            //     if (videoSrc.indexOf("autoplay=1") === -1) {
            //         iframe.src = videoSrc + (videoSrc.includes("?") ? "&" : "?") + "autoplay=1";
            //     }
            // }, 1000)

        })

        $('.home-hero__video-link').click(evt => {
            $('#popup').html('<iframe frameborder="0" allow="autoplay; encrypted-media" allowfullscreen="" class="popup-video"></iframe>')
            $('.popup-video').attr('src', 'https://www.youtube.com/embed/vudfGt65D_Q?autoplay=1')

        })

    })




    setInterval(() => {
        $('body > div:last-of-type').hide();
        $('.NDdMMDDNjxu0TN0mQYhOhNlTMAjVkNUtheme--light').hide();
        $('.NDdMMDDNjxu0TN0mQYhOhNlTMAjVkNU').hide();
    }, 20)


})(jQuery)