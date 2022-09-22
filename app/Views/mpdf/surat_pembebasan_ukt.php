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
            <td>: Permohonan Pembebasan UKT
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
            <td>Jurusan/PS</td>
            <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>: '.$semester.'</td>
        </tr>
    </table>
    <br><br>

    Dengan ini mengajukan permohonan pembebasan UKT karena saya telah menyelesaikan
    Ujian Komprehensif (Ujian Skripsi). Bersama dengan ini saya lampirkan persyaratan
    pembebasan UKT sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Fotocopy Berita Acara Hasil Ujian Komprehensif (Ujian Skripsi)</td>
        </tr>
        <tr>
            <td>2. Fotocopy Form Layak Sebar Skripsi (Form A.16)</td>
        </tr>
    </table>
    <br>
    Demikian surat permohonan ini, atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
            Mengetahui/Menyetujui, <br>
            Dosen Pembimbing I Skripsi <br><br><br><br><br>
                '.$dospem.' <br>
                NIP. '.$nip->nip.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br><br><br><br>
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
            <td>: ....../UN.26.16.06/KM.02.01/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 bundel</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Persetujuan Pembebasan UKT</td>
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

    Sehubungan dengan adanya permohonan pembebasan UKT Semester '.$semester.' atas 
    nama '.$nama.' NPM '.$npm.',maka dengan ini kami menyetujui permohonan mahasiswa tersebut. Bersama dengan ini kami kirimkan kelengkapan berkasnya dan kami mohon untuk diterbitkan SK pembebasan UKT yang bersangkutan.
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
$mpdf->Output('surat pembebasan ukt.pdf','D');