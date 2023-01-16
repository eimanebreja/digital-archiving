<?php
/*** Template Name: Edit Item Type Management */
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
                                        <h3>Edit Item Type</h3>
                                        <p>
                                            Edit Item Type Information
                                        </p>
                                    </div>
                                </div>
                                <div class="item-form-area">
                                    <?php $post_id = $_GET["post"];?>

                                    <?php acf_form(array(
    'post_id' => $post_id, //Variable that you'll get from the URL
    'post_title' => true,
    'post_content' => true,
    'submit_value' => 'Update Item Type',
    'return' => '%post_url%', //Returns to the original post
));?>
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