<?php
namespace App\Libraries;
namespace App\Controllers;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '10', 'margin_bottom' => '25',
'margin_left' => '10', 'margin_right' => '10', 'defaultfooterline' => 0]);

$mpdf->WriteHTML('                        

<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Hal</td>
            <td>: Permohonan Pindah Kuliah
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (Satu) Berkas</td>
        </tr>
    </table>
    <br>
    Yth. Rektor Universitas Lampung<br/>

    
    <table class="padding_isi">
        <tr>
            <td>
                C.q Wakil Rektor Bidang Akademik
            </td>
        </tr>
        <tr>
            <td>
                Universitas Lampung
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
                        <td>Tempat</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
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
            <td>: '.$notlp.'</td>
        </tr>
        
        <tr>
            <td>Alasan pindah</td>
            <td>: '.$alasan.'</td>
        </tr>
    </table>
    <br><br>

    Dengan ini mengajukan permohonan pindah kuliah dari Universitas Lampung ke Universitas '.$tujuan.', dikarenakan '.$alasan.', 
    Bersama dengan ini saya lampirkan persyaratan
    pindah kuliah sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Kartu Tanda Mahasiswa (KTM) Asli;</td>
        </tr>
        <tr>
            <td>2. Salinan bukti pembayaran SPP/UKT untuk semester berjalan;</td>
        </tr>
        <tr>
            <td>3. Transkrip Akademik;</td>
        </tr>
        <tr>
            <td>4. Bebas Pinjam Perpustakaan Universitas Lampung dan ruang baca Fakultas.</td>
        </tr>
    </table>
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
                Mengetahui, <br>
                Orang Tua/Wali <br><br><br><br>
                '.$orangtua.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br>Materai 6.000<br><br>
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
        Dosen Pembimbing Akademik <br><br><br><br>
        '.$dospem.'<br>
        NIP. '.$nip_dospem->nip.'
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
            <td>: ....../UN.26.16.06/KM.00.04/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Persetujuan Pindah Kuliah</td>
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



    Sehubungan dengan adanya permohonan pindah kuliah atas nama '.$nama.' NPM '.$npm.', maka dengan ini kami menyetujui permohonan pindah kuliah mahasiswa
    tersebut. Bersama dengan ini kami kirimkan kelengkapan berkas pindah kuliah dan kami
    mohon untuk diterbitkan SK (izin) pindah kuliah yang bersangkutan.
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



 
</div>
');
$mpdf->Output('surat pindah kuliah.pdf','D');