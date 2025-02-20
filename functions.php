<?php

define('theme_slice_http_path', get_template_directory_uri() . '/src/');

require_once __DIR__ . '/inc/cpt-faq.php';
require_once __DIR__ . '/inc/cpt-feature.php';
require_once __DIR__ . '/inc/breadcrumb.php';
require_once __DIR__ . '/inc/cf7.php';
require_once __DIR__ . '/inc/styles.php';
require_once __DIR__ . '/inc/acf.php';
require_once __DIR__ . '/inc/disable.php';
require_once __DIR__ . '/inc/thumbnail.php';

if (file_exists(__DIR__ . '/cmb2/init.php')) {
	require_once __DIR__ . '/cmb2/init.php';
}

/*
 * Remove the archive title prefix.
 */
add_filter('get_the_archive_title_prefix', '__return_false');

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function blIsMenuItemActive(string $itemUrl): bool
{
	global $wp;
	return $itemUrl === trailingslashit(home_url($wp->request));
}

/**
 * Get the excerpt limited by the number of characters. UTF-8 supported.
 *
 * @param int $limit  number of characters
 */
function blGetExcerpt(int $limit): string
{
	$excerpt = get_the_excerpt();
	$excerpt = preg_replace('/ \[.*?\]/', '', $excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
	if (mb_strlen($excerpt) > $limit) {
		$excerpt = mb_substr($excerpt, 0, $limit);
		$excerpt = mb_substr($excerpt, 0, mb_strripos($excerpt, ' '));
		$excerpt = trim($excerpt) . '&hellip;';
	}

	return $excerpt;
}
add_filter('excerpt_length', fn() => 30);

add_filter('oembed_response_data', function ($data) {
	unset($data['author_url']);
	unset($data['author_name']);

	return $data;
});

/**
 * Exclude posts with 'Hidden' tag from all front-end queries.
 */
add_action('pre_get_posts', function (\WP_Query $query) {
	if (!is_admin() && ($query->get('post_type') === 'post' || is_category())) {
		$query->set('tag__not_in', get_term_by('slug', 'hidden', 'post_tag')->term_id);
	}
});

/**
 * Exclude url from sitemap.
 */
add_filter('wpseo_sitemap_entry', function ($url, $string, $obj) {
	if (substr($url['loc'], -4) === '/ru/') {
		return false;
	}

	return $url;
}, 10, 3);

/**
 * Role access to the domain
 */

add_action('init', 'check_user_domain_access');

function check_user_domain_access()
{
	// if (is_user_logged_in()) {
	// 	$user = wp_get_current_user();
	// 	$allowed_domains = array('braavos.app');
	// 	$current_domain = $_SERVER['HTTP_HOST'];

	// 	if (in_array($current_domain, $allowed_domains)) {
	// 		if (!in_array('administrator', $user->roles)) {
	// 			wp_logout();
	// 			wp_redirect(home_url());
	// 			exit;
	// 		}
	// 	}
	// }

	$allowed_domains = array('braavos.app');
	$current_domain = $_SERVER['HTTP_HOST'];
}

add_action('after_setup_theme', function () {
	$daaps_args = array(
		'label'               => __('dApps', 'textdomain'), // Singular and plural label
		'public'              => true,                    // Makes it publicly accessible
		'has_archive'         => true,                    // Enables archives for this post type
		'rewrite'             => array('slug' => 'dApps'), // Custom slug for the URL
		'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // Features supported
		'menu_icon'           => 'dashicons-book',        // Icon for the post type in the admin menu
	);
	register_post_type('dapps', $daaps_args);



	$career_args = array(
		'label'               => __('Career', 'textdomain'), // Singular and plural label
		'public'              => true,                    // Makes it publicly accessible
		'has_archive'         => true,                    // Enables archives for this post type
		'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // Features supported
		'menu_icon'           => 'dashicons-book',        // Icon for the post type in the admin menu
	);
	register_post_type('career', $career_args);


	$career_tag_labels = array(
		'name'              => _x('Tags', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Tag', 'taxonomy singular name', 'textdomain'),
	);

	$career_tag_args = array(
		'hierarchical'      => true, // True for categories, false for tags
		'labels'            => $career_tag_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	register_taxonomy('career_tags', array('career'), $career_tag_args);

	$dapps_tag_labels = array(
		'name'              => _x('Tags', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Tag', 'taxonomy singular name', 'textdomain'),
	);

	$dapps_tag_args = array(
		'hierarchical'      => true, // True for categories, false for tags
		'labels'            => $dapps_tag_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
	);

	register_taxonomy('tags', array('dapps'), $dapps_tag_args);
});

/**
 * Disable plugins for the domain
 */

add_filter('option_active_plugins', 'disable_plugin_for_specific_domain');

function disable_plugin_for_specific_domain($plugins)
{
	$current_domain = $_SERVER['HTTP_HOST'];

	if ($current_domain === 'braavosstg.wpenginepowered.com') {
		$plugins_to_disable = array(
			'wp-2fa/wp-2fa.php'
		);

		foreach ($plugins_to_disable as $plugin) {
			$key = array_search($plugin, $plugins);
			if (false !== $key) {
				unset($plugins[$key]);
			}
		}
	}

	return $plugins;
}

function your_theme_enqueue_assets()
{


	if (!is_home() && !is_single() && !is_archive()) {
		wp_enqueue_style(
			'reset',
			get_template_directory_uri() . '/assets/css/reset.css',
			array(),
			filemtime(get_template_directory() . '/assets/css/reset.css')
		);
	}
	wp_enqueue_style(
		'your-theme-style',
		get_template_directory_uri() . '/build/main.css',
		array(),
		filemtime(get_template_directory() . '/build/main.css')
	);



	wp_enqueue_script(
		'your-theme-script',
		get_template_directory_uri() . '/build/main.js',
		array(),
		filemtime(get_template_directory() . '/build/main.js'),
		true
	);


	wp_localize_script('your-theme-script', 'themeData', array(
		'themeUrl' => get_template_directory_uri(),
	));

	if (is_page_template('templates/template-homepage.php')) {
		wp_enqueue_script(
			'homepage-script',
			get_template_directory_uri() . '/assets/js/homepage.js',
			array(),
			filemtime(get_template_directory() . '/assets/js/homepage.js'),
			true
		);
	}
	// wp_enqueue_script(
	// 	'swiper.js',
	// 	'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
	// 	array(),
	// 	false,
	// 	true
	// );
	if (is_page_template('templates/template-connect-page.php')) {
		wp_enqueue_script(
			'homepage-script',
			get_template_directory_uri() . '/assets/js/connect.js',
			array(),
			filemtime(get_template_directory() . '/assets/js/connect.js'),
			true
		);
	}

	if (is_page_template('templates/template-defi-page.php')) {
		wp_enqueue_script(
			'homepage-script',
			get_template_directory_uri() . '/assets/js/defi.js',
			array(),
			filemtime(get_template_directory() . '/assets/js/defi.js'),
			true
		);
	}

	if (is_page_template('templates/template-deposit-page.php')) {
		wp_enqueue_script(
			'homepage-script',
			get_template_directory_uri() . '/assets/js/deposit.js',
			array(),
			filemtime(get_template_directory() . '/assets/js/deposit.js'),
			true
		);
	}



	if (is_page_template('templates/template-security-page.php')) {
		wp_enqueue_script(
			'homepage-script',
			get_template_directory_uri() . '/assets/js/security.js',
			array(),
			filemtime(get_template_directory() . '/assets/js/security.js'),
			true
		);
	}

	if (is_page_template('templates/template-stake-page.php')) {
		wp_enqueue_script(
			'homepage-script',
			get_template_directory_uri() . '/assets/js/stake.js',
			array(),
			filemtime(get_template_directory() . '/assets/js/stake.js'),
			true
		);
	}

	if (is_page_template('templates/template-swap-page.php')) {
		wp_enqueue_script(
			'homepage-script',
			get_template_directory_uri() . '/assets/js/swap.js',
			array(),
			filemtime(get_template_directory() . '/assets/js/swap.js'),
			true
		);
	}


	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), false, false);
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, false);
	wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), false, false);

	wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false);
	wp_localize_script('custom-script', 'ajax_object', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_assets');




add_action('cmb2_admin_init', function () {


	$blog = new_cmb2_box(
		array(
			'id' => 'blog_details',
			'title' => __('Blog Additional Details', 'tm'),
			'object_types' => array('post'),
			'show_names' => true,
		)
	);



	$blog->add_field(array(
		'name' => 'Blog Short Description',
		'id' => '_blog_short_description',
		'type' => 'textarea',
	));

	$blog->add_field(array(
		'name' => 'Blog Hover Image',
		'id' => '_blog_hover_image',
		'type' => 'file',
	));

	$blog->add_field(array(
		'name' => 'X link',
		'id' => '_blog_x_link',
		'type' => 'text',
	));
	$blog->add_field(array(
		'name' => 'Braavos link',
		'id' => '_blog_braavos_link',
		'type' => 'text',
	));
	$blog->add_field(array(
		'name' => 'Telegram link',
		'id' => '_blog_telegram_link',
		'type' => 'text',
	));

	$blog->add_field(array(
		'name' => 'Twitter link',
		'id' => '_blog_linkedin_link',
		'type' => 'text',
	));


	$dapps = new_cmb2_box(
		array(
			'id' => 'dapps_details',
			'title' => __('dApps Additional Details', 'tm'),
			'object_types' => array('dapps'),
			'show_names' => true,
		)
	);

	$dapps->add_field(array(
		'name' => 'Profile Picture',
		'id' => '_profile_picture',
		'type' => 'file',
	));

	$dapps->add_field(array(
		'name' => 'Cover Photo',
		'id' => '_cover_photo',
		'type' => 'file',
	));

	$dapps->add_field(array(
		'name' => 'Short Description',
		'id' => '_short_description',
		'type' => 'textarea',
	));

	$dapps->add_field(array(
		'name' => 'Learn More Link',
		'id' => '_learn_more_link',
		'type' => 'text_url',
		'default' => '#'
	));

	$dapps->add_field(array(
		'name' => 'Website Link',
		'id' => '_website_link',
		'type' => 'text_url',
		'default' => '#'
	));

	$dapps->add_field(array(
		'name' => 'X(twitter) Link',
		'id' => '_x_link',
		'type' => 'text_url',
		'default' => '#'
	));
});




// Enable PHP sessions
function start_session() {
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session');
// Add an AJAX handler for updating session value
function update_session_via_ajax() {

    // Check if the value is passed
    if (isset($_POST['theme_mode'])) {
        // Update the PHP session
		$theme_mode = sanitize_text_field($_POST['theme_mode']);
		if(setcookie('theme_mode', $theme_mode, time() + (30 * 24 * 60 * 60), "/")){
			wp_send_json_success($theme_mode);

		}; // 7 days
    } else {
        wp_send_json_error('No value provided');
    }
}

add_action('wp_ajax_update_session', 'update_session_via_ajax');
add_action('wp_ajax_nopriv_update_session', 'update_session_via_ajax'); // For non-logged-in users


if ( file_exists( dirname( __FILE__ ) . '/inc/redux-framework/redux-core/framework.php' ) ) {
    require_once dirname( __FILE__ ) . '/inc/redux-framework/redux-core/framework.php';
}
if ( file_exists( dirname( __FILE__ ) . '/inc/redux-framework/sample/sample-config.php' ) ) {
    require_once dirname( __FILE__ ) . '/inc/redux-framework/sample/config.php';
}







