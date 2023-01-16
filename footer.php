<script src="<?php echo THEME_DIR; ?>/assets/js/app.js"></script>


<script>
function myFunction() {
    var x = document.getElementById("myDropdown");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>
<?php wp_footer();?>
</body>

</html>