<?php
//mengaktifkan session
session_start();

//menghubungkan koneksi database
include 'config.php';

//menangkap data
$username=$_POST['username'];
$password=md5($_POST['password']);

//menyeleksi data tamu
$login=mysqli_query($koneksi,"select * from tb_multi where username='$username'and password='$password'");

//menghitung jumlah data yang ditemukan
$cek=mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/admrooms.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="resepsionis"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "resepsionis";
		// alihkan ke halaman dashboard pegawai
		header("location:resepsionis.php");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login_petugas.php?pesan=gagal");
	}	
}else{
	header("location:login_petugas.php?pesan=gagal");
}
?>