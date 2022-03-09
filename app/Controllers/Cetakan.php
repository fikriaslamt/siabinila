<?php

namespace App\Libraries;
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_surat_pengajuan_judul;
use App\Models\M_surat_pengajuan_usul;
use App\Models\M_surat_pengajuan_hasil;
use App\Models\M_surat_pengajuan_kompre;
use App\Models\M_data_pengajuan_judul;
use CodeIgniter\Images\Image;
use \Mpdf\Mpdf;


class Cetakan extends BaseController {

    public function __construct()
    {
        $this->M_surat_pengajuan_judul = new M_surat_pengajuan_judul();
        $this->M_surat_pengajuan_usul = new M_surat_pengajuan_usul();
        $this->M_surat_pengajuan_hasil = new M_surat_pengajuan_hasil();
        $this->M_surat_pengajuan_kompre = new M_surat_pengajuan_kompre();
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        //$this->response->setHeader('Content-Type', 'application/pdf');
    }

    function surat_pengajuan_judul($npm)
	{       
        $skrip = $this->M_surat_pengajuan_judul->find($npm);
        $data = [
            'nama'   => $skrip["nama"],
            'npm'    => $skrip["npm"],
            'ipk'    => $skrip["ipk"],
            'judul'  => $skrip["judul"],
            'isi'    => $skrip["judul_isi"],
            'dapus'  => $skrip["dapus"],
            'nomor'  => $skrip["telepon"],
            'alamat' => $skrip["alamat"],
            'ipk' => $skrip["ipk"],
            'sks' => $skrip["sks"],
            'dospem1' => $skrip["dosp1"],
            'dospem2' => $skrip["dosp2"],
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_judul', $data);

	}
    function surat_pengajuan_jview($npm)
	{       
        $skrip = $this->M_data_pengajuan_judul->find($npm);
        if($this->request->getVar('judul')=="judul1"){
            $judul = $skrip["judul1"];
            $isi = $skrip["judul1_isi"];
            $dapus = $skrip["dapus1"];
        } else { $judul = $skrip["judul2"]; $isi = $skrip["judul2_isi"]; $dapus = $skrip["dapus2"]; }

        $data = [
            'nama'   => $skrip["nama"],
            'npm'    => $skrip["npm"],
            'judul'  => $judul,
            'isi'    => $isi,
            'dapus'  => $dapus,
            'kajur'  => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun'  => date("Y")
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_judul_view', $data);

	}

    function surat_pengajuan_usul($npm)
	{   
        $usul = $this->M_surat_pengajuan_usul->find($npm);
        $data = [
            'npm'       => $usul["npm"],
            'nama'      => $usul["nama"],
            'judul'     => $usul["judul"],
            'prodi'     => $usul["prodi"],
            'jurusan'   => $usul["jurusan"],
            'dospem1'   => $usul["dospem1"],
            'dospem2'   => $usul["dospem2"],
            'penguji_u'   => $usul["penguji_u"],
            'kajur'     => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'jam'       => $usul["jam"],
            'tanggal'   => $usul["tanggal"],
            'tahun'     => date("Y"),
            'nilai_d1'  => $usul["nilai_d1"],
            'nilai_d2'  => $usul["nilai_d2"],
            'nilai_pu'  => $usul["nilai_pu"],
        ];
 
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_usul', $data);

	}
    function surat_pengajuan_hasil($npm)
	{       
        $data1 = $this->M_surat_pengajuan_hasil->find($npm);
        $data = [
            'npm'       => $data1["npm"],
            'nama'      => $data1["nama"],
            'judul'     => $data1["judul"],
            'dospem1'   => $data1["dospem1"],
            'dospem2'   => $data1["dospem2"],
            'penguji_u'   => $data1["penguji_u"],
            'kajur'     => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun'     => date("Y"),
            'jam'       => $data1["jam"],
            'tanggal'   => $data1["tanggal"],
            'nilai_d1'  => $data1["nilai_d1"],
            'nilai_d2'  => $data1["nilai_d2"],
            'nilai_pu'  => $data1["nilai_pu"],
        ];

        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_hasil', $data);

	}

    function surat_pengajuan_kompre($npm)
	{       
        $data1 = $this->M_surat_pengajuan_kompre->find($npm);
        $data = [
            'npm'       => $data1["npm"],
            'nama'      => $data1["nama"],
            'judul'     => $data1["judul"],
            'dospem1'   => $data1["dospem1"],
            'dospem2'   => $data1["dospem2"],
            'penguji_u' => $data1["penguji_u"],
            'nilai_d1'  => $data1["nilai_d1"],
            'nilai_d2'  => $data1["nilai_d2"],
            'nilai_pu'  => $data1["nilai_pu"],
            'pelak11'  => $data1["pelak11"],
            'pelak12'  => $data1["pelak12"],
            'naskah21'  => $data1["naskah21"],
            'naskah22'  => $data1["naskah22"],
            'naskah23'  => $data1["naskah23"],
            'kajur'     => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'jam'       => $data1["jam"],
            'tanggal'   => $data1["tanggal"],
            'tahun'     => date("Y"),

        ];

        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_kompre', $data);
	}


    function surat_pembayaran_keterlambatan_ukt()
	{       
        
        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'         => $this->request->getVar('semester'),
            'alasan'        => $this->request->getVar('alasan'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'orangtua'        => $this->request->getVar('orangtua'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")
           
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_pembayaran_keterlambatan_ukt',$data);

	}

    function surat_kehilangan_ukt()
	{       
        
        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'         => $this->request->getVar('semester'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'orangtua'        => $this->request->getVar('orangtua'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")
           
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_kehilangan_ukt',$data);

	}

    function surat_keringanan_ukt()
	{       
        
        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'         => $this->request->getVar('semester'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'dospem'        => $this->request->getVar('dospem'),
            'nip'        => $this->request->getVar('nip'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")
           
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_keringanan_ukt',$data);

	}

    function surat_pembebasan_ukt()
	{       
        
        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'         => $this->request->getVar('semester'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'dospem'        => $this->request->getVar('dospem'),
            'nip'        => $this->request->getVar('nip'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")
           
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_pembebasan_ukt',$data);

	}

    function surat_keringanan_ukt_50()
	{       
        
        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'         => $this->request->getVar('semester'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'sks'        => $this->request->getVar('sks'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")
           
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_keringanan_ukt_50',$data);

	}

    function surat_masih_aktif_kuliah()
	{       
        
        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'         => $this->request->getVar('semester'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'alamat'        => $this->request->getVar('alamat'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")
            
           
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_masih_aktif_kuliah',$data);

	}

    function surat_keterangan_beasiswa()
	{       
        
        $data =[
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'         => $this->request->getVar('semester'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_keterangan_beasiswa',$data);

	}
    
    function surat_permohonan_cuti()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'strata'         => $this->request->getVar('strata'),
            'alamat'        => $this->request->getVar('alamat'),
            'notlp'        => $this->request->getVar('nomor'),
            'alamat'        => $this->request->getVar('alamat'),
            'cuti'        => $this->request->getVar('cuti'),
            'lama'        => $this->request->getVar('lama'),
            'alasan'        => $this->request->getVar('alasan'),
            'dospem'        => $this->request->getVar('dospem'),
            'orangtua'        => $this->request->getVar('orangtua'),
            'nip_dospem'        => $this->request->getVar('nip_dospem'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_permohonan_cuti',$data);

	}

    function surat_pindah_kuliah()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'strata'         => $this->request->getVar('strata'),
            'alamat'        => $this->request->getVar('alamat'),
            'notlp'        => $this->request->getVar('nomor'),
            'alamat'        => $this->request->getVar('alamat'),
            'tujuan'        => $this->request->getVar('tujuan'),
            'alasan'        => $this->request->getVar('alasan'),
            'dospem'        => $this->request->getVar('dospem'),
            'orangtua'        => $this->request->getVar('orangtua'),
            'nip_dospem'        => $this->request->getVar('nip_dospem'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_pindah_kuliah',$data);

	}

    function surat_perpanjangan_masa_studi()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'strata'         => $this->request->getVar('strata'),
            'alamat'        => $this->request->getVar('alamat'),
            'notlp'        => $this->request->getVar('nomor'),
            'alamat'        => $this->request->getVar('alamat'),
            'semester'        => $this->request->getVar('semester'),
            'ipk'        => $this->request->getVar('ipk'),
            'sks'        => $this->request->getVar('sks'),
            'tgl'        => $this->request->getVar('tgl'),
            'bln'        => $this->request->getVar('bln'),
            'thn'        => $this->request->getVar('thn'),
            'dospa'        => $this->request->getVar('dospa'),
            'nip_dospa'        => $this->request->getVar('nip_dospa'),
            'dospem'        => $this->request->getVar('dospem'),
            'orangtua'        => $this->request->getVar('orangtua'),
            'nip_dospem'        => $this->request->getVar('nip_dospem'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_perpanjangan_masa_studi',$data);

	}

    
    function surat_pengisian_krs_terlambat()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'semester'        => $this->request->getVar('semester'),
            'alasan'        => $this->request->getVar('alasan'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_pengisian_krs_terlambat',$data);

	}

    function surat_penghapusan_mk()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'dospa'        => $this->request->getVar('dospa'),
            'nip_dospa'        => $this->request->getVar('nip_dospa'),
           
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_penghapusan_mk',$data);

	}

    function surat_pembetulan_nilai()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'dospa'        => $this->request->getVar('dospa'),
            'nip_dospa'        => $this->request->getVar('nip_dospa'),
            'dospj'        => $this->request->getVar('dospj'),
            'nip_dospj'        => $this->request->getVar('nip_dospj'),
           
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_pembetulan_nilai',$data);

	}

    function surat_mengundurkan_diri()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
            'dospa'        => $this->request->getVar('dospa'),
            'nip_dospa'        => $this->request->getVar('nip_dospa'),
            'ortu'        => $this->request->getVar('ortu'),
            'nomor'        => $this->request->getVar('nomor'),
            'strata'        => $this->request->getVar('strata'),
            'alasan'        => $this->request->getVar('alasan'),
            'semester'        => $this->request->getVar('semester'),
            'alamat'        => $this->request->getVar('alamat'),
            'ta'        => $this->request->getVar('ta'),
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_mengundurkan_diri',$data);

	}

    function surat_studi_lapangan()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm1'           => $this->request->getVar('npm1'),
            'mhs1'          => $this->request->getVar('mhs1'), 
            'npm2'           => $this->request->getVar('npm2'),
            'mhs2'          => $this->request->getVar('mhs2'), 
            'npm3'           => $this->request->getVar('npm3'),
            'mhs3'          => $this->request->getVar('mhs3'), 
            'npm4'           => $this->request->getVar('npm4'),
            'mhs4'          => $this->request->getVar('mhs4'), 
            'dosen'        => $this->request->getVar('dosen'),
            'nip_dosen'        => $this->request->getVar('nip_dosen'),
            'perusahaan'        => $this->request->getVar('perusahaan'),
            'mk'        => $this->request->getVar('mk'),
            'nomor'        => $this->request->getVar('nomor'),
            'tgl_awal'        => $this->request->getVar('tgl_awal'),
            'tgl_akhir'        => $this->request->getVar('tgl_akhir'),
            'semester'        => $this->request->getVar('semester'),
            'alamat'        => $this->request->getVar('alamat'),
            'ta'        => '2022/2023',
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'dekan' => 'Drs. Susetyo, M.Si.',
            'nip_dekan' => '19581004 198902 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_studi_lapangan',$data);

	}

    function surat_riset_data_skripsi()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
   
            'dosen'        => $this->request->getVar('dosen'),
            'nip_dosen'        => $this->request->getVar('nip_dosen'),
            'perusahaan'        => $this->request->getVar('perusahaan'),
            'alamat_perusahaan'        => $this->request->getVar('alamat_perusahaan'),
            'judul'        => $this->request->getVar('judul'),
            'nomor'        => $this->request->getVar('nomor'),
            'tgl_awal'        => $this->request->getVar('tgl_awal'),
            'tgl_akhir'        => $this->request->getVar('tgl_akhir'),
            'semester'        => $this->request->getVar('semester'),
            'alamat'        => $this->request->getVar('alamat'),
            'ta'        => '2022/2023',
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'dekan' => 'Drs. Susetyo, M.Si.',
            'nip_dekan' => '19581004 198902 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_riset_data_skripsi',$data);

	}

    function surat_studi_lanjut_sarjana()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
   
            'ortu'        => $this->request->getVar('ortu'),
            'alasan'        => $this->request->getVar('alasan'),
            'ttl'        => $this->request->getVar('ttl'),
            'alamat'        => $this->request->getVar('alamat'),
            'jk'        => $this->request->getVar('jk'),
            'nomor'        => $this->request->getVar('nomor'),
            'agama'        => $this->request->getVar('agama'),
            'npm_lama'        => $this->request->getVar('npm_lama'),
            'asal_prodi'        => $this->request->getVar('asal_prodi'),
            'prodi_tujuan'        => $this->request->getVar('prodi_tujuan'),
            'fk_tujuan'        => $this->request->getVar('fk_tujuan'),
            'ta'        => '2022/2023',
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'dekan' => 'Drs. Susetyo, M.Si.',
            'nip_dekan' => '19581004 198902 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_studi_lanjut_sarjana',$data);

	}

    function surat_pindah_studi()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
   
            'ortu'        => $this->request->getVar('ortu'),
            'alasan'        => $this->request->getVar('alasan'),
            'ttl'        => $this->request->getVar('ttl'),
            'alamat'        => $this->request->getVar('alamat'),
            'jk'        => $this->request->getVar('jk'),
            'nomor'        => $this->request->getVar('nomor'),
            'agama'        => $this->request->getVar('agama'),
            'npm_lama'        => $this->request->getVar('npm_lama'),
            'asal_prodi'        => $this->request->getVar('asal_prodi'),
            'prodi_tujuan'        => $this->request->getVar('prodi_tujuan'),
            'asal_fk'        => $this->request->getVar('asal_fk'),
            'asal_univ'        => $this->request->getVar('asal_univ'),
            'strata'        => $this->request->getVar('strata'),
      
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'dekan' => 'Drs. Susetyo, M.Si.',
            'nip_dekan' => '19581004 198902 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_pindah_studi',$data);

	}

    function surat_pindah_studi_internal()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
   
            'ortu'        => $this->request->getVar('ortu'),
            'alasan'        => $this->request->getVar('alasan'),
            'ttl'        => $this->request->getVar('ttl'),
            'alamat'        => $this->request->getVar('alamat'),
            'jk'        => $this->request->getVar('jk'),
            'nomor'        => $this->request->getVar('nomor'),
            'agama'        => $this->request->getVar('agama'),
            'npm_lama'        => $this->request->getVar('npm_lama'),
            'asal_prodi'        => $this->request->getVar('asal_prodi'),
            'prodi_tujuan'        => $this->request->getVar('prodi_tujuan'),
            'fk_tujuan'        => $this->request->getVar('fk_tujuan'),
            'asal_univ'        => $this->request->getVar('asal_univ'),
            'strata'        => $this->request->getVar('strata'),
            'semester'        => $this->request->getVar('semester'),
            'dospa'        => $this->request->getVar('dospa'),
            'nip_dospa'        => $this->request->getVar('nip_dospa'),
      
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'dekan' => 'Drs. Susetyo, M.Si.',
            'nip_dekan' => '19581004 198902 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_pindah_studi_internal',$data);

	}

    function surat_tidak_sanksi()
	{       
        
        $data =[
            'tanggal'           => $this->request->getVar('tanggal'),
            'npm'           => $this->request->getVar('npm'),
            'nama'          => $this->request->getVar('nama'), 
   
            'ortu'        => $this->request->getVar('ortu'),
            'alasan'        => $this->request->getVar('alasan'),
            'ttl'        => $this->request->getVar('ttl'),
            'alamat'        => $this->request->getVar('alamat'),
            'jk'        => $this->request->getVar('jk'),
            'nomor'        => $this->request->getVar('nomor'),
            'keperluan'        => $this->request->getVar('keperluan'),
            'akademik'        => $this->request->getVar('akademik'),
            'asal_prodi'        => $this->request->getVar('asal_prodi'),
            'prodi'        => $this->request->getVar('prodi'),
            'fk_tujuan'        => $this->request->getVar('fk_tujuan'),
            'asal_univ'        => $this->request->getVar('asal_univ'),
            'strata'        => $this->request->getVar('strata'),
            'semester'        => $this->request->getVar('semester'),
            'dospa'        => $this->request->getVar('dospa'),
            'nip_dospa'        => $this->request->getVar('nip_dospa'),
      
            'kajur' => 'Suprihatin Ali, S.Sos., M.Sc',
            'nip_kajur' => '19740918 200112 1 001',
            'dekan' => 'Drs. Susetyo, M.Si.',
            'nip_dekan' => '19581004 198902 1 001',
            'tahun' => date("Y")     
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_tidak_sanksi',$data);

	}
}