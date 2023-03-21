<?php
/*** Template Name: Collection Management */
get_header();
?>

<section>
    <div class="main-content">
        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__content--header">
                        <h3>Collection Management </h3>
                        <div class="watermark">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/head_frame.png" alt="Notif Icon">
                        </div>
                    </div>

                    <div class="table">

                        <div class="table__header">
                            <div class="table__header--browse">
                                <div class="browse">
                                    <p>Browse Items</p>
                                    <span>More than 1000+ Browse Items</span>
                                </div>
                                <div class="button">
                                    <a href="<?php echo site_url('/add-collection'); ?>">Add</a>
                                </div>
                            </div>

                        </div>
                        <div class="table__content">


                            <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$collection_arg = array(
    'post_type' => 'collection',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'paged' => $paged,
);
$collection_query = new WP_Query($collection_arg);
?>
                            <table id="table_collection" class="display">
                                <thead>
                                    <tr>
                                        <th> Title</th>
                                        <th> Contributors</th>
                                        <th> Date Added</th>
                                        <th> Total Number of Items</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <?php if ($collection_query->have_posts()) {?>

                                <tbody>
                                    <?php while ($collection_query->have_posts()) {
    $collection_query->the_post();?>
                                    <tr>
                                        <td> <?php the_title();?></td>
                                        <td> <?php echo get_field("contributors") ?></td>
                                        <td>
                                            <?php echo get_field("date_added") ?>
                                        </td>
                                        <td>


                                            <?php
$collection_title = get_the_title();
    $arg_item = array(
        'post_type' => 'item',
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'collection',
                'value' => $collection_title,
                'compare' => 'LIKE',
            ),
        ),
    );
    $arr_posts_item = new WP_Query($arg_item);
    $count_item_type = $arr_posts_item->found_posts;
    echo $count_item_type;

    ?>
                                        </td>
                                        <td class="actions">
                                            <div class="table__content--body action">
                                                <a href="<?php the_permalink();?>" class="preview">Preview</a>
                                                <a href="<?php echo get_delete_post_link(); ?>" class="delete"
                                                    onclick="return confirm('Are you sure you wanna delete this?')">Delete</a>
                                                <a href="<?php echo site_url('/edit-collection'); ?>?post=<?php the_ID();?>"
                                                    class="edit">Edit</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php

}
    ?>
                                </tbody>

                                <?php

}
?>
                            </table>

                            <?php $args1 = array('orderby' => 'name', 'hide_empty' => false, 'parent' => 0);
$taxonomy = "collection_management";
$allcat = get_terms($taxonomy, $args1);
foreach ($allcat as $allcats) {
    if ($allcats->parent == 0):
        // echo get_term_link($allcats->slug, $taxonomy);
        echo $allcats->name;
        // echo $allcats->slug;
    endif;
}

?>

                        </div>

                        <!-- <?php
$args1 = array('orderby' => 'name', 'hide_empty' => false, 'parent' => 0);
$allcat = get_terms($taxonomy, $args1);
foreach ($allcat as $allcats) {
    $args11 = array('orderby' => 'term_order', 'hide_empty' => false, 'child_of' => $allcats->term_id);
    $myterms = get_terms($taxonomy, $args11);
    if (count($myterms) != 0) {
        ?>
                        <ul class=" cf" id="<?php echo $allcats->slug; ?>">
                            <?php
foreach ($myterms as $myterm) {
            ?>
                            <li><a
                                    href="<?php echo get_term_link($myterm->slug, $taxonomy); ?>"><?php echo $myterm->name; ?></a>
                            </li>
                            <?php
}?>
                        </ul>
                        <?php
}
}
?> -->

                    </div>
                </div>
                <?php include get_theme_file_path('partials/footer.php');?>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script type='text/javascript'>
$(document).ready(function() {
    // $('#table_item_type').DataTable();
    $('#table_collection').dataTable({
        language: {
            searchPlaceholder: "Search Collection",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
        paginate: {
            next: '<img src="/lib/dataTables/images/sort_both.png"/>',

        }
    });
});
</script>
<?php get_footer();?>




<form method="post">
    <div>
        <label for="category_name">Category Name:</label>
        <input type="text" id="category_name" name="category_name">
    </div>
    <div>
        <label for="parent_category">Parent Category:</label>
        <?php
$dropdown_args = array(
    'taxonomy' => 'collection_management',
    'hide_empty' => 0,
    'name' => 'parent_category',
    'id' => 'parent_category',
    'class' => 'form-control',
    'show_option_none' => '-None-',
    'selected' => 0,
    'hierarchical' => true,
    'depth' => 10,
    'tab_index' => 0,
    'taxonomy' => 'collection_management',
    'hide_if_empty' => false,
);
wp_dropdown_categories($dropdown_args);
?>
    </div>
    <input type="submit" value="Add Category">
</form>

<?php
if (isset($_POST['category_name'])) {
    $category_name = $_POST['category_name'];
    $parent_category = $_POST['parent_category'];
    $args = array(
        'description' => '',
        'parent' => $parent_category,
        'slug' => 'custom-slug',
    );
    $term = wp_insert_term($category_name, 'collection_management', $args);
    // Check if term was inserted successfully
    if (!is_wp_error($term)) {
        // Redirect to desired page
        wp_redirect(site_url('/add-collection/'));
        exit;

    }
}
ob_end_flush();
?>