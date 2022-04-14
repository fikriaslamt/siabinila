<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_hasil extends Model
{
    protected $table = "surat_pengajuan_hasil";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['no_surat','npm','nama','judul','dospem1','dospem2','penguji_u','penguji_p','jam','tanggal','nilai_d1','nilai_d2','nilai_pu','nilai_pp','pembahas1','pembahas2','moderator'];}
