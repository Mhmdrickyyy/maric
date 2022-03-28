<?php
//menghubungkan dengan koneksi databse
include'config.php';

//menangkap data yang dikirim dari form
$kd_bayar=$_POST['kd_bayar'];
$kd_reservasi=$_POST['kd_reservasi'];
$tanggal_bayar=$_POST['tanggal_bayar'];
$nama_rekening=$_POST['nama_rekening'];
$nomor_rekening=$_POST['nomor_rekening'];
$name=$_FILES['bukti_bayar']['name'];
$file=$_FILES['bukti_bayar']['tmp_name'];

//menyimpan data reservasi ke database
move_uploaded_file($file,"../bukti/$name");
$data_bayar =mysqli_query($koneksi, "INSERT INTO tb_pembayaran VALUES ('$kd_bayar','$kd_reservasi', '$tanggal_bayar', '$nama_rekening', '$nomor_rekening', '$name', '1')");

if($data_bayar){
	//$_POST['kd_reservasi']=$kd_reservasi;
	$_SESSION['username']=$username;
	$_SESSION['status']="login";
	header("location:selesai.php?kd_bayar=$kd_bayar");
}else{
	header("location:index.php?pesan=gagal");
}
?>