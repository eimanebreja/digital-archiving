<?php
define("THEME_DIR", get_theme_file_uri());

add_action('wp_enqueue_scripts', 'twentythirteen_child_enqueue_styles');
function twentythirteen_child_enqueue_styles()
{
    $parenthandle = 'parent-style'; // This is 'twentythirteen-style' for the twentythirteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style($parenthandle,
        get_template_directory_uri() . '/style.css',
        array(), // If the parent theme code has a dependency, copy it to here.
        $theme->parent()->get('Version')
    );
    wp_enqueue_style('child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version') // This only works if you have Version defined in the style header.
    );
}

/**
 * ENQUEUE CUSTOM STYLES
 */

function enqueue_styles()
{

    /** REGISTER css/screen.css **/
    wp_register_style('screen-style', THEME_DIR . '/assets/css/style.css', array(), '1', 'all');
    wp_enqueue_style('screen-style');

}
add_action('wp_enqueue_scripts', 'enqueue_styles');

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb()
{
    echo '<a href="' . site_url('/dashboard') . '" rel="nofollow">Dashboard</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

/* Create Library Admin User Role */
add_role(
    'Admin library', //  System name of the role.
    __('Library Admin'), // Display name of the role.
    array(
        'read' => true,
        'create_posts' => true,
        'delete_posts' => true,
        'delete_published_posts' => true,
        'edit_posts' => true,
        'publish_posts' => true,
        'edit_published_posts' => true,
        'upload_files' => true,
        'moderate_comments' => true,
        'activate_plugins' => true,
        'delete_others_pages' => true,
        'delete_others_posts' => true,
        'delete_pages' => true,
        'delete_private_pages' => true,
        'delete_private_posts' => true,
        'delete_published_pages' => true,
        'edit_dashboard' => true,
        'edit_others_pages' => true,
        'edit_others_posts' => true,
        'edit_pages' => true,
        'edit_private_pages' => true,
        'edit_private_posts' => true,
        'edit_published_pages' => true,
        'edit_published_posts' => true,
        'edit_theme_options' => true,
        'list_users' => true,
        'manage_links' => true,
        'manage_options' => true,
        'promote_users' => true,
        'publish_pages' => true,
        'read_private_pages' => true,
        'read_private_posts' => true,
        'remove_users' => true,
        'switch_themes' => true,
        'customize' => true,
        'delete_site' => true,
    )
);

/* Create Library Admin User Role */
add_role(
    'Admin Archiving', //  System name of the role.
    __('Archiving Admin'), // Display name of the role.
    array(
        'read' => true,
        'create_posts' => true,
        'delete_posts' => true,
        'delete_published_posts' => true,
        'edit_posts' => true,
        'publish_posts' => true,
        'edit_published_posts' => true,
        'upload_files' => true,
        'moderate_comments' => true,
        'activate_plugins' => true,
        'delete_others_pages' => true,
        'delete_others_posts' => true,
        'delete_pages' => true,
        'delete_private_pages' => true,
        'delete_private_posts' => true,
        'delete_published_pages' => true,
        'edit_dashboard' => true,
        'edit_others_pages' => true,
        'edit_others_posts' => true,
        'edit_pages' => true,
        'edit_private_pages' => true,
        'edit_private_posts' => true,
        'edit_published_pages' => true,
        'edit_published_posts' => true,
        'edit_theme_options' => true,
        'list_users' => true,
        'manage_links' => true,
        'manage_options' => true,
        'promote_users' => true,
        'publish_pages' => true,
        'read_private_pages' => true,
        'read_private_posts' => true,
        'remove_users' => true,
        'switch_themes' => true,
        'customize' => true,
        'delete_site' => true,
    )
);

require_once "archiving/includes/function-login.php";
require_once "archiving/includes/function-item-custompost.php";
require_once "archiving/includes/function-item-type-custompost.php";
require_once "archiving/includes/function-collection-custompost.php";
require_once "archiving/includes/function-subcollection-custompost.php";