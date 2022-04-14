<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_kompre extends Model
{
    protected $table = "surat_pengajuan_kompre";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['no_surat','npm','nama','judul','jam','tanggal','sks','dospem1','dospem2','penguji_u','penguji_p','nilai_d1','nilai_d2','nilai_pu','nilai_pp','nilai_d1t','nilai_d2t','nilai_put','nilai_ppt'];}
