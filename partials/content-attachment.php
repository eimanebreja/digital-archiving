<article>
    <?php
$pdf_id = get_the_ID();
$attachment_url = wp_get_attachment_url($pdf_id);
echo $attachment_url;
$parent_post = get_post($post->post_parent);

?>
    <div class="search-result__article">
        <div class="search-result__cover">
            <div class="search-result__cover--img">
                <?php
$image = get_field('cover_image', $parent_post->ID);
if (!empty($image)): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif;?>
            </div>
            <div class="search-result__cover--btn">

                <a href="<?php echo $attachment_url; ?>" target="_blank" rel="bookmark"
                    <?php esc_url(get_permalink());?>>View
                    Catalogue</a>
            </div>
        </div>
        <div class="search-result__info">
            <div class="search-result__info--title">
                <h2><?php echo $parent_post->post_title; ?></h2>
            </div>
            <div class="search-result__info--desc">
                <p><span>Level:</span>
                    <?php the_field('level');?>
                </p>
            </div>
            <div class="search-result__info--desc">
                <p><span>Call Number:</span> <?php echo get_field('call_number', $parent_post->ID); ?> </p>
            </div>
            <div class="search-result__info--desc">
                <p><span>Accession Number:</span> <?php echo get_field('accession_number', $parent_post->ID); ?> </p>
            </div>
        </div>
    </div>
</article>