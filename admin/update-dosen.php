<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id     = $_POST['nidn'];
$nama   = $_POST['nama'];
$password  = $_POST['password'];

if ($password == "") {
	$query = "UPDATE tbl_dosen set nama_dosen = '$nama' where nidn = '$id'";

}else {
	$password2  = md5($_POST['password']);
	$query = "UPDATE tbl_dosen SET nama_dosen
 = '$nama' ,password = '$password2' WHERE nidn = '$id'";
}


if ($connection->query($query) === TRUE) {
	header("location:dosen.php");
} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}
 ?>