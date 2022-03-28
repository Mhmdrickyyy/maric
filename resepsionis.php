<!doctype html>
<html class="no-js" lang="zxx">
<style>
        table{
            border-collapse: collapse;
            width: 90%;
        }
        table, td, th{
            border: 0px solid black;
            text-align: left;
        }
        th{
            background-color: #ffba5a;
            color: white;
        }
        td{
            padding: 15px;
            border-bottom: 2px solid #9e9e9e75;
        }
        tr: hover{
            background-color: #9e9e9e3b;
        }
        .ic{
            background-color: #fff;
            border-bottom: none;
            border-top: none;
        }
        .bubu {
      background: white;
    border: 2px solid rgb(209, 209, 209); 
  color: rgb(165, 165, 165);
  align-items: right;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 5px;
  padding-bottom: 5px;
  border-radius: 50px; 
cursor: pointer;}
    .bubu:hover {
      border: 2px solid transparent;
      background: #ffba5a;
      color: #fff; }
  .check{
    align-content: center;
  }
   .baba {
      background: white;
    border: 2px solid rgb(209, 209, 209); 
  color: rgb(165, 165, 165);
  align-items: right;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 5px;
  padding-bottom: 5px;
  border-radius: 50px; 
cursor: pointer;}
    .baba:hover {
      border: 2px solid #ffba5a;
      background: white;
      color: rgb(165, 165, 165) }
    </style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Resepsionis Maric Hotel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">


    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/gijgo.css">
   <link rel="stylesheet" href="assets/css/slicknav.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/responsive.css">
   <link rel="stylesheet" type="text/css" href="assets/css/table.css">
</head>

<body>
    
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
                               <a href="tampilan_awal_tamu.php"><img src="assets/img/logo/12.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        
                                        <li><a href="admin/logout.php" align="f-right">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                          
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
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg" >
            <div class="container">
                <div class="row ">
                    <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                        <div class="hero-caption">
                            <span>MARIC HOTEL</span>
                            <h2>Tabel  Resepsionis
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
              include 'config.php';
              ?>
      <br>        
      <br>
              <br>
            <table class="table">
                  <tr>
                      <td class="ic"><form method="get">
                        <input type="date" name="check_in" class="baba">
                        <input type="submit" class="bubu" value="Filter">
                      </form></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic"></td>
                      <td class="ic col-md-4"><form method="get">
                        <input type="text" name="username" placeholder="Search" class="baba">
                        <input type="submit" class="bubu" value="Go">
                      </td></form>
                  </tr>
                </table>   
   










    <table class="table1" align="center">
        
        <tr>
            <th>Kode Reservasi</th>
            <th>Id User</th>
            <th>Username</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Jumlah Kamar</th>
            <th>Jumlah Hari</th>
            <th>Id Kamar</th>
            <th>Tanggal Dipesan</th>
            <th>Total</th>
            <th>Status </th>    

        </tr>

        <?php
                  
                  if(isset($_GET['check_in'])){
                    $tgl=$_GET['check_in'];
                    $sql=mysqli_query($koneksi, "SELECT * FROM tb_reservasi JOIN tb_tamu ON tb_reservasi.id_user=tb_tamu.id_user where check_in='$tgl'");
                  }elseif(isset($_GET['username'])){
                    $alpa=$_GET['username'];
                    $sql=mysqli_query($koneksi,"SELECT*FROM tb_reservasi JOIN tb_tamu ON tb_reservasi.id_user=tb_tamu.id_user WHERE username LIKE '%$alpa%'");

                  }else{
                    $sql = mysqli_query($koneksi, "SELECT*FROM tb_reservasi JOIN tb_tamu ON tb_reservasi.id_user=tb_tamu.id_user");
                  }
                  while ($data=mysqli_fetch_array($sql)) {
                    # code...
                
                    ?>

                <tr>
                      <td><?php echo $data['kd_reservasi']; ?></td>
                      <td><?php echo $data['id_user']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['check_in']; ?></td>
                      <td><?php echo $data['check_out']; ?></td>
                      <td><?php echo $data['jml_kamar']; ?></td>
                      <td><?php echo $data['jml_hari']; ?></td>
                      <td><?php echo $data['id_kamar']; ?></td>
                      <td><?php echo $data['tgl_dipesan']; ?></td>
                      <td><?php echo $data['total']; ?></td>
                      <td><?php echo $data['status']; ?></td>
                  </tr>  
                  <?php 
                  }
                  ?>
    
    </table>   
    <br></br> 

    <!-- slider Area End-->


    
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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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