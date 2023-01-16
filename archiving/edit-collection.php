<?php
/*** Template Name: Edit Collection Management */
acf_form_head();
get_header();
?>

<section>
    <div class="main-content">

        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>
        <?php $post_id = $_GET["post"];?>
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__breadcrumb">
                        <div class="main-body__breadcrumb--list"><?php get_breadcrumb();?></div>
                    </div>
                    <div class="main-body__area">
                        <div class="main-body__area--row">
                            <div class="main-body__area--form addcollection">
                                <div class="main-body__area--title">
                                    <div class="title">
                                        <h3>Edit Collection</h3>
                                        <p>
                                            Edit Collection Information
                                        </p>
                                    </div>
                                    <div class="sub-btn">
                                        <p class="text">Sub-Collection</p>
                                        <a
                                            href="<?php echo site_url('/add-sub-collection'); ?>?postid=<?php echo $post_id; ?>">
                                            Add New
                                        </a>
                                        <a class="edit"
                                            href="<?php echo site_url('/edit-sub-collection'); ?>?postid=<?php echo $post_id; ?>">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                                <div class="item-form-area">
                                    <?php acf_form(array(
    'post_id' => $post_id, //Variable that you'll get from the URL
    'post_title' => false,
    'post_content' => false,
    'submit_value' => 'Update Collection',
    // 'return' => '%post_url%', //Returns to the original post
    'return' => add_query_arg('updated', 'true', site_url('edit-collection') . '?post=' . $post_id),
));?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php include get_theme_file_path('partials/footer.php');?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>