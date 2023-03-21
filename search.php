<?php
/*
Template Name: Search Page
 */
get_header();
?>


<section>
    <div class="search-result">
        <div class="search-result__container">
            <div class="search-result__area">
                <div class="search-result__header">
                    <p><?php printf(esc_html__('Search Results for: %s', 'your-theme'), '<span>' . get_search_query() . '</span>');?>
                    </p>
                </div>
                <div class="search-result__body">
                    <?php
if (have_posts()): ?>
                    <div class="search-result__body--row">
                        <?php while (have_posts()): the_post();?>
                        <?php
    $post_type = get_post_type();
    if ($post_type == 'attachment'): ?>

                        <?php get_template_part('partials/content', 'attachment');?>

                        <?php else: ?>
                        <?php get_template_part('partials/content', 'search');?>
                        <?php endif;?>
                        <?php endwhile;?>

                    </div>
                    <?php the_posts_navigation();
else:
    get_template_part('partials/content', 'none');

endif;
?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();