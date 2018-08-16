<?php

//membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "";
<<<<<<< HEAD
$database = "website-penelitian";
=======
$database = "website_penelitian";
>>>>>>> d0fb0a0bf432b3b2ad7ac954235d44b9368e03c8
//create variable connectin
$connection = mysqli_connect($hostname, $username, $password, $database);
//checking connection
if($connection) // TRUE
  {
	//echo "koneksi berhasil!";
  }else{
	echo "Koneksi Gagal!: " . mysqli_connect_error();	
  }

