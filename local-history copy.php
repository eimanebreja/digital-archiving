<?php
/*** Template Name: Local History Index*/
get_header();
?>

<section>
    <div class="local-history">
        <div class="local-history__banner">
            <div class="local-history__banner--title">
                <h1>Local History Index</h1>
            </div>
        </div>
        <div class="local-history__container">
            <?php
// Retrieve all the posts of the "Local History" custom post type
$args = array(
    'post_type' => 'local-history',
    'posts_per_page' => -1,
);

$local_history_posts = get_posts($args);

// Loop through the posts and retrieve the value of the "Province" ACF field for each post
$provinces = array();
foreach ($local_history_posts as $post) {
    setup_postdata($post);
    $province = get_field('province', $post->ID);
    if (!empty($province)) {
        $provinces[] = $province;
    }
}
wp_reset_postdata();

// Get the unique values of the provinces
$unique_provinces = array_unique($provinces);

// Display the unique provinces on your template page
foreach ($unique_provinces as $province) {?>
            <!-- <li><a href="' . get_permalink() . '?province=' . urlencode($province) . '">' . $province . '</a></li> -->
            <a class="journal__area--item"
                href="<?php echo get_post_type_archive_link('local-history'); ?>?province=<?php echo $province; ?>">
                <?php echo $province; ?>
            </a>
            <?php }
?>

        </div>
    </div>
</section>


<?php get_footer();