<div class="tab__content">
    <div class="tab__content--header">
        <div class="tab__content--browse">
            <div class="browse">
                <span>More than 1000+ Browse Museum</span>
            </div>
            <div class="button">
                <a href="<?php echo site_url('/add-museum'); ?>">Add</a>
            </div>
        </div>
    </div>
    <div class="tab__content--table">
        <table id="table_museum" class="display">
            <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg_museum = array(
    'post_type' => 'museums',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'paged' => $paged,
);
$arg_query = new WP_Query($arg_museum);
?>
            <thead>
                <tr>
                    <th>Counter</th>
                    <th>Title</th>
                    <th> Action</th>
                </tr>
            </thead>
            <?php if ($arg_query->have_posts()) {$i = 1;?>

            <tbody>
                <?php while ($arg_query->have_posts()) {
    $arg_query->the_post();?>
                <tr>
                    <td class="counter"><?php echo $i; ?></td>
                    <td>
                        <div class="catalog">
                            <div class="catalog__img">
                                <?php
$image = get_field('cover_image');
    if (!empty($image)): ?>
                                <img src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif;?>
                                <div class="catalog__img--icon">
                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_media.png" alt="">
                                </div>
                            </div>
                            <div class="catalog__info">
                                <h3 class="catalog__info--title">
                                    <?php echo the_title() ?>
                                </h3>
                                <p class="catalog__info--desc">
                                    <?php
if (have_rows('m_object_name_information')):
        while (have_rows('m_object_name_information')): the_row();
            $name = get_sub_field('m_object_name');
            $nametype = get_sub_field('m_object_name_type');
            $authourity = get_sub_field('m_object_name_authority');
        endwhile;
    endif;
    ?>
                                    <?php echo $name; ?>;
                                    <?php echo $nametype; ?>,
                                    <?php echo $authourity; ?>
                                </p>
                                <p class="catalog__info--id">
                                    <?php
if (have_rows('m_object_number_information')):
        while (have_rows('m_object_number_information')): the_row();
            $number = get_sub_field('m_object_number');
        endwhile;
    endif;
    ?>
                                    <?php echo $number; ?>
                                </p>
                            </div>

                        </div>

                    </td>
                    <td class="actions">
                        <div class="table__content--body action">
                            <a href="<?php the_permalink();?>" class="preview">Preview</a>
                            <a href="<?php echo get_delete_post_link(); ?>" class=" delete"
                                onclick="return confirm('Are you sure you wanna delete this?')">Delete</a>
                            <a href="<?php echo site_url('/edit-museum'); ?>?post=<?php the_ID();?>"
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