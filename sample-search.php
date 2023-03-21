<?php
/*** Template Name: Sample Search */
get_header();
?>

<section>
    <div class="srch">
        <div class="srch__container">
            <div class="srch__form">
                <form role="search" method="get" class="srch__form--area"
                    action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="srch__form--input">
                        <span class="screen-reader-text"><?php _e('Search for:', 'textdomain');?></span>
                        <input type="search" class="search-field"
                            placeholder="<?php _e('Search in Catalogue', 'textdomain');?>"
                            value="<?php echo get_search_query(); ?>" name="s" />
                    </div>
                    <div class="srch__form--btn">
                        <input type="submit" value="<?php _e('Search', 'textdomain');?>" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section>

    <?php
$args = array(
    'post_type' => 'item',
    'tax_query' => array(
        array(
            'taxonomy' => 'collection_management',
            'field' => 'slug',
            'terms' => 'vehicle',
            'include_children' => true,
        ),
    ),
);
$query = new WP_Query($args);

// The Loop
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        $terms = get_the_term_list(get_the_ID(), 'collection_management', '', ', ', '');
        // Do something with the post
        the_title();
        echo '<p>' . $terms . '</p>';
    }
} else {
    // No posts found
}
wp_reset_postdata();
?>

</section>


<?php get_footer();?>