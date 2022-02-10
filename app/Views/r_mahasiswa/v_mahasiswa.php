
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

<div class="container-top">
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
        <span class="count-numbers">Aktif</span>
        <span class="count-name">Status</span>
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

<?php if ($semester >= 6): ?>
<a href="<?= base_url('Mahasiswa/skripsi')?>">
  <div class="container btn-skripsi">
  <i class="fas fa-book"></i> Menu Pengerjaan Skripsi
  </div>
</a>
<?php endif ?>

<div class="container">
  <h3>Formulir UKT</h3>
  <div class="row">

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pembayaran_keterlambatan_ukt')?>">
          <div class="card-counter success">Form Permohonan Pembayaran Keterlambatan UKT PS ABI Fisip Unila </div>
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_kehilangan_ukt')?>">
            <div class="card-counter success">Form Permohonan Kehilangan UKT PS ABI Fisip Unila </div>
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_keringanan_ukt')?>">
          
            <div class="card-counter success">Form Permohonan Keringanan UKT PS ABI Fisip Unila</div>
          
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pembebasan_ukt')?>">
          
            <div class="card-counter success">Form Permohonan Pembebasan UKT PS ABI Fisip Unila</div>
          
        </a>
      </div>
      
      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_keringanan_ukt_50')?>">
          
            <div class="card-counter success">Form Permohonan Keringanan UKT 50% PS ABI Fisip Unila</div>
          
        </a>
      </div>

  </div>
</div>

<div class="container">
  <h3>Formulir Skripsi</h3>
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

<div class="container">
  <h3>Formulir Akademik</h3>
  <div class="row">

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_masih_aktif_kuliah')?>">
          <div class="card-counter success">Form Keterangan Masih Aktif Kuliah PS ABI Fisip Unila</div>
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_keterangan_beasiswa')?>">
            <div class="card-counter success">Form Keterangan Beasiswa PS ABI Fisip Unila</div>
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_permohonan_cuti_kuliah')?>">
          
            <div class="card-counter success">Form Permohonan Cuti Kuliah PS ABI Fisip Unila</div>
          
        </a>
      </div>

      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_studi_terbimbing')?>">
          
            <div class="card-counter success">Form Permohonan Studi Terbimbing PS ABI Fisip Unila</div>
          
        </a>
      </div>
      
      <div class="atur-kolom-ka">
        <a href="<?= base_url('Mahasiswa/form_pindah_kuliah')?>">
          
            <div class="card-counter success">Form Permohonan Pindah Kuliah PS ABI Fisip Unila</div>
          
        </a>
      </div>

  </div>
</div>