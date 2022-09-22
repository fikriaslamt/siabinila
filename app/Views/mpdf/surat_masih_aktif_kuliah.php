<?php
namespace App\Libraries;
namespace App\Controllers;

ob_clean();

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '5', 'margin_bottom' => '25',
'margin_left' => '8', 'margin_right' => '8', 'defaultfooterline' => 0]);

$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="title">SURAT PENGANTAR</div>
    <div style="text-align: center;">Nomor: ....../UN.26.16.06/KM.00.03/'.$tahun.'</div>

    
        <br><br>
        Yth. Wakil Dekan Bid. Kemahasiswaan dan Alumni<br/>

        
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
        Ketua Jurusan Ilmu Administrasi Bisnis Fisip Unila dengan ini menerangkan bahwa
        mahasiswa tersebut dibawah ini: <br><br>

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
                <td>Semester</td>
                <td>: '.$semester.'</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: '.$alamat.'</td>
            </tr>
            <tr>
                <td>Tujuan</td>
                <td>: Pengantar Keterangan Masih Kuliah</td>
            </tr>
        
        </table>
        <br>
        Adalah benar mahasiswa Jurusan Ilmu Administrasi Bisnis dan sampai saat ini yang
        bersangkutan masih aktif kuliah.
    <br><br><br>

        <table style="width: 100%;">
            <tr>
                <td style="width: 55%;">
                </td>
                <td>
                    Bandar Lampung, '.$tanggal.' <br>
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

$mpdf->Output('Surat Keterangan Masih Aktif Kuliah.pdf','D');
ob_end_flush();
?>