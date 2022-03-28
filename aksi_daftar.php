<?php
include 'config.php';

$id_user=$_POST['id_user'];
$username=$_POST['username'];
$email=$_POST['email'];
$no_telp=$_POST['no_telp'];
$password=md5($_POST['password']);
$alamat=$_POST['alamat'];
$provinsi=$_POST['provinsi'];
$kabupaten=$_POST['kabupaten'];
$kecamatan=$_POST['kecamatan'];



$data_tamu=mysqli_query($koneksi, "INSERT INTO tb_tamu(id_user, username, email, no_telp, password, 
alamat, provinsi, kabupaten, kecamatan) values 
('$id_user', '$username', '$email', '$no_telp', '$password', '$alamat', '$provinsi', '$kabupaten', '$kecamatan')");

if ($data_tamu){
	header("location:login.php");
}
else{
	header("location:login.php?pesan=gagal");
}
?>