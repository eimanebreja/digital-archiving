<?php
function item_custom_post_type()
{
    register_post_type('item',
        array(
            'rewrite' => array('slug' => 'items'),
            'labels' => array(
                'name' => 'Item Management',
                'singular_name' => 'Item',
                'add_new_item' => 'Add New Item',
                'edit_item' => 'Edit Item',
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
add_action('init', 'item_custom_post_type');

/**
 * Populate Select Field to a post type
 */

function acf_load_sample_field($field)
{
    $field['choices'] = get_post_type_values('item_type');
    return $field;
}
add_filter('acf/load_field/name=type', 'acf_load_sample_field');

function get_post_type_values($post_type)
{
    $values = array();
    $defaults = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    );
    $query = new WP_Query($defaults);
    if ($query->found_posts > 0) {
        foreach ($query->posts as $post) {
            $values[get_the_title($post->ID)] = get_the_title($post->ID);
        }
    }
    return $values;
}