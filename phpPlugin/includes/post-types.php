<?php

defined( 'ABSPATH' ) || exit;

/**
 * Register Custom Post Types
 */
add_action( 'init', 'blp_custom_post_types' );

function blp_custom_post_types()
{
    // Podcast Post Type
    $labels = array(
        'name'                  => 'پادکست ها',
        'singular_name'         => 'پادکست',
        'menu_name'             => 'پادکست ها',
        'name_admin_bar'        => 'پادکست',
        'add_new'               => 'اضافه کردن',
        'add_new_item'          => 'اضافه کردن پادکست جدید',
        'new_item'              => 'پادکست جدید',
        'edit_item'             => 'ویرایش پادکست',
        'view_item'             => 'نمایش پادکست',
        'all_items'             => 'همه پادکست ها',
        'search_items'          => 'جستجوی پادکست',
        'not_found'             => 'پادکست پیدا نشد',
        'not_found_in_trash'    => 'پادکست در زباله دان پیدا نشد',
        'filter_items_list'     => 'فیلتر کردن پادکست',
    );

    $args = array(
        'label'               => 'پادکست ها',
        'description'         => '',
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-format-audio',
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'comments', 'thumbnail', 'custom-fields' ),
        //'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
        'taxonomies'          => array( 'podcast_cat' ),
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'has_archive'         => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'show_in_nav_menus'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => 'podcast', 'with_front' => true ),
    );

    register_post_type( 'podcast', $args );
}
