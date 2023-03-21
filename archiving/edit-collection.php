<?php
/*** Template Name: Edit Collection Management */
ob_start();
get_header();
?>

<section>
    <div class="main-content">

        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>
        <!-- <?php $post_id = $_GET["post"];?> -->
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__breadcrumb">
                        <div class="main-body__breadcrumb--list"><?php get_breadcrumb();?></div>
                    </div>
                    <div class="main-body__area">
                        <div class="main-body__area--row">
                            <div class="main-body__area--form addcollection">
                                <div class="main-body__area--title">
                                    <div class="title">
                                        <h3>Edit Collection</h3>
                                        <p>
                                            Edit Collection Information
                                        </p>
                                    </div>
                                </div>
                                <div class="item-form-area">
                                    <?php
$term_id = $_GET["term"];
$term = get_term($term_id, 'collection_management');

if (isset($_POST['update_term'])) {
    $term_name = sanitize_text_field($_POST['term_name']);
    $term_description = $_POST['term_description'];

    $term_update = wp_update_term($term_id, 'collection_management', array(
        'name' => $term_name,
        'description' => $term_description,
    ));

    if (is_wp_error($term_update)) {
        // Handle the error.
    } else {
        // Update successful.
        $term = get_term($term_update['term_id'], 'collection_management');
        wp_redirect(site_url('/collection/'));
        exit;
    }
}
ob_end_flush();
?>
                                    <div class="collection">
                                        <div class="collection__form">
                                            <form action="" method="post">
                                                <div class="collection__form--field">
                                                    <label for="term_name">Name </label>
                                                    <input type="text" id="term_name" name="term_name"
                                                        value="<?php echo $term->name; ?>">
                                                </div>
                                                <div class="collection__form--field">
                                                    <label for="term_description">Contributors </label>
                                                    <input type="text" id="term_description" name="term_description"
                                                        value="<?php echo $term->description; ?>">
                                                </div>
                                                <div class="collection__form--btn">
                                                    <input type="submit" name="update_term" value="Update">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php include get_theme_file_path('partials/footer.php');?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>