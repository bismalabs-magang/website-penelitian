<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id                     = $_POST['id_skripsi'];
$judul1                 = $_POST['judul1'];
$deskripsi_judul1       = $_POST['deskripsi_judul1'];
$judul2                 = $_POST['judul2'];
$deskripsi_judul2       = $_POST['deskripsi_judul2'];

$query = "UPDATE tbl_skripsi SET judul1 = '$judul1', deskripsi_judul1 = '$deskripsi_judul1', judul2 = '$judul2', deskripsi_judul2 = '$deskripsi_judul2' WHERE id_skripsi = '$id'";


if ($connection->query($query) === TRUE) {
	header("location:ajukan-judul.php");
} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-judul.php'>Tambah Data Judul Skripsi</a></button>";
}
