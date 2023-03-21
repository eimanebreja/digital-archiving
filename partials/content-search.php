<article>
    <div class="search-result__article">
        <div class="search-result__cover">
            <div class="search-result__cover--img">
                <?php
$image = get_field('cover_image');
if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif;?>
            </div>
            <div class="search-result__cover--btn">
                <?php
$pdf = get_field('file_content');
if ($pdf):
?>
                <!-- <a href="<?php echo $pdf['url']; ?>" target="_blank" rel="bookmark"
                    <?php esc_url(get_permalink());?>>View
                    Catalogue</a> -->
                <?php
$level = get_field('level');
if ($level == 'level_1') {
    // Show the download button
    echo '<a href="' . $pdf['url'] . '" download>Download Catalogue</a>';
} elseif ($level == 'level_2') {?>
                <!-- echo '<a href="' . $pdf['url'] . '">View Catalogue</a>'; -->
                <div class="_df_button readbtn-subscriber" source="<?php echo $pdf['url']; ?> ">Read More</div>
                <?php } elseif ($level == 'level_3') {
    // Show the "View PDF" button
    $pdf_viewer_url = get_permalink(get_page_by_path('pdf-viewer'));
    echo '<a href="' . $pdf_viewer_url . '" target="_blank">View PDF (1-3 Pages Only)</a>';
} elseif ($level == 'level_4') {
    // Require the user to log in first
    if (is_user_logged_in()) {
        // Show the download button
        echo '<a href="' . $pdf['url'] . '">View Catalogue</a>';
    } else {
        // Show a message asking the user to log in
        echo 'Please log in to view the PDF File.';
        echo '<a href="' . site_url('/login') . '">Login</a>';
    }
}

?>
                <?php endif;?>
            </div>
        </div>
        <div class="search-result__info">
            <div class="search-result__info--title">
                <h2> <?php the_title();?></h2>
            </div>
            <div class="search-result__info--desc">
                <p><span>Level:</span>

                    <?php
$field = get_field_object('level');
$value = $field['value'];
$label = $field['choices'][$value];
?>
                    <?php echo esc_html($label); ?>
                </p>
            </div>
            <div class="search-result__info--desc">
                <p><span>Call Number:</span> <?php echo get_field("call_number") ?> </p>
            </div>
            <div class="search-result__info--desc">
                <p><span>Accession Number:</span> <?php echo get_field("accession_number") ?> </p>
            </div>

        </div>
    </div>

</article>