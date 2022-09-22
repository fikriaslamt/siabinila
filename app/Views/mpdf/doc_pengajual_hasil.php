<?php
namespace App\Libraries;
namespace App\Controllers;

$xd1 = $nilai_d1*(40/100); 
$xd2 = $nilai_d2*(20/100);
$xpu = $nilai_pu*(40/100);
$xpp = $nilai_pp*(20/100);
$na   = $xd1+$xd2+$xpu;
$na_2 = $xd1+$xpu+$xpp;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '5', 'margin_bottom' => '15',
'margin_left' => '8', 'margin_right' => '8', 'defaultfooterline' => 0]);
$mpdf->setFooter('<div class="txfooter">{PAGENO}</div>');

if($surat["dospem2"] != null):
//form A8 ------------------------------------------------------- OPSI 1
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.8</div>
    <div class="title">SURAT TUGAS SEMINAR I/SEMINAR HASIL PENELITIAN</div>
    <div style="text-align: center;">Nomor : '.$no_surat.'/UN26.16.06/PP.05.02.00/'.date("Y").'</div><br>
    Ketua Jurusan Ilmu Administrasi Bisnis dengan ini menugaskan kepada :<br/>

    <br>
    <table class="tbl_isi" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>NAMA</th>
                <th>JENIS TUGAS</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>1.</td>
                <td>'.$surat["dospem1"].'</td>
                <td>Ketua Pelaksana Seminar (Pembimbing Utama)</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>'.$surat["dospem2"].'</td>
                <td>Sekretaris (Pembimbing Pembantu)</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>'.$surat["penguji_u"].'</td>
                <td>Penguji Utama</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>'.$surat["pembahas1"].'</td>
                <td>Pembahas Mahasiswa I</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>'.$surat["pembahas2"].'</td>
                <td>Pembahas Mahasiswa II</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>'.$surat["moderator"].'</td>
                <td>Moderator</td>
            </tr>
        </tbody>       
    </table>
    <br>
    Untuk melaksanakan Seminar I/Seminar Hasil Penelitian mahasiswa atas nama :<br/>
    <table class="padding_isi">
        <tr>
            <td>Nama</td><td> : </td><td>'.$nama.'</td>
        </tr>
        <tr>
            <td>NPM</td><td>: </td><td>'.$npm.'</td>
        </tr>
        <tr>
            <td>Judul Skripsi</td><td>: </td><td>'.$judul.'</td>
        </tr>
    </table>
    <br>
    Seminar dilaksanakan pada :<br/>
    <table class="padding_isi">
        <tr>
            <td>Hari/Tanggal</td><td> : </td><td>'.$hari.', '.$tanggal.'</td>
        </tr>
        <tr>
            <td>Waktu</td><td> : </td><td>'.$jam.' WIB</td>
        </tr>
        <tr>
            <td>Tempat</td><td> : </td><td>Ruang Seminar Adm. Bisnis Gd. B Lt. II FISIP Unila</td>
        </tr>
    </table>
    <br>
    <p>Setelah kegiatan seminar selesai, Ketua Pelaksana Seminar agar menyerahkan berita
        acara seminar dan daftar hadir mahasiswa ke jurusan. Demikian surat tugas ini dibuat
        untuk dilaksanakan sebagaimana mestinya.</p>
    <br>
    <table style="width:100%">
        <tr>
            <td style="width:50%"></td>
            <td > 
                Bandar Lampung, '.$tanggal_print.'
                <br>
                Ketua Jurusan, 
                <br><br><br><br><br><br>
                '.$kajur.'<br>
                '.$nip_kajur.'

            </td>
        </tr>
    </table>

</div>
');
else:
//form A8 ------------------------------------------------------- OPSI 2
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.8</div>
    <div class="title">SURAT TUGAS SEMIANR I/SEMINAR HASIL PENELITIAN</div>
    <div style="text-align: center;">Nomor : '.$no_surat.'/UN26.16.06/PP.05.02.00/'.date("Y").'</div><br>
    Ketua Jurusan Ilmu Administrasi Bisnis dengan ini menugaskan kepada :<br/>

    <br>
    <table class="tbl_isi" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>NAMA</th>
                <th>JENIS TUGAS</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td>1.</td>
                <td>'.$surat["dospem1"].'</td>
                <td>Ketua Pelaksana Seminar (Pembimbing Utama)</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>'.$surat["penguji_u"].'</td>
                <td>Penguji Utama</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>'.$surat["penguji_p"].'</td>
                <td>Penguji Pembantu</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>'.$surat["pembahas1"].'</td>
                <td>Pembahas Mahasiswa I</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>'.$surat["pembahas2"].'</td>
                <td>Pembahas Mahasiswa II</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>'.$surat["moderator"].'</td>
                <td>Moderator</td>
            </tr>
        </tbody>       
    </table>
    <br>
    Untuk melaksanakan Seminar I/Seminar Hasil Penelitian mahasiswa atas nama :<br/>
    <table class="padding_isi">
        <tr>
            <td>Nama</td><td> : </td><td>'.$nama.'</td>
        </tr>
        <tr>
            <td>NPM</td><td>: </td><td>'.$npm.'</td>
        </tr>
        <tr>
            <td>Judul Skripsi</td><td>: </td><td>'.$judul.'</td>
        </tr>
    </table>
    <br>
    Seminar dilaksanakan pada :<br/>
    <table class="padding_isi">
        <tr>
            <td>Hari/Tanggal</td><td> : </td><td>'.$hari.', '.$tanggal.'</td>
        </tr>
        <tr>
            <td>Waktu</td><td> : </td><td>'.$jam.' WIB</td>
        </tr>
        <tr>
            <td>Tempat</td><td> : </td><td>Ruang Seminar Adm. Bisnis Gd. B Lt. II FISIP Unila</td>
        </tr>
    </table>
    <br>
    <p>Setelah kegiatan seminar selesai, Ketua Pelaksana Seminar agar menyerahkan berita
        acara seminar dan daftar hadir mahasiswa ke jurusan. Demikian surat tugas ini dibuat
        untuk dilaksanakan sebagaimana mestinya.</p>
    <br>
    <table style="width:100%">
        <tr>
            <td style="width:50%"></td>
            <td > 
                Bandar Lampung, '.$tanggal_print.'
                <br>
                Ketua Jurusan, 
                <br><br><br><br><br><br>
                '.$kajur.'<br>
                '.$nip_kajur.'

            </td>
        </tr>
    </table>

</div>
');
endif;

if($surat["dospem2"] != null):
//form A8a ----------------------------------------------- OPSI 1
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.8a</div>
    <div class="title">BERITA ACARA SEMINAR I/SEMINAR HASIL PENELITIAN</div>
    <p>Pada hari ini .........., tanggal .......... bulan .........., tahun .......... bertempat di ruang 
    seminar Jurusan Ilmu Administrasi Bisnis FISIP Unila, telah diselenggarakan Seminar
    I/Seminar Hasil Penelitian (Skripsi) mahasiswa dengan judul:</p>
    <p>'.$judul.'</p>
    Dengan penyaji: <br>

    <table>
        <tr>
            <td>Nama Mahasiswa </td> <td>: '.$nama.'</td>
        </tr>
        <tr>
            <td>NPM </td> <td>: '.$npm.'</td> 
        </tr>
        <tr>
            <td>Pembimbing Utama </td> <td>: '.$surat["dospem1"].' </td>
        </tr>
        <tr>
            <td>Pembimbing Pembantu </td> <td>: '.$surat["dospem2"].' </td>
        </tr>
        <tr>
            <td>Dosen Penguji </td> <td>: '.$surat["penguji_u"].' </td>
        </tr>
        <tr>
            <td>Pembahas Mahasiswa I </td> <td>: '.$surat["pembahas1"].' </td>
        </tr>
        <tr>
            <td>Pembahas Mahasiswa II </td> <td>: '.$surat["pembahas2"].' </td>
        </tr>
        <tr>
            <td>Moderator</td> <td>: '.$surat["moderator"].' </td>
        </tr>
        <tr>
            <td>Jumlah Mahasiswa Yang hadir</td> 
        </tr>
        <tr>
            <td> (daftar terlampir)</td> <td>: &nbsp;...... orang</td>
        </tr>

    </table>
    <br>
    Dengan hasil seminar sebagai berikut: <br>
    I. Saran Pembimbing dan Penguji: 

    <table class="padding_isi">
        <tr>
            <td>1............................................................</td>
        </tr>
        <tr>
            <td>2............................................................</td>
        </tr>
        <tr>
            <td>3............................................................</td>
        </tr>
        <tr>
            <td>4............................................................</td>
        </tr>
        <tr>
            <td>5............................................................</td>
        </tr>
    </table>
    II. Saran Pembahas Mahasiswa I & II: 

    <table class="padding_isi">
        <tr>
            <td>1............................................................</td>
        </tr>
        <tr>
            <td>2............................................................</td>
        </tr>
        <tr>
            <td>3............................................................</td>
        </tr>
        <tr>
            <td>4............................................................</td>
        </tr>
        <tr>
            <td>5............................................................</td>
        </tr>
    </table>
    III. Perbaikan Hasil Seminar 

    <table class="padding_isi">
        <tr>
            <td>1............................................................</td>
        </tr>
        <tr>
            <td>2............................................................</td>
        </tr>
        <tr>
            <td>3............................................................</td>
        </tr>
        <tr>
            <td>4............................................................</td>
        </tr>
        <tr>
            <td>5............................................................</td>
        </tr>
    </table>
    <pagebreak><br><br><br>
    Demikian berita acara ini dibuat dengan sebenarnya, agar dapat dipergunakan
    sebagaimana mestinya. <br><br>

    Mengetahui/Menyetujui: <br>
    <table>
        <tr>
            <td>1. Pembimbing Utama</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>2. Pembimbing Pembantu</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>3. Penguji Utama</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>4. Pembahas Mahasiswa I</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>5. Pembahas Mahasiswa II</td><td>(.............................)</td><br><br>
        </tr>
    </table>
      <br><br><br>

    <table style="width:100%">
        <tr>
            <td style="width:60%"></td>
            <td > 
                Ketua Pelaksana Seminar,
                <br><br><br><br><br><br>
                '.$surat["dospem1"].'<br>
                '.$nip_1.'

            </td>
        </tr>
    </table>
    
</div>
');
else:
//form A8a ----------------------------------------------- OPSI 2
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.8a</div>
    <div class="title">BERITA ACARA SEMINAR I/SEMINAR HASIL PENELITIAN</div>
    <p>Pada hari ini .........., tanggal .......... bulan .........., tahun .......... bertempat di ruang 
    seminar Jurusan Ilmu Administrasi Bisnis FISIP Unila, telah diselenggarakan Seminar
    I/Seminar Hasil Penelitian (Skripsi) mahasiswa dengan judul:</p>
    <p>'.$judul.'</p>
    Dengan penyaji: <br>

    <table>
        <tr>
            <td>Nama Mahasiswa </td> <td>: '.$nama.'</td>
        </tr>
        <tr>
            <td>NPM </td> <td>: '.$npm.'</td> 
        </tr>
        <tr>
            <td>Pembimbing Utama </td> <td>: '.$surat["dospem1"].' </td>
        </tr>
        <tr>
            <td>Penguji Utama</td> <td>: '.$surat["penguji_u"].' </td>
        </tr>
        <tr>
            <td>Penguji Pembantu</td> <td>: '.$surat["penguji_p"].' </td>
        </tr>
        <tr>
            <td>Pembahas Mahasiswa I </td> <td>: '.$surat["pembahas1"].' </td>
        </tr>
        <tr>
            <td>Pembahas Mahasiswa II </td> <td>: '.$surat["pembahas2"].' </td>
        </tr>
        <tr>
            <td>Moderator</td> <td>: '.$surat["moderator"].' </td>
        </tr>
        <tr>
            <td>Jumlah Mahasiswa Yang hadir</td> 
        </tr>
        <tr>
            <td> (daftar terlampir)</td> <td>: &nbsp;...... orang</td>
        </tr>

    </table>
    <br>
    Dengan hasil seminar sebagai berikut: <br>
    I. Saran Pembimbing dan Penguji: 

    <table class="padding_isi">
        <tr>
            <td>1............................................................</td>
        </tr>
        <tr>
            <td>2............................................................</td>
        </tr>
        <tr>
            <td>3............................................................</td>
        </tr>
        <tr>
            <td>4............................................................</td>
        </tr>
        <tr>
            <td>5............................................................</td>
        </tr>
    </table>
    II. Saran Pembahas Mahasiswa I & II: 

    <table class="padding_isi">
        <tr>
            <td>1............................................................</td>
        </tr>
        <tr>
            <td>2............................................................</td>
        </tr>
        <tr>
            <td>3............................................................</td>
        </tr>
        <tr>
            <td>4............................................................</td>
        </tr>
        <tr>
            <td>5............................................................</td>
        </tr>
    </table>
    III. Perbaikan Hasil Seminar 

    <table class="padding_isi">
        <tr>
            <td>1............................................................</td>
        </tr>
        <tr>
            <td>2............................................................</td>
        </tr>
        <tr>
            <td>3............................................................</td>
        </tr>
        <tr>
            <td>4............................................................</td>
        </tr>
        <tr>
            <td>5............................................................</td>
        </tr>
    </table>
    <pagebreak><br><br><br>
    Demikian berita acara ini dibuat dengan sebenarnya, agar dapat dipergunakan
    sebagaimana mestinya. <br><br>

    Mengetahui/Menyetujui: <br>
    <table>
        <tr>
            <td>1. Pembimbing Utama</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>2. Pembimbing Pembantu</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>3. Penguji Utama</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>4. Pembahas Mahasiswa I</td><td>(.............................)</td><br><br>
        </tr>
        <tr>
            <td>5. Pembahas Mahasiswa II</td><td>(.............................)</td><br><br>
        </tr>
    </table>
      <br><br><br>

    <table style="width:100%">
        <tr>
            <td style="width:60%"></td>
            <td > 
                Ketua Pelaksana Seminar,
                <br><br><br><br><br><br>
                '.$surat["dospem1"].'<br>
                '.$nip_1.'

            </td>
        </tr>
    </table>
    
</div>
');
endif;

if($surat["dospem2"] != null):
//FORM A8b ----------------------------------------- OPSI 1
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.8b</div>
    <div class="title">FORM NILAI SEMINAR II/SEMINAR HASIL PENELITIAN</div>


    <table>
        <tr>
            <td>Nama</td> <td>: '.$nama.'</td>
        </tr>
        <tr>
            <td>NPM </td> <td>: '.$npm.'</td> 
        </tr>
        <tr>
            <td>Jurusan/PS </td> <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi </td> <td>: '.$judul.' </td>
        </tr>
 

    </table>
    <br>


    <table class="tbl_isi">
        <thead>
            <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">PENGUJI</th>               
                <th colspan="3">Satu Pembimbing</th>          
                <th colspan="3">Dua Pembimbing</th>
                <th rowspan="2">Tanda Tangan</th>
            </tr>
            <tr>
                <th>Nilai</th>
                <th>Bobot</th>
                <th>Nilai X Bobot</th>
                
                <th>Nilai</th>
                <th>Bobot</th>
                <th>Nilai X Bobot</th>
            </tr>

        </thead>

        <tbody>
        <tr> 
            <td>1.</td>
            <td>Pembimbing Utama <br> '.$surat["dospem1"].' <br> NIP.'.$nip_1.'</td>
            <td></td>
            <td class="tbl_center">60%</td>
            <td></td>
            <td class="tbl_center">'.$nilai_d1.'</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xd1.'</td>
            <td></td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Pembimbing Pembantu <br> '.$surat["dospem2"].' <br> NIP. '.$nip_2.'</td>
            <td></td>
            <td class="tbl_center">0%</td>
            <td></td>
            <td class="tbl_center">'.$nilai_d2.'</td>
            <td class="tbl_center">20%</td>
            <td class="tbl_center">'.$xd2.'</td>
            <td></td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Penguji Utama <br> '.$surat["penguji_u"].' <br> NIP. '.$nip_p.'</td>
            <td></td>
            <td class="tbl_center">40%</td>
            <td></td>
            <td class="tbl_center">'.$nilai_pu.'</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xpu.'</td>
            <td></td>
        </tr>

        <tr>
            
            <td colspan="2">Nilai Akhir</td>
            <td></td>
            <td class="tbl_center">100</td>
            <td></td>
            <td></td>
            <td class="tbl_center">100</td>
            <td class="tbl_center">'.$na.'</td>
            <td></td>
        </tr>
            
        </tbody>
        
    </table><br/>
    Nilai Akhir Seminar II/Seminar Hasil Penelitian: '.$na.' <br><br>

    Komponen Penilaian meliputi: <br>
    
    <table class="tbl_isi">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kriteria</th>
                <th>Acuan Penelitian</th>
                <th>Bobot</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td>Permasalahan</td>
                <td>Orisinalitas & kemutakhiran topik, ketajaman rumusan masalah</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Manfaat hasil penelitian</td>
                <td>Pengembangan IPTEK dan pembangunan</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Methodelogi Penelitian</td>
                <td>Ketepatan metode yang digunakan, comprehensiveness, dan kedetailan metode</td>
                <td>25%</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Referensi acuan (maksimal 7 tahun terakhir)</td>
                <td>Kedalaman pustaka pendukung, relevansi, dan kemutakhiran daftar pustaka</td>
                <td>15%</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Kelayakan Penelitian</td>
                <td>Kesesuaian jadwal, format penulisan.</td>
                <td>20%</td>
            </tr>
        </tbody>
    </table>

    
</div>
');

else:
//FORM A8b ----------------------------------------- OPSI 2
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.8b</div>
    <div class="title">FORM NILAI SEMINAR II/SEMINAR HASIL PENELITIAN</div>


    <table>
        <tr>
            <td>Nama</td> <td>: '.$nama.'</td>
        </tr>
        <tr>
            <td>NPM </td> <td>: '.$npm.'</td> 
        </tr>
        <tr>
            <td>Jurusan/PS </td> <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi </td> <td>: '.$judul.' </td>
        </tr>
 

    </table>
    <br>


    <table class="tbl_isi">
        <thead>
            <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">PENGUJI</th>               
                <th colspan="3">Satu Pembimbing</th>          
                <th colspan="3">Dua Pembimbing</th>
                <th rowspan="2">Tanda Tangan</th>
            </tr>
            <tr>
                <th>Nilai</th>
                <th>Bobot</th>
                <th>Nilai X Bobot</th>
                
                <th>Nilai</th>
                <th>Bobot</th>
                <th>Nilai X Bobot</th>
            </tr>

        </thead>

        <tbody>
        <tr> 
            <td>1.</td>
            <td>Pembimbing Utama <br> '.$surat["dospem1"].' <br> NIP.'.$nip_1.'</td>
            <td class="tbl_center">'.$nilai_d1.'</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xd1.'</td>
            <td></td>
            <td class="tbl_center">40%</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Penguji Utama <br> '.$surat["penguji_u"].' <br> NIP. '.$nip_p.'</td>
            <td class="tbl_center">'.$nilai_pu.'</td>
            <td class="tbl_center">40%</td>
            <td class="tbl_center">'.$xpu.'</td>
            <td></td>
            <td class="tbl_center">40%</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Penguji Utama <br> '.$surat["penguji_p"].' <br> NIP.'.$nip_pp.'</td>
            <td class="tbl_center">'.$nilai_pp.'</td>
            <td class="tbl_center">20%</td>
            <td class="tbl_center">'.$xpp.'</td>
            <td class="tbl_center"></td>
            <td class="tbl_center">20%</td>
            <td class="tbl_center"></td>
            <td></td>
        </tr>

        <tr>
            
            <td colspan="2">Nilai Akhir</td>
            <td></td>
            <td class="tbl_center">100</td>
            <td class="tbl_center">'.$na_2.'</td>
            <td></td>
            <td class="tbl_center">100</td>
            <td ></td>
            <td></td>
        </tr>
            
        </tbody>
        
    </table><br/>
    Nilai Akhir Seminar II/Seminar Hasil Penelitian: '.$na_2.' <br><br>

    Komponen Penilaian meliputi: <br>
    
    <table class="tbl_isi">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kriteria</th>
                <th>Acuan Penelitian</th>
                <th>Bobot</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td>Permasalahan</td>
                <td>Orisinalitas & kemutakhiran topik, ketajaman rumusan masalah</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Manfaat hasil penelitian</td>
                <td>Pengembangan IPTEK dan pembangunan</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Methodelogi Penelitian</td>
                <td>Ketepatan metode yang digunakan, comprehensiveness, dan kedetailan metode</td>
                <td>25%</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Referensi acuan (maksimal 7 tahun terakhir)</td>
                <td>Kedalaman pustaka pendukung, relevansi, dan kemutakhiran daftar pustaka</td>
                <td>15%</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Kelayakan Penelitian</td>
                <td>Kesesuaian jadwal, format penulisan.</td>
                <td>20%</td>
            </tr>
        </tbody>
    </table>

    
</div>
');
endif;

//form A8c
$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Form A.8c</div>
    <div class="title">DAFTAR HADIR PESERTA</div>
    <div class="title">SEMINAR I/SEMINAR HASIL PENELITIAN</div>
    <br>

    <table>
        <tr>
            <td>Nama</td> <td>: '.$nama.'</td>
        </tr>
        <tr>
            <td>NPM </td> <td>: '.$npm.'</td> 
        </tr>
        <tr>
            <td>Jurusan/PS </td> <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Judul Skripsi </td> <td>: '.$judul.' </td>
        </tr>
        <tr>
        <td>Hari/Tanggal </td> <td>: '.$hari.', '.$tanggal.'</td>
    </tr>
    </table>
    <br>

    <table class="tbl_isi" style ="width: 100%;">
        <thead>
            <tr>
                <th style ="width: 5%;">No</th>
                <th>Nama Mahasiswa</th>
                <th style ="width: 25%;">NPM</th>
                <th>Jurusan</th>
                <th style ="width: 20%;">Tanda Tangan</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>7.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>11.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>12.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>13.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>14.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>15.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>16.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;"></td>
            <td>
                Bandar Lampung, '.$tanggal_print.'<br>
                Mengetahui, <br>
                Ketua Pelaksana Seminar 
                <br><br><br><br><br>
                '.$surat["dospem1"].'<br>
                NIP '.$nip_1.'
            </td>
        </tr>
    </table>   
    
</div>
');

$mpdf->Output('Form A8-A8c.pdf','I');

?>