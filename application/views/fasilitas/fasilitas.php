<style>
  .card {
    background-color: white;
    color: gray;
    width: 300px;
    display: inline-block;
    /* align-items: flex-start; */
  }
</style>

<section class="bg-single-events">
  <div class="container">
    <div class="row">
      <div class="single-events">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="single-event-item">
              <div class="single-event-content">
                <h3>Keunggulan Fasilitas Kami</h3>
                <hr>


                <div class="row">
                  <?php foreach ($fasilitas as $fas) { ?>
                    <div class="card">
                      <div class="our-services-box">
                        <div class="our-services-items">
                          <!-- <i class="fa fa-bug fa-5x" style="color:#337ab7; margin-bottom: 20px;"></i> -->
                          <img src="<?= base_url('assets/upload/image/' . $fas->gambar) ?>" width="70">
                          <div class="our-services-content"><br>
                            <hr>
                            <p>
                              <?= $fas->nama_fasilitas ?>
                            </p>
                          </div>
                          <!-- .our-services-content -->
                        </div>
                        <!-- .our-services-items -->
                      </div>
                      <!-- .our-services-box -->
                    </div>
                  <?php } ?>
                </div>


              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>