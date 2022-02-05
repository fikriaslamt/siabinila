<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_kompre extends Model
{
    protected $table = "surat_pengajuan_kompre";
    protected $primaryKey           = 'no_surat';
    protected $allowedFields        = ['no_surat','npm','nama','judul'];}
