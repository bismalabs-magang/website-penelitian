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
                                DATA PENELITIAN
                            </h2>
                            <div class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="tambah-penelitian.php" class="btn btn-success btn-md">TAMBAH PENELITIAN</a>
                                </li>
                            </div>
                        </div>
                        <div class="body">
                            <table class="table table-bordered dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th scope="col">NIDN</th>
                                    <th scope="col">JUDUL PENELITIAN</th>
                                    <th scope="col">FILE PENELITIAN</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include('../config/koneksi.php');
                                        $nidn = $_SESSION['username'];
                                        $query = "SELECT * FROM tbl_penelitian WHERE nidn = '$nidn' ORDER BY id_penelitian DESC";
                                        $hasil = mysqli_query($connection, $query);

                                        while($row = mysqli_fetch_array($hasil)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["nidn"] ?></td>
                                        <td><?php echo $row["judul_penelitian"] ?></td>
                                        <td><a href="../file/<?php echo $row["file_penelitian"] ?>"><?php echo $row["file_penelitian"] ?></a></td>
                                        <td style="text-align: center">
                                            <a href="detail-penelitian.php?id=<?php echo $row["id_penelitian"] ?>" class="btn btn-primary btn-sm">Detail </a>

                                            <a href="edit-penelitian.php?id=<?php echo $row["id_penelitian"] ?>" class="btn btn-success btn-sm">Edit</a>

                                            <a href="delete-penelitian.php?id=<?php echo $row["id_penelitian"] ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
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