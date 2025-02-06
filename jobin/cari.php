
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
              <li class="scroll-to-section"><a href="cari.php" class="active">Cari JobIn!</a></li>
              <li class="scroll-to-section"><a href="daftar.php">Daftar JobIn!</a></li>
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

  <!-- Header -->
 <br><br><br><br><br>
<div style="text-align: center; margin-bottom: 20px;">
    <h4>Carilah JobIn sesuai Kategori yang kamu inginkan!</h4>
</div>
<!-- Fitur Search dengan Form -->
<div style="text-align: center;">
    <form action="#" method="get" style="display: inline-block; margin-top: 20px;">
        <input type="text" name="search" id="searchInput" onkeyup="searchFunction()" placeholder="   Cari kategori..." 
               style="padding: 10px; width: 250px; border-radius: 25px; border: 1px solid #ccc; font-size: 16px;">
    </form>
</div>

<!-- Daftar Kategori dalam bentuk Button dengan Border Berbeda -->
<!-- Daftar Kategori dalam bentuk Button dengan Border Berbeda -->
<div id="categoryList" style="text-align: center; margin-top: 20px;">
    <button data-category="semua" onclick="selectCategory('semua')" style="border-radius: 50px; border: 2px solid navy; background-color: skyblue; margin: 5px;">Semua</button>
    <button data-category="asisten rumah tangga" onclick="selectCategory('asisten rumah tangga')" style="border-radius: 50px; border: 2px solid #FF5733; margin: 5px;">Asisten Rumah Tangga</button>
    <button data-category="supir" onclick="selectCategory('supir')" style="border-radius: 50px; border: 2px solid #33FF57; margin: 5px;">Supir</button>
    <button data-category="tukang" onclick="selectCategory('tukang')" style="border-radius: 50px; border: 2px solid #3357FF; margin: 5px;">Tukang</button>
    <button data-category="baby sitter" onclick="selectCategory('baby sitter')" style="border-radius: 50px; border: 2px solid #FF33A1; margin: 5px;">Babby Sitter</button>
    <button data-category="kursus" onclick="selectCategory('kursus')" style="border-radius: 50px; border: 2px solid #FF33A1; margin: 5px;">Kursus</button>
</div>

<br><br>
<!-- Container with flex-wrap to allow wrapping -->
<div id="job" style="display: flex; flex-wrap: wrap; gap: 10px; padding-left: 20px; padding-right: 20px; margin-left: 30px;">
    <div class="job-item" data-category="Supir" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
        <div style="flex: 1; text-align: center;">
            <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
        </div>
        <div style="flex: 2; padding-left: 20px;">
            <strong>Nama:</strong> John Doe<br>
            <strong>Umur:</strong> 25<br>
            <strong>Jenis Kelamin:</strong> Laki-laki<br>
            <strong>Pengalaman Bekerja:</strong> Ada<br>
            <strong>Pendidikan Terakhir:</strong> SMA<br>
            <strong>Kategori:</strong> Supir <br>
            <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
        </div>
        </div>

        <div class="job-item" data-category="Asisten Rumah Tangga" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> Jane Smith<br>
                <strong>Umur:</strong> 28<br>
                <strong>Jenis Kelamin:</strong> Perempuan<br>
                <strong>Pengalaman Bekerja:</strong> Tidak Ada<br>
                <strong>Pendidikan Terakhir:</strong> D3<br>
                <strong>Kategori:</strong> Asisten Rumah Tangga <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div class="job-item" data-category="Kursus" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> Alex Brown<br>
                <strong>Umur:</strong> 32<br>
                <strong>Jenis Kelamin:</strong> Laki-laki<br>
                <strong>Pengalaman Bekerja:</strong> Ada<br>
                <strong>Pendidikan Terakhir:</strong> S1<br>
                <strong>Kategori:</strong> Kursus <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div class="job-item" data-category="Tukang" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> Olivia White<br>
                <strong>Umur:</strong> 23<br>
                <strong>Jenis Kelamin:</strong> Perempuan<br>
                <strong>Pengalaman Bekerja:</strong> Ada<br>
                <strong>Pendidikan Terakhir:</strong> SMP<br>
                <strong>Kategori:</strong> Tukang <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div class="job-item" data-category="Supir" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> David Johnson<br>
                <strong>Umur:</strong> 27<br>
                <strong>Jenis Kelamin:</strong> Laki-laki<br>
                <strong>Pengalaman Bekerja:</strong> Tidak Ada<br>
                <strong>Pendidikan Terakhir:</strong> D3<br>
                <strong>Kategori:</strong> Supir <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div class="job-item" data-category="Tukang" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> Emma Wilson<br>
                <strong>Umur:</strong> 30<br>
                <strong>Jenis Kelamin:</strong> Perempuan<br>
                <strong>Pengalaman Bekerja:</strong> Ada<br>
                <strong>Pendidikan Terakhir:</strong> S1<br>
                <strong>Kategori:</strong> Tukang <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div class="job-item" data-category="Kursus" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> Michael Taylor<br>
                <strong>Umur:</strong> 22<br>
                <strong>Jenis Kelamin:</strong> Laki-laki<br>
                <strong>Pengalaman Bekerja:</strong> Tidak Ada<br>
                <strong>Pendidikan Terakhir:</strong> SMA<br>
                <strong>Kategori:</strong> Kursus <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div class="job-item" data-category="Supir" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> Sophia Davis<br>
                <strong>Umur:</strong> 35<br>
                <strong>Jenis Kelamin:</strong> Perempuan<br>
                <strong>Pengalaman Bekerja:</strong> Ada<br>
                <strong>Pendidikan Terakhir:</strong> D3<br>
                <strong>Kategori:</strong> Supir <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div  class="job-item" data-category="Asisten Rumah Tangga" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> James Lee<br>
                <strong>Umur:</strong> 40<br>
                <strong>Jenis Kelamin:</strong> Laki-laki<br>
                <strong>Pengalaman Bekerja:</strong> Ada<br>
                <strong>Pendidikan Terakhir:</strong> S1<br>
                <strong>Kategori:</strong> Asisten Rumah Tangga <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>

        <div class="job-item" data-category="Tukang" style="display: flex; align-items: center; border: 1px solid #ccc; padding: 20px; border-radius: 20px; width: 48%; height: 200px;">
            <div style="flex: 1; text-align: center;">
                <img src="assets/images/woman.png" alt="Avatar" style="border-radius: 50%; width: 100px; height: 100px;">
            </div>
            <div style="flex: 2; padding-left: 20px;">
                <strong>Nama:</strong> Isabella Martinez<br>
                <strong>Umur:</strong> 29<br>
                <strong>Jenis Kelamin:</strong> Perempuan<br>
                <strong>Pengalaman Bekerja:</strong> Ada<br>
                <strong>Pendidikan Terakhir:</strong> SMA<br>
                <strong>Kategori:</strong> Tukang <br>
                <strong><a href="john.php">Lihat Profil Lebih Detail?</a></strong>
            </div>
        </div>
</div>
<br><br><br>
<center><a href="ajukan.php">Ingin Mengajukan Kategori?</a></center>
<script>
// Fungsi untuk mencari kategori dan pekerjaan
function searchFunction() {
    var input, filter, jobDivs, i, txtValue;

    // Ambil input pencarian dan ubah menjadi huruf kapital
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase(); 

    // Ambil semua div pekerjaan di dalam #job
    jobDivs = document.querySelectorAll("#job > .job-item"); // Ambil semua div dalam #job dengan class .job-item

    // Looping setiap div pekerjaan dan mencocokkan teks pencarian
    jobDivs.forEach(function(jobDiv) {
        txtValue = jobDiv.textContent || jobDiv.innerText; // Ambil teks dalam div pekerjaan
        // Menampilkan div pekerjaan yang cocok dengan pencarian, menyembunyikan yang tidak cocok
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            jobDiv.style.display = ""; // Tampilkan div jika cocok
            jobDiv.classList.remove('hidden'); // Menghapus class hidden
        } else {
            jobDiv.style.display = "none"; // Sembunyikan div jika tidak cocok
            jobDiv.classList.add('hidden'); // Menambahkan class hidden
        }
    });

    // Menyembunyikan kategori yang tidak relevan berdasarkan pencarian
    var buttons = document.getElementById("categoryList").getElementsByTagName('button'); // Ambil semua button
    for (i = 0; i < buttons.length; i++) {
        txtValue = buttons[i].textContent || buttons[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            buttons[i].style.display = "";
        } else {
            buttons[i].style.display = "none";
        }
    }
}

// Fungsi untuk memilih kategori dan menyesuaikan tampilan job
function selectCategory(category) {
    var buttons = document.getElementById("categoryList").getElementsByTagName('button'); // Ambil semua button
    var jobDivs = document.querySelectorAll("#job > .job-item"); // Ambil semua div pekerjaan

    // Reset background pada semua button
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].style.backgroundColor = ""; // Menghapus background
        buttons[i].style.color = ""; // Mengubah warna teks kembali
    }

    // Menandai kategori yang dipilih
    var selectedButton = Array.from(buttons).find(button => button.getAttribute('data-category') === category); // Temukan button yang sesuai dengan kategori
    if (selectedButton) {
        selectedButton.style.backgroundColor = "skyblue";  // Background blue untuk kategori yang dipilih
        selectedButton.style.color = "white"; // Ubah warna teks menjadi putih pada kategori yang dipilih
    }

    // Tampilkan hanya job yang sesuai kategori
    jobDivs.forEach(function(jobDiv) {
        var jobCategory = jobDiv.getAttribute("data-category") || ""; // Ambil kategori yang disimpan pada div job-item
        if (category === "semua" || jobCategory.toUpperCase() === category.toUpperCase()) {
            jobDiv.style.display = ""; // Tampilkan div sesuai kategori
        } else {
            jobDiv.style.display = "none"; // Sembunyikan div yang tidak sesuai kategori
        }
    });
}

// Menambahkan event listener pada setiap tombol kategori
var categoryButtons = document.querySelectorAll("#categoryList button");
categoryButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var category = button.getAttribute('data-category'); // Dapatkan kategori dari data-category
        selectCategory(category); // Panggil selectCategory dengan kategori yang dipilih
    });
});
</script>





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