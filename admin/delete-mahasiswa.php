<?php
/*
@package : CRUD with Mysqli Procedural
@author  : Mohammad Ghonirwan
@since   : 2016
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/
//include koneksi ke database
include_once('../config/koneksi.php');
//get id
$id = $_GET['id'];
$query = "DELETE FROM tbl_mahasiswa WHERE nim = '$id'";
$result = mysqli_query($connection, $query);
if ($connection->query($query) === TRUE) {

	 header("location:mahasiswa.php"); 

} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-mahasiswa.php'>Tambah Data Mahasiswa</a></button>";
}
 ?>
