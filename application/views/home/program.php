<section class="bg-servicesstyle2-section">
  <div class="container">
    <div class="row">
      <div class="our-services-option">
        <div class="section-header">
          <h2>Program <br>
            <?php echo $site->namaweb ?>
          </h2>
        </div>
        <!-- .section-header -->
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="our-services-box">
              <div class="our-services-items">
                <i class="fa fa-check fa-5x" style="color:#337ab7; margin-bottom: 20px;"></i>
                <div class="our-services-content">
                  <h4><a href="<?php echo base_url('program/reguler') ?>">Program Reguler</a></h4>
                  <p>Program Reguler merupakan program utama dari Bimbel TNI-POLRI-Kedinasan di OLC...</p>
                  <a href="<?php echo base_url('program/reguler') ?>">read more<i class="fa fa-angle-double-right"
                      aria-hidden="true"></i></a>
                </div>
                <!-- .our-services-content -->
              </div>
              <!-- .our-services-items -->
            </div>
            <!-- .our-services-box -->
          </div>
          <?php foreach ($program as $prog) { ?>
            <div class="col-md-4 col-sm-6 col-xs-6">
              <div class="our-services-box">
                <div class="our-services-items">
                  <i class="fa fa-check fa-5x" style="color:#337ab7; margin-bottom: 20px;"></i>
                  <div class="our-services-content">
                    <h4><a href="<?php echo base_url('program/program/' . $prog->slug_program) ?>"><?php echo $prog->nama_program ?></a></h4>
                    <p>
                      <?= word_limiter($prog->keterangan, 10) ?>
                    </p>
                    <a href="<?php echo base_url('program/program/' . $prog->slug_program) ?>">read more<i
                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                  </div>
                  <!-- .our-services-content -->
                </div>
                <!-- .our-services-items -->
              </div>
              <!-- .our-services-box -->
            </div>
          <?php } ?>
        </div>
        <!-- .row -->
      </div>
      <!-- .our-services-option -->
    </div>
    <!-- .row -->
  </div>
  <!-- .container -->
</section>


<!-- End Service Style2 Section -->