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
endforeach;

$nilai = 80;
?>
<style>
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
  z-index: 99;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all .5s ease-in-out;
}
.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .container{
  width: 98%;
  }
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
</style>

<div class="container">

  <h2 style="margin-left: 17px"><?php echo "Selamat ".$waktu.", ".session()->get('nama') ?></h2>
  
  <div style="margin-left: 13px" class="content">
    <div style="display: block; width: 150px; float:left">Bimbingan Skripsi</div>: <?= $bimbing != 0 ? '<a href="Dosen/data_skripsi"><i class="fa fa-eye"></i> <b>'.$bimbing.'</b> Mahasiswa</a>':"0 Mahasiswa" ?>
    <br/>
    <div style="display: block; width: 150px; float:left">Penguji Skripsi</div>: <?= count($uji)!=0 ? '<a href="#list_uji"><i class="fa fa-eye"></i> <b>'.count($uji).'</b> Mahasiswa</a>':"0 Mahasiswa" ?>
    <!--<b><?=count($uji)?></b> Mahasiswa <?php if(count($uji)!=0):?><a href="#list_uji"><i class="fa fa-eye">Lihat</i></a><?php endif?>-->

      <div id="list_uji" class="overlay">
          <div class="popup">
              <h2>Daftar Mahasiswa</h2>
              <a class="close" href="#">&times;</a>
              <div class="content">
              <?php 
              $hit = 0;
              foreach ($uji as $uji) : 
                echo ++$hit.". [ ".$uji["npm"]." ] <br>".$uji["nama"]."<br/>";
              endforeach ?>
              </div>
          </div>
      </div>

  </div>

</div>
<div class="container dosen h-scroll-l">
  <table>
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
          echo "Penguji 1";
        } else if($usul['penguji_p']== session()->nama){
          $nilai = $usul["nilai_pp"];
          echo "Penguji 2";
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
          echo "Penguji 1";
        } else if($hasil['penguji_p']== session()->nama){
          $nilai = $hasil["nilai_pp"];
          echo "Penguji 2";
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
          $nilai = ($kompre["nilai_d1"] + $kompre["nilai_d1t"]) / 2;
          echo "Pembimbing 1";
        } else if($kompre['dospem2']== session()->nama){
          $nilai = ($kompre["nilai_d2"] + $kompre["nilai_d2t"]) / 2;
          echo "Pembimbing 2";
        } else if($kompre['penguji_u']== session()->nama){
          $nilai = ($kompre["nilai_pu"] + $kompre["nilai_put"]) / 2;
          echo "Penguji 1";
        } else if($kompre['penguji_p']== session()->nama){
          $nilai = ($kompre["nilai_pp"] + $kompre["nilai_ppt"]) / 2;
          echo "Penguji 2";
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
      <?php if (empty($usul) && empty($hasil) && empty($kompre)): ?>
      <tr>
        <td colspan="6">
          Tidak Ada Jadwal Seminar
        </td>
      </tr>
      <?php endif ?>

    </tbody>
  </table> 
    
</div>



   