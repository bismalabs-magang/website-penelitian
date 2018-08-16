<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id         = $_POST['nim'];
$nama       = $_POST['nama'];
$password   = $_POST['password'];

if ($password == "") {
    $query = "UPDATE tbl_mahasiswa set nama_mahasiswa = '$nama' where nim = '$id'";

}else {
    $password2  = md5($_POST['password']);
    $query = "UPDATE tbl_mahasiswa SET nama_mahasiswa
 = '$nama' ,password = '$password2' WHERE nim = '$id'";
}


if ($connection->query($query) === TRUE) {
    header("location:mahasiswa.php");
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-dosen.php'>Tambah Data Mahasiswa</a></button>";
}
 ?>