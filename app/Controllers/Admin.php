<?php

namespace App\Controllers;
use App\Models\M_register;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_akun;
use App\Models\M_data_skripsi;
use App\Models\M_data_usul;
use App\Models\M_data_hasil;
use App\Models\M_data_kompre;
use App\Models\M_profil_mahasiswa;
use App\Models\M_profil_dosen;

class Admin extends BaseController
{
    protected $M_register;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_register = new M_register();
        $this->M_akun = new M_akun();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_data_usul = new M_data_usul();
        $this->M_data_hasil = new M_data_hasil();
        $this->M_data_kompre = new M_data_kompre();
        $this->M_profil_mahasiswa = new M_profil_mahasiswa();
        $this->M_profil_dosen = new M_profil_dosen();
    }

    public function index()
    {
        $data_dosen = $this->M_profil_dosen->findAll();
        $data_mhs = $this->M_profil_mahasiswa->findAll();
        $mhs_pria = $this->M_profil_mahasiswa->query("SELECT * FROM `profil_mahasiswa` WHERE jenis_kelamin = 'Laki-laki'")->getResultArray();
        $mhs_wanita = $this->M_profil_mahasiswa->query("SELECT * FROM `profil_mahasiswa` WHERE jenis_kelamin = 'Perempuan'")->getResultArray();
        
        $register = $this->M_register->findAll();
        $data_peng_judul = $this->M_data_pengajuan_judul->findAll();
        $data_usul = $this->M_data_usul->findAll();
        $data_hasil = $this->M_data_hasil->findAll();
        $data_kompre = $this->M_data_kompre->findAll();
        $data_skripsi = $this->M_data_skripsi->findAll();

        $data = [
            'title' => "Dashboard", 
            'dat_regist' => $register, 'dat_pejudul' => $data_peng_judul, 'dat_skrip' => $data_skripsi, 
            'dat_usul' => $data_usul, 'dat_hasil' => $data_hasil, 'dat_kompre' => $data_kompre,
            'mhs' => $data_mhs, 'dosen' => $data_dosen, 
            'mhs_pria' => $mhs_pria, 'mhs_wanita' => $mhs_wanita,
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_admin',$data);
        echo view('layouts/admin_footer');
    }

    public function data_lulusan()
    {
        $data1 = $this->M_data_skripsi->query("SELECT * FROM `data_skripsi` WHERE status = 'LULUS'")->getResultArray();
        
        $data = [
            'title' => "Data Akun",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/data_lulusan',$data);
        echo view('layouts/admin_footer');
    }

    public function data_mahasiswa()
    {
        $data1 = $this->M_profil_mahasiswa->findAll();
        $data = ['title' => "Data Mahasiswa",'data' => $data1];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_data_mahasiswa',$data);
        echo view('layouts/admin_footer');
    }

    public function data_dosen()
    {
        $data1 = $this->M_profil_dosen->findAll();
        $data = ['title' => "Data Dosen", 'data' => $data1];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_data_dosen',$data);
        echo view('layouts/admin_footer');
    }

    public function request_akun()
    {
        $data1 = $this->M_register->findAll();
        

        $data = [
            'title' => "Data Request Akun",
            'data' => $data1
        ];
        
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_request_akun',$data);
        echo view('layouts/admin_footer');
    }

    public function data_pengajuan_judul()
    {
        $data1 = $this->M_data_pengajuan_judul->findAll();

        $data = [
            'title' => "Data Pengajuan Judul",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_judul', $data);
        echo view('layouts/admin_footer');
    }

    public function data_pengajuan_usul()
    {
        $data1 = $this->M_data_usul->findAll();

        $data = [
            'title' => "Data Pengajuan Seminar Usul",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_usul', $data);
        echo view('layouts/admin_footer');
    }

    public function data_pengajuan_hasil()
    {
        $data1 = $this->M_data_hasil->findAll();

        $data = [
            'title' => "Data Pengajuan Seminar Hasil",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_hasil', $data);
        echo view('layouts/admin_footer');
    }

    public function data_pengajuan_kompre()
    {
        $data1 = $this->M_data_kompre->findAll();

        $data = [
            'title' => "Data Pengajuan Ujian Skripsi",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_kompre', $data);
        echo view('layouts/admin_footer');
    }

    public function konfirmasi_terima_judul($npm)
    {
        $data_skrip = $this->M_data_pengajuan_judul->find($npm);
        $Dosen =$this->M_profil_dosen->findAll();
        $data = ['title' => "Data Mahasiswa",'data' => $data_skrip, 'dosen' => $Dosen, 'judul' => $this->request->getVar('judul')];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_judul_konfir',$data);
        echo view('layouts/admin_footer');    
    }
    public function terima_judul($npm)
    {   
        // $judul =$this->M_data_pengajuan_judul->query("SELECT judul1 FROM data_pengajuan_judul where npm='".$npm."'")->getResult();
        $pengajuan = $this->M_data_pengajuan_judul->find($npm);
        $p_npm = $pengajuan['npm'];
        $p_nama = $pengajuan['nama'];
        $p_dosp1 = $pengajuan['dospem1'];
        $p_dosp2 = $pengajuan['dospem2'];
        $date = date('Y-m-d') ;

        $this->M_data_skripsi->insert([
            'npm' => $p_npm,
            'nama' => $p_nama,
            'judul' => $this->request->getVar('judul'),
            'dospem1' => $p_dosp1,
            'dospem2' => $p_dosp2,
            'date' => $date,
            'date_judul' => $date,
            'status' => "TELAH MENGAJUKAN JUDUL"
        ]);
        $this->M_data_pengajuan_judul->delete($npm);
        
        return redirect()->to(base_url('Admin/data_pengajuan_judul'));
    }

    public function tolak_judul($npm)
    {      
        $this->M_data_pengajuan_judul->delete($npm);
        return redirect()->to(base_url('Admin/data_pengajuan_judul'));
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
            'time_judul_usul' => $interval,
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
        
        return redirect()->to(base_url('Admin/data_pengajuan_usul'));
    }

    public function tolak_usul($npm)
    {      
        $this->M_data_usul->delete($npm);
        return redirect()->to(base_url('Admin/data_pengajuan_usul'));
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
            'time_usul_hasil' => $interval,
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
        
        return redirect()->to(base_url('Admin/data_pengajuan_hasil'));
    }

    public function tolak_hasil($npm)
    {      
        $this->M_data_hasil->delete($npm);
        return redirect()->to(base_url('Admin/data_pengajuan_hasil'));
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
            'time_hasil_kompre' => $interval,
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
        
        return redirect()->to(base_url('Admin/data_pengajuan_kompre'));
    }

    public function tolak_kompre($npm)
    {      
        $this->M_data_kompre->delete($npm);
        return redirect()->to(base_url('Admin/data_pengajuan_kompre'));
    }


    public function data_skripsi()
    {
        $data1 =$this->M_data_skripsi->findAll();

        $data = [
            'title' => "Data Skripsi",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/data_skripsi', $data);
        echo view('layouts/admin_footer');
    }

    public function form_add_akun_dosen()
    {
        $data = [
            'title' => 'Tambah Akun Dosen'
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/form_tambah_akun_dosen');
        echo view('layouts/admin_footer');
    }
    public function add_akun_dosen()
    {
        $this->M_akun->insert([
            'user' => $this->request->getVar('user'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'nama' => $this->request->getVar('nama'),
            'role' => "dosen",
        ]);

        $this->M_profil_dosen->insert([
            'nip' => $this->request->getVar('nip'),
            'nama' => $this->request->getVar('nama'),
            'foto' => "profil.jpg",
        ]);
        session()->setFlashdata('error', "Akun dosen berhasil dibuat");
        return redirect()->to(base_url('Admin/form_Add_akun_dosen'));
    }


    public function tambah_akun($user)
    {  
        $akun = $this->M_register->find($user);

        
        $this->M_akun->insert([
            'user' => $akun["user"],
            'password' => $akun["password"],
            'nama' => $akun["nama"],
            'role' => "mahasiswa"
        ]);
        $this->M_profil_mahasiswa->insert([
            'npm' => $akun["user"],
            'nama' => $akun["nama"],
            'prodi' => "Administrasi Bisnis",
            'jenis_kelamin' => $akun["jenis_kelamin"],
            'angkatan' => "20".substr($akun["user"],0,2),
            'status' => "Mahasiswa",
            'foto' => "default/foto_default.png",
        ]);
        $this->M_register->delete($user);
        
        session()->setFlashdata('pesan', "Akun Mahasiswa Telah Diterima dan Dibuat");
        return redirect()->to(base_url('Admin/request_akun'));
    }

    public function delete_akun_M($user)
    {
        $this->M_akun->delete($user);
        $this->M_profil_mahasiswa->delete($user);
        
        session()->setFlashdata('pesan', "Akun Mahasiswa Berhasil Dihapus");
        return redirect()->to(base_url('Admin/data_mahasiswa'));
    }

    public function detail_skripsi($npm)
    {
        $data1 = $this->M_data_skripsi->find($npm);
        $data = [
            'title' => "Detail",
            'data' => $data1

        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_detail_skripsi',$data);
        echo view('layouts/admin_footer');    
    }

    public function delete_akun_D($user)
    {
        $this->M_akun->delete($user);
        $this->M_profil_dosen->delete($user);

        session()->setFlashdata('pesan', "Akun Dosen Berhasil Dihapus");
        return redirect()->to(base_url('Admin/data_dosen'));
    }

}