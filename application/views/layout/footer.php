<?php
$site = $this->konfigurasi_model->listing();
?>
<style type="text/css" media="screen">
  .kontakwa {
    z-index: 9999;
    position: fixed;
    background-color: #cc9000;
    padding: 10px;
    bottom: 0;
    right: 120px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px green;
    border-left: solid 2px green;
    border-right: solid 2px green; */
    min-width: 80px;
    border-radius: 0 10px 0 0;
  }

  .telepon {
    z-index: 9999;
    position: fixed;
    background-color: #cc8800;
    padding: 10px;
    bottom: 0;
    right: 200px;
    min-width: 80px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px #e93478;
    border-left: solid 2px #e93478;
    border-right: solid 2px #e93478; */
    border-radius: 10px 0 0 0;
  }

  .kontakwa a,
  .telepon a {
    color: white;
    font-size: 40px;
    font-weight: 700;
    text-align: center;
  }

  .kontakwa:hover,
  .telepon:hover {
    background-color: pink;

  }
</style>
<div class="telepon">
  <a href="tel:<?php echo $site->telepon ?>"><i class="fa fa-phone"></i></a>
</div>
<div class="kontakwa">
  <a href="https://wa.me/<?php echo str_replace('+', '', $site->hp) ?>?text=Saya%20tertarik%20untuk%20Menggunakan%20Layanan%20di%20Perusahan%20Anda.%20Apakah%20bisa%20dibantu?"
    class="topbar-social-item"><i class="fa fa-whatsapp"></i>
  </a>
</div>
<!-- END WA -->
<?php
$site = $this->konfigurasi_model->listing();
$nav_profil = $this->nav_model->nav_profil();
?>
<!-- Start Footer Section -->
<footer>
  <div class="bg-footer-top">
    <div class="container">
      <div class="row">
        <div class="footer-top">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="footer-widgets">
                <div class="widgets-title">
                  <h4 style="color:white;">
                    <?php echo $site->namaweb ?>
                  </h4>
                </div>

                <!-- .widgets-content -->
                <div class="address-box">
                  <ul class="address">
                    <li>
                      <i class="fa fa-home" aria-hidden="true"></i>
                      <span>
                        <?php echo nl2br($site->alamat) ?>
                      </span>
                    </li>
                    <li>
                      <i class="fa fa-phone" aria-hidden="true"></i>
                      <span>
                        <?php echo $site->telepon ?>
                      </span>
                    </li>
                    <li>
                      <i class="fa fa-envelope-o" aria-hidden="true"></i>
                      <span>
                        <?php echo $site->email ?>
                      </span>

                    </li>
                  </ul>
                </div>
                <!-- .address -->
              </div>
              <!-- .footer-widgets -->
            </div>
            <!-- .col-md-4 -->
            <div class="col-md-6 col-sm-6">
              <div class="footer-widgets">
                <div class="widgets-title">
                  <h3>Latest News</h3>
                </div>
                <!-- .widgets-title -->
                <ul class="latest-news">
                  <?php foreach ($nav_profil as $nav_profil) { ?>
                    <li>
                      <span class="thumbnail-img">
                        <?php if ($nav_profil->gambar != "") { ?>
                          <img src="<?php echo base_url('assets/upload/image/' . $nav_profil->gambar) ?>"
                            alt="<?php echo $nav_profil->judul_berita ?>" class="img-responsive" />
                        <?php } else { ?>
                          <img src="<?php echo base_url('assets/upload/image/' . $site->icon) ?>"
                            alt="<?php echo $nav_profil->judul_berita ?>" class="img-responsive" />
                        <?php } ?>
                      </span>
                      <div class="thumbnail-content">
                        <h5><a href="<?php echo base_url('berita/profil/' . $nav_profil->slug_berita) ?>"><?php echo $nav_profil->judul_berita ?></a></h5>
                      </div>
                      <!-- .thumbnail-content -->
                    </li>
                  <?php } ?>
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1570.726500423233!2d113.68047141205238!3d-8.196801527115639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd697c034899669%3A0x6b8f278199d2dc83!2sOLC%20EDUKASI%20Bimbel%20TNI%20POLRI%20STAN%20IPDN%20POLTEKIM!5e0!3m2!1sen!2sid!4v1688961875111!5m2!1sen!2sid"
                    width="370" height="200" style="border:0; border-radius:10px" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
              </div>
              <!-- .footer-widgets -->
            </div>


          </div>
          <!-- .row -->
        </div>
        <!-- .footer-top -->
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </div>
  <!-- .bg-footer-top -->

  <div class="bg-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="footer-bottom">
          <div class="copyright-txt">
            <p>&copy;
              <?php echo date('Y') ?>. Designer By <a href="https://olcedukasi.com" title="OLC EDUKASI">OLC EDUKASI</a>
            </p>
          </div>
          <!-- .copyright-txt -->
          <div class="social-box">
            <ul class="social-icon-rounded">
              <li><a href="<?php echo $site->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="<?php echo $site->instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="<?php echo $site->twitter ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <!-- .social-box -->

        </div>
        <!-- .footer-bottom -->
      </div>
      <!-- .row -->
    </div>
    <!-- .container -->
  </div>
  <!-- .bg-footer-bottom -->

</footer>

<!-- End Footer Section -->


<!-- Start Scrolling -->

<div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div>


<!-- End Scrolling -->


</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/lightcase.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.nstSlider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.map.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/plugins.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/select2/select2.full.min.js"></script>
<!-- DataTables JS -->
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('.editorku'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('#keterangan').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>

</html>