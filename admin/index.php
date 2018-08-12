<?php
//check level
session_start();
if(isset($_SESSION['level']) == "admin" AND $_SESSION['username']) {
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
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <label>DASHBOARD</label>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->

    <?php
        //include footer.php
        include("part/footer.php");
    ?>

<?php }else{ ?>
    <?php header("location:../login.php")  ?>
<?php } ?>