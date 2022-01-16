
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
  <button style="background-color: #eb211a; float:right"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>">Logout &rarr;</a></button><br/>

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
        <span class="count-numbers">6</span>
        <span class="count-name">Semester</span>
      </div>
    </div>


    <div class="atur-kolom">
      <div class="card-counter info">
      <i class="fa fa-book-open"></i>
        <span class="count-numbers">2</span>
        <span class="count-name">Jadwal</span>
      </div>
    </div>

    <div class="atur-kolom">
      <div class="card-counter primary">
        <i class="fa fa-users"></i>
        <span class="count-numbers">1</span>
        <span class="count-name">Bimbingan</span>
      </div>
    </div>

  </div>

</div>

<div class="container">

  <h2><?php echo "Selamat ".$waktu.", ".session()->get('nama') ?></h2>
  

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
        <a href="<?= base_url('Mahasiswa/form_pengajuan_judul')?>">
          <div class="card-counter primary">   
            <span class="count-name">Formulir Seminar Usul </span>
          </div>
        </a>
      </div>


      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pengajuan_judul')?>">
          <div class="card-counter info">
            <span class="count-name">Formulir Seminar Hasil</span>
          </div>
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pengajuan_judul')?>">
          <div class="card-counter primary">
            <span class="count-name">Formulir Ujian Komprehensif</span>
          </div>
        </a>
      </div>

      

    </div>

</div>