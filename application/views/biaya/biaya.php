<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    
    @import url(https://fonts.googleapis.com/css?family=Lato:400,700);

body {
  background: #F2F2F2;
  padding: 0;
  maring: 0;
}

#price {
  background: #F2F2F2;
  text-align: center;
}

.plan {
  display: inline-block;
  margin: 10px 1%;
  font-family: 'Lato', Arial, sans-serif;
}

.plan-inner {
  background: #fff;
  margin: 0 auto;
  min-width: 380px;
  max-width: 100%;
  position:relative;
}

.entry-title {
  background: #53CFE9;
  height: 140px;
  position: relative;
  text-align: center;
  color: #fff;
  margin-bottom: 30px;
}

.entry-title>h3 {
  background: #20BADA;
  font-size: 20px;
  padding: 5px 0;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0;
}

.entry-title .price {
  position: absolute;
  bottom: -25px;
  background: #20BADA;
  height: 95px;
  width: 95px;
  margin: 0 auto;
  left: 0;
  right: 0;
  overflow: hidden;
  border-radius: 50px;
  border: 5px solid #fff;
  line-height: 80px;
  font-size: 28px;
  font-weight: 700;
}

.price span {
  position: absolute;
  font-size: 9px;
  bottom: -10px;
  left: 30px;
  font-weight: 400;
}

.entry-content {
  color: #323232;
}

.entry-content ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}

.entry-content li {
  border-bottom: 1px solid #E5E5E5;
  padding: 10px 0;
}

.entry-content li:last-child {
  border: none;
}

.btn {
  padding: 3em 0;
  text-align: center;
}

.btn a {
  background: #323232;
  padding: 10px 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 700;
  text-decoration: none
}
.hot {
    position: absolute;
    top: -7px;
    background: #F80;
    color: #fff;
    text-transform: uppercase;
    z-index: 2;
    padding: 2px 5px;
    font-size: 9px;
    border-radius: 2px;
    right: 10px;
    font-weight: 700;
}
.basic .entry-title {
  background: #75DDD9;
}

.basic .entry-title > h3 {
  background: #44CBC6;
}

.basic .price {
  background: #44CBC6;
}

.standard .entry-title {
  background: #4484c1;
}

.standard .entry-title > h3 {
  background: #3772aa;
}

.standard .price {
  background: #3772aa;
}

.ultimite .entry-title > h3 {
  background: #DD4B5E;
}

.ultimite .entry-title {
  background: #F75C70;
}

.ultimite .price {
  background: #DD4B5E;
}








/* DIRTY Responsive pricing table CSS */

/* 
- make mobile switch sticky
*/

article {
  width:100%;
  max-width:1200px;
  margin:0 auto;
  height:1000px;
  position:relative;
}


table {
 
  border-spacing: 0;
  width: 100%;
  border: 1px solid black;
}

th, td {
  text-align: center;
  padding: 8px;
border: 1px solid #0097CF;
}
tr{

}
.bg-purple {
  border-top:3px solid #A32362;
}
.bg-blue {
  border-top:3px solid #0097CF;
}


  </style>
</head>
<body>




<div id="price">
  <br>
  <br>
  <h2 style="color: black">Biaya Program Hemat </h2>
   <br>  <br>
  <!--price tab-->
  <div class="plan">
    <div class="plan-inner">
      <div class="entry-title">
        <h3 style="color: white">PSIKO CLASS</h3>
        
        <h2><em><strike>Rp. 2.000.000,-</strike></em></h2>
        <h2>Rp. 1.500.000,-</h2>
        <br>
      </div>
      <div class="entry-content">
        <ul>
          <li><b>10x </b>Sesi Bimbingan/li>
          <li><b>5x </b>Try Out</li>
          <li>Simulasi Psikotes</li>
          <li>Hasil Tes Psikolog</li>
          <li>Latihan Kesehatan Kebugaran</li>
           <li>Modul Psikotes Khusus</li>
          <li>Free Ebook</li>
          <li>Group Diskusi Online</li>
          <li> <b>Materi : </b><br>Tes Kecermatan,<br>Tes Kepribadian,Tes Kepribadian<br>PMK/MI</li>

        </ul>
      </div>
      <div class="btn">
        <a href="<?php echo base_url('daftar') ?>">Daftar Sekarang</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan basic">
    <div class="plan-inner">
      <div class="hot">hot</div>
      <div class="entry-title">
      <h3 style="color: white">AKADEMIK CLASS</h3>
  
        <h2><em><strike>Rp. 3.000.000,-</strike></em></h2>
        <h2>Rp. 2.500.000,-</h2>
      </div>
      <div class="entry-content">
        <ul>
           <li><b>15x</b> Sesi Bimbingan</li>
          <li><b>5x </b>Try Out</li>
          <li><b>2x</b> Tes Kebugaran</li>
          <li><b>1x</b> Tes Psikolog</li>
           <li>Modul Belajar</li>
          <li>Free Ebook</li>
          <li>Group Diskusi Online</li>
          <li>-</li>
           <li> <b>Materi : </b><br>Matematika, Bahasa Inggris, Bahasa Indonesia, <br>Pengetahuan Umum dan UU Kepolisian<br> TPA,TKD,SKD,SKB </li>
          
        </ul>
      </div>
      <div class="btn">
        <a href="<?php echo base_url('daftar') ?>">Daftar Sekarang</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
  <div class="plan standard">
    <div class="plan-inner">
      <div class="entry-title">
        <h3 style="color: white">KESAMPTAAN CLASS</h3>
     
        <h2><em><strike>Rp. 1.000.000,-</strike></em></h2>
     
        <h2>Rp. 750.000,-</h2>
      </div>
      <div class="entry-content">
        <ul>
            <li></li>
           <br>
               
          <li><p style="font-size: 19pt"> Bimbingan<br> dan pelatihan Setiap Hari<br> Dibimbing Oleh <br>Anggota TNI/POLRI<br> Berlangsung Selama 1 Bulan</p></li>
          <li><p style="font-size: 15pt"><b>Latihan : </b> <br>Lari,Renang, Push up, <br>Sit up,Pull up, Shuttle run</p></li>
          <br>
         <br>
        </ul>
      </div>
      <div class="btn">
         <a href="<?php echo base_url('daftar') ?>">Daftar Sekarang</a>
      </div>
    </div>
  </div>
<hr>


   <br>
    <br>

<h2 style="color: black">Biaya Program Super Class </h2>
   <br>  <br>
  <!--price tab-->
  <div class="plan">
    <div class="plan-inner">
      <div class="entry-title">
        <h3 style="color: white">Program  Silver</h3>
        
        <h2><em><strike>Rp. 4.000.000,-</strike></em></h2>
        <h2>Rp. 3.600.000,-</h2>
        <br>
      </div>
      <div class="entry-content">
        <ul>
        <li>Jaminan lulus Tes Potensi Akademik</li>
<li>Bisa pilih 2 program tanpa tambahan biaya</li>
<li><b>6x</b> seminggu selama 4 bulan</li>
<li>Siswa perkelas hanya 6 orang </li>
<li>Pelatihan fisik selama 2 bulan</li>
<li>Gratis konsultasi Akademik / Psikologi</li>
<li>Gratis E-Book “Cara jitu lulus psikotes”</li>
<li> <b> Materi</b> <br>Bimbingan Akademik<br>
Bimbingan Psikotes<br>
Bimbingan Kesamaptaan</li>
        </ul>
      </div>
      <div class="btn">
        <a href="<?php echo base_url('daftar') ?>">Daftar Sekarang</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
   <div style="margin-top: 50px;" class="plan standard">
    <div class="plan-inner">
      <div class="hot">hot</div>
      <div class="entry-title">
        <h3 style="color: white">Program Platinum</h3>
     
        <h2><em><strike>Rp. 8.000.000,-</strike></em></h2>
     
        <h2>Rp. 7.200.000,-</h2>
      </div>
      <div class="entry-content">
        <ul>
            <li>-Jaminan lulus Tes Potensial Akademik </li>
            <li>Jamina lulus tes psikologi/psikotes</li>
            <li>Jaminan lulus tes fisik/ kesamaptaan</li>
            <li>Bisa pilih 2 program tanpa tambahan biaya</li> 
            <li><b>6x</b> seminggu selama 10 bulan</li>
            <li>Siswa perkelas hanya 5 orang</li>
            <li>Pelatihan fisik selama 6 bulan</li>
            <li>Gratis konsultasi Akademik / psikologi</li>
            <li>Gratis E-Book “Cara jitu lulus psikotes”</li>
            <li> <b> Materi</b> <br>Bimbingan Akademik<br>Bimbingan Psikotes<br>Bimbingan Kesamaptaan</li>          
        </ul>
      </div>
      <div class="btn">
         <a href="<?php echo base_url('daftar') ?>">Daftar Sekarang</a>
      </div>
    </div>
  </div>

  <div class="plan basic">
    <div class="plan-inner">
      
      <div class="entry-title">
      <h3 style="color: white">Program Gold</h3>
  
        <h2><em><strike>Rp. 7.000.000,-</strike></em></h2>
        <h2>Rp. 6.200.000,-</h2>
      </div>
      <div class="entry-content">
        <ul>
          <li>Jaminan lulus Tes Potensial Akademik</li>
          <li>Bisa pilih 2 program tanpa tambahan biaya</li>
          <li><b>6x</b> seminggu selama 7 bulan </li>
          <li>Siswa perkelas hanya 5 orang</li>
          <li>Pelatihan fisik selama 4 bulan</li>
          <li>Gratis konsultasi Akademik / psikologi</li>
          <li>Gratis E-book “Cara jitu lulus psikotes”</li>
          <li> <b> Materi</b> <br>Bimbingan Akademik<br>Bimbingan Psikotes<br>Bimbingan Kesamaptaan</li>
          
        </ul>
      </div>
      <div class="btn">
        <a href="<?php echo base_url('daftar') ?>">Daftar Sekarang</a>
      </div>
    </div>
  </div>
  <!-- end of price tab-->
  <!--price tab-->
 


















<article style="overflow-x:auto;">
<br> <br>

  <h2 style="color: black">Tabel Biaya Insentive Class</h2>
   <br>  <br>
<table style="background-color: white; border: 1px solid black;" >
  <thead style="border: 1px solid black;">
    <tr>
      <th class="bg-blue" style="background: #f7f7f7"> Program </th>
       <th class="bg-blue" style="background: #f7f7f7"> Materi </th>
      <th class="bg-purple" style="background: #f7f7f7">Jumlah</th>
      <th class="bg-blue"style="background: #f7f7f7">Paket Intensif Sabtu-Minggu</th>
      <th class="bg-purple" style="background: #f7f7f7">Paket Intensif Senin-Kamis</th>
      <th class="bg-blue" style="background: #f7f7f7">Paket Intensif Senin-sabtu</th>
    </tr>
  </thead>
  <tbody class="bg-blue">
 
    <tr class="bg-blue">
      <td rowspan="3"><p>STAN<br>
        STIS<br>STIN<br>STSN<br>STMKG<br>DEPHUB<br>AKMIL<br>AKPOL<br>POLTEKIM<br>POLTEKIP</p></td>
        <td rowspan="3">Bimbingan Akademik<br>
Bimbingan Psikotes<br>
Bimbingan Kesamaptaan</td>
  <td >5 SISWA </td>
   <td>@ 500.000 </td>
    <td>@ 900.000 </td>
      <td>@ 1.080.000</td>

    </tr>
      <tr class="bg-purple">
         
  <td>3 SISWA </td>
   <td>@ 600.000</td>
    <td>@ 2.500.000 </td>
      <td>@ 3.625.000 </td>

    </tr>
         <tr class="bg-blue">

  <td>1 SISWA </td>
   <td>@ 1.500.000 </td>
    <td>@ 3.600.000</td>
      <td>@ 5.200.000 </td>

    </tr>
  </tbody>
</table>
</article>
</div>

</body>
</html>