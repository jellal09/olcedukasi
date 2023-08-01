<!DOCTYPE html>
<html>
<head>
    <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
 
 <section class="bg-contact-us" style="background: #f7f7f7">
            <div class="container">
                <div class="row">
                    <div class="contact-us">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="contact-title">Daftar Akademi Class</h3>
                                <hr>
                                <p style="color: red">Anda dapat mendaftarkan diri secara mudah dengan mengisi formulir dibawah ini! </p>
                                <form id="whatsapp" class="contact-form">
                                    <input class="tujuan" type="hidden" id="noAdmin">
                                    <div class="row">
                                        <div class="col-md-12">                    
                                       <div class="form-group">
                                        <div> Nama Lengkap</div>
                                        <input type="text" class="form-control nama" id="snama" name="nama" placeholder="Nama Lengkap">
                                          </div>
                                          </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                  <div> No WA</div>
                                                <input type="text" class="form-control nowhatsapp" id="nowhatsapp" name="nowhatsaap" placeholder="08xxxxxxxxx">
                                            </div>
                                            <!-- .form-group -->
                                        </div>
                                        <!-- .col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                  <div> Email</div>
                                                <input type="email" class="form-control email" id="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <!-- .col-md-6 -->
                                    </div>


                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-left: -12px">
                                                  <div> Program</div>
                                                <select class="form-control kelas">
                                                    <option class="select-option"  value="">-pilih program-</option>
                                                   <option class="select-option kelas" value="Paket Platinum" class="select-option">Paket Platinum</option>
                                                      <option value="Paket Gold" class="select-option kelas"> Paket Gold</option>
                                                       <option value="Paket Platinum" class="select-option kelas">Paket Silver</option>
                                                       <option class="select-option kelas" value="Paket Intensive" class="select-option">Paket Intensive</option>
                                                      <option value="Paket Super Intensive" class="select-option kelas"> Paket Super Intensive</option>
                                                       <option value="Paket Akademik Class" class="select-option kelas">Paket Akademik Class</option>
                                                            <option value="Paket Psikotes Class" class="select-option kelas">Paket Psikotes Class</option>
                                                                 <option value="Paket Jasmani Class" class="select-option kelas">Paket Jasmani Class</option>
                                                                      
                                                </select>
                                            </div>
                                            <!-- .form-group -->
                                        </div>   

                                          <div class="col-md-6">
                                            <div class="form-group" style="margin-left: -5px">
                                                  <div> Kelas</div>
                                                <select class="form-control minat">
                                                    <option value="">-Pilih Kelas-</option>
                                                      <option class="select-option minat" value="Akpol">Akpol</option>
                                                        <option class="select-option minat"  value="Akmil">Akmil</option>
                                                          <option class="select-option minat" value="Bintara Polri">Bintara Polri</option>
                                                            <option class="select-option minat" value="Bintara TNI">Bintara TNI</option>
                                                              <option class="select-option minat" value="TAMTAMA">TAMTAMA</option>
                                                        <option class="select-option minat"  value="IPDN">IPDN</option>
                                                          <option class="select-option minat" value="STAN">STAN</option>
                                                            <option class="select-option minat" value="STIS">STIS</option>
                                                                 <option class="select-option minat"  value="STTD">STTD</option>
                                                          <option class="select-option minat" value="STIP">STIP</option>
                                                            <option class="select-option minat" value="POLTEKIM">POLTEKIM</option>
                                                                 <option class="select-option minat"  value="POLTEKIP">POLTEKIP</option>
                                                          <option class="select-option minat" value="STIN">STIN</option>
                                                            <option class="select-option minat" value="STSN">STSN</option>
                                                                 <option class="select-option minat"  value="CPNS">CPNS</option>
                                                          <option class="select-option minat" value="LAINYA">LAINYA</option>
                                                        
                                                             
                                                </select>
                                            </div>
                                            <!-- .form-group -->
                                        </div>  

                                    <!-- .row -->
                                     <div class="form-group" >
                                        <div>Alamat</div>
                                    <textarea class="form-control alamat" rows="3" placeholder="alamat"></textarea>
                                </div>
                                   
          <div class="btn btn-default">
            <a class="submit">Kirim</a>
          </div>
       
                                </form>
                            </div>
                            <!-- .col-md-8 -->
                            <div class="col-md-4">
                                <h3 class="contact-title">Program Info</h3>
                                <hr>
                               <br><br><br>
                                <!-- .contact-address -->
                               <img src="<?php echo base_url();?>assets/images/akademik-class.jpeg">
                            </div>
                            <!-- .col-md-4 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .contact-us -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <script>
    //no wa admin
    $("#noAdmin").val("085258744885");
    $('.whatsapp-btn').click(function () {
      $('#whatsapp').toggleClass('toggle');
    });
    // Onclick Whatsapp Sent!
    $('#whatsapp .submit').click(WhatsApp);
    $("#whatsapp input, #whatsapp textarea").keypress(function () {
      if (event.which == 13) WhatsApp();
    });
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    function WhatsApp() {
      var ph = '';
        if ($('#whatsapp .nama').val() == '') { // Cek Nama
        ph = $('#whatsapp .nama').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .nama').focus();
        return false;
      } else if ($('#whatsapp .nowhatsapp').val() == '') { // Cek Whatsapp
        ph = $('#whatsapp .nowhatsapp').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .nowhatsapp').focus();
        return false;
      } else if ($('#whatsapp .alamat').val() == '') { // Cek Alamat
        ph = $('#whatsapp .alamat').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .alamat').focus();
        return false;
         } else if ($('#whatsapp .email').val() == '') { // Cek Alamat
        ph = $('#whatsapp .email').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .email').focus();
        return false;
         } else if ($('#whatsapp .minat').val() == '') { // Cek Alamat
        ph = $('#whatsapp .minat').attr('value');
        alert('Silahkan pilih kelas ' );
        $('#whatsapp .minat').focus();
        return false;
         } else if ($('#whatsapp .kelas').val() == '') { // Cek Alamat
        ph = $('#whatsapp .kelas').attr('value');
        alert('Silahkan pilih program ' );
        $('#whatsapp .kelas').focus();
        return false;
      } else {
        // Check Device (Mobile/Desktop)
        var url_wa = 'https://api.whatsapp.com/send';
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
          url_wa = 'whatsapp://send/';
        }
        // Get Value
        var tujuan = $('#whatsapp .tujuan').val(),
          via_url = location.href,
          nama = $('#whatsapp .nama').val(),
          nowhatsapp = $('#whatsapp .nowhatsapp').val(),
          alamat = $('#whatsapp .alamat').val();
         minat = $('#whatsapp .minat').val();
         email = $('#whatsapp .email').val();
         kelas = $('#whatsapp .kelas').val();


        $(this).attr('href', url_wa + '?phone=62 ' + tujuan + '&text=Saya mau daftar Bimbel OLC EDUKASI  %0A%0ANama: ' + nama + ' %0ANo. Whatsapp: ' + nowhatsapp + '%0Aemail: '+ email + '%0AAlamat: ' + alamat + '%0AProgram: ' + kelas + '%0AKelas: ' + minat + ' %0A%0Avia ' + via_url);
        var w = 960,
          h = 540,
          left = Number((screen.width / 2) - (w / 2)),
          tops = Number((screen.height / 2) - (h / 2)),
          popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
        popupWindow.focus();
        return false;
      }
    }
  </script>
</body>
</html>
  

 







