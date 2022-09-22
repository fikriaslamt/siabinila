<!DOCTYPE html>
<html lang="id">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/doc_styles.css')?>" rel="stylesheet" type="text/css">
    
</head>
<body onload="window.print()">

<div class="halaman"><!-- Per halamnan harus pakai ini -->
    
    <?= view('dokumenCetak/widgets/kop-surat') ?><!-- Kop Surat -->
    <div class="isi">
        <div class="text-kanan">Form A.1</div>
        <div class="text-judul">Surat Keterangan</div>
        Saya yang bertanda tangan dibawah ini:<br/>
        <table class="padding_isi">
            <tr>
            <td>1. Nama Mahasiswa</td><td>: </td><td> <?=$nama?> </td>
            </tr>
            <tr>
            <td>2. NPM </td><td>: </td><td> <?=$npm?> </td> 
            </tr>
            <tr>
            <td>3. Jurusan </td><td>: </td><td> Administrasi Bisnis </td>
            </tr>
            <tr>
            <td>4. Beban SKS yang diselesaikan </td><td>: </td><td> <?=$sks?> </td>
            </tr>
            <tr>
            <td>5. Indek Prestasi Kumulatif </td><td>: </td><td> <?=$ipk?> </td>
            </tr>
            <tr>
            <td>6. Alamat </td><td>: </td><td> <?=$alamat?> </td>
            </tr>
            <tr>
            <td>7. No. Telepon </td><td>: </td><td><?=$nomor?> </td>
            </tr>
        </table>
        <br/>
        <p>Menyatakan telah menyelesaikan semua mata kuliah wajib yang mendukung topik
        skripsi, terdaftar sebagaimaha siswa FISIP, dan tidak sedang cuti akademik. Karena
        saya telah memenuhi persyaratan yang ditentukan, maka saya mengajukan permohonan
        penyusunan skripsi.</p>
        <p>Demikian surat keterangan ini dibuat dengan sesungguhnya dan saya siap menerima
        sanksi sesuai aturan yang berlaku apabilasaya memberi keterangan yang tidak benar.</p><br/>
        Mengetahui,
        <table style="width:100%">
            <tr>
            <td style="width:60%">
                Dosen Pembimbing Akademik
                <br/><br/><br/><br/><br/><br/>
                ..................................... <br/>
                NIP. ..................................
            </td>
            <td>
                Mahasiswa yang bersangkutan
                <br/><br/><br/><br/><br/><br/>
                <?=$nama?> <br/>
                NPM <?=$npm?>
            </td>
            </tr>
        </table>    
    </div>
</div><!-- Akhir Halaman -->

<div class="halaman"><!-- Per halamnan harus pakai ini -->
    <?= view('dokumenCetak/widgets/kop-surat') ?><!-- Kop Surat -->

    <div class="isi">
        <div class="text-kanan">Form A.2</div>
        <div class="text-judul">Rencana Judul Skripsi</div>
        <p>Yang bertanda tangan di bawah ini, mengajukan Rencana Judul Skripsi sebagai berikut:</p>
        <table>
            <tr><td>
            1. Judul </td> <td>:</td><td> <?=$judul?>
            </td></tr>
        </table>
        <p>2. Permasalahan Pokok :</p>
        <div class="paragf">
            <?= $isi ?>
        </div>
        <p>3. Daftar Pustaka :</p>
        <div>
            <?= $dapus ?>
        </div>
        <table style="width:100%">
            <tr>
            <td style="width:60%">
                <!-- Hah! Koosong -->
            </td>
            <td>
                Mahasiswa yang bersangkutan
                <br/><br/><br/><br/><br/><br/>
                <?=$nama?> <br/>
                NPM <?=$npm?>
            </td>
            </tr>
        </table>    
    </div>

</div><!-- Akhir Halaman -->

<div class="halaman"><!-- Per halamnan harus pakai ini -->
    <?= view('dokumenCetak/widgets/kop-surat') ?><!-- Kop Surat -->

    <div class="isi">
        <div class="text-kanan">Form A.3</div>
        <div class="text-judul">Persetujuan Komisi Pembimbing</div>
        <p>Yang bertanda tangan di bawah ini:</p>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> <?=$dospem1?></td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td> <?=$nip_1?></td>
            </tr>
            <tr>
            <td>3. Pangkat/Golongan </td> <td>:</td><td> Penata Muda Tingkat I
            </td>
            </tr>
        </table>
        <p>Menyatakan bersedia/tidak bersedia*) sebagai Pembimbing Utama/Pembimbing
        pembantu *) pada penyusunan skripsi mahasiswa FISIP Universitas Lampung:</p>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> <?=$nama?></td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td> <?=$npm?></td>
            </tr>
            <tr>
            <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
            </tr>
            <tr>
            <td>4. Judul Skripsi</td> <td>:</td><td> <?=$judul?> </td>
            </tr>
        </table>
        <p>Demikian surat persetujuan ini dan agar dapat dipergunakan sebagaimana mestinya.</p>
        <table style="width:100%">
            <tr>
            <td style="width:58%">
                Menyetujui: <br/>
                Ketua Jurusan
                <br/><br/><br/><br/><br/><br/>
                <?=$kajur?><br>
                NIP. <?=$nip_kajur?>
            </td>
            <td>
                Bandar Lampung, ........................ <br/>
                Dosen Pembimbing
                <br/><br/><br/><br/><br/><br/>
                <?=$dospem1?> <br/>
                NIP. <?=$nip_1?>
            </td>
            </tr>
        </table>    
    </div>

</div><!-- Akhir Halaman -->
<?php if(!empty($dospem2)): ?>
<div class="halaman"><!-- Per halamnan harus pakai ini -->
    <?= view('dokumenCetak/widgets/kop-surat') ?><!-- Kop Surat -->

    <div class="isi">
        <div class="text-kanan">Form A.3</div>
        <div class="text-judul">Persetujuan Komisi Pembimbing</div>
        <p>Yang bertanda tangan di bawah ini:</p>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> <?=$dospem2?></td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td> <?=$nip_2?></td>
            </tr>
            <tr>
            <td>3. Pangkat/Golongan </td> <td>:</td><td> Penata Muda Tingkat I
            </td>
            </tr>
        </table>
        <p>Menyatakan bersedia/tidak bersedia*) sebagai Pembimbing Utama/Pembimbing
        pembantu *) pada penyusunan skripsi mahasiswa FISIP Universitas Lampung:</p>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> <?=$nama?></td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td> <?=$npm?></td>
            </tr>
            <tr>
            <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
            </tr>
            <tr>
            <td>4. Judul Skripsi</td> <td>:</td><td> <?=$judul?> </td>
            </tr>
        </table>
        <p>Demikian surat persetujuan ini dan agar dapat dipergunakan sebagaimana mestinya.</p>
        <table style="width:100%">
            <tr>
            <td style="width:58%">
                Menyetujui: <br/>
                Ketua Jurusan
                <br/><br/><br/><br/><br/><br/>
                <?=$kajur?><br>
                NIP. <?=$nip_kajur?>
            </td>
            <td>
                Bandar Lampung, ........................ <br/>
                Dosen Pembimbing
                <br/><br/><br/><br/><br/><br/>
                <?=$dospem2?> <br/>
                NIP. <?=$nip_2?>
            </td>
            </tr>
        </table>    
    </div>

</div><!-- Akhir Halaman -->
<?php endif ?>

<div class="halaman"><!-- Per halamnan harus pakai ini -->
    <?= view('dokumenCetak/widgets/kop-surat') ?><!-- Kop Surat -->

    <div class="isi">
        <div class="text-kanan">Form A.4</div>
        <div class="text-judul">PROSES BIMBINGAN SKRIPSI</div>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> <?=$nama?></td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td> <?=$npm?></td>
            </tr>
            <tr>
            <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
            </tr>
            <tr>
            <td>4. Judul Skripsi</td> <td>:</td><td> <?=$judul?></td>
            </tr>
        </table>
    </div>
        <table class="tbl tbl-kosong">
            <tr>
            <th style="width:12mm">No.</th> <th>Tanggal</th> <th> Saran Pembimbing  </th> <th style="width:50mm"> Paraf </th>
            </tr>
            <tr>
            <td></td> <td></td> <td></td> <td></td>
            </tr>
            </tr>
        </table>
    <div class="isi">
        <br>
        <table style="width:100%">
            <tr>
            <td style="width:58%">
                
            </td>
            <td>
                Bandar Lampung, ....................<br/>
                Dosen Pembimbing
                <br/><br/><br/><br/><br/><br/>
                <?=$dospem1?> <br/>
                NIP. <?=$nip_1?>
            </td>
            </tr>
        </table>    
    </div>

</div><!-- Akhir Halaman -->
<?php if(!empty($dospem2)): ?>
<div class="halaman"><!-- Per halamnan harus pakai ini -->
    <?= view('dokumenCetak/widgets/kop-surat') ?><!-- Kop Surat -->

    <div class="isi">
        <div class="text-kanan">Form A.4</div>
        <div class="text-judul">PROSES BIMBINGAN SKRIPSI</div>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> <?=$nama?></td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td> <?=$npm?></td>
            </tr>
            <tr>
            <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
            </tr>
            <tr>
            <td>4. Judul Skripsi</td> <td>:</td><td> <?=$judul?></td>
            </tr>
        </table>
    </div>
        <table class="tbl tbl-kosong">
            <tr>
            <th style="width:12mm">No.</th> <th>Tanggal</th> <th> Saran Pembimbing  </th> <th style="width:50mm"> Paraf </th>
            </tr>
            <tr>
            <td></td> <td></td> <td></td> <td></td>
            </tr>
            </tr>
        </table>
    <div class="isi">
        <br>
        <table style="width:100%">
            <tr>
            <td style="width:58%">
                
            </td>
            <td>
                Bandar Lampung, ....................<br/>
                Dosen Pembimbing
                <br/><br/><br/><br/><br/><br/>
                <?=$dospem2?> <br/>
                NIP. <?=$nip_2?>
            </td>
            </tr>
        </table>    
    </div>

</div><!-- Akhir Halaman -->
<?php endif ?>

<div class="halaman"><!-- Per halamnan harus pakai ini -->
    <?= view('dokumenCetak/widgets/kop-surat') ?><!-- Kop Surat -->

    <div class="isi">
        <div class="text-kanan">Form A.5</div>
        <div class="text-judul">KEIKUTSERTAAN SEBAGAI PETUGAS SEMINAR</div>
        <p>Saya yang bertanda tangan di bawah ini:</p>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> .................................</td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td>  .................................</td>
            </tr>
            <tr>
            <td>3. Jurusan </td> <td>:</td><td> .................................</td>
            </tr>
        </table>
        <p>Menyatakan telah bertugas sebagai Moderator/Pembahas Mahasiswa/I Pembahas
        Mahasiswa II pada seminar:</p>
        <table>
            <tr>
            <td>1. Nama </td> <td>:</td><td> <?=$nama?></td>
            </tr>
            <tr>
            <td>2. NIP </td> <td>:</td><td> <?=$npm?></td>
            </tr>
            <tr>
            <td>3. Judul Skripsi</td> <td>:</td><td> <?=$judul?></td>
            </tr>
        </table><br/>
        
        <table style="width:100%">
            <tr>
                <td style="width:58%">
                    Penyaji Seminar,<br/>
                    Moderator/Pembahas
                    <br/><br/><br/><br/><br/><br/>
                    ................................... <br/>
                    NPM ..................................
                </td>
                <td>
                    Bandar Lampung, <?=$tanggal?><br/>
                    Mahasiswa
                    <br/><br/><br/><br/><br/><br/>
                    <?=$nama?> <br/>
                    NPM <?=$npm?>
                </td>
            </tr>
        </table><br/>    
        <table style="width:100%" class="header">
        <tr>
            <td>
                <div class="text-tengah">
                <br/>
                Mengetahui,<br/>
                Koordinator Pelaksana Seminar
                <br/><br/><br/><br/><br/><br/>
                <?=$dospem1?> <br/>
                NIP. <?=$nip_1?>
                </div>
            </td>
        </tr>
        </table>
    </div>

</div><!-- Akhir Halaman -->

<?= view('dokumenCetak/widgets/menubar') ?><!-- Menu Bar -->

</body>
</html>