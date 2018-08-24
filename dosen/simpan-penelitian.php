<?php
session_start();
//manggil koneksi database
include('../config/koneksi.php');

$nidn       = $_SESSION['username'];
$nama       = $_POST['nama'];
$deskripsi  = $_POST['deskripsi'];
//extension
$ekstensi_diperbolehkan = array('doc','docx','pdf');
$file       = $_FILES['file']['name'];
$x          = explode('.', $file);
$ekstensi   = strtolower(end($x));
$ukuran     = $_FILES['file']['size'];
$file_tmp   = $_FILES['file']['tmp_name'];

//proses upload
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
    if($ukuran < 10000000){
    
        move_uploaded_file($file_tmp, '../file/'.$file);
        $query = "INSERT INTO tbl_penelitian (nidn, judul_penelitian, deskripsi_penelitian, file_penelitian) VALUES ('$nidn', '$nama', '$deskripsi', '$file')";

        if ($connection->query($query) === TRUE) {

            //echo "data berhasil disimpan";
            header("location:penelitian.php");

        }else{

            echo "data gagal disimpan";
            echo "<br>";
            echo "Error: " . $query . "<br>" . $connection->error;
        }


    }else{
        //ukuran file terlalu besar
        echo 'ukuran file terlalu besar';
    }

}else{
    echo 'ekstensi tidak diperbolehkan';

}