<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_kompre extends Model
{
    protected $table = "surat_pengajuan_kompre";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['no_surat','npm','nama','judul','jam','tanggal','dospem1','dospem2','nilai_d1','nilai_d2','nilai_pu', 'pelak11','pelak12','naskah21','naskah22','naskah23'];}
