<!DOCTYPE html>
<html>
<style>
	
	.alert{
		background: #e44e4e;
		color: white;
		padding: 10px
		text-align: center;
		border: 1px solid #b32929;

	}
</style>
<head>
	<meta charset="UTF-8">
	<title> Login Petugas </title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	
</head>
<body class="text-center" background-image ="assets/img/fix/login.jpeg">
	<?php
	if(isset($_POST['pesan'])){
		if($_POST['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_POST['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_POST['pesan']== "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}	
 	
	?>
	
	<div class="kotak_login">
		<p class="tulisan_login">LOGIN PETUGAS</p>
 
		<form method="post" action="ceklogin.php" >
			<?php
	if(isset($_GET['pesan'])){
		echo "<div class='alert'>Username dan Password Tidak Terdaftar !</div>";
	}
 	?>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." >
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." >
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
	
		
		</form>
		
	</div>
	
	
 
 
</body>
</html>