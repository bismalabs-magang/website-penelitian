<?php

//manggil koneksi database
include('../config/koneksi.php');

//deklasri variabel dari FROM
$nama       = $_POST['nama'];

//query
$query = "INSERT INTO tbl_jurusan (nama_jurusan)
VALUES ('$nama')";

if ($connection->query($query) === TRUE) {

    //echo "data berhasil disimpan";
    header("location:jurusan.php");

}else{

    echo "data gagal disimpan";
}