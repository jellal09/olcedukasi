<section class="bg-recent-project-home3">
  <div class="container">
    <div class="section-header">
      <h2>
        <?php //echo $title ?> GALERI ALUMNI
      </h2>
    </div>
    <div class="row">
      <div class="recent-project photo-gallery">
        <div class="portfolio-items portfolio-items-home3">
          <?php foreach ($alumni as $alum) { ?>
            <div class="item <?php echo $alum->id_alumni ?>">
              <div class="item-inner">
                <div class="portfolio-img">
                  <div class="overlay-project"></div>
                  <!-- .overlay-project -->
                  <img src="<?= base_url('assets/upload/image/' . $alum->gambar) ?>" alt="recent-project-img-1"
                    class="img img-fluid img-thumbnail">
                  <div class="project-plus">
                    <a href="<?php echo base_url('assets/upload/image/' . $alum->gambar) ?>"
                      data-rel="lightcase:myCollection"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  </div>
                  <div class="recent-project-content">
                    <p><a href="#">
                        <?php echo $alum->nama_alumni; ?>
                      </a></p>
                  </div>
                  <!-- .latest-port-content -->
                </div>
                <!-- /.portfolio-img -->
              </div>
              <!-- .item-inner -->
            </div>
          <?php } ?>
          <!-- .items -->
        </div>
        <!-- .load-more-option -->
      </div>
      <!-- .recent-project -->
    </div>
    <!-- .row -->
  </div>
  <!-- .container -->
</section>