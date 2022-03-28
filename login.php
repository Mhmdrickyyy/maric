<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login Maric Hotel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
		<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body class="text-center">
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
		<p class="tulisan_login">Silahkan login</p>
 
		<form method="post" action="aksi_login.php" >
		<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert'>Username atau Password tidak sesuai !</div>";
			}
		}
		?>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." >
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." >
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
	
			<br>
			<a class="link" href="daftar.php"><b>Buat Akun?</b></a>
		</br>
		<br>

		</form>
	</div>
 
 
</body>
</html>