<?php
/*** Template Name: Collections */
get_header();
?>

<section>
    <div class="collections">
        <div class="collections__banner">
            <div class="collections__banner--title">
                <h1>Collections</h1>
            </div>
        </div>
        <div class="collections__container">
            <div class="collections__area">
                <?php
$collections = get_terms(array(
    'taxonomy' => 'collections_category',
    'hide_empty' => false,
));?>
                <?php if (!empty($collections) && !is_wp_error($collections)): ?>
                <div class="collections__area--list">
                    <?php foreach ($collections as $collection) {?>
                    <div class="collections__area--link">
                        <a href="<?php echo get_term_link($collection); ?>"><?php echo $collection->name; ?></a>
                    </div>
                    <?php }?>
                </div>
                <?php else:
    echo esc_html_e('No collections found', 'text-domain');
endif;?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();