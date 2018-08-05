<?php

//membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "";
$database = "website_penelitian";
//create variable connectin
$connection = mysqli_connect($hostname, $username, $password, $database);
//checking connection
if(!$connection)
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }