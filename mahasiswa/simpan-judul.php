<?php
session_start();
//manggil koneksi database
include('../config/koneksi.php');

//deklasri variabel dari FROM
$nim 					= $_SESSION['username'];
$judul1    				= $_POST['judul1'];
$deskripsi_judul1       = $_POST['deskripsi_judul1'];
$judul2       			= $_POST['judul2'];
$deskripsi_judul2       = $_POST['deskripsi_judul2'];
$pembimbing1		   	= $_POST['pembimbing1'];
$pembimbing2		   	= $_POST['pembimbing2'];

//query
$query = "INSERT INTO tbl_skripsi (nim, judul1, deskripsi_judul1, judul2, deskripsi_judul2, pembimbing1, pembimbing2)
VALUES ('$nim','$judul1', '$deskripsi_judul1', '$judul2', '$deskripsi_judul2', '$pembimbing1', '$pembimbing2')";

if ($connection->query($query) === TRUE) {

	//echo "data berhasil disimpan";
	header("location:ajukan-judul.php");

}else{

	echo "data gagal disimpan";
	echo "<br>";
	echo "Error: " . $query . "<br>" . $connection->error;
}