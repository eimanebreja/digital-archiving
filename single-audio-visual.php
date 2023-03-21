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
$image = get_field('cover_image');
    if (!empty($image)): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif;?>

                                </div>
                                <div class="single-audio__information">
                                    <div class="single-audio__information--category">
                                        AUDIO-VISUAL and SPECIAL MATERIAL DATA DISPLAY
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
                                            <?php echo get_field("place_of_publication") ?> :
                                            <?php echo get_field("publisher") ?> ,
                                            <?php echo get_field("date_of_publication") ?>

                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Call number
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("call_number") ?>
                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Accession Number
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php echo get_field("accession_number") ?>
                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Level
                                        </div>
                                        <div class="single-audio__information--info">

                                            <?php
$field = get_field_object('level');
    $value = $field['value'];
    $label = $field['choices'][$value];
    ?>
                                            <?php echo esc_html($label); ?>
                                        </div>
                                    </div>
                                    <div class="single-audio__information--row">
                                        <div class="single-audio__information--label">
                                            Format
                                        </div>
                                        <div class="single-audio__information--info">
                                            <?php
$post_id = get_field("format_attribute");
    $post_title = get_the_title($post_id);
    echo $post_title;?>
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