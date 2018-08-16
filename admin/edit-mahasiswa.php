<?php
$id = $_GET['id'];
//include koneksi
include_once('../config/koneksi.php');
$sql = "SELECT * FROM tbl_mahasiswa WHERE nim = $id LIMIT 1 ";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD -  Edit Data Mahasiswa </title>
    <style>
    .container {
    text-align: left;
    margin-top: 0%;
    }
    .input {
    height: 30px;
    width: 75%;
    font-size: 20px;
    }
    .editor {
    width: 75%;
    font-size: 20px
    }
    </style>
  </head>
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
  <section class="content">
    <div class="container-fluid">
      <div class="row clearfix">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <body>
                <div class="container">
                  <form action="update-mahasiswa.php" method="POST">
                    <fieldset>
                      <legend>Edit Data Mahasiswa :</legend>
                      Nama :<br>
                      <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">
                      <input type="text" class="input" name="nama" value="<?php echo $row['nama_mahasiswa']; ?>"><br>
                      Fakultas :<br>
                      <input type="text" class="input" name="fakultas" value="<?php echo $row['id_fakultas']; ?>"><br>
                      Prodi :<br>
                      <input type="text" class="input" name="prodi" value="<?php echo $row['id_prodi']; ?>"><br><br>
                      <button type="submit" value="Submit">Update</button>
                    </fieldset>
                  </form>
                </div>
              </body>
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
  <?php header("location:mahasiswa.php")  ?>
<?php } ?>

</html>