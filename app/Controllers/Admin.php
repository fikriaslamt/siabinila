<?php

namespace App\Controllers;
use App\Models\M_register;
use App\Models\M_data_pengajuan_judul;
use App\Models\M_data_pengajuan_penguji;
use App\Models\M_surat_pengajuan_judul;
use App\Models\M_surat_pengajuan_usul;
use App\Models\M_surat_pengajuan_hasil;
use App\Models\M_surat_pengajuan_kompre;
use App\Models\M_akun;
use App\Models\M_data_skripsi;
use App\Models\M_seminar_usul;
use App\Models\M_seminar_hasil;
use App\Models\M_ujian_kompre;
use App\Models\M_data_notif;
use App\Models\M_profil_mahasiswa;
use App\Models\M_profil_dosen;

class Admin extends BaseController
{
    protected $M_register;

    public function __construct()
    {
        $this->M_data_pengajuan_judul = new M_data_pengajuan_judul();
        $this->M_surat_pengajuan_judul = new M_surat_pengajuan_judul();
        $this->M_surat_pengajuan_usul = new M_surat_pengajuan_usul();
        $this->M_surat_pengajuan_hasil = new M_surat_pengajuan_hasil();
        $this->M_surat_pengajuan_kompre = new M_surat_pengajuan_kompre();
        $this->M_register = new M_register();
        $this->M_akun = new M_akun();
        $this->M_data_skripsi = new M_data_skripsi();
        $this->M_seminar_usul = new M_seminar_usul();
        $this->M_seminar_hasil = new M_seminar_hasil();
        $this->M_ujian_kompre = new M_ujian_kompre();
        $this->M_data_notif = new M_data_notif();
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
        $pengujii = new M_data_pengajuan_penguji();
        $data_peng_uji = $pengujii->findAll();
        $data_usul = $this->M_surat_pengajuan_usul->findAll();
        $data_hasil = $this->M_surat_pengajuan_hasil->findAll();
        $data_kompre = $this->M_ujian_kompre->findAll();
        $data_skripsi = $this->M_data_skripsi->findAll();

        $data = [
            'title' => "Dashboard", 
            'dat_regist' => $register, 'dat_pejudul' => $data_peng_judul, 'dat_penguji' => $data_peng_uji, 
            'dat_skrip' => $data_skripsi, 
            'dat_usul' => $data_usul, 'dat_hasil' => $data_hasil, 'dat_kompre' => $data_kompre,
            'mhs' => $data_mhs, 'dosen' => $data_dosen, 
            'mhs_pria' => $mhs_pria, 'mhs_wanita' => $mhs_wanita, 'chart' => "aktif"
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
        $data = ['title' => "Data Mahasiswa",'data' => $data1, 'tabel' => "aktif"];

        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/v_data_mahasiswa',$data);
        echo view('layouts/admin_footer');
    }

    public function data_dosen()
    {   
        $skrip = $this->M_data_skripsi->findAll();
        $data1 = $this->M_profil_dosen->findAll();

        $data = [
            'title' => "Data Dosen", 'data' => $data1, 'skrip' => $skrip,
            'tabel' => "aktif"
        ];
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

    public function data_pengajuan_seminar()
    {   
        $penguji = new M_data_pengajuan_penguji();
        $pengajuan_p = $penguji->findAll();

        $data1 = $this->M_seminar_usul->findAll();
        $data2 = $this->M_seminar_hasil->findAll();

        $data = [
            'title' => "Data Pengajuan Seminar",
            'data1' => $data1, 'data2' => $data2, 'pengajuan_p' => $pengajuan_p,
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/request_seminar', $data);
        echo view('layouts/admin_footer');
    }
    public function pilih_penguji($npm)
    {  
        $skripsi = $this->M_data_skripsi->find($npm);
        $dosen =$this->M_profil_dosen->findAll();

        $data = [
            'title' => "Konfirmasi Penguji Seminar",
            'skrip' => $skripsi, 'dosen' => $dosen
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar');
        echo view('r_admin/request_penguji');
        echo view('layouts/admin_footer');
    }

    public function data_pengajuan_kompre()
    {
        $data1 = $this->M_ujian_kompre->findAll();

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
        if($this->request->getVar('dospem1') == $this->request->getVar('dospem2')){
            session()->setFlashdata('error', "Dosen Pembimbing 1 dan 2 Tidak Boleh Sama");
            return redirect()->to(base_url('Admin/konfirmasi_terima_judul/'.$npm));
        }
        
        $pengajuan = $this->M_data_pengajuan_judul->find($npm);
        if($this->request->getVar('judul') == $pengajuan["judul1"]){
            $p_isi = $pengajuan["judul1_isi"];
            $p_dapus = $pengajuan["dapus1"];
        } else { $p_isi = $pengajuan["judul2_isi"]; $p_dapus = $pengajuan["dapus2"];}

        $p_npm = $pengajuan['npm'];
        $p_nama = $pengajuan['nama'];
        $p_dosp1 = $this->request->getVar('dospem1');
        $p_dosp2 = $this->request->getVar('dospem2');
        $date = date('Y-m-d') ;

        $this->M_surat_pengajuan_judul->save([
            'npm' => $npm,
            'judul' => $this->request->getVar('judul'),
            'judul_isi' => $p_isi,
            'dosp1' => $p_dosp1,
            'dosp2' => $p_dosp2,
            'dapus' => $p_dapus
        ]); 

        $this->M_data_skripsi->insert([
            'npm' => $p_npm,
            'nama' => $p_nama,
            'judul' => $this->request->getVar('judul'),
            'dospem1' => $p_dosp1,
            'dospem2' => $p_dosp2,
            'date' => $date,
            'date_judul' => $date,
            'konsen' => $pengajuan['konsen'],
            // 'penguji_u' => $this->request->getVar('penguji_u'),
            // 'penguji_p' => implode("; ", $this->request->getVar('penguji_p')),
            'status' => "Judul Disetujui"
        ]);
        $this->M_data_pengajuan_judul->delete($npm);

        
        return redirect()->to(base_url('Admin/data_pengajuan_judul'));
    }

    public function tolak_judul($npm)
    {      
        $this->M_data_pengajuan_judul->delete($npm);
        $this->M_surat_pengajuan_judul->delete($npm);
        $this->M_data_notif->insert([
            'untuk' => $npm,
            'oleh' => "Jurusan",
            'subjek' => "Pengajuan Judul Skripsi",
            'isi_pesan' => $this->request->getVar('isi_pesan'),
        ]);
        return redirect()->to(base_url('Admin/data_pengajuan_judul'));
    }

    public function tambah_penguji($npm)
    {      
        $this->M_data_skripsi->update($npm,[
            'penguji_u' => $this->request->getVar('penguji_u'),
            'penguji_p' => $this->request->getVar('penguji_p')
        ]);

        $penguji = new M_data_pengajuan_penguji();
        $pengajuan_p = $penguji->delete($npm);

        return redirect()->to(base_url('Admin/data_pengajuan_seminar'));
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

        $data = $this->M_seminar_usul->find($npm);
        
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
        
        // $this->M_seminar_usul->delete($npm);
        
        return redirect()->to(base_url('Admin/data_pengajuan_usul'));
    }

    public function tolak_usul($npm)
    {      
        $this->M_seminar_usul->delete($npm);
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

        $data = $this->M_seminar_hasil->find($npm);
        
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
        
        // $this->M_seminar_usul->delete($npm);
        
        return redirect()->to(base_url('Admin/data_pengajuan_hasil'));
    }

    public function tolak_hasil($npm)
    {      
        $this->M_seminar_hasil->delete($npm);
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

        $data = $this->M_ujian_kompre->find($npm);
        
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
        // $this->M_seminar_usul->delete($npm);
        
        return redirect()->to(base_url('Admin/data_pengajuan_kompre'));
    }

    public function tolak_kompre($npm)
    {      
        $this->M_ujian_kompre->delete($npm);
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
            'user' => trim($this->request->getVar('user')),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'nama' => trim($this->request->getVar('nama')),
            'role' => "dosen",
        ]);

        $this->M_profil_dosen->insert([
            'nip' => trim($this->request->getVar('nip')),
            'nama' => trim($this->request->getVar('nama')),
            'grup' => $this->request->getVar('grup'),
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
            'angkatan' => "20".substr($akun["user"],0,2),//hanya berlaku sampa 2099
            'status' => "Mahasiswa",
            'email' => $akun["email"],
            'no_hp' => $akun["no_hp"],
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
        echo view('r_admin/data_skripsi_detail',$data);
        echo view('layouts/admin_footer');    
    }

    public function delete_akun_D($user)
    {
        $this->M_akun->delete($user);
        $this->M_profil_dosen->delete($user);

        session()->setFlashdata('pesan', "Akun Dosen Berhasil Dihapus");
        return redirect()->to(base_url('Admin/data_dosen'));
    }

    public function data_surat_judul()
    {
        $data1 = $this->M_surat_pengajuan_judul->findAll();

        $data = [
            'title' => "Data surat judul",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/data_surat_judul', $data);
        echo view('layouts/admin_footer');
    }

    public function data_surat_usul()
    {
        $data1 = $this->M_surat_pengajuan_usul->findAll();

        $data = [
            'title' => "Data surat usul",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/data_surat_usul', $data);
        echo view('layouts/admin_footer');
    }

    public function data_surat_hasil()
    {
        $data1 = $this->M_surat_pengajuan_hasil->findAll();

        $data = [
            'title' => "Data surat hasil",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/data_surat_hasil', $data);
        echo view('layouts/admin_footer');
    }

        public function data_surat_kompre()
    {
        $data1 = $this->M_surat_pengajuan_kompre->findAll();

        $data = [
            'title' => "Data surat kompre",
            'data' => $data1
        ];
        echo view('layouts/admin_header', $data);
        echo view('layouts/admin_navbar', $data);
        echo view('r_admin/data_surat_kompre', $data);
        echo view('layouts/admin_footer');
    }
    


}