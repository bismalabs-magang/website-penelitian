<?php

//manggil koneksi database
include('../config/koneksi.php');

//deklasri variabel dari FROM
$nama       = $_POST['nama'];

//query
$query = "INSERT INTO tbl_kategori_penelitian (nama_kategori)
VALUES ('$nama')";

if ($connection->query($query) === TRUE) {

	//echo "data berhasil disimpan";
	header("location:kategori-penelitian.php");

}else{

	echo "data gagal disimpan";
}