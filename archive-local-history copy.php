<?php

get_header();
?>
<?php
// Retrieve the selected province from the URL query parameter
$selected_province = urldecode($_GET['province']);

// Retrieve the posts of the "Local History" custom post type filtered by the selected province
$args = array(
    'post_type' => 'local-history',
    'posts_per_page' => -1,
    'meta_query' => array(
        array(
            'key' => 'province',
            'value' => $selected_province,
            'compare' => '=',
        ),
    ),
);

$local_history_posts = get_posts($args);

?>
<section>
    <div class="journal">
        <div class="journal__banner">
            <div class="journal__banner--title">
                <h1><?php echo $selected_province; ?></h1>
            </div>
        </div>
        <div class="journal__container">

            <ul>
                <?php
foreach ($local_history_posts as $post) {
    setup_postdata($post);
    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
}
wp_reset_postdata();
?>
            </ul>
        </div>
    </div>
</section>



<?php get_footer();