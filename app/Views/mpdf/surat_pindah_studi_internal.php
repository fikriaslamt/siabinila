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
            <td>: Permohonan Pindah Program Studi di Unila
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1(satu) Berkas</td>
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
            <td>: '.$strata.'</td>
        </tr>
        <tr>
            <td>Asal Program Studi</td>
            <td>: Ilmu Administrasi Bisnis</td>
         </tr>

        <tr>
            <td>PS Yang Dituju</td>
            <td>: '.$prodi_tujuan.'</td>
        </tr>
  
        <tr>
            <td>Alasan Pindah PS</td>
            <td>: '.$alasan.'</td>
        </tr>
    </table>
    <br><br>

    Bersama ini saya mengajukan Pindah Program Studi dari Program Studi Ilmu Administrasi Bisnis Fakultas FISIP ke
    Program Studi '.$prodi_tujuan.' Fakultas '.$fk_tujuan.' Sebagai bahan pertimbangan saya lampirkan persyaratan
    sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. </td>
            <td>Surat keterangan tidak dalam keadaan melanggar tata tertib, berkelakuan baik, dan tidak
            diputus studikan dari fakultas;</td>
        </tr>
        <tr>
            <td>2. </td>
            <td>Transkrip akademik resmi yang disahkan oleh pejabat yang berwenang;</td>
        </tr>
            <tr>
            <td>3. </td>
            <td>Bukti pembayaran UKT terakhir.</td>

        </tr>

    </table>
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih. <br><br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
                Mengetahui, <br>
                Orang Tua/Wali <br><br><br><br><br>
                '.$ortu.'
            </td>
            <td>
                Hormat Saya,
                <br><br><br>Materai 6.000<br><br><br>
                '.$nama.' <br>
                NPM '.$npm.'
                
            </td>
        </tr>
    </table>
   
</div>

');

$mpdf->AddPage();
$mpdf->WriteHTML('
<div class="teks_isi">
    <div class="text_kanan">Bandar Lampung, '.$tanggal.'</div>
    
    <br>
    <table>
        <tr>
            <td>Hal</td>
            <td>: Permohonan Surat Keterangan Kelakuan Baik
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
    <br>
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
            <td>Jenis Kelamin</td>
            <td>: '.$jk.'</td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>: FISIP</td>
        </tr>
        <tr>
            <td>Strata</td>
            <td>: '.$strata.'</td>
        </tr>
        <tr>
            <td>Jurusan/PS</td>
            <td>: Ilmu Administrasi Bisnis</td>
        </tr>
        <tr>
            <td>Semester</td>
            <td>: '.$semester.'</td>
        </tr>

        <tr>
            <td>Alamat Lengkap</td>
            <td>: '.$alamat.'</td>
        </tr>
        <tr>
            <td>No. Telepon/HP</td>
            <td>: '.$nomor.'</td>
        </tr>
        <tr>
            <td>Keperluan</td>
            <td>: Pindah Program Studi</td>
        </tr>
    </table>
    <br><br>

    Sehubungan dengan rencana saya Pindah Program Studi dari Program Studi Ilmu Administrasi Bisnis Fakultas FISIP ke
    Program Studi '.$prodi_tujuan.' Fakultas '.$fk_tujuan.', dengan ini saya memohon surat pengantar ke Dekan c.q Wakil
    Dekan Bidang Akademik dan Kerjasama FISIP Universitas Lampung, untuk dibuatkan surat
    keterangan berikut ini:
    <br><br>
    <div style="text-align: center; font-weight: bold;">“Surat keterangan tidak dalam keadaan melanggar tata tertib, berkelakuan baik, dan tidak diputusstudikan dari fakultas”</div>
    <br>

    Bersama ini saya lampirkan persyaratan sebagai berikut:
    <br>
    <table class="padding_isi">
        <tr>
            <td>1. Fotokopi Kartu Tanda Mahasiswa (KTM);</td>
        </tr>
        <tr>
            <td>2. Transkrip Akademik;</td>
        </tr>
            <tr>
            <td>3. Salinan bukti pembayaran UKT semester berjalan.</td>
        </tr>
    </table>
    <br>
    Atas perhatian dan kerjasamanya disampaikan terimakasih. <br>
  <br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
                Mengetahui/Menyetujui, <br>
                Dosen Pembimbing Akademik <br><br><br><br><br>
                '.$dospa.' <br>
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
            <td>: ....../UN.26.16.06/KM.00.03/'.$tahun.'
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: 1 (satu) Berkas</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: Permohonan Pembuatan Keterangan Kelakuan Baik
            </td>
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

    <br>
    Dengan hormat, <br><br>


    Sehubungan dengan adanya permohonan pembuatan keterangan kelakuan baik atas nama
    '.$nama.' NPM '.$npm.' maka dengan ini kami menyetujui permohonan mahasiswa
    tersebut. Bersama dengan ini kami kirimkan kelengkapan berkasnya dan kami mohon untuk
    diterbitkan surat keterangan kelakuan baik yang bersangkutan.
    <br><br>

    Atas perhatian dan kerjasamanya disampaikan terimakasih.    <br><br><br>
    
    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
            </td>
            <td>
                Ketua Jurusan, <br>
                
                <br><br><br><br><br><br>
                '.$kajur.'<br>
                NIP '.$kajur.'
                
            </td>
        </tr>
    </table>
</div>
');

$mpdf->AddPage();
$mpdf->WriteHTML('
<div class="teks_isi">
    <table>
        <tr>
            <td>Perihal</td>
            <td>: Pindah Studi ke Universitas Lampung
            </td>
        </tr>
    </table>
    <br><br>
    Yth. Rektor Universitas Lampung<br/>
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
            <td>: '.$strata.'</td>
        </tr>
        <tr>
            <td>Asal Program Studi</td>
            <td>: Ilmu Administrasi Bisnis</td>
         </tr>

        <tr>
            <td>Program Studi dituju</td>
            <td>: '.$prodi_tujuan.'</td>
        </tr>
  
        <tr>
            <td>Alasan alih program</td>
            <td>: '.$alasan.'</td>
        </tr>
    </table>
    <br><br>

    Bersama ini dilampirkan persyaratan sesuai Peraturan Akademik Universitas Lampung tahun
    2016 Bagian Kedua Puluh Sembilan tentang Pindah Studi ke Universitas Lampung Pasal 41 dan
    42 sebagai berikut:
    <br>
    <table>
        <tr>
            <td>a. </td>
            <td>Surat keterangan dari pemimpin fakultas asal tentang status kemahasiswaan;</td>
        </tr>
        <tr>
            <td>b. </td>
            <td>surat keterangan tidak putus studi dari wakil rektor bidang akademik universitas asal;</td>
        </tr>
        <tr>   
            <td>c. </td>
            <td>surat persetujuan dari orangtua/wali bagi calon yang masih menjadi tanggungan orang
            tuanya/wali;</td>
        </tr>
        <tr>
            <td>d. </td>
            <td>surat keterangan kelakuan baik dari kepolisian;</td>

        </tr>
        <tr>
            <td>e. </td>
            <td>transkrip akademik resmi yang ditandatangani oleh pejabat yang berwenang dari universitas
            asal;</td>
        </tr>
        <tr>
            <td>f. </td>
            <td>Fotokopi Akreditasi yang dilegalisir oleh pejabat yang berwenang.</td>
        </tr>
    </table>
    <br>
    *. Alih program pendidikan dari program studi di luar Unila sebagaimana dimaksud pada ayat
    (1), dapat dilakukan jika memiliki sekurang-kurangnya akreditasi yang sama dengan program
    studi yang dituju. <br><br>
    Demikian surat permohonan ini disampaikan, atas perhatian dan diperkenankan permohonan ini
    kami ucapkan terima kasih.
    <br><br>

    <table style="width: 100%;">
        <tr>
            <td style="width: 65%;">
            <br>
                Orang Tua/Wali;<br><br><br><br><br>
                '.$ortu.'
            </td>
            <td>
                Bandar Lampung, '.$tanggal.' <br>
                Hormat Saya,
                <br><br><br><br><br><br>
                '.$nama.' <br>
                NPM '.$npm.'
                
            </td>
        </tr>
    </table>
   
</div>
');

$mpdf->Output('surat pindah studi internal.pdf','D');