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
                    $nilai = $data["nilai_d1"];
                    echo "Pembimbing 1";
                } else if($data['dospem2']== session()->nama){
                    $sebagai = "Pembimbing 1";
                    $nilai = $data["nilai_d2"];
                    echo "Pembimbing 2";
                } else if($data['penguji_u']== session()->nama){
                    $sebagai = "Penguji Utama";
                    $nilai = $data["nilai_pu"];
                    echo "Penguji Utama";
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
                            <label><b>Masukkan Nilai Sebagai <?=$sebagai?></b></label>
                            <input type="number" max="100" name="nilai" class="form_text" placeholder="Misal: 78" required>

                            <?php if($sebagai == "Pembimbing 1"):?>
                              <label>Masukkan Nilai Hasil Sidang</label>
                              <table style="width: 100%;">
                                <tr>
                                <th colspan="2">Teknik Penyajian</th></tr>
                                <tr>
                                  <td>1.1 Teknik Penyajian</td>
                                <td><input type="number" min="50" max="100" name="pelak11" class="form_text" placeholder="Nilai" required></td>
                                </tr><tr>
                                  <td>1.2 Penguasaan Substansi
                                <td><input type="number" min="50" max="100" name="pelak12" class="form_text" placeholder="Nilai" required></td>
                                </tr>
                                <tr>
                                <th colspan="2">Naskah Skripsi</th></tr>
                                <tr>
                                <tr style="border-top: 1px solid #000 !important;">
                                  <td>2.1 Originilitas
                                <td><input type="number" min="50" max="100" name="naskah21" class="form_text" placeholder="Nilai" required></td>
                                </tr><tr>
                                  <td>2.2 Kegunaan dan kemuktahiran tinjauan pustaka
                                <td><input type="number" min="50" max="100" name="naskah22" class="form_text" placeholder="Nilai" required></td>
                                </tr><tr>
                                  <td>2.3 Teknik Penulisan
                                <td><input type="number" min="50" max="100" name="naskah23" class="form_text" placeholder="Nilai" required></td>
                                </tr>
                              </table><br/>
                            </div>
                            <div class="content">
                            <?php endif ?>

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
