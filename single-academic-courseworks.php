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
                    <?php
while (have_posts()) {
    the_post();
    ?>
                    <div class="main-body__area">
                        <div class="single-audio">
                            <div class="single-audio__row">
                                <div class="single-audio__img">
                                    <?php
$image = get_field('ac_cover_image');
    if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif;?>

                                </div>
                                <div class="single-audio__information">
                                    <div class="single-audio__information--category">
                                        Academic Courseworks, Research and Thesis Cataloguing Module
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Call number
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("ac_call_number") ?>
                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Title Details
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo the_title() ?>
                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Descriptions
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("ac_institution") ?> :
                                            <?php echo get_field("ac_course_program") ?>
                                            <?php echo get_field("ac_date_year") ?>

                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            No. of times borrowed
                                        </div>
                                        <div class="single-audio__information--info">
                                            0
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <?php include get_theme_file_path("partials/footer.php");?>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>