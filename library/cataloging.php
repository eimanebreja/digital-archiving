<?php
/*** Template Name: Cataloging */
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
                        <h3>Cataloging </h3>
                        <div class="watermark library">
                            <img src="<?php echo THEME_DIR; ?>/assets/img/cataloging.png" alt="Cataloging Icon">
                        </div>
                    </div>

                    <div class="tab">
                        <div class="tab__btn">
                            <button class="tablinks active" onclick="openTab(event, 'Audio-Visuals')">
                                Audio-Visuals
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Books-and-Manuscripts')">
                                Books and Manuscripts
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Academic-Courseworks')">
                                Academic Courseworks
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Audio-Recordings')">
                                Audio Recordings
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'E-Resources')">
                                E-Resources
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Serial-cataloging')">
                                Serial Cataloging
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Video-Recordings')">
                                Video Recordings
                            </button>
                            <button class="tablinks" onclick="openTab(event, 'Web-Sites')">
                                Web Sites
                            </button>
                        </div>
                        <div id="Audio-Visuals" class="tabcontent" style="display:block">
                            <?php include_once 'cataloging/cataloging-audio-visuals.php';?>
                        </div>
                        <div id="Books-and-Manuscripts" class="tabcontent" style="display:none">
                            <?php include_once 'cataloging/cataloging-books-and-manuscripts.php';?>
                        </div>
                        <div id="Academic-Courseworks" class="tabcontent" style="display:none">
                            <?php include_once 'cataloging/cataloging-academic-courseworks.php';?>
                        </div>
                        <div id="Audio-Recordings" class="tabcontent" style="display:none">
                            <?php include_once 'cataloging/cataloging-audio-recordings.php';?>
                        </div>
                        <div id="E-Resources" class="tabcontent" style="display:none">
                            <?php include_once 'cataloging/cataloging-e-resources.php';?>
                        </div>

                        <div id="Serial-cataloging" class="tabcontent" style="display:none">
                            <?php include_once 'cataloging/cataloging-serial.php';?>
                        </div>
                        <div id="Video-Recordings" class="tabcontent" style="display:none">
                            <?php include_once 'cataloging/cataloging-video-recordings.php';?>
                        </div>
                        <div id="Web-Sites" class="tabcontent" style="display:none">
                            <?php include_once 'cataloging/cataloging-website.php';?>
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
    $('#table_cataloging').dataTable({
        language: {
            searchPlaceholder: "Search Audio-Visuals Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },
    });
    $('#table_booksandmanuscripts').dataTable({
        language: {
            searchPlaceholder: "Search Books and Manuscripts",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },

    });
    $('#table_academic').dataTable({
        language: {
            searchPlaceholder: "Search Academic Courseworks",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },

    });
    $('#table_audiorecord').dataTable({
        language: {
            searchPlaceholder: "Search Audio Recordings",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },

    });
    $('#table_eresources').dataTable({
        language: {
            searchPlaceholder: "Search E-Resources Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },

    });
    $('#table_serial').dataTable({
        language: {
            searchPlaceholder: "Search Serial Cataloging Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },

    });
    $('#table_video').dataTable({
        language: {
            searchPlaceholder: "Search Video Recordings Title",
            search: "",
            "paginate": {
                "previous": "<",
                "next": ">",
            }
        },

    });
    $('#table_website').dataTable({
        language: {
            searchPlaceholder: "Search Web Site Title",
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