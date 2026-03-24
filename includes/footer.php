<?php 
function write_copyright(){
    $year = date('Y');
    echo '&copy; ' . $year;
}
?>

<footer>
    <?php write_loge(); ?>
    <?php write_copyright(); ?>
</footer>
    </body>
</html>