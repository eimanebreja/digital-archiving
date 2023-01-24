<div class="tab__content">
    <div class="tab__content--header">
        <div class="tab__content--browse">
            <div class="browse">
                <span>More than 1000+ Browse Books and Manuscripts</span>
            </div>
            <div class="button">
                <a href="<?php echo site_url('/add-books-and-manuscript'); ?>">Add</a>
            </div>
        </div>
    </div>
    <div class="tab__content--table">
        <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg_booksmanuscript = array(
    'post_type' => 'books-manuscript',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'paged' => $paged,
);
$arg_manuscript_query = new WP_Query($arg_booksmanuscript);
?>
        <table id="table_booksandmanuscripts" class="display">
            <thead>
                <tr>
                    <th>Counter</th>
                    <th>Title</th>
                    <th> Action</th>
                </tr>
            </thead>
            <?php if ($arg_manuscript_query->have_posts()) {$i = 1;?>
            <tbody>
                <?php while ($arg_manuscript_query->have_posts()) {
    $arg_manuscript_query->the_post();?>
                <tr>
                    <td class="counter"><?php echo $i; ?></td>
                    <td>
                        <div class="catalog">
                            <div class="catalog__img">
                                <?php
$image = get_field('bm_cover_image');
    if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif;?>
                                <div class="catalog__img--icon">
                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_books.png" alt="">
                                </div>
                            </div>
                            <div class="catalog__info">
                                <h3 class="catalog__info--title">
                                    <?php the_title();?>
                                </h3>
                                <p class="catalog__info--desc">[Place of publication not
                                    <?php echo get_field("bm_place_of_publication") ?> :
                                    <?php echo get_field("bm_publisher") ?> ,
                                    <?php echo get_field("bm_date_of_publication") ?>
                                <p class="catalog__info--id">
                                    <?php echo get_field("bm_call_number") ?>
                                </p>
                            </div>

                        </div>

                    </td>
                    <td class="actions">
                        <div class="table__content--body action">
                            <a href="<?php the_permalink();?>" class="preview">Preview</a>
                            <a href="<?php echo get_delete_post_link(); ?>" class=" delete"
                                onclick="return confirm('Are you sure you wanna delete this?')">Delete</a>
                            <a href="<?php echo site_url('/edit-books-and-manuscript'); ?>?post=<?php the_ID();?>"
                                class="edit">Edit</a>
                        </div>
                    </td>
                </tr>

                <?php
$i++;
}
    ?>
            </tbody>
            <?php

}
?>
        </table>
    </div>
</div>