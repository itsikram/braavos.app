<?php

/**
 * Register CPT "Feature" and taxonomy "Feature Category".
 */
function braavos_feature_init() {
    register_post_type('feature', [
        'labels'             => [
            'name'                  => __('Features', 'braavos'),
            'singular_name'         => __('Feature', 'braavos'),
            'menu_name'             => __('Features', 'braavos'),
            'name_admin_bar'        => __('Features', 'braavos'),
            'new_item'              => __('New Feature', 'braavos'),
            'edit_item'             => __('Edit Feature', 'braavos'),
            'view_item'             => __('View Feature', 'braavos'),
            'all_items'             => __('All Features', 'braavos'),
            'search_items'          => __('Search Features', 'braavos'),
            'parent_item_colon'     => __('Parent Feature:', 'braavos'),
            'not_found'             => __('No Features found.', 'braavos'),
            'not_found_in_trash'    => __('No Features found in Trash.', 'braavos'),
            'insert_into_item'      => __('Insert into Feature', 'braavos'),
            'uploaded_to_this_item' => __('Uploaded to Feature', 'braavos'),
            'filter_items_list'     => __('Filter Feature list', 'braavos'),
            'items_list_navigation' => __('Feature list navigation', 'braavos'),
            'items_list'            => __('Feature list', 'braavos'),
        ],
        'description'        => 'Feature post type',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'rewrite'            => ['slug' => 'wallet-features', 'with_front' => false],
        // 'supports' core features: 'excerpt', 'comments', 'author', 'thumbnail', 'page-attributes'
        'supports'           => ['title', 'editor', 'thumbnail', 'author', 'excerpt', 'page-attributes'],
        'taxonomies'         => [],
        'show_in_rest'       => true
    ]);

    register_taxonomy('feature_cat', 'feature', [
        'labels'                => [
            'name'          => __('Feature Categories', 'braavos'),
            'singular_name' => __('Feature Category', 'braavos'),
            'menu_name'     => __('Feature Categories', 'braavos'),
        ],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'show_in_nav_menus'     => true,
        'show_tagcloud'         => true,
        'show_in_menu'          => true,
        'rewrite'               => ['with_front' => false],
    ]);
}

add_action('init', 'braavos_feature_init');
