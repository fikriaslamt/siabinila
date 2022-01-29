
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

foreach ($skripsi as $skripsii) :
  $tanggal = $skripsii->date;
endforeach;
foreach ($profil as $profil) :
  $angkatan = $profil->angkatan;
  $date1 = new DateTime(substr($profil->angkatan,2)."-07-01");
  $date2 = new DateTime(date('Y-m-d'));
  $interval = $date1->diff($date2);
  $semester = 1 + ((int)$interval->y * 2);
  if($interval->m >= 6){	$semester += 1;}
  $smtr_persen = ($semester/14)*100;
endforeach;

?>

<div class="container-top" style="min-height: 10px!important; box-shadow:none">
  <button style="background-color: #eb211a; float:right"><a style="background-color: #eb211a" href="<?= base_url('Login/logout')?>"><i class="fa fa-sign-out-alt"></i> Logout</a></button><br/>

  <div class="row">

    <div class="atur-kolom">
      <div class="card-counter success">
        <i class="fa fa-users"></i>
        <span class="count-numbers"><?=$angkatan?></span>
        <span class="count-name">Angkatan</span>
      </div>
    </div>

    <div class="atur-kolom">
      <div class="card-counter primary">
      <i class="fas fa-calendar-alt"></i>
        <span class="count-numbers"><?php echo date("Y"); ?></span>
        <span class="count-name">Tahun Saat Ini</span>
      </div>
    </div>


    <div class="atur-kolom">
      <div class="card-counter info">
      <i class="fa fa-journal-whills"></i>
        <span class="count-numbers"><?=$semester?></span>
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
  
  <div style="margin-left: 21px">Semester <?=$semester?>/14</div>
  <div class="meter">
	<span style="width: <?=$smtr_persen?>%"></span>
  </div>

  <?php 
  if (!empty($skripsi)): 
    $datetime1 = date_create($tanggal);
    $datetime2 = date_create(date('Y-m-d'));
    $interval = date_diff($datetime1, $datetime2);
    //$interval->format('%R%a Hari');
    $int_hari = $interval->format('%a');
  ?>
  <div style="margin-left: 21px">Skripsi anda telah berjalan  <b><?= $interval->format('%a');?></b> Hari</div>
    <div class="meter">
    <span style="width: <?= ($int_hari/180)*100?>%"></span>
  </div>
  <?php endif ?>

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