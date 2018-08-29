<?php

//include koneksi ke database
include_once('../config/koneksi.php');
//get nidn
$id = $_GET['id'];
$query = "DELETE FROM tbl_fakultas WHERE id_fakultas = '$id'";
$result = mysqli_query($connection, $query);
if ($connection->query($query) === TRUE) {
 
	//echo "data berhasil disimpan";
	header("location:fakultas.php");

} else {
	echo "Error: " . $query . "<br>" . $connection->error;
	echo "<br>";

}
 ?>