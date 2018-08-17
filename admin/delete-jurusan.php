<?php

//include koneksi ke database
include_once('../config/koneksi.php');
//get nidn
$id = $_GET['id'];
$query = "DELETE FROM tbl_jurusan WHERE id_jurusan = '$id'";
$result = mysqli_query($connection, $query);
if ($connection->query($query) === TRUE) {
	header("location:jurusan.php");
} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-jurusan.php'>Tambah Data Jurusan</a></button>";
}
 ?>