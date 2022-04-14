<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat_pengajuan_usul extends Model
{
    protected $table = "surat_pengajuan_usul";
    protected $primaryKey           = 'npm';
    protected $allowedFields        = ['no_surat','npm','nama','dospem1','dospem2','penguji_u','penguji_p','prodi','jurusan','judul','jam','tanggal','nilai_d1','nilai_d2','nilai_pu','nilai_pp','pembahas1','pembahas2','moderator'];
}
