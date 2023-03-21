<?php
/*** Template Name: Circulations */
acf_form_head();
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
                        <h3>Circulation </h3>
                        <div class="watermark library">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/circulation.png" alt="Circulation Icon">
                        </div>
                    </div>

                    <div class="main-body__main">
                        <div class="main-body__main--title">
                            <h3>Resource Circulation Transaction</h3>
                        </div>

                        <div class="circulation">
                            <div class="circulation__row">
                                <div class="circulation__form">
                                    <?php
$date = date('m-d-Y-His A e');
$random = time() . rand(10 * 45, 100 * 98);
acf_form(array(
    'post_id' => 'new_post',
    'field_groups' => array(
        'group_63d08168a56f6',
    ),
    'updated_message' => __("New Circulation is successfully submitted.", 'acf'),
    'new_post' => array(
        'post_type' => 'circulations',
        'post_status' => 'publish',
        'post_title' => 'Circulation No. ' . $random . ' ',
    ),
    'submit_value' => 'Submit',
));
?>
                                    <form action="">
                                        <div class="circulation__sort">
                                            <div class="circulation__sort--input">
                                                <input type="text" placeholder="Type a word or accession">
                                            </div>

                                            <div class="circulation__sort--btn">
                                                <button>Title</button>
                                                <button>Who has It</button>
                                                <button>Print Receipt</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="circulation__img">
                                    <img src="<?php echo THEME_DIR; ?>/assets/img/nhcp_img.png" alt="">
                                    <div class="icon">
                                        <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_circulation.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="circulation__table">
                                <div class="tab__content--table">
                                    <table id="table_circulation" class="display">
                                        <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg_circulation = array(
    'post_type' => 'circulations',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'paged' => $paged,
);
$arg_query = new WP_Query($arg_circulation);
?>
                                        <thead>
                                            <tr>
                                                <th>ID number</th>
                                                <th>Name</th>
                                                <th>Accession</th>
                                                <th>Title</th>
                                                <th>Date out</th>
                                                <th>Date due</th>
                                                <th>Status</th>
                                                <th>Lock renewal</th>
                                                <th>Lock reason</th>
                                            </tr>
                                            <?php if ($arg_query->have_posts()) {?>

                                        <tbody>
                                            <?php while ($arg_query->have_posts()) {
    $arg_query->the_post();?>
                                            <tr>
                                                <td>
                                                    <?php
echo get_field("circulation_id_number"); ?>
                                                </td>
                                                <td>


                                                    <?php
$item_type_title = get_field("circulation_id_number");
    $patronnames = get_posts(array(
        'post_type' => 'patrons', //use actual post type
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'p_id_number', // name of custom field
                'value' => $item_type_title, // matches exaclty "123", not just 123. This prevents a match for "1234"
                'compare' => '=',
            ),
        ),
    ));

    ?>
                                                    <?php if ($patronnames): ?>

                                                    <?php foreach ($patronnames as $patronname): ?>
                                                    <?php echo get_field("p_name", $patronname->ID); ?>
                                                    <?php endforeach;?>

                                                    <?php endif;?>



                                                </td>
                                                <td><?php echo get_field("circulation_accession"); ?></td>
                                                <td></td>
                                                <td></td>
                                                <td> <?php echo get_field("circulation_dueclaim_date"); ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php
}
    ?>
                                        </tbody>
                                        <?php

}
?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include get_theme_file_path("partials/footer.php");?>
            </div>
        </div>
    </div>
</section>








<?php get_footer();?>