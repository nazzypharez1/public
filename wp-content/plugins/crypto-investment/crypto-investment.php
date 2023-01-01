<?php

/**
 * Plugin Name: Crypto Investment
 * Description: Easily create powerful Smart Contracts in multiple blockchain networks
 *
 */

// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Investments', 'Post Type General Name', 'crypto-investment' ),
        'singular_name'         => _x( 'Investment', 'Post Type Singular Name', 'crypto-investment' ),
        'menu_name'             => __( 'Investments', 'crypto-investment' ),
        'name_admin_bar'        => __( 'Investment', 'crypto-investment' ),
        'archives'              => __( 'Investment Archives', 'crypto-investment' ),
        'attributes'            => __( 'Investment Attributes', 'crypto-investment' ),
        'parent_item_colon'     => __( 'Parent Investment:', 'crypto-investment' ),
        'all_items'             => __( 'All Investments', 'crypto-investment' ),
        'add_new_item'          => __( 'Add New Investment', 'crypto-investment' ),
        'add_new'               => __( 'Add New', 'crypto-investment' ),
        'new_item'              => __( 'New Investment', 'crypto-investment' ),
        'edit_item'             => __( 'Edit Investment', 'crypto-investment' ),
        'update_item'           => __( 'Update Investment', 'crypto-investment' ),
        'view_item'             => __( 'View Investment', 'crypto-investment' ),
        'view_items'            => __( 'View Investments', 'crypto-investment' ),
        'search_items'          => __( 'Search Investment', 'crypto-investment' ),
        'not_found'             => __( 'Not found', 'crypto-investment' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'crypto-investment' ),
        'featured_image'        => __( 'Featured Image', 'crypto-investment' ),
        'set_featured_image'    => __( 'Set featured image', 'crypto-investment' ),
        'remove_featured_image' => __( 'Remove featured image', 'crypto-investment' ),
        'use_featured_image'    => __( 'Use as featured image', 'crypto-investment' ),
        'insert_into_item'      => __( 'Insert into investment', 'crypto-investment' ),
        'uploaded_to_this_item' => __( 'Uploaded to this investment', 'crypto-investment' ),
    
     );