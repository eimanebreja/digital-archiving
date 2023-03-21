<div class="single-head">
    <div class="single-head__title">
        <h1><?php the_title();?></h1>
    </div>
    <div class="single-head__file">
        <?php
$collection_file = get_field('collection_file');
?>
        <?php
if ($collection_file):
    $url = $collection_file['url'];
    $title = $collection_file['title'];
    ?>
        <div class="_df_button single-head__file--link" source="<?php echo esc_attr($url); ?>">
            <?php echo esc_html($title); ?>
        </div>
        <a href="<?php echo esc_attr($url); ?>" class="single-head__file--download" download>
            Download
        </a>

        <?php endif;?>
    </div>
</div>