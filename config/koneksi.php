<?php

//membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "";
<<<<<<< HEAD
$database = "website-penelitian";
=======
$database = "website_penelitian";
>>>>>>> d19cd202eda42441c2ff3513bb23bd8d2c74224c
//create variable connectin
$connection = mysqli_connect($hostname, $username, $password, $database);
//checking connection
if($connection) // TRUE
  {
	//echo "koneksi berhasil!";
  }else{
	echo "Koneksi Gagal!: " . mysqli_connect_error();	
  }

