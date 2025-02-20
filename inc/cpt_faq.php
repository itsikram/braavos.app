<?php


/* Register a custom post type called "faq". */
function braavos_faq_init(){
    $labels = array(
        'name'                  => __( 'FAQ', 'braavos' ),
        'singular_name'         => __( 'FAQ', 'braavos' ),
        'menu_name'             => __( 'FAQ', 'braavos' ),
        'name_admin_bar'        => __( 'FAQ', 'braavos' ),
        'add_new'               => __( 'Add New', 'braavos' ),
        'add_new_item'          => __( 'Add New', 'braavos' ),
        'new_item'              => __( 'New FAQ', 'braavos' ),
        'edit_item'             => __( 'Edit FAQ', 'braavos' ),
        'view_item'             => __( 'View FAQ', 'braavos' ),
        'all_items'             => __( 'FAQ', 'braavos' ),
        'search_items'          => __( 'Search FAQ', 'braavos' ),
        'parent_item_colon'     => __( 'Parent FAQ:', 'braavos' ),
        'not_found'             => __( 'No FAQ found.', 'braavos' ),
        'not_found_in_trash'    => __( 'No FAQ found in Trash.', 'braavos' ),
        'featured_image'        => __( 'Cover image', 'braavos' ),
        'set_featured_image'    => __( 'Set cover image', 'braavos' ),
        'remove_featured_image' => __( 'Remove cover image', 'braavos' ),
        'use_featured_image'    => __( 'Use as cover image', 'braavos' ),
        'archives'              => __( 'CsPost posts archives', 'braavos' ),
        'insert_into_item'      => __( 'Insert into FAQ', 'braavos' ),
        'uploaded_to_this_item' => __( 'Uploaded to FAQ', 'braavos' ),
        'filter_items_list'     => __( 'Filter FAQ list', 'braavos' ),
        'items_list_navigation' => __( 'FAQ list navigation', 'braavos' ),
        'items_list'            => __( 'FAQ list', 'braavos' ),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'FAQ post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug'=>'faq' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author' ), //, 'excerpt', 'comments', 'author', 'thumbnail'
        'taxonomies'         => array(),
        'show_in_rest'       => true
    );
    register_post_type( 'faq', $args );

    $labels = array(
        'name'                       => __( 'Faq category', 'braavos' ),
        'singular_name'              => __( 'Faq category', 'braavos' ),
        'menu_name'                  => __( 'Faq category', 'braavos' ),
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
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_menu'               => true,
        'rewrite'                    => array( 'slug'=>'faqcat', 'with_front'=>false ),
    );



    register_taxonomy('faqcat', array('faq'), $args);

}
add_action( 'init', 'braavos_faq_init' );

?>