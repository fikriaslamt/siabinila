<?php

namespace App\Models;

use CodeIgniter\Model;

class M_ujian_kompre extends Model
{
    protected $table = 'data_ujian_kompre';
    protected $primaryKey     = 'npm';
    protected $allowedFields  =  ['npm','nama','judul','dospem1','dospem2','penguji_u','penguji_p','jam','tanggal','nilai_d1','nilai_d2','nilai_pu','nilai_pp','nilai_d1t','nilai_d2t','nilai_put','nilai_ppt'];
}
