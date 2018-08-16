<?php

//manggil koneksi database
include('../config/koneksi.php');

//deklasri variabel dari FROM
$nama       = $_POST['nama'];
$nim        = $_POST['nim'];
$password   = MD5($_POST['password']);

//query
$query = "INSERT INTO tbl_mahasiswa (nama_mahasiswa, nim, password)
VALUES ('$nama', '$nim', '$password')";

if ($connection->query($query) === TRUE) {

    //echo "data berhasil disimpan";
    header("location:mahasiswa.php");

}else{

    echo "data gagal disimpan";
}