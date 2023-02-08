<?php

// Register Custom Post Type Category Slider
function create_categoryslider_cpt() {

    $labels = array(
        'name'                  => _x( 'Category Sliders', 'Post Type General Name', 'shop-x' ),
        'singular_name'         => _x( 'Category Slider', 'Post Type Singular Name', 'shop-x' ),
        'menu_name'             => _x( 'Category Sliders', 'Admin Menu text', 'shop-x' ),
        'name_admin_bar'        => _x( 'Category Slider', 'Add New on Toolbar', 'shop-x' ),
        'archives'              => __( 'Category Slider Archives', 'shop-x' ),
        'attributes'            => __( 'Category Slider Attributes', 'shop-x' ),
        'parent_item_colon'     => __( 'Parent Category Slider:', 'shop-x' ),
        'all_items'             => __( 'All Category Sliders', 'shop-x' ),
        'add_new_item'          => __( 'Add New Category Slider', 'shop-x' ),
        'add_new'               => __( 'Add New', 'shop-x' ),
        'new_item'              => __( 'New Category Slider', 'shop-x' ),
        'edit_item'             => __( 'Edit Category Slider', 'shop-x' ),
        'update_item'           => __( 'Update Category Slider', 'shop-x' ),
        'view_item'             => __( 'View Category Slider', 'shop-x' ),
        'view_items'            => __( 'View Category Sliders', 'shop-x' ),
        'search_items'          => __( 'Search Category Slider', 'shop-x' ),
        'not_found'             => __( 'Not found', 'shop-x' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'shop-x' ),
        'featured_image'        => __( 'Featured Image', 'shop-x' ),
        'set_featured_image'    => __( 'Set featured image', 'shop-x' ),
        'remove_featured_image' => __( 'Remove featured image', 'shop-x' ),
        'use_featured_image'    => __( 'Use as featured image', 'shop-x' ),
        'insert_into_item'      => __( 'Insert into Category Slider', 'shop-x' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Category Slider', 'shop-x' ),
        'items_list'            => __( 'Category Sliders list', 'shop-x' ),
        'items_list_navigation' => __( 'Category Sliders list navigation', 'shop-x' ),
        'filter_items_list'     => __( 'Filter Category Sliders list', 'shop-x' ),
    );
    $args = array(
        'label'               => __( 'Category Slider', 'shop-x' ),
        'description'         => __( '', 'shop-x' ),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-images-alt2',
        'supports'            => array( 'title', 'thumbnail', 'revisions', 'author' ),
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'hierarchical'        => false,
        'exclude_from_search' => true,
        'show_in_rest'        => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'categoryslider', $args );

}
add_action( 'init', 'create_categoryslider_cpt', 0 );