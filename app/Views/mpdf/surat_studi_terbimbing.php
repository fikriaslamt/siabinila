<?php
namespace App\Libraries;
namespace App\Controllers;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '10', 'margin_bottom' => '25',
'margin_left' => '10', 'margin_right' => '10', 'defaultfooterline' => 0]);

$mpdf->WriteHTML($kop_surat.'                        

<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Hal</td>
            <td>: Permohonan Studi Terbimbing
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1(satu) Berkas</td>
        </tr>
    </table>
    <br><br>
    Yth. Ketua Jurusan Ilmu Administrasi Bisnis<br/>
    

    
    <table class="padding_isi">
        <tr>
            <td>
            FISIP Universitas Lampung
            </td>
        </tr>
        <tr>
            <td>
                di-
            </td>
        </tr>
        <tr>
            <td>
            <table class="padding_isi">
                    <tr>
                        <td>Bandar Lampung</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br><br>
    Dengan Hormat, <br>
    Saya yang bertanda tangan dibawah ini: <br><br>
    <table class="padding_isi">
        <tr>
            <td>Nama</td>
            <td>: '.$nama.'</td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>: '.$npm.'</td>
        </tr>
        <tr>
            <td>Jurusan/PS</td>
            <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>: '.$semester.'</td>
        </tr>

    </table>
    <br><br>

    Dengan ini menyatakan bahwa saat ini saya sedang dalam proses persiapan ujian skripsi/ujian
    komprehensif, namun saat ini masih ada mata kuliah wajib saya yang belum lulus yaitu:
    <br>
    <table class="tbl_isi">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Dosen PJ</th>
                
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Ganjil/Genap</td>
                <td></td>
                
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td></td>
                <td></td>
                <td>Ganjil/Genap</td>
                <td></td>
                
            </tr>
            
        </tbody>
    </table>
    <br>
    Sesuai dengan SK Rektor No. 458/UN26/DT/2016 Tentang Peraturan Akademik, maka
    dengan ini saya mengajukan <b>permohonan studi terbimbing *)</b>. Sebagai persyaratan dengan
    ini kami lampirkan: <br>
    <table class="padding_isi">
        <tr>
            <td>
            1) Form A1, A2, A3, A4, dan A5 (Form pengajuan judul dan bimbingan skripsi);
            </td>
        </tr>
        <tr>
            <td>
            2) KRS dan KHS (sesuai dengan mata kuliah yang di studi terbimbingkan);
            </td>
        </tr> 
        <tr>
            <td>
            3) Berita Acara Hasil Seminar II/Seminar Hasil Skripsi dan transkrip akademik.
            </td>
        </tr>
    </table>
    <br>
    Demikian surat permohonan kami, atas perhatian dan kerjasamanya disampaikan terimakasih.

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
                Mengetahui/Menyetujui, <br>
                Dosen Pembimbing Akademik <br><br><br><br><br>
                '.$dospem.'  <br>
                NIP 
            </td>
            <td>
                Hormat Saya,
                <br><br><br><br><br><br>
                '.$nama.' <br>
                NPM '.$npm.'
                
            </td>
        </tr>
    </table>
    <br><br>
    <div style="font-size: 11;">
        Catatan:  <br>
        <table> 
            <tr>
              
                <td>*) Jumlah mata kuliah studi terbimbing maksimal 2 (dua) mata kuliah wajib.</td>
            </tr>
            <tr>
                
                <td>*) Mata kuliah tersebut ditawarkan pada semester berikutnya (tidak dioperasionalkan semester ini).</td>
            </tr>
        </table>
    </div>
    
</div>

');


$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'
<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Nomor</td>
            <td>: ....../UN.26.16.06/PP.02.02/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan SK Studi Terbimbing</td>
        </tr>
    </table>
    <br><br>
    Yth. Dekan FISIP Unila<br/>

    
    <table class="padding_isi">
        <tr>
            <td>
                c.q Wakil Dekan Bid. Akademik dan Kerjasama
            </td>
        </tr>
        <tr>
            <td>FISIP Universitas Lampung</td>
        </tr>
        <tr>
            <td>
                di-
            </td>
        </tr>
        <tr>
            <td>
            <table class="padding_isi">
                    <tr>
                        <td>Bandar Lampung</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br><br>
    Dengan Hormat, <br><br>



    Sesuai dengan permohonan mahasiswa yang bernama '.$nama.' NPM '.$npm.' tanggal '.$tanggal.' perihal permohonan studi terbimbing, maka dengan ini kami menyetujui permohonan tersebut dan menugaskan kepada dosen tersebut dibawah ini:
    <br><br>
    <table class="tbl_isi">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama, Gelar Akademik, dan NIP Dosen</th>
                <th>Jabatan dan Golongan</th>
                <th>Kopel dan Mata Kuliah</th>
                <th>SKS</th>
                
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td></td>
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
                <td></td>
                
            </tr>
            
        </tbody>
    </table>
    <br>
    Untuk menjadi dosen pengampu mata kuliah studi terbimbing yang tersebut diatas. Bersama
    dengan ini kami <b>memohon diterbitkan SK studi terbimbing</b> sebagai dasar proses
    pelaksanaan perkuliahan tersebut. <br><br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih.  <br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
            </td>
            <td>
                Ketua Jurusan,
                <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
                
            </td>
        </tr>
    </table>
    <br>
    Tembusan: <br>
    1. Dosen Pengampu Mata Kuliah ................... <br>
    2. Arsip
 
</div>
');

$mpdf->AddPage();
$mpdf->WriteHTML('

<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
   
        <tr>
            <td>Hal</td>
            <td>: Permohonan Input Nilai Studi Terbimbing</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (Satu) Berkas</td>
        </tr>
    </table>
    <br><br>
    Yth. Ketua Jurusan Ilmu Administrasi Bisnis<br/>

    
    <table class="padding_isi">
       
        <tr>
            <td>FISIP Universitas Lampung</td>
        </tr>
        <tr>
            <td>
                di-
            </td>
        </tr>
        <tr>
            <td>
            <table class="padding_isi">
                    <tr>
                        <td>Bandar Lampung</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br><br>
    Dengan Hormat, <br><br>



    Sehubungan dengan telah selesainya proses studi terbimbing saya dengan rincian berikut ini:
    <br><br>
    <table class="tbl_isi">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>Nilai Akhir</th>
                
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td></td>
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
                <td></td>
                
            </tr>
            
        </tbody>
    </table>
    <br>
    Dengan ini saya mengajukan <b>permohonan input nilai studi terbimbing.</b> Sebagai
    persyaratan dengan ini dilampirkan : <br>
    <table class="padding_isi">
        <tr>
            <td>
            1). Daftar hadir dan berita acara perkuliahan/studi terbimbing;
            </td>
        </tr>
        <tr>
            <td>
            2). KRS dan KHS (sesuai dengan mata kuliah yang di studi terbimbingkan);
            </td>
        </tr> 
        <tr>
            <td>
            3). Rekapitulasi nilai akhir studi terbimbing (Tugas, UTS, dan UAS);
            </td>
        </tr>
        <tr>
            <td>
            4). Foto copy SK studi terbimbing .
            </td>
        </tr>
    </table>
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih.  <br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
                Mengetahui, <br>
                Dosen Pembimbing Akademik <br><br><br><br><br>
                '.$dospem.'<br>
                NIP 
            </td>
            <td>
                 Hormat Saya,
                <br><br><br><br><br><br>
                '.$nama.'<br>
                NPM '.$npm.'
                
            </td>
        </tr>
    </table>
    <br><br><br><br><br><br>
    table style="width: 100%;">
        <tr>
            <td style="width: 100%; text-align: center;">
                a.n Dekan <br>
                Wakil Dekan Bid. Akademik dan Kerjasama, <br><br><br><br><br>
                '.$dekan.'<br>
                NIP. '.$nip_dekan.'
            </td>
        </tr>
    </table>


 
</div>
');

$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Nomor</td>
            <td>: ....../UN.26.16.06/AK.01.02/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Input Nilai Studi Terbimbing</td>
        </tr>
    </table>
    <br><br>
    Yth. Dekan FISIP Unila<br/>

    
    <table class="padding_isi">
        <tr>
            <td>
                c.q Wakil Dekan Bid. Akademik dan Kerjasama
            </td>
        </tr>
        <tr>
            <td>FISIP Universitas Lampung</td>
        </tr>
        <tr>
            <td>
                di-
            </td>
        </tr>
        <tr>
            <td>
            <table class="padding_isi">
                    <tr>
                        <td>Bandar Lampung</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br><br>
    Dengan Hormat, <br><br>



    Sesuai dengan permohonan mahasiswa yang bernama '.$nama.' NPM '.$npm.' tanggal '.$tanggal.' perihal permohonan input nilai studi terbimbing, bersama dengan ini kami kirimkan berkas
    kelengkapan permohonan yang bersangkutan untuk mata kuliah '.$mk.' dan agar
    nilai tersebut dapat di input ke sistem.
    <br><br>
    
    Atas perhatian dan kerjasamanya disampaikan terimakasih.  <br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
            </td>
            <td>
                Ketua Jurusan,
                <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
                
            </td>
        </tr>
    </table>
    <br>
    Tembusan: <br>
    1. Dosen Pengampu Mata Kuliah ................... <br>
   
</div>
');


$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div style="text-align: center;font-weight: bold;">
        Daftar Hadir Dan Berita Acara Perkuliahan Studi Terbimbing <br>
        Semester Ganjil/Genap T.A. 20.../20....
    </div>
    
    <br><br>
    <table style="font-weight: bold;">
        <tr>
            <td>Kopel/Mata Kuliah</td>
            <td>: .............................................</td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>: .............................................</td>
        </tr>
    </table>
    <br>
    <table class="tbl_isi">
        <thead>
            <tr>
                <th>No</th>
                <th>Hari/Tanggal</th>
                <th>Materi</th>
                <th>Tanda Tangan Mahasiswa</th>
                <th>Paraf Dosen</th>  
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td>1.</td>
                <td>1.</td> 
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td></td>
                <td>2.</td>
                <td>2.</td>
            </tr>
            <tr>
                <td>3.</td>
                <td></td>
                <td></td>
                <td>3.</td>
                <td>3.</td> 
            </tr>
            <tr>
                <td>4.</td>
                <td></td>
                <td></td>
                <td>4.</td>
                <td>4.</td> 
            </tr>
            <tr>
                <td>5.</td>
                <td></td>
                <td></td>
                <td>5.</td>
                <td>5.</td> 
            </tr>
            <tr>
                <td>6.</td>
                <td></td>
                <td></td>
                <td>6.</td>
                <td>6.</td> 
            </tr>
            <tr>
                <td>7.</td>
                <td></td>
                <td></td>
                <td>7.</td>
                <td>7.</td> 
            </tr>
            <tr>
                <td>8.</td>
                <td></td>
                <td></td>
                <td>8.</td>
                <td>8.</td> 
            </tr>
            <tr>
                <td>9.</td>
                <td></td>
                <td></td>
                <td>9.</td>
                <td>9.</td> 
            </tr>
            <tr>
                <td>10.</td>
                <td></td>
                <td></td>
                <td>10.</td>
                <td>10.</td> 
            </tr>
            <tr>
                <td>11.</td>
                <td></td>
                <td></td>
                <td>11.</td>
                <td>11.</td> 
            </tr>
            <tr>
                <td>12.</td>
                <td></td>
                <td></td>
                <td>12.</td>
                <td>12.</td> 
            </tr>
            <tr>
                <td>13.</td>
                <td></td>
                <td></td>
                <td>13.</td>
                <td>13.</td> 
            </tr>
            <tr>
                <td>14.</td>
                <td></td>
                <td></td>
                <td>14.</td>
                <td>14.</td> 
            </tr>
            <tr>
                <td>15.</td>
                <td></td>
                <td></td>
                <td>15.</td>
                <td>15.</td> 
            </tr>
            <tr>
                <td>16.</td>
                <td></td>
                <td></td>
                <td>16.</td>
                <td>16.</td> 
            </tr>
            
        </tbody>
    </table>
     <br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
            </td>
            <td>
                Bandar Lampung, ...... .................. '.$tahun.'<br>
                Dosen PJ,
                <br><br><br><br><br><br>
                .............................................<br>
                NIP ....................................
                
            </td>
        </tr>
    </table>
    

 
</div>
');

$mpdf->AddPage();
$mpdf->WriteHTML('

<div class="teks_isi">
    <div style="text-align: center;font-weight: bold;">
        Rekapitulasi Nilai Akhir Studi Terbimbing <br>
        Semester Ganjil/Genap T.A. 20.../20....
    </div>
    
    <br><br><br>
    <table style="font-weight: bold;">
        <tr>
            <td>Kopel/Mata Kuliah</td>
            <td>: .............................................</td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>: .............................................</td>
        </tr>
    </table>
    <br>
    <table class="tbl_isi">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>
                    Keha- <br>       
                    diran <br>
                    (.... %)
                </th>
                <th>
                    Tugas <br>
                    (....%) 
                </th>  
                <th>
                    UTS <br>
                    (....%) 
                </th>  
                <th>
                    UAS <br>
                    (....%) 
                </th> 
                <th>
                    NA
                </th> 
                <th>
                    HM
                </th> 
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> 
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
            <td style="width: 55%;">
            </td>
            <td>
                Bandar Lampung, ...... .................. '.$tahun.' <br>
                Dosen PJ,
                <br><br><br><br><br><br>
                ............................................. <br>
                NIP ....................................
                
            </td>
        </tr>
    </table>

    <div style="font-size: 11;">
        Catatan:
        <table style="font-size: 11;"> 
            <tr>
                <td>a. </td>
                <td>persentase komponen nilai disesuaikan oleh dosen pengampu mata kuliah.</td>
            </tr>
            <tr>
                <td>b. </td>
                <td>Bagi mahasiswa yang sudah selasai proses studi terbimbing harap melapor ke Jurusan/PS.</td>
            </tr>
        </table>
        <br><br> Konversi angka nilai akhir ke huruf mutu (Peraturan akademik 2016 pasal 26)
        <table class="tbl_isi" style="text-align: center;">
            <thead>
                <tr style="font-weight: bold;">
                    <th>
                        Nilai Akhir <br> 
                        (0-100)
                    </th>
                    <th>Huruf Mutu</th>
                    <th>Angka mutu</th>
                    <th>
                        Status Penilaian
                    </th>
                </tr>
                <tr>
                    <th style="font-weight: bold;">
                    Program Profesi/Sarjana/Diploma
                    </th>
                </tr>

            </thead>

            <tbody>
                <tr>
                    <td>nilai ≥ 76</td>
                    <td>A</td>
                    <td>4,0</td>
                    <td>Lulus</td> 
                </tr>
                <tr>
                    <td>71 ≤ nilai < 76</td>
                    <td>B+</td>
                    <td>3,5</td>
                    <td>Lulus</td> 
                </tr>
                <tr>
                    <td>66 ≤ nilai < 71</td>
                    <td>B</td>
                    <td>3,0</td>
                    <td>Lulus</td> 
                </tr>
                <tr>
                    <td>61 ≤ nilai < 66</td>
                    <td>C+</td>
                    <td>2,5</td>
                    <td>Lulus</td> 
                </tr>
                <tr>
                    <td>56 ≤ nilai < 61</td>
                    <td>C</td>
                    <td>2,0</td>
                    <td>Lulus</td> 
                </tr
                <tr>
                    <td>50 ≤ nilai < 56</td>
                    <td>D</td>
                    <td>1,0</td>
                    <td>Lulus **</td> 
                </tr
                <tr>
                    <td>nilai < 50</td>
                    <td>E</td>
                    <td>0,0</td>
                    <td>Tidak Lulus</td> 
                </tr
                
            </tbody>
        </table>
    </div>
 
</div>
');

$mpdf->Output('surat studi terbimbing.pdf','D');