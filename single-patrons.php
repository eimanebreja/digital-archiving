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
$image = get_field('p_profile_picture');
    if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif;?>

                                </div>
                                <div class="single-audio__information">
                                    <div class="single-audio__information--category">
                                        Patron Data Entry
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Name
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("name") ?>
                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Year Level
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("p_year_level") ?>
                                        </div>
                                    </div>

                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            ID Number
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("p_id_number") ?>
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