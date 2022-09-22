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
            <td>: Permohonan Pembetulan Nilai
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1(satu) Berkas</td>
        </tr>
    </table>
    <br><br>
    Yth. Wakil Dekan Bid. Akademik dan Kerjasama<br/>
    

    
    <table class="padding_isi">
        <tr>
            <td>
            c.q Ketua Jurusan Ilmu Adm. Bisnis
            </td>
        </tr>
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

    </table>
    <br><br>

    Menerangkan bahwa pada semester '.$semester.' TA '.$ta.' terdapat kesalahan rekaman
    pada nilai KHS saya. Sesuai SK Rektor No. 458/UN26/DT/2016 Tentang Peraturan
    Akademik Pasal 31 perihal <b>pembetulan nilai</b>, dengan ini mohon pembetulan nilai untuk
    matakuliah berikut ini:
    <br>
    <table class="tbl_isi" style="text-align: center;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kopel</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>
                    Nilai <br>
                    Awal
                </th>
                <th>
                    Nilai <br>
                    Baru
                </th
                <th>
                    Nama & Paraf <br>
                    Dosen PJ Mata <br>
                    Kuliah
                </th>
                
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
        </tbody>
    </table>
    <br>
    Alasan <b>pembetulan nilai</b> adalah ........... <i>(Kesalahan pengisian/Remidial/Kesalahan Dosen
    PJ pada KRS/Terlambat mengisi nilai/Terlambat validasi KRS/dll)</i>. Bersama dengan ini saya
    lampirkan KRS dan KHS serta rekap nilai.<br>
    
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih.
    <br><br>
    <table style="width: 100%;">
        <tr>
            <td style="width: 55%;">
                Mengetahui, <br>
                Dosen Pembimbing Akademik <br><br><br><br><br>
                '.$dospa.'  <br>
                NIP '.$nip_dospa->nip.'
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
    table style="width: 100%;">
        <tr>
            <td style="width: 100%; text-align: center;">
                Mengetahui/Menyetujui, <br>
                Dosen PJ Mata Kuliah <br><br><br><br><br>
                '.$dospj.'<br>
                NIP '.$nip_dospj->nip.'
            </td>
        </tr>
    </table>


    <div style="font-size: 11;">
        Catatan:
        <table style="font-size: 11;"> 
            <tr>
                <td>1. </td>
                <td>
                    Perbaikan nilai mahasiswa hanya bisa dilakukan selama tidak melewati satu semester berjalan. Misalnya
                    semester yang berjalan adalah Genap TA 2016/2017 maka perbaikan nilai hanya berlaku untuk semester
                    Ganjil TA 2016/2017;
                </td>
            </tr>
            <tr>
                <td>2. </td>
                <td>Pembetulan nilai hanya dapat dilakukan paling lambat 4 minggu setelah jadwal pengisian nilai berakhir.</td>
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
            <td>: Permohonan Persetujuan Pembetulan Nilai</td>
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



    Sesuai dengan permohonan mahasiswa bernama '.$nama.' NPM '.$npm.' tanggal '.$tanggal.' perihal permohonan pembetulan nilai, maka dengan ini kami kirimkan berkas kelengkapan permohonan pembetulan nilai yang bersangkutan untuk mata kuliah
    '.$mk.'
    <br><br>
    Demikian surat permohonan kami, atas perhatian dan kerjasamanya disampaikan terimakasih.  <br><br><br>

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
    <br><br>

    <div style="font-size: 11;">
    Catatan: <br>
    Khusus pembetulan nilai, satu pengantar Jurusan/PS hanya untuk satu mata kuliah.
</div>
 
</div>
');

$mpdf->Output('surat pembetulan nilai.pdf','D');