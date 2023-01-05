<?php

get_header();
?>

<section>
    <div class="main-content">

        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__breadcrumb">
                        <div class="main-body__breadcrumb--list"><?php get_breadcrumb();?></div>
                    </div>
                    <div class="main-body__area">

                        <?php
while (have_posts()) {
    the_post();
    ?>
                        <div class="main-body__area--row">
                            <div class="main-body__area--full">
                                <div class="main-body__area--title">
                                    <h3><?php the_title();?></h3>
                                </div>
                                <div class="item-form-area">
                                    <div class="single-area">
                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Title
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('title');?>
                                            </div>
                                        </div>
                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Subject
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('subject');?>
                                            </div>
                                        </div>
                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Description
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('description');?>
                                            </div>
                                        </div>
                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Creator
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('creator');?>
                                            </div>
                                        </div>
                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Source
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('source');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Publisher
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('publisher');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Date
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('date');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Contributor
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('contributor');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Rights
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('rights');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Relation
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('relation');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Format
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('format');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Language
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('language');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Type
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('type');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Identifier
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('identifier');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Coverage
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php the_field('coverage');?>
                                            </div>
                                        </div>

                                        <div class="single-area__row">
                                            <div class="single-area__row--label">
                                                Files
                                            </div>
                                            <div class="single-area__row--info">
                                                <?php
if (have_rows('file')):
        while (have_rows('file')): the_row();
            $sub_value = get_sub_field('add_new_files');?>
                                                <ul class="document-menu">
                                                    <li class="document-list">
                                                        <a href="<?php echo $sub_value['url']; ?>" target="_blank"
                                                            class="document-link"><?php echo $sub_value['title']; ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <?php if ($sub_value): ?>
                                                <?php endif;?>
                                                <?php
endwhile;
    else:
    endif;
    ?>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php include get_theme_file_path('partials/footer.php');?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>