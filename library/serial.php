<?php
/*** Template Name: Serial */
get_header();
?>

<section>
    <div class="main-content">
        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__breadcrumb">
                        <div class="main-body__breadcrumb--list"><?php get_breadcrumb();?></div>
                    </div>
                    <div class="table">
                        <div class="table__head">
                            <h3>List of Serials</h3>
                        </div>

                        <div class="table__header">
                            <div class="table__header--browse">
                                <div class="browse">
                                    <span>More than 1000+ Browse Serial</span>
                                </div>
                                <div class="button">
                                    <a href="<?php echo site_url('/add-serial'); ?>">Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="table__content">
                            <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg_audiovisuals = array(
    'post_type' => 'serial',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'paged' => $paged,
);
$arg_audiovisual_query = new WP_Query($arg_audiovisuals);
?>
                            <table id="table_serial" class="display">
                                <thead>
                                    <tr>
                                        <th> Serial Title</th>
                                        <th> Code</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <?php if ($arg_audiovisual_query->have_posts()) {$i = 1;?>

                                <tbody>
                                    <?php while ($arg_audiovisual_query->have_posts()) {
    $arg_audiovisual_query->the_post();?>
                                    <tr>
                                        <td><?php the_title();?></td>
                                        <td><?php echo get_field("s_call_number") ?></td>
                                        <td class="actions">
                                            <div class="table__content--body action">
                                                <a href="<?php the_permalink();?>" class="preview">Preview</a>
                                                <a href="<?php echo get_delete_post_link(); ?>" class=" delete"
                                                    onclick="return confirm('Are you sure you wanna delete this?')">Delete</a>
                                                <a href="<?php echo site_url('/edit-serial'); ?>?post=<?php the_ID();?>"
                                                    class="edit">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
$i++;
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
<?php get_footer();?>