<?php
$id = $_GET['id'];
//include koneksi
include_once('../config/koneksi.php');
$sql = "SELECT * FROM tbl_skripsi WHERE id_skripsi = $id LIMIT 1 ";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result); 

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

<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT JUDUL SKRIPSI
                            </h2>
                            <div class="header-dropdown m-r--5">
                                
                            </div>
                        </div>
                        <div class="body">
                            
                            <form action="update-judul.php" method="POST">
                            <div class="form-group">
                                    <label>JUDUL SKRIPSI 1</label>
                                        <div class="form-line">
                                            <input type="hidden" name="id_skripsi" value="<?php echo $row['id_skripsi']; ?>">
                                            <input type="text" name="judul1" value="<?php echo $row['judul1']; ?>" class="form-control" placeholder="judul1" />
                                        </div>

                                    <label>DESKRIPSI JUDUL SKRIPSI 1</label>
                                        <div class="form-line">
                                            <textarea class="form-control" name="deskripsi_judul1"  placeholder="deskripsi judul1"> <?php echo $row['deskripsi_judul1']; ?></textarea>  
                                        </div>
                                        
                                    
                            <label>JUDUL SKRIPSI 2</label>
                                    <div class="form-line">
                                        <input type="text" name="judul2" value="<?php echo $row['judul2']; ?>" class="form-control" placeholder="judul2" />
                                    </div>
                                    

                                    <label>DESKRIPSI JUDUL SKRIPSI 2</label>
                                    <div class="form-line">
                                        <textarea class="form-control" name="deskripsi_judul2" placeholder="deskripsi_judul2"> <?php echo $row['deskripsi_judul2']; ?> </textarea> 
                                    </div>
                                </div>

                            <button type="submit" class="btn bg-green waves-effect">
                                    <i class="material-icons">save</i>
                                    <span>UPDATE</span>
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



    <?php
    //include footer.php
    include("part/footer.php");
    ?>

<?php }