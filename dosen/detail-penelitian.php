<?php
//check level
session_start();
if(isset($_SESSION['level']) == "dosen" AND $_SESSION['username']) {
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
                        <div class="header">
                            <h2>
                                DETAIL PENELITIAN
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered dataTable js-exportable">
                                <tbody>
                                    <?php
                                        include('../config/koneksi.php');
                                        $nidn = $_SESSION['username'];
                                        $query = "SELECT * FROM tbl_penelitian WHERE nidn = '$nidn' ORDER BY file_penelitian DESC";
                                        $hasil = mysqli_query($connection, $query);
                                        while($row = mysqli_fetch_array($hasil)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["deskripsi_penelitian"] ?></td><br>
                                    </tr>

                                <?php } ?>

                                </tbody>
                            </table>
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