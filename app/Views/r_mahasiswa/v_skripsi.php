<style>
.step-wizard-list {
    background: #fff;
    color: #333;
    list-style-type: none;
    display: flex;
    padding: 10px 0px;
    position: relative;
    z-index: 2;
}

.step-wizard-item {
    padding: 0 10px;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
    min-width: 85px;
    position: relative;
}

.step-wizard-item+.step-wizard-item:after {
    content: "";
    position: absolute;
    left: 0;
    top: 15px;
    background: #21d4fd;
    width: 100%;
    height: 2px;
    transform: translateX(-50%);
    z-index: -10;
}

.progress-count {
    height: 30px;
    width: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: 500;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    color: transparent;
}

.progress-count:after {
    content: "";
    height: 30px;
    width: 30px;
    background: #21d4fd;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -10;
}

.progress-count:before {
    content: "";
    height: 5px;
    width: 10px;
    border-left: 3px solid #fff;
    border-bottom: 3px solid #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -60%) rotate(-45deg);
    transform-origin: center center;
}

.progress-label {
    font-size: 0.9em;
    font-weight: 500;
    margin-top: 6px;
}

.current-item .progress-count:before,
.current-item~.step-wizard-item .progress-count:before {
    display: none;
}

.current-item~.step-wizard-item .progress-count:after {
    height: 10px;
    width: 10px;
}

.current-item~.step-wizard-item .progress-label {
    opacity: 0.5;
}

.current-item .progress-count:after {
    background: #fff;
    border: 2px solid #21d4fd;
}

.current-item .progress-count {
    color: #21d4fd;
}
</style>

<div class="container-top">
    <div class="row">
        <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<?php if (!empty($skripsi)): ?>
<div class="container">
    <ul class="step-wizard-list">
        <li class="step-wizard-item <?= $skripsi[0]["date_judul"] ? "" : "current-item"; ?>">
            <span class="progress-count">1</span>
            <span class="progress-label">Pengajuan Judul</span>
        </li>
        <li class="step-wizard-item <?= $skripsi[0]["date_judul"] ? ($skripsi[0]["date_usul"] ? "" :"current-item") : ""; ?> ">
            <span class="progress-count">2</span>
            <span class="progress-label">Seminar Usul</span>
        </li>
        <li class="step-wizard-item <?= $skripsi[0]["date_usul"] ? ($skripsi[0]["date_hasil"] ? "" :"current-item") : ""; ?>">
            <span class="progress-count">3</span>
            <span class="progress-label">Seminar Hasil</span>
        </li>
        <li class="step-wizard-item <?= $skripsi[0]["date_hasil"] ? ($skripsi[0]["date_kompre"] ? "":"current-item") : ""; ?>">
            <span class="progress-count">4</span>
            <span class="progress-label">Kompre</span>
        </li>
    </ul>
</div>
<?php endif ?>

<div class="container" style="border: 1px solid #005dbb ">
    <div class="content-title text-center">
    <?=$title?>
    </div>
    
    
    <div class="content">
        <?php if (!empty($skripsi)): ?>
        <div class="alert alert-primary">
            <i class="fas fa-chalkboard-teacher" style="display:block; float:right"></i>
            <ul>
            <li>Dosen Pembimbing 1 anda: <?=$skripsi[0]["dospem1"]?></li>
            <?php if (!empty($skripsi[0]["dospem2"])){ ?>
            <li>Dosen Pembimbing 2 anda: <?=$skripsi[0]["dospem2"]?></li>
            <?php } if (!empty($skripsi[0]["penguji_u"])){ ?>
            <li>Dosen Penguji Seminar anda: <?=$skripsi[0]["penguji_u"]?> (Utama); <?=$skripsi[0]["penguji_p"]?></li>
            <?php } ?>
            </ul>
        </div>
        <?php endif ?>

        <?php if (empty($pengajuan) && empty($skripsi)){ ?>
        <div class="alert alert-warning">
        <i class="fas fa-envelope" style="display:block; float:right"></i> 
        <?php if(!empty($notif)):
            echo 'Pengajuan judul skripsi anda ditolak, pesan:<br> "'.$notif[0]["isi_pesan"].'".<br><br>
            Silahkan perbaiki pengajuan judul anda, sebelum mengajukan ulang.';
        else:
            echo "Pengajuan Judul Skripsi Anda Telah disetujui";
        endif;?>
        </div>
        Perhatian :<br/>
        - Pastikan kamu sudah lulus 110 sks sebelum mengajukan skripsi<br/>
        - Pastikan sedang tidak mengambil cuti<br/>
        - Bersungguh-sungguh dalam mengerjakan skripsi<br/><br/>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_judul')?>"><button>Form Pengajuan Judul Skripsi</button></a>

        <?php } else if (!empty($pengajuan) && empty($skripsi)){ ?>
        <div class="alert alert-warning"><i class="fas fa-envelope" style="display:block; float:right"></i>
            Pengajuan Judul Skripsi Anda Sedang Dalam Peninjauan
        </div>

        <?php } else if ($skripsi[0]["status"]=="Judul Disetujui"){ ?>
        <div class="alert alert-warning">
        <i class="fas fa-envelope" style="display:block; float:right"></i> 
        <?php if(!empty($notif)):
            echo $notif[0]["isi_pesan"];
        else:
            echo "Pengajuan Judul Skripsi Anda Telah disetujui";
        endif;?>
        </div>
        
        Langkah Selanjutnya :<br/><br/>
        <ol>
            <li>Unduh PDF Form A.1-Form A.5 dibawah, dan lengkapi data yang masih kosong.</li>
            <li>Mahasiswa mengerjakan skripsi dengan bimbingan Dosen Pembimbing 1/Dosen Pembimbing 2.</li>
            <li>Setelah progres skripsi anda disetujui untuk melaksanakan Seminar Usul Penelitian, silahkan melakukan koordinasi secara mandiri dengan Dosen Pembimbing 1/Pembimbing 2, Dosen Penguji, Mahasiswa Pembahas, dan Moderator untuk menentukan waktu pelaksanaan Seminar Usul Penelitian.</li>
            <li>Perlu diperhatikan bahwa jadwal seminar yang anda tentukan tidak boleh bentrok dengan jam seminar lain yang harinya sama, anda dapat melihat jadwal seminar pada form pengajuan.</li>
            <li>Setelah semuanya siap, klik menu Form Pengajuan Seminar Usul untuk menginformasikan seminar anda kepada jurusan</li>
            
            
        </ol>
        <br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_judul/'.session()->user)?>"><button><i class="fas fa-download"></i> Unduh Form A.1-A.5</button></a>
        <?php if (empty($skripsi[0]["penguji_u"]) && $pengajuan_p == null){ ?>
            <a href="<?= base_url('Mahasiswa/ajukan_penguji/'.session()->user)?>" onclick="javascript:return confirm('Anda yakin sudah siap untuk seminar dan mengajukan penguji seminar?');"><button><i class="fa fa-memo"></i> Ajukan Penguji Seminar</button></a>
        <?php } else if ($pengajuan_p != null){ ?>
            <a><i class="fa fa-memo"></i> Sedang Mengajukan Penguji <i class="fas fa-spinner fa-pulse"></i></a>
        <?php } else { ?>
            <a href="<?= base_url('Mahasiswa/form_pengajuan_usul')?>"><button><i class="fa fa-memo"></i> Form Pengajuan Seminar Usul</button></a>
        <?php }?>

        <?php } else if ($skripsi[0]["status"]=="Mengajukan Seminar Usul"){ ?>
        <div class="alert alert-warning"><i class="fas fa-envelope" style="display:block; float:right"></i>
            Anda sudah mengajukan seminar usul, tunggu sampai seminar anda berjalan<br/>
        </div>
        Langkah Selanjutnya :<br/>
        - Silahkan unduh formulir yang tersedia dibawah<br/>
        - Lengkapi data dan persyaratan yang masih kosong dengan tulis tangan<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_usul/'.session()->user)?>"><button>Unduh PDF Seminar Usul</button></a>

        <?php } else if ($skripsi[0]["status"]=="Seminar Usul Disetujui"){ ?>
        <div class="alert alert-warning"><i class="fas fa-envelope" style="display:block; float:right"></i>
            <?php if(!empty($notif)):
                echo $notif[0]["isi_pesan"];
            else:
                echo "Seminar usul anda telah dinilai dan disetujui";
            endif;?>
        </div>
        Perhatian :<br/>
        - Silahkan unduh formulir seminar terbaru, cukup cetak (Form A.7b) untuk keperluan nilai.<br/>
        - Lanjutkan skripsi anda dan konsultasi dengan Pembimbing.<br/>
        - Setelah selesai menyusun skripsi lengkap dan diizinkan melakukan seminar hasil, silahkan ajukan seminar hasil pada form dibawah.<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_usul/'.session()->user)?>"><button><i class="fas fa-download"></i> Unduh Form A.6-A.7c</button></a>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_hasil')?>"><button>Form Pengajuan Seminar Hasil</button></a>

        <?php } else if ($skripsi[0]["status"]=="Mengajukan Seminar Hasil"){ ?>
        <div class="alert alert-warning"><i class="fas fa-envelope" style="display:block; float:right"></i>
            Anda sudah mengajukan seminar hasil, tunggu sampai seminar anda berjalan<br/>
        </div>
        Langkah Selanjutnya :<br/>
        - Silahkan unduh formulir yang tersedia dibawah<br/>
        - Lengkapi data dan persyaratan yang masih kosong dengan tulis tangan<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_hasil/'.session()->user)?>"><button><i class="fas fa-download"></i> Unduh Form A.8-A.8c</button></a>
       
        <?php } else if ($skripsi[0]["status"]=="Seminar Hasil Disetujui"){ ?>    
        <div class="alert alert-warning"><i class="fas fa-envelope" style="display:block; float:right"></i>
        <?php if(!empty($notif)):
                echo $notif[0]["isi_pesan"];
            else:
                echo "Seminar hasil anda telah dinilai dan disetujui";
            endif;?>
        </div>
        Perhatian :<br/>
        - Silahkan unduh formulir seminar terbaru, cukup cetak (Form A.8b) untuk keperluan nilai.<br/>
        - Lanjutkan skripsi anda dan konsultasi dengan Pembimbing.<br/>
        - Setelah selesai menyusun skripsi lengkap dan diizinkan melakukan sidang skripsi, silahkan ajukan ujian skripsi pada form dibawah.<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_hasil/'.session()->user)?>"><button><i class="fas fa-download"></i> Unduh Form A.8-A.8c</button></a>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_kompre')?>"><button>Form Pengajuan Seminar Kompre</button></a>

        <?php } else if ($skripsi[0]["status"]=="Mengajukan Ujian Skripsi"){ ?>
        <div class="alert alert-warning"><i class="fas fa-envelope" style="display:block; float:right"></i>
            Anda sudah mengajukan Ujian Skripsi, tunggu sampai ujian skripsi anda berjalan anda berjalan<br/>
        </div>
        Langkah Selanjutnya :<br/>
        - Silahkan unduh formulir yang tersedia dibawah<br/>
        - Lengkapi data dan persyaratan yang masih kosong dengan tulis tangan<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_kompre/'.session()->user)?>"><button><i class="fas fa-download"></i> Unduh Form A.9-A.14</button></a>
        
        <?php } else if ($skripsi[0]["status"]=="Telah Lulus Skripsi"){ ?>
        <div class="alert alert-warning"><i class="fas fa-envelope" style="display:block; float:right"></i>
        Anda Telah Lulus Ujian Skripsi
        </div>
        Perhatian :<br/>
        - Silahkan unduh formulir ujian terbaru, cukup cetak (Form A.13b-A.13c) untuk keperluan nilai<br/><br/>
        <a onclick="document.body.classList.add('active')"><button><i class="fas fa-download"></i> Unduh Form A.9-A.14</button></a>
        <?php } ?>
    </div>
    
</div>

<?php if (!empty($skripsi) && $skripsi[0]["status"]=="Telah Lulus Skripsi"){ ?>
<style>

.bungkus {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: -2;
}
.popup {
  opacity: 0;
  visibility: hidden;
  height: clamp(250px,70vh,600px);
  width: clamp(250px,80vw,500px);
  flex-shrink: 0;
  border-radius: 3px;
  position: relative;
  z-index: 3;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.2s ease;
}
.popup-inside {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
  border-radius: 50%;
  box-shadow: 0 0 0 black;
  transition: box-shadow 0.5s ease 0.7s, border-radius 0.35s ease 0.7s;
}
.backgrounds {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}
.background {
  --offset: 0;
  position: absolute;
  left: var(--offset);
  right: var(--offset);
  bottom: var(--offset);
  top: var(--offset);
  background: linear-gradient(to right, #504bff, #4cfa63);
  transform: scale(0);
  transition: all 0.5s ease 0s;
  border-radius: 50%;
}
.background2 {
  --offset: 10%;
  position: absolute;
  left: var(--offset);
  right: var(--offset);
  bottom: var(--offset);
  top: var(--offset);
  background: linear-gradient(to right, #6665ff, #69fa7f);
  transform: scale(0);
  transition: all 0.5s ease 0.1s;
}
.background3 {
  --offset: 20%;
  position: absolute;
  left: var(--offset);
  right: var(--offset);
  bottom: var(--offset);
  top: var(--offset);
  background: linear-gradient(to right, #8583ff, #85fa99);
  z-index: 3;
  transition: all 0.5s ease 0.2s;
}
.background4 {
  --offset: 30%;
  position: absolute;
  left: var(--offset);
  right: var(--offset);
  bottom: var(--offset);
  top: var(--offset);
  background: linear-gradient(to right, #aaaaff, #a7fab7);
  z-index: 3;
  transition: all 0.5s ease 0.3s;
}
.background5 {
  --offset: 40%;
  position: absolute;
  left: var(--offset);
  right: var(--offset);
  bottom: var(--offset);
  top: var(--offset);
  background: linear-gradient(to right, #c9c8ff, #c3fad1);
  z-index: 4;
  transition: all 0.5s ease 0.4s;
}
.background6 {
  --offset: 40%;
  position: absolute;
  left: var(--offset);
  right: var(--offset);
  bottom: var(--offset);
  top: var(--offset);
  background: white;
  z-index: 5;
  border-radius: 10px;
  transition: all 0.8s ease 0.4s;
}
.pop-content {
  --offset: 0;
  position: absolute;
  left: var(--offset);
  right: var(--offset);
  bottom: var(--offset);
  top: var(--offset);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  padding: 10px;
  transition: all 0.35s ease 0.75s;
  z-index: 10;
}
.pop-content-wrapper {
  position: relative;
  display:block;
  text-align: center;
}
body.active .pop-content {
  opacity: 1;
  transform: none;
}
body.active .bungkus {z-index: 3;}
body.active .popup {
  opacity: 1;
  visibility: visible;
}
body.active .popup-inside {
  border-radius: 0;
  box-shadow: -50px 0 200px -50px #504bff, 50px 0 200px -50px #4cfa63;
}
body.active .background {
  transform: scale(1);
}
body.active .background6 {
  transform: scale(8);
}
</style>
<div class="bungkus">
    <div class="popup">
    <div class="popup-inside">
    <div class="backgrounds">
    <div class="background"></div>
    <div class="background background2"></div>
    <div class="background background3"></div>
    <div class="background background4"></div>
        <div class="background background5"></div>
        <div class="background background6"></div>
        </div>
        </div>
        <div class="pop-content">
        <div class="pop-content-wrapper">
            <h1>Langkah terakhir</h1>
            <p>Selamat ya, anda telah menyelesaikan skipsi, dengan menekan tombol konfirmasi, anda akan mengunduh Form A.9-A.14 dan akun anda akan terhapus secara permanen.</p>
            <br/><br/>
            <p>
                <a class="btn" href="<?= base_url('Mahasiswa/hapus_akun/'.session()->user)?>">Ya, Konfirmasi</a> | <a href="javascript:void(0)" class="btn btn-merah" onclick="document.body.classList.remove('active')">Batal</a>
            </p>
        </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
<?php } ?>