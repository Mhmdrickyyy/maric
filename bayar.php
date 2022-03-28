<!doctype html>
<html class="no-js" lang="zxx">
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
		header("location:login.php?pesan=belum_login");
 
	}
?>

<?php
  include "config.php";
 
$username = $_SESSION['username'];
$kd_reservasi = $_GET['kd_reservasi'];
$data = mysqli_query($koneksi,"SELECT * FROM tb_reservasi JOIN tb_tamu ON tb_reservasi.id_user=tb_tamu.id_user JOIN tb_tipekamar ON tb_reservasi.id_kamar=tb_tipekamar.id_kamar WHERE kd_reservasi='$kd_reservasi'");
	$row = mysqli_fetch_array($data);


    	// mengambil data tamu dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_bayar) as kd_bayar FROM tb_pembayaran");
	$data_bayar = mysqli_fetch_array($query);
	$kd_bayar = $data_bayar['kd_bayar'];
 
	$urutan = (int) substr($kd_bayar, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "BYR";
	$kd_bayar = $huruf . sprintf("%03s", $urutan);

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

    <!-- ngisi data start -->
     <section class="contact-section">
            <div class="container">
               
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title" align="center">Form Bayar</h2>
                    </div>
                    <div class="col-md-3">
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
					</div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="aksi_bayar.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="text-black font-weight-bold" for="kd_reservasi">Reservation Code</label>
                  <input type="text" class="form-control" id="cc-name" name="kd_reservasi" value="<?=$row['kd_reservasi'];?>" readonly>
              <input type="hidden" class="form-control"  name="tgl_bayar" value="<?php echo date("Y-m-d"); ?>">
              <input type="hidden" class="form-control"  name="kd_bayar" value="<?php echo $kd_bayar;?>">
                                </div>
                                <div class="col-sm-6">
                                    <label class="text-black font-weight-bold" for="username">Name</label>
                  <input type="text" class="form-control" id="cc-name" name="username" value="<?=$row['username'];?>" readonly>
                                </div>
                               
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="text-black font-weight-bold" for="nama_rekening">Bank Account Name</label>
                  <input type="text" class="form-control" id="cc-number" name="nama_rekening" required>
                                    </div>
                                </div>
                               
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="text-black font-weight-bold" for="nomor_rekening">Bank Account Number</label>
                  <input type="text" class="form-control" id="cc-expiration" name="nomor_rekening"  required>
                                    </div>
                                </div>
                               
                                
                               

                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-black font-weight-bold" for="bukti_bayar">Payment Proof</label>
                  <input type="file" class="form-control bubu" id="cc-cvv" name="bukti_bayar" required>
                                        
                                    </div>
                                </div>
                            
                            
                            </div>
                            <br>
                            <div class="form-group mt-3">
                                <button type="submit" <a href="selesai.php" class="button button-contactForm boxed-btn">Booking</button></a>
                            </div>
                            </br>
                        </form>
                    </div>
                    
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

    </body>

</html>