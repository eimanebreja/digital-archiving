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
            <div class="local-history__search">
                <form class="local-history__search--form"
                    action="<?php echo get_post_type_archive_link('local-history'); ?>" method="GET">
                    <div class="local-history__search--label">
                        Search by :
                    </div>
                    <div class="local-history__search--row">
                        <!-- <div class="local-history__search--input">
                            <select name="region" id="region">
                                <option value="">Select Region</option>
                            </select>
                        </div> -->
                        <div class="local-history__search--input">

                            <select name="province" id="province" onchange="this.form.submit()">
                                <option value="">Select Province</option>
                                <?php
$args = array(
    'post_type' => 'local-history',
    'posts_per_page' => -1, // To get all posts
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) {

    $provinces = array();

    while ($the_query->have_posts()) {
        $the_query->the_post();
        $province = get_field('province');
        if ($province) {
            $provinces[] = $province;
        }
    }
    $provinces = array_unique($provinces);

    foreach ($provinces as $province) {?>
                                <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                                <?php }
} else {
    // No posts found
}

// Restore original post data
wp_reset_postdata();?>

                            </select>
                        </div>
                    </div>
                </form>
                <form class="local-history__search--form" id="local-history-form">
                    <div class="local-history__search--label">
                        Search by post title :
                    </div>
                    <div class="local-history__search--input">
                        <select class="form-control" id="local-history-select" name="local_history_post"></select>
                    </div>
                </form>
            </div>
            <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
    'post_type' => 'local-history',
    'paged' => $paged,
    'posts_per_page' => 3,
));

if (have_posts()): ?>
            <div class="local-history__area">
                <?php while (have_posts()): the_post();?>
                <div class="local-history__area--item">
                    <div class="item-content">
                        <div class="item-content__img">
                            <?php
    $image = get_field('cover_image');
    if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif;?>
                        </div>
                        <div class="item-content__info">
                            <a href="<?php echo get_field("url") ?>" class="item-content__info--head">
                                <h3><?php the_title();?></h3>
                            </a>
                            <div class="item-content__info--row">
                                <div class="item-content__info--item">
                                    <div class="item-content__info--title">
                                        Publisher :
                                    </div>
                                    <div class="item-content__info--desc">
                                        <?php echo get_field("local_publisher") ?>
                                    </div>
                                </div>
                                <div class="item-content__info--item">
                                    <div class="item-content__info--title">
                                        Publish Date :
                                    </div>
                                    <div class="item-content__info--desc">
                                        <?php echo get_field("local_publish_date") ?>
                                    </div>
                                </div>
                                <div class="item-content__info--item">
                                    <div class="item-content__info--title">
                                        Author :
                                    </div>
                                    <div class="item-content__info--desc">
                                        <?php echo get_field("local_author") ?>
                                    </div>
                                </div>
                                <div class="item-content__info--item">
                                    <div class="item-content__info--title">
                                        Institution :
                                    </div>
                                    <div class="item-content__info--desc">
                                        <?php echo get_field("local_institution") ?>
                                    </div>
                                </div>
                                <div class="item-content__info--item">
                                    <div class="item-content__info--title">
                                        Address :
                                    </div>
                                    <div class="item-content__info--desc">
                                        <?php echo get_field("city") ?>
                                        <?php echo get_field("province"); ?>
                                        <?php echo get_field("region"); ?>
                                    </div>
                                </div>
                                <div class="item-content__info--file">
                                    <?php
$pdf = get_field('local_file');
if ($pdf):
?>
                                    <div class="_df_button" source="<?php echo $pdf['url']; ?> ">Read
                                        More</div>

                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
            <div class="local-history__paginate">
                <div class="local-history__paginate--menu">
                    <?php my_pagination();?>
                </div>
            </div>
            <?php else: ?>
            <div class="no-result">
                <h1>No results found</h1>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>



<script>
jQuery(document).ready(function($) {
    var $select = $('#local-history-select');

    $select.select2({
        ajax: {
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term,
                    action: 'local_history_search',
                    nonce: '<?php echo wp_create_nonce('local_history_search'); ?>'
                };
            },
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.title,
                            id: item.ID
                        };
                    })
                };
            },
            cache: true
        },
        minimumInputLength: 3
    });

    $select.on('select2:select', function(e) {
        var post_id = e.params.data.id;
        window.location.href = '<?php echo get_post_type_archive_link('local-history'); ?>' +
            '?post_title=' + post_id;
    });
});
</script>

<?php get_footer();