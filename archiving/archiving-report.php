<?php
/*** Template Name: Archiving Report */
get_header();
?>

<section>
    <div class="main-content">
        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>


        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__content--header">
                        <h3>Reports </h3>
                        <div class="watermark">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/head_frame.png" alt="Notif Icon">
                        </div>
                    </div>
                    <div class="table">
                        <div class="table__header">
                            <div class="table__header--report">
                                <form method="post" class="report-area">
                                    <p class="report-area__label">Select File Type</p>
                                    <div class="report-area__select">
                                        <?php
$arg_format = array(
    'post_type' => 'format',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);
$arg_query = new WP_Query($arg_format);
?>
                                        <?php if ($arg_query->have_posts()) {?>
                                        <select name="format_type" id="format_type" onchange="this.form.submit()">
                                            <option value="">Select format</option>
                                            <?php while ($arg_query->have_posts()) {
    $arg_query->the_post();?>
                                            <option value="<?php echo $arg_query->post->ID; ?>">
                                                <?php the_title();?>
                                            </option>
                                            <?php
}
    ?>
                                        </select>
                                        <noscript><input type="submit" value="Submit"></noscript>
                                        <?php
}
?>
                                    </div>
                                </form>
                            </div>
                            <div class="viewall-area">
                                <a href="<?php get_permalink();?>">View All</a>
                            </div>
                        </div>
                        <div class="table__content">
                            <?php
// Check if a format type has been selected
if (isset($_POST['format_type']) && !empty($_POST['format_type'])) {
    $format_type = $_POST['format_type'];
    $args = array(
        'post_type' => 'item',
        'posts_per_page' => -1,
        'meta_key' => 'format_attribute',
        'meta_value' => $format_type,
    );
    $posts = get_posts($args);?>

                            <table id="table_report_item" class="display">
                                <thead>
                                    <tr>
                                        <th> Title</th>
                                        <th> Description</th>
                                        <th> File Type</th>
                                        <th> Collection</th>
                                    </tr>
                                </thead>
                                <?php if ($posts) {?>
                                <tbody>
                                    <?php foreach ($posts as $post) {?>
                                    <tr>
                                        <td>
                                            <?php the_title();?>
                                        </td>
                                        <td>
                                            <?php
echo get_field('description');
        ?>
                                        </td>
                                        <td>
                                            <?php
$post_id = get_field("format_attribute");
        $post_title = get_the_title($post_id);
        echo $post_title;?>
                                        </td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <?php }
        wp_reset_postdata();?>
                                </tbody>
                                <?php } else {
        echo '<p>No posts found.</p>';
    }?>
                            </table>
                            <?php } else {?>
                            <?php

    // Get all posts of 'Catalogue' post type
    $args = array(
        'post_type' => 'item',
        'posts_per_page' => -1,
    );
    $posts = get_posts($args);?>
                            <table id="table_report_item" class="display">
                                <thead>
                                    <tr>
                                        <th> Title</th>
                                        <th> Description</th>
                                        <th> File Type</th>
                                        <th> Collection</th>
                                    </tr>
                                </thead>
                                <?php if ($posts) {?>
                                <tbody>

                                    <?php foreach ($posts as $post) {setup_postdata($post);?>
                                    <tr>
                                        <td>
                                            <?php the_title();?>
                                        </td>
                                        <td>
                                            <?php
echo get_field('description');
        ?>
                                        </td>
                                        <td>
                                            <?php
$post_ids = get_field("format_attribute");
        $post_titles = get_the_title($post_ids);
        echo $post_titles;?>
                                        </td>
                                        <td>
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
                                        </td>
                                    </tr>
                                    <?php }
        wp_reset_postdata();?>

                                </tbody>
                                <?php } else {
        echo '<p>No posts found.</p>';
    }?>
                            </table>


                            <?php }?>


                        </div>

                    </div>
                </div>
            </div>
            <?php include get_theme_file_path('partials/footer.php');?>
        </div>
    </div>
</section>






<?php get_footer();?>