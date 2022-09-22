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
            <td>Perihal</td>
            <td>: Permohonan Pindah Studi ke Universitas Lampung
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 bundel</td>
        </tr>
    </table>
    <br><br>
    Kepada Yth. Rektor Universitas Lampung<br/>
    

    
    <table class="padding_isi">
        <tr>
            <td>
            Up. Wakil Rektor Bidang Akademik
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
            <td>Tempat/Tgl. Lahir</td>
            <td>: '.$ttl.'</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: '.$jk.'</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: '.$agama.'</td>
        </tr>
        <tr>
            <td>Alamat Lengkap</td>
            <td>: '.$alamat.'</td>
        </tr>
        <tr>
            <td>NPM Lama</td>
            <td>: '.$npm.'</td>
        </tr>
        <tr>
            <td>No. Telepon/HP</td>
            <td>: '.$nomor.'</td>
        </tr>
        <tr>
            <td>Asal Universitas</td>
            <td>: '.$asal_univ.'</td>
        </tr>
        <tr>
            <td>Asal Fakultas</td>
            <td>: '.$asal_fk.'</td>
        </tr>
    
        <tr>
            <td>Strata</td>
            <td>: '.$strata.'</td>
        </tr>
        <tr>
            <td>Asal Program Studi</td>
            <td>: '.$asal_prodi.'</td>
         </tr>

        <tr>
            <td>PS Yang Dituju</td>
            <td>: '.$prodi_tujuan.'</td>
        </tr>
  
        <tr>
            <td>Alasan Pindah Studi</td>
            <td>: '.$alasan.'</td>
        </tr>
    </table>
    <br><br>

    Bersama ini kami mengajukan Pindah Studi ke Universitas Lampung. Saya berasal dari Program
    Studi '.$asal_prodi.' Fakultas '.$asal_fk.' '.$asal_univ.'. Sebagai bahan pertimbangan kami lampirkan persyaratan
    sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Surat keterangan dari pemimpin fakultas asal tentang status kemahasiswaan;</td>
        </tr>
        <tr>
            <td>2. Surat keterangan tidak putus studi dari wakil rektor bidang akademik universitas asal;</td>
        </tr>
            <tr>
            <td>3. Surat persetujuan dari orangtua/wali bagi calon yang masih menjadi tanggungan orang
            tuanya/wali;</td>
        </tr>
        <tr>
            <td>4. Surat keterangan kelakuan baik dari kepolisian;</td>
         </tr>
            <tr>
            <td>5. Transkrip akademik resmi yang ditandatangani oleh pejabat yang berwenang dari
            universitas asal;</td>
        </tr>
        <tr>
            <td>6. SFotokopi Akreditasi yang dilegalisir oleh pejabat yang berwenang.</td>
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
                '.$ortu.'
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

    <div style="font-size: 11;">
        Catatan: Pindah studi dari program studi di luar Unila dapat dilakukan jika program studi memiliki
        sekurang-kurangnya akreditasi yang sama dengan program studi yang dituju. <br>
        
    </div>

    
</div>

');

$mpdf->Output('surat pindah studi.pdf','D');