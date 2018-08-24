<?php

//manggil koneksi database
include('../config/koneksi.php');

//deklasri variabel dari FROM
$nama       = $_POST['nama'];
$nim        = $_POST['nim'];
$password   = MD5($_POST['password']);
$jurusan    = $_POST['jurusan'];
$fakultas   = $_POST['fakultas'];

//query


$query = "INSERT INTO tbl_mahasiswa (nim, nama_mahasiswa, id_fakultas, id_jurusan, password)
VALUES ('$nim', '$nama', '$fakultas', '$jurusan', '$password')";

if ($connection->query($query) === TRUE) {

    //echo "data berhasil disimpan";
    header("location:mahasiswa.php");

}else{

    echo "data gagal disimpan";
        echo "<br>";
    echo "Error: " . $query . "<br>" . $connection->error;
}