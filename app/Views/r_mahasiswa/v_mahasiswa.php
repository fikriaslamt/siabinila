
<?php
date_default_timezone_set("Etc/GMT-7");
$jam = ((int)date("H"));
$waktu = "";
if ($jam > 3 and $jam <=9){
	$waktu = "Pagi";
} else if($jam>9 and $jam <=14){
	$waktu = "Siang";
} else if($jam>14 and $jam <=17){
	$waktu = "Sore";
} else { $waktu = "Malam"; }
?>

<div class="container-top" style="min-height: 10px!important; box-shadow:none">
  <button style="background-color: #eb211a; float:right"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>">Logout <i class="fa fa-sign-out-alt"></i></a></button><br/>

  <div class="row">

    <div class="atur-kolom">
      <div class="card-counter success">
        <i class="fa fa-users"></i>
        <span class="count-numbers">2019</span>
        <span class="count-name">Ankatan</span>
      </div>
    </div>

    <div class="atur-kolom">
      <div class="card-counter primary">
      <i class="fa fa-database"></i>
        <span class="count-numbers"><?php echo date("Y"); ?></span>
        <span class="count-name">Tahun Saat Ini</span>
      </div>
    </div>


    <div class="atur-kolom">
      <div class="card-counter info">
      <i class="fa fa-book-open"></i>
        <span class="count-numbers">6</span>
        <span class="count-name">Semester Saat Ini</span>
      </div>
    </div>

    <div class="atur-kolom">
      <div class="card-counter primary">
        <i class="fa fa-users"></i>
        <span class="count-numbers">0</span>
        <span class="count-name">Bimbingan</span>
      </div>
    </div>

  </div>

</div>

<div class="container">

  <h2><?php echo "Selamat ".$waktu.", ".session()->get('nama') ?></h2>
  
  <div style="margin-left: 21px">Semester <b>6/14</b></div>
  <div class="meter">
	<span style="width: 42%"></span>
  </div>
  <div style="margin:11px; font-size: 20px;"> 
  Skripsi anda telah berjalan 
  <?php 
  $datetime1 = date_create('2019-07-11');
  $datetime2 = date_create('2019-10-13');
  $interval = date_diff($datetime1, $datetime2);

  echo $interval->format('%R%a Hari');
  ?>
  </div>

</div>
<div class="container">
  <h3>Formulir Akademik</h3>
  <div class="row">

    
      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pengajuan_judul')?>">
          <div class="card-counter success">Formulir Pengajuan Judul Skripsi </div>
        </a>
      </div>
   
      

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pengajuan_usul')?>">
            <div class="card-counter success">Formulir Seminar Usul </div>
        </a>
      </div>


      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pengajuan_hasil')?>">
          
            <div class="card-counter success">Formulir Seminar Hasil</div>
          
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pengajuan_kompre')?>">
          
            <div class="card-counter success">Formulir Ujian Komprehensif</div>
          
        </a>
      </div>

      

    </div>

</div>