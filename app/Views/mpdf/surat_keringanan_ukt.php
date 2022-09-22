<?php
namespace App\Libraries;
namespace App\Controllers;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '5', 'margin_bottom' => '25',
'margin_left' => '8', 'margin_right' => '8', 'defaultfooterline' => 0]);


$mpdf->WriteHTML('
<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Hal</td>
            <td>: Permohonan Keringanan UKT
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (Satu) Lembar</td>
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

    Dengan ini mengajukan permohonan keringanan UKT karena saya telah menyelesaikan  <br> 
    ................. (Seminar I/Proposal Penelitian, Seminar II/Seminar Hasil, Ujian Komprehensif)*. <br>
    Bersama dengan ini saya lampirkan Berita Acara ................. (Seminar I/Proposal
    Penelitian, Seminar II/Seminar Hasil, Ujian Komprehensif)*.
    <br>

    <br>
    Demikian surat permohonan ini, atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
            Mengetahui/Menyetujui, <br>
            Dosen Pembimbing I Skripsi <br><br><br><br>
                '.$dospem.' <br>
                NIP. '.$nip->nip.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br><br><br>
                '.$nama.' <br>
                NPM .'.$npm.'
                
            </td>
        </tr>
    </table>
    <br><br>
    Catatan: <br>
    * pilih salah satu yang sesuai

 
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
    Yth. Dekan FISIP Unila<br/>

    
    <table class="padding_isi">
        <tr>
            <td>
                c.q Wakil Dekan Bid. Umum dan Keuangan
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

    Sehubungan dengan adanya permohonan keringanan UKT Semester '.$semester.' atas 
    nama '.$nama.' NPM '.$npm.', maka dengan ini kami menyetujui permohonan mahasiswa
    tersebut. Bersama dengan ini kami kirimkan kelengkapan berkasnya dan kami mohon untuk
    diterbitkan SK keringanan UKT yang bersangkutan.
    <br><br>
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
    <br><br>
    Tembusan:<br>
    1. Dekan;<br>
    2. Yang bersangkutan;<br>
    3. Arsip.


 
</div>
');
$mpdf->Output('Surat Keringanan UKT.pdf','D');