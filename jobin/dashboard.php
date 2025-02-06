
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
    <title>Dashboard - JobIn</title>

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
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Kategori</a></li>
              <li class="scroll-to-section"><a href="cari.php" onclick="tampilkanPemberitahuan(event)">Cari JobIn!</a></li>
              <li class="scroll-to-section"><a href="daftar.php" onclick="tampilkanPemberitahuan(event)">Daftar JobIn!</a></li>
              <li><div class="gradient-button"><a href="login.php"><i class="fa fa-sign-in-alt"></i> Masuk JobIn</a></div></li> 
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
  
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Get The Latest App From App Stores</h2>
                    <p>Jobin adalah aplikasi yang memberikan informasi terkait individu yang siap bekerja di bidang jasa, seperti asisten rumah tangga, babysitter, tukang, sopir, dan pekerjaan serupa, disertai dengan portofolio dan riwayat hidup untuk meyakinkan para pencari tenaga kerja (konsumen).</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button first-button scroll-to-section">
                      <a href="https://www.apple.com/id/app-store/">Apple Store <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="https://play.google.com/store/games?hl=en">Google Play Store <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Banyak <em>Kategori</em> Sesuai dengan Kebtuhan Anda!</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>If you need the greatest collection of HTML templates for your business, please visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need to have a contact form PHP script, go to <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more information.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Tukang</h4>
            <p>Membantu Anda mencari tukang yang dapat memperbaiki pekerjaan anda!</p>
            <div class="text-button">
            <a href="cari.php" onclick="tampilkanPemberitahuan(event)">Read More <i class="fa fa-arrow-right"></i></a>

<script>
  // Fungsi untuk menampilkan alert saat link diklik
  function tampilkanPemberitahuan(event) {
    event.preventDefault(); // Mencegah aksi default (redirect ke halaman)
    alert("Silakan login atau daftar terlebih dahulu untuk mengakses fitur ini.");
  }
</script>

            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Supir</h4>
            <p>Membantu anda saat membutuhkan supir dalam keadaan mendesak!</p>
            <div class="text-button">
            <a href="cari.php" onclick="tampilkanPemberitahuan(event)">Read More <i class="fa fa-arrow-right"></i></a>

<script>
  // Fungsi untuk menampilkan alert saat link diklik
  function tampilkanPemberitahuan(event) {
    event.preventDefault(); // Mencegah aksi default (redirect ke halaman)
    alert("Silakan login atau daftar terlebih dahulu untuk mengakses fitur ini.");
  }
</script>

            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Asisten Rumah Tangga</h4>
            <p>Membantu anda untuk mengajarkan hal yang belum anda kuasai!</p>
            <div class="text-button">
            <a href="cari.php" onclick="tampilkanPemberitahuan(event)">Read More <i class="fa fa-arrow-right"></i></a>

<script>
  // Fungsi untuk menampilkan alert saat link diklik
  function tampilkanPemberitahuan(event) {
    event.preventDefault(); // Mencegah aksi default (redirect ke halaman)
    alert("Silakan login atau daftar terlebih dahulu untuk mengakses fitur ini.");
  }
</script>

            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>Babby Sitter</h4>
            <p>Membantu anda mengerjakan pekerjaan rumah anda!</p>
            <div class="text-button">
            <a href="cari.php" onclick="tampilkanPemberitahuan(event)">Read More <i class="fa fa-arrow-right"></i></a>

<script>
  // Fungsi untuk menampilkan alert saat link diklik
  function tampilkanPemberitahuan(event) {
    event.preventDefault(); // Mencegah aksi default (redirect ke halaman)
    alert("Silakan login atau daftar terlebih dahulu untuk mengakses fitur ini.");
  }
</script>

            </div>
          </div>
        </div>
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

  <script>
  // Fungsi untuk menampilkan alert saat link diklik
  function tampilkanPemberitahuan(event) {
    event.preventDefault(); // Mencegah aksi default (redirect ke halaman)
    alert("Silakan login atau daftar terlebih dahulu untuk mengakses fitur ini.");
  }
</script>
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