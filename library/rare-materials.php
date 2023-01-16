<?php
/*** Template Name: Rare Material */
get_header();
?>

<section>
    <div class="main-content">
        <?php include get_theme_file_path('partials/sidebar.php');?>
        <?php include get_theme_file_path('partials/navbar.php');?>
        <div class="main-body">
            <div class="main-body__content">
                <div class="main-body__container">
                    <div class="main-body__content--header">
                        <h3>Rare Materials </h3>
                        <div class="watermark library">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/rare-materials.png" alt="Rare Materials Icon">
                        </div>
                    </div>

                    <div class="tab">
                        <div class="tab__btn">
                            <button class="tablinks active" onclick="openTab(event, 'Archives')">
                                Archives
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Museum')">
                                Museum
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Patron')">
                                Patron
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Uploads')">
                                Uploads
                            </button>

                        </div>
                        <div id="Archives" class="tabcontent" style="display:block">
                            <?php include_once 'rare-materials/rare-materials-archives.php';?>
                        </div>
                        <div id="Museum" class="tabcontent" style="display:none">
                            <?php include_once 'rare-materials/rare-materials-museum.php';?>
                        </div>
                        <div id="Patron" class="tabcontent" style="display:none">
                            <?php include_once 'rare-materials/rare-materials-patron.php';?>
                        </div>
                        <div id="Uploads" class="tabcontent" style="display:none">
                            <?php include_once 'rare-materials/rare-materials-uploads.php';?>
                        </div>
                    </div>
                </div>
                <?php include get_theme_file_path("partials/footer.php");?>
            </div>
        </div>
    </div>
</section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script type='text/javascript'>
$(document).ready(function() {
    // $('#table_item_type').DataTable();
    $('#table_archives').dataTable({
        language: {
            searchPlaceholder: "Search Archives Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });
    $('#table_museum').dataTable({
        language: {
            searchPlaceholder: "Search Museum Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });
    $('#table_patron').dataTable({
        language: {
            searchPlaceholder: "Search Patron Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });
    $('#table_upload').dataTable({
        language: {
            searchPlaceholder: "Search Upload Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });


});
</script>





<?php get_footer();?>