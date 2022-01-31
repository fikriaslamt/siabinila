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

<div class="container-top" style="min-height: 10px!important; box-shadow:none">
  <button style="background-color: #eb211a; float:right"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>"><i class="fa fa-sign-out-alt"></i> Logout</a></button><br/>
</div>

<div class="container">

  <h2><?php echo "Selamat ".$waktu.", ".session()->get('nama') ?></h2>
  
  <div class="content alert">
  Bimbingan Skripsi: <b><?=$bimbing?></b> Mahasiswa Bimbingan
  </div>

</div>
<div class="container">
  <h3>Akademik</h3>
  <div class="row">
  
    <div class="atur-kolom-ka">
    <a href="<?= base_url('Dosen/data_skripsi')?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">DATA SKRIPSI</span>
      </div>
    </a>
    </div>

    <div class="atur-kolom-ka">
    <a href="<?= base_url('Dosen/data_pengajuan_hasil')?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">DATA HASIL</span>
      </div>
    </a>
    </div>

    <div class="atur-kolom-ka">
    <a href="<?= base_url('Dosen/data_pengajuan_kompre')?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">DATA KOMPRE</span>
      </div>
    </a>
    </div>

    <div class="atur-kolom-ka">
    <a href="<?=base_url("Dosen/data_pengajuan_usul")?>">
      <div class="card-counter info">
       <i  class="fa fa-book-open"></i>
        <span class="count-name">DATA USUL</span>
      </div>
    </a>
    </div>

</div>
    

</div>



   