<?php
/*
Template Name: Downloads
*/
?>
<?php get_header(); ?>

<div class="downloadPage">
    <div class="container">
        <div class="downloadPage__wrapper">
            <h1 class="titleBorder">
                <?php echo get_the_title(); ?>

            </h1>

            <section class="download-tabs download-page-hero-content">
                <div class="download-tabs__container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top-icon text-center">
                                    <img class="top-download-icon" src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/icons/top-download-icon.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1 class="download-tabs__title mt-3">
                        Download Braavos Wallet App </h1>


                    <div class="container mt-5 ">
                        <div class="row">
                            <div class="col-md-4 order-md-2">
                                <div class="download-tabs-mobile-content">

                                    <div class="tab-title-container d-flex align-items-center">
                                        <span><img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/icons/mobile-icon.png" alt=""></span> <span class="item-text">Mobile Extension</span>
                                    </div>
                                    <div class="download-tabs-mobile-links">
                                        <a href="https://apps.apple.com/us/app/braavos-wallet/id1636013523">
                                            <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/App-Store.png" alt="">
                                        </a>

                                        <a href="https://play.google.com/store/apps/details?id=app.braavos.wallet">
                                            <img class="bottom-image" src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/google-play.png" alt="">
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-8 order-md-1">
                                <div class="download-tabs-browser-content">
                                    <div class="tab-title-container d-flex align-items-center">
                                        <span><img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/icons/browser-extension.png" alt=""></span> <span class="item-text">Browser Extension</span>
                                    </div>
                                    <ul class="download-tabs-browser-items p-0">
                                        <li class="download-tabs-browser-item" style="float: left">
                                            <div class="small-download-button-container text-right">
                                                <a href="https://chrome.google.com/webstore/detail/braavos-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma">
                                                    <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/icons/small-download-icon.png" alt="" class="small-download-button">

                                                </a>

                                            </div>
                                            <a href="https://chrome.google.com/webstore/detail/braavos-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma">
                                                <div class="browser-item-logo">
                                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-134.png" alt="">
                                                </div>

                                                <h3 class="defi-socials__item-title">
                                                    Chrome </h3>

                                            </a>
                                        </li>
                                        <li class="download-tabs-browser-item" style="float: left">
                                            <div class="small-download-button-container text-right">
                                                <a href="https://addons.mozilla.org/en-US/firefox/addon/braavos-wallet/">
                                                    <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/icons/small-download-icon.png" alt="" class="small-download-button">

                                                </a>

                                            </div>
                                            <a href="https://addons.mozilla.org/en-US/firefox/addon/braavos-wallet/">
                                                <div class="browser-item-logo">
                                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-136.png" alt="">
                                                </div>

                                                <h3 class="defi-socials__item-title">
                                                    Firefox </h3>

                                            </a>
                                        </li>
                                        <li class="download-tabs-browser-item" style="float: left">
                                            <div class="small-download-button-container text-right">
                                                <a href="https://chrome.google.com/webstore/detail/braavos-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma">
                                                    <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/icons/small-download-icon.png" alt="" class="small-download-button">

                                                </a>

                                            </div>
                                            <a href="https://chrome.google.com/webstore/detail/braavos-wallet/jnlgamecbpmbajjfhmmmlhejkemejdma">
                                                <div class="browser-item-logo">
                                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-135.png" alt="">
                                                </div>

                                                <h3 class="defi-socials__item-title">
                                                    Brave </h3>

                                            </a>
                                        </li>
                                        <li class="download-tabs-browser-item" style="float: left">
                                            <div class="small-download-button-container text-right">
                                                <a href="https://microsoftedge.microsoft.com/addons/detail/braavos-wallet/hkkpjehhcnhgefhbdcgfkeegglpjchdc">
                                                    <img src="<?php echo site_url(); ?>/wp-content/themes/braavos/assets/images/icons/small-download-icon.png" alt="" class="small-download-button">

                                                </a>

                                            </div>
                                            <a href="https://microsoftedge.microsoft.com/addons/detail/braavos-wallet/hkkpjehhcnhgefhbdcgfkeegglpjchdc">
                                                <div class="browser-item-logo">
                                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/10/image-137.png" alt="">
                                                </div>

                                                <h3 class="defi-socials__item-title">
                                                    Edge </h3>

                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>