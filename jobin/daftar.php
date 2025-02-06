
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <title>Cari - JobIn</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
        /* Pengaturan untuk container #job */
        #job {
            display: flex;
            flex-wrap: wrap;         /* Membuat elemen pindah ke baris baru jika tidak cukup ruang */
            gap: 15px;               /* Menambah jarak antar elemen */
            padding: 20px;           /* Memberikan padding pada container */
            margin: 0 auto;          /* Menjaga agar container terpusat */
            justify-content: space-between; /* Menyusun elemen secara merata */
        }

        /* Pengaturan untuk setiap div pekerjaan */
        #job > div {
            display: flex;
            align-items: center;      /* Menyelaraskan konten dalam div secara vertikal */
            justify-content: center;  /* Menyelaraskan konten secara horizontal */
            border: 1px solid #ccc;  /* Memberikan border */
            padding: 20px;            /* Memberikan padding dalam div */
            border-radius: 10px;      /* Menambah border radius untuk sudut membulat */
            width: calc(50% - 15px);  /* Mengatur lebar div menjadi 50%, dengan ruang untuk gap */
            height: 220px;            /* Memberikan tinggi yang konsisten */
            box-sizing: border-box;   /* Agar padding dan border tidak mempengaruhi ukuran */
            transition: opacity 0.3s ease; /* Menambahkan transisi halus */
        }

        /* Jika div pekerjaan disembunyikan, tampilkan dengan opacity */
        #job > div.hidden {
            display: none;            /* Menyembunyikan div yang tidak relevan */
        }
    </style>
  
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="Chain App Dev">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" >Home</a></li>
              <li class="scroll-to-section"><a href="cari.php" >Cari JobIn!</a></li>
              <li class="scroll-to-section"><a href="daftar.php" class="active">Daftar JobIn!</a></li>
              <li><div class="gradient-button"><a href="logout.php"><i class="fa fa-sign-in-alt"></i> Keluar JobIn</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <br><br><br><br><br>
  <div style="text-align: center; margin-bottom: 20px;">
    <h4>Daftar JobIn dan bergabung dengan kami dengan langsung mendownload aplikasi!</h4>
</div>

<div class="row" style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
    <!-- Gambar dengan ukuran 200x200px -->
    <div class="col-lg-12" style="text-align: center;">
        <img src="assets/images/slider-dec.jpg" alt="Gambar" style="width: 400px; height: 400px;">
    </div>
</div>

<div class="row" style="display: flex; justify-content: center; gap: 10px;">
    <!-- Tombol Apple Store -->
    <div class="col-auto">
        <div class="white-button first-button scroll-to-section">
            <a href="https://www.apple.com/id/app-store/">Apple Store <i class="fab fa-apple"></i></a>
        </div>
    </div>

    <!-- Tombol Google Play Store -->
    <div class="col-auto">
        <div class="white-button scroll-to-section">
            <a href="https://play.google.com/store/games?hl=en">Google Play Store <i class="fab fa-google-play"></i></a>
        </div>
    </div>
</div>




  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Chain App Dev Company. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>