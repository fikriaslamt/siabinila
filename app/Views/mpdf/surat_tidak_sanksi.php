<?php
namespace App\Libraries;
namespace App\Controllers;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '10', 'margin_bottom' => '25',
'margin_left' => '10', 'margin_right' => '10', 'defaultfooterline' => 0]);

$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="title">SURAT KETERANGAN</div>
    <div style="text-align: center;">Nomor: ....../UN.26.16.06/KM.00.05/'.$tahun.'</div>
    <br>
    Dekan Fakultas Ilmu Sosial dan Ilmu Politik Universitas Lampung menerangkan bahwa:
    <br>
    <br>
    <table>
        <tr>
            <td>Nama</td>
            <td>: '.$nama.'</td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>: '.$npm.'</td>
        </tr>
        <tr>
            <td>Tempat/tanggal lahir</td>
            <td>: '.$ttl.'</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: '.$alamat.'</td>
        </tr>
        <tr>
            <td>Telp.rumah</td>
            <td>: '.$nomor.'</td>
        </tr>
    </table>
    <br>

    Adalah mahasiswa Fakultas Ilmu Sosial Dan Ilmu Politik Universitas Lampung yang terdaftar
    pada Semester '.$semester.'.Tahun Akademik '.$akademik.' pada Jurusan/Program Studi '.$prodi.'. Tidak sedang menerima sanksi akademik karena melanggar kode etik dan tata pergaulan mahasiswa Universitas Lampung. Surat keterangan ini
    diterbitkan untuk keperluan '.$keperluan.'
    <br><br><br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih.  <br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
            </td>
            <td>
                Bandar Lampung, '.$tanggal.'<br>
                a.n. Dekan <br>
                Kabbag Tata Usaha,
                <br><br><br><br><br><br>
                '.$dekan.'<br>
                NIP '.$nip_dekan.'
                
            </td>
        </tr>
    </table>
 
</div>
');

$mpdf->Output('surat tidak sanksi.pdf','D');