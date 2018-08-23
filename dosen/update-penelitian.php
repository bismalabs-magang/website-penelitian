<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id                     = $_POST['id_penelitian'];
$penelitian             = $_POST['judul_penelitian'];
$deskripsi              = $_POST['deskripsi_penelitian'];
$file                   = $_POST['file_penelitian'];

$query = "UPDATE tbl_penelitian SET judul_penelitian = '$penelitian', deskripsi_penelitian = '$deskripsi', file_penelitian = '$file', WHERE id_penelitian = '$id'";

if ($connection->query($query) === TRUE) {
    header("location:penelitian.php");
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-penelitian.php'>Tambah Data Penelitian</a></button>";
}
 ?>