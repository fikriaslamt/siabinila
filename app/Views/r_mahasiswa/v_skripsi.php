<div class="container-top">
    <div class="row">
        <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<div class="container" style="border: 1px solid #005dbb ">
    <div class="content-title text-center">
    <?=$title?>
    </div>
    
    
    <div class="content">
        <?php if (!empty($notif)){ ?>
        <div class="alert">
        <?= $notif[0]["subjek"]?><br/>
        oleh : <?= $notif[0]["oleh"]?><br/><br/><hr/>
        <br/>
        <?= $notif[0]["isi_pesan"]?><br/>
        </div>
        
        <a href="<?= base_url('Mahasiswa/form_pengajuan_judul')?>"><button>Form Pengajuan Judul Skripsi</button></a>

        <?php } else if (empty($pengajuan) && empty($skripsi)){ ?>
        <div class="alert">
        Anda Belum Mengajukan Skripsi
        </div>
        Perhatian :<br/>
        - Pastikan kamu sudah lulus 140 sks sebelum mengajukan skripsi<br/>
        - Pastikan sedang tidak mengambil cuti<br/>
        - Bersungguh-sungguh dalam mengerjakan skripsi<br/><br/>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_judul')?>"><button>Form Pengajuan Judul Skripsi</button></a>

        <?php } else if (!empty($pengajuan) && empty($skripsi)){ ?>
        <div class="alert">
        Pengajuan Judul Skripsi Anda Sedang Dalam Peninjauan
        </div>

        <?php } else if ($skripsi[0]["status"]=="Judul Disetujui"){ ?>
        <div class="alert">
            Pengajuan Judul Skripsi Anda Telah disetujui<br/><br/>
            <ul>
            <li>Dosen Pembimbing 1 anda: <?=$skripsi[0]["dospem1"]?></li>
            <li>Dosen Pembimbing 2 anda: <?=$skripsi[0]["dospem2"]?></li>
            <li>Dosen Penguji Seminar anda: <?=$skripsi[0]["penguji_u"]?> (Utama); <?=$skripsi[0]["penguji_p"]?></li>
        </ul>
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
        <a href="<?= base_url('Cetakan/surat_pengajuan_judul/'.session()->user)?>"><button><i class="fas fa-download"></i> Dokumen Form A.1-A.5</button></a>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_usul')?>"><button><i class="fa fa-memo"></i> Form Pengajuan Seminar Usul</button></a>

        <?php } else if ($skripsi[0]["status"]=="Mengajukan Seminar Usul"){ ?>
        <div class="alert">
            Anda sudah mengajukan seminar usul, tunggu sampai seminar anda berjalan<br/>
        </div>
        Langkah Selanjutnya :<br/>
        - Silahkan unduh formulir yang tersedia dibawah<br/>
        - Lengkapi data dan persyaratan yang masih kosong dengan tulis tangan<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_usul/'.session()->user)?>"><button>Lihat PDF Seminar Usul</button></a>

        <?php } else if ($skripsi[0]["status"]=="Seminar Usul Disetujui"){ ?>
        <div class="alert">
            Seminar usul anda telah dinilai dan disetujui
        </div>
        Perhatian :<br/>
        - Silahkan unduh formulir seminar terbaru, cukup cetak (Form A.7b) untuk keperluan nilai.<br/>
        - Lanjutkan skripsi anda dan konsultasi dengan Pembimbing.<br/>
        - Setelah selesai menyusun skripsi lengkap dan diizinkan melakukan seminar hasil, silahkan ajukan seminar hasil pada form dibawah.<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_usul/'.session()->user)?>"><button><i class="fas fa-download"></i> Dokumen Form A.6-A.7c</button></a>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_hasil')?>"><button>Form Pengajuan Seminar Hasil</button></a>

        <?php } else if ($skripsi[0]["status"]=="Mengajukan Seminar Hasil"){ ?>
        <div class="alert">
            Anda sudah mengajukan seminar hasil, tunggu sampai seminar anda berjalan<br/>
        </div>
        Langkah Selanjutnya :<br/>
        - Silahkan unduh formulir yang tersedia dibawah<br/>
        - Lengkapi data dan persyaratan yang masih kosong dengan tulis tangan<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_hasil/'.session()->user)?>"><button><i class="fas fa-download"></i> Dokumen Form A.8-A.8c</button></a>
       
        <?php } else if ($skripsi[0]["status"]=="Seminar Hasil Disetujui"){ ?>    
        <div class="alert">
            Seminar hasil anda telah dinilai dan disetujui
        </div>
        Perhatian :<br/>
        - Silahkan unduh formulir seminar terbaru, cukup cetak (Form A.8b) untuk keperluan nilai.<br/>
        - Lanjutkan skripsi anda dan konsultasi dengan Pembimbing.<br/>
        - Setelah selesai menyusun skripsi lengkap dan diizinkan melakukan sidang skripsi, silahkan ajukan ujian skripsi pada form dibawah.<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_hasil/'.session()->user)?>"><button><i class="fas fa-download"></i> Dokumen Form A.8-A.8c</button></a>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_kompre')?>"><button>Form Pengajuan Seminar Kompre</button></a>

        <?php } else if ($skripsi[0]["status"]=="Mengajukan Ujian Skripsi"){ ?>
        <div class="alert">
            Anda sudah mengajukan Ujian Skripsi, tunggu sampai ujian skripsi anda berjalan anda berjalan<br/>
        </div>
        Langkah Selanjutnya :<br/>
        - Silahkan unduh formulir yang tersedia dibawah<br/>
        - Lengkapi data dan persyaratan yang masih kosong dengan tulis tangan<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_kompre/'.session()->user)?>"><button><i class="fas fa-download"></i> Dokumen Form A.9-A.14</button></a>
        
        <?php } else if ($skripsi[0]["status"]=="Telah Lulus Skripsi"){ ?>
        <div class="alert">
        Anda Telah Lulus
        </div>
        <?php } ?>
    </div>
    
</div>
