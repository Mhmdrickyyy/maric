<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Maric Hotel</title>
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
                               <a href="tampilan_awal_tamu"><img src="assets/img/logo/12.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                <ul id="navigation">                                                                                                                                     
                                        <li><a href="tampilan_awal_tamu.php">Home</a></li>
                                        <li><a href="rooms.php">Rooms</a></li>
                                        <li><a href="fasility.php">Facility</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
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
	
	 <div class="font-back-tittle mb-45">
                            <div class="archivment-front">
                               </br> <h3>Our Rooms</h3> 
   </div>
   </div>
							
  
            <?php
         
          include "config.php";
          $data = mysqli_query($koneksi,"select * from tb_tipekamar");
        
        // $row = mysqli_fetch_array($data);
        while($row=mysqli_fetch_array($data)){
        //    echo $row['no']; die();
        //   ?>


	<div class="font-back-tittle mb-45">
                    <div class="archivment-front">
                        </br> <h3><?php echo $row['tipe_kamar']?></h3>
							<h5>IDR <?php echo $row['harga_kamar']?> /malam <h5>

						<div style="color: gold;" class="testimonial-ratting">
                                        <i class="fas fa-star"></i></a>
                                        <i class="fas fa-star"></i></a>
                                        <i class="fas fa-star"></i></a>
                                        <i class="fas fa-star"></i></a>
                                        <i class="fas fa-star-half"></i></a>
                                    </div>
					</div>
	</div>
	  <main>
    <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/kamar/S1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/kamar/D1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/kamar/F1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>

	
	
	<section class="sample-text-area">
		<div class="container box_1170">
        <h4 class="text-heading">Fasilitas yang didapatkan : </h4>
			<p class="sample-text">
            <?php echo $row['Fasilitas']?>

			</p>
            <br>
			<h3 class="text-heading">Description : </h3>
			<p class="sample-text">
            <?php echo $row['keterangan']?>

			</p>

				<div class="container box_1170 border-top-generic">     
	<div class="button-group-area mt-40">
				<P><a class="genric-btn primary e-large" href="reservasi.php?id_kamar=<?=$row['id_kamar']?>">Book Now</a></p>
				
	</div>
		</div>
                    <?php
        }
        ?>
		
	
	
	
		
			</section>
	
	
	
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