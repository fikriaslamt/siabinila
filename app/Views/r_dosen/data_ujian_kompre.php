<style>
.container{
  width: 90%;
}
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
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 45px auto;
  margin-top: 3vw;
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
  max-height: 65vh;
  overflow: auto;
}

@media screen and (max-width: 1100px){
  .box{
    width: 50%;
  }
  .popup{
    width: 50%;
    padding: 15px;
  }
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
    padding: 12px;
  }
}
@media screen and (max-width: 500px){
  .container{
    width: 99%;
  }
  .box{
    width: 95%;
  }
  .popup{
    width: 95%;
    padding: 5px;
  }
}
</style>
<div class="container">
  <div class="row">
    <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>     
  </div>
</div>

<H2 style="text-align:center">Data Pengajuan Ujian Komprehensif</H2>
<div class="container dosen h-scroll-l">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
                <th scope="col">NPM/Nama</th>
                <th scope="col">Judul</th>
                <th scope="col">Anda Sebagai</th>
                <th scope="col">Tindakan</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $data) : ?>
            <tr>
                <td><?=$data['npm'];?> <?=$data['nama'];?></td>
                <td><?= $data['judul']; ?></td>
                <td>
                <?php if($data['dospem1']== session()->nama){
                    $sebagai = "Pembimbing 1";
                    $nilai = ($data["nilai_d1"] + $data["nilai_d1t"]) / 2;
                    echo "Pembimbing 1";
                } else if($data['dospem2']== session()->nama){
                    $sebagai = "Pembimbing 1";
                    $nilai = ($data["nilai_d2"] + $data["nilai_d2t"]) / 2;
                    echo "Pembimbing 2";
                } else if($data['penguji_u']== session()->nama){
                    $sebagai = "Penguji 1";
                    $nilai = ($data["nilai_pu"] + $data["nilai_ppt"]) / 2;
                    echo "Penguji 1";
                } else if($data['penguji_p']== session()->nama){
                  $sebagai = "Penguji 2";
                  $nilai = ($data["nilai_pp"] + $data["nilai_ppt"]) / 2;
                  echo "Penguji 2";
              }
                ?>
                </td>
                <td>
                    <!-- <a href="<?= base_url('Dosen/terima_kompre/'.$data["npm"])?>"><button class="btn btn-success btn-sm">TERIMA</button></a> -->
                    <?php if($nilai != 0){ ?>
                    <i class="fas fa-check" style="color:green; font-size:110%"></i> <?=$nilai?>
                    <?php } else if($nilai == 0){?>  
                    <a href="#nilai<?= $data['npm']; ?>"><button>Beri Nilai</button></a>
                    <a href="<?= base_url('Dosen/tolak_kompre/'.$data["npm"])?>"><button class="btn-merah">Tolak</button></a>

                    <div id="nilai<?= $data['npm']; ?>" class="overlay">
                        <div class="popup">
                            <h2>Nilai Ujian Skripsi</h2>
                            <a class="close" href="#">&times;</a>
                            <div class="content">
                              <form action="<?= base_url('Dosen/terima_kompre/'.$data["npm"])?>" method="post">
                              <label>"<?= $data['judul']; ?>"</label><br/><br/>

                              <label>Masukkan Nilai Hasil Sidang</label><br><br>
                              <table style="width: 100%;">
                                <tr>
                                  <td>1. Teknik Penyajian</td>
                                <td><input type="number" min="50" max="100" name="nilai1" id="nilai1" oninput="myFunction()" class="form_text" placeholder="Nilai" value="0"required></td>
                                </tr>
                                <tr>
                                <tr style="border-top: 1px solid #000 !important;">
                                  <td>2. Naskah Skripsi</td>
                                <td><input type="number" min="50" max="100" name="nilai2" id="nilai2" oninput="myFunction()" class="form_text" placeholder="Nilai" value="0" required></td>
                                </tr>
                              </table><br/>
                              <div id="jumlah" style="text-align:right;">Jumlah Nilai: 0</div>
                              <div id="mean"   style="text-align:right;">Nilai Rata-rata: 0</div>
                            </div>

                            <div class="content">
                            <input type="text" name="sebagai" value="<?=$sebagai?>" hidden required>
                            <input type="submit" class="tombol_submit" value="Konfirmasi Nilai">
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </td>
                
            <?php endforeach; ?>
        </tbody>
    </table> 
</div>

<script>
function myFunction() {
  var x = parseInt(document.getElementById("nilai1").value);
  var y = parseInt(document.getElementById("nilai2").value);
  let jumlah = x + y;
  let mean = jumlah/2;
  document.getElementById("jumlah").innerHTML = "Jumlah Nilai: " + jumlah;
  document.getElementById("mean").innerHTML = "Nilai Rata-rata : " + mean;
}
</script>