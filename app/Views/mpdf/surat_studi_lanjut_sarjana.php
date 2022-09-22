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
            <td>: Permohonan Studi Lanjut dari Program Diploma ke Program Sarjana
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
            <td>: Universitas Lampung</td>
        </tr>
        <tr>
            <td>Asal Fakultas</td>
            <td>: FISIP</td>
        </tr>
    
        <tr>
            <td>Strata</td>
            <td>: Diploma (D3)</td>
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
            <td>Alasan Alih Program</td>
            <td>: '.$alasan.'</td>
        </tr>
    </table>
    <br><br>

    Bersama ini kami mengajukan Alih Program (Studi Lanjut dari Program Diploma ke Program
    Sarjana) dari dari Program Studi '.$asal_prodi.' Fakultas FISIP Unila ke Program Studi '.$prodi_tujuan.' Fakultas '.$fk_tujuan.' Unila
    Sebagai bahan pertimbangan kami lampirkan persyaratan sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Transkrip akademik resmi yang disahkan oleh pejabat yang berwenang;</td>
        </tr>
        <tr>
            <td>2. Fotokopi ijazah asli yang dilegalisir oleh pejabat yang berwenang;</td>
        </tr>
            <tr>
            <td>3. Surat keterangan berkelakuan baik dari kepolisian;</td>
        </tr>
        <tr>
            <td>4. Fotokopi Akreditasi yang dilegalisir oleh pejabat yang berwenang.</td>
         </tr>
    </table>
    <br>
    Demikian surat permohonan kami, atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    
    
</div>

');

$mpdf->AddPage();
$mpdf->WriteHTML('   

<div class="teks_isi">
<br><br><br><br>
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
        <br><br>

        <div style="font-size: 11;">
            Catatan:  <br>
            <table style="font-size: 11;"> 
                <tr>
                    <td>1. </td>
                    <td>Bagi calon mahasiswa di lingkungan Unila IPK ≥ 3,00 dan di luar lingkungan Unila IPK ≥ 3,25;</td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td>Alih program dari program studi di luar Unila dapat dilakukan jika program studi memiliki sekurang-kurangnya akreditasi yang sama dengan program studi yang dituju.</td>
                </tr>
            </table>
        </div>
</div> 
');  

$mpdf->Output('surat studi lanjut sarjana.pdf','D');