<?php

//membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "maulayyacyber17";
$database = "website_penelitian";
//create variable connectin
$connection = mysqli_connect($hostname, $username, $password, $database);
//checking connection
if($connection) // TRUE
  {
  	//echo "koneksi berhasil!";
  }else{
  	echo "Koneksi Gagal!: " . mysqli_connect_error();	
  }

