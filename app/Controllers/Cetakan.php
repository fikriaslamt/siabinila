<?php

namespace App\Libraries;
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_surat_pengajuan_judul;
use App\Models\M_surat_pengajuan_usul;
use App\Models\M_surat_pengajuan_hasil;
use App\Models\M_surat_pengajuan_kompre;
use CodeIgniter\Images\Image;
use \Mpdf\Mpdf;


class Cetakan extends BaseController {

    public function __construct()
    {
        $this->M_surat_pengajuan_judul = new M_surat_pengajuan_judul();
        $this->M_surat_pengajuan_usul = new M_surat_pengajuan_usul();
        $this->M_surat_pengajuan_hasil = new M_surat_pengajuan_hasil();
        $this->M_surat_pengajuan_kompre = new M_surat_pengajuan_kompre();
        //$this->response->setHeader('Content-Type', 'application/pdf');
    }

    function surat_pengajuan_judul()
	{       
        // $data = $this->M_surat_pengajuan_judul->find($npm);
        $data = [
            'nama' => "Diffa Addien Aziz",
            'npm' => "1917051015",
            'ipk' => "3.77",
            'judul' => "Robot Cerdas",
            'nomor' => "083802784342",
        ];
        $this->response->setHeader('Content-Type', 'application/pdf');
        echo view('mpdf/doc_pengajual_judul', $data);

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