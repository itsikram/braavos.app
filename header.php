<?php header('Vary: X-WPENGINE-SEGMENT'); 

if (!isset($_COOKIE['theme_mode'])) {
    setcookie('theme_mode', 'dark', time() + (30 * 24 * 60 * 60), "/"); // 7 days
    wp_redirect(site_url());
}

$theme_mode = isset($_COOKIE['theme_mode']) ? $_COOKIE['theme_mode'] : '';
$is_dark = $theme_mode == 'dark' ? true : false;


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php echo !$is_dark ? 'data-theme="light"' : 'data-theme="dark"' ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--================================-->
    <!-- Google tag (gtag.js) OLD -->
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!--**Google search engine Verification**-->
    <meta name="google-site-verification" content="BB4gapjH5WNAcpBksA7KxYGqv7oVBpwOzBUo_p2B8h0" />
    <!--**Yandex-verification**-->
    <meta name="yandex-verification" content="01101924acf8023c" />
    <!--==================================-->
    <!--==============//SEO===============-->

    <!-- <link rel='preload' id='aos-css' href='https://unpkg.com/aos@next/dist/aos.css' as="style" onload="this.onload=null;this.rel='stylesheet'" /> -->
    <noscript>
        <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"> -->
    </noscript>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <?php if(!$is_dark) {
            ?>
            <!-- <style>
                body {
                    background: url(<?php echo get_template_directory_uri().'/assets/images/bg-light.png'; ?>) !important;
                }
            </style> -->

        <?php } ?>

    <?php wp_head(); ?>

    <style>

        .home-banner_background {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/banner-background.png'; ?>) !important;
            background-size: 25%;
            background-repeat: no-repeat;
            background-position: 82% 14px;
            padding: 54px 45px 56px 180px !important;

        }

        .light-bg .swap-paid__left-wrapper {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/gas-fee-light.png'; ?>) !important;
        }

        .faq-nofound-section .container {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/braavos-stoke.png'; ?>);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 95% 100%;
        }

        .home-banner__wrapper {
            position: relative;
        }

        .home-banner__wrapper::after {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/slider-bg.png'; ?>);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 95% 100%;
            position: absolute;
            right: 0;
            height: 100%;
            content: '';
            display: block;

        }

        #menu-item-13857 .fml-icon {
            background: url(<?php echo get_template_directory_uri() . '/assets/images/icons/company-footer.png'; ?>);
            background-size: contain;
            background-repeat: no-repeat;
            height: 17px;
            width: 17px;
            margin-top: 3.5px;
        }

        #menu-item-13862 .fml-icon {
            background: url(<?php echo get_template_directory_uri() . '/assets/images/icons/download-footer.png'; ?>);
            background-size: contain;
            background-repeat: no-repeat;
            height: 15px;
            width: 15px;
            margin-top: 4.5px;
        }

        #menu-item-13845 .fml-icon {
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9IkZyYW1lIj4KPHBhdGggaWQ9IlZlY3RvciIgZD0iTTE3LjYyNSA0Ljg5MzU0TDEwLjc1IDEuMTMwMjZDMTAuNTIwMiAxLjAwMzgxIDEwLjI2MjMgMC45Mzc1IDEwIDAuOTM3NUM5LjczNzc1IDAuOTM3NSA5LjQ3OTc1IDEuMDAzODEgOS4yNSAxLjEzMDI2TDIuMzc1IDQuODkzNTRDMi4xMjkgNS4wMjgxNCAxLjkyMzc1IDUuMjI2NDYgMS43ODA3OSA1LjQ2NzdDMS42Mzc4NCA1LjcwODk1IDEuNTYyNDQgNS45ODQyMSAxLjU2MjUgNi4yNjQ2M1YxMy43MzQ5QzEuNTYyNDQgMTQuMDE1NCAxLjYzNzg0IDE0LjI5MDYgMS43ODA3OSAxNC41MzE5QzEuOTIzNzUgMTQuNzczMSAyLjEyOSAxNC45NzE0IDIuMzc1IDE1LjEwNkw5LjI1IDE4Ljg2OTNDOS40Nzk3MSAxOC45OTU5IDkuNzM3NzIgMTkuMDYyMyAxMCAxOS4wNjIzQzEwLjI2MjMgMTkuMDYyMyAxMC41MjAzIDE4Ljk5NTkgMTAuNzUgMTguODY5M0wxNy42MjUgMTUuMTA2QzE3Ljg3MSAxNC45NzE0IDE4LjA3NjIgMTQuNzczMSAxOC4yMTkyIDE0LjUzMTlDMTguMzYyMiAxNC4yOTA2IDE4LjQzNzYgMTQuMDE1NCAxOC40Mzc1IDEzLjczNDlWNi4yNjQ2M0MxOC40Mzc2IDUuOTg0MjEgMTguMzYyMiA1LjcwODk1IDE4LjIxOTIgNS40Njc3QzE4LjA3NjIgNS4yMjY0NiAxNy44NzEgNS4wMjgxNCAxNy42MjUgNC44OTM1NFpNMTAgMi44NTY4MkwxNS42MjUgNS45MzcyOUwxMCA5LjAxNTQxTDQuMzc1IDUuOTM3MjlMMTAgMi44NTY4MlpNMy40Mzc1IDcuNTYxNTFMOS4wNjI1IDEwLjYzOTZWMTYuNjI5NUwzLjQzNzUgMTMuNTQ5OFY3LjU2MTUxWk0xMC45Mzc1IDE2LjYyOTVWMTAuNjM5NkwxNi41NjI1IDcuNTYxNTFWMTMuNTQ5OEwxMC45Mzc1IDE2LjYyOTVaIiBmaWxsPSJ1cmwoI3BhaW50MF9saW5lYXJfNjAyOV8yMjE5MSkiLz4KPC9nPgo8ZGVmcz4KPGxpbmVhckdyYWRpZW50IGlkPSJwYWludDBfbGluZWFyXzYwMjlfMjIxOTEiIHgxPSItMS43OTU2NiIgeTE9Ii0xLjQ5NTkyIiB4Mj0iMjAuMzc0NyIgeTI9IjE0Ljk4NzMiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzA5OUZDMCIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM4MzU4RkYiLz4KPC9saW5lYXJHcmFkaWVudD4KPC9kZWZzPgo8L3N2Zz4K);
        }

        #menu-item-13851 .fml-icon {
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9IkZyYW1lIj4KPHBhdGggaWQ9IlZlY3RvciIgZD0iTTcuMzI5NjkgOS4xMTI1QzcuNDc1OTUgOS4wMzEzOCA3LjU5Nzg1IDguOTEyNjIgNy42ODI3NSA4Ljc2ODUxQzcuNzY3NjQgOC42MjQ0MSA3LjgxMjQ0IDguNDYwMjIgNy44MTI1IDguMjkyOTdWMy4xODI4MUM3LjgxMjUyIDMuMDI1NjkgNy43NzMwNCAyLjg3MTA4IDcuNjk3NzEgMi43MzMyQzcuNjIyMzcgMi41OTUzMiA3LjUxMzU4IDIuNDc4NTggNy4zODEzNSAyLjM5MzcyQzcuMjQ5MTIgMi4zMDg4NSA3LjA5NzY3IDIuMjU4NTkgNi45NDA5NCAyLjI0NzUzQzYuNzg0MjEgMi4yMzY0OCA2LjYyNzIxIDIuMjY1IDYuNDg0MzggMi4zMzA0N0M1LjAxNzQgMy4wMDU1OSAzLjc3NDM1IDQuMDg2NTggMi45MDIxNyA1LjQ0NTY3QzIuMDI5OTggNi44MDQ3NSAxLjU2NTExIDguMzg1MTMgMS41NjI1IDEwQzEuNTYyNSAxMC4yNjMzIDEuNTc1IDEwLjUyODEgMS41OTkyMiAxMC43ODkxQzEuNjEzNzMgMTAuOTQ0MSAxLjY2NjY0IDExLjA5MzEgMS43NTMxNyAxMS4yMjI2QzEuODM5NjkgMTEuMzUyMSAxLjk1NzExIDExLjQ1NzkgMi4wOTQ4MSAxMS41MzA3QzIuMjMyNTEgMTEuNjAzNCAyLjM4NjE2IDExLjY0MDcgMi41NDE4OCAxMS42MzkxQzIuNjk3NTkgMTEuNjM3NiAyLjg1MDQ4IDExLjU5NzMgMi45ODY3MiAxMS41MjE5TDcuMzI5NjkgOS4xMTI1Wk01LjkzNzUgNC44NDg0NFY3LjczOTA2TDMuNTAwNzggOS4wOTA2MkMzLjczODkgNy40MTYzOSA0LjYxMTI2IDUuODk3NjYgNS45Mzc1IDQuODQ4NDRaTTEwIDEuNTYyNUM5Ljc1MTM2IDEuNTYyNSA5LjUxMjkgMS42NjEyNyA5LjMzNzA5IDEuODM3MDlDOS4xNjEyNyAyLjAxMjkgOS4wNjI1IDIuMjUxMzYgOS4wNjI1IDIuNVY5LjQ5NDUzTDMuMDYwOTQgMTIuOTg5OEMyLjk1NDIyIDEzLjA1MiAyLjg2MDgzIDEzLjEzNDYgMi43ODYxNCAxMy4yMzNDMi43MTE0NSAxMy4zMzE0IDIuNjU2OTMgMTMuNDQzNSAyLjYyNTcxIDEzLjU2M0MyLjU5NDUgMTMuNjgyNSAyLjU4NzIgMTMuODA3IDIuNjA0MjQgMTMuOTI5M0MyLjYyMTI4IDE0LjA1MTYgMi42NjIzMiAxNC4xNjk0IDIuNzI1IDE0LjI3NThDMy40NzQxMSAxNS41NTAyIDQuNTQ0ODkgMTYuNjA1NCA1LjgzMDEgMTcuMzM1N0M3LjExNTMyIDE4LjA2NjEgOC41Njk4NiAxOC40NDYgMTAuMDQ4MSAxOC40Mzc0QzExLjUyNjMgMTguNDI4NyAxMi45NzYzIDE4LjAzMTkgMTQuMjUyOSAxNy4yODY2QzE1LjUyOTUgMTYuNTQxMyAxNi41ODc5IDE1LjQ3MzcgMTcuMzIyMSAxNC4xOTA2QzE4LjA1NjMgMTIuOTA3NiAxOC40NDA1IDExLjQ1NDIgMTguNDM2MyA5Ljk3NTk2QzE4LjQzMjEgOC40OTc3MiAxOC4wMzk2IDcuMDQ2NTMgMTcuMjk4MSA1Ljc2NzdDMTYuNTU2NiA0LjQ4ODg4IDE1LjQ5MjIgMy40MjczMSAxNC4yMTEzIDIuNjg5MjlDMTIuOTMwNSAxLjk1MTI2IDExLjQ3ODIgMS41NjI3IDEwIDEuNTYyNVpNMTAgMTYuNTYyNUM5LjAxNjczIDE2LjU1OTggOC4wNDY0OSAxNi4zMzc1IDcuMTYwMTkgMTUuOTExN0M2LjI3Mzg5IDE1LjQ4NTkgNS40OTM5MyAxNC44Njc1IDQuODc3MzQgMTQuMTAxNkwxMC40Njg4IDEwLjg0M0MxMC42MTEgMTAuNzYwOCAxMC43MjkyIDEwLjY0MjggMTAuODExNSAxMC41MDA2QzEwLjg5MzcgMTAuMzU4NCAxMC45MzcyIDEwLjE5NzEgMTAuOTM3NSAxMC4wMzI4VjMuNTAzOTFDMTIuNTgwOSAzLjczOTQ5IDE0LjA3NCA0LjU4OTIxIDE1LjExNTggNS44ODE4NUMxNi4xNTc3IDcuMTc0NDkgMTYuNjcwOCA4LjgxMzk3IDE2LjU1MiAxMC40Njk5QzE2LjQzMzEgMTIuMTI1OSAxNS42OTEgMTMuNjc1MiAxNC40NzUyIDE0LjgwNThDMTMuMjU5MyAxNS45MzY0IDExLjY2MDIgMTYuNTY0MSAxMCAxNi41NjI1WiIgZmlsbD0idXJsKCNwYWludDBfbGluZWFyXzYwNDhfOTEwMikiLz4KPC9nPgo8ZGVmcz4KPGxpbmVhckdyYWRpZW50IGlkPSJwYWludDBfbGluZWFyXzYwNDhfOTEwMiIgeDE9Ii0xLjc5NTQzIiB5MT0iLTAuNzAzMTI1IiB4Mj0iMTkuMjI1MSIgeTI9IjE2LjA4MTYiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzA5OUZDMCIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM4MzU4RkYiLz4KPC9saW5lYXJHcmFkaWVudD4KPC9kZWZzPgo8L3N2Zz4K);
        }


        #menu-item-14714 .fml-icon {
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9IkZyYW1lIj4KPHBhdGggaWQ9IlZlY3RvciIgZD0iTTEwLjAwMDEgMS41NTk1N0M4LjMzMDc5IDEuNTU5NTcgNi42OTkgMi4wNTQ1NyA1LjMxMTA1IDIuOTgxOTdDMy45MjMxIDMuOTA5MzcgMi44NDEzMiA1LjIyNzUxIDIuMjAyNTIgNi43Njk3MkMxLjU2MzcyIDguMzExOTMgMS4zOTY1OCAxMC4wMDg5IDEuNzIyMjMgMTEuNjQ2MUMyLjA0Nzg5IDEzLjI4MzMgMi44NTE3MyAxNC43ODcyIDQuMDMyMDggMTUuOTY3NUM1LjIxMjQ0IDE3LjE0NzkgNi43MTYzIDE3Ljk1MTcgOC4zNTM1IDE4LjI3NzRDOS45OTA3IDE4LjYwMzEgMTEuNjg3NyAxOC40MzU5IDEzLjIyOTkgMTcuNzk3MUMxNC43NzIxIDE3LjE1ODMgMTYuMDkwMyAxNi4wNzY1IDE3LjAxNzcgMTQuNjg4NkMxNy45NDUxIDEzLjMwMDYgMTguNDQwMSAxMS42Njg4IDE4LjQ0MDEgOS45OTk1N0MxOC40Mzc2IDcuNzYxOSAxNy41NDc2IDUuNjE2NiAxNS45NjUzIDQuMDM0MzNDMTQuMzgzIDIuNDUyMDYgMTIuMjM3NyAxLjU2MjA1IDEwLjAwMDEgMS41NTk1N1pNMTAuMDAwMSAxNi41NjRDOC43MDE3NCAxNi41NjQgNy40MzI1NyAxNi4xNzkgNi4zNTMwNSAxNS40NTc3QzUuMjczNTMgMTQuNzM2NCA0LjQzMjE1IDEzLjcxMTIgMy45MzUzMSAxMi41MTE3QzMuNDM4NDYgMTEuMzEyMiAzLjMwODQ2IDkuOTkyMjkgMy41NjE3NSA4LjcxODkxQzMuODE1MDQgNy40NDU1MyA0LjQ0MDI0IDYuMjc1ODYgNS4zNTgzIDUuMzU3ODFDNi4yNzYzNSA0LjQzOTc1IDcuNDQ2MDIgMy44MTQ1NSA4LjcxOTQgMy41NjEyNkM5Ljk5Mjc4IDMuMzA3OTcgMTEuMzEyNyAzLjQzNzk3IDEyLjUxMjIgMy45MzQ4MUMxMy43MTE3IDQuNDMxNjYgMTQuNzM2OSA1LjI3MzA0IDE1LjQ1ODIgNi4zNTI1NkMxNi4xNzk1IDcuNDMyMDggMTYuNTY0NSA4LjcwMTI0IDE2LjU2NDUgOS45OTk1N0MxNi41NjI2IDExLjc0IDE1Ljg3MDQgMTMuNDA4NiAxNC42Mzk4IDE0LjYzOTNDMTMuNDA5MSAxNS44Njk5IDExLjc0MDUgMTYuNTYyMSAxMC4wMDAxIDE2LjU2NFpNMTIuNzU2MyA2LjAxNDAxTDguMzgwMDUgNy44ODk1N0M4LjE1ODg0IDcuOTg0NDIgNy45ODI1NyA4LjE2MDY5IDcuODg3NzIgOC4zODE5TDYuMDEyMTYgMTIuNzU4MkM1LjkzOTY1IDEyLjkzMDMgNS45MjAxNyAxMy4xMjAxIDUuOTU2MjMgMTMuMzAzNEM1Ljk5MjI4IDEzLjQ4NjYgNi4wODIyMiAxMy42NTQ5IDYuMjE0NTIgMTMuNzg2N0M2LjM0NjgyIDEzLjkxODUgNi41MTU0NiAxNC4wMDc4IDYuNjk4ODMgMTQuMDQzMUM2Ljg4MjIxIDE0LjA3ODUgNy4wNzE5NiAxNC4wNTgzIDcuMjQzNzggMTMuOTg1MUwxMS42MjAxIDEyLjEwOTZDMTEuODQxMyAxMi4wMTQ3IDEyLjAxNzYgMTEuODM4NCAxMi4xMTI0IDExLjYxNzJMMTMuOTg4IDcuMjQwOTRDMTQuMDYwNSA3LjA2ODg0IDE0LjA3OTkgNi44NzkwMiAxNC4wNDM5IDYuNjk1NzhDMTQuMDA3OCA2LjUxMjU1IDEzLjkxNzkgNi4zNDQyNSAxMy43ODU2IDYuMjEyNDVDMTMuNjUzMyA2LjA4MDY1IDEzLjQ4NDcgNS45OTEzNSAxMy4zMDEzIDUuOTU2QzEzLjExNzkgNS45MjA2NSAxMi45MjgyIDUuOTQwODUgMTIuNzU2MyA2LjAxNDAxWk0xMC41MzYyIDEwLjUzOEw4LjY2MDYgMTEuMzQyMkw5LjQ2NDc1IDkuNDY2NkwxMS4zNDAzIDguNjYyNDVMMTAuNTM2MiAxMC41MzhaIiBmaWxsPSJ1cmwoI3BhaW50MF9saW5lYXJfNjg1MF81NjE2NikiLz4KPC9nPgo8ZGVmcz4KPGxpbmVhckdyYWRpZW50IGlkPSJwYWludDBfbGluZWFyXzY4NTBfNTYxNjYiIHgxPSItMS43OTkwOSIgeTE9Ii0wLjcwNjcyNSIgeDI9IjE5LjIyOCIgeTI9IjE2LjA4NDMiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KPHN0b3Agc3RvcC1jb2xvcj0iIzA5OUZDMCIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM4MzU4RkYiLz4KPC9saW5lYXJHcmFkaWVudD4KPC9kZWZzPgo8L3N2Zz4K);
        }

        #menu-item-13854 .fml-icon {
            background: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgaWQ9IkZyYW1lIj4KPHBhdGggaWQ9IlZlY3RvciIgZD0iTTguNDM3NSA2LjU2MjVDOC40Mzc1IDYuMzE1MjcgOC41MTA4MSA2LjA3MzYgOC42NDgxNyA1Ljg2ODA0QzguNzg1NTIgNS42NjI0OCA4Ljk4MDc0IDUuNTAyMjYgOS4yMDkxNSA1LjQwNzY1QzkuNDM3NTYgNS4zMTMwNCA5LjY4ODg5IDUuMjg4MjkgOS45MzEzNyA1LjMzNjUyQzEwLjE3MzggNS4zODQ3NSAxMC4zOTY2IDUuNTAzOCAxMC41NzE0IDUuNjc4NjJDMTAuNzQ2MiA1Ljg1MzQzIDEwLjg2NTMgNi4wNzYxNiAxMC45MTM1IDYuMzE4NjRDMTAuOTYxNyA2LjU2MTExIDEwLjkzNyA2LjgxMjQ1IDEwLjg0MjQgNy4wNDA4NUMxMC43NDc3IDcuMjY5MjYgMTAuNTg3NSA3LjQ2NDQ5IDEwLjM4MiA3LjYwMTg0QzEwLjE3NjQgNy43MzkxOSA5LjkzNDczIDcuODEyNSA5LjY4NzUgNy44MTI1QzkuMzU1OTggNy44MTI1IDkuMDM4MDQgNy42ODA4IDguODAzNjIgNy40NDYzOEM4LjU2OTIgNy4yMTE5NiA4LjQzNzUgNi44OTQwMiA4LjQzNzUgNi41NjI1Wk0xOC40Mzc1IDEwQzE4LjQzNzUgMTEuNjY4OCAxNy45NDI3IDEzLjMwMDEgMTcuMDE1NSAxNC42ODc2QzE2LjA4ODQgMTYuMDc1MiAxNC43NzA2IDE3LjE1NjYgMTMuMjI4OSAxNy43OTUyQzExLjY4NzEgMTguNDMzOCA5Ljk5MDY0IDE4LjYwMDkgOC4zNTM5MyAxOC4yNzU0QzYuNzE3MjEgMTcuOTQ5OCA1LjIxMzggMTcuMTQ2MiA0LjAzMzc5IDE1Ljk2NjJDMi44NTM3OSAxNC43ODYyIDIuMDUwMTkgMTMuMjgyOCAxLjcyNDYzIDExLjY0NjFDMS4zOTkwNyAxMC4wMDk0IDEuNTY2MTYgOC4zMTI4NiAyLjIwNDc3IDYuNzcxMTFDMi44NDMzOCA1LjIyOTM2IDMuOTI0ODQgMy45MTE2IDUuMzEyMzggMi45ODQ0OEM2LjY5OTkyIDIuMDU3MzUgOC4zMzEyMiAxLjU2MjUgMTAgMS41NjI1QzEyLjIzNyAxLjU2NDk4IDE0LjM4MTcgMi40NTQ3MyAxNS45NjM1IDQuMDM2NTNDMTcuNTQ1MyA1LjYxODMzIDE4LjQzNSA3Ljc2MyAxOC40Mzc1IDEwWk0xNi41NjI1IDEwQzE2LjU2MjUgOC43MDIwNiAxNi4xNzc2IDcuNDMzMjcgMTUuNDU2NSA2LjM1NDA3QzE0LjczNTQgNS4yNzQ4NyAxMy43MTA1IDQuNDMzNzQgMTIuNTExNCAzLjkzNzA0QzExLjMxMjIgMy40NDAzNCA5Ljk5MjcyIDMuMzEwMzggOC43MTk3MiAzLjU2MzZDNy40NDY3MiAzLjgxNjgxIDYuMjc3NCA0LjQ0MTgzIDUuMzU5NjIgNS4zNTk2MUM0LjQ0MTgzIDYuMjc3MzkgMy44MTY4MiA3LjQ0NjcyIDMuNTYzNiA4LjcxOTcyQzMuMzEwMzggOS45OTI3MiAzLjQ0MDM0IDExLjMxMjIgMy45MzcwNCAxMi41MTE0QzQuNDMzNzQgMTMuNzEwNSA1LjI3NDg4IDE0LjczNTQgNi4zNTQwNyAxNS40NTY1QzcuNDMzMjcgMTYuMTc3NiA4LjcwMjA2IDE2LjU2MjUgMTAgMTYuNTYyNUMxMS43Mzk5IDE2LjU2MDYgMTMuNDA4IDE1Ljg2ODYgMTQuNjM4MyAxNC42MzgzQzE1Ljg2ODYgMTMuNDA4IDE2LjU2MDYgMTEuNzM5OSAxNi41NjI1IDEwWk0xMC45Mzc1IDEyLjg2NTZWMTAuMzEyNUMxMC45Mzc1IDkuODk4MSAxMC43NzI5IDkuNTAwNjcgMTAuNDc5OSA5LjIwNzY1QzEwLjE4NjggOC45MTQ2MiA5Ljc4OTQgOC43NSA5LjM3NSA4Ljc1QzkuMTUzNiA4Ljc0OTY3IDguOTM5MjMgOC44Mjc3MSA4Ljc2OTg2IDguOTcwMjlDOC42MDA0OCA5LjExMjg3IDguNDg3MDMgOS4zMTA3OSA4LjQ0OTYgOS41MjkwMUM4LjQxMjE3IDkuNzQ3MjIgOC40NTMxOCA5Ljk3MTY0IDguNTY1MzYgMTAuMTYyNUM4LjY3NzU0IDEwLjM1MzQgOC44NTM2NSAxMC40OTg0IDkuMDYyNSAxMC41NzE5VjEzLjEyNUM5LjA2MjUgMTMuNTM5NCA5LjIyNzEyIDEzLjkzNjggOS41MjAxNSAxNC4yMjk5QzkuODEzMTggMTQuNTIyOSAxMC4yMTA2IDE0LjY4NzUgMTAuNjI1IDE0LjY4NzVDMTAuODQ2NCAxNC42ODc4IDExLjA2MDggMTQuNjA5OCAxMS4yMzAyIDE0LjQ2NzJDMTEuMzk5NSAxNC4zMjQ2IDExLjUxMyAxNC4xMjY3IDExLjU1MDQgMTMuOTA4NUMxMS41ODc4IDEzLjY5MDMgMTEuNTQ2OCAxMy40NjU5IDExLjQzNDYgMTMuMjc1QzExLjMyMjUgMTMuMDg0MSAxMS4xNDY0IDEyLjkzOTEgMTAuOTM3NSAxMi44NjU2WiIgZmlsbD0idXJsKCNwYWludDBfbGluZWFyXzYxNDJfNjkpIi8+CjwvZz4KPGRlZnM+CjxsaW5lYXJHcmFkaWVudCBpZD0icGFpbnQwX2xpbmVhcl82MTQyXzY5IiB4MT0iLTEuNzk1NjYiIHkxPSItMC43MDMxMjUiIHgyPSIxOS4yMjUyIiB5Mj0iMTYuMDgyOSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgo8c3RvcCBzdG9wLWNvbG9yPSIjMDk5RkMwIi8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzgzNThGRiIvPgo8L2xpbmVhckdyYWRpZW50Pgo8L2RlZnM+Cjwvc3ZnPgo=);
        }

        .footer-menu .menu-item .fml-icon {
            background-repeat: no-repeat !important;
        }

        .dark-bg .footer-menu .menu-item:nth-child(1) .fml-icon {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fi/1.png'; ?>) !important;
        }

        .dark-bg .footer-menu .menu-item:nth-child(2) .fml-icon {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fi/2.png'; ?>) !important;
        }

        .dark-bg .footer-menu .menu-item:nth-child(3) .fml-icon {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fi/3.png'; ?>) !important;
        }

        .dark-bg .footer-menu .menu-item:nth-child(4) .fml-icon {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fi/4.png'; ?>) !important;
        }

        .dark-bg .footer-menu .menu-item:nth-child(5) .fml-icon {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fi/5.png'; ?>) !important;
        }

        .dark-bg .footer-menu .menu-item:nth-child(6) .fml-icon {


            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fi/6.png'; ?>) !important;
        }
    </style>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "<?php bloginfo('name'); ?>",
            "url": "<?php echo home_url(); ?>"
        }
    </script>

</head>

<?php
// Set the theme mode
$class = '';
if (
    (
        isset($_SERVER['HTTP_X_WPENGINE_SEGMENT']) &&
        'light_mode' === $_SERVER['HTTP_X_WPENGINE_SEGMENT']
    ) ||
    (
        isset($_COOKIE['main_theme_style']) &&
        'light' === $_COOKIE['main_theme_style']
    )
) {
    $class = 'mts_light';
}
?>


<body class="<?php echo $is_dark ? 'dark-bg dark' : 'light-bg light'; ?>">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9FDKRK7" height="0" width="0" style="display:none; visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="mobile-menu" style="display: flex;">
        <a href="" class="mobile-menu__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M25.7076 24.2921C25.8005 24.385 25.8742 24.4953 25.9245 24.6167C25.9747 24.7381 26.0006 24.8682 26.0006 24.9996C26.0006 25.131 25.9747 25.2611 25.9245 25.3825C25.8742 25.5039 25.8005 25.6142 25.7076 25.7071C25.6147 25.8 25.5044 25.8737 25.383 25.924C25.2616 25.9743 25.1315 26.0001 25.0001 26.0001C24.8687 26.0001 24.7386 25.9743 24.6172 25.924C24.4958 25.8737 24.3855 25.8 24.2926 25.7071L16.0001 17.4133L7.70757 25.7071C7.51993 25.8947 7.26543 26.0001 7.00007 26.0001C6.7347 26.0001 6.48021 25.8947 6.29257 25.7071C6.10493 25.5194 5.99951 25.2649 5.99951 24.9996C5.99951 24.7342 6.10493 24.4797 6.29257 24.2921L14.5863 15.9996L6.29257 7.70708C6.10493 7.51944 5.99951 7.26494 5.99951 6.99958C5.99951 6.73422 6.10493 6.47972 6.29257 6.29208C6.48021 6.10444 6.7347 5.99902 7.00007 5.99902C7.26543 5.99902 7.51993 6.10444 7.70757 6.29208L16.0001 14.5858L24.2926 6.29208C24.4802 6.10444 24.7347 5.99902 25.0001 5.99902C25.2654 5.99902 25.5199 6.10444 25.7076 6.29208C25.8952 6.47972 26.0006 6.73422 26.0006 6.99958C26.0006 7.26494 25.8952 7.51944 25.7076 7.70708L17.4138 15.9996L25.7076 24.2921Z" fill=""></path>
            </svg>
        </a>
        <div class="mobile-menu__wrapper">
            <div class="main__switch switch">
                <div class="switch__box">
                    <input type="checkbox" id="switch-mobile">
                    <label for="switch-mobile"></label>
                </div>
            </div>
            <div class="mobile-menu__title-wrapper">
                <div class="mobile-menu__menu-title-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.625 4.89354L10.75 1.13026C10.5202 1.00381 10.2623 0.9375 10 0.9375C9.73775 0.9375 9.47975 1.00381 9.25 1.13026L2.375 4.89354C2.129 5.02814 1.92375 5.22646 1.78079 5.4677C1.63784 5.70895 1.56244 5.98421 1.5625 6.26463V13.7349C1.56244 14.0154 1.63784 14.2906 1.78079 14.5319C1.92375 14.7731 2.129 14.9714 2.375 15.106L9.25 18.8693C9.47971 18.9959 9.73772 19.0623 10 19.0623C10.2623 19.0623 10.5203 18.9959 10.75 18.8693L17.625 15.106C17.871 14.9714 18.0762 14.7731 18.2192 14.5319C18.3622 14.2906 18.4376 14.0154 18.4375 13.7349V6.26463C18.4376 5.98421 18.3622 5.70895 18.2192 5.4677C18.0762 5.22646 17.871 5.02814 17.625 4.89354ZM10 2.85682L15.625 5.93729L10 9.01541L4.375 5.93729L10 2.85682ZM3.4375 7.56151L9.0625 10.6396V16.6295L3.4375 13.5498V7.56151ZM10.9375 16.6295V10.6396L16.5625 7.56151V13.5498L10.9375 16.6295Z" fill="url(#paint0_linear_6262_52701)"></path>
                        <defs>
                            <linearGradient id="paint0_linear_6262_52701" x1="-1.79566" y1="-1.49592" x2="20.3747" y2="14.9873" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#099FC0"></stop>
                                <stop offset="1" stop-color="#8358FF"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <p class="mobile-menu__menu-title">
                    Product </p>
            </div>

            <ul class="mobile-menu__list">
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/security/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M1.91647 1.21935C1.33581 1.24061 0.893555 1.72301 0.893555 2.29381V9.62836C0.893555 10.3493 1.27059 11.0338 1.79779 11.6441C2.3286 12.2586 3.04171 12.833 3.78296 13.3389C5.26671 14.3516 6.91212 15.1229 7.57623 15.4184C7.84674 15.5388 8.15285 15.5388 f8.42336 15.4184C9.08747 15.1229 10.7329 14.3516 12.2166 13.3389C12.9579 12.833 13.671 12.2586 14.2018 11.6441C14.729 11.0338 15.106 10.3493 15.106 9.62836V2.4625C15.106 1.80432 14.5358 1.30186 13.8989 1.32013C12.7616 1.35275 10.6481 1.28083 8.32037 0.543983C8.11653 0.479459 7.89475 0.473559 7.68687 0.529298C5.14531 1.21074 4.16732 1.21143 3.03357 1.20718C3.03353 1.20718 3.03348 1.20718 3.03344 1.20718M1.91647 1.21935L3.03532 0.707185L3.03344 1.20718M1.91647 1.21935C2.271 1.20637 2.5831 1.20577 2.87717 1.20663L1.91647 1.21935ZM3.03344 1.20718L2.87745 1.20664L3.03344 1.20718Z" stroke="#7D828B"></path>
                                <path d="M4.84351 6.98194C4.84351 6.63069 5.12825 6.34595 5.4795 6.34595H10.5674C10.9186 6.34595 11.2034 6.63069 11.2034 6.98194V9.0171C11.2034 10.7733 9.77968 12.197 8.02345 12.197C6.26721 12.197 4.84351 10.7733 4.84351 9.0171V6.98194Z" fill="white" stroke="url(#paint0_linear_6262_52707)" stroke-width="0.254398"></path>
                                <path d="M4.71631 6.98194C4.71631 6.56044 5.058 6.21875 5.4795 6.21875H10.5674C10.9889 6.21875 11.3306 6.56044 11.3306 6.98194V9.0171C11.3306 10.8436 9.84993 12.3242 8.02345 12.3242C6.19696 12.3242 4.71631 10.8436 4.71631 9.0171V6.98194Z" fill="#7D828B"></path>
                                <path d="M9.55201 5.20118C9.55201 4.79636 9.3912 4.40812 9.10495 4.12187C8.8187 3.83562 8.43046 3.6748 8.02564 3.6748C7.62082 3.6748 7.23258 3.83562 6.94633 4.12187C6.66008 4.40812 6.49927 4.79636 6.49927 5.20118" stroke="#7D828B" stroke-width="0.763193" stroke-linecap="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.48212 9.32546C8.45576 9.22 8.50267 9.11211 8.57745 9.03321C8.7071 8.89642 8.78663 8.71165 8.78663 8.5083C8.78663 8.08681 8.44494 7.74512 8.02344 7.74512C7.60194 7.74512 7.26025 8.08681 7.26025 8.5083C7.26025 8.71172 7.33983 8.89654 7.46956 9.03335C7.54438 9.11225 7.59132 9.22016 7.56495 9.32566L7.3394 10.2279C7.29926 10.3884 7.4207 10.5439 7.5862 10.5439H8.46092C8.62642 10.5439 8.74786 10.3884 8.70772 10.2279L8.48212 9.32546Z" fill="#2A3140"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_6262_52707" x1="3.40006" y1="5.39903" x2="11.1176" y2="12.0754" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0933C0"></stop>
                                        <stop offset="1" stop-color="#587EFF"></stop>
                                    </linearGradient>
                                </defs>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Security </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/swap-tokens/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.891602" y="0.5" width="15" height="15" rx="7.5" stroke="#7D828B"></rect>
                                <path d="M12.7666 4.5001V6.6001C12.7666 6.73934 12.7113 6.87287 12.6128 6.97133C12.5144 7.06979 12.3808 7.1251 12.2416 7.1251H10.1416C10.0024 7.1251 9.86883 7.06979 9.77037 6.97133C9.67192 6.87287 9.6166 6.73934 9.6166 6.6001C9.6166 6.46086 9.67192 6.32732 9.77037 6.22887C9.86883 6.13041 10.0024 6.0751 10.1416 6.0751H10.9729L10.6316 5.73385C10.0138 5.11296 9.17476 4.76269 8.29885 4.75997H8.28004C7.41195 4.75807 6.57802 5.09803 5.95866 5.70629C5.85911 5.80364 5.72496 5.85745 5.58572 5.85589C5.44649 5.85434 5.31358 5.79753 5.21623 5.69797C5.11888 5.59842 5.06506 5.46427 5.06662 5.32503C5.06818 5.1858 5.12498 5.05289 5.22454 4.95554C6.04013 4.15467 7.1383 3.7072 8.28135 3.70997H8.3041C9.45724 3.71312 10.5619 4.17404 11.3754 4.99141L11.7166 5.33135V4.5001C11.7166 4.36086 11.7719 4.22732 11.8704 4.12887C11.9688 4.03041 12.1024 3.9751 12.2416 3.9751C12.3808 3.9751 12.5144 4.03041 12.6128 4.12887C12.7113 4.22732 12.7666 4.36086 12.7666 4.5001ZM10.8245 10.2939C10.2049 10.9025 9.37039 11.2425 8.50185 11.2402H8.48304C7.60713 11.2375 6.76812 10.8872 6.15029 10.2664L5.81035 9.9251H6.6416C6.78084 9.9251 6.91438 9.86979 7.01283 9.77133C7.11129 9.67287 7.1666 9.53934 7.1666 9.4001C7.1666 9.26086 7.11129 9.12733 7.01283 9.02887C6.91438 8.93041 6.78084 8.8751 6.6416 8.8751H4.5416C4.40236 8.8751 4.26883 8.93041 4.17037 9.02887C4.07191 9.12733 4.0166 9.26086 4.0166 9.4001V11.5001C4.0166 11.6393 4.07191 11.7729 4.17037 11.8713C4.26883 11.9698 4.40236 12.0251 4.5416 12.0251C4.68084 12.0251 4.81438 11.9698 4.91283 11.8713C5.01129 11.7729 5.0666 11.6393 5.0666 11.5001V10.6688L5.40785 11.0101C6.22148 11.827 7.32615 12.2874 8.4791 12.2902H8.5036C9.64666 12.293 10.7448 11.8455 11.5604 11.0447C11.6097 10.9965 11.649 10.939 11.6761 10.8756C11.7032 10.8122 11.7176 10.7441 11.7183 10.6752C11.7191 10.6062 11.7063 10.5378 11.6806 10.4738C11.655 10.4098 11.6169 10.3515 11.5687 10.3022C11.5205 10.2529 11.4631 10.2136 11.3997 10.1865C11.3363 10.1594 11.2682 10.1451 11.1992 10.1443C11.1303 10.1435 11.0619 10.1563 10.9979 10.182C10.9339 10.2077 10.8756 10.2457 10.8263 10.2939H10.8245Z" fill="#7D828B"></path>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Swap Tokens </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/deposit-crypto/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.891602" y="0.5" width="15" height="15" rx="7.5" stroke="#7D828B"></rect>
                                <path d="M5.16409 7.70567C5.10035 7.64375 5.04978 7.57023 5.01527 7.48931C4.98077 7.40838 4.96301 7.32163 4.96301 7.23403C4.96301 7.14643 4.98077 7.05968 5.01527 6.97875C5.04978 6.89783 5.10035 6.82431 5.16409 6.76239L7.90658 4.0959C7.97026 4.03392 8.04588 3.98475 8.12911 3.95121C8.21234 3.91766 8.30156 3.90039 8.39166 3.90039C8.48176 3.90039 8.57098 3.91766 8.65422 3.95121C8.73745 3.98475 8.81306 4.03392 8.87674 4.0959L11.6192 6.76239C11.6829 6.82433 11.7335 6.89786 11.7679 6.97878C11.8024 7.05971 11.8202 7.14644 11.8202 7.23403C11.8202 7.32162 11.8024 7.40835 11.7679 7.48928C11.7335 7.5702 11.6829 7.64373 11.6192 7.70567C11.5555 7.7676 11.4799 7.81673 11.3967 7.85025C11.3134 7.88377 11.2242 7.90102 11.1342 7.90102C11.0441 7.90102 10.9549 7.88377 10.8716 7.85025C10.7884 7.81673 10.7128 7.7676 10.6491 7.70567L9.07728 6.1766V11.2338C9.07728 11.4106 9.00505 11.5801 8.87647 11.7051C8.74789 11.8302 8.5735 11.9004 8.39166 11.9004C8.20982 11.9004 8.03543 11.8302 7.90685 11.7051C7.77827 11.5801 7.70604 11.4106 7.70604 11.2338V6.1766L6.13425 7.70567C6.07058 7.76765 5.99496 7.81682 5.91173 7.85036C5.82849 7.88391 5.73927 7.90118 5.64917 7.90118C5.55907 7.90118 5.46985 7.88391 5.38662 7.85036C5.30339 7.81682 5.22777 7.76765 5.16409 7.70567Z" fill="#7D828B"></path>
                            </svg>
                        </span>
                        <span class="mobile-menu__list-item-link-text">
                            Deposit Crypto </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/connect-to-starknet-dapps/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <g clip-path="url(#clip0_6262_52732)">
                                    <path d="M8.3916 0C6.80935 0 5.26264 0.469192 3.94704 1.34824C2.63145 2.22729 1.60607 3.47672 1.00057 4.93853C0.395068 6.40034 0.236641 8.00887 0.545323 9.56072C0.854005 11.1126 1.61593 12.538 2.73475 13.6569C3.85357 14.7757 5.27903 15.5376 6.83088 15.8463C8.38273 16.155 9.99126 15.9965 11.4531 15.391C12.9149 14.7855 14.1643 13.7602 15.0434 12.4446C15.9224 11.129 16.3916 9.58225 16.3916 8C16.3892 5.87902 15.5455 3.8456 14.0458 2.34584C12.546 0.846082 10.5126 0.00244306 8.3916 0ZM15.1608 8C15.1614 8.62428 15.0752 9.2456 14.9047 9.84615H11.9424C12.1311 8.62262 12.1311 7.37738 11.9424 6.15384H14.9047C15.0752 6.75439 15.1614 7.37572 15.1608 8ZM6.3916 11.0769H10.3916C9.99753 12.3681 9.31343 13.5522 8.3916 14.5385C7.47012 13.5519 6.78607 12.368 6.3916 11.0769ZM6.0916 9.84615C5.88033 8.62445 5.88033 7.37555 6.0916 6.15384H10.6978C10.909 7.37555 10.909 8.62445 10.6978 9.84615H6.0916ZM1.62237 8C1.62184 7.37572 1.70805 6.75439 1.87853 6.15384H4.84083C4.65211 7.37738 4.65211 8.62262 4.84083 9.84615H1.87853C1.70805 9.2456 1.62184 8.62428 1.62237 8ZM10.3916 4.92308H6.3916C6.78567 3.63185 7.46977 2.44783 8.3916 1.46154C9.31308 2.44809 9.99713 3.63203 10.3916 4.92308ZM14.417 4.92308H11.677C11.3316 3.65608 10.7496 2.4659 9.9616 1.41538C10.9137 1.6441 11.8051 2.07598 12.5746 2.68143C13.3442 3.28687 13.9737 4.05156 14.4201 4.92308H14.417ZM6.8216 1.41538C6.0336 2.4659 5.45156 3.65608 5.10622 4.92308H2.36314C2.80951 4.05156 3.43904 3.28687 4.20859 2.68143C4.97815 2.07598 5.86952 1.6441 6.8216 1.41538ZM2.36314 11.0769H5.10622C5.45156 12.3439 6.0336 13.5341 6.8216 14.5846C5.86952 14.3559 4.97815 13.924 4.20859 13.3186C3.43904 12.7131 2.80951 11.9484 2.36314 11.0769ZM9.9616 14.5846C10.7496 13.5341 11.3316 12.3439 11.677 11.0769H14.4201C13.9737 11.9484 13.3442 12.7131 12.5746 13.3186C11.8051 13.924 10.9137 14.3559 9.9616 14.5846Z" fill="#7D828B"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_6262_52732">
                                        <rect x="0.391602" width="16" height="16" rx="8" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Connect to Starknet dApps </span>
                    </a>
                </li>
            </ul>

            <div class="mobile-menu__title-wrapper">
                <div class="mobile-menu__menu-title-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7.32969 9.1125C7.47595 9.03138 7.59785 8.91262 7.68275 8.76851C7.76764 8.62441 7.81244 8.46022 7.8125 8.29297V3.18281C7.81252 3.02569 7.77304 2.87108 7.69771 2.7332C7.62237 2.59532 7.51358 2.47858 7.38135 2.39372C7.24912 2.30885 7.09767 2.25859 6.94094 2.24753C6.78421 2.23648 6.62721 2.265 6.48438 2.33047C5.0174 3.00559 3.77435 4.08658 2.90217 5.44567C2.02998 6.80475 1.56511 8.38513 1.5625 10C1.5625 10.2633 1.575 10.5281 1.59922 10.7891C1.61373 10.9441 1.66664 11.0931 1.75317 11.2226C1.83969 11.3521 1.95711 11.4579 2.09481 11.5307C2.23251 11.6034 2.38616 11.6407 2.54188 11.6391C2.69759 11.6376 2.85048 11.5973 2.98672 11.5219L7.32969 9.1125ZM5.9375 4.84844V7.73906L3.50078 9.09062C3.7389 7.41639 4.61126 5.89766 5.9375 4.84844ZM10 1.5625C9.75136 1.5625 9.5129 1.66127 9.33709 1.83709C9.16127 2.0129 9.0625 2.25136 9.0625 2.5V9.49453L3.06094 12.9898C2.95422 13.052 2.86083 13.1346 2.78614 13.233C2.71145 13.3314 2.65693 13.4435 2.62571 13.563C2.5945 13.6825 2.5872 13.807 2.60424 13.9293C2.62128 14.0516 2.66232 14.1694 2.725 14.2758C3.47411 15.5502 4.54489 16.6054 5.8301 17.3357C7.11532 18.0661 8.56986 18.446 10.0481 18.4374C11.5263 18.4287 12.9763 18.0319 14.2529 17.2866C15.5295 16.5413 16.5879 15.4737 17.3221 14.1906C18.0563 12.9076 18.4405 11.4542 18.4363 9.97596C18.4321 8.49772 18.0396 7.04653 17.2981 5.7677C16.5566 4.48888 15.4922 3.42731 14.2113 2.68929C12.9305 1.95126 11.4782 1.5627 10 1.5625ZM10 16.5625C9.01673 16.5598 8.04649 16.3375 7.16019 15.9117C6.27389 15.4859 5.49393 14.8675 4.87734 14.1016L10.4688 10.843C10.611 10.7608 10.7292 10.6428 10.8115 10.5006C10.8937 10.3584 10.9372 10.1971 10.9375 10.0328V3.50391C12.5809 3.73949 14.074 4.58921 15.1158 5.88185C16.1577 7.17449 16.6708 8.81397 16.552 10.4699C16.4331 12.1259 15.691 13.6752 14.4752 14.8058C13.2593 15.9364 11.6602 16.5641 10 16.5625Z" fill="url(#paint0_linear_6262_52737)"></path>
                        <defs>
                            <linearGradient id="paint0_linear_6262_52737" x1="-1.79543" y1="-0.703125" x2="19.2251" y2="16.0816" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#099FC0"></stop>
                                <stop offset="1" stop-color="#8358FF"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <p class="mobile-menu__menu-title">
                    Earn with DeFi </p>
            </div>

            <ul class="mobile-menu__list">
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/stake/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <rect x="0.891602" y="0.5" width="15" height="15" rx="7.5" stroke="#7D828B"></rect>
                                <path d="M12.36 7.76329L12.36 7.76327L8.69325 3.09648L8.69325 3.09647C8.65738 3.05083 8.61161 3.01393 8.5594 2.98856C8.50719 2.96318 8.4499 2.95 8.39185 2.95C8.3338 2.95 8.2765 2.96318 8.22429 2.98856C8.17208 3.01393 8.12631 3.05083 8.09044 3.09647L8.09044 3.09648L4.42367 7.76327L4.42366 7.76329C4.37066 7.8308 4.34185 7.91416 4.34185 8C4.34185 8.08584 4.37066 8.1692 4.42366 8.23671L4.42367 8.23673L8.09044 12.9035L8.12976 12.8726L8.09044 12.9035C8.12631 12.9492 8.17208 12.9861 8.22429 13.0114C8.2765 13.0368 8.3338 13.05 8.39185 13.05C8.4499 13.05 8.50719 13.0368 8.5594 13.0114C8.61161 12.9861 8.65738 12.9492 8.69325 12.9035L8.65394 12.8726L8.69325 12.9035L12.36 8.23673L12.36 8.23671C12.413 8.1692 12.4418 8.08584 12.4418 8C12.4418 7.91416 12.413 7.8308 12.36 7.76329ZM8.77519 4.44154L11.4558 7.85291L8.77519 9.07154V4.44154ZM8.00851 9.07154L5.32791 7.85291L8.00851 4.44154V9.07154ZM5.99821 8.99997L8.00851 9.9135V11.5585L5.99821 8.99997ZM8.77519 11.558V9.91349L10.7854 8.99961L8.77519 11.558Z" fill="#7D828B" stroke="#7D828B" stroke-width="0.1"></path>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Stake your ETH </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/starknet-wallet-for-defi/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">

                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.891602" y="0.5" width="15" height="15" rx="7.5" stroke="#7D828B"></rect>
                                <mask id="path-2-outside-1_6262_52748" maskUnits="userSpaceOnUse" x="2.72461" y="4" width="11" height="8" fill="black">
                                    <rect fill="white" x="2.72461" y="4" width="11" height="8"></rect>
                                    <path d="M13.0578 5.33332V7.99991C13.0578 8.08831 13.0227 8.17309 12.9602 8.2356C12.8977 8.29811 12.8129 8.33323 12.7245 8.33323C12.6361 8.33323 12.5513 8.29811 12.4888 8.2356C12.4263 8.17309 12.3912 8.08831 12.3912 7.99991V6.13788L8.96047 9.56903C8.92951 9.60002 8.89275 9.6246 8.85228 9.64138C8.81182 9.65815 8.76844 9.66678 8.72464 9.66678C8.68084 9.66678 8.63746 9.65815 8.597 9.64138C8.55653 9.6246 8.51977 9.60002 8.48881 9.56903L7.05802 8.13782L4.29394 10.9023C4.2314 10.9649 4.14657 11 4.05812 11C3.96967 11 3.88484 10.9649 3.82229 10.9023C3.75975 10.8398 3.72461 10.7549 3.72461 10.6665C3.72461 10.578 3.75975 10.4932 3.82229 10.4307L6.8222 7.43076C6.85316 7.39977 6.88992 7.37518 6.93038 7.35841C6.97085 7.34163 7.01422 7.333 7.05802 7.333C7.10183 7.333 7.1452 7.34163 7.18567 7.35841C7.22613 7.37518 7.26289 7.39977 7.29385 7.43076L8.72464 8.86196L11.92 5.66665H10.0579C9.96953 5.66665 9.88475 5.63153 9.82224 5.56902C9.75973 5.50651 9.72461 5.42173 9.72461 5.33332C9.72461 5.24492 9.75973 5.16014 9.82224 5.09763C9.88475 5.03512 9.96953 5 10.0579 5H12.7245C12.8129 5 12.8977 5.03512 12.9602 5.09763C13.0227 5.16014 13.0578 5.24492 13.0578 5.33332Z"></path>
                                </mask>
                                <path d="M13.0578 5.33332V7.99991C13.0578 8.08831 13.0227 8.17309 12.9602 8.2356C12.8977 8.29811 12.8129 8.33323 12.7245 8.33323C12.6361 8.33323 12.5513 8.29811 12.4888 8.2356C12.4263 8.17309 12.3912 8.08831 12.3912 7.99991V6.13788L8.96047 9.56903C8.92951 9.60002 8.89275 9.6246 8.85228 9.64138C8.81182 9.65815 8.76844 9.66678 8.72464 9.66678C8.68084 9.66678 8.63746 9.65815 8.597 9.64138C8.55653 9.6246 8.51977 9.60002 8.48881 9.56903L7.05802 8.13782L4.29394 10.9023C4.2314 10.9649 4.14657 11 4.05812 11C3.96967 11 3.88484 10.9649 3.82229 10.9023C3.75975 10.8398 3.72461 10.7549 3.72461 10.6665C3.72461 10.578 3.75975 10.4932 3.82229 10.4307L6.8222 7.43076C6.85316 7.39977 6.88992 7.37518 6.93038 7.35841C6.97085 7.34163 7.01422 7.333 7.05802 7.333C7.10183 7.333 7.1452 7.34163 7.18567 7.35841C7.22613 7.37518 7.26289 7.39977 7.29385 7.43076L8.72464 8.86196L11.92 5.66665H10.0579C9.96953 5.66665 9.88475 5.63153 9.82224 5.56902C9.75973 5.50651 9.72461 5.42173 9.72461 5.33332C9.72461 5.24492 9.75973 5.16014 9.82224 5.09763C9.88475 5.03512 9.96953 5 10.0579 5H12.7245C12.8129 5 12.8977 5.03512 12.9602 5.09763C13.0227 5.16014 13.0578 5.24492 13.0578 5.33332Z" fill="#7D828B"></path>
                                <path d="M13.0578 5.33332V7.99991C13.0578 8.08831 13.0227 8.17309 12.9602 8.2356C12.8977 8.29811 12.8129 8.33323 12.7245 8.33323C12.6361 8.33323 12.5513 8.29811 12.4888 8.2356C12.4263 8.17309 12.3912 8.08831 12.3912 7.99991V6.13788L8.96047 9.56903C8.92951 9.60002 8.89275 9.6246 8.85228 9.64138C8.81182 9.65815 8.76844 9.66678 8.72464 9.66678C8.68084 9.66678 8.63746 9.65815 8.597 9.64138C8.55653 9.6246 8.51977 9.60002 8.48881 9.56903L7.05802 8.13782L4.29394 10.9023C4.2314 10.9649 4.14657 11 4.05812 11C3.96967 11 3.88484 10.9649 3.82229 10.9023C3.75975 10.8398 3.72461 10.7549 3.72461 10.6665C3.72461 10.578 3.75975 10.4932 3.82229 10.4307L6.8222 7.43076C6.85316 7.39977 6.88992 7.37518 6.93038 7.35841C6.97085 7.34163 7.01422 7.333 7.05802 7.333C7.10183 7.333 7.1452 7.34163 7.18567 7.35841C7.22613 7.37518 7.26289 7.39977 7.29385 7.43076L8.72464 8.86196L11.92 5.66665H10.0579C9.96953 5.66665 9.88475 5.63153 9.82224 5.56902C9.75973 5.50651 9.72461 5.42173 9.72461 5.33332C9.72461 5.24492 9.75973 5.16014 9.82224 5.09763C9.88475 5.03512 9.96953 5 10.0579 5H12.7245C12.8129 5 12.8977 5.03512 12.9602 5.09763C13.0227 5.16014 13.0578 5.24492 13.0578 5.33332Z" stroke="#7D828B" stroke-width="0.4" mask="url(#path-2-outside-1_6262_52748)"></path>
                            </svg>
                        </span>
                        <span class="mobile-menu__list-item-link-text">
                            DeFi Dashboard </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/one-click-invest/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.89164 1.50004V1.00004C5.89164 0.867433 5.94432 0.740256 6.03809 0.646488C6.13186 0.55272 6.25903 0.500041 6.39164 0.500041C6.52425 0.500041 6.65143 0.55272 6.7452 0.646488C6.83896 0.740256 6.89164 0.867433 6.89164 1.00004V1.50004C6.89164 1.63265 6.83896 1.75983 6.7452 1.85359C6.65143 1.94736 6.52425 2.00004 6.39164 2.00004C6.25903 2.00004 6.13186 1.94736 6.03809 1.85359C5.94432 1.75983 5.89164 1.63265 5.89164 1.50004ZM1.39164 6.50004H1.89164C2.02425 6.50004 2.15143 6.44736 2.2452 6.35359C2.33896 6.25983 2.39164 6.13265 2.39164 6.00004C2.39164 5.86743 2.33896 5.74026 2.2452 5.64649C2.15143 5.55272 2.02425 5.50004 1.89164 5.50004H1.39164C1.25903 5.50004 1.13186 5.55272 1.03809 5.64649C0.944321 5.74026 0.891643 5.86743 0.891643 6.00004C0.891643 6.13265 0.944321 6.25983 1.03809 6.35359C1.13186 6.44736 1.25903 6.50004 1.39164 6.50004ZM8.16789 2.44754C8.22665 2.47697 8.29063 2.49452 8.35618 2.4992C8.42173 2.50388 8.48756 2.49559 8.5499 2.47481C8.61224 2.45403 8.66988 2.42117 8.71951 2.37809C8.76914 2.33502 8.80979 2.28259 8.83914 2.22379L9.33914 1.22379C9.39849 1.10519 9.40828 0.967872 9.36638 0.842047C9.32448 0.716222 9.23431 0.612196 9.11571 0.552854C8.9971 0.493511 8.85979 0.483714 8.73396 0.525617C8.60814 0.567519 8.50411 0.65769 8.44477 0.776291L7.94477 1.77629C7.91532 1.83501 7.89773 1.89896 7.89301 1.96448C7.88828 2.03 7.89652 2.09581 7.91724 2.15815C7.93796 2.22049 7.97076 2.27813 8.01377 2.32779C8.05678 2.37744 8.10915 2.41814 8.16789 2.44754ZM2.16789 7.55317L1.16789 8.05317C1.04929 8.11251 0.959121 8.21653 0.917218 8.34236C0.875316 8.46818 0.885113 8.6055 0.944455 8.7241C1.0038 8.84271 1.10782 8.93288 1.23365 8.97478C1.35947 9.01668 1.49679 9.00688 1.61539 8.94754L2.61539 8.44754C2.67412 8.41816 2.72648 8.37749 2.76949 8.32788C2.8125 8.27826 2.84532 8.22065 2.86607 8.15835C2.88682 8.09605 2.89509 8.03027 2.89042 7.96477C2.88574 7.89927 2.86821 7.83533 2.83883 7.7766C2.80945 7.71788 2.76878 7.66551 2.71916 7.6225C2.66954 7.57949 2.61194 7.54668 2.54964 7.52593C2.48733 7.50518 2.42156 7.49691 2.35606 7.50158C2.29056 7.50625 2.22662 7.52378 2.16789 7.55317ZM14.0985 11.5C14.1914 11.5929 14.2651 11.7032 14.3153 11.8245C14.3656 11.9458 14.3915 12.0759 14.3915 12.2072C14.3915 12.3386 14.3656 12.4686 14.3153 12.59C14.2651 12.7113 14.1914 12.8216 14.0985 12.9144L13.306 13.7069C13.2132 13.7998 13.1029 13.8735 12.9816 13.9237C12.8602 13.974 12.7302 13.9999 12.5988 13.9999C12.4675 13.9999 12.3374 13.974 12.2161 13.9237C12.0948 13.8735 11.9845 13.7998 11.8916 13.7069L8.68539 10.5L7.57914 13.3807C7.57914 13.3869 7.57414 13.3938 7.57102 13.4007C7.4945 13.5791 7.36718 13.731 7.20492 13.8376C7.04267 13.9442 6.85264 14.0007 6.65852 14H6.60914C6.40669 13.9915 6.21174 13.9209 6.05067 13.798C5.8896 13.675 5.77016 13.5056 5.70852 13.3125L2.44164 3.30754C2.38556 3.13256 2.37877 2.94552 2.42202 2.76694C2.46527 2.58836 2.55689 2.42514 2.68682 2.29522C2.81675 2.16529 2.97996 2.07367 3.15854 2.03042C3.33712 1.98717 3.52417 1.99396 3.69914 2.05004L13.7041 5.31692C13.8954 5.38088 14.0628 5.50116 14.1844 5.66196C14.3061 5.82277 14.3763 6.01659 14.3858 6.218C14.3953 6.41941 14.3437 6.61899 14.2378 6.79056C14.1319 6.96213 13.9766 7.09768 13.7923 7.17942L13.7723 7.18754L10.8916 8.29317L14.0985 11.5ZM13.3916 12.2069L10.1848 9.00004C10.0693 8.88482 9.98384 8.74312 9.93573 8.58729C9.88762 8.43146 9.87835 8.26622 9.90873 8.10599C9.93911 7.94575 10.0082 7.79538 10.11 7.66797C10.2119 7.54057 10.3433 7.44001 10.4929 7.37504L10.5129 7.36629L13.3848 6.26379L3.39164 3.00004L6.65414 12.9913L7.75727 10.1163C7.75727 10.1094 7.76227 10.1025 7.76539 10.0957C7.83038 9.94619 7.93092 9.81486 8.05826 9.71312C8.1856 9.61138 8.33588 9.54231 8.49602 9.51192C8.55786 9.50045 8.62062 9.49459 8.68352 9.49442C8.94847 9.49471 9.20248 9.60013 9.38977 9.78754L12.5985 13L13.3916 12.2069Z" fill="#7D828B" />
                            </svg>


                        </span>
                        <span class="mobile-menu__list-item-link-text">
                            One Click Invest </span>
                    </a>
                </li>
            </ul>
            <div class="mobile-menu__title-wrapper">
                <div class="mobile-menu__menu-title-icon">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7.32969 9.1125C7.47595 9.03138 7.59785 8.91262 7.68275 8.76851C7.76764 8.62441 7.81244 8.46022 7.8125 8.29297V3.18281C7.81252 3.02569 7.77304 2.87108 7.69771 2.7332C7.62237 2.59532 7.51358 2.47858 7.38135 2.39372C7.24912 2.30885 7.09767 2.25859 6.94094 2.24753C6.78421 2.23648 6.62721 2.265 6.48438 2.33047C5.0174 3.00559 3.77435 4.08658 2.90217 5.44567C2.02998 6.80475 1.56511 8.38513 1.5625 10C1.5625 10.2633 1.575 10.5281 1.59922 10.7891C1.61373 10.9441 1.66664 11.0931 1.75317 11.2226C1.83969 11.3521 1.95711 11.4579 2.09481 11.5307C2.23251 11.6034 2.38616 11.6407 2.54188 11.6391C2.69759 11.6376 2.85048 11.5973 2.98672 11.5219L7.32969 9.1125ZM5.9375 4.84844V7.73906L3.50078 9.09062C3.7389 7.41639 4.61126 5.89766 5.9375 4.84844ZM10 1.5625C9.75136 1.5625 9.5129 1.66127 9.33709 1.83709C9.16127 2.0129 9.0625 2.25136 9.0625 2.5V9.49453L3.06094 12.9898C2.95422 13.052 2.86083 13.1346 2.78614 13.233C2.71145 13.3314 2.65693 13.4435 2.62571 13.563C2.5945 13.6825 2.5872 13.807 2.60424 13.9293C2.62128 14.0516 2.66232 14.1694 2.725 14.2758C3.47411 15.5502 4.54489 16.6054 5.8301 17.3357C7.11532 18.0661 8.56986 18.446 10.0481 18.4374C11.5263 18.4287 12.9763 18.0319 14.2529 17.2866C15.5295 16.5413 16.5879 15.4737 17.3221 14.1906C18.0563 12.9076 18.4405 11.4542 18.4363 9.97596C18.4321 8.49772 18.0396 7.04653 17.2981 5.7677C16.5566 4.48888 15.4922 3.42731 14.2113 2.68929C12.9305 1.95126 11.4782 1.5627 10 1.5625ZM10 16.5625C9.01673 16.5598 8.04649 16.3375 7.16019 15.9117C6.27389 15.4859 5.49393 14.8675 4.87734 14.1016L10.4688 10.843C10.611 10.7608 10.7292 10.6428 10.8115 10.5006C10.8937 10.3584 10.9372 10.1971 10.9375 10.0328V3.50391C12.5809 3.73949 14.074 4.58921 15.1158 5.88185C16.1577 7.17449 16.6708 8.81397 16.552 10.4699C16.4331 12.1259 15.691 13.6752 14.4752 14.8058C13.2593 15.9364 11.6602 16.5641 10 16.5625Z" fill="url(#paint0_linear_6262_52737)"></path>
                        <defs>
                            <linearGradient id="paint0_linear_6262_52737" x1="-1.79543" y1="-0.703125" x2="19.2251" y2="16.0816" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#099FC0"></stop>
                                <stop offset="1" stop-color="#8358FF"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <a href="<?php echo site_url(); ?>/dapps-explorer/">

                    <p class="mobile-menu__menu-title">
                        Explore </p>
                </a>

            </div>

            <div class="mobile-menu__title-wrapper">
                <div class="mobile-menu__menu-title-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M8.4375 6.5625C8.4375 6.31527 8.51081 6.0736 8.64817 5.86804C8.78552 5.66248 8.98074 5.50226 9.20915 5.40765C9.43756 5.31304 9.68889 5.28829 9.93137 5.33652C10.1738 5.38475 10.3966 5.5038 10.5714 5.67862C10.7462 5.85343 10.8653 6.07616 10.9135 6.31864C10.9617 6.56111 10.937 6.81245 10.8424 7.04085C10.7477 7.26926 10.5875 7.46449 10.382 7.60184C10.1764 7.73919 9.93473 7.8125 9.6875 7.8125C9.35598 7.8125 9.03804 7.6808 8.80362 7.44638C8.5692 7.21196 8.4375 6.89402 8.4375 6.5625ZM18.4375 10C18.4375 11.6688 17.9427 13.3001 17.0155 14.6876C16.0884 16.0752 14.7706 17.1566 13.2289 17.7952C11.6871 18.4338 9.99064 18.6009 8.35393 18.2754C6.71721 17.9498 5.2138 17.1462 4.03379 15.9662C2.85379 14.7862 2.05019 13.2828 1.72463 11.6461C1.39907 10.0094 1.56616 8.31286 2.20477 6.77111C2.84338 5.22936 3.92484 3.9116 5.31238 2.98448C6.69992 2.05735 8.33122 1.5625 10 1.5625C12.237 1.56498 14.3817 2.45473 15.9635 4.03653C17.5453 5.61833 18.435 7.763 18.4375 10ZM16.5625 10C16.5625 8.70206 16.1776 7.43327 15.4565 6.35407C14.7354 5.27487 13.7105 4.43374 12.5114 3.93704C11.3122 3.44034 9.99272 3.31038 8.71972 3.5636C7.44672 3.81681 6.2774 4.44183 5.35962 5.35961C4.44183 6.27739 3.81682 7.44672 3.5636 8.71972C3.31038 9.99272 3.44034 11.3122 3.93704 12.5114C4.43374 13.7105 5.27488 14.7354 6.35407 15.4565C7.43327 16.1776 8.70206 16.5625 10 16.5625C11.7399 16.5606 13.408 15.8686 14.6383 14.6383C15.8686 13.408 16.5606 11.7399 16.5625 10ZM10.9375 12.8656V10.3125C10.9375 9.8981 10.7729 9.50067 10.4799 9.20765C10.1868 8.91462 9.7894 8.75 9.375 8.75C9.1536 8.74967 8.93923 8.82771 8.76986 8.97029C8.60048 9.11287 8.48703 9.31079 8.4496 9.52901C8.41217 9.74722 8.45318 9.97164 8.56536 10.1625C8.67754 10.3534 8.85365 10.4984 9.0625 10.5719V13.125C9.0625 13.5394 9.22712 13.9368 9.52015 14.2299C9.81318 14.5229 10.2106 14.6875 10.625 14.6875C10.8464 14.6878 11.0608 14.6098 11.2302 14.4672C11.3995 14.3246 11.513 14.1267 11.5504 13.9085C11.5878 13.6903 11.5468 13.4659 11.4346 13.275C11.3225 13.0841 11.1464 12.9391 10.9375 12.8656Z" fill="url(#paint0_linear_6262_52755)"></path>
                        <defs>
                            <linearGradient id="paint0_linear_6262_52755" x1="-1.79566" y1="-0.703125" x2="19.2252" y2="16.0829" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#099FC0"></stop>
                                <stop offset="1" stop-color="#8358FF"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <p class="mobile-menu__menu-title">
                    Support </p>
            </div>

            <ul class="mobile-menu__list">
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/faq/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_6262_53011)">
                                    <path d="M11.9333 6.375C11.9333 7.9099 10.6724 9.1901 9.01664 9.45104V9.5C9.01664 9.66576 8.95079 9.82473 8.83358 9.94194C8.71637 10.0592 8.5574 10.125 8.39164 10.125C8.22588 10.125 8.06691 10.0592 7.9497 9.94194C7.83249 9.82473 7.76664 9.66576 7.76664 9.5V8.875C7.76664 8.70924 7.83249 8.55027 7.9497 8.43306C8.06691 8.31585 8.22588 8.25 8.39164 8.25C9.65518 8.25 10.6833 7.40885 10.6833 6.375C10.6833 5.34115 9.65518 4.5 8.39164 4.5C7.1281 4.5 6.09998 5.34115 6.09998 6.375C6.09998 6.54076 6.03413 6.69973 5.91692 6.81694C5.79971 6.93415 5.64074 7 5.47498 7C5.30922 7 5.15024 6.93415 5.03303 6.81694C4.91582 6.69973 4.84998 6.54076 4.84998 6.375C4.84998 4.65208 6.43852 3.25 8.39164 3.25C10.3448 3.25 11.9333 4.65208 11.9333 6.375ZM8.39164 11.1667C8.18562 11.1667 7.98422 11.2278 7.81292 11.3422C7.64162 11.4567 7.50811 11.6194 7.42927 11.8097C7.35043 12 7.3298 12.2095 7.36999 12.4116C7.41018 12.6136 7.50939 12.7992 7.65507 12.9449C7.80075 13.0906 7.98636 13.1898 8.18842 13.23C8.39049 13.2702 8.59993 13.2495 8.79027 13.1707C8.98061 13.0919 9.1433 12.9584 9.25776 12.7871C9.37222 12.6158 9.43331 12.4144 9.43331 12.2083C9.43331 11.9321 9.32356 11.6671 9.12821 11.4718C8.93286 11.2764 8.66791 11.1667 8.39164 11.1667Z" fill="#7D828B"></path>
                                </g>
                                <rect x="0.891602" y="0.5" width="15" height="15" rx="7.5" stroke="#7D828B"></rect>
                                <defs>
                                    <clipPath id="clip0_6262_53011">
                                        <rect x="0.391602" width="16" height="16" rx="8" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <span class="mobile-menu__list-item-link-text">
                            FAQ </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="https://discord.com/invite/9Ks7V5DN9z" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M13.9451 3.01557C12.8939 2.5343 11.7842 2.19287 10.6442 2C10.4882 2.27886 10.3471 2.56577 10.2214 2.85952C9.0071 2.67655 7.77227 2.67655 6.55801 2.85952C6.43224 2.5658 6.29109 2.27889 6.13517 2C4.99449 2.1945 3.884 2.53674 2.83173 3.01809C0.742698 6.10885 0.176394 9.12284 0.459546 12.094C1.68294 12.9979 3.05226 13.6854 4.50799 14.1265C4.83578 13.6856 5.12583 13.2179 5.37506 12.7283C4.90167 12.5515 4.44477 12.3334 4.00964 12.0764C4.12416 11.9934 4.23616 11.9078 4.34439 11.8247C5.61052 12.4202 6.99243 12.7289 8.39157 12.7289C9.79072 12.7289 11.1726 12.4202 12.4388 11.8247C12.5482 11.9141 12.6602 11.9997 12.7735 12.0764C12.3375 12.3338 11.8798 12.5523 11.4056 12.7296C11.6545 13.2189 11.9446 13.6862 12.2726 14.1265C13.7296 13.6871 15.1 13 16.3236 12.0953C16.6558 8.64966 15.756 5.66336 13.9451 3.01557ZM5.73372 10.2668C4.94467 10.2668 4.29279 9.55072 4.29279 8.6698C4.29279 7.78888 4.92202 7.06653 5.7312 7.06653C6.54039 7.06653 7.18723 7.78888 7.17339 8.6698C7.15955 9.55072 6.53787 10.2668 5.73372 10.2668ZM11.0494 10.2668C10.2591 10.2668 9.60975 9.55072 9.60975 8.6698C9.60975 7.78888 10.239 7.06653 11.0494 7.06653C11.8599 7.06653 12.5017 7.78888 12.4878 8.6698C12.474 9.55072 11.8536 10.2668 11.0494 10.2668Z" fill="#7D828B"></path>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Discord Support </span>
                    </a>
                </li>
            </ul>
            <div class="mobile-menu__title-wrapper">
                <div class="mobile-menu__menu-title-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                        <path d="M10.825 1.65554C10.8545 1.70691 10.8155 1.77041 10.7574 1.77041C9.58231 1.77041 8.62705 2.72662 8.60462 3.91484C8.20224 3.83763 7.7853 3.83182 7.37342 3.90315C7.34497 2.72036 6.39213 1.77041 5.22086 1.77041C5.16277 1.77041 5.1237 1.70686 5.15323 1.65546C5.72207 0.665318 6.77909 0 7.98909 0C9.19913 0 10.2562 0.665357 10.825 1.65554Z" fill="url(#paint0_linear_6262_52772)"></path>
                        <path d="M14.3054 9.0044C14.7051 9.12881 15.0818 8.76774 14.9309 8.36748C13.8099 5.39291 10.4919 4.17429 7.973 4.17429C5.44926 4.17429 2.05731 5.43231 1.00927 8.38602C0.868169 8.78369 1.24382 9.13287 1.63759 9.00885L7.67391 7.1078C7.84816 7.05293 8.03435 7.05261 8.20877 7.1069L14.3054 9.0044Z" fill="url(#paint1_linear_6262_52772)"></path>
                        <path d="M0.95035 9.57705L7.67899 7.47967C7.85219 7.42568 8.03705 7.42553 8.21033 7.47925L14.9813 9.57808C15.5467 9.75334 15.9336 10.2886 15.9336 10.8956V17.2193C15.9074 18.7628 14.5582 20 13.0569 20H10.5632C10.3167 20 10.1171 19.7951 10.1171 19.5417V17.3246C10.1171 16.4516 10.6198 15.6614 11.3977 15.3117C12.4405 14.8429 13.6741 14.2087 13.9062 12.9362C13.981 12.5255 13.7205 12.1294 13.3219 12.0479C12.314 11.842 11.1967 11.9216 10.2518 12.3559C9.17912 12.849 8.89853 13.6692 8.79465 14.7708L8.66875 15.9575C8.63027 16.3202 8.29942 16.5981 7.9446 16.5981C7.57754 16.5981 7.30231 16.3107 7.2625 15.9355L7.13893 14.7708C7.04995 13.8273 6.88865 12.9107 5.93959 12.4744C4.857 11.9767 3.76906 11.8115 2.6117 12.0479C2.21311 12.1294 1.95253 12.5255 2.02743 12.9362C2.26148 14.2198 3.48543 14.8394 4.53588 15.3117C5.31379 15.6614 5.81651 16.4516 5.81651 17.3246V19.5413C5.81651 19.7947 5.61696 20 5.37047 20H2.87673C1.37538 20 0.0262204 18.7628 0 17.2193V10.894C0 10.2878 0.385934 9.75298 0.95035 9.57705Z" fill="url(#paint2_linear_6262_52772)"></path>
                        <defs>
                            <linearGradient id="paint0_linear_6262_52772" x1="-3.17081" y1="-2.68518" x2="19.9687" y2="12.0358" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#099FC0"></stop>
                                <stop offset="1" stop-color="#8358FF"></stop>
                            </linearGradient>
                            <linearGradient id="paint1_linear_6262_52772" x1="-3.17081" y1="-2.68518" x2="19.9687" y2="12.0358" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#099FC0"></stop>
                                <stop offset="1" stop-color="#8358FF"></stop>
                            </linearGradient>
                            <linearGradient id="paint2_linear_6262_52772" x1="-3.17081" y1="-2.68518" x2="19.9687" y2="12.0358" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#099FC0"></stop>
                                <stop offset="1" stop-color="#8358FF"></stop>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <p class="mobile-menu__menu-title">
                    Company </p>
            </div>

            <ul class="mobile-menu__list">
                <li class="mobile-menu__list-item">
                    <a href="<?php echo site_url(); ?>/blog/" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M13.8916 2.5H2.8916C2.62639 2.5 2.37203 2.60536 2.18449 2.79289C1.99696 2.98043 1.8916 3.23478 1.8916 3.5V12.5C1.8916 12.7652 1.99696 13.0196 2.18449 13.2071C2.37203 13.3946 2.62639 13.5 2.8916 13.5H13.8916C14.1568 13.5 14.4112 13.3946 14.5987 13.2071C14.7862 13.0196 14.8916 12.7652 14.8916 12.5V3.5C14.8916 3.23478 14.7862 2.98043 14.5987 2.79289C14.4112 2.60536 14.1568 2.5 13.8916 2.5ZM13.8916 12.5H2.8916V3.5H13.8916V12.5ZM11.8916 6C11.8916 6.13261 11.8389 6.25979 11.7452 6.35355C11.6514 6.44732 11.5242 6.5 11.3916 6.5H5.3916C5.25899 6.5 5.13182 6.44732 5.03805 6.35355C4.94428 6.25979 4.8916 6.13261 4.8916 6C4.8916 5.86739 4.94428 5.74021 5.03805 5.64645C5.13182 5.55268 5.25899 5.5 5.3916 5.5H11.3916C11.5242 5.5 11.6514 5.55268 11.7452 5.64645C11.8389 5.74021 11.8916 5.86739 11.8916 6ZM11.8916 8C11.8916 8.13261 11.8389 8.25979 11.7452 8.35355C11.6514 8.44732 11.5242 8.5 11.3916 8.5H5.3916C5.25899 8.5 5.13182 8.44732 5.03805 8.35355C4.94428 8.25979 4.8916 8.13261 4.8916 8C4.8916 7.86739 4.94428 7.74021 5.03805 7.64645C5.13182 7.55268 5.25899 7.5 5.3916 7.5H11.3916C11.5242 7.5 11.6514 7.55268 11.7452 7.64645C11.8389 7.74021 11.8916 7.86739 11.8916 8ZM11.8916 10C11.8916 10.1326 11.8389 10.2598 11.7452 10.3536C11.6514 10.4473 11.5242 10.5 11.3916 10.5H5.3916C5.25899 10.5 5.13182 10.4473 5.03805 10.3536C4.94428 10.2598 4.8916 10.1326 4.8916 10C4.8916 9.86739 4.94428 9.74021 5.03805 9.64645C5.13182 9.55268 5.25899 9.5 5.3916 9.5H11.3916C11.5242 9.5 11.6514 9.55268 11.7452 9.64645C11.8389 9.74021 11.8916 9.86739 11.8916 10Z" fill="#7D828B"></path>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Blog </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="https://braavos.notion.site/4664cacfb7124cd0bf8c4ff8b85e3d27" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <g clip-path="url(#clip0_6262_52787)">
                                    <path d="M15.8684 2.99267C15.8613 2.87035 15.8095 2.75491 15.7228 2.66827C15.6362 2.58163 15.5207 2.52982 15.3984 2.52267C12.1634 2.33517 9.56591 3.31892 8.44966 5.16142C7.71216 6.37955 7.71341 7.85892 8.43966 9.27017C8.02629 9.76227 7.72418 10.3379 7.55404 10.9577L6.53716 9.93705C7.02591 8.91642 7.00716 7.85267 6.47466 6.96892C5.64966 5.60705 3.74529 4.87705 1.38091 5.0158C1.25859 5.02294 1.14315 5.07475 1.05651 5.1614C0.969868 5.24804 0.918057 5.36348 0.910914 5.4858C0.771539 7.85017 1.50216 9.75455 2.86404 10.5795C3.31345 10.8541 3.82988 10.9995 4.35654 10.9995C4.86773 10.9933 5.37096 10.8721 5.82904 10.6452L7.39154 12.2077V13.9995C7.39154 14.1322 7.44422 14.2593 7.53799 14.3531C7.63175 14.4469 7.75893 14.4995 7.89154 14.4995C8.02415 14.4995 8.15132 14.4469 8.24509 14.3531C8.33886 14.2593 8.39154 14.1322 8.39154 13.9995V12.1564C8.38931 11.361 8.66 10.5889 9.15841 9.96892C9.80151 10.305 10.5147 10.4849 11.2403 10.4939C11.9418 10.4962 12.6302 10.3046 13.2297 9.94018C15.0722 8.82518 16.0584 6.22767 15.8684 2.99267ZM3.37966 9.72455C2.42091 9.14393 1.87841 7.76955 1.89154 5.99955C3.66154 5.98455 5.03591 6.52892 5.61654 7.48767C5.91966 7.98767 5.96904 8.5708 5.77029 9.17142L4.24466 7.6458C4.15013 7.55599 4.02426 7.50666 3.89388 7.50833C3.7635 7.51 3.63893 7.56253 3.54672 7.65474C3.45452 7.74694 3.40199 7.87151 3.40032 8.00189C3.39865 8.13227 3.44798 8.25814 3.53779 8.35267L5.06341 9.8783C4.46279 10.077 3.88029 10.0277 3.37966 9.72455ZM12.7115 9.0858C11.874 9.59268 10.8897 9.63143 9.88966 9.2108L13.2453 5.85455C13.3351 5.76002 13.3844 5.63414 13.3828 5.50376C13.3811 5.37338 13.3286 5.24881 13.2364 5.15661C13.1442 5.06441 13.0196 5.01187 12.8892 5.01021C12.7588 5.00854 12.6329 5.05787 12.5384 5.14768L9.18216 8.49955C8.75966 7.49955 8.79779 6.51455 9.30716 5.67767C10.1784 4.24017 12.2447 3.43893 14.8903 3.5008C14.9503 6.1458 14.1503 8.21455 12.7115 9.0858Z" fill="#7D828B"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_6262_52787">
                                        <rect width="16" height="16" fill="white" transform="translate(0.391602)"></rect>
                                    </clipPath>
                                </defs>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Careers </span>
                    </a>
                </li>
                <li class="mobile-menu__list-item">
                    <a href="https://drive.google.com/drive/folders/1BwM7WhK4urO3n8sp3RqxFCr3tSQ1Y9Yi" class="mobile-menu__list-item-link">
                        <span class="mobile-menu__list-item-link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <g clip-path="url(#clip0_6262_52792)">
                                    <path d="M8.3916 0C6.80935 0 5.26264 0.469192 3.94704 1.34824C2.63145 2.22729 1.60607 3.47672 1.00057 4.93853C0.395068 6.40034 0.236641 8.00887 0.545323 9.56072C0.854005 11.1126 1.61593 12.538 2.73475 13.6569C3.85357 14.7757 5.27903 15.5376 6.83088 15.8463C8.38273 16.155 9.99126 15.9965 11.4531 15.391C12.9149 14.7855 14.1643 13.7602 15.0434 12.4446C15.9224 11.129 16.3916 9.58225 16.3916 8C16.3894 5.87895 15.5458 3.84542 14.046 2.34562C12.5462 0.845814 10.5126 0.00223986 8.3916 0ZM8.3916 14.7692C7.05278 14.7692 5.74401 14.3722 4.63082 13.6284C3.51763 12.8846 2.65 11.8274 2.13765 10.5905C1.6253 9.35356 1.49125 7.99249 1.75244 6.67939C2.01364 5.36629 2.65834 4.16012 3.60504 3.21343C4.55173 2.26674 5.75789 1.62203 7.07099 1.36084C8.38409 1.09965 9.74516 1.2337 10.9821 1.74605C12.219 2.25839 13.2762 3.12602 14.02 4.23922C14.7638 5.35241 15.1608 6.66117 15.1608 8C15.1588 9.79468 14.445 11.5153 13.1759 12.7843C11.9069 14.0534 10.1863 14.7672 8.3916 14.7692ZM5.93007 8C5.93007 8.51663 6.09262 9.02017 6.3947 9.43928C6.69678 9.8584 7.12308 10.1718 7.6132 10.3352C8.10332 10.4986 8.63242 10.5036 9.12555 10.3496C9.61869 10.1955 10.0509 9.89023 10.3608 9.47692C10.4589 9.34635 10.6047 9.26007 10.7664 9.23706C10.928 9.21406 11.0922 9.2562 11.2228 9.35423C11.3533 9.45226 11.4396 9.59814 11.4626 9.75978C11.4856 9.92142 11.4435 10.0856 11.3454 10.2162C10.8804 10.8359 10.2321 11.2937 9.49242 11.5246C8.75275 11.7555 7.95919 11.7478 7.22411 11.5027C6.48904 11.2575 5.84972 10.7874 5.39668 10.1587C4.94365 9.5301 4.69987 8.77487 4.69987 8C4.69987 7.22513 4.94365 6.4699 5.39668 5.84126C5.84972 5.21263 6.48904 4.74245 7.22411 4.49732C7.95919 4.25219 8.75275 4.24453 9.49242 4.47543C10.2321 4.70632 10.8804 5.16407 11.3454 5.78384C11.394 5.8485 11.4293 5.92207 11.4494 6.00038C11.4695 6.07868 11.474 6.16018 11.4626 6.24022C11.4512 6.32025 11.4242 6.39726 11.383 6.46685C11.3419 6.53643 11.2874 6.59723 11.2228 6.64577C11.1581 6.69431 11.0845 6.72964 11.0062 6.74974C10.9279 6.76984 10.8464 6.77432 10.7664 6.76293C10.6863 6.75154 10.6093 6.72449 10.5398 6.68334C10.4702 6.64218 10.4094 6.58773 10.3608 6.52308C10.0509 6.10977 9.61869 5.80447 9.12555 5.65043C8.63242 5.49638 8.10332 5.5014 7.6132 5.66478C7.12308 5.82815 6.69678 6.1416 6.3947 6.56071C6.09262 6.97983 5.93007 7.48336 5.93007 8Z" fill="#7D828B"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_6262_52792">
                                        <rect width="16" height="16" fill="white" transform="translate(0.391602)"></rect>
                                    </clipPath>
                                </defs>
                            </svg> </span>
                        <span class="mobile-menu__list-item-link-text">
                            Media Kit </span>
                    </a>
                </li>
            </ul>


        </div>
        <div class="mobile-menu__download-link-wrapper">
            <a href="<?php echo site_url(); ?>/download-braavos-wallet/" class="mobile-menu__download-link">
                <span class="mobile-menu__download-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                        <path d="M16.8996 10.6751V15.3562C16.8996 15.589 16.8071 15.8122 16.6425 15.9768C16.4779 16.1414 16.2546 16.2339 16.0218 16.2339H3.14871C2.91593 16.2339 2.69268 16.1414 2.52807 15.9768C2.36347 15.8122 2.271 15.589 2.271 15.3562V10.6751C2.271 10.4423 2.36347 10.219 2.52807 10.0544C2.69268 9.88981 2.91593 9.79734 3.14871 9.79734C3.38149 9.79734 3.60474 9.88981 3.76935 10.0544C3.93395 10.219 4.02642 10.4423 4.02642 10.6751V14.4785H15.1441V10.6751C15.1441 10.4423 15.2366 10.219 15.4012 10.0544C15.5658 9.88981 15.7891 9.79734 16.0218 9.79734C16.2546 9.79734 16.4779 9.88981 16.6425 10.0544C16.8071 10.219 16.8996 10.4423 16.8996 10.6751ZM8.96429 11.296C9.04584 11.3779 9.14273 11.4428 9.24942 11.4871C9.3561 11.5314 9.47049 11.5542 9.58601 11.5542C9.70153 11.5542 9.81591 11.5314 9.9226 11.4871C10.0293 11.4428 10.1262 11.3779 10.2077 11.296L13.1334 8.37032C13.2983 8.20543 13.391 7.9818 13.391 7.74861C13.391 7.51542 13.2983 7.29178 13.1334 7.1269C12.9685 6.96201 12.7449 6.86937 12.5117 6.86937C12.2785 6.86937 12.0549 6.96201 11.89 7.1269L10.463 8.55391V2.48306C10.463 2.25028 10.3705 2.02703 10.2059 1.86242C10.0413 1.69782 9.81806 1.60535 9.58528 1.60535C9.35249 1.60535 9.12924 1.69782 8.96464 1.86242C8.80003 2.02703 8.70756 2.25028 8.70756 2.48306V8.55391L7.28055 7.12836C7.1989 7.04671 7.10197 6.98195 6.9953 6.93776C6.88863 6.89358 6.77429 6.87084 6.65883 6.87084C6.42564 6.87084 6.20201 6.96347 6.03712 7.12836C5.95547 7.21 5.89071 7.30693 5.84652 7.4136C5.80234 7.52028 5.7796 7.63461 5.7796 7.75007C5.7796 7.98326 5.87223 8.2069 6.03712 8.37179L8.96429 11.296Z" fill="white"></path>
                    </svg>
                </span>
                <span class="mobile-menu__download-link-text">
                    Download
                </span>
            </a>
        </div>
    </div>

    <header class="main-header">
        <div class="main-header__container">
            <div class="main-header__logo-wrapper">
                <a href="<?php echo site_url(); ?>" class="main-header__logo main-header__logo--dark" id="logo-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 43" fill="none">
                        <path d="M21.2529 3.61718C21.3108 3.71803 21.2342 3.8427 21.1202 3.8427C18.8131 3.8427 16.9376 5.72004 16.8936 8.05288C16.1036 7.90129 15.285 7.8899 14.4763 8.02993C14.4205 5.70774 12.5498 3.8427 10.2502 3.8427C10.1362 3.8427 10.0594 3.71793 10.1174 3.61701C11.2342 1.67305 13.3095 0.366821 15.6851 0.366821C18.0608 0.366821 20.1361 1.67313 21.2529 3.61718Z" fill="white"></path>
                        <path d="M28.086 18.0453C28.8708 18.2895 29.6102 17.5807 29.3141 16.7948C27.1131 10.9548 20.5988 8.56227 15.6535 8.56227C10.6986 8.56227 4.03914 11.0322 1.98151 16.8312C1.70449 17.612 2.44201 18.2975 3.21511 18.054L15.0663 14.3217C15.4084 14.2139 15.774 14.2133 16.1164 14.3199L28.086 18.0453Z" fill="white"></path>
                        <path d="M1.86584 19.1696L15.0763 15.0518C15.4163 14.9458 15.7793 14.9455 16.1195 15.0509L29.4129 19.1716C30.523 19.5157 31.2826 20.5667 31.2826 21.7583V34.1736C31.2312 37.2041 28.5823 39.6331 25.6347 39.6331H20.7389C20.2549 39.6331 19.863 39.2308 19.863 38.7334V34.3805C19.863 32.6665 20.85 31.1151 22.3773 30.4285C24.4246 29.508 26.8466 28.2631 27.3022 25.7647C27.4492 24.9584 26.9376 24.1806 26.1551 24.0207C24.1763 23.6165 21.9826 23.7726 20.1275 24.6254C18.0215 25.5935 17.4706 27.2038 17.2667 29.3666L17.0195 31.6965C16.9439 32.4086 16.2944 32.9541 15.5978 32.9541C14.8771 32.9541 14.3367 32.39 14.2586 31.6533L14.016 29.3666C13.8413 27.5141 13.5246 25.7146 11.6613 24.858C9.53582 23.881 7.39985 23.5565 5.12759 24.0207C4.34503 24.1806 3.83344 24.9584 3.98048 25.7647C4.44 28.2848 6.84299 29.5013 8.90536 30.4285C10.4327 31.1151 11.4196 32.6665 11.4196 34.3805V38.7326C11.4196 39.23 11.0279 39.6331 10.5439 39.6331H5.64792C2.7003 39.6331 0.0514789 37.2041 0 34.1736V21.7551C0 20.565 0.75771 19.515 1.86584 19.1696Z" fill="white"></path>
                        <path d="M41.0833 34.8391V12.9587H50.9831C53.3387 12.9587 55.1562 13.4657 56.4356 14.4795C57.7149 15.4933 58.3546 16.8796 58.3546 18.6383C58.3546 19.9418 57.9688 21.0488 57.1971 21.9592C56.4457 22.8696 55.4101 23.4799 54.0901 23.7903V23.2937C55.6334 23.5627 56.8214 24.1627 57.654 25.0938C58.5069 26.0042 58.9334 27.1939 58.9334 28.6629C58.9334 30.6079 58.2531 32.1286 56.8925 33.2252C55.5522 34.3011 53.6941 34.8391 51.3181 34.8391H41.0833ZM45.6219 31.2389H50.7394C51.9172 31.2389 52.8209 31.0113 53.4504 30.5561C54.0799 30.1009 54.3947 29.3768 54.3947 28.3836C54.3947 27.3698 54.0799 26.6456 53.4504 26.2111C52.8209 25.7559 51.9172 25.5283 50.7394 25.5283H45.6219V31.2389ZM45.6219 21.9592H50.1302C51.3689 21.9592 52.2827 21.7316 52.8716 21.2764C53.4606 20.8212 53.755 20.1384 53.755 19.228C53.755 18.3383 53.4606 17.6659 52.8716 17.2107C52.2827 16.7555 51.3689 16.5279 50.1302 16.5279H45.6219V21.9592Z" fill="white"></path>
                        <path d="M61.9578 34.8391V23.2627C61.9578 22.5799 61.9375 21.8868 61.8969 21.1833C61.8766 20.4798 61.8258 19.7867 61.7446 19.1039H66.1614L66.6793 23.6972H65.9787C66.1817 22.5799 66.5067 21.6592 66.9534 20.935C67.4205 20.2108 67.9891 19.6729 68.6592 19.3211C69.3497 18.9694 70.1315 18.7935 71.0047 18.7935C71.3906 18.7935 71.6952 18.8142 71.9186 18.8556C72.1419 18.8763 72.3653 18.928 72.5887 19.0108L72.5582 23.1385C72.1318 22.9523 71.7662 22.8385 71.4616 22.7971C71.1773 22.7351 70.8118 22.704 70.365 22.704C69.5121 22.704 68.8014 22.8696 68.2328 23.2006C67.6845 23.5317 67.2682 24.0179 66.9839 24.6593C66.7199 25.3007 66.5879 26.0766 66.5879 26.987V34.8391H61.9578Z" fill="white"></path>
                        <path d="M80.3639 35.1805C79.0236 35.1805 77.8457 34.8494 76.8304 34.1873C75.815 33.5252 75.023 32.5838 74.4544 31.3631C73.8858 30.1423 73.6015 28.6733 73.6015 26.956C73.6015 25.2593 73.8858 23.8006 74.4544 22.5799C75.023 21.3591 75.815 20.4281 76.8304 19.7867C77.8457 19.1246 79.0236 18.7935 80.3639 18.7935C81.6026 18.7935 82.7093 19.1039 83.6841 19.7246C84.6792 20.3246 85.329 21.1419 85.6336 22.1764H85.2985L85.6641 19.1039H90.0809C90.02 19.7867 89.9591 20.4798 89.8981 21.1833C89.8575 21.8661 89.8372 22.5385 89.8372 23.2006V34.8391H85.2681L85.2376 31.8907H85.6031C85.2782 32.8838 84.6284 33.6804 83.6536 34.2805C82.6789 34.8805 81.5823 35.1805 80.3639 35.1805ZM81.7651 31.6424C82.821 31.6424 83.6739 31.2596 84.3238 30.4941C84.9736 29.7285 85.2985 28.5491 85.2985 26.956C85.2985 25.3628 84.9736 24.1938 84.3238 23.4489C83.6739 22.704 82.821 22.3316 81.7651 22.3316C80.7091 22.3316 79.8562 22.704 79.2063 23.4489C78.5565 24.1938 78.2316 25.3628 78.2316 26.956C78.2316 28.5491 78.5463 29.7285 79.1759 30.4941C79.8257 31.2596 80.6888 31.6424 81.7651 31.6424Z" fill="white"></path>
                        <path d="M99.6102 35.1805C98.2699 35.1805 97.0921 34.8494 96.0767 34.1873C95.0613 33.5252 94.2694 32.5838 93.7008 31.3631C93.1322 30.1423 92.8479 28.6733 92.8479 26.956C92.8479 25.2593 93.1322 23.8006 93.7008 22.5799C94.2694 21.3591 95.0613 20.4281 96.0767 19.7867C97.0921 19.1246 98.2699 18.7935 99.6102 18.7935C100.849 18.7935 101.956 19.1039 102.93 19.7246C103.925 20.3246 104.575 21.1419 104.88 22.1764H104.545L104.91 19.1039H109.327C109.266 19.7867 109.205 20.4798 109.144 21.1833C109.104 21.8661 109.084 22.5385 109.084 23.2006V34.8391H104.514L104.484 31.8907H104.849C104.525 32.8838 103.875 33.6804 102.9 34.2805C101.925 34.8805 100.829 35.1805 99.6102 35.1805ZM101.011 31.6424C102.067 31.6424 102.92 31.2596 103.57 30.4941C104.22 29.7285 104.545 28.5491 104.545 26.956C104.545 25.3628 104.22 24.1938 103.57 23.4489C102.92 22.704 102.067 22.3316 101.011 22.3316C99.9554 22.3316 99.1025 22.704 98.4527 23.4489C97.8028 24.1938 97.4779 25.3628 97.4779 26.956C97.4779 28.5491 97.7927 29.7285 98.4222 30.4941C99.072 31.2596 99.9351 31.6424 101.011 31.6424Z" fill="white"></path>
                        <path d="M117.185 34.8391L110.514 19.1039H115.357L119.774 30.5251H118.769L123.338 19.1039H127.877L121.145 34.8391H117.185Z" fill="white"></path>
                        <path d="M136.438 35.1805C134.793 35.1805 133.361 34.8494 132.143 34.1873C130.945 33.5046 130.011 32.5528 129.341 31.332C128.691 30.1113 128.366 28.6526 128.366 26.956C128.366 25.28 128.691 23.8317 129.341 22.6109C130.011 21.3902 130.945 20.4488 132.143 19.7867C133.361 19.1246 134.793 18.7935 136.438 18.7935C138.083 18.7935 139.515 19.1246 140.733 19.7867C141.951 20.4488 142.886 21.3902 143.535 22.6109C144.206 23.8317 144.541 25.28 144.541 26.956C144.541 28.6526 144.206 30.1113 143.535 31.332C142.886 32.5528 141.951 33.5046 140.733 34.1873C139.515 34.8494 138.083 35.1805 136.438 35.1805ZM136.438 31.6424C137.494 31.6424 138.327 31.2596 138.936 30.4941C139.565 29.7285 139.88 28.5491 139.88 26.956C139.88 25.3628 139.565 24.1938 138.936 23.4489C138.327 22.704 137.494 22.3316 136.438 22.3316C135.382 22.3316 134.539 22.704 133.91 23.4489C133.3 24.1938 132.996 25.3628 132.996 26.956C132.996 28.5491 133.3 29.7285 133.91 30.4941C134.539 31.2596 135.382 31.6424 136.438 31.6424Z" fill="white"></path>
                        <path d="M153.207 35.1805C151.826 35.1805 150.567 35.0253 149.43 34.715C148.293 34.4046 147.328 33.9701 146.536 33.4114L147.724 30.3079C148.516 30.8044 149.389 31.1976 150.344 31.4872C151.319 31.7769 152.283 31.9217 153.238 31.9217C154.131 31.9217 154.791 31.7769 155.218 31.4872C155.644 31.1976 155.857 30.8044 155.857 30.3079C155.857 29.894 155.715 29.5733 155.431 29.3457C155.167 29.1181 154.751 28.9526 154.182 28.8492L151.044 28.2595C149.725 27.9905 148.719 27.4939 148.029 26.7697C147.338 26.0456 146.993 25.1042 146.993 23.9455C146.993 22.9316 147.257 22.0419 147.785 21.2764C148.333 20.4901 149.115 19.8798 150.131 19.4453C151.146 19.0108 152.334 18.7935 153.695 18.7935C154.852 18.7935 155.949 18.9383 156.984 19.228C158.02 19.5177 158.903 19.9625 159.634 20.5626L158.386 23.573C157.756 23.0972 157.025 22.7144 156.192 22.4247C155.38 22.135 154.598 21.9902 153.847 21.9902C152.872 21.9902 152.172 22.1557 151.745 22.4868C151.319 22.7971 151.105 23.2006 151.105 23.6972C151.105 24.0696 151.227 24.38 151.471 24.6283C151.735 24.8766 152.131 25.0628 152.659 25.1869L155.827 25.7766C157.187 26.0249 158.223 26.4904 158.934 27.1732C159.645 27.856 160 28.7974 160 29.9975C160 31.0941 159.716 32.0252 159.147 32.7907C158.578 33.5563 157.776 34.146 156.741 34.5598C155.725 34.9736 154.547 35.1805 153.207 35.1805Z" fill="white"></path>
                    </svg> </a>
                <a href="<?php echo site_url(); ?>" class="main-header__logo main-header__logo--light" id="logo-light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 43" fill="none">
                        <path d="M21.2529 3.61754C21.3108 3.7184 21.2342 3.84306 21.1202 3.84306C18.8131 3.84306 16.9376 5.72041 16.8936 8.05325C16.1036 7.90166 15.285 7.89026 14.4763 8.03029C14.4205 5.70811 12.5498 3.84306 10.2502 3.84306C10.1362 3.84306 10.0594 3.7183 10.1174 3.61737C11.2342 1.67342 13.3095 0.367188 15.6851 0.367188C18.0608 0.367188 20.1361 1.67349 21.2529 3.61754Z" fill="url(#paint0_radial_8441_6074)"></path>
                        <path d="M28.086 18.0457C28.8708 18.2899 29.6102 17.581 29.3141 16.7952C27.1131 10.9552 20.5988 8.56264 15.6535 8.56264C10.6986 8.56264 4.03914 11.0325 1.98151 16.8316C1.70449 17.6123 2.44201 18.2979 3.21511 18.0544L15.0663 14.322C15.4084 14.2143 15.774 14.2137 16.1164 14.3203L28.086 18.0457Z" fill="url(#paint1_radial_8441_6074)"></path>
                        <path d="M1.86584 19.17L15.0763 15.0521C15.4163 14.9461 15.7793 14.9459 16.1195 15.0513L29.4129 19.172C30.523 19.5161 31.2826 20.567 31.2826 21.7587V34.174C31.2312 37.2045 28.5823 39.6335 25.6347 39.6335H20.7389C20.2549 39.6335 19.863 39.2312 19.863 38.7338V34.3808C19.863 32.6668 20.85 31.1154 22.3773 30.4288C24.4246 29.5084 26.8466 28.2634 27.3022 25.7651C27.4492 24.9588 26.9376 24.1809 26.1551 24.0211C24.1763 23.6168 21.9826 23.773 20.1275 24.6257C18.0215 25.5938 17.4706 27.2042 17.2667 29.3669L17.0195 31.6968C16.9439 32.4089 16.2944 32.9544 15.5978 32.9544C14.8771 32.9544 14.3367 32.3903 14.2586 31.6537L14.016 29.3669C13.8413 27.5145 13.5246 25.715 11.6613 24.8584C9.53582 23.8813 7.39985 23.5569 5.12759 24.0211C4.34503 24.1809 3.83344 24.9588 3.98048 25.7651C4.44 28.2852 6.84299 29.5016 8.90536 30.4288C10.4327 31.1154 11.4196 32.6668 11.4196 34.3808V38.733C11.4196 39.2304 11.0279 39.6335 10.5439 39.6335H5.64792C2.7003 39.6335 0.0514789 37.2045 0 34.174V21.7555C0 20.5653 0.75771 19.5154 1.86584 19.17Z" fill="url(#paint2_radial_8441_6074)"></path>
                        <path d="M41.083 34.8395V12.9591H50.9828C53.3385 12.9591 55.156 13.466 56.4353 14.4799C57.7147 15.4937 58.3544 16.88 58.3544 18.6387C58.3544 19.9422 57.9685 21.0492 57.1969 21.9595C56.4455 22.8699 55.4098 23.4803 54.0898 23.7907V23.2941C55.6332 23.5631 56.8212 24.1631 57.6538 25.0942C58.5067 26.0046 58.9331 27.1943 58.9331 28.6633C58.9331 30.6082 58.2528 32.129 56.8922 33.2256C55.552 34.3015 53.6938 34.8395 51.3179 34.8395H41.083ZM45.6217 31.2393H50.7391C51.917 31.2393 52.8206 31.0117 53.4502 30.5565C54.0797 30.1013 54.3944 29.3771 54.3944 28.384C54.3944 27.3701 54.0797 26.646 53.4502 26.2115C52.8206 25.7563 51.917 25.5287 50.7391 25.5287H45.6217V31.2393ZM45.6217 21.9595H50.1299C51.3687 21.9595 52.2825 21.7319 52.8714 21.2767C53.4603 20.8216 53.7548 20.1388 53.7548 19.2284C53.7548 18.3387 53.4603 17.6662 52.8714 17.211C52.2825 16.7558 51.3687 16.5282 50.1299 16.5282H45.6217V21.9595Z" fill="url(#paint3_radial_8441_6074)"></path>
                        <path d="M61.9576 34.8395V23.2631C61.9576 22.5803 61.9373 21.8871 61.8967 21.1836C61.8763 20.4802 61.8256 19.787 61.7443 19.1042H66.1612L66.679 23.6976H65.9784C66.1815 22.5803 66.5064 21.6595 66.9532 20.9354C67.4202 20.2112 67.9888 19.6732 68.659 19.3215C69.3494 18.9697 70.1313 18.7939 71.0045 18.7939C71.3903 18.7939 71.6949 18.8146 71.9183 18.8559C72.1417 18.8766 72.3651 18.9284 72.5885 19.0111L72.558 23.1389C72.1315 22.9527 71.766 22.8389 71.4614 22.7975C71.1771 22.7354 70.8116 22.7044 70.3648 22.7044C69.5119 22.7044 68.8011 22.8699 68.2325 23.201C67.6842 23.532 67.2679 24.0183 66.9836 24.6597C66.7196 25.3011 66.5876 26.077 66.5876 26.9874V34.8395H61.9576Z" fill="url(#paint4_radial_8441_6074)"></path>
                        <path d="M80.3636 35.1809C79.0233 35.1809 77.8455 34.8498 76.8301 34.1877C75.8148 33.5256 75.0228 32.5842 74.4542 31.3634C73.8856 30.1427 73.6013 28.6737 73.6013 26.9563C73.6013 25.2597 73.8856 23.801 74.4542 22.5803C75.0228 21.3595 75.8148 20.4284 76.8301 19.787C77.8455 19.1249 79.0233 18.7939 80.3636 18.7939C81.6024 18.7939 82.7091 19.1042 83.6839 19.725C84.6789 20.325 85.3287 21.1423 85.6334 22.1768H85.2983L85.6638 19.1042H90.0807C90.0197 19.787 89.9588 20.4802 89.8979 21.1836C89.8573 21.8664 89.837 22.5389 89.837 23.201V34.8395H85.2678L85.2374 31.8911H85.6029C85.278 32.8842 84.6281 33.6808 83.6534 34.2808C82.6786 34.8808 81.582 35.1809 80.3636 35.1809ZM81.7648 31.6428C82.8208 31.6428 83.6737 31.26 84.3235 30.4944C84.9734 29.7289 85.2983 28.5495 85.2983 26.9563C85.2983 25.3632 84.9734 24.1941 84.3235 23.4493C83.6737 22.7044 82.8208 22.332 81.7648 22.332C80.7088 22.332 79.8559 22.7044 79.2061 23.4493C78.5563 24.1941 78.2313 25.3632 78.2313 26.9563C78.2313 28.5495 78.5461 29.7289 79.1756 30.4944C79.8255 31.26 80.6885 31.6428 81.7648 31.6428Z" fill="url(#paint5_radial_8441_6074)"></path>
                        <path d="M99.6099 35.1809C98.2697 35.1809 97.0918 34.8498 96.0765 34.1877C95.0611 33.5256 94.2691 32.5842 93.7005 31.3634C93.1319 30.1427 92.8476 28.6737 92.8476 26.9563C92.8476 25.2597 93.1319 23.801 93.7005 22.5803C94.2691 21.3595 95.0611 20.4284 96.0765 19.787C97.0918 19.1249 98.2697 18.7939 99.6099 18.7939C100.849 18.7939 101.955 19.1042 102.93 19.725C103.925 20.325 104.575 21.1423 104.88 22.1768H104.545L104.91 19.1042H109.327C109.266 19.787 109.205 20.4802 109.144 21.1836C109.104 21.8664 109.083 22.5389 109.083 23.201V34.8395H104.514L104.484 31.8911H104.849C104.524 32.8842 103.874 33.6808 102.9 34.2808C101.925 34.8808 100.828 35.1809 99.6099 35.1809ZM101.011 31.6428C102.067 31.6428 102.92 31.26 103.57 30.4944C104.22 29.7289 104.545 28.5495 104.545 26.9563C104.545 25.3632 104.22 24.1941 103.57 23.4493C102.92 22.7044 102.067 22.332 101.011 22.332C99.9552 22.332 99.1023 22.7044 98.4524 23.4493C97.8026 24.1941 97.4777 25.3632 97.4777 26.9563C97.4777 28.5495 97.7924 29.7289 98.422 30.4944C99.0718 31.26 99.9349 31.6428 101.011 31.6428Z" fill="url(#paint6_radial_8441_6074)"></path>
                        <path d="M117.184 34.8395L110.514 19.1042H115.357L119.774 30.5255H118.768L123.338 19.1042H127.876L121.144 34.8395H117.184Z" fill="url(#paint7_radial_8441_6074)"></path>
                        <path d="M136.438 35.1809C134.793 35.1809 133.361 34.8498 132.143 34.1877C130.945 33.5049 130.01 32.5532 129.34 31.3324C128.69 30.1117 128.366 28.653 128.366 26.9563C128.366 25.2804 128.69 23.832 129.34 22.6113C130.01 21.3905 130.945 20.4491 132.143 19.787C133.361 19.1249 134.793 18.7939 136.438 18.7939C138.083 18.7939 139.514 19.1249 140.733 19.787C141.951 20.4491 142.885 21.3905 143.535 22.6113C144.205 23.832 144.54 25.2804 144.54 26.9563C144.54 28.653 144.205 30.1117 143.535 31.3324C142.885 32.5532 141.951 33.5049 140.733 34.1877C139.514 34.8498 138.083 35.1809 136.438 35.1809ZM136.438 31.6428C137.494 31.6428 138.326 31.26 138.936 30.4944C139.565 29.7289 139.88 28.5495 139.88 26.9563C139.88 25.3632 139.565 24.1941 138.936 23.4493C138.326 22.7044 137.494 22.332 136.438 22.332C135.382 22.332 134.539 22.7044 133.909 23.4493C133.3 24.1941 132.996 25.3632 132.996 26.9563C132.996 28.5495 133.3 29.7289 133.909 30.4944C134.539 31.26 135.382 31.6428 136.438 31.6428Z" fill="url(#paint8_radial_8441_6074)"></path>
                        <path d="M153.207 35.1809C151.826 35.1809 150.567 35.0257 149.43 34.7153C148.293 34.405 147.328 33.9705 146.536 33.4118L147.724 30.3082C148.516 30.8048 149.389 31.1979 150.344 31.4876C151.318 31.7773 152.283 31.9221 153.237 31.9221C154.131 31.9221 154.791 31.7773 155.217 31.4876C155.644 31.1979 155.857 30.8048 155.857 30.3082C155.857 29.8944 155.715 29.5737 155.431 29.3461C155.167 29.1185 154.75 28.953 154.182 28.8495L151.044 28.2598C149.724 27.9909 148.719 27.4943 148.029 26.7701C147.338 26.0459 146.993 25.1045 146.993 23.9458C146.993 22.932 147.257 22.0423 147.785 21.2767C148.333 20.4905 149.115 19.8801 150.13 19.4456C151.146 19.0111 152.334 18.7939 153.694 18.7939C154.852 18.7939 155.948 18.9387 156.984 19.2284C158.02 19.518 158.903 19.9629 159.634 20.5629L158.385 23.5734C157.756 23.0975 157.025 22.7147 156.192 22.4251C155.38 22.1354 154.598 21.9906 153.847 21.9906C152.872 21.9906 152.171 22.1561 151.745 22.4872C151.318 22.7975 151.105 23.201 151.105 23.6976C151.105 24.07 151.227 24.3803 151.471 24.6286C151.735 24.8769 152.131 25.0631 152.659 25.1873L155.827 25.777C157.187 26.0253 158.223 26.4908 158.934 27.1736C159.644 27.8564 160 28.7978 160 29.9979C160 31.0945 159.715 32.0255 159.147 32.7911C158.578 33.5567 157.776 34.1463 156.74 34.5601C155.725 34.974 154.547 35.1809 153.207 35.1809Z" fill="url(#paint9_radial_8441_6074)"></path>
                        <defs>
                            <radialGradient id="paint0_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(15.6413 20.0003) rotate(90) scale(19.6332 15.6413)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint1_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(15.6413 20.0003) rotate(90) scale(19.6332 15.6413)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint2_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(15.6413 20.0003) rotate(90) scale(19.6332 15.6413)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint3_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(100.541 24.07) rotate(90) scale(11.1109 59.4584)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint4_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(100.541 24.07) rotate(90) scale(11.1109 59.4584)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint5_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(100.541 24.07) rotate(90) scale(11.1109 59.4584)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint6_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(100.541 24.07) rotate(90) scale(11.1109 59.4584)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint7_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(100.541 24.07) rotate(90) scale(11.1109 59.4584)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint8_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(100.541 24.07) rotate(90) scale(11.1109 59.4584)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                            <radialGradient id="paint9_radial_8441_6074" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(100.541 24.07) rotate(90) scale(11.1109 59.4584)">
                                <stop offset="0.47" stop-color="#587EFF"></stop>
                                <stop offset="1" stop-color="#5478F4"></stop>
                            </radialGradient>
                        </defs>
                    </svg> </a>
            </div>
            <div class="main-header__menu-wrapper">
                <!--			-->
                <nav class="main-menu">
                    <ul class="main-menu__list">
                        <li class="main-menu__list-item ">
                            <div class="main-menu__list-item-wrapper">
                                <div class="main-menu__list-item-text">
                                    Product </div>
                            </div>
                            <div class="main-menu__dropdown">
                                <ul class="main-menu__dropdown-list">
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/security/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M1.91671 1.21935C1.33605 1.24061 0.893799 1.72301 0.893799 2.29381V9.62836C0.893799 10.3493 1.27084 11.0338 1.79803 11.6441C2.32885 12.2586 3.04196 12.833 3.7832 13.3389C5.26695 14.3516 6.91236 15.1229 7.57648 15.4184C7.84699 15.5388 8.15309 15.5388 8.4236 15.4184C9.08772 15.1229 10.7331 14.3516 12.2169 13.3389C12.9581 12.833 13.6712 12.2586 14.202 11.6441C14.7292 11.0338 15.1063 10.3493 15.1063 9.62836V2.4625C15.1063 1.80432 14.5361 1.30186 13.8992 1.32013C12.7618 1.35275 10.6483 1.28083 8.32061 0.543983C8.11678 0.479459 7.895 0.473559 7.68711 0.529298C5.14556 1.21074 4.16756 1.21143 3.03381 1.20718C3.03377 1.20718 3.03373 1.20718 3.03369 1.20718M1.91671 1.21935L3.03556 0.707185L3.03369 1.20718M1.91671 1.21935C2.27125 1.20637 2.58335 1.20577 2.87741 1.20663L1.91671 1.21935ZM3.03369 1.20718L2.87769 1.20664L3.03369 1.20718Z" stroke="white"></path>
                                                    <path d="M4.84387 6.98243C4.84387 6.63118 5.12862 6.34644 5.47987 6.34644H10.5678C10.919 6.34644 11.2038 6.63118 11.2038 6.98243V9.01759C11.2038 10.7738 9.78004 12.1975 8.02381 12.1975C6.26758 12.1975 4.84387 10.7738 4.84387 9.01759V6.98243Z" fill="white" stroke="url(#paint0_linear_8596_1997)" stroke-width="0.254398"></path>
                                                    <path d="M4.71667 6.98194C4.71667 6.56044 5.05837 6.21875 5.47987 6.21875H10.5678C10.9893 6.21875 11.3309 6.56044 11.3309 6.98194V9.0171C11.3309 10.8436 9.85029 12.3242 8.02381 12.3242C6.19733 12.3242 4.71667 10.8436 4.71667 9.0171V6.98194Z" fill="white"></path>
                                                    <path d="M9.55225 5.20118C9.55225 4.79636 9.39144 4.40812 9.10519 4.12187C8.81894 3.83562 8.4307 3.6748 8.02588 3.6748C7.62106 3.6748 7.23283 3.83562 6.94658 4.12187C6.66033 4.40812 6.49951 4.79636 6.49951 5.20118" stroke="white" stroke-width="0.763193" stroke-linecap="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.48252 9.32543C8.45616 9.21997 8.50306 9.11209 8.57784 9.03319C8.70747 8.8964 8.78699 8.71164 8.78699 8.5083C8.78699 8.08681 8.4453 7.74512 8.02381 7.74512C7.60231 7.74512 7.26062 8.08681 7.26062 8.5083C7.26062 8.71168 7.34017 8.89648 7.46986 9.03328C7.54466 9.11218 7.59159 9.22008 7.56522 9.32556L7.33973 10.2275C7.29959 10.3881 7.42102 10.5436 7.58653 10.5436H8.46125C8.62675 10.5436 8.74819 10.3881 8.70805 10.2275L8.48252 9.32543Z" fill="#2A3140"></path>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_8596_1997" x1="3.40042" y1="5.39952" x2="11.118" y2="12.0759" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#0933C0"></stop>
                                                            <stop offset="1" stop-color="#587EFF"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Security </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/swap-tokens/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1" y="0.5" width="15" height="15" rx="7.5" stroke="white"></rect>
                                                    <path d="M12.875 4.49985V6.59986C12.875 6.73909 12.8197 6.87263 12.7212 6.97109C12.6228 7.06954 12.4892 7.12486 12.35 7.12486H10.25C10.1108 7.12486 9.97723 7.06954 9.87877 6.97109C9.78031 6.87263 9.725 6.73909 9.725 6.59986C9.725 6.46062 9.78031 6.32708 9.87877 6.22862C9.97723 6.13017 10.1108 6.07486 10.25 6.07486H11.0813L10.74 5.7336C10.1222 5.11271 9.28316 4.76244 8.40725 4.75973H8.38844C7.52035 4.75783 6.68642 5.09778 6.06706 5.70604C5.96751 5.80339 5.83336 5.85721 5.69412 5.85565C5.55489 5.85409 5.42198 5.79729 5.32463 5.69773C5.22727 5.59817 5.17346 5.46402 5.17502 5.32479C5.17658 5.18556 5.23338 5.05264 5.33294 4.95529C6.14853 4.15443 7.2467 3.70696 8.38975 3.70973H8.4125C9.56564 3.71287 10.6703 4.17379 11.4838 4.99117L11.825 5.3311V4.49985C11.825 4.36062 11.8803 4.22708 11.9788 4.12862C12.0772 4.03017 12.2108 3.97485 12.35 3.97485C12.4892 3.97485 12.6228 4.03017 12.7212 4.12862C12.8197 4.22708 12.875 4.36062 12.875 4.49985ZM10.9329 10.2937C10.3133 10.9022 9.47879 11.2422 8.61025 11.24H8.59144C7.71553 11.2373 6.87652 10.887 6.25869 10.2661L5.91875 9.92486H6.75C6.88924 9.92486 7.02278 9.86954 7.12123 9.77109C7.21969 9.67263 7.275 9.53909 7.275 9.39986C7.275 9.26062 7.21969 9.12708 7.12123 9.02863C7.02278 8.93017 6.88924 8.87486 6.75 8.87486H4.65C4.51076 8.87486 4.37723 8.93017 4.27877 9.02863C4.18031 9.12708 4.125 9.26062 4.125 9.39986V11.4999C4.125 11.6391 4.18031 11.7726 4.27877 11.8711C4.37723 11.9695 4.51076 12.0249 4.65 12.0249C4.78924 12.0249 4.92277 11.9695 5.02123 11.8711C5.11969 11.7726 5.175 11.6391 5.175 11.4999V10.6686L5.51625 11.0099C6.32988 11.8267 7.43455 12.2872 8.5875 12.29H8.612C9.75505 12.2928 10.8532 11.8453 11.6688 11.0444C11.7181 10.9962 11.7574 10.9388 11.7845 10.8754C11.8116 10.812 11.826 10.7439 11.8267 10.6749C11.8275 10.606 11.8147 10.5376 11.789 10.4736C11.7634 10.4096 11.7253 10.3513 11.6771 10.302C11.6289 10.2527 11.5715 10.2134 11.5081 10.1863C11.4447 10.1592 11.3766 10.1448 11.3076 10.1441C11.2387 10.1433 11.1703 10.1561 11.1063 10.1818C11.0423 10.2074 10.984 10.2455 10.9347 10.2937H10.9329Z" fill="white"></path>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Swap Tokens </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/deposit-crypto/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1" y="0.5" width="15" height="15" rx="7.5" stroke="white"></rect>
                                                    <path d="M5.27237 7.70518C5.20862 7.64327 5.15805 7.56975 5.12355 7.48882C5.08905 7.40789 5.07129 7.32115 5.07129 7.23354C5.07129 7.14594 5.08905 7.05919 5.12355 6.97826C5.15805 6.89734 5.20862 6.82382 5.27237 6.76191L8.01486 4.09541C8.07854 4.03343 8.15415 3.98426 8.23739 3.95072C8.32062 3.91717 8.40984 3.8999 8.49994 3.8999C8.59004 3.8999 8.67926 3.91717 8.76249 3.95072C8.84572 3.98426 8.92134 4.03343 8.98502 4.09541L11.7275 6.76191C11.7912 6.82384 11.8417 6.89737 11.8762 6.97829C11.9107 7.05922 11.9284 7.14595 11.9284 7.23354C11.9284 7.32113 11.9107 7.40787 11.8762 7.48879C11.8417 7.56971 11.7912 7.64324 11.7275 7.70518C11.6638 7.76711 11.5882 7.81624 11.505 7.84976C11.4217 7.88328 11.3325 7.90054 11.2424 7.90054C11.1523 7.90054 11.0631 7.88328 10.9799 7.84976C10.8967 7.81624 10.8211 7.76711 10.7573 7.70518L9.18556 6.17611V11.2333C9.18556 11.4101 9.11333 11.5796 8.98475 11.7047C8.85617 11.8297 8.68178 11.8999 8.49994 11.8999C8.3181 11.8999 8.14371 11.8297 8.01513 11.7047C7.88655 11.5796 7.81432 11.4101 7.81432 11.2333V6.17611L6.24253 7.70518C6.17885 7.76716 6.10324 7.81633 6.02 7.84987C5.93677 7.88342 5.84755 7.90069 5.75745 7.90069C5.66735 7.90069 5.57813 7.88342 5.4949 7.84987C5.41166 7.81633 5.33605 7.76716 5.27237 7.70518Z" fill="white"></path>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Deposit crypto </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/connect-to-starknet-dapps/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_8596_2019)">
                                                        <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346628 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9976 5.87902 15.1539 3.8456 13.6542 2.34584C12.1544 0.846082 10.121 0.00244306 8 0ZM14.7692 8C14.7698 8.62428 14.6836 9.2456 14.5131 9.84615H11.5508C11.7395 8.62262 11.7395 7.37738 11.5508 6.15384H14.5131C14.6836 6.75439 14.7698 7.37572 14.7692 8ZM6 11.0769H10C9.60593 12.3681 8.92183 13.5522 8 14.5385C7.07852 13.5519 6.39447 12.368 6 11.0769ZM5.7 9.84615C5.48873 8.62445 5.48873 7.37555 5.7 6.15384H10.3062C10.5174 7.37555 10.5174 8.62445 10.3062 9.84615H5.7ZM1.23077 8C1.23024 7.37572 1.31645 6.75439 1.48693 6.15384H4.44923C4.26051 7.37738 4.26051 8.62262 4.44923 9.84615H1.48693C1.31645 9.2456 1.23024 8.62428 1.23077 8ZM10 4.92308H6C6.39407 3.63185 7.07817 2.44783 8 1.46154C8.92148 2.44809 9.60553 3.63203 10 4.92308ZM14.0254 4.92308H11.2854C10.94 3.65608 10.358 2.4659 9.57 1.41538C10.5221 1.6441 11.4135 2.07598 12.183 2.68143C12.9526 3.28687 13.5821 4.05156 14.0285 4.92308H14.0254ZM6.43 1.41538C5.642 2.4659 5.05996 3.65608 4.71462 4.92308H1.97154C2.4179 4.05156 3.04744 3.28687 3.81699 2.68143C4.58655 2.07598 5.47792 1.6441 6.43 1.41538ZM1.97154 11.0769H4.71462C5.05996 12.3439 5.642 13.5341 6.43 14.5846C5.47792 14.3559 4.58655 13.924 3.81699 13.3186C3.04744 12.7131 2.4179 11.9484 1.97154 11.0769ZM9.57 14.5846C10.358 13.5341 10.94 12.3439 11.2854 11.0769H14.0285C13.5821 11.9484 12.9526 12.7131 12.183 13.3186C11.4135 13.924 10.5221 14.3559 9.57 14.5846Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_8596_2019">
                                                            <rect width="16" height="16" rx="8" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Connect to Starknet dApps </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="main-menu__list-item ">
                            <div class="main-menu__list-item-wrapper">
                                <div class="main-menu__list-item-text">
                                    Earn with DeFi </div>
                            </div>
                            <div class="main-menu__dropdown">
                                <ul class="main-menu__dropdown-list">
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/stake/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <rect x="0.5" y="0.5" width="15" height="15" rx="7.5" stroke="white"></rect>
                                                    <path d="M11.9684 7.76329L11.9684 7.76327L8.30165 3.09648L8.30165 3.09647C8.26578 3.05083 8.22001 3.01393 8.1678 2.98856C8.11559 2.96318 8.0583 2.95 8.00025 2.95C7.9422 2.95 7.8849 2.96318 7.83269 2.98856C7.78048 3.01393 7.73471 3.05083 7.69884 3.09647L7.69884 3.09648L4.03207 7.76327L4.03206 7.76329C3.97905 7.8308 3.95024 7.91416 3.95024 8C3.95024 8.08584 3.97905 8.1692 4.03206 8.23671L4.03207 8.23673L7.69884 12.9035L7.73816 12.8726L7.69884 12.9035C7.73471 12.9492 7.78048 12.9861 7.83269 13.0114C7.8849 13.0368 7.9422 13.05 8.00025 13.05C8.0583 13.05 8.11559 13.0368 8.1678 13.0114C8.22001 12.9861 8.26578 12.9492 8.30165 12.9035L8.26234 12.8726L8.30165 12.9035L11.9684 8.23673L11.9684 8.23671C12.0214 8.1692 12.0502 8.08584 12.0502 8C12.0502 7.91416 12.0214 7.8308 11.9684 7.76329ZM8.38359 4.44154L11.0642 7.85291L8.38359 9.07154V4.44154ZM7.6169 9.07154L4.93631 7.85291L7.6169 4.44154V9.07154ZM5.60661 8.99997L7.6169 9.9135V11.5585L5.60661 8.99997ZM8.38359 11.558V9.91349L10.3938 8.99961L8.38359 11.558Z" fill="white" stroke="white" stroke-width="0.1"></path>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Stake your ETH </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/starknet-wallet-for-defi/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">

                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="1" y="0.5" width="15" height="15" rx="7.5" stroke="white"></rect>
                                                    <mask id="path-2-outside-1_6173_22226" maskUnits="userSpaceOnUse" x="2.83301" y="4" width="11" height="8" fill="black">
                                                        <rect fill="white" x="2.83301" y="4" width="11" height="8"></rect>
                                                        <path d="M13.1662 5.33332V7.99991C13.1662 8.08831 13.1311 8.17309 13.0686 8.2356C13.0061 8.29811 12.9213 8.33323 12.8329 8.33323C12.7445 8.33323 12.6597 8.29811 12.5972 8.2356C12.5347 8.17309 12.4996 8.08831 12.4996 7.99991V6.13788L9.06886 9.56903C9.03791 9.60002 9.00115 9.6246 8.96068 9.64138C8.92022 9.65815 8.87684 9.66678 8.83304 9.66678C8.78923 9.66678 8.74586 9.65815 8.7054 9.64138C8.66493 9.6246 8.62817 9.60002 8.59721 9.56903L7.16642 8.13782L4.40234 10.9023C4.3398 10.9649 4.25497 11 4.16652 11C4.07806 11 3.99324 10.9649 3.93069 10.9023C3.86815 10.8398 3.83301 10.7549 3.83301 10.6665C3.83301 10.578 3.86815 10.4932 3.93069 10.4307L6.9306 7.43076C6.96155 7.39977 6.99832 7.37518 7.03878 7.35841C7.07925 7.34163 7.12262 7.333 7.16642 7.333C7.21023 7.333 7.2536 7.34163 7.29407 7.35841C7.33453 7.37518 7.37129 7.39977 7.40225 7.43076L8.83304 8.86196L12.0284 5.66665H10.1663C10.0779 5.66665 9.99315 5.63153 9.93064 5.56902C9.86812 5.50651 9.83301 5.42173 9.83301 5.33332C9.83301 5.24492 9.86812 5.16014 9.93064 5.09763C9.99315 5.03512 10.0779 5 10.1663 5H12.8329C12.9213 5 13.0061 5.03512 13.0686 5.09763C13.1311 5.16014 13.1662 5.24492 13.1662 5.33332Z"></path>
                                                    </mask>
                                                    <path d="M13.1662 5.33332V7.99991C13.1662 8.08831 13.1311 8.17309 13.0686 8.2356C13.0061 8.29811 12.9213 8.33323 12.8329 8.33323C12.7445 8.33323 12.6597 8.29811 12.5972 8.2356C12.5347 8.17309 12.4996 8.08831 12.4996 7.99991V6.13788L9.06886 9.56903C9.03791 9.60002 9.00115 9.6246 8.96068 9.64138C8.92022 9.65815 8.87684 9.66678 8.83304 9.66678C8.78923 9.66678 8.74586 9.65815 8.7054 9.64138C8.66493 9.6246 8.62817 9.60002 8.59721 9.56903L7.16642 8.13782L4.40234 10.9023C4.3398 10.9649 4.25497 11 4.16652 11C4.07806 11 3.99324 10.9649 3.93069 10.9023C3.86815 10.8398 3.83301 10.7549 3.83301 10.6665C3.83301 10.578 3.86815 10.4932 3.93069 10.4307L6.9306 7.43076C6.96155 7.39977 6.99832 7.37518 7.03878 7.35841C7.07925 7.34163 7.12262 7.333 7.16642 7.333C7.21023 7.333 7.2536 7.34163 7.29407 7.35841C7.33453 7.37518 7.37129 7.39977 7.40225 7.43076L8.83304 8.86196L12.0284 5.66665H10.1663C10.0779 5.66665 9.99315 5.63153 9.93064 5.56902C9.86812 5.50651 9.83301 5.42173 9.83301 5.33332C9.83301 5.24492 9.86812 5.16014 9.93064 5.09763C9.99315 5.03512 10.0779 5 10.1663 5H12.8329C12.9213 5 13.0061 5.03512 13.0686 5.09763C13.1311 5.16014 13.1662 5.24492 13.1662 5.33332Z" fill="white"></path>
                                                    <path d="M13.1662 5.33332V7.99991C13.1662 8.08831 13.1311 8.17309 13.0686 8.2356C13.0061 8.29811 12.9213 8.33323 12.8329 8.33323C12.7445 8.33323 12.6597 8.29811 12.5972 8.2356C12.5347 8.17309 12.4996 8.08831 12.4996 7.99991V6.13788L9.06886 9.56903C9.03791 9.60002 9.00115 9.6246 8.96068 9.64138C8.92022 9.65815 8.87684 9.66678 8.83304 9.66678C8.78923 9.66678 8.74586 9.65815 8.7054 9.64138C8.66493 9.6246 8.62817 9.60002 8.59721 9.56903L7.16642 8.13782L4.40234 10.9023C4.3398 10.9649 4.25497 11 4.16652 11C4.07806 11 3.99324 10.9649 3.93069 10.9023C3.86815 10.8398 3.83301 10.7549 3.83301 10.6665C3.83301 10.578 3.86815 10.4932 3.93069 10.4307L6.9306 7.43076C6.96155 7.39977 6.99832 7.37518 7.03878 7.35841C7.07925 7.34163 7.12262 7.333 7.16642 7.333C7.21023 7.333 7.2536 7.34163 7.29407 7.35841C7.33453 7.37518 7.37129 7.39977 7.40225 7.43076L8.83304 8.86196L12.0284 5.66665H10.1663C10.0779 5.66665 9.99315 5.63153 9.93064 5.56902C9.86812 5.50651 9.83301 5.42173 9.83301 5.33332C9.83301 5.24492 9.86812 5.16014 9.93064 5.09763C9.99315 5.03512 10.0779 5 10.1663 5H12.8329C12.9213 5 13.0061 5.03512 13.0686 5.09763C13.1311 5.16014 13.1662 5.24492 13.1662 5.33332Z" stroke="white" stroke-width="0.4" mask="url(#path-2-outside-1_6173_22226)"></path>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                DeFi Dashboard </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/one-click-invest/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">

                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.50004 1.50004V1.00004C5.50004 0.867433 5.55272 0.740256 5.64649 0.646488C5.74026 0.55272 5.86743 0.500041 6.00004 0.500041C6.13265 0.500041 6.25983 0.55272 6.35359 0.646488C6.44736 0.740256 6.50004 0.867433 6.50004 1.00004V1.50004C6.50004 1.63265 6.44736 1.75983 6.35359 1.85359C6.25983 1.94736 6.13265 2.00004 6.00004 2.00004C5.86743 2.00004 5.74026 1.94736 5.64649 1.85359C5.55272 1.75983 5.50004 1.63265 5.50004 1.50004ZM1.00004 6.50004H1.50004C1.63265 6.50004 1.75983 6.44736 1.85359 6.35359C1.94736 6.25983 2.00004 6.13265 2.00004 6.00004C2.00004 5.86743 1.94736 5.74026 1.85359 5.64649C1.75983 5.55272 1.63265 5.50004 1.50004 5.50004H1.00004C0.867433 5.50004 0.740256 5.55272 0.646488 5.64649C0.55272 5.74026 0.500041 5.86743 0.500041 6.00004C0.500041 6.13265 0.55272 6.25983 0.646488 6.35359C0.740256 6.44736 0.867433 6.50004 1.00004 6.50004ZM7.77629 2.44754C7.83505 2.47697 7.89903 2.49452 7.96458 2.4992C8.03013 2.50388 8.09596 2.49559 8.1583 2.47481C8.22064 2.45403 8.27828 2.42117 8.32791 2.37809C8.37754 2.33502 8.41819 2.28259 8.44754 2.22379L8.94754 1.22379C9.00688 1.10519 9.01668 0.967872 8.97478 0.842047C8.93288 0.716222 8.84271 0.612196 8.7241 0.552854C8.6055 0.493511 8.46818 0.483714 8.34236 0.525617C8.21653 0.567519 8.11251 0.65769 8.05317 0.776291L7.55317 1.77629C7.52372 1.83501 7.50613 1.89896 7.50141 1.96448C7.49668 2.03 7.50492 2.09581 7.52564 2.15815C7.54636 2.22049 7.57916 2.27813 7.62217 2.32779C7.66518 2.37744 7.71755 2.41814 7.77629 2.44754ZM1.77629 7.55317L0.776291 8.05317C0.65769 8.11251 0.567519 8.21653 0.525617 8.34236C0.483714 8.46818 0.493511 8.6055 0.552854 8.7241C0.612196 8.84271 0.716222 8.93288 0.842047 8.97478C0.967872 9.01668 1.10519 9.00688 1.22379 8.94754L2.22379 8.44754C2.28252 8.41816 2.33488 8.37749 2.37789 8.32788C2.4209 8.27826 2.45372 8.22065 2.47447 8.15835C2.49521 8.09605 2.50349 8.03027 2.49881 7.96477C2.49414 7.89927 2.47661 7.83533 2.44723 7.7766C2.41785 7.71788 2.37718 7.66551 2.32756 7.6225C2.27794 7.57949 2.22034 7.54668 2.15804 7.52593C2.09573 7.50518 2.02995 7.49691 1.96445 7.50158C1.89895 7.50625 1.83502 7.52378 1.77629 7.55317ZM13.7069 11.5C13.7998 11.5929 13.8735 11.7032 13.9237 11.8245C13.974 11.9458 13.9999 12.0759 13.9999 12.2072C13.9999 12.3386 13.974 12.4686 13.9237 12.59C13.8735 12.7113 13.7998 12.8216 13.7069 12.9144L12.9144 13.7069C12.8216 13.7998 12.7113 13.8735 12.59 13.9237C12.4686 13.974 12.3386 13.9999 12.2072 13.9999C12.0759 13.9999 11.9458 13.974 11.8245 13.9237C11.7032 13.8735 11.5929 13.7998 11.5 13.7069L8.29379 10.5L7.18754 13.3807C7.18754 13.3869 7.18254 13.3938 7.17942 13.4007C7.10289 13.5791 6.97558 13.731 6.81332 13.8376C6.65107 13.9442 6.46104 14.0007 6.26692 14H6.21754C6.01508 13.9915 5.82014 13.9209 5.65907 13.798C5.498 13.675 5.37856 13.5056 5.31692 13.3125L2.05004 3.30754C1.99396 3.13256 1.98717 2.94552 2.03042 2.76694C2.07367 2.58836 2.16529 2.42514 2.29522 2.29522C2.42514 2.16529 2.58836 2.07367 2.76694 2.03042C2.94552 1.98717 3.13256 1.99396 3.30754 2.05004L13.3125 5.31692C13.5038 5.38088 13.6712 5.50116 13.7928 5.66196C13.9145 5.82277 13.9847 6.01659 13.9942 6.218C14.0037 6.41941 13.9521 6.61899 13.8462 6.79056C13.7403 6.96213 13.585 7.09768 13.4007 7.17942L13.3807 7.18754L10.5 8.29317L13.7069 11.5ZM13 12.2069L9.79317 9.00004C9.67774 8.88482 9.59224 8.74312 9.54413 8.58729C9.49601 8.43146 9.48674 8.26622 9.51713 8.10599C9.54751 7.94575 9.61662 7.79538 9.71844 7.66797C9.82026 7.54057 9.9517 7.44001 10.1013 7.37504L10.1213 7.36629L12.9932 6.26379L3.00004 3.00004L6.26254 12.9913L7.36567 10.1163C7.36567 10.1094 7.37067 10.1025 7.37379 10.0957C7.43878 9.94619 7.53932 9.81486 7.66666 9.71312C7.794 9.61138 7.94428 9.54231 8.10442 9.51192C8.16626 9.50045 8.22902 9.49459 8.29192 9.49442C8.55687 9.49471 8.81088 9.60013 8.99817 9.78754L12.2069 13L13 12.2069Z" fill="white" />
                                                </svg>



                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                One Click Invest </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="main-menu__list-item ">
                            <a href="<?php echo site_url(); ?>/dapps-explorer/">
                                <div class="main-menu__list-item-wrapper">
                                    <div class="main-menu__list-item-text">
                                        Explore </div>
                                </div>
                            </a>

                        </li>
                        <li class="main-menu__list-item ">
                            <div class="main-menu__list-item-wrapper">
                                <div class="main-menu__list-item-text">
                                    Support </div>
                            </div>
                            <div class="main-menu__dropdown">
                                <ul class="main-menu__dropdown-list">
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/faq/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_6173_22228)">
                                                        <path d="M12.0416 6.375C12.0416 7.9099 10.7806 9.1901 9.12492 9.45104V9.5C9.12492 9.66576 9.05907 9.82473 8.94186 9.94194C8.82465 10.0592 8.66568 10.125 8.49992 10.125C8.33416 10.125 8.17519 10.0592 8.05798 9.94194C7.94077 9.82473 7.87492 9.66576 7.87492 9.5V8.875C7.87492 8.70924 7.94077 8.55027 8.05798 8.43306C8.17519 8.31585 8.33416 8.25 8.49992 8.25C9.76346 8.25 10.7916 7.40885 10.7916 6.375C10.7916 5.34115 9.76346 4.5 8.49992 4.5C7.23638 4.5 6.20825 5.34115 6.20825 6.375C6.20825 6.54076 6.1424 6.69973 6.02519 6.81694C5.90798 6.93415 5.74901 7 5.58325 7C5.41749 7 5.25852 6.93415 5.14131 6.81694C5.0241 6.69973 4.95825 6.54076 4.95825 6.375C4.95825 4.65208 6.54679 3.25 8.49992 3.25C10.453 3.25 12.0416 4.65208 12.0416 6.375ZM8.49992 11.1667C8.2939 11.1667 8.0925 11.2278 7.9212 11.3422C7.7499 11.4567 7.61639 11.6194 7.53754 11.8097C7.4587 12 7.43807 12.2095 7.47827 12.4116C7.51846 12.6136 7.61767 12.7992 7.76335 12.9449C7.90903 13.0906 8.09464 13.1898 8.2967 13.23C8.49876 13.2702 8.70821 13.2495 8.89855 13.1707C9.08889 13.0919 9.25157 12.9584 9.36603 12.7871C9.48049 12.6158 9.54158 12.4144 9.54158 12.2083C9.54158 11.9321 9.43184 11.6671 9.23649 11.4718C9.04114 11.2764 8.77619 11.1667 8.49992 11.1667Z" fill="white"></path>
                                                    </g>
                                                    <rect x="1" y="0.5" width="15" height="15" rx="7.5" stroke="white"></rect>
                                                    <defs>
                                                        <clipPath id="clip0_6173_22228">
                                                            <rect x="0.5" width="16" height="16" rx="8" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                FAQ </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="https://discord.com/invite/9Ks7V5DN9z" class="main-menu__dropdown-list-item-link " target="_blank">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M13.5535 3.01557C12.5023 2.5343 11.3925 2.19287 10.2526 2C10.0966 2.27886 9.95547 2.56577 9.82976 2.85952C8.6155 2.67655 7.38067 2.67655 6.16641 2.85952C6.04063 2.5658 5.89949 2.27889 5.74357 2C4.60289 2.1945 3.4924 2.53674 2.44013 3.01809C0.351096 6.10885 -0.215207 9.12284 0.0679444 12.094C1.29133 12.9979 2.66066 13.6854 4.11639 14.1265C4.44417 13.6856 4.73422 13.2179 4.98346 12.7283C4.51007 12.5515 4.05317 12.3334 3.61804 12.0764C3.73256 11.9934 3.84456 11.9078 3.95279 11.8247C5.21891 12.4202 6.60083 12.7289 7.99997 12.7289C9.39912 12.7289 10.781 12.4202 12.0472 11.8247C12.1566 11.9141 12.2686 11.9997 12.3819 12.0764C11.9459 12.3338 11.4882 12.5523 11.014 12.7296C11.2629 13.2189 11.553 13.6862 11.881 14.1265C13.338 13.6871 14.7084 13 15.932 12.0953C16.2642 8.64966 15.3644 5.66336 13.5535 3.01557ZM5.34212 10.2668C4.55307 10.2668 3.90119 9.55072 3.90119 8.6698C3.90119 7.78888 4.53042 7.06653 5.3396 7.06653C6.14879 7.06653 6.79563 7.78888 6.78179 8.6698C6.76795 9.55072 6.14627 10.2668 5.34212 10.2668ZM10.6578 10.2668C9.86752 10.2668 9.21815 9.55072 9.21815 8.6698C9.21815 7.78888 9.84738 7.06653 10.6578 7.06653C11.4683 7.06653 12.1101 7.78888 12.0962 8.6698C12.0824 9.55072 11.462 10.2668 10.6578 10.2668Z" fill="white"></path>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Discord Support </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="main-menu__list-item ">
                            <div class="main-menu__list-item-wrapper">
                                <div class="main-menu__list-item-text">
                                    Company </div>
                            </div>
                            <div class="main-menu__dropdown">
                                <ul class="main-menu__dropdown-list">
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="<?php echo site_url(); ?>/blog/" class="main-menu__dropdown-list-item-link " target="_self">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M13.5 2.5H2.5C2.23478 2.5 1.98043 2.60536 1.79289 2.79289C1.60536 2.98043 1.5 3.23478 1.5 3.5V12.5C1.5 12.7652 1.60536 13.0196 1.79289 13.2071C1.98043 13.3946 2.23478 13.5 2.5 13.5H13.5C13.7652 13.5 14.0196 13.3946 14.2071 13.2071C14.3946 13.0196 14.5 12.7652 14.5 12.5V3.5C14.5 3.23478 14.3946 2.98043 14.2071 2.79289C14.0196 2.60536 13.7652 2.5 13.5 2.5ZM13.5 12.5H2.5V3.5H13.5V12.5ZM11.5 6C11.5 6.13261 11.4473 6.25979 11.3536 6.35355C11.2598 6.44732 11.1326 6.5 11 6.5H5C4.86739 6.5 4.74021 6.44732 4.64645 6.35355C4.55268 6.25979 4.5 6.13261 4.5 6C4.5 5.86739 4.55268 5.74021 4.64645 5.64645C4.74021 5.55268 4.86739 5.5 5 5.5H11C11.1326 5.5 11.2598 5.55268 11.3536 5.64645C11.4473 5.74021 11.5 5.86739 11.5 6ZM11.5 8C11.5 8.13261 11.4473 8.25979 11.3536 8.35355C11.2598 8.44732 11.1326 8.5 11 8.5H5C4.86739 8.5 4.74021 8.44732 4.64645 8.35355C4.55268 8.25979 4.5 8.13261 4.5 8C4.5 7.86739 4.55268 7.74021 4.64645 7.64645C4.74021 7.55268 4.86739 7.5 5 7.5H11C11.1326 7.5 11.2598 7.55268 11.3536 7.64645C11.4473 7.74021 11.5 7.86739 11.5 8ZM11.5 10C11.5 10.1326 11.4473 10.2598 11.3536 10.3536C11.2598 10.4473 11.1326 10.5 11 10.5H5C4.86739 10.5 4.74021 10.4473 4.64645 10.3536C4.55268 10.2598 4.5 10.1326 4.5 10C4.5 9.86739 4.55268 9.74021 4.64645 9.64645C4.74021 9.55268 4.86739 9.5 5 9.5H11C11.1326 9.5 11.2598 9.55268 11.3536 9.64645C11.4473 9.74021 11.5 9.86739 11.5 10Z" fill="white"></path>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Blog </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="https://braavos.notion.site/4664cacfb7124cd0bf8c4ff8b85e3d27" class="main-menu__dropdown-list-item-link " target="_blank">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path d="M15.4768 2.99267C15.4697 2.87035 15.4179 2.75491 15.3312 2.66827C15.2446 2.58163 15.1291 2.52982 15.0068 2.52267C11.7718 2.33517 9.17431 3.31892 8.05806 5.16142C7.32056 6.37955 7.32181 7.85892 8.04806 9.27017C7.63469 9.76227 7.33258 10.3379 7.16244 10.9577L6.14556 9.93705C6.63431 8.91642 6.61556 7.85267 6.08306 6.96892C5.25806 5.60705 3.35369 4.87705 0.989312 5.0158C0.866991 5.02294 0.75155 5.07475 0.664908 5.1614C0.578267 5.24804 0.526456 5.36348 0.519312 5.4858C0.379937 7.85017 1.11056 9.75455 2.47244 10.5795C2.92185 10.8541 3.43828 10.9995 3.96494 10.9995C4.47612 10.9933 4.97936 10.8721 5.43744 10.6452L6.99994 12.2077V13.9995C6.99994 14.1322 7.05262 14.2593 7.14638 14.3531C7.24015 14.4469 7.36733 14.4995 7.49994 14.4995C7.63255 14.4995 7.75972 14.4469 7.85349 14.3531C7.94726 14.2593 7.99994 14.1322 7.99994 13.9995V12.1564C7.99771 11.361 8.2684 10.5889 8.76681 9.96892C9.40991 10.305 10.1231 10.4849 10.8487 10.4939C11.5502 10.4962 12.2386 10.3046 12.8381 9.94018C14.6806 8.82518 15.6668 6.22767 15.4768 2.99267ZM2.98806 9.72455C2.02931 9.14393 1.48681 7.76955 1.49994 5.99955C3.26994 5.98455 4.64431 6.52892 5.22494 7.48767C5.52806 7.98767 5.57744 8.5708 5.37869 9.17142L3.85306 7.6458C3.75853 7.55599 3.63266 7.50666 3.50228 7.50833C3.37189 7.51 3.24732 7.56253 3.15512 7.65474C3.06292 7.74694 3.01039 7.87151 3.00872 8.00189C3.00705 8.13227 3.05638 8.25814 3.14619 8.35267L4.67181 9.8783C4.07119 10.077 3.48869 10.0277 2.98806 9.72455ZM12.3199 9.0858C11.4824 9.59268 10.4981 9.63143 9.49806 9.2108L12.8537 5.85455C12.9435 5.76002 12.9928 5.63414 12.9912 5.50376C12.9895 5.37338 12.937 5.24881 12.8448 5.15661C12.7526 5.06441 12.628 5.01187 12.4976 5.01021C12.3672 5.00854 12.2413 5.05787 12.1468 5.14768L8.79056 8.49955C8.36806 7.49955 8.40619 6.51455 8.91556 5.67767C9.78681 4.24017 11.8531 3.43893 14.4987 3.5008C14.5587 6.1458 13.7587 8.21455 12.3199 9.0858Z" fill="white"></path>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Careers </div>
                                        </a>
                                    </li>
                                    <li class="main-menu__dropdown-list-item">
                                        <a href="https://drive.google.com/drive/folders/1BwM7WhK4urO3n8sp3RqxFCr3tSQ1Y9Yi" class="main-menu__dropdown-list-item-link " target="_blank">
                                            <div class="main-menu__dropdown-list-item-link-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <g clip-path="url(#clip0_8596_7229)">
                                                        <path d="M8 0C6.41775 0 4.87103 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346628 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9978 5.87895 15.1542 3.84542 13.6544 2.34562C12.1546 0.845814 10.121 0.00223986 8 0ZM8 14.7692C6.66117 14.7692 5.35241 14.3722 4.23922 13.6284C3.12603 12.8846 2.2584 11.8274 1.74605 10.5905C1.2337 9.35356 1.09965 7.99249 1.36084 6.67939C1.62203 5.36629 2.26674 4.16012 3.21343 3.21343C4.16013 2.26674 5.36629 1.62203 6.67939 1.36084C7.99249 1.09965 9.35356 1.2337 10.5905 1.74605C11.8274 2.25839 12.8846 3.12602 13.6284 4.23922C14.3722 5.35241 14.7692 6.66117 14.7692 8C14.7672 9.79468 14.0534 11.5153 12.7843 12.7843C11.5153 14.0534 9.79469 14.7672 8 14.7692ZM5.53846 8C5.53846 8.51663 5.70102 9.02017 6.0031 9.43928C6.30518 9.8584 6.73147 10.1718 7.2216 10.3352C7.71172 10.4986 8.24082 10.5036 8.73395 10.3496C9.22709 10.1955 9.65925 9.89023 9.96923 9.47692C10.0673 9.34635 10.2131 9.26007 10.3748 9.23706C10.5364 9.21406 10.7006 9.2562 10.8312 9.35423C10.9617 9.45226 11.048 9.59814 11.071 9.75978C11.094 9.92142 11.0519 10.0856 10.9538 10.2162C10.4888 10.8359 9.84048 11.2937 9.10082 11.5246C8.36115 11.7555 7.56759 11.7478 6.83251 11.5027C6.09744 11.2575 5.45812 10.7874 5.00508 10.1587C4.55205 9.5301 4.30827 8.77487 4.30827 8C4.30827 7.22513 4.55205 6.4699 5.00508 5.84126C5.45812 5.21263 6.09744 4.74245 6.83251 4.49732C7.56759 4.25219 8.36115 4.24453 9.10082 4.47543C9.84048 4.70632 10.4888 5.16407 10.9538 5.78384C11.0024 5.8485 11.0377 5.92207 11.0578 6.00038C11.0779 6.07868 11.0824 6.16018 11.071 6.24022C11.0596 6.32025 11.0326 6.39726 10.9914 6.46685C10.9503 6.53643 10.8958 6.59723 10.8312 6.64577C10.7665 6.69431 10.6929 6.72964 10.6146 6.74974C10.5363 6.76984 10.4548 6.77432 10.3748 6.76293C10.2947 6.75154 10.2177 6.72449 10.1482 6.68334C10.0786 6.64218 10.0178 6.58773 9.96923 6.52308C9.65925 6.10977 9.22709 5.80447 8.73395 5.65043C8.24082 5.49638 7.71172 5.5014 7.2216 5.66478C6.73147 5.82815 6.30518 6.1416 6.0031 6.56071C5.70102 6.97983 5.53846 7.48336 5.53846 8Z" fill="white"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_8596_7229">
                                                            <rect width="16" height="16" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                            <div class="main-menu__dropdown-list-item-link-text">
                                                Media Kit </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="main-header__download-wrapper">
                <a href="<?php echo site_url(); ?>/download-braavos-wallet/" class="main-header__download-link">
                    <span class="main-header__download-link-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                            <path d="M16.8996 10.6751V15.3562C16.8996 15.589 16.8071 15.8122 16.6425 15.9768C16.4779 16.1414 16.2546 16.2339 16.0218 16.2339H3.14871C2.91593 16.2339 2.69268 16.1414 2.52807 15.9768C2.36347 15.8122 2.271 15.589 2.271 15.3562V10.6751C2.271 10.4423 2.36347 10.219 2.52807 10.0544C2.69268 9.88981 2.91593 9.79734 3.14871 9.79734C3.38149 9.79734 3.60474 9.88981 3.76935 10.0544C3.93395 10.219 4.02642 10.4423 4.02642 10.6751V14.4785H15.1441V10.6751C15.1441 10.4423 15.2366 10.219 15.4012 10.0544C15.5658 9.88981 15.7891 9.79734 16.0218 9.79734C16.2546 9.79734 16.4779 9.88981 16.6425 10.0544C16.8071 10.219 16.8996 10.4423 16.8996 10.6751ZM8.96429 11.296C9.04584 11.3779 9.14273 11.4428 9.24942 11.4871C9.3561 11.5314 9.47049 11.5542 9.58601 11.5542C9.70153 11.5542 9.81591 11.5314 9.9226 11.4871C10.0293 11.4428 10.1262 11.3779 10.2077 11.296L13.1334 8.37032C13.2983 8.20543 13.391 7.9818 13.391 7.74861C13.391 7.51542 13.2983 7.29178 13.1334 7.1269C12.9685 6.96201 12.7449 6.86937 12.5117 6.86937C12.2785 6.86937 12.0549 6.96201 11.89 7.1269L10.463 8.55391V2.48306C10.463 2.25028 10.3705 2.02703 10.2059 1.86242C10.0413 1.69782 9.81806 1.60535 9.58528 1.60535C9.35249 1.60535 9.12924 1.69782 8.96464 1.86242C8.80003 2.02703 8.70756 2.25028 8.70756 2.48306V8.55391L7.28055 7.12836C7.1989 7.04671 7.10197 6.98195 6.9953 6.93776C6.88863 6.89358 6.77429 6.87084 6.65883 6.87084C6.42564 6.87084 6.20201 6.96347 6.03712 7.12836C5.95547 7.21 5.89071 7.30693 5.84652 7.4136C5.80234 7.52028 5.7796 7.63461 5.7796 7.75007C5.7796 7.98326 5.87223 8.2069 6.03712 8.37179L8.96429 11.296Z" fill="white"></path>
                        </svg>
                    </span>
                    <span class="main-header__download-link-text">
                        Download
                    </span>
                </a>
            </div>
            <div class="main-header__switch-wrapper">
                <div class="main__switch switch">
                    <div class="switch__box">
                        <input type="checkbox" <?php echo $is_dark ? 'checked' : ''; ?> id="switch">
                        <label for="switch"></label>
                    </div>
                </div>
            </div>

            <div class="main-header__mobile-menu">
                <a href="#" class="main-header__mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M28 16C28 16.2652 27.8946 16.5196 27.7071 16.7071C27.5196 16.8946 27.2652 17 27 17H5C4.73478 17 4.48043 16.8946 4.29289 16.7071C4.10536 16.5196 4 16.2652 4 16C4 15.7348 4.10536 15.4804 4.29289 15.2929C4.48043 15.1054 4.73478 15 5 15H27C27.2652 15 27.5196 15.1054 27.7071 15.2929C27.8946 15.4804 28 15.7348 28 16ZM5 9H27C27.2652 9 27.5196 8.89464 27.7071 8.70711C27.8946 8.51957 28 8.26522 28 8C28 7.73478 27.8946 7.48043 27.7071 7.29289C27.5196 7.10536 27.2652 7 27 7H5C4.73478 7 4.48043 7.10536 4.29289 7.29289C4.10536 7.48043 4 7.73478 4 8C4 8.26522 4.10536 8.51957 4.29289 8.70711C4.48043 8.89464 4.73478 9 5 9ZM27 23H5C4.73478 23 4.48043 23.1054 4.29289 23.2929C4.10536 23.4804 4 23.7348 4 24C4 24.2652 4.10536 24.5196 4.29289 24.7071C4.48043 24.8946 4.73478 25 5 25H27C27.2652 25 27.5196 24.8946 27.7071 24.7071C27.8946 24.5196 28 24.2652 28 24C28 23.7348 27.8946 23.4804 27.7071 23.2929C27.5196 23.1054 27.2652 23 27 23Z" fill=""></path>
                    </svg>
                </a>
            </div>
        </div>

    </header>