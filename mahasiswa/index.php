<?php
//check level
session_start();
if(isset($_SESSION['level']) == "mahasiswa" AND $_SESSION['username']) {
    ?>

    <?php
    //include header.php
    include("part/header.php");
    ?>

    <?php
    //include sidebar.php
    include("part/sidebar.php");
    ?>

    <!-- start content -->

    <!-- end content -->

    <?php
    //include footer.php
    include("part/footer.php");
    ?>

<?php }else{ ?>
    <?php header("location:../login.php")  ?>
<?php } ?>