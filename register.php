<?php
/*** Template Name: Register */
get_header();
if (!defined('ABSPATH')) {
    exit;
}
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

                    <!-- <form action="">
                        <div class="login__form--group">
                            <div class="login__form--label">
                                Email
                            </div>
                            <div class="login__form--input">
                                <input type="email">
                            </div>
                        </div>
                        <div class="login__form--group">
                            <div class="login__form--label">
                                <span> Password</span>
                                <span><a href="">Forgot Password?</a></span>
                            </div>
                            <div class="login__form--input">
                                <input type="password">
                            </div>
                        </div>
                        <div class="login__form--btn">
                            <button>Sign In</button>
                        </div>
                        <div class="login__form--google">
                            <button>
                                Or Sign in with Google
                            </button>
                        </div>
                    </form> -->

                    <?php
global $wpdb, $user_ID;

//Check whether the user is already logged in
if (!$user_ID) {

// Default page shows register form.
    // To show Login form set query variable action=login
    $action = (isset($_GET['action'])) ? $_GET['action'] : 0;

// Login Page
    if ($action === "login") {?>

                    <?php
$login = (isset($_GET['login'])) ? $_GET['login'] : 0;

        if ($login === "failed") {
            echo '<div class="col-12 register-error"><strong>ERROR:</strong> Invalid username and/or password.</div>';
        } elseif ($login === "empty") {
            echo '<div class="col-12 register-error"><strong>ERROR:</strong> Username and/or Password is empty.</div>';
        } elseif ($login === "false") {
            echo '<div class="col-12 register-error"><strong>ERROR:</strong> You are logged out.</div>';
        }
        ?>
                    <div class="iflogin">

                        <?php
$args = array(
            'redirect' => home_url() . '/login/',
        );

        wp_login_form($args);?>

                        <p class="text-center"><a class="mr-2" href="<?php echo wp_registration_url(); ?>">Register
                                Now</a>
                            <span clas="mx-2">·</span><a class="ml-2" href="<?php echo wp_lostpassword_url(); ?>"
                                title="Lost Password">Lost Password?</a>
                        </p>

                    </div>

                    <?php

    } else { // Register Page ?>

                    <?php

        if ($error != 2) {?>
                    <?php if (get_option('users_can_register')) {?>
                    <div class="login__form--title">
                        <h2>Sign Up</h2>
                    </div>

                    <form action="" method="post">
                        <div class="login__form--group">
                            <label class="login__form--label" for="user_login">Username</label>
                            <div class="login__form--input">
                                <input type="text" name="username" placeholder="Enter your Username Here"
                                    class="register-input mb-4" value="<?php if (!empty($username)) {
            echo $username;
        }
            ?>" />
                            </div>
                        </div>
                        <div class="login__form--group">
                            <label class="login__form--label" for="user_email">Email</label>
                            <div class="login__form--input">
                                <input type="text" name="email" placeholder="Enter your Email Here"
                                    class="register-input mb-4" value="<?php if (!empty($email)) {
                echo $email;
            }
            ?>" />
                            </div>
                        </div>
                        <div class="login__form--btn">
                            <input type="submit" id="register-submit-btn" class="register_btn" name="submit"
                                value="SignUp" />
                        </div>
                    </form>


                    <div class="login__alreadyaccount">
                        <p>Already have an account? <a href="<?php echo site_url('/login'); ?>">Login Here</a></p>

                    </div>


                    <?php } else {

            echo "Registration is currently disabled. Please try again later.";
        }

        }?>

                    <?php
if ($_POST) {

            $error = 0;

            $username = esc_sql($_REQUEST['username']);
            if (empty($username)) {

                echo '<div class="login__register-error">User name should not be empty.</div>';
                $error = 1;
            }

            $email = esc_sql($_REQUEST['email']);
            if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)) {

                echo '<div class="login__register-error">Please enter a valid email.</div>';
                $error = 1;
            }

            if ($error == 0) {

                $random_password = wp_generate_password(12, false);
                $status = wp_create_user($username, $random_password, $email);

                if (is_wp_error($status)) {

                    echo '<div class="login__register-error">Username already exists. Please try another one.</div>';
                } else {

                    $from = get_option('admin_email');
                    $headers = 'From: ' . $from . "\r\n";
                    $subject = "Registration successful";
                    $message = "Registration successful.\nYour login details\nUsername: $username\nPassword: $random_password";

                    // Email password and other details to the user
                    wp_mail($email, $subject, $message, $headers);

                    echo '<div class="login__register-success">' . 'Please check your email for login details.' . '</div>';

                    $error = 2; // We will check for this variable before showing the sign up form.
                }
            }

        }
        ?>
                    <?php }

} else {?>
                    <div class="login__form--islogin">
                        <p class="iflogin">You are logged in. Click <a href="<?php bloginfo('wpurl');?>">here to go
                                home!</a>
                        </p>
                    </div>
                    <?php }?>
                </div>
            </div>
            <div class="login__fv">
                <div class="login__fv--logo">
                    <img src="<?php echo THEME_DIR; ?>/assets/img/ppmc_logo.png" alt="NHCP Logo">
                    <h1>NHCP</h1>
                </div>
                <div class="login__fv--img">
                    <img src="<?php echo THEME_DIR; ?>/assets/img/fv_banner.png" alt="NHCP Logo Banner">
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer();?>