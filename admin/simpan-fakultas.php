<?php

//manggil koneksi database
include('../config/koneksi.php');

//deklasri variabel dari FROM
$nama       = $_POST['nama'];

//query
$query = "INSERT INTO tbl_fakultas (nama_fakultas)
VALUES ('$nama')";

if ($connection->query($query) === TRUE) {

    //echo "data berhasil disimpan";
    header("location:fakultas.php");

}else{

    echo "data gagal disimpan";
}