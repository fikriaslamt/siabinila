<?php
namespace App\Libraries;
namespace App\Controllers;

$jumlah_rincid1 = $surat["nilai_d1"] + $surat["nilai_d1t"];
$jumlah_rincid2 = $surat["nilai_d2"] + $surat["nilai_d2t"];
$jumlah_rincip1 = $surat["nilai_pu"] + $surat["nilai_put"];
$jumlah_rincip2 = $surat["nilai_pp"] + $surat["nilai_ppt"];

$mean_rincid1 = $jumlah_rincid1 / 2;
$mean_rincid2 = $jumlah_rincid2 / 2;
$mean_rincip1 = $jumlah_rincip1 / 2;
$mean_rincip2 = $jumlah_rincip2 / 2;

$xd1 = $mean_rincid1*(40/100); 
$xd2 = $mean_rincid2*(20/100);
$xpu = $mean_rincip1*(40/100);
$xpp = $mean_rincip2*(20/100);
$na   = $xd1+$xd2+$xpu;
$na_2 = $xd1+$xpu+$xpp;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '5', 'margin_bottom' => '15',
'margin_left' => '8', 'margin_right' => '8',
'defaultfooterline' => 0]);
$mpdf->setFooter('<div class="txfooter">{PAGENO}</div>');

//form A9
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.9</div>
    <div class="title">
        LEMBAR BIMBINGAN<br/>
        NASKAH ARTIKEL ILMIAH
    </div>
    <br>
    
    <table>
        <tr>
            <td>Nama </td> <td>:</td> <td>'.$surat["nama"].'</td> 
        </tr>
        <tr>
            <td>NPM </td> <td>:</td> <td> '.$surat["npm"].'</td>
        </tr>  
        <tr>
            <td>Judul Artikel </td> <td>:</td> <td> '.$surat["judul"].'</td>
        </tr> 

    </table>
    <br>
    <table class="tbl_isi" style="width:100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>SARAN PEMBIMBING</th>
                <th>PARAF</th>
                
            </tr>

        </thead>

        <tbody>
            <tr>
                <th style="height:420px"></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tbody>
        
    </table>

    <br><br>
    <table style="width:100%">
        <tr>
            <td style="width:50%"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Pembimbing Utama <br><br><br><br><br><br>
                '.$surat["dospem1"].' <br>
                NIP. '.$nip_1.'
            </td>
        </tr>
    </table>
</div>
');

if($dospem2 != null):
//form A9
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.9</div>
    <div class="title">LEMBAR BIMBINGAN<br/>NASKAH ARTIKEL ILMIAH</div>

    <br>

    
    <table>
        <tr>
            <td>Nama </td> <td>:</td> <td>'.$surat["nama"].'</td> 
        </tr>
        <tr>
            <td>NPM </td> <td>:</td> <td> '.$surat["npm"].'</td>
        </tr>  
        <tr>
            <td>Judul Artikel </td> <td>:</td> <td> '.$surat["judul"].'</td>
        </tr> 

    </table>
    <br><br>
    <table class="tbl_isi" style="width:100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>TANGGAL</th>
                <th>SARAN PEMBIMBING</th>
                <th>PARAF</th>
                
            </tr>

        </thead>

        <tbody>
            <tr>
                <th style="height:460px"></th>
                <th></th>
                <th></th>
                <th></th>
            
            </tr>
        </tbody>
        
    </table>

    <br><br>
    <table style="width:100%">
        <tr>
            <td style="width:50%"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Pembimbing Pembantu <br><br><br><br><br><br>
                '.$dospem2.' <br>
                NIP. '.$nip_2.'
            </td>
        </tr>
    </table>
</div>
');
endif;

//form A9a
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.9a</div>
    <div class="title">SURAT PERNYATAAN LAYAK TERBIT</div>
    <br>
    
    Kami atas nama Dewan Redaksi Jurnal Bisnis Kompetitif menerangkan bahwa naskah
    artikel ilmiah berikut:
    <br><br>

    
    <table>
        <tr>
            <td>Nama </td> <td>:</td> <td> '.$surat["nama"].'</td> 
        </tr>
        <tr>
            <td>NPM </td> <td>:</td> <td> '.$surat["npm"].'</td>
        </tr>  
        <tr>
            <td>Judul Artikel </td> <td>:</td> <td> '.$surat["judul"].'</td>
        </tr> 

    </table>
    <br><br>
    
    
    Telah kami terima dan disetujui untuk kami terbitkan pada Jurnal Bisnis Kompetitif<br>
    Volume ........... Nomor ............. Tahun ....................
    <br>
    <br>
    Demikian surat pernyataan ini kami buat untuk dipergunakan sebagaimana mestinya.
    <br><br><br>

    <table style="width:100%">
        <tr>
            <td style="width:50%">
                Mengetahui,<br>
                Ketua Jurusan/PS <br><br><br><br><br><br>
                '.$kajur.' <br>
                NIP. '.$nip_kajur.'
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Redaksi Jurnal Bisnis Kompetitif, <br><br><br><br><br><br>
                ........................................ <br>
                NIP. ...................................
            </td>
        </tr>
    </table>
</div>
');

//form A10
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.10</div>
    <div class="title">SURAT KETERANGAN</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>
    
    Yang bertanda tangan di bawah ini, Komisi Pembimbing Skripsi Mahasiswa FISIP
    Universitas Lampung:
    <br>

    
    <table class="padding_isi">
        <tr>
            <td style ="width :10%"></td>
            <td>Nama </td> <td>:</td> <td> '.$surat["nama"].'</td> 
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>NPM </td> <td>:</td> <td> '.$surat["npm"].'</td>
        </tr>  
        <tr>
            <td style ="width :10%"></td>
            <td>Jurusan</td> <td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>Judul Skripsi </td> <td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>SKS yang diselesaikan</td> <td>:</td> <td> '.$surat["sks"].'</td>
        </tr>

    </table>
    <br><br>
    
    Menerangkan dengan sesungguhnya bahwa skripsi telah selesai dan disetujui untuk
    dilaksanakan Ujian Skripsi/Ujian Komprehensif.
    
   
    <br><br><br>

    <table style="width:100%">
        <tr>
            <td style="width:50%">
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Pembimbing Utama <br><br><br><br><br><br>
                '.$surat["dospem1"].' <br>
                NIP. '.$nip_1.'
            </td>
        </tr>
    </table>
</div>
');
if($dospem2 != null):
//form A10
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.10</div>
    <div class="title">SURAT KETERANGAN</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>
    
    Yang bertanda tangan di bawah ini, Komisi Pembimbing Skripsi Mahasiswa FISIP
    Universitas Lampung:
    <br>

    
    <table class="padding_isi">
        <tr>
            <td style ="width :10%"></td>
            <td>Nama </td> <td>:</td> <td> '.$surat["nama"].'</td> 
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>NPM </td> <td>:</td> <td> '.$surat["npm"].'</td>
        </tr>  
        <tr>
            <td style ="width :10%"></td>
            <td>Jurusan</td> <td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>Judul Skripsi </td> <td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>SKS yang diselesaikan</td> <td>:</td> <td> '.$surat["sks"].'</td>
        </tr>

    </table>
    <br><br>
    
    Menerangkan dengan sesungguhnya bahwa skripsi telah selesai dan disetujui untuk
    dilaksanakan Ujian Skripsi/Ujian Komprehensif.
    
   
    <br><br><br>

    <table style="width:100%">
        <tr>
            <td style="width:50%">
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Pembimbing Pembantu <br><br><br><br><br><br>
                '.$dospem2.' <br>
                NIP. '.$nip_2.'
            </td>
        </tr>
    </table>
</div>
');
endif;

//form A11
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.11</div>
    <div class="title">FORMULIR LAYAK UJI</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>
    
    Telah diperiksa terhadap skripsi mahasiswa:
    <br>

    
    <table class="padding_isi">
        <tr>
            <td style ="width :10%"></td>
            <td>Nama </td> <td>:</td> <td> '.$surat["nama"].'</td> 
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>NPM </td> <td>:</td> <td> '.$surat["npm"].'</td>
        </tr>  
        <tr>
            <td style ="width :10%"></td>
            <td>Jurusan</td> <td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>Program Studi</td> <td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td style ="width :10%"></td>
            <td>Judul Skripsi </td> <td>:</td> <td> '.$surat["judul"].'</td>
        </tr> 

    </table>
    <br><br>
    
    Skripsi Terlampir.
    
   
    <br><br><br>

    <table style="width:100%">
        <tr>
            <td style="width:50%">
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Ketua Jurusan, <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
            </td>
        </tr>
    </table>
</div>
');

if($dospem2 != null):
// ----------------------------- OPSI 1 | A12-13a --------------------------------------- //
//Form A12
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.12</div>
    <div class="title">FORMULIR PELAKSANAAN UJIAN</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>

    Yth. Dekan Fakultas Ilmu Sosial dan Ilmu Politik<br>
    Universitas Lampung <br><br><br>
    
    Telah diperiksa terhadap skripsi mahasiswa:
    <br>

    

    <table class="padding_isi">
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>
    <br><br>
    
    Telah selesai bimbingan dan siap untuk dilaksanakan Ujian Skripsi/Ujian Komprehensif, oleh karena itu kami mohon ditetapkan Surat Keputusan Ujian Skripsi atas nama mahasiswa tersebut. Adapun pelaksanaan ujian pada:  
    <br>
    <table class="padding_isi">
        <tr>
            <td>Hari/Tanggal </td><td>:</td> <td> '.$hari.', '.$tanggal.'</td>
        </tr>
        <tr>
            <td>Waktu Ujian </td><td>:</td> <td> '.$jam.' WIB</td>
        </tr>
        <tr>
            <td>Tempat </td><td>:</td> <td> Ruang Ujian Jurusan Administrasi Bisnis FISIP Unila</td>
        </tr>
        
    </table>
    <br>
    Dengan Penguji:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Ketua (Pembimbing Utama)  </td><td>:</td> <td> '.$surat["dospem1"].'</td>
        </tr>
        <tr>
            <td>2. Sekretaris (Pembimbing Pembantu) </td><td>:</td> <td> '.$surat["dospem2"].'</td>
        </tr>
        <tr>
            <td>3. Penguji Utama  </td><td>:</td> <td> '.$surat["penguji_u"].'</td>
        </tr>
        
    </table>

    <br>
    Berkas-berkas yang menjadi persyaratan terlampir. Demikian surat kami, atas perhatian
    dan kerja samanya kami ucapkan terima kasih.

<br><br>
    <table style="width:100%">
        <tr>
            <td style="width:50%">
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Ketua Jurusan, <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
            </td>
        </tr>
    </table>
</div>
');

//form A13
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13</div>
    <div class="title">SURAT TUGAS</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <div style="text-align: center;">Nomor : '.$no_surat.'/UN26.16.06/PP.05.02.00/'.$tahun.'</div><br>
    <br>

    <table>
        <tr>
            <td>Lampiran </td> <td>: Satu Berkas</td>
        </tr>
        <tr>
            <td>Perihal </td> <td>: Undangan Ujian Skripsi</td>
        </tr>
    </table>
    <br>
    
    Yth. Komisi Penguji Ujian Skripsi <br>
    Jurusan Ilmu Administrasi Bisnis <br>
    FISIP Universitas Lampung
    <br><br>
    Mengharapkan kehadiran Saudara: <br>
    <table class="padding_isi">
        <tr>
            <td>1. Ketua (Pembimbing Utama)  </td><td>:</td> <td> '.$surat["dospem1"].'</td>
        </tr>
        <tr>
            <td>2. Sekretaris (Pembimbing Pembantu) </td><td>:</td> <td> '.$surat["dospem2"].'</td>
        </tr>
        <tr>
            <td>3. Penguji Utama  </td><td>:</td> <td> '.$surat["penguji_u"].'</td>
        </tr>
        
    </table>
    <br>
    
    Untuk dapat hadir dan menguji pada:  
    <br>
    <table class="padding_isi">
        <tr>
            <td>Hari/Tanggal </td><td>: '.$hari.', '.$tanggal.'</td>
        </tr>
        <tr>
            <td>Waktu Ujian </td><td>: '.$jam.' WIB</td>
        </tr>
        <tr>
            <td>Tempat </td><td>: Ruang Ujian Jurusan Administrasi Bisnis FISIP Unila</td>
        </tr>
        
    </table>
    <br>
    Terhadap Mahasiswa:
    <br>
    <table class="padding_isi">
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    Kehadiran Saudara tidak dapat diwakilkan, atas perhatian dan kehadiranya kami
    sampaikan terima kasih.

<br><br>
    <table style="width:100%">
        <tr>
            <td style="width:50%">
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Ketua Jurusan, <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
            </td>
        </tr>
    </table>
</div>
    
');

//form A13a
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13a</div>
    <div class="title">BERITA ACARA UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <div class="title">UNTUK MENCAPAI GELAR SARJANA ILMU SOSIAL DAN ILMU POLITIK</div>
    <br>
    <br>

    BULAN UJIAN: .................... '.$tahun.'
    <br><br>
    Pada hari ini, ............./....... .............. '.$tahun.' bertempat di Ruang Ujian Jurusan Ilmu
    Administrasi Bisnis FISIP Unila, telah dilaksanakan Ujian Skripsi terhadap mahasiswa:
    <br>
    <table class="padding_isi">
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    <span style="text-align:left !important">Hasil Ujian Skripsi dengan nilai: ...... huruf mutu: ...... Predikat lulus : .....................</span>
    <br><br>
    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.'</td>
        </tr>
    </table>
    <br>
    <table style="width: 100%;">
        <tr>
            <td style="width: 75%;">Komisi Penguji:</td>
            <td>T.T.D</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>1. Ketua (Pembimbing Utama)  </td><td>:</td><td> '.$surat["dospem1"].'</td><td>(...........................) </td><br><br>
        </tr>
        <tr>
            <td>2. Sekretaris (Pembimbing Pembantu) </td><td>:</td><td> '.$surat["dospem2"].'</td><td>(...........................) </td><br><br>
        </tr>
        <tr>
            <td>3. Penguji Utama  </td><td>:</td><td> '.$surat["penguji_u"].'</td><td>(...........................)</td>
        </tr>
        <br><br>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;"></td>
            <td>Tanggal Lulus: ........ ...……............ '.$tahun.'</td>
        </tr>
    </table>
      <br>
      <br>
    Catatan: <br>
    Perbaikan skripsi yang bersangkutan selama 2 (dua) bulan, terhitung mulai tanggal/bulan
    ………………………….. s.d. ………….................... Jika dalam waktu tersebut yang
    bersangkutan tidak dapat menyelesaikan perbaikan, maka hasil ujian skripsi ini dinyatakan
    batal.

</div>
');
else:
// ----------------------------- OPSI 2 | A12-13a --------------------------------------- //
//Form A12
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.12</div>
    <div class="title">FORMULIR PELAKSANAAN UJIAN</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>

    Yth. Dekan Fakultas Ilmu Sosial dan Ilmu Politik<br>
    Universitas Lampung <br><br><br>
    
    Telah diperiksa terhadap skripsi mahasiswa:
    <br>

    

    <table class="padding_isi">
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>
    <br><br>
    
    Telah selesai bimbingan dan siap untuk dilaksanakan Ujian Skripsi/Ujian Komprehensif, oleh karena itu kami mohon ditetapkan Surat Keputusan Ujian Skripsi atas nama mahasiswa tersebut. Adapun pelaksanaan ujian pada:  
    <br>
    <table class="padding_isi">
        <tr>
            <td>Hari/Tanggal </td><td>:</td> <td> '.$hari.', '.$tanggal.'</td>
        </tr>
        <tr>
            <td>Waktu Ujian </td><td>:</td> <td> '.$jam.' WIB</td>
        </tr>
        <tr>
            <td>Tempat </td><td>:</td> <td> Ruang Ujian Jurusan Administrasi Bisnis FISIP Unila</td>
        </tr>
        
    </table>
    <br>
    Dengan Penguji:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Ketua (Pembimbing Utama)  </td><td>:</td> <td> '.$surat["dospem1"].'</td>
        </tr>
        <tr>
            <td>2. Penguji Utama  </td><td>:</td> <td> '.$surat["penguji_u"].'</td>
        </tr>
        <tr>
            <td>3. Penguji Pembantu </td><td>:</td> <td> '.$surat["penguji_p"].'</td>
        </tr>
        
    </table>

    <br>
    Berkas-berkas yang menjadi persyaratan terlampir. Demikian surat kami, atas perhatian
    dan kerja samanya kami ucapkan terima kasih.

<br><br>
    <table style="width:100%">
        <tr>
            <td style="width:50%">
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Ketua Jurusan, <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
            </td>
        </tr>
    </table>
</div>
');

//form A13
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13</div>
    <div class="title">SURAT TUGAS</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <div style="text-align: center;">Nomor : '.$no_surat.'/UN26.16.06/PP.05.02.00/'.$tahun.'</div><br>
    <br>

    <table>
        <tr>
            <td>Lampiran </td> <td>: Satu Berkas</td>
        </tr>
        <tr>
            <td>Perihal </td> <td>: Undangan Ujian Skripsi</td>
        </tr>
    </table>
    <br>
    
    Yth. Komisi Penguji Ujian Skripsi <br>
    Jurusan Ilmu Administrasi Bisnis <br>
    FISIP Universitas Lampung
    <br><br>
    Mengharapkan kehadiran Saudara: <br>
    <table class="padding_isi">
        <tr>
            <td>1. Ketua (Pembimbing Utama)  </td><td>:</td> <td> '.$surat["dospem1"].'</td>
        </tr>
        <tr>
            <td>2. Penguji Utama  </td><td>:</td> <td> '.$surat["penguji_u"].'</td>
        </tr>
        <tr>
            <td>3. Penguji Pembantu </td><td>:</td> <td> '.$surat["penguji_p"].'</td>
        </tr>
        
    </table>
    <br>
    
    Untuk dapat hadir dan menguji pada:  
    <br>
    <table class="padding_isi">
        <tr>
            <td>Hari/Tanggal </td><td>: '.$hari.', '.$tanggal.'</td>
        </tr>
        <tr>
            <td>Waktu Ujian </td><td>: '.$jam.' WIB</td>
        </tr>
        <tr>
            <td>Tempat </td><td>: Ruang Ujian Jurusan Administrasi Bisnis FISIP Unila</td>
        </tr>
        
    </table>
    <br>
    Terhadap Mahasiswa:
    <br>
    <table class="padding_isi">
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    Kehadiran Saudara tidak dapat diwakilkan, atas perhatian dan kehadiranya kami
    sampaikan terima kasih.

<br><br>
    <table style="width:100%">
        <tr>
            <td style="width:50%">
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Ketua Jurusan, <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
            </td>
        </tr>
    </table>
</div>
    
');

//form A13a
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13a</div>
    <div class="title">BERITA ACARA UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <div class="title">UNTUK MENCAPAI GELAR SARJANA ILMU SOSIAL DAN ILMU POLITIK</div>
    <br>
    <br>

    BULAN UJIAN: .................... '.$tahun.'
    <br><br>
    Pada hari ini, ............./....... .............. '.$tahun.' bertempat di Ruang Ujian Jurusan Ilmu
    Administrasi Bisnis FISIP Unila, telah dilaksanakan Ujian Skripsi terhadap mahasiswa:
    <br>
    <table class="padding_isi">
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    Hasil Ujian Skripsi dengan nilai: …… huruf mutu: …… Predikat lulus : ...........................
    <br><br>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.'</td>
        </tr>
    </table>
    <br>
    <table style="width: 100%;">
        <tr>
            <td style="width: 75%;">Komisi Penguji:</td>
            <td>T.T.D</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>1. Ketua (Pembimbing Utama)  </td><td>:</td><td> '.$surat["dospem1"].'</td><td>(...........................) </td><br><br>
        </tr>
        <tr>
            <td>3. Penguji Utama  </td><td>:</td><td> '.$surat["penguji_u"].'</td><td>(...........................) </td><br><br>
        </tr>
        <tr>
            <td>3. Penguji Pembantu </td><td>:</td><td> '.$surat["penguji_p"].'</td><td>(...........................) </td>
        </tr>
        <br><br>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;"></td>
            <td>Tanggal Lulus: ........ ...……............ '.$tahun.'</td>
        </tr>
    </table>
      <br>
      <br>
    Catatan: <br>
    Perbaikan skripsi yang bersangkutan selama 2 (dua) bulan, terhitung mulai tanggal/bulan
    ………………………….. s.d. ………….................... Jika dalam waktu tersebut yang
    bersangkutan tidak dapat menyelesaikan perbaikan, maka hasil ujian skripsi ini dinyatakan
    batal.

</div>
');
endif;

//Form A13b -------------------------------------- Dospem1
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13b</div>
    <div class="title">NILAI UJIAN SKRIPSI/UJIAN KOMPREHENSIF PROGRAM SARJANA</div>
    <div class="title">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</div>
    <br>
    <br><br>

   
    <table >
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    
    <table class="tbl_isi" style="width: 100%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>ASPEK PENILAIAN</th>
                <th>NILAI (ANGKA)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tbl_top">1. <br><br><br><br><br>2.</td>
                <td>Pelaksanaan Ujian <br>
                    1.1 Teknik penyajian <br><br>
                    1.2 Penguasaan Substansi <br><br>
                    Naskah Skripsi <br>
                    2.1 Originalitas <br><br>
                    2.2 Kegunaan dan kemuktahiran tinjauan pustaka <br><br>
                    2.3 Teknik Penulisan <br><br>
                </td>
                <td style="text-align: center">'.$surat["nilai_d1"].'<br><br>
                    <br><br><br>
                    '.$surat["nilai_d1t"].'<br><br>
                    <br><br>
                    <br><br>
                    
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>JUMLAH</td>
                <td style="text-align: center">'.$jumlah_rincid1.'</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>NILAI RATA-RATA (tanpa dibulatkan)</td>
                <td style="text-align: center">'.$mean_rincid1.'</td>
            </tr>

        </tbody>
        
    
    </table>
    <br><br>
    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Pembimbing Utama<br><br><br><br><br><br>
                '.$surat["dospem1"].' <br>
               NIP. '.$nip_1.'
            </td>
        </tr>
    </table>


</div>
');
if($dospem2 != null):
//Form A13b ------------------------------------- Dospem2
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13b</div>
    <div class="title">NILAI UJIAN SKRIPSI/UJIAN KOMPREHENSIF PROGRAM SARJANA</div>
    <div class="title">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</div>
    <br>
    <br><br>

   
    <table >
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    
    <table class="tbl_isi" style="width: 100%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>ASPEK PENILAIAN</th>
                <th>NILAI (ANGKA)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tbl_top">1. <br><br><br><br><br>2.</td>
                <td>Pelaksanaan Ujian <br>
                    1.1 Teknik penyajian <br><br>
                    1.2 Penguasaan Substansi <br><br>
                    Naskah Skripsi <br>
                    2.1 Originalitas <br><br>
                    2.2 Kegunaan dan kemuktahiran tinjauan pustaka <br><br>
                    2.3 Teknik Penulisan <br><br>
                </td>
                <td style="text-align: center">'.$surat["nilai_d2"].'<br><br>
                    <br><br><br>
                    '.$surat["nilai_d2t"].'<br><br>
                    <br><br>
                    <br><br>
                    
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>JUMLAH</td>
                <td style="text-align: center">'.$jumlah_rincid2.'</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>NILAI RATA-RATA (tanpa dibulatkan)</td>
                <td style="text-align: center">'.$mean_rincid2.'</td>
            </tr>

        </tbody>
        
    
    </table>
    <br><br>
    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Pembimbing Pembantu<br><br><br><br><br><br>
                '.$surat["dospem2"].' <br>
               NIP. '.$nip_2.'
            </td>
        </tr>
    </table>


</div>
');
endif;
//Form A13b ------------------------------------- Penguji1
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13b</div>
    <div class="title">NILAI UJIAN SKRIPSI/UJIAN KOMPREHENSIF PROGRAM SARJANA</div>
    <div class="title">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</div>
    <br>
    <br><br>

   
    <table >
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    
    <table class="tbl_isi" style="width: 100%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>ASPEK PENILAIAN</th>
                <th>NILAI (ANGKA)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tbl_top">1. <br><br><br><br><br>2.</td>
                <td>Pelaksanaan Ujian <br>
                    1.1 Teknik penyajian <br><br>
                    1.2 Penguasaan Substansi <br><br>
                    Naskah Skripsi <br>
                    2.1 Originalitas <br><br>
                    2.2 Kegunaan dan kemuktahiran tinjauan pustaka <br><br>
                    2.3 Teknik Penulisan <br><br>
                </td>
                <td style="text-align: center">'.$surat["nilai_pu"].'<br><br>
                    <br><br><br>
                    '.$surat["nilai_put"].'<br><br>
                    <br><br>
                    <br><br>
                    
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>JUMLAH</td>
                <td style="text-align: center">'.$jumlah_rincip1.'</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>NILAI RATA-RATA (tanpa dibulatkan)</td>
                <td style="text-align: center">'.$mean_rincip1.'</td>
            </tr>

        </tbody>
        
    
    </table>
    <br><br>
    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Penguji Utama<br><br><br><br><br><br>
                '.$surat["penguji_u"].' <br>
               NIP. '.$nip_p.'
            </td>
        </tr>
    </table>


</div>
');
if($penguji_p != null):
//Form A13b ------------------------------------- Penguji2
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13b</div>
    <div class="title">NILAI UJIAN SKRIPSI/UJIAN KOMPREHENSIF PROGRAM SARJANA</div>
    <div class="title">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</div>
    <br>
    <br><br>

   
    <table >
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    
    <table class="tbl_isi" style="width: 100%;">
        <thead>
            <tr>
                <th>No.</th>
                <th>ASPEK PENILAIAN</th>
                <th>NILAI (ANGKA)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tbl_top">1. <br><br><br><br><br>2.</td>
                <td>Pelaksanaan Ujian <br>
                    1.1 Teknik penyajian <br><br>
                    1.2 Penguasaan Substansi <br><br>
                    Naskah Skripsi <br>
                    2.1 Originalitas <br><br>
                    2.2 Kegunaan dan kemuktahiran tinjauan pustaka <br><br>
                    2.3 Teknik Penulisan <br><br>
                </td>
                <td style="text-align: center">'.$surat["nilai_pp"].'<br><br>
                    <br><br><br>
                    '.$surat["nilai_ppt"].'<br><br>
                    <br><br>
                    <br><br>
                    
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td>JUMLAH</td>
                <td style="text-align: center">'.$jumlah_rincip2.'</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>NILAI RATA-RATA (tanpa dibulatkan)</td>
                <td style="text-align: center">'.$mean_rincip2.'</td>
            </tr>

        </tbody>
        
    
    </table>
    <br><br>
    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Penguji Pembantu<br><br><br><br><br><br>
                '.$surat["penguji_p"].' <br>
               NIP. '.$nip_pp.'
            </td>
        </tr>
    </table>


</div>
');
endif;

if($surat["dospem2"] != null):
//FORM A13c ---------------------------------------------- OPSI 1
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13c</div>
    <div class="title">REKAPITULASI NILAI UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <div class="title">PROGRAM SARJANA</div>

    <table>
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>
</div>
<table class="tbl_isi tbl_margin">
    <thead>
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama Penguji</th>
            <th rowspan="2">Status</th>
            <th rowspan="2">Nilai</th>
            <th colspan="2">Bobot</th>
            <th rowspan="2">Nilai X Bobot</th>
        </tr>
        <tr>
            <th>Satu Pembimbing</th>
            <th>Dua Pembimbing</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tbl_top">1.</td>
            <td>Pembimbing Utama <br>
                '.$surat["dospem1"].'<br>
                NIP. '.$nip_1.'
            </td>
            <td>Ketua</td>
            <td style="text-align: center">'.$mean_rincid1.'</td>
            <td class="tbl_center">60%</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xd1.'</td>
        </tr>
        <tr>
            <td class="tbl_top">2.</td>
            <td>Pembimbing Pembantu <br>
                '.$surat["dospem2"].'<br>
                NIP. '.$nip_2.'
            </td>
            <td>Sekretaris</td>
            <td style="text-align: center">'.$mean_rincid2.'</td>
            <td class="tbl_center">0%</td>
            <td class="tbl_center">20%</td>
            <td class="tbl_center">'.$xd2.'</td>
        </tr>
        <tr style="text-align: center">
            <td class="tbl_top">3.</td>
            <td>Penguji Utama <br>
                '.$surat["penguji_u"].'<br>
                NIP. '.$nip_p.'
            </td>
            <td>Penguji Utama</td>
            <td class="tbl_center">'.$mean_rincip1.'</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xpu.'</td>
        </tr>
        <tr>
            <td></td>
            <td>
                Jumlah
            </td>
            <td></td>
            <td></td>
            <td class="tbl_center">100%</td>
            <td class="tbl_center">100%</td>
            <td class="tbl_center">'.$na.'</td>
        </tr>
    </tbody>
</table>
<br/>
<div class="teks_isi">
    <table>
        <tr>
            <td>Nilai Akhir  </td><td>: '.$na.'</td>
        </tr>
        <tr>
            <td>Predikat Lulus  </td><td>: ...........................................................</td>
        </tr>
        <tr>
            <td>Tim Penguji  </td><td>: </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                1. '.$surat["dospem1"].'<br><br>
                2. '.$surat["dospem2"].'<br><br>
                3. '.$surat["penguji_u"].'<br><br>
            </td>
            <td>
                (..........................) Ketua <br><br>
                (..........................) Sekretaris <br><br>
                (..........................) Penguji Utama <br><br>
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Ketua, <br><br><br><br><br><br>
                '.$surat["dospem1"].' <br>
            NIP. '.$nip_1.'
            </td>
        </tr>
    </table>
</div>
');

else:
//FORM A13c ---------------------------------------------- OPSI 2
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13c</div>
    <div class="title">REKAPITULASI NILAI UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <div class="title">PROGRAM SARJANA</div>

    <table>
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>
</div>

<table class="tbl_isi tbl_margin">
    <thead>
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama Penguji</th>
            <th rowspan="2">Status</th>
            <th rowspan="2">Nilai</th>
            <th colspan="2">Bobot</th>
            <th rowspan="2">Nilai X Bobot</th>
        </tr>
        <tr>
            <th>Satu Pembimbing</th>
            <th>Dua Pembimbing</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tbl_top">1.</td>
            <td>Pembimbing Utama <br>
                '.$surat["dospem1"].'<br>
                NIP. '.$nip_1.'
            </td>
            <td>Ketua</td>
            <td style="text-align: center">'.$mean_rincid1.'</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xd1.'</td>
        </tr>
        <tr style="text-align: center">
            <td class="tbl_top">2.</td>
            <td>Penguji Utama <br>
                '.$surat["penguji_u"].'<br>
                NIP. '.$nip_p.'
            </td>
            <td>Penguji Utama</td>
            <td class="tbl_center">'.$mean_rincip1.'</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xpu.'</td>
        </tr>
        <tr>
            <td class="tbl_top">3.</td>
            <td>Pembimbing Pembantu<br>
                '.$surat["penguji_p"].'<br>
                NIP. '.$nip_pp.'
            </td>
            <td>Pembimbing Pembantu</td>
            <td style="text-align: center">'.$mean_rincip2.'</td>
            <td class="tbl_center">20%</td>
            <td class="tbl_center">20%</td>
            <td class="tbl_center">'.$xpp.'</td>
        </tr>
        <tr>
            <td></td>
            <td>
                Jumlah
            </td>
            <td></td>
            <td></td>
            <td class="tbl_center">100%</td>
            <td class="tbl_center">100%</td>
            <td class="tbl_center">'.$na_2.'</td>
        </tr>
    </tbody>
</table>
<br/>
<div class="teks_isi">
    <table>
        <tr>
            <td>Nilai Akhir  </td><td>: '.$na_2.'</td>
        </tr>
        <tr>
            <td>Predikat Lulus  </td><td>: ...........................................................</td>
        </tr>
        <tr>
            <td>Tim Penguji  </td><td>: </td>
        </tr>
    </table>
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                1. '.$surat["dospem1"].'<br><br>
                2. '.$surat["penguji_u"].' <br><br>
                3. '.$surat["penguji_p"].' <br><br>
            </td>
            <td>
                (..........................) Ketua <br><br>
                (..........................) Penguji Utama <br><br>
                (..........................) Penguji Pembantu <br><br>
            </td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Ketua, <br><br><br><br><br><br>
                '.$surat["dospem1"].' <br>
            NIP. '.$nip_1.'
            </td>
        </tr>
    </table>
</div>
');
endif;

//form A13d------------------------------------------------------- DOSPEM 1
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13d</div>
    <div class="title">LEMBAR PERBAIKAN</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>
    <table>
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    <div style="font-weight: bold;">CATATAN PERBAIKAN :</div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
            Pembimbing Utama <br><br><br><br><br>
            '.$surat["dospem1"].' <br>
                NIP. '.$nip_1.'
            </td>
        </tr>
    </table>
</div>
');
if($dospem2 != null):
//form A13d ------------------------------------------------------- DOSPEM 2
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.13d</div>
    <div class="title">LEMBAR PERBAIKAN</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>

   
    <table>
        <tr>
            <td>Nama  </td><td>:</td> <td> '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>:</td> <td> '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>:</td> <td> Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi  </td><td>:</td> <td> '.$surat["judul"].'</td>
        </tr>
    </table>

    <br><br>
    <div style="font-weight: bold;">CATATAN PERBAIKAN :</div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
            Pembimbing Pembantu <br><br><br><br><br>
            '.$dospem2.' <br>
                NIP. '.$nip_2.'
            </td>
        </tr>
    </table>
</div>
');
endif;

//form A14
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.14</div>
    <div class="title">DAFTAR KELENGKAPAN PERSYARATAN</div>
    <div class="title">UJIAN SKRIPSI/UJIAN KOMPREHENSIF</div>
    <br>
    <table>
        <tr>
            <td>Nama  </td><td>: '.$surat["nama"].'</td>
        </tr>
        <tr>
            <td>NPM  </td><td>: '.$surat["npm"].'</td>
        </tr>
        <tr>
            <td>Jurusan/PS  </td><td>: Ilmu Administrasi Bisnis</td>
        </tr>
    </table>
</div>

    <table class="tbl_isi tbl_margin" style="width: 100%;">
        <thead>
            <tr>
                <th style="width: 5%;">No.</th>
                <th style="width: 80%;">JENIS PERSYARATAKAN</th>
                <th style="width: 15%;">CEKING</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1.</td>
                <td>Foto 4X6 = 2 lembar (berwarna)</td>
                <td></td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Foto copy KTM = 1 lembar</td>
                <td></td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Foto copy TOEFL/EPT = 1 lembar</td>
                <td></td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Foto copy ijazah SMA = 1 lembar</td>
                <td></td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Foto copy piagam PROPTI = 1 lembar)</td>
                <td></td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Foto copy UKT semester terakhir = 1 lembar</td>
                <td></td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Transkrip nilai yang ditandatangani WD 1</td>
                <td></td>
            </tr>
            <tr>
                <td>8.</td>
                <td>KHS semester I s.d semester akhir</td>
                <td></td>
            </tr>
            <tr>
                <td>9.</td>
                <td>Surat keterangan bebas pinjam dari perpustakaan Unila dan R. baca FISIP</td>
                <td></td>
            </tr>
            <tr>
                <td>10.</td>
                <td>SK bimbingan skripsi</td>
                <td></td>
            </tr>
            <tr>
                <td>11.</td>
                <td>Surat keterangan yang mengetahui PA untuk pengajuan outline (Form A.1)</td>
                <td></td>
            </tr>
            <tr>
                <td>12.</td>
                <td>Outline usulan skripsi (Form A.2)</td>
                <td></td>
            </tr>
            <tr>
                <td>13.</td>
                <td>Surat persetujuan komisi pembimbing (Form A.3)</td>
                <td></td>
            </tr>
            <tr>
                <td>14.</td>
                <td>Form proses bimbingan skripsi (Form A.4)</td>
                <td></td>
            </tr>
            <tr>
                <td>15.</td>
                <td>Kartu peserta seminar (Form A.5)</td>
                <td></td>
            </tr>
            <tr>
                <td>16.</td>
                <td>Berita acara, surat tugas, daftar hadir seminar I (usul) dan seminar II (hasil)</td>
                <td></td>
            </tr>
            <tr>
                <td>17.</td>
                <td>Artikel ilmiah, kelengkapan jurnal, dan soft copynya (Form A.8 dan A.8a)</td>
                <td></td>
            </tr>
            <tr>
                <td>18.</td>
                <td>Surat keternagan ujian skripsi/ujian komprehensif (Form A.9)</td>
                <td></td>
            </tr>
            <tr>
                <td>19.</td>
                <td>Formulir layak uji ujian skripsi/ujian komprehensif (Form A.10)</td>
                <td></td>
            </tr>
            <tr>
                <td>20.</td>
                <td>Formulir pelaksanaan ujian ujian skripsi/ujian komprehensif (Form A.11)</td>
                <td></td>
            </tr>
            <tr>
                <td>21.</td>
                <td>Surat tugas ujian skripsi/ujian komprehensif (Form A.12)</td>
                <td></td>
            </tr>
            <tr>
                <td>22.</td>
                <td>Surat pernyataan keaslian skripsi bermaterai 6.000</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
<div class="teks_isi">
    <br>
    <table>
        <tr>
            <td style="width: 55%;">
                Mengetahui,<br>
                Ketua Jurusan/PS <br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
            </td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Staff Jurusan/PS, <br><br><br><br><br>
                ........................................ <br>
                NIP.....................................
            </td>
        </tr>
    </table>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>

    <div style="text-align: center; font-weight: bold">PERNYATAAN KEASLIAN SKRIPSI</div>
    <br><br><br>
    Dengan ini saya menyatakan bahwa:
    <br>
    <table>
        <tr>
            <td>1. </td>
            <td>Karya tulis saya, Skripsi ini, adalah asli dan belum pernah diajukan untuk mendapatkan
                gelar akademik (Sarjana), baik di Universitas Lampung maupun perguruan tinggi
                lainya.
            </td>
        </tr>
        <tr>
            <td>2. </td>
            <td>Karya tulis ini murni gagasan, rumusan, dan penelitian saya sendiri tanpa bantuan pihak
                lain, kecuali arahan dari Komisi Pembimbing.
            </td>
        </tr>
        <tr>
            <td>3. </td>
            <td>Dalam karya tulis ini tidak terdapat karya atau pendapat yang telah di tulis atau
                dipublikasikan orang lain, kecuali secara tertulis dengan jelas dicantumkan sebagai
                acuan dalam naskah dengan disebutkan nama pengarang dan dicantumkan dalam daftar
                pustaka.
            </td>
        </tr>
        <tr>
            <td>4. </td>
            <td>Pernyataan ini saya buat dengan sesungguhnya dan apabila di kemudian hari terdapat
                penyimpangan dan ketidakbenaran dalam pernyataan ini, maka saya bersedia menerima
                sanksi akademik berupa pencabutan gelar yang telah diperoleh karena karya tulis ini,
                serta sanksi lainya sesuai dengan norma yang berlaku di perguruan tinggi.
            </td>
        </tr>
    </table>
    <br><br><br>

    <table>
        <tr>
            <td style="width: 55%;"></td>
            <td>Bandar Lampung, '.$tanggal_print.' <br>
                Yang membuat pernyataan, <br><br><br>Materai Rp.6000<br><br><br>
                '.$surat["nama"].' <br>
               NPM. '.$surat["npm"].'
            </td>
        </tr>
    </table>

</div>
');

$mpdf->Output('FORM A9-A14.pdf','D');
?>