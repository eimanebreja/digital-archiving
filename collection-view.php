<?php
/*** Template Name: Collection View */
get_header();
?>

<section>
    <div class="collection-view">
        <div class="collection-view__banner">
            <div class="collection-view__banner--title">
                <h1>Collection View</h1>
            </div>
        </div>
        <div class="collection-view__container">
            <div class="collection-view__row">
                <div class="collection-view__img">
                    <?php $image = get_field('cover_image');
if (!empty($image)): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php else: ?>

                    <img src="<?php echo THEME_DIR; ?>/assets/img/collection_sample.png" alt="Collection Image">
                    <?php endif;?>
                </div>
                <div class="collection-view__info">
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Title :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php the_title();?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Description :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php the_field('description');?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Creator :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php the_field('creator');?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Publisher :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php the_field('publisher');?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Date :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php the_field('publisher');?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Format :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php the_field('format_attribute');?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Level :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php
$level = get_field_object('level');
$value = $level['value'];
$label = $level['choices'][$value];
?>
                            <?php echo esc_html($label); ?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Collection :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php
$term = get_field('choose_category');
if ($term): ?>
                            <?php
$term_id = $term->term_id;
?>
                            <?php
$taxonomy = 'collection_management'; // replace with your taxonomy name
$separator = ' &rarr; ';

$term = get_term($term_id, $taxonomy);
$parents = get_term_parents_list($term_id, $taxonomy, array('separator' => $separator, 'link' => false, 'format' => 'name'));
// remove the separator and the last character from the string
$parents = substr($parents, 0, strrpos($parents, $separator));
echo $parents;
?>

                            <?php endif;?>
                        </div>
                    </div>
                    <div class="collection-view__info--row">
                        <div class="collection-view__info--label">
                            Format :
                        </div>
                        <div class="collection-view__info--desc">
                            <?php
if (have_rows('file_content')) {
    while (have_rows('file_content')) {
        the_row();
        $file = get_sub_field('add_new_files');
        ?>
                            <div>
                                <a href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
                            </div>
                            <?php
}
}
?>
                            <?php
$file_limit = get_field('file_content_limit');
if ($file_limit): ?>
                            <a href="<?php echo $file_limit['url']; ?>"><?php echo $file_limit['title']; ?></a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>