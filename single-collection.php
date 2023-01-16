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

                                <div class="singles-collection">
                                    <div class="singles-collection__header">
                                        <p><span>Contributors : </span> <?php echo get_field("contributors") ?></p>
                                        <p><span>Date Added :</span> <?php echo get_field("date_added") ?></p>
                                    </div>
                                    <div class="singles-collection__sub">
                                        <div class="singles-collection__sub--title">
                                            <h3>
                                                List of Sub - Collections
                                            </h3>
                                        </div>
                                        <div class="collection">
                                            <div class="collection__row">
                                                <div class="collection__row--check">
                                                    <?php $post_id = get_the_ID();?>
                                                    <?php $post_title = get_the_title($post_id);?>

                                                    <div id="multiselect-subcollection">
                                                        <!-- Parent Sub Collection -->
                                                        <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $OnecollectionArgs = array(
        'post_type' => 'sub-collection',
        'post_status' => 'publish',
        'order' => 'ASC',
        'paged' => $paged,
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'sub_collection',
                'value' => $post_id,
                'compare' => '=',
            ),
        ),
    );
    $onesubcollection_query = new WP_Query($OnecollectionArgs);
    ?>
                                                        <?php if ($onesubcollection_query->have_posts()) {?>
                                                        <?php while ($onesubcollection_query->have_posts()) {
        $onesubcollection_query->the_post();
        ?>
                                                        <?php
$post_id = get_the_ID();
        $get_child_title = get_the_title();?>
                                                        <div class="check-area">
                                                            <div class="check-content">
                                                                <div class="arrow-img">
                                                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                        alt="Arrow Icon">
                                                                </div>
                                                                <?php echo $get_child_title; ?>
                                                            </div>

                                                            <!-- Children Query -->
                                                            <?php
$twosubcollection_args = array(
            'post_type' => 'sub-collection',
            'post_status' => 'publish',
            'order' => 'ASC',
            'fields' => 'ids',
            'meta_query' => array(
                'relation' => 'AND',

                array(
                    'key' => 'sub_collection',
                    'value' => $post_id,
                    'compare' => '=',
                ),

            ),
        );
        $twosubcollection_query = new WP_Query($twosubcollection_args);
        ?>
                                                            <?php if ($twosubcollection_query->have_posts()) {?>
                                                            <?php while ($twosubcollection_query->have_posts()) {
            $twosubcollection_query->the_post();?>
                                                            <?php
$post_id = get_the_ID();
            $get_children_title = get_the_title();?>
                                                            <div class="check-area">
                                                                <div class="check-content">
                                                                    <div class="arrow-img">
                                                                        <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                            alt="Arrow Icon">
                                                                    </div>
                                                                    <?php echo $get_children_title; ?>
                                                                </div>

                                                                <!-- Children Query -->
                                                                <?php
$threesubcollection_args = array(
                'post_type' => 'sub-collection',
                'post_status' => 'publish',
                'order' => 'ASC',
                'fields' => 'ids',
                'meta_query' => array(
                    'relation' => 'AND',

                    array(
                        'key' => 'sub_collection',
                        'value' => $post_id,
                        'compare' => '=',
                    ),

                ),
            );
            $threesubcollection_query = new WP_Query($threesubcollection_args);
            ?>
                                                                <?php if ($threesubcollection_query->have_posts()) {?>
                                                                <?php while ($threesubcollection_query->have_posts()) {
                $threesubcollection_query->the_post();?>
                                                                <?php
$post_id = get_the_ID();
                $get_threechildren_title = get_the_title();?>
                                                                <div class="check-area">
                                                                    <div class="check-content">
                                                                        <div class="arrow-img">
                                                                            <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                alt="Arrow Icon">
                                                                        </div>
                                                                        <?php echo $get_threechildren_title; ?>
                                                                    </div>

                                                                    <!-- Children Query -->
                                                                    <?php
$foursubcollection_args = array(
                    'post_type' => 'sub-collection',
                    'post_status' => 'publish',
                    'order' => 'ASC',
                    'fields' => 'ids',
                    'meta_query' => array(
                        'relation' => 'AND',

                        array(
                            'key' => 'sub_collection',
                            'value' => $post_id,
                            'compare' => '=',
                        ),

                    ),
                );
                $foursubcollection_query = new WP_Query($foursubcollection_args);
                ?>
                                                                    <?php if ($foursubcollection_query->have_posts()) {?>
                                                                    <?php while ($foursubcollection_query->have_posts()) {
                    $foursubcollection_query->the_post();?>
                                                                    <?php
$post_id = get_the_ID();
                    $get_fourchildren_title = get_the_title();?>
                                                                    <div class="check-area">
                                                                        <div class="check-content">
                                                                            <div class="arrow-img">
                                                                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                    alt="Arrow Icon">
                                                                            </div>
                                                                            <?php echo $get_fourchildren_title; ?>
                                                                        </div>
                                                                        <!-- Children Query -->
                                                                        <?php
$fifthsubcollection_args = array(
                        'post_type' => 'sub-collection',
                        'post_status' => 'publish',
                        'order' => 'ASC',
                        'fields' => 'ids',
                        'meta_query' => array(
                            'relation' => 'AND',

                            array(
                                'key' => 'sub_collection',
                                'value' => $post_id,
                                'compare' => '=',
                            ),

                        ),
                    );
                    $fifisubcollection_query = new WP_Query($fifthsubcollection_args);
                    ?>
                                                                        <?php if ($fifisubcollection_query->have_posts()) {?>
                                                                        <?php while ($fifisubcollection_query->have_posts()) {
                        $fifisubcollection_query->the_post();?>
                                                                        <?php
$post_id = get_the_ID();
                        $get_fifchildren_title = get_the_title();?>
                                                                        <div class="check-area">
                                                                            <div class="check-content">
                                                                                <div class="arrow-img">
                                                                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                        alt="Arrow Icon">
                                                                                </div>
                                                                                <?php echo $get_fifchildren_title; ?>
                                                                            </div>

                                                                            <!-- Children Query -->
                                                                            <?php
$sixsubcollection_args = array(
                            'post_type' => 'sub-collection',
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'fields' => 'ids',
                            'meta_query' => array(
                                'relation' => 'AND',

                                array(
                                    'key' => 'sub_collection',
                                    'value' => $post_id,
                                    'compare' => '=',
                                ),

                            ),
                        );
                        $sixsubcollection_query = new WP_Query($sixsubcollection_args);
                        ?>
                                                                            <?php if ($sixsubcollection_query->have_posts()) {?>
                                                                            <?php while ($sixsubcollection_query->have_posts()) {
                            $sixsubcollection_query->the_post();?>
                                                                            <?php
$post_id = get_the_ID();
                            $get_sixchildren_title = get_the_title();?>
                                                                            <div class="check-area">
                                                                                <div class="check-content">
                                                                                    <div class="arrow-img">
                                                                                        <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                            alt="Arrow Icon">
                                                                                    </div>
                                                                                    <?php echo $get_sixchildren_title; ?>
                                                                                </div>

                                                                                <!-- Children Query -->
                                                                                <?php
$sevenssubcollection_args = array(
                                'post_type' => 'sub-collection',
                                'post_status' => 'publish',
                                'order' => 'ASC',
                                'fields' => 'ids',
                                'meta_query' => array(
                                    'relation' => 'AND',

                                    array(
                                        'key' => 'sub_collection',
                                        'value' => $post_id,
                                        'compare' => '=',
                                    ),

                                ),
                            );
                            $sevenssubcollection_query = new WP_Query($sevenssubcollection_args);
                            ?>
                                                                                <?php if ($sevenssubcollection_query->have_posts()) {?>
                                                                                <?php while ($sevenssubcollection_query->have_posts()) {
                                $sevenssubcollection_query->the_post();?>
                                                                                <?php
$post_id = get_the_ID();
                                $get_sevenchildren_title = get_the_title();?>
                                                                                <div class="check-area">
                                                                                    <div class="check-content">
                                                                                        <div class="arrow-img">
                                                                                            <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                                alt="Arrow Icon">
                                                                                        </div>
                                                                                        <?php echo $get_sevenchildren_title; ?>
                                                                                    </div>

                                                                                    <!-- Children Query -->
                                                                                    <?php
$eightsubcollection_args = array(
                                    'post_type' => 'sub-collection',
                                    'post_status' => 'publish',
                                    'order' => 'ASC',
                                    'fields' => 'ids',
                                    'meta_query' => array(
                                        'relation' => 'AND',

                                        array(
                                            'key' => 'sub_collection',
                                            'value' => $post_id,
                                            'compare' => '=',
                                        ),

                                    ),
                                );
                                $eightssubcollection_query = new WP_Query($eightsubcollection_args);
                                ?>
                                                                                    <?php if ($eightssubcollection_query->have_posts()) {?>
                                                                                    <?php while ($eightssubcollection_query->have_posts()) {
                                    $eightssubcollection_query->the_post();?>
                                                                                    <?php
$post_id = get_the_ID();
                                    $get_eightchildren_title = get_the_title();?>
                                                                                    <div class="check-area">
                                                                                        <div class="check-content">
                                                                                            <div class="arrow-img">
                                                                                                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                                    alt="Arrow Icon">
                                                                                            </div>
                                                                                            <?php echo $get_eightchildren_title; ?>
                                                                                        </div>


                                                                                        <!-- Children Query -->
                                                                                        <?php
$ninesubcollection_args = array(
                                        'post_type' => 'sub-collection',
                                        'post_status' => 'publish',
                                        'order' => 'ASC',
                                        'fields' => 'ids',
                                        'meta_query' => array(
                                            'relation' => 'AND',

                                            array(
                                                'key' => 'sub_collection',
                                                'value' => $post_id,
                                                'compare' => '=',
                                            ),

                                        ),
                                    );
                                    $ninesubcollection_query = new WP_Query($ninesubcollection_args);
                                    ?>
                                                                                        <?php if ($ninesubcollection_query->have_posts()) {?>
                                                                                        <?php while ($ninesubcollection_query->have_posts()) {
                                        $ninesubcollection_query->the_post();?>
                                                                                        <?php
$post_id = get_the_ID();
                                        $get_ninechildren_title = get_the_title();?>
                                                                                        <div class="check-area">
                                                                                            <div class="check-content">
                                                                                                <div class="arrow-img">
                                                                                                    <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                                        alt="Arrow Icon">
                                                                                                </div>
                                                                                                <?php echo $get_ninechildren_title; ?>
                                                                                            </div>

                                                                                            <!-- Children Query -->
                                                                                            <?php
$tensubcollection_args = array(
                                            'post_type' => 'sub-collection',
                                            'post_status' => 'publish',
                                            'order' => 'ASC',
                                            'fields' => 'ids',
                                            'meta_query' => array(
                                                'relation' => 'AND',

                                                array(
                                                    'key' => 'sub_collection',
                                                    'value' => $post_id,
                                                    'compare' => '=',
                                                ),

                                            ),
                                        );
                                        $tensubcollection_query = new WP_Query($tensubcollection_args);
                                        ?>
                                                                                            <?php if ($tensubcollection_query->have_posts()) {?>
                                                                                            <?php while ($tensubcollection_query->have_posts()) {
                                            $tensubcollection_query->the_post();?>
                                                                                            <?php
$post_id = get_the_ID();
                                            $get_tenchildren_title = get_the_title();?>
                                                                                            <div class="check-area">
                                                                                                <div
                                                                                                    class="check-content">
                                                                                                    <div
                                                                                                        class="arrow-img">
                                                                                                        <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_right_arrow.svg"
                                                                                                            alt="Arrow Icon">
                                                                                                    </div>
                                                                                                    <?php echo $get_tenchildren_title; ?>
                                                                                                </div>


                                                                                            </div>
                                                                                            <?php
}

                                        }
                                        ?>
                                                                                            <!-- Children Query -->


                                                                                        </div>
                                                                                        <?php
}

                                    }
                                    ?>
                                                                                        <!-- Children Query -->


                                                                                    </div>
                                                                                    <?php
}

                                }
                                ?>
                                                                                    <!-- Children Query -->


                                                                                </div>
                                                                                <?php
}

                            }
                            ?>
                                                                                <!-- Children Query -->
                                                                            </div>
                                                                            <?php
}

                        }
                        ?>
                                                                            <!-- Children Query -->
                                                                        </div>
                                                                        <?php
}

                    }
                    ?>
                                                                        <!-- Children Query -->

                                                                    </div>
                                                                    <?php
}

                }
                ?>
                                                                    <!-- Children Query -->


                                                                </div>

                                                                <?php
}

            }
            ?>
                                                                <!-- Children Query -->


                                                            </div>

                                                            <?php
}

        }
        ?>
                                                            <!-- Children Query -->

                                                        </div>

                                                        <?php
}
    }
    ?>
                                                        <!-- End of Parent Sub Collection -->
                                                    </div>
                                                </div>


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