<?php
namespace App\Libraries;
namespace App\Controllers;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '5', 'margin_bottom' => '15',
'margin_left' => '8', 'margin_right' => '8', 'defaultfooterline' => 0]);

$mpdf->setFooter('<div class="txfooter">{PAGENO}</div>');

// FORM A.1 ---------------------------------------------------------
$mpdf->WriteHTML($kop_surat.'
<div class="teks_isi">
    <div class="text_kanan">Form A.1</div>
    <div class="title">Surat Keterangan</div>
    Saya yang bertanda tangan dibawah ini:<br/>
    <table class="padding_isi">
        <tr>
        <td>1. Nama Mahasiswa</td><td>: </td><td> '.$nama.' </td>
        </tr>
        <tr>
        <td>2. NPM </td><td>: </td><td> '.$npm.' </td> 
        </tr>
        <tr>
        <td>3. Jurusan </td><td>: </td><td> Administrasi Bisnis </td>
        </tr>
        <tr>
        <td>4. Beban SKS yang diselesaikan </td><td>: </td><td> '.$sks.' </td>
        </tr>
        <tr>
        <td>5. Indek Prestasi Kumulatif </td><td>: </td><td> '.$ipk.' </td>
        </tr>
        <tr>
        <td>6. Alamat </td><td>: </td><td> '.$alamat.' </td>
        </tr>
        <tr>
        <td>7. No. Telepon </td><td>: </td><td>'.$nomor.' </td>
        </tr>
    </table>
    <p>Menyatakan telah menyelesaikan semua mata kuliah wajib yang mendukung topik
    skripsi, terdaftar sebagaimaha siswa FISIP, dan tidak sedang cuti akademik. Karena
    saya telah memenuhi persyaratan yang ditentukan, maka saya mengajukan permohonan
    penyusunan skripsi.</p>
    <p>Demikian surat keterangan ini dibuat dengan sesungguhnya dan saya siap menerima
    sanksi sesuai aturan yang berlaku apabilasaya memberi keterangan yang tidak benar.</p>
    Mengetahui,
    <table style="width:100%">
        <tr>
         <td style="width:60%">
            Dosen Pembimbing Akademik
            <br/><br/><br/><br/><br/><br/>
            '.$surat["dosen_pa"].' <br/>
            NIP. '.$surat["nip_pa"].'
         </td>
         <td>
            Mahasiswa yang bersangkutan
            <br/><br/><br/><br/><br/><br/>
            '.$nama.' <br/>
            NPM.'.$npm.'
         </td>
        </tr>
    </table>    
</div>

');

// FORM A.2 ---------------------------------------------------------
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'                        

<div class="teks_isi">
    <div class="text_kanan">Form A.2</div>
    <div class="title">Rencana Judul Skripsi</div>
    <p>Yang bertanda tangan di bawah ini, mengajukan Rencana Judul Skripsi sebagai berikut:</p>
    <table>
        <tr><td>
        1. Judul </td> <td>:</td><td> '.$judul.'
        </td></tr>
    </table>
    <p>2. Permasalahan Pokok :</p>
    <div class="paragf">
        '.$isi.'
    </div>
    <p>3. Daftar Pustaka :</p>
    <div>
        '.$dapus.'
    </div>
    <table style="width:100%">
        <tr>
         <td style="width:60%">
            <!-- Hah! Koosong -->
         </td>
         <td>
            Mahasiswa yang bersangkutan
            <br/><br/><br/><br/><br/><br/>
            '.$nama.' <br/>
            NPM.'.$npm.'
         </td>
        </tr>
    </table>    
</div>
');

// FORM A.3 ---------------------------------------------------------
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.3</div>
    <div class="title">Persetujuan Komisi Pembimbing</div>
    <p>Yang bertanda tangan di bawah ini:</p>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$dospem1.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$nip_1.'</td>
        </tr>
        <tr>
        <td>3. Pangkat/Golongan </td> <td>:</td><td> Penata Muda Tingkat I
        </td>
        </tr>
    </table>
    <p>Menyatakan bersedia/tidak bersedia*) sebagai Pembimbing Utama pada penyusunan skripsi mahasiswa FISIP Universitas Lampung:</p>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$nama.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$npm.'</td>
        </tr>
        <tr>
        <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
        </tr>
        <tr>
        <td>4. Judul Skripsi</td> <td>:</td><td> '.$judul.' </td>
        </tr>
    </table>
    <p>Demikian surat persetujuan ini dan agar dapat dipergunakan sebagaimana mestinya.</p>
    <table style="width:100%">
        <tr>
         <td style="width:58%">
            Menyetujui: <br/>
            Ketua Jurusan
            <br/><br/><br/><br/><br/><br/>
            '.$kajur.'<br>
            NIP. '.$nip_kajur.'
         </td>
         <td>
            Bandar Lampung, '.$tanggal_print.' <br/>
            Dosen Pembimbing
            <br/><br/><br/><br/><br/><br/>
            '.$dospem1.' <br/>
            NIP. '.$nip_1.'
         </td>
        </tr>
    </table>    
</div>
');

if(!empty($dospem2)):
// FORM A.3 ---------------------------------------------------------
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'                        

<div class="teks_isi">
    <div class="text_kanan">Form A.3</div>
    <div class="title">Persetujuan Komisi Pembimbing</div>
    <p>Yang bertanda tangan di bawah ini:</p>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$dospem2.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$nip_2.'</td>
        </tr>
        <tr>
        <td>3. Pangkat/Golongan </td> <td>:</td><td> Penata Muda Tingkat I
        </td>
        </tr>
    </table>
    <p>Menyatakan bersedia sebagai Pembimbing Pembantu pada penyusunan skripsi mahasiswa FISIP Universitas Lampung:</p>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$nama.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$npm.'</td>
        </tr>
        <tr>
        <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
        </tr>
        <tr>
        <td>4. Judul Skripsi</td> <td>:</td><td> '.$judul.' </td>
        </tr>
    </table>
    <p>Demikian surat persetujuan ini dan agar dapat dipergunakan sebagaimana mestinya.</p>
    <table style="width:100%">
        <tr>
         <td style="width:58%">
            Menyetujui: <br/>
            Ketua Jurusan
            <br/><br/><br/><br/><br/><br/>
            '.$kajur.'<br>
            NIP. '.$nip_kajur.'
         </td>
         <td>
            Bandar Lampung, '.$tanggal_print.' <br/>
            Dosen Pembimbing
            <br/><br/><br/><br/><br/><br/>
            '.$dospem2.' <br/>
            NIP. '.$nip_2.'
         </td>
        </tr>
    </table>    
</div>
');
endif;

// FORM A.4 ---------------------------------------------------------
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.4</div>
    <div class="title">PROSES BIMBINGAN SKRIPSI</div>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$nama.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$npm.'</td>
        </tr>
        <tr>
        <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
        </tr>
        <tr>
        <td>4. Judul Skripsi</td> <td>:</td><td> '.$judul.'</td>
        </tr>
    </table>
</div>
    <table class="tbl_kosong">
        <tr>
        <th style="width:15%">No.</th> <th>Tanggal</th> <th> Saran Pembimbing  </th> <th style="width:20%"> Paraf </th>
        </tr>
        <tr>
        <td style="width:15%"></td> <td></td> <td></td> <td style="width:20%"></td>
        </tr>
        </tr>
    </table>
<div class="teks_isi">
    <br>
    <table style="width:100%">
        <tr>
         <td style="width:58%">
            
         </td>
         <td>
            Bandar Lampung, '.$tanggal_print.' <br/>
            Dosen Pembimbing
            <br/><br/><br/><br/><br/><br/>
            '.$dospem1.' <br/>
            NIP. '.$nip_1.'
         </td>
        </tr>
    </table>    
</div>
');

if(!empty($dospem2)):
// FORM A.4 ---------------------------------------------------------
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.4</div>
    <div class="title">PROSES BIMBINGAN SKRIPSI</div>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$nama.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$npm.'</td>
        </tr>
        <tr>
        <td>3. Jurusan </td> <td>:</td><td> Administrasi Bisnis</td>
        </tr>
        <tr>
        <td>4. Judul Skripsi</td> <td>:</td><td> '.$judul.'</td>
        </tr>
    </table>
</div>
    <table class="tbl_kosong">
        <tr>
        <th style="width:15%">No.</th> <th>Tanggal</th> <th> Saran Pembimbing  </th> <th style="width:20%"> Paraf </th>
        </tr>
        <tr>
        <td style="width:15%"></td> <td></td> <td></td> <td style="width:20%"></td>
        </tr>
        </tr>
    </table>
<div class="teks_isi">
    <br>
    <table style="width:100%">
        <tr>
         <td style="width:58%">
            
         </td>
         <td>
            Bandar Lampung, '.$tanggal_print.'<br/>
            Dosen Pembimbing
            <br/><br/><br/><br/><br/><br/>
            '.$dospem2.' <br/>
            NIP. '.$nip_2.'
         </td>
        </tr>
    </table>    
</div>
');
endif;

// FORM A.5 --------------------------------------------------------- Moderator
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.5</div>
    <div class="title">KEIKUTSERTAAN SEBAGAI PETUGAS SEMINAR</div>
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
    <p>Menyatakan telah bertugas sebagai Moderator pada seminar:</p>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$nama.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$npm.'</td>
        </tr>
        <tr>
        <td>3. Judul Skripsi</td> <td>:</td><td> '.$judul.'</td>
        </tr>
    </table><br/>
    
    <table style="width:100%">
        <tr>
            <td style="width:58%">
                Penyaji Seminar,<br/>
                Moderator
                <br/><br/><br/><br/><br/><br/>
                ................................... <br/>
                NPM ..................................
            </td>
            <td>
                Bandar Lampung, '.$tanggal_print.' <br/>
                Mahasiswa
                <br/><br/><br/><br/><br/><br/>
                '.$nama.' <br/>
                NPM '.$npm.'
            </td>
        </tr>
    </table><br/>    
    <table style="width:100%" class="header">
    <tr>
        <td>
            <div class="teks_center" style="margin:auto;">
            <br/>
            Mengetahui,<br/>
            Koordinator Pelaksana Seminar
            <br/><br/><br/><br/><br/><br/>
            '.$dospem1.' <br/>
            NIP. '.$nip_1.'
            </div>
        </td>
    </tr>
    </table>
</div>
');
// FORM A.5 --------------------------------------------------------- Pembahas Mahasiswa I
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.5</div>
    <div class="title">KEIKUTSERTAAN SEBAGAI PETUGAS SEMINAR</div>
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
    <p>Menyatakan telah bertugas sebagai Pembahas Mahasiswa I pada seminar:</p>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$nama.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$npm.'</td>
        </tr>
        <tr>
        <td>3. Judul Skripsi</td> <td>:</td><td> '.$judul.'</td>
        </tr>
    </table><br/>
    
    <table style="width:100%">
        <tr>
            <td style="width:58%">
                Penyaji Seminar,<br/>
                Pembahas
                <br/><br/><br/><br/><br/><br/>
                ................................... <br/>
                NPM ..................................
            </td>
            <td>
                Bandar Lampung, '.$tanggal_print.' <br/>
                Mahasiswa
                <br/><br/><br/><br/><br/><br/>
                '.$nama.' <br/>
                NPM '.$npm.'
            </td>
        </tr>
    </table><br/>    
    <table style="width:100%" class="header">
    <tr>
        <td>
            <div class="teks_center" style="margin:auto;">
            <br/>
            Mengetahui,<br/>
            Koordinator Pelaksana Seminar
            <br/><br/><br/><br/><br/><br/>
            '.$dospem1.' <br/>
            NIP. '.$nip_1.'
            </div>
        </td>
    </tr>
    </table>
</div>
');
// FORM A.5 --------------------------------------------------------- Pembahas Mahasiswa II
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.5</div>
    <div class="title">KEIKUTSERTAAN SEBAGAI PETUGAS SEMINAR</div>
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
    <p>Menyatakan telah bertugas sebagai Pembahas
    Mahasiswa II pada seminar:</p>
    <table>
        <tr>
        <td>1. Nama </td> <td>:</td><td> '.$nama.'</td>
        </tr>
        <tr>
        <td>2. NIP </td> <td>:</td><td> '.$npm.'</td>
        </tr>
        <tr>
        <td>3. Judul Skripsi</td> <td>:</td><td> '.$judul.'</td>
        </tr>
    </table><br/>
    
    <table style="width:100%">
        <tr>
            <td style="width:58%">
                Penyaji Seminar,<br/>
                Pembahas
                <br/><br/><br/><br/><br/><br/>
                ................................... <br/>
                NPM ..................................
            </td>
            <td>
                Bandar Lampung, '.$tanggal_print.' <br/>
                Mahasiswa
                <br/><br/><br/><br/><br/><br/>
                '.$nama.' <br/>
                NPM '.$npm.'
            </td>
        </tr>
    </table><br/>    
    <table style="width:100%" class="header">
    <tr>
        <td>
            <div class="teks_center" style="margin:auto;">
            <br/>
            Mengetahui,<br/>
            Koordinator Pelaksana Seminar
            <br/><br/><br/><br/><br/><br/>
            '.$dospem1.' <br/>
            NIP. '.$nip_1.'
            </div>
        </td>
    </tr>
    </table>
</div>
');

$mpdf->Output('form_A1-A5.pdf','I');

?>