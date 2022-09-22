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
            <td>: Permohonan Penghapusan Mata Kuliah
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1(satu) Berkas</td>
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
    </table>
    <br><br>

    Sesuai Peraturan Akademik Tahun 2016 Pasal 30 Ayat 5 Tentang Pengulangan dan
    Penghapusan Mata Kuliah, bahwa penghapusan mata kuliah dapat dilakukan sepanjang
    jumlah SKS minimal terpenuhi (min. 44 SKS dan maks. 160 SKS). Bersama dengan ini saya
    mengajukan permohonan penghapusan mata kuliah sebagai berikut:
    <br><br>
    <table class="tbl_isi" style="width:100%;">
        <thead>
            <tr>
                <th>No</th>
                <th>Kopel</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
        </tbody>
    </table>
    <br>
    Sebagai bahan pertimbangan, berikut saya lampirkan transkrip akademik (sementara),
    Atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
                Mengetahui, <br>
                Dosen Pembimbing Akademik <br><br><br><br><br>
                '.$dospa.'  <br>
                NIP .'.$nip_dospa->nip.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br><br><br><br>
                '.$nama.' <br>
                NPM .'.$npm.'
                
            </td>
        </tr>
    </table>
    <br>
    <div style="font-size: 11;">
        Catatan:  <br>
        <table style="font-size: 11;"> 
            <tr>
                <td>1. </td>
                <td>Penghapusan mata kuliah sebagai syarat ujian skripsi, untuk teknis proses penghapusan mata kuliah
                dilakukan setelah nilai lengkap (nilai skripsi terinput ke sistem SIAKAD).</td>
            </tr>
            <tr>
                <td>2. </td>
                <td>Melampirkan transkrip nilai yang sudah lengkap saat mengirimkan berkas penghapusan ke Wakil Dekan
                Bid. Akademik dan Kerjasama.</td>
            </tr>
        </table>
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
            <td>: ....../UN.26.16.06/PP.02.02/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Persetujuan Penghapusan Mata Kuliah</td>
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



    Sesuai dengan permohonan mahasiswa bernama '.$nama.' NPM '.$npm.' tanggal '.$tanggal.' perihal
    permohonan penghapusan mata kuliah, maka dengan ini kami menyetujui permohonan
    tersebut. Bersama dengan ini kami kirimkan kelengkapan berkas dan kami mohon untuk
    dilakukan penghapusan mata kuliah bagi bersangkutan
    <br><br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih.  <br><br><br>

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

$mpdf->Output('surat penghapusan mk.pdf','D');