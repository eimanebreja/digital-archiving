<?php
/*** Template Name: Collection Management */
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
                        <h3>Collection Management </h3>
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
                                    <a href="">Add</a>
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
                                    Contributors
                                </div>
                                <div class="table__content--header type">
                                    Date Added
                                </div>
                                <div class="table__content--header date">
                                    Total Number of Items
                                </div>
                                <div class="table__content--header action">
                                    Action
                                </div>
                            </div>
                            <div class="table__content--row">
                                <div class="table__content--body title">
                                    US Nagasaki bomb off target, historian says
                                </div>
                                <div class="table__content--body creator">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="table__content--body type">
                                    Oct 15, 2022
                                </div>
                                <div class="table__content--body date">
                                    1
                                </div>
                                <div class="table__content--body action">
                                    <a href="" class="preview">Preview</a>
                                    <a href="" class="delete">Delete</a>
                                    <a href="" class="edit">Edit</a>
                                </div>
                            </div>
                            <div class="table__content--row">
                                <div class="table__content--body title">
                                    US Nagasaki bomb off target, historian says
                                </div>
                                <div class="table__content--body creator">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="table__content--body type">
                                    Oct 15, 2022
                                </div>
                                <div class="table__content--body date">
                                    2
                                </div>
                                <div class="table__content--body action">
                                    <a href="" class="preview">Preview</a>
                                    <a href="" class="delete">Delete</a>
                                    <a href="" class="edit">Edit</a>
                                </div>
                            </div>
                            <div class="table__content--row">
                                <div class="table__content--body title">
                                    US Nagasaki bomb off target, historian says
                                </div>
                                <div class="table__content--body creator">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="table__content--body type">
                                    Oct 15, 2022
                                </div>
                                <div class="table__content--body date">
                                    0
                                </div>
                                <div class="table__content--body action">
                                    <a href="" class="preview">Preview</a>
                                    <a href="" class="delete">Delete</a>
                                    <a href="" class="edit">Edit</a>
                                </div>
                            </div>
                            <div class="table__content--row">
                                <div class="table__content--body title">
                                    US Nagasaki bomb off target, historian says
                                </div>
                                <div class="table__content--body creator">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="table__content--body type">
                                    Oct 15, 2022
                                </div>
                                <div class="table__content--body date">
                                    1
                                </div>
                                <div class="table__content--body action">
                                    <a href="" class="preview">Preview</a>
                                    <a href="" class="delete">Delete</a>
                                    <a href="" class="edit">Edit</a>
                                </div>
                            </div>
                            <div class="table__content--row">
                                <div class="table__content--body title">
                                    US Nagasaki bomb off target, historian says
                                </div>
                                <div class="table__content--body creator">
                                    Lorem ipsum dolor sit amet consectetur.
                                </div>
                                <div class="table__content--body type">
                                    Oct 15, 2022
                                </div>
                                <div class="table__content--body date">
                                    3
                                </div>
                                <div class="table__content--body action">
                                    <a href="" class="preview">Preview</a>
                                    <a href="" class="delete">Delete</a>
                                    <a href="" class="edit">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="table__pagination">
                            <div class="table__pagination--row">
                                <a href="" class="item previous">
                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_previous.svg"
                                        alt="Previous Arrow Icon">
                                </a>
                                <a href="" class="item active">1</a>
                                <a href="" class="item">2</a>
                                <a href="" class="item">3</a>
                                <a href="" class="item">4</a>
                                <a href="" class="item">5</a>
                                <a href="" class="item">80</a>
                                <a href="" class="item next">
                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_next.svg"
                                        alt="Next Arrow Icon">
                                </a>
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