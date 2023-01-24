<?php
/*** Template Name: Item Management */
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
                        <h3>Item Management </h3>
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
                                    <a href="<?php echo site_url('/add-item'); ?>">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="table__content">
                            <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg_item = array(
    'post_type' => 'item',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'paged' => $paged,
);
$arg_query = new WP_Query($arg_item);
?>
                            <table id="table_item" class="display">
                                <thead>
                                    <tr>
                                        <th> Title</th>
                                        <th> Creator</th>
                                        <th> Type</th>
                                        <th> Date Added</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <?php if ($arg_query->have_posts()) {?>

                                <tbody>
                                    <?php while ($arg_query->have_posts()) {
    $arg_query->the_post();?>
                                    <tr>
                                        <td> <?php echo get_field("title") ?></td>
                                        <td> <?php echo get_field("creator") ?></td>
                                        <td>
                                            <?php echo get_field("type") ?>
                                        </td>
                                        <td>
                                            <?php echo get_field("date") ?>
                                        </td>
                                        <td class="actions">
                                            <div class="table__content--body action">
                                                <a href="<?php the_permalink();?>" class="preview">Preview</a>
                                                <a href="<?php echo get_delete_post_link(); ?>" class="delete"
                                                    onclick="return confirm('Are you sure you wanna delete this?')">Delete</a>
                                                <a href="<?php echo site_url('/edit-item'); ?>?post=<?php the_ID();?>"
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
                        </div>
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
    $('#table_item').dataTable({
        language: {
            searchPlaceholder: "Search Item",
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