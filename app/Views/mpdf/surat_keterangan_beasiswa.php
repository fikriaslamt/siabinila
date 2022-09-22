<?php
namespace App\Libraries;
namespace App\Controllers;

$mpdf = new \Mpdf\Mpdf(['format' => 'A4', 
'margin_top' => '10', 'margin_bottom' => '25',
'margin_left' => '10', 'margin_right' => '10', 'defaultfooterline' => 0]);

$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="title">SURAT PENGANTAR</div>
    <div style="text-align: center;">Nomor: ....../UN.26.16.06/KM.02.00.00/'.$tahun.'</div>

    
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


        
        </table>
        <br>
        Adalah benar mahasiswa Jurusan Ilmu Administrasi Bisnis dan sampai saat ini yang
        bersangkutan masih aktif kuliah, dan belum pernah mendapat Beasiswa. Mohon dibuatkan
        surat keterangan tidak menerima Beasiswa. Demikianlah surat ini agar dapat digunakan
        sebagaimana mestinya.
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


 
</div>
');

$mpdf->Output('Surat Keterangan Beasiswa.pdf','D');