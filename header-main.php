<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes();?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes();?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes();?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('|', true, 'right');?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <link rel="stylesheet" href="<?php echo THEME_DIR; ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo THEME_DIR; ?>/assets/css/owl.theme.default.min.css">
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <div class="navbar-main">
        <div class="navbar-main__container">
            <div class="navbar-main__content">
                <a href="<?php echo site_url('/'); ?>" class="navbar-main__content--logo">
                    <div class="logo">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/nhcp_logo.png" alt="NHCP Logo">
                    </div>
                    <div class="logo-desc">
                        <img src="<?php echo THEME_DIR; ?>/assets/img/nhcp_logo_desc.png" alt="NHCP Logo">
                    </div>
                </a>
                <ul class="navbar-main__content--menu">
                    <li class="menu-list">
                        <a href="<?php echo site_url('/'); ?>" class="menu-link <?php if (is_page('home')) {
    echo "active";}?>">Home</a>
                    </li>
                    <li class="menu-list">
                        <a href="<?php echo site_url('/contact'); ?>" class="menu-link <?php if (is_page('active')) {
    echo "active";}?>">Contact</a>
                    </li>
                    <li class="menu-list">
                        <a href="<?php echo site_url('/about'); ?>" class="menu-link <?php if (is_page('about')) {
    echo "active";}?>">About</a>
                    </li>
                    <li class="menu-list">
                        <?php if (is_user_logged_in()) {?>
                        <a href="<?php echo site_url('/dashboard'); ?>" class="menu-link <?php if (is_page('dashboard')) {
    echo "active";}?>">Dashboard</a>

                        <?php
} else {?>
                        <a href="<?php echo site_url('/login'); ?>" class="menu-link <?php if (is_page('login')) {
    echo "active";}?>">Login</a>
                        <?php }?>


                    </li>
                </ul>
                <div class="navbar-main__hamburger">
                    <div id="menu-icon-main" class="nav-menu-sp">
                        <div class="icon-set">
                            <a class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="slideout-menu">
        <ul>
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
            <li>
                <?php if (is_user_logged_in()) {?>
                <a href="<?php echo site_url('/dashboard'); ?>">Dashboard</a>
                <?php
} else {?>
                <a href="<?php echo site_url('/login'); ?>">Login</a>
                <?php }?>
            </li>
        </ul>
    </div>

    <script>
    const menuIconMain = document.getElementById("menu-icon-main");
    const slideoutMenuMain = document.getElementById("slideout-menu");
    // const body = document.getElementById("body-area");

    menuIconMain.addEventListener("click", function() {
        if (slideoutMenuMain.style.display == "block") {
            slideoutMenuMain.style.display = "none";
            slideoutMenuMain.style.transform = "translateY(-100%)";
            // body.style.overflow = "auto";
            $(".hamburger").toggleClass("is-active");
            console.log("Hide");
        } else {
            slideoutMenuMain.style.display = "block";
            slideoutMenuMain.style.transform = "translateY(0%)";
            // body.style.overflow = "hidden";
            $(".hamburger").toggleClass("is-active");
            console.log("Appear");
        }
    });
    </script>