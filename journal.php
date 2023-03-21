<?php
/*** Template Name: Journal */
get_header();
?>

<section>
    <div class="journal">
        <div class="journal__banner">
            <div class="journal__banner--title">
                <h1>Journal</h1>
            </div>
        </div>
        <div class="journal__container">
            <div class="journal__area">


                <?php
$years = array();

$args = array(
    'post_type' => 'journals',
    'posts_per_page' => -1,
    'orderby' => 'post_date',
    'order' => 'DESC',
);

$loop = new WP_Query($args);

if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
        $year = get_the_date('Y');
        if (!in_array($year, $years)) {
            $years[] = $year;
        }
    }
}

wp_reset_query();

// Display the list of years
foreach ($years as $year) {?>

                <a class="journal__area--item"
                    href="<?php echo get_post_type_archive_link('journals'); ?>?years=<?php echo $year; ?>">
                    <?php echo $year; ?>
                </a>
                <?php }
?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();