<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>OLC Edukasi</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free Website Template" name="keywords">
  <meta content="Free Website Template" name="description">

  <!-- Favicon -->
  <link href="<?= base_url('assets/upload/image/' . $konfigurasi->icon) ?>" rel="icon">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
    rel="stylesheet">

  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="assets/tema/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/tema/assets/lib/flaticon/font/flaticon.css" rel="stylesheet">
  <link href="assets/tema/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/tema/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="assets/tema/assets/css/styleku.css" rel="stylesheet">
</head>

<body>
  <!-- Top Bar Start -->
  <div class="top-bar d-none d-md-block">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="top-bar-left">
            <div class="text">
              <i class="far fa-clock"></i>
              <h2>08:00 - 20:00 | </h2>
              <p>Senin - Sabtu</p>
            </div>
            <div class="text">
              <i class="fa fa-phone-alt"></i>
              <h2>
                <?= $konfigurasi->hp ?>
              </h2>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="top-bar-right">
            <div class="social">
              <a
                href="https://wa.me/+6281233157293?text=Halo%20kak,%20Saya%20mendapatkan%20informasi%20dari%20web%20OLC%20Edukasi.%20Mohon%20informasi%20untuk%20programnya%20ya."><i
                  class="fab fa-whatsapp"></i></a>
              <a href="https://www.instagram.com/olcedukasi/"><i class="fab fa-instagram"></i></a>
              <a href="https://facebook.com/bimbelpolrikedinasan"><i class="fab fa-facebook-f"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Bar End -->

  <!-- Nav Bar Start -->
  <div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a href="<?= base_url('landing') ?>" class="navbar-brand">
        <img src="<?= base_url('assets/upload/image/' . $konfigurasi->logo) ?>" alt="logo-baru">
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
          <a href="https://wa.me/+6281233157293?text=Halo%20kak,%20Saya%20mendapatkan%20informasi%20dari%20web%20OLC%20Edukasi.%20Mohon%20informasi%20untuk%20programnya%20ya."
            class="nav-item nav-link">Konsultasi</a>
          <a href="https://olcedukasi.com/daftar" class="nav-item nav-link">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Nav Bar End -->

  <!-- Hero Start -->
  <div class="hero">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-sm-12 col-md-6">
          <div class="hero-text">
            <h1>OLC EDUKASI</h1>
            <p>
              Wujudkan Cita-Citamu Menjadi Abdi Negara.
            </p>
            <div class="hero-btn">
              <a class="btn"
                href="https://wa.me/+6281233157293?text=Halo%20kak,%20Saya%20mendapatkan%20informasi%20dari%20web%20OLC%20Edukasi.%20Mohon%20informasi%20untuk%20programnya%20ya.">Konsultasi</a>
              <a class="btn" href="https://olcedukasi.com/daftar">Daftar Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 d-none d-md-block">
          <div class="hero-image">
            <!-- <img src="assets/img/hero.png" alt="Hero Image"> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->


  <!-- About Start -->
  <div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-6">
          <div class="about-img">
            <!-- <img src="assets/img/olc-icon.png" alt="Image"> -->
            <img src="<?= base_url('assets/upload/image/' . $konfigurasi->icon) ?>" alt="">
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="section-header text-left">
            <!-- <p>Learn About Us</p> -->
            <h2>Profil OLC Edukasi</h2>
          </div>
          <div class="about-text">
            <p>
              OLC Edukasi merupakan bimbingan belajar terpadu bergaransi untuk seleksi TNI dan POLRI dan
              kedinasan yang melakukan pendampingan 100% sampai lulus. <br>
              - Persiapan tes AKPOL - AKMIL, AAU dan AAL. <br>
              - Persiapan tes Bintara - Tamtama TNI - POLRI. <br>
              - Persiapan tes sekolah kedinasan STAN, IPDN, POLTEKIM, POLTEKIP, STMKG, STIN, STIS dan
              STTD. <br>
              - Persiapan tes CPNS dan BUMN.
            </p>
            <p>
              Sistem pembelajaran dan pelatihan serta tryout sesuai tes sesungguhnya (menggunakan sistem
              CAT) membuat siswa memiliki pengalaman dan siap dalam tes. Metode pembelajaran yang
              menyesuaikan optimasi kemampuan siswa serta jangka waktu pembelajaran yang panjang terbukti
              dapat memberikan progres belajar yang dapat memperbesar peluang lulus dan terpilih sesuai
              cita-cita menjadi abdi negara.
            </p>
            <!-- <a class="btn" href="">Learn More</a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Program Start -->
  <div class="service">
    <div class="container">
      <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
        <!-- <p>What we do</p> -->
        <h2>Program OLC Edukasi</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
          <div class="service-item">
            <div class="service-icon">
              <i class="fa fa-users"></i>
            </div>
            <h3>Program Reguler</h3>
            <p>
              Program reguler merupakan program utama dari bimbel TNI-POLRI-Kedinasan di OLC...
            </p>
            <a href="https://olcedukasi.com/program/reguler">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item">
            <div class="service-icon">
              <i class="fa fa-user"></i>
            </div>
            <h3>Program Private</h3>
            <p>
              Program private merupakan program khusus sesuai kebutuhan siswa. Program disusun...
            </p>
            <a href="https://olcedukasi.com/program/program/program-private">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="service-item">
            <div class="service-icon">
              <i class="fa fa-share-alt"></i>
            </div>
            <h3>Program Online</h3>
            <p>
              Program online merupakan bimbingan yang dilaksanakan secara virtual dimana siswa...
            </p>
            <a href="https://olcedukasi.com/program/program/program-online">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="service-item">
            <div class="service-icon">
              <i class="fa  fa-arrow-alt-circle-down"></i>
            </div>
            <h3>Program Intensif</h3>
            <p>
              Program intensif merupakan program persiapan tes dengan durasi waktu singkat...
            </p>
            <a href="https://olcedukasi.com/program/program/program-intensif">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="service-item">
            <div class="service-icon">
              <i class="fa fa-walking"></i>
            </div>
            <h3>Program Jasmani</h3>
            <p>
              Program jasmani merupakan program yang fokus mengembangkan kebugaran jasmani dan...
            </p>
            <a href="https://olcedukasi.com/program/program/program-jasmani">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Program End -->


  <!-- Fasilitas Start -->

  <div class="service">
    <div class="container">
      <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
        <!-- <p>What we do</p> -->
        <h2>Fasilitas OLC Edukasi</h2>
      </div>
      <div class="row">
        <?php foreach ($fasilitas as $fas) { ?>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="layanan-item">
              <div class="layanan">
                <img src="<?= base_url('assets/upload/image/' . $fas->gambar) ?>" alt="">
              </div>
              <!-- <h3>Program Online</h3> -->
              <p>
                <?= $fas->nama_fasilitas ?>
              </p>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
  <!-- Fasilitas End -->

  <!-- ALUMNI -->
  <div class="blog">
    <div class="container">
      <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
        <!-- <p>From Blog</p> -->
        <h2>Alumni OLC Edukasi</h2>
      </div>
      <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">

        <?php foreach ($alumni as $alum) { ?>
          <div class="blog-item">
            <div class="blog-img">
              <img src="<?= base_url('assets/upload/image/' . $alum->gambar) ?>" alt="Blog">
            </div>
            <div class="blog-text">
              <h2>
                <?= $alum->nama_alumni ?>
              </h2>
              <p>
                <?= $alum->lulusan ?>
              </p>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>
  <!-- ALUMNI End -->

  <!-- TESTIMONI Start -->
  <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="section-header text-center">
        <h2>Testimonial</h2>
        <p>Apa kata mereka?</p>
      </div>
      <div class="owl-carousel testimonials-carousel">
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-1.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Semangat belajar dengan antusias untuk menjadi Akpol 2022, dengan bimbingan belajar menjadikan saya sangat
              bisa mengukur kemampuan saya lebih baik.
            </p>
            <h3>Satriya Bagus Widyaputra</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-2.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Pengajarnya asyik untuk diajak diskusi, apalagi sistem belajarnya sudah pakai CAT, fasilitas yang didapat
              ketika bimbel semua bermanfaat.
            </p>
            <p>Perjuangan polri 2021.</p>
            <h3>Adinsyah Bayu Irawan</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-3.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Kesuksesan pertemuan antara kesempatan dan kesiapan. Di bimbel OLC saya mengasah kesiapan saya terkait
              materi psikotes, akademik dan jasmani.
            </p>
            <h3>Bararuna Duta R.</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-4.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Kelasnya sangat nyaman, 1 kelas hanya 5 siswa jadi materi yg diajarkan bisa saya pahami dengan baik, saya
              berterima kasih banyak menjadi bagian dari siswa OLC.
            </p>
            <h3>Restu Aji Bayu Pamungkas</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-5.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Mbak adminnya baik baik, setiap hari selalu diingatkan ketika ada jadwal. Bagi kamu yg ingin mendapat WA
              tiap hari, belajarnya di OLC Edukasi aja.
            </p>
            <h3>Kadek Tirta Amerta A. W.</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-6.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Banyak hal baru yang belum saya pelajari, namun dengan bimbel bersama OLC Edukasi bertambah wawasan dan
              pengetahuan saya, sehingga aya bisa lolos masuk angkatan militer.
            </p>
            <h3>Febri Ari Cahya</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-7.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Pengalaman saya ketika mengikuti pembinaan, pengajaranya sangat kompeten di bidangnya sehingga soal-soal
              yang diajarkan banyak yang keluar ketika saya mengikuti tes Polri 2015. Alhamdulillah sekarang saya
              bertugas di polres Jember.
            </p>
            <h3>Sofyan Ubaidillah</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-8.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Perkenalkan saya asli kota Jember, alhamdulilah 2x mencoba ikut tes penerimaan Akpol, yang kedua lulus
              mengikuti pendidikan 2022.
            </p>
            <p>
              Terima kasih OLC Edukasi.
            </p>
            <h3>Adam Rifqi P.</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-9.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Menjadi abdi negara adalah cita-cita, menjadi pelaut adalah pengalaman yang luar biasa, berkeliling dunia
              menjadi seorang mualim.Kunci sukses adalah belajar, berlatih dan berdoa.
            </p>
            <h3>Wahyu Ansyar Putra P.</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-10.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Belajar di Bimbel OLC sangat nyaman, materi, guru dan layanan konsultasi hipnoterapi menjadikan saya makin
              percaya diri meraih impian.
            </p>
            <h3>Aditya Aryayuda Putra</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-11.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Bimbingan yang singkat menjadikan saya harus banyak mengasah kemampuan terutama materi akademik, dengan
              belajar di bimbel OLC yang di Jember, saya bisa meningkatkan nilai saya sehingga lulus polri 2021,
              menempuh masa belajar membutuhkan penuh perjuangan.</p>
            <p>
              Terima kasih banyak mr/ms.
            </p>
            <h3>Yusuf Akbar Al Kahfi</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-12.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Pengalaman saya , mengikuti bimbel di OLC membuat saya makin terarah untuk masuk sekolah kedinasan
              terutama di PPI Madiun. Materinya sudah sistem CAT dan pengajarnya menjelaskan sangat nyaman. Banyak
              pendampingan yang saya dapatkan terutama pemilihan kedinasan yg berpeluang.
            </p>
            <p>Tetap Semangat...</p>
            <h3>Lazuardy Imam Qudzori</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-13.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Pengajarnya mudah diajak ngobrol, terutama materi matematika butuh ekstra sabar.
            </p>
            <p>
              Terima kasih mr/ms.
            </p>
            <h3>Tegar Farda Saputra</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-14.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Staff dan pengajar di bimbel OLC sudah seperti keluarga sendiri, asyik, seru dan rasa kekeluargaan sangat
              bagus, jadi yang mau menjadi abdi negara pastinya bimbelnya di Jember saja, OLC Edukasi.
            </p>
            <h3>Andhika Ghaniya R.</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/upload/testi/testi-15.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Saya mengikuti OLC Edukasi pada tahun 2017 , materi yang diajarkan sangat berguna terutama psikotes.
              Mengingat materi tersebut belum pernah saya pelajari di sekolah sebelumnya.
            </p>
            <h3>Ayang Zhelius</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TESTIMONI End -->

  <!-- Footer Start -->
  <div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container-fluid">
      <div class="container">
        <div class="footer-info">
          <a href="index.html" class="footer-logo"></a>
          <h3>Perum. Istana Tegal Besar, Demak H-10</h3>
          <h3>Kaliwates - Jember</h3>
          <div class="footer-menu">
            <p>+6212-3315-7293</p>
            <p>adminolc@gmail.com</p>
          </div>
          <div class="footer-social">
            <a
              href="https://wa.me/+6281233157293?text=Halo%20kak,%20Saya%20mendapatkan%20informasi%20dari%20web%20OLC%20Edukasi.%20Mohon%20informasi%20untuk%20programnya%20ya."><i
                class="fab fa-whatsapp"></i></a>
            <a href="https://www.instagram.com/olcedukasi"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/bimbelpolrikedinasan"><i class="fab fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
      <div class="container copyright">
        <div class="row">
          <div class="col-md-6">
            <p>&copy; copyright, <a href="https://olcedukasi.com">OLC Edukasi</a></p>
          </div>
          <div class="col-md-6">
            <p>Designed By <a href="https://olcedukasi.com">OLC Edukasi</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="assets/tema/assets/lib/easing/easing.min.js"></script>
  <script src="assets/tema/assets/lib/wow/wow.min.js"></script>
  <script src="assets/tema/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/tema/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/tema/assets/lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="assets/tema/assets/mail/jqBootstrapValidation.min.js"></script>
  <script src="assets/tema/ assets/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="assets/tema/assets/js/main.js"></script>
</body>

</html>