<?php

defined( 'ABSPATH' ) || exit;

/**
 * Register Custom Taxonomies
 */
add_action( 'init', 'blp_custom_taxonomies' );

function blp_custom_taxonomies()
{
    // Podcast Category
    $labels = array(
        'name'              => 'دسته ها',
        'singular_name'     => 'دسته',
        'search_items'      => 'جستجوی دسته',
        'all_items'         => 'همه دسته ها',
        'parent_item'       => 'دسته',
        'parent_item_colon' => 'دسته:',
        'edit_item'         => 'ویرایش دسته',
        'update_item'       => 'بروزسانی',
        'add_new_item'      => 'افزودن دسته',
        'new_item_name'     => 'جدید',
        'menu_name'         => 'دسته ها',
    );

    $args = array(
        'labels'             => $labels,
        'description'        => '',
        'hierarchical'       => true,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_tagcloud'      => true,
        'show_in_quick_edit' => true,
        'show_admin_column'  => true,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'podcast_cat', 'with_front' => true ),
    );

    register_taxonomy( 'podcast_cat', array( 'podcast' ), $args );
}