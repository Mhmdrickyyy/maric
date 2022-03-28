<?php
include 'config.php';

//menangkap data yang dikirim dari form
$kd_reservasi=$_POST['kd_reservasi'];
$id_user=$_POST['id_user'];
$check_in=$_POST['check_in'];
$check_out=$_POST['check_out'];
$jml_kamar=$_POST['jml_kamar'];
$jml_hari=$_POST['jml_hari'];
$id_kamar=$_POST['id_kamar'];
$tgl_dipesan=$_POST['tgl_dipesan'];
$total=$_POST['total'];
$status=$_POST['status'];

//menyimpan data reservasi
$data_rsvp = mysqli_query($koneksi, "INSERT INTO tb_reservasi values ('$kd_reservasi', '$id_user', '$check_in', '$check_out', '$jml_kamar', '$jml_hari', '$id_kamar', '$tgl_dipesan', '$total', '')");
if ($data_rsvp){
    $_SESSION['username']=$username;
	$_SESSION['']="login";
	header("location:detail_reservasi.php?kd_reservasi=$kd_reservasi");
}else{
	header("location:index.php?pesan=gagal");
}
?>