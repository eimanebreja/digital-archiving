<?php
/*** Template Name: Item Type Management */
get_header();
?>

<section>
    <div class="main-content">
        <?php require_once "partials/sidebar.php";?>
        <?php require_once "partials/navbar.php";?>
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__content--header">
                        <h3>Item Type Management </h3>
                        <div class="watermark">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/head_frame.png" alt="Notif Icon">
                        </div>
                    </div>

                    <div class="table">
                        <div class="table__header">
                            <div class="table__header--browse">
                                <div class="browse">
                                    <p>Browse Items</p>
                                    <span>More than 1000+ Browse Items</span>
                                </div>
                                <div class="button">
                                    <a href="<?php echo site_url('/add-item-type'); ?>">Add</a>
                                </div>
                            </div>
                            <div class="table__header--search">
                                <input type="text" placeholder="Search Item">
                            </div>
                        </div>

                    </div>
                </div>
                <?php require_once "partials/footer.php";?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>