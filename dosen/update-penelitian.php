<?php
//include koneksi ke database
include_once('../config/koneksi.php');
//deklarasi variable
$id                     = $_POST['id_penelitian'];
$penelitian             = $_POST['judul_penelitian'];
$deskripsi              = $_POST['deskripsi_penelitian'];
//extension
$ekstensi_diperbolehkan = array('doc','docx','pdf');
$file       = $_FILES['file']['name'];
$x          = explode('.', $file);
$ekstensi   = strtolower(end($x));
$ukuran     = $_FILES['file']['size'];
$file_tmp   = $_FILES['file']['tmp_name'];

//jika file tidak diupdate
if($file == ""){

    //query tanpa upload file
    $query1 = "UPDATE tbl_penelitian set judul_penelitian = '$penelitian', deskripsi_penelitian = '$deskripsi' where id_penelitian = '$id'";

    if ($connection->query($query1) === TRUE) {
        header("location:penelitian.php");
    } else {
        echo "Error: " . $query . "<br>" . $connection->error;
        echo "<br>";
        echo "<button><a href='tambah-penelitian.php'>Tambah Data Penelitian</a></button>";
    }

}else{

    //query dengan upload file
    //proses upload
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        
        if($ukuran < 10000000){
        
            move_uploaded_file($file_tmp, '../file/'.$file);
            $query2 = "UPDATE tbl_penelitian set judul_penelitian = '$penelitian', deskripsi_penelitian = '$deskripsi', file_penelitian = '$file' where id_penelitian = '$id'";

            if ($connection->query($query2) === TRUE) {

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

}
