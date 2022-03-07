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
}