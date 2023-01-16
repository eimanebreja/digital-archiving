<?php
/*** Template Name: Indexing */
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
                        <h3>Indexing </h3>
                        <div class="watermark library">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/indexing.png" alt="Indexing Icon">
                        </div>
                    </div>

                    <div class="tab">
                        <div class="tab__btn">
                            <button class="tablinks active" onclick="openTab(event, 'Analytic')">
                                Analytic
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Periodical')">
                                Periodical
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Vertical-Files')">
                                Vertical Files
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Cases')">
                                Cases
                            </button>

                        </div>
                        <div id="Analytic" class="tabcontent" style="display:block">
                            <?php include_once 'indexing/indexing-analytic.php';?>
                        </div>
                        <div id="Periodical" class="tabcontent" style="display:none">
                            <?php include_once 'indexing/indexing-periodical.php';?>
                        </div>
                        <div id="Vertical-Files" class="tabcontent" style="display:none">
                            <?php include_once 'indexing/indexing-vertical-files.php';?>
                        </div>
                        <div id="Cases" class="tabcontent" style="display:none">
                            <?php include_once 'indexing/indexing-cases.php';?>
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
    $('#table_analytics').dataTable({
        language: {
            searchPlaceholder: "Search Analytics Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });
    $('#table_periodical').dataTable({
        language: {
            searchPlaceholder: "Search Periodical Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });
    $('#table_vertical').dataTable({
        language: {
            searchPlaceholder: "Search Vertical Files Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });
    $('#table_case').dataTable({
        language: {
            searchPlaceholder: "Search Case Title",
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