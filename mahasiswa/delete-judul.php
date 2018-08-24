<?php

//include koneksi ke database
include_once('../config/koneksi.php');
//get nim
$id = $_GET['id'];
$query = "DELETE FROM tbl_skripsi WHERE id_skripsi = '$id'";
$result = mysqli_query($connection, $query);
if ($connection->query($query) === TRUE) {
     header("location:ajukan-judul.php");
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-judul.php'>Tambah Data Ajuan Judul</a></button>";
}
 ?>