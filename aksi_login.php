<?php
session_start();
include 'config.php';
$username= $_POST['username'];
$password=md5($_POST['password']);
$data = mysqli_query($koneksi,"select*from tb_tamu where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
	// echo "$cek"; die();
if($cek >0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:tampilan_awal_tamu.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>