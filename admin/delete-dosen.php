<?php

//include koneksi ke database
include_once('../config/koneksi.php');
//get nidn
$id = $_GET['id'];
$query = "DELETE FROM tbl_dosen WHERE nidn = '$id'";
$result = mysqli_query($connection, $query);
if ($connection->query($query) === TRUE) {
	 header("location:dosen.php");
} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}
 ?>