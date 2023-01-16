<?php
/*** Template Name: Add Item Type Management */
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
                                        <h3>Add Item Type</h3>
                                        <p>
                                            Item Type Information
                                        </p>
                                    </div>
                                </div>
                                <div class="item-form-area">
                                    <?php
acf_form(array(
    'post_id' => 'new_post',
    'post_title' => true,
    'post_content' => true,
    'updated_message' => __("New Item Type is successfully submitted.", 'acf'),
    'new_post' => array(
        'post_type' => 'item_type',
        'post_status' => 'publish',
    ),
    'submit_value' => 'Add Item Type',
));
?>
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