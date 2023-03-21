<?php
/*** Template Name: Add Collection Management */
// acf_form_head();

get_header();
?>

<?php
class Category_Dropdown_Walker extends Walker_CategoryDropdown
{
    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0)
    {
        $pad = str_repeat('&nbsp;', $depth * 3);
        $cat_name = apply_filters('list_cats', $category->name, $category);
        $output .= "\t<option class=\"level-$depth\" value=\"" . $category->term_id . "\"";
        if ($category->term_id == $args['selected']) {
            $output .= ' selected="selected"';
        }
        $output .= '>';
        $output .= $pad . '- ' . $cat_name;
        $output .= "</option>\n";
    }
}
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
                        <div class="main-body__area--row">
                            <div class="main-body__area--form">
                                <div class="main-body__area--title">
                                    <div class="title">
                                        <h3>Dublin Core</h3>
                                        <p>The Dublin Core metadata element set is common to all Omeka records,
                                            including
                                            items, files, and collections. For more information see,
                                            <a
                                                href="http://dublincore.org/documents/dces/">http://dublincore.org/documents/dces/</a>.
                                        </p>
                                    </div>
                                </div>
                                <div class="item-form-area">
                                    <div class="collection">
                                        <div class="collection__form">
                                            <div id="result-message"></div>
                                            <form id="add-category-form">
                                                <div class="collection__form--field">
                                                    <label for="category-name">Title</label>
                                                    <input type="text" id="category-name" name="category-name" required>
                                                </div>
                                                <div class="collection__form--field">
                                                    <label for="category-description">Contributors </label>
                                                    <input type="text" id="category-description"
                                                        name="category-description" />
                                                </div>
                                                <div class="collection__form--field">
                                                    <label class="parent-cat" for="category-parent">Parent
                                                        Collection</label>
                                                    <?php
wp_dropdown_categories(array(
    'taxonomy' => 'collection_management',
    'id' => 'category-parent',
    'name' => 'category-parent',
    'show_option_none' => '-None-',
    'hide_empty' => false,
    'class' => 'js-example-basic-single',
    'hierarchical' => true,
    'walker' => new Category_Dropdown_Walker(),
));
?>
                                                </div>
                                                <div class="collection__form--btn">
                                                    <input type="submit" value="Add Collection">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php include get_theme_file_path('partials/footer.php');?>
            </div>
        </div>
    </div>
</section>



<script>
jQuery(document).ready(function($) {
    $('#add-category-form').on('submit', function(e) {
        e.preventDefault();
        var categoryName = $('#category-name').val();
        var categoryDescription = $('#category-description').val();
        var categoryParent = $('#category-parent').val();
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'add_category',
                category_name: categoryName,
                category_description: categoryDescription,
                category_parent: categoryParent
            },
            beforeSend: function() {
                $('#result-message').html(
                    '<p>Adding category...</p>');
            },
            success: function(response) {
                $('#result-message').html(response);
                // var redirect_url = site_url + "/add-collection/";
                // window.location.href = redirect_url;
                l;
            }
        });
    });
});
</script>

<script>
jQuery(document).ready(function($) {
    $('.js-example-basic-single').select2();
});
</script>

<?php get_footer();?>