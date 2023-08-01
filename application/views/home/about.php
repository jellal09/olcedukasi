<!-- Start About Greenforest Section -->
<section class="bg-about-greenforest">
    <div class="container">
        <div class="center">
            <a href="https://wa.me/+6281233157293?text=Saya%20tertarik%20untuk%20Menggunakan%20Layanan%20di%20Perusahan%20Anda.%20Apakah%20bisa%20dibantu?"
                class="btn btn-success btn-lg">KONSULTASI
                SEKARANG <i class="fa fa-whatsapp"></i></a>
            <a href="<?= base_url('daftar') ?>" class="btn btn-warning btn-lg jarak">DAFTAR SEKARANG <i
                    class="fa fa-list"></i></a>
        </div>
        <div class="row">
            <div class="about-greenforest">
                <?php $noprof = 1;
                foreach ($profil as $profil) {
                    if ($noprof == 1) { ?>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="about-greenforest-content">
                                    <h2>
                                        <?php echo $profil->judul_berita ?>
                                    </h2>
                                    <?php echo $profil->isi ?>
                                </div>
                                <!-- .about-greenforest-content -->
                            </div>
                            <!-- .col-md-8 -->
                            <div class="col-md-4">
                                <div class="about-greenforest-img">
                                    <img src="<?php echo base_url('assets/upload/image/' . $profil->gambar) ?>"
                                        alt="about-greenforet-img" class="img-responsive" />
                                </div>
                                <!-- .about-greenforest-img -->
                            </div>
                            <!-- .col-md-4 -->
                        </div>
                    <?php }
                    $noprof++;
                } ?>
            </div>
            <!-- .about-greenforest -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>