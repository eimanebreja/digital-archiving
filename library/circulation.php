<?php
/*** Template Name: Circulation */
get_header();
?>

<section>
    <div class="main-content">
        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__content--header">
                        <h3>Circulation </h3>
                        <div class="watermark library">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/circulation.png" alt="Circulation Icon">
                        </div>
                    </div>

                    <div class="main-body__main">
                        <div class="main-body__main--title">
                            <h3>Resource Circulation Transaction</h3>
                        </div>

                    </div>
                </div>
                <?php include get_theme_file_path("partials/footer.php");?>
            </div>
        </div>
    </div>
</section>









<?php get_footer();?>