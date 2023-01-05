<?php
/*** Template Name: Item Management */
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
                        <h3>Item Management </h3>
                        <div class="watermark">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/head_frame.png" alt="Notif Icon">
                        </div>
                    </div>

                    <div class="table">

                        <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
    'post_type' => 'item',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'paged' => $paged,
));
$query = new WP_Query($args);
?>


                        <div class="table__header">
                            <div class="table__header--browse">
                                <div class="browse">
                                    <p>Browse Items</p>
                                    <span>More than 1000+ Browse Items</span>
                                </div>
                                <div class="button">
                                    <a href="<?php echo site_url('/add-item'); ?>">Add</a>
                                </div>
                            </div>
                            <div class="table__header--search">
                                <input type="text" placeholder="Search Item">
                            </div>
                        </div>
                        <div class="table__content">
                            <div class="table__content--row">
                                <div class="table__content--header title">
                                    Title
                                </div>
                                <div class="table__content--header creator">
                                    Creator
                                </div>
                                <div class="table__content--header type">
                                    Type
                                </div>
                                <div class="table__content--header date">
                                    Date Added
                                </div>
                                <div class="table__content--header action">
                                    Action
                                </div>
                            </div>
                            <?php if (have_posts()): ?>
                            <?php while (have_posts()): the_post();?>
                            <div class="table__content--row">
                                <div class="table__content--body title">
                                    <?php echo get_field("title") ?>
                                </div>
                                <div class="table__content--body creator">
                                    <?php echo get_field("creator") ?>
                                </div>
                                <div class="table__content--body type">
                                    <?php echo get_field("type") ?>
                                </div>
                                <div class="table__content--body date">
                                    <?php echo get_field("date") ?>
                                </div>
                                <div class="table__content--body action">
                                    <a href="<?php the_permalink();?>" class="preview">Preview</a>
                                    <a href="<?php echo get_delete_post_link(); ?>" class="delete"
                                        onclick="return confirm('Are you sure you wanna delete this?')">Delete</a>
                                    <a href="<?php echo site_url('/edit-item'); ?>?post=<?php the_ID();?>"
                                        class="edit">Edit</a>
                                </div>
                            </div>

                            <?php endwhile;?>

                            <div class="table__pagination">
                                <div class="table__pagination--row">
                                    <?php item_pagination();?>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="no-result">
                                <h3>No results found</h3>
                            </div>
                            <?php endif;?>
                        </div>



                    </div>
                </div>
                <?php require_once "partials/footer.php";?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>