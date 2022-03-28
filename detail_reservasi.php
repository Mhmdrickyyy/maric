<!doctype html>
<html class="no-js" lang="zxx">
    <style>
        .bubu {
      background:  #f0971c;
    border: 2px solid transparent; 
    color: white;
    margin-left: 70%;
  padding-top: 5px;
  padding-bottom: 5px;
  border-radius: 0px; 
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

   
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Maric Hotel</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href=""><img src="assets/img/logo/12.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="tampilan_awal_tamu.php">Home</a></li>
                                        <li><a href="rooms.php">Rooms</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            
                    
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

             <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>HOTEL</span>
                            <h2>Reservasi</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
	
	
	
	
	    <?php
  include "config.php";
 
$username = $_SESSION['username'];
$kd_reservasi = $_GET['kd_reservasi'];
$data = mysqli_query($koneksi,"SELECT * FROM tb_reservasi JOIN tb_tamu ON tb_reservasi.id_user=tb_tamu.id_user JOIN tb_tipekamar ON tb_reservasi.id_kamar=tb_tipekamar.id_kamar WHERE kd_reservasi='$kd_reservasi'");
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
                <p align="center"><span class="d-block">Langkah Akhir, Transfer to Check In</span></p>
              </div>
            </div>
          </div>
          <div class="col-md-7 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Lakukan pembayaran via transfer bank</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">BCA</h6>
              <small class="text-muted">0202022921093404</small>
            </div>
           
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Mandiri</h6>
              <small class="text-muted">839483974389743890</small>
            </div>
            
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Batas Waktu Pembayaran</h6>
              <small class="text-muted">839483974389743890</small>
            </div>
            
          </li>
        </ul>

      
      </div>

    <div class="col-md-7 col-lg-8">
       <h4 class="text-black font-weight-bold">Nomor Reservasi   : </h4><h4><br>#<?php echo $row['kd_reservasi'];?></h4>
       <h4 class="text-black font-weight-bold">Tanggal Reservasi : </h4><br><h4><?php echo $row['tgl_dipesan'];?></h4>
           <hr class="my-4">
               <label class="text-black font-weight-bold" for="credit">Nama Pemesan    : </label><br><?php echo $row['id_user'];?><br>
               <label class="text-black font-weight-bold" for="credit">Email           : </label><br><?php echo $row['email'];?><br>
               <label class="text-black font-weight-bold" for="credit">Waktu Check In :  </label><br><?php echo $row['check_in'];?> / Pukul: 23.00 WIB<br>
               <label class="text-black font-weight-bold" for="credit">Waktu Check Out : </label><br><?php echo $row['check_out'];?> / Pukul: 12.00 WIB<br>
               <label class="text-black font-weight-bold" for="credit">Lama Menginap : </label><br><?php echo $row['jml_hari'];?> Malam<br>
               <label class="text-black font-weight-bold" for="credit">Tipe Kamar  : </label><br><?php echo $row['tipe_kamar'];?><br>
               <label class="text-black font-weight-bold" for="credit">Jumlah Kamar : </label><br><?php echo $row['jml_kamar'];?><br>
               <label class="text-black font-weight-bold" for="credit">Total Bayar : </label><br><?php echo $row['total'];?><br>
</hr>
          </div>
          <div class="col-md-7 col-lg-8">
          <button class="bubu" type="submit"><a style="color: white;" href="bayar.php?kd_reservasi=<?=$row['kd_reservasi'];?>">Pembayaran</a></button>
          </div>
          <br>
          <div class="col-md-7 col-lg-8">
          <a class="bubu" href="cetak.php?kd_reservasi=<?=$row['kd_reservasi'];?>">Save/Print</a></div>
        </form>
          
        </div>
      </div>
	  </section>
    <!-- ================ ngisi data end ================= -->



 





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
     <script>
function total() {
      var txtFirstNumberValue = document.getElementById('harga_kamar').value;
      var txtSecondNumberValue = document.getElementById('jml_hari').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>
    </body>

</html>