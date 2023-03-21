<?php
get_header();
?>

<section>
    <div class="collections">

        <div class="collections__banner">
            <div class="collections__banner--title">
                <h1><?php single_term_title();?></h1>
            </div>
        </div>

        <div class="collections__container">
            <div class="collections__area">
                <?php if (have_posts()): ?>
                <?php
// Start the Loop
while (have_posts()):
    the_post();?>
                <div class="collections__area--single">
                    <?php get_template_part('partials/content', get_post_type());?>
                </div>
                <?php endwhile;
// the_posts_pagination();
?>
                <?php
else: ?>
                <h3 class="nopost">
                    No post on this collection
                </h3>
                <?php endif;
?>
            </div>
        </div>


    </div>
</section>
<?php get_footer();