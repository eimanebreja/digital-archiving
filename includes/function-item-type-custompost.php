<?php

/**
 * ITEM TYPE CUSTOM POST TYPE
 */
function item_type_custom_post_type()
{
    register_post_type('item_type',
        array(
            'rewrite' => array('slug' => 'item-types'),
            'labels' => array(
                'name' => 'Item Type Management',
                'singular_name' => 'Item Type',
                'add_new_item' => 'Add New Item Type',
                'edit_item' => 'Edit Item Type',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('category'),
        )
    );
}
add_action('init', 'item_type_custom_post_type');