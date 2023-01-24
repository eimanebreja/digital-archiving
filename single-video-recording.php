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
$image = get_field('vr_cover_imagefile');
    if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif;?>

                                </div>
                                <div class="single-audio__information">
                                    <div class="single-audio__information--category">
                                        Video Recording Cataloguing Module
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Call number
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("vr_call_number") ?>
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
                                            <?php echo get_field("vr_place_of_publication") ?> :
                                            <?php echo get_field("vr_publishers_name") ?> ,
                                            <?php echo get_field("vr_date_of_publication") ?>

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