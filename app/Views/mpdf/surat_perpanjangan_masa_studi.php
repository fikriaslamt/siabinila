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
            <td>: Permohonan Perpanjangan Masa Studi
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (Satu) Bundel</td>
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
            <td>: FISIP</td>
        </tr>
        <tr>
            <td>Jurusan/PS</td>
            <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Strata</td>
            <td>: '.$strata.'</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: '.$alamat.'</td>
         </tr>
         <tr>
            <td>No. Telepon/HP</td>
            <td>: '.$notlp.'</td>
        </tr>
        
        <tr>
            <td>Semester</td>
            <td>: XIV (empat belas) Genap TA '.$semester.'</td>
        </tr>
    </table>
    <br><br>

    DDengan ini mengajukan perpanjangan masa studi selama 1 (satu) semester. Saya sudah membaca
    dan memahami Peraturan Akademik, apabila setelah satu semester berikutnya saya tidak dapat
    menyelesaikan skripsi, maka saya siap dinyatakan putus studi. Sebagai bahan pertimbangan
    Bapak, dengan ini kami lampirkan berkas-berkas sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Berita Acara Hasil Seminar II/Seminar Hasil Skripsi dan transkrip akademik;</td>
        </tr>
        <tr>
            <td>2. Fotokopi draf tugas akhir/skripsi/tesis;</td>
        </tr>
        <tr>
            <td>3. Salinan bukti pembayaran UKT terakhir;</td>
        </tr>
        <tr>
            <td>4. Surat pernyataan bermaterai cukup (apabila setelah perpanjangan masa studi satu semester
            tidak dapat menyelesaikan skripsi, mahasiswa yang bersangkutan bersedia dinyatakan
            putus studi);</td>
        </tr>
        <tr>
            <td>5. Fotokopi KTM</td>
        </tr>
    </table>
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
                Mengetahui, <br>
                Dosen Pembimbing Akademik <br><br><br><br><br>
                '.$dospa.'<br>
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

 
</div>

');

$mpdf->AddPage();
$mpdf->WriteHTML('

<div class="teks_isi">
    <br><br>
    <table style="width: 100%;">
    <tr>
        <td style="width: 100%; text-align: center;">
            Mengetahui/Menyetujui, <br>
            Dosen Pembimbing (tugas akhir/skripsi/tesis)<br><br><br><br><br>
            '.$dospem.'<br>
            NIP. '.$nip_dospem->nip.'
        </td>
    </tr>
    </table>
</div>

');

$mpdf->AddPage();
$mpdf->WriteHTML('
<div class="teks_isi">
    <br><br>
    <div class="title">SURAT PERNYATAAN</div>
    <br>

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
            <tr>
                <td>Strata</td>
                <td>: '.$strata.'</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: '.$alamat.'</td>
            </tr>
            <tr>
                <td>No. Telepon/HP</td>
                <td>: '.$notlp.'</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>: XIV (empat belas) Genap TA '.$semester.'</td>
            </tr>
            <tr>
                <td>IPK</td>
                <td>: '.$ipk.'</td>
            </tr>
            <tr>
                <td>Jumlah SKS</td>
                <td>: '.$sks.'</td>
            </tr>
        </table>
        <br><br>

        DDengan ini menyatakan bahwa saya akan menyelesaikan skripsi paling lambat tanggal '.$tgl.'
        bulan '.$bln.' tahun '.$thn.' apabila setelah tanggal tersebut saya tidak dapat menyelesaikan
        skripsi, maka saya siap dinyatakan putus studi.
        <br>
        
        <br>
        Demikian surat pernyataan ini dibuat dengan sebenarnya tanpa ada unsur paksaan dari pihak
        manapun. <br><br>
    <br>

        <table style="width: 100%;">
            <tr>
                <td style="width: 55%;">
                    <br>
                    Mengetahui, <br>
                    Dosen Pembimbing Akademik <br><br><br><br><br>
                    '.$orangtua.'
                
                </td>
                <td>
                    Bandar Lampung, '.$tanggal.'<br>
                    Yang membuat pernyataan,
                    <br><br><br>Materai 6000<br><br><br>
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
            <td>: ....../UN.26.16.06/KM.00.02/'.$tahun.'</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Persetujuan Perpanjangan Masa Studi</td>
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



    Sesuai dengan permohonan mahasiswa yang bernama '.$nama.' NPM '.$npm.' '.$tanggal.', perihal
    permohonan perpanjangan masa studi, maka dengan ini kami menyetujui permohonan tersebut.
    Bersama dengan ini kami kirimkan kelengkapan berkas dan kami mohon untuk diterbitkan SK
    (izin) perpanjangan masa studi yang bersangkutan.
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
$mpdf->Output('surat perpanjangan masa studi.pdf','D');