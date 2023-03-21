<?php
/*** Template Name: Journal View */
get_header();
?>
<?php
if (isset($_GET['years'])) {
    $args = array(
        'post_type' => 'journals',
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'date_query' => array(
            array(
                'year' => $_GET['years'],
            ),
        ),
    );
} else {
    $args = array(
        'post_type' => 'journals',
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC',
    );
}

$loop = new WP_Query($args);

if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();?>

<h1>text</h1>

<?php }
}

wp_reset_query();
?>


<?php get_footer();?>