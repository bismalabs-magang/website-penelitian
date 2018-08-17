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
<<<<<<< HEAD
	 header("location:mahasiswa.php"); 
=======
	echo "Delete record  successfully";
	echo "<br>";
	echo "<button><a href='index.php'>Kembali</a></button>";
>>>>>>> 0cbfafd87639f85561c06351d89f79377edb5723
} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";
	echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}
 ?>
© 2018 GitHub, Inc.