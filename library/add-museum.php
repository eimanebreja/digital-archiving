<?php
/*** Template Name: Add Museum */
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
                        <div class="catalog">
                            <div class="catalog__add">
                                <div class="catalog__add--title">
                                    <h3>
                                        Museum Collection Data Entry Module
                                    </h3>
                                </div>
                                <div class="catalog__add--content">
                                    <?php
acf_form(array(
    'post_id' => 'new_post',
    'post_title' => true,
    'post_content' => false,
    'field_groups' => array(
        'group_63ce23000b9f3',
    ),
    'updated_message' => __("New Museum is successfully submitted.", 'acf'),
    'new_post' => array(
        'post_type' => 'museums',
        'post_status' => 'publish',
    ),
    'submit_value' => 'Submit',
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