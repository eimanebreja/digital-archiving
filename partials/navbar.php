<div class="nav">
    <div class="nav__search">
        <?php get_search_form();?>
    </div>
    <ul class="nav__menu">
        <li class="nav__menu--notif">
            <div class="count-area">
                0
            </div>
            <div class="notif-area">
                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_notif.png" alt="Notif Icon">
            </div>
        </li>
        <li class="nav__menu--profile" onclick="myFunction()">
            <div class="prof-image">
                <img src="<?php echo THEME_DIR; ?>/assets/img/icon/ic_profile.png" alt="Profile Icon">
            </div>
            <div class="prof-position">
                <?php
if (is_user_logged_in()) {
    $current_user = wp_get_current_user();?>
                <p class="name"><?php echo $current_user->display_name; ?></p>
                <p class="pos"><?php echo $current_user->roles[0]; ?></p>
                <?php
} else {
    echo 'Hello Visitor!';
}
?>
            </div>

            <div id="myDropdown" class="dropdown-content">
                <a href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a>
            </div>
        </li>
    </ul>
</div>