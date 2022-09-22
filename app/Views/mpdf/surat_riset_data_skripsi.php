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
            <td>: Izin Riset dan Pengambilan Data
            </td>
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
            <td>Alamat</td>
            <td>: '.$alamat.'</td>
         </tr>
         <tr>
            <td>No. Telepon/HP</td>
            <td>: '.$nomor.'</td>
        </tr>

    </table>
    <br><br>

    Dengan ini mengajukan permohonan penerbitan surat pengantar izin riset dan pengambilan data
    skripsi ke Perusahaan/PT/CV '.$perusahaan.' di '.$alamat_perusahaan.'. Adapun judul riset/skripsi saya adalah
    “'.$judul.'” sebagai persyaratan permohonan pengajuan Judul Skripsi, bersama
    ini saya lampirkan Form (A.1 s.d. A.4).
    <br>
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
                Mengetahui, <br>
                Dosen Pembimbing I Skripsi,<br><br><br><br><br>
                '.$dosen.' <br>
                NIP '.$nip_dosen->nip.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br><br><br><br>
                '.$nama.' <br>
                NPM '.$npm.'
                
            </td>
        </tr>
    </table>
    <br>

 
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
            <td>: ....../UN.26.16.06/PP.05.02.00/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Hal</td>
            <td>: Persetujuan Izin Riset dan Pengambilan Data</td>
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
    

    Sehubungan dengan adanya permohonan penerbitan surat izin riset dan pengambilan data skripsi
    ke Perusahaan/PT/CV '.$perusahaan.' di '.$alamat_perusahaan.' dengan judul riset-skripsi “'.$judul.'” atas nama 
    '.$nama.' dengan NPM '.$npm.' pada dasarnya kami menyetujui permohonan beserta kelengkapan
    berkas mahasiswa yang bersangkutan dan mohon dapat diterbitkan surat pengantar izin riset dan
    pengambilan data skripsinya.
    <br><br>
    Atas perhatian dan kerjasamanya disampaikan terima kasih.  <br><br><br>

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

$mpdf->AddPage();
$mpdf->WriteHTML($kop_surat.'

<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Nomor</td>
            <td>: ....../UN.26.16.06/PP.05.02.00/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Izin Riset dan Pengambilan Data</td>
        </tr>
    </table>
    <br><br>
    Yth. Direktur Perusahaan/PT/CV '.$perusahaan.'<br/>

    
    <table class="padding_isi">
        <tr>
            <td>
            '.$alamat_perusahaan.'
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
    

    Dalam rangka menyusun Skripsi dengan judul “'.$judul.'”, sebagai salah satu syarat untuk
    menyelesaikan studi pada Jurusan Ilmu Administrasi Bisnis, Dekan Fakultas Ilmu Sosial dan Ilmu
    Politik Universitas Lampung dengan ini mengharapkan bantuan dan kesediaan Direktur
    Perusahaan/PT/CV '.$perusahaan.' untuk dapat memberikan izin melakukan Riset dan Pengambilan
    Data pada mahasiswa dibawah ini :
    <br><br>

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
            <td>Alamat</td>
            <td>: '.$alamat.'</td>
        </tr>
        <tr>
            <td>No. Telepon/HP</td>
            <td>: '.$nomor.'</td>
        </tr>

    </table>
    <br><br>
    Atas perhatian dan kerjasamanya disampaikan terima kasih.  <br><br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 45%;">
            </td>
            <td>
                a.n. Dekan<br>
                Wakil Dekan Bid. Akademik dan Kerjasama,
                <br><br><br><br><br><br>
                '.$dekan.'<br>
                NIP. '.$nip_dekan.'
                
            </td>
        </tr>
    </table>
    <br><br><br><br><br><br><br>
    Tembusan :<br>
    1. Dekan;<br>
    2. Direktur '.$perusahaan.';<br>
    3. Ketua Jur. Adm. Bisnis;<br>
    4. Yang bersangkutan;<br>
    5. Arsip.
</div>
');
$mpdf->Output('surat riset data skripsi.pdf','D');