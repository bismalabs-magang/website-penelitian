<?php
/*
@package : CRUD with Mysqli Procedural
@author  : Mohammad Ghonirwan
@since   : 2016
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id     	= $_POST['id_mhs'];
$nama   	= $_POST['nama'];
$nim    	= $_POST['nim'];
$password 	= $_POST['password'];
$query = "UPDATE tbl_dosen SET nama = '$nama' ,email = '$email', alamat = '$alamat' WHERE id_dosen = '$id'";
if ($connection->query($query) === TRUE) {
    echo "Update record  successfully";
    echo "<br>";
    echo "<button><a href='index.php'>Kembali</a></button>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}
 ?>