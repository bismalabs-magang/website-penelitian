 <?php
$id = $_GET['id'];
//include koneksi
include_once('../config/koneksi.php');
$sql = "SELECT * FROM tbl_dosen WHERE nidn = $id LIMIT 1 ";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result); 

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

<section class="content">
    <div class="container-fluid">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h2>
                EDIT DATA DOSEN
              </h2>
              <div class="header-dropdown m-r--5">
                
              </div>
            </div>
            <div class="body">
              
              <form action="update-dosen.php" method="POST">
              <div class="form-group">
                  <label>NAMA DOSEN</label>
                    <div class="form-line">
                      <input type="hidden" name="nidn" value="<?php echo $row['nidn']; ?>">
                      <input type="text" name="nama" value="<?php echo $row['nama_dosen']; ?>" class="form-control" placeholder="Nama Dosen" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label>PASSWORD</label>
                    <div class="form-line">
                      <input type="password" name="password" class="form-control" placeholder="Password Dosen" />
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