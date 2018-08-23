<?php

//include koneksi ke database
include_once('../config/koneksi.php');

//get nidn
$id = $_GET['id'];

//select data database
$query_data = "SELECT file_penelitian FROM tbl_penelitian WHERE id_penelitian = '$id'";

$result_data = mysqli_query($connection, $query_data);
$row_data = mysqli_fetch_array($result_data);

//delete file berdasarkan nama file
$path = "../file/".$row_data['file_penelitian'];
unlink($path); 

$query = "DELETE FROM tbl_penelitian WHERE id_penelitian = '$id'";

$result = mysqli_query($connection, $query);
if ($connection->query($query) === TRUE) {
     header("location:penelitian.php");
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}
 ?>