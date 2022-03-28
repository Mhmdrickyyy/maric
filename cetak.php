<!DOCTYPE HTML>
<html>
    <style>
        .bubu {
      background:  #f0971c;
    border: 2px solid transparent; 
  color: white;
    margin-left: 70%;
  padding-top: 5px;
  padding-bottom: 5px;
  border-radius: 40px; 
cursor: pointer;}
    .bubu:hover {
      border: 2px solid transparent;
      background: #da8b1d;
      color: #fff; }
  .bubu:focus{
    border: 2px #da8b1d;
      background: #da8b1d;
      color: #fff;
  }
    </style>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Booking</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body>
 <?php 
  session_start();
    
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
 
  }
?>

<?php
  include "config.php";
 
$username = $_SESSION['username'];
$kd_reservasi = $_GET['kd_reservasi'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_reservasi JOIN tb_tamu ON tb_reservasi.id_user=tb_tamu.id_user JOIN tb_tipekamar ON tb_reservasi.id_kamar=tb_tipekamar.id_kamar WHERE kd_reservasi='$kd_reservasi'");
  $row = mysqli_fetch_array($data);
// echo "$kd_reservasi"; die();
?>
<section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
         <form action="bayar.php" method="POST" class="bg-white p-md-10 p-8 mb-10">
            <div class="row">
             <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">   
              <div class="col-md-12 ml-center contact-info">
                <p align="center"><span class="text-black"> DETAILS RESERVATION</span></p>
                <p align="center"><span class="d-block">Print or Save Details Reservation For archieve</span></p>
              </div>
            </div>
          </div>

      <div class="col-md-7 col-lg-8">
       <h4 class="text-black font-weight-bold">Nomor Reservasi   : </h4><br><h4>#<?php echo $row['kd_reservasi'];?></h4>
       <h4 class="text-black font-weight-bold">Tanggal Reservasi : </h4><br><h4><?php echo $row['tgl_dipesan'];?></h4>
           <hr class="my-4">
               <label class="text-black font-weight-bold" for="credit">Nama Pemesan    : </label><br><?php echo $row['id_user'];?><br><br>
               <label class="text-black font-weight-bold" for="credit">Email           : </label><br><?php echo $row['email'];?><br><br>
               <label class="text-black font-weight-bold" for="credit">Waktu Check In :  </label><br><?php echo $row['check_in'];?> / Pukul: 23.00 WIB<br><br>
               <label class="text-black font-weight-bold" for="credit">Waktu Check Out : </label><br><?php echo $row['check_out'];?> / Pukul: 12.00 WIB<br><br>
               <label class="text-black font-weight-bold" for="credit">Lama Menginap :</label><br><?php echo $row['jml_hari'];?> Malam<br><br>
               <label class="text-black font-weight-bold" for="credit">Tipe Kamar  : </label><br><?php echo $row['tipe_kamar'];?><br><br>
               <label class="text-black font-weight-bold" for="credit">Jumlah Kamar : </label><br><?php echo $row['jml_kamar'];?><br><br>
               <label class="text-black font-weight-bold" for="credit">Total Bayar : </label><br><?php echo $row['total'];?><br><br>
</hr>


          </div>
          </form>
        </div>
      </div>
    </section>
<script>
  window.print();
</script>

<!-- JS here -->
    
        <!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
		
		
		</body>
		</html>