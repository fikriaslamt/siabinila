<?php

namespace App\Controllers;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_data_skripsi;
use App\Models\M_data_usul;
use App\Models\M_data_hasil;
use App\Models\M_data_kompre;
use App\Models\M_akun;
use App\Models\M_profil_dosen;


class Dosen extends BaseController

{
    protected $M_data_pengajuan_judul;
    protected $M_data_skripsi;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_data_usul = new M_data_usul();
        $this->M_data_kompre = new M_data_kompre();
        $this->M_data_hasil = new M_data_hasil();
        $this->M_akun = new M_akun();
        $this->M_profil_dosen = new M_profil_dosen();
    }

    public function index()
    {

        $data = [
            'title' => "Dosen",
            
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen');
        echo view('r_dosen/v_dosen', $data);
        echo view('layouts/footer');
    }
    
    public function profil()
    {   
       
        $data1 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nip='".session()->user."'")->getResult();
        $data = [
            'title' => "Profile - Dosen",
            'data' => $data1,
            'pesan_err' => \Config\Services::validation(),
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/profil_dosen',$data);
        echo view('layouts/footer');
    }
    public function form_edit_profil()
    {
        $data1 = $this->M_profil_dosen->query("SELECT * FROM profil_dosen where nip='".session()->user."'")->getResult();
        $data = [
            'title' => "Profile - Edit",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/edit_profil_dosen',$data);
        echo view('layouts/footer');
    }
    public function edit_foto($npm){
        if(!$this->validate([
            'gambar_profil' => 'uploaded[gambar_profil]|max_size[gambar_profil,500]|ext_in[gambar_profil,png,jpg]'
        ]) ){
            return redirect()->to(base_url('Dosen/profil'))->withInput();
        }
        $readFile =  './upload/foto/dosen/'.$this->request->getVar('foto');
        if (is_readable($readFile)){
            unlink($readFile);
        } 
        $file =  $this->request->getFile('gambar_profil');  $namafile = $file->getName();
        $file->move('./upload/foto/dosen', 'profil_'.$npm.'.'.$file->getExtension());        
        $file_fix = $file->getName();
        $this->M_profil_dosen->query("UPDATE profil_dosen SET foto = '$file_fix' WHERE nip = $npm");
        return redirect()->to(base_url('Dosen/profil'));
    }
    public function edit_profil($nip)
    {   
        $this->M_profil_dosen->update($nip,$this->request->getPost());
        return redirect()->to(base_url('Dosen/profil'));
    }

    public function data_pengajuan_usul()
    {
        $data1 =$this->M_data_skripsi->query("SELECT * FROM data_usul where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResultArray();


        $data = [
            'title' => "Data Pengajuan Seminar Usul",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/data_usul', $data);
        echo view('layouts/footer');
    }

    public function data_pengajuan_hasil()
    {
        $data1 =$this->M_data_skripsi->query("SELECT * FROM data_hasil where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResultArray();


        $data = [
            'title' => "Data Pengajuan Seminar Hasil",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/data_hasil', $data);
        echo view('layouts/footer');
    }

    public function data_pengajuan_kompre()
    {
        $data1 =$this->M_data_skripsi->query("SELECT * FROM data_kompre where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResultArray();


        $data = [
            'title' => "Data Pengajuan Ujian Skripsi",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/data_kompre', $data);
        echo view('layouts/footer');
    }


    public function terima_usul($npm)
    {   
        $skripsi = $this->M_data_skripsi->find($npm);
        
        $date1 = $skripsi["date_judul"];
        $date2 = date('Y-m-d');
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%a Hari');

        $data = $this->M_data_usul->find($npm);
        
        $pengajuan = [
            'time' => $interval,
            'time_judul-usul' => $interval,
            'date' => $date2,
            'date_usul' => $date2,
            'npm'=> $data["npm"],
            'nama'=> $data["nama"],
            'judul'=> $data["judul"],
            'dospem1'=> $data["dospem1"],
            'dospem2'=> $data["dospem2"],
            'status'=> "SEMINAR USUL"
        ];
        
        $this->M_data_skripsi->update($npm,$pengajuan);
        
        // $this->M_data_usul->delete($npm);
        
        return redirect()->to(base_url('Dosen/data_pengajuan_usul'));
    }

    public function tolak_usul($npm)
    {      
        $this->M_data_usul->delete($npm);
        return redirect()->to(base_url('Dosen/data_pengajuan_usul'));
    }

    public function terima_hasil($npm)
    {   
        $skripsi = $this->M_data_skripsi->find($npm);
        
        $date1 = $skripsi["date_usul"];
        $date2 = date('Y-m-d');
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%a Hari');

        $data = $this->M_data_hasil->find($npm);
        
        $pengajuan = [
            'time' => $interval,
            'time_usul-hasil' => $interval,
            'date' => $date2,
            'date_hasil' => $date2,
            'npm'=> $data["npm"],
            'nama'=> $data["nama"],
            'judul'=> $data["judul"],
            'dospem1'=> $data["dospem1"],
            'dospem2'=> $data["dospem2"],
            'status'=> "SEMINAR HASIL"
        ];
        
        $this->M_data_skripsi->update($npm,$pengajuan);
        
        // $this->M_data_usul->delete($npm);
        
        return redirect()->to(base_url('Dosen/data_pengajuan_hasil'));
    }

    public function tolak_hasil($npm)
    {      
        $this->M_data_hasil->delete($npm);
        return redirect()->to(base_url('Dosen/data_pengajuan_hasil'));
    }

    public function terima_kompre($npm)
    {   
        $skripsi = $this->M_data_skripsi->find($npm);
        $date = $skripsi["date_judul"];
        $date1 = $skripsi["date_hasil"];
        $date2 = date('Y-m-d');
        $datetime = date_create($date);
        $datetime1 = date_create($date1);
        $datetime2 = date_create($date2);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%a Hari');
        $interval_total = date_diff($datetime, $datetime2);
        $interval_total = $interval_total->format('%a Hari');

        $data = $this->M_data_kompre->find($npm);
        
        $pengajuan = [
            'time' => $interval,
            'time_hasil-kompre' => $interval,
            'time_total' => $interval_total,
            'date' => $date2,
            'date_kompre' => $date2,
            'npm'=> $data["npm"],
            'nama'=> $data["nama"],
            'judul'=> $data["judul"],
            'dospem1'=> $data["dospem1"],
            'dospem2'=> $data["dospem2"],
            'status'=> "LULUS"
        ];
        
        $this->M_data_skripsi->update($npm,$pengajuan);
        
        // $this->M_data_usul->delete($npm);
        
        return redirect()->to(base_url('Dosen/data_pengajuan_kompre'));
    }

    public function tolak_kompre($npm)
    {      
        $this->M_data_kompre->delete($npm);
        return redirect()->to(base_url('Dosen/data_pengajuan_kompre'));
    }


    public function data_skripsi()
    {
        $data1 =$this->M_data_skripsi->query("SELECT * FROM data_skripsi where dospem1='".session()->user."' OR dospem2='".session()->user."'")->getResultArray();

        $data = [
            'title' => "Data Skripsi",
            'data' => $data1
        ];
        echo view('layouts/header', $data);
        echo view('layouts/navbar_dosen', $data);
        echo view('r_dosen/data_skripsi', $data);
        echo view('layouts/footer');
    }



    
}
