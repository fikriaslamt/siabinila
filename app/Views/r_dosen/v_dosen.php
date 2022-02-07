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

$bimbing = 0;
foreach ($skripsi as $skrip) :
  $bimbing++;
endforeach

?>

<div class="container">

  <h2><?php echo "Selamat ".$waktu.", ".session()->get('nama') ?></h2>
  
  <div class="content alert">
  Bimbingan Skripsi: <b><?=$bimbing?></b> Mahasiswa Bimbingan
  </div>

</div>
<div class="container">
  <h3>Skripsi Bimbingan</h3>
  <div class="row">
  
    <?php if (!empty($skripsi)): ?>
    <div class="atur-kolom-ka">
    <a href="<?= base_url('Dosen/data_skripsi')?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">DATA SKRIPSI</span>
      </div>
    </a>
    </div>
    <?php endif ?>

    <?php if (!empty($usul)): ?>
    <div class="atur-kolom-ka">
    <a href="<?=base_url("Dosen/data_pengajuan_usul")?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">PENGAJUAN USUL</span>
      </div>
    </a>
    </div>
    <?php endif ?>
    
    <?php if (!empty($hasil)): ?>
    <div class="atur-kolom-ka">
    <a href="<?= base_url('Dosen/data_pengajuan_hasil')?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">PENGAJUAN HASIL</span>
      </div>
    </a>
    </div>
    <?php endif ?>

    <?php if (!empty($kompre)): ?>
    <div class="atur-kolom-ka">
    <a href="<?= base_url('Dosen/data_pengajuan_kompre')?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">PENGAJUAN KOMPRE</span>
      </div>
    </a>
    </div>
    <?php endif ?>

    

</div>
    

</div>



   