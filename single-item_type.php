<?php

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

                        <?php
while (have_posts()) {
    the_post();
    ?>
                        <div class="main-body__area--row">
                            <div class="main-body__area--full">
                                <div class="main-body__area--title">
                                    <h3><?php the_title();?></h3>
                                </div>
                                <div class="main-body__area--description">
                                    <?php the_content();?>
                                </div>

                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php include get_theme_file_path('partials/footer.php');?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>