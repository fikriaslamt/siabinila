<div class="container">
    <div class="content row">
        <a href="<?=base_url('home')?>" class="back" style="float:right!important"><i class="fa fa-arrow-left"></i> Kembali</a>
        <h4><?=$title?><h4>
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

        <?php } else if ($skripsi[0]["status"]=="TELAH MENGAJUKAN JUDUL"){ ?>
        <div class="alert">
            Pengajuan Judul Skripsi Anda Telah diterima
        </div>
        Perhatian :<br/>
        - Saat ini anda harus fokus untuk seminar usul<br/>
        - Usul penelitian<br/>
        - Bersungguh-sungguh dalam mengerjakan skripsi<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_judul/'.session()->user)?>"><button>Lihat PDF Pengajuan Judul</button></a>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_usul')?>"><button>Form Pengajuan Seminar Usul</button></a>

        <?php } else if ($skripsi[0]["status"]=="Mengajukan Seminar Usul"){ ?>
        <div class="alert">
            - Anda sudah mengajukan seminar usul, tunggu sampai seminar anda berjalan<br/>
            - Jika seminar anda sudah disetujui, minta dosen pembimbing terkait menyetujui skripsi anda pada sistem
        </div>
        Perhatian :<br/>
        - Seminar usul sesuai waktu dan tempat yang telah ditentukan<br/>
        - Bersungguh-sungguh dalam usulan tersebut<br/><br/>
        <a href="<?= base_url('Cetakan/surat_pengajuan_usul/'.session()->user)?>"><button>Lihat PDF Seminar Usul</button></a>

        <?php } else if ($skripsi[0]["status"]=="SEMINAR USUL"){ ?>
        <div class="alert">
            Pengajuan seminar usul anda telah diterima
        </div>
        Perhatian :<br/>
        - Seminar usul sesuai waktu dan tempat yang telah ditentukan<br/>
        - Bersungguh-sungguh dalam usulan tersebut<br/><br/>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_hasil')?>"><button>Form Pengajuan Seminar Hasil</button></a>

        <?php } else if ($skripsi[0]["status"]=="SEMINAR HASIL"){ ?>    
        <div class="alert">
            Pengajuan Komprehensif anda telah diterima
        </div>
        Perhatian :<br/>
        - Seminar Komprehensif sesuai waktu dan tempat yang telah ditentukan<br/>
        - Mempersiapkan diri untuk menjawab materi yang akan ditanyakan<br/><br/>
        <a href="<?= base_url('Mahasiswa/form_pengajuan_kompre')?>"><button>Form Pengajuan Seminar Kompre</button></a>

        <?php } else if ($skripsi[0]["status"]=="LULUS"){ ?>
        <div class="alert">
        Anda Telah Lulus
        </div>
        <?php } ?>
    </div>
    
</div>
