<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id     = $_POST['id_jurusan'];
$nama   = $_POST['nama'];


$query = "UPDATE tbl_jurusan SET nama_jurusan = '$nama'  WHERE id_jurusan = '$id'";


if ($connection->query($query) === TRUE) {
    header("location:jurusan.php");
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-jurusan.php'>Tambah Data Jurusan</a></button>";
}
 ?>