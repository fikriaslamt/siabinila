<?php
namespace App\Libraries;
namespace App\Controllers;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '5', 'margin_bottom' => '25',
'margin_left' => '8', 'margin_right' => '8', 'defaultfooterline' => 0]);

$mpdf->WriteHTML('                        

<div class="teks_isi">
    <div class="title">SURAT PERNYATAAN</div>
    <br><br>
    Saya yang bertanda tangan dibawah ini:
    <br><br>

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
       
    </table>
    <br><br>

    Menyatakan pada semester 9 (sembilan) T.A 2020/2021 akan mengambil mata kuliah
    sebanyak '.$semester.' SKS. dSurat keterangan ini akan digunakan untuk memperoleh keringanan Uang Kuliah
    Tunggal (UKT) atau uang kuliah mahasiswa. Setelah mendapatkan keringanan saya bersedia
    mengumpulkan bukti fotocopy KRS semester 9 (sembilan) ke Jurusan dan Fakultas. <br><br>
    Demikian surat pernyataan ini saya buat untuk dipergunakan sebagaimana mestinya. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">

            </td>
            <td>
                Bandar Lampung,'.$tanggal.' <br>
                Hormat Saya,
                <br><br><br>Materai 6000<br><br><br>
                '.$nama.' <br>
                NPM .'.$npm.'
                
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
            <td>: ....../UN.26.16.06/PP.01.03.01/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Keterangan Pengambilan Mata Kuliah 6 SKS</td>
        </tr>
    </table>
    <br><br>
    Yth. Wakil Dekan Akademik dan Kerjasama<br/>

    
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

    SeSehubungan dengan surat pernyataan pengambilan mata kuliah sebanyak '.$sks.' SKS Semester '.$semester.' atas 
    nama '.$nama.' NPM '.$npm.', sebagai syarat mengajukan keringanan UKT maka dengan
    ini kami menyetujui permohonan mahasiswa tersebut. Bersama dengan ini kami kirimkan kelengkapan
    berkasnya. <br><br>
    Demikian surat permohonan kami, atas perhatian dan kerjasamanya disampaikan terimakasih.
  <br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
            </td>
            <td>
                Ketua Jurusan,
                <br><br><br><br><br><br>
                Suprihatin Ali, S.Sos., M.Sc <br>
                NIP 19740918 200112 1 001
                
            </td>
        </tr>
    </table>
    <br><br>
    Tembusan:<br>
    1. Dekan;<br>
    2. Yang bersangkutan;<br>
    3. Arsip.

 
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
            <td>: ....../UN.26.16.06/KM.02.01/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Persetujuan Keringanan UKT</td>
        </tr>
    </table>
    <br><br>
    Kepada Yth.<br/>

    
    <table class="padding_isi">
        <tr>
            <td>Wakil Dekan Bid. Umum dan Keuangan</td>
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

    Sehubungan dengan adanya permohonan keringanan UKT Semester '.$semester.' atas 
    nama <br>'.$nama.' NPM '.$npm.', maka dengan ini kami menyetujui permohonan mahasiswa tersebut. Bersama
    dengan ini kami kirimkan kelengkapan berkasnya dan kami mohon untuk diterbitkan SK keringanan
    UKT yang bersangkutan. <br><br>
    Demikian surat permohonan kami, atas perhatian dan kerjasamanya disampaikan terimakasih.
  <br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
            </td>
            <td>
                Ketua Jurusan,
                <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP. '.$nip_kajur.'
                
            </td>
        </tr>
    </table>

 
</div>
');
$mpdf->Output('Surat Keringanan UKT 50.pdf','D');