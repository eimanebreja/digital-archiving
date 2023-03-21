<?php

get_header();
?>
<?php
if (isset($_GET['years'])) {
    $args = array(
        'post_type' => 'journals',
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'date_query' => array(
            array(
                'year' => $_GET['years'],
            ),
        ),
    );
} else {
    $args = array(
        'post_type' => 'journals',
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC',
    );
}

$loop = new WP_Query($args);?>
<section>
    <div class="journal">
        <div class="journal__banner">
            <div class="journal__banner--title">
                <h1><?php echo $_GET['years']; ?></h1>
            </div>
        </div>
        <div class="journal__container">
            <?php if ($loop->have_posts()) {?>
            <?php while ($loop->have_posts()) {
    $loop->the_post();?>
            <div class="journal__container--list">
                <div class="list-row">
                    <div class="list-img">
                        <?php
$featured_image = get_the_post_thumbnail(get_the_ID(), 'full'); // 'full' is the image size you want to retrieve
    // Output the featured image
    echo $featured_image;
    ?>
                    </div>
                    <div class="list-content">
                        <div class="list-title">
                            <h3><?php the_title();?></h3>
                        </div>
                        <div class="list-pdf">
                            <?php
if (have_rows('material_repeater')):
        while (have_rows('material_repeater')): the_row();
            $file = get_sub_field('material_files');
            if ($file):
                $url = $file['url'];
                $filename = $file['filename'];
                $title = $file['title'];
                $filesize = $file['filesize'];?>
                            <div class="_df_button list-pdf__item" source="<?php echo esc_attr($url); ?>">
                                <div class="icon">
                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_pdf.svg" alt="PDF Icon">
                                </div>
                                <div class="text">
                                    <?php echo esc_html($title); ?>
                                </div>

                            </div>
                            <?php endif;
        endwhile;
    endif;
    ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php }
}

wp_reset_query();
?>
        </div>
    </div>
</section>



<?php get_footer();