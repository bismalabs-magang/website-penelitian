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
                        <div class="header">
                            <h2>
                                TAMBAH DATA DOSEN
                            </h2>
                            <div class="header-dropdown m-r--5">
                                
                            </div>
                        </div>
                        <div class="body">
                            
                            <form action="simpan-dosen.php" method="POST">
                                <div class="form-group">
                                    <label>NAMA DOSEN</label>
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Dosen" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>NIDN</label>
                                        <div class="form-line">
                                            <input type="text" name="nidn" class="form-control" placeholder="NIDN Dosen" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <div class="form-line">
                                            <input type="password" name="password" class="form-control" placeholder="Password Dosen" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>PILIH FAKULTAS</label>
                                        <div class="form-line">
                                    <select class="form-control show-tick" name="fakultas" required>
                                        <option value="">-- PILIH FAKULTAS --</option>
                            <?php
                                include('../config/koneksi.php');
                                $query = "SELECT * FROM tbl_fakultas ORDER BY nama_fakultas ASC";
                                $hasil = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_array($hasil)) {
                            ?>
                                        <option value="<?php echo $row['id_fakultas'] ?>"><?php echo $row['nama_fakultas'] ?></option>

                            <?php } ?>
                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn bg-green waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>SIMPAN</span>
                                    </button>

                                    <button type="reset" class="btn bg-orange waves-effect">
                                    <i class="material-icons">repeat</i>
                                    <span>RESET</span>
                                    </button>

                            </form>

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