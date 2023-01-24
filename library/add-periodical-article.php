<?php
/*** Template Name: Add Periodical Article */
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
                                        Periodical Article Indexing Module
                                    </h3>
                                </div>
                                <div class="catalog__add--content">
                                    <?php
acf_form(array(
    'post_id' => 'new_post',
    'post_title' => true,
    'post_content' => false,
    'field_groups' => array(
        'group_63cde68ff335e',
    ),
    'updated_message' => __("New Periodical Article is successfully submitted.", 'acf'),
    'new_post' => array(
        'post_type' => 'periodical-article',
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