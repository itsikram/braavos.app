<section class="download-tabs download-page-hero-content">
    <div class="download-tabs__container">
        <?php $download_tabs_title = get_sub_field('download_tabs_title'); ?>
        <?php if ($download_tabs_title) : ?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top-icon text-center">
                            <img class="top-download-icon" src="<?php echo get_template_directory_uri() . '/assets/images/icons/top-download-icon.png'; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="download-tabs__title mt-3">
                <?php echo $download_tabs_title ?>
            </h1>
        <?php endif; ?>
        <!-- <div class="download-tabs__link-container">
            <div id='horizontal-buttons' >
                <div class="buttons-traveler">
                    <button id="button1" class="horizontal-button active"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.6503 14.8631C20.5434 14.7957 20.4212 14.7564 20.2949 14.7488C20.1687 14.7413 20.0427 14.7658 19.9285 14.82C19.6427 14.9552 19.3274 15.0159 19.0118 14.9965C18.6963 14.9771 18.3908 14.8782 18.1237 14.7091C17.8566 14.54 17.6366 14.3061 17.4842 14.0291C17.3318 13.7521 17.2518 13.4411 17.2518 13.125C17.2518 12.8089 17.3318 12.4979 17.4842 12.2209C17.6366 11.944 17.8566 11.7101 18.1237 11.5409C18.3908 11.3718 18.6963 11.2729 19.0118 11.2535C19.3274 11.2342 19.6427 11.2949 19.9285 11.43C20.0428 11.4843 20.169 11.5087 20.2953 11.5011C20.4217 11.4934 20.544 11.4539 20.651 11.3863C20.7579 11.3186 20.846 11.225 20.9071 11.1141C20.9681 11.0033 21.0001 10.8788 21 10.7522V6.75002C21 6.35219 20.842 5.97066 20.5607 5.68936C20.2794 5.40805 19.8979 5.25002 19.5 5.25002H16.1044C16.1184 5.12551 16.1252 5.00031 16.125 4.87502C16.1243 4.41407 16.0295 3.95812 15.8464 3.53511C15.6633 3.11211 15.3957 2.73095 15.06 2.41502C14.5953 1.97853 14.0164 1.68261 13.3904 1.56154C12.7644 1.44046 12.117 1.49918 11.523 1.73089C10.929 1.9626 10.4128 2.35782 10.0341 2.87079C9.65549 3.38376 9.42989 3.9935 9.38347 4.62939C9.36906 4.83624 9.37345 5.04396 9.39659 5.25002H6.00003C5.60221 5.25002 5.22067 5.40805 4.93937 5.68936C4.65807 5.97066 4.50003 6.35219 4.50003 6.75002V9.77064C4.37552 9.75669 4.25032 9.7498 4.12503 9.75002C3.66409 9.75076 3.20816 9.8456 2.78516 10.0287C2.36216 10.2119 1.981 10.4794 1.66503 10.815C1.34679 11.1512 1.10175 11.5497 0.945386 11.9854C0.789021 12.4211 0.724736 12.8845 0.756593 13.3463C0.810338 14.1594 1.15585 14.9259 1.7296 15.5046C2.30334 16.0833 3.06674 16.4355 3.87941 16.4963C4.08624 16.5111 4.29401 16.5067 4.50003 16.4831V19.5C4.50003 19.8978 4.65807 20.2794 4.93937 20.5607C5.22067 20.842 5.60221 21 6.00003 21H19.5C19.8979 21 20.2794 20.842 20.5607 20.5607C20.842 20.2794 21 19.8978 21 19.5V15.4978C21.0001 15.3711 20.9681 15.2464 20.9069 15.1355C20.8458 15.0245 20.7575 14.9308 20.6503 14.8631ZM19.5 19.5H6.00003V15.4978C6.00007 15.3713 5.96809 15.2468 5.90705 15.1359C5.84602 15.025 5.75792 14.9314 5.65096 14.8637C5.54401 14.7961 5.42167 14.7566 5.29534 14.749C5.16901 14.7413 5.0428 14.7658 4.92847 14.82C4.64268 14.9552 4.32737 15.0159 4.01183 14.9965C3.6963 14.9771 3.39079 14.8782 3.1237 14.7091C2.85662 14.54 2.63664 14.3061 2.48421 14.0291C2.33178 13.7521 2.25184 13.4411 2.25184 13.125C2.25184 12.8089 2.33178 12.4979 2.48421 12.2209C2.63664 11.944 2.85662 11.7101 3.1237 11.5409C3.39079 11.3718 3.6963 11.2729 4.01183 11.2535C4.32737 11.2342 4.64268 11.2949 4.92847 11.43C5.0428 11.4843 5.16901 11.5087 5.29534 11.5011C5.42167 11.4934 5.54401 11.4539 5.65096 11.3863C5.75792 11.3186 5.84602 11.225 5.90705 11.1141C5.96809 11.0033 6.00007 10.8788 6.00003 10.7522V6.75002H10.3772C10.5038 6.75006 10.6283 6.71807 10.7392 6.65704C10.85 6.596 10.9436 6.50791 11.0113 6.40095C11.079 6.29399 11.1184 6.17165 11.1261 6.04533C11.1337 5.919 11.1093 5.79279 11.055 5.67845C10.9199 5.39267 10.8592 5.07736 10.8786 4.76182C10.898 4.44628 10.9968 4.14077 11.1659 3.87369C11.3351 3.60661 11.569 3.38663 11.8459 3.23419C12.1229 3.08176 12.4339 3.00183 12.75 3.00183C13.0662 3.00183 13.3772 3.08176 13.6541 3.23419C13.9311 3.38663 14.165 3.60661 14.3341 3.87369C14.5033 4.14077 14.6021 4.44628 14.6215 4.76182C14.6409 5.07736 14.5802 5.39267 14.445 5.67845C14.3908 5.79279 14.3663 5.919 14.374 6.04533C14.3816 6.17165 14.4211 6.29399 14.4888 6.40095C14.5564 6.50791 14.65 6.596 14.7609 6.65704C14.8718 6.71807 14.9963 6.75006 15.1228 6.75002H19.5V9.77158C19.294 9.74798 19.0862 9.74358 18.8794 9.75845C18.0065 9.82026 17.1917 10.2187 16.607 10.8697C16.0222 11.5207 15.7132 12.3734 15.745 13.2479C15.7769 14.1224 16.1472 14.9503 16.7778 15.5571C17.4084 16.1638 18.25 16.5019 19.125 16.5C19.2503 16.5002 19.3755 16.4933 19.5 16.4794V19.5Z" />
                        </svg>Browser Extension</button>
                    <button id="button2" class="horizontal-button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5 1.5H7.5C6.90326 1.5 6.33097 1.73705 5.90901 2.15901C5.48705 2.58097 5.25 3.15326 5.25 3.75V20.25C5.25 20.8467 5.48705 21.419 5.90901 21.841C6.33097 22.2629 6.90326 22.5 7.5 22.5H16.5C17.0967 22.5 17.669 22.2629 18.091 21.841C18.5129 21.419 18.75 20.8467 18.75 20.25V3.75C18.75 3.15326 18.5129 2.58097 18.091 2.15901C17.669 1.73705 17.0967 1.5 16.5 1.5ZM17.25 20.25C17.25 20.4489 17.171 20.6397 17.0303 20.7803C16.8897 20.921 16.6989 21 16.5 21H7.5C7.30109 21 7.11032 20.921 6.96967 20.7803C6.82902 20.6397 6.75 20.4489 6.75 20.25V3.75C6.75 3.55109 6.82902 3.36032 6.96967 3.21967C7.11032 3.07902 7.30109 3 7.5 3H16.5C16.6989 3 16.8897 3.07902 17.0303 3.21967C17.171 3.36032 17.25 3.55109 17.25 3.75V20.25ZM13.125 5.625C13.125 5.8475 13.059 6.06501 12.9354 6.25002C12.8118 6.43502 12.6361 6.57922 12.4305 6.66436C12.225 6.74951 11.9988 6.77179 11.7805 6.72838C11.5623 6.68498 11.3618 6.57783 11.2045 6.4205C11.0472 6.26316 10.94 6.06271 10.8966 5.84448C10.8532 5.62625 10.8755 5.40005 10.9606 5.19448C11.0458 4.98891 11.19 4.81321 11.375 4.6896C11.56 4.56598 11.7775 4.5 12 4.5C12.2984 4.5 12.5845 4.61853 12.7955 4.8295C13.0065 5.04048 13.125 5.32663 13.125 5.625Z" />
                        </svg>
                        Mobile</button>
                </div>
            </div>
        </div> -->


        <div class="container mt-5 ">
            <div class="row">
                <div class="col-md-4 order-md-2">
                    <div class="download-tabs-mobile-content">

                        <div class="tab-title-container d-flex align-items-center">
                            <span><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/mobile-icon.png'; ?>" alt=""></span> <span class="item-text">Mobile Extension</span>
                        </div>
                        <div class="download-tabs-mobile-links">
                            <a href="https://apps.apple.com/us/app/braavos-wallet/id1636013523">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/App-Store.png"
                                    alt="">
                            </a>

                            <a href="https://play.google.com/store/apps/details?id=app.braavos.wallet">
                                <img class="bottom-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/google-play.png"
                                    alt="">
                            </a>
                        </div>

                    </div>

                </div>
                <div class="col-md-8 order-md-1">
                    <div class="download-tabs-browser-content">
                        <div class="tab-title-container d-flex align-items-center">
                            <span><img src="<?php echo get_template_directory_uri() . '/assets/images/icons/browser-extension.png'; ?>" alt=""></span> <span class="item-text">Browser Extension</span>
                        </div>
                        <?php if (have_rows('download_tabs_browser_items')) : ?>
                            <ul class="download-tabs-browser-items p-0">
                                <?php while (have_rows('download_tabs_browser_items')) : the_row(); ?>
                                    <li class="download-tabs-browser-item" style="float: left">
                                        <?php $download_tabs_browser_link = get_sub_field('download_tabs_browser_link'); ?>
                                        <?php if ($download_tabs_browser_link) : ?>
                                            <div class="small-download-button-container text-right">
                                                <a href="<?php echo $download_tabs_browser_link['url']; ?>">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/small-download-icon.png'; ?>" alt="" class="small-download-button">

                                                </a>

                                            </div>
                                            <a href="<?php echo $download_tabs_browser_link['url']; ?>">
                                                <?php $download_tabs_browser_image = get_sub_field('download_tabs_browser_image'); ?>
                                                <?php if ($download_tabs_browser_image) : ?>
                                                    <div class="browser-item-logo">
                                                        <img src="<?php echo $download_tabs_browser_image['url']; ?>" alt="">
                                                    </div>
                                                <?php endif; ?>

                                                <h3 class="defi-socials__item-title">
                                                    <?php echo $download_tabs_browser_link['title']; ?>
                                                </h3>

                                            </a>
                                        <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <!-- <div class="download-tabs__right-wrapper">
                            <?php $download_tabs_browser_title_image = get_sub_field("download_tabs_browser_title_image"); ?>
                            <?php if ("download_tabs_browser_title_image") : ?>
                                <img src="<?php echo $download_tabs_browser_title_image['url']; ?>" alt="" class="download-tabs__browser-image">
                            <?php endif; ?>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>