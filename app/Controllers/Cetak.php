<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_surat_pengajuan_judul;
use App\Models\M_surat_pengajuan_usul;
use App\Models\M_surat_pengajuan_hasil;
use App\Models\M_surat_pengajuan_kompre;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_profil_dosen;
use App\Models\Z_instansi;

class Cetak extends BaseController{

    public function __construct()
    {
        $this->M_surat_pengajuan_judul = new M_surat_pengajuan_judul();
        $this->M_surat_pengajuan_usul = new M_surat_pengajuan_usul();
        $this->M_surat_pengajuan_hasil = new M_surat_pengajuan_hasil();
        $this->M_surat_pengajuan_kompre = new M_surat_pengajuan_kompre();
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_profil_dosen = new M_profil_dosen();
        $this->Z_instansi = new Z_instansi();
        $this->jrusan = $this->Z_instansi->findAll();
    }

    public function index(){echo "";} //Nothing

    public function surat_pengajuan_judul($npm)
    {
        $skrip = $this->M_surat_pengajuan_judul->find($npm);
        $dosen1 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nama='".$skrip["dosp1"]."'")->getResultArray();
        $dosen2 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nama='".$skrip["dosp2"]."'")->getResultArray();
        if(empty($skrip["dospem2"])){
            $dosen2 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nama='".$skrip["dosp2"]."'")->getResultArray();
            $dosen2[0]["nip"] = null;
        }
        $data = [
            'surat'  => $skrip,
            'nama'   => $skrip["nama"],
            'npm'    => $skrip["npm"],
            'ipk'    => $skrip["ipk"],
            'judul'  => $skrip["judul"],
            'isi'    => $skrip["judul_isi"],
            'dapus'  => $skrip["dapus"],
            'nomor'  => $skrip["telepon"],
            'alamat' => $skrip["alamat"],
            'ipk'    => $skrip["ipk"],
            'sks'    => $skrip["sks"],
            'dospem1'=> $skrip["dosp1"],
            'nip_1'  => $dosen1[0]["nip"],
            'dospem2'=> $skrip["dosp2"],
            'nip_2'  => $dosen2[0]["nip"],
            'kajur'     => $this->jrusan[0]["kajur"],
            'nip_kajur' => $this->jrusan[0]["kajur_nip"],
            'tanggal'   => $this->waktuTanggal->format(date_create(date("d-m-Y"))),
            'tahun'     => date("Y")
        ];
        echo view('dokumenCetak/skrip_pengajuan_judul', $data);
    }
}
