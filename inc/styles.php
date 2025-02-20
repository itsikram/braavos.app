<?php

/**
 * Register styles and scripts
 */
add_action('wp_enqueue_scripts', function () {
    // Styles
    wp_enqueue_style('main-style', get_template_directory_uri() . '/src/css/main.css');
    wp_enqueue_style('animations-style', get_template_directory_uri() . '/src/css/animations.css');
    // wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css');

    // Scripts
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/src/js/aos.min.js', null, null, true);
    wp_enqueue_script('braavos-main', get_template_directory_uri() . '/src/js/main.js', null, null, true);

    if (
        is_page_template('templates/homepage.php') ||
        is_singular('feature')
    ) {
        wp_enqueue_style('swiper-style', get_template_directory_uri() . '/src/css/swiper-bundle.min.css');
        wp_enqueue_script('swiper-scripts', get_template_directory_uri() . '/src/js/swiper-bundle.min.js', null, null, true);
    }

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
});

add_filter('autoptimize_html_after_minify', 'blLazyLoadScripts');
function blLazyLoadScripts($content) {
    $excludedScripts = [
        '/wp-smushit/'
    ];

    $content = preg_replace_callback(
        '#<script(?: type=["\']text\/javascript["\'])?([^>]*) src=["\']([^"\']+)["\']#',
        function ($matches) use ($excludedScripts) {
            foreach ($excludedScripts as $str) {
                if (false !== strpos($matches[2], $str)) {
                    return $matches[0];
                }
            }

            return sprintf(
                '<script type="rocketlazyloadscript"%s data-rocket-src="%s"',
                $matches[1],
                $matches[2]
            );
        },
        $content
    );

    return $content;
}
