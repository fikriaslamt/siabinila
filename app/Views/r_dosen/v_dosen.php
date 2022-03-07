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
  Bimbingan Skripsi: <b><?=$bimbing?></b> Mahasiswa Bimbingan <?php if($bimbing!=0):?><a href="<?= base_url('Dosen/data_skripsi')?>"><i class="fa fa-eye">Lihat</i></a><?php endif?>
  </div>

</div>
<div class="container dosen h-scroll-l">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <td colspan="6"><b>Jadwal Seminar</b></td>
      </tr>
      <tr>
          <th scope="col">NPM/Nama</th>
          <th scope="col">Judul</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Jenis</th>
          <th scope="col">Anda Sebagai</th>
          <th scope="col"><i class="fa fa-cog"></i></th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($usul)): ?>
      <?php foreach ($usul as $usul) : ?>
      <tr>
        <td><?= $usul['npm']; ?><br/><?= $usul['nama']; ?></td>
        <td><?= $usul['judul']; ?></td>
        
        <td><?= $usul['tanggal']; ?><br/><br/><?= $usul['jam']; ?></td>
        <td>Seminar Usul</td>
        <td>
        <?php if($usul['dospem1']== session()->nama){
          $nilai = $usul["nilai_d1"];
          echo "Pembimbing 1";
        } else if($usul['dospem2']== session()->nama){
          $nilai = $usul["nilai_d2"];
          echo "Pembimbing 2";
        } else if($usul['penguji_u']== session()->nama){
          $nilai = $usul["nilai_pu"];
          echo "Penguji Utama";
        }
        ?>
        </td>
        <td>
          <?php if($nilai==0):?>
          <a class="btn" href="<?= base_url('Dosen/data_pengajuan_usul')?>">Lihat</a>
          <?php else:?>
          <i class="fas fa-check" style="color:green; font-size:110%"></i> <?=$nilai?>
          <?php endif ?>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif ?>
      <?php if (!empty($hasil)): ?>
      <?php foreach ($hasil as $hasil) : ?>
      <tr>
        <td><?= $hasil['npm']; ?><br/><?= $hasil['nama']; ?></td>
        <td><?= $hasil['judul']; ?></td>
        <td><?= $hasil['tanggal']; ?><br/><br/><?= $hasil['jam']; ?></td>
        <td>Seminar hasil</td>
        <td>
        <?php if($hasil['dospem1']== session()->nama){
          $nilai = $hasil["nilai_d1"];
          echo "Pembimbing 1";
        } else if($hasil['dospem2']== session()->nama){
          $nilai = $hasil["nilai_d2"];
          echo "Pembimbing 2";
        } else if($hasil['penguji_u']== session()->nama){
          $nilai = $hasil["nilai_pu"];
          echo "Penguji Utama";
        }
        ?>
        </td>
        <td>
          <?php if($nilai==0):?>
          <a class="btn" href="<?= base_url('Dosen/data_pengajuan_hasil')?>">Lihat</a>
          <?php else:?>
          <i class="fas fa-check" style="color:green; font-size:110%"></i> <?=$nilai?>
          <?php endif ?>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif ?>
      <?php if (!empty($kompre)): ?>
      <?php foreach ($kompre as $kompre) : ?>
      <tr>
        <td><?= $kompre['npm']; ?><br/><?= $kompre['nama']; ?></td>
        <td><?= $kompre['judul']; ?></td>
        <td><?= $kompre['tanggal']; ?><br/><br/><?= $kompre['jam']; ?></td>
        <td>Ujian Kompre</td>
        <td>
        <?php if($kompre['dospem1']== session()->nama){
          $nilai = $kompre["nilai_d1"];
          echo "Pembimbing 1";
        } else if($kompre['dospem2']== session()->nama){
          $nilai = $kompre["nilai_d2"];
          echo "Pembimbing 2";
        } else if($kompre['penguji_u']== session()->nama){
          $nilai = $kompre["nilai_pu"];
          echo "Penguji Utama";
        }
        ?>
        </td>
        <td>
          <?php if($nilai==0):?>
          <a class="btn" href="<?= base_url('Dosen/data_pengajuan_kompre')?>">Lihat</a>
          <?php else:?>
            <i class="fas fa-check" style="color:green; font-size:110%"></i> <?=$nilai?>
          <?php endif ?>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif ?>
      <?php if (empty($usul) && empty($hasil)): ?>
      <tr>
        <td colspan="6">
          Tidak Ada Jadwal Seminar
        </td>
      </tr>
      <?php endif ?>

    </tbody>
  </table> 
    
</div>



   