<?php
/*** Template Name: Login */
get_header();
?>

<section>
    <div class="login">
        <div class="login__area">
            <div class="login__form">
                <div class="login__form--content">
                    <div class="login__form--head">
                        <div class="logo">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/ppmc_logo.png" alt="NHCP Logo">
                        </div>
                        <div class="acronymn">
                            <h1>
                                National <br>
                                Historical<br>
                                Commission of<br>
                                the Philippines
                            </h1>
                        </div>
                    </div>
                    <div class="login__form--title">
                        <h2>Sign In</h2>
                        <p>Or Create <a href="<?php echo site_url('/register'); ?>">an Account</a>
                        </p>
                    </div>
                    <?php
if (!is_user_logged_in()) { // Display WordPress login form:
    $args = array(
        // 'redirect' => admin_url(),
        'form_id' => 'loginform',
        'label_username' => __('Email'),
        'label_password' => __('Password'),
        'label_remember' => __('Remember Me'),
        'label_log_in' => __('Sign In'),
        'remember' => false,
    );
    wp_login_form($args);
} else { // If logged in:
    ?>
                    <div class="login__form--islogin">

                        <?php
wp_loginout(home_url()); // Display "Log Out" link.
    echo " | ";
    wp_register('', ''); // Display "Site Admin" link.

    ?>
                    </div>
                    <?php
}
?>


                    <?php $login = (isset($_GET['login'])) ? $_GET['login'] : 0;?>
                    <?php
if ($login === "failed") {
    echo '<p class="login-msg">Invalid username and/or password.</p>';
} elseif ($login === "empty") {
    echo '<p class="login-msg">Username and/or Password is empty.</p>';
} elseif ($login === "false") {
    echo '<p class="login-msg">You are logged out.</p>';
}
?>
                </div>

            </div>
            <div class="login__fv">
                <div class="login__fv--img">
                    <!-- <img src="<?php echo THEME_DIR; ?>/assets/img/fv_banner.png" alt="NHCP Logo Banner"> -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>