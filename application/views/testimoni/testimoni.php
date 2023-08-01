<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <style type="text/css">
    .testimonials {
      padding: 40px 0;
      background: #f1f1f1;
      color: #434343;
      text-align: center;
    }

    .inner {
      max-width: 1200px;
      margin: auto;
      overflow: hidden;
      padding: 0 20px;
    }

    .border {
      width: 160px;
      height: 5px;
      background: #6ab04c;
      margin: 26px auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .col {
      flex: 33.33%;
      max-width: 33.33%;
      box-sizing: border-box;
      padding: 15px;
    }

    .testimonial {
      background: #fff;
      padding: 30px;
    }

    .testimonial img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
    }

    .name {
      font-size: 20px;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .stars {
      color: #6ab04c;
      margin-bottom: 20px;
    }


    @media screen and (max-width:1280px) {
      .col {
        flex: 100%;
        max-width: 100%;
      }
    }

    @media screen and (max-width:600px) {
      .col {
        flex: 100%;
        max-width: 100%;
      }
    }
  </style>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

<body>

  <div class="testimonials">
    <div class="inner">
      <h1 style="color: black">Testimonials</h1>

      <div class="border"></div>
      <p style="color: red; font-size: 30pt;">Apa Kata Mereka ?</p>
      <div class="row">

        <?php foreach ($alumni as $alum): ?>
          <div class="col">
            <div class="testimonial">
              <img style="width: 150px; height: 150px" src="<?= base_url('assets/upload/image/' . $alum->gambar) ?>">
              <!-- <img src="1.jpg" alt=""> -->
              <div class="name">
                <?= $alum->nama_alumni ?>
              </div>
              <div>
                <p style="color: blue">
                  <?= $alum->lulusan ?>
                </p>
              </div>
              <hr>
              <p>
                <?= $alum->pesan ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>

      </div>
    </div>
  </div>

</body>

</html>