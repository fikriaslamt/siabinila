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
            <td>Nomor</td>
            <td>: ....../UN.26.16.06/PP.05.02/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: -</td>
        </tr>
        <tr>
            <td>Hal</td>
            <td>: <u>Izin Studi Lapangan</u></td>
        </tr>
    </table>
    <br><br>
    Kepada Yth.<br/>
    
    
    <table class="padding_isi">


        <tr>
            <td>
                 Bpk/Ibu Pimpinan Perusahaan <br> '.$perusahaan.'<br/>
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

    Sehubungan dengan adanya tugas Mata Kuliah '.$mk.' di PS Ilmu Adm. Bisnis
    FISIP Unila TA '.$ta.', bersama dengan ini kami memohon diberikan izin kepada
    mahasiswa tersebut dibawah ini:
    <br><br>
    <table class="tbl_isi" style="width:100%; text-align: center;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>NPM</th>
                <th>Jurusan/PS</th>

            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td>'.$mhs1.'</td>
                <td>'.$npm1.'</td>
                <td>Ilmu Adm. Bisnis</td>

            </tr>
            <tr>
                <td>2.</td>
                <td>'.$mhs2.'</td>
                <td>'.$npm2.'</td>
                <td>Ilmu Adm. Bisnis</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>'.$mhs3.'</td>
                <td>'.$npm3.'</td>
                <td>Ilmu Adm. Bisnis</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>'.$mhs4.'</td>
                <td>'.$npm4.'</td>
                <td>Ilmu Adm. Bisnis</td>
            </tr>
            
        </tbody>
    </table>
    <br>
    Untuk melakukan Studi Lapangan pada perusahaan yang Bapak/Ibu pimpin mulai tanggal
    '.$tgl_awal.' s.d '.$tgl_akhir.'. <br><br>
    Demikian surat permohonan kami, atas bantuan dan kerjasamanya kami sampaikan terima
    kasih.<br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
            Dosen Pengampu <br>
            Mata Kuliah '.$mk.', <br>
            <br><br><br><br>
            '.$dosen.'<br>
            NIP '.$nip_dosen->nip.'
            </td>
            <td>
                Ketua Jurusan,
                <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP '.$nip_kajur.'
                
            </td>
        </tr>
    </table>
    <br>
    <table style="width: 100%;">
        <tr>
            <td style="width: 100%; text-align: center;">
                a.n Dekan <br>
                Wakil Dekan Bid. Akademik dan Kerjasama, <br><br><br><br><br>
                '.$dekan.'<br>
                NIP '.$nip_dekan.'
            </td>
        </tr>
    </table>



 
</div>
');

$mpdf->Output('surat izin studi lapangan.pdf','D');