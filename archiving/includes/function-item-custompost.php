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
 * Populate Select Field to a post Type
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

/**
 * Populate Select Field to a post Collection
 */

function acf_load_collection_field($field)
{
    $field['choices'] = get_collection_post_type_values('collection');
    return $field;
}
add_filter('acf/load_field/name=collection', 'acf_load_collection_field');

function get_collection_post_type_values($post_type)
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

/**
 * Item custom pagination
 */

if (!function_exists('item_pagination')):
    function item_pagination()
{
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'prev_text' => __('<'),
            'next_text' => __('>'),
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
        ));
    }
endif;

/**
 * Populate Select Field to a Sub Collection
 */

function acf_load_sub_collection_field($field)
{
    $field['choices'] = get_sub_collection_post_type_values('sub-collection');
    return $field;

}
//fields na mapapalitan ang value
add_filter('acf/load_field/name=item_sub_collection', 'acf_load_sub_collection_field');

function get_sub_collection_post_type_values($sub_collection_post_type)
{
    $values = array();
    $defaults = array(
        'post_type' => $sub_collection_post_type,
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

wp_register_script('acf_load_sub_collection_field', $url, array('acf-input'));