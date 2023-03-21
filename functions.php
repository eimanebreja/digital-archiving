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

add_action('wp_enqueue_scripts', 'add_my_script');
function add_my_script()
{
    wp_enqueue_script('jquery_min_script', 'https://code.jquery.com/jquery-3.5.1.js');
    wp_enqueue_script('datatable_script', 'https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js');
    wp_enqueue_script('datatable_btn_script', 'https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js');
    wp_enqueue_script('datatable_font_script', 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js');
    wp_enqueue_script('datatable_responsive_script', 'https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js');
    wp_enqueue_script('datatable_html_script', 'https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js');
    wp_enqueue_script('datatable_jszip_script', 'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js');
    wp_enqueue_script('datatable_pdf_script', 'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js');
    wp_enqueue_script('datatable_print_script', 'https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js');

    // wp_register_script('ph-locations', 'https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js', array('jquery'), '1.0.0', true);

    // wp_enqueue_script('jquery'); // Explicitly telling wordpress to load jquery
    wp_enqueue_script(
        'your-script',
        get_stylesheet_directory_uri() . '/assets/js/app.js',
        array('jquery'),
        1.5, // put the version of your script here
        true// This will make sure that your script will be loaded in the footer
    );
}

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
    'Library', //  System name of the role.
    __('Library'), // Display name of the role.
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
        'manage_categories' => true,
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

// remove_role('admin_library');

/* Create Library Admin User Role */
add_role(
    'Archiving', //  System name of the role.
    __('Archiving'), // Display name of the role.
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
        'manage_categories' => true,
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

//*********************** AJAX POSTS **********************//
function get_ajax_posts()
{
    // Query Arguments
    $post_id = $_POST['data'];

    $args = array(
        'post_type' => 'sub-collection',
        'posts_per_page' => -1,
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'collection',
                'value' => $post_id,
                'compare' => '=',
            ),
            // array(
            //     'key' => 'sub_collection',
            //     'value' => $post_id,
            //     'compare' => '=',
            // ),
        ));

    // The Query
    $ajaxposts = new WP_Query($args);

    $variants = '';

    // The Query
    if ($ajaxposts->have_posts()) {
        ?>
<div class="acf-field acf-field-post-object">
    <div class="acf-label">
        <label>Sub Collections</label>
    </div>
    <div class="acf-input">
        <select id="variants">
            <?php
while ($ajaxposts->have_posts()) {
            $ajaxposts->the_post();?>
            <option value="<?php echo get_the_ID(); ?>"><?php echo get_the_title(get_the_ID()); ?></option>
            <?php }?>
        </select>
    </div>
</div>
<?php
} else {
        $variants = "dont work";
        echo $variants;
    }

    exit; // leave ajax call
}
// Fire AJAX action for both logged in and non-logged in users
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts');

add_action('wp_ajax_add_category', 'add_category');
add_action('wp_ajax_nopriv_add_category', 'add_category');
function add_category()
{
    $args = array(
        'description' => $_POST['category_description'],
        'parent' => $_POST['category_parent'],
    );
    $insertedTerm = wp_insert_term($_POST['category_name'], 'collection_management', $args);
    if (is_wp_error($insertedTerm)) {
        echo '<p>Error adding category: ' . $insertedTerm->get_error_message() . '</p>';
    } else {
        echo '<p>Category added successfully!</p>';

    }
    wp_die();
}

function my_theme_enqueue_scripts()
{
    wp_enqueue_script('select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js', array('jquery'), '4.1.0-beta.1', true);
    wp_enqueue_style('select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css', array(), '4.1.0-beta.1');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

require_once "archiving/includes/function-login.php";
require_once "archiving/includes/function-item-custompost.php";
require_once "archiving/includes/function-item-type-custompost.php";
require_once "archiving/includes/function-collection-custompost.php";
// require_once "archiving/includes/function-subcollection-custompost.php";
require_once "library/functions/catalog-function.php";
require_once "library/functions/indexing-function.php";
require_once "library/functions/rare-materials-function.php";
require_once "library/functions/circulation-function.php";

function format_custom_post_type()
{
    register_post_type('format',
        array(
            'rewrite' => array('slug' => 'formats'),
            'labels' => array(
                'name' => 'Format Management',
                'singular_name' => 'Format Management',
                'add_new_item' => 'Add New Format',
                'edit_item' => 'Edit Format',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments',
            ),
            'taxonomies' => array('post_tag'),
            'menu_position' => 5,
        )
    );
}
add_action('init', 'format_custom_post_type');

function acf_populate_select_field_format($field)
{
    // Reset choices
    $field['choices'] = array();

    // Get posts of specific custom post type
    $args = array(
        'post_type' => 'format',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
    );
    $posts = get_posts($args);

    // Add posts to the select field
    if ($posts) {
        foreach ($posts as $post) {
            $field['choices'][$post->ID] = $post->post_title;
        }
    }

    // Return the field
    return $field;
}
add_filter('acf/load_field/name=format_attribute', 'acf_populate_select_field_format');

function enqueue_ajax_scriptsss()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('books-ajax', get_template_directory_uri() . '/assets/js/books-ajax.js', array('jquery'), '1.0', true);
    wp_localize_script('books-ajax', 'books_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_scriptsss');
add_action('wp_ajax_get_books', 'get_books');
add_action('wp_ajax_nopriv_get_books', 'get_books');

if (!function_exists('my_pagination')):
    function my_pagination()
{
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>', 'textdomain'),
            'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>', 'textdomain'),
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
        ));
    }
endif;

function local_history_search()
{
    check_ajax_referer('local_history_search', 'nonce');

    $query = new WP_Query(array(
        'post_type' => 'local-history',
        's' => sanitize_text_field($_GET['q']),
    ));

    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $results[] = array(
                'title' => get_the_title(),
                'ID' => get_the_ID(),
            );
        }
    }

    wp_reset_postdata();

    wp_send_json($results);
}
add_action('wp_ajax_local_history_search', 'local_history_search');
add_action('wp_ajax_nopriv_local_history_search', 'local_history_search');

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}