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
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_judul', $data);

	}
    function surat_pengajuan_jview($npm)
	{       
        $skrip = $this->M_data_pengajuan_judul->find($npm);
        if($this->request->getVar('npm')=="judul1"){
            $judul = $skrip["judul1"];
        } else { $judul = $skrip["judul2"]; }

        $data = [
            'nama'     => $skrip["nama"],
            'npm'      => $skrip["npm"],
            'judul'    => $judul,
            'isi'    => $skrip["judul1_isi"],
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_judul_view', $data);

	}

    function surat_pengajuan_usul($no_surat)
	{       
        $data = $this->M_surat_pengajuan_usul->find($no_surat);

        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_usul', $data);

	}
    function surat_pengajuan_hasil($no_surat)
	{       
        $data = $this->M_surat_pengajuan_hasil->find($no_surat);

        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_hasil', $data);

	}

    function surat_pengajuan_kompre($no_surat)
	{       
        $data = $this->M_surat_pengajuan_kompre->find($no_surat);

        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_kompre', $data);

	}
}