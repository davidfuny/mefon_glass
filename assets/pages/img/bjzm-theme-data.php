<?php

/**
 * Generate Custom Post Types & Taxonomies
 */


// News Custom Post Type
function generate_news_posts() {

    $labels = array(
        'name'                  => _x( 'News Posts', 'Post Type General Name', 'bjzm' ),
        'singular_name'         => _x( 'News Post', 'Post Type Singular Name', 'bjzm' ),
        'menu_name'             => __( 'News Posts', 'bjzm' ),
        'name_admin_bar'        => __( 'News Post', 'bjzm' ),
        'archives'              => __( 'Item Archives', 'bjzm' ),
        'parent_item_colon'     => __( 'Parent Item:', 'bjzm' ),
        'all_items'             => __( 'All Items', 'bjzm' ),
        'add_new_item'          => __( 'Add New Post', 'bjzm' ),
        'add_new'               => __( 'Add New', 'bjzm' ),
        'new_item'              => __( 'New Post', 'bjzm' ),
        'edit_item'             => __( 'Edit Post', 'bjzm' ),
        'update_item'           => __( 'Update Post', 'bjzm' ),
        'view_item'             => __( 'View Post', 'bjzm' ),
        'search_items'          => __( 'Search Posts', 'bjzm' ),
        'not_found'             => __( 'Not found', 'bjzm' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'bjzm' ),
        'featured_image'        => __( 'Featured Image', 'bjzm' ),
        'set_featured_image'    => __( 'Set featured image', 'bjzm' ),
        'remove_featured_image' => __( 'Remove featured image', 'bjzm' ),
        'use_featured_image'    => __( 'Use as featured image', 'bjzm' ),
        'insert_into_item'      => __( 'Insert into item', 'bjzm' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'bjzm' ),
        'items_list'            => __( 'Items list', 'bjzm' ),
        'items_list_navigation' => __( 'Items list navigation', 'bjzm' ),
        'filter_items_list'     => __( 'Filter items list', 'bjzm' ),
    );
    $args = array(
        'label'                 => __( 'News Post', 'bjzm' ),
        'description'           => __( 'News Post', 'bjzm' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'revisions', 'editor' , 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'taxonomies' => array('news_category'),
        'rewrite' => array('slug' => 'news')
    );
    register_post_type( 'news_post', $args );

}
// add_action( 'init', 'generate_news_posts', 0 );

function generate_products_cpt() {

    $labels = array(
        'name'                  => _x( 'Sheridan Products', 'Post Type General Name', 'bjzm' ),
        'singular_name'         => _x( 'Sheridan Product', 'Post Type Singular Name', 'bjzm' ),
        'menu_name'             => __( 'Sheridan Products', 'bjzm' ),
        'name_admin_bar'        => __( 'Sheridan Product', 'bjzm' ),
        'archives'              => __( 'Sheridan Product Archives', 'bjzm' ),
        'parent_item_colon'     => __( 'Parent Sheridan Product:', 'bjzm' ),
        'all_items'             => __( 'All Sheridan Products', 'bjzm' ),
        'add_new_item'          => __( 'Add New Post', 'bjzm' ),
        'add_new'               => __( 'Add New', 'bjzm' ),
        'new_item'              => __( 'New Sheridan Product', 'bjzm' ),
        'edit_item'             => __( 'Edit Sheridan Product', 'bjzm' ),
        'update_item'           => __( 'Update Sheridan Product', 'bjzm' ),
        'view_item'             => __( 'View Sheridan Product', 'bjzm' ),
        'search_items'          => __( 'Search Posts', 'bjzm' ),
        'not_found'             => __( 'Not found', 'bjzm' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'bjzm' ),
        'featured_image'        => __( 'Featured Image', 'bjzm' ),
        'set_featured_image'    => __( 'Set featured image', 'bjzm' ),
        'remove_featured_image' => __( 'Remove featured image', 'bjzm' ),
        'use_featured_image'    => __( 'Use as featured image', 'bjzm' ),
        'insert_into_item'      => __( 'Insert into item', 'bjzm' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'bjzm' ),
        'items_list'            => __( 'Sheridan Products list', 'bjzm' ),
        'items_list_navigation' => __( 'Sheridan Products list navigation', 'bjzm' ),
        'filter_items_list'     => __( 'Filter items list', 'bjzm' ),
    );
    $args = array(
        'label'                 => __( 'Sheridan Product', 'bjzm' ),
        'description'           => __( 'Sheridan Product', 'bjzm' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'revisions', 'editor' , 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest' => true,
        'taxonomies' => array('sheridan_product_category'),
        'rewrite' => array('slug' => 'products')
    );
    register_post_type( 'sheridan_product', $args );

}
add_action( 'init', 'generate_products_cpt', 0 );


// Sheridan Product Category Taxonomy
function create_sheridan_product_category_taxonomy() {

    $labels = array(
        'name' => _x( 'Sheridan Product Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Sheridan Product Category', 'taxonomy singular name' ),
        'all_items' => __( 'All Sheridan Product Categories' ),
        'separate_items_with_commas' => __( 'Separate categories with commas' ),
        'add_or_remove_items' => __( 'Add or remove categories' ),
        'menu_name' => __( 'Categories' ),
        'show_in_rest' => true,
    ); 

    register_taxonomy('sheridan_product_category','sheridan_product',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ));

}
add_action( 'init', 'create_sheridan_product_category_taxonomy', 0 );

function generate_plants_cpt() {

    $labels = array(
        'name'                  => _x( 'Plants', 'Post Type General Name', 'bjzm' ),
        'singular_name'         => _x( 'Plant', 'Post Type Singular Name', 'bjzm' ),
        'menu_name'             => __( 'Plants', 'bjzm' ),
        'name_admin_bar'        => __( 'Plant', 'bjzm' ),
        'archives'              => __( 'Plant Archives', 'bjzm' ),
        'parent_item_colon'     => __( 'Parent Plant:', 'bjzm' ),
        'all_items'             => __( 'All Plants', 'bjzm' ),
        'add_new_item'          => __( 'Add New Post', 'bjzm' ),
        'add_new'               => __( 'Add New', 'bjzm' ),
        'new_item'              => __( 'New Plant', 'bjzm' ),
        'edit_item'             => __( 'Edit Plant', 'bjzm' ),
        'update_item'           => __( 'Update Plant', 'bjzm' ),
        'view_item'             => __( 'View Plant', 'bjzm' ),
        'search_items'          => __( 'Search Posts', 'bjzm' ),
        'not_found'             => __( 'Not found', 'bjzm' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'bjzm' ),
        'featured_image'        => __( 'Featured Image', 'bjzm' ),
        'set_featured_image'    => __( 'Set featured image', 'bjzm' ),
        'remove_featured_image' => __( 'Remove featured image', 'bjzm' ),
        'use_featured_image'    => __( 'Use as featured image', 'bjzm' ),
        'insert_into_item'      => __( 'Insert into item', 'bjzm' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'bjzm' ),
        'items_list'            => __( 'Plants list', 'bjzm' ),
        'items_list_navigation' => __( 'Plants list navigation', 'bjzm' ),
        'filter_items_list'     => __( 'Filter items list', 'bjzm' ),
    );
    $args = array(
        'label'                 => __( 'Plant', 'bjzm' ),
        'description'           => __( 'Plant', 'bjzm' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'revisions', 'editor' , 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest' => true,
        'taxonomies' => array('sheridan_plant_category', 'plant_properties', 'plant_usage_properties'),
        'rewrite' => array('slug' => 'plants')
    );
    register_post_type( 'sheridan_plant', $args );

}
add_action( 'init', 'generate_plants_cpt', 0 );


// Plant Category Taxonomy
function create_sheridan_plant_category_taxonomy() {

    $labels = array(
        'name' => _x( 'Plant Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Plant Category', 'taxonomy singular name' ),
        'all_items' => __( 'All Plant Categories' ),
        'separate_items_with_commas' => __( 'Separate categories with commas' ),
        'add_or_remove_items' => __( 'Add or remove categories' ),
        'menu_name' => __( 'Categories' ),
        'show_in_rest' => true,
    ); 

    register_taxonomy('sheridan_plant_category','sheridan_plant',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'show_admin_column' => true
    ));

    $labels = array(
        'name' => _x( 'Plant Properties', 'taxonomy general name' ),
        'singular_name' => _x( 'Plant Property', 'taxonomy singular name' ),
        'all_items' => __( 'All Plant Properties' ),
        'separate_items_with_commas' => __( 'Separate properties with commas' ),
        'add_or_remove_items' => __( 'Add or remove properties' ),
        'menu_name' => __( 'Plant Properties' ),
        'show_in_rest' => true,
    ); 

    register_taxonomy('plant_properties','sheridan_plant',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'show_admin_column' => true
    ));

    $labels = array(
        'name' => _x( 'Usage Properties', 'taxonomy general name' ),
        'singular_name' => _x( 'Usage Property', 'taxonomy singular name' ),
        'all_items' => __( 'All Usage Properties' ),
        'separate_items_with_commas' => __( 'Separate usage properties with commas' ),
        'add_or_remove_items' => __( 'Add or remove usage properties' ),
        'menu_name' => __( 'Usage Properties' ),
        'show_in_rest' => true,
    ); 

    register_taxonomy('plant_usage_properties','sheridan_plant',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'show_admin_column' => true
    ));

}
add_action( 'init', 'create_sheridan_plant_category_taxonomy', 0 );

// Instructional Videos Custom Post Type
function generate_help_videos_posts() {

    $labels = array(
        'name'                  => _x( 'Instructional Videos Posts', 'Post Type General Name', 'bjzm' ),
        'singular_name'         => _x( 'Instructional Videos Post', 'Post Type Singular Name', 'bjzm' ),
        'menu_name'             => __( 'Instructional Videos Posts', 'bjzm' ),
        'name_admin_bar'        => __( 'Instructional Videos Post', 'bjzm' ),
        'archives'              => __( 'Item Archives', 'bjzm' ),
        'parent_item_colon'     => __( 'Parent Item:', 'bjzm' ),
        'all_items'             => __( 'All Items', 'bjzm' ),
        'add_new_item'          => __( 'Add New Post', 'bjzm' ),
        'add_new'               => __( 'Add New', 'bjzm' ),
        'new_item'              => __( 'New Post', 'bjzm' ),
        'edit_item'             => __( 'Edit Post', 'bjzm' ),
        'update_item'           => __( 'Update Post', 'bjzm' ),
        'view_item'             => __( 'View Post', 'bjzm' ),
        'search_items'          => __( 'Search Posts', 'bjzm' ),
        'not_found'             => __( 'Not found', 'bjzm' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'bjzm' ),
        'featured_image'        => __( 'Featured Image', 'bjzm' ),
        'set_featured_image'    => __( 'Set featured image', 'bjzm' ),
        'remove_featured_image' => __( 'Remove featured image', 'bjzm' ),
        'use_featured_image'    => __( 'Use as featured image', 'bjzm' ),
        'insert_into_item'      => __( 'Insert into item', 'bjzm' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'bjzm' ),
        'items_list'            => __( 'Items list', 'bjzm' ),
        'items_list_navigation' => __( 'Items list navigation', 'bjzm' ),
        'filter_items_list'     => __( 'Filter items list', 'bjzm' ),
    );
    $args = array(
        'label'                 => __( 'Instructional Videos Post', 'bjzm' ),
        'description'           => __( 'Instructional Videos Post', 'bjzm' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'revisions', 'editor' , 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'taxonomies' => array('help_video_category'),
        'rewrite' => array('slug' => 'helpvideos')
    );
    register_post_type( 'help_videos_post', $args );

}

add_action( 'init', 'generate_help_videos_posts', 0 );

// Instructional Videos Categories Taxonomy
function create_help_video_category_taxonomy() {

    $labels = array(
        'name' => _x( 'Instructional Videos Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Instructional Videos Category', 'taxonomy singular name' ),
        'all_items' => __( 'All Instructional Video Categories' ),
        'separate_items_with_commas' => __( 'Separate categories with commas' ),
        'add_or_remove_items' => __( 'Add or remove categories' ),
        'menu_name' => __( 'Categories' ),
        'show_in_rest' => true,
    );

    register_taxonomy('help_video_category','help_video',array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'show_admin_column' => true
    ));

}
add_action( 'init', 'create_help_video_category_taxonomy', 0 );

// Gardening Tips Custom Post Type
function generate_gardening_tips_posts() {

    $labels = array(
        'name'                  => _x( 'Gardening Tips Posts', 'Post Type General Name', 'bjzm' ),
        'singular_name'         => _x( 'Gardening Tips Post', 'Post Type Singular Name', 'bjzm' ),
        'menu_name'             => __( 'Gardening Tips Posts', 'bjzm' ),
        'name_admin_bar'        => __( 'Gardening Tips Post', 'bjzm' ),
        'archives'              => __( 'Item Archives', 'bjzm' ),
        'parent_item_colon'     => __( 'Parent Item:', 'bjzm' ),
        'all_items'             => __( 'All Items', 'bjzm' ),
        'add_new_item'          => __( 'Add New Post', 'bjzm' ),
        'add_new'               => __( 'Add New', 'bjzm' ),
        'new_item'              => __( 'New Post', 'bjzm' ),
        'edit_item'             => __( 'Edit Post', 'bjzm' ),
        'update_item'           => __( 'Update Post', 'bjzm' ),
        'view_item'             => __( 'View Post', 'bjzm' ),
        'search_items'          => __( 'Search Posts', 'bjzm' ),
        'not_found'             => __( 'Not found', 'bjzm' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'bjzm' ),
        'featured_image'        => __( 'Featured Image', 'bjzm' ),
        'set_featured_image'    => __( 'Set featured image', 'bjzm' ),
        'remove_featured_image' => __( 'Remove featured image', 'bjzm' ),
        'use_featured_image'    => __( 'Use as featured image', 'bjzm' ),
        'insert_into_item'      => __( 'Insert into item', 'bjzm' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'bjzm' ),
        'items_list'            => __( 'Items list', 'bjzm' ),
        'items_list_navigation' => __( 'Items list navigation', 'bjzm' ),
        'filter_items_list'     => __( 'Filter items list', 'bjzm' ),
    );
    $args = array(
        'label'                 => __( 'Gardening Tips Post', 'bjzm' ),
        'description'           => __( 'Gardening Tips Post', 'bjzm' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail', 'revisions', 'editor' , 'page-attributes'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'taxonomies' => array('gardening_tips_category'),
        'rewrite' => array('slug' => 'gardeningtips')
    );
    register_post_type( 'gardening_tips_post', $args );

}

add_action( 'init', 'generate_gardening_tips_posts', 0 );

// Gardening Tips Taxonomy
function create_gardening_tips_category_taxonomy() {

    $labels = array(
        'name' => _x( 'Gardening Tips', 'taxonomy general name' ),
        'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
        'all_items' => __( 'All Gardening Tips' ),
        'parent_item' => __( 'Parent Topic' ),
        'parent_item_colon' => __( 'Parent Topic:' ),
        'edit_item' => __( 'Edit Topic' ),
        'update_item' => __( 'Update Topic' ),
        'add_new_item' => __( 'Add New Topic' ),
        'new_item_name' => __( 'New Topic Name' ),
        'menu_name' => __( 'Gardening Tips' ),
    );

    register_taxonomy('Gardening Tips',array('post'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'show_in_rest' => true,
        'show_admin_column' => true
    ));

}

add_action( 'init', 'create_gardening_tips_category_taxonomy', 0 );