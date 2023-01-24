<?php
/*** Template Name: Add Collection Management */
acf_form_head();
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
                    <div class="main-body__area">
                        <div class="main-body__area--row">
                            <div class="main-body__area--form">
                                <div class="main-body__area--title">
                                    <div class="title">
                                        <h3>Dublin Core</h3>
                                        <p>The Dublin Core metadata element set is common to all Omeka records,
                                            including
                                            items, files, and collections. For more information see,
                                            <a
                                                href="http://dublincore.org/documents/dces/">http://dublincore.org/documents/dces/</a>.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-form-area">


                                    <?php if (isset($_GET['updated'])) {?>
                                    <div class="add-scollection">

                                        <p>
                                            Click <a
                                                href="<?php echo site_url('/add-sub-collection'); ?>?postid=240 ">here</a>
                                            if you want to add Sub - Collection.
                                        </p>
                                    </div>

                                    <?php } else {?>
                                    <?php
acf_form(array(
    'post_id' => 'new_post',
    'post_title' => true,
    'post_content' => false,
    'updated_message' => __("New Collection is successfully submitted.", 'acf'),
    'new_post' => array(
        'post_type' => 'collection',
        'post_status' => 'publish',
    ),
    'submit_value' => 'Add Collection',
    // 'return' => add_query_arg('updated', 'true', site_url('add-sub-collection') . '?postid=' . $_POST['post_id']),

));
    ?>

                                    <?php }?>

                                </div>
                            </div>
                            <div class="main-body__area--collection">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer();?>