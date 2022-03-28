
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
    header("location:index.php?pesan=belum_login");
 
  }
?>

<?php
  include 'config.php';
 
$username = $_SESSION['username'];
$id_kamar= $_GET['id_kamar'];
//mengambil data kamar
$data_kamar = mysqli_query($koneksi,"SELECT * FROM tb_tipekamar WHERE id_kamar='$id_kamar'");
	$kamar = mysqli_fetch_array($data_kamar);
  // echo "$k";

$data = mysqli_query($koneksi,"SELECT * FROM tb_tamu WHERE username='$username'");
	$row = mysqli_fetch_array($data);

 //$query = mysqli_query($koneksi,"select * from tb_reservasi JOIN tb_tamu ON tb_reservasi.id_user=tb_tamu.id_user JOIN tb_tipekamar ON tb_reservasi.id_kamar=tb_tipekamar.id_kamar where username='$username'");
 //$reservasi = mysqli_fetch_array($query);

	// mengambil data tamu dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_reservasi) as kd_reservasi FROM tb_reservasi");
	$data = mysqli_fetch_array($query);
	$kd_reservasi = $data['kd_reservasi'];
 
	$urutan = (int) substr($kd_reservasi, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode reservsi baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "RSV";
	$kd_reservasi = $huruf . sprintf("%03s", $urutan);
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
                                        <li><a href="fasility.php">Facility</a></li>
                                        <li><a href="contact.php">Contact</a></li>
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
                        <h2 class="contact-title" align="center">Form Data Anda</h2>
                    </div>
                   
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="aksi_rsvp.php" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="room" class="font-weight-bold text-black">Nama</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $row['username'];?>" name="username" readonly>
                                       <input type="text" class="form-control"  name="kd_reservasi" value="<?php echo $kd_reservasi;?>" readonly>
                                      <input type="hidden" class="form-control"  name="id_user" value="<?php echo $row['id_user'];?>">
                                      <input type="hidden" class="form-control"  name="tgl_dipesan" value="<?php echo date("Y-m-d"); ?>">
                                      <input type="hidden" class="form-control"  name="id_kamar" value="<?php echo $kamar['id_kamar'];?>">
                                     </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="room" class="font-weight-bold text-black">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" placeholder="Alamat" value="<?php echo $row['alamat']?>"  readonly><?php echo $row['alamat']?> </textarea>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <label for="room" class="font-weight-bold text-black">Check In</label>
                                    <div class="form-group">
                                        <input type="date" name="check_in" class="form-control valid" id="country" min="<?php echo date("D-m-y"); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="room" class="font-weight-bold text-black">Check Out</label>
                                    <div class="form-group">
                                        <input type="date" name="check_out" class="form-control valid" id="country" min="<?php echo date("D-m-y"); ?>" required>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
								    <label for="room" class="font-weight-bold text-black">Room Type</label>
                                 <div class="form-group">
                                         <input type="text" name="tipe_kamar" class="form-control" value="<?php echo $kamar['tipe_kamar'];?>" readonly>
                          </div>
				        			</div>

                                <div class="col-sm-6">
                                    <label for="room" class="font-weight-bold text-black">Jumlah Kamar</label>
								
								<div class="form-select" id="default-select">
									  <input type="number" name="jml_kamar" class="form-control" min=1 max="<?php echo $kamar['jml_kamar'];?>"required>
								</div>
                                
							</div>
                                <div class="col-sm-6">
                                <label for="room" class="font-weight-bold text-black">Lama Menginap</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="jml_hari" name="jml_hari" onkeyup="total()" min=1 required>
                            </div>
                            
                            </div>
                            <div class="col-sm-6">
                                <label for="room" class="font-weight-bold text-black">Total Bayar</label>
                                    <div class="form-group">
                                       
                                        <input class="form-control valid" name="total"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Total Bayar'" placeholder="Total Bayar">
                                       
                                    </div>
                                </div>

                            
                            <br>
                            <div class="form-group mt-3">
                                <button class="button button-contactForm boxed-btn" type="submit">Booking</button>
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