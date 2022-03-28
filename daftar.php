<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akun Maric Hotel</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<?php

// menghubungkan dengan koneksi database
include 'config.php';

// mengambil data tamu dengan kode paling besar
$query = mysqli_query($koneksi, "SELECT  max(id_user) as id_user FROM tb_tamu");
$data = mysqli_fetch_array($query);
$id_user = $data['id_user'];

// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($id_user, 3, 3);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "TM";
$id_user = $huruf . sprintf("%03s", $urutan);
?>


<body class="text-center">
	<?php
	if (isset($_GET['pesan'])){
		if($_GET['pesan']== "gagal"){
			echo "Data Tidak Tersimpan";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Masukkan Data Anda</p>
 
		<form method="post" action="aksi_daftar.php" >
		<td><input type="hidden" name="id_user" required="required" value="<?php echo $id_user ?>" readonly></td>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username" >
 			
 			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="example@gmail.com" >
			
			<label>No Telp</label>
			<input type="text" name="no_telp" class="form_login" placeholder="+62" >
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password" >
 			
 			<label>Alamat</label>
			<input type="text" name="alamat" class="form_login" placeholder="Alamat" >

            <label>Provinsi</label>
			<select name="provinsi" class="form_login"> 
			    <option value="PO1"></option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
				<option value="Jawa Timur">Jawa Timur</option>
            </select>

            <label>Kabupaten/Kota</label>
			<select name="kabupaten" class="form_login">
			    <option value="PO1"></option>
				<option value="Bandung Barat">Bandung Barat</option>
				<option value="Bandung">Bandung</option>
				<option value="Cimahi">Cimahi</option>
            </select>

			<label>Provinsi</label>
			<select name="kecamatan" class="form_login">
			    <option value="PO1"></option>
				<option value="Batujajar">Batujajar</option>
				<option value="Cihampelas">Cihampelas</option>
				<option value="Saguling">Saguling</option>
            </select>

			<input type="submit" class="tombol_login" value="Buat">
 
			<br/>
			<br/>
	
			<br>
			<a class="link" href="login.php"><b>Sudah Punya Akun?</b></a>
		</br>
		</form>
		
	</div>
 
 
</body>
</html>