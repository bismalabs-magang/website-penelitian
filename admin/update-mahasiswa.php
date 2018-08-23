<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id         = $_POST['nim'];
$nama       = $_POST['nama'];
$password   = $_POST['password'];
$fakultas   = $_POST['fakultas'];
$jurusan        = $_POST['jurusan'];

if ($password == "") {
	$query = "UPDATE tbl_mahasiswa set nama_mahasiswa = '$nama', id_fakultas = '$fakultas', id_jurusan = '$jurusan' where nim = '$id'";

}else {
	$password2  = md5($_POST['password']);
	$query = "UPDATE tbl_mahasiswa SET nama_mahasiswa
 = '$nama', 'id_fakultas' = '$fakultas', 'id_jurusan' = '$jurusan' password = '$password2' WHERE nim = '$id'";
}


if ($connection->query($query) === TRUE) {
	header("location:mahasiswa.php");
} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-mahasiswa.php'>Tambah Data Mahasiswa</a></button>";
}
 ?>