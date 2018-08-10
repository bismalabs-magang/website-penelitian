<?php
//hide error
error_reporting(0);

//create sessio start
session_start();

//panggil koneksi PHP
require_once('config/koneksi.php');

//get data dari FORM
$username = $_POST['username'];
$password = MD5($_POST['password']);

//query data admin
$query_admin = mysqli_query($connection, "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'");

$rs_admin = mysqli_num_rows($query_admin);

if ($rs_admin  > 0){

	$_SESSION['username'] 	= $username;
	$_SESSION['level'] 		= "admin";

	//redirect
	header("location:admin/index.php");

}else{

	//query data dosen
	$query_dosen = mysqli_query($connection, "SELECT * FROM tbl_dosen WHERE nidn = '$username' AND password = '$password'");

	$rs_dosen = mysqli_num_rows($query_dosen);

	if ($rs_dosen  > 0){

		$_SESSION['username'] 	= $username;
		$_SESSION['level'] 		= "dosen";

		//redirect
		header("location:dosen/index.php");

	}else{

		//query data mahasiswa
		$query_mhs = mysqli_query($connection, "SELECT * FROM tbl_mahasiswa WHERE nim = '$username' AND password = '$password'");

		$rs_mhs = mysqli_num_rows($query_mhs);

		if ($rs_mhs  > 0){

			$_SESSION['username'] 	= $username;
			$_SESSION['level'] 		= "mahasiswa";

			//redirect
			header("location:mahasiswa/index.php");

		}else{

			$error = '<div class="alert bg-red">
                          <b>Username</b> atau <b>Password</b> Anda salah.
                      </div>';
			include('login.php');

		}		

	}

}