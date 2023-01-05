<?php
/*** Template Name: Add Item Management */
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
                                    <h3>Dublin Core</h3>
                                    <p>The Dublin Core metadata element set is common to all Omeka records, including
                                        items, files, and collections. For more information see,
                                        <a
                                            href="http://dublincore.org/documents/dces/">http://dublincore.org/documents/dces/</a>.
                                    </p>
                                </div>
                                <div class="item-form-area">
                                    <?php
$date = date('M-d-Y');
$random = time() . rand(10 * 45, 100 * 98);
acf_form(array(
    'post_id' => 'new_post',
    'field_groups' => array(
        'group_63b5362b4abed',
    ),
    'updated_message' => __("New Item is successfully submitted.", 'acf'),
    'new_post' => array(
        'post_type' => 'item',
        'post_status' => 'publish',
        'post_title' => 'Item No. ' . $random . ' ',
    ),
    'submit_value' => 'Add Item',
));
?>


                                </div>
                            </div>
                            <div class="main-body__area--collection">

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