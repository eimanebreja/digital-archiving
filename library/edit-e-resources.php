<?php
/*** Template Name: Edit E-Resources */
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
                                        Electronic Resources Cataloguing Module
                                    </h3>
                                </div>
                                <div class="catalog__add--content">
                                    <?php $post_id = $_GET["post"];?>

                                    <?php acf_form(array(
    'post_id' => $post_id, //Variable that you'll get from the URL
    'post_title' => true,
    'post_content' => false,
    'field_groups' => array(
        'group_63c8d26b527b6',
    ),

    'submit_value' => 'Update',
    'return' => '%post_url%',
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