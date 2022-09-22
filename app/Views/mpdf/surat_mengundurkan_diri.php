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
            <td>: Permohonan Mengundurkan Diri
            </td>
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
    <br>
    Dengan Hormat, <br>
    Saya yang bertanda tangan dibawah ini: <br>
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
            <td>Fakultas</td>
            <td>: FISIP</td>
        </tr>
        <tr>
            <td>Jurusan/PS</td>
            <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Strata</td>
            <td>: '.$strata.'</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: '.$alamat.'</td>
         </tr>
         <tr>
            <td>No. Telepon/HP</td>
            <td>: '.$nomor.'</td>
        </tr>

    </table>
    <br>

    Dengan ini mengajukan permohonan mengundurkan diri dikarenakan '.$alasan.' dan semenjak
    semester '.$semester.' TA '.$ta.' menyatakan sudah tidak aktif kuliah lagi. Bersama ini
    saya lampirkan persyaratan sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Kartu Tanda Mahasiswa (KTM) Asli;</td>
        </tr>
        <tr>
            <td>2. Salinan bukti pembayaran SPP/UKT untuk semester berjalan (semester terakhir);</td>
        </tr>
        <tr>
            <td>3. KHS semester terakhir;</td>
        </tr>
        <tr>
            <td>4. Transkrip akademik;</td>
        </tr>
        <tr>
            <td>5. Keterangan bebas pinjam dari Perpustakaan Unila dan ruang baca fakultas.</td>
        </tr>
    </table>
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
                Mengetahui, <br>
                Orang Tua/Wali <br><br><br><br>
                '.$ortu.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br><br><br>
                '.$nama.' <br>
                NPM .'.$npm.'
                
            </td>
        </tr>
    </table>
    <br>

 
</div>

');

$mpdf->AddPage();
$mpdf->WriteHTML('
<br><br>
<table style="width: 100%;">
<tr>
    <td style="width: 100%; text-align: center;">
        Mengetahui/Menyetujui, <br>
        Dosen Pembimbing Akademik <br><br><br><br><br>
        '.$dospa.'<br>
        NIP. '.$nip_dospa->nip.'
    </td>
</tr>
</table>
');


$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'
<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Nomor</td>
            <td>: ....../UN.26.16.06/KM.00.03/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Persetujuan Mengundurkan Diri</td>
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

    Sehubungan dengan adanya permohonan rencana pengunduran diri dari Universitas
    Lampung atas nama '.$nama.' NPM '.$npm.', bersama dengan ini kami kirimkan surat
    permohonan pengunduran diri yang bersangkutan berserta kelengkapan berkasnya
    (terlampir).
    <br><br>
    Demikian surat permohonan kami, atas perhatian dan kerjasamanya disampaikan terimakasih.  <br><br><br>

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



 
</div>
');
$mpdf->Output('Surat Mengundurkan Diri.pdf','D');