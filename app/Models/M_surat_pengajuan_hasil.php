<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_hasil extends Model
{
    protected $table = "surat_pengajuan_hasil";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['no_surat','npm','nama','judul','tahun'];}
