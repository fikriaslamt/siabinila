<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_judul extends Model
{
    protected $table = "surat_pengajuan_judul";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['npm','no_surat','nama','prodi','judul','judul_isi','dapus','alamat', 'ipk', 'sks', 'telepon','dosp1', 'dosp2', 'dosen_pa', 'nip_pa', 'moderator','npm_moderator','koor_seminar','nip_koor_seminar'];
}
