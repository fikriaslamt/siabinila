<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_judul extends Model
{
    protected $table = "surat_pengajuan_judul";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['npm','nama','prodi','judul1','judul2','moderator','npm_moderator','koor_seminar','nip_koor_seminar'];
}
