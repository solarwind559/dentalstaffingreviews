<?php

// Office Post Types
add_post_type_support('Offices', 'thumbnail');
function Offices_post_types()
{
    register_post_type('Offices', [
        'supports' => ['title','editor','author','excerpt','page-attributes'],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'set_featured_image' => true,
        'labels' => [
            'name' => 'Offices',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit',
            'all_items' => 'All Offices',
            'singular_name' => 'Office',
        ],
        'menu_icon' => 'dashicons-businessman',
        'show_in_rest' => true,
        'taxonomies'  => array( 'category','post_tag' ),
        'rewrite' => array('slug' => 'Offices', 'with_front' => false),
    ]);
}
add_action('init', 'Offices_post_types');

