<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

function pms_register_purchase_order_post_type() {
    $labels = array(
        'name'                  => _x('Purchase Orders', 'Post type general name', 'pms'),
        'singular_name'         => _x('Purchase Order', 'Post type singular name', 'pms'),
        'menu_name'            => _x('Purchase Orders', 'Admin Menu text', 'pms'),
        'name_admin_bar'       => _x('Purchase Order', 'Add New on Toolbar', 'pms'),
        'add_new'             => __('Add New', 'pms'),
        'add_new_item'        => __('Add New Purchase Order', 'pms'),
        'new_item'            => __('New Purchase Order', 'pms'),
        'edit_item'           => __('Edit Purchase Order', 'pms'),
        'view_item'           => __('View Purchase Order', 'pms'),
        'all_items'           => __('All Purchase Orders', 'pms'),
        'search_items'        => __('Search Purchase Orders', 'pms'),
        'not_found'           => __('No purchase orders found.', 'pms'),
        'not_found_in_trash' => __('No purchase orders found in Trash.', 'pms')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'purchase-orders'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'editor', 'author', 'revisions'),
    );

    register_post_type('purchase_order', $args);
}

add_action('init', 'pms_register_purchase_order_post_type');