<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id     = $_POST['id_fakultas'];
$nama   = $_POST['nama'];


$query = "UPDATE tbl_fakultas SET nama_fakultas = '$nama'  WHERE id_fakultas = '$id'";


if ($connection->query($query) === TRUE) {
    header("location:fakultas.php");
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-fakultas.php'>Tambah Data Fakultas</a></button>";
}
 ?>