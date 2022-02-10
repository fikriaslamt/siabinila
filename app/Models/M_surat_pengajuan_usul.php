<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_usul extends Model
{
    protected $table = "surat_pengajuan_usul";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['no_surat','npm','nama','prodi','jurusan','judul','tahun'];
}
