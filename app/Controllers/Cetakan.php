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
            'nama'     => $skrip["nama"],
            'npm'      => $skrip["npm"],
            'ipk'      => $skrip["ipk"],
            'judul'    => $skrip["judul"],
            'isi'    => $skrip["judul_isi"],
            'nomor'  => $skrip["telepon"],
            'alamat' => $skrip["alamat"],
            'ipk' => $skrip["ipk"],
            'sks' => $skrip["sks"],
            'dospem1' => $skrip["dosp1"],
            'dospem2' => $skrip["dosp2"],
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
        } else { $judul = $skrip["judul2"]; $isi = $skrip["judul2_isi"]; }

        $data = [
            'nama'     => $skrip["nama"],
            'npm'      => $skrip["npm"],
            'judul'    => $judul,
            'isi'    => $isi,
            'tahun' => date("Y")
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_judul_view', $data);

	}

    function surat_pengajuan_usul($npm)
	{   
        $data1 = $this->M_surat_pengajuan_usul->find($npm);
        $data = [
            'npm'           => $data1["npm"],
            'nama'          => $data1["nama"],
            'judul'          => $data1["judul"],
            'prodi'         => $data1["prodi"],
            'jurusan'         => $data1["jurusan"],
            'tahun' => date("Y")

        ];
        

        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_usul', $data);

	}
    function surat_pengajuan_hasil($npm)
	{       
        $data1 = $this->M_surat_pengajuan_hasil->find($npm);
        $data = [
            'npm'           => $data1["npm"],
            'nama'          => $data1["nama"],
            'judul'          => $data1["judul"],
            'tahun' => date("Y")

        ];

        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_hasil', $data);

	}

    function surat_pengajuan_kompre($npm)
	{       
        $data1 = $this->M_surat_pengajuan_kompre->find($npm);
        $data = [
            'npm'           => $data1["npm"],
            'nama'          => $data1["nama"],
            'judul'          => $data1["judul"],
            'tahun' => date("Y")

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
            'tahun' => date("Y")
            
           
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/surat_masih_aktif_kuliah',$data);

	}
}