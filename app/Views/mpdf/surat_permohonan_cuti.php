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
            <td>: Permohonan Cuti Kuliah
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
            <td>Cuti Semester</td>
            <td>: '.$cuti.'</td>
        </tr>
        <tr>
            <td>Lama Cuti</td>
            <td>: '.$lama.' Semester</td>
        </tr>
        <tr>
            <td>Alasan Cuti</td>
            <td>: '.$alasan.'</td>
        </tr>
    </table>
    <br><br>

    Dengan ini mengajukan permohonan cuti kuliah (cuti akademik). Bersama dengan ini kami
    lampirkan persyaratan cuti kuliah sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Kartu Tanda Mahasiswa (KTM) Asli dan fotokopi;</td>
        </tr>
        <tr>
            <td>2. Salinan bukti pembayaran UKT untuk semester yang berjalan 2 lembar.</td>
        </tr>
    </table>
    <br>
    Demikian surat permohonan kami, atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
                Mengetahui, <br>
                Orang Tua/Wali <br><br><br><br><br>
                '.$orangtua.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br>Materai 6.000<br><br><br>
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
<div class="teks_isi">
<br><br>
<table style="width: 100%;">
<tr>
    <td style="width: 100%; text-align: center;">
        Mengetahui/Menyetujui, <br>
        Dosen Pembimbing Akademik <br><br><br><br><br>
        '.$dospem.'<br>
        NIP. '.$nip_dospem->nip.'
    </td>
</tr>
</table>
<br><br>
    <div style="font-size: 11;">
        Catatan:  <br>
        Perlu ada tanda tangan orang tua/wali, apabila biaya perkuliahan masih ditanggung oleh orang tua/wali.
                
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
            <td>: ....../UN26.16.06/KM.00.00/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Persetujuan Cuti Akademik</td>
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

    Sehubungan dengan adanya permohonan cuti kuliah (cuti akademik) atas nama '.$nama.' NPM '.$npm.', maka dengan ini kami menyetujui permohonan cuti akademik mahasiswa
    tersebut. Bersama dengan ini kami kirimkan kelengkapan berkas cuti akademik dan kami
    mohon untuk diterbitkan SK cuti akademik yang bersangkutan.
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
$mpdf->Output('surat permohonan cuti.pdf','D');