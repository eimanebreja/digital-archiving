<?php
/*** Template Name: Contact */
get_header();
?>

<section>
    <div class="collection-view">
        <div class="collection-view__banner">
            <div class="collection-view__banner--title">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="collection-view__container">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="1380" title="Contact Form"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>