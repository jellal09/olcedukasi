<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <title>OLC Edukasi</title> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free Website Template" name="keywords">
  <meta content="Free Website Template" name="description">

  <!-- Favicon -->
  <link href="" rel="icon">

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
              <a href=""><i class="fab fa-twitter"></i></a>
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
      <a href="index.html" class="navbar-brand">
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
          <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a> -->
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
              <a class="btn" href="">Konsulatasi</a>
              <a class="btn" href="">Daftar Sekarang</a>
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
            <a href="">Baca Selengkapnya</a>
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
            <a href="">Baca Selengkapnya</a>
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
            <a href="">Baca Selengkapnya</a>
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
            <a href="">Baca Selengkapnya</a>
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
            <a href="">Baca Selengkapnya</a>
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
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/teacher.png" alt="">
            </div>
            <!-- <h3>Program Online</h3> -->
            <p>
              Tenaga pengajar yang ahli di bidangnya
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="layanan-item">
            <div class="layanan">
              <!-- <i class="fa fa-user"></i> -->
              <img src="assets/img/list.png" alt="">
            </div>
            <!-- <h3>Program Private</h3> -->
            <p>
              Membedah tuntas soal psikotes dan akademik
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/therapy.png" alt="">
            </div>
            <!-- <h3>Program Jasmani</h3> -->
            <p>
              Program layanan terapi fisik & kesehatan mental
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/classroom.png" alt="classroom">
            </div>
            <!-- <h3>Program Reguler</h3> -->
            <p>
              Ruang kelas nyaman & bersih
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/parent.png" alt="">
            </div>
            <!-- <h3>Program Intensif</h3> -->
            <p>
              Sistem pemantauan untuk orang tua
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/result.png" alt="">
            </div>
            <!-- <h3>Program Jasmani</h3> -->
            <p>
              Pelaporan hasil belajar secara berkala
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/computer.png" alt="">
            </div>
            <!-- <h3>Program Jasmani</h3> -->
            <p>
              Tryout (CBT) secara berkala
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/graduate.png" alt="">
            </div>
            <!-- <h3>Program Jasmani</h3> -->
            <p>
              Durasi pendampingan sampai lulus
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
          <div class="layanan-item">
            <div class="layanan">
              <img src="assets/img/consulting.png" alt="">
            </div>
            <!-- <h3>Program Jasmani</h3> -->
            <p>
              Free konsultasi
            </p>
          </div>
        </div>
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
        <div class="blog-item">
          <div class="blog-img">
            <img src="assets/img/alum1.jpg" alt="Blog">
          </div>
          <div class="blog-text">
            <h2>Wahyu Ansyar Putra P.</h2>
            <p>
              Kedinasan POLTEKPEL
            </p>
          </div>
        </div>
        <div class="blog-item">
          <div class="blog-img">
            <img src="assets/img/alum2.jpg" alt="Blog">
          </div>
          <div class="blog-text">
            <h2>Aditya Aryayuda Putra</h2>
            <p>
              Lulusan TNI AL
            </p>
          </div>
        </div>
        <div class="blog-item">
          <div class="blog-img">
            <img src="assets/img/alum3.jpg" alt="Blog">
          </div>
          <div class="blog-text">
            <h2>Yusuf Akbar Al Kahfi</h2>
            <p>
              Lulusan Bintara POLRI
            </p>
          </div>
        </div>
        <div class="blog-item">
          <div class="blog-img">
            <img src="assets/img/alum4.jpg" alt="Blog">
          </div>
          <div class="blog-text">
            <h2>Lazuardy Imam Qudzori</h2>
            <p>
              Lulusan Kedinasan PPI
            </p>
          </div>
        </div>
        <div class="blog-item">
          <div class="blog-img">
            <img src="assets/img/alum5.jpg" alt="Blog">
          </div>
          <div class="blog-text">
            <h2>Tegar Farda Saputra</h2>
            <p>
              Lulusan Bintara POLRI
            </p>
          </div>
        </div>
        <div class="blog-item">
          <div class="blog-img">
            <img src="assets/img/alum6.jpg" alt="Blog">
          </div>
          <div class="blog-text">
            <h2>Andhika Ghaniya R.</h2>
            <p>
              Lulusan Bintara POLRI
            </p>
          </div>
        </div>
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
            <img src="assets/img/testi-9.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
              suscip justo dictum.
            </p>
            <h3>Wahyu Ansyar Putra Pratama</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/img/testi-10.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
              suscip justo dictum.
            </p>
            <h3>Customer Name</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/img/testi-11.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
              suscip justo dictum.
            </p>
            <h3>Customer Name</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/img/testi-12.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
              suscip justo dictum.
            </p>
            <h3>Customer Name</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/img/testi-13.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
              suscip justo dictum.
            </p>
            <h3>Customer Name</h3>
          </div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-img">
            <img src="assets/img/testi-14.jpg" alt="Image">
          </div>
          <div class="testimonial-text">
            <p>
              Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis
              suscip justo dictum.
            </p>
            <h3>Customer Name</h3>
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
            <a href=""><i class="fab fa-youtube"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      <div class="container copyright">
        <div class="row">
          <div class="col-md-6">
            <p>&copy; <a href="https://olcedukasi.com">OLC Edukasi</a>, All Right Reserved.</p>
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
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="assets/mail/jqBootstrapValidation.min.js"></script>
  <script src="assets/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="assets/js/main.js"></script>
</body>

</html>