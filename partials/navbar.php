<div class="nav">
    <div class="nav__hamburger">
        <div id="menu-icon" class="nav-menu-sp">
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
    <div class="nav__search">
        <!-- <?php get_search_form();?> -->
    </div>

    <a href="<?php echo site_url('/dashboard'); ?>" class="nav__logo">
        <img src="<?php echo THEME_DIR; ?>/assets/img/ppmc_logo.png" alt="NHCP Logo">
        <p> National Historical Commission<br>
            of the Philippines</p>
    </a>
    <ul class="nav__menu">
        <li class="nav__menu--profile" onclick="myFunction()">
            <div class="prof-image">
                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_profile.png" alt="Profile Icon">
            </div>
            <div class="prof-position">
                <?php
if (is_user_logged_in()) {
    $current_user = wp_get_current_user();?>
                <p class="name"><?php echo $current_user->display_name; ?></p>
                <p class="pos"><?php echo implode(', ', $current_user->roles); ?></p>
                <?php
} else {
    echo 'Hello Visitor!';
}
?>
            </div>
            <div id="myDropdown" class="dropdown-content">
                <a href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a>
                <!-- <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a> -->

            </div>
        </li>
    </ul>
</div>