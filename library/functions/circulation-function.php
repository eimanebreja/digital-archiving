<?php
function circulation_custom_post_type()
{
    register_post_type('circulations',
        array(
            'rewrite' => array('slug' => 'circulation'),
            'labels' => array(
                'name' => 'Circulation',
                'singular_name' => 'Circulation',
                'add_new_item' => 'Add New Circulation',
                'edit_item' => 'Edit Circulation',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
            'menu_position' => 9,
        )
    );
}
add_action('init', 'circulation_custom_post_type');